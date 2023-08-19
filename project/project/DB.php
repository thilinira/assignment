<?php
$servername="localhost";
$username="root";
$password="";
// Create connection
$conn = new mysqli($username, $password);
$sql = "CREATE DATABASE Login Details";
    
if($conn->query($sql)===TRUE)
    {
        echo "Created database successfully.";
    }
    else
    {
        echo "Error".$conn->Error;
    }
$conn->close();
?>
