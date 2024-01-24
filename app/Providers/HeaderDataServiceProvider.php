<?php
namespace App\Providers;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
class HeaderDataServiceProvider extends ServiceProvider
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
        View::composer('partials.header', function ($view) {
            $cartCount = Auth::check() ? Cart::where('user_id', Auth::id())->count() : 0;
            $view->with('cartCount', $cartCount);
        });
    }
}