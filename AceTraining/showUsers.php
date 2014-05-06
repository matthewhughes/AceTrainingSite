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
	<title>See All Users</title>
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
		<div class="table">
		<table>
			<tr>
				<td>ID</td>
				<td>Username</td>
				<td>Category</td>
				<td>Address 1</td>
				<td>Address 2</td>
				<td>City</td>
				<td>Postcode</td>
				<td>Landline</td>
				<td>Cell Phone</td>
				<td>Email</td>
			</tr>
			<?php
				require('logic/showStudentsLogic.php');
			?>
		</table>
	</div>
	</section>
	<footer>
		<p>Copyright AceTraining 2014</p>
		<p> Site last modified on <script>WriteLastModified();</script></p>
	</footer>
</body>
</html>