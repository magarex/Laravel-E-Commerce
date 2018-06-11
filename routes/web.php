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


Route::get('/','FrontController@index')->name('home');






Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/admin', 'AdminPanelController@index')->middleware(['admin','auth']);


Route::group([ 'prefix' => 'admin' , 'middleware' => ['auth','admin'] ], function()
{
    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');
    Route::get('get_products','ProductsController@getProducts');
    Route::get('product/edit/{id}','ProductsController@edit');
    Route::resource('orders','OrderController');
    Route::resource('menu','MenuController');
    Route::get('general','GeneralSettingsController@index')->name('general.index');
    Route::post('general','GeneralSettingsController@update');
    Route::get('slider','SliderController@index')->name('slider.index');
    Route::post('slider','SliderController@update')->name('slider.update');

});

Route::resource('cart','CartController');
Route::get('shipping-form','CheckoutController@shipping')->name('shipping-form');
Route::resource('adress','AdressController');
Route::get('contact','ContactController@index');
Route::post('contact','ContactController@postContact')->name('contact.postcontact');











