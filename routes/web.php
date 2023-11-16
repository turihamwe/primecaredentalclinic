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
Route::namespace('App\Http\Controllers\Guest')->group(function (){
    Route::get('/', 'HomeController@index')->name('/');
    Route::get('about', 'HomeController@about')->name('about');
        Route::get('vision', 'HomeController@vision')->name('vision');
        Route::get('mission', 'HomeController@mission')->name('mission');
        Route::get('values', 'HomeController@values')->name('values');
        Route::get('sustainability', 'HomeController@sustainability')->name('sustainability');
        Route::get('csr', 'HomeController@csr')->name('csr');
    Route::get('services', 'HomeController@services')->name('services');
        Route::get('dental-checkup', 'HomeController@dental_checkup')->name('dental-checkup');
        Route::get('oral-disease-prevention', 'HomeController@oral_disease_prevention')->name('oral-disease-prevention');
        Route::get('dental-fillings', 'HomeController@dental_fillings')->name('dental-fillings');
        Route::get('general-dentistry', 'HomeController@general_dentistry')->name('general-dentistry');
        Route::get('airflow-treatment', 'HomeController@airflow_treatment')->name('airflow-treatment');
        Route::get('oral-surgery', 'HomeController@oral_surgery')->name('oral-surgery');
        Route::get('pediatric-dentistry', 'HomeController@pediatric_dentistry')->name('pediatric-dentistry');
        Route::get('dental-hygiene', 'HomeController@dental_hygiene')->name('dental-hygiene');
        Route::get('veneers', 'HomeController@veneers')->name('veneers');
        Route::get('glass-ceramic-restorations', 'HomeController@glass_ceramic_restorations')->name('glass-ceramic-restorations');
        Route::get('inlays-onlays', 'HomeController@inlays_onlays')->name('inlays-onlays');
        Route::get('crowns', 'HomeController@crowns')->name('crowns');
        Route::get('bridges', 'HomeController@bridges')->name('bridges');
        Route::get('dental-implants', 'HomeController@dental_implants')->name('dental-implants');
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
        Route::get('topical-fluoride-application', 'HomeController@topical_fluoride_application')->name('topical-fluoride-application');
        Route::get('bad-breath-treatment', 'HomeController@bad_breath_treatment')->name('bad-breath-treatment');
    Route::get('team', 'HomeController@team')->name('team');
    Route::get('payments', 'HomeController@payments')->name('payments');
    Route::get('timetable', 'HomeController@timetable')->name('timetable');
    Route::get('tutorials', 'HomeController@tutorials')->name('tutorials');
    Route::get('partnerships', 'HomeController@partnerships')->name('partnerships');
    Route::get('insurance', 'HomeController@insurance')->name('insurance');
    Route::get('gallery', 'HomeController@gallery')->name('gallery');
    Route::get('technology', 'HomeController@technology')->name('technology');
    Route::get('appointment', 'HomeController@appointment')->name('appointment');
    Route::post('appointment', 'HomeController@appointment_post')->name('appointment');
    Route::get('careers', 'HomeController@careers')->name('careers');
    Route::post('careers-submit', 'HomeController@careers_post')->name('careers-submit');
    Route::get('contact', 'HomeController@contact')->name('contact');
    Route::post('contact', 'HomeController@contact_post')->name('contact');
});
/*end Guest pages*/

/*Mail*/
Route::namespace('App\Http\Controllers')->group(function (){
    Route::get('sendbasicemail','MailController@basic_email');
    Route::get('sendhtmlemail','MailController@html_email');
    Route::get('sendattachmentemail','MailController@attachment_email');
});
/*end Mail*/
