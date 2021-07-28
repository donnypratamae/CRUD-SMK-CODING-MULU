<?php include("config.php"); ?>

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

    <title>Pendaftaran Siswa Baru | SMK CODING MULU</title>

    <style>
        * {
            font-family: 'Poppins';
        }
    </style>
  </head>
  <body class="text-center">
    <div class="container">
        <header style="margin: 40px 0 20px 0">
            <h1>Siswa yang sudah mendaftar</h1>
        </header>

        <div class="tombol">
            <a class="btn btn-warning fw-bold" href="form-daftar.php" role="button" style="color: white; margin: 0 0 30px 0">[+] Tambah Baru</a>
            <a class="btn btn-outline-warning fw-bold" href="cetak.php" role="button" style="margin: 0 0 30px 0">Cetak Laporan</a>
        </div>

        <!-- isi -->
        <table border="1" align="center" style="text-align: center; text-transform: uppercase;" cellpadding="20">
            <thead>
                <tr class="fw-bold">
                    <th bgcolor="yellow" style="padding: 10px 50px 10px 50px">No</th>
                    <th bgcolor="yellow" style="padding: 0 50px 0 50px">Nama</th>
                    <td bgcolor="yellow" style="padding: 0 50px 0 50px">Alamat</td>
                    <td bgcolor="yellow" style="padding: 0 50px 0 50px">Jenis Kelamin</td>
                    <td bgcolor="yellow" style="padding: 0 50px 0 50px">Agama</td>
                    <td bgcolor="yellow" style="padding: 0 50px 0 50px">Sekolah Asal</td>
                    <td bgcolor="yellow" style="padding: 0 50px 0 50px">Tindakan</td>
                </tr>
            </thead>

            <tbody>
                <?php

                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);

                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>".$siswa['id']."</td>";
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['agama']."</td>";
                    echo "<td>".$siswa['sekolah_asal']."</td>";

                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$siswa['id']."'><button>Edit</button></a> | ";
                    echo "<a href='hapus.php?id=".$siswa['id']."'><button>Hapus</button></a>";

                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <p style="text-align:start; margin-top: 20px;" class="fw-bold" >Total: <?php echo mysqli_num_rows($query)?></p>
                </div>
                <div class="col-lg text-end">
                    <a class="btn btn-warning fw-bold" href="index.php" role="button" style="color: white; margin: 13px 0 0 0">Kembali</a>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>