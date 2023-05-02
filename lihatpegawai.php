<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Pegawai</title>

    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h1>Detail Pegawai</h1>

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

            // Get id_pegawai from URL
            $id_pegawai = $_GET['id'];

            // Select data from pegawai and wilayah tables based on id_pegawai
            $sql = "SELECT p.id_pegawai, p.nama, p.bidang, w.kota
                    FROM pegawai p
                    JOIN wilayah w ON p.id_wilayah = w.id_wilayah
                    WHERE p.id_pegawai = '$id_pegawai'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "<p><strong>ID Pegawai:</strong> " . $row["id_pegawai"] . "</p>";
                echo "<p><strong>Nama:</strong> " . $row["nama"] . "</p>";
                echo "<p><strong>Bidang:</strong> " . $row["bidang"] . "</p>";
                echo "<p><strong>Wilayah:</strong> " . $row["kota"] . "</p>";
            } else {
                echo "<p>No records found.</p>";
            }

            mysqli_close($conn);
        ?>

        <div class="row mt-3">
            <div class="col-md-12">
                <a href="pegawai2.php" class="btn btn-secondary">Kembali ke Daftar Pegawai</a>
            </div>
        </div>
    </div>

    <!-- Load Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
            integrity="sha256-YGGTTf/RGFXLO/LR+yBhtXjxEyONhLlqA3LuTY18lNk="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
