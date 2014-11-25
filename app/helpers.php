<?php

/**
 * Get the conversion rate
 * @param  [int]  $leads   [lower bound number]
 * @param  [int]  $traffic [upper boudn number]
 * @return [string]        [the convertion rate with '%' appended]
 */
function convert_rate($leads , $traffic){
	$rate 	=	round((float)($leads/$traffic) * 100 , 2 ) . '%';
	
	return $rate;
}