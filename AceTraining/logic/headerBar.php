<?php
session_start();

		$logOut = '<a href="logout.php">Log Out</a>';
		$register = '<a href="../register.php">Register</a>';
		$editProfile = '<a href="../$updateUsers.php">Edit Profile</a>';

		if(isset($_SESSION['LoggedIn'])){
			echo $logOut;
			echo $editProfile;

		} else {
			echo $register;
		}

?>