<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\NetworkTransactionReference;

/**
 * Builder for model NetworkTransactionReference
 *
 * @see NetworkTransactionReference
 */
class NetworkTransactionReferenceBuilder
{
    /**
     * @var NetworkTransactionReference
     */
    private $instance;

    private function __construct(NetworkTransactionReference $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Network Transaction Reference Builder object.
     *
     * @param string $id
     */
    public static function init(string $id): self
    {
        return new self(new NetworkTransactionReference($id));
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
     * Sets acquirer reference number field.
     *
     * @param string|null $value
     */
    public function acquirerReferenceNumber(?string $value): self
    {
        $this->instance->setAcquirerReferenceNumber($value);
        return $this;
    }

    /**
     * Initializes a new Network Transaction Reference object.
     */
    public function build(): NetworkTransactionReference
    {
        return CoreHelper::clone($this->instance);
    }
}
