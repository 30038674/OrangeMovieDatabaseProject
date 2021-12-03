<?php
require("connect.php");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$favgenre = $_POST["favgenre"];

if(isset($_POST['breaking']) && 
   $_POST['breaking'] == '1') 
{
    $breaking = 1;
}
else
{
    $breaking = 0;
}	

try {
    $sql = "INSERT INTO `members` (firstname,lastname,email,favgenre,breaking) 
    VALUES ('" . $firstname . "','" . $lastname . "','" . $email . "','" . $favgenre . "','" . $breaking . "')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
  
$conn = null;
header("Location: subaccept.php");
?>