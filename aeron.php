<!DOCTYPE html>  <!--After click the page brief, it'll bring user to this page -->
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Member's Profile" />
    <meta name="keywords" content="Members, profile" />
    <meta name="author" content="Zaferah Banu "  />
    <title>Aeron Liu's Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/M.ico">
</head>

<body><?php
    include('assign2header.inc');
    echo"
<br/>
<div class='top-profile'>
<h1>Aeron Liu's Profile</h1>

<div id='indiv_p5'>
    <div class='container'>
        <div class='card-img-p'>
            <img src='images/Aeron.jpg' alt='Aeron's picture' class='c-img'>
        </div>
        
    <br/>
    </div>
    <h2>Aeron Liu Yun Chiang</h2>
    <h3>102769264</h3>
    <h3>Computer Science</h3>
    <br/>
    
    <table id='table'>
        <tr>
        
            <th>Age</th>
            <td>22</td>
        
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
            <td>3 April 2002</td>
        
        </tr>
        <tr>
        
            <th>Birthplace</th>
            <td>Serian, Sarawak</td>
        
        </tr>
        <tr>
            <th>Hometown</th>
            <td>Simunjan, Sarawak</td>
        </tr>
        <tr>
        
            <th>Employment</th>
            <td>Student</td>
        
        </tr>
        <tr>
        
            <th>Interests</th>
            <td>Build Pc</td>
        
        </tr>
    
        <tr>
        
            <th>Achievement</th>
            <td>none</td>
        </tr>
        <tr>
        
            <th>Hobbies</th>
            <td>Sleep and gaming</td>
 
        </tr>
    </table>
    
    <br/>
    
</div>";

include('assign2footer.inc');

?>
</body>
</html>
