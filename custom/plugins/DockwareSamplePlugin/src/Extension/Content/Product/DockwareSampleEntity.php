<?php declare(strict_types=1);

namespace DockwareSamplePlugin\Extension\Content\Product;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class DockwareSampleEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var int|null
     */
    protected $quantity;


    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

}