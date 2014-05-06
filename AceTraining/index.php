<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta name="description" content="Ace Training">
	<meta charset="UTF-8">
	<title>Welcome To Ace Training</title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
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
		<div id="sidebar">
			<p>Ace Training is a Liverpool and Manchester based provider of computing qualifications and instruction. Established since 1994, over 9000 people have gone on to advance their careers with our support. </p>
<p>If you have already registered with the us, please log in to amend your records and register for clesses.  
</p> 
<p>If you don't have an account, click 'register' above to sign up with us.
</p>
<img src="assets/classroom-picture.jpg" alt="Classroom Picture">			
		</div>
    <?php 

		$loginform = '<aside> <form action="logic/login.php" method="post">
		<p>Username: <input type="text" name="username" id="password" required></p>
		<p>Password: <input type="password" name="password" id="password" required></p>
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