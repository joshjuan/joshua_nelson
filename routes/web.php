<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
   Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
        //Route::post('/contacts', 'LoginController@login')->name('login.perform');
       // Route::resource('contacts','App\Http\Controllers\ContactController');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});

Route::resource('contacts','App\Http\Controllers\ContactController');

Route::resource('contacts', ContactController::class);
Route::post('add', [ContactController::class,'add']);
Route::get('add', [ContactController::class,'add']);
Route::get('index', [ContactController::class,'view']);
Route::get('view', [\App\Http\Controllers\ListController::class,'view']);
//Route::get('contact', [\App\Http\Controllers\ContactController::class,'edit']);
Route::get('contact{id}', [\App\Http\Controllers\ContactController::class,'josh']);



