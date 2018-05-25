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
    // save this as login-failed.php
    require("do_html_header.php");
    do_html_header();
?>
<body>
	<div class="login">
    <h4>Login Failed!<br />
    Please check your username and password<br />
    Go back to <a href="login.php">login</a></h4>
	</div>
</body>
</html>
