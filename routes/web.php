<?php

use Illuminate\Support\Facades\Route;


Auth::routes([              //отказ от стандартных функций аутентификации
    'reset'=>false,
    'confirm'=>false,
    'verify'=>false,
]);


Route::get('/', 'GenerateController@index')->name('home');


Route::get('/cutter', 'GenerateController@cutter')->name('cutter');

//статистика только для зарегистрировавшихся
Route::get('/stat', 'GenerateController@stat')->name('stat')->middleware('auth');


Route::post('/cutter/done', 'GenerateController@generate')->name('generate');

//прием аякс запроса
Route::post('/ajax', 'AjaxController@checkCustom');

//вход только для админа
Route::get('/admin', function () {
    return view('admin');})->name('admin')->middleware('checkAdmin');

//прием внешних запросов о генерации ссылки
Route::match(['get', 'post'],'/create', 'GenerateController@cutterAPI');

//страница с описанием API
Route::get('api', function () {
    return view('api');
})->name('api');

//роут для перенаправления с короткой ссылки
Route::get('/{alias}', 'ServiceController@redirectToUrl');


Route::get('/404', function () {
    return view('404');
})->name('error404');



