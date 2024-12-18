<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Sign_Language_Society_MSL";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL to create enquiryservice table
$sql_enquiry = "CREATE TABLE IF NOT EXISTS enquiryservice(
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(25) NOT NULL,
    last_name VARCHAR(25) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phonenumber VARCHAR(100) NOT NULL,
    services VARCHAR(50) NOT NULL,
    appointment_date DATE NOT NULL,
    appointment_time TIME NOT NULL
)";

// Execute query to create enquiryservice table
if (!mysqli_query($conn, $sql_enquiry)) {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);

?>
