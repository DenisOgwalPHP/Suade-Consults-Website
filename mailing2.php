<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';	
$email=$_POST['email'];
$messages='Please add me to you news letter mailing list';
	$to = 'info@suadeconsults.co.ug';
    $subject = 'News Letter';
    $message = $messages;
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers = $email . "\r\n" .'Reply-To:'. $email . "\r\n" .'X-Mailer: PHP/' . phpversion();
    echo (mail($to, $subject, $message, $headers)) ? 'Message sent!' : 'Message not sent!';
	echo '<script type="application/javascript">';
				echo'window.location.href="index.php";';
				echo '</script>';
?>