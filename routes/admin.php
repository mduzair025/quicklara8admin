<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => env('ADMIN_PREFIX'),'as' => 'admin.','namespace'=>'App\Http\Controllers\Admin'], function () {

        Route::get('/', 'DashboardController@index')->name('home');
    // Route::group(['middleware' => 'auth'], function () {
        Route::resource('users', 'ProductController')->name('*','users');
        Route::resource('products', 'ProductController')->name('*','products');
    // });
});