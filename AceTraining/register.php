<?php
	session_start();
?>

<!doctype html>
<html lang="en">
<head>
	<meta name="description" content="Ace Training">
	<meta charset="UTF-8">
	<title>Register</title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="styles/style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="scripts/script.js"></script>
	<script src="scripts/passwordCheck.js"></script>
</head>
<body>
	<header>
		<?php
		require('logic/headerBar.php');
		?>
	</header>
	<section>
		<div id="title">
<h3>Register</h3>
<p>Sign up with Ace Training here</p>
</div>
	<?php

	$registrationForm = '	<form action="logic/registerLogic.php" method="post" id="register">
		<p> Username: <input type="text" name="username" placeholder="Username" id="username" required> </p>
		<p> Password: <input type="password" name="password" placeholder="Password" id="password" required> </p>
		<p> Type Password Again: <input type="password" name="password2" placeholder="Password" id="password2" required> </p>
		<input type="submit" name="submit" id="submit" value="submit">
	</form>';

	if(isset($_SESSION['LoggedIn'])){
		header('Location: http://localhost:8888/AceTraining/');
	} else {
		echo $registrationForm;
	}
	?>
	</section>
	<footer>
		<p>Copyright AceTraining 2014</p>
		<p> Site last modified on <script>WriteLastModified();</script></p>
	</footer>
</body>
</html>