<?php
session_start();
require_once('libraries/meekrodb.php');
$username = $_SESSION['LoggedIn'];

$query = DB::query('SELECT course_name FROM REGISTEREDUSERS WHERE student_id = %s AND approved = 1', $username);

foreach($query as $row){
	$roominfo = DB::query('SELECT * FROM COURSE WHERE course_name = %s', $row['course_name']);
	$course_id = $roominfo['course_id'];
	$course_name = $roominfo['course_name'];
	$tutor_name = $roominfo['tutor_name'];
	$description = $roominfo['description'];
	$room_number = $roominfo['room_number'];
	echo '<tr>';
	echo createRow($course_id );
	echo createRow($course_name);
	echo createRow($tutor_name);
	echo createRow($description);
	echo createRow($room_number);
	echo '</tr>';
}

function createRow($value){
	return '<td>' . $value . '</td>';
}

?>