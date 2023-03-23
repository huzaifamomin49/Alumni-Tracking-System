<?php
	include('conn.php');
	$sql='create table if not exists otp(email varchar(30) NOT NULL, otp varchar(30) NOT NULL)';
	mysqli_query($db,$sql);
	
	
function send_otp(){
	$message="";

	require "PHPMailerAutoload.php";
	$mail = new PHPMailer();
	
	$mail->Host="smtp.gmail.com";
	
	$mail->SMTPAuth=true;
	
	$mail->Username="trackeralumni@gmail.com";
	$mail->Password="ALMtracker@123";
	$mail->SMTPSecure="ssl"; //tls
	$mail->Port=465; //587 if tls
	
	$mail->Subject="OTP for Alumni Tracker";
	
	$mail->setFrom('trackeralumni@gmail.com','Team Alumni Tracker');
	$mail->addAddress($_SESSION['myemail']);
	
	$mail->isHTML(true);
	$mail->isSMTP();
	 
    $otp=genOTP();
	
    $message = "<h2><b>OTP for verification.</b></h2>";
    $message .= "<h1>".$otp;"</h1><br>";
    $message .="<h2><i>----Team Alumni Tracker----</i></h2>";
	
	$mail->Body="$message";
	$myemail = $_SESSION['myemail'];
        
	 if( $mail->send()) {
		 $con=mysqli_connect("localhost","root","","myDB");
		 $sql = "DELETE FROM otp where email='$myemail'";
		mysqli_query($con,$sql);
		 
         $sql1="insert into otp values('$myemail','$otp')";
			mysqli_query($con,$sql1);
         }
	
}
        
		 
function genOTP()
{          
		$makers = "ashishhuzaifapankaj1234567890";  	  
		$otp = ""; 
	  
		for ($i = 1; $i <= 6; $i++) { 
			$otp .= substr($makers, (rand()%(strlen($makers))), 1); 
		} 	 
		return $otp; 
}

function sendPass($myemail){
	$message='';
	$db = mysqli_connect("localhost","root","","alumni");
	
	
	 $sql = "SELECT password FROM alm_request_final where email='$myemail'";
		$result = mysqli_query($db,$sql);
	   
		$count= mysqli_num_rows($result);
	   
		$data = mysqli_fetch_assoc($result);
		
		$password = $data['password'];
		
		require "PHPMailerAutoload.php";
			$mail = new PHPMailer();
	
		$mail->Host="smtp.gmail.com";
	
		$mail->SMTPAuth=true;
	
		$mail->Username="trackeralumni@gmail.com";
		$mail->Password="ALMtracker@123";
		$mail->SMTPSecure="ssl"; //tls
		$mail->Port=465; //587 if tls
	
		$mail->Subject="OTP for Alumni Tracker";
	
		$mail->setFrom('trackeralumni@gmail.com','Team Alumni Tracker');
		$mail->addAddress($_SESSION['myemail']);
	
		$mail->isHTML(true);
		$mail->isSMTP();
		
		$message = "<h2><b>Password for Authentication.</b></h2>";
		$message .= "<h1>".$password;"</h1><br>";
		$message .="<h2><i>----Team Alumni Tracker----</i></h2>";
	
		$mail->Body="$message";
		$mail->send();
		
}
	



?>

   
