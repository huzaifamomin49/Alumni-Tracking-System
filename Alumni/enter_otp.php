<?php
    session_start();
	include('conn.php');
	include('otp.php');
	$myemail=$_SESSION['myemail'];
    if($_SERVER["REQUEST_METHOD"] == "POST") {
		
       $otp= mysqli_real_escape_string($db,$_POST['otp']);
	   
        
       $sql = "SELECT * FROM otp WHERE email = '$myemail'";
       
	   $result = mysqli_query($db,$sql);
	   
       $count= mysqli_num_rows($result);
	   
	   $data = mysqli_fetch_assoc($result);
      
	  if($count > 0 and $otp == $data['otp'])
       {	
		  sendPass($myemail);
          header("location:login.php");
       }
        else{
           echo '<script> alert("Invalid OTP")</script>';
        }
       
    }
    ?>


<!DOCTYPE html>
<html>
<head>
	<title> Reset Password</title>
	<link rel="stylesheet" type="text/css" href="css/login_css.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form method="post">
				<img src="img/avatar.svg">
				<h2 class="title" style='width:900px;margin-left:-270px'>After Correct OTP you will receive Email</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
			
           		   <div class="div">
           		   		<h5>Enter OTP Received on email</h5>
           		   		<input type="text" class="input" id="usr" name="otp" required oninvalid="this.setCustomValidity('Please Enter OTP')" oninput="setCustomValidity('')">
           		   </div>
           		</div>
           		
            	<a href="signup.php">Need Account?</a>
            	<input type="submit"  class="btn" value="Submit OTP">
                
            </form>
        
        </div>

    </div>
    <script type="text/javascript" src="js/login.js"></script>
</body>
</html>
