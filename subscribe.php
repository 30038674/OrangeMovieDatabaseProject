<!DOCTYPE html>
<html lang="en">
	<!-- Team Orange: Web Movie Database -->
	<!-- Team: Ben, Jaron, Chris-->
	<!-- original project base: Ben -->
	<!-- Version: 2.0 (Second Release) -->
	<!-- Version History: 
	0.1 Subscribe page added to build 2.0 -->
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
		<li style="float:right"><a href="admin.php">Login</a></li>
		<li style="float:right"><a href='createLogin.php'>Create Account</a></li>
		</ul>

		<main>
			<article class="col-lg-12">
            	<h1>Subscribe Form</h1>
                <form action="subscribescr.php" method="post">
                        <div class="form-group col-lg-3">
                        <center><label for="firstname"> First Name: </label><input type="text" class="form-control" id="firstname" name="firstname" /></center></br>
                        <center><label for="lastname"> Last Name: </label><input type="text" class="form-control" id="lastname" name="lastname" /></center></br>
                        <center><label for="email"> Email: </label><input type="email" class="form-control" id="email" name="email" required/></center></br>
                        <center><label for="favgenre"> Favourite Genre: </label><input type="text" class="form-control" list="genre_list" id="favgenre" name="favgenre" /></center></br>
                        <center><label for="breaking"> I also want breaking news! </label><input type="checkbox" class="form-control" id="breaking" name="breaking" value="1" /></center></br>
                            <datalist id="genre_list">
                                <option value="Action/Adventure"></option>
                                <option value="Action/Comedy"></option>
                                <option value="Adventure"></option>
                                <option value="Animation"></option>
                                <option value="Anime"></option>
                                <option value="Ballet"></option>
                                <option value="Comedy"></option>
                                <option value="Comedy/Drama"></option>
                                <option value="Dance / Ballet"></option>
                                <option value="Documentary"></option>
                                <option value="Drama"></option>
                                <option value="Family"></option>
                                <option value="Fantasy"></option>
                                <option value="Foreign"></option>
                                <option value="Horror"></option>
                                <option value="Late Night"></option>
                                <option value="Music"></option>
                                <option value="Musical"></option>
                                <option value="Mystery/Suspense"></option>
                                <option value="Opera"></option>
                                <option value="Other"></option>
                                <option value="Satire"></option>
                                <option value="SciFi"></option>
                                <option value="Special Interest"></option>
                                <option value="Suspense/Thriller"></option>
                                <option value="Thriller"></option>
                                <option value="TV Classics"></option>
                                <option value="VAR"></option>
                                <option value="War"></option>
                                <option value="Western"></option>
                            </datalist>
                        </div>

                        <div class="col-lg-10">
                            <br>
                            <center><button type="submit" formaction="subscribescr.php" class="btn btn-default">Subscribe to our newsletter!</button></center>
                        </div>
                    </form>
			</article>
		</main>
	</body>
</html>
