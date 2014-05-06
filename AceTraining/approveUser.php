<?php
session_start();

if($_SESSION['Category'] != 'tutor'){
	header('Location: http://localhost:8889/AceTraining/index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta name="description" content="Ace Training">
	<meta charset="UTF-8">
	<title>Approve User</title>
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
	<div id="title">
	<h3>Activate A User</h3>
	<p>Allow A user to sign up for classes.</p>
</div>
	<section>
	<form action="logic/approveCourseLogic.php" method="post">
		<select name="CourseName" id="CourseName">
			<?php
				require('logic/findUnapproved.php');
			?>
		</select>
		<input type="submit" value='submit' name='submit'>
	</form>	
	</section>
		<footer>
		<p>Copyright AceTraining 2014</p>
		<p> Site last modified on <script>WriteLastModified();</script></p>
	</footer>
</body>
</html>
