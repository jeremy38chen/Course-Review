<?php
$Host="localhost";
$UserName="cl42895";
$Password="1qaz@WSX";
$Database="lychee";
$Connection=mysqli_connect($Host,$UserName,$Password,$Database);
if($Connection) {
  echo '<h1>Connected to MySQL</h1>';
  //if connected then Select Database.
  //$db=mysql_select_db("lychee",$Connection);
  //$query=mysql_query("YOUR_MYSQL_QUERY",$db);
}
else {
  echo '<h1>MySQL Server is not connected</h1>';
}
/*
$servername = "localhost";
$username = "cl42895";
$password = "1qaz@WSX";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
*/
?>
