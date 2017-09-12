<!DOCTYPE html>
<html>

	<head>
		<title>Home</title>
		<link href="styles/basicpagestyle.css" rel="stylesheet"> 
		<link href="styles/tabs.css" rel="stylesheet">
		<link href="styles/frontpagestyle.css" rel="stylesheet">
		<link href="styles/slideshowstyle.css" rel="stylesheet">
	</head>

	<body id="homePage">

		<div id="header">
			<img src="http://placehold.it/400x130&text=%5Blogo%5D"></img>
		</div>

		<?php include("tabbar.html");?>
		
		<div id="main"> 
			<div id="slides">
				<?php include("slideimg.html");?>
			</div>

			<div id="content">
				<ul class="portalList">
					<h3>News & Events</h3>

					<li>---</li>
					<li>---</li>
					<li>---</li>
					<li>---</li>
				</ul>

				<ul class="portalList">
					<h3>Patient Portal</h3>
					
					<li>---</li>
					<li>---</li>
					<li>---</li>
					<li>---</li>
				</ul>

				<ul class="portalList">
					<h3>Practitioner Portal</h3>
					
					<li>---</li>
					<li>---</li>
					<li>---</li>
					<li>---</li>
				</ul>

				<span class="stretch"></span>
			</div>
		</div>

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="scripts/jquery.slides.js"></script>

		<script>
			$(function(){
			  $("#slides").slidesjs({
			  	width:840,
			  	height:250,
			  	navigation: false,
		        play: {
		          active: false,
		          auto: true,
		          interval: 5000,
		          pauseOnHover: true,
		          restartDelay: 4000
		        }
			  });
			});
		</script>

		<script src="scripts/tabs.js"></script>

		<div id="footer">
			&copy 2014 - All Rights Reserved.
		</div>

	</body> 

</html>