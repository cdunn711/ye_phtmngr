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
	<?php
		include('navbar.php');
	?>
	<span class="header">Settings</span>
	<div class="contentbox one-edge-shadow">
		<span class="links"><a href="#settings1" id="settinglink1">Account Settings</a> | <a href="#settings2" id="settinglink2">Photo Options</a> | <a href="#other" id="settinglink3">Link 3</a></span>
		<br/><br/>
		<div id="settings1" class="current">
			<table>
				<form id="register" name="register" method="post" action="php/update.php">
					<tr>
						<td colspan=2>Form 1</td>
					</tr>
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
						<td>New Password:</td>
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
						<td colspan="2"><input class="button" type="submit" value="Save"/></td>
					</tr>
				</form>
			</table>
		</div>		
		<div id="settings2">
			<table>
				<form id="register" name="register" method="post" action="php/update.php">
					<tr>
						<td colspan=2>Form 2</td>
					</tr>
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
						<td colspan="2"><input class="button" type="submit" value="Save"/></td>
					</tr>
				</form>
			</table>
		</div>
	</div>
</body>

</html>