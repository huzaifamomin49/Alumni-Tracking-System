<?php
$db=mysqli_connect("localhost","root","","myDB");
if(!$db){
	echo("not connected");
}
$sql="CREATE TABLE if not exists alm_request_final (id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,email VARCHAR(30) NOT NULL,password VARCHAR(30) NOT NULL,gender VARCHAR(30) NOT NULL,occupation VARCHAR(30) NOT NULL,description VARCHAR(130) NOT NULL,twitter VARCHAR(200),facebook VARCHAR(200),linkedin VARCHAR(200),fname VARCHAR(15) NOT NULL,lname VARCHAR(15) NOT NULL,phone varchar(10) NOT NULL,poutyear VARCHAR(4) NOT NULL,certificate VARCHAR(30) NOT NULL,address VARCHAR(130) NOT NULL,status INT(2),visible tinyint(4), clg_name varchar(50))";

    if(mysqli_query($db,$sql)){
        
    }


    $sql1="CREATE TABLE if not exists alm_register_final (id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,email VARCHAR(30) NOT NULL,password VARCHAR(30) NOT NULL,gender VARCHAR(30) NOT NULL,occupation VARCHAR(30) NOT NULL,description VARCHAR(130) NOT NULL,twitter VARCHAR(200),facebook VARCHAR(200),linkedin VARCHAR(200),fname VARCHAR(15) NOT NULL,lname VARCHAR(15) NOT NULL,phone varchar(10) NOT NULL,poutyear VARCHAR(4) NOT NULL,certificate VARCHAR(30) NOT NULL,address VARCHAR(130) NOT NULL,status INT(2),visible tinyint(4), clg_name varchar(50))";

    if(mysqli_query($db,$sql1)){
        
    }

    $sql2="create table if not exists post (photo varchar(30) NOT NULL , likes INT(10) NOT NULL , fname varchar(15) NOT NULL)";
    mysqli_query($db,$sql2);

    $sql3="create table if not exists chat_admin(id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, to_user int(11) NOT NULL, from_user int(11) NOT NULL, chat_message text NOT NULL)";
    mysqli_query($db,$sql3);
?>
