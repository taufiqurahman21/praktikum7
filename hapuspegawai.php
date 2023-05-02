<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpegawai";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if id_pegawai parameter is set
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Delete data pegawai from pegawai table
    $sql = "DELETE FROM pegawai WHERE id_pegawai = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Data pegawai berhasil dihapus";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Pegawai</title>
</head>
<body>
<a href="pegawai2.php" class="btn btn-secondary">Kembali ke Daftar Pegawai</a>
</body>
</html>