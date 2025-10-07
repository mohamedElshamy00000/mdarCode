<?php

namespace Mollie\Api\Types;

use Mollie\Api\Traits\GetAllConstants;

class SubscriptionStatus
{
    use GetAllConstants;

    public const ACTIVE = 'active';

    public const PENDING = 'pending';   // Waiting for a valid mandate.

    public const CANCELED = 'canceled';

    public const SUSPENDED = 'suspended'; // Active, but mandate became invalid.

    public const COMPLETED = 'completed';
}
