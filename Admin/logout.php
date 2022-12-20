<?php
session_start();
require_once('Connection/connect.php');
$userin=$_SESSION['suadeadminemail'];
$logout ="UPDATE registration SET `Status` ='Offline' where Email='".$userin."'";
mysqli_query($link,$logout);
	unset($_SESSION['suadeadminuser']);
	unset($_SESSION['suadeadminemail']);
	unset($_SESSION['suadeadminTelephone']);
    session_destroy();
	echo '<script type="application/javascript">';
				echo'alert("You Have Successfully Logged Out, Login to Start A nother Session");';
				echo'window.location.href="index.php";';
				echo '</script>';
				
	 ?>