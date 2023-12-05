<?php

namespace App\Projectors;

use App\Models\Account;
use App\Events\AccountCreated;
use App\Events\AccountDeleted;
use App\Events\MoneyAdded;
use App\Events\MoneySubtracted;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class AccountBalanceProjector extends Projector
{
    public function onAccountCreated(AccountCreated $event): void
    {
        (new Account($event->accountAttributes))->writeable()->save();
    }

    public function onMoneyAdded(MoneyAdded $event): void
    {
        $account = Account::uuid($event->accountUuid);

        $account->balance += $event->amount;

        $account->writeable()->save();
    }

    public function onMoneySubtracted(MoneySubtracted $event): void
    {
        $account = Account::uuid($event->accountUuid);

        $account->balance -= $event->amount;

        $account->writeable()->save();
    }

    public function onAccountDeleted(AccountDeleted $event): void
    {
        Account::uuid($event->accountUuid)->writeable()->delete();
    }
}
