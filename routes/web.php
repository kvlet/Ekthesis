<?php


Route::get('/home', function () {
    return view('home');
});

//routes for pragmatognomisines
Route::get('pragmatognomosines', 'PragmController@create')->name('pragmatognomosines.create');
Route::post('pragmatognomosines', 'PragmController@store')->name('pragmatognomosines.store');
Route::get('pragmatognomosines/{id}', 'PragmController@edit')->name('pragmatognomosines.edit');
Route::put('pragmatognomosines/{id}', 'PragmController@update')->name('pragmatognomosines.update');
//Route::get('pragmatognomosines/{id}', 'PragmController@show')->name('pragmatognomosines.show');

/*Route::get('/pragmatognomosines', 'PragmController@create');
Route::post('/pragmatognomosines', 'PragmController@store');
Route::get('/pragmatognomosines/{id}', 'PragmController@edit');
Route::put('/pragmatognomosines/{id}', 'PragmController@update');*/

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



