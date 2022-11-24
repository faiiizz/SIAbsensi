<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data </title>
</head>

<body>
    <div class="container">
        <a href="#" class="btn btn-primary mt-3">Edit</a>
    </div>

    <div>
        <?php
        include "koneksi.php";
        $ambil = mysqli_query($db, "SELECT * FROM tabel_mahasiswa WHERE nim ='$_GET[nim]'");
        $d = mysqli_fetch_array($ambil);
        ?>
        <div class>
            <form action="" method="POST">
                <div class="container">
                    <div class="row mt-3">
                        <div class="mb-3">
                            <label for="nim" class="form-label">Nim</label>
                            <input type="number" name="nim" class="form-control" value="<?= $d['nim'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $d['nama'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="ttl" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="ttl" class="form-control" id="ttl" value="<?= $d['ttl'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="<?= $d['jenis_kelamin'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <div class="form-floating">
                                <textarea class="form-control" name="alamat" id="floatingTextarea2" style="height: 100px"><?= $d['alamat'] ?></textarea>
                            </div>
                            
                            <button style="float :right" type="submit" name="submit" class="btn btn-primary">Simpan</button>

                        </div>
                    </div>
            </form>
        </div>

    </div>
</body>
</html>
<?php
                        if (isset($_POST['submit'])) {
                        include 'koneksi.php';
                        $nim = $_POST['nim'];
            	        $nama = $_POST['nama'];
            	        $ttl = $_POST['ttl'];
            	        $jenis_kelamin = $_POST['jenis_kelamin'];
            			$alamat = $_POST['alamat'];
            			$id_kelas = $_POST['id_kelas'];

                        $q ="UPDATE tabel_mahasiswa SET nim='$nim',nama='$nama', ttl='$ttl', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE nim ='$_GET[nim]'";

                        $hasil=mysqli_query($db,$q);

                        if ($q) {
                            echo "<script>alert('Data berhasil di Edit!')</script>";
                            echo "<script>window.location='index.php?p=data_mahasiswa'</script>";
                        }
                    }
                    ?>

