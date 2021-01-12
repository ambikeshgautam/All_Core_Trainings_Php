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

?>

<!DOCTYPE html>
<html>
<head>
	<title>thirdtest</title>
</head>
<body>
	<table>
	<tr>
	<th>Category</th>
	<th>Subcategory</th>
	<th>ID</th>
	<th>Name</th>
	<th>Brand</th>
	</tr>
<?php
foreach ($products as $product => $value) {

foreach ($value as $catk => $catvalue) {

foreach ($catvalue as $subk => $subvalue) {
?>
<tr>
<td><?php echo $product;?></td>
<td><?php echo $catk;?></td>
<td><?php echo $subvalue['id'];?></td>
<td><?php echo $subvalue['name'];?></td>

<td><?php echo $subvalue['brand'];?></td>
</tr>
<?php
}
}
}

?>
</table> 
<hr>

 <table>
	<tr>

	<th>Subcategory</th>
	<th>ID</th>
	<th>Name</th>
	<th>Brand</th>
	</tr>
<?php

	foreach ($products as $key1 => $value1) {
		
	foreach($products[$key1] as $key2 => $value2) {

			if($key2=="Mobile"){

		foreach ($products[$key1][$key2] as $key3 => $value3){
?>
		<tr>
		<td><?php echo $key2;  ?></td>
		<td><?php echo $products[$key1][$key2][$key3]["id"];?></td>
		<td><?php echo $products[$key1][$key2][$key3]["name"];?></td>
		<td><?php echo $products[$key1][$key2][$key3]["brand"];?></td>
		
		</tr>
<?php
}
}
}
}
?>
</table>

<hr> 
 <table>
	<tr>
	</tr>
<?php

	foreach ($products as $key1=>$value1) {
		foreach ($products[$key1] as $key2=> $value2){
			foreach ($products[$key1][$key2] as $key3 => $value3) {	
?>		
<tr>
		<?php  echo "Product ID:".$products[$key1][$key2][$key3]["id"]."<br/>";?>
		<?php  echo "Product Name:".$products[$key1][$key2][$key3]["name"]."<br/>";?>
		<?php  echo "Product Brand:".$products[$key1][$key2][$key3]["brand"]."<br>";?>
		<?php  echo "Sub-category:".$key2."<br>";?>
		<?php echo "category:".$key1."<br>";?>
		<?php echo "<br>"; ?>
</tr>
<?php
}
}
}
?>
</table> 




   
</body>
</html>
<hr>