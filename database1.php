<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enquiry";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS enquiry_table(
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(25) NOT NULL,
    last_name VARCHAR(25) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phoneNumber VARCHAR(10) NOT NULL,
    phone_area_code VARCHAR(100) NOT NULL,
    Services VARCHAR(100) NOT NULL,
    appointment_date VARCHAR(100) NOT NULL,
    appointment_time VARCHAR(100) NOT NULL
    
)";

// Execute query
// if (mysqli_query($conn, $sql)) {
//     echo "Table created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }
// mysqli_query($conn, $sql);
mysqli_close($conn);
?>