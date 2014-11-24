<?php
/**
 * Hubspot API KEY
 **/
define("APIKEY", "3ec5b6e6-4b18-48d9-9e81-abe045a55443" );

Route::get('/', function() { return View::make('index'); });

Route::get('/leads', function() {

	// Leads Api
	return Hubspot::getLeads(APIKEY);
		
	// Contact list Api
	// return Hubspot::getContactList(APIKEY);	
});
