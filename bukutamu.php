<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bukutamu";

// Membuat koneksi
$con = mysqli_connect($servername, $username, $password, $dbname);

// Mengecek koneksi
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<table width="400" allign="center" cellpadding="2" cellspacing="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>ISI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM buku_tamu";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['ID_BT'] . "</td>";
                    echo "<td>" . $row['NAMA'] . "</td>";
                    echo "<td>" . $row['EMAIL'] . "</td>";
                    echo "<td>" . $row['ISI'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
</body>
</html>