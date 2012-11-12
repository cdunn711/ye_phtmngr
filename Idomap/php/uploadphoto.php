<?php
	session_start();
	
	$dbh = new PDO('mysql:host=localhost; dbname=Idomap', "team", "teampass");
	
	if (isset($_POST['browse'])){
		$file = $_POST['browse'];
		$title = $_POST['title'];
		$des = $_POST['description'];
		$tags = $_POST['tags'];
		$privacy = $_POST['privacy'];
		$date = $_POST['date'];
		
		echo "File: $file <br> Title: $title <br> Description: $des <br> Tags: $tags <br> Privacy: $privacy <br> Date: $date";
	}
	
	else
		header('Location: ../Error.html');
	
?>