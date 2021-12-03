<!DOCTYPE html>
<html lang="en">
	<!-- Team Orange: Web Movie Database -->
	<!-- Team: Ben, Jaron, Chris-->
	<!-- original project base: Ben -->
	<!-- Version: 2.0 (Second Release) -->
	<!-- Version History: 
	0.1 Added bargraph page to site -->
	<!--  -->
	<?php
		$url1=$_SERVER['REQUEST_URI'];
		header("Refresh: 5; URL=$url1");
	?>
	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" http-equiv="refresh" content="10">
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<title>Home</title>
	</head>

	<body>
   		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="search.php">Search</a></li>
			<li><a href="topten.php">Top10</a></li>
			<li><a href="subscribe.php">Subscribe</a></li>
			<li><a href="unsubscribe.php">Unsubscribe</a></li>
			<li style="float:right"><a href="admin.php">Admin Login</a></li>
           		<li style="float:right"><a href='createLogin.php'>Create Account</a></li>
		</ul>
		
		<main>
			<article class="col-lg-12">
            	<h1>The top 10 Movies!</h1>
            	<center><?php //include "toptenscr.php"; ?></center>
				<center><img src="bargraph.php" alt="This is a script generated image that shows the top ten movies of the database"/></center>
				
			</article>
		</main>
    
	</body>

</html>
