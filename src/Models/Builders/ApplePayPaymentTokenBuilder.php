<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\ApplePayCard;
use PayPalRESTAPIsLib\Models\ApplePayPaymentToken;

/**
 * Builder for model ApplePayPaymentToken
 *
 * @see ApplePayPaymentToken
 */
class ApplePayPaymentTokenBuilder
{
    /**
     * @var ApplePayPaymentToken
     */
    private $instance;

    private function __construct(ApplePayPaymentToken $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Apple Pay Payment Token Builder object.
     */
    public static function init(): self
    {
        return new self(new ApplePayPaymentToken());
    }

    /**
     * Sets card field.
     *
     * @param ApplePayCard|null $value
     */
    public function card(?ApplePayCard $value): self
    {
        $this->instance->setCard($value);
        return $this;
    }

    /**
     * Initializes a new Apple Pay Payment Token object.
     */
    public function build(): ApplePayPaymentToken
    {
        return CoreHelper::clone($this->instance);
    }
}
