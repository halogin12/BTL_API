<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'admin'],function () {

    Route::group(['prefix' => 'product', 'namespace' => 'Admin'], function() {
        Route::get('/','productController@index');
        Route::get('{id}','productController@show');
        Route::post('create','productController@store');
        Route::put('update/{id}','productController@update');
        Route::get('delete/{id}','productController@destroy');
    });

    Route::group(['prefix' => 'categories', 'namespace' => 'Admin'], function() {
        Route::get('/','categoriesController@index');
        Route::get('{id}','categoriesController@show');
        Route::post('create','categoriesController@store');
        Route::put('update/{id}','categoriesController@update');
        Route::get('delete/{id}','categoriesController@destroy');
    });

    Route::group(['prefix' => 'brand', 'namespace' => 'Admin'], function() {
        Route::get('/','brandController@index');
        Route::get('{id}','brandController@show');
        Route::post('create','brandController@store');
        Route::put('update/{id}','brandController@update');
        Route::get('delete/{id}','brandController@destroy');
    });
    
    Route::group(['prefix' => 'customer', 'namespace' => 'Admin'], function() {
        Route::get('/','customerController@index');
        Route::get('{id}','customerController@show');
        Route::post('create','customerController@store');
        Route::put('update/{id}','customerController@update');
        Route::get('delete/{id}','customerController@destroy');
    });

    Route::group(['prefix' => 'order', 'namespace' => 'Admin'], function() {
        Route::get('/','orderController@index');
        Route::get('{id}','orderController@show');
        Route::post('create','orderController@store');
        Route::put('update/{id}','orderController@update');
        Route::get('delete/{id}','orderController@destroy');
    });

});
