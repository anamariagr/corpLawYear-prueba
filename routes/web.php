<?php

use Illuminate\Support\Facades\Route;

/*
corplawyear.com = Route:: get('/', function)
corplawyear.com/ = Route:: get('contact', function)



*/
Route::get('services/{slug}','ServiceController@showService');
Route::get('/','HomeController@home')->name('index');
Route::get('/lawyers','LawyersController@getLawyers')->name('lawyers');
Route::get('/publications','PublicationsController@index')->name('publications');
Route::get('/customers','CustomersController')->name('customers');
Route::get('/responsabilidad_social','ResponsabilitysController')->name('service_20');










Auth::routes();

