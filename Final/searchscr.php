<?php
require("connect.php");

if (isset($_POST['title'])){
	$title= $_POST['title'];
}else{
	$title=null;
}
if (isset($_POST['year'])){
	$year= $_POST['year'];
}else{
	$year=null;
}
if (isset($_POST['rating'])){
	$rating= $_POST['rating'];
}else{
	$rating=null;
}
if (isset($_POST['genre'])){
	$genre= $_POST['genre'];
}else{
	$genre=null;
}

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

try {
	$query = "SELECT ID, Title, Rating, Year, Genre, Stars FROM movies";
	$andParts = array();

	if(!empty($title))
		$andParts[] = "title LIKE '%$title%'";
	if (!empty($year))
		$andParts[] = "year = '$year'";
	if (!empty($rating))
		$andParts[] = "rating = '$rating'";
	if (!empty($genre))
		$andParts[] = "genre = '$genre'";
	if (!empty($andParts))
	   $query .= " WHERE ".implode(" AND " , $andParts);
	$stmt = $conn->prepare($query);
	$stmt->execute();
	
	// set the resulting array to associative
	//$rows = $stmt->fetchAll();
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$count = 0;
	if (empty($result))
		echo 'empty';
	
	echo "<table style='border: solid 1px black;'>";
	echo "<tr><th>ID</th><th>Title</th><th>Rating</th><th>Year</th><th>Genre</th><th>Stars</th></tr>";

	foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
		echo $v;
		$count++;
	}
	if ($count == 0){
		echo 'Sorry, your search returned no results. <br><br>';
		
	}
	
	
} catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}

$conn = null;
echo "</table>";

?>