<?php

class HomeController extends BaseController {

	/**
	 * Display the home index page with various 
	 * variables
	 * 
	 * @return [view] [index.blade.php]
	 */
	public function index(){

		$leads 	= 	count(Hubspot::getList(CALERO_KEY, 30));
		$mql 	=	count(Hubspot::getList(CALERO_KEY, 66));
		$sql 	=	count(Hubspot::getList(CALERO_KEY, 67));

		return View::make('index', compact('leads', 'mql', 'sql') ); 		
	}

}
