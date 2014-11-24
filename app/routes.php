<?php

Route::get('/', function() { return View::make('index'); });

Route::get('/leads', function() {
	return Hubspot::getLeads();
});
