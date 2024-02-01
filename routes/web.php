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


foreach (Category::orderBy('order')->get() as $menu) {

/*    $meta = [
        'bodyClass' => $menu->bodyClass,
        'divClass' => $menu->divClass ,
        'id' => $menu->pageId,
        'title' => $menu->title,
        'metaTitle' => $menu->metatitle,
        'tags' => $menu->tags,
        'description' => $menu->description,
        'keywords' => $menu->keywords,
    ];*/

    Route::get($menu->slug,  fn() => view($menu->view, ['page' => $menu]))->name($menu->view);
}

Route::get('catalog/{slug}',  fn() => view('catalog-item'))->name('catalog-item');
Route::get('catalog/{slug}/{id}',  fn() => view('product'))->name('product');



