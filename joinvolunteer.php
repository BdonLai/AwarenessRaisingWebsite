<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="volunteer_page">
    <meta name="keywords" content="volunteer, msl, ssd">
    <meta name="author" content="Rachel Chong">    
	<!--The viewport meta tag is used in web design to control how a webpage is displayed on different devices by adjusting the initial scale and width of the viewport.-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--This is volunteer form for people who interested to join us as volunteer❤️-->
    <title>Volunteer Form</title>
	<!--External css-->
    <link rel="stylesheet" type="text/css" href="style.css">
	<!--favicon-->
	<link rel="icon" type="image/x-icon" href="M.ico">
</head>

<body id="volunteer_page">

<!--Header-->
    <?php include 'assign2header.inc'; ?>

<?php include ('connection_volunteer.php'); ?>
<?php include ('databasev.php'); ?>

<section class="joinv">
    <h1 class="Joinvolunteer">Join Volunteer</h1>
	<form id="volunteerForm" method="POST" action="joinvolunteer_process.php" novalidate = "novalidate">
      <fieldset>
		<!-- First Name -->
        <label for="firstname">First Name:<span>*</span></label>
        <input type="text" id="firstname" name="firstname" maxlength="25" pattern="[A-Za-z]+" required>
        <br>

        <!-- Last Name -->
        <label for="lastname">Last Name:<span>*</span></label>
        <input type="text" id="lastname" name="lastname" maxlength="25" pattern="[A-Za-z]+" required>
        <br>

		<!-- Age -->
		<label for="age">Age:<span>*</span></label>
		<input type="text" id="age" name="age" maxlength="3" pattern="[0-9]+" required>
        <br />

        <!-- Email Address -->
        <label for="email">Email Address:<span>*</span></label>
        <input type="email" id="email" name="email" required>
        <br />

        <!-- Address -->
        <fieldset>
			<legend>Address</legend>
			<!-- Street Address -->
			<label for="address">Street Address:<span>*</span></label>
			<input type="text" id="address" name="address" maxlength="40" required>
			<br>

            <!-- City/Town -->
            <label for="city">City/Town:<span>*</span></label>
            <input type="text" id="city" name="city" maxlength="20" required>
            <br>

            <!-- State -->
            <label for="state">State:<span>*</span></label>
            <select id="state" name="state" required>
                <option value="" disabled selected>Choose your state</option>                
				<option value="Federal Territory of Kuala Lumpur">Federal Territory of Kuala Lumpur</option>
				<option value="Federal Territory of Labuan">Federal Territory of Labuan</option>
				<option value="Federal Territory of Putrajaya">Federal Territory of Putrajaya</option>
				<option value="Johor">Johor</option>
				<option value="Kedah">Kedah</option>
				<option value="Kelantan">Kelantan</option>
				<option value="Malacca">Malacca</option>
				<option value="Negeri Sembilan">Negeri Sembilan</option>
				<option value="Pahang">Pahang</option>
				<option value="Perak">Perak</option>
				<option value="Perlis">Perlis</option>
				<option value="Penang">Penang</option>
				<option value="Sabah">Sabah</option>
				<option value="Sarawak">Sarawak</option>
				<option value="Selangor">Selangor</option>
				<option value="Terengganu">Terengganu</option>
            </select>
            <br>

            <!-- Postcode -->
            <label for="postcode">Postcode:<span>*</span></label>
            <input type="text" id="postcode" name="postcode" pattern="[0-9]{5}" maxlength="5" required>
            <br>
        </fieldset>

        <!-- Phone Number -->
        <label for="phonenumber">Phone Number:<span>*</span></label>
        <input type="tel" id="phonenumber" name="phonenumber" maxlength="10" placeholder="Example: 0123456789" required>
        <br>

		<label for="volunteerrole">Volunteer Role:<span>*</span></label>
		<div class="dropdown">
		  <select id="volunteerrole" name="volunteerrole" required>
			<option value="" disabled selected>Select Volunteer Role</option>
			<optgroup class="msl" id="msl" label="Malaysian Sign Language (MSL)">
			  <option value="msl-interpreter">Interpreter</option>
			  <option value="msl-tutor">Tutor</option>
			  <option value="msl-volunteer">MSL Volunteer</option>
			</optgroup>
			<optgroup class="ssd" id="ssd" label="Sarawak Society for the Deaf (SSD)">
			  <option value="ssd-admin">Administrative Support</option>
			  <option value="ssd-event">Event Organizer</option>
			  <option value="ssd-fundraiser">Fundraiser</option>
			  <option value="ssd-volunteer">SSD Volunteer</option>
			</optgroup>
		  </select>
		</div>
		
        <br>
		
		<p>
			<label for="start">When can you start working?</label> 
			<input type="date" id="start" name="start" value="2024-01-01" min="2024-01-01" max="2024-12-31" /> to 
			<input type="date" id="end" name="end" value="2024-01-01" min="2024-01-01" max="2024-12-31" /> <br />
		</p>

        <!-- Submit Button -->
        <button type="reset" id="reset" value="reset">Reset</button>
		<button type="submit" id="submit" value="submit">Submit</button>
	</fieldset>
	</form>
	<?php include("backtotop.php"); ?>
</section>

<?php include("assign2footer.inc"); ?>

</body>

</html>
