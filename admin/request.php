<?php
     $db = mysqli_connect('localhost','root','','myDB');
    session_start();
    if(!isset($_SESSION['user_id']))
    {
     header('location:index.php');
    }
    $clg=$_SESSION["clg"];
    if(isset($_POST['acceptbtn']))
    {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $phone = $_POST['phone'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $occupation = $_POST['occupation'];
        $description = $_POST['description'];
        $twitter = $_POST['twitter'];
        $facebook = $_POST['facebook'];
        $linkedin = $_POST['linkedin'];
        $poutyear = $_POST['poutyear'];
        $address = $_POST['address'];
        $images = $_POST['certificate'];
        $visible=0;
        $status=0;
        $sql="select * from alm_register_final where email='$email'";
        $result=mysqli_query($db,$sql);
           
            $count= mysqli_num_rows($result);
          if($count == 1)
           {
               echo '<div class="alert alert-danger">Alumni already in portal</div>';
               $sql1 = "DELETE FROM alm_request_final where email='$email'";
                             $query_run1 = mysqli_query($db, $sql1);
           }
          else{
              $query = "insert into alm_register_final(email,password,gender,occupation,description,twitter,facebook,linkedin,fname,lname,phone,poutyear,certificate,address,status,visible,clg_name) values('$email','$pass','$gender','$occupation','$description','$twitter','$facebook','$linkedin','$fname','$lname','$phone','$poutyear','$images','$address',$status,$visible,'$clg')";
            $query_run = mysqli_query($db, $query);
        
            if($query_run)
            {
            
                echo '<div class="alert alert-info">Alumni added Successfully</div>';
               $sql1 = "DELETE FROM alm_request_final where email='$email'";
               $query_run1 = mysqli_query($db, $sql1);
            }
            else
            {
                
                echo '<div class="alert alert-danger">Something is wrong.</div>';
                
            }
          }
        
    }
    if(isset($_POST['rejectbtn']))
    {
        $email = $_POST['email'];
        
        $visible=0;
        $sql2 = "DELETE FROM alm_request_final where email='$email'";
        $query_run2 = mysqli_query($db, $sql2);
        echo '<div class="alert alert-danger">Request reject Successfull .</div>';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>
    Admin Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  
  <link href="css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link href="demo/demo.css" rel="stylesheet" />
<link rel="stylesheet" href="css/request_css.css">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="img/sidebar-1.jpg">
      
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="home.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">
              <i class="fas fa-user-graduate"></i>
              <p>Present Alumni</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="request.php">
              <i class="fa fa-graduation-cap"></i>
              <p>Alumni Request</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="announcement.php">
              <i class="material-icons">notifications</i>
              <p>Announcements</p>
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="alumni_chat/chat.php">
            <i class="fas fa-envelope"></i>
            <p>Messages</p>
          </a>
        </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <a class="navbar-brand" href="javascript:;">Alumni Request</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
          <form class="navbar-form">
            <div class="input-group no-border">
              <input type="text" value="" class="form-control" placeholder="Search...">
              <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i>
                <div class="ripple-container"></div>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">person</i>
                <p class="d-lg-none d-md-block">
                  Account
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">Log out</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->





<div class="container c1" style="margin-top:100px">
<?php
  $sql = "SELECT * FROM alm_request_final where clg_name='$clg'";
  $result = mysqli_query($db, $sql);
   ?>
<?php foreach ($result as $row): ?>
    <div class="card">
        <div class="content">
            <h3><?php echo $row['fname']; ?></h3>
            <p><?php echo $row['fname']; ?> request to accept their registration to the portal.</p>
            <a href="#" data-toggle="modal" data-target="#info1-<?php echo $row['id']; ?>">Read More</a>
        </div>
    </div>





<div class="modal fade" id="info1-<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Alumni Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="request.php" method="POST">

        <div class="modal-body">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control-plaintext" value="<?php echo $row['email'];?>" required readonly>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control-plaintext" value="<?php echo $row['password'];?>" required readonly>
            </div>
            <div class="form-group">
                <label> First Name </label>
                <input type="text" name="fname" class="form-control-plaintext" value="<?php echo $row['fname']; ?>" required readonly>
            </div>
            <div class="form-group">
                <label> Last Name </label>
                <input type="text" name="lname" class="form-control-plaintext" value="<?php echo $row['lname']; ?>" required readonly>
            </div>
            <div class="form-group">
                <label> Gender </label>
                <input type="text" name="gender" class="form-control-plaintext" value="<?php echo $row['gender']; ?>" required readonly>
            </div>
            <div class="form-group">
                <label> Occupation </label>
                <input type="text" name="occupation" class="form-control-plaintext" value="<?php echo $row['occupation']; ?>" required readonly>
            </div>
            <div class="form-group">
                <label> Description </label>
                <input type="text" name="description" class="form-control-plaintext" value="<?php echo $row['description']; ?>" required readonly>
            </div>
            <div class="form-group">
                <label> Passout Year </label>
                <input type="text" name="poutyear" class="form-control-plaintext" value="<?php echo $row['poutyear']; ?>" required readonly>
            </div>
            <div class="form-group">
                <label> Phone Number </label>
                <input type="number" name="phone" class="form-control-plaintext" value="<?php echo $row['phone']; ?>" required readonly>
            </div>
            <div class="form-group">
                <label> Address </label>
                <input type="text" name="address" class="form-control-plaintext" value="<?php echo $row['address']; ?>" required readonly>
            </div>
            <div class="form-group">
                <label> Twitter </label>
                <input type="text" name="twitter" class="form-control-plaintext" value="<?php echo $row['twitter']; ?>" required readonly>
            </div>
            <div class="form-group">
                <label> Facebook </label>
                <input type="text" name="facebook" class="form-control-plaintext" value="<?php echo $row['facebook']; ?>" required readonly>
            </div>
            <div class="form-group">
                <label> Linkedin </label>
                <input type="text" name="linkedin" class="form-control-plaintext" value="<?php echo $row['linkedin']; ?>" required readonly>
            </div>
            <div class="form-group">
            <label> Image : </label>
                <input type="hidden" name="certificate" class="form-control-plaintext" value="<?php echo $row['certificate']; ?>" >
                <div data-toggle="modal" data-target="#trailer-<?php echo $row['id']; ?>">
                <img src="../upload/<?php echo $row['certificate']; ?>" height="100px" width="100px">
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="submit" name="rejectbtn" class="btn btn-danger">Reject</button>
            <button type="submit" name="acceptbtn" class="btn btn-primary">Accept</button>
        </div>
      </form>

    </div>
  </div>
</div>



<div class="modal" id="trailer-<?php echo $row['id']; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <a href="#" class="hanging-close" data-dismiss="modal" aria-hidden="true">
                <img src="https://lh5.ggpht.com/v4-628SilF0HtHuHdu5EzxD7WRqOrrTIDi_MhEG6_qkNtUK5Wg7KPkofp_VJoF7RS2LhxwEFCO1ICHZlc-o_=s0#w=24&h=24"/>
              </a>
              
                <img src="../upload/<?php echo $row['certificate']; ?>" height="600px" width="900px">
              
            </div>
          </div>
        </div>
<?php endforeach; ?>
</div>







<div class="fixed-plugin">
  <div class="dropdown show-dropdown">
    <a href="#" data-toggle="dropdown">
      <i class="fa fa-cog fa-2x"> </i>
    </a>
    <ul class="dropdown-menu">
      <li class="header-title"> Sidebar Filters</li>
      <li class="adjustments-line">
        <a href="javascript:void(0)" class="switch-trigger active-color">
          <div class="badge-colors ml-auto mr-auto">
            <span class="badge filter badge-purple" data-color="purple"></span>
            <span class="badge filter badge-azure" data-color="azure"></span>
            <span class="badge filter badge-green" data-color="green"></span>
            <span class="badge filter badge-warning" data-color="orange"></span>
            <span class="badge filter badge-danger" data-color="danger"></span>
            <span class="badge filter badge-rose active" data-color="rose"></span>
          </div>
          <div class="clearfix"></div>
        </a>
      </li>
      <li class="header-title">Images</li>
      <li class="active">
        <a class="img-holder switch-trigger" href="javascript:void(0)">
          <img src="img/sidebar-1.jpg" alt="">
        </a>
      </li>
      <li>
        <a class="img-holder switch-trigger" href="javascript:void(0)">
          <img src="img/sidebar-2.jpg" alt="">
        </a>
      </li>
      <li>
        <a class="img-holder switch-trigger" href="javascript:void(0)">
          <img src="img/sidebar-3.jpg" alt="">
        </a>
      </li>
      <li>
        <a class="img-holder switch-trigger" href="javascript:void(0)">
          <img src="img/sidebar-4.jpg" alt="">
        </a>
      </li>
    </ul>
  </div>
</div>
</div>
</div>
 <!--   Core JS Files   -->
  <script src="js/core/jquery.min.js"></script>
  <script src="js/core/popper.min.js"></script>
  <script src="js/core/bootstrap-material-design.min.js"></script>
  <script src="js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src=".js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--    Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="js/plugins/jquery.dataTables.min.js"></script>
  <!--    Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>
