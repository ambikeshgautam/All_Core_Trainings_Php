<?php
session_start();
unset($_SESSION['cart']);
include('config.php');

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
    if(isset($_POST["addtocart"])){
                    // print_r($_POST); die();
                        $pro_id = $_POST['product_id'];
                        $cart = array ();
                    if(isset($_SESSION['cart'])){
                            $cart = $_SESSION['cart'];
                    }
                    if(empty($cart)){
                            $product_add_to_cart = $products[$_POST['product_id']];
                            $product_add_to_cart['qty'] = 1;

                            $cart[] = $product_add_to_cart;
                    }else{
                            $flag = false;
                                
                                foreach($cart as $key=>$value){
                                    if($value['id'] == $pro_id){
                                        $cart[$key]['qty'] =  $cart[$key]['qty']+1;
                                        $flag = true;
                                    }
                                 }if(!$flag){
                                    $product_add_to_cart = $products[$_POST['product_id']];
                                    $product_add_to_cart['qty'] = 1;

                                    $cart[] = $product_add_to_cart;
                        }
                    }
                 $_SESSION['cart'] = $cart;//again add to into session cart
    }
    if(isset($_POST['delete'])){

    }

?>
<?php include('header.php');?>
<div id="main">
        <div id='products'>
                <?php  foreach($products as $key=>$value){ ?>
                        <form action="" method="POST">
                                    <div id="<?php echo $key;?>"class="product">
                                            <input type="hidden" name="product_id" value="<?php echo $key; ?>"/>
                                            <img src="<?php $base_url;?>images/<?php echo $value['img']; ?>"/>
                                            <h3 class="title"><a href="#"><?php echo $value['id']; ?></a></h3>
                                            <span><?php echo $value['price']; ?></span>
                                            <input type="submit" class="add-to-cart" value="Add to cart" name="addtocart"/>                              
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
                                <th>Action</th>
                            </tr>
                    </thead>
                    <tbody>
                             <?php if(!empty($cart)){ ?>
                                    <?php foreach($cart as $value){ $total_cost = $total_cost +($value['price']*$value['qty']);?>
                                    <form action="" method="POST">
                                        <tr>
                                            <td><?php echo  $value['id'];?></td>
                                            <td><?php echo  $value['name'];?></td>
                                            <td> <img src="<?php $base_url;?>images/<?php echo $value['img'];?>"></td> 
                                            <td><?php echo $value['price'];?></td>
                                            <td><?php echo $value['qty'];?></td>
                                             <td><input type="submit" class="add-to-cart" name="delete" value="Remove"></td>   
                                        </tr>
                                    </form>    
                                    <?php } ?>
                            <?php }else{ echo "cart is Empty";} ?>  
                    </tbody>
        </table>      
       <p><?php echo "Total cost =".$total_cost; ?></p>
</div>
<?php include('footer.php') ;?>