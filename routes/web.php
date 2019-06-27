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
    return view('welcome');
});

Route::get('/registration', "registerController@index");
Route::post('register_data', "registerController@store");

Route::get('/log-in', "LoginController@index");
Route::post('login-data', "LoginController@store");


Route::post('sassy_data', "sassyController@store");


Route::post('sizzler_data', "sizzlerController@store");


Route::post('miss', "misController@store");

Route::get('/log-out' , "LoginController@logout");

//Route::get('edit_profile/{id}' , "empController@edit_function");

//Route::put('updateimages/{id}' , "empController@update_function");

Route::get('edit_profile/{user}' , "empController@edit_function")->name('user.editProfile');

Route::put('/updateimages/{user}', "empController@update")->name('user.updateProfile');

Route::get('adminreg', "adminregistration@index");
Route::post('data' , "adminregistration@store");

Route::get('admin', "adminController@index");
Route::post('admin_data', "adminController@store");
Route::get('/logout' , "adminController@logout");

Route::group(['middleware' => 'checkuser'], function(){
    Route::get('empprofile' , "empController@display");
    Route::get('/sassy', "sassyController@display");
    Route::get('/sizzler', "sizzlerController@index");
    Route::get('/mis', "misController@index");
});

Route::group(['middleware' => 'guest'], function(){
    Route::get('profile' , "profileController@index");
    Route::get('empsassy', "sassyController@index");
    Route::get('empsizzler', "sizzlerController@display");
    Route::get('empmiss', "misController@display");
});


//Route::get('test' , "sassyController@alldata")->name('test');



