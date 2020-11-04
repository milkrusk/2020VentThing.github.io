<?php 
	$Temp=$_POST["temperature"]; //var so we can read temp 
	$Humidity=$_POST["humidity"]; //read humidity
	
	$Write="<p>temperature : " . $Temp . " C </p>". "<p>Humidity : " . $Humidity . " % </p>"; 
	
	//make html to show the data 
	file_put_contents('sensor.html',$Write); 
?>