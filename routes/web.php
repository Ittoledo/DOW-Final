<?php

use App\Http\Controllers\HomeController;
use App\Http\LiveWire\ShopComponent;
use App\Http\LiveWire\CartComponent;
use App\Http\LiveWire\CheckoutComponent;
use App\Http\Controllers\NosotrosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/nosotros', [App\Http\Controllers\NosotrosController::class, 'about']);
Route::get('/shop', ShopComponent::class);
Route::get('/cart', CartComponent::class);
Route::get('/checkout', CheckoutComponent::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
