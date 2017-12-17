
<?php
//session_start();
//session_destroy();
//if(isset($_SESSION['username'])){
	//echo "Welcome" ." ". $_SESSION['username'];
//}

$pageTitle = "Business Listing";
include("inc/header.php");
?>


		<section>
			<div id="cont">
				<form action="searcheng.php" method = "POST">
					<label for="container" >Search</label>&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name="search" id="container" size="60">&nbsp;&nbsp;<input type="submit" value="Go" >
				</form>

			</div>
			<div>
				<h3><a href="../index.php">Back to HomePage</a></h3>
			</div>

		</section>

<?php
include("inc/footer.php");
?>
