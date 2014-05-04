<?php
	session_start();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="styles/style.css">
	<script src="scripts/script.js"></script>
</head>
<body>

	<?php

	$registrationForm = '	<form action="logic/registerLogic.php" method="post">
		<p> Username: <input type="text" name="username" placeholder="Username" id="username" required> </p>
		<p> Password: <input type="password" name="password" placeholder="Password" id="password" required> </p>
		<input type="submit" name="submit" value="submit">
	</form>';

	if(isset($_SESSION['LoggedIn'])){
		header('Location: http://localhost:8888/AceTraining/');
	} else {
		echo $registrationForm;
	}
	?>
	
</body>
</html>