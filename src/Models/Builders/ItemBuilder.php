<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\Item;
use PayPalRESTAPIsLib\Models\Money;
use PayPalRESTAPIsLib\Models\UniversalProductCode;

/**
 * Builder for model Item
 *
 * @see Item
 */
class ItemBuilder
{
    /**
     * @var Item
     */
    private $instance;

    private function __construct(Item $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Item Builder object.
     *
     * @param string $name
     * @param Money $unitAmount
     * @param string $quantity
     */
    public static function init(string $name, Money $unitAmount, string $quantity): self
    {
        return new self(new Item($name, $unitAmount, $quantity));
    }

    /**
     * Sets tax field.
     *
     * @param Money|null $value
     */
    public function tax(?Money $value): self
    {
        $this->instance->setTax($value);
        return $this;
    }

    /**
     * Sets description field.
     *
     * @param string|null $value
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets sku field.
     *
     * @param string|null $value
     */
    public function sku(?string $value): self
    {
        $this->instance->setSku($value);
        return $this;
    }

    /**
     * Sets url field.
     *
     * @param string|null $value
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
        return $this;
    }

    /**
     * Sets category field.
     *
     * @param string|null $value
     */
    public function category(?string $value): self
    {
        $this->instance->setCategory($value);
        return $this;
    }

    /**
     * Sets image url field.
     *
     * @param string|null $value
     */
    public function imageUrl(?string $value): self
    {
        $this->instance->setImageUrl($value);
        return $this;
    }

    /**
     * Sets upc field.
     *
     * @param UniversalProductCode|null $value
     */
    public function upc(?UniversalProductCode $value): self
    {
        $this->instance->setUpc($value);
        return $this;
    }

    /**
     * Initializes a new Item object.
     */
    public function build(): Item
    {
        return CoreHelper::clone($this->instance);
    }
}
