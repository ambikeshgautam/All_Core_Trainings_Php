<?php include('header.php'); ?>
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->
<?php 
           

                // $product = array($id,$image,$name,$price,$quantity);                
                  
                // $_SESSION[$name] = $product;

                // $cart = array();
                // if($_SESSION['cart']){
                // 	$cart = $_SESSION['cart'];
                // }
                // if(empty($cart)){
                // 	$prd_add_to_cart = $product[$id];
                // 	$cart[] = $prd_add_to_cart;


                // }else{
                // 	for($cart as $key=>$value){
                // 		if()
                // 	}
                // }

    // 			$id = $_POST['id'];
				// $name = $_POST['name'];
				// $price = $_POST['price'];
				// $image =$_POST['image'];
				// $quantity = $_POST['quantity'];

    // 				$cartArray = array(
    // 									$id = array(
				// 							'name' => $name,
				// 							'price' => $price,
				// 							'image' =>$image,
				// 							'quantity' => $quantity
    // 									    )
				// 						);
           //      if(isset($_POST["add_to_cart"])){
                	
	          //       	if (isset($_SESSION["shopping_cart"])) {//it will check the session has some data or not or Not

	          //       		$item_array_id = array_column($_SESSION["shopping_cart"],"item_id");

			        //         		if(!in_array($_GET['id'],$item_array_id)){//it will search all the item array the id name's array is present or not in the array

			        //         			$count = count($_SESSION["shopping_cart"]);//no of element in array and store in the $count variable
			                			
			        //         			$item_array = array(

			        //         								'item_id' =>$_GET['id'],
											// 		        'item_name' => $_POST['name'],
											// 	            'item_price' => $_POST['price'],
											// 		        'item_image' =>$_POST['image'],
											// 		        'item_quantity' => $_POST['quantity']

											// 		        );

			        //         						$_SESSION["shopping_cart"][$count] = $item_array;//this will store the item array on the next index of the array			                			
			        //         		}else{//it the item is already present in the array then show this message
			        //         				echo '<script> alert(" Item is already Added");</script>';
			        //         				// echo '<script> window.location = "shopping-cart.php"</script>';
			        //         		}
	                		
	          //       	} else{
	          //       			$item_array = array(

											// 'item_id' => $_POST['id'],
							    //             'item_name' => $_POST['name'],
							    //             'item_price' => $_POST['price'],
							    //             'item_image' => $_POST['image'],
							    //             'item_quantity' => $_POST['quantity']

	          //       			);
	          //       			$_SESSION["shopping_cart"][0] = $item_array;
	          //       	}

           //      }


// if (isset($_POST['add_to_cart'])) {        
        
//         $id = $_GET['id'];
//         $name = $_POST['name'];
//         $price= $_POST['price'];
//         $quantity = $_POST['quantity'];
//         $image = $_POST['image'];

//         $cartArray = array(
//                            $id =  array(
//                                      'id'=>$id,
//                                      'name'=>$name,
//                                      'price'=>$price,
//                                      'quantity'=>$quantity,
//                                      'image'=>$image
//                            )
//                         );
    
//           if(empty($_SESSION['shopping_cart'])){
//             $_SESSION['shopping_cart'] = $cartArray;
//             echo "Product is added";

//           }else{

//             $array_keys = array_keys($_SESSION['shopping_cart']);
//             if(in_array($id, $array_keys)){
//                 echo "Your product is already added to the cart";
//             }else{
//                 $_SESSION['shopping_cart'] = array_push($_SESSION['shopping_cart'],$cartArray);
//                 echo "product is added to the cart";
//             }

//           }
// }

// if (isset($_POST["remove"])){

//   if(!empty($_SESSION["shopping_cart"])) {

//     foreach($_SESSION["shopping_cart"] as $key => $value) {
//       if($_POST["id"] == $key){
//         unset($_SESSION["shopping_cart"][$key]);
//         echo "Product is removed from your cart!";
//       }
//       if(empty($_SESSION["shopping_cart"]))
//          unset($_SESSION["shopping_cart"]);
//       }     
//    }
// }

 
  

// if(isset($_POST["add_to_cart"]))
// {
//     if(isset($_SESSION["shopping_cart"]))

//     {
//         $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
//         if(!in_array($_GET["id"], $item_array_id))
//         {
//         $count = count($_SESSION["shopping_cart"]);
//         $item_array = array(
//         'item_id'       =>  $_GET["id"],
//         'item_name'     =>  $_POST["name"],
//         'item_price'        =>  $_POST["price"],
//         'item_quantity'     =>  $_POST["quantity"],
//         'item_image' => $_POST['image']
//         );
//         $_SESSION["shopping_cart"][$count] = $item_array;
//         }
//         else
//         {
//         echo '<script>alert("Item Already Added")</script>';
//         }
//     }
//     else
//     {
//         $item_array = array(
//         'item_id'       =>  $_GET["id"],
//         'item_name'     =>  $_POST["name"],
//         'item_price'        =>  $_POST["price"],
//         'item_quantity'     =>  $_POST["quantity"],
//         'item_image' => $_POST['image']
//         );
//         $_SESSION["shopping_cart"][0] = $item_array;
//     }
// }

if (isset($_POST['add_to_cart'])) {
     
        if (isset($_SESSION['shopping_cart'])) {

                $item_cart_id = array_column($_SESSION['shopping_cart'],'cart_id');
            
            if(!in_array($_SESSION['shopping_cart'], $item_cart_id)){
                
                $count_length = count($_SESSION['shopping_cart']);

                $cart_Array = array(
                                'cart_id' =>$_GET['id'],
                                'name'=>$_POST['name'],
                                'price'=>$_POST['price'],
                                'quantity'=>$_POST['quantity'],
                                'image'=>$_POST['image']
                             );
                $_SESSION['shopping_cart'][$count_length] = $cart_Array;
            }else{
                echo "This has been already addedd into cart";

            } 

            
             
        }else{

             $cart_Array = array(
                                'cart_id' =>$_GET['id'],
                                'name'=>$_POST['name'],
                                'price'=>$_POST['price'],
                                'quantity'=>$_POST['quantity'],
                                'image'=>$_POST['image']
                             );
                $_SESSION['shopping_cart'][0] = $cart_Array;

        }

}

if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
            if(isset($_SESSION['shopping_cart'])){

                foreach($_SESSION['shopping_cart'] as $keys => $values){

                                if($values["item_id"] == $_GET["id"]){

                                unset($_SESSION["shopping_cart"][$keys]);

                                echo '<script>alert("Item Removed")</script>';
                                
                                }
                        }
            }
    }
}
if (isset($_POST['update'])){

          foreach($_SESSION['shopping_cart'] as $value){

            foreach ($value as $value1) {
                  if($value['id'] === $_POST['id']){
                    $value['quantity'] = $_POST['quantity'];
                    break; // Stop the loop after we've found the product
                  }
            }
          
        }
    echo "update";
}
?>

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                 <tr>
                                  <!-- <?php 
                                        // $total_price = 0;

                                        // foreach ($_SESSION as $product) {
                                        //     $q = 0;
                                        //     $p = 0;
                                            ?> 
                                        <form action="update_delete_cart.php" method="POST">

                                          <?php// foreach ($product as $key => $value) { ?>
                                                <?php //if ($key==4) { ?>                                                
                                                      <td class="qua-col first-row">
                                                            <div class="quantity">
                                                                <div class="pro-qty">
                                                                    <input type="text"  name="name<?php// echo $key;?>"  value="<?php //echo $value; ?>">
                                                                </div>
                                                            </div>
                                                        </td>
                                               <?php  //   $q  = $value;
                                               // }else if ($key == 3) { ?>                                                
                                                    <td class="p-price first-row"> <?php// echo "$".$value;?></td>
                                                    <input type="hidden" name="name<?php //echo$key;?>" value="<?// echo $value;?>">
                                               <?php ///$p  = $value;                                                
                                               // }else if ($key == 2) { ?>                                                 
                                                     <td class="cart-title first-row">
                                                        <h5><?// echo $value; ?></h5>
                                                        <input type="hidden" name="name<?php// echo $key; ?>" value="<?=$value; ?>">
                                                    </td>
                                                <?php                                                    
                                                //}//else if ($key == 1) { ?>                                               
                                                    <td class="cart-pic first-row"><img src="<?php// echo'../'.$value; ?>" alt=""></td>
                                          <?php //}
                                               
//} ?>
                                        
                                             <?php ///$total_price = $q*$p; ?>                                              
                                            
                                             <td class="total-price first-row"><?php// echo "$".($total_price);?></td>
                                             <input type="hidden" name="total_price" value="<?php //echo "$".($total_price); ?>">

                                            <td class="close-td first-row"><i class="ti-close"></i></td>                                        
                                   <?php  // } ?> -->
                            
                                </tr>
                                <?php  if(!empty($_SESSION["shopping_cart"])) {  $total = 0; ?>  

                                		<?php  foreach ($_SESSION["shopping_cart"] as $key => $value) { ?>
                                            
                                	<form action="" method="POST">	
                                		 
	                                 <tr>
	                                    <td class="cart-pic first-row"><img src="<?php echo"../".$value['image'];?>" alt=""></td>
	                                    <td class="cart-title first-row">
	                                        <h5><?php echo $value['name'];?></h5>
	                                    </td>
	                                    <td class="p-price first-row"><?php echo "$". $value['price'];?></td>
	                                    <td class="qua-col first-row">
	                                        <div class="quantity">
	                                            <div class="pro-qty">
	                                                <input type="text" name="quantity"  value="<?php echo $value['quantity'];?>">
                                                    

	                                            </div>
	                                        </div>
	                                    </td>                                
	                                    
	                                    <td class="total-price first-row"><?php echo "$". number_format($value['quantity'] * $value['price'],2);?></td>
	                                    <td class="close-td first-row"><a  href="shopping-cart.php?action=delete&id=<?php echo $values["item_id"]; ?>" class="ti-close" style="color: black;"></td>
	                                </tr>
                                    </form>
	                                <?php
	                                		$total = $total + ($value['quantity'] * $value['price']);
	                                  } ?>

	                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="shop.php" class="primary-btn continue-shop">Continue shopping</a>
                                <input type="submit" name="update" value="Update cart" class="primary-btn up-cart">
                            </div>
                    	 </form>
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">Apply</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>$240.00</span></li>
                                    <li class="cart-total">Total <span>$64000</span></li>
                                </ul>
                                <a href="check-out.php" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->
<?php include('footer.php'); ?>