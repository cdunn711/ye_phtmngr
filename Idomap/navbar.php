	<?php session_start(); ?>
	<div id="navbar">
		<ul id="nav">
			<li class="logo"><a href="index.php">id&#246;map</a></li>
			<li class="search">
				<form method="get" action="" class="search">
					<input maxlength="2048" class="navsearch" value="" lang="en">
					<input value="Search" id="submitButton" class="navbutton" type="submit">
				</form>
			</li>
			<li class="settings">
			<?php
				$id = $_SESSION['id'];
				$dbh = new PDO('mysql:host=localhost; dbname=Idomap', "team", "teampass");	
				$getName = $dbh->prepare("SELECT first_name, last_name FROM UserInfos WHERE user_id = ?");
				if ($getName->execute(array($id))){
					$name = $getName->fetch();
					echo "<a href='userprofile.php#personal'>$name[0] $name[1]</a>";
				}
				else
					header('Location: ../Error.html');
			?>
				<ul>
					<li><a href="settings.php">Settings</a></li>
					<li><a href="upload.html">Upload</a></li>
					<li><a href="signout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>


	<div class="footer">
		<a>About</a> | 
		<a href="index.php">Home</a> |
		<a href="settings.php">Settings</a>
	</div>