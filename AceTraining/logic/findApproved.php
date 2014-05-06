<?php

session_start();
require_once('libraries/meekrodb.php');

$query = DB::query('SELECT * FROM REGISTEREDUSERS WHERE approved = 1');

foreach($query as $row){
	$id = $row['id'];
	$student = $row['student_id'];
	$course_name = $row['course_name'];

	echo '<option value="' . $id . '">' . $student . '|' . $course_name . '</option>';
}


?>

