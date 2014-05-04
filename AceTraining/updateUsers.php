<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Profile</title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="styles/style.css">
	<script src="scripts/script.js"></script>
</head>
<body>
	<header>
		<?php
		require('logic/headerBar.php');
		?>
	</header>
	<form action="logic/updateUsersLogic.php" method="post">
		<p>Address 1: <input type="text" id="address_1" name="address_1"></p>
		<p>Address 2: <input type="text" name="address_2" id="address_2"></p>
		<p>City: <input type="text" name="city" id="city"></p>
		<p>PostCode: <input type="text" name='postcode' id='postcode'></p>
		<p>Email Address: <input type="email" name="email"></p>
		<p>Phone Number: <input type="text" name="phonenumber" id='phonenumber'></p>
		<p>Mobile Number: <input type="text" name="Mobile Number" id="mobilenumber"></p>
		<input type="submit" name="submit" id="submit">
	</form>
</body>
</html>