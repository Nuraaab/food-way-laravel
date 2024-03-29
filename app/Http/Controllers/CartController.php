<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, $id)
    {
       
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


    public function add_to_cart(Request $request, $id){
        $user_id = Auth::user()->id;
        $cart = new Cart();
        $cart->user_id = $user_id;
        $cart->food_id = $id;
        $price = $request->price;
        $image =$request->image;
        $quantity = $request->quantity;
        $total_price = $price*$quantity;
        $cart->price = $total_price;
        $cart->quantity = $quantity;
        $cart->image = $image;
        $cart->save();
        return redirect()->back();
    }

    public function deleteCart($id){
        $cart = Cart::find($id);
        $cart->delete();

return redirect()->back()->with(['message' => 'Cart deleted successfully']);

    }
    public function cartDetail($id)
    {
        $food = Food::find($id);
        $food_category = $food->catagory;
        $related_foods = Food::where('catagory', $food_category)->take(3)->get();
        return view('pages.details', compact('food', 'related_foods'));
    }
}
