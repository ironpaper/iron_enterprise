<?php
/**
 * This class acts as the model for any 
 * Hubspot related data that needs to be retrived
 * or posted. 
 */
class Hubspot {
	
	protected $api_key 		= "demo";
	protected $oAuth_key	= "demooooo-oooo-oooo-oooo-oooooooooooo";


	public static function getLeads(){
		$contacts = new HubSpot_Contacts("demo");
		$contacts_batch1 = $contacts->get_all_contacts(array('count' => '100'));
		
		return json_encode($contacts_batch1->contacts);		
	}

	//public static getTraffic(){}

	//public static mql(){}

	//public static sql(){}

}