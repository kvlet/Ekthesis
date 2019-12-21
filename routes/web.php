<?php


Route::get('/home', function () {
    return view('home');
});

Route::get('/pragmatognomosines', function () {
    return view('pragmatognomosines.pragmatognomosines');
});
Route::get('/reports/checkstats/prosdiekpereosi/entolietaireias', function () {
    return view('entolietaireias');
});

Route::get('/reports/checkstats/prosdiekpereosi/anathesisesinergati', function () {
    return view('reports.checkstats.prosdiekpereosi.anathesisesinergati');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
