<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\GooglePayDecryptedTokenData;

/**
 * Builder for model GooglePayDecryptedTokenData
 *
 * @see GooglePayDecryptedTokenData
 */
class GooglePayDecryptedTokenDataBuilder
{
    /**
     * @var GooglePayDecryptedTokenData
     */
    private $instance;

    private function __construct(GooglePayDecryptedTokenData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Google Pay Decrypted Token Data Builder object.
     *
     * @param string $paymentMethod
     * @param string $authenticationMethod
     */
    public static function init(string $paymentMethod, string $authenticationMethod): self
    {
        return new self(new GooglePayDecryptedTokenData($paymentMethod, $authenticationMethod));
    }

    /**
     * Sets message id field.
     *
     * @param string|null $value
     */
    public function messageId(?string $value): self
    {
        $this->instance->setMessageId($value);
        return $this;
    }

    /**
     * Sets message expiration field.
     *
     * @param string|null $value
     */
    public function messageExpiration(?string $value): self
    {
        $this->instance->setMessageExpiration($value);
        return $this;
    }

    /**
     * Sets cryptogram field.
     *
     * @param string|null $value
     */
    public function cryptogram(?string $value): self
    {
        $this->instance->setCryptogram($value);
        return $this;
    }

    /**
     * Sets eci indicator field.
     *
     * @param string|null $value
     */
    public function eciIndicator(?string $value): self
    {
        $this->instance->setEciIndicator($value);
        return $this;
    }

    /**
     * Initializes a new Google Pay Decrypted Token Data object.
     */
    public function build(): GooglePayDecryptedTokenData
    {
        return CoreHelper::clone($this->instance);
    }
}
