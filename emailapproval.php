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
	
if(isset($_GET['email'])){	
$emails=$_GET['email'];
				require_once('connect.php');
			$query = "UPDATE  `clientregistration` SET ApprovalStatus='Approved' where Email='".$emails."'";
			$results=mysqli_query($link,$query);
			if($results){
				
				echo '<script type="application/javascript">';
				echo'window.location.href="index.php";';
				echo '</script>';

				
			}else{
				//Account creation failed, thow the user an error message
				echo '<script type="application/javascript">';
				echo'alert("Account Could not be Approved");';
				echo'window.location.href="index.php";';
				echo '</script>';
			}
			
}else{
	echo '<script type="application/javascript">';
				echo'alert("Email not found");';
				echo'window.location.href="index.php";';
				echo '</script>';
}
	
?>