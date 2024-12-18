<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="enquiryservice_process.php">
    <meta name="keywords" content="enquiry service, msl, ssd">
    <meta name="author" content="Brandon Lai">    
	<!--The viewport meta tag is used in web design to control how a webpage is displayed on different devices by adjusting the initial scale and width of the viewport.-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--This is volunteer form for people who interested to join us as volunteer❤️-->
    <title>Enquiry form database</title>
	<!--External css-->
    <link rel="stylesheet" type="text/css" href="style.css">
	<!--favicon-->
	<link rel="icon" type="image/x-icon" href="M.ico">
</head>
<body>
    <h1>Enquiry database table</h1>
	<div class= "admin-dashboard">

	<button class="adduser"><a href = "enquiryservice.php" class="textadd">Add User</a></button>
<table border="1" class="database">
    <tr>
        <th>No</th>
        <th width="150px">Name</th>
		<th width="80px">Age</th>
        <th width="80px">Email</th>
		<th width="80px">Phone Number</th>
		<th width="80px">Service</th>
		<th width="80px">Start date</th>
		<th width="80px">Start time</th>
    </tr>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Sign_Language_Society_MSL";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


	// SQL query to select all records from the RT_Book table
	$sql = "SELECT * FROM enquiryservice";

	// Executing the SQL query and storing the result
	$result=mysqli_query($conn, $sql);
	

	if (mysqli_num_rows($result)>0){
	   while($row = mysqli_fetch_assoc($result)){
		   
	?>

			<tr>
				<td> <?php echo $row["id"]; ?></td>
				<td> <?php echo $row["first_name"]." " . $row["last_name"]; ?></td>
				<td> <?php echo $row["age"]; ?></td>
				<td> <?php echo $row["email"]; ?></td>
				<td> <?php echo $row["phoneNumber"]; ?></td>
				<td> <?php echo $row["Service"]; ?></td>
				<td> <?php echo $row["appointment_date"]; ?></td>
				<td> <?php echo $row["appointment_time"]; ?></td>

			</tr>

	<?php
	
	   }
	}else{
		echo "0 results";
	}
	mysqli_close($conn);

	echo'<br><br><button class="adduser"><a href = "view_joinvolunteer.php" class="textadd">Join volunteer</a></button>'
	
?>
</table>

</body>
</html>
