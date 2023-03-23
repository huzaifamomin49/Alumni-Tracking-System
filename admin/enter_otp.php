<?php
    session_start();
	include('conn.php');
	include('otp.php');
	$myemail=$_SESSION['myemail'];
    if($_SERVER["REQUEST_METHOD"] == "POST") {
		$con=mysqli_connect("localhost","root","","myDB");
       $otp= mysqli_real_escape_string($con,$_POST['otp']);
	   
        
       $sql = "SELECT * FROM otp WHERE email = '$myemail'";
       
	   $result = mysqli_query($con,$sql);
	   
       $count= mysqli_num_rows($result);
	   
	   $data = mysqli_fetch_assoc($result);
      
	  if($count > 0 and $otp == $data['otp'])
       {	
		  sendPass($myemail);
          header("location:index.php");
       }
        else{
           echo '<script> alert("Invalid OTP")</script>';
        }
       
    }
    ?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reset Password</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/custom.css">
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">

    </head>

    <body>
        <div class="container ">
            <div class="row">            
                <div class="login-container col-lg-4 col-md-6 col-sm-8 col-xs-12">
                     <div class="login-title text-center">
                            <h2><span>AD<strong>MIN</strong></span></h2>
                     </div>
                    <div class="login-content">
                        <div class="login-header ">
                            <h2><strong>Welcome</strong></h2>
                            <h5>Don't worry... We are here to help</h5>
                        </div>
                        <div class="login-body">
                            <form role="form" method="post" class="login-form">
                                <div class="form-group ">
                                    <div class="pos-r">                                        
                                        <input   id="form-username" type="text" name="otp" placeholder="Enter received OTP" class="form-username form-control">
                                        <i class="fa fa-user"></i>
                                        <span></span>
                                    </div>
                                </div>

                                <div class="form-group">     
                                    <button type="submit" class="btn btn-warning form-control"><strong>Submit OTP</strong></button>  
                                </div>   
								<h5>After correct OTP you will receive Email</h5>
                                                                              
                            </form>
                        </div> <!-- end  login-body -->                     
                    </div><!-- end  login-content -->  
                    <div class="login-footer text-center template">
                        <h5>Don't have an account?<a href="signup.php" class="bold"><h3> Sign up </h3></a>     </h5>
                    </div>
                </div>  <!-- end  login-container -->      

            </div>
        </div><!-- end container -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>

</html>


