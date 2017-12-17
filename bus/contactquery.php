<?php 

include("inc/connect.php");

		if($_POST[''] = !null){
		    $name = mysqli_real_escape_string($conn, $_POST['name']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$description =mysqli_real_escape_string($conn, $_POST['description']); 
		}

		$sql = "INSERT INTO contact (name, email, description) VALUES ('$name', '$email', '$description');";
		$res = mysqli_query($conn, $sql);

		//if(!$res){
		//die("Query Failed!".mysqli_error($conn));
				//}else{
					//echo "Thank you, we'll get back to you shortly";
		//}

		if($res){
			echo "Thank you, we'll get back to you shortly";
		} else{
			die("Query Failed!".mysqli_error($conn));
		}

header("Location:thanks.php");
?>