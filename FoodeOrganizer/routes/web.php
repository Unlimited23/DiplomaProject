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

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Auth::routes();

    Route::get('/', 'HomeController@index');


    Route::get('/inventory', 'InventoryController@index')->name('inventory');

    //Products crud
    Route::get('/showProducts', 'ProductController@index');
    Route::get('/products/create', 'ProductController@store');
    
});

