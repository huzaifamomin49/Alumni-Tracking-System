<?php
include('includes/config.php');
    if (isset($_POST["search_data"]))
{
    $id=$_POST['id'];
    $visible=$_POST['visible'];
    $query="update reg_clg_final set visible='$visible'where id='$id'";
    $query_run=mysqli_query($db,$query);
    
}
     if (isset($_POST["delete_multiple_data"]))
    {
        $del_id = "1";
        $sql = "DELETE FROM reg_clg_final WHERE visible=$del_id";
        $query_run1 = mysqli_query($db, $sql);
        if($query_run1)
        {
            header('location:register.php');
            echo '<div class="alert alert-info">Successfully deleted</div>';
        }
        else{
            header('location:register.php');
            echo '<div class="alert alert-danger">Something went wrong.</div>';
        }
    }
 ?>

