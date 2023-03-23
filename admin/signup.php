<?php
error_reporting(0);
include('includes/upload_file.php');
include('includes/conn.php');
	$email=$pass=$cpass=$cname=$images=$address=$phone="";
	$status=$visible=0;
	$emailerr=$passerr=$cpasserr=$cnameerr=$ciderr=$phoneerr=$addresserr="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
		if (empty($_POST["email"])) {
			$emailerr = "Email is required";
		} else {
			$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailerr = "Invalid email format";
				}
		}
		if(empty($_POST['pass'])){
			$passerr="Please provide password";
		}
		if (empty($_POST['cpass']) or ($_POST['pass']!=$_POST['cpass'])){
			$cpasserr="Please repeat password";
		}
		if(!empty($_POST['pass']) and !empty($_POST['cpass']) and ($_POST['pass']==$_POST['cpass'])){
		$password=$_POST['pass'];
		$uppercase = preg_match('@[A-Z]@', $password);
		$lowercase = preg_match('@[a-z]@', $password);
		$number    = preg_match('@[0-9]@', $password);
		$specialChars = preg_match('@[^\w]@', $password);

		if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
			$passerr= 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
		}else{
			$pass=$_POST['pass'];
            $cpass=$_POST['cpass'];
		}
		
		}
		
		if (empty($_POST["cname"])) {
			$cnameerr = "college name is required";
			} else {
				if(preg_match("/^([a-zA-Z' ]+)$/",$_POST['cname'])){
						$cname=$_POST["cname"];
				}else{
				$fnameerr= 'Invalid name given.';
			}
		}
		
		if(empty($_POST['phone'])){
			$phoneerr="please provide phone number";
			}else{
			
					$phone=$_POST['phone'];
			
		}
		
	
		if (empty($_POST["address"])) {
			$addresserr = "Please Provide Address";
		} else {
			$address = test_input($_POST["address"]);
		}
		
	if($emailerr=="" and $passerr=="" and $cpasserr=="" and $cnameerr=="" and $ciderr=="" and $phoneerr=="" and $addresserr=="")
	{ 
        if($pass==$cpass){
            $sql3="select * from reg_admin_final where clg_name='$cname'";
            $result1=mysqli_query($db, $sql3);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count= mysqli_num_rows($result1);
            if($count==1){
                echo '<script> alert("College Already register. Goto login page ")</script>';
            }
            else{
        $images=$_FILES["image"]["name"];;
        if(file_exists("../upload/".$_FILES["image"]["name"]))
        {
            $store=$_FILES["image"]["name"];
            echo '<div class="alert alert-danger">Image already exists</div>';
        }
        else{
                $query = "INSERT INTO request_clg_final (email,password,clg_name,phone_number,image,address,visible,status) VALUES ('$email','$pass','$cname','$phone','$images','$address','$visible',$status)";
                $query_run = mysqli_query($db, $query);
            
                if($query_run)
                {
                    move_uploaded_file($_FILES["image"]["tmp_name"],"../upload/" .$_FILES["image"]["name"]);
                    header('location:index.php');
                   
                }
                else
                {
                    
                    echo '<script>alert(<div class="alert alert-danger">Something went wrong please try again</div>)</script>';
                    
                }
            }
        }
        }
       else
            {
                
                echo '<div class="alert alert-danger">Password and Confirm password not match please try again</div>';
                
            }
        
	}
		
	
	
}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
	return $data;
	}
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register College</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="css/xyz.css">
<style>
.container {
padding:0;
	margin-left:93%;
  position: relative;
  width: 50%;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 85%;
  opacity: 0;
  transition: .5s ease;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
	font-style:italic;
	font-weight:bold;
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
</style>

</head>
<body >
<form id="msform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>College Details</li>
  </ul>
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">Enter login information</h3>
    <input type="text" name="email" placeholder="Email " ><?php echo'<span style="color:white">' .$emailerr. '</span>'?>
    <input type="password" name="pass" placeholder="Password" ><?php echo'<span style="color:white">' .$passerr. '</span>'?>
    <input type="password" name="cpass" placeholder="Confirm Password"> <?php echo'<span style="color:white">' .$cpasserr. '</span>'?>
	<div class="container" style='display:flex;'>
		<img src="img/info.png" alt="info" class="image"style="width:30%;height:10%;display:inline-block;">
		<div class="overlay">
			<div class="text"style='padding-left:450px;padding-top:20px;width:450px'>Password at least 8 char and should include at least one upper case,number,special character</div>
		</div>
	</div>
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">College Details</h2>
    <input type="text" name="cname" placeholder="College Name" /><?php echo'<span style="color:white">'.$cnameerr. '</span>'?>
    
    <input type="text" name="phone" placeholder="Phone" /><?php echo'<span style="color:white">'.$phoneerr. '</span>'?>
	<label for="myfile"><h2 class="fs-subtitle" style="margin-bottom:2px">Select Registration Certificate:</h2></label>
	<input type="file" name="image" /><?php if(!empty($certificateerr)){print_r($certificateerr);} ?>
    <textarea name="address" placeholder="Address"></textarea><?php echo'<span style="color:white">'.$addresserr. '</span>'?>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="action-button"  value="Submit" />
  </fieldset>
</form>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script><script  src="js/script.js"></script>

</body>

</html>
