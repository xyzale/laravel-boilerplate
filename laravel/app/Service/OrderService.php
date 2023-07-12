<?php

namespace App\Service;

use App\Events\OrderCreated;
use App\Models\Order;
use App\Repository\OrderRepository;

class OrderService
{
    public function __construct(private OrderRepository $repository)
    {
    }

    public function createOrder(int $productId, int $userId): ?Order
    {
        try {
            $order = $this->repository->createOrder($productId, $userId);
        } catch (\Exception) {
            return null;
        }

        OrderCreated::dispatch($order);

        return $order;
    }
}
