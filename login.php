<?php
	session_start();
	ob_start();

	require_once 'meekrodb.2.2.class.php';
	DB::$user = 'root';
	DB::$password = 'root';
	DB::$dbName = 'MicroBlog';

	$username = $_POST['username'];
	$password = $_POST['password'];
	DB::debugMode();

	$result = DB::queryFirstRow("SELECT * FROM Credentials where username = %s", $username);
	$hash = $result['password'];

	if (password_verify($password, $hash)) {
		$_SESSION['loggedin'] = 1;
		header('Location: http://localhost:8888/');
	} else {
		echo "Login failed";
	}

?>