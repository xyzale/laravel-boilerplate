<?php

namespace App\Http\Controllers;

use App\Events\OrderCreated;
use App\Models\Order;
use App\Service\OrderService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function __construct(private readonly OrderService $service)
    {
    }

    public function createOrder(Request $request): JsonResponse
    {
        $request->validate([
            'user_id' => 'required|int',
            'product_id' => 'required|int',
        ]);

        $order = $this->service->createOrder($request->get('product_id'), $request->get('user_id'));

        return response()->json(['order' => $order->load(['product'])->toArray()]);
    }
}
