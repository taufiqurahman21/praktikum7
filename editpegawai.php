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

//menangkap id yang dikirim dari halaman pegawai2.php
$id = $_GET['id'];

//query untuk mengambil data pegawai berdasarkan id
$data = mysqli_query($conn, "SELECT * FROM pegawai WHERE id_pegawai='$id'");
$row = mysqli_fetch_assoc($data);

//query wilayah
$sql = "SELECT * FROM wilayah";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Pegawai</title>
</head>
<body>
	<h2>Edit Data Pegawai</h2>

	<form method="POST" action="simpanedit.php">
        <label>ID:</label>
		<input type="text" name="id" value="<?php echo $row['id_pegawai']; ?>"><br>
		<label>Nama:</label>
		<input type="text" name="nama"value="<?php echo $row['nama']; ?>"><br>
		<label>Bidang:</label>
		<input type="text" name="bidang" value="<?php echo $row['bidang']; ?>"><br>
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
                <a href="pegawai2.php" class="btn btn-secondary">Kembali ke Daftar Pegawai</a>
</body>
</html>