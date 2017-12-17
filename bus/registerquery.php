<?php 

require_once("inc/connect.php");

		if($_POST[''] = !null){
		    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
		}

		$sql = "INSERT INTO register ( firstname, lastname, username, pwd) VALUES ('$firstname', '$lastname', '$username', '$pwd');";
		$res = mysqli_query($conn, $sql); 

		if(!$res){
			die("Query Failed!".mysqli_error($conn));
		} //else{
			//echo "good";
		//}
		

header("Location:index.php");
?>