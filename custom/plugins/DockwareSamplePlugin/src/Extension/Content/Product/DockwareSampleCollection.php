<?php declare(strict_types=1);

namespace DockwareSamplePlugin\Extension\Content\Product;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void               add(DockwareSampleEntity $entity)
 * @method void               set(string $key, DockwareSampleEntity $entity)
 * @method DockwareSampleEntity[]    getIterator()
 * @method DockwareSampleEntity[]    getElements()
 * @method DockwareSampleEntity|null get(string $key)
 * @method DockwareSampleEntity|null first()
 * @method DockwareSampleEntity|null last()
 */
class DockwareSampleCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return DockwareSampleEntity::class;
    }
}