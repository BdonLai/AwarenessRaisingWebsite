<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FAQ" />
	<meta name="keywords" content="Frequently, asked, question" />
	<meta name="author" content="Zi Jie"  />
    <title>Sign Language FAQ</title>
    <link rel="stylesheet" href="style.css">
    
    <link rel="icon" type="image/x-icon" href="M.ico">
</head>


   
    <?php

    include ('assign2header.inc');
    
echo "<div class='faq-container'>
    <h1>Frequently Asked Questions</h1>
    <hr>
    <div class='faq-item'>
        <input type='checkbox' class='faq-toggle' id='faq1'>
        <label for='faq1' class='question'>What is sign language? &#10148;</label>
        <p class='answer'>Sign language is a visual language that uses hand gestures, facial expressions, and body movements to communicate.</p>
    </div>

    <div class='faq-item'>
        <input type='checkbox' class='faq-toggle' id='faq2'>
        <label for='faq2' class='question'>How many sign languages are there? &#10148;</label>
        <p class='answer'>There are hundreds of sign languages used around the world, each with its own grammar and vocabulary.</p>
    </div>

    <div class='faq-item'>
        <input type='checkbox' class='faq-toggle' id='faq3'>
        <label for='faq3' class='question'>Is sign language universal? &#10148;</label>
        <p class='answer'>No, sign languages are not universal. Different countries and regions have their own sign languages.</p>
    </div>

    <div class='faq-item'>
        <input type='checkbox' class='faq-toggle' id='faq4'>
        <label for='faq4' class='question'>Can anyone learn sign language? &#10148;</label>
        <p class='answer'>Yes, anyone can learn sign language regardless of age, hearing ability, or linguistic background.</p>
    </div>
</div>";



include('assign2footer.inc');

?>
</body>
</html>
