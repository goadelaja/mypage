//attach submit button to maintenance function.
$('#maintain li').hide();

$('#submit').click(function(){
	event.preventDefault();
	$('#maintain li').show();
});

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


