<!DOCTYPE html>  <!--After click the page brief, it'll bring user to this page -->
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Member's Profile" />
	<meta name="keywords" content="Members, profile" />
	<meta name="author" content="Brandon Lai"  />
	<title>Brandon's Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="icon" type="image/x-icon" href="images/M.ico">
</head>

<body>
	<?php

   include ('assign2header.inc');

echo"

<br/>
<di class='top-profile'>
<h1>Brandon Lai's Profile</h1>

<div id='indiv_p2'>
	<div class='container'>
		<div class='card-img-p'>
			<img src='images/B_pfp.jpeg' alt='Brandon's picture' class='c-img'>
		</div>
		
	<br/>
	</div>
	<h2>Name: Brandon Lai Bao Quan</h2>
	<h3>Student id: 102787664</h3>
	<h3>Course: Computer Science</h3>
	<br/>
	
	<table id='table'>
		<tr>
		
			<th>Age</th>
			<td>20 years old</td>
		
		</tr>
		<tr>
		
			<th>Gender</th>
			<td>Male</td>
		
		</tr>
		<tr>
		
			<th>Ethnicity</th>
			<td>Chinese</td>
		
		</tr>
		<tr>
		
			<th>Birthday</th>
			<td>05/06/2004</td>
		
		</tr>
		<tr>
		
			<th>Birthplace</th>
			<td>Timberland Medical Center, Jalan Rock, Kuching</td>
		
		</tr>
		<tr>
			<th>Hometown</th>
			<td>I was born and raised in Kuching Sarawak and I have been really grateful to be a part of this peaceful society compared to other places</td>
		</tr>
		<tr>
		
			<th>Employment</th>
			<td>Student</td>
		
		</tr>
		<tr>
		
			<th>Interests</th>
			<td>I like to read about tech and engineering books or magazines such as IET magazines or coding books. I liked movies that helped me to learn computer science, and I do not play any games. I enjoy lofi music because it reminds me of my dreams. </td>
		
		</tr>
	
		<tr>
		
			<th>Achievement</th>
			<td> I have won Consolation prize in Primary school Science Competition when I was 9 Years old and Consolation Prize in Secondary school's Futsal Competition Inter-school when I was 14 Years Old </td>
		</tr>
		<tr>
		
			<th>Hobbies</th>
			<td>Starting from last year I have a hobby to code and watching movies over the sem breaks.</td>
 
		</tr>
	</table>
	
	<br/>
	
</div>
";

   include ('assign2footer.inc');

?>


</body>
</html>