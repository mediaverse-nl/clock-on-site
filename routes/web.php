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

Route::get('/', 'WelcomeController')->name('home');
Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::get('/services', function (){
    return view('site.services');
})->name('service.index');

Route::get('/system', function (){
    return view('site.system');
})->name('system.index');

Route::get('/over-ons', function (){
    return view('site.about');
})->name('about.index');

Route::get('/roadmap', function (){
    return view('site.roadmap');
})->name('roadmap.index');

Route::get('/privacy-policy', function (){
    return view('site.privacy');
})->name('privacy.index');

Route::get('/terms-of-use', function (){
    return view('site.terms');
})->name('terms.index');

Route::get('/terms-of-use', function (){
    return view('site.terms');
})->name('terms.index');

