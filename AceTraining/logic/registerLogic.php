<?php

    require_once('../libraries/meekrodb.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordCheck = $_POST['password2'];



    if($username == '' || $password == ''){
    	echo '<strong>' . 'Username and Password cannot be null' . '</password>';
    } else if ($password == $passwordCheck) {
        echo '<strong>' . 'Passwords Have To Match' . '</password>';
        echo '<strong>' . 'If you are seeing this message, your browser might not be handling Javascript correctly' . '</password>';
    } else {
    	CheckExists($username, $password);
    }

    function CheckExists($username, $password){
    	$query = DB::query('select * from Users where Username = %s and Password = %s', $username, $password);
    	if(sizeof($query) == 1){
    		print_r($query);
    		echo '<strong>' . 'User Already Exists' . '</strong>';
    	} else {
    		InsertIntoDB($username, $password);
    	}
    }

    function InsertIntoDB($username, $password){
    	DB::query('INSERT INTO USERS (username, password) values (%s, %s)', $username, $password);
    	DB::query('INSERT INTO USER_INFO(username) values (%s)', $username);
        header('Location: http://localhost:8888/AceTraining/');
    }

?>