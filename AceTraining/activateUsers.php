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
	<meta name="description" content="Ace Training">
	<meta charset="UTF-8">
	<title>View Users</title>
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
<h3>Active A User</h3>
<p>Enable a student to sign up for courses or register as a tutor or an administrator.</p>
</div>
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