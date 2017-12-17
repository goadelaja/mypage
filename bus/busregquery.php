<?php
	session_start();
	session_destroy();
	require_once("inc/connect.php");
	
	if($_POST[''] = !null){
		$busname = mysqli_real_escape_string($conn, $_POST['busname']);
		$sector = mysqli_real_escape_string($conn ,$_POST['sector']);
		$more_info = mysqli_real_escape_string($conn, $_POST['more_info']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		$contact = mysqli_real_escape_string($conn,$_POST['contact']);
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
		}

$sql = "INSERT INTO busreg (busname, sector, more_info, address, contact, username, pwd)
		 VALUES ('$busname', '$sector', '$more_info', '$address', '$contact', '$username', '$pwd' )";

$res = mysqli_query($conn, $sql);

if(!$res){
	die("Fill in the correct information and try again" . mysqli_error($conn));
}

header("Location:busthanks.php");














?>