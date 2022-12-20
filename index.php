<?php session_start();?>
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
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
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
 <?php 
if(isset($_SESSION['suadeuser'])){
	}
	else{
				$_SESSION['suadeuser']="Guest";
				require_once('connect.php');
				$query = "INSERT INTO `guests` (nos) VALUES('1')";
				$results=mysqli_query($link,$query);				
				$sales12 ="SELECT COUNT(IDs) as Carttotals from guests";
				$resultss=mysqli_query($link,$sales12);
				if($resultss)
				{
					if($row9=mysqli_fetch_assoc($resultss)){
					$_SESSION['suadeemail']= $row9['Carttotals'];
					}
				}
				
				$_SESSION['suadeTelephone']="0";
		
		}
?>
	<!-- banner -->
	<div class="banner jarallax">
		
			<div class="w3ls-banner-info-bottom">
				<div class="container">
					<div class="banner-address">
						<div class="banner-address-left ">
							<p><i class="fa fa-phone" aria-hidden="true"></i>  0780257203 / 0779408756</p>
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
			<div class="header" id="header">
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
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="services.php">Services</a></li>	
							<li><a href="projects.php">Shop</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li ><a href="Aboutus.php">About US</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
						<div class="w3_agile_login">
							<div class="cd-main-header">
								<a class="cd-search-trigger" href="#cd-search"> <span></span></a>
								<!-- cd-header-buttons -->
							</div>
							<div id="cd-search" class="cd-search">
								 <form  action="projects.php" method="GET">
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
			<div class="w3layouts-banner">
				<div class="container">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>Environmental consultancy sevices </h3>
										<p>We aim at providing proffessional environmental management and environmental assesment <a href="services.php">services...</a></p>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>ISO consultancy services</h3>
										<p>We develop QHSE management systems and support organizations to improve upon their competence in implementing robust QHSE management systems in accordance with ISO standards for ISO <a href="services.php">certification...</a></p>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>HSE Trainings</h3>
										<p>We provide in-house HSE trainings to bring employees up to speed with HSE requirements to improve their involvement in the maintenance of healthy, safe and environmentally responsible <a href="services.php">workplaces...</a></p>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>EHSQ support functions</h3>
										<p>Engage SUADE CONSULTS LTD (SCL) for your periodic workplace inspections, safety culture surveys, internal and external auditing, completion of tenders, incident investigations, training, HSE data compilation, evaluation and reporting <a href="services.php">...</a></p>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>HSE applications</h3>
										<p>We provide simple analytical tools to enhance QHSE monitoring and performance reporting.<a href="services.php">more...</a></p>
									</div>
								</li>
							</ul>
						</div>
				</section>
			<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
			<!-- //flexSlider -->

				</div>
			</div>
		</div>
	
	<!-- //banner -->
	<!-- services -->
	<div class="banner-bottom" style="padding-bottom:10px;padding-top:10px;">
		<div class="container">
		
			<div class="agileits_banner_bottom_grid_three">
				<div class="col-md-4 agileinfo_banner_bottom_grid_three_left">
					<div class="wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy" style='background-color:#fff;'>
							<img src="images/ppe.png" alt=" " class="img-responsive" style='Height:300px;Width:100%;;'/>
							<figcaption>
								<h3>Personal Protective Equipment</h3>
								<p><a href="projects.php?search=Personal Protective Equipment">Shop Now</a></p>
							</figcaption>			
						</figure>
					</div>
					
				</div>
				<div class="col-md-4 agileinfo_banner_bottom_grid_three_left">
					<div class="wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy" style='background-color:#fff;'>
							<img src="images/sinage.jpeg" alt=" " class="img-responsive" style='Height:300px;Width:100%'/>
							<figcaption>
								<h3>Signage and Identification</h3>
								<p><a href="projects.php?search=Signage & Identification">Shop Now</a></p>
							</figcaption>			
						</figure>
					</div>
					
				</div>
				<div class="col-md-4 agileinfo_banner_bottom_grid_three_left">
					<div class="wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy" style='background-color:#fff;'>
							<img src="images/firesafety.jpeg" alt=" " class="img-responsive" style='Height:300px;Width:100%' />
							<figcaption>
								<h3>Fire Safety Equipment</h3>
								<p><a href="projects.php?search=Fire safety equipment">Shop Now</a></p>
							</figcaption>			
						</figure>
					</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<div class="services" style="padding-bottom:10px;padding-top:10px;">
		<div class="container">
			<div class="agileits_heading_section">
				<h3 class="wthree_head">Welcome to Suade Consults LTD</h3>
				<p class="agileits_w3layouts_para w3_agile_para" style="text-align:justify;text-justify: inter-word;">Suade consults is a limited liability company registered in Uganda. Our principle business activity is in the area of Health, Safety and Environmental (HSE) consultancy and supply of related equipments and accessories. Suade was founded in May 2019 and maintains a strong commitment to providing products and services that promote environmental sustainability, improve working conditions and promote safety on the job site. we have become an essential resource for organizations who need consultancy support in health safety and environment and supply of products that meet the basic needs of keeping up with required safety of the people and the environment.</p> 
				<p class="agileits_w3layouts_para w3_agile_para" style="text-align:justify;text-justify: inter-word;">Our multi-disciplinary team of Consultants has firsthand experience in diverse industry sectors to help companies achieve legal compliance and work closely with clients to make sure we deliver exactly what they want by understanding their needs. A key objective of everyone at Suade is to provide a superior quality experience for our clients. </p>
			</div>
			
		</div>
	</div>
<!-- //services -->

	<!-- banner-bottom -->
	<div class="banner-bottom" style="padding-bottom:10px;padding-top:10px;">
		<div class="container">
			<div class="agileits_heading_section">
				<h3 class="wthree_head">Products</h3>
				<p class="agileits_w3layouts_para w3_agile_para" style="text-align:justify;text-justify: inter-word;">At Suade, we aim to protect you and provide you with the products you need to get the job done. With the latest products in stock, Suade consults delivers products in a simple and easy way that gives choice and support to all our customers. We deliver products sourced from Uganda and other international manufacturers. </p>
				<p class="agileits_w3layouts_para w3_agile_para" style="text-align:justify;text-justify: inter-word;">We provide products that are proven to save lives and prevent injury. The products we supply are designed and tested to meet international standards. We exist to deliver products that help support major developments, daily operations retail and distribution to one off projects. We are here to offer you options and choice when selecting products and we are available to provide recommendations for products that suit your industry. Visit on our online <a href="projects.php">SHOP</a> to access our products..</p>
				</div>	
			
			<div class="agileits_banner_bottom_grid_three">
			<?php
				require_once('connect.php');
				$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Featured='Yes' order by IDDesc Desc LIMIT 6";
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
										echo"<li><a href='product-details.php?ids=".$row5['IDDesc']."' class='wthree_twitter'><i class='fa fa-shopping-cart' aria-hidden='true'></i></a></li>";
									echo"</ul>";
								echo"</div>";
							echo"</div>";
					echo"</div>";
					echo"</div>";
				}
				?>
				<!--<div class="clearfix"> </div>-->
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- stats 
	<div class="stats">
		<div class="container">
			<div class="col-md-3 w3_counter_grid">
				<div class="w3_agileits_counter_grid">
					<i class="fa fa-umbrella" aria-hidden="true"></i>
				</div>
				<p class="counter">1,965</p>
				<h3>Orders Completed</h3>
			</div>
			<div class="col-md-3 w3_counter_grid">
				<div class="w3_agileits_counter_grid">
					<i class="fa fa-users" aria-hidden="true"></i>
				</div>
				<p class="counter">432</p>
				<h3>Crew Members</h3>
			</div>
			<div class="col-md-3 w3_counter_grid">
				<div class="w3_agileits_counter_grid">
					<i class="fa fa-comments" aria-hidden="true"></i>
				</div>
				<p class="counter">690</p>
				<h3>Million Man-hours</h3>
			</div>
			<div class="col-md-3 w3_counter_grid">
				<div class="w3_agileits_counter_grid">
					<i class="fa fa-book" aria-hidden="true"></i>
				</div>
				<p class="counter">124</p>
				<h3>Counties Covered</h3>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
stats -->
<!-- stats 
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!-- team -->
	<div class="agileits_heading_section">
				<h3 class="wthree_head">Our Clients</h3>
				<p class="agileits_w3layouts_para w3_agile_para">Our Satisfied and Esteemed Clients</p>
			</div>
	<div class="w3_agileits_copy_right_social" style=" background-color: white;">
		<div style="display: inline-block;width: 100%;position:relative;padding:0;margin-left:auto;margin-right:auto;margin-top:5px;text-align:center;">
				<ul class="agileinfo_social_icons">
					<li><img src="images/simba.jpg" style="height:60px;width:100%;vertical-align: middle;;"></li>
					<li><img src="images/whitenile.jpg" style="height:60px;width:100%;vertical-align: middle;;"></li>
					<li><img src="images/cken.jpg" style="height:60px;width:100%;vertical-align: middle;;"></li>
				</ul>
		</div>
	</div>
	<!-- //team -->
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