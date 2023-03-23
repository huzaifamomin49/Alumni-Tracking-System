<?php
include('includes/header.php'); 
include('includes/navbar.php');
    include('includes/config.php');
    if(isset($_POST['registerbtn']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirmpassword'];
        $phone_number = $_POST['phone_number'];
        $clg_name = $_POST['clg_name'];
        $address = $_POST['address'];
        $images = $_FILES["image"]["name"];
        $visible=0;
        $status=0;
        if($password === $confirm_password)
        {
                if(file_exists("../upload/".$_FILES["image"]["name"]))
                {
                    $store=$_FILES["image"]["name"];
                    echo '<div class="alert alert-danger">Image already exists</div>';
                }
                else{
                        $query = "INSERT INTO reg_admin_final (email,password,clg_name,phone_number,image,address,visible,status) VALUES ('$email','$password','$clg_name','$phone_number','$images','$address','$visible','$status')";
                        $query_run = mysqli_query($db, $query);
                    
                        if($query_run)
                        {
                            move_uploaded_file($_FILES["image"]["tmp_name"],"../upload/" .$_FILES["image"]["name"]);
                            echo '<div class="alert alert-info">Admin added Successfully</div>';
                           
                        }
                        else
                        {
                            
                            echo '<div class="alert alert-danger">Something went wrong please try again</div>';
                            
                        }
                    }
                    
        }
        else
        {
            
            echo '<div class="alert alert-danger">Password and Confirm password not match please try again</div>';
            
        }
    }
    if(isset($_POST['delete_btn']))
    {
        $del_id = filter_input(INPUT_POST, 'del_id');
        $sql = "DELETE FROM reg_admin_final WHERE id=$del_id";
        $query_run1 = mysqli_query($db, $sql);
        if ($query_run1) {
            $sql1="ALTER TABLE reg_admin_final AUTO_INCREMENT = $del_id";
            mysqli_query($db, $sql1);
          echo '<div class="alert alert-info">Successfully deleted</div>';
        } else {
          echo "<script type='text/javascript'>alert('Error deleting record:  . $db->error');</script>";
        }
    }
    
    
    if(isset($_POST['editbtn']))
    {
        $upd_id = filter_input(INPUT_POST, 'update_id');
        
        $email1 = $_POST['email1'];
        $password1 = $_POST['password1'];
        $confirm_password1 = $_POST['confirmpassword1'];
        $phone_number1 = $_POST['phone_number1'];
        $clg_name1 = $_POST['clg_name1'];
        if($password1 === $confirm_password1)
        {
            $query_update = "UPDATE reg_admin_final SET email = '$email1', password= '$password1' , phone_number='$phone_number1' , clg_name='$clg_name1' WHERE id = $upd_id";
            $query_run_update = mysqli_query($db, $query_update);
        
            if($query_run_update)
            {
                
                echo '<div class="alert alert-info">Successfully updated</div>';
               
            }
            else
            {
                
                echo '<div class="alert alert-info">Something went wrong please try again</div>';
              
            }
        }
        else
        {
            
            $_SESSION['status'] =  "Password and Confirm Password Does not Match";
            
            
        }
        
    }
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="register.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
            </div>
            <div class="form-group">
                <label>Upload Image</label>
                <input type="file" name="image" id="image" class="form-control" required>
            </div>
            <div class="form-group">
                <label> College Name </label>
                <input type="text" name="clg_name" class="form-control" placeholder="Enter College Name" required>
            </div>
            <div class="form-group">
                <label> Phone Number </label>
                <input type="number" name="phone_number" class="form-control" placeholder="Enter College Contact Number" required>
            </div>
            <div class="form-group">
                <label> Address </label>
                <textarea type="text" name="address" class="form-control" placeholder="Enter College Address" required></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>






<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Admin Profile <br><br>
        <form action="code.php" method="post">
        <button type="submit" name="delete_multiple_data" class="btn btn-danger">
            Delete multiple data
        </button>&nbsp;&nbsp;&nbsp;&nbsp;
        
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Admin Profile 
            </button>
        </form>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table id="datatable1" class="table table-bordered"  width="100%" cellspacing="0">
        <thead>
          <tr>
            <th >Check</th>
            <th> ID </th>
            <th>Email </th>
            <th>Phone Number </th>
            <th>College Name</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
     
          <?php
           $sql = "SELECT * FROM reg_admin_final";
           $result = mysqli_query($db, $sql);
            ?>
         <?php foreach ($result as $row): ?>
              <tr>
                    <td>
            <input type="checkbox" onclick="toggleCheckbox(this)" value="<?php echo $row['id']; ?>" <?php echo $row['visible']==1? "checked" : ""?>>
                    </td>
                  <td><?php echo $row['id']; ?> </td>
                 <td><?php echo htmlspecialchars($row['email']); ?> </td>
                <td><?php echo htmlspecialchars($row['phone_number']); ?> </td>
                    <td><?php echo $row['clg_name']; ?> </td>
                
          
            <td>
                
                    
                    <button  type="submit" name="edit_btn" class="btn btn-success" data-toggle="modal" data-target="#editadminprofile-<?php echo $row['id']; ?>"> EDIT</button>
                
            </td>
            <td>
                
                  
                  <button type="submit" name="delete_bt"  class="btn btn-danger" data-toggle="modal" data-target="#confirm-delete-<?php echo $row['id']; ?>"> DELETE</button>
               
            </td>
          </tr>
<!-- Edit admin Information -->
<div class="modal fade" id="editadminprofile-<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="register.php" method="POST">

        <div class="modal-body">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email1" class="form-control" value="<?php echo $row['email'];?>" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password1" class="form-control" value="<?php echo $row['password'];?>" required>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword1" class="form-control" placeholder="Confirm Password" required>
                <input type="hidden" name="update_id" id="update_id" value="<?php echo $row['id']; ?>">
            </div>
            <div class="form-group">
                <label> College Name </label>
                <input type="text" name="clg_name1" class="form-control" value="<?php echo $row['clg_name']; ?>" required>
            </div>
            <div class="form-group">
                <label> Phone Number </label>
                <input type="number" name="phone_number1" class="form-control" value="<?php echo $row['phone_number']; ?>" required>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="editbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>




<!-- Delete Confirmation Modal -->
            <div class="modal fade" id="confirm-delete-<?php  echo $row['id']; ?>" role="dialog">
                <div class="modal-dialog">
                    <form action="register.php" method="POST">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                        <h4 class="modal-title">Confirm</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="del_id" id="del_id" value="<?php echo $row['id']; ?>">
                                <p>Are you sure you want to delete this row?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="delete_btn" class="btn btn-primary pull-left">Yes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
        </tbody>
      </table>



</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

<script>
function toggleCheckbox(box){
    var id=$(box).attr("value");
    if($(box).prop("checked")==true){
        var visible=1;
    }
    else{
        var visible=0;
    }
    var data={
        "search_data":1,
        "id":id,
        "visible":visible
    };
    $.ajax({
           type:"post",
           url:"code.php",
           data:data,
           success: function(response){
           
           }
           });
}
</script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){
                  $('#datatable1').DataTable();
});
</script>
   
