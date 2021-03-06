<?php declare(strict_types=1);

namespace Shopware\Storefront\Test;

use Doctrine\DBAL\Connection;
use PHPUnit\Framework\TestCase;
use Shopware\Core\Content\Product\SearchKeyword\ProductSearchTermInterpreter;
use Shopware\Core\Content\Product\SearchKeyword\ProductSearchTermInterpreterInterface;
use Shopware\Core\Defaults;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Term\SearchTerm;
use Shopware\Core\Framework\Feature;
use Shopware\Core\Framework\Test\TestCaseBase\IntegrationTestBehaviour;
use Shopware\Core\Framework\Uuid\Uuid;

class KeywordSearchTermInterpreterTest extends TestCase
{
    use IntegrationTestBehaviour;

    /**
     * @var Connection
     */
    private $connection;

    /**
     * @var ProductSearchTermInterpreterInterface
     */
    private $interpreter;

    protected function setUp(): void
    {
        $this->connection = $this->getContainer()->get(Connection::class);
        $this->interpreter = $this->getContainer()->get(ProductSearchTermInterpreter::class);
        $this->setupKeywords();
    }

    /**
     * @dataProvider cases
     */
    public function testMatching(string $term, array $expected): void
    {
        Feature::skipTestIfActive('FEATURE_NEXT_10552', $this);
        $context = Context::createDefaultContext();

        $matches = $this->interpreter->interpret($term, $context);

        $keywords = array_map(function (SearchTerm $term) {
            return $term->getTerm();
        }, $matches->getTerms());

        sort($expected);
        sort($keywords);
        static::assertEquals($expected, $keywords);
    }

    /**
     * @dataProvider casesWithTokenFilter
     */
    public function testMatchingWithTokenFilter(string $term, array $expected): void
    {
        Feature::skipTestIfInActive('FEATURE_NEXT_10552', $this);
        $context = Context::createDefaultContext();

        $matches = $this->interpreter->interpret($term, $context);

        $keywords = array_map(function (SearchTerm $term) {
            return $term->getTerm();
        }, $matches->getTerms());

        sort($expected);
        sort($keywords);
        static::assertEquals($expected, $keywords);
    }

    public function cases(): array
    {
        return [
            [
                'zeichn',
                ['zeichnet', 'zeichen', 'zweichnet'],
            ],
            [
                'zeichent',
                ['ausgezeichnet', 'gezeichnet', 'zeichnet'],
            ],
            [
                'B??ronetz',
                ['b??ronetzwerk'],
            ],
            [
                '1000',
                ['10000', '10001', '10002', '10007'],
            ],
            [
                '1',
                ['1', '10000', '10001', '10002', '10007'],
            ],
        ];
    }

    public function casesWithTokenFilter(): array
    {
        return [
            [
                'zeichn',
                ['zeichnet', 'zeichen', 'zweichnet'],
            ],
            [
                'zeichent',
                ['ausgezeichnet', 'gezeichnet', 'zeichnet'],
            ],
            [
                'B??ronetz',
                ['b??ronetzwerk'],
            ],
            [
                '1000',
                ['10000', '10001', '10002', '10007'],
            ],
            [
                '1',
                [],
            ],
            [
                'between against in on',
                [],
            ],
            [
                'between against on in coffee bike',
                ['betweencoffee', 'betweenbike'],
            ],
        ];
    }

    private function setupKeywords(): void
    {
        $keywords = [
            'zeichnet',
            'zweichnet',
            'ausgezeichnet',
            'verkehrzeichennetzwerk',
            'gezeichnet',
            'zeichen',
            'zweideutige',
            'zweier',
            'zweite',
            'zweiteilig',
            'zweiten',
            'zweites',
            'zweiweg',
            'zweifellos',
            'b??ronetzwerk',
            'heimnetzwerk',
            'netzwerk',
            'netzwerkadapter',
            'netzwerkbuchse',
            'netzwerkcontroller',
            'netzwerkdrucker',
            'netzwerke',
            'netzwerken',
            'netzwerkinfrastruktur',
            'netzwerkkabel',
            'netzwerkkabels',
            'netzwerkkarte',
            'netzwerkl??sung',
            'netzwerkschnittstelle',
            'netzwerkschnittstellen',
            'netzwerkspeicher',
            'netzwerkspeicherl??sung',
            'netzwerkspieler',
            'schwarzwei??',
            'netzwerkprotokolle',
            '10000',
            '10001',
            '10002',
            '10007',
            '1',
            '2',
            '3',
        ];

        if (Feature::isActive('FEATURE_NEXT_10552')) {
            $keywords = array_merge($keywords, [
                'between',
                'against',
                'betweencoffee',
                'betweenbike',
            ]);
        }

        $languageId = Uuid::fromHexToBytes(Defaults::LANGUAGE_SYSTEM);

        foreach ($keywords as $keyword) {
            preg_match_all('/./us', $keyword, $ar);

            $this->connection->insert('product_keyword_dictionary', [
                'id' => Uuid::randomBytes(),
                'keyword' => $keyword,
                'language_id' => $languageId,
            ]);
        }
    }
}
