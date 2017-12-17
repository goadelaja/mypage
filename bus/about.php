<?php 
session_start();
//session_destroy();
if(isset($_SESSION['username'])){
	echo "Welcome" ." ". $_SESSION['username'];
}
$pageTitle = "About Us";
include("inc/header.php");
?>
	<section>
	  <img src="img/gbenga.jpg" alt="photograph of Gbenga Adelaja" class="profile-photo">
	  <h3>About</h3>
	  <p>Hi, I am Gbenga Adelaja, a Mechanical technician with a Pipeline Transporter. I am an enthusiast hence, I am learning how to code websites fast</p>
	  <p>If you want to know more about me, you can follow me on twitter <a href="https://twitter.com/godelaja2002">@goadelaja2002</a></p>
	</section>





<?php include("inc/footer.php"); ?>