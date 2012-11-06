<!DOCTYPE html>
<!--Last updated by Darius Clark on 11/1/2012-->
<html>
<head>
	<title>Idomap</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/popbox.css">
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/jquery.roundabout.min.js"></script>
	<script src="js/jquery-easing.js"></script>
	<script src="js/jquery.event.drag-2.2.js"></script>
	<script src="js/jquery.event.drop-2.2.js"></script>
	<script src="js/jquery.event.drag.live-2.2.js"></script>
	<script src="js/popbox.js"></script>
	<script src="js/jquery.event.drop.live-2.2.js"></script>
	<script src="js/javascript.js"></script>	
	<link href='http://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>

</head>

<body>
	<div class="signIn one-edge-shadow">
		<ul class="roundabout-holder">
			<li class="roundable-moveable-item"><img src="img/bluefoglog.png" alt="Idomap logo" class="logo"/></li>
			<li class="roundable-moveable-item"><img src="img/exampleIdo.png" alt="Idomap logo" class="logo"/></li>
			<li class="roundable-moveable-item"><img src="img/bluefoglog.png" alt="Idomap logo" class="logo"/></li>
			<li class="roundable-moveable-item"><img src="img/exampleIdo.png" alt="Idomap logo" class="logo"/></li>
			<li class="roundable-moveable-item"><img src="img/bluefoglog.png" alt="Idomap logo" class="logo"/></li>
			<li class="roundable-moveable-item"><img src="img/exampleIdo.png" alt="Idomap logo" class="logo"/></li>
			<li class="roundable-moveable-item"><img src="img/bluefoglog.png" alt="Idomap logo" class="logo"/></li>
		</ul>
		<p>
		<a class="prev"><<</a> | <a class="stop">&#9689;</a> | <a class="next">>></a>
		<form id="signIn" name="signIn" method="post">
			<label for="userName">Username:</label>
			<br/><input type="text" name="userName" id="userName"/>
			<br/><label for="password">Password:</label>
			<br/><input type="password" name="password" id="password" autocomplete="off"/>
			<br/><input type="submit" value="Sign in" class="submit"/>
		</form>
		</p>
		<div id="signInPageButtons">
			<a href="tutorial.html">Tutorial</a> | 
			<a href="home.html">Skip to Home</a> | 
			<div class='popbox'>
          		<a class='open' href='register.html'>Register</a>
				<div class='collapse'>
            		<div class='box'>
					  <div class='arrow'></div>
					  <div class='arrow-border'></div>
					  
					  <?php include("register.html"); ?>
					  
					  <a href="#" class="close">Close</a>
					</div>
				  </div>
				</div>
		</div>
	</div>
</body>

</html>
