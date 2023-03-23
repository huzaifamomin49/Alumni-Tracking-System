<?php
include('includes/header.php'); 
include('includes/navbar.php');
include('includes/config.php');
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Total Admin -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <h4>Total Admin:<?php
                   $sql12 = "SELECT count( * ) as total FROM reg_admin_final";
                   $result12 = mysqli_query($db, $sql12);

                       $data=mysqli_fetch_assoc($result12);

                    ?>
               <a class=" font-weight-bold text-gray-800 counter" ><?php echo $data['total']; ?></a> </h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>

    
    
    
      </div>
    </div>

    

    
    <!-- Pending Requests of Admin -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800 counter"><?php
              $sql12 = "SELECT count( * ) as total FROM request_clg_final";
              $result12 = mysqli_query($db, $sql12);

                  $data=mysqli_fetch_assoc($result12);
                  echo $data['total'];
               ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- Total Alumni -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Registered Alumni</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">

           <h4>Total Alumni:<?php
               $sql13 = "SELECT count( * ) as total FROM alm_register_final";
               $result13 = mysqli_query($db, $sql13);

                   $data2=mysqli_fetch_assoc($result13);

                ?>
           <a class=" font-weight-bold text-gray-800 counter" ><?php echo $data2['total']; ?></a> </h4>

          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-user fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>





  </div>
</div>
<div class="row">
<!-- Total Alumni Job -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-primary shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Alumni(job)</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">

           <h4>Total Alumni(job):<?php
               $sql13 = "SELECT count( * ) as total FROM alm_register_final where occupation='job'";
               $result13 = mysqli_query($db, $sql13);

                   $data2=mysqli_fetch_assoc($result13);

                ?>
           <a class=" font-weight-bold text-gray-800 counter" ><?php echo $data2['total']; ?></a> </h4>

          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-user-tie fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
</div>
</div>


<!-- Total Alumni Jobless -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-danger shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Alumni(jobless)</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">

           <h4>Total Alumni(jobless):<?php
               $sql13 = "SELECT count( * ) as total FROM alm_register_final where occupation='jobless'";
               $result13 = mysqli_query($db, $sql13);

                   $data2=mysqli_fetch_assoc($result13);

                ?>
           <a class=" font-weight-bold text-gray-800 counter" ><?php echo $data2['total']; ?></a> </h4>

          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-user fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
 </div>
 </div>
<!-- Total Alumni Job to jobless per -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-info shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Jobless percent</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">

           <h4>Total Percent:<?php
               $sql33 = "SELECT count( * ) as job FROM alm_register_final where occupation='job'";
               $result33 = mysqli_query($db, $sql33);
               $data33=mysqli_fetch_assoc($result33);
               $sql34 = "SELECT count( * ) as jobless FROM alm_register_final where occupation='jobless'";
               $result34 = mysqli_query($db, $sql34);
               $data34=mysqli_fetch_assoc($result34);     ?>
           <a class=" font-weight-bold text-gray-800 " ><?php
                    $total3=$data33['job']+$data34['jobless'];
               
                    if($total3==0){echo 'Insufficient data' ;}
                    else{
                        $per3=($data34['jobless']/$total3)*100;
                        echo $per3."%";} ?></a> </h4>

          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-percent fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
</div>
</div>
</div>
  <!-- Content Row -->

<script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="jq/jquery.counterup.min.js"></script>






  <?php
include('includes/scripts.php');
      include('includes/footer.php');

?>
