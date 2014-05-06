<?php
	session_start();
	require_once('../libraries/meekrodb.php');

	$username = $_POST['username'];
	$username = $_POST['password'];
	$address_one = $_POST['address_1'];
	$address_two = $_POST['address_2'];
	$city = $_POST['city'];
	$postcode = $_POST['postcode'];
	$email = $_POST['email'];
	$phone = $_POST['phonenumber'];
	$cell = $_POST['mobilenumber'];

	DB::insert(USER_INFO, array(
		'username' => $username,
		'category' => 'student',
		'address_1' => $address_one,
		'address_2' => $address_two,
		'city' => $city,
		'postcode' => $postcode,
		'landline' => $phone,
		'cellphone' => $cell,
		'email' => $email
		)
	);

	DB::insert(USERS, array(
		'username' => $username,
		'password' => $password,
		'category' => 'student'
	));

	header('Location: http://localhost:8888/AceTraining/index.php')

?>