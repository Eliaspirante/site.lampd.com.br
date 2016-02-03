<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Site to show development works">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/styles.css" />
	<title>Lampd Site</title>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53647915-6', 'auto');
		ga('send', 'pageview');
	</script>

	</head>
	<body>
		<div class="header">
			<div class="row">
				<div class="large-12 columns">
					<h3>Welcome to Lamp D</h3>
				</div>
			</div>

			<div class="row">
				<ul class="menu ">
					<li><a onclick="$('#main').show();$('#about').hide();">Index</a></li>
					<li><a onclick="$('#about').show();$('#main').hide();">About</a></li>
				</ul>
			</div>
		</div>

		<div id="main">

			<div class="row">
				<h5>Site with programming utilities for me ;) </h5>

				<div class="row">
					<div class="large-12 columns">

					</div>
				</div>
			</div>

		</div>
		<?php require_once("about.php"); ?>

		<div class="footer-bottom">
			<div class="row">
				<a href="//github.com/Eliaspirante">GitHub</a>
			</div>
		</div>
		<script src="js/vendor/jquery.min.js"></script>
		<script src="js/vendor/what-input.min.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>