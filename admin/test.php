<?php
$con=mysqli_connect("localhost","root","","alumni");
if(!$con)
{
	echo "not connected";
}
$email='asd@gmail.com';
$pass='asd123';
$cname='asd';
$cid='qwee';
$phone=9098989099;
$certificate='aaa';
$address='gad';
$sql="insert into clg_waiting values('$email','$pass','$cname','$cid','$phone','$certificate','$address')";
if(!mysqli_query($con,$sql)){
	echo "failed to insert";
}
?>