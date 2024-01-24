<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Catagory;
use App\Models\Food;
use App\Models\Order;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class CountDataProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('admin.sales', function ($view) {
           $order = Order::count();
           $catagory = Catagory::count();
           $user = User::count();
           $food =Food::count();
           $comments = Testimonial::count();
           $cart = Cart::count();
           $view->with([
            'order' => $order,
            'category' => $catagory,
            'user' => $user,
            'food' => $food,
            'comments' => $comments,
            'cart' => $cart
         ]);
        });
    }
}
