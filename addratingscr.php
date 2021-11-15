<?php
require("connect.php");

$id = $_POST["id"];
$stars = $_POST["stars"];

try {
    $sql = "UPDATE movies SET TotalStars = TotalStars + '" . $stars . "', NumberOfRatings = NumberOfRatings + 1 WHERE id='" . $id . "'";
    // use exec() because no results are returned
    $conn->exec($sql);
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
  
$conn = null;
header("Location: search.php");
?>
