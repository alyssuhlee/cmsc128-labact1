<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error){
   die("Connection failed: " . $conn->connect_error);
}

$createDB = "CREATE DATABASE login_database";
if ($conn->query($createDB) === TRUE){
   echo "Database created successfully";

}else{
   echo "Error creating database: " . $conn->error;
}

$conn->close();

?>