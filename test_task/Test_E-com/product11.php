<?php
	$products = array(
 					"football" => array(
 										array(
	 									"id" => "Product 101",
	 									"name" => "football",
	 									"price" => "$150.00",
	 									"img" => "football.png"
	 									)
	 								),	
 								
 					"tennis" => array(
 										array(
	 									"id" => "Product 102",
	 									"name" => "tennis",
	 									"price" => "$120.00",
	 									"img" => "tennis.png"
	 									)
	 								),			
 					"basketball" => array(
 											array(
	 										"id" => "Product 103",
	 										"name" => "basketball",
	 										"price" => "$90.00",
	 										"img" => "basketball.png"
	 										)
	 								),	

 					"table-tennis" => array(
 											array(
	 										"id" => "Product 104",
	 										"name" => "table-tennis",
	 										"price" => "$110.00",
	 										"img" => "table-tennis.png"
	 										)
	 									),	

 					"soccer" => array(
 										array(
 										"id" => "Product 105",
 										"name" => "soccer",
 										"price" => "$80.00",
 										"img" => "soccer.png"
 										)
 									)		 																
 				);
		
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
	<?php include 'header.php';?>

	<div id="main">
		<div id="products">
			<?php foreach ($products as $key => $value) { ?>

				<?php foreach ($value as $prod_key => $prod_val) { ?>

					<?php echo "<div id='product-101' class='product'>"; ?>

						<?php 
							$basepath = './images/';
							printf ('<img src="%s"/>', $basepath . $prod_val['img']);
						 ?>
						<?php echo "<h3 class='title'><a href='#'>" . $prod_val['id'] . "</a></h3>" ;?>
						<?php echo "<span>" . "Price:" . "&nbsp" . $prod_val['price'] . "</span>" ;?>
						<?php echo "<a class='add-to-cart' href='#'>Add To Cart</a>" ;?>

					<?php echo "</div>"	;?>
					
				<?php } ?>

			<?php } ?>
		</div>
	</div>

	<?php include 'footer.php';?>
</body>
</html>