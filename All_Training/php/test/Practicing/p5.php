<?php 
// PHP program to carry out multidimensional array search 


// Function to recursively search for a given value 
function array_search_id($search_value, $array, $id_path) { 
	
	if(is_array(&$array) && count($array) > 0) { 
		
		foreach($array as $key => $value) { 

			$temp_path = $id_path; 
			
			// Adding current key to search path 
			array_push($temp_path, $key); 

			// Check if this value is an array 
			// with atleast one element 
			if(is_array($value) && count($value) > 0) { 
				$res_path = array_search_id( 
						$search_value, $value, $temp_path); 

				if ($res_path != null) { 
					return $res_path; 
				} 
			} 
			else if($value == $search_value) { 
				return join(" --> ", $temp_path); 
			} 
		} 
	} 
	
	return null; 
} 

// Multidimensional (Three dimensional) array 
$gfg_array = array( 
	"school1" => array( 
		"year" => "2017", 
		"data" => array( 
			'score' => '100', 
			'name' => 'Sam', 
			'subject' => 'Data Structures'
		) 
	), 
	
	"school2" => array( 
		"year" => "2018", 
		"data" => array( 
			'score' => '50', 
			'name' => 'Tanya', 
			'subject' => 'Advanced Algorithms'
		) 
	), 
	
	"school3" => array( 
		"year" => "2018", 
		"data" => array( 
			'score' => '75', 
			'name' => 'Jack', 
			'subject' => 'Distributed Computing'
		) 
	) 
); 

$search_path = array_search_id('Jack', $gfg_array, array('$')); 
print($search_path); 

?> 
