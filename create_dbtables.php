<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE register(
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
admin TINYINT(4) NOT NULL,
username VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE){
   echo "Table register created successfully";
} else {
   echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE queries(
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
phone VARCHAR(255) NOT NULL,
inquiry VARCHAR(255) NOT NULL)";

if ($conn->query($sql) === TRUE){
   echo "Table queries created successfully";
} else {
   echo "Error creating table: " . $conn->error;
}

$conn->close();
?>