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

?>
	
	<h2>Add Comment</h2>
	<form action="comment-menu.php" method="POST">
	<label for="comment">Comment</label><br />
	<input type="text" placeholder="Comment.." name="comment">
	<br /><br />
	<label for="name">Name</label></br />
	<input type="text" placeholder="Your name" name="name"><br /><br />
	<label for="email">Email</label><br />
	<input type="text" placeholder="Your email address" name="email"><br /><br />
	<label for="website">Website</label><br />
	<input type="text" placeholder="Your website address" name="website"><br><br />
	<br />
	<input type="submit" name="Submit" value="Submit">
	<input type="reset" name="Reset" value="Reset">
	</form>