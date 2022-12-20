
<?php 
session_start();
if(isset($_SESSION['suadeuser'])){
	}
	else{
		
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Suade Consults</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Electrician Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
 <link rel="shortcut icon" type="image/x-icon" href="images/CropProtectionLogo.jpg" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href="css/simpleLightbox.css" rel="stylesheet" type="text/css" />
<!--// css -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/main.js"></script>

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner-1 jarallax">
		<div class="agileinfo-dot-1">
			<div class="w3ls-banner-info-bottom">
				<div class="container">
					<div class="banner-address">
						<div class="banner-address-left ">
							<p><i class="fa fa-phone" aria-hidden="true"></i> 0312-456-789</p>
						</div>
						<div class="banner-address-left">
							<p><i class="fa fa-envelope" aria-hidden="true"></i> info@suadeconsults.co.ug</p>
						</div>
						<div class="banner-address-left right">
							<p><i class="fa fa-map-marker" aria-hidden="true"></i> Plot No. 22, Acacia Avenue, Kololo.</p>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="header">
				<div class="container">
					<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">Suade Consults</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="services.php">Services</a></li>
							<li ><a href="Aboutus.php">About US</a></li>
							<li class="active"><a href="projects.php">Shop</a></li>
							<li><a href="shoping-cart.php">Cart</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
						<div class="w3_agile_login">
							<div class="cd-main-header">
								<a class="cd-search-trigger" href="#cd-search"> <span></span></a>
								<!-- cd-header-buttons -->
							</div>
							<div id="cd-search" class="cd-search">
								  <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
									<input name="search" id="search" type="search" placeholder="Search...">
								</form>
							</div>
						</div>
						<div class="clearfix"> </div>
					</nav>
				</div>
			</nav>	
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- gallery -->
	<div class="banner-bottom">
		<div class="container">
			<h3 class="wthree_head">Products</h3>
				<p class="agileits_w3layouts_para w3_agile_para">We aim to protect you and provide you with the products you need to get the job done. With the latest products in stock, Suade consults delivers products in a simple and easy way that gives choice and support to all our customers. We deliver products sourced from Uganda and other international manufacturers, we provide products that are proven to save lives and prevent injury. The products we supply are designed and tested to meet international standards. we exist to deliver products that help support major developments, daily operations retail and distribution to one off projects.we are here to offer you options and choice when selecting products and we are available to provide recommendations for products that suit your industry.</p>
				<p class="agileits_w3layouts_para w3_agile_para">We supply scaffolding equipment sales and rentals, installation and dismantling in uganda. Our scafolding solutions include frame scaffold, system scafold, workplatforms, tube and clamp stair towers, debris mesh,hungers and catilevers and temporary shoring.</p>
									<div style='display:inline-block;position:relative;'>
									<form method="Get" action="projects.php">
									<Button style='display: inline-block;padding:10px; background:#fb5710;color: #fff; font-size: 1.2em;'><i class='fa fa-angle-double-right'></i>All Products
									</Button>
									
									<?php
									require_once('connect.php');
									$sales6 ="SELECT Distinct Category FROM `productdetails` order by IDDesc Desc LIMIT 20";
									$result5=mysqli_query($link,$sales6);
									$counter1=1;
									
									while($row6=mysqli_fetch_assoc($result5)){
										
									$sales7 ="SELECT COUNT(Category) as mynumber FROM `productdetails` where Category='".$row6['Category']."' order by IDDesc Desc LIMIT 20";
									$result8=mysqli_query($link,$sales7);
									if($row8=mysqli_fetch_assoc($result8)){
										
										
									 echo"<Button style='display: inline-block;padding:10px; background:#fb5710;color: #fff; font-size: 1.2em;' name='search' id='finalsubmission' value='".$row6['Category']."'>";
																   echo"<i class='fa fa-angle-double-right'></i>".$row6['Category']."<span>(".$row8['mynumber'].")</span>";
																
															echo"</Button>";
										
																			
									}
									}
									
									?> 
									</form>
									</div>									
			<div class="w3ls_gallery_grids">						                                             
                                   
				<?php
			if(isset($_GET['search'])){
				$realsearch=$_GET['search'];
				require_once('connect.php');
				$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Category like '%".$realsearch."%' OR ProductName like '%".$realsearch."%' OR Cost like '%".$realsearch."%' OR ShortDescription like '%".$realsearch."%' and Availability='Available' order by IDDesc Desc";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
					echo"<div class='col-md-4 w3_agile_gallery_grid'>";
					echo"<div class='agile_gallery_grid'>";	
							echo"<div class='agile_gallery_grid1'>";
								echo"<img src='img/".$row5['ProductImage']."' class='img-responsive' style='Height:300px;Width:300px' />";
								echo"<div class='w3layouts_gallery_grid1_pos'>";
									echo"<h3>".$row5['ProductName']."</h3>";
									echo"<p>Shs. ".$row5['Cost']."</p>";
									echo"<ul class='agileinfo_social_icons'>";
										echo"<li><a href='projects.php?productnames=".$row5['ProductName']."&ids=".$row5['IDDesc']."&costs=".$row5['Cost']."' class='wthree_twitter'><i class='fa fa-shopping-cart' aria-hidden='true'></i></a></li>";
									echo"</ul>";
								echo"</div>";
							echo"</div>";
					echo"</div>";
					echo"</div>";
				}
			}
				else{
					require_once('connect.php');
				$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Availability='Available' order by IDDesc Desc";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
					echo"<div class='col-md-4 w3_agile_gallery_grid'>";
					echo"<div class='agile_gallery_grid'>";	
							echo"<div class='agile_gallery_grid1'>";
								echo"<img src='img/".$row5['ProductImage']."' class='img-responsive' style='Height:300px;Width:300px'/>";
								echo"<div class='w3layouts_gallery_grid1_pos'>";
									echo"<p>".$row5['ProductName']."</p>";
									echo"<p>Shs. ".$row5['Cost']."</p>";
									echo"<ul class='agileinfo_social_icons'>";
										echo"<li><a href='projects.php?productnames=".$row5['ProductName']."&ids=".$row5['IDDesc']."&costs=".$row5['Cost']."' class='wthree_twitter'><i class='fa fa-shopping-cart' aria-hidden='true'></i></a></li>";
									echo"</ul>";
								echo"</div>";
							echo"</div>";
					echo"</div>";
					echo"</div>";
				}
				}?>
					
				
				<div class="clearfix"></div>
			</div>
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
	<!--<script src="js/simpleLightbox.js"></script>-->
	<script>
		$('.w3_agile_gallery_grid a').simpleLightbox();
	</script>
<!-- //gallery -->

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<h2 class="wthree_head">Subscribe to Newsletter</h2>
				<p class="agileits_w3layouts_para w3_agile_para">Please Register your Email here to subscribe to our news letter.</p>
				<div class="news-w3l">
					<form action="mailing2.php" method="post">
						<input type="email" name="email" id="email" placeholder="Enter Your Email..." required="">
						<input type="submit" value="Send">
					</form>
				</div>
			<div class="agile_footer_copy">
				<div class="w3agile_footer_grids">
					
					<div class="col-md-4 w3agile_footer_grid">
						<h3>Our vision</h3>
						<p>To be the world's leading supplier of quality products and providing EHS services and solutions that make a lasting difference for humanity and the environment </p>
					<h3>Our principle</h3>
						<p>we are guided by a high quality of service, value for money and making sure our clients are happy with our services </p>
					</div>
					</div>
					
					<div class="col-md-4 w3agile_footer_grid">
						<h3>Our mission</h3>
						<p>To provide the highest quality and most valuable health safety and environmental services and products for a sustainable development and welfare of individuals, places and organisations in Uganda and africa at large.</p>
					</div>
					
					<div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
						<h3>Our Values</h3>
						<ul>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="services.php">Integrity</a></li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="projects.php">Honesty</a></li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="icons.php">Trust</a></li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="contact.php">Care</a></li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="contact.php">Passion</a></li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="contact.php">Commitment to customer</a></li>
						</ul>
					</div>
					
					<div class="clearfix"> </div>
				</div>
			</div>
			
		</div>
		
	</div>
<!-- //footer -->
<!-- copy-right -->
	<div class="w3_agileits_copy_right_social">
		<div class="container">
			<div class="col-md-6 agileits_w3layouts_copy_right">
				<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://essentialsystems.atwebpages.com" target="_blank">Eng. Denis Ogwal</a></p>
			</div>
			<div class="col-md-6 w3_agile_copy_right">
				<ul class="agileinfo_social_icons">
					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileits_pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
				</ul>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
<!-- //copy-right -->
	<!-- jarallax -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //jarallax -->
	<script src="js/bootstrap.js"></script>
<!-- //here ends scrolling icon -->
</body>	
</html>