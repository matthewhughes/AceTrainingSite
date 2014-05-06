<?php
session_start();
require_once('../libraries/meekrodb.php');

$id = $_POST['CourseName'];

if($id == ''){
	echo 'Something went wrong';
} else{
	DB::update('REGISTEREDUSERS', array(
		'approved' => 0
		), 'id=%s', $id
	);

	header('Location: http://localhost:8888/AceTraining/approveUsers.php');
}

?>