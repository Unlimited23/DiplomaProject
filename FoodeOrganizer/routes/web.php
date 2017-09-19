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

    //Inventory crud
    Route::get('/inventory', 'InventoryController@index')->name('inventory');
    Route::get('/inventory/edit/', 'InventoryController@edit');
    
    //Products crud
    Route::get('/products', 'ProductController@index');
    Route::post('/products/store', 'ProductController@store');
    Route::get('/products/edit/{id}', 'ProductController@edit');
    Route::get('/products/destroy/{id}', 'ProductController@destroy');

    //Profile crud
    Route::get('/profile', 'ProfileController@index');

    //History crud
    Route::get('/history', 'HistoryController@index');

    //Recipes crud
    Route::get('/recipes', 'RecipeController@index');

    //BMI calculator crud
    Route::get('/bmiCalculator', 'BMICalculatorController@index');

    //
});

