<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\CaptureStatusDetails;
use PayPalRESTAPIsLib\Models\CaptureStatusWithDetails;

/**
 * Builder for model CaptureStatusWithDetails
 *
 * @see CaptureStatusWithDetails
 */
class CaptureStatusWithDetailsBuilder
{
    /**
     * @var CaptureStatusWithDetails
     */
    private $instance;

    private function __construct(CaptureStatusWithDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Capture Status With Details Builder object.
     */
    public static function init(): self
    {
        return new self(new CaptureStatusWithDetails());
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
     * @param CaptureStatusDetails|null $value
     */
    public function statusDetails(?CaptureStatusDetails $value): self
    {
        $this->instance->setStatusDetails($value);
        return $this;
    }

    /**
     * Initializes a new Capture Status With Details object.
     */
    public function build(): CaptureStatusWithDetails
    {
        return CoreHelper::clone($this->instance);
    }
}
