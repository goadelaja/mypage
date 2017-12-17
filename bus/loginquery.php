<?php 
session_start();
include("inc/connect.php");

		if($_POST[''] = !null){
		    $username = mysqli_real_escape_string($conn, $_POST['username']);
			$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
			
		}

		$sql = "SELECT  * FROM register WHERE username = '$username' AND pwd = '$pwd'";
		$res = mysqli_query($conn, $sql);

		if($row = mysqli_fetch_assoc($res)){
			$_SESSION['username'] = $row['username'] OR $_SESSION['pwd'] = $row['pwd'];
		}else{
			
			echo "Your Password or Username is Incorrect";
		}
	
	


		

header("Location:index.php");
?>