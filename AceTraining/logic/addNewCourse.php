<?php
	session_start();
	require_once('../libraries/meekrodb.php');

	$courseName = $_POST['CourseName'];
	$description = $_POST['Description'];
	$roomNumber = $_POST['RoomNumber'];
	$tutorName = $_SESSION['LoggedIn'];

	if($courseName != '' && $description != '' && $roomNumber != '' && $tutorName != ''){
		DB::insert('COURSE', array(
			'course_name' => $courseName,
			'tutor_name' => $tutorName, 
			'description' => $description, 
			'room_number' => $roomNumber
		));
		header('Location: http://localhost:8888/AceTraining/index.php');

	} else {
		echo 'Insert Failed.';
	}
?>