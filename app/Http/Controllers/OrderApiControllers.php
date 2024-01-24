<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderList;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderApiControllers extends Controller
{
  public function index()
  {
    $order = Order::latest()->get();
    $response =[
        'orders' => OrderList::collection($order)
    ];
    return response($response, 200);
  }
}
