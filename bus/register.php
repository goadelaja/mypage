<?php 
session_start();
//session_destroy();
if(isset($_SESSION['username'])){
	echo "Welcome" ." ". $_SESSION['username'];
}
$pageTitle = "User Account Registration";
include("inc/header.php"); 
?>
	<div id="reg">
		<h3>Register your free user account below: </h3>
		<form action="registerquery.php" method="post">
			<label><strong>First Name </strong></label><input type="text" name="firstname"  placeholder="firstname"><br><br>
			<label><strong>Last Name </strong></label><input type="text" name="lastname"  placeholder="lastname"><br><br>
			<label><strong>User Name </strong></label><input type="text" name="username"  placeholder="username" required="required"><br><br>
			<label><strong>Password </strong></label><input type="password" name="pwd"  placeholder="password" required="required"><br><br>

			<button type="submit">Register</button>
		</form>	
	</div>


<?php 
include("inc/footer.php"); 
?>