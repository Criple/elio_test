<?php declare(strict_types=1);

namespace Shopware\Core\Framework\Test\Api\ApiVersioning\fixtures\Entities\v4;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\BoolField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\ApiAware;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Deprecated;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FloatField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\LongTextField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToManyAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslatedField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslationsAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\Framework\Test\Api\ApiVersioning\fixtures\Entities\v4\Aggregate\BundlePrice\BundlePriceDefinition;
use Shopware\Core\Framework\Test\Api\ApiVersioning\fixtures\Entities\v4\Aggregate\BundleTanslation\BundleTranslationDefinition;

class BundleDefinition extends EntityDefinition
{
    public function getEntityName(): string
    {
        return '_test_bundle';
    }

    public function getEntityClass(): string
    {
        return BundleEntity::class;
    }

    public function getCollectionClass(): string
    {
        return BundleCollection::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new ApiAware(), new Required(), new PrimaryKey()),
            (new TranslatedField('name'))->addFlags(new ApiAware()),
            (new TranslatedField('translatedDescription'))->addFlags(new ApiAware()),
            (new LongTextField('description', 'description'))->addFlags(new ApiAware(), new Deprecated('v2', 'v3', 'translatedDescription')),
            (new BoolField('is_absolute', 'isAbsolute'))->addFlags(new ApiAware(), new Required()),
            (new FloatField('discount', 'discount'))->addFlags(new ApiAware(), new Required()),
            (new FloatField('pseudo_price', 'pseudoPrice'))->addFlags(new ApiAware(), new Deprecated('v3', 'v4', 'prices.pseudoPrice')),
            (new TranslationsAssociationField(BundleTranslationDefinition::class, '_test_bundle_id'))->addFlags(new ApiAware()),
            (new OneToManyAssociationField('prices', BundlePriceDefinition::class, 'bundle_id'))->addFlags(new ApiAware()),
        ]);
    }
}
