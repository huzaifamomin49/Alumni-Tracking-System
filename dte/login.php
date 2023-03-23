<?php
include('includes/config.php');
    session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form
   
   $myusername = $_POST['username'];
   $mypassword = $_POST['password'];
    
   $sql = "SELECT username FROM dte WHERE username = '$myusername' and password = '$mypassword'";
   $result = mysqli_query($db,$sql);
   $row = $result -> fetch_array(MYSQLI_ASSOC);
    $count= mysqli_num_rows($result);
  if($count == 1)
   {
      
      header("location:home.php");
   }
    else{
        echo '<script> alert("Invalid username or password")</script>';
    }
   
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login form</title>

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
                            <h2><span>Direc<strong>torate</strong></span></h2>
                     </div>
                    <div class="login-content">
                        <div class="login-header ">
                            <h3><strong>Welcome,</strong></h3>
                        </div>
                        <div class="login-body">
                            <form role="form" action="" method="post" class="login-form">
                                <div class="form-group ">
                                    <div class="pos-r">                                        
                                        <input   id="form-username" type="text" name="username" placeholder="Username..." class="form-username form-control">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="pos-r">                                    
                                        <input id="form-password" type="password" name="password" placeholder="Password..." class="form-password form-control" >
                                        <i class="fa fa-lock"></i>                                        
                                    </div>
                                </div>

                                <div class="form-group">     
                                    <button type="submit" class="btn btn-primary form-control"><strong>Sign in</strong></button>  
                                </div>   
                                                                              
                            </form>
                        </div> <!-- end  login-body -->                     
                    </div><!-- end  login-content -->
                </div>  <!-- end  login-container -->      

            </div>
        </div><!-- end container -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>

</html>
