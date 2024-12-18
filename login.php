<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="login_page">
    <meta name="keywords" content="login, users, account">
    <meta name="author" content="Rachel Chong">  
    <!--The viewport meta tag is used in web design to control how a webpage is displayed on different devices by adjusting the initial scale and width of the viewport.-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--This is volunteer form for people who interested to join us as volunteer❤️-->
    <title>Volunteer Form</title>
    <!--External css-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--favicon-->
    <link rel="icon" type="image/x-icon" href="M.ico">
</head>

<body id="login_page">

<!--Header-->

    <?php include 'assign2header.inc'; ?>


<section>
        <div class="wrapper">
            <div class="login-form">
                <div class="title">
                    <h1>Login</h1>
                </div>
                <form id="loginForm" method="post" action="confirm.php">
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <hr>
                        <div class="social-login">
                            <p>Or login with:</p>
                            <ul>
                                <li><a href="https://www.facebook.com/"><img src="images/facebook.png" alt="Facebook"></a></li>
                                <li><a href="https://accounts.google.com/"><img src="images/google.png" alt="Google"></a></li>
                                <li><a href="https://www.instagram.com/"><img src="images/instagram.png" alt="Instagram"></a></li>
                            </ul>
                        </div>
                        <div class="text"><a href="forgot-password.php">Forgot password?</a></div>
                        <div class="button input-box">
                            <input type="submit" value="Submit">
                        </div>
                        <div class="text sign-up-text">Don't have an account? <a href="signup.php">Sign up now</a></div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    

    <?php include("assign2footer.inc"); ?>

</body>
</html>
