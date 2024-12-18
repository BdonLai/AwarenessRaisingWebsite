<!DOCTYPE html>  <!--After click the page brief, it'll bring user to this page -->
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Member's Profile" />
	<meta name="keywords" content="Members, profile" />
	<meta name="author" content="Zaferah Banu "  />
	<title>Zaferah's Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="icon" type="image/x-icon" href="images/M.ico">
</head>

<body>
	<?php
	include('assign2header.inc');

	echo"
<br/>
<div class='top-profile'>
<h1>Zaferah's Profile</h1>

<div id='indiv_p1'>
	<div class='container'>
		<div class='card-img-p'>
			<img src='images/Z_pfp.jpg' alt='Zaferah's picture' class='c-img'>
		</div>
		
	<br/>
	</div>
	<h2>Zaferah Banu Binti Mohamed Shaik Fareed</h2>
	<h3>102779917</h3>
	<h3>Bachelor in Computer Science</h3>
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
			<td>Malay</td>
		
		</tr>
		<tr>
		
			<th>Birthday</th>
			<td>15 December 2004</td>
		
		</tr>
		<tr>
		
			<th>Birthplace</th>
			<td>Kuching, Sarawak</td>
		
		</tr>
		<tr>
			<th>Hometown</th>
			<td>I have been living in Kuching city for 4 years. Previously, i lived in Samarahan.</td>
		</tr>
		<tr>
		
			<th>Employment</th>
			<td>Student</td>
		
		</tr>
		<tr>
		
			<th>Interests</th>
			<td>Learn to codes</td>
		
		</tr>
	
		<tr>
		
			<th>Achievement</th>
			<td>none</td>
		</tr>
		<tr>
		
			<th rowspan='4'>Hobbies</th>
			<td>Listen to Musics, play piano, watching movies, explore new things</td>
 
		</tr>
	</table>
	
	<br/>
	
</div>
";

include('assign2footer.inc');

	  ?>

	
</body>
</html>