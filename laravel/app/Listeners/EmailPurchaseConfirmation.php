<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Mail\OrderConfirmed;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailPurchaseConfirmation implements ShouldQueue
{
    /**
     * @var string Define specific queue name
     *
     * php artisan queue:work --queue=emails --tries=5 --backoff=5
     */
    public string $queue = 'emails';

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderCreated $event): void
    {
        Mail::to($event->order->user)->send(new OrderConfirmed($event->order));
    }
}
