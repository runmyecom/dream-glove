<?php

use App\Livewire\Client\Cart;
use App\Livewire\Client\Product;
use App\Livewire\Client\Checkout;
use App\Livewire\Client\Thankyou;
use App\Livewire\Client\WishList;
use App\Livewire\Admin\AdminPanel;
use App\Livewire\Client\Customize;
use App\Livewire\Client\ShoppingCart;
use Illuminate\Support\Facades\Route;
use App\Livewire\Client\SingleProduct;
use App\Livewire\Client\ItemByCategory;
use App\Livewire\Client\ProductByCategory;
use App\Livewire\Admin\Product\ProductEdit;
use App\Livewire\Admin\Product\ProductIndex;
use App\Livewire\Admin\Product\ProductCreate;
use App\Livewire\Admin\Category\CategoryIndex;

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

    Route::get('items-by-category', ItemByCategory::class)->name('item-by-category');

    Route::get('product/{slug}', SingleProduct::class)->name('single-product');

    // Shopping Cart
    Route::get('cart', Cart::class)->name('cart');
    Route::get('wish-list', WishList::class)->name('wish-list');
    Route::get('/shopping-cart', ShoppingCart::class)->name('shopping-cart');
    Route::get('/checkout', Checkout::class)->name('checkout');
    Route::get('/thank-you', Thankyou::class)->name('thank-you');
});


// Guest/Client Routes
Route::get('customize', Customize::class)->name('customize');
Route::get('/category/{slug}', ProductByCategory::class)->name('product_by_category');

// Admin Panel Routes
Route::get('admin-panel', AdminPanel::class)->name('admin-panel');
Route::get('/categories/all', CategoryIndex::class)->name('category.index');

Route::get('/products', ProductIndex::class)->name('product.index');
Route::get('/product/create', ProductCreate::class)->name('product.create');
Route::get('/product/edit/{id}', ProductEdit::class)->name('product.edit');
