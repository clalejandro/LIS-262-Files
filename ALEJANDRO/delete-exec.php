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
    print "<h2>Delete Comment</h2>";
    $name = $_POST["name"];
    $query = "DELETE FROM comments WHERE name = '$name'";
    $result = mysqli_query($con,$query);
    if (!$result) {
        print "<br />DELETE operation unsuccessful<br />
               <a href = 'delete-comment.php'>Go Back</a>";
    }
    else {
        print ("<br /><br />1 record deleted<br />");
        print ("Click <a href = 'display-comment.php'>here </a>to view the updated list
                     of commenters.");
    }

?>
