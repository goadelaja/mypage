<!--web app to monitor vehicle health-->



<!--output required maintenance-->
<!DOCTYPE html>
<html>
	<head>
		<title>Vehicle Health Check</title>
		<link href= "css/main.css" rel= "stylesheet">
		<script>
			function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";

	if (s1.value == "Honda"){
		var optionArray = ["|", "crv|CRV", "accord|Accord", "crosstour|Crosstour", "element|Element", "civic|Civic", "insight|Insight","fit|FIT", "odyssey|Odyssey", "ridgeline|Ridgeline", "pilot|Pilot"];
	}else if (s1.value == "Toyota"){
		var optionArray = ["|", "4Runner|4Runner", "Rav4|Rav4", "camry|Camry", "corrola|Corrola", "avalon|Avalon", "highlander|Highlander", "hilux|Hilux", "land cruiser|Land Cruiser", "sienna|Sienna", "sequoia|Seqouia", "tacoma|Tacoma", "tundra|Tundra", "yaris|Yaris", "venza|Venza"];
	}else if (s1.value == "Mercedez Benz"){
		var optionArray = ["|", "A Class|A Class", "C Class|C Class", "S Class|S Class"];
	}else if (s1.value == "Nissan"){
		var optionArray = ["|", "Rouge|Rouge", "Xterra|Xterra", "Xtrail|Xtrail", "Micra|Micra"];
	}else if (s1.value == "Volks Wagen"){
		var optionArray = ["|", "Jetta|Jetta", "Passat|Passat", "Touareg|Touareg", "Beetles|Beetles"];
	}

	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
		</script>
	</head>
	<body>
		<header id= "cont">
			<h1>VEHICLE HEALTH CHECK</h1>
		</header>
		<section id="container">
			<!--create a list of vehicle make-->
			<form>
				Vehicle Make
				<select id= "Make" name="make" onChange="populate('Make', 'Model')">

						<option value = "" class="default">default</option>
						<option value = "Honda" class="Honda">Honda</option>
						<option value = "Toyota" class='Toyota'>Toyota</option>
						<option value = "Mercedez Benz" class='Benz'>Mercedez Benz</option>
						<option value = "Nissan" class='Nissan'>Nissan</option>
						<option value = "Volks Wagen" class='Volks'>Volks Wagen</option>
						<option value = "Acura" class='Acura'>Acura</option>
						<option value = "Audi" class='Audi'>Audi</option>
						<option value = "BMW" class='BMW'>BMW</option>
						<option value = "Chrysler" class='Chrysler'>Chrysler</option>
						<option value = "Dodge" class='Dodge'>Dodge</option>
						<option value = "Ford" class='Ford'>Ford</option>
						<option value = "Hyundai" class='Hyundai'>Hyundai</option>
						<option value = "Infiniti" class='Infiniti'>Infiniti</option>
						<option value = "Jaguar" class='Jaguar'>Jaguar</option>
						<option value = "Jeep" class='Jeep'>Jeep</option>
						<option value = "Kia" class='Kia'>Kia</option>
						<option value = "Land Rover" class='Land Rover'>Land Rover</option>
						<option value = "Lexus" class='Lexus'>Lexus</option>
						<option value = "Mazda" class='Mazda'>Mazda</option>
						<option value = "Mitsubishi" class='Mitsubishi'>Mitsubishi</option>
						<option value = "Opel" class='Volks'>Opel</option>
						<option value = "Peugeot" class='Opel'>Peugeot</option>
						<option value = "Pontiac" class='Pontiac'>Pontiac</option>
						<option value = "Subaru" class='Subaru'>Subaru</option>
						<option value = "Suzuki" class='Suzuki'>Suzuki</option>
						<option value = "Volvo" class='Volvo'>Volvo</option>

			 	</select><br><br>


				<!--create a list of models-->
				Vehicle Model <select id= "Model" name="model">
					<!-- <optgroup label= 'Honda'>

						<option class = "" value = "default">default</option>
						<option class = "honda" value = "CRV">CRV</option>
						<option class = "honda" value = "Accord">Accord</option>
						<option class = "honda" value = "Crosstour">Crosstour</option>
						<option class = "honda" value = "Element">Element</option>
						<option class = "honda" value = "Element">Element</option>
					</optgroup>

					<optgroup label= 'Toyota'>

						<option class = "toyota" value = "4Runner">4Runner</option>
						<option class = "toyota" value = "Rav4">Rav4</option>
						<option class = "toyota" value = "Corrola">Corrola</option>
						<option class = "toyota" value = "Camry">Camry</option>
						<option class = "toyota" value = "Avalon">Avalon</option>
						<option class = "toyota" value = "Highlander">Highlander</option>
						<option class = "toyota" value = "Hilux">Hilux</option>
						<option class = "toyota" value = "Land Cruiser">Land Cruiser</option>
						<option class = "toyota" value = "Prius">Prius</option>
						<option class = "toyota" value = "Siena">Siena</option>
						<option class = "toyota" value = "Seqoia">Seqoia</option>
						<option class = "toyota" value = "Venza">Venza</option>
						<option class = "toyota" value = "yaris">yaris</option>
						<option class = "toyota" value = "Thundra">Thundra</option>
						<option class = "toyota" value = "Tacoma">Tacoma</option>
					</optgroup>

					<optgroup label= 'Mercedez Benz'>

						<option class = "benz" value = "C class">C class</option>
						<option class = "benz" value = "M class">M class</option>
						<option class = "benz" value = "A class">A class</option>
						<option class = "benz" value = "S class">S class</option>
					</optgroup>

					<optgroup label= 'Nissan'>

						<option class = "nissan" value = "Rouge">Rouge</option>
						<option class = "nissan" value = "Xterra">Xterra</option>
						<option class = "nissan" value = "Xtrail">Xtrail</option>
						<option class = "nissan" value = "Micra">Micra</option>
					</optgroup>

					<optgroup label= 'Volks Wagen'>

						<option class = "volks" value = "Jetta">Jetta</option>
						<option class = "volks" value = "Passat">Passat</option>
						<option class = "volks" value = "Touareg">Touareg</option>
						<option class = "volks" value = "Beetles">Beetles</option>
					</optgroup>-->
		  		</select><br><br>



				Year of Manufacture
					<select name = "year">
						<option value = "1995">1995</option>
						<option value = "1996">1996</option>
						<option value = "1997">1997</option>
						<option value = "1998">1998</option>
						<option value = "1999">1999</option>
						<option value = "2000">2000</option>
						<option value = "2001">2001</option>
						<option value = "2002">2002</option>
						<option value = "2003">2003</option>
						<option value = "2004">2004</option>
						<option value = "2005">2005</option>
						<option value = "2006">2006</option>
						<option value = "2007">2007</option>
						<option value = "2008">2008</option>
						<option value = "2009">2009</option>
						<option value = "2010">2010</option>
						<option value = "2011">2011</option>
						<option value = "2012">2012</option>
						<option value = "2013">2013</option>
						<option value = "2014">2014</option>
						<option value = "2015">2015</option>
						<option value = "2016">2016</option>
						<option value = "2017">2017</option>
						<option value = "2018">2018</option>
					</select><br><br>

			Trim<select>
						<optgroup>
							<option value= "default">default</option>
							<option value= "CE">CE</option>
							<option value= "LE">LE</option>
							<option value= "XLE">XLE</option>
							<option value= "SE">SE</option>
							<option value= "SR5">SR5</option>
							<option value= "LIMITED">LIMITED</option>
							<option value= "PLATINUM">PLATINUM</option>

						</optgroup>
					</select><br><br>

			Engine<select>
						<optgroup>
							<option>2.4L</option>
							<option>2.0L</option>
							<option>3.3L</option>
							<option>3.5L</option>
							<option>4.0L</option>
							<option>4.7L</option>
						</optgroup>
					</select><br><br>


			Mileage(Miles) <input id="miles" type= "number" placeholder= "1.0"  min= "0" ></input>
			Mileage(Km) <input id="km" type= "number" placeholder= "1.0"  min= "0" ></input><br><br>


			<button id="submit" type= "button">Submit</button>


			<div>
				<ul id= "maintain">
					<li class= "maintain">Change Oil</li>
					<li>Change Break Pads</li>
					<li>Change Timing Belts</li>
					<li>Change Spark Plugs</li>
					<li>Change Tyres</li>
				</ul>
			</div>
			</form>
			<div>
				<h3><a href="../index.php">Back to HomePage </a></h3>
			</div>
		</section>

		<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
		<footer id="foot">&copy Copyright Autobookman <?php echo date('F d, Y'); ?> </footer>
	</body>
</html>
