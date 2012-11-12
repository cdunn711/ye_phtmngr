<?php
	session_start();
	
	$dbh = new PDO('mysql:host=localhost; dbname=Idomap', "team", "teampass");
	
	if (isset($_FILES['browse']['name'])){
		$file = $_FILES['browse']['name'];
		$title = $_POST['title'];
		$des = $_POST['description'];
		$tags = $_POST['tags'];
		$privacy = $_POST['privacy'];
		$date = $_POST['date'];
		
		$imgDir = "../Images/";
		$imgName = $imgDir.$file;
		
		echo "File: $file <br> Title: $title <br> Description: $des <br> Tags: $tags <br> Privacy: $privacy <br> Date: $date";
		echo "FileDir: $imgName";
	}
	
	else
		header('Location: ../Error.html');
	
?>