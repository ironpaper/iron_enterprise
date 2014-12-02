<?php

class HomeController extends BaseController {

	/**
	 * Display the home index page with various 
	 * variables
	 * 
	 * @return [view] [index.blade.php]
	 */
	public function index(){

		$traffic	=	count(Hubspot::getProspects(CALERO_KEY));
		$leads 		= 	count(Hubspot::getList(CALERO_KEY, 30));
		$mql 		=	count(Hubspot::getList(CALERO_KEY, 66));
		$sql 		=	count(Hubspot::getList(CALERO_KEY, 67));

		$lTom_rate	=	convert_rate($mql,$leads);
		$mTos_rate	=	convert_rate($sql, $mql);

		return View::make('index', compact('traffic', 'leads', 'mql', 'sql', 'lTom_rate', 'mTos_rate') ); 				
	}

}
