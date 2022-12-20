<?php session_start();
if(isset($_SESSION['suadeuser'])){
	}
	else{
		
		}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" type="image/x-icon" href="images/CropProtectionLogo.jpg" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Suade Consults</title>

        <!-- Icon css link -->
        <link href="css/font-awesome2.min.css" rel="stylesheet">
        <link href="vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="vendors/jquery-ui/jquery-ui.css" rel="stylesheet">
        
        <link href="css/style3.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Menu Area =================-->
        <header class="shop_header_area carousel_menu_area">
            <div class="carousel_top_header row m0" style="background-color:#202020;">
                <div class="container">
                    <div class="carousel_top_h_inner">
                        <div class="float-md-left">
                            <div class="top_header_left">
                                
                            </div>
                        </div>
                        <div class="float-md-right">
                            <div class="top_header_middle" >
                                <a href="#"><i class="fa fa-phone" style='color:#FF8000;'></i><span style="color:#FFFFFF;">0780257203 / 0779408756</span></a>
                                <a href="#"><i class="fa fa-envelope" style='color:#FF8000;'></i><span style="color:#FFFFFF;">info@suadeconsults.co.ug</span></a>
								<a href="#"><i class="fa fa-map-marker" style='color:#FF8000;'></i><span style="color:#FFFFFF;"> Plot No. 22, Acacia Avenue, Kololo.</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel_menu_inner" style="background-color:#606060;">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                       <p style="font-size: 2.0em;text-transform:uppercase;font-weight:700;color:#FFFFFF;">SUADE CONSULTS</p>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item" ><a class="nav-link" href="index.php" style="color:#FFFFFF;">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="services.php" style="color:#FFFFFF;">Services</a></li>  
								<li class="nav-item active"><a class="nav-link" href="projects.php" style="color:#FF8000;">Shop</a></li> 								  
                                <li class="nav-item"><a class="nav-link" href="blog.php" style="color:#FFFFFF;">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="aboutus.php" style="color:#FFFFFF;">AboutUs</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.php" style="color:#FFFFFF;">Contact</a></li>
                            </ul>
                            <ul class="navbar-nav justify-content-end">
                                <li class="search_icon"><a href="#"><i class="icon-magnifier icons" style='color:#FF8000;'></i></a></li>
                                <li class="user_icon"><?php
						if($_SESSION['suadeuser']=="Guest"){echo"<a href='typography.php'><i class='icon-user icons' style='color:#FF8000;'>";}else{echo"<a href='logout.php'><i class='icon-user icons' >";}?></i></a></li>
                                <li ><a href="shoping-cart.php"><i class="icon-handbag icons" style='color:#FF8000;'></i><?php
				if(isset($_SESSION['suadeuser'])){
				require_once('connect.php');					
				$sales12 ="SELECT COUNT(IDs) as Carttotals from carttemporary where User='".$_SESSION['suadeemail']."'";
				$resultss=mysqli_query($link,$sales12);
				if($resultss)
				{
					if($row9=mysqli_fetch_assoc($resultss)){
					Echo $row9['Carttotals'];
					}
				}
				}else{
					Echo 0;
				}
				?></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--================End Menu Area =================-->
        
        <!--================Categories Banner Area =================-->
        <section class="categories_banner_area">
            <div class="container">
                <div class="c_banner_inner">
                   
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================Categories Product Area =================-->
        <section class="categories_product_main p_80">
            <div class="container">
                <div class="categories_main_inner">
                    <div class="row row_disable">
                        <div class="col-lg-9 float-md-right">
                            <div class="showing_fillter">
                                <div class="row m0">
                                    <div class="first_fillter">
                                        <h4>Showing 1 to 9 of 
										<?php
										require_once('connect.php');
										$sales7 ="SELECT COUNT(Category) as mynumber FROM `productdetails`";
									$result8=mysqli_query($link,$sales7);
									if($row8=mysqli_fetch_assoc($result8)){
									echo $row8['mynumber']; }?> total</h4>
                                    </div>
                                    <div class="secand_fillter">
									<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                                        <h4>SORT BY :</h4>
										
                                        <select class="selectpicker" name="sorting" onchange="this.form.submit()">
										<option value="Latest">...</option>
                                            <option value="Latest">Latest</option>
                                            <option value="Category">Category</option>
                                            <option value="SubCategory">SubCategory</option>
											 <option value="Price">Price</option>
											 <option value="Supplier">Supplier</option>
											 <option value="Names">Names</option>
											
                                        </select>
										</form>
                                    </div>
                                    <div class="third_fillter">
									<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                                        <h4>Show : </h4>
                                        <select class="selectpicker" name="shows" onchange="this.form.submit()">
										 <option value="9">...</option>
                                            <option value="9">9</option>
											<option value="30">30</option>
                                            <option value="60">60</option>
											<option value="90">90</option>
                                            <option value="900">900</option>
                                        </select>
										</form>
                                    </div>
                                    <div class="four_fillter">
                                        <h4>View</h4>
                                        <a class="active" href="#"><i class="icon_grid-2x2"></i></a>
                                        <!--<a href="#"><i class="icon_grid-3x3"></i></a>-->
                                    </div>
                                </div>
                            </div>
                            <div class="categories_product_area">
                                <div class="row">
								<?php
                                   if(isset($_GET['search']))
												   {
								$realsearch=$_GET['search'];
								require_once('connect.php');
								$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Category like '%".$realsearch."%' OR SubCategory like '%".$realsearch."%' OR ProductName like '%".$realsearch."%' OR Cost like '%".$realsearch."%' OR ShortDescription like '%".$realsearch."%' and Availability='Available' order by IDDesc Desc";
								$result5=mysqli_query($link,$sales6);
								$counter1=1;
								while($row5=mysqli_fetch_assoc($result5))
								{
                                    echo"<div class='col-lg-4 col-sm-6'>";
                                        echo"<div class='l_product_item'>";
                                            echo"<div class='l_p_img'>";
                                                 echo"<img src='img/".$row5['ProductImage']."' alt='' style='Height:320px;Width:100%'>";
                                            echo"</div>";
                                            echo"<div class='l_p_text'>";
                                               echo"<ul>";
                                                    echo"<li class='p_icon'><a href='product-details.php?ids=".$row5['IDDesc']."'><i class='icon_cart'></i></a></li>";
                                                    echo"<li><a class='add_cart_btn' href='product-details.php?ids=".$row5['IDDesc']."'>Add To Cart</a></li>";
                                                    echo"<li class='p_icon'><a href='product-details.php?ids=".$row5['IDDesc']."'><i class='icon_cart'></i></a></li>";
                                                echo"</ul>";
                                                echo"<h4>".$row5['ProductName']."</h4>";
                                                echo"<h5>Shs. ".$row5['Cost']."</h5>";
                                            echo"</div>";
                                        echo"</div>";
                                    echo"</div>";
                                    
				
								   }
								   }
								    else if(isset($_GET['page']))
												   {
								$realpage=$_GET['page'];
								require_once('connect.php');
								if($realpage=="2"){
								$sales6 ="SELECT * FROM(SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Availability='Available' order by IDDesc Desc LIMIT 18) as tb1  order by IDDesc Asc LIMIT 9";
								}
								if($realpage=="3"){
								$sales6 ="SELECT * FROM(SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Availability='Available' order by IDDesc Desc LIMIT 27) as tb1  order by IDDesc Asc LIMIT 9";
								}
								if($realpage=="4"){
								$sales6 ="SELECT * FROM(SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Availability='Available' order by IDDesc Desc LIMIT 36) as tb1  order by IDDesc Asc LIMIT 9";
								}
								if($realpage=="All"){
								$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Availability='Available' order by IDDesc Desc";
								}
								$result5=mysqli_query($link,$sales6);
								$counter1=1;
								while($row5=mysqli_fetch_assoc($result5))
								{
                                    echo"<div class='col-lg-4 col-sm-6'>";
                                        echo"<div class='l_product_item'>";
                                            echo"<div class='l_p_img'>";
                                                 echo"<img src='img/".$row5['ProductImage']."' alt='' style='Height:320px;Width:100%'>";
                                            echo"</div>";
                                            echo"<div class='l_p_text'>";
                                               echo"<ul>";
                                                    echo"<li class='p_icon'><a href='product-details.php?ids=".$row5['IDDesc']."'><i class='icon_cart'></i></a></li>";
                                                    echo"<li><a class='add_cart_btn' href='product-details.php?ids=".$row5['IDDesc']."'>Add To Cart</a></li>";
                                                    echo"<li class='p_icon'><a href='product-details.php?ids=".$row5['IDDesc']."'><i class='icon_cart'></i></a></li>";
                                                echo"</ul>";
                                                echo"<h4>".$row5['ProductName']."</h4>";
                                                echo"<h5>Shs. ".$row5['Cost']."</h5>";
                                            echo"</div>";
                                        echo"</div>";
                                    echo"</div>";
                                    
				
								   }
								   }
								   else if(isset($_GET['sorting']))
								   {
							$realsoting=$_GET['sorting'];
							require_once('connect.php');
							if($realsoting=="Category"){
							$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` order by Category Asc";
							}else if($realsoting=="SubCategory"){
							$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` order by SubCategory Asc";	
							}else if($realsoting=="Price"){
							$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` order by Cost Asc";	
							}else if($realsoting=="Supplier"){
							$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` order by Supplier Asc";	
							}else if($realsoting=="Names"){
							$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` order by ProductName Asc";	
							}else if($realsoting=="Latest"){
							$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` order by IDDesc Desc";	
							}
							$result5=mysqli_query($link,$sales6);
							$counter1=1;
							while($row5=mysqli_fetch_assoc($result5))
							{
                                    echo"<div class='col-lg-4 col-sm-6'>";
                                        echo"<div class='l_product_item'>";
                                            echo"<div class='l_p_img'>";
                                                 echo"<img src='img/".$row5['ProductImage']."' alt='' style='Height:320px;Width:100%'>";
                                            echo"</div>";
                                            echo"<div class='l_p_text'>";
                                               echo"<ul>";
                                                    echo"<li class='p_icon'><a href='product-details.php?ids=".$row5['IDDesc']."'><i class='icon_cart'></i></a></li>";
                                                    echo"<li><a class='add_cart_btn' href='product-details.php?ids=".$row5['IDDesc']."'>Add To Cart</a></li>";
                                                    echo"<li class='p_icon'><a href='product-details.php?ids=".$row5['IDDesc']."'><i class='icon_cart'></i></a></li>";
                                                echo"</ul>";
                                                echo"<h4>".$row5['ProductName']."</h4>";
                                                echo"<h5>Shs. ".$row5['Cost']."</h5>";
                                            echo"</div>";
                                        echo"</div>";
                                    echo"</div>";
                                    
				
								   }
								   }
								   
								    else if(isset($_GET['shows']))
								   {
							$realsoting=$_GET['shows'];
							require_once('connect.php');
							$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` order by IDDesc LIMIT ".$realsoting."";
							$result5=mysqli_query($link,$sales6);
							$counter1=1;
							while($row5=mysqli_fetch_assoc($result5))
							{
                                    echo"<div class='col-lg-4 col-sm-6'>";
                                        echo"<div class='l_product_item'>";
                                            echo"<div class='l_p_img'>";
                                                 echo"<img src='img/".$row5['ProductImage']."' alt='' style='Height:320px;Width:100%'>";
                                            echo"</div>";
                                            echo"<div class='l_p_text'>";
                                               echo"<ul>";
                                                    echo"<li class='p_icon'><a href='product-details.php?ids=".$row5['IDDesc']."'><i class='icon_cart'></i></a></li>";
                                                    echo"<li><a class='add_cart_btn' href='product-details.php?ids=".$row5['IDDesc']."'>Add To Cart</a></li>";
                                                    echo"<li class='p_icon'><a href='product-details.php?ids=".$row5['IDDesc']."'><i class='icon_cart'></i></a></li>";
                                                echo"</ul>";
                                                echo"<h4>".$row5['ProductName']."</h4>";
                                                echo"<h5>Shs. ".$row5['Cost']."</h5>";
                                            echo"</div>";
                                        echo"</div>";
                                    echo"</div>";
                                    
				
								   }
								   }
								 else{
								require_once('connect.php');
								$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Availability='Available' order by IDDesc Desc LIMIT 9";
								$result5=mysqli_query($link,$sales6);
								$counter1=1;
								while($row5=mysqli_fetch_assoc($result5)){
									 echo"<div class='col-lg-4 col-sm-6'>";
                                        echo"<div class='l_product_item'>";
                                            echo"<div class='l_p_img'>";
                                                echo"<img src='img/".$row5['ProductImage']."' alt='' style='Height:320px;Width:100%'>";
                                            echo"</div>";
                                            echo"<div class='l_p_text'>";
                                               echo"<ul>";
                                                    echo"<li class='p_icon'><a href='product-details.php?ids=".$row5['IDDesc']."'><i class='icon_cart'></i></a></li>";
                                                    echo"<li><a class='add_cart_btn' href='product-details.php?ids=".$row5['IDDesc']."'>Add To Cart</a></li>";
                                                    echo"<li class='p_icon'><a href='product-details.php?ids=".$row5['IDDesc']."'><i class='icon_cart'></i></a></li>";
                                                echo"</ul>";
                                                echo"<h4>".$row5['ProductName']."</h4>";
                                                echo"<h5>Shs. ".$row5['Cost']."</h5>";
                                            echo"</div>";
                                        echo"</div>";
                                    echo"</div>";
				}
				}?>
									
                                </div>
                                <nav aria-label="Page navigation example" class="pagination_area">
                                  <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="projects.php">1</a></li>
									 <?php
										require_once('connect.php');
										$sales7 ="SELECT COUNT(Category) as mynumber FROM `productdetails`";
										$result8=mysqli_query($link,$sales7);
										if($row8=mysqli_fetch_assoc($result8)){
										$numbers=$row8['mynumber']; 
										if($numbers>9&&$numbers>=18){
										echo "<li class='page-item'><a class='page-link' href='projects.php?page=2'>2</a></li>";
										}
										if($numbers>18&&$numbers>=27){
											echo "<li class='page-item'><a class='page-link' href='projects.php?page=3'>3</a></li>";
										}
										if($numbers>27&&$numbers>=36){
											echo "<li class='page-item'><a class='page-link' href='projects.php?page=4'>4</a></li>";
										}
										if($numbers>36){
										 echo"<li class='page-item next'><a class='page-link' href='projects.php?page=All'><i class='fa fa-angle-right' aria-hidden='true'></i></a></li>";	
										}
										}?>
                                   
                                  </ul>
                                </nav>
                            </div>
                        </div>
						<?php
					if(isset($_GET['ids'])){	
					$orderid = $_GET['ids'];
					$orderproduct= $_GET['productnames'];
					$orderquantity = 1;
					$orderammounts = $_GET['costs'];
					$orderuser = $_SESSION['suadeemail'];
					$query = "INSERT INTO `cartTemporary` (User,Product,Quantity,Cost,productID) VALUES('$orderuser','$orderproduct','$orderquantity','$orderammounts','$orderid')";
					$results=mysqli_query($link,$query);
					if($results){		
				
				$last_id = mysqli_insert_id($link);
				//Account created notify user.
				echo '<script type="application/javascript">';
				echo'alert("Your Order has been successfully Registered, you can proceed to Cart");';
				echo'window.location.href="shoping-cart.php"';
				echo '</script>';
				
			}else{
				//Account creation failed, thow the user an error message
				echo '<script type="application/javascript">';
				echo'alert("Order Could not be registered");';
				echo'window.location.href="projects.php";';
				echo '</script>';
			}
	}
?>
                        <div class="col-lg-3 float-md-right">
                            <div class="categories_sidebar">
                                <aside class="l_widgest l_p_categories_widget">
                                    <div class="l_w_title">
                                        <h3>Categories</h3>
                                    </div>
                                    <ul class="navbar-nav">
                                       <?php
									require_once('connect.php');
									$sales6 ="SELECT Distinct Category FROM `productdetails`";
									$result5=mysqli_query($link,$sales6);
									$counter1=1;
									
									while($row6=mysqli_fetch_assoc($result5)){
										 
                                       echo" <li class='nav-item dropdown'>";
                                           echo" <a class='nav-link dropdown-toggle' href='projects.php?search=".$row6['Category']."' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
                                           echo $row6['Category'];
                                           echo" <i class='icon_plus' aria-hidden='true'></i>";
                                           echo" <i class='icon_minus-06' aria-hidden='true'></i>";
                                           echo" </a>";
										  
                                           echo" <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>";
										    $sales7 ="SELECT Distinct SubCategory FROM `productdetails` where Category='".$row6['Category']."'";
											$result7=mysqli_query($link,$sales7);
											while($row7=mysqli_fetch_assoc($result7)){
                                               echo" <li class='nav-item'><a class='nav-link' href='projects.php?search=".$row7['SubCategory']."'>".$row7['SubCategory']."</a></li>";
											}
                                            echo"</ul>";
                                       echo" </li>";
									}
									?>
                                    </ul>
                                </aside>
                                
                                <aside class="l_widgest l_feature_widget">
                                    <div class="l_w_title">
                                        <h3>Featured Products</h3>
                                    </div>
									<?php
										require_once('connect.php');
										$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Featured='Yes' order by IDDesc Desc LIMIT 5";
										$result5=mysqli_query($link,$sales6);
										$counter1=1;
										while($row5=mysqli_fetch_assoc($result5)){
                                     echo"<div class='media'>";
                                         echo"<div class='d-flex'>";
                                             echo"<img src='img/".$row5['ProductImage']."' alt='' style='Height:100px;Width:100px'>";
                                         echo"</div>";
                                         echo"<div class='media-body'>";
                                             echo"<h4><a href='product-details.php?ids=".$row5['IDDesc']."'>".$row5['ProductName']."</a></h4>";
                                             echo"<h5>Shs. ".$row5['Cost']."</h5>";
                                         echo"</div>";
                                     echo"</div>";
									}?>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Categories Product Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area" style="background-color:#202020">
            <div class="container" >
                <div class="footer_widgets" >
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-6">
                            <aside class="f_widget f_about_widget">
                                 <p style="font-size: 2.0em;text-transform:uppercase;font-weight:700;color:#fff;">SUADE CONSULTS</p>
                                <p  style="text-align:justify;text-justify: inter-word;color:#fff;">Suade consults is a limited liability company registered in Uganda since 2019. The company’s principle business activity is in the area of Health, Safety and Environmental (HSE) consultancy and supply of related equipments and accessories.</p>
                                <h6>Social:</h6>
                                <ul>
                                    <li><a href="#"><i class="social_facebook" style="color:#ff8000;"></i></a></li>
                                    <li><a href="#"><i class="social_twitter" style="color:#ff8000;"></i></a></li>
                                    <li><a href="#"><i class="social_instagram" style="color:#ff8000;"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_info_widget">
                                <div class="f_w_title">
                                    <h3 style="color:#fff;">Information</h3>
                                </div>
                                <ul>
                                    <li><a href="Aboutus.php" style="color:#fff;">About us</a></li>
                                    <li><a href="blog.php" style="color:#fff;">Blog</a></li>
                                    <li><a href="services.php" style="color:#fff;">Services</a></li>
                                    <li><a href="contact.php" style="color:#fff;">Contact</a></li>
                                   
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_service_widget">
                                <div class="f_w_title">
                                    <h3 style="color:#fff;">Our vision</h3>
                                </div>
                                <p  style="text-align:justify;text-justify: inter-word; color:#fff;">To be the world's leading supplier of quality products and providing EHS services and solutions that make a lasting difference for humanity and the environment</p>
                               
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_extra_widget">
                                <div class="f_w_title">
                                    <h3 style="color:#fff;">Our principle</h3>
                                </div>
                               <p  style="text-align:justify;text-justify: inter-word; color:#fff;">we are guided by a high quality of service, value for money and making sure our clients are happy with our services</p>
                               
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_account_widget">
                                <div class="f_w_title">
                                    <h3 style="color:#fff;">Our mission</h3>
                                </div>
                                <p  style="text-align:justify;text-justify: inter-word; color:#fff;">To provide the highest quality and most valuable health safety and environmental services and products for a sustainable development and welfare of individuals, places and organisations in Uganda and africa at large.</p>
                               
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="footer_copyright" style="background-color:#000; width:100%;">
                    <h5>© <script>document.write(new Date().getFullYear());</script> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://essentialsystems.atwebpages.com" target="_blank">Eng. Denis Ogwal</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</h5>
                </div>
				  
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
        <script src="vendors/image-dropdown/jquery.dd.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/vertical-slider/js/jQuery.verticalCarousel.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>