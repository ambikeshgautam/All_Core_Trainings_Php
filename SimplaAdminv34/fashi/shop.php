<?php
    include('config.php'); 

    $query = "SELECT DISTINCT category FROM add_products ORDER BY category"; //this Query will Order the all element of the DataBase is serial manner
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $cat_result = $stmt->get_result(); 

    $query = "SELECT DISTINCT brand FROM add_products ORDER BY brand"; //this Query will Order the all element of the DataBase is serial manner
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $brand_result = $stmt->get_result(); 

    $query = "SELECT DISTINCT color FROM add_products ORDER BY color"; //this Query will Order the all element of the DataBase is serial manner
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $color_result = $stmt->get_result();

    $query = "SELECT DISTINCT tags FROM add_products ORDER BY tags"; //this Query will Order the all element of the DataBase is serial manner
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $tags_result = $stmt->get_result();

    include('header.php'); 
 ?>                  
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->
    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">                
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <!-- fetching Categories -->
                         <?php while($row = $cat_result->fetch_assoc()){ ?>                         
                         <ul class="filter-catagories" id="filter_categories">
                            <li>
                               <a href="#" class="product_clicked category" id="<?=$row['category']?>"><?= $row['category']?></a>                              
                               <input type="checkbox" style="display: none;" class="product_check category" value="<?php echo $row['category']; ?>" id="category"> 
                            </li>                                                      
                         </ul>
                         <?php } ?>
                         <!--End fetching Categories -->
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Brand</h4>                            
                             <!-- Fetching Brand from product Table -->
                                <?php while($row = $brand_result->fetch_assoc()) { ?>
                                    <div class="fw-brand-check">                     
                                        <div class="bc-item">
                                            <label for-<? $row['brand']?>>                                               
                                                <input type="checkbox" class="product_clicked brand" id="brand" value="<?=$row['brand']?>">
                                                <?= $row['brand']?>
                                                <span class="checkmark"></span>
                                                                                                                                   
                                            </label>                       
                                        </div>                            
                                    </div>
                                <?php } ?>
                            <!-- End Fetching Brand from product Table -->
                        </div>             
                    <div class="filter-widget">
                        <h4 class="fw-title">Price</h4>
                          <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text"  id="minamount">
                                    <input type="text"  id="maxamount">
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="0" data-max=98>
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <a href="#" class="filter-btn" id="filter_button">Filter</a>
                    </div>
                    <!-- Color Fetching Here -->                    
                    <div class="filter-widget">
                        <h4 class="fw-title">Color</h4>
                        <?php while($row = $color_result->fetch_assoc()) { ?>  
                          <div class="fw-color-choose">                             
                            <div class="cs-item">
                                <input type="radio"  value="<?=$row['color'];?>" id="cs-<?=$row['color'];?>">
                                <label class="cs-<?=$row['color'];?> color_filter " for="cs-<?=$row['color'];?>"><?=$row['color'];?></label>
                            </div>                           
                         </div>
                       <?php } ?>
                    </div>                   
                    <!-- Color Fetching Here -->
                    <div class="filter-widget">
                        <h4 class="fw-title">Size</h4>
                        <div class="fw-size-choose">
                            <div class="sc-item">
                                <input type="radio" id="s-size">
                                <label for="s-size">s</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="m-size">
                                <label for="m-size">m</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="l-size">
                                <label for="l-size">l</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="    ">
                                <label for="xs-size">xs</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Tags</h4>
                        <!-- fetchign Tag from the Table  -->
                        <?php while($row = $tags_result->fetch_assoc()) { ?>
                        <div class="fw-tags">
                            <p id="<?=$row['tags'];?>" class=" product_clicked tag" ><?=$row['tags'];?></p>                   
                        </div>
                     <? }?>
                     <!-- End fetching Tag   -->
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                    <select class="sorting" id="sorting">                        
                                        <option id="ASC" value="ASC"> Price Low to High</option>
                                        <option id="DESC" value="DESC">Price High to Low</option>
                                    </select>
                                    <select class="p-show" id="p-show">
                                        <option id="pn" value="show-pn">Show:</option>                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                <p>Show 01- 09 Of 36 Product</p>
                            </div>
                        </div>
                    </div>
                    <!-- Fetching added product from the dataBase -->
                    <div class="product-list">
                        <div class="row filter_data">                  
                        
                        <!-- Fitering Data All -->

                        </div>
                    </div> 
                     <!-- // End Fetching added product from the dataBase -->
                    <div class="loading-more">
                        <i class="icon_loading"></i>
                        <a href="#">
                            Loading More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->
<!-- Ajax Code -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javaScript" src="filter_jq.js"> </script>
<!-- // Ajax Code -->
<?php  include('footer.php'); ?>