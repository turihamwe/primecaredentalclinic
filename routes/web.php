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
        Route::get('oral-disease-prevention', 'HomeController@oral_disease_prevention')->name('oral-disease-prevention');
        Route::get('general-dentistry', 'HomeController@general_dentistry')->name('general-dentistry');
        Route::get('airflow-treatment', 'HomeController@airflow_treatment')->name('airflow-treatment');
        Route::get('oral-surgery', 'HomeController@oral_surgery')->name('oral-surgery');
        Route::get('pediatric-dentistry', 'HomeController@pediatric_dentistry')->name('pediatric-dentistry');
        Route::get('dental-hygiene', 'HomeController@dental_hygiene')->name('dental-hygiene');
        Route::get('veneers', 'HomeController@veneers')->name('veneers');
        Route::get('glass-ceramic-restorations', 'HomeController@glass_ceramic_restorations')->name('glass-ceramic-restorations');
        Route::get('inlays-onlays', 'HomeController@inlays_onlays')->name('inlays-onlays');
        Route::get('crowns', 'HomeController@crowns')->name('crowns');
        Route::get('bridge', 'HomeController@bridge')->name('bridge');
        Route::get('dental-implant', 'HomeController@dental_implant')->name('dental-implant');
        Route::get('braces', 'HomeController@braces')->name('braces');
        Route::get('clear-aligners-invisalign', 'HomeController@clear_aligners_invisalign')->name('clear-aligners-invisalign');
        Route::get('teeth-whitening', 'HomeController@teeth_whitening')->name('teeth-whitening');
        Route::get('space-maintainers', 'HomeController@space_maintainers')->name('space-maintainers');
        Route::get('root-canal-treatment', 'HomeController@root_canal_treatment')->name('root-canal-treatment');
        Route::get('gum-reshaping', 'HomeController@gum_reshaping')->name('gum-reshaping');
        Route::get('mouthwash', 'HomeController@mouthwash')->name('mouthwash');
        Route::get('teeth-cleaning', 'HomeController@teeth_cleaning')->name('teeth-cleaning');
        Route::get('digital-dental-xrays', 'HomeController@digital_dental_xrays')->name('digital-dental-xrays');
        Route::get('intraoral-camera', 'HomeController@intraoral_camera')->name('intraoral-camera');
        Route::get('root-planing', 'HomeController@root_planing')->name('root-planing');
        Route::get('wisdom-molar-extraction', 'HomeController@wisdom_molar_extraction')->name('wisdom-molar-extraction');
        Route::get('sinus-lift', 'HomeController@sinus_lift')->name('sinus-lift');
        Route::get('topical-fluoride-treatment', 'HomeController@topical_fluoride_treatment')->name('topical-fluoride-treatment');
    Route::get('team', 'HomeController@team')->name('team');
    Route::get('partnerships', 'HomeController@partnerships')->name('partnerships');
    Route::get('appointment', 'HomeController@appointment')->name('appointment');
    Route::post('appointment', 'HomeController@appointment_post')->name('appointment');
    Route::get('contact', 'HomeController@contact')->name('contact');
    Route::post('contact', 'HomeController@contact_post')->name('contact');
});
/*end Guest pages*/
