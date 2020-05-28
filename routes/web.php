<?php

use Illuminate\Support\Facades\Route;

/*
corplawyear.com = Route:: get('/', function)
corplawyear.com/ = Route:: get('contact', function)



*/

Route::view('/index','index')->name('index')->name('index');
Route::view('/lawyears', 'lawyears')->name('lawyears');
Route::view('/publications', 'publications')->name('publications');
Route::view('/customers', 'customers')->name('customers');
Route::view('/contact', 'contact')->name('contact');
Route::view('/services', 'services')->name('services');
Route::view('/lineContact', 'lineContact')->name('lineContact');









