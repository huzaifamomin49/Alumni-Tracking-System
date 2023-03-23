<?php
     $db = mysqli_connect('localhost','root','','myDB');
    if(isset($_POST['acceptbtn']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone_number = $_POST['phone_number'];
        $clg_name = $_POST['clg_name'];
        $address = $_POST['address'];
        $images = $_POST['image'];
        $visible=0;
        $status=0;
        $sql="select * from reg_admin_final where clg_name='$clg_name'";
        $result=mysqli_query($db,$sql);
           
            $count= mysqli_num_rows($result);
          if($count == 1)
           {
               echo '<div class="alert alert-danger">College already in portal</div>';
               $sql1 = "DELETE FROM request_clg_final where clg_name='$clg_name'";
                             $query_run1 = mysqli_query($db, $sql1);
           }
          else{
              $query = "INSERT INTO reg_admin_final (email,password,clg_name,phone_number,image,address,visible,status) VALUES ('$email','$password','$clg_name','$phone_number','$images','$address','$visible','$status')";
            $query_run = mysqli_query($db, $query);
        
            if($query_run)
            {
            
                echo '<div class="alert alert-info">College added Successfully</div>';
               $sql1 = "DELETE FROM request_clg_final where clg_name='$clg_name'";
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
        $password = $_POST['password'];
        $phone_number = $_POST['phone_number'];
        $clg_name = $_POST['clg_name'];
        $address = $_POST['address'];
        $images = $_POST['image'];
        $visible=0;
        $sql2 = "DELETE FROM request_clg_final where clg_name='$clg_name'";
        $query_run2 = mysqli_query($db, $sql2);
        echo '<div class="alert alert-danger">Request reject Successfull .</div>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="css/request_css.css">
</head>
<body>

<?php
    include('includes/header.php');
    include('includes/navbar.php');
    include('includes/config.php');
    ?>


<div class="container c1">
<?php
  $sql = "SELECT * FROM request_clg_final";
  $result = mysqli_query($db, $sql);
   ?>
<?php foreach ($result as $row): ?>
    <div class="card">
        <div class="content">
            <h3><?php echo $row['clg_name']; ?></h3>
            <p><?php echo $row['clg_name']; ?> request to accept their registration to the portal.</p>
            <a href="#" data-toggle="modal" data-target="#info1-<?php echo $row['id']; ?>">Read More</a>
        </div>
    </div>





<div class="modal fade" id="info1-<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="request.php" method="POST">

        <div class="modal-body">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $row['email'];?>" required readonly>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control" value="<?php echo $row['password'];?>" required readonly>
            </div>
            <div class="form-group">
                <label> College Name </label>
                <input type="text" name="clg_name" class="form-control" value="<?php echo $row['clg_name']; ?>" required readonly>
            </div>
            <div class="form-group">
                <label> Phone Number </label>
                <input type="number" name="phone_number" class="form-control" value="<?php echo $row['phone_number']; ?>" required readonly>
            </div>
            <div class="form-group">
                <label> Address </label>
                <textarea type="text" name="address" class="form-control" required readonly><?php echo $row['address']; ?></textarea>
            </div>
            <div class="form-group">
                <label> Phone Number </label>
                <input type="number" name="phone_number" class="form-control" value="<?php echo $row['phone_number']; ?>" required readonly>
            </div>
            <div class="form-group">
            <label> Image : </label>
                <input type="hidden" name="image" class="form-control" value="<?php echo $row['id']; ?>" required readonly>
                <div data-toggle="modal" data-target="#trailer-<?php  echo $row['id']; ?>">
                <img src="../upload/<?php  echo $row['image']; ?>" height="100px" width="100px">
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

<div class="modal" id="trailer-<?php  echo $row['id']; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <a href="#" class="hanging-close" data-dismiss="modal" aria-hidden="true">
        <img src="https://lh5.ggpht.com/v4-628SilF0HtHuHdu5EzxD7WRqOrrTIDi_MhEG6_qkNtUK5Wg7KPkofp_VJoF7RS2LhxwEFCO1ICHZlc-o_=s0#w=24&h=24"/>
      </a>
      
        <img src="../upload/<?php  echo $row['image']; ?>" height="600px" width="900px">
      
    </div>
  </div>
</div>
<?php endforeach; ?>


</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
    ?>
