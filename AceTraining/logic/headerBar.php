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
		$approveUser = '<a href="approveUser.php">Approve Student</a>';
		$deactivateUser = '<a href="deactivateUser.php">Deactivate Student</a>';

		$myCourses = '<a href="myCourses.php">My Courses</a>';
		$addStudent = '<a href="addStudent.php">Add Student</a>';

		echo '<p>Welcome To Ace Training</p>';

		if(isset($_SESSION['LoggedIn'])){
			echo $logOut;
			echo $editProfile;
			if(isset($_SESSION['Category'])){
				if($_SESSION['Category'] == 'student'){
					echo $signUpCourse;
					echo $myCourses;

				} else if ($_SESSION['Category'] == 'tutor'){
					echo $activateUsers;
					echo $showCourses;
					echo $addCourse;
					echo $showUsers;
					echo $approveUser;
					echo $deactivateUser;
					echo $addStudent;

				} else if ($_SESSION['Category'] == 'administrator'){
					echo $activateUsers;
					echo $showCourses;
					echo $addCourse;
					echo $showUsers;
					echo $addStudent;
				}
			} else {
				echo $notAuthorized;
			}

		} else {
			echo $register;
		}

?>