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

//Route::get('/', function () {
//    dump(Category::orderBy('order','asc')->get()->toArray());
//});

foreach (Category::orderBy('order')->get() as $menu) {
    Route::get($menu->slug.'/{slug?}', fn() => view($menu->view))->name($menu->view);
}




