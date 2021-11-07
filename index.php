<!DOCTYPE html>
	<!-- Team Orange: Web Movie Database -->
	<!-- Team: Ben, Jaron, Chris-->
	<!-- original project base: Ben -->
	<!--  -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	
	
	<head>
		<!-- Code Comment -->
		<title>Home</title>
	</head>

	<body>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="bargraph.php">Top10</a></li>
		</ul>
		
		<h1>SMT Movie Database</h1>
		
		<main>
			<article class="col-lg-12" align='center'>
				<br>
				<p>Use the fields below to search our database!</P>
				
					<form action="searchscr.php" method="post">
                        <div class="form-group col-lg-3">
							<label for="title">Title:</label>
							<input type="text" class="form-control" id="title" name="title">
							<label for="year">Year:</label>
							<input type="text" class="form-control" id="year" name="year">
							<br>
							<label for="rating">Rating:</label>
							<input type="text" class="form-control" list="rating_list" id="rating" name="rating">
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
								
							<label for="genre">Genre:</label>
							<input type="text" class="form-control" list="genre_list" id="genre" name="genre">
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
                        <button type="submit" formaction="searchscr.php" class="btn btn-default">Search Database</button>
                        </div>
						
                    </form>
				
			</article>
		</main>
    
	</body>

</html>