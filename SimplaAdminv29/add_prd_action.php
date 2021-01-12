<?php
        session_start();
        include('config.php');
        $update = false;
            $name = "";
            $model = "";
            $category = "";
            $brand = "";
            $price = "";
            $photo = "";    
        //********Insert Data into the database**********/
        if(isset($_POST['add'])){

            $name = $_POST['name'];
            $model= $_POST['model'];
            $price= $_POST['price'];
            $category = $_POST['select_category'];
            $brand = $_POST['select_brand'];
            $color = $_POST['select_color'];
            $tag = $_POST['select_tag'];

            $photo = $_FILES['image']['name'];//put the image name 
            $upload = "./fashi/uploads/".$photo;//location to upload
                        
            $sql = "INSERT INTO `add_products`(`name`, `model`,`category`,`brand`,`color`,`tags`,`price`, `photo`) VALUES (?,?,?,?,?,?,?,?)";//???? are header file form the variables
            $stmt =$conn->prepare($sql);
            $stmt->bind_param("ssssssis",$name,$model,$category,$brand,$color,$tag,$price,$upload);
            $stmt->execute();  
            move_uploaded_file($_FILES['image']['tmp_name'], $upload);                  
            
             
            $_SESSION['response'] = "Successfully Inserted to the dtabase !";
            $_SESSION['res_type'] = "Success";
            header('location:addproduct.php');      

        }
        //********Delete Data from the Database **********/
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
            $_SESSION['response'] = "Successfully Deleted !";//set the session for the  message 
            $_SESSION['res_type'] = "error";//red color 
        }
        //********Fetch Data from the database for the input field and fill into it**********/
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
            $brand = $row['brand'];
            $color = $row['color'];
            $tag = $row["tags"];
            $price = $row['price'];
            $photo = $row['photo'];
            $update = true;
            
                    
        }
        //********Update data  into the database**********/
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $model= $_POST['model'];
            $price = $_POST['price'];
            $category = $_POST['select_category'];
            $brand = $_POST['select_brand'];
            $color = $_POST['select_color'];  
            $tag = $_POST['select_tag'];        
            $oldimage = $_POST["oldimage"]; 
            echo $oldimage;           
                       
            if(isset($_FILES['image']['name'])&&($_POST['oldimage']!="")){
                $newimage = "./fashi/uploads/".$_FILES['image']['name'];                
                
                move_uploaded_file($_FILES['image']['tmp_name'],$newimage);//Upload new image in the foder
                unlink($oldimage);//Remove the Old image 
            }else{
                $newimage = $oldimage;  // file is already present then not update
            }           
            
            $query = "UPDATE `add_products` SET name=?,model=?, category= ?,brand = ?, color=?, tags=? ,price=? ,photo=? WHERE id=?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ssssssisi",$name, $model,$category,$brand,$color, $tag,$price,$newimage,$id);
            $stmt->execute();
            
            header('location:addproduct.php');
            $_SESSION['response'] = "Upadated SuccessFully !";
            $_SESSION['res_type'] = "information";
           
        }

?>