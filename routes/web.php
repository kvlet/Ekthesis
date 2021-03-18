<?php

//Route::get('/home', function () {
//    return view('home');
//});

//routes for pragmatognomisines
// routes for Auth
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// end  routs for auth
Route::group(['middleware' => ['auth', 'subscribed']], function () {
    Route::post('/', 'HomeController@search')->name('search');

// Settings and storage routes
    Route::get('/settings', 'SettingsController@index')->name('settings');
    Route::get('/storage/connect', 'StorageController@connect')->name('storage.connect');
    Route::group(['middleware' => ['auth', 'DropboxAuthenticated']], function () {
        Route::get('/storage/disconnect', 'StorageController@disconnect')->name('storage.disconnect');
        Route::get('/storage/files/{path?}', 'StorageController@index')->where('path', '(.*)')->name('storage.index');
    });

    Route::get('pragma_search', 'PragmController@opensearch')->name('pragmatognomosines.opensearch');
    Route::post('pragma_search', 'PragmController@search')->name('pragmatognomosines.search');

    Route::get('pragmatognomosines', 'PragmController@create')->name('pragmatognomosines.create');
    Route::post('pragmatognomosines', 'PragmController@store')->name('pragmatognomosines.store');
    Route::get('pragmatognomosines/{id}', 'PragmController@edit')->name('pragmatognomosines.edit');
    Route::put('pragmatognomosines/{id}', 'PragmController@update')->name('pragmatognomosines.update');
    Route::put('pragmatognomosines/{id}/update_note', 'PragmController@update_note')->name('pragmatognomosines.update_note');

    Route::get('pragmatognomosines/{id}/add_keimena', 'PragmController@create_keimena_ekth')->name('pragmatognomosines.create_keimena_ekth');
    Route::post('pragmatognomosines/{id}/add_keimena', 'PragmController@store_keimena_ekth')->name('pragmatognomosines.store_keimena_ekth');
    Route::get('pragmatognomosines/{id}/edit_keimena/{second_id}', 'PragmController@edit_keimena_ekth');
    Route::post('pragmatognomosines/edit_keimena', 'PragmController@update_keimena_ekth')->name('pragmatognomosines.update_keimena_ekth');
    Route::get('pragmatognomosines/{id}/delete_keimena/{second_id}', 'PragmController@delete_keimena_ekth')->name('pragmatognomosines.delete_keimena_ekth');
    Route::delete('pragmatognomosines/delete_keimena', 'PragmController@destroy_keimena_ekth')->name('pragmatognomosines.destroy_keimena_ekth');

    Route::get('pragmatognomosines/{id}/add_praktoreia', 'PragmController@create_praktoreia_ekth')->name('pragmatognomosines.create_praktoreia_ekth');
    Route::post('pragmatognomosines/{id}/add_praktoreia', 'PragmController@store_praktoreia_ekth')->name('pragmatognomosines.store_praktoreia_ekth');
    Route::get('pragmatognomosines/{id}/edit_praktoreia/{second_id}', 'PragmController@edit_praktoreia_ekth');
    Route::post('pragmatognomosines/edit_praktoreia', 'PragmController@update_praktoreia_ekth')->name('pragmatognomosines.update_praktoreia_ekth');
    Route::get('pragmatognomosines/{id}/delete_praktoreia/{second_id}', 'PragmController@delete_praktoreia_ekth')->name('pragmatognomosines.delete_praktoreia_ekth');
    Route::delete('pragmatognomosines/delete_praktoreia', 'PragmController@destroy_praktoreia_ekth')->name('pragmatognomosines.destroy_praktoreia_ekth');

    Route::get('pragmatognomosines/{id}/add_details_nop/{second_id}', 'PragmController@create_details_ekth_nop')->name('pragmatognomosines.create_details_ekth_nop');
    Route::get('pragmatognomosines/{id}/add_details/{second_id}', 'PragmController@create_details_ekth')->name('pragmatognomosines.create_details_ekth');
    Route::post('pragmatognomosines/{id}/add_details/', 'PragmController@store_details_ekth')->name('pragmatognomosines.store_details_ekth');
    Route::get('pragmatognomosines/{id}/edit_details/{second_id}/{third_id}', 'PragmController@edit_details_ekth');
    Route::get('pragmatognomosines/{id}/edit_details_nop/{second_id}/{third_id}', 'PragmController@edit_details_ekth_nop');
    Route::get('pragmatognomosines/{id}/delete_details/{second_id}/{third_id}', 'PragmController@delete_details_ekth')->name('pragmatognomosines.delete_details_ekth');
    Route::get('pragmatognomosines/{id}/delete_details_nop/{second_id}/{third_id}', 'PragmController@delete_details_ekth_nop')->name('pragmatognomosines.delete_details_ekth_nop');
    Route::post('pragmatognomosines/edit_details/{id}', 'PragmController@update_details_ekth')->name('pragmatognomosines.update_details_ekth');
    Route::delete('pragmatognomosines/delete_details/{id}', 'PragmController@destroy_details_ekth')->name('pragmatognomosines.destroy_details_ekth');

    Route::get('pragmatognomosines/{id}/add_synergeia', 'PragmController@create_synergeia_ekth')->name('pragmatognomosines.create_synergeia_ekth');
    Route::post('pragmatognomosines/{id}/add_synergeia', 'PragmController@store_synergeia_ekth')->name('pragmatognomosines.store_synergeia_ekth');
    Route::get('pragmatognomosines/{id}/edit_synergeia/{second_id}', 'PragmController@edit_synergeia_ekth');
    Route::post('pragmatognomosines/edit_synergeia', 'PragmController@update_synergeia_ekth')->name('pragmatognomosines.update_synergeia_ekth');
    Route::get('pragmatognomosines/{id}/delete_synergeia/{second_id}', 'PragmController@delete_synergeia_ekth')->name('pragmatognomosines.delete_synergeia_ekth');
    Route::delete('pragmatognomosines/delete_synergeia', 'PragmController@destroy_synergeia_ekth')->name('pragmatognomosines.destroy_synergeia_ekth');

    Route::get('pragmatognomosines/{id}/add_proiparxouses', 'PragmController@create_proiparxouses')->name('pragmatognomosines.create_proiparxouses');
    Route::post('pragmatognomosines/{id}/add_proiparxouses', 'PragmController@store_proiparxouses')->name('pragmatognomosines.store_proiparxouses');
    Route::get('pragmatognomosines/{id}/edit_proiparxouses/{second_id}/{third_id}/{fourth_id}', 'PragmController@edit_proiparxouses');
    Route::post('pragmatognomosines/edit_proiparxouses/{id}', 'PragmController@update_proiparxouses')->name('pragmatognomosines.update_proiparxouses');
    Route::get('pragmatognomosines/{id}/delete_proiparxouses/{second_id}/{third_id}/{fourth_id}', 'PragmController@delete_proiparxouses')->name('pragmatognomosines.delete_proiparxouses');
    Route::delete('pragmatognomosines/delete_proiparxouses/{id}', 'PragmController@destroy_proiparxouses')->name('pragmatognomosines.destroy_proiparxouses');

    Route::get('pragmatognomosines/{id}/add_status', 'PragmController@create_status_ekth')->name('pragmatognomosines.create_status_ekth');
    Route::post('pragmatognomosines/{id}/add_status', 'PragmController@store_status_ekth')->name('pragmatognomosines.store_status_ekth');
    Route::get('pragmatognomosines/{id}/edit_status/{second_id}', 'PragmController@edit_status_ekth');
    Route::post('pragmatognomosines/edit_status', 'PragmController@update_status_ekth')->name('pragmatognomosines.update_status_ekth');
    Route::get('pragmatognomosines/{id}/delete_status/{second_id}', 'PragmController@delete_status_ekth')->name('pragmatognomosines.delete_status_ekth');
    Route::delete('pragmatognomosines/delete_status', 'PragmController@destroy_status_ekth')->name('pragmatognomosines.destroy_status_ekth');

    Route::get('pragmatognomosines/{id}/add_provlep', 'PragmController@create_provlep_ekth')->name('pragmatognomosines.create_provlep_ekth');
    Route::post('pragmatognomosines/{id}/add_provlep', 'PragmController@store_provlep_ekth')->name('pragmatognomosines.store_provlep_ekth');
    Route::get('pragmatognomosines/{id}/edit_provlep/{second_id}', 'PragmController@edit_provlep_ekth');
    Route::post('pragmatognomosines/edit_provlep/{id}', 'PragmController@update_provlep_ekth')->name('pragmatognomosines.update_provlep_ekth');
    Route::get('pragmatognomosines/{id}/delete_provlep/{second_id}', 'PragmController@delete_provlep_ekth')->name('pragmatognomosines.delete_provlep_ekth');
    Route::delete('pragmatognomosines/delete_provlep', 'PragmController@destroy_provlep_ekth')->name('pragmatognomosines.destroy_provlep_ekth');

    Route::get('pragmatognomosines/{id}/add_involv_cars', 'PragmController@create_involv_cars')->name('pragmatognomosines.create_involv_cars');
    Route::post('pragmatognomosines/{id}/add_involv_cars', 'PragmController@store_involv_cars')->name('pragmatognomosines.store_involv_cars');
    Route::get('pragmatognomosines/{id}/edit_involv_cars/{second_id}/{third_id}', 'PragmController@edit_involv_cars');
    Route::post('pragmatognomosines/edit_involv_cars/{id}', 'PragmController@update_involv_cars')->name('pragmatognomosines.update_involv_cars');
    Route::get('pragmatognomosines/{id}/delete_involv_cars/{second_id}/{third_id}', 'PragmController@delete_involv_cars')->name('pragmatognomosines.delete_involv_cars');
    Route::delete('pragmatognomosines/delete_involv_cars/{id}', 'PragmController@destroy_involv_cars')->name('pragmatognomosines.destroy_involv_cars');

    Route::get('pragmatognomosines/{id}/add_expen_ekth', 'PragmController@create_expen_ekth')->name('pragmatognomosines.create_expen_ekth');
    Route::post('pragmatognomosines/{id}/add_expen_ekth', 'PragmController@store_expen_ekth')->name('pragmatognomosines.store_expen_ekth');
    Route::get('pragmatognomosines/{id}/edit_expen_ekth/{second_id}', 'PragmController@edit_expen_ekth');
    Route::post('pragmatognomosines/edit_expen_ekth/{id}', 'PragmController@update_expen_ekth')->name('pragmatognomosines.update_expen_ekth');
    Route::get('pragmatognomosines/{id}/delete_expen_ekth/{second_id}', 'PragmController@delete_expen_ekth')->name('pragmatognomosines.delete_expen_ekth');
    Route::delete('pragmatognomosines/delete_expen_ekth', 'PragmController@destroy_expen_ekth')->name('pragmatognomosines.destroy_expen_ekth');

    Route::get('pragmatognomosines/{id}/add_expen_partner_ekth', 'PragmController@create_expen_partner_ekth')->name('pragmatognomosines.create_expen_partner_ekth');
    Route::post('pragmatognomosines/{id}/add_expen_partner_ekth', 'PragmController@store_expen_partner_ekth')->name('pragmatognomosines.store_expen_partner_ekth');
    Route::get('pragmatognomosines/{id}/edit_expen_partner_ekth/{second_id}/{third_id}', 'PragmController@edit_expen_partner_ekth');
    Route::post('pragmatognomosines/edit_expen_partner_ekth/{id}', 'PragmController@update_expen_partner_ekth')->name('pragmatognomosines.update_expen_partner_ekth');
    Route::get('pragmatognomosines/{id}/delete_expen_partner_ekth/{second_id}/{third_id}', 'PragmController@delete_expen_partner_ekth')->name('pragmatognomosines.delete_expen_partner_ekth');
    Route::delete('pragmatognomosines/delete_expen_partner_ekth', 'PragmController@destroy_expen_partner_ekth')->name('pragmatognomosines.destroy_expen_partner_ekth');

    Route::get('pragmatognomosines/{id}/add_foto', 'StorageController@create_foto_ekth')->name('pragmatognomosines.create_foto_ekth');
    Route::post('pragmatognomosines/{id}/add_foto', 'StorageController@store_foto_ekth')->name('pragmatognomosines.store_foto_ekth');
    Route::get('pragmatognomosines/{id}/edit_foto/{second_id}', 'StorageController@edit_foto_ekth');
    Route::post('pragmatognomosines/edit_foto', 'StorageController@update_foto_ekth')->name('pragmatognomosines.update_foto_ekth');
    Route::get('pragmatognomosines/{id}/delete_foto/{second_id}', 'StorageController@delete_foto_ekth')->name('pragmatognomosines.delete_foto_ekth');
    Route::delete('pragmatognomosines/delete_foto', 'StorageController@destroy_foto_ekth')->name('pragmatognomosines.destroy_foto_ekth');

    Route::get('ereunes', 'PragmController@create')->name('pragmatognomosines.create');
    Route::post('ereunes', 'PragmController@store')->name('pragmatognomosines.store');
    Route::get('ereunes/{id}', 'PragmController@edit')->name('pragmatognomosines.edit');
    Route::put('ereunes/{id}', 'PragmController@update')->name('pragmatognomosines.update');
    Route::put('ereunes/{id}/update_note', 'PragmController@update_note')->name('pragmatognomosines.update_note');

    Route::get('ereunes/{id}/add_keimena', 'PragmController@create_keimena_ekth')->name('pragmatognomosines.create_keimena_ekth');
    Route::post('ereunes/{id}/add_keimena', 'PragmController@store_keimena_ekth')->name('pragmatognomosines.store_keimena_ekth');
    Route::get('ereunes/{id}/edit_keimena/{second_id}', 'PragmController@edit_keimena_ekth');
    Route::post('ereunes/edit_keimena', 'PragmController@update_keimena_ekth')->name('pragmatognomosines.update_keimena_ekth');
    Route::get('ereunes/{id}/delete_keimena/{second_id}', 'PragmController@delete_keimena_ekth')->name('pragmatognomosines.delete_keimena_ekth');
    Route::delete('ereunes/delete_keimena', 'PragmController@destroy_keimena_ekth')->name('pragmatognomosines.destroy_keimena_ekth');

    Route::get('ereunes/{id}/add_praktoreia', 'PragmController@create_praktoreia_ekth')->name('pragmatognomosines.create_praktoreia_ekth');
    Route::post('ereunes/{id}/add_praktoreia', 'PragmController@store_praktoreia_ekth')->name('pragmatognomosines.store_praktoreia_ekth');
    Route::get('ereunes/{id}/edit_praktoreia/{second_id}', 'PragmController@edit_praktoreia_ekth');
    Route::post('ereunes/edit_praktoreia', 'PragmController@update_praktoreia_ekth')->name('pragmatognomosines.update_praktoreia_ekth');
    Route::get('ereunes/{id}/delete_praktoreia/{second_id}', 'PragmController@delete_praktoreia_ekth')->name('pragmatognomosines.delete_praktoreia_ekth');
    Route::delete('ereunes/delete_praktoreia', 'PragmController@destroy_praktoreia_ekth')->name('pragmatognomosines.destroy_praktoreia_ekth');

    Route::get('ereunes/{id}/add_synergeia', 'PragmController@create_synergeia_ekth')->name('pragmatognomosines.create_synergeia_ekth');
    Route::post('ereunes/{id}/add_synergeia', 'PragmController@store_synergeia_ekth')->name('pragmatognomosines.store_synergeia_ekth');
    Route::get('ereunes/{id}/edit_synergeia/{second_id}', 'PragmController@edit_synergeia_ekth');
    Route::post('ereunes/edit_synergeia', 'PragmController@update_synergeia_ekth')->name('pragmatognomosines.update_synergeia_ekth');
    Route::get('ereunes/{id}/delete_synergeia/{second_id}', 'PragmController@delete_synergeia_ekth')->name('pragmatognomosines.delete_synergeia_ekth');
    Route::delete('ereunes/delete_synergeia', 'PragmController@destroy_synergeia_ekth')->name('pragmatognomosines.destroy_synergeia_ekth');

    Route::get('ereunes/{id}/add_status', 'PragmController@create_status_ekth')->name('pragmatognomosines.create_status_ekth');
    Route::post('ereunes/{id}/add_status', 'PragmController@store_status_ekth')->name('pragmatognomosines.store_status_ekth');
    Route::get('ereunes/{id}/edit_status/{second_id}', 'PragmController@edit_status_ekth');
    Route::post('ereunes/edit_status', 'PragmController@update_status_ekth')->name('pragmatognomosines.update_status_ekth');
    Route::get('ereunes/{id}/delete_status/{second_id}', 'PragmController@delete_status_ekth')->name('pragmatognomosines.delete_status_ekth');
    Route::delete('ereunes/delete_status', 'PragmController@destroy_status_ekth')->name('pragmatognomosines.destroy_status_ekth');

    Route::get('ereunes/{id}/add_provlep', 'PragmController@create_provlep_ekth')->name('pragmatognomosines.create_provlep_ekth');
    Route::post('ereunes/{id}/add_provlep', 'PragmController@store_provlep_ekth')->name('pragmatognomosines.store_provlep_ekth');
    Route::get('ereunes/{id}/edit_provlep/{second_id}', 'PragmController@edit_provlep_ekth');
    Route::post('ereunes/edit_provlep/{id}', 'PragmController@update_provlep_ekth')->name('pragmatognomosines.update_provlep_ekth');
    Route::get('ereunes/{id}/delete_provlep/{second_id}', 'PragmController@delete_provlep_ekth')->name('pragmatognomosines.delete_provlep_ekth');
    Route::delete('ereunes/delete_provlep', 'PragmController@destroy_provlep_ekth')->name('pragmatognomosines.destroy_provlep_ekth');

    Route::get('ereunes/{id}/add_involv_cars', 'PragmController@create_involv_cars')->name('pragmatognomosines.create_involv_cars');
    Route::post('ereunes/{id}/add_involv_cars', 'PragmController@store_involv_cars')->name('pragmatognomosines.store_involv_cars');
    Route::get('ereunes/{id}/edit_involv_cars/{second_id}/{third_id}', 'PragmController@edit_involv_cars');
    Route::post('ereunes/edit_involv_cars/{id}', 'PragmController@update_involv_cars')->name('pragmatognomosines.update_involv_cars');
    Route::get('ereunes/{id}/delete_involv_cars/{second_id}/{third_id}', 'PragmController@delete_involv_cars')->name('pragmatognomosines.delete_involv_cars');
    Route::delete('ereunes/delete_involv_cars/{id}', 'PragmController@destroy_involv_cars')->name('pragmatognomosines.destroy_involv_cars');

    Route::get('ereunes/{id}/add_expen_ekth', 'PragmController@create_expen_ekth')->name('pragmatognomosines.create_expen_ekth');
    Route::post('ereunes/{id}/add_expen_ekth', 'PragmController@store_expen_ekth')->name('pragmatognomosines.store_expen_ekth');
    Route::get('ereunes/{id}/edit_expen_ekth/{second_id}', 'PragmController@edit_expen_ekth');
    Route::post('ereunes/edit_expen_ekth/{id}', 'PragmController@update_expen_ekth')->name('pragmatognomosines.update_expen_ekth');
    Route::get('ereunes/{id}/delete_expen_ekth/{second_id}', 'PragmController@delete_expen_ekth')->name('pragmatognomosines.delete_expen_ekth');
    Route::delete('ereunes/delete_expen_ekth', 'PragmController@destroy_expen_ekth')->name('pragmatognomosines.destroy_expen_ekth');

    Route::get('ereunes/{id}/add_expen_partner_ekth', 'PragmController@create_expen_partner_ekth')->name('pragmatognomosines.create_expen_partner_ekth');
    Route::post('ereunes/{id}/add_expen_partner_ekth', 'PragmController@store_expen_partner_ekth')->name('pragmatognomosines.store_expen_partner_ekth');
    Route::get('ereunes/{id}/edit_expen_partner_ekth/{second_id}/{third_id}', 'PragmController@edit_expen_partner_ekth');
    Route::post('ereunes/edit_expen_partner_ekth/{id}', 'PragmController@update_expen_partner_ekth')->name('pragmatognomosines.update_expen_partner_ekth');
    Route::get('ereunes/{id}/delete_expen_partner_ekth/{second_id}/{third_id}', 'PragmController@delete_expen_partner_ekth')->name('pragmatognomosines.delete_expen_partner_ekth');
    Route::delete('ereunes/delete_expen_partner_ekth', 'PragmController@destroy_expen_partner_ekth')->name('pragmatognomosines.destroy_expen_partner_ekth');

    Route::get('ereunes/{id}/add_foto', 'StorageController@create_foto_ekth')->name('pragmatognomosines.create_foto_ekth');
    Route::post('ereunes/{id}/add_foto', 'StorageController@store_foto_ekth')->name('pragmatognomosines.store_foto_ekth');
    Route::get('ereunes/{id}/edit_foto/{second_id}', 'StorageController@edit_foto_ekth');
    Route::post('ereunes/edit_foto', 'StorageController@update_foto_ekth')->name('pragmatognomosines.update_foto_ekth');
    Route::get('ereunes/{id}/delete_foto/{second_id}', 'StorageController@delete_foto_ekth')->name('pragmatognomosines.delete_foto_ekth');
    Route::delete('ereunes/delete_foto', 'StorageController@destroy_foto_ekth')->name('pragmatognomosines.destroy_foto_ekth');
//Route::get('pragmatognomosines/{id}', 'PragmController@show')->name('pragmatognomosines.show');
// end routes for pragmatognomisines

// Route for pdf
    Route::get('pdf/aitisiDikografias', 'PdfReportController@aitisiDikografias_pdf')->name('pdf.aitisiDikografias_pdf');
// end Route for pdf

// Route for company
    Route::get('company', 'CompanyController@create')->name('company.create');
    Route::post('company', 'CompanyController@store')->name('company.store');
    Route::post('company_ajax', 'CompanyController@store_ajax')->name('company.store.ajax');
    Route::post('companyReal_ajax', 'CompanyController@storeReal_ajax')->name('company.storeReal.ajax');
    Route::post('companyYpait_ajax', 'CompanyController@storeYpait_ajax')->name('company.storeYpait.ajax');
    Route::get('company/search', 'CompanyController@opensearch')->name('company.opensearch');
    Route::post('company/search', 'CompanyController@search')->name('company.search');
    Route::get('company/{id}', 'CompanyController@edit')->name('company.edit');
    Route::put('company/{id}', 'CompanyController@update')->name('company.update');

    Route::get('company/{id}/add_department', 'CompanyController@create_company_dept')->name('company.create_company_dept');
    Route::post('company/{id}/add_department', 'CompanyController@store_company_dept')->name('company.store_company_dept');
    Route::get('company/{id}/edit_department/{second_id}', 'CompanyController@edit_company_dept');
    Route::post('company/edit_department', 'CompanyController@update_company_dept')->name('company.update_company_dept');
    Route::get('company/{id}/delete_department/{second_id}', 'CompanyController@delete_company_dept')->name('company.delete_company_dept');
    Route::delete('company/delete_department', 'CompanyController@destroy_company_dept')->name('company.destroy_company_dept');

    Route::get('company/{id}/add_price', 'CompanyController@create_company_price')->name('company.create_company_price');
    Route::post('company/{id}/add_price', 'CompanyController@store_company_price')->name('company.store_company_price');
    Route::get('company/{id}/edit_price/{second_id}', 'CompanyController@edit_company_price');
    Route::post('company/edit_price', 'CompanyController@update_company_price')->name('company.update_company_price');
    Route::get('company/{id}/delete_price/{second_id}', 'CompanyController@delete_company_price')->name('company.delete_company_price');
    Route::delete('company/delete_price', 'CompanyController@destroy_company_price')->name('company.destroy_company_price');
// end Route for company

// Route for oximata
    Route::get('oximata', 'OximataController@create')->name('oximata.create');
    Route::post('oximata', 'OximataController@store')->name('oximata.store');
    Route::get('oximata/search', 'OximataController@opensearch')->name('oximata.opensearch');
    Route::post('oximata/search', 'OximataController@search')->name('oximata.search');
    Route::get('oximata/{id}', 'OximataController@edit')->name('oximata.edit');
    Route::put('oximata/{id}', 'OximataController@update')->name('oximata.update');

    Route::get('oximata/{id}/add_spec', 'OximataController@create_spec')->name('oximata.create_spec');
    Route::post('oximata/{id}/add_spec', 'OximataController@store_spec')->name('oximata.store_spec');
    Route::put('oximata/{id}/update_spec', 'OximataController@update_spec')->name('oximata.update_spec');

    Route::get('oximata/{id}/add_owner', 'OximataController@create_owner')->name('oximata.create_owner');
    Route::post('oximata/{id}/add_owner', 'OximataController@store_owner')->name('oximata.store_owner');
    Route::put('oximata/{id}/update_owner', 'OximataController@update_owner')->name('oximata.update_owner');
    Route::get('oximata/{id}/edit_owner/{second_id}/{third_id}', 'OximataController@edit_owner')->name('oximata.edit_owner');
// end Route for oximata

// Route for parts
    Route::get('parts', 'PartsController@create')->name('parts.create');
    Route::post('parts', 'PartsController@store')->name('parts.store');
    Route::get('parts/search', 'PartsController@opensearch')->name('parts.opensearch');
    Route::post('parts/search', 'PartsController@search')->name('parts.search');
    Route::get('parts/{id}', 'PartsController@edit')->name('parts.edit');
    Route::put('parts/{id}', 'PartsController@update')->name('parts.update');
    Route::get('parts/{id}/add_ergasia', 'PartsController@create_part_ergasia')->name('parts.create_part_ergasia');
    Route::post('parts/{id}/add_ergasia', 'PartsController@store_part_ergasia')->name('parts.store_part_ergasia');
    Route::get('parts/{id}/delete_ergasia/{second_id}', 'PartsController@delete_part_ergasia')->name('parts.delete_part_ergasia');
    Route::delete('parts/delete_ergasia', 'PartsController@destroy_part_ergasia')->name('parts.destroy_part_ergasia');
// end Route for parts

// Route for ergasies
    Route::get('ergasies', 'ErgasiesController@create')->name('ergasies.create');
    Route::post('ergasies', 'ErgasiesController@store')->name('ergasies.store');
    Route::get('ergasies/search', 'ErgasiesController@opensearch')->name('ergasies.opensearch');
    Route::post('ergasies/search', 'ErgasiesController@search')->name('ergasies.search');
    Route::get('ergasies/{id}', 'ErgasiesController@edit')->name('ergasies.edit');
    Route::put('ergasies/{id}', 'ErgasiesController@update')->name('ergasies.update');
    Route::get('ergasies/{id}/add_part', 'ErgasiesController@create_ergasia_part')->name('ergasies.create_ergasia_part');
    Route::post('ergasies/{id}/add_part', 'ErgasiesController@store_ergasia_part')->name('ergasies.store_ergasia_part');
    Route::get('ergasies/{id}/delete_part/{second_id}', 'ErgasiesController@delete_ergasia_part')->name('ergasies.delete_ergasia_part');
    Route::delete('ergasies/delete_part', 'ErgasiesController@destroy_ergasia_part')->name('ergasies.destroy_ergasia_part');
// end Route for parts

// Route for keimena
    Route::get('manage_keimena', 'KeimenaController@create')->name('keimena.create');
    Route::post('manage_keimena', 'KeimenaController@store')->name('keimena.store');
    Route::get('manage_keimena/{id}', 'KeimenaController@edit')->name('keimena.edit');
    Route::put('manage_keimena/{id}', 'KeimenaController@update')->name('keimena.update');
// end Route for keimena

// routes for look up tables
    Route::get('diakrisis', 'DiakrisiController@create')->name('diakrisis.create');
    Route::post('diakrisis', 'DiakrisiController@store')->name('diakrisis.store');
    Route::post('diakrisis_ajax', 'DiakrisiController@store_ajax')->name('diakrisis.store.ajax');
    Route::get('diakrisis/{id}', 'DiakrisiController@edit')->name('diakrisis.edit');
    Route::put('diakrisis/{id}', 'DiakrisiController@update')->name('diakrisis.update');

    Route::get('nomoi', 'NomoiController@create')->name('nomoi.create');
    Route::post('nomoi', 'NomoiController@store')->name('nomoi.store');
    Route::post('nomoi_ajax', 'NomoiController@store_ajax')->name('nomoi.store.ajax');
    Route::get('nomoi/{id}', 'NomoiController@edit')->name('nomoi.edit');
    Route::put('nomoi/{id}', 'NomoiController@update')->name('nomoi.update');

    Route::get('place', 'PlaceController@create')->name('accedent_place.create');
    Route::post('place', 'PlaceController@store')->name('accedent_place.store');
    Route::post('place_ajax', 'PlaceController@store_ajax')->name('accedent_place.store.ajax');
    Route::get('place/{id}', 'PlaceController@edit')->name('accedent_place.edit');
    Route::put('place/{id}', 'PlaceController@update')->name('accedent_place.update');

    Route::get('arxi', 'ArxiController@create')->name('arxi_eggrafon.create');
    Route::post('arxi', 'ArxiController@store')->name('arxi_eggrafon.store');
    Route::post('arxi_ajax', 'ArxiController@store_ajax')->name('arxi_eggrafon.store.ajax');
    Route::get('arxi/{id}', 'ArxiController@edit')->name('arxi_eggrafon.edit');
    Route::put('arxi/{id}', 'ArxiController@update')->name('arxi_eggrafon.update');

    Route::get('praktoreiο', 'PraktoreioController@create')->name('praktoreio.create');
    Route::post('praktoreiο', 'PraktoreioController@store')->name('praktoreio.store');
    Route::get('praktoreiο/search', 'PraktoreioController@opensearch')->name('praktoreiο.opensearch');
    Route::post('praktoreiο/search', 'PraktoreioController@search')->name('praktoreiο.search');
    Route::get('praktoreiο/{id}', 'PraktoreioController@edit')->name('praktoreio.edit');
    Route::put('praktoreiο/{id}', 'PraktoreioController@update')->name('praktoreio.update');
    Route::delete('praktoreiο/{id}', 'PraktoreioController@destroy')->name('praktoreio.destroy');

    Route::get('synergeio', 'SynergeioController@create')->name('synergeio.create');
    Route::post('synergeio', 'SynergeioController@store')->name('synergeio.store');
    Route::get('synergeio/search', 'SynergeioController@opensearch')->name('synergeio.opensearch');
    Route::post('synergeio/search', 'SynergeioController@search')->name('synergeio.search');
    Route::get('synergeio/{id}', 'SynergeioController@edit')->name('synergeio.edit');
    Route::put('synergeio/{id}', 'SynergeioController@update')->name('synergeio.update');
    Route::delete('synergeio/{id}', 'SynergeioController@destroy')->name('synergeio.destroy');

    Route::get('person', 'PersonController@create')->name('person.create');
    Route::post('person', 'PersonController@store')->name('person.store');
    Route::get('person/search', 'PersonController@opensearch')->name('person.opensearch');
    Route::post('person/search', 'PersonController@search')->name('person.search');
    Route::get('person/{id}', 'PersonController@edit')->name('person.edit');
    Route::put('person/{id}', 'PersonController@update')->name('person.update');


    Route::get('markes', 'MarkaController@create')->name('markes.create');
    Route::post('markes', 'MarkaController@store')->name('markes.store');
    Route::post('markes_ajax', 'MarkaController@store_ajax')->name('markes.store.ajax');
    Route::get('markes/{id}', 'MarkaController@edit')->name('markes.edit');
    Route::put('markes/{id}', 'MarkaController@update')->name('markes.update');

    Route::get('xrisi', 'XrisiController@create')->name('xrisi.create');
    Route::post('xrisi', 'XrisiController@store')->name('xrisi.store');
    Route::post('xrisi_ajax', 'XrisiController@store_ajax')->name('xrisi.store.ajax');
    Route::get('xrisi/{id}', 'XrisiController@edit')->name('xrisi.edit');
    Route::put('xrisi/{id}', 'XrisiController@update')->name('xrisi.update');

    Route::get('xromata', 'XromataController@create')->name('xromata.create');
    Route::post('xromata', 'XromataController@store')->name('xromata.store');
    Route::post('xromata_ajax', 'XromataController@store_ajax')->name('xromata.store.ajax');
    Route::get('xromata/{id}', 'XromataController@edit')->name('xromata.edit');
    Route::put('xromata/{id}', 'XromataController@update')->name('xromata.update');

    Route::get('cartype', 'CarTypeController@create')->name('cartype.create');
    Route::post('cartype', 'CarTypeController@store')->name('cartype.store');
    Route::post('cartype_ajax', 'CarTypeController@store_ajax')->name('cartype.store.ajax');
    Route::get('cartype/{id}', 'CarTypeController@edit')->name('cartype.edit');
    Route::put('cartype/{id}', 'CarTypeController@update')->name('cartype.update');

    Route::get('paint', 'PaintController@create')->name('paint.create');
    Route::post('paint', 'PaintController@store')->name('paint.store');
    Route::post('paint_ajax', 'PaintController@store_ajax')->name('paint.store.ajax');
    Route::get('paint/{id}', 'PaintController@edit')->name('paint.edit');
    Route::put('paint/{id}', 'PaintController@update')->name('paint.update');

    Route::get('department', 'DepartmentController@create')->name('department.create');
    Route::post('department', 'DepartmentController@store')->name('department.store');
    Route::post('department_ajax', 'DepartmentController@store_ajax')->name('department.store.ajax');
    Route::get('department/{id}', 'DepartmentController@edit')->name('department.edit');
    Route::put('department/{id}', 'DepartmentController@update')->name('department.update');

    Route::get('expense', 'ExpenseController@create')->name('expense.create');
    Route::post('expense', 'ExpenseController@store')->name('expense.store');
    Route::post('expense_ajax', 'ExpenseController@store_ajax')->name('expense.store.ajax');
    Route::get('expense/{id}', 'ExpenseController@edit')->name('expense.edit');
    Route::put('expense/{id}', 'ExpenseController@update')->name('expense.update');
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
});
// end routes for reports


