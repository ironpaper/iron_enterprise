<?php
/**
 * Hubspot API KEYS
 **/
define('IP_KEY', '3ec5b6e6-4b18-48d9-9e81-abe045a55443');
define('CALERO_KEY', '1584a5e8-96e8-4892-b091-6b8e20c5c946');

Route::get('/', function() { return View::make('index'); });


// -------- Get leads
Route::get('/leads', function() {
	return Hubspot::getLeads(CALERO_KEY, 30);
});
