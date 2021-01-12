<?php

include('config.php');

if(isset($_POST['action'])){ //check whether action is comming or not in the field

        $sql = "SELECT * FROM add_products WHERE brand !=''";//select all from add_products where brand is not Equal to NULL

        //**********************************************Price Range Here **********************************************/       
        
        if(isset($_POST['maximum_price']) && isset($_POST['minimum_price']) && "" !=$_POST['maximum_price']  && "" !=$_POST['minimum_price']){
            $minprice = $_POST['minimum_price'];
            $minprice = str_replace("$","", $minprice);

            $maxprice = $_POST['maximum_price'];
            $maxprice = str_replace("$","", $maxprice);
            $sql .= "  AND price BETWEEN '" .$minprice."' AND '".$maxprice."'";
        }

        //**********************************************This is form Brand **********************************************/    

        if(isset($_POST['brand'])){
          $brand = implode("','",$_POST['brand']);//This Will convert it into the "," coma seprated  Value
          $sql.= "AND brand IN('".$brand."')";//
        }     


        //**********************************************Category Query  **********************************************/
        if(isset($_POST['Textvalue'])){
            $sql.= "AND category IN ('".$_POST['Textvalue']."')";
        }
        

        //**********************************************Color Query**********************************************/
        if(isset($_POST['color_text'])){
        $sql.= "AND color IN ('".$_POST['color_text']."')";
         }     
         

         //**********************************************Tag Query**********************************************/
         if(isset($_POST['Tag_text'])){
            $sql.= "AND tags IN ('".$_POST['Tag_text']."')";
        }
        if(isset($_POST["seach_id"])){
            $sql .= " ORDER BY  `price` ".$_POST['seach_id'];
        }

        //**********************************************Execute Query and Show the Result**********************************************/
        $result = $conn->query($sql);
        $output = '';
        if($result->num_rows>0){
            while($row= $result->fetch_assoc()){
                $output .='
                <div class="col-lg-4 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic"> <!--filter_data -->
                            <img src="../'.$row['photo'].'" alt="">
                            <div class="sale pp-sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">'.$row['category'].'</div>
                            <a href="product.php?details='. $row['id'].'">
                                <h5>'.$row['name'].'</h5>
                            </a>
                            <div class="product-price">
                               "$"'.$row['price'].'
                                <span>$35.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?> ';
            }
        }else{
            echo"<h3>No Record Found Here</h3>";
        }
        

        echo $output;       

       
}

?>