<?php declare(strict_types=1);

namespace Shopware\Core\Content\Product\SearchKeyword;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\FetchMode;
use Psr\Log\LoggerInterface;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\Dbal\QueryBuilder;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Term\Filter\AbstractTokenFilter;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Term\SearchPattern;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Term\SearchTerm;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Term\TokenizerInterface;
use Shopware\Core\Framework\Feature;
use Shopware\Core\Framework\Uuid\Uuid;

class ProductSearchTermInterpreter implements ProductSearchTermInterpreterInterface
{
    /**
     * @var Connection
     */
    private $connection;

    /**
     * @var TokenizerInterface
     */
    private $tokenizer;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var AbstractTokenFilter|null
     */
    private $tokenFilter;

    public function __construct(
        Connection $connection,
        TokenizerInterface $tokenizer,
        LoggerInterface $logger,
        ?AbstractTokenFilter $tokenFilter = null
    ) {
        $this->connection = $connection;
        $this->tokenizer = $tokenizer;
        $this->logger = $logger;
        $this->tokenFilter = $tokenFilter;
    }

    public function interpret(string $word, Context $context): SearchPattern
    {
        $tokens = $this->tokenizer->tokenize($word);

        if (Feature::isActive('FEATURE_NEXT_10552') && $this->tokenFilter) {
            $tokens = $this->tokenFilter->filter($tokens, $context);
        }

        $slops = $this->slop($tokens);

        if (empty($slops['normal'])) {
            return new SearchPattern(new SearchTerm($word));
        }

        $matches = $this->fetchKeywords($context, $slops);

        $combines = $this->permute($tokens);
        foreach ($combines as $token) {
            $tokens[] = $token;
        }
        $tokens = array_keys(array_flip($tokens));

        $scoring = $this->score($tokens, $matches);

        $scoring = \array_slice($scoring, 0, 8, true);

        foreach ($scoring as $keyword => $score) {
            $this->logger->info('Search match: ' . $keyword . ' with score ' . (float) $score);
        }

        $pattern = new SearchPattern(new SearchTerm($word));

        foreach ($scoring as $keyword => $score) {
            $pattern->addTerm(new SearchTerm((string) $keyword, $score));
        }

        return $pattern;
    }

    private function permute(array $tokens): array
    {
        $combinations = [];
        foreach ($tokens as $token) {
            foreach ($tokens as $combine) {
                if ($combine === $token) {
                    continue;
                }
                $combinations[] = $token . ' ' . $combine;
            }
        }

        return $combinations;
    }

    private function slop(array $tokens): array
    {
        $slops = [
            'normal' => [],
            'reversed' => [],
        ];

        foreach ($tokens as $token) {
            $token = (string) $token;
            $slopSize = mb_strlen($token) > 4 ? 2 : 1;
            $length = mb_strlen($token);

            if (mb_strlen($token) <= 2) {
                $slops['normal'][] = $token . '%';
                $slops['reversed'][] = $token . '%';

                continue;
            }

            $steps = 2;
            for ($i = 1; $i <= $length - 2; $i += $steps) {
                for ($i2 = 1; $i2 <= $slopSize; ++$i2) {
                    $placeholder = '';
                    for ($i3 = 1; $i3 <= $slopSize + 1; ++$i3) {
                        $slops['normal'][] = mb_substr($token, 0, $i) . $placeholder . mb_substr($token, $i + $i2) . '%';
                        $placeholder .= '_';
                    }
                }
            }

            $token = strrev($token);
            for ($i = 1; $i <= $length - 2; $i += $steps) {
                for ($i2 = 1; $i2 <= $slopSize; ++$i2) {
                    $placeholder = '';
                    for ($i3 = 1; $i3 <= $slopSize + 1; ++$i3) {
                        $slops['reversed'][] = mb_substr($token, 0, $i) . $placeholder . mb_substr($token, $i + $i2) . '%';
                        $placeholder .= '_';
                    }
                }
            }
        }

        return $slops;
    }

    private function fetchKeywords(Context $context, array $slops): array
    {
        $query = new QueryBuilder($this->connection);
        $query->select('keyword');
        $query->from('product_keyword_dictionary');

        $query->setTitle('search::detect-keywords');

        $counter = 0;
        $wheres = [];
        foreach ($slops['normal'] as $slop) {
            ++$counter;
            $wheres[] = 'keyword LIKE :reg' . $counter;
            $query->setParameter('reg' . $counter, $slop);
        }
        foreach ($slops['reversed'] as $slop) {
            ++$counter;
            $wheres[] = 'reversed LIKE :reg' . $counter;
            $query->setParameter('reg' . $counter, $slop);
        }

        $query->andWhere('language_id = :language');
        $query->andWhere('(' . implode(' OR ', $wheres) . ')');

        $query->setParameter('language', Uuid::fromHexToBytes($context->getLanguageId()));

        return $query->execute()->fetchAll(FetchMode::COLUMN);
    }

    private function score(array $tokens, array $matches): array
    {
        $scoring = [];
        foreach ($matches as $match) {
            $score = 1;

            $matchSegments = $this->tokenizer->tokenize($match);

            if (\count($matchSegments) > 1) {
                $score += \count($matchSegments) * 4;
            }

            foreach ($tokens as $token) {
                $levenshtein = levenshtein($match, (string) $token);
                if ($levenshtein === 0) {
                    $score += 6;

                    continue;
                }

                if ($levenshtein <= 2) {
                    $score += 3;

                    continue;
                }

                if ($levenshtein <= 3) {
                    $score += 2;
                }
            }

            $scoring[$match] = $score / 10;
        }

        uasort($scoring, function ($a, $b) {
            return $b <=> $a;
        });

        return $scoring;
    }
}
