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
	<title>Deactivate User</title>
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
	<div id="title">
	<h3>Deactivate A User</h3>
	<p>Remove A User's Ability To Register For Classes</p>
</div>

	<form action="logic/disapproveCourseLogic.php" method="post">
		<select name="CourseName" id="CourseName">
			<?php
				require('logic/findApproved.php');
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
