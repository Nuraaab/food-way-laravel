<?php

namespace App\Providers;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class SalesChartProvider extends ServiceProvider
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
        View::composer('admin.saleschart', function ($view) {
            $order = Order::all();
            $categoryCounts = Order::select('food_name', DB::raw('count(*) as count'))
        ->groupBy('food_name')
        ->get();
            $view->with('categoryCounts', $categoryCounts);
        });
    }
}
