<?php

use Illuminate\Support\Facades\Route;

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

//1. GUEST
//Guest auth.
//  Not applicable.
//end Guest auth.

/*Guest pages*/
Route::namespace('App\Http\Controllers\Guest')->group(function () {
    Route::get('/', 'HomeController@index')->name('/');
    Route::get('about', 'HomeController@about')->name('about');
    Route::get('services', 'HomeController@services')->name('services');
    Route::get('appointment', 'HomeController@appointment')->name('appointment');
    Route::get('contact', 'HomeController@contact')->name('contact');
});
/*end Guest pages*/
