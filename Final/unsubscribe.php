<!DOCTYPE html>
<html lang="en">
	<!-- Team Orange: Web Movie Database -->
	<!-- Team: Ben, Jaron, Chris-->
	<!-- original project base: Ben -->
	<!-- Version: 2.0 (Second Release) -->
	<!-- Version History: 
	0.1 Unsubscribe page added to build 2.0 -->
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
			<li style="float:right"><a href="admin.php">Admin Login</a></li>
           		<li style="float:right"><a href='createLogin.php'>Create Account</a></li>
		</ul>
		
		<main>
			<article class="col-lg-12">
            	<h1>Unsubscribe Form</h1>
                <form action="unsubscribescr.php" method="post">
                    <div class="form-group col-lg-3">
					<label><p style="text-align: center;">Email:&nbsp;&nbsp;<input type="email" class="form-control" id="email" name="email" /></p></label>
                    </div>
                    <div class="col-lg-10">
                        <br>
                        <center><button type="submit" formaction="unsubscribescr.php" class="btn btn-default">Unsubscribe from our newsletter =(</button></center>
                    </div>
                </form>
			</article>
		</main>

	</body>
</html>
