<?php

use App\Livewire\Customize;
use App\Livewire\Client\Cart;
use App\Livewire\Client\WishList;
use Illuminate\Support\Facades\Route;
use App\Livewire\Client\ItemByCategory;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('customize', Customize::class)->name('customize');
    Route::get('items-by-category', ItemByCategory::class)->name('item-by-category');

    Route::get('cart', Cart::class)->name('cart');
    Route::get('wish-list', WishList::class)->name('wish-list');

});
