<?php
$products = array(
                    "football"=>array(

                        "id"=>"Product 101",
                        "name"=>"Footbal",
                        "price"=>"$150.0",
                        "img"=>"football.png"
                    ),
                    "tennis"=>array(
                        "id"=>"Product 102",
                        "name"=>"Tennis",
                        "price"=>" $120.00",
                        "img"=>"tennis.png"
                    ),
                    "basketbal"=>array(
                        "id"=>"Product 103",
                        "name"=>"Basketball",
                        "price"=>"$$90.00",
                        "img"=>"basketball.png"
                    ),
                    "table-tennis"=>array(
                        "id"=>"Product 104",
                        "name"=>"Table-tennis",
                        "price"=>"$110.00",
                        "img"=>"Table-tennis.png"
                    ),
                    "soccer"=>array(
                        "id"=>"Product 105",
                        "name"=>"Soccer",
                        "price"=>"$80.00",
                        "img"=>"soccer.png"
                    )
                    );
            
?>
<?php include 'header.php';?>
<?php echo"<div id='main'>" ?>
        <?php echo"<div id='products'>" ?>

        <?php  foreach($products as $key1=>$value1){ ?>
            <?php echo "<div id='product-101' class='product'>"; ?>
                    <?php
							$dirloc = '.././images/';//Location of images
							printf ('<img src="%s"/>', $dirloc . $value1['img']);
						 ?>
                         
                    <?php echo "<h3 class='title'><a href='#'>".$value1["id"]."</a></h3>";?>
                    <?php echo "<span>".$value1["price"]."</span>";?>
                    <?php echo "<a class='add-to-cart' href='#'>Add To Cart</a>"; ?>
            
            <?php echo "</div>"?>        
        <?php } ?>
        <?php echo"</div>" ?>
<?php echo"</div>" ?>

<?php include 'footer.php';?>