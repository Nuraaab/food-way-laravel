<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\countOf;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

   
    public function redirect()
    {
        $comments = Testimonial::all();
        $foods = Food::has('orders', '>', 4)->simplePaginate(3);
        // $foods = Food::where('price', '>', 70)->get();
        $slides = Slider::all();
        $user_type = Auth::user()->usertype;
        if($user_type == "1"){
            return view('admin.dashboard');
        }else{
            return view('pages.home', compact('slides', 'foods', 'comments'));
        }
      
    }
    public function dashboard() {
        return view('admin.dashboard');
    }
    public function index()
    {
        $comments = Testimonial::all();
        $foods = Food::has('orders', '>', 4)->simplePaginate(3);
        // $foods = Food::where('price', '>', 70)->get();
        $slides = Slider::all();
       
        
        return view('pages.home', compact('slides', 'foods', 'comments'));
   
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
        //
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

    public function cart()
    {
        $carts = Cart::all();
        
        return view('pages.cart', compact('carts'));
    }

    public function checkout(Request $request )
    {
       
        $total_price = $request->total_price;
        $carts = json_decode($request->cart); 
        $user_id = Auth::user()->id;
        $cart = Cart::where('user_id', '=', $user_id )->first();
        // dd($user_id);
        $full_name = $cart->user->name;
        $user_email = $cart->user->email;
        return view('pages.checkout', compact('total_price', 'carts', 'full_name', 'user_email'));
    }
}

