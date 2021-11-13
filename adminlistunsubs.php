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
			<li><a href="bargraph.php">Top10</a></li>
			<li><a href="subscribe.php">Subscribe</a></li>
			<li><a href="unsubscribe.php">Unsubscribe</a></li>
			<li><a href="admin.php">Admin</a></li>
		</ul>

		<main>
			<article class="col-lg-12">
            	<h1>Admin Page</h1>
                <h1>Unsubscribe Requests</h1>
				<article class="col-lg-12">
                    <center><?php include 'listunsubmembers_scr.php'; ?></center>
                </article>
				<form action="removesubscr.php" method="post">
                    <div class="form-group col-lg-3">
                        <p style="text-align: center;">Email:&nbsp;&nbsp;<input type="text" class="form-control" id="email" name="email" /></p>
						<center><button type="submit" formaction="removesubscr.php" class="btn btn-default">Delete Member</button></center>
                    </div>
                </form>
			</article>
		</main>
    
	</body>

</html>
