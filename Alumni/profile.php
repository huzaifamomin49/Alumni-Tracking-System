<?php
    include('conn.php');
    session_start();
    $sql="create table if not exists profiles(comapny varchar(50), username varchar(15), email varchar(30), fname varchar(15), lname varchar(15), address varchar(150), city varchar(25), country varchar(15), postal_code varchar(15), about varchar(90));";
    $result=mysqli_query($db,$sql);
    $display1=$display2=$display3=$display4=$display5=$display6=$display7=$display8=$display9=$display10="";
    if(!$result){echo "<script>alert('error');</script>";}
    if(isset($_POST['submitbtn'])){
        $company1=$_POST['company'];
        $username1=$_POST['username'];
        $email1=$_POST['email'];
        $fname1=$_POST['fname'];
        $lname1=$_POST['lname'];
        $city1=$_POST['city'];
        $country1=$_POST['country'];
        $postalcode1=$_POST['postal_code'];
        $address1=$_POST['address'];
        $about1=$_POST['aboutme'];
        $display1=$company;
        $display2=$username1;
        $dipslay3=$email1;
        $display4=$fname1;
        $display5=$lname1;
        $display6=$city1;
        $display7=$country1;
        $display8=$postalcode1;
        $display9=$address1;
        $display10=$about1;
        $sql1="select * from profiles where email='$email1'";
        $result1=mysqli_query($db,$sql1);
        $row = mysqli_fetch_array($result1,MYSQLI_ASSOC);
        $count= mysqli_num_rows($result1);
        if($count==0){
            $sql2="INSERT INTO profiles VALUES ('$company1','$username1','$email1','$fname1','$lname1','$address1','$city1','$country1','$postalcode1','$about1')";
            $result2=mysqli_query($db,$sql2);
            if(!$result2){
                echo "<script>alert('your error');</script>";
            }
            
        }
        else{
            echo "<script>alert('you already complited profile');</script>";
        }
    }
    ?>

<html>
<head>

	<link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="search.css">
	




<!-- Required meta tags-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="au theme template">
<meta name="author" content="Hau Nguyen">
<meta name="keywords" content="au theme template">

<!-- Title Page-->
<title>Alumni Dashboard</title>
<!-- Fontfaces CSS-->
<link href="css/font-face.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

<!-- Bootstrap CSS-->
<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

<!-- Vendor CSS-->
<link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
<link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
<link href="vendor/wow/animate.css" rel="stylesheet" media="all">
<link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
<link href="vendor/slick/slick.css" rel="stylesheet" media="all">
<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
<link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="css/theme.css" rel="stylesheet" media="all">
<link href="css/material-dashboard.css?v=2.1.2" rel="stylesheet" />

</head>
<body class="animsition">
<div class="page-wrapper">
<!-- MENU SIDEBAR-->
<aside class="menu-sidebar2">
    <div class="logo">
       <p style="color:white; margin-right:10px;"> Welcome,</p>
    <p style="font-size:30px; color:white;"><?php echo $_SESSION["fname"] ; ?></p>
      
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <div class="account2">
            <div class="image img-cir img-120">
                <img src="img/avatar.svg" alt="Fixed" />
            </div>
            <h4 class="name"><?php echo $_SESSION["fname"] ; ?></h4>
            <a href="logout.php">Sign out</a>
        </div>

<!-- TASK PROGRESS-->
 <div class="task-progress">
     <h3 class="title-3">task progress</h3>
     <div class="au-skill-container">
         <div class="au-progress">
             <span class="au-progress__title">Profile</span>
             <div class="au-progress__bar">
                 <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="90">
                     <span class="au-progress__value js-value"></span>
                 </div>
             </div>
         </div>
         
     </div>
 </div>
<!-- End Task Process-->
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li >
                    <a href="home.php">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                <li>
                    <a href="chat.php">
                        <i class="fas fa-envelope"></i>Message</a>
                <span class="inbox-num">1</span>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="profile.php">
                        <i class="fas fa-user"></i>Profile</a>
                </li >
                <li class="">
                    <a href="search.php">
                        <i class="fas fa-search"></i>Search</a>
                </li>
                <li >
                    <a href="event.php">
                        <i class="fas fa-calendar"></i>Event</a>
                </li>
            </ul>
        </nav>
        <div class="task-progress">
        
        <div class="au-skill-container">
            <div class="au-progress">
               <div class="au-progress__bar">
               </div>
                </div>
            </div>
    </div>
</aside>
<!-- END MENU SIDEBAR-->



<!-- PAGE CONTAINER-->
<div class="page-container2">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop2">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap2">
                    <div class="logo d-block d-lg-none">
                        
                        <div class="header-button-item js-item-menu">
                            <li style="font-size:30px; color:white; margin-left:5px" ><?php echo $_SESSION["fname"] ; ?></li>
                        <div class="search-dropdown js-dropdown">
                        <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="logout.php">
                                <i class="fas fa-sign-out-alt"></i> Sign out
                            </a>
                        </li>
                        </ul>
                        </nav>
                        </div>
                        </div>
                    </div>
                    <div class="header-button2">
                        <div class="header-button-item js-item-menu">
                            <i class="zmdi zmdi-search"></i>
                            <div class="search-dropdown js-dropdown">
                                <form action="">
                                    <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                    <span class="search-dropdown__icon">
                                        <i class="zmdi zmdi-search"></i>
                                    </span>
                                </form>
                            </div>
                        </div>
                       
                        <div class="header-button-item mr-0 js-item-menu">
                            <i class="zmdi zmdi-menu" style="margin-right:60px"></i>
                            <div class="search-dropdown js-dropdown" style="margin-right:60px; background-color:white">
                                <nav class="navbar-sidebar2">
                                    <ul class="list-unstyled navbar__list">
                                        <li>
                                            <a href="home.php">
                                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="chat.php">
                                                <i class="fas fa-envelope"></i>Message</a>
                                        
                                        </li>
                                        <li class="active has-sub">
                                            <a class="js-arrow" href="profile.php">
                                                <i class="fas fa-user"></i>Profile</a>
                                        </li>
                                        <li>
                                            <a href="search.php">
                                                <i class="fas fa-search"></i>Search</a>
                                        </li>
                                        <li>
                                            <a href="event.php">
                                                <i class="fas fa-calendar"></i>Event</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            
                        </div>
                        <div class="setting-menu js-right-sidebar d-none d-lg-block">
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-globe"></i>Language</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-pin"></i>Location</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-email"></i>Email</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- END HEADER DESKTOP-->


    <!-- BREADCRUMB-->
    <section class="au-breadcrumb m-t-75">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb-content">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">You are here:</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Profile</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END BREADCRUMB-->
<section>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form action="profile.php" method="post">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Company</label>
                          <input type="text" name="company" class="form-control"  id="user_id">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" name="username" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" name="email" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input type="text" name="fname" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" name="lname" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" name="address" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" name="city" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="text" name="country" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Postal Code</label>
                          <input type="text" name="postal_code" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Me</label>
                          
                            <textarea class="form-control" name="aboutme" rows="5"></textarea>
                          
                        </div>
                      </div>
                    </div>
                    <button type="button" name="showbtn" class="btn btn-primary pull-left" data-toggle="modal" data-target="#showprofile" style="background:purple; font-weight:bold;" onclick="showInput();">Show Profile</button>
                    <button type="submit" name="submitbtn" class="btn btn-primary pull-right" style="background:purple; font-weight:bold;">Update Profile</button>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="modal fade" id="showprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
      <form>

        <div class="modal-body">
            <div class="form-group">
                <label>Email</label>
                <input type="text"  class="form-control" value="<?php  echo $display3;  ?>">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text"  class="form-control" value="<?php  echo $display2;  ?>" >
            </div>
            <div class="form-group">
                <label>First name</label>
                <input type="text"  class="form-control" value="<?php  echo $display4;  ?>" >
            </div>
            <div class="form-group">
                <label> Last Name </label>
                <input type="text" class="form-control" value="<?php  echo $display5;  ?>" >
            </div>
            <div class="form-group">
                <label> Company </label>
                <input type="text"  class="form-control" value="<?php  echo $display1;  ?>" >
            </div>
            <div class="form-group">
                <label> City </label>
                <input type="text"  class="form-control" value="<?php  echo $display6;  ?>">
            </div>
            <div class="form-group">
                <label> Country </label>
                <input type="text"  class="form-control" value="<?php  echo $display7;  ?>">
            </div>
            <div class="form-group">
                <label> Postal Code </label>
                <input type="text"  class="form-control" value="<?php  echo $display8; ?>" >
            </div>
            <div class="form-group">
                <label> Address </label>
                <input type="text"  class="form-control" value="<?php  echo $display9;  ?>" >
            </div>
            <div class="form-group">
                <label> About me </label>
                <input type="text"  class="form-control" value="<?php  echo $display10;  ?>" >
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" style="background:red; color:white;" data-dismiss="modal">Close</button>
        </div>
      </form>

    </div>
  </div>
</div>










<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright team hashers</p>
                </div>
            </div>
        </div>
    </div>
</section>
	
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
<script>
function showInput() {
        document.getElementById('display1').innerHTML =
                    document.getElementById("user_id").value;
    }
</script>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>


</body>
</html>
