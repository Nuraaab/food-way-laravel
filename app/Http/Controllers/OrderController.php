<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::simplePaginate(10);
        return view('admin.order.show', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
       $user_id = Auth::user()->id;
       $cart = Cart::where('user_id', '=', $user_id)->get();
     foreach($cart as $cart){
        $order = new Order();
        $order->food_id = $cart->food->id;
        $order->full_name = $request->full_name;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->country = $request->country;
        $order->phone = $request->tel;
        $order->food_name = $cart->food->name;
        $order->quantity = $cart->quantity;
        $order->price = $cart->price;

        $order->save();
     }
       return redirect()->back()->with(['message' => 'Your order is succcessfully added']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function complete_order(Request $request, $id){
        $message ='';
        $order = Order::find($id);
        if($request->status == "1"){
            $order->status = "0";
          $message ="UnComplete successfull";
        }else{
            $order->status = "1";
            $message ="Complete successfull";
        }
        $order->save();
        return redirect()->back()->with(['message' => $message]);
    }
}
