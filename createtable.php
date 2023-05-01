<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBLiga";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}

// Create table
$sql = "CREATE TABLE liga (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    kode VARCHAR(3) NOT NULL,
    negara VARCHAR(30) NOT NULL,
    champion int(3)
    )";

if(mysqli_query($conn, $sql)){
    echo "New record created succesfully";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}