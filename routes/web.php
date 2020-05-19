<?php


Route::get('/home', function () {

    return view('home');
});

//routes for pragmatognomisines
Route::get('pragmatognomosines', 'PragmController@create')->name('pragmatognomosines.create');
Route::post('pragmatognomosines', 'PragmController@store')->name('pragmatognomosines.store');
Route::get('pragmatognomosines/{id}', 'PragmController@edit')->name('pragmatognomosines.edit');
Route::put('pragmatognomosines/{id}', 'PragmController@update')->name('pragmatognomosines.update');
Route::get('pragmatognomosines/{id}/add_keimena', 'PragmController@create_keimena_ekth')->name('pragmatognomosines.create_keimena_ekth');
//Route::get('pragmatognomosines/{id}/add_keimena/{id_ekth}/{id_keim}', 'PragmController@edit_keimena_ekth')->name('pragmatognomosines.edit_keimena_ekth');
Route::post('pragmatognomosines/{id}/add_keimena', 'PragmController@store_keimena_ekth')->name('pragmatognomosines.store_keimena_ekth');
//Route::delete('pragmatognomosines/{id}/add_keimena/id_ekth/id_keim', 'PragmController@destroy_keimena_ekth')->name('pragmatognomosines.destroy_keimena_ekth');
Route::get('ereunes', 'PragmController@create')->name('pragmatognomosines.create');
Route::post('ereunes', 'PragmController@store')->name('pragmatognomosines.store');
Route::get('ereunes/{id}', 'PragmController@edit')->name('pragmatognomosines.edit');
Route::put('ereunes/{id}', 'PragmController@update')->name('pragmatognomosines.update');
Route::get('ereunes/{id}/add_keimena', 'PragmController@create_keimena_ekth')->name('pragmatognomosines.create_keimena_ekth');
//Route::get('ereunes/{id}/add_keimena/{id_ekth}/{id_keim}', 'PragmController@edit_keimena_ekth')->name('pragmatognomosines.edit_keimena_ekth');
Route::post('ereunes/{id}/add_keimena', 'PragmController@store_keimena_ekth')->name('pragmatognomosines.store_keimena_ekth');
//Route::delete('ereunes/{id}/add_keimena/id_ekth/id_keim', 'PragmController@destroy_keimena_ekth')->name('pragmatognomosines.destroy_keimena_ekth');
//Route::get('pragmatognomosines/{id}', 'PragmController@show')->name('pragmatognomosines.show');
// end routes for pragmatognomisines

// Route for pdf
Route::get('pdf/aitisiDikografias', 'PdfReportController@aitisiDikografias_pdf')->name('pdf.aitisiDikografias_pdf');
// end Route for pdf


// routes for look up tables
Route::get('diakrisis', 'DiakrisiController@create')->name('diakrisis.create');
Route::post('diakrisis', 'DiakrisiController@store')->name('diakrisis.store');
Route::get('diakrisis/{id}', 'DiakrisiController@edit')->name('diakrisis.edit');
Route::put('diakrisis/{id}', 'DiakrisiController@update')->name('diakrisis.update');

Route::get('nomoi', 'NomoiController@create')->name('nomoi.create');
Route::post('nomoi', 'NomoiController@store')->name('nomoi.store');

Route::get('place', 'PlaceController@create')->name('accedent_place.create');
Route::post('place', 'PlaceController@store')->name('accedent_place.store');
Route::get('place/{id}', 'PlaceController@edit')->name('accedent_place.edit');
Route::put('place/{id}', 'PlaceController@update')->name('accedent_place.update');

Route::get('arxi', 'ArxiController@create')->name('arxi_eggrafon.create');
Route::post('arxi', 'ArxiController@store')->name('arxi_eggrafon.store');

Route::get('company', 'CompanyController@create')->name('company.create');
Route::post('company', 'CompanyController@store')->name('company.store');
Route::get('company/{id}', 'CompanyController@edit')->name('company.edit');
Route::put('company/{id}', 'CompanyController@update')->name('company.update');

Route::get('manage_keimena', 'KeimenaController@create')->name('keimena.create');
Route::post('manage_keimena', 'KeimenaController@store')->name('keimena.store');
Route::get('manage_keimena/{id}', 'KeimenaController@edit')->name('keimena.edit');
Route::put('manage_keimena/{id}', 'KeimenaController@update')->name('keimena.update' );

Route::get('praktoreiο','PraktoreioController@create')->name('praktoreio.create');
Route::post('praktoreiο','PraktoreioController@store')->name('praktoreio.store');
Route::get('praktoreiο/{id}','PraktoreioController@edit')->name('praktoreio.edit');
Route::put('praktoreiο/{id}','PraktoreioController@update')->name('praktoreio.update');
Route::delete('praktoreiο/{id}','PraktoreioController@destroy')->name('praktoreio.destroy');

Route::get('synergeio','SynergeioController@create')->name('synergeio.create');
Route::post('synergeio','SynergeioController@store')->name('synergeio.store');
Route::get('synergeio/{id}','SynergeioController@edit')->name('synergeio.edit');
Route::put('synergeio/{id}','SynergeioController@update')->name('synergeio.update');
Route::delete('synergeio/{id}','SynergeioController@destroy')->name('synergeio.destroy');

Route::get('person','PersonController@create')->name('person.create');
Route::post('person','PersonController@store')->name('person.store');
Route::get('person/{id}','PersonController@edit')->name('person.edit');
Route::put('person/{id}','PersonController@update')->name('person.update');
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


