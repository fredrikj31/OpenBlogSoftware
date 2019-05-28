<?php

// get the q parameter from URL
$DBAddress = $_GET["Address"];
$DBUser = $_GET["User"];
$DBPass = $_GET["Pass"];
$DBName = $_GET["Name"];

error_reporting(0);

if (empty($DBPass)) {
	$DBPass = "";
}


// Create connection
$conn = mysqli_connect($DBAddress, $DBUser, $DBPass, $DBName);

if (!$conn) {
    print("<b>Error</b>: Unable to connect to MySQL.");
	print('<br>');
	print("Try editing some of the information.");
    exit;
} else {
	print("Database Found! This is a valid database connection.");
}
	


?>