<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function createOrder(Request $request): JsonResponse
    {
        $request->validate([
            'user_id' => 'required|int',
            'product_id' => 'required|int',
        ]);

        $order = new Order();
        $order->user_id = $request->get('user_id');
        $order->product_id = $request->get('product_id');
        $order->save();


        return response()->json(['order' => $order->load(['product'])->toArray()]);
    }
}
