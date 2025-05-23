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
use PayPalRESTAPIsLib\Models\RefundStatusWithDetails;

/**
 * Builder for model RefundStatusWithDetails
 *
 * @see RefundStatusWithDetails
 */
class RefundStatusWithDetailsBuilder
{
    /**
     * @var RefundStatusWithDetails
     */
    private $instance;

    private function __construct(RefundStatusWithDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Refund Status With Details Builder object.
     */
    public static function init(): self
    {
        return new self(new RefundStatusWithDetails());
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets status details field.
     *
     * @param RefundStatusDetails|null $value
     */
    public function statusDetails(?RefundStatusDetails $value): self
    {
        $this->instance->setStatusDetails($value);
        return $this;
    }

    /**
     * Initializes a new Refund Status With Details object.
     */
    public function build(): RefundStatusWithDetails
    {
        return CoreHelper::clone($this->instance);
    }
}
