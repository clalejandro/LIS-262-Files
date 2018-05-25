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
	require("do_html_header.php");
	do_html_header();
	$_SESSION["name"] = '$uname';
?>

<html>

<div class="login">
<form method="POST" action="login-exec.php">
   <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
     <tr>
       <td width="112"><b>Username</b></td>
       <td width="188"><input name="uname" type="text" placeholder="Username" /></td>
     </tr>
     <tr>
       <td><b>Password</b></td>
       <td><input name="password" type="password" placeholder="Password" /></td>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td><input type="submit" name="Submit" value="Login" /></td>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td><a href="index.php">Back to home</a></td>
     </tr>
   </table>
</form>

</div>


</html>

