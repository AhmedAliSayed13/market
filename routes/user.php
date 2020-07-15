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
Route::get('/login/github', 'Auth\LoginController@github');
Route::get('/login/github/redirect', 'Auth\LoginController@githubRedirect');

Route::get('/login/google', 'Auth\LoginController@google');
Route::get('/login/google/redirect', 'Auth\LoginController@googleRedirect');






Route::group(['prefix'  =>  'user'], function () {


    Route::group(['middleware' => ['auth']], function () {
        Route::get('/logout', 'User\UserController@logout')->name('user.logout');
        Route::get('/dashboard', 'User\UserController@dashboard')->name('user.dashboard');
        Route::get('/change-password', 'User\UserController@change_password')->name('user.change-password');
        Route::POST('/save-change-password', 'User\UserController@save_change_password')->name('user.save-change-password');

    });



});
