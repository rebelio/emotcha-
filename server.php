<?php
echo "check";
$servername = "localhost";
$username = "root";
$password = "limboda";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} 
echo "Connected successfully";
$result = mysql_query("SELECT * FROM session");

$row = mysql_fetch_array($result);

echo $row['name'];

?>



