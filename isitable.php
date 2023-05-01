<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBLiga";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql ="INSERT INTO Liga (kode, negara, champion)
VALUES ('Jer', 'Jerman', '4'), ('Spa', 'Spanyol', '3'), ('Eng', 'English', '3')";

if(mysqli_query($conn, $sql)){
    echo "New record created succesfully";
}else{
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn)
?>