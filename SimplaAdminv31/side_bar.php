<div id="body-wrapper">
        <!-- Wrapper for the radial gradient background -->

        <div id="sidebar">
            <div id="sidebar-wrapper">
                <!-- Sidebar with logo and menu -->

                <h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>

                <!-- Logo (221px wide) -->
                <a href="#"><img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" /></a>

                <!-- Sidebar Profile links -->
                <div id="profile-links">
                    Hello, <a href="#" title="Edit your profile"> <?php echo $_SESSION['user_name'];?> </a>, you have <a href="#messages" rel="modal" title="3 Messages">3 Messages</a><br />
                    <br />
                    <a href="#" title="View the Site">View the Site</a> | <a href="logout.php" title="Sign Out">Sign Out</a>
                </div>

                <ul id="main-nav">
                    <!-- Accordion Menu -->

                    <li>
                        <a href="./fashi" class="nav-top-item no-submenu">
                            <!-- Add the class "no-submenu" to menu items with no sub menu -->
                            Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="#" class="nav-top-item current">
                            <!-- Add the class "current" to current menu item -->
                          Products
                        </a>
                        <ul>
                            <li><a href="addproduct.php">Add Products</a></li>
                            <li><a class="current" href="#">List Product</a></li>
                            <!-- Add class "current" to sub menu items also
                            <li><a href="#">Product Comments</a></li>
                            <li><a href="#">Product Categories</a></li> -->
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="nav-top-item">
                        Categories
					</a>
                        <ul>
                            <li><a href="category.php">Create Categories</a></li>
                            <li><a href="#">See Categories</a></li>
                        </ul>
                    </li>

                  <li>
                        <a href="#" class="nav-top-item">
						Brand
					</a>
                        <ul>
                            <li><a href="brand.php">Add New Brand</a></li>
                            <li><a href="brand.php">Addedd Brand</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="nav-top-item">
						Color
					</a>
                        <ul>
                            <li><a href="color.php">Add Color</a></li>
                            <li><a href="color.php">Addedd Color</a></li>
                            
                        </ul>
                    </li>

                   <li>
                        <a href="tag.php" class="nav-top-item">
						Create Tag
					</a>
                        <ul>
                            <li><a href="tag.php">Add Tag</a></li>
                            <li><a href="tag.php">Addedd Tag</a></li>                            
                        </ul>
                    </li>

                </ul> 
                <!-- End #main-nav -->

                <div id="messages" style="display: none">
                    <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->

                    <h3>3 Messages</h3>

                    <p>
                        <strong>17th May 2009</strong> by Admin<br /> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
                        <small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
                    </p>

                    <p>
                        <strong>2nd May 2009</strong> by Jane Doe<br /> Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium
                        ornare est.
                        <small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
                    </p>

                    <p>
                        <strong>25th April 2009</strong> by Admin<br /> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
                        <small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
                    </p>

                    <form action="#" method="post">

                        <h4>New Message</h4>

                        <fieldset>
                            <textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
                        </fieldset>

                        <fieldset>

                            <select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>

                            <input class="button" type="submit" value="Send" />

                        </fieldset>

                    </form>

                </div>
                <!-- End #messages -->

            </div>
        </div>
        <!-- End #sidebar -->

        <div id="main-content">
            <!-- Main Content Section with everything -->

            <noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>