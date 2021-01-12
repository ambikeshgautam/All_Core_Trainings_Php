<h3 align="center"> 
<?php

session_start();

if(isset($_SESSION['uemail']))
{
echo"<tabel>";
echo"<tr><td> YourName:-</td><td>".$_SESSION['uname']."</td></tr><br>";
echo"<tr><td> FatherName:-</td><td>".$_SESSION['ufname']."</td></tr><br>";
echo"<tr><td> Address:-</td><td>".$_SESSION['uaddress']."</td></tr><br>";
echo"<tr><td> EmailId:-</td><td>".$_SESSION['uemail']."</td></tr><br>";
echo"</tabel>";
}else{
    echo "you are NOt Login";
}

?>
</h3>
<h3>
<a  href="logout.php" style="float:right">logout</a>
</h3>