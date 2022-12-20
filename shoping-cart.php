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
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3></h3>
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="shopping-cart2.html"></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================Shopping Cart Area =================-->
		<form  method="GET">
        <section class="shopping_cart_area p_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart_items">
                            <h3>Your Cart Items</h3>
                            <div class="table-responsive-md">
                                <table class="table">
								<thead>
								<th>Product</th>
								<th></th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
								</thead>
                                    <tbody>
                                       <?php
										if(isset($_SESSION['suadeuser'])){	
										require_once('connect.php');
										$sales7 ="SELECT Product,Quantity,Cost,ProductID,IDs FROM `carttemporary` where User='".$_SESSION['suadeemail']."' order by IDs ASC";
										$result8=mysqli_query($link,$sales7);
										while($row8=mysqli_fetch_assoc($result8)){
											$rates=$row8['Cost']/$row8['Quantity'];
											$productidss=$row8['ProductID'];
											echo"<form method='GET'>";
                                        echo"<tr>";
                                            echo"<th scope='row'>";
                                                echo"<button name='deletes' id='deletes' value='".$row8['IDs']."'><img src='img/icon/close-icon.png' alt=''></button>";
                                            echo"</th>";
                                            echo"<td>";
                                                echo"<div class='media'>";
                                                    echo"<div class='d-flex'>";
													require_once('connect.php');
													$sales9 ="SELECT ProductImage FROM `productdetails` where IDDesc='".$productidss."'";
													$result10=mysqli_query($link,$sales9);
													if($row9=mysqli_fetch_assoc($result10)){
                                                        echo"<img src='img/".$row9['ProductImage']."' alt='' style='Height:100px;Width:100px'>";
													}
                                                    echo"</div>";
                                                    echo"<div class='media-body'>";
                                                        echo"<h4>".$row8['Product']."</h4>";
                                                    echo"</div>";
                                                echo"</div>";
                                           echo"</td>";
                                            echo"<td><p class='red'> Shs. ".$rates."</p></td>";
                                            echo"<td>";
                                                echo"<div class='quantity'>";
													echo"<input class='mtext-104 cl3 txt-center num-product' type='number' name='numproduct' id='numproduct' value='".$row8['Quantity']."'>";
													echo"<div class='btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m'>";
													echo"<i class='fs-16 zmdi zmdi-plus'></i>";
                                                    
                                                echo"</div>";
                                            echo"</td>";
                                            echo"<td><p>Shs. ".$row8['Cost']."</p></td>";
											echo"<td class='column-6'>";
											echo"<button name='updates' id='updates' value='".$row8['IDs']."'>Update</button>";
											echo"</td>";
											echo"<input class='mtext-104 cl3 txt-center num-product' type='hidden' name='singlecost' id='singlecost' value='".$rates."'>";
                                        echo"</tr>";
                                        echo"<tr>";
                                            echo"<th scope='row'>";
                                            echo"</th>";
                                        echo"</tr";
                                        echo"<tr class='last'>";   
                                            echo"<td><p class='red'></p></td>";
                                            echo"<td></td>";
                                        echo"</tr>";
										echo"</form>";
										}
										}
										?>
										<?php
				if(isset($_SESSION['suadeuser'])){
				if(isset($_GET['deletes'])){
					$id=$_GET['deletes'];	
                        if(isset($id)){
				$sales6 ="DELETE  FROM carttemporary WHERE IDs='".$id."' and User='".$_SESSION['suadeemail']."'";
				$result=mysqli_query($link,$sales6);
				if($result){
				echo '<script type="application/javascript">';
				echo'alert("Item successfully Deleted");';
				echo'window.location.href="shoping-cart.php";';
				echo '</script>';
				}
						}
				}
				}else{
				/*echo '<script type="application/javascript">';
				echo'alert("Unsuccesful, Login first to Delete");';
				echo'window.location.href="shoping-cart.php";';
				echo '</script>';*/	
				}
				?>
				<?php
				if(isset($_SESSION['suadeuser'])){
				if(isset($_GET['updates']))
				{
					$id=$_GET['updates'];
				/*if($_GET['numproduct']==null|| $_GET['numproduct']=="")
					{			

					}else
						{*/
					$quantityss=$_GET['numproduct'];
					$costss=$_GET['singlecost']*$quantityss;
				require_once('connect.php');					
				$sales11 ="UPDATE carttemporary SET Quantity='$quantityss',Cost='$costss' WHERE IDs='".$id."' and User='".$_SESSION['suadeemail']."'";
				$results=mysqli_query($link,$sales11);
				if($results)
				{
				echo '<script type="application/javascript">';
				echo'alert("Item successfully Updated");';
				echo'window.location.href="shoping-cart.php";';
				echo '</script>';
				//}
							
						}	
				}
				}else{
				/*echo '<script type="application/javascript">';
				echo'alert("Unsuccesful, Login first to Update");';
				echo'window.location.href="shoping-cart.php";';
				echo '</script>';	*/
}
				?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart_totals_area">
                          
                            <div class="cart_t_list">
                                <div class="media">
                                    <div class="d-flex">
                                        <h5>Subtotal</h5>
                                    </div>
                                    <div class="media-body">
                                        <h6> <?php
											if(isset($_SESSION['suadeuser'])){
											require_once('connect.php');					
											$sales11 ="SELECT SUM(Cost) as Carttotal from carttemporary where User='".$_SESSION['suadeemail']."'";
											$results=mysqli_query($link,$sales11);
											if($results)
											{
												if($row9=mysqli_fetch_assoc($results)){
												Echo "Shs. ".$row9['Carttotal'];
												}
											}
											}else{
												Echo "Shs. 0";
											}
											?></h6>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="d-flex">
                                       
                                    </div>
                                    <div class="media-body">
                                       
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="d-flex">
                                        
                                    </div>
                                    <div class="media-body">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="total_amount row m0 row_disable">
                                <div class="float-left">
                                    Total
                                </div>
                                <div class="float-right">
                                   <?php
											if(isset($_SESSION['suadeuser'])){
											require_once('connect.php');					
											$sales11 ="SELECT SUM(Cost) as Carttotal from carttemporary where User='".$_SESSION['suadeemail']."'";
											$results=mysqli_query($link,$sales11);
											if($results)
											{
												if($row9=mysqli_fetch_assoc($results)){
												Echo "Shs. ".$row9['Carttotal'];
												}
											}
											}else{
												Echo "Shs. 0";
											}
											?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="finalsubmission" id="finalsubmission" value="submit" class="btn subs_btn form-control">Proceed to checkout</button>
                    </div>
                </div>
            </div>
        </section>
		</form>
		<?php
//session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_GET['finalsubmission'])){	
if($_SESSION['suadeuser'] !="Guest"){

	require_once('connect.php');
$sales6 ="SELECT User,Product,Quantity,Cost,ProductID FROM `carttemporary` where User='".$_SESSION['suadeemail']."'";
$result5=mysqli_query($link,$sales6);
if(mysqli_num_rows($result5) >=1){
while($row5=mysqli_fetch_assoc($result5)){
$orderammount=$row5['Cost'];
$orderproduct=$row5['Product'];
$orderuser=$row5['User'];
$orderproductsize=$row5['Size'];
$orderproductcolor=$row5['Color'];
$orderproductquantity=$row5['Quantity'];
$orderproductid=$row5['ProductID'];

	$orderuser = $_SESSION['suadeuser'];
	$orderemail =$_SESSION['suadeemail'];
	$orderphone =$_SESSION['suadeTelephone'];
	$query = "INSERT INTO `orders` (OrderBy,OrderByEmail,OrderByPhone,OrderCost,ProductName,Quantity,TransactionTrackingID,ProductSize,ProductColor) VALUES('$orderuser','$orderemail','$orderphone','$orderammount','$orderproduct','$orderproductquantity','$orderproductid','$orderproductsize','$orderproductcolor')";
	$results=mysqli_query($link,$query);
}

$sales7 ="DELETE  FROM carttemporary where User='".$_SESSION['suadeemail']."'";
$resultss=mysqli_query($link,$sales7);
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';			
				
				
    $to = 'deusakiki@gmail.com';
    $subject = 'Order Made';
    $message = 'Hi. Some Order has been made, Check your Website.';
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers = 'From: info@suadeconsults.co.ug' . "\r\n" .
        'Reply-To: no-reply@suadeconsults.co.ug' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    echo (mail($to, $subject, $message, $headers)) ? 'Message sent!' : 'Message not sent!';
				
				$last_id = mysqli_insert_id($link);
				//Account created notify user.
				echo '<script type="application/javascript">';
				echo'alert("Your Order has been successfully Registered, you can proceed to Add More");';
				echo'window.location.href="projects.php"';
				echo '</script>';
				
			/*}else{
				//Account creation failed, thow the user an error message
				echo '<script type="application/javascript">';
				echo'alert("Order Could not be registered");';
				echo'window.location.href="index.php";';
				echo '</script>';
			}*/
			
}else{
	echo '<script type="application/javascript">';
				echo'alert("You dont have any Product in your Cart");';
				echo'window.location.href="projects.php";';
				echo '</script>';
}
}else{
			echo '<script type="application/javascript">';
				echo'alert("Unsuccessful, Login First to submit your Order");';
				echo'window.location.href="shoping-cart.php";';
				echo '</script>';
			die;
		}
		}
?>
        <!--================End Shopping Cart Area =================-->
        
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