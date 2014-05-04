<?php
session_start();
require('../Libraries/meekrodb.php');

$username = $_POST['username'];
$password = $_POST['password'];

function login($username, $password){
    $count = DB::query('select * from Users where Username = %s and PASSWORD = %s', $username, $password);
    if(sizeof($count) == 1){
        $_SESSION['LoggedIn'] = $username;
        // ToDo - Fix this shit later on. 
        $_SESSION['Tutor'] = $true;
        header('Location: http://localhost:8888/AceTraining/');
    } else {
    	echo('Login Failed');
    }
}

login($username, $password);

?>