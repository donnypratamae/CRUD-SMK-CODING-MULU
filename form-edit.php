<?php 

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa where id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang diedit tidak ditemukan
if ( mysqli_num_rows ($query) < 1) {
    die("data tidak ditemukan....");
}

?>

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

    <title>Form Edit | SMK CODING MULU</title>
  </head>
  <body>
    <div class="container">
        <!-- header -->
        <h3 class="fw-bold mb-5 text-center" style="margin: 150px auto;">Formulir Edit Siswa</h3>
        
        <!-- form -->
        <form action="proses-edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?> ">

            <div class="form-group mb-4">
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $siswa['alamat'] ?>" >
            </div>

            <div class="row">
                <div class="col-lg">
                    <label for="jenis_kelamin" class="form-label"></label>
                    <?php $jk = $siswa['jenis_kelamin']; ?>
                    <select name="jenis_kelamin" class="form-select" aria-placeholder="Jenis Kelamin">
                        <option selected>Jenis Kelamin</option>
                        <option <?php echo ($jk == 'laki-laki') ? "selected": "" ?>>Laki-laki</option>
                        <option <?php echo ($jk == 'perempuan') ? "selected": "" ?>>Perempuan</option>
                    </select>
                </div>
                <div class="col-lg mb-4">
                    <label for="agama" class="form-label"></label>
                    <?php $agama = $siswa['agama']; ?>
                    <select name="agama" class="form-select" aria-placeholder="Agama">
                        <option selected>Agama</option>
                        <option <?php echo ($agama == 'islam') ? "selected": "" ?>>Islam</option>
                        <option <?php echo ($agama == 'kristen') ? "selected": "" ?>>Kristen</option>
                        <option <?php echo ($agama == 'hindu') ? "selected": "" ?>>Hindu</option>
                        <option <?php echo ($agama == 'budha') ? "selected": "" ?>>Budha</option>
                        <option <?php echo ($agama == 'atheis') ? "selected": "" ?>>Atheis</option>
                    </select>
                </div>
            </div>

            <div class="form-group mb-4">
                <input type="text" class="form-control" name="sekolah_asal" placeholder="Asal Sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
            </div>
                        
            <div class="row">
                <div class="col-lg">
                    <input type="submit" class="btn btn-warning mb-4" value="Simpan" name="simpan" style="color: white; width: 100%"/>
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