<?php
    // Database configuration
    $host = "localhost"; // MySQL hostname
    $dbUserName = "faust537_lotto"; // MySQL database username
    $dbPwd = "COL31EFE21"; // MySQL database password
    $dbName = "faust537_lotto"; // The name of the database
	$table = "lotofacil"; // The name of the table

    // Start connection to database server
    $conn = mysqli_connect($host, $dbUserName, $dbPwd);
    if (!$conn) {
        die('Could not connect: ' . mysqli_connect_error());
    }

    // make connection to database
	$db_selected = mysqli_select_db($conn, $dbName);
    if (!$db_selected) {
        die ('Can\'t use database'.$dbName.' : ' . mysqli_connect_error());
    }	
	//mysql_close($link);
?>