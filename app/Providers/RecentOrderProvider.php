<?php

namespace App\Providers;

use App\Models\Order;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class RecentOrderProvider extends ServiceProvider
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
        View::composer('admin.recentchart', function ($view) {
            $today = Carbon::today();
            $order = Order::whereDate('created_at', $today)->get();
            $view->with(['recentorder'=> $order]);
        });
    }
}
