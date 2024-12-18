<!DOCTYPE html>
   <html lang="en">
      <head>
         <meta charset="utf-8" />
         <meta name="description" content="MSL Medical Context" />
         <meta name="keywords" content="Homepage" />
         <meta name="author" content="Brandon Lai"  />
         <title> Homepage</title>
         <link rel="stylesheet" type="text/css" href="style.css">
         <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
       </head>

   <body>
<?php

include 'assign2header.inc';

   echo"
   <div id='video-container1'>
   <video class='Sign_Language' loop autoplay muted playsinline>
      <source src='images/Sign.mp4' type='video/mp4'>
   </video>
   <div class='overlay-text'>Deaf Matters.</div>
</div>





<div id='section2index'>

<aside>

<img class='Introduction' src='images/SSD.webp' alt='Building'>

</aside> 

<div class='text1'>

<h1>About Us</h1>

<p>Welcome to the Sign Language Society, a vibrant community dedicated 
to promoting the understanding and use of sign language. 
Our mission is to create an inclusive environment where both the deaf and 
hearing communities can come together to learn, practice, 
and appreciate sign language. We offer a wide range of services 
as well as activities to bond with the deaf.</p>

<a href='profile.php' class='button'>Learn More</a>
</div>
</div>


<div id='Statistics_heading'>

<h2 >Statistics of MSL</h2>

</div>


<div class='stats-row'>

<div class='stat'>
<img class='image1' src='images/Visitors.png'>
<h2>1000+</h2>
<h3>Visitors</h3>
</div>

<div class='stat'>
<img class='image2' src='images/Funds.png'>
<h2>RM10000+</h2>
<h3>Funds Raised</h3>
</div>

<div class='stat'>
<img class='image3' src='images/Residents.png'>
<h2>200+</h2>
<h3>Deaf Residents</h3>

</div>

</div>

</div>


    <div class='list-container'>

      
        <aside class='Events'>

            <h3>Events</h3>

            <ul>
               <li>Needs of the Deaf Community Talk</li>
               <li>Charity Food Fair</li>
               <li>Marathon Event</li>
            </ul>

         <div>

            <a href='activities.php' class='button'>Learn More</a>

         </div>
        </aside>


        <div class='vertical-line'></div>

        <aside class='Latest_News'>

            <h3>Latest News</h3>
         
            <ul>
               <li>Fake donations cards about Sarawak Society for the deaf has been passed around<a href='https://www.facebook.com/story.php?story_fbid=811202161046544&id=100064703015019&mibextid=WC7FNe&rdid=Z9EAryYzs6ZJLzzq'>&rarr; Read Here</a></li>
               <li>Sarawak Society for the Deaf (SSD) is happy and honoured to be invited by MTPN and YMLM 
                  Sarawak to attend their UNITY CHARITY AND CULTURE at the Riverine Ballroom by Lok Thian on 13 January 2024.<a href='https://www.facebook.com/story.php?story_fbid=776845711148856&id=100064703015019&mibextid=WC7FNe&rdid=jleYCEml8J0BfhKN'>&rarr; Read Here</a></li>
               <li>Representatives from Medtech and Health Sdn Bhd donated four big boxes of face masks to SSD.<a href='https://www.facebook.com/story.php?story_fbid=774252278074866&id=100064703015019&mibextid=WC7FNe&rdid=EKVSicl15CVJVID8'>&rarr; Read Here</a></li>
            </ul>
        
         </aside>
      
    </div>

    
    <h3 id='KeyServices'>Key Services</h3>

    <div class='flip-cards'>

        <div class='flip-card'>
            <div class='flip-card-inner'>
                <div class='flip-card-front'>
                    <h3>Haircut and Trimming</h3>
                    <p>Come and experience haircut by the Deaf. They know which hairstyle suits you the best!</p>
                    <img src='images/haircut2.jpeg' alt='haircut'>
                </div>
                <div class='flip-card-back'>
                    <img src='images/Haircut.png' alt='Avatar' style='width:300px;height:300px;'>
                    <a href='service2.php' class='button'>Learn More</a>

                </div>
            </div>
        </div>
    
        <div class='flip-card'>
            <div class='flip-card-inner'>
                <div class='flip-card-front'>
                    <h3>Sewing and Alteration</h3>
                    <p>Our experienced deaf will be able to assist you with your tailoring needs. Craft or repair? No problem!
                     <img src'images/Sewing.jpg' alt='sewing'>
                    </p>
                </div>
                <div class='flip-card-back'>
                    <img src='images/Sewing.jpg' alt='Avatar' style='width:300px;height:300px;'>
                    <a href='service3.php' class='button'>Learn More</a>
                </div>
            </div>
        </div>
    
        <div class='flip-card'>
            <div class='flip-card-inner'>
                <div class='flip-card-front'>
                    <h3>Charity Car Wash</h3>
                    <p>Come and get your car cleaned up by our group of professional deaf members. Sit back, relax, and leave the dirt behind</p>
                    <img src='images/carwash1.webp' alt='Carwash'>
                </div>
                <div class='flip-card-back'>
                    <img src='images/Carwash.webp' alt='Avatar' style='width:300px;height:300px;'>
                    <a href='service4.php' class='button'>Learn More</a>
                </div>
            </div>
        </div>
    
        <div class='flip-card'>
            <div class='flip-card-inner'>
                <div class='flip-card-front'>
                    <h3>MSL BIM Class</h3>
                    <p>Our classes are conducted by the deaf and are done in small groups, tailored to suit individual progress.</p>
                    <img src='images/BIM.jpeg' alt='BIM'>
                </div>
                <div class='flip-card-back'>
                    <img src='images/BIM.webp' alt='Avatar' style='width:300px;height:300px;'>
                    <a href='service1.php' class='button'>Learn More</a>
                </div>
            </div>
        </div>
    
      </div>

      

";


include 'assign2footer.inc';

?>
</body>
</html>