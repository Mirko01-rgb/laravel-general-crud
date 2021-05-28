<?php

use Illuminate\Support\Facades\Route;

Route::get('home', 'TestController@home')
       ->name('home');

Route::get('/match/{id}', 'TestController@show')
      -> name('match');



Route::get('/create', 'TestController@create')
      -> name('create');

Route::post('/store', 'TestController@store')
      -> name('store');





Route::get('destroy/{id}', 'TestController@destroy')
      -> name('destroy');


Route::get('edit/match/{id}', 'TestController@edit')
      -> name('edit');
Route::post('update/match/{id}', 'TestController@update')
      -> name('update');
