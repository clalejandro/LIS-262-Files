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
<body>
    <h2>Delete Comment</h2>
    <form action="delete.php" method="POST">
    <table width="400" border="0" cellspacing="1" cellpadding="2">
         <tr>
               <td width="240">Enter the name of the commenter you wish to delete:</td>
               <td><input name="name" type="text"></td>
         </tr>
         <tr>
               <td width="100">&nbsp;</td>
               <td>&nbsp;</td>
         </tr>
         <tr>
               <td width="100">&nbsp;</td>
               <td><input name="SUBMIT" type="SUBMIT" id="DELETE" value="Search"></td>
         </tr>
    </table>
    </FORM>
</body>