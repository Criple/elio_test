<?php declare(strict_types=1);

namespace DockwareSamplePlugin\Extension\Content\Product;

use Shopware\Core\Content\Product\ProductDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityExtension;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToManyAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class DockwareSampleExtension extends EntityExtension
{
    public function extendFields(FieldCollection $collection): void
    {
        $collection->add(
            new OneToManyAssociationField('fastOrderItems', DockwareSampleDefinition::class, 'product_id')
        );
    }

    public function getDefinitionClass(): string
    {
        return ProductDefinition::class;
    }
}