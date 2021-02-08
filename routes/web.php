<?php

use Illuminate\Support\Facades\Route;


Auth::routes([
    'reset'=>false,
    'confirm'=>false,
    'verify'=>false,
]);

Route::get('/', 'GenerateController@index')->name('home');

Route::get('/cutter', 'GenerateController@cutter')->name('cutter');

Route::get('/stat', 'GenerateController@stat')->name('stat')->middleware('auth');

Route::post('/cutter/done', 'GenerateController@generate')->name('generate');

Route::post('/ajax', 'AjaxController@checkCustom');



Route::match(['get', 'post'],'/create', 'GenerateController@cutterAPI');
Route::get('api', function () {
    return view('api');
})->name('api');




Route::get('/{alias}', 'ServiceController@redirectToUrl');

Route::get('/404', function () {
    return view('404');
})->name('error404');







//Route::get('/home', 'HomeController@index')->name('home');



//Route::get('/', 'HomeController@index')->name('homeAuth');
