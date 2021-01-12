<?php include('header.php'); ?>
<?php include('PageHead.php'); ?>
<?php include('add_prd_action.php'); ?>
<!-- Notification message -->
        <?php if(isset($_SESSION['response'])){ ?> 
            <div class="notification <?= $_SESSION['res_type'];?> png_bg">
                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                <div>
                <?= $_SESSION['response'];?>
                </div>
            </div>       
        <?php } unset($_SESSION['response']); ?>      
<!-- End Notification message -->
 <div class="content-box">
                <!-- Start Content Box -->

                <div class="content-box-header">
                    <h3>Products</h3>
                    <ul class="content-box-tabs">
                        <li><a href="#tab1" class="default-tab">Products</a></li>
                        <!-- href must be unique and match the id of target div -->
                        <li><a href="#tab2">Add products</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <!-- End .content-box-header -->
              <div class="content-box-content">
                <!--All product will show here -->
                <div class="tab-content default-tab" id="tab1">                                         
                  </div>
                  <!--All product will show here -->
                   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                     <script>
                        $(document).ready(function(){
                            function loadTable(page){
                                $.ajax({
                                    url:"ajax-pagination.php",
                                    type:"POST",
                                    data:{page_no: page},
                                    success:function(data){
                                        $("#tab1").html(data);
                                    }                                
                                });                                                      
                            }                       
                            loadTable();
                            //Pagination code
                            $(document).on("click","#pagination a",function(e){
                                e.preventDefault();
                                var page_id = $(this).attr("id");

                                loadTable(page_id);
                            });
                        });
                    </script>
                    <!-- End #tab1 -->

                    <div class="tab-content" id="tab2">
                       <form action="add_prd_action.php" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <input type="hidden" name="id" value="<?= $id; ?>">
                               <p>
                                    <label>Enter Name of Product</label>
                                    <input type="text" name="name" class="text-input medium-input datepicker" value = "<?= $name;?>" placeholder="Enter name" required/>
                                </p>
                                <p>
                                    <label>Enter Model of the product</label>
                                    <input type="text" name="model" class="text-input medium-input datepicker" value = "<?= $model;?>" placeholder="Enter Model" required/>
                                </p>
                                <p>
                                    <label>Enter Price of the Product</label>
                                    <input type="text" name="price" class="text-input medium-input datepicker" value = "<?= $price;?>" placeholder="Enter Price" required/>
                                </p>                

                                    <?php
                                    $query = " SELECT * FROM `category`"; 
                                        $stmt = $conn->prepare($query);
                                        $stmt->execute();
                                        $result = $stmt->get_result();
                                    ?>
                                    <p>
                                        <label>Select Category </label>
                                        <select class="text-input small-input" id="sel1" name="select_category" value="<?= $category;?>">
                                                <option name="category">Category</option>
                                                <?php 
                                                while($row = $result->fetch_assoc()){             
                                                ?>
                                                <option name="s_name" value="<?= $row['name'];?>"><?= $row['name']; ?></option>
                                                 <?php }?>
                                        </select>   
                                    </p>
                                    <?php
                                        $query = " SELECT * FROM `brand`"; 
                                        $stmt = $conn->prepare($query);
                                        $stmt->execute();
                                        $result = $stmt->get_result();
                                     ?>
                                    <p>
                                        <label>Select Brand </label>
                                        <select class="text-input small-input" id="sel1" name="select_brand" value="<?= $brand;?>">
                                                <option name="brand">Brand</option>
                                                <?php 
                                                while($row = $result->fetch_assoc()){             
                                                ?>
                                                <option name="" value="<?= $row['name'];?>"><?= $row['name']; ?></option>
                                                 <?php }?>
                                        </select>   
                                    </p>
                                    <?php 
                                        $query = " SELECT * FROM `color`"; 
                                        $stmt = $conn->prepare($query);
                                        $stmt->execute();
                                        $result = $stmt->get_result();
                                    ?>
                                    <p>
                                        <label>Choose Color </label>
                                        <select class="text-input small-input" id="sel1" name="select_color" value="<?= $color;?>">
                                                <option name="color">Color</option>
                                                <?php 
                                                while($row = $result->fetch_assoc()){             
                                                ?>
                                                <option name="" value="<?= $row['name'];?>"><?= $row['name']; ?></option>
                                                 <?php }?>
                                        </select>   
                                    </p>
                                    <?php 
                                        $query = " SELECT * FROM `tag`"; 
                                        $stmt = $conn->prepare($query);
                                        $stmt->execute();
                                        $result = $stmt->get_result();
                                    ?>
                                    <p>
                                        <label>Add Tag </label>
                                        <select class="text-input small-input" id="sel1" name="select_tag" value="<?= $tag;?>">
                                                <option name="selected_tag">Select Tag</option>
                                                <?php 
                                                while($row = $result->fetch_assoc()){             
                                                ?>
                                                <option name="selected_tag" value="<?= $row['tag_name'];?>"><?= $row['tag_name']; ?></option>
                                                 <?php }?>
                                        </select>   
                                    </p>                              
                                     <p>                                        
                                         <input type="hidden" name="oldimage" value="<?=$photo; ?>">
                                         <input type="file" name="image" class="custom-file"/>
                                         <img src="<?= $photo;?>" width="120px" class="img-thumbnail">
                                     </p>
                                      <p>      
                                          <?php if($update == true){ ?>
                                           <input type="submit" name="update" class="button" value="Update Products"/>
                                          <?php }else{ ?>              
                                            <input type="submit" name="add" class="button" value="Add Products" />
                                          <?php } ?>
                                    </p>
                            </fieldset>
                        </form>
                    </div>
              <!-- End #tab2 -->
         </div>
    <!-- End .content-box-content -->
            </div>

         <!-- End .content-box -->
            <div class="content-box column-left">

                <div class="content-box-header">

                    <h3>Content box left</h3>

                </div>
                <!-- End .content-box-header -->
                <div class="content-box-content">
                    <div class="tab-content default-tab">
                        <h4>Maecenas dignissim</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas
                            lacinia orci at neque commodo commodo.
                        </p>
                    </div>
                    <!-- End #tab3 -->
                </div>
                <!-- End .content-box-content -->
            </div>
            <!-- End .content-box -->
            <div class="content-box column-right closed-box">
                <div class="content-box-header">
                    <!-- Add the class "closed" to the Content box header to have it closed by default -->
                    <h3>Content box right</h3>
                </div>
            <!-- End .content-box-header -->
                <div class="content-box-content">
                    <div class="tab-content default-tab">
                        <h4>This box is closed by default</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas
                            lacinia orci at neque commodo commodo.
                        </p>
                    </div>
                    <!-- End #tab3 -->
                </div>
                <!-- End .content-box-content -->
            </div>
            <!-- End .content-box -->
            <div class="clear"></div>           
<?php include('footer.php');?>