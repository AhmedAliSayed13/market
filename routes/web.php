<?php

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
Auth::routes();




Route::get('/', 'Site\PageController@home')->name('home');
Route::get('/single-product/{id}', 'Site\PageController@single_product')->name('single-product');

Route::post('/add-cart', 'Admin\ProductController@addCart')->name('add.card');
Route::get('/cart', 'Site\CartController@getCart')->name('checkout.cart');
Route::get('/cart/item/{id}/remove', 'Site\CartController@removeItem')->name('checkout.cart.remove');
Route::get('/cart/clear', 'Site\CartController@clearCart')->name('checkout.cart.clear');
Route::get('/wishlist/{id}', 'Site\PageController@wishlist')->name('wishlist');
Route::get('/search', 'Site\PageController@search')->name('search');




