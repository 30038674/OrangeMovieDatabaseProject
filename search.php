<!DOCTYPE html>
<html lang="en">
	<!-- Team Orange: Web Movie Database -->
	<!-- Team: Ben, Jaron, Chris-->
	<!-- original project base: Ben -->
	<!-- Version: 2.0 (Second Release) -->
	<!-- Version History: 
	0.1 Search page added to build 2.0 -->
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
			<li><a href="admin.php">Admin</a></li>
		</ul>

		<main>
			<article class="col-lg-12">
            	<h1>SMT Movie Database</h1>
				<br>
				<center><p>Use the fields below to search our database!</p></center>
					<!-- Form for database searching -->
					<form method="post">
                        <div class="form-group col-lg-3">
                        	<p style="text-align: center;">Title:&nbsp;&nbsp;<input type="text" class="form-control" id="title" name="title" /></p>
							<p style="text-align: center;">Year:&nbsp;&nbsp;<input type="text" class="form-control" id="year" name="year" /></p>
                        	<p style="text-align: center;">Rating:&nbsp;&nbsp;<input type="text" class="form-control" list="rating_list" id="rating" name="rating" /></p>
                        	<p style="text-align: center;">Genre:&nbsp;&nbsp;<input type="text" class="form-control" list="genre_list" id="genre" name="genre" /></p>
								<!-- Datalist, allows dropdown box for inputs where inputs may not be known (database construction) -->
                        		<datalist id="rating_list">
									<option value="G"></option>
									<option value="NC-17"></option>
									<option value="NR"></option>
									<option value="PG"></option>
									<option value="PG-13"></option>
									<option value="R"></option>
									<option value="R/NR"></option>
									<option value="R/UR"></option>
									<option value="UNK"></option>
									<option value="UR"></option>
									<option value="UR/R"></option>
									<option value="VAR"></option>
								</datalist>
								<!-- Another datalist -->
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
                        
                        <center><button type="submit" class="btn btn-default">Search Database</button></center>
                        </div>
						
                    </form>
            	<form method="post">
                	<p style="text-align: center;">Film ID:&nbsp;&nbsp;<input type="number" min="1" max="2298" class="form-control" id="id" name="id" /></p>
                	<p style="text-align: center;">Rating:&nbsp;&nbsp;<input type="number" min="0" max="5" class="form-control" list="stars_list" id="stars" name="stars" /></p>
                		<datalist id="stars_list">
							<option value="0"></option>
							<option value="1"></option>
							<option value="2"></option>
							<option value="3"></option>
							<option value="4"></option>
							<option value="5"></option>
						</datalist>
                <center><button type="submit" formaction="addratingscr.php" class="btn btn-default">Add rating to film</button></center>
            	</form>
            	<br><br>
            <center><?php include "searchscr.php"; ?></center>
				
			</article>
		</main>
    
	</body>

</html>
