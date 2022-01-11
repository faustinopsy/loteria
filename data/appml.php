<?php
$servername = "localhost";
$username = "faust537_garanto";
$password = "COL31EFE21";
$dbname = "faust537_garantido";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>