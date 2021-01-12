<?php
session_start();
    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
	}    

$count = count($cart);
$i=0;
if(isset($_POST['update'])){
    while($i<$count){
	    foreach ($cart as $key => $value) {      
	        if($_POST['prod_id'.$i] == $value['id']){
	            $cart[$key]['quant'] = $_POST['quantity'.$i];   
	        }
	    }
        $i++;
    }
}
$_SESSION['cart']=$cart;
header('location:shopping-cart.php');


?>