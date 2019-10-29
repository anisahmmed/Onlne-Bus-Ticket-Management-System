<?php



Route::get('/', function () {
    return view('homepage.index');
});

// frontend
Route::get('/homepage','HomeController@homepage')-> name('homepage');


// frontend
Route::post('/customer_register','RegisterController@register')-> name('customer_register');








// backend

Route::get('/user/homepage', 'UserController@index')-> name('index');
Route::get('/user/bus_seat', 'UserController@bus_seat')-> name('bus_seat');
Route::get('/user/bus_info', 'UserController@bus_info')-> name('bus_info');
Route::get('/user/location_select', 'UserController@location_select')-> name('location_select');

// Admin
Route::get('/admin/homepage', 'AdminController@index')-> name('dashboard');
Route::get('/admin/users_info', 'AdminController@users_info')-> name('users_info');
Route::get('/admin/users_info/edit/{id}', 'AdminController@edit')-> name('users_info_edit');
Route::get('/admin/users_info/delete/{id}', 'AdminController@delete')-> name('delete');
Route::post('/admin/users_info/update', 'AdminController@user_update')->name('users_info_update');

// Bus Information
Route::get('/admin/bus_info_form', 'BusinfoController@index')-> name('bus_info');
Route::post('/admin/bus_info_insert', 'BusinfoController@insert')-> name('bus_insert');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

