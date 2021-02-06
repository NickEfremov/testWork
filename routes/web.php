<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'GenerateController@index')->name('home');

Route::get('/cutter', 'GenerateController@cutter')->name('cutter');

Route::get('/stat', 'GenerateController@stat')->name('stat');

Route::post('/cutter/done', 'GenerateController@generate')->name('generate');

Route::post('/ajax', 'AjaxController@checkCustom');






Route::get('/{alias}', 'ServiceController@redirectToUrl');

Route::get('/404', function () {
    return view('404');
})->name('error404');
//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
