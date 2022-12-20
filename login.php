<?phpsession_start();

if(isset($_POST['loginbutton'])){	
// getting inputs from the form		
	$email = $_POST['usernames'];
	$password = $_POST['Passwords'];
	$encryptedpassword = md5($password);
				
			require_once('connect.php');
			$newfetch ="SELECT Fullnames,Password,Email,Telephone FROM `clientregistration` WHERE Email = '".$email."' and ApprovalStatus='Approved'";
			$result=mysqli_query($link,$newfetch);
			$row2=mysqli_fetch_row($result);	
			if(mysqli_num_rows($result)<=1){
				$staffnames= $row2[0];
				$fetchedpassword = $row2[1];
				$email=$row2[2];
				$tele=$row2[3];
			if( $fetchedpassword ==$encryptedpassword){
									
				$sales11 ="UPDATE carttemporary SET User='".$email."' where User='".$_SESSION['suadeemail']."'";
				$results=mysqli_query($link,$sales11);
				
				$_SESSION['suadeuser']=$staffnames;
				$_SESSION['suadeemail']=$email;
				$_SESSION['suadeTelephone']=$tele;
				header('Location:shoping-cart.php');
				}else{	
				echo '<script type="application/javascript">';
				echo'alert("Password Does Not match Registered Password");';
				echo'window.location.href="typography.php";';
				echo '</script>';
				}
			}else{
				
				echo '<script type="application/javascript">';
				echo'alert("UserName Does Not exist,Try Again");';
				echo'window.location.href="typography.php";';
				echo '</script>';
				}
			
	}else{
			header("location:typography.php");
			die;
		}
?>