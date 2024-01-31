<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('menu-top', \App\Admin\Controllers\MenuTopController::class);
    $router->resource('catalog', \App\Admin\Controllers\CatalogController::class);
    $router->resource('country', \App\Admin\Controllers\CountryController::class);
    $router->resource('color', \App\Admin\Controllers\ColorController::class);
    $router->resource('products', \App\Admin\Controllers\ProductController::class);
    $router->resource('slider', \App\Admin\Controllers\TopSliderController::class);

});
