<?php

/*
	
	$con = new mysqli("ec2-54-243-133-137.compute-1.amazonaws.com", "team", "teampass", "Idomap");
	//$con->connect("localhost", "team", "teampass", "Idomap");
		//$dbh = new PDO('mysql:host=localhost; dbname=Idomap', "team", "teampass");
		
	if (mysqli_connect_errno())
		exit("connection failed: " . mysqli_connect_error());
	
	echo 'after connect';
	
	
	
	$con = mysql_connect("localhost", "team", 'teampass');
	if ($con)
			{
				echo 'Could not connect: ' . mysql_error() ;
			}
	mysql_select_db("Idomap", $con);
	echo 'connected';
*/
	$dbh = new PDO('mysql:host=localhost; dbname=Idomap', "team", "teampass");
	
	if (isset($_POST['firstName'])){
		$first = $_POST['firstName'];
		$last = $_POST['lastName'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$confirm = $_POST['confirm'];
		$birthMonth = mysql_real_escape_string($_POST['birthMonth']);
		$sex = $_POST['sex'];
		$privacy = $_POST['privacy'];

		$salt = '$2a$13$'.substr(sha1($email),0,22); 
		$hashed_pass = substr(crypt("$pass", $salt), 32);
		
		$id = time();
		
		$birth = date('Y-m-d', strtotime($birthMonth));
		
		$s = true;
		if ($sex === 'f')
			$s = false;
		$p = 0;	// Public is 0
		if ($privacy === "private")
			$p = 1;   // Private is 1
		
		
		if ($first!="" && $last!="" && $email!="" && $pass!="" && $pass === $confirm && $birthMonth!=""){
			$secureInfo = $dbh->prepare("INSERT INTO Users VALUES (?, ?, ?, ?)");
			$userProfile = $dbh->prepare("INSERT INTO UserProfiles VALUES (?, CURDATE(), ?, ?, ?)");
			$userInfo = $dbh->prepare("INSERT INTO UserInfos VALUES (?, ?, ?, ?, ?)");
			
			$secureInfo->execute(array($id, "$email", "$hashed_pass", "$salt"));
			$userProfile->execute(array($id, $birth, $s, false));
			$userInfo->execute(array($id, $first, $last, "none", $p));
			
			//$secureInfo->close();
			//$userProfile->close();
			//$userInfo->close();
			
			header('Location: ../index.php');
		}			
		else{
			header('Location: ../Error.html');			
		}
		
		//$dbh->close();
	}

?>
