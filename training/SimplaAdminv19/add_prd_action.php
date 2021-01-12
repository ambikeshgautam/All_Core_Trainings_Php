<?php
        
        include('config.php');
        $update = false;
            $name = "";
            $model = "";
            $price = "";
            $photo = "";    

        if(isset($_POST['add'])){
            $name = $_POST['name'];
            $model= $_POST['model'];
            $price= $_POST['price'];
            $category = $_POST['select_category'];

            $photo = $_FILES['image']['name'];//put the image name 
            $upload = "./fashi/uploads/".$photo;//location to upload
                        
            $sql = "INSERT INTO `add_products`(`name`, `model`,`category`, `price`, `photo`) VALUES (?,?,?,?,?)";//???? are header file form the variables
            $stmt =$conn->prepare($sql);
            $stmt->bind_param("sssis",$name,$model,$category,$price,$upload);
            $stmt->execute();  
            move_uploaded_file($_FILES['image']['tmp_name'], $upload);
                  
            
             
            // $_SESSION['response'] = "Successfully Inserted to the dtabase !";
            // $_SESSION['res_type'] = "Success";
            header('location:addproduct.php');
      

        }
        if(isset($_GET['delete'])){
            $id = $_GET['delete'];//set the clicked value which has click by the buttons

            $sql = "SELECT photo FROM  `add_products` WHERE  id=?";
            $stmt2 = $conn->prepare($sql);
            $stmt2->bind_param("i",$id);
            $stmt2->execute();
            $result2=$stmt2->get_result();
            $row = $result2->fetch_assoc();

            $imagepath = $row['photo'];
            unlink($imagepath);//unlink the path of the image

            $query = "DELETE FROM `add_products` WHERE id=?";//delete that perticular id from the table
            $stmt=$conn->prepare($query);//make connection for query
            $stmt->bind_param("i",$id);// pass the data-type and id for bind parameter
            $stmt->execute();//exeuter the statemnt

            header('location:addproduct.php');//send again to the addproduct page
            // $_SESSION['response'] = "Successfully Deleted !";//set the session for the  message 
            // $_SESSION['res_type'] = "danger";//red color 
        }
        if(isset($_GET['edit'])){

            $id = $_GET['edit'];

            $query = "SELECT * FROM `add_products` WHERE id=?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $result = $stmt->get_result();//sttore in result withoout execute stmt
            $row = $result->fetch_assoc();
            //store the variable which are coming from database table
            $id = $row['id'];
            $name = $row['name'];
            $model = $row['model'];
            $category = $row['category'];
            $price = $row['price'];
            $photo = $row['photo'];
            $update = true;
            
                    
        }
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $model= $_POST['model'];
            $price= $_POST['price'];
            $category = $_POST['category'];
            $oldimage = $_POST['oldimage'];
            
            if(isset($_FILES['image']['name'])&&($_FILES['oldimage']['name']!="")){
                $newimage = "./fashi/uploads/".$_FILES['image']['name'];
                unlink($oldimage);
                move_uploaded_file($_FILES['image']['tmp_name'],$newimage);

            }else{
                    $newimage = $oldimage;
            }           

            $query = "UPDATE `add_products` SET name=?,model=?, category= ?,price=? ,photo=? WHERE id=?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("sssssi",$name, $model,$category,$price,$newimage,$id);
            $stmt->execute();
            header('location:addproduct.php');
            $_SESSION['response'] = "Upadated SuccessFully !";
            $_SESSION['res_type'] = "primary";
           
        }

        // if(isset($_GET['details'])){
        //     $id = $_GET['details'];
        //     $query = " SELECT * FROM `add_products` WHERE id=?";
        //     $stmt = $conn->prepare($query);
        //     $stmt->bind_param("i",$id);
        //     $stmt->execute();
        //     $result=$stmt->get_result();
        //     $row = $result->cubrid_fetch_assoc(result)oc();

        //     $vid = $row['id'];
        //     $vname = $row['name'];
        //     $vdetail =$row['details'];

        // }

?>