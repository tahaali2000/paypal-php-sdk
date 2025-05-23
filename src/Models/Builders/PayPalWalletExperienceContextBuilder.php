<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\PayPalWalletExperienceContext;

/**
 * Builder for model PayPalWalletExperienceContext
 *
 * @see PayPalWalletExperienceContext
 */
class PayPalWalletExperienceContextBuilder
{
    /**
     * @var PayPalWalletExperienceContext
     */
    private $instance;

    private function __construct(PayPalWalletExperienceContext $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Pay Pal Wallet Experience Context Builder object.
     */
    public static function init(): self
    {
        return new self(new PayPalWalletExperienceContext());
    }

    /**
     * Sets brand name field.
     *
     * @param string|null $value
     */
    public function brandName(?string $value): self
    {
        $this->instance->setBrandName($value);
        return $this;
    }

    /**
     * Sets locale field.
     *
     * @param string|null $value
     */
    public function locale(?string $value): self
    {
        $this->instance->setLocale($value);
        return $this;
    }

    /**
     * Sets shipping preference field.
     *
     * @param string|null $value
     */
    public function shippingPreference(?string $value): self
    {
        $this->instance->setShippingPreference($value);
        return $this;
    }

    /**
     * Sets return url field.
     *
     * @param string|null $value
     */
    public function returnUrl(?string $value): self
    {
        $this->instance->setReturnUrl($value);
        return $this;
    }

    /**
     * Sets cancel url field.
     *
     * @param string|null $value
     */
    public function cancelUrl(?string $value): self
    {
        $this->instance->setCancelUrl($value);
        return $this;
    }

    /**
     * Sets landing page field.
     *
     * @param string|null $value
     */
    public function landingPage(?string $value): self
    {
        $this->instance->setLandingPage($value);
        return $this;
    }

    /**
     * Sets user action field.
     *
     * @param string|null $value
     */
    public function userAction(?string $value): self
    {
        $this->instance->setUserAction($value);
        return $this;
    }

    /**
     * Sets payment method preference field.
     *
     * @param string|null $value
     */
    public function paymentMethodPreference(?string $value): self
    {
        $this->instance->setPaymentMethodPreference($value);
        return $this;
    }

    /**
     * Initializes a new Pay Pal Wallet Experience Context object.
     */
    public function build(): PayPalWalletExperienceContext
    {
        return CoreHelper::clone($this->instance);
    }
}
