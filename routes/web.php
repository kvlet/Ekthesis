<?php


Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
