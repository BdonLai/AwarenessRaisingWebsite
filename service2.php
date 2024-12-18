<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="haircuttingandtrimmingservices_page">
    <meta name="keywords" content="haircutting, trimming, services">
    <meta name="author" content="Rachel Chong">    
	<!--The viewport meta tag is used in web design to control how a webpage is displayed on different devices by adjusting the initial scale and width of the viewport.-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--This is my service, which is Haircutting and Trimming Services for sign language people-->
    <title>Haircutting and Trimming Services</title>
	<!--External css-->
    <link rel="stylesheet" type="text/css" href="style.css">
	<!--favicon-->
    <link rel="icon" type="image/x-icon" href="M.ico">
</head>

<body id="haircuttingandtrimmingservices_page">

<!--Header-->
<?php
include('assign2header.inc');

echo"
    <!-- Main content -->	

    <h1>Haircutting and Trimming Services</h1>
	<!--Section description-->
	<section class='services'>
		<!-- Image and description -->
		<div class = 'services_picture'>
			<figure>
				<img src='images/hair.jpg' alt='hair_pic'>
			</figure>
		</div>
		<br>
		<br>
		<!-- Service description -->
		<h2>🎉 Calling all members of the Sign Language Society! 🎉</h2>
		<!--Service description-->
		<dl>	

			<dt>Are you ready to embark on an extraordinary journey of style and self-expression? Look no further than our vibrant salon, where every haircut tells a unique story and every trim is a masterpiece in the making!</dt>
			
			<dd>At our cutting-edge establishment, communication is not just a language – it's an art form! Step into a world where understanding goes beyond words, where skilled barbers fluent in sign language transform your vision into reality with flair and finesse.</dd>
			
			<dt>Picture this: You walk in feeling ordinary, but you leave feeling like a star! Whether you're craving a classic look that stands the test of time or daring to dive into the latest trends, our talented team is here to make it happen.</dt>
			
			<dd>But wait, there's more! Our salon isn't just about hair – it's about creating unforgettable experiences. From the moment you step through our doors, you'll be greeted with warmth and enthusiasm, making every visit a delightful adventure.</dd>
			
			<dt>So why wait? Join us on a journey of style, creativity, and endless possibilities. Whether you're due for a touch-up or ready to unleash a whole new you, our salon is the place to be. Book your appointment today and let the magic begin! ✂️💫</dt>

		</dl>

	</section>

		<!-- Example hairstyle menu for users as a references-->
        <h2 class='menuh2'>Example hairstyle that we have provided:</h2>
        <div class='menu'>
			<!-- Hairstyle items -->
			<div class='menu-item'>
				<figure>
					<img src='images/classic-haircut-image.png' alt='Classic Haircut' caption='haircut'>
                    <figcaption><strong>Classic Haircuts: </strong> Timeless styles that never go out of fashion.<br><strong>Fee: </strong> Free of charge</figcaption>
                </figure>
            </div>
			
            <div class='menu-item'>
                <figure>
                    <img src='images/hot-towel-shave-image.jpg' alt='Hot Towel Shaves' caption='shaves'>
                    <figcaption><strong>Hot Towel Shaves: </strong> A luxurious experience for a clean shave.<br><strong>Fee: </strong> Free of charge</figcaption>
                </figure>
            </div>
			
            <div class='menu-item'>
                <figure>
                    <img src='images/bangs-image.jpeg' alt='Bangs' caption='bangs'>
                    <figcaption><strong>Bangs: </strong> Modern trends that frame the face with stylish bangs.<br><strong>Fee: </strong> Free of charge</figcaption>
                </figure>
            </div>
			
            <div class='menu-item'>
                <figure>
                    <img src='images/kids-cuts-image.jpg' alt='Kids’ Cuts' caption='kids'>
                    <figcaption><strong>Kids’ Cuts: </strong> Gentle and fun haircuts for the little ones.<br><strong>Fee: </strong> Free of charge</figcaption>
                </figure>
            </div>
			
        </div>
	
		<!-- Section for Why choose Us? -->
	<section class='level3'>
		<h2 class='whyus'>Why choose Us?</h2>
		
		<!-- A YouTube video shows a sign language person visiting a specialist hair salon. He prefers this salon to typical ones and have an excellent reputation there. -->
		<div class='video-container'>
		  <object type='application/x-shockwave-flash' data='https://www.youtube.com/v/Z6aKpoU0wg4' width='1200' height='500'>
			<param name='movie' value='https://www.youtube.com/v/Z6aKpoU0wg4'>
			<param name='allowFullScreen' value='true'>
			<param name='allowscriptaccess' value='always'>
			<param name='wmode' value='transparent'>
			<p>
			  <a href='https://www.youtube.com/watch?v=Z6aKpoU0wg4' target='_blank'>
				Watch on YouTube
			  </a>
			</p>
		  </object>
		</div>

		<!-- Section for describe the benefits of choosing our haircutting and trimming services -->
		<section class='first-row'>
			<div class='first-row-left'>
				<aside>
					<figure>
						<img src='images/communication.png' alt='com' caption='com'>
						<figcaption><h3>Communication Made Simple</h3></figcaption>
					</figure>
					<ol>
						<li>The time needed for an order by average depends on your order specifications and our workers try their best to deliver the best product in the fastest time</li>
					</ol>
				</aside>
			</div>
			
			<div class='first-row-right'>
				<aside>
					<figure>
						<img src='images/cutting.png' alt='cutting' caption='cutting'>
						<figcaption><h3>We have amazing cutting and tailoring service</h3></figcaption>
					</figure>
					<ol>
						<li>Our workers are experienced in the field and have been tailoring, measuring as well as cutting as a hobby ever since a young age</li>
					</ol>
				</aside>
			</div>
		</section>

		<section class='second-row'>
			<div class='second-row-left'>
				<aside>
					<figure>
						<img src='images/best.jpg' alt='recommendations' captin='recommendations'>
						<figcaption><h3>We have amazing recommendations</h3></figcaption>
					</figure>
					<ol>
						<li>Talk to any one of our workers and they will provide you with the most suitable and artistic idea for your piece</li>
					</ol>
				</aside>
			</div>
			
			<div class='second-row-right'>
				<aside>
					<figure>
						<img src='images/good.png' alt='high_quality' caption='quality'>
						<figcaption><h3>We provide high-quality products</h3></figcaption>
					</figure>
					<ol>
						<li>The products that were requested will be made with the best possible cloths and materials, with extremely good skills and techniques</li>
					</ol>
				</aside>
			</div>
		</section>
	</section>

	<!-- Section for Booking our haircutting and trimming services -->
    <section class='booking'>
        <h2>Book an appointment?</h2>
            <div class='booking-step'>
                <h4>Online Booking</h4>
					<p>We offer an easy-to-use online booking platform. Members of the society can visit our website and select their preferred date, time, and service. They’ll receive a confirmation email with all the details.</p>
				<!-- Click here will go to our form to book appointment -->
					<figure>
						<a href='enquiryservice.php' class='book-button'>Book now!</a>
					</figure>
            </div>
    </section>";

    include('assign2footer.inc');
    ?>


</body>

</html>
