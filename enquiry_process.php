<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="enquiry_page">
    <meta name="keywords" content="enquiry, msl, ssd">
    <meta name="author" content="Zi Jie">    
	<!--The viewport meta tag is used in web design to control how a webpage is displayed on different devices by adjusting the initial scale and width of the viewport.-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form</title>
	<!--External css-->
    <link rel="stylesheet" type="text/css" href="styles/style.css">
	<!--favicon-->
	<link rel="icon" type="image/x-icon" href="M.ico">
</head>

<body>
	<h1>Sign Language Society</h1>
	<h2>Enquiry Confirmation page</h2>

	
<?php
$first_name = $last_name = $email = $phoneNumber = $phone_area_code = $Services = $appointment_date = $appointment_time = "";

    // Check if each field is set and assign values
    if (isset($_POST['first_name'])) {
        $first_name = $_POST['first_name'];
    } else {
        header("Location: error1.php", true, 301);
    }

    if (isset($_POST['last_name'])) {
        $last_name = $_POST['last_name'];
    } else {
        header("Location: error1.php", true, 301);
    }


    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        header("Location: error1.php", true, 301);
    }

    if (isset($_POST['phoneNumber'])) {
        $phoneNumber = $_POST['phoneNumber'];
    } else {
        header("Location: error1.php", true, 301);
    }

    if (isset($_POST['phone_area_code'])) {
        $phone_area_code = $_POST['phone_area_code'];
    } else {
        header("Location: error1.php", true, 301);
    }

    if (isset($_POST['Services'])) {
        $Services = $_POST['Services'];
    } else {
        header("Location: error1.php", true, 301);
    }

    if (isset($_POST['appointment_date'])) {
        $appointment_date = $_POST['appointment_date'];
    } else {
        header("Location: error1.php", true, 301);
    }

    if (isset($_POST['appointment_time'])) {
        $appointment_time = $_POST['appointment_time'];
    } else {
        header("Location: error1.php", true, 301);
    }

   

?>

<form id="enquiryform" >

    <fieldset>
        <legend>Booking Details</legend>
        <p>Welcome <?php echo $first_name; echo ' '; echo $last_name; ?></p>
        <p>Email Address: <?php echo $_POST['email']; ?></p>
        <p>Phone Number: <?php echo $_POST['phoneNumber']; ?></p>
        <p>Area Code: <?php echo $_POST['phone_area_code']; ?></p>
        <p>Services: <?php echo $_POST['Services']; ?></p>
        <p>Appointment Date: <?php echo $_POST['appointment_date']; ?></p>
        <p>Appointment Time: <?php echo $_POST['appointment_time']; ?></p>
    </fieldset>
</form>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enquiry";

$conn = mysqli_connect($servername, $username, $password, $dbname);


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$phone_area_code = $_POST['phone_area_code'];
$Services = $_POST['Services'];
$appointment_date = $_POST['appointment_date'];
$appointment_time = $_POST['appointment_time'];

$sql = "INSERT INTO enquiry_table (first_name, last_name, email, phoneNumber, phone_area_code, Services, apointment_date, appointment_time)
        VALUES ('$first_name', '$last_name', '$email', '$phoneNumber', '$phone_area_code', '$Services', '$apointment_date', '$appointment_time')";



//check if the query is correct
mysqli_query($conn, $sql);
mysqli_close($conn);
?>

</body>
</html>