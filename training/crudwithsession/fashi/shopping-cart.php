<?php

	session_start();
	
    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
    }
//  //delete added product here   
// if(isset($_POST['delete'])){
//    $item = $_POST['item'];
// 	   foreach ($_SESSION['cart'] as $key => $value) {
// 	       if($value['id']==$item){
// 	        unset($_SESSION['cart'][$key]);
// 	       }
// 	   }   
//  }
    if (isset($_POST['delete'])) {
        $item = $_POST['item'];
            foreach ($cart as $key => $value) {
                if ($value['id']==$item) {
                    unset($_SESSION['cart'][$key]);
                }
            }
    }

// //Update Quatntity here
// $count = count($cart);
// $a=0;
// if(isset($_POST['update'])){
//     while($i<$count){
//     foreach ($cart as $key => $value) {      
//         if($_POST['id'.$a] == $value['id']){
//             $cart[$key]['quant'] = $_POST['quantity'.$a];   
//         }
//         }
//         $a++;
//     }
// }

// $_SESSION['cart']=$cart;

    // for update the quantity of the carts
    // 1:- count how many index in the cart
    // 2:- take a random value put initial value zero
    // 3:- check it update is clicked or not
    // 4:- while to last index that variabel should be increase
    // 5:- check in the cart the id index is present in the cart then 
    // 6:- cart key quantity index = new quantity wich is comming from the input of the update quantity fieled

$count = count($cart);

if (isset($_POST['update'])) {
    $pro_id = $_POST['pro_id'];
    echo $pro_id;
}

include('header.php');

?>
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

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <form action=" " method="POST">
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
                                <?php 
                                if(!empty($cart)){
                                    foreach($cart as $key => $value) { 
                                 ?>
                                <tr>                                	
                                    <td class="cart-pic first-row"><img src="<?php echo"../".$value['photo'];?>" alt="" width="100" height="100"></td>
                                    <td class="cart-title first-row">
                                        <h5><?php echo $value['name'];?></h5>
                                    </td>
                                    <td class="p-price first-row">$<?php echo $value['price'];?></td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <input type="hidden" name="prod_id<?php echo $key;?>" value="<?php echo $value['id'];?>">
                                            <div class="pro-qty">
                                                <input type="text" id="prod_quant" name="quantity<?php echo $key?>" value="<?php echo $value['qty'];?>">
                                            </div>
                                        </div>
                                    </td>	
                                    <td class="total-price first-row">$<?php echo($value['price']*$value['qty']); ?></td>
                                      <td > 
                                  		<form action="shopping-cart.php" method="POST">
                                            <input type="hidden" name="item" value="<?php echo $value['id'];?>">
                                            <input class="btn" style="background-color: transparent !important;" type="submit" name="delete" value="X">                                                                                         
                                      </td>
                                  </form>
                                </tr>
                            <?php } }?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="shop.php" class="primary-btn continue-shop">Continue shopping</a>
                                <input type="submit" name="update" value="Update Cart" class="primary-btn up-cart">                            
                            </div>                        
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
                                    <?php $total=0; 
                                    foreach($cart as $key => $value1) {
                                        $total = $total + ($value1['price']*$value1['qty']);
                                    }
                                    ?>                                                                    
                                    <li class="subtotal">Subtotal <span>$<?php echo $total; ?></span></li>
                                    <li class="cart-total">Total <span>$<?php echo $total; ?></span></li>  
                                </ul>
                                <a href="check-out.php" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </form>
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


