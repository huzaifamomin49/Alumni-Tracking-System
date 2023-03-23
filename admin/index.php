<?php
    include('includes/conn.php');
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") {
       // username and password sent from form
       
       $myusername = mysqli_real_escape_string($db,$_POST['username']);
       $mypassword = mysqli_real_escape_string($db,$_POST['password']);
        
       $sql = "SELECT email FROM reg_admin_final WHERE email = '$myusername' and password = '$mypassword'";
       $result = mysqli_query($db,$sql);
       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count= mysqli_num_rows($result);
      if($count == 1)
       {
          $sql10 = "SELECT * FROM reg_admin_final WHERE email = '$myusername'";
          $result10 = mysqli_query($db,$sql10);
           $row10 = mysqli_fetch_array($result10,MYSQLI_ASSOC);
           
           $_SESSION["user_id"]=$row10['id'];
           $_SESSION["clg"]=$row10['clg_name'];
           $id=$row10['id'];
           $sql6="insert into login_details1 (user_id) values('$id')";
           mysqli_query($db,$sql6);
           $_SESSION['login_details_id']= $row10['id'];
          header("location:home.php");
       }
        else{
        $sql1 = "SELECT email FROM reg_admin_final WHERE email = '$myusername'";
         $result1 = mysqli_query($db,$sql1);
         $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
          $count1= mysqli_num_rows($result1);
        if($count == 1)
         {
             echo '<script> alert("Invalid username or password")</script>';
         }
        else{
            $sql2 = "SELECT email FROM request_clg_final WHERE email = '$myusername'";
             $result2 = mysqli_query($db,$sql2);
             $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
              $count2= mysqli_num_rows($result2);
            if($count2 == 1)
             {
            header("location:404page.html");
             }
            else{
                echo '<script> alert("User not found ,Register First.")</script>';
            }
        }
       
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
                            <h2><span>AD<strong>MIN</strong></span></h2>
                     </div>
                    <div class="login-content">
                        <div class="login-header ">
                            <h2><strong>Welcome</strong></h2>
                            <h5>Let's start the journey with us by enrolling in our program</h5>
                        </div>
                        <div class="login-body">
                            <form role="form" action="" method="post" class="login-form">
                                <div class="form-group ">
                                    <div class="pos-r">                                        
                                        <input   id="form-username" type="text" name="username" placeholder="Username..." class="form-username form-control">
                                        <i class="fa fa-user"></i>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="pos-r">                                    
                                        <input id="form-password" type="password" name="password" placeholder="Password..." class="form-password form-control" >
                                        <i class="fa fa-lock"></i>
                                        <span></span>                                        
                                    </div>
                                </div>
                                <div class="form-group text-right">     
                                    <a href="forget.php" class="bold"> Forgot password?</a>
                                </div>   

                                <div class="form-group">     
                                    <button type="submit" class="btn btn-warning form-control"><strong>Sign in</strong></button>  
                                </div>   
                                                                              
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
