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

Route :: get('/', function(){
    return view ('Splash');
});

Route::get('login/twitter', 'Auth\LoginController@redirectToProvider');
Route::get('login/twitter/callback', 'Auth\LoginController@HandleProviderCallback');

Route::get('login/google', 'Auth\LoginController@redirectToProviderTwo');
Route::get('login/google/callback', 'Auth\LoginController@HandleProviderCallbackTwo');

Route::get('login/facebook', 'Auth\LoginController@redirectToProviderOne');
Route::get('login/facebook/callback', 'Auth\LoginController@HandleProviderCallbackOne');

Route::get('login/linkedin', 'Auth\LoginController@redirectToProviderThree');
Route::get('login/linkedin/callback', 'Auth\LoginController@HandleProviderCallbackThree');




//OAuth routes
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
Route::post('password/reset','Auth\ResetPasswordController@reset');



Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
