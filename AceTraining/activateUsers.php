<?php
session_start();

if(!isset($_SESSION['LoggedIn'])){
	header('Location: http://localhost:8888/AceTraining/');
}
if($_SESSION['Category'] == 'student'){
		header('Location: http://localhost:8888/AceTraining/');
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Users</title>
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
		<form action="logic/activateUsersLogic.php" method="post">
			<select name="username" id="username">
				<?php
					require('logic/showUsersLogic.php')
				?>
			</select>
			<select name="category" id="category">
				<option value="student">Student</option>
				<option value="tutor">Tutor</option>
				<option value="administrator">Administrator</option>
			</select>
			<input type="submit" value="submit">
		</form>
	</section>
	<footer>
		<p>Copyright AceTraining 2014</p>
		<p> Site last modified on <script>WriteLastModified();</script></p>
	</footer>
</body>
</html>