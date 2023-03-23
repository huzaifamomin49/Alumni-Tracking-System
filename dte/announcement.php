<?php
    include('includes/config.php');include('includes/header.php');
    include('includes/navbar.php');
    if(isset($_POST['announce_btn']))
    {
        $announce1=$_POST['announce'];
        $sql1="delete from announcements";
        $announce1=mysqli_real_escape_string($db,$announce1);
        mysqli_query($db,$sql1);
        $sql11="insert into announcements values('$announce1')";
        mysqli_query($db,$sql11);
    }
    if(isset($_POST['notification_btn']))
    {
        $notify=$_POST['notify'];
        $sql2="delete from notifications";
        $notify=mysqli_real_escape_string($db,$notify);
        mysqli_query($db,$sql2);
        $sql21="insert into notifications values('$notify')";
        mysqli_query($db,$sql21);
    }
    if(isset($_POST['event_btn']))
    {
        $event=$_POST['event'];
        $sql3="delete from events";
        $event=mysqli_real_escape_string($db,$event);
        mysqli_query($db,$sql3);
        $sql31="insert into events values('$event')";
        mysqli_query($db,$sql31);
    }
    
?>








<div class="container-fluid" >

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Announcement <br><br>
</div>

<div class="card-body">
<form action="announcement.php" method="post">
  <div class="form-group">
    <label>Add Announcement</label>
    <textarea type="text" name="announce" class="form-control" rows=6></textarea>
  </div>
  <button type="submit" name="announce_btn" class="btn btn-primary">Send</button>
</form>
</div>
</div>

<div class="card shadow mb-4">
  <div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Notifications<br><br>
</div>

<div class="card-body">
<form action="announcement.php" method="post">
  <div class="form-group">
    <label>Add Notification</label>
    <textarea type="text" name="notify" class="form-control" rows=6></textarea>
  </div>
  <button type="submit" name="notification_btn" class="btn btn-primary">Send</button>
</form>
</div>
</div>

<div class="card shadow mb-4">
  <div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Events <br><br>
</div>

<div class="card-body">
<form action="announcement.php" method="post">
  <div class="form-group">
    <label>Add Event</label>
    <textarea type="text" name="event" class="form-control" rows=6></textarea>
  </div>
  <button type="submit" name="event_btn" class="btn btn-primary">Send</button>
</form>
</div>
</div>


</div>





<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
