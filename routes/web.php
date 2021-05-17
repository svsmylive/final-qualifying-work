<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Base\BaseController;
use App\Http\Controllers\Product\ProductsController;
use App\Http\Controllers\Product\ProductDetailController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;

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

Route::get('/', [BaseController::class, 'index'])->name('base');

Route::post('/krasnodar/rent/', [ProductsController::class, 'index'])->name('homeProducts');

Route::get('/krasnodar/rent/product-{id}', [ProductDetailController::class, 'show'])->name('showProduct');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('homeAdmin'); //admin
    Route::resource('post', PostController::class);
});

