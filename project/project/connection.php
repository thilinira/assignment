<?php
$servername="localhost";
$username="root";
$password="";
$db-name="database"; 
// Create connection
$conn = new mysqli($servername, $username, $password,$db-name);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}else{
echo "";
}
?>
