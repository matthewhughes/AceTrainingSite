<?php
session_start();

if($_SESSION['Category'] == 'student'){
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
		<form action="logic/addNewCourse.php" method="post">
			<p>Course Name: <input type="text" name="CourseName" id="CourseName"></p>
			<p>Description: <textarea name="Description" id="Description" cols="30" rows="10"></textarea></p>
			<p>Room Number: <input type="text" name="RoomNumber" id="RoomNumber"></p>
			<input type="submit" name="submit" id="submit">
		</form>
	</section>
		<footer>
		<p>Copyright AceTraining 2014</p>
		<p> Site last modified on <script>WriteLastModified();</script></p>
	</footer>
</body>
</html>
