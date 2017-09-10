<?php
//Step1
 $db = mysqli_connect('localhost','root','','agroservices')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 <title> php</title>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>

<?php
//Step2
$query = "SELECT * FROM eg";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);

while ($row = mysqli_fetch_assoc($result)) {
 echo $row["name"] . "" . $row["id"] . ": " . $row["city"] . "<br/>";
}
mysqli_close($db);
?>
</body>
</html>