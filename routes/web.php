<?php




// Homepage
Route::get('/index','HomepageController@index')-> name('homepage');


// frontend
Route::post('/customer_register','RegisterController@register')-> name('customer_register');








// backend

// User Dashboard
Route::get('/user/homepage', 'UserController@index')-> name('index');
Route::get('/user/bus_seat', 'UserController@bus_seat')-> name('bus_seat');
Route::get('/user/bus_info', 'UserController@bus_info')-> name('bus_info');
Route::get('/user/location_select', 'UserController@location_select')-> name('location_select');

// Admin Dashboard
Route::get('/admin/homepage', 'AdminController@index')-> name('dashboard');

// Users Information
Route::get('/admin/users_info', 'AdminController@users_info')-> name('users_info');
Route::get('/admin/users_info/edit/{id}', 'AdminController@edit')-> name('users_info_edit');
Route::get('/admin/users_info/delete/{id}', 'AdminController@delete')-> name('delete');
Route::post('/admin/users_info/update', 'AdminController@user_update')->name('users_info_update');

// Bus Information
// Route::get('/admin/bus_info_form', 'BusinfoController@index')-> name('bus_info');
// Route::post('/admin/bus_info_insert', 'BusinfoController@insert')-> name('bus_insert');
Route::get('/admin/buses', 'BusinfoController@buses')-> name('bus_info');
// Bus Information Insert
Route::post('/admin/bus_insert', 'BusinfoController@bus_insert')-> name('buses');


// Bus Information view
Route::get('/admin/view/bus_info','BusinfoController@bus_view')->name('view_bus');
// Bus Information Edit
Route::get('/admin/view/bus_info/edit/{id}','BusinfoController@edit_bus_info')->name('bus_info_edit');
// Bus Information Update
Route::post('/admin/view/bus_info/update','BusinfoController@update_bus_info')->name('bus_info_update');



// Individual Bus Components information Input Form
Route::get('/admin/input', 'InputController@input')-> name('input');
// Chassis No Insert
Route::post('/admin/chassis_insert', 'InputController@input_chassis')-> name('input_chassis');
// Route Insert
Route::post('/admin/route_insert', 'InputController@input_route')-> name('input_route');
// operator insert
Route::post('/admin/operator_insert', 'InputController@input_operator')-> name('input_operator');
// Date insert
Route::post('/admin/date_insert','InputController@input_date')->name('date_input');
// Time Insert
Route::post('/admin/time_insert', 'InputController@input_time')-> name('input_time');
// Bus Type Insert
Route::post('/admin/bus_type_insert', 'InputController@input_bus_type')-> name('input_bus_type');
// Total seat insert
Route::post('/admin/total_seat_insert', 'InputController@input_total_seat')-> name('input_total_seat');
// Ticket Price insert
Route::post('/admin/ticket_price_insert', 'InputController@input_ticket_price')-> name('input_ticket_price');


// Edit & Update Individual Bus Components information
// Edit Chassis No
Route::get('/admin/chassis/edit/{id}','InputController@edit_chassis')->name('chassis_edit');
// Update Chassis info
Route::post('/admin/chassis/update','InputController@update_chassis')->name('chassis_update');

// Edit Bus Route
Route::get('/admin/bus_route/edit/{id}','InputController@edit_busroute')->name('bus_route_edit');
// Update bus route
Route::post('/admin/bus_route/update','InputController@update_busroute')->name('bus_route_update');

// Edit Bus operator
Route::get('/admin/bus_operator/edit/{id}','InputController@edit_operator')->name('operator_edit');
// Update operator
Route::post('/admin/bus_operator/update','InputController@update_operator')->name('operator_update');

// Edit Date
Route::get('/admin/dates/edit/{id}','InputController@edit_date')->name('date_edit');
// Update Date
Route::post('/admin/dates/update','InputController@update_date')->name('date_update');

// Edit Departure Time
Route::get('/admin/departure_time/edit/{id}','InputController@edit_departure_time')->name('departure_time_edit');
// Update Departure Time
Route::post('/admin/departure_time/update','InputController@update_departure_time')->name('departure_time_update');

// Edit Bus Type
Route::get('/admin/bus_type/edit/{id}','InputController@edit_bus_type')->name('bus_type_edit');
// Update Bus Type
Route::post('/admin/bus_type/update','InputController@update_bus_type')->name('bus_type_update');

// Edit Total Seat
Route::get('/admin/total_seat/edit/{id}','InputController@edit_total_seat')->name('total_seat_edit');
// Update total seat
Route::post('/admin/total_seat/update','InputController@update_total_seat')->name('total_seat_update');

// Edit Ticket price
Route::get('/admin/ticket_price/edit/{id}','InputController@edit_ticket_price')->name('ticket_price_edit');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

