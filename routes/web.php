<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShoppingController;


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
Route::post('/submit', [App\Http\Controllers\FormController::class, 'submit'])->name('submit');

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Route::get('/shopping', [ShoppingController::class, 'index'])->name('shopping');
Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');


