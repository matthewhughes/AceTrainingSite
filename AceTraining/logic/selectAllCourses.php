<?php

require_once('libraries/meekrodb.php');

$query = DB::query('SELECT * FROM COURSE');


foreach($query as $row){
	echo '<tr>';
	echo createRow($row['course_id']);
	echo createRow($row['course_name']);
	echo createRow($row['tutor_name']);
	echo createRow($row['description']);
	echo '</tr>';
}

function createRow($value){
	return '<td>' . $value . '</td>';
}
?>