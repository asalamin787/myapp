<?php

use App\Http\Controllers\pageControllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Migrations\myapp;



//dashboard Categorie route //
Route::middleware('auth')->group(function () {

    Route::get('/category', [pageControllers::class, 'category'])->name('category');
    Route::post('/category/store', [pageControllers::class, 'categoryStore'])->name('category.store');

    Route::get('/categorys_view/', [pageControllers::class, 'categorys_view'])->name('categorys_view');

    Route::get('/edit_category/{category}', [pageControllers::class, 'edit_category'])->name('edit_category');
    Route::post('update_category/{category}', [pageControllers::class, 'update_category'])->name('update_category');
});


//dashboard slider route //

Route::get('/slider', [pageControllers::class, 'slider'])->name('slider');
Route::post('/slider/store', [pageControllers::class, 'sliderStore'])->name('slider.store');

Route::get('/slider_view', [pageControllers::class, 'slider_view'])->name('slider_view');

Route::get('/slider_editr/{slider}', [pageControllers::class, 'slider_edit'])->name('edit');
route::post('/slider_update/{slider}', [pageControllers::class, 'slider_update'])->name('update');

// dashboard slider route end //

//dashboard Products route //

Route::get('/create_product', [pageControllers::class, 'create_products'])->name('product_create');
route::post('/product/store', [pageControllers::class, 'products_store'])->name('product.store');

route::get('/products_view', [pageControllers::class, 'products_view'])->name('products_view');

route::get('/product_edit/{product}', [pageControllers::class, 'product_edit'])->name('product.edit');
route::post('/product_update/{product}', [pageControllers::class, 'product_update'])->name('product.update');


//dashboard Products route end //


Route::get('/', [pageControllers::class, 'index']);
// Route::get('/nav', [pageControllers::class, 'nav']);
Route::get('/products', [pageControllers::class, 'products']);
Route::get('/contact', [pageControllers::class, 'contact']);
// Route::get('/footer', [pageControllers::class, 'footer']);

Auth::routes();

// Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
