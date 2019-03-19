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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function(){
    return view ('Splash');
});
Route::get('/users{fname}', function ($fname) {
    return '' .$fname;
});



Route::get('login/twitter', 'Auth\LoginController@redirectToProvider');
Route::get('login/twitter/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/google', 'Auth\LoginController@redirectToProviderTwo');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallbackTwo');

Route::get('login/facebook', 'Auth\LoginController@redirectToProviderOne');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallbackOne');

Route::get('login/linkedin', 'Auth\LoginController@redirectToProviderThree');
Route::get('login/linkedin/callback', 'Auth\LoginController@handelProviderCallbackThree');





//OAuth routes
Route::get('auth/{twitter}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{twitter}/callback', 'Auth\AuthController@HandleProviderCallback');
Route::post('password/reset','Auth\ResetPasswordController@reset');



Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
