<?php

use App\Http\Livewire\ShopIndex;
use App\Http\Livewire\AboutIndex;
use App\Http\Livewire\ContactIndex;
use App\Http\Livewire\ProductsIndex;
use App\Http\Livewire\CategoriesIndex;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/shop', ShopIndex::class);
Route::get('/contact', ContactIndex::class);
Route::get('/about', AboutIndex::class);
Route::get('all_products', ProductsIndex::class);
Route::get('/all_products/{product:name}', [ProductController::class, 'show'])->name('products.show');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category:id}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');



require __DIR__.'/auth.php';
