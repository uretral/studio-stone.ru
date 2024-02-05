<?php

use App\Models\Category;
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


foreach (Category::with('meta')->orderBy('order')->get() as $menu) {
    Route::get($menu->slug,  fn() => view($menu->view, ['page' => $menu]))->name($menu->view);
}

Route::get('catalog/{slug}/',  [\App\Http\Controllers\PageController::class,'catalog'])->name('catalog-item');
Route::get('catalog/{slug}/{id}',  [\App\Http\Controllers\PageController::class,'product'])->name('product');

Route::get('news/{slug}/',  [\App\Http\Controllers\PageController::class,'news'])->name('news-item');



