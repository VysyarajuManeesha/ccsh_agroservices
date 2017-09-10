<?php
 
require 'connection.php';
$conn    = Connect();

$o_name    = $conn->real_escape_string($_POST['o_name']);
$o_phone   = $conn->real_escape_string($_POST['o_phone']);
$l_size   = $conn->real_escape_string($_POST['l_size']);
$village   = $conn->real_escape_string($_POST['village']);
$district   = $conn->real_escape_string($_POST['district']);
$water   = $conn->real_escape_string($_POST['water']);
$soil   = $conn->real_escape_string($_POST['soil']);
$issues   = $conn->real_escape_string($_POST['issues']); 
$submit   = $conn->real_escape_string($_POST['submit']);


$query   = "INSERT into details(o_name,o_phone,l_size,village,district,water,soil,issues,submit) VALUES('" . $o_name . "','" . $o_phone . "','" . $l_size . "','" . $village. "','" . $district . "','" . $water. "','" . $soil . "','" . $issues . "','" . $submit . "')";
//echo $query;
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}

$id = $conn->insert_id;
 
echo "Thank You For Contacting Us <br>
			We will reply you soon<br>
			Your Request-ID is:".$id."<br/>";
 
$conn->close();
 
?>