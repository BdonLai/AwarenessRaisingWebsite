<!DOCTYPE html>
   <html lang="en">
      <head>
         <meta charset="utf-8" />
         <meta name="description" content="MSL Medical Context" />
         <meta name="keywords" content="Homepage" />
         <meta name="author" content="Brandon Lai"  />
         <title> Homepage</title>
         <link rel="stylesheet" type="text/css" href="styles/style.css">
         <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
       </head>


<?php
      echo"
      <header>
            <figure>
                  <img class='logo' alt='Malaysian Sign Language Logo' id='msl_logo' src='images/MSL_logo.png'/>
            </figure>

         <nav>
            <ul>
               <li><a href='assign2index.php'>Home</a></li>
               <li class='dropdown'>
                  <a href='#' class='dropbtn'>Services <i class='fas fa-caret-down'></i></a>
                  <div class='dropdown-content'>
                     <ul>
                        <li><a href='services.php'>Services page</a></li>
                        <li><a href='service1.php'>BIM Class</a></li>
                        <li><a href='service2.php'>Haircut and Trimming</a></li>
                        <li><a href='service3.php'>Sewing and Alteration</a></li>
                        <li><a href='service4.php'>Charity Car Wash</a></li>
                     </ul>
                  </div>
               </li>		
               <li><a href='activities.php'>Activities</a></li>
               <li class='dropdown'>
                  <a href='#' class='dropbtn'>Forms <i class='fas fa-caret-down'></i></a>
                  <div class='dropdown-content'>
                     <ul>
                        <li><a href='enquiryservice.php'>Enquiry for Services Form</a></li>
                        <li><a href='Joinvolunteer.php'>Volunteer Form</a></li>
                        <li><a href='FAQ.php'>FAQ page</a></li>
                     </ul>
                  </div>
               </li>		
               <li class='dropdown'>
                  <a href='#' class='dropbtn'>Profiles <i class='fas fa-caret-down'></i></a>
                  <div class='dropdown-content'>
                     <ul>
                        <li><a href='profile.php'>Profiles page</a></li>
                        <li><a href='aeron.php'>Aeron Liu</a></li>
                        <li><a href='brandon.php'>Brandon Lai</a></li>
                        <li><a href='rachel.php'>Rachel Chong</a></li>
                        <li><a href='seow_zi_jie.php'>Seow Zi Jie</a></li>
                        <li><a href='zaferah.php'>Zaferah</a></li>
                     </ul>
                  </div>	
               </li>		
               <li><a href='enhancement1.php'>Enhancement</a></li>
            </ul>
         </nav>
         <div class='user-actions'>
            <a href='login.php' class='login'>Login</a>
            <a href='signup.php' class='signup'>Sign up</a>
         </div>
         
         </header>"
      
?>

</html>

