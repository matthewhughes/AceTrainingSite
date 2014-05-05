<?php

session_start();
if(isset($_SESSION['LoggedIn'])){
  unset($_SESSION['LoggedIn']);
  header('Location: http://localhost:8888/AceTraining/');
} else {
	header('Location: http://localhost:8888/AceTraining/');
}

?>