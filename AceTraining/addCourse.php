<?php
session_start();

if($_SESSION['Category'] == 'student'){
	header('Location: http://localhost:8889/AceTraining/index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta name="description" content="Ace Training">
	<meta charset="UTF-8">
	<title>Add A Course</title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/form.css">
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
<h3>Add A Course</h3>
<p>Add a course here</p>
</div>
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
