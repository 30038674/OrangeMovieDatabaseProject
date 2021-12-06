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

$user = $stmt->fetch();

if (password_verify($password, $user['hashedPassword'])) {
    
    if ($user['adminLevel'] == 2){
            echo " <form action='adminlistsubs.php'>
    <center><input type='submit' value='View Members' /></center>
    </form>
    <form action='adminlistunsubs.php'>
    <center><input type='submit' value='View Unsubscribe Requests' /></center>
    </form>"; 
    } else if ($user['adminLevel'] == 1) {
        echo "
        <form action='adminlistsubs.php'>
    <center><input type='submit' value='View Members' /></center>
    </form>"; 
    } else if ($user['adminLevel'] == 0){
        echo " <form action='subscribe.php'>
        <center><input type='submit' value='Subscribe to newsletter' /></center>
        </form>
        <form action='unsubscribe.php'>
        <center><input type='submit' value='Unsubscribe to newsletter' /></center>
        </form>";
    }


} else if (isset($username) && isset($password)){
    echo "<p align=center>Incorrect Username / Password</p>";
}