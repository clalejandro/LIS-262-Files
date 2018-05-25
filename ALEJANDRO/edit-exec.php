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
<?php
    print "<H2>Edit Comment</H2>";
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $comment = $_POST['comment'];
    $query = "UPDATE comments set name = '$name', email = '$email', website = '$website', comment = '$comment' WHERE id = '$id' limit 1";
    $result = mysqli_query($con,$query);
    if (!$result) {
        print "<br />UPDATE operation unsuccessful<br />
               <a href = 'edit-comment.php'>Go Back</a>";
    }
    else {
        print ("<br /><br />1 record updated<br />");
        print ("Click <a href = 'display-comment.php'>here </a>to view the updated list
                     of commenters.");
    }

?>
