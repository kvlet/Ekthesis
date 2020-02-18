<?php


Route::get('/home', function () {
    return view('home');
});

//routes for pragmatognomisines
Route::get('pragmatognomosines', 'PragmController@create')->name('pragmatognomosines.create');
Route::post('pragmatognomosines', 'PragmController@store')->name('pragmatognomosines.store');
Route::get('pragmatognomosines/{id}', 'PragmController@edit')->name('pragmatognomosines.edit');
Route::put('pragmatognomosines/{id}', 'PragmController@update')->name('pragmatognomosines.update');
Route::get('ereunes', 'PragmController@create')->name('pragmatognomosines.create');
//Route::get('pragmatognomosines/{id}', 'PragmController@show')->name('pragmatognomosines.show');

Route::get('diakrisis', 'DiakrisiController@create')->name('diakrisis.create');
Route::post('diakrisis', 'DiakrisiController@store')->name('diakrisis.store');
/*Route::get('/pragmatognomosines', 'PragmController@create');
Route::post('/pragmatognomosines', 'PragmController@store');
Route::get('/pragmatognomosines/{id}', 'PragmController@edit');
Route::put('/pragmatognomosines/{id}', 'PragmController@update');*/
// end routes for pragmatognomisines


//routes for reports
Route::get('/reports/check_stats/pros_diekpereosi/entoli_etaireias', function () {
    return view('reports.check_stats.pros_diekpereosi.entoli_etaireias');
});
Route::get('/reports/check_stats/pros_diekpereosi/anathesi_se_sinergati', function () {
    return view('reports.check_stats.pros_diekpereosi.anathesi_se_sinergati');
});
// end routes for reports

// routes for Auth
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
// end  routs for auth


