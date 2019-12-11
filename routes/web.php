<?php


Route::get('/home', function () {
    return view('home');
});

Route::get('/reports/checkstats/prosdiekpereosi/entolietaireias', function () {
    return view('entolietaireias');
});



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
