<?php
session_start();

if(!isset($_SESSION['LoggedIn'])){
	header('Location: http://localhost:8888/AceTraining/');
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta name="description" content="Ace Training">
	<meta charset="UTF-8">
	<title>Manually Add Student</title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="styles/form.css">
	<link rel="stylesheet" href="styles/style.css">
	<script src="scripts/script.js"></script>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
	<header>
		<?php
		require('logic/headerBar.php');
		?>
	</header>
	<section>
		<div id="title">
	<h3>Add A User</h3>
	<p>Tutors Can Register A User Here</p>
</div>
	<form action="logic/addUsersLogic.php" method="post">
		<p>Username: <input type="text" id="username" name="username"></p>
		<p>Password: <input type="text" id="password" name="password"></p>
		<p>Address 1: <input type="text" id="address_1" name="address_1"></p>
		<p>Address 2: <input type="text" name="address_2" id="address_2"></p>
		<p>City: <input type="text" name="city" id="city"></p>
		<p>PostCode: <input type="text" name='postcode' id='postcode'></p>
		<p>Email Address: <input type="email" name="email"></p>
		<p>Phone Number: <input type="text" name="phonenumber" id='phonenumber'></p>
		<p>Mobile Number: <input type="text" name="mobilenumber" id="mobilenumber"></p>
		<input type="submit" name="submit" id="submit">
	</form>
</section>
	<footer>
		<p>Copyright AceTraining 2014</p>
		<p> Site last modified on <script>WriteLastModified();</script></p>
	</footer>
</body>
</html>