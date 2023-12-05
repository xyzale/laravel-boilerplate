<?php

namespace App\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class MoneySubtracted extends ShouldBeStored
{
    /** @var string */
    public string $accountUuid;

    /** @var int */
    public int $amount;

    public function __construct(string $accountUuid, int $amount)
    {
        $this->accountUuid = $accountUuid;

        $this->amount = $amount;
    }
}

