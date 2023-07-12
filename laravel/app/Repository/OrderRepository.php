<?php

namespace App\Repository;

use App\Models\Order;

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
}
