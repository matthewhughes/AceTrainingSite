<?php

session_start();
require_once('libraries/meekrodb.php');

$query = DB::query('SELECT course_name FROM COURSE');

foreach($query as $row){
	$row_name = $row['course_name'];
	echo '<option value="' . $row_name . '">' . $row_name . '</option>';
}


?>

