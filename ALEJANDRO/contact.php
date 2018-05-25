<?php

	include ("config.php");

	$comment = $_POST["comment"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$website = $_POST["website"];

	$query = "INSERT into comments (name,email,website,comment) values ('$name','$email','$website','$comment')";

	mysqli_query($con, $query);

	header("location: comments.php");

?>