<?php
 
require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['name']);
$id   = $conn->real_escape_string($_POST['id']);
$phno   = $conn->real_escape_string($_POST['phno']);
//$message = $conn->real_escape_string($_POST['message']);
$query   = "INSERT into eg(name,id,phno) VALUES('" . $name . "','" . $id . "','" . $phno . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Contacting Us <br>";
 
$conn->close();
 
?>