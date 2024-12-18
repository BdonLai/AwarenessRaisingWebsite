<!DOCTYPE html>  <!--After click the page brief, it'll bring user to this page -->
<html lang="en">
<head>
    <!-- Meta tags -->
	<meta charset="utf-8">
	<meta name="description" content="Member's Profile">
	<meta name="keywords" content="Members, profile">
	<meta name="author" content="Rachel Chong">
	<!--This is my Profile page, my name is Rachel✨-->
	<title>Rachel's Profile</title>
	<!--The viewport meta tag is used in web design to control how a webpage is displayed on different devices by adjusting the initial scale and width of the viewport.-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--External css-->
	<link rel="stylesheet" href="style.css">
	<!--favicon-->
	<link rel="icon" type="image/x-icon" href="images/M.ico">
</head>

<body>
<!--Header-->
<?php

    include('assign2header.inc');
    
echo"
<!-- Profile -->
<div class='top-profile'>
<h1>Rachel Chong's Profile</h1>
</div>

<div id='indiv_p3'>
	<div class='container'>
		<!-- My profile image -->
		<div class='card-img-p'>
			<img src='images/rachel.jpg' alt='Rachel's picture' class='c-img'>
		</div>
		
	<br/>
	</div>
	<h2>Name: Rachel Chong</h2>
	<h3>Student id: 102784694</h3>
	<h3>Course: Bachelor in Computer Science</h3>
	<br/>
	
	<table id='table'>
		<tr>
		
			<th>Age</th>
			<td>20</td>
		
		</tr>
		<tr>
		
			<th>Gender</th>
			<td>Female</td>
		
		</tr>
		<tr>
		
			<th>Ethnicity</th>
			<td>Chinese</td>
		
		</tr>
		<tr>
		
			<th>Birthday</th>
			<td>22/12/2004</td>
		
		</tr>
		<tr>
		
			<th>Birthplace</th>
			<td>Kuching, Sarawak</td>
		
		</tr>
		<tr>
			<th>Hometown</th>
			<td>Kuching, Sarawak</td>
		</tr>
		<tr>
		
			<th>Employment</th>
			<td>Student</td>
		
		</tr>
		<tr>
		
			<th>Interests</th>
			<td>I thoroughly enjoy discovering novel experiences and possess a natural curiosity that fuels my desire to learn and explore.</td>
		
		</tr>
	
		<tr>
		
			<th>Achievement</th>
			<td>none</td>
		</tr>
		<tr>
		
			<th>Hobbies</th>
			<td>Sleeping and watching dramas</td>
 
		</tr>
	</table>
	
	<br/>
	
</div>
";

include('assign2footer.inc');
?>

</body>

</html>