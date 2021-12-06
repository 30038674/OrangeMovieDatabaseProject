<?php

require("connect.php");

$username = $_POST["username"];
$password = $_POST["password"];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$_POST["token"];

if ($_POST["token"] == "admin"){
  $token = 2;
} else if ($_POST["token"] == "staff"){
  $token = 1;
} else {
  $token = 0;
}


$query= "INSERT INTO `account` (`id`, `username`, `hashedPassword`, `adminLevel`) VALUES (NULL, ?, ?, $token)";
$stmt = $conn->prepare($query);

if ($stmt->execute(array($username, $hashed_password))) {
    echo "<p align=center>Account is registered.</p>";
	header("location:admin.php");
  } else{
    echo "Query error.";
  }
