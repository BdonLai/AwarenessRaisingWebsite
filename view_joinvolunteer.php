<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="volunteer_page">
    <meta name="keywords" content="volunteer, msl, ssd">
    <meta name="author" content="Brandon Lai">    
    <!--The viewport meta tag is used in web design to control how a webpage is displayed on different devices by adjusting the initial scale and width of the viewport.-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--This is volunteer form for people who interested to join us as volunteer❤️-->
    <title>Volunteer Form</title>
    <!--External css-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--favicon-->
    <link rel="icon" type="image/x-icon" href="M.ico">
</head>

<body>
    <h1>Volunteer Registration page</h1>
    <div class="admin-dashboard">
        <button class="adduser"><a href="joinvolunteer.php" class="textadd">Add User</a></button>

        <table border="1" class="database">
            <tr>
                <th>No</th>
                <th width="150px">First Name</th>
                <th width="150px">Last Name</th>
                <th width="80px">Age</th>
                <th width="80px">Email</th>
                <th width="80px">Phone Number</th>
                <th width="80px">Volunteer Role</th>
                <th width="80px">Start date</th>
                <th width="80px">End date</th>
            </tr>

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

		// Execute query to create table
		mysqli_query($conn, $sql);

		// SQL query to select all records from the joinvolunteer_table
		$sql = "SELECT * FROM joinvolunteer_table";

		// Executing the SQL query and storing the result
		$result = mysqli_query($conn, $sql);

		if ($result) {
			while ($row = mysqli_fetch_assoc($result)) {
				$id = $row['id'];
				$firstname = $row['firstname'];
				$lastname = $row['lastname'];
				$age = $row['age'];
				$email = $row['email'];
				$phonenumber = $row['phonenumber'];
				$role = $row['volunteerrole'];
				$start = $row['start'];
				$end = $row['end'];

				echo "<tr>
					<th scope='row'>$id</th>
					<td>$firstname</td>
					<td>$lastname</td>
					<td>$age</td>
					<td>$email</td>
					<td>$phonenumber</td>
					<td>$role</td>
					<td>$start</td>
					<td>$end</td>
				</tr>";
			}
		} else {
			echo "<tr><td colspan='10'>0 results</td></tr>";
		}

		mysqli_close($conn);
		?>



        </table>
        <br><br>
		<!-- Change this line -->
		<button class="adduser"><a href="view_enquiryservice.php" class="textadd">Enquiry Service</a></button>
    </div>
</body>
</html>