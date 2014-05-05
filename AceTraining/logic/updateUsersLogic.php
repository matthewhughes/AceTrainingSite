<?php
	session_start();
	require_once('../libraries/meekrodb.php');

	$username = $_SESSION['LoggedIn'];
	$address_one = $_POST['address_1'];
	$address_two = $_POST['address_2'];
	$city = $_POST['city'];
	$postcode = $_POST['postcode'];
	$email = $_POST['email'];
	$phone = $_POST['phonenumber'];
	$cell = $_POST['mobilenumber'];

	$query = DB::queryFirstRow('select * from USER_INFO where Username = %s', $username);

	if($address_one == ''){
		$address_one = $query['address_1'];
	}
    
    if($address_two == ''){
		$address_two = $query['address_2'];
	}

	if($city == ''){
		$city = $query['city'];
	}

	if($postcode == ''){
		$postcode = $query['postcode'];
	}

	if($email == ''){
		$email = $query['email'];
	}

	if($phone = ''){
		$phone = $query['landline'];
	}

	if($cell = ''){
		$cell = $query['cellphone'];
	}

	DB::update(USER_INFO, array(
		'address_1' => $address_one,
		'address_2' => $address_two,
		'city' => $city,
		'postcode' => $postcode,
		'landline' => $phone,
		'cellphone' => $cell,
		'email' => $email
		), 'username=%s', $username
	);

	header('Location: http://localhost:8888/AceTraining/index.php')

?>