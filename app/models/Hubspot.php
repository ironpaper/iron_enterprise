<?php
/**
 * This class acts as the model for any 
 * Hubspot related data that needs to be retrived
 * or posted. 
 */
class Hubspot {

	// Get a Hubspot List
	// -------------------------------------------------------------------------	
	public static function getList($key = "demo", $id){
		$list 				= new HubSpot_Lists($key);
		$results 			= $list->get_contacts_in_list(array('count' => '100'), $id);
		
		return $results->contacts;
	}
}