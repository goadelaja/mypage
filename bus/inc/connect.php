<?php 
$errormsg = "Connection failed";

$db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';
$db = 'lajcap5_yellowpage';

$conn = mysqli_connect($db_host, $db_user, $db_pwd, $db );

if(mysqli_connect_errno()){
	die($errormsg . mysqli_connect_error());
}else{
	//echo "connected to Yellow Pages";
}






