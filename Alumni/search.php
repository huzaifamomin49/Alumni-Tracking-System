<?php
    session_start();
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
                <li>
                    <a href="home.php">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                <li>
                    <a href="chat.php">
                        <i class="fas fa-envelope"></i>Message</a>
                <span class="inbox-num">1</span>
                </li>
                <li>
                    <a href="profile.php">
                        <i class="fas fa-user"></i>Profile</a>
                </li >
                <li class="active has-sub">
                    <a class="js-arrow" href="search.php">
                        <i class="fas fa-search"></i>Search</a>
                </li>
                <li>
                    <a href="event.php">
                        <i class="fas fa-calendar"></i>Event</a>
                </li >
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
                            <i class="zmdi zmdi-menu"></i>
                            <div class="search-dropdown js-dropdown" style="background-color:white">
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
                                        <li>
                                            <a href="profile.php">
                                                <i class="fas fa-user"></i>Profile</a>
                                        </li>
                                        <li class="active has-sub">
                                            <a class="js-arrow" href="search.php">
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

	<div class="header">
		<form action="" method="post">
			<h1 class="font-weight-bolder">Find Other Alumni</h1>
			<div class="form-box">
				<input name="search"type="text" class="search-field search text-center" placeholder="Type Here...">
				 <select class="search-field location font-weight-bolder" name="searchval">
				  <option name="fname" value="fname">Search By FirstName</option>
				  <option name="lname" value="lname">Search By LastName</option>
				  <option name="occup" value="occupation">Search By Occupation</option>
				  <option name="email" value="email">Search By EmailId</option>
				</select>
			
				<button name="submit" onclick=""class="search-btn font-weight-bolder" type="submit">Search</button>
				
			
			</div>
		</form>
		
	</div>
	
	<?php 
            function chat()
            {
                
                header('location:chat.php');
            }
            
        if(isset($_POST['submit'])){
				$value=$_POST['search'];
				$svalue=$_POST['searchval'];
				
				$conn=mysqli_connect("localhost","root","","myDB");
				if(!$conn){
					echo("not connected");}
					
					$sql="select * from alm_register_final where $svalue='$value'";
					
					$result=mysqli_query($conn,$sql);
					if (mysqli_num_rows($result)!=0){
						echo "<table class='table table-bordered table-dark' >";
						echo "<thead><th scope='col' class='text-center '>FIRST NAME</th>";
						
						echo "<th scope='col' class='text-center font-weight-bolder' >START CHAT</th></thead>";
						while($res=mysqli_fetch_array($result)){
							echo "<tr class='text-primary font-weight-bolder text-center '><td>".$res['fname']."</td>";
							echo "<td ><button class='btn btn-danger font-weight-bolder ' type='button' onclick=\"window.location.href='chat.php'\">Chat</button></td>";
						
							echo "</tr>";
					}}
					else{
						echo "<script>alert('No Data Found')</script>";
					}
			}	
			else{
				
				
			}
        

?>


            <!-- END PAGE CONTAINER-->
        </div>
    </div>

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
