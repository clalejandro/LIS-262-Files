<?php

?>

<html>
	<head>
		<title>The Tech Blog</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="site.js"></script>
	</head>
	<body>
		
		<div id="banner">
			<div class="content">
				<h1>The Tech Blog - Your Source for Anything about Tech</h1>
			</div>
		</div>


<?php

    require("config.php");
    require('auth.php');
    require("do_html_header.php");
    require("do_menu.php");
    require("clean.php");
    do_html_header();
    print "<body><h1>Welcome ". $_SESSION['SESS_FIRST_NAME']."!</h1>";
    do_menu();

	$comment = $_POST["comment"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$website = $_POST["website"];

	$query = "INSERT into comments (name,email,website,comment) values ('$name','$email','$website','$comment')";

	mysqli_query($con, $query);

	print ("<br /><br />1 comment added<br />");
    print ("Click <a href = 'display-comment.php'>here </a>to view the updated list
                     of commenters.");

?>