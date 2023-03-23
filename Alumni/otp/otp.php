<?php
	session_start();
	include('conn.php');
	$sql='create table if not exists otp(email varchar(30) NOT NULL, otp varchar(30) NOT NULL)';
	mysqli_query($con,$sql);
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
            <script>alert("OTP sent successfully...")</script>;
         }else {
            <script>alert( "OTP could not be sent...")</script>;
         }
	sql1='insert into otp values($myemail,$otp)';
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
	



?>

   