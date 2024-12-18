<!DOCTYPE html>
   <html lang="en">
      <head>
         <meta charset="utf-8" />
         <meta name="description" content="MSL Medical Context" />
         <meta name="keywords" content="MSL, Medical, Context" />
         <meta name="author" content="Brandon Lai"  />
         <title>Services</title>
         <link rel="stylesheet" type="text/css" href="style.css">
         <link rel="icon" type="image/x-icon" href="M.ico">
       </head>

       <body>

       <?php 

       include 'assign2header.inc';
       
       echo"

   <h1 class='servicespage'>Services</h1>



   <section class='section02'>

   <div id='section2'>

      <aside>
         <figure>
   
         <img class='Introduction' src='images/trimming.webp' alt='trimming' caption='trimming'>

      </figure>
      </aside> 
   
      <div class='text1'>
   
         <h1>Haircut and Trimming</h1>
   
         <p>Unleash Your Style with Our Signature Haircuts and Trims!
            Step into a world where style meets sophistication. Our expert stylists are masters at their craft, trained to 
            provide haircuts and trims that not only suit your features but also align with the latest trends. 
            So why wait? Book an appointment today and let us
            help you discover the best version of yourself. Your journey to an incredible haircut and trim begins here!</p>
   
            <a href='service2.php' class='button'>Learn More</a>
      </div>
   </div>
   </section>


      <section class='section03'>
         <div id='section3'>

            <aside>
              <h1>Malaysia Sign Language (MSL) BIM class</h1>
                  <p>
                     Unlock a New World of Communication with Our Malaysia Sign Language BIM Class!
                     Dive into the fascinating world of non-verbal communication with our comprehensive BIM Sign Language class.
                     Whether you’re learning out of curiosity, for a loved one, or to broaden your communication skills, 
                     our Sign Language class is the perfect place to start.
                  </p>
      
                  <a href='service1.php' class='button'>Learn More</a>
                  
            </aside> 
         
            <div class='text1'>
               <figure>
                 <img class='Introduction2' src='images/BIMclass.webp' alt='BIMclass' caption='BIMclass'>
               </figure>
            </div>
                  
         </div>
               
      </section>

      <br><br><br><br>

      <section class='section04'>
            
         <div id='section4'>

            <aside>
               <figure>
               <img class='Introduction3' src='images/carwash2.webp' alt='carwash' caption='carwash'>
             </figure>
            </aside> 
         
            <div class='text1'>
         
               <h1>Charity Car Wash</h1>
         
               <dl>
                  <dt>Get your car sparkling clean and support a great cause at the same time! </dt>
                  <dd>Our Charity Car Wash event is more than just a regular car wash - it’s a fun-filled day dedicated to giving back to the community.
                  Every cent raised from this event goes directly to our chosen charity. So, not only will you drive away with a clean car, 
                  but you’ll also be contributing to a worthy cause.</dd>
               </dl>
         
                  <a href='service4.php' class='button'>Learn More</a>
            </div>

         </div>
      </section>

   <br><br><br><br><br><br>


      <section class='section05'>
         <div id='section5'>

            <aside>
              <h1>Sewing and Alteration</h1>
                  <dl>
                     <dd>Welcome to our Sewing and Alteration Service </dd>
                     <dt>We understand that every body is unique, and off-the-rack clothing often falls short of fitting perfectly. 
                     At our Sewing and Alteration Service, we combine traditional techniques with modern styling to give your clothes a new lease on life.</dt> 
                  </dl>
      
                  <a href='service3.php' class='button'>Learn More</a>
                  
            </aside> 
         
            <div class='text1'>
               <figure>
                 <img class='Introduction4' src='images/alteration.webp' alt='sewing' caption='sewing'>
         </figure>
            </div>
                  
         </div>
               
      </section>


      <hr class='servicesLine'>

      <h2 class='Location'>Our Location</h2>
            <br>

      <section class='LocationSect'>
         <div id='sectionLocation'>

            <aside>
         
               <object width='600' height='450' data='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9015.461672949701!2d110.343636!3d1.524002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fba76f975981d9%3A0x134cacac64b7cb53!2sSarawak%20Society%20for%20the%20Deaf%20(Whatsapp%20only)!5e1!3m2!1sen!2smy!4v1711456325379!5m2!1sen!2smy' style='border:0;'>
                  <param name='allowfullscreen' value='true'>
                  <a href='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9015.461672949701!2d110.343636!3d1.524002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fba76f975981d9%3A0x134cacac64b7cb53!2sSarawak%20Society%20for%20the%20Deaf%20(Whatsapp%20only)!5e1!3m2!1sen!2smy!4v1711456325379!5m2!1sen!2smy'>Link to the map</a>
              </object>
              
            </aside> 
         
            <div class='text1'>
         
               <h1>Office Operation Hours</h1>
         
               <ol>
                  <li>Monday-Friday <span class='OpeningTime'>(8am-5pm)</span><br></li>
                  <li>Saturday <span class='OpeningTime'>(9am-5pm)</span><br></li>
                  <li>Sunday <span class='OpeningTime'>Closed</span><br></li>
               </ol>
            </div>

         </div>
      </section>";

      include 'assign2footer.inc';
   ?>
   </body>

</html>