<?php
/**
 * Hubspot API KEYS
 **/
define('IP_KEY', '3ec5b6e6-4b18-48d9-9e81-abe045a55443');
define('CALERO_KEY', '1584a5e8-96e8-4892-b091-6b8e20c5c946');

Route::get('/', 'HomeController@index' );

// -------- TRAFFIC
Route::get('/traffic', function() {
	return count(Hubspot::getProspects(CALERO_KEY));
});

// -------- LEADS
Route::get('/leads', function() {
	return count(Hubspot::getList(CALERO_KEY, 30));
});

// -------- MQL
Route::get('/mql', function() {
	return count(Hubspot::getList(CALERO_KEY, 66));
});

// -------- SQL
Route::get('/sql', function() {
	return count(Hubspot::getList(CALERO_KEY, 67));
});

//---------- TEST ROUTES
Route::get('/test', function(){
	return convert_rate(100,1700);
});




