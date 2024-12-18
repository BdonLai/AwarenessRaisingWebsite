<?php

	// set the servername, username and password
	$servername = "localhost";
	$username = "root";
	$password = "";
		
	// Create connection
	$conn = mysqli_connect($servername, $username, $password);
		
	// Create database
	// mysqli query() function performs a query against a database.
	$sql = "CREATE DATABASE IF NOT EXISTS volunteer_table";
		
	mysqli_query($conn, $sql);
	mysqli_close($conn);
	
?>
