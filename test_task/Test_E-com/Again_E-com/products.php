<?php
$products = array(
                    "footbal"=>array(
                                    "img"=>"football.png",
                                    "id"=>"Product-101",
                                    "name"=>"football",
                                    "price"=>"$150.00"
                    ),
                    "tennis"=>array(
                                    "img"=>"tennis.png",
                                    "id"=>"Product-102",
                                    "name"=>"tennis",
                                    "price"=>"$120.00"
                    ),
                    "basketball"=>array(
                                        "img"=>"basketball.png",
                                        "id"=>"Product-103",
                                        "name"=>"basketball",
                                        "price"=>" $90.00"
                    ),
                    "table_tennis"=>array(
                                            "img"=>"table-tennis.png",
                                            "id"=>"Product-104",
                                            "name"=>"table-tennis",
                                            "price"=>"$110.00"
                    ),
                    "soccer"=>array(
                                    "img"=>"soccer.png",
                                    "id"=>"Product-105",
                                    "name"=>"soccer",
                                    "price"=>"$110.00"
                    )
);

?>
<?php include('header.php'); ?>
<div id="main">
		<div id="products">
        <?php foreach($products as $key1=>$value1){ ?>

			<div id="product-101" class="product">
				<img src="images/<?php echo $value1['name'];?>.png">
				<h3 class="title"><a href="#"><?php echo $value1["id"]?></a></h3>
				<span><?php echo $value1["price"]; ?></span>
				<a class="add-to-cart" href="#">Add To Cart</a>
			</div>
        <?php }?>
		</div>
	</div>
<?php include('footer.php'); ?>