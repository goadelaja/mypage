<?php 
session_start();
//session_destroy();

if(isset($_SESSION['username'])){
	echo "Welcome" ." ". $_SESSION['username'];
}
$pageTitle = "Contact Us";
include("inc/header.php");

?>

<section >
		<div id="primary">
			  <h2>Send us your comments and queries</h2>
			  <p>You can send me a mail by filling out the form below.</p>
	  	</div>
	
	  <form id="tertiary" action ="contactquery.php" method="post">
	  	<table>
	  		<tr>
	  			<th><label for="name" >Name</label></th>
	  			<td><input type="text" id="name" name="name" required ></td>
	  		</tr>
	  		<tr>
	  			<th><label for="email" >Email address</label></th>
	  			<td><input type="email" id="email" name="email" required ></td>
	  		</tr>
	  		<tr>
	  			<th><label for="description">Description</label></th>
	  			<td><textarea id="details" name="description" required></textarea></td>
	  		</tr>
	  	</table>
	  	<input type="submit" value="send" />
	  </form>
	</section>
	<section id="secondary">
	  <h3>Contact Details</h3>
	  <ul class="contact-info">
	    <li class="phone"><a href="tel:08081506439">Gbenga - 08081506439</a></li>
		<li class="mail"><a href="mailto:admin@lajcap.com">admin@lajcap.com</a></li>
		<!--<li class="twitter"><a href="http://twitter.com/intent/tweet?screen_name=goadelaja2002">@goadelaja2002</a></li>-->
		
	  </ul>
	</section>





<?php include("inc/footer.php"); ?>