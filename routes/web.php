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

//Route::get('/', function () {
//    return view('template.home');
//});

Route::get('/', 'Home@index');

Route::get('/artisan', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    return TRUE;
});

Auth::routes();
Route::get('/dashboard', 'Dashboard@index');

Route::post('sendMail', 'Home@sendEmail');

Route::group(['middleware' => ['checkAuth']], function () {

    // for Short  Description
    Route::get('shortdescriptionadd', 'ShortDescription@addDescrition');
    Route::post('shortdescription-store', 'ShortDescription@store');
    Route::post('shortdescription-update', 'ShortDescription@update');
    Route::get('shortdescription', 'ShortDescription@index');
    Route::get('shortdescription/edit/{id}', 'ShortDescription@edit');
    Route::get('shortdescription/delete/{id}', 'ShortDescription@delete');

// for Slider
    Route::get('dashboard', 'Dashboard@index');
    Route::get('slider-add', 'SliderController@add');
    Route::post('slider-store', 'SliderController@store');
    Route::post('slider-update', 'SliderController@update');
    Route::get('slider', 'SliderController@index');
    Route::get('slider/edit/{id}', 'SliderController@edit');
    Route::get('slider/delete/{id}', 'SliderController@delete');
    Route::get('slider/view/{id}', 'SliderController@view');

// for About Us
    Route::get('aboutus-add', 'AboutUs@add');
    Route::post('aboutus-store', 'AboutUs@store');
    Route::post('aboutus-update', 'AboutUs@update');
    Route::get('aboutus', 'AboutUs@index');
    Route::get('aboutus/edit/{id}', 'AboutUs@edit');
    Route::get('aboutus/delete/{id}', 'AboutUs@delete');
    Route::get('aboutus/view/{id}', 'AboutUs@view');

// for Portfolia
    Route::get('portfolio-add', 'Fortfolio@add');
    Route::post('portfolio-store', 'Fortfolio@store');
    Route::post('portfolio-update', 'Fortfolio@update');
    Route::get('portfolio', 'Fortfolio@index');
    Route::get('portfolio/edit/{id}', 'Fortfolio@edit');
    Route::get('portfolio/delete/{id}', 'Fortfolio@delete');
    Route::get('portfolio/view/{id}', 'Fortfolio@view');

// for Clients
    Route::get('clients-add', 'Clients@add');
    Route::post('clients-store', 'Clients@store');
    Route::post('clients-update', 'Clients@update');
    Route::get('clients', 'Clients@index');
    Route::get('clients/edit/{id}', 'Clients@edit');
    Route::get('clients/delete/{id}', 'Clients@delete');
    Route::get('clients/view/{id}', 'Clients@view');

// for Serivce
    Route::get('service-add', 'Service@add');
    Route::post('service-store', 'Service@store');
    Route::post('service-update', 'Service@update');
    Route::get('service', 'Service@index');
    Route::get('service/edit/{id}', 'Service@edit');
    Route::get('service/delete/{id}', 'Service@delete');
    Route::get('service/view/{id}', 'Service@view');

// for Our Team
    Route::get('ourteam-add', 'OurTeam@add');
    Route::post('ourteam-store', 'OurTeam@store');
    Route::post('ourteam-update', 'OurTeam@update');
    Route::get('ourteam', 'OurTeam@index');
    Route::get('ourteam/edit/{id}', 'OurTeam@edit');
    Route::get('ourteam/delete/{id}', 'OurTeam@delete');
    Route::get('ourteam/view/{id}', 'OurTeam@view');
});
