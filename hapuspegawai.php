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

    // Mendapatkan id_bt yang dipilih
    $id_pegawai = $_GET['id_pegawai'];

    // Menghapus data dari tabel
    $sql = "DELETE FROM buku_tamu WHERE id_pegawai = $id_pegawai";
    if (mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success'>Data berhasil dihapus.</div>";
    } else {
        echo "<div class='alert alert-danger'>Terjadi kesalahan saat menghapus data: " . mysqli_error($conn) . "</div>";
    }
    ?>