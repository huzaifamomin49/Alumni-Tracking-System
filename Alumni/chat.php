<?php
    session_start();
    if(!isset($_SESSION['user_id']))
{
 header('location:login.php');
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
                    <a  href="home.php">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                <li class="active">
                    <a class="js-arrow" href="chat.php">
                        <i class="fas fa-envelope"></i>Message</a>
                <span class="inbox-num">1</span>
                </li>
                <li>
                    <a href="profile.php">
                        <i class="fas fa-user"></i>Profile</a>
                </li >
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
                                        <li class="active has-sub">
                                            <a class="js-arrow" href="chat.php">
                                                <i class="fas fa-envelope"></i>Message</a>
                                        
                                        </li>
                                        <li>
                                            <a href="profile.php">
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
                                    <li class="list-inline-item">Message</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section>
<div class="container-fluid" style="margin-top:20px">
<div class="card shadow mb-4">
  <div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Chat with Admin <br><br>
        
        <button type="button" onclick="window.location.href='admin_chat/chat.php'" class="btn btn-danger">
            Chat
        </button>
        </form>
    </h6>
  </div>
</div>
</div>
</section>
<section>
     <div class="container-fluid">
   <div class="table-responsive">
    <h4 align="center" style="margin-top:7px">Users</h4>
    <p align="right">Hi - <?php echo $_SESSION['username']; ?> - <a href="logout.php">Logout</a></p>
    <div id="user_details"></div>
    <div id="user_model_details"></div>
   </div>
  </div>
</section>



    <!-- END BREADCRUMB-->
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
$(document).ready(function(){

 fetch_user();

 setInterval(function(){
  update_last_activity();
  fetch_user();
  update_chat_history_data();
            
 }, 5000);

 function fetch_user()
 {
  $.ajax({
   url:"fetch_user.php",
   method:"POST",
   success:function(data){
    $('#user_details').html(data);
   }
  })
 }

 function update_last_activity()
 {
  $.ajax({
   url:"update_last_activity.php",
   success:function()
   {

   }
  })
 }

 function make_chat_dialog_box(to_user_id, to_user_name)
 {
                  var modal_content = '<div id="user_dialog_'+to_user_id+'" class="user_dialog" title="You have chat with '+to_user_name+'">';
                  modal_content +='<div class="modal-header">';
                  modal_content +='<h5 class="modal-title"> You have chat with '+to_user_name+'</h5></div>';
  modal_content += '<div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px; color:black;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
        
  modal_content += fetch_user_chat_history(to_user_id);
  modal_content += '</div>';
  modal_content += '<div class="form-group">';
  modal_content += '<textarea name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="form-control chat_message"></textarea>';
  modal_content += '</div><div class="form-group" align="right">';
  modal_content+= '<button type="button" name="send_chat" id="'+to_user_id+'" class="btn btn-info send_chat">Send</button></div></div>';
  $('#user_model_details').html(modal_content);
 }

 $(document).on('click', '.start_chat', function(){
  var to_user_id = $(this).data('touserid');
  var to_user_name = $(this).data('tousername');
  make_chat_dialog_box(to_user_id, to_user_name);
  $("#user_dialog_"+to_user_id).dialog({
   autoOpen:false,
   width:400
  });
  $('#user_dialog_'+to_user_id).dialog('open');
 });

 $(document).on('click', '.send_chat', function(){
  var to_user_id = $(this).attr('id');
  var chat_message = $('#chat_message_'+to_user_id).val();
  $.ajax({
   url:"insert_chat.php",
   method:"POST",
   data:{to_user_id:to_user_id, chat_message:chat_message},
   success:function(data)
   {
    $('#chat_message_'+to_user_id).val('');
    $('#chat_history_'+to_user_id).html(data);
   }
  })
 });

 function fetch_user_chat_history(to_user_id)
 {
  $.ajax({
   url:"fetch_user_chat_history.php",
   method:"POST",
   data:{to_user_id:to_user_id},
   success:function(data){
    $('#chat_history_'+to_user_id).html(data);
   }
  })
 }

 function update_chat_history_data()
 {
  $('.chat_history').each(function(){
   var to_user_id = $(this).data('touserid');
   fetch_user_chat_history(to_user_id);
  });
 }

 $(document).on('click', '.ui-button-icon', function(){
  $('.user_dialog').dialog('destroy').remove();
 });

 $(document).on('focus', '.chat_message', function(){
  var is_type = 'yes';
  $.ajax({
   url:"update_is_type_status.php",
   method:"POST",
   data:{is_type:is_type},
   success:function()
   {

   }
  })
 });

 $(document).on('blur', '.chat_message', function(){
  var is_type = 'no';
  $.ajax({
   url:"update_is_type_status.php",
   method:"POST",
   data:{is_type:is_type},
   success:function()
   {
    
   }
  })
 });
 
});
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
