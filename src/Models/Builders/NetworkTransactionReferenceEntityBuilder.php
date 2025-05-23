<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\NetworkTransactionReferenceEntity;

/**
 * Builder for model NetworkTransactionReferenceEntity
 *
 * @see NetworkTransactionReferenceEntity
 */
class NetworkTransactionReferenceEntityBuilder
{
    /**
     * @var NetworkTransactionReferenceEntity
     */
    private $instance;

    private function __construct(NetworkTransactionReferenceEntity $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Network Transaction Reference Entity Builder object.
     *
     * @param string $id
     */
    public static function init(string $id): self
    {
        return new self(new NetworkTransactionReferenceEntity($id));
    }

    /**
     * Sets date field.
     *
     * @param string|null $value
     */
    public function date(?string $value): self
    {
        $this->instance->setDate($value);
        return $this;
    }

    /**
     * Sets network field.
     *
     * @param string|null $value
     */
    public function network(?string $value): self
    {
        $this->instance->setNetwork($value);
        return $this;
    }

    /**
     * Sets time field.
     *
     * @param string|null $value
     */
    public function time(?string $value): self
    {
        $this->instance->setTime($value);
        return $this;
    }

    /**
     * Initializes a new Network Transaction Reference Entity object.
     */
    public function build(): NetworkTransactionReferenceEntity
    {
        return CoreHelper::clone($this->instance);
    }
}
