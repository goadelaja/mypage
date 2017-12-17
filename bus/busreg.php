<?php 
session_start();
//session_destroy();
if(isset($_SESSION['username'])){
	echo "Welcome" ." ". $_SESSION['username'];
}

$pageTitle = "Business Account Registration";
include("inc/header.php"); 
?>
	<div id="reg">
		<h3>Register your free Business account below: </h3>
		<form action="busregquery.php" method="POST">
			<label><strong>Business Name </strong></label><input type="text" name="busname" id="busname" placeholder="Business Name"><br><br>
			<label><strong>Sector </strong></label><select name="sector" id="sector">
				<option value="default">Select</option>
				<option value="Engineering">Engineering</option>
				<option value="Accounting">Accounting</option>
				<option value="Oil and Gas">Oil and Gas</option>
				<option value="Manufacturing">Manufacturing</option>
				<option value="Trading">Trading</option>
				<option value="e-commerce">e-commerce</option>
			</select><br><br>
			<label><strong>Brief Description </strong></label><textarea  name="more_info" id="more_info" placeholder="Enter a brief description of your Business here"></textarea><br><br>
			<label><strong>Address </strong></label><textarea  name="address" id="address" placeholder="Enter your address here"></textarea><br><br>
			<label><strong>Contact Person </strong></label><input type="contact" name="contact" id="contact" placeholder="contact"><br><br>
			<label><strong>UserName </strong></label><input type="text" name="username" id="username" placeholder="username" required="required"><br><br>
			<label><strong>Password </strong></label><input type="password" name="pwd" id="pwd" placeholder="password" required="required"><br><br>

			<button type="submit">Register</button>
		</form>	
	</div>


<?php 
include("inc/footer.php"); 
?>