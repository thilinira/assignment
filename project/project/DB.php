<?php
$servername="localhost";
$username="root";
$password="";
// Create connection
$conn = new mysqli($servername, $username, $password);
$sql = "CREATE DATABASE Travel_Req";
    
if($conn->query($sql)===TRUE)
    {
        echo "Database was created successfully.";
    }
    else
    {
        echo "Error".$conn->Error;
    }
$conn->close();
?>