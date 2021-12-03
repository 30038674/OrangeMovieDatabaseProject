<?php
require("connect.php");

$email = $_POST["email"];

try {
    $sql = "DELETE FROM members WHERE email='" . $email . "'";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
  
$conn = null;
header("Location: adminlistunsubs.php");
?>