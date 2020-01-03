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
Route::get('/reports/check_stats/pros_diekpereosi/entoli_etaireias', function () {
    return view('reports.check_stats.pros_diekpereosi.entoli_etaireias');
});
Route::get('/reports/check_stats/pros_diekpereosi/anathesi_se_sinergati', function () {
    return view('reports.check_stats.pros_diekpereosi.anathesi_se_sinergati');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
