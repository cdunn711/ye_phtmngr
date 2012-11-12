<!DOCTYPE html>
<html>
<head>
	<title>Idomap</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/popbox.css">
	<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
	<!--<script src="js/jquery.tools.min.js"></script>
	<script src="js/jquery-1.8.2.min.js"></script>-->
	<script src="js/jquery.roundabout.min.js"></script>
	<script src="js/jquery-easing.js"></script>
	<script src="js/jquery.event.drag-2.2.js"></script>
	<script src="js/timeliner.min.js"></script>
	<script src="js/jquery.event.drop-2.2.js"></script>
	<script src="js/jquery.event.drag.live-2.2.js"></script>
	<script src="js/jquery.event.drop.live-2.2.js"></script>
	<script src="js/jquery-bpopup.js"></script>
	<script src="js/javascript.js"></script>	
 	<link href='http://fonts.googleapis.com/css?family=Nixie+One|Syncopate|Unica+One|Cedarville+Cursive|Homemade+Apple|Amatic+SC:400,700|Gruppo|Jura' rel='stylesheet' type='text/css'>

</head>

<body>
	<span id="title">id&#246;map</span>
	<div class="signIn one-edge-shadow on">
		<span class="button bClose menu"><span>X</span></span>
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
		<a class="prev"><<</a> | <a class="control-play on">&#9689;</a> | <a class="next">>></a>
		<form id="signIn" name="signIn" method="post">
			<label for="userName">Username:</label>
			<br/><input type="text" name="userName" id="userName"/>
			<br/><label for="password">Password:</label>
			<br/><input type="password" name="password" id="password" autocomplete="off"/>
			<br/><input class="button" type="submit" value="Sign in"/>
		</form>
		</p>
		<div id="signInPageButtons">
			<a href="tutorial.html">Tutorial</a> | 
			<a href="home.html">Skip to Home</a> | 
			<a id="goRegister">Register</a>
		</div>
	</div>
	
	<div class='register'>
		<h1>Register</h1>
		<span class="button bClose"><span>X</span></span>
		<table>
		<form id="register" name="register" method="post" action="php/register.php">
			<tr>
				<td>First Name:</td>
				<td><input type="text" name="firstName" id="firstName" required="required"/></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type="text" name="lastName" id="lastName"/></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email" id="email" required="required"/></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" id="password" required="required" autocomplete="off"/></td>
			</tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type="password" name="confirm" id="confirm" required="required" autocomplete="off"/></td>
			</tr>
				<td>Birthday:</td>
				<td><input type="date" name="birthMonth" value="" placeholder="MM/DD/YYYY"/></td>
			<tr>
				<td>Sex:</td>
				<td>
					<select id="sex" name="sex">
						<option value="m">Male</option>
						<option value="f">Female</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Privacy:</td>
				<td>
					<select id="privacy" name="privacy">
						<option value="public">Public</option>
						<option value="private">Private</option>
					</select>
				</td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan="2"><input class="button" type="submit" value="Sign up"/></td>
			</tr>
		</form>
		</table>
	</div>
</body>

</html>
