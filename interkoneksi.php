<html>
    <head>
        <title>koneksi database MySQL</title>
    </head>
    <body>
        <h1>demo koneksi database mysql</h1>
        <?php
        $con = mysqli_connect("localhost","root","");

        if (mysqli_connect_errno()) {
            echo "failed to connect to MySQL" . mysqli_connect_error();
            exit();
        }
        ?>
    </body>
    </html>