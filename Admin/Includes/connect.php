<?php
 $host = 'localhost'; $user = 'root'; $pass =''; $door = 'saude'; 
	$link=mysqli_connect($host,$user,$pass,$door);
	if($link==false){
		die("Error:can't connect".mysqli_connect_error());
		}
?>
