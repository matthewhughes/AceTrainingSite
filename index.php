<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Microblogging Site</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 

	if(isset($_SESSION[‘loggedin’])){
		echo '<a href="logout.php">Log Out</a>';
	} else {
		echo '<a href="register.php">Register</a>';
	}

	if(isset($_SESSION[‘loggedin’]){
	echo '<form action="postForm.php" method="post">
		<textarea name="microBlog" id="microBlog" cols="30" rows="10">
		</textarea>
		</br>
		<input type="submit">
	</form>'; 
	} else {
		echo '<form action="login.php" method="post">
			Username: <input type="text" name="username" id="username" /> </br>
			Password: <input type="text" name="password" id="password" /> </br>
			<input type="submit">
		</form>';
	}
	?>
	<?php
	require_once 'meekrodb.2.2.class.php';
	DB::$user = 'root';
	DB::$password = 'root';
	DB::$dbName = 'MicroBlog';
	$results = DB::query("SELECT post FROM MicroBlog");
	foreach ($results as $row){
		echo "<div class='microBlog'>" . $row['post'] . "</div>";
	}
	?>
</body>
</html>