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
        <title>Product Detail</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
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
                    <h3></h3>
                    <ul>
                       
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================Product Details Area =================-->
        <section class="product_details_area">
		<form method="GET" action="product-details.php">
		<input class="mtext-104 cl3 txt-center num-product" type="hidden" name="idss" id="idss" value="<?php if(isset($_GET['ids'])){	echo $_GET['ids'];}?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="product_details_slider">
                            <div id="product_slider" class="rev_slider" data-version="5.3.1.6">
                                <ul>	<!-- SLIDE  -->
								<?php
									if(isset($_GET['ids'])){
									$realfetchs=$_GET['ids'];
									require_once('connect.php');
									$sales6 ="SELECT ProductImage FROM `productdetails` where IDDesc='".$realfetchs."'";
									$result5=mysqli_query($link,$sales6);
									while($row5=mysqli_fetch_assoc($result5)){
                                    echo"<li data-index='rs-137221490' data-transition='scaledownfrombottom' data-slotamount='7'  data-easein='Power3.easeInOut' data-easeout='Power3.easeInOut' data-masterspeed='1500'  data-thumb='img/".$row5['ProductImage']."'  data-rotate='0'  data-fstransition='fade' data-fsmasterspeed='1500' data-fsslotamount='7' data-saveperformance='off'  data-title='Ishtar X Tussilago' data-param1='25/08/2020' data-description=''>";
                                         echo"<img src='img/".$row5['ProductImage']."'  alt='' data-bgposition='center center' data-bgfit='cover' data-bgrepeat='no-repeat' data-bgparallax='5' class='rev-slidebg' data-no-retina>"; 
                                     echo"</li>";
								}
									}
								?>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="product_details_text">
						<?php
							if(isset($_GET['ids'])){
							$realfetchs=$_GET['ids'];
							require_once('connect.php');
							$sales6 ="SELECT ProductName FROM `productdetails` where IDDesc='".$realfetchs."'";
							$result5=mysqli_query($link,$sales6);
							if($row5=mysqli_fetch_assoc($result5)){
                            echo"<h3>".$row5['ProductName']."</h3>";
							}
							}
							?>
                           <!-- <ul class="p_rating">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <div class="add_review">
                                <a href="#">5 Reviews</a>
                                <a href="#">Add your review</a>
                            </div>-->
                            <h6>Available In <span>Stock</span></h6>
                            <h4><?php
							if(isset($_GET['ids'])){
							$realfetchs=$_GET['ids'];
							require_once('connect.php');
							$sales6 ="SELECT Cost FROM `productdetails` where IDDesc='".$realfetchs."'";
							$result5=mysqli_query($link,$sales6);
							if($row5=mysqli_fetch_assoc($result5)){
								echo "Shs. ".$row5['Cost'];
							}

							}
							?></h4>
                            <p><?php
							if(isset($_GET['ids'])){
							$realfetchs=$_GET['ids'];
							require_once('connect.php');
							$sales6 ="SELECT ShortDescription FROM `productdetails` where IDDesc='".$realfetchs."'";
							$result5=mysqli_query($link,$sales6);
							if($row5=mysqli_fetch_assoc($result5)){
								echo $row5['ShortDescription'];
							}

							}
							?></p>
                            <!--<div class="p_color">
                                <h4 class="p_d_title">color <span>*</span></h4>
                                <ul class="color_list">
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                </ul>
                            </div>-->
                            <div class="p_color">
                                <h4 class="p_d_title">size <span>*</span></h4>
                                <select class="selectpicker" name="sizes" id="sizes">
                                    <option value="NA" >Select your size</option>
                                    <option value="Small">Size S</option>
                                    <option value="Medium">Size M</option>
									<option value="Large">Size L</option>
									<option value="Extra Large">Size XL</option>
                                </select>
                            </div>
                            <div class="quantity">
                                <div class="custom">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon_minus-06"></i></button>
                                    <input type="text" name="numproduct" id="sst" maxlength="12" value="01" title="Quantity:" class="input-text qty">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="icon_plus"></i></button>
                                </div>
                               <button style="background-color:#ff8000;text-transform:uppercase;font-size: 1.5em; font-weight:700; padding:10px;" name="addtocart" id="addtocart">add to cart</button>
                            </div>
                           <!-- <div class="shareing_icon">
                                <h5>share :</h5>
                                <ul>
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_pinterest"></i></a></li>
                                    <li><a href="#"><i class="social_instagram"></i></a></li>
                                    <li><a href="#"><i class="social_youtube"></i></a></li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
			</form>
        </section>
		<?php
					if(isset($_GET['idss'])){	
					$orderid = $_GET['idss'];
					require_once('connect.php');
					
					$sales6 ="SELECT Cost,ProductName FROM `productdetails` where IDDesc='".$orderid."'";
					$result5=mysqli_query($link,$sales6);
					if($row5=mysqli_fetch_assoc($result5)){
					$orderammount=$row5['Cost'];
					$orderproduct=$row5['ProductName'];
					}
					$orderquantity = $_GET['numproduct'];
					$orderammounts=$orderquantity * $orderammount;
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
        <!--================End Product Details Area =================-->
        
        <!--================Product Description Area =================-->
        <section class="product_description_area">
            <div class="container">
                <nav class="tab_menu">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Product Description</a>
                       
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <p><?php
					if(isset($_GET['ids'])){
					$realfetchs=$_GET['ids'];
					require_once('connect.php');
					$sales6 ="SELECT Description FROM `productdetails` where IDDesc='".$realfetchs."'";
					$result5=mysqli_query($link,$sales6);
					if($row5=mysqli_fetch_assoc($result5)){
						echo $row5['Description'];
					}

					}
					?></p>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Product Details Area =================-->
        
        <!--================End Related Product Area =================-->
        <section class="related_product_area">
            <div class="container">
                <div class="related_product_inner">
                    <h2 class="single_c_title">Related Product</h2>
                    <div class="row">
					<?php
				if(isset($_GET['ids'])){
				$realfetchs=$_GET['ids'];
				require_once('connect.php');
				$sales6 ="SELECT Category FROM `productdetails` where IDDesc='".$realfetchs."'";
				$result5=mysqli_query($link,$sales6);
				if($row5=mysqli_fetch_assoc($result5)){
					$categories= $row5['Category'];
				require_once('connect.php');
				$sales7 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Category='".$categories."' order by IDDesc Desc LIMIT 4";
				$result8=mysqli_query($link,$sales7);
				$counter1=1;
				while($row8=mysqli_fetch_assoc($result8)){
                        echo"<div class='col-lg-3 col-sm-6'>";
                            echo"<div class='l_product_item'>";
                                echo"<div class='l_p_img'>";
                                    echo"<img class='img-fluid' src='img/".$row8['ProductImage']."'' alt='' style='Height:320px;Width:100%'>";
                                echo"</div>";
                                echo"<div class='l_p_text'>";
                                   echo"<ul>";
                                        echo"<li class='p_icon'><a href='product-detail.php?ids=".$row8['IDDesc']."'><i class='icon_cart'></i></a></li>";
                                        echo"<li><a class='add_cart_btn' href='product-detail.php?ids=".$row8['IDDesc']."'>Add To Cart</a></li>";
                                        echo"<li class='p_icon'><a href='product-detail.php?ids=".$row8['IDDesc']."'><i class='icon_cart'></i></a></li>";
                                    echo"</ul>";
                                    echo"<h4>".$row8['ProductName']."</h4>";
                                    echo"<h5>Shs. ".$row8['Cost']."</h5>";
                                echo"</div>";
                            echo"</div>";
                        echo"</div>";
						}
						}
						}
                       ?>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--================End Related Product Area =================-->
        
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