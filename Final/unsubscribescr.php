<?php
require("connect.php");

$email = $_POST["email"];

try {
    $sql = "UPDATE members SET unsubflag='1' WHERE email='" . $email . "'";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
  
$conn = null;
header("Location: unsubaccept.php");
?>