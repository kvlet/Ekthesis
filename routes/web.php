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
Route::post('ereunes', 'PragmController@store')->name('pragmatognomosines.store');
Route::get('ereunes/{id}', 'PragmController@edit')->name('pragmatognomosines.edit');
Route::put('ereunes/{id}', 'PragmController@update')->name('pragmatognomosines.update');
//Route::get('pragmatognomosines/{id}', 'PragmController@show')->name('pragmatognomosines.show');
// end routes for pragmatognomisines

// routes for look up tables
Route::get('diakrisis', 'DiakrisiController@create')->name('diakrisis.create');
Route::post('diakrisis', 'DiakrisiController@store')->name('diakrisis.store');
Route::get('nomoi', 'NomoiController@create')->name('nomoi.create');
Route::post('nomoi', 'NomoiController@store')->name('nomoi.store');
Route::get('place', 'PlaceController@create')->name('accident_place.create');
Route::post('place', 'PlaceController@store')->name('accident_place.store');
Route::get('arxi', 'ArxiController@create')->name('arxi_eggrafon.create');
Route::post('arxi', 'ArxiController@store')->name('arxi_eggrafon.store');
Route::get('company', 'CompanyController@create')->name('company.create');
Route::post('company', 'CompanyController@store')->name('company.store');
Route::get('company/{id}', 'CompanyController@edit')->name('company.edit');
Route::put('company/{id}', 'CompanyController@update')->name('company.update');
// end routes for look up tables

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
// end routes for reports

// routes for Auth
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
// end  routs for auth


