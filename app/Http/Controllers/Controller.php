<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  /**
   	 * Provides a simple interface to access basic where and where between db filters
   	 *
   	 * @param $query - The start of the query Model::[with, orderBy, etc.]
   	 * @param $whereFields - Array - ['filter', 'field', 'value' 'conditional']
   	 * @param $whereBetweenFields - Array - ['first => ['field', 'value'], 'second' => ['field', 'value']]
   	 * @return $collection - Result of the query
   	*/
     protected function genericFilter($query, $whereFields, $whereBetweenFields = false)
     {
 	    // Array to hold where clauses
 	    $queryArray = [];

 	    // Add all where clauses to query array
 	    forEach($whereFields as $current){
 	    	// If the filter value is true then this field should be filtered with where clause
 	    	if($current['filter']){
 	    		// Special value means we want to filter based on a boolean (This lets us bypass some conditional checks)
 	    		if($current['value'] == 'false-bool') $current['value'] = 0;
 	    		// Add the dynamic where clause to the query array
 	    		array_push($queryArray, [$current['field'], $current['conditional'], $current['value']]);
 	    	}
 	    }

 	    // Add where clauses to query
 	    $query->where($queryArray);

 	    // If there are where between fields to be added to the query
 	    if($whereBetweenFields){
 	    	$query->whereBetween(
 	    		$whereBetweenFields['first']['field'],
 	    		[$whereBetweenFields['first']['value'], $whereBetweenFields['second']['value']]
 	    	);
 	    }

 	    // Now find the collection
 	    $collection = $query->get();

 	    return $collection;
     }    
}
