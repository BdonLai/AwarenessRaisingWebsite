<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "joinvolunteer";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS joinvolunteer_table(
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(25) NOT NULL,
    lastname VARCHAR(25) NOT NULL,
    age VARCHAR(4) NOT NULL,
    email VARCHAR(100) NOT NULL,
    address VARCHAR(40) NOT NULL,
    city VARCHAR(20) NOT NULL,
    state VARCHAR(50) NOT NULL,
    postcode VARCHAR(5) NOT NULL,
    phonenumber VARCHAR(100) NOT NULL,
    volunteerrole VARCHAR(50) NOT NULL,
    start DATE NOT NULL,
    end DATE NOT NULL
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