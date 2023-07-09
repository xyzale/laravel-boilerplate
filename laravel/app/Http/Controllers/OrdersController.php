<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirmed;
use App\Models\Order;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        Mail::to($order->user)->send(new OrderConfirmed($order));

        return response()->json(['order' => $order->load(['product'])->toArray()]);
    }
}
