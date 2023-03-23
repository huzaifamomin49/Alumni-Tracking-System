
<?php

//fetch_user.php

include('database_connection.php');

session_start();

$query = "
SELECT * FROM alm_register_final
WHERE clg_name= '".$_SESSION['clg']."'
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '
<table class="table table-bordered table-striped">
 <tr>
  <th width="60%">Admin</td>
  <th width="40%">Action</td>
 </tr>
';
    
foreach($result as $row)
{
 $output .= '
 <tr>
  <td>'.$row['fname'].' '.count_unseen_message($row['id'], $_SESSION['user_id'], $connect).' '.fetch_is_type_status($row['id'], $connect).'</td>
  
  <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['id'].'" data-tousername="'.$row['clg_name'].'">Start Chat</button></td>
 </tr>
 ';
}

$output .= '</table>';

echo $output;

?>
