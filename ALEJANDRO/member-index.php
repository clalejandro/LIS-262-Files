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
    //save this member-index.php
    require("auth.php");
    require("do_html_header.php");
    require("do_menu.php");
    do_html_header();
    print" <body>
           <h1>Welcome ". $_SESSION['SESS_FIRST_NAME']."!</h1>";
    do_menu();
?>
</body>


</html>
