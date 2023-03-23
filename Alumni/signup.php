<?php
error_reporting(0);
include('upload_file.php');
include('conn.php');
    $email=$pass=$cpass=$gender=$occupation=$description=$twitter=$facebook=$linkedin=$fname=$lname=$phone=$valid_number=$poutyear=$address=$website=$clg_name1="";
    $emailerr=$passerr=$cpasserr=$gendererr=$occupationerr=$descriptionerr=$twittererr=$facebookerr=$linkedinerr=$fnameerr=$lnameerr=$phoneerr=$poutyearerr=$addresserr=$websiteErr=$clgerr='';
    $status=$visible=0;
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
        
        if($_POST['gender']=='gender'){
            $gendererr ="Please select Gender";
        }else{
            $gender=$_POST['gender'];
        }
        if($_POST['occupation']=='occupation'){
            $occupationerr ="Please select Occupation";
        }else{
            $occupation=$_POST['occupation'];
        }
        if($_POST['clg']=='clg'){
            $clgerr ="Please select College";
        }else{
            $clg_name1=$_POST['clg'];
        }
        if(empty($_POST['description'])){
            $descriptionerr ="Please Provide Description";
        }else{
            $description=test_input($_POST["description"]);
        }
        
        $twitter = $_POST['twitter'];
        $facebook = $_POST['facebook'];
        $linkedin = $_POST['linkedin'];

        
        if (empty($_POST["fname"])) {
            $fnameerr = "fname is required";
            } else {
                if(preg_match("/^([a-zA-Z' ]+)$/",$_POST['fname'])){
                        $fname=$_POST["fname"];
                }else{
                $fnameerr= 'Invalid name given.';
            }
        }
        if (empty($_POST["lname"])) {
            $lnameerr = "lname is required";
            } else {
                if(preg_match("/^([a-zA-Z' ]+)$/",$_POST['lname'])){
                $lname=$_POST["lname"];
                }else{
                $lnameerr= 'Invalid name given.';
            }
        }
        if(empty($_POST['phone'])){
            $phoneerr="please provide phone number";
            }else{
            $valid_number = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
            $valid_number = str_replace("-", "", $valid_number);
            if (strlen($valid_number) < 10 || strlen($valid_number) > 14) {
                $phoneerr= "Invalid Number ";
                } else {
                    $phone=$_POST['phone'];
            }
        }
        
        if (empty($_POST["poutyear"]) or (strlen($_POST['poutyear'])<4) or (strlen($_POST['poutyear'])>4)) {
            $poutyearerr = "pass out year is required";
            } else {
                $poutyear=$_POST['poutyear'];
        }
        
        if (empty($_POST["address"])) {
            $addresserr = "Please Provide Address";
        } else {
            $address = test_input($_POST["address"]);
        }
        
        
        if($emailerr=="" and $passerr=="" and $cpasserr=="" and $gender!='gender' and $occupation!='occupation' and $descriptionerr=="" and $fnameerr==""and $lnameerr=="" and $phoneerr=="" and $poutyearerr=="" and $addresserr=="" and $twittererr!='Invalid URL' and $facebookerr!='Invalid URL' and $linkedinerr!='Invalid URL')
    {
        echo "bc";
        if($pass==$cpass){
            $sql3="select * from alm_request_final where email='$email'";
            $result1=mysqli_query($db, $sql3);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count= mysqli_num_rows($result1);
            if($count==1){
                echo '<script> alert("Alumni Already register. Goto login page ")</script>';
            }
            else{
        $images=$_FILES["image"]["name"];;
        if(file_exists("../upload/".$_FILES["image"]["name"]))
        {
            $store=$_FILES["image"]["name"];
            echo '<div class="alert alert-danger">Image already exists</div>';
        }
        else{
                $query = "insert into alm_request_final(email,password,gender,occupation,description,twitter,facebook,linkedin,fname,lname,phone,poutyear,certificate,address,status,visible,clg_name) values('$email','$pass','$gender','$occupation','$description','$twitter','$facebook','$linkedin','$fname','$lname','$phone','$poutyear','$images','$address','$status','$visible','$clg_name1')";
                $query_run = mysqli_query($db, $query);
            
                if($query_run)
                {
                    move_uploaded_file($_FILES["image"]["tmp_name"],"../upload/" .$_FILES["image"]["name"]);
                    header('location:login.php');
                   
                }
                else
                {
                    
                    echo 'Something went wrong please try again';
                    
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
        
    function chkwebsite($website) {
        if($website==''){return '';}
        else{
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            return "Invalid URL";
            }
            else{
                return '';
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
  <title>Register Yourself</title>
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
<form id="msform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"enctype="multipart/form-data">
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
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
<div style='margin-top:10px'>
<a href='login.php'style='color:white;'>Already have account ?</a>
</div>
  </fieldset>
  
  <fieldset>

  <h2 class="fs-title">Social Profiles</h2>
    <div class="fs-title hover ">
        <select autofocus name="gender"style="height:50px;width:100%;">
            <option value="gender">Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><?php $gendererr ?>
    </div>
<?php
$sql5="select clg_name from reg_admin_final";
$result5=mysqli_query($db,$sql5);
?>

    <div class="fs-title hover ">
        <select autofocus name="clg" style="height:50px;width:100%;">
        <option value="clg">College name</option>
            <?php  foreach ($result5 as $row5):   ?>
            <option value="<?php  echo $row5['clg_name'] ; ?>"><?php  echo $row5['clg_name'] ; ?></option><?php echo'<span style="color:white">'.$clgrerr. '</span>'?>
<?php  endforeach; ?>
        </select>
    
    </div>
        
    <div class="fs-title hover ">
        <select autofocus name="occupation"style="height:50px;width:100%;margin-bottom:1px">
            <option value="occupation">Occupation</option>
            <option value="student">Student</option>
            <option value="business">Business</option>
            <option value="job">Job</option>
            <option value="jobless">Jobless</option>
            <option value="startup">StartUp</option>
        </select><?php echo $occupationerr ?>
            
    </div>
<input type="text" name="description" placeholder="Describe what you do..." /><?php echo'<span style="color:white">'.$descriptionerr. '</span>'?>
    <h2 class="fs-subtitle"><i>Paste your social accounts link here</i></h2>
    <input type="text" name="twitter" placeholder="Twitter" /><?php echo'<span style="color:white">'.$twittererr. '</span>'?>
    <input type="text" name="facebook" placeholder="Facebook" /><?php echo'<span style="color:white">'.$facebookerr. '</span>'?>
    <input type="text" name="linkedin" placeholder="Linked In" /><?php echo'<span style="color:white">'.$linkedinerr. '</span>'?>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
 
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <input type="text" name="fname" placeholder="First Name" /><?php echo'<span style="color:white">'.$fnameerr. '</span>'?>
    <input type="text" name="lname" placeholder="Last Name" /><?php echo'<span style="color:white">'.$lnameerr. '</span>'?>
    <input type="text" name="phone" placeholder="Phone" /><?php echo'<span style="color:white">'.$phoneerr. '</span>'?>
    <input type="number" maxlength="4" name="poutyear" placeholder="Passout Year e.g.2010" /><?php echo'<span style="color:white">'.$poutyearerr. '</span>'?>
    <label for="myfile"><h2 class="fs-subtitle" style="margin-bottom:8px">Select degree certificate:</h2></label>
    <input type="file" name="image" /><?php if(!empty($certificateerr)){print_r($certificateerr);} ?>
    <textarea name="address" placeholder="Address"></textarea><?php echo'<span style="color:white">'.$addresserr. '</span>'?>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="action-button"  value="Submit" />
  </fieldset>
</form>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script><script  src="js/signup.js"></script>

</body>

</html>

