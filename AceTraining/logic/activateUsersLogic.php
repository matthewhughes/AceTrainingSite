<?php
	session_start();
	require_once('../libraries/meekrodb.php');

	$username = $_POST['username'];
	$category = $_POST['category'];

	if($username == ''){
		echo '<strong>Username cannot be null</strong>';
	} else {
		activateUsers($username, $category);
		header('Location: http://localhost:8888/AceTraining/index.php');
	}

	function activateUsers($username, $category){
		DB::update('USERS', array(
				'category' => $category
				), "username=%s", $username );
		DB::update('USER_INFO', array(
				'category' => $category
				), "username=%s", $username );
	}
?>