<?php
function siteURL() {
		$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
		$domainName = $_SERVER['HTTP_HOST'].'/';
		return $protocol;
	}

	define( 'SITE_URL', siteURL() );

	$url = $_SERVER['REQUEST_URI']; //returns the current URL
	$parts = explode('/',$url);
	$dir = $_SERVER['SERVER_NAME'];
	for ($i = 0; $i < count($parts) - 1; $i++) {
		$dir .= $parts[$i] . "/";
	}

	$url = SITE_URL.$dir;

$title = "";
$message = "";
function title($text){
		$title = $text;
		return $title;
	}

	//Message function: Returns a message to the user notifying them of their account status
	function message($text){
		$message = "<p>".$text."</p>";
		return $message;
	}
	// cURL Get Contents
	function curl_get_contents($url){
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}
	
if(isset($_POST['registerbutton'])){	
    $Confirmpassword = $_POST['Passwords'];	
	$password = $_POST['Passwords'];
	if ($Confirmpassword==$password){
		
	}else{
	echo '<script type="application/javascript">';
				echo'alert("Confirmation Password does not match password, Try Again");';
				echo'window.location.href="typography.php";';
				echo '</script>';	
	}
// getting inputs from the form		
	$password = $_POST['Passwords'];
	$encryptedpassword = md5($password);
	$email = $_POST['usernames'];
	$names=  $_POST['fullnames'];
	$phone = $_POST['telephones'];
	$address = $_POST['locations'];
    $timeregistered=date("Y-m-d H:i:s");
	require_once('connect.php');
	
	//checking if user is already registered
			$count ="SELECT COUNT('Email') AS Counter FROM `clientregistration` WHERE `Email` = '".$email."'";
			$result=mysqli_query($link,$count);
			$row=mysqli_fetch_assoc($result);
		if($row['Counter'] == 0){
			$query = "INSERT INTO `clientregistration` (FullNames,Password,Email,Telephone,Address) VALUES('$names','$encryptedpassword','$email','$phone','$address')";
			$results=mysqli_query($link,$query);
			if($results){
				
				require 'PHPMailer/src/Exception.php';
				require 'PHPMailer/src/PHPMailer.php';
				require 'PHPMailer/src/SMTP.php';			
							
				$to = $email;
				$subject = 'Email Verification';
				$message = 'Please Click the link below to verify your Account suadeconsults.co.ug/emailapproval.php?email='.$email;
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
				$headers = 'From: info@suadeconsults.co.ug' . "\r\n" .
					'Reply-To: no-reply@suadeconsults.co.ug' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();

				echo (mail($to, $subject, $message, $headers)) ? 'Message sent!' : 'Message not sent!';
				
				
			/*	$last_id = mysqli_insert_id($link);
				//Account created notify user.
				echo '<script type="application/javascript">';
				echo'alert("Your Order has been successfully Registered, you can proceed to make payments");';
				echo'window.location.href="shopping-cart-form.php?productid='.$productid.'&ammounts='.$orderammount.'&refid='.$last_id.'"';
				echo '</script>';*/
				
				//Account created notify user.
				echo '<script type="application/javascript">';
				echo'alert("Your Account Has Been Created, Visit your Email inbox or Spam and approve account to begin using it ");';
				echo'window.location.href="index.php";';
				echo '</script>';
			}else{
				//Account creation failed, thow the user an error message
				echo '<script type="application/javascript">';
				echo'alert("Account Could not be created");';
				echo'window.location.href="index.php";';
				echo '</script>';
			}
			}else{
			//Wrong username or password message
				echo '<script type="application/javascript">';
				echo'alert("Account with same Username Already Exists");';
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