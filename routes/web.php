<?php

Route::get('/', 'FrontController@index')->name('front.index');

Route::get('/chatroom', 'ChatController@index')->name('chat.index');

Route::post('/send', 'ChatController@send')->name('chat.send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
