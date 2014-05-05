<?php
session_start();
require('../Libraries/meekrodb.php');

$username = $_POST['username'];
$password = $_POST['password'];

function login($username, $password){
	DB::$user = 'register';
	DB::$password = 'register';


    $count = DB::queryFirstRow('select * from Users where Username = %s and PASSWORD = %s', $username, $password);
    if(sizeof($count) != 0){
        $_SESSION['LoggedIn'] = $username;
        $_SESSION['Category'] = $count['category'];
        header('Location: http://localhost:8888/AceTraining/');
    } else {
    	print_r($count);
    	echo('Login Failed');
    }
}

login($username, $password);

?>