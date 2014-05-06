<?php
session_start();

if($_SESSION['Category'] != 'student'){
	header('Location: http://localhost:8889/AceTraining/index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta name="description" content="Ace Training">
	<meta charset="UTF-8">
	<title>My Courses</title>
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
		<h3>My Courses</h3>
		<p>The following are the courses you are presently enroled in.</p>
		</div>
		<div class="table">
		<table>
			<tr>
				<td>ID</td>
				<td>Course Name</td>
				<td>Tutor</td>
				<td>Description</td>
				<td>Room</td>
			</tr>
			<?php
				require('logic/selectEnroledCourses.php');
			?>
		</table>
	</div>
	</section>
	<footer>
		<p>Copyright AceTraining 2014</p>
		<p>Site last modified on <script>WriteLastModified();</script></p>
	</footer>
</body>
</html>