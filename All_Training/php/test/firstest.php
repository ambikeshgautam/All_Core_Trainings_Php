<?php 

// PHP code to create 
// multidimensional array 

// Creating multidimensional 
// associative array 
$marks = array( 
	
	// Ankit will act as key 
	"Ankit" => array( 
		
		// Subject and marks are 
		// the key value pair 
		"C" => 95, 
		"DCO" => 85, 
		"FOL" => 74, 
	), 
		
	// Ram will act as key 
	"Ram" => array( 
		
		// Subject and marks are 
		// the key value pair 
		"C" => 78, 
		"DCO" => 98, 
		"FOL" => 46, 
	), 
	
	// Anoop will act as key 
	"Anoop" => array( 
		
		// Subject and marks are 
		// the key value pair 
		"C" => 88, 
		"DCO" => 46, 
		"FOL" => 99, 
	), 
); 

// Accessing the array element 
// using dimensions 
	
// It will display the marks of 
// Ankit in C subject 
// echo $marks['Ankit']['C'] . "\n"; 
	
// Accessing array elements using for each loop 
foreach($marks as $key=>$mark) { 
	echo $key ."=". $mark['C']. " ".$key ."=".$mark['DCO']." ".$key ."=".$mark['FOL']."<br/>"; 
} 
	
?> 
<!-- <!DOCTYPE html>
<html>
<head>
	<title>PHParrayTask</title>
</head>
<body>
<table>
	<tr>
		<th>Category</th>
		<th> Subcategory</th>
		<th>ID</th>
		<th>Name</th>
		<th>Brand</th>
	</tr>
//	<?php //foreach ($products as $Electronics=> $subcategory) { ?>

	<tr>
		<td>
			<?php ?> 
		</td>
	</tr>
//<?php } ?>
</table>
</body>
</html> -->