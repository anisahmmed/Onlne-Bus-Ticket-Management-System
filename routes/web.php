<?php




// Homepage
// Route::get('/',function(){
// 	return view('welcome');
// });

// Frontend
// Route::get('/blog','HomepageController@blog')->name('blog');

Route::get('/','HomepageController@index')->name('homepage');

//Contact page
Route::get('/contact','HomepageController@contact')->name('contact');
//Destinations
Route::get('/destinations','HomepageController@destinations')->name('destinations');
//About
Route::get('/about','HomepageController@about')->name('about');



//Customer Login
Route::get('/customer_login','RegisterController@customer_login')->name('customer_login');

//customer registration form
Route::get('/customer_register','RegisterController@index')->name('customer_regis');
// Customer Registration
Route::post('/customer/register','RegisterController@register')-> name('customer_register');


// Blocked user
Route::get('/admin/blocked_user','HomepageController@blocked_user')->name('user_blocked');





// backend

// User Dashboard
Route::get('/testCon', 'UserController@testCon');

Route::get('/customer/homepage', 'SearchController@index')->name('customer_dashboard');

// Search Result
Route::post('/customer/search/result','SearchController@search_result')->name('search_result');



// Bus info view
// Route::get('/customer/bus_info/view','UserController@user_bus_info_view')->name('view_bus_info');

Route::get('/customer/bus_seat/view/{id}', 'UserController@bus_seat')-> name('bus_seat');
// Bus Seat booking
Route::post('/customer/bus_seat/booking', 'TicketBookingController@bus_seat_booking')-> name('bus_seat_booking');

Route::get('/customer/bus_info', 'UserController@bus_info')-> name('bus_info');

//Journey DEtails
Route::get('/customer/bus_info/bus_seat/view/journey_deatails', 'UserController@journey_deatais')-> name('journey_deatais');


// Customer search bus
Route::get('/customer/search','UserController@search')->name('search');








// Admin Dashboard
Route::get('/admin/homepage', 'AdminController@index')-> name('admin_dashboard');


// Users Information
Route::get('/admin/users_info', 'AdminController@users_info')-> name('users_info');
// Admin create User index
Route::get('/admin/create_user/index','AdminController@user_create_index')->name('user_create_index');
//Admin create user
Route::post('/admin/user/create','AdminController@create_user')->name('create_user');
//User edit
Route::get('/admin/users_info/edit/{id}', 'AdminController@edit')-> name('users_info_edit');
//User update
Route::post('/admin/users_info/update', 'AdminController@user_update')->name('users_info_update');
//User Delete
Route::get('/admin/users_info/delete/{id}', 'AdminController@delete')-> name('delete');




// Bus Information index
Route::get('/admin/bus_info/index', 'BusinfoController@bus_info_index')-> name('bus_info_indexs');
// Bus Information Insert
Route::post('/admin/bus_info/insert', 'BusinfoController@bus_info_insert')-> name('bus_info_insert');
// Bus Information view
Route::get('/admin/bus_info/view','BusinfoController@bus_info_view')->name('view_bus_info');
// Bus Information Edit
Route::get('/admin/bus_info/view/edit/{id}','BusinfoController@edit_bus_info')->name('bus_info_edit');
// Bus Information Update
Route::post('/admin/bus_info/view/update','BusinfoController@update_bus_info')->name('bus_info_update');
//Bus Information Delete
Route::get('/admin/bus_info/view/delete/{id}','BusinfoController@delete_bus_info')->name('bus_info_delete');
//Trashed Bus Information
Route::get('/admin/trashed_bus_info/view','BusinfoController@trashed_bus_info')->name('bus_info_trashed');
// Restore Bus Information
Route::get('/admin/trashed_bus_info/view/restore/{id}','BusinfoController@restore')->name('retore_bus_info');



// Individual Bus Components information Input Form
Route::get('/admin/input', 'InputController@input')-> name('input');
// Chassis No Insert
Route::post('/admin/chassis/insert', 'InputController@input_chassis')-> name('input_chassis');
// Route Insert
Route::post('/admin/route/insert', 'InputController@input_route')-> name('input_route');
// operator insert
Route::post('/admin/operator/insert', 'InputController@input_operator')-> name('input_operator');
// Date insert
Route::post('/admin/date/insert','InputController@input_date')->name('date_input');
// Deparute Info Insert
Route::post('/admin/departure_info/insert', 'InputController@input_departure_info')-> name('departure_info_input');
//Destination Info Insert
Route::post('/admin/destination_info/insert','InputController@input_destination_info')->name('destination_info_input');
// Bus Type Insert
Route::post('/admin/bus_type/insert', 'InputController@input_bus_type')-> name('input_bus_type');
// Total seat insert
Route::post('/admin/total_seat/insert', 'InputController@input_total_seat')-> name('input_total_seat');
// Ticket Price insert
Route::post('/admin/ticket_price/insert', 'InputController@input_ticket_price')-> name('input_ticket_price');
// Terminal name insert
Route::post('/admin/terminal/insert', 'InputController@input_terminal')-> name('terminal_input');




//Register Terminal Info
Route::get('/admin/register_terminal_info','RegisterTerminalController@register_terminal_info')->name('terminal_register');
//Register terminal index
Route::get('/admin/register_terminal/insert/index','RegisterTerminalController@index')->name('terminal_register_index');

//Register Terminal insert
Route::post('/admin/register_terminal/insert','RegisterTerminalController@register_terminal_insert')->name('insert_terminal_register');
//Resister terminal edit
Route::get('/admin/register_terminal/edit/{id}','RegisterTerminalController@register_terminal_edit')->name('edit_terminal_register');
//Update register terminal
Route::post('/admin/register_terminal/update','RegisterTerminalController@register_terminal_update')->name('update_terminal_register');








// Edit, Update & Delete  Individual Bus Components information
// Edit Chassis No
Route::get('/admin/chassis/edit/{id}','InputController@edit_chassis')->name('chassis_edit');
// Update Chassis info
Route::post('/admin/chassis/update','InputController@update_chassis')->name('chassis_update');
//Delete chassis info
Route::get('/admin/chassis/delete/{id}','InputController@delete_chassis')->name('chassis_delete');


// Edit Bus Route
Route::get('/admin/bus_route/edit/{id}','InputController@edit_busroute')->name('bus_route_edit');
// Update bus route
Route::post('/admin/bus_route/update','InputController@update_busroute')->name('bus_route_update');
//Delete Bus Route
Route::get('/admin/bus_route/delete/{id}','InputController@delete_bus_route')->name('bus_route_delete');


// Edit Bus operator
Route::get('/admin/bus_operator/edit/{id}','InputController@edit_operator')->name('operator_edit');
// Update operator
Route::post('/admin/bus_operator/update','InputController@update_operator')->name('operator_update');
//Delete Bus Operator
Route::get('/admin/bus_operator/delete/{id}','InputController@delete_bus_operator')->name('bus_operator_delete');


// Edit Date
Route::get('/admin/dates/edit/{id}','InputController@edit_date')->name('date_edit');
// Update Date
Route::post('/admin/dates/update','InputController@update_date')->name('date_update');
//Delete date
Route::get('/admin/dates/delete/{id}','InputController@delete_date')->name('date_delete');


// Edit Departure info
Route::get('/admin/departure_info/edit/{id}','InputController@edit_departure_info')->name('departure_info_edit');
// Update Departure info
Route::post('/admin/departure_info/update','InputController@update_departure_info')->name('departure_info_update');
//Delete departure info
Route::get('/admin/departure_info/delete/{id}','InputController@delete_departure_info')->name('departure_info_delete');


//Edit destination
Route::get('/admin/destination_info/edit/{id}','InputController@edit_destination_info')->name('destination_info_edit');
//Update dstination
Route::post('/admin/destination_info/update','InputController@update_destination_info')->name('destination_info_update');
//Delete destination
Route::get('/admin/destination_info/delete/{id}','InputController@delete_destination_info')->name('destination_info_delete');


// Edit Bus Type
Route::get('/admin/bus_type/edit/{id}','InputController@edit_bus_type')->name('bus_type_edit');
// Update Bus Type
Route::post('/admin/bus_type/update','InputController@update_bus_type')->name('bus_type_update');
//Delete Bus type
Route::get('/admin/bus_type/delete/{id}','InputController@delete_bus_type')->name('bus_type_delete');


// Edit Total Seat
Route::get('/admin/total_seat/edit/{id}','InputController@edit_total_seat')->name('total_seat_edit');
// Update total seat
Route::post('/admin/total_seat/update','InputController@update_total_seat')->name('total_seat_update');
//Delete total seat
Route::get('/admin/total_seat/delete/{id}','InputController@delete_total_seat')->name('total_seat_delete');


// Edit Ticket price
Route::get('/admin/ticket_price/edit/{id}','InputController@edit_ticket_price')->name('ticket_price_edit');
// Update Ticket Price
Route::post('/admin/ticket_price/update','InputController@update_ticket_price')->name('ticket_price_update');
//Delete ticket price
Route::get('/admin/ticket_price/delete/{id}','InputController@delete_ticket_price')->name('ticket_price_delete');


// Edit terminal
Route::get('/admin/terminal/edit/{id}','InputController@edit_terminal')->name('terminal_edit');
// Update terminal
Route::post('/admin/terminal/update','InputController@update_terminal')->name('terminal_update');
//Delete terminal name
Route::get('/admin/terminal/delete/{id}','InputController@delete_terminal')->name('terminal_delete');



// Save ticket
Route::post('/saveTicket','TicketBookingController@saveTicket')->name('saveTicket');
// Stripe
Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
// Invoice
Route::get('/sendMail', 'MailController@index');







Route::post('/getsetprice','TicketBooking@getsetprice');


// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// DomPDF
Route::get('/generate-pdf/{ch}','AdminController@generatePDF');
Route::get('/admin/show_bus_chassis','AdminController@show_bus_chassis')->name('show_bus_chassis');
Route::post('/admin/show_bus_details','AdminController@show_bus_details')->name('show_bus_details');
