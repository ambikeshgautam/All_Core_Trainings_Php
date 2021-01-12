                                        <?php

$products = array(
				"Electronics" => array(
										"Television" => array(
																array(						//0
																		"id" => "PR001",
																		"name" => "MAX-001",
																		"brand" => "Samsung"
																	 ),
																array(						//1
																		"id" => "PR002",
																		"name" => "BIG-301",
																		"brand" => "Bravia"
																   	),
																array(						//2
																		"id" => "PR003",
																		"name" => "APL-02",
																		"brand" => "Apple"
																	)
															),			
										"Mobile" => array(
																array(						//0
																		"id" => "PR004",
																		"name" => "GT-1980",
																		"brand" => "Samsung"
																	),
														 		array(						//1
																		"id" => "PR005",
																		"name" => "IG-5467",
																		"brand" => "Motorola"
																	),

																array(						//2
																		"id" => "PR006",
																		"name" => "IP-8930",
																		"brand" => "Apple"
																	)				
														)
									),


				"Jewelry" => array(
									"Earrings" => array(
															    array(
																		"id" => "PR007",
																		"name" => "ER-001",
																		"brand" => "Chopard"
																	),
																array(
																		"id" => "PR008",
																		"name" => "ER-002",
																		"brand" => "Mikimoto"
																	),
																array(
																		"id" => "PR009",
																		"name" => "ER-003",
																		"brand" => "Bvlgari"
																		)
														),
									"Necklaces" => array(
																	array(
																		"id" => "PR010",
																		"name" => "NK-001",
																		"brand" => "Piaget"
																		),
																	array(
																		"id" => "PR011",
																		"name" => "NK-002",
																		"brand" => "Graff"
																		),
																	array(
																		"id" => "PR012",
																		"name" => "NK-003",
																		"brand" => "Tiffany"
																		)
														)
								)
				);



// foreach ($products as $category => $cvalue) {

// 		if(is_array($cvalue)){

// 			foreach ($cvalue as $subcategory => $scvalue) {

// 				if (is_array($scvalue)) {

// 					 foreach ($scvalue as $key => $value) {

// 					 	if (is_array($value)) {

// 					 		foreach($value as $keylast=>$lastvalue){

// 					 			echo $lastvalue['id']." ".$lastvalue['name']."".$lastvalue['brand'];
// 					 		}
// 					 	}
// 					 	else{
// 					 		echo $value;
// 					 	}
// 					 }
					

// 				}else{
// 						echo $scvalue;
// 					}

// 			}
			
// 		}
// 		else{
// 			echo $cvalue;
// 		}
// }

// $categorykey = array_keys($products);
// for($i=0; $i<count($products); $i++){
// 	foreach ($products[$categorykey[$i]] as $subkey => $vlauess) {
// 		foreach ($vlauess as $keycol => $lastcol) {

// 			echo "<tr><td>".$categorykey."</td><td>".$subkey."</td><td>".$lastcol['id']."</td><td>".$lastcol['name']."</td><td>".$lastcol['name']."<td></tr>";
// 		}
// 	}
// }

echo "<table cellspacing='2px'>";

foreach ($products as $ckey => $cvalue) {
	//echo "<tr>";
	//if (is_array($cvalue)) {
		foreach ($cvalue as $skey => $svalue) {
			// echo "<td>";
			//if (is_array($svalue)) {
				foreach ($svalue as $lstkey => $lstvalue) {
					//echo "<td>";
					//if (is_array($svalue)) {
						foreach ($lstvalue as $colkey => $colvalue) {
							//echo "<tr><td>";
							
							echo $ckey;
							//echo $lstkey;
							echo $skey;
							echo  $colvalue."</br>";
							//echo "</td></tr>";
						}
					//}
					//echo "<td>";
						
					
				}
			//}
			//echo "</td>";
				
			
		}
		
	//}
	//echo "</tr>";
		
	
}
echo "<table>";

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
<?php //foreach ($products as $categorykey=>$vlaues) { ?>

	<tr>
		<td>
			<?php// foreach ($vlauess as $subkey => $valuesss) {
				
		//	} ?> 
		</td>
	</tr>

</table>
</body>
</html>
 -->
