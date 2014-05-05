<?php

require_once('libraries/meekrodb.php');

$query = DB::query('SELECT * FROM USER_INFO where category = "student"');


foreach($query as $row){
	echo '<tr>';
	echo createRow($row['id']);
	echo createRow($row['username']);
	echo createRow($row['category']);
	echo createRow($row['address_1']);
	echo createRow($row['address_2']);
	echo createRow($row['city']);
	echo createRow($row['postcode']);
	echo createRow($row['landline']);
	echo createRow($row['cellphone']);
	echo createRow($row['email']);
	echo '</tr>';
}

function createRow($value){
	return '<td>' . $value . '</td>';
}
?>