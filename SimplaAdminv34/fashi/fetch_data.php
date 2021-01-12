<?php

include('config.php');

if (isset($_POST['action'])) {
    $sql = "SELECT * FROM add_products WHERE brand !=''";//select all from products whereto brand column is not empty/

    if (isset($_POST['minimum_price']) && isset($_POST['maximum_price']) && "" !=$_POST['minimum_price'] && "" !=$_POST['maximum_price']) {
        $min_price = $_POST['minimum_price'];
        $min_price = str_replace('$','', $min_price);

        $max_price = $_POST['maximum_price'];	
        $max_price = str_replace('$','', $max_price);

        $sql .="AND price BETWEEN '".$min_price."' AND '" .$max_price."'"; 
    }

    if (isset($_POST['brand'])) {
        $brand_filter = implode("','", $_POST['brand']);//imploded means data is coming in the form of array so implode converts array text into string/
        $sql.="AND brand IN('".$brand_filter."')";
    }	
    if (isset($_POST['category'])) {
        $cat_filter = implode("','", $_POST['category']);
        $sql .="AND category IN('".$cat_filter."')";
    }

    if (isset($_POST['tag'])) {
        $tag_filter = implode("','", $_POST['tag']);
        $sql .="AND tag IN('".$tag_filter."')";
    }

    if (isset($_POST['sort'])) {
        $sort_pro =$_POST['sort'];
        $sql .="ORDER BY price ".$sort_pro." ";
        //echo $sql;
    }

    if(isset($_POST['id'])){ 	 
        $load = (int)$_POST['id'] + 9;    
        $sql .="LIMIT ".$load." ";
        
    }


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