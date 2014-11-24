<?php
/**
 * This class acts as the model for any 
 * Hubspot related data that needs to be retrived
 * or posted. 
 */
class Hubspot {

	// Get leads
	// -------------------------------------------------------------------------	
	public static function getLeads($key = "demo", $id = 261){
		$contacts 			= new HubSpot_Lists($key);
		$contacts_batch1 	= $contacts->get_contacts_in_list(array('count' => '100'), $id);
		
		return $contacts_batch1->contacts;
	}
	// Get all contacts
	// -------------------------------------------------------------------------
	public static function getAllContact($key = "demo"){
		$contacts 			= new HubSpot_Contacts($key);
		$contacts_batch1 	= $contacts->get_all_contacts(array('count' => '100'));
		
		return $contacts_batch1->contacts;
	}
	// Get Contact list
	// -------------------------------------------------------------------------
	public static function getContactList($key = "demo", $id = 1){
		$contacts 	= new HubSpot_Lists($key);
		$result  	= $contacts->get_contacts_in_list(array('count' => '100'),$id);

		return $result->contacts;
	}

	//public static getTraffic(){}

	//public static mql(){}

	//public static sql(){}

}