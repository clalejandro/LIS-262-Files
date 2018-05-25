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
    $query = "SELECT name, email, website, comment FROM comments WHERE name='$name'";
    $result = mysqli_query($con,$query);
        if (!mysqli_num_rows($result)) {
            print "<br /><br />There is no such commenter with the name of $name <br />
                   <a href = 'delete-comment.php'>Go Back</a>";
            exit();
        }
        else {
            $row_array = mysqli_fetch_array($result, MYSQLI_ASSOC);
        }
?>

        <FORM ACTION = "delete-exec.php" METHOD="POST">
        <TABLE BORDER=1 CELLPADDING=5 CELLSPACING=5>
            <TR>
                <TD>Name</TD>
                <TD><INPUT TYPE="TEXT" NAME="name" VALUE="<?php print "{$row_array['name']}" ?>"
                     READONLY></TD>
            </TR>
            <TR>
                <TD>Email</TD>
                <TD><INPUT TYPE="TEXT" NAME="email" VALUE="<?php print "{$row_array['email']}" ?>"
                     READONLY></TD>
            </TR>
            <TR>
                <TD>Website</TD>
                <TD><INPUT TYPE="TEXT" NAME="website" VALUE="<?php print "{$row_array['website']}" ?>"
                     READONLY></TD>
            </TR>
            <TR>
                <TD>Comment</TD>
                <TD><INPUT TYPE="TEXT" NAME="comment" VALUE="<?php print "{$row_array['comment']}" ?>"
                     READONLY></TD>
            </TR>
        </TABLE>
        <p><INPUT TYPE="SUBMIT" NAME="DELETE" VALUE = "DELETE"></P>
        </FORM>
