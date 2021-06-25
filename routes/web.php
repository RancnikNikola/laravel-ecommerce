<?php

use App\Http\Livewire\ShopIndex;
use App\Http\Livewire\AboutIndex;
use App\Http\Livewire\ContactIndex;
use App\Http\Livewire\CategoriesIndex;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/shop', ShopIndex::class);
Route::get('/categories', CategoriesIndex::class);
Route::get('/contact', ContactIndex::class);
Route::get('/about', AboutIndex::class);



require __DIR__.'/auth.php';
