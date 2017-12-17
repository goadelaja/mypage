<?php 
$pageTitle = "Login";
include("inc/header.php"); 
?>
	<div id="reg">
		<h4>Enter your Username and Password </h4>
		
		<form action="loginquery.php" method="POST">
			<label><strong>UserName </strong></label><input type="text" name="username" id="username" placeholder="username" required="required"><br><br>
			<label><strong>Password </strong></label><input type="password" name="pwd" id="pwd" placeholder="password" required="required"><br><br>

			<button type="submit">Login</button>
		</form>

		<form action="logoutquery.php">
			<button type="submit" name="logout">Log out</button>
		</form>	
	</div>


<?php 
include("inc/footer.php"); 
?>