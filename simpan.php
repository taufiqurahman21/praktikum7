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

//menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$bidang = $_POST['bidang'];
$wilayah = $_POST['wilayah'];

//query untuk menambahkan data ke tabel pegawai
mysqli_query($conn, "INSERT INTO pegawai VALUES('$id', '$nama', '$bidang', '$wilayah')");

//redirect ke halaman utama
header("location:http://localhost/praktikum_php2/pegawai2.php");
?>