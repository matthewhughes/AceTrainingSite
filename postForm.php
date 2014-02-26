<?php
	require_once 'meekrodb.2.2.class.php';
	DB::$user = 'root';
	DB::$password = 'root';
	DB::$dbName = 'MicroBlog';
	DB::debugMode();

	$microBlog = $_POST['microBlog'];

	DB::insert('MicroBlog', array(
		'post' => $microBlog)
	);

	echo $microBlog;
?>