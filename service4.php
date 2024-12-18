<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Charity car wash" />
    <meta name="keywords" content="Charity, car, wash" />
    <meta name="author" content="Aeron" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity Car Wash</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="M.ico">
</head>
<body id="charity_car_wash_service_page">
<?php
include('assign2header.inc');
echo'
<br>
<br>
<h1>Charity Car Wash</h1>
    <section class="services">
    <div class="services_picture">
         <figure>
            <img src="images/Car_Wash.webp" alt="Wash_car_image" caption="was">
         </figure>
     </div>
     <br>
     <br>
     <h2>🎉 Calling all members of the Sign Language Society! 🎉</h2>
     <br>
        <dl>
           
        <dt> Welcome to our Charity Car Wash Services! 🚗💦</dt>

        <dd>We are a dedicated team of volunteers passionate about making a difference in our community. Our charity car wash service is more than just a car wash - it’s a commitment to giving back.</dd>
            
        <dd>Our services are professionally managed and executed, ensuring your car is sparkling clean while you contribute to a noble cause. We use eco-friendly products that are gentle on your car and kind to the environment.</dd>
            
        <dd>Every car wash helps us raise funds for various charitable causes that we support. By choosing our services, you’re not just getting a clean car, but also contributing to the betterment of our community.</dd>
            
        <dd>Join us in making a difference, one car wash at a time. Thank you for your support! 🙏</dd>
        </dl>
    </section>

<br>
<br>

        <h2 class="menuh2">Example service that we have provided:</h2>
        <div class="menu">
            <div class="menu-item">
                <figure>
                    <img src="images/Wash_Car.webp" alt="Wash Car" caption="wash">
                    <figcaption><strong>Wash Car: </strong> Is your car in need of a good clean? Look no further! At Sarawak society for the deaf, we offer top-notch car wash services that will leave your car looking brand new!<br><strong>Fee: </strong> RM 8.00</figcaption>
                </figure>
            </div>
            <div class="menu-item">
                <figure>
                    <img src="images/Vaccum car.jpg" alt="Vaccum Car" caption="Vaccum">
                    <figcaption><strong>Vaccum Car: </strong> Does your car interior need a deep clean? Sarawak society for the deaf is here to help! We specialize in car vacuuming services that will leave your car’s interior spotless and fresh!<br><strong>Fee: </strong> RM 6.00</figcaption>
                </figure>
            </div>
            <div class="menu-item">
                <figure>
                    <img src="images/Carriage Wash.jpeg" alt="Carriage Wash" caption="wash">
                    <figcaption><strong>Carriage Wash: </strong> Is your horse-drawn carriage looking a bit dusty? Sarawak society for the deaf is at your service! We specialize in carriage wash services that will restore the shine to your carriage!<br><strong>Fee: </strong> RM 6.00</figcaption>
                </figure>
            </div>
            <div class="menu-item">
                <figure>
                    <img src="images/Polish Car.webp" alt="Polish Car" caption="polish">
                    <figcaption><strong>Polish Car: </strong> Is your car’s shine fading away? Bring it back to life with Sarawak society for the deaf Finish Car Polishing Services! We specialize in car polishing that will make your car look as good as new!<br><strong>Fee: </strong> RM 99.00</figcaption>
                </figure>
            </div>
        </div>
    
<section class="level3">
    <h2 class="whyus">Why choose Us?</h2>

    <div class="video-container">
    <object width="560" height="315" data="images/Charity_Car_Wash_Video.mp4">
        <param name="movie" value="video/Charity_Car_Wash_Video.mp4g4">
        <param name="allowFullScreen" value="true">
        <param name="allowscriptaccess" value="always">
        <param name="wmode" value="transparent">
        <a href="images/Charity_Car_Wash_Video.mp4">Link to the video</a>
    </object>
    </div>
    
    <section class="first-row">
        <div class="first-row-left">
            <aside>
                <figure>
                    <img src="images/valuable_service.jpeg" alt="valuable service" caption="service">
                    <figcaption><h3>valuable service</h3></figcaption>
                </figure>
                <ol>
                    <li>By offering car washing services to the community in exchange for donations, you provide a valuable service.</li>
                </ol>
            </aside>
        </div>
        <div class="first-row-right">
            <aside>
                <figure>
                    <img src="images/raise_funds.jpeg" alt="raise funds" caption="funds">
                    <figcaption><h3>raise funds</h3></figcaption>
                </figure>
                <ol>
                    <li>It’s an effective way to raise funds for your cause</li>
                </ol>
            </aside>
        </div>
    </section>

    <section class="second-row">
        <div class="second-row-left">
            <aside>
                <figure>
                    <img src="images/minimal_investment.jpeg" alt="investment" caption="invest">
                    <figcaption><h3>Minimal Investment</h3></figcaption>
                </figure>
                <ol>
                    <li> It requires minimal upfront investment, making it a cost-effective fundraising idea.</li>
                </ol>
            </aside>
        </div>
        <div class="second-row-right">
            <aside>
                <figure>
                    <img src="images/boost_morale.jpeg" alt="moral" caption="moral">
                    <figcaption><h3>Boost Moral</h3></figcaption>
                </figure>
                <ol>
                    <li>It’s a fun and engaging activity that can boost morale among volunteers.</li>
                </ol>
            </aside>
        </div>
    </section>


</section>

    
    <section class="booking">
        <h2>Book an appointment?</h2>
            <div class="booking-step">
                <h4>Online Booking</h4>
                <p>We offer an easy-to-use online booking platform. Members of the society can visit our website and select their preferred date, time, and service. They’ll receive a confirmation email with all the details.</p>
                <figure>
                    <a href="enquiryservice.php" class="book-button">Book now!</a>
                </figure>
            </div>
    </section>
';

include('assign2footer.inc');
?>
</body>

</html>
