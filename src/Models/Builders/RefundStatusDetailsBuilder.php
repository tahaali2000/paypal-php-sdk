<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\RefundStatusDetails;

/**
 * Builder for model RefundStatusDetails
 *
 * @see RefundStatusDetails
 */
class RefundStatusDetailsBuilder
{
    /**
     * @var RefundStatusDetails
     */
    private $instance;

    private function __construct(RefundStatusDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Refund Status Details Builder object.
     */
    public static function init(): self
    {
        return new self(new RefundStatusDetails());
    }

    /**
     * Sets reason field.
     *
     * @param string|null $value
     */
    public function reason(?string $value): self
    {
        $this->instance->setReason($value);
        return $this;
    }

    /**
     * Initializes a new Refund Status Details object.
     */
    public function build(): RefundStatusDetails
    {
        return CoreHelper::clone($this->instance);
    }
}
