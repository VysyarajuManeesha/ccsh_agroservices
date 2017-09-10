
 <?php
  /* $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'INSERT INTO eg'.
      '(name,id,city) '.
      'VALUES ( "guest", '123' 'SSS' )';
      
   mysql_select_db('agroservices')
   $retval = mysql_query( $sql, $conn )
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   
   mysql_close($conn);

$username = 'root';
$password = '';
$db = 'agroservices';

$conn = new mysqli ('localhost',$username, $password, $db) or die("unable to connect");

$sql="insert into eg(name,id,phno) values ('sarat','234',2356189)";
$query=mysqli_query($conn,$sql);
if($query)
    echo 'data inserted';*/

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

/*// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}*/
// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>
 
 
<html>
 <head>
 <title> php</title>
 </head>
 <body>
 </body>