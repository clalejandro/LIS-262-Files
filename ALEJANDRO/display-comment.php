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

    $query = "SELECT name, email, website, comment FROM comments ORDER BY name";

	$result = mysqli_query($con, $query);

	$num_rows = mysqli_num_rows($result);

	print "<h2>Display All Comments</h2>";
	print "<center>There are $num_rows comment records.</center>";

	print "<center>
		   <table border = 1 cellpadding = 5 cellspacing = 5>
		   <tr bgcolor = '#5cb85c'><td>NAME</td><td>EMAIL</td><td>WEBSITE</td><td>COMMENT</td></tr>";

	while ($a_row = mysqli_fetch_row($result)){
		print "<tr> \n";
		foreach ($a_row as $field){
			print "<td> \n";
			print $field;
			print "</td> \n";
		}
		print "</tr> \n";
	}

	print "</table> \n";




?>