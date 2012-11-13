<?php
	session_start();
	$dbh = new PDO('mysql:host=localhost; dbname=Idomap', "team", "teampass");
	$ID = $_SESSION['id'];
	
	if (isset($_POST['firstName'])){
		$first = $_POST['firstName'];
		if ($first != ""){
			$updateFirst = $dbh->prepare("UPDATE UserInfos SET first_name=? WHERE user_id=?");
			$updateFirst->execute(array("$first",$ID));
		}
	}
	if (isset($_POST['lastName'])){
		$last = $_POST['lastName'];
		if ($last != ""){
			$updatelast = $dbh->prepare("UPDATE UserInfos SET last_name=? WHERE user_id=?");
			$updatelast->execute(array("$last",$ID));
		}
	}
	
	/*
	if (isset($_POST['email'])){
		$email = $_POST['email'];
		$updateEmail = $dbh->prepare("UPDATE Users SET email=? WHERE user_id=?");
		$updateEmail->execute(array("$email",$ID));
	}
		
	if (isset($_POST['password']))	{		
		$pass = $_POST['password'];
		$confirm = $_POST['confirm'];
		if ($pass === $confirm){
		
			$getEmail= $dbh->prepare("SELECT email FROM Users WHERE user_id = ?");
			$getEmail->execute(array($ID));
			$email = $getEmail->fetch();
			$email = $email[0];
		
			$salt = '$2a$13$'.substr(sha1($email),0,22); 
			$hashed_pass = substr(crypt("$pass", $salt), 32);
			$updatePass = $dbh->prepare("UPDATE Users SET hash_password=?, salt_password=?  WHERE user_id=$ID");
			$updatePass->execute(array("$hashed_pass","$salt"));
		}
		else
			header('Location: ../Error.html');
			
	}
	if (isset($_POST['birthMonth']))
		$birthMonth = mysql_real_escape_string($_POST['birthMonth']);
	if (isset($_POST['sex']))
		$sex = $_POST['sex'];
	if (isset($_POST['privacy']))
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
		
		
			$secureInfo = $dbh->prepare("INSERT INTO Users VALUES (?, ?, ?, ?)");
			$userProfile = $dbh->prepare("INSERT INTO UserProfiles VALUES (?, CURDATE(), ?, ?, ?)");
			$userInfo = $dbh->prepare("INSERT INTO UserInfos VALUES (?, ?, ?, ?, ?)");
			
			$secureInfo->execute(array($id, "$email", "$hashed_pass", "$salt"));
			$userProfile->execute(array($id, $birth, $s, false));
			$userInfo->execute(array($id, $first, $last, "none", $p));
*/
			
			header('Location: ../userprofile.php');
?>
