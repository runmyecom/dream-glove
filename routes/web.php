<?php

use App\Livewire\Client\Cart;
use App\Livewire\Client\Customize\Custombelt;
use App\Livewire\Client\Customize\Gloves\Selectweb;
use App\Livewire\Client\Product;
use App\Livewire\Client\Checkout;
use App\Livewire\Client\SingleAccessories;
use App\Livewire\Client\SingleBelt;
use App\Livewire\Client\Thankyou;
use App\Livewire\Client\WishList;
use App\Livewire\Admin\AdminPanel;
use App\Livewire\Client\Customize;
use App\Livewire\Client\SingleGuard;
use App\Livewire\Client\ShoppingCart;
use Illuminate\Support\Facades\Route;
use App\Livewire\Client\SingleProduct;
use App\Livewire\Client\ItemByCategory;
use App\Livewire\Client\SingleBaseball;
use App\Http\Controllers\AdminController;
use App\Livewire\Client\Customize\Gloves;
use App\Http\Controllers\StripeController;
use App\Livewire\Client\ProductByCategory;
use App\Livewire\Admin\Product\ProductEdit;
use App\Livewire\Admin\Product\ProductIndex;
use App\Livewire\Admin\Product\ProductCreate;
use App\Livewire\Admin\Category\CategoryIndex;
use App\Livewire\Client\Customize\BattingGloves;
use App\Livewire\Client\ProductByCategory\Clearance;
use App\Livewire\Client\ProductByCategory\Accessories;
use App\Livewire\Client\ProductByCategory\Apparel\Belts;
use App\Livewire\Client\ProductByCategory\Baseball\Guard;
use App\Livewire\Client\ProductByCategory\Apparel\Clothing;
use App\Livewire\Client\ProductByCategory\Baseball\Battinggloves\Adult;
use App\Livewire\Client\ProductByCategory\Baseball\Battinggloves\Youth;
use App\Livewire\Client\ProductByCategory\Baseball\FieldingGloves\InfieldClassic;
use App\Livewire\Client\ProductByCategory\Baseball\FieldingGloves\InfieldPremier;
use App\Livewire\Client\ProductByCategory\Baseball\FieldingGloves\OutfieldClassic;

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

// Admin Panel Routes
Route::middleware('admin:admin')->group(function (){
    Route::get('admin/login', [AdminController::class, 'loginForm']);
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
});
Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/admin/dashboard', AdminPanel::class)->name('admin-panel')->middleware('auth:admin');


});
Route::get('/categories/all', CategoryIndex::class)->name('category.index');
Route::get('/products', ProductIndex::class)->name('product.index');
Route::get('/product/create', ProductCreate::class)->name('product.create');
Route::get('/product/edit/{id}', ProductEdit::class)->name('product.edit');


// Auth Client Routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');

    Route::get('items-by-category', ItemByCategory::class)->name('item-by-category');

    // Shopping Cart
    Route::get('cart', Cart::class)->name('cart');
    Route::get('wish-list', WishList::class)->name('wish-list');
    Route::get('/shopping-cart', ShoppingCart::class)->name('shopping-cart');
    Route::get('/checkout', Checkout::class)->name('checkout');
    Route::get('/thank-you', Thankyou::class)->name('thank-you');

    // Stripe
    Route::post('stripe', [StripeController::class, 'stripe'])->name('stripe');
    Route::get('success', [StripeController::class, 'success'])->name('success');
    Route::get('cancel', [StripeController::class, 'cancel'])->name('cancel');
});


// Guest/Client Routes
Route::get('/category/baseball/batting-gloves/adult', Adult::class)->name('baseball-batting-gloves-adult');
Route::get('/category/baseball/batting-gloves/youth', Youth::class)->name('baseball-batting-gloves-youth');
Route::get('product/baseball/{slug}', SingleBaseball::class)->name('single-baseball');

Route::get('/category/baseball/fielding-gloves/infield/classic', InfieldClassic::class)->name('baseball-fielding-gloves-infield-classic');
Route::get('/category/baseball/fielding-gloves/infield/premier', InfieldPremier::class)->name('baseball-fielding-gloves-infield-premier');
Route::get('/category/baseball/fielding-gloves/outfield/classic', OutfieldClassic::class)->name('baseball-fielding-gloves-outfield-classic');
Route::get('/category/baseball/fielding-gloves/outfield/premier', InfieldPremier::class)->name('baseball-fielding-gloves-outfield-premier');

Route::get('/category/baseball/guard', Guard::class)->name('baseball-guard');
Route::get('product/guard/{slug}', SingleGuard::class)->name('single-guard');

Route::get('/category/apparel/belts', Belts::class)->name('apparel-belts');
Route::get('product/belts/{slug}', SingleBelt::class)->name('single-belt');

Route::get('/category/apparel/clothing', Clothing::class)->name('apparel-clothing');

Route::get('/category/clearance', Clearance::class)->name('clearance');

Route::get('/category/accessories', Accessories::class)->name('accessories');
Route::get('product/accessories/{slug}', SingleAccessories::class)->name('single-accessories');

Route::get('product/{slug}', SingleProduct::class)->name('single-product');
Route::get('/category/{slug}', ProductByCategory::class)->name('product_by_category');

// Customize
Route::get('/customize/batting-gloves', BattingGloves::class)->name('customize-batting-gloves');
Route::get('/customize/gloves/select-web', Selectweb::class)->name('customize-gloves-select-web');
Route::get('/customize/dream-gloves', Gloves::class)->name('customize-gloves');
Route::get('/customize/dream-belts', Custombelt::class)->name('customize-belts');
