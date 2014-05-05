<?php
session_start();

		$logOut = '<a href="logic/logout.php">Log Out</a>';
		$register = '<a href="register.php">Register</a>';
		$editProfile = '<a href="updateUsers.php">Edit Profile</a>';
		$activateUsers = '<a href="activateUsers.php">Activate Users</a>';
		$showCourses = '<a href="showCourses.php">Show Courses</a>';
		$notAuthorized = '<a href="notAuthorized">Not Authorized</a>';
		$addCourse = '<a href="addCourse.php">Add A New Course</a>';
		$showUsers = '<a href="showUsers.php">Show All Students</a>';
		$signUpCourse = '<a href="signUpCourse.php">Register For A Course</a>';

		if(isset($_SESSION['LoggedIn'])){
			echo $logOut;
			echo $editProfile;
			if(isset($_SESSION['Category'])){
				if($_SESSION['Category'] == 'student'){
					echo $signUpCourse;

				} else if ($_SESSION['Category'] == 'tutor'){
					echo $activateUsers;
					echo $showCourses;
					echo $addCourse;
					echo $showUsers;

				} else if ($_SESSION['Category'] == 'administrator'){
					echo $activateUsers;
					echo $showCourses;
					echo $addCourse;
					echo $showUsers;
				}
			} else {
				echo $notAuthorized;
			}

		} else {
			echo $register;
		}

?>