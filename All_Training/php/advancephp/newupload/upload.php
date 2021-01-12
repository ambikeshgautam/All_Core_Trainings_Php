<?php
 
 $imgname = $_FILES['image']['name'];
 $imagename = rand().$imgname;
 $imagesize = $_FILES['image']['size'];
 $imagetype = $_FILES['image']['type'];
 $imagetmpname = $_FILES['image']['tmp_name'];
 $location = "image/".$imagename;


 move_uploaded_file($imagetmpname,$location);
?>