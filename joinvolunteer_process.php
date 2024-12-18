<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="volunteer_page">
    <meta name="keywords" content="volunteer, msl, ssd">
    <meta name="author" content="Rachel Chong">    
	<!--The viewport meta tag is used in web design to control how a webpage is displayed on different devices by adjusting the initial scale and width of the viewport.-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--This is volunteer form for people who interested to join us as volunteer❤️-->
    <title>Volunteer Form</title>
	<!--External css-->
    <link rel="stylesheet" type="text/css" href="style.css">

<style>

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

h1, h2 {
    text-align: center;
    color: #333;
}

form {
    max-width: 600px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

fieldset {
    border: 1px solid #ddd;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
}

legend {
    font-size: 20px;
    font-weight: bold;
    color: #333;
}

p {
    margin: 10px 0;
}

button[type="submit"] {
    background-color: #4caf50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button[type="submit"]:hover {
    background-color: #45a049;
}
</style>
	<!--favicon-->
	<link rel="icon" type="image/x-icon" href="M.ico">
</head>

<body>
	<h1>Sign Language Society</h1>
	<h2>Join Volunteer Confirmation page</h2>

	
<?php
$firstname = $lastname = $age = $email = $address = $city = $state = $postcode = $phonenumber = $volunteerrole = $start = $end = "";

    // Check if each field is set and assign values
    if (isset($_POST['firstname'])) {
        $firstname = $_POST['firstname'];
    } else {
        header("Location: error.php", true, 301);
    }

    if (isset($_POST['lastname'])) {
        $lastname = $_POST['lastname'];
    } else {
        header("Location: error.php", true, 301);
    }

    if (isset($_POST['age'])) {
        $age = $_POST['age'];
    } else {
        header("Location: error.php", true, 301);
    }

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        header("Location: error.php", true, 301);
    }

    if (isset($_POST['address'])) {
        $address = $_POST['address'];
    } else {
        header("Location: error.php", true, 301);
    }

    if (isset($_POST['city'])) {
        $city = $_POST['city'];
    } else {
        header("Location: error.php", true, 301);
    }

    if (isset($_POST['state'])) {
        $state = $_POST['state'];
    } else {
        header("Location: error.php", true, 301);
    }

    if (isset($_POST['postcode'])) {
        $postcode = $_POST['postcode'];
    } else {
        header("Location: error.php", true, 301);
    }

    if (isset($_POST['phonenumber'])) {
        $phoneNumber = $_POST['phonenumber'];
    } else {
        header("Location: error.php", true, 301);
    }

    if (isset($_POST['volunteerrole'])) {
        $volunteerRole = $_POST['volunteerrole'];
    } else {
        header("Location: error.php", true, 301);
    }

    if (isset($_POST['start'])) {
        $start = $_POST['start'];
    } else {
        header("Location: error.php", true, 301);
    }

    if (isset($_POST['end'])) {
        $end = $_POST['end'];
    } else {
        header("Location: error.php", true, 301);
    }


?>

<form id="Confirmform" action="assign2index.php" method="GET">
    <fieldset>
        <legend>Booking Details</legend>
        <p>Welcome <?php echo $firstname; echo ' '; echo $lastname; ?></p>
        <p>Age: <?php echo $_POST['age']; ?></p>
        <p>Email Address: <?php echo $_POST['email']; ?></p>
        <p>Address: <?php echo $_POST['address']; ?></p>
        <p>City: <?php echo $_POST['city']; ?></p>
        <p>State: <?php echo $_POST['state']; ?></p>
        <p>Postcode: <?php echo $_POST['postcode']; ?></p>
        <p>Phone Number: <?php echo $_POST['phonenumber']; ?></p>
        <p>Volunteer Role: <?php echo $_POST['volunteerrole']; ?></p>
        <p>Start Date: <?php echo $_POST['start']; ?></p>
        <p>End Date: <?php echo $_POST['end']; ?></p>
    </fieldset>
    <button type="submit">Confirm</button>
</form>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Sign_Language_Society_MSL";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$postcode = $_POST['postcode'];
$phonenumber = $_POST['phonenumber'];
$volunteerrole = $_POST['volunteerrole'];
$start = $_POST['start'];
$end = $_POST['end'];

$sql = "INSERT INTO joinvolunteer_table (firstname, lastname, age, email, address, city, state, postcode, phonenumber, volunteerrole, start, end)
        VALUES ('$firstname', '$lastname', '$age', '$email', '$address', '$city', '$state', '$postcode', '$phonenumber', '$volunteerrole', '$start', '$end')";



//check if the query is correct
mysqli_query($conn, $sql);
mysqli_close($conn);
?>

</body>
</html>