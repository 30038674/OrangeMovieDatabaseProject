<!DOCTYPE html>
<html lang="en">

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
            <h1>Create your Login!!</h1>
            <form method="post">
                <label><p style="font-size: 1.5em; text-align: center;">Username:&nbsp;&nbsp;<input name="username" id="username" type="text" /></p></label>
                <label><p style="font-size: 1.5em; text-align: center;">Password:&nbsp;&nbsp;&nbsp;<input name="password" id="password" type="text" /></p></label>
                <label><p style="font-size: 1.5em; text-align: center;"> Enter a token if applicable, or else ignore token</p></label>
                <label><p style="font-size: 1.5em; text-align: center;">Token:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="token" id="token" type="text" /></p></label>
                <p style="text-align: center;"><input name="submit" type="submit" value="Create" /></p>
            </form>
            <?php require "createLogin_scr.php" ?>
        </article>
    </main>

</body>

</html>
