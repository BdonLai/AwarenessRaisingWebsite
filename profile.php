<!DOCTYPE html>  <!--Create an overview profile, so that when click it will link to another page, bigger view of the individual profile-->
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Member,s Profile" />
	<meta name="keywords" content="Members, profile" />
	<meta name="author" content="Zaferah Banu "  />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profiles</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" type="image/x-icon" href="images/M.ico">
	<!--Swiper CSS-->
	
</head>

<body class ="profilesphp">
<!--Header and Navigation Bar-->
<header>	
	<section class ="profilesphp">
	<?php

	include('assign2header.inc');
	echo'

<br/>
<section class = "profiles2php">
<div id="top-profile">
	<!--Our group informations-->
	<h1>Members Profile</h1>
	
	<!--Background and aim-->
	<br/>
	<p>Welcome to our webpage dedicated to the Malaysian Sign Language! We are a group of enthusiastic students from Swinburne Sarawak, who are dedicated to building a welcoming online community for Sarawaks deaf population. Our teams goal is to increase accessibility for deaf people to digital material by bridging communication gaps using a combination of technical expertise, creativity, and empathy.<p>
	
</div>
<!--Cards-->
<div id="shell">
				<!--Cards-->
					
					<div class="card-cont">
						<h2 class="name">Brandon Lai</h2>
						<img class="profileimage" src="images/B_pfp.jpeg">
						<p class="description">I am happy to assist my teamates and help practice problem solving</p>
						<a href="brandon.php"><button class="button">View More</button></a>
					</div>
				
				
					
					<div class="card-cont">
						<h2 class="name">Aeron Liu</h2>
						<img class="profileimage" src="images/Aeron.jpg">
						<p class="description">I am in my second year and I enjoy my student life</p>
						<a href="aeron.php"><button class="button">View More</button></a>
					</div>
			
					<div class="card-cont">
						<h2 class="name">Rachel Chung</h2>
						<img class="profileimage" src="images/rachel.jpg">
						<p class="description">I like to learn and be curious about the world</p>
						<a href="rachel.php"><button class="button">View More</button></a>
					</div>


					
					<div class="card-cont">
						<h2 class="name">Seow Zi Jie</h2>
						<img class="profileimage" src="images/Zi_Jie.jpg">
						<p class="description">I am thankful to for my friends who are in the same group with me</p>
						<a href="seow_zi_jie.php"><button class="button">View More</button></a>
					</div>

				

					<div class="card-cont">
						<h2 class="name">Zaferah Banu</h2>
						<img class="profileimage" src="images/Z_pfp.jpg">
						<p class="description">I am greateful to be part of this group and to create this website.</p>
						<a href="zaferah.php"><button class="button">View More</button></a>
					</div>

</div>

<hr/>
<div class="bpou">
	<a href="Joinvolunteer.php">Be part of us!</a>
	<p>Click to join our volunteer and community by filling out the forms.</p>
<br/>
</div>

</section>

<!--Footer starts here-->
<hr/>
';

include('assign2footer.inc');
?>
</section>
<body>


</html>