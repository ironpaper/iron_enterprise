<?php
/**
 * Hubspot API KEYS
 **/
define('IP_KEY', '3ec5b6e6-4b18-48d9-9e81-abe045a55443');
define('CALERO_KEY', '1584a5e8-96e8-4892-b091-6b8e20c5c946');

Route::get('/', 'HomeController@index' );


// -------- LEADS
Route::get('/leads', function() {
	return Hubspot::getList(CALERO_KEY, 30);
});

// -------- TRAFFIC
Route::get('/traffic', function() {
	return "Return the traffic number";
});

// -------- MQL
Route::get('/mql', function() {
	return "Return the MQL number";
});

// -------- SQL
Route::get('/sql', function() {
	return "Return the SQL number";
});