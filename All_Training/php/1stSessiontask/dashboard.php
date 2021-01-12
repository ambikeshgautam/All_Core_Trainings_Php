<h1 align = "center">
<?php
session_start();
if(isset($_SESSION['Uname'])){
    echo "Your Welcome"."   ".$_SESSION['Uname'];
}
else{
    echo "Sorry You  are not Login ! :(";
}
?>  

</h1>
<h2>
<a href="logout.php" style="float:right">Logout</a>
</h2>