<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "quiz_pw";

	$conn= mysqli_connect($servername, $username, $password, $database);

	if(!$conn){
		die("connection gagal :" .mysqli_connect_error());
	}
	?>