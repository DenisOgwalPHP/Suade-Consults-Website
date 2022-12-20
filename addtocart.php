<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_GET['addtocart'])){	
if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
    $orderid = $_GET['detailid'];
	require_once('connect.php');
$sales6 ="SELECT Cost,ProductName FROM `productdetails` where IDDesc='".$orderid."'";
$result5=mysqli_query($link,$sales6);
if($row5=mysqli_fetch_assoc($result5)){
$orderammount=$row5['Cost'];
$orderproduct=$row5['ProductName'];
}
	$orderquantity = $_GET['numproduct'];
	$ordersize = $_GET['sizes'];
	$ordercolor = $_GET['colors'];
	$orderammounts = $orderquantity * $orderammount;
	$orderuser = $_SESSION['email'];
			$query = "INSERT INTO `cartTemporary` (User,Product,Size,Color,Quantity,Cost,productID) VALUES('$orderuser','$orderproduct','$ordersize','$ordercolor','$orderquantity','$orderammounts','$orderid')";
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
				echo'window.location.href="index.php";';
				echo '</script>';
			}
			
}else{
	echo '<script type="application/javascript">';
				echo'alert("You are not logged in, first login or sign up if you dont have an account");';
				echo'window.location.href="index.php";';
				echo '</script>';
}
	}else{
			echo '<script type="application/javascript">';
				echo'alert("Failed, wrong inputs.");';
				echo'window.location.href="index.php";';
				echo '</script>';
			die;
		}
?>