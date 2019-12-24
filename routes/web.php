<?php


Route::get('/home', function () {
    return view('home');
});
//routes για τις εκθέσεις
Route::get('/pragmatognomosines', function () {
    return view('pragmatognomosines.pragmatognomosines');
});

//routes για τα reports
Route::get('/reports/checkstats/prosdiekpereosi/entolietaireias', function () {
    return view('reports.checkstats.prosdiekpereosi.entolietaireias');
});
Route::get('/reports/checkstats/prosdiekpereosi/anathesisesinergati', function () {
    return view('reports.checkstats.prosdiekpereosi.anathesisesinergati');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
