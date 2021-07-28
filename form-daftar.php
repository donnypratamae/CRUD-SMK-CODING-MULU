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

    <title>Form Pendaftaran | SMK CODING MULU</title>
  </head>
  <body>
    <div class="container">
        <!-- header -->
        <h3 class="fw-bold mb-5 text-center" style="margin: 150px auto;">Formulir Pendaftaran Siswa Baru</h3>
        
        <!-- form -->
        <form action="proses-pendaftaran.php" method="POST">
            <div class="form-group mb-4">
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
            </div>

            <div class="row">
                <div class="col-lg">
                    <label for="jenis_kelamin" class="form-label"></label>
                    <select name="jenis_kelamin" class="form-select" aria-placeholder="Jenis Kelamin">
                        <option selected>Jenis Kelamin</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                <div class="col-lg mb-4">
                    <label for="agama" class="form-label"></label>
                    <select name="agama" class="form-select" aria-placeholder="Agama">
                        <option selected>Agama</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </div>
            </div>

            <div class="form-group mb-4">
                <input type="text" class="form-control" name="sekolah_asal" placeholder="Asal Sekolah">
            </div>
                        
            <div class="row">
                <div class="col-lg">
                    <input type="submit" class="btn btn-warning mb-4" value="Daftar" name="daftar" style="color: white; width: 100%" />
                </div>
                <div class="col-lg">
                    <a href="index.php" class="btn btn-outline-warning" tabindex="-1" role="button" aria-disabled="true" style="width: 100%">Kembali</a>
                </div>
            </div>
        </form>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>