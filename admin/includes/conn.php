<?php
$db=mysqli_connect("localhost","root","","myDB");
if(!$db){
	echo("not connected");
}
$sql="CREATE TABLE if not exists request_clg_final(id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, email varchar(255) NOT NULL, password varchar(255) NOT NULL, clg_name varchar(255)NOT NULL,phone_number varchar(10)NOT NULL, image varchar(255), address varchar(255)NOT NULL,visible tinyint(4),status tinyint(4))";

if(!mysqli_query($db,$sql)){
echo 'error';
}
else{
    
}




?>
