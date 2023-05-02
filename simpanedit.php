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

//menangkap data yang dikirim dari form edit data pegawai
$id = $_POST['id'];
$nama = $_POST['nama'];
$bidang = $_POST['bidang'];
$wilayah = $_POST['wilayah'];

//query update data pegawai
$sql = "UPDATE pegawai SET nama='$nama', bidang='$bidang', id_wilayah='$wilayah' WHERE id_pegawai='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil diupdate";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

//redirect ke halaman utama
header("location:http://localhost/praktikum_php2/pegawai2.php");

mysqli_close($conn);
?>
