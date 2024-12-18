<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="volunteer_page">
    <meta name="keywords" content="user, msl, ssd">
    <meta name="author" content="Rachel Chong, Brandon Lai">    
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
    <h1>Sign Language Society</h1>
    <h2>User Confirmation page</h2>





    <?php
// session_start();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST['email']) && isset($_POST['password'])) {
//         $email = $_POST['email'];
//         $password = $_POST['password'];

//         $servername = "localhost";
//         $username = "root";
//         $password_db = "";
//         $dbname = "Sign_Language_Society_MSL";

//         // Create connection
//         $conn = mysqli_connect($servername, $username, $password_db, $dbname);

//         // Check connection
//         if (!$conn) {
//             die("Connection failed: " . mysqli_connect_error());
//         }

//         // Prepare and execute the query to fetch user data by email
//         $stmt = $conn->prepare("SELECT * FROM signup_table WHERE email = ?");
//         $stmt->bind_param("s", $email);
//         $stmt->execute();
//         $result = $stmt->get_result();

//         // Check if user exists and verify password
//         if ($result->num_rows == 1) {
//             $user = $result->fetch_assoc();
//             if (password_verify($password, $user['password'])) {
//                 // Password is correct, log in the user
//                 $_SESSION['email'] = $email;
//                 // Redirect to user profile or dashboard
//                 header("Location: login.php");
//                 exit();
//             } else {
//                 // Password is incorrect
//                 echo "Incorrect password.";
//             }
//         } else {
//             // User with provided email doesn't exist
//             echo "User not found.";
//         }

//         // Close connections
//         $stmt->close();
//         $conn->close();
//     } else {
//         echo "Missing fields.";
//     }
// }
?>


<form id="Confirmform">
<fieldset>
    <legend>Booking Details</legend>
    <p>Welcome</p>
    <p>Email Address: <?php echo htmlspecialchars($email); ?></p>
</fieldset>
</form>

<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "Sign_Language_Society_MSL";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Check if the user already exists
// $stmt = $conn->prepare("SELECT * FROM signup_table WHERE email = ?");
// $stmt->bind_param("s", $email);
// $stmt->execute();
// $stmt->store_result();

// if ($stmt->num_rows > 0) {
//     echo "User already exists.";
//     $stmt->close();
//     $conn->close();
// } else {
//     $stmt->close();

//     // Insert new user
//     $stmt = $conn->prepare("INSERT INTO signup_table ( email, password) VALUES (?, ?, ?)");
//     $stmt->bind_param("sss", $email, $password);

//     if ($stmt->execute()) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $stmt->error;
//     }

//     $stmt->close();
//     $conn->close();
// }
?>
<?php

$valid_email = 'admin@gmail.com';
$valid_password = 'admin';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted username and password
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $valid_email && $password === $valid_password) {
        // Credentials are correct, redirect to the success page
        header("Location: view_joinvolunteer.php");
        exit();

    }

}
?>



</body>
</html>
