<?php
session_start();
session_destroy();
include("inc/connect.php");
include("inc/header.php");




if(isset($search)){
	$search = mysqli_real_escape_string($conn, $_POST['search']);
	if(!empty($search)){
		if(strlen($search) >= 4){
			$sql = "SELECT busname, address, contact, sector FROM busreg 
			WHERE busname LIKE '%".$search."%'
			OR address LIKE '%".$search."%'
			OR contact LIKE '%".$search."%'
			OR sector LIKE '%".$search."%'
			OR more_info LIKE '%".$search."%'
			";
			$res = mysqli_query($conn, $sql);

			if(mysqli_num_rows($res) >= 1){
				while($row = mysqli_fetch_assoc($res)){
						echo "<strong>"."&nbsp;&nbsp;&nbsp;&nbsp;Result Found"."</strong>" ."<br>";
						echo "<strong>"."&nbsp;&nbsp;&nbsp;&nbsp;"."Business Name: "."</strong>".$row['busname'] ."<br>";
						echo "<strong>"."&nbsp;&nbsp;&nbsp;&nbsp;"."Business Address: "."</strong>".$row['address'] ."<br>";
						echo "<strong>"."&nbsp;&nbsp;&nbsp;&nbsp;"."Business Contact Person: "."</strong>".$row['contact'] ."<br>";
						echo "<strong>"."&nbsp;&nbsp;&nbsp;&nbsp;"."Business Sector: "."</strong>".$row['sector'] ."<br><br><br>";
					}
				}else{
				echo "No result found";
					}
		}else{
			echo "Your Keyword is less than four letters";
			}
	}

}





include("inc/footer.php");
