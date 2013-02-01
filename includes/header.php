<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>css/style.css" type="text/css">
	<link rel="shortcut icon" href="<?php echo $assetsPath; ?>favicon.ico">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://use.edgefonts.net/vera-sans.js"></script>
	<script src="<?php echo $assetsPath; ?>js/analytics.js"></script>
</head>
<body>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<a href="/" class="brand">
					<img src="<?php echo $assetsPath; ?>img/kfalcons_logo.png" alt="Team Logo, Black and Orange Falcon" class="logo"/>
					<h1>Kamikaze Falcons</h1>
				</a>
				<div class="pull-right">
					<ul class="nav">
						  <li><a href="/schedule">Schedule</a></li>
						  <li><a href="http://www.royaloakicearena.com/page/show/637722-monday-d" target="_blank">Standings</a></li>
						  <li><a href="/roster">Roster</a></li>
						  <!--li><a href="#">Media</a></li-->
						  <li><a href="/history">History</a></li>	  
					</ul>
					<a href="http://www.royaloakicearena.com/page/show/510919-royal-oak-adult-league-2012-">
						<img src="<?php echo $assetsPath; ?>img/roahl_glow.png" alt="Royal Oak Adult Hockey League Logo" id="nav_roahl"/>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div id="content">