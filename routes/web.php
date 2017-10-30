<?php

Route::get('/', 'FrontController@index')->name('front.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
