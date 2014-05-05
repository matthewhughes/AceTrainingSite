<?php
session_start();
require_once('libraries/meekrodb.php');

$query = DB::query('select * from Users where category is NULL');
if(sizeof($query) >= 1){
foreach($query as $row){
	$value = $row['username'];
	echo '<option value="' . $value . '">' . $value . '</>';
}
} else {
	echo '<option value=""></>';
}
