<?php

	include ("config.php");

	$uname = $_POST["uname"];
	$pwd = $_POST["password"];


	if ($uname == '') {
		print "The Username field is required.<br />";
	}

	if ($pwd == '') {
		print "The Password field is required.<br />";
	}

	//Create query
	$query="SELECT * FROM users WHERE username='$uname' AND password='$pwd'";
	$result=mysqli_query($con,$query);

	//Check if the query is successful or not
	if ($result) {
		if (mysqli_num_rows($result) == 1) {
			session_start();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['firstname'];
			$_SESSION['SESS_LAST_NAME'] = $member['lastname'];
			session_write_close();
			header("location: member-index.php");
			exit();
		}
		else {
			header("location: login-failed.php");
			exit();

		}
	}
	

?>