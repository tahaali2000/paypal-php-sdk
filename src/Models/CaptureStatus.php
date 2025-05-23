<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models;

/**
 * The status of the captured payment.
 */
class CaptureStatus
{
    public const COMPLETED = 'COMPLETED';

    public const DECLINED = 'DECLINED';

    public const PARTIALLY_REFUNDED = 'PARTIALLY_REFUNDED';

    public const PENDING = 'PENDING';

    public const REFUNDED = 'REFUNDED';

    public const FAILED = 'FAILED';
}
