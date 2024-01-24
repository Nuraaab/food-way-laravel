<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::resource('/about', AboutController::class);
Route::resource('/testimonial', TestimonialController::class);
Route::resource('/food', FoodController::class);
Route::resource('/blog', BlogController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/order', OrderController::class);
Route::controller(LoginController::class)->group(function(){
    Route::get('/logout','logout')->name('logout');
    Route::post('/login','login')->name('login');
    Route::post('/register','register')->name('register');
});

Route::controller(AdminController::class)->group(function(){
    Route::get('/view_food','view_food')->name('view_food');
    Route::get('/view_category','view_category')->name('view_category');
    Route::post('/category', 'category')->name('category');
    Route::post('/add_food', 'add_food')->name('add_food');
    Route::get('/show_food', 'show_food')->name('show_food');
    Route::post('/delete_food/{id}', 'delete')->name('delete_food');
    Route::post('/edit_food/{id}', 'edit')->name('edit_food');
    Route::get('/update_food/{id}', 'update')->name('update_food');
    Route::get('/view_user','view_user')->name('view_user');
    Route::post('/add_user', 'add_user')->name('add_user');
    Route::get('/show_user', 'show_user')->name('show_user');
    Route::post('/delete_user/{id}', 'delete_user')->name('delete_user');
    Route::get('/update_user/{id}', 'update_user')->name('update_user');
    Route::post('/edit_user/{id}', 'edit_user')->name('edit_user');
    Route::get('/show_category', 'show_category')->name('show_category');
    Route::post('/delete_category/{id}', 'delete_category')->name('delete_category');
    Route::get('/update_category/{id}', 'update_category')->name('update_category');
    Route::post('/edit_category/{id}', 'edit_category')->name('edit_category');
    Route::get('/profile', 'profile')->name('profile');
    Route::post('/updateProfile/{id}', 'updateProfile')->name('updateProfile');
});

Route::controller(CartController::class)->group(function(){
    Route::post('cart/{id}', 'add_to_cart')->name('add_to_cart')->middleware('auth');
    Route::get('/deletCart/{id}', 'deleteCart')->name('deleteCart');
    Route::get('/detail/{id}', 'cartDetail')->name('cartDetail');
});

Route::post('/complete_order/{id}', [OrderController::class, 'complete_order'])->name('complete_order');
Route::post('/subscribe', [SubscribeController::class, 'subscribe'])->name('subscribe')->middleware('auth');