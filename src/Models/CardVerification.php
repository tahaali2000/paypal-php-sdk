<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models;

use PayPalRESTAPIsLib\ApiHelper;
use stdClass;

/**
 * The API caller can opt in to verify the card through PayPal offered verification services (e.g.
 * Smart Dollar Auth, 3DS).
 */
class CardVerification implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $method = CardVerificationMethod::SCA_WHEN_REQUIRED;

    /**
     * Returns Method.
     * The method used for card verification.
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * Sets Method.
     * The method used for card verification.
     *
     * @maps method
     */
    public function setMethod(?string $method): void
    {
        $this->method = $method;
    }

    /**
     * Converts the CardVerification object to a human-readable string representation.
     *
     * @return string The string representation of the CardVerification object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('CardVerification', ['method' => $this->method]);
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->method)) {
            $json['method'] = $this->method;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
