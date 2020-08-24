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

Route::group(['prefix'  =>  'ajax'], function () {
    Route::get('more-category', 'Site\AjaxController@more_category')->name('ajax.more-category');
    Route::get('more-brand', 'Site\AjaxController@more_brand')->name('ajax.more-brand');
    Route::post('popup-login', 'Site\PageController@popup_login')->name('PopUp-Login');
    Route::post('search', 'Site\AjaxController@search_post')->name('search-post');
});



Route::get('/', 'Site\PageController@home')->name('home');

Route::get('/single-product/{id}', 'Site\PageController@single_product')->name('single-product');
Route::get('/confirmation/{id}', 'Site\PageController@confirmation')->name('confirmation');

Route::post('/cart-coupon', 'Site\CartController@cart_coupon')->name('cart.coupon');
Route::post('/cart-condation-update', 'Site\CartController@cartCondationUpdate')->name('cart.condation.update');
Route::post('/add-cart', 'Site\CartController@addCart')->name('add.card');
Route::get('/empty-cart', 'Site\CartController@emptyCart')->name('empty.card');
Route::post('/update-cart', 'Site\CartController@updateCart')->name('update.card');
Route::get('/remove-card/{id}', 'Site\CartController@removeCart')->name('remove.card');
Route::get('/cart', 'Site\CartController@getCart')->name('checkout.cart');

Route::get('/cart/item/{id}/remove', 'Site\CartController@removeItem')->name('checkout.cart.remove');
Route::get('/cart/clear', 'Site\CartController@clearCart')->name('checkout.cart.clear');



Route::get('/wishlist/{id}', 'Site\PageController@wishlist')->name('wishlist');
Route::get('/search', 'Site\PageController@search')->name('search');
Route::get('/contact', 'Site\PageController@contact')->name('contact');
Route::get('/card-page', 'Site\PageController@card_page')->name('card.page');


Route::get('/get-checkout-id', 'Site\PaymentController@getCheckoutId')->name('get.checkout.id');
//Route::post('/save-user-order-checkout/{id}', 'Site\PaymentController@saveUserOrderCheckout')->name('save.user.order.checkout');
Route::post('/payment-checkout', 'Site\PaymentController@paymentCheckout')->name('payment.Checkout');
Route::get('/payment-save', 'Site\PaymentController@paymentSave')->name('payment.save');


//review or cooment product
Route::post('/add-review', 'Site\PageController@addReview')->name('add.review');
