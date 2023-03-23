<?php
    include('conn.php');
    include('database_connection.php');
    session_start();
    $connect=new PDO("mysql:host-localhost;dbname:myDB","root","");
    if($_SERVER["REQUEST_METHOD"] == "POST") {
       $myusername = mysqli_real_escape_string($db,$_POST['username']);
       $mypassword = mysqli_real_escape_string($db,$_POST['password']);
        
       $sql = "SELECT * FROM alm_register_final WHERE email = '$myusername' and password = '$mypassword'";
       $result = mysqli_query($db,$sql);
       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count= mysqli_num_rows($result);
      if($count == 1)
       {
           $_SESSION["fname"]=$row['fname'];
           $_SESSION["user_id"]=$row['id'];
           $_SESSION["username"]=$row['fname'];
           $_SESSION["clg"]=$row['clg_name'];
           $id=$row['id'];
           
           $sql5="create table if not exists login_details(login_details_id int(11) NOT NULL, user_id int(11) NOT NULL,last_activity timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, is_type enum('no','yes') NOT NULL)";
           mysqli_query($db,$sql5);
           $sql6="insert into login_details (user_id) values('$id')";
           mysqli_query($db,$sql6);
           $_SESSION['login_details_id']= $row['id'];
           $sql7="insert into login_details1 (user_id) values('$id')";
           mysqli_query($db,$sql7);
           $_SESSION['login_details_id1']= $row['id'];
          header("location:home.php");
       }
        else{
            $sql1 = "SELECT email FROM alm_register_final WHERE fname = '$myusername'";
         $result1 = mysqli_query($db,$sql1);
         $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
          $count1= mysqli_num_rows($result1);
        if($count == 1)
         {
             echo '<script> alert("Invalid username or password")</script>';
         }
        else{
            $sql2 = "SELECT email FROM alm_request_final WHERE fname = '$myusername'";
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
<html>
<head>
	<title>Login Form</title>
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
			<form action="login.php" method="post">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" id="usr" name="username" required oninvalid="this.setCustomValidity('Please Enter username')" oninput="setCustomValidity('')">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" id="psw" name="password" required oninvalid="this.setCustomValidity('Please Enter password')" oninput="setCustomValidity('')">
            	   </div>
            	</div>
            	<a href="forget.php">Forgot Password?</a>
            	<input type="submit"  class="btn" value="Login">
                <button class="btn" onclick="window.location.href='signup.php'"> SignUp </button>
            </form>
        
        </div>

    </div>
    <script type="text/javascript" src="js/login.js"></script>


</body>
</html>
