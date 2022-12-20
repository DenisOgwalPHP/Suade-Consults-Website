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
	
if(isset($_REQUEST['UpdateProductsupload'])){	
// getting inputs from the form	
	$productid = $_GET['Edit'];
    $productname = $_POST['productname'];
    $fileName = $_FILES['Filename']['name'];
	$temp = explode(".", $_FILES["Filename"]["name"]);
    $newfilename =$productname. '.' . end($temp);
	
	$target = '../../../../Akaya/img/';	
	$fileTarget = $target.$newfilename;     
    $tempFileName = $_FILES["Filename"]["tmp_name"];
	 $result = move_uploaded_file($tempFileName,$fileTarget);

	$supplier = $_POST['supplier'];
	$description = $_POST['description'];
	$cost = $_POST['cost'];
	$category=$_POST['categories'];
	$imageurl="http://goodwillwomenspulse.org/AndroidFiles/";
	$finalimageurl=$imageurl.$fileTarget;
	
	require_once('../../connection/connect.php');
	
	$query = "UPDATE `productdetails` SET ProductName='".$productname."',Supplier='".$supplier."',Category='".$category."',Description='".$description."',Cost='".$cost."' where IDDesc='".$productid."'";
			$result=mysqli_query($link,$query);
			if($result){
				echo '<script type="application/javascript">';
				echo'alert("Product successfully updated");';
				echo'window.location.href="ProductsTable.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Product update Failed");';
				echo'window.location.href="ProductsTable.php";';
				echo '</script>';
			}
			
	}else{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="ProductsTable.php";';
				echo '</script>';
			die;
		}
?>