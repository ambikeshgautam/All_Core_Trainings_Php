<?php
// if(isset($_POST['upload'])){
//     $file = $_FILES['file'];
//     print_r($file);
// }
$imagename = $_FILES['file']['name'];
echo $imagename;
?>