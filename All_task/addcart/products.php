<?php
include("config.php");
session_start();
//unset($_SESSION['cart']);


// session_destroy();      

$products = array(
                "product-101"=>array(

                        "id"=>"product-101",
                        "name"=>"football",
                        "price"=>"$150.0",
                        "img"=>"football.png"
                    ),
                    "product-102"=>array(
                        "id"=>"product-102",
                        "name"=>"tennis",
                        "price"=>" $120.00",
                        "img"=>"tennis.png"
                    ),
                    "product-103"=>array(
                        "id"=>"product-103",
                        "name"=>"basketball",
                        "price"=>"$90.00",
                        "img"=>"basketball.png"
                    ),
                    "product-104"=>array(
                        "id"=>"product-104",
                        "name"=>"table-tennis",
                        "price"=>"$110.00",
                        "img"=>"table-tennis.png"
                    ),
                    "product-105"=>array(
                        "id"=>"product-105",
                        "name"=>"soccer",
                        "price"=>"$80.00",
                        "img"=>"soccer.png"
                    )
                );
if(isset($_POST['addtocart'])){

    // print_r($_POST); die;
    $pro_id = $_POST['pro_id'];
    $cart = array();//cart is a array
    if(isset($_SESSION['cart'])){//id cart isset on session
        $cart = $_SESSION['cart'];//then add seesion cart into cart array

    }   
    if(empty($cart)){
        //add product into cart
        $product_to_add_into_cart = $products[$_POST['pro_id']];//porducts of key value change in the $product_to_add_into_cart 
        $product_to_add_into_cart['qty'] = 1;//add new index and put new variable called qty(quantity)

        $cart[] = $product_to_add_into_cart;//put all value of the cart into cart array 

    }else{
        $flag = false;// if second time else condition will execute then flag will false
        foreach($cart as $key=>$value){
           
            if($value['id'] == $pro_id){
                $cart[$key]['qty'] =  $cart[$key]['qty']+1;
                $flag = true;
            }
        }
        if(!$flag){
            $product_to_add_into_cart = $products[$_POST['pro_id']];
            $product_to_add_into_cart['qty'] = 1;
    1
            $cart[] = $product_to_add_into_cart;

        }
    } 
    $_SESSION['cart'] = $cart;//again add to into session cart
}           
?>
<?php include 'header.php';?>
<div id="main">
        <div id='products'>

                <?php  foreach($products as $key=>$value){ ?>
                    <form  method="POST" action ="">                           

                             <input type="hidden" name="pro_id" value='<?php echo $key;?>'>
                            <div id="<?php $key ?>" class="product">
                                    <img src="<?php $base_url;?>images/<?php echo $value['img'];?>">                                   
                                    <h3 class="title"><a href="#"><?php echo $value["name"];?></a></h3>
                                    <span><?php echo $value["price"];?></span>
                                    <input type="submit" class="add-to-cart" name="addtocart" value="Add to Cart"/>    
                        
                            </div>     
                    </form>  
                <?php } ?>
         </div>
        <table border="4">
                <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                </thead>
                <tbody>
                    <?php if(!empty($cart)){ ?>
                            <?php foreach($cart as $value){?>
                                <tr>
                                    <td><?php echo  $value['id'];?></td>
                                    <td><?php echo  $value['name'];?></td>
                                    <td> <img src="<?php $base_url;?>images/<?php echo $value['img'];?>"></td> 
                                    <td><?php echo $value['price'];?></td>
                                    <td><?php echo $value['qty'];?></td>

                                </tr>
                            <?php } ?>
                    <?php }else{ echo "cart is Empty";} ?>
                </tbody>
            </table>
     <?php include 'footer.php';?>     
</div>


