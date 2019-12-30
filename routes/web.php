<?php


Route::get('/home', function () {
    return view('home');
});

//routes for pragmatognomisines
Route::get('pragmatognomosines', 'PragmatognomosinesController@create')->name('pragmatognomosines.create');
Route::post('pragmatognomosines', 'PragmatognomosinesController@store')->name('pragmatognomosines.store');
Route::get('pragmatognomosines/{id}', 'PragmatognomosinesController@edit')->name('pragmatognomosines.edit');
Route::put('pragmatognomosines/{id}', 'PragmatognomosinesController@update')->name('pragmatognomosines.update');

//routes for reports
Route::get('/reports/checkstats/prosdiekpereosi/entolietaireias', function () {
    return view('reports.checkstats.prosdiekpereosi.entolietaireias');
});
Route::get('/reports/checkstats/prosdiekpereosi/anathesisesinergati', function () {
    return view('reports.checkstats.prosdiekpereosi.anathesisesinergati');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
