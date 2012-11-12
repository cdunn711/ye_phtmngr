
<!DOCTYPE html>
<html>
<head>
	<title>Idomap</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/screen.css">
	<link rel="stylesheet" type="text/css" href="css/popbox.css">
	<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
	<!--<script src="js/jquery.tools.min.js"></script>
	<script src="js/jquery-1.8.2.min.js"></script>-->
	<script src="js/jquery.roundabout.min.js"></script>
	<script src="js/jquery-easing.js"></script>
	<script src="js/jquery.event.drag-2.2.js"></script>
	<script src="js/jquery.event.drop-2.2.js"></script>
	<script src="js/jquery.event.drag.live-2.2.js"></script>
	<script src="js/jquery.event.drop.live-2.2.js"></script>
	<script src="js/jquery-bpopup.js"></script>
	<script src="js/javascript.js"></script>
	<script src="js/timeliner.min.js"></script>	
 	<link href='http://fonts.googleapis.com/css?family=Nixie+One|Syncopate|Unica+One|Cedarville+Cursive|Homemade+Apple|Amatic+SC:400,700|Gruppo|Jura' rel='stylesheet' type='text/css'>

</head>
<body>
	<?php
		session_start();
		include('navbar.php');
	?>
	<div id="userheader">
		<?php
			$id = $_SESSION['id'];
			$dbh = new PDO('mysql:host=localhost; dbname=Idomap', "team", "teampass");	
			$getName = $dbh->prepare("SELECT first_name, last_name FROM UserInfos WHERE user_id = ?");
			if ($getName->execute(array($id))){
				$name = $getName->fetch();
				echo "<span class='name'>$name[0] $name[1]</span>";
			}
			else
				header('Location: ../Error.html');
		?>
		<!-- <span class="name">Ketetha Olengue</span> -->
		<span class="tagline">Time moves in one direction...</span>
		<span class="view"><a href="">Timeline</a> | <a href="">Moments</a></span>
		<img src="http://aux.iconpedia.net/uploads/11296555161076849797.png" id="avatar" alt="avatar"/>
		<div class="infobox photobox">
			<span class="key">PHOTOS</span>
			<span class="num">309</span>
		</div>
		<div class="infobox followerbox">
			<span class="key">FOLLOWERS</span>
			<span class="num">9019</span>
		</div>
		<div class="infobox followingbox">
			<span class="key">FOLLOWING</span>
			<span class="num">34</span>
		</div>
		<br/>
	</div>
	
	<div id="timelineContainer">
		<dl class="timelineMinor">
			<dt id="event01"><a class='eventname'>2012</a></dt>
			<dd class="timelineEvent" id="event01EX" style="display: none; ">
				<p>
					<span class="controls event01">
						<a class="prev"><<</a> | <a class="control-play on">&#9689;</a> | <a class="next">>></a>
					</span>
					<ul class="roundabout-holder full">
						<li class="roundable-moveable-item"><img src="img/photo-3.jpg" class="photo"/>
							<span class="date">May, 21 2012</span></li>
						<li class="roundable-moveable-item"><img src="img/photo-3.jpg" class="photo"/>
							<span class="date">May, 22 2012</span></li>
						<li class="roundable-moveable-item"><img src="img/photo-3.jpg" class="photo"/>
							<span class="date">May, 23 2012</span></li>
						<li class="roundable-moveable-item"><img src="img/photo-3.jpg" class="photo"/>
							<span class="date">May, 24 2012</span></li>
						<li class="roundable-moveable-item"><img src="img/photo-3.jpg" class="photo"/>
							<span class="date">May, 25 2012</span></li>
						<li class="roundable-moveable-item"><img src="img/photo-3.jpg" class="photo"/>
							<span class="date">May, 26 2012</span></li>
					</ul>
				</p>
			</dd><!-- /.timelineEvent -->
		</dl><!-- /.timelineMinor -->
		<dl class="timelineMinor">
			<dt id="event02"><a class='eventname'>2011</a></dt>
			<dd class="timelineEvent" id="event02EX" style="display: none; ">
				<p>
					<span class="controls event02">
						<a class="prev"><<</a> | <a class="control-play on">&#9689;</a> | <a class="next">>></a>
					</span>
					<ul class="roundabout-holder full">
						<li class="roundable-moveable-item"><img src="img/photo-3.jpg" class="photo"/>
							<span class="date">May, 21 2012</span></li>
						<li class="roundable-moveable-item"><img src="img/photo-3.jpg" class="photo"/>
							<span class="date">May, 22 2012</span></li>
						<li class="roundable-moveable-item"><img src="img/photo-3.jpg" class="photo"/>
							<span class="date">May, 23 2012</span></li>
						<li class="roundable-moveable-item"><img src="img/photo-3.jpg" class="photo"/>
							<span class="date">May, 24 2012</span></li>
						<li class="roundable-moveable-item"><img src="img/photo-3.jpg" class="photo"/>
							<span class="date">May, 25 2012</span></li>
						<li class="roundable-moveable-item"><img src="img/photo-3.jpg" class="photo"/>
							<span class="date">May, 26 2012</span></li>
					</ul>
				</p>
			</dd><!-- /.timelineEvent -->
		</dl><!-- /.timelineMinor -->
		<dl class="timelineMinor">
			<dt id="event03"><a class='eventname'>2010</a></dt>
			<dd class="timelineEvent" id="event03EX" style="display: none; ">
				<p>
					<span class="controls event03">
						<a class="prev"><<</a> | <a class="control-play on">&#9689;</a> | <a class="next">>></a>
					</span>
					<ul class="roundabout-holder full">
						<li class="roundable-moveable-item"><img src="img/photo-3.jpg" class="photo"/>
							<span class="date">May, 21 2012</span></li>
						<li class="roundable-moveable-item"><img src="img/photo-3.jpg" class="photo"/>
							<span class="date">May, 22 2012</span></li>
						<li class="roundable-moveable-item"><img src="img/photo-3.jpg" class="photo"/>
							<span class="date">May, 23 2012</span></li>
						<li class="roundable-moveable-item"><img src="img/photo-3.jpg" class="photo"/>
							<span class="date">May, 24 2012</span></li>
						<li class="roundable-moveable-item"><img src="img/photo-3.jpg" class="photo"/>
							<span class="date">May, 25 2012</span></li>
						<li class="roundable-moveable-item"><img src="img/photo-3.jpg" class="photo"/>
							<span class="date">May, 26 2012</span></li>
					</ul>
				</p>
			</dd><!-- /.timelineEvent -->
		</dl><!-- /.timelineMinor -->
	</div><!-- /#timelineContainer -->
	<?php
		include('navbar.php')
	?>

</body>
</html>