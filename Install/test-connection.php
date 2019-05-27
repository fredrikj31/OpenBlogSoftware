<?php

// get the q parameter from URL
$DBAddress = $_GET["Address"];
$DBUser = $_GET["User"];
$DBPass = $_GET["Pass"];
$DBName = $_GET["Name"];

// Create connection
$conn = mysqli_connect($DBAddress, $DBUser, $DBPass, $DBName);

// Check connection
if (!$conn) {
    die("Connection failed!");
} else {
    print("Database Found! This is a valid database connection.");
}

?>