<?php
session_start();

    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
        $id = $_GET['id'];
		   foreach ($cart as $key => $value) {
		       if($value['id']==$id){
		        unset($cart[$key]);
		       }
		   }
$_SESSION['cart']=$cart;
header("location:shopping-cart.php");
  }

?>

