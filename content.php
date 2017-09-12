<!DOCTYPE html>
<html>

	<head>
		<title>Content</title>
		<link href="styles/basicpagestyle.css" rel="stylesheet"> 
		<link href="styles/contentpagestyle.css" rel="stylesheet"> 
		<link href="styles/tabs.css" rel="stylesheet">
	</head>

	<body id="contentPage">

		<div id="header">
			<img src="http://placehold.it/400x130&text=%5Blogo%5D"></img>
		</div>

		<?php include("tabbar.html");?>
		
		<div id="main"> 
		    <div id="content1">
		    	<h1>News & Events</h1>
		    	<?php include("news.html");?>
		    </div>

		    <div id="content2">
		    	<h1>Patient Portal</h1>
		    	<?php include("patients.html");?>
		    </div>
		    
		    <div id="content3">
		    	<h1>Practitioner Portal</h1>
		    	<?php include("practitioners.html");?>
		    </div>
		</div>

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="scripts/tabs.js"></script>

		<div id="footer">
			&copy 2014 - All Rights Reserved.
		</div>

	</body> 

</html>