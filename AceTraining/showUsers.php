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
	<title>Document</title>
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
		<table>
			<th>
				<tr>ID</tr>
				<tr>Username</tr>
				<tr>Category</tr>
				<tr>Address 1</tr>
				<tr>Address 2</tr>
				<tr>City</tr>
				<tr>Postcode</tr>
				<tr>Landline</tr>
				<tr>Cell Phone</tr>
				<tr>Email</tr>
			</th>
			<?php
				require('logic/showStudentsLogic.php');
			?>
		</table>
	</section>
	<footer>
		<p>Copyright AceTraining 2014</p>
		<p> Site last modified on <script>WriteLastModified();</script></p>
	</footer>
</body>
</html>