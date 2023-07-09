<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Mail\OrderConfirmed;
use Illuminate\Support\Facades\Mail;

class EmailPurchaseConfirmation
{
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
