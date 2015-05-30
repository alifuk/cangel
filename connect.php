<?php


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "cangel");


/*
$servername = "mysql.brambor.net";
$username = "792tm9bb";
$password = "hda6v66p";

// Create connection
$conn = new mysqli($servername, $username, $password, "CSPOHAR_CZ");

*/

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";





?>