<!DOCTYPE html>
<html lang="en">
	<!-- Team Orange: Web Movie Database -->
	<!-- Team: Ben, Jaron, Chris-->
	<!-- original project base: Ben -->
	<!-- Version: 2.0 (First Release) -->
	<!-- Version History: 
	0.1 Admin page added to build 2.0 -->
	<!--  -->

	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h1>Admin Page: Please Enter your Login!!</h1>
            <form method="post">
                <p style="font-size: 1.5em; text-align: center;">Username:&nbsp;&nbsp;<input name="username" id="username" type="text" /></p>
                <p style="font-size: 1.5em; text-align: center;">Password:&nbsp;&nbsp;&nbsp;<input name="password" id="password" type="text" /></p>
                <p style="text-align: center;"><input name="submit" type="submit" value="Login" /></p>
            </form>
            <?php require "userLogin_scr.php"; ?>

			</article>
		</main>
    
	</body>
</html>
