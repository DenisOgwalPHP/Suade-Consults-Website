<?php
session_start();
if(isset($_SESSION['suadeadminuser'])){
	}
	else{
		
		}
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
	
if(isset($_REQUEST['productupload'])){	
// getting inputs from the form	
    $productname = $_POST['productname'];
	
	$fileNames = $_FILES['Filenames']['name'];
	$temps = explode(".", $_FILES["Filenames"]["name"]);
    $newfilenames =$productname.'1'. '.' . end($temps);
	
	 $fileName = $_FILES['Filename']['name'];
	$temp = explode(".", $_FILES["Filename"]["name"]);
    $newfilename =$productname. '.' . end($temp);
	
	$shortdescription=$_POST['shortdescription'];
	$postedby = $_POST['postedby'];
	$description = $_POST['description'];
	$imageurl="http://goodwillwomenspulse.org/AndroidFiles/";
	//$finalimageurl=$imageurl.$fileTarget;
	
	
	require_once('connect.php');
	
	$query = "INSERT INTO `blogs` (blogtitle,description,attachment,blogshotdescription,postedby,blogimage) VALUES('$productname','$description','$newfilename','$shortdescription','$postedby','$newfilenames')";
			$result=mysqli_query($link,$query);
			
	
	$targets = '../../../blogimg/';	
	$fileTargets = $targets.$newfilenames; 
	$tempFileNames = $_FILES["Filenames"]["tmp_name"];
	$results = move_uploaded_file($tempFileNames,$fileTargets);
	
   
	$target = '../../../blogattach/';	
	$fileTarget = $target.$newfilename;
	$tempFileName = $_FILES["Filename"]["tmp_name"];
	$result = move_uploaded_file($tempFileName,$fileTarget);
	
	$finalimageurl=$fileTarget;
	$finalimageurls=$fileTargets;
			if($result){
				echo '<script type="application/javascript">';
				echo'alert("Blog successfully registered");';
				echo'window.location.href="blog.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Blog registration Failed");';
				echo'window.location.href="blog.php";';
				echo '</script>';
			}
			
	}else{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="blog.php";';
				echo '</script>';
			die;
		}
?>