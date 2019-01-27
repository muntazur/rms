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

Route::get('/', function () {
    return view('Home.external');
});
Route::get('login','UserController@loginHome');
Route::get('register','UserController@registerHome');

Route::get('categories','CategoryController@getAllCategory');
Route::get('categories/{category_id}','CategoryController@getAllItem');
Route::get('categories/order/{item_id}/{item_name}','CategoryController@getOrder');

Route::post('order', [
    'uses' => 'CategoryController@storeOrder'
  ]);

Route::post('login',[
    'uses' => 'UserController@loginChecker'
]);
Route::post('register',[
    'uses'=>'UserController@storeRegisterInformation'
]);



Route::get('contact',function(){
    return view('contact.contact');
});
Route::get('logout','UserController@logout');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
