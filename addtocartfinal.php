<?php
//session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$sales7 ="DELETE  FROM carttemporary";
$resultss=mysqli_query($link,$sales7);
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';			
				
				
    $to = 'ogdenomix@gmail.com';
    $subject = 'Order Made';
    $message = 'Hi. Some Order has been made, Check your Website.';
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers = 'From: info@akayafurniture.com' . "\r\n" .
        'Reply-To: no-reply@akayafurniture.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    echo (mail($to, $subject, $message, $headers)) ? 'Message sent!' : 'Message not sent!';
				
				$last_id = mysqli_insert_id($link);
				//Account created notify user.
				echo '<script type="application/javascript">';
				echo'alert("Your Order has been successfully Registered, you can proceed to Add More");';
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
				echo'alert("You dont have any Product in your Cart");';
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