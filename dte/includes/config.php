<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'myDB');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $sql= "create table if not exists reg_admin_final (id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, email varchar(255) NOT NULL, password varchar(255) NOT NULL, clg_name varchar(255)NOT NULL,phone_number varchar(10)NOT NULL, image varchar(255), address varchar(255)NOT NULL,visible tinyint(4),status tinyint(4));";
    if (mysqli_query($db, $sql)) {
      
    } else {
      echo "Error creating table: " . mysqli_error($db);
    }
    $sql1="create table if not exists dte(username varchar(20), password varchar(20))";
    mysqli_query($db,$sql1);
    
?>
