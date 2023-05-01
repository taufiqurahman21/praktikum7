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

//query wilayah
$sql = "SELECT * FROM wilayah";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Pegawai</title>
</head>
<body>
	<h2>Tambah Data Pegawai</h2>

	<form method="POST" action="simpan.php">
        <label>ID:</label>
		<input type="text" name="id"><br>
		<label>Nama:</label>
		<input type="text" name="nama"><br>
		<label>Bidang:</label>
		<input type="text" name="bidang"><br>
		<label>Wilayah:</label>
        <select class="form-select" id="wilayah" name="wilayah" required>
                            <option value="">Pilih Wilayah</option>
        <?php
                            //looping data wilayah
                            while($row = mysqli_fetch_assoc($result)){
                                echo '<option value="'.$row['id_wilayah'].'">'.$row['kota'].'</option>';
                            }

                            ?>
                            </select>
		<button type="submit">Simpan</button>
	</form>
</body>
</html>