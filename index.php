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

    <title>OFFICIAL WEBSITE SMK CODING MULUS</title>
  </head>
  <body background="image/sekolah 1.png">
    <div class="container text-center">
        <div class="hero">
            <header style="margin-top: 220px; color: white;">
                <h4>Pendaftaran Siswa Baru</h4>
                <h1 class="fw-bold">SMK CODING MULU</h1>
            </header>
            <h4 style="color: white; margin-top: 40px">Menu</h4>
            <div class="tombol" style="margin-top: 20px">
                <a class="btn btn-warning" href="form-daftar.php" role="button" style="color: white; padding: 10px 70px 10px 70px">Daftar Baru</a> <br> <br>
                <a class="btn btn-warning" href="list-siswa.php" role="button" style="color: white; padding: 10px 63px 10px 63px">List Pendaftar</a>
            </div>
        </div>
    </div>

    <!-- query penyimpanan -->
    <?php if (isset($_GET['status'])): ?>
      <p>
        <?php
          if($_GET['status'] == 'sukses') {
            echo "Pendaftaran Berhasil!"; 
          } else {
            echo "Pendaftaran Gagal!";
          }
        ?>  
      </p>
    <?php endif; ?> 


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>