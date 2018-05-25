<?php

?>

<!DOCTYPE html>
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

		<div class="navbar">
  			<a href="index.php">Home</a>
  			<a href="comment.php">Contact</a>
  			<a href="login.php">Login</a>
  				</div>
		</div>

		<div id="reply">
				<div id="feedback">
					<fieldset style="width:500px">
						<legend>Leave a Reply</legend>
						<form action="contact.php" method="POST">
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
					</fieldset>
					<br />	
					<a href="index.html"<button type="button">Back to Home >></button></a>
				</div>
		</div>
		

		<div class="footer">
			<h6>Copyright 2018</h6>
		</div>


</html>