<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawai</title>

    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h1>Data Pegawai</h1>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID Pegawai</th>
                            <th>Nama</th>
                            <th>Bidang</th>
                            <th>Wilayah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
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

                            // Select data from pegawai and wilayah tables
                            $sql = "SELECT p.id_pegawai, p.nama, p.bidang, w.kota
                                    FROM pegawai p
                                    JOIN wilayah w ON p.id_wilayah = w.id_wilayah";

                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row["id_pegawai"] . "</td>";
                                    echo "<td>" . $row["nama"] . "</td>";
                                    echo "<td>" . $row["bidang"] . "</td>";
                                    echo "<td>" . $row["kota"] . "</td>";
                                    echo '<td>
                                    <a href="#" class="btn btn-primary" >Lihat</a>
                                    <a href="#" class="btn btn-secondary">Edit</a>  
                                    <a href="#" class="btn btn-danger">Delete</a>
                                    </td>';
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5'>No records found</td></tr>";
                            }

                            mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <a href="tambahpegawai.php" class="btn btn-success">Tambah Pegawai</a>
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
