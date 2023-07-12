<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Requests\CreateOrderRequest;
use App\Service\OrderService;
use Illuminate\Http\JsonResponse;

class OrdersController extends Controller
{
    public function __construct(private readonly OrderService $service)
    {
    }

    public function createOrder(CreateOrderRequest $request): JsonResponse
    {
        $order = $this->service->createOrder($request->get('product_id'), $request->get('user_id'));

        return response()->json(['order' => $order->load(['product'])->toArray()]);
    }
}
