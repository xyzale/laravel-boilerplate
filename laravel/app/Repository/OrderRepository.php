<?php

namespace App\Repository;

use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;

class OrderRepository
{
    public function createOrder(int $productId, int $userId): Order
    {
        $order = new Order();
        $order->user_id = $userId;
        $order->product_id = $productId;
        $order->save();

        return $order;
    }

    public function getOrdersToDispatch(): Collection
    {
        return Order::where('paid', 1)->where('dispatched', 0)->get();
    }

    public function markDispatched(mixed $order): void
    {
        $order->dispatched = 1;
        $order->save();
    }
}
