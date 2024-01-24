<?php

namespace App\Http\Controllers;

use App\Http\Resources\CartList;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartApiControllers extends Controller
{
    public function index()
    {
        $cart = Cart::latest()->get();
        $response = [
          'cart' => CartList::collection($cart)
        ];
        return response($response, 200);
    }
}
