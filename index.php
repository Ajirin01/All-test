<?php
	$servername = "10.123.0.54:3307";
	// $username = "olamub10_ei1";
	// $password = "9Uhn61cHC)";

	$username = "olamub10_premejoy_wp";
	$password = "Sin2@+cos2@1";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password);
	
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	
	echo "Connected successfully";
?>