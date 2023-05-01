<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawai</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpegawai";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}
// Drop table if it exists
if (mysqli_query($conn, "DROP TABLE IF EXISTS pegawai")) {
    echo "<br><br> ke";
} else {
    echo "<br><br> Error deleting table: " . mysqli_error($con);
}
// Create table
$sql = "CREATE TABLE pegawai (
    id_pegawai INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200) NOT NULL,
    bidang VARCHAR(50) NOT NULL,
    id_wilayah INT(6) UNSIGNED
    )";

if(mysqli_query($conn, $sql)){
    echo "rj";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql ="INSERT INTO pegawai (id_pegawai, nama, bidang, id_wilayah)
VALUES 
('001', 'Nico Barella', 'Backend Developer', '111'), 
('002', 'Saddil Ramdhani', 'UI Designer', '112'), 
('003', 'Ola Solbakken', 'Project Manager', '113')";

if(mysqli_query($conn, $sql)){
    echo "a ";
}else{
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

// Drop table if it exists
if (mysqli_query($conn, "DROP TABLE IF EXISTS wilayah")) {
    echo "<br><br> ba";
} else {
    echo "<br><br> Error deleting table: " . mysqli_error($con);
}

// Create table 2
$sql = "CREATE TABLE wilayah (
    id_wilayah INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    kota VARCHAR(50) NOT NULL
    )";

if(mysqli_query($conn, $sql)){
    echo "g";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql ="INSERT INTO wilayah (id_wilayah, kota)
VALUES 
('111', 'Surabaya'), 
('112', 'Jogja'), 
('113', 'Bandung')";

if(mysqli_query($conn, $sql)){
    echo "u";
}else{
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "ALTER TABLE `pegawai` ADD CONSTRAINT `pegawai_relasi_1` FOREIGN KEY (`id_wilayah`) 
REFERENCES `wilayah`(`id_wilayah`) ON DELETE RESTRICT ON UPDATE RESTRICT;";

if(mysqli_query($conn, $sql)){
    echo "s";
}else{
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

?>
</body>
</html>