<?php
include('config.php');
$products = array(
                    "Product-101"=>array(

                        "id"=>"Product-101",
                        "name"=>"football",
                        "price"=>"$150.0",
                        "img"=>"football.png"
                    ),
                    "Product-102"=>array(
                        "id"=>"Product-102",
                        "name"=>"tennis",
                        "price"=>"$120.00",
                        "img"=>"tennis.png"
                    ),
                    "Product-103"=>array(
                        "id"=>"Product-103",
                        "name"=>"basketball",
                        "price"=>"$90.00",
                        "img"=>"basketball.png"
                    ),
                    "Product-104"=>array(
                        "id"=>"Product-104",
                        "name"=>"table-tennis",
                        "price"=>"$110.00",
                        "img"=>"table-tennis.png"
                    ),
                    "Product-105"=>array(
                        "id"=>"Product-105",
                        "name"=>"soccer",
                        "price"=>"$80.00",
                        "img"=>"soccer.png"
                    )
                    );
            
?>
<?php include 'header.php';?>
<div id="main">
        <div id='products'>

        <?php  foreach($products as $key=>$value){ ?>
            <div id="product-101" class="product">
                    <img src="<?php $base_url ?>images/<?php echo $value['img'];?>">   
                    <h3 class="title"><a href="#"><?php echo $value["name"];?></a></h3>
                    <span><?php echo $value["price"];?></span>
                    <a class="add-to-cart" href="#">Add To Cart</a>
            
            </div>        
        <?php } ?>
        </div>
        
</div>

<?php include 'footer.php';?>