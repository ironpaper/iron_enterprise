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

	// Get prospecs
	// -------------------------------------------------------------------------	
	public static function getProspects($key){
		$prospecs 			=	new HubSpot_Prospects($key);
		
		// Initial pull
		$resultsTimeline 	=	$prospecs->get_timeline( array() );
		$prospects 			=	$resultsTimeline->prospects;;

		

		// While the return object still has more
		// Lets keep searching
		while ( $resultsTimeline->{'has-more'} ) {
			$resultsTimeline		=	$prospecs->get_timeline( array(
												'orgOffset'  => $resultsTimeline->{'org-offset'},
												'timeOffset' => $resultsTimeline->{'time-offset'}
											));			

			$prospects 				=	array_merge( $prospects, $resultsTimeline->prospects) ;
		}

		
		return $prospects;
	}
}