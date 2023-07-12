<?php

namespace Tests\Unit\Service;

use App\Events\OrderCreated;
use App\Models\Order;
use App\Models\User;
use App\Repository\OrderRepository;
use App\Service\OrderService;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class OrderServiceTest extends TestCase
{

    public function testCreateOrderSuccess()
    {
        $order = new Order();

        $repository = $this->getMockBuilder(OrderRepository::class)
            ->getMock();

        $repository->method('createOrder')
            ->with(1, 1)
            ->willReturn($order);

        Event::fake();

        $service = new OrderService($repository);

        $result = $service->createOrder(1, 1);

        Event::assertDispatched(OrderCreated::class);

        $this->assertInstanceOf(Order::class, $result);
    }

    public function testCreateOrderFails()
    {
        $repository = $this->getMockBuilder(OrderRepository::class)
            ->getMock();

        $repository->method('createOrder')
            ->with(1, 1)
            ->willThrowException(new \Exception('test'));

        $service = new OrderService($repository);

        $result = $service->createOrder(1, 1);

        $this->assertNull($result);
    }
}
