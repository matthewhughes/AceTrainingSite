<?php
	require_once 'meekrodb.2.2.class.php';
	DB::$user = 'root';
	DB::$password = 'root';
	DB::$dbName = 'MicroBlog';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$hash = password_hash($password, PASSWORD_DEFAULT);

	DB::insert('Credentials', array(
		'username' => $username,
		'password' => $hash
	));

	header('Location: http://localhost:8888/index.php');
?>