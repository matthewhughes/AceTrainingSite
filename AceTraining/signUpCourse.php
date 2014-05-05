<?php
session_start();

if($_SESSION['Category'] != 'student'){
	header('Location: http://localhost:8889/AceTraining/index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add A Course</title>
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
	<form action="applyCourseLogic.php" method="post">
		<select name="CourseName" id="CourseName">
			<?php
				require('logic/allCoursesLogic.php');
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
