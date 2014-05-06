<?php
session_start();
require_once('../libraries/meekrodb.php');

$username = $_SESSION['LoggedIn'];
$courseName = $_POST['CourseName'];

DB::insert( 'REGISTEREDUSERS', array(
	'student_id' => $username,
	'course_name' => $courseName
	)
);

header('Location: http://localhost:8888/AceTraining/signUpCourse.php');

?>