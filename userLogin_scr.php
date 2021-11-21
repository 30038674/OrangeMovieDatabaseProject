<?php

require("connect.php");

$username = $_POST["username"];
$password = $_POST["password"];


$query = "SELECT * FROM account WHERE username = ?";
try {
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $username);
    $stmt->execute();
} catch (PDOException $e) {
    echo 'Query error.';
    echo $e;
    die();
}

echo $query;
$user = $stmt->fetch();

if (password_verify($password, $user['hashedPassword'])) {
    echo "<p align=center>You have Logged-In!!!</p>";
} else {
    echo "<p align=center>Incorrect Username / Password</p>";
}
