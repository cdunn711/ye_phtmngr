<?php
	session_start();
	$usr = mysql_real_escape_string($_POST['userName']);
	$pass = mysql_real_escape_string($_POST['password']);
	echo $usr;
	
	$dbh = new PDO('mysql:host=localhost; dbname=Idomap', "team", "teampass");	
	$getSalt = $dbh->prepare("SELECT salt_password FROM Users WHERE email = ?");
	
	if ($getSalt->execute(array($usr))){
		$salt = $getSalt->fetchColumn(0);
	}
	else
		header('Location: ../Error.html');
	
	$hPass = substr(crypt("$pass", $salt),32);
	
	$getPass = $dbh->prepare("SELECT hash_password FROM Users WHERE email=?");
	if ($getPass->execute(array($usr))){
		$sPass = $getPass->fetchColumn(0);
	}
	else
		header('Location: ../Error.html');
	
	if ($hPass === $sPass){
		$getID = $dbh->prepare("SELECT user_id FROM Users WHERE email=?");
		if ($getID->execute(array($usr))){
			$uID = $getID->fetchColumn(0);
			$_SESSION['id'] = $uID;
			header('Location: ../userprofile.php');
		}
		else
			header('Location: ../Error.html');
	}
	else
		header('Location: ../Error.html');
	
?>