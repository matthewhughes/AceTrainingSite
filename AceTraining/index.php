<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome To Ace Training</title>
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
	<section>
    <?php 

		$loginform = '<aside> <form action="logic/login.php" method="post">
		<p>Username: <input type="text" name="username" id="password" required></p>
		<p>Password: <input type="password" name="password" id="password"></p>
		<p><input type="submit" name="submit"></p>
		</form></aside>';

		if(!isset($_SESSION['LoggedIn'])){
			echo($loginform);
		}
	?>
	</section>
	<footer>
		<p>Copyright AceTraining 2014</p>
		<p> Site last modified on <script>WriteLastModified();</script></p>
	</footer>
</body>
</html>