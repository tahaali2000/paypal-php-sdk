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
 * The order request details.
 */
class OrderRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $intent;

    /**
     * @var Payer|null
     */
    private $payer;

    /**
     * @var PurchaseUnitRequest[]
     */
    private $purchaseUnits;

    /**
     * @var PaymentSource|null
     */
    private $paymentSource;

    /**
     * @var OrderApplicationContext|null
     */
    private $applicationContext;

    /**
     * @param string $intent
     * @param PurchaseUnitRequest[] $purchaseUnits
     */
    public function __construct(string $intent, array $purchaseUnits)
    {
        $this->intent = $intent;
        $this->purchaseUnits = $purchaseUnits;
    }

    /**
     * Returns Intent.
     * The intent to either capture payment immediately or authorize a payment for an order after order
     * creation.
     */
    public function getIntent(): string
    {
        return $this->intent;
    }

    /**
     * Sets Intent.
     * The intent to either capture payment immediately or authorize a payment for an order after order
     * creation.
     *
     * @required
     * @maps intent
     */
    public function setIntent(string $intent): void
    {
        $this->intent = $intent;
    }

    /**
     * Returns Payer.
     */
    public function getPayer(): ?Payer
    {
        return $this->payer;
    }

    /**
     * Sets Payer.
     *
     * @maps payer
     */
    public function setPayer(?Payer $payer): void
    {
        $this->payer = $payer;
    }

    /**
     * Returns Purchase Units.
     * An array of purchase units. Each purchase unit establishes a contract between a payer and the payee.
     * Each purchase unit represents either a full or partial order that the payer intends to purchase from
     * the payee.
     *
     * @return PurchaseUnitRequest[]
     */
    public function getPurchaseUnits(): array
    {
        return $this->purchaseUnits;
    }

    /**
     * Sets Purchase Units.
     * An array of purchase units. Each purchase unit establishes a contract between a payer and the payee.
     * Each purchase unit represents either a full or partial order that the payer intends to purchase from
     * the payee.
     *
     * @required
     * @maps purchase_units
     *
     * @param PurchaseUnitRequest[] $purchaseUnits
     */
    public function setPurchaseUnits(array $purchaseUnits): void
    {
        $this->purchaseUnits = $purchaseUnits;
    }

    /**
     * Returns Payment Source.
     * The payment source definition.
     */
    public function getPaymentSource(): ?PaymentSource
    {
        return $this->paymentSource;
    }

    /**
     * Sets Payment Source.
     * The payment source definition.
     *
     * @maps payment_source
     */
    public function setPaymentSource(?PaymentSource $paymentSource): void
    {
        $this->paymentSource = $paymentSource;
    }

    /**
     * Returns Application Context.
     * Customizes the payer experience during the approval process for the payment with PayPal.
     * <blockquote><strong>Note:</strong> Partners and Marketplaces might configure <code>brand_name</code>
     * and <code>shipping_preference</code> during partner account setup, which overrides the request
     * values.</blockquote>
     */
    public function getApplicationContext(): ?OrderApplicationContext
    {
        return $this->applicationContext;
    }

    /**
     * Sets Application Context.
     * Customizes the payer experience during the approval process for the payment with PayPal.
     * <blockquote><strong>Note:</strong> Partners and Marketplaces might configure <code>brand_name</code>
     * and <code>shipping_preference</code> during partner account setup, which overrides the request
     * values.</blockquote>
     *
     * @maps application_context
     */
    public function setApplicationContext(?OrderApplicationContext $applicationContext): void
    {
        $this->applicationContext = $applicationContext;
    }

    /**
     * Converts the OrderRequest object to a human-readable string representation.
     *
     * @return string The string representation of the OrderRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'OrderRequest',
            [
                'intent' => $this->intent,
                'payer' => $this->payer,
                'purchaseUnits' => $this->purchaseUnits,
                'paymentSource' => $this->paymentSource,
                'applicationContext' => $this->applicationContext
            ]
        );
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
        $json['intent']                  = $this->intent;
        if (isset($this->payer)) {
            $json['payer']               = $this->payer;
        }
        $json['purchase_units']          = $this->purchaseUnits;
        if (isset($this->paymentSource)) {
            $json['payment_source']      = $this->paymentSource;
        }
        if (isset($this->applicationContext)) {
            $json['application_context'] = $this->applicationContext;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
