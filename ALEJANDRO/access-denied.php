<?php
session_start();
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
    require ("do_html_header.php");
    do_html_header();
?>

<body>
    <p align="center">&nbsp;</p>
    <h4 align="center" class="err">Access Denied!<br />
    You do not have access to this resource.</h4>
</body>
</html>
