<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'GenerateController@index')->name('home');

Route::get('/cutter', 'GenerateController@cutter')->name('cutter');

Route::get('/stat', 'GenerateController@stat')->name('stat');


Route::post('/cutter/done', 'GenerateController@done')->name('done');
Route::get('/cutter/done', function () {
    return view('cutterDone');
});

Route::post('/cutter/custom', 'GenerateController@custom')->name('custom');
Route::get('/cutter/custom', function () {
    return view('cutterDone');
});


Route::get('/{alias}', 'ServiceController@redirectToUrl');

Route::get('/404', function () {
    return view('404');
})->name('error404');
//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
