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

Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/dashboard', 'Admin\AdminController@dashboard')->name('admin.dashboard');
        Route::get('/show-setting', 'Admin\SettingController@ShowSetting')->name('admin.setting');
        Route::post('/edit-setting', 'Admin\SettingController@EditSetting')->name('admin.edit_setting');
        Route::get('/profile', 'Admin\AdminController@ShowAdminProfile')->name('admin.profile');
        Route::post('/edit', 'Admin\AdminController@EditAdmin')->name('admin.edit');
        Route::post('/change-password', 'Admin\AdminController@ChangePassword')->name('admin.change-password');
        Route::post('image/upload', 'Admin\ProductController@upload_image')->name('product.image.upload');
        Route::get('image/delete', 'Admin\ProductController@delete_image')->name('product.image.delete');
        Route::resource('brand','Admin\BrandController');
        Route::resource('category','Admin\CategoryController');
        Route::resource('tag','Admin\TagController');
        Route::resource('product','Admin\ProductController');
        Route::resource('voucher','Admin\VoucherController');
        Route::resource('order','Admin\OrderController');
        Route::post('/product-store-attribute', 'Admin\ProductController@product_store_attribute')->name('product.store.attribute');
    });

    // Password Reset Routes...
    Route::get('password/reset', 'Admin\AdminController@showLinkRequestForm')->name('admin.password.reset');
    Route::post('password/email', 'Admin\AdminController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('reset/password/{token}', 'Admin\AdminController@showResetForm')->name('admin.password.reset.token');
    Route::post('reset/password', 'Admin\AdminController@reset_password')->name('admin.password.reset.change');

});
