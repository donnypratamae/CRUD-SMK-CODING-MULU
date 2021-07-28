<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- icon -->
    <link rel="icon" href="image/icon.png">

    <title>Cetak Laporan Pendaftaran | SMK CODING MULU</title>
  </head>
  <body style="margin: 0; padding: 0">
    <div class="container">
        <!-- judul -->
        <center style="margin: 40px 0 10px 0">
            <h2>SMK CODING MULU</h2>
            <h3>DATA LAPORAN PENDAFTARAN SISWA</h3>
            <hr>
        </center>

        <!-- php -->
        <?php include('config.php'); ?>

        <!-- isi -->
        <table border="1" style="width: 100%; text-align: center" cellpadding="15">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Asal Sekolah</th>
            </tr>

            <!-- php -->
            <?php 
                $no = 1;
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);

                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>".$no++; "</td>";
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['agama']."</td>";
                    echo "<td>".$siswa['sekolah_asal']."</td>";

                    echo "</tr>";
                }
            ?>
        </table>


        
        <p align="right" class="mt-4">Penitia Pendaftaran
        <br><br>TTD<br><br>
            <b>Donny Pratama</b>
        </p>
    </div>

    <!-- js untuk print -->
    <script>
        window.print();
    </script>
  

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>