<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\CheckoutController;

Route::get("/", [Homecontroller::class, "index"]);
Route::get("/users", [Admincontroller::class, "user"]);
Route::get("/foodmenu", [Admincontroller::class, "foodmenu"]);
Route::post("/uploadfood", [Admincontroller::class, "upload"]);
Route::get('/checkout', 'CheckoutController@showCheckout')->name('checkout');



Route::get("/deleteuser/{id}", [Admincontroller::class, "deleteuser"]);


Route::get("redirects", [Homecontroller::class, "redirects"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
