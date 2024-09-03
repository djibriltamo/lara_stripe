<?php

use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('stripe.checkout', [StripeController::class, 'checkout'])->name('stripe.checkout');
Route::post('session', [StripeController::class, 'session'])->name('session');
Route::get('success', [StripeController::class, 'success'])->name('success');