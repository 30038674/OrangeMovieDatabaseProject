<?php
require("connect.php");
session_start();
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

$user = $stmt->fetch();

if (password_verify($password, $user['hashedPassword'])) {
    
    echo " <form action='adminlistsubs.php'>
    <center><input type='submit' value='View Members' /></center>
    </form>
    <form action='adminlistunsubs.php'>
    <center><input type='submit' value='View Unsubscribe Requests' /></center>
    </form>";

} else if (isset($username) && isset($password)){
    echo "<p align=center>Incorrect Username / Password</p>";
}