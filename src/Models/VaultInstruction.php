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
 * Base vaulting specification. The object can be extended for specific use cases within each
 * payment_source that supports vaulting.
 */
class VaultInstruction implements \JsonSerializable
{
    /**
     * @var string
     */
    private $storeInVault;

    /**
     * @param string $storeInVault
     */
    public function __construct(string $storeInVault)
    {
        $this->storeInVault = $storeInVault;
    }

    /**
     * Returns Store in Vault.
     * Defines how and when the payment source gets vaulted.
     */
    public function getStoreInVault(): string
    {
        return $this->storeInVault;
    }

    /**
     * Sets Store in Vault.
     * Defines how and when the payment source gets vaulted.
     *
     * @required
     * @maps store_in_vault
     */
    public function setStoreInVault(string $storeInVault): void
    {
        $this->storeInVault = $storeInVault;
    }

    /**
     * Converts the VaultInstruction object to a human-readable string representation.
     *
     * @return string The string representation of the VaultInstruction object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('VaultInstruction', ['storeInVault' => $this->storeInVault]);
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
        $json['store_in_vault'] = $this->storeInVault;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
