<?php

require("connect.php");

$username = $_POST["username"];
$password = $_POST["password"];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$query= "INSERT INTO `account` (`id`, `username`, `hashedPassword`) VALUES (NULL, ?, ?)";
$stmt = $conn->prepare($query);

if ($stmt->execute(array($username, $hashed_password))) {
    echo "<p align=center>Account is registered.</p>";
    header("location:userLogin.php");
  } else{
    echo "Query error.";
  }
