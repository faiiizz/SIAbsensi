<?php
include "koneksi.php";
$ambil = mysqli_query($db, "SELECT * FROM tabel_mahasiswa WHERE nim ='$_GET[nim]'");
$data = mysqli_fetch_array($ambil);
?>
<form action="" method="POST">
    <table class="form">
        <?php
        $ambil = mysqli_query($db, "SELECT * FROM tabel_mahasiswa WHERE nim ='$_GET[nim]'");
        $data = mysqli_fetch_array($ambil);
        ?>
    </table>
    <h1><center><a class="btn btn-primary mt-3 md-5">ABSEN KELUAR</a><br></center></h1>
    <div class="form-group">
    <label>Nomor Induk Mahasiswa</label>
                  <input type="text" name="nim" class="form-control" value="<?= $data['nim']?>">
                </div>
    <div class="form-group">
        <table class="table table-striped table-hover">
            <label>Ambil Absen : </label>
            <br>
            <th><input type='radio' name='absen_keluar' value='present' /> Present</th>
            <th><input type='radio' name='absen_keluar' value='excused' /> Excused</th>
            <th><input type='radio' name='absen_keluar' value='sick' /> Sick</th>
            <th><input type='radio' name='absen_keluar' value='Alfa' /> Alfa</th>
        </table>
        <br>
        <br>
        <div class="row mb-3">
                <div class="col-sm-11">
                    <button type="submit" name="submit" class="btn btn-primary">Submit </button>
                </div>
            </div>
</form>
<br>
<?php
                        if (isset($_POST['submit'])) {
                        include 'koneksi.php';
                        $absen_keluar = $_POST["absen_keluar"];

                        $q ="UPDATE  tabel_absen SET absen_keluar='$absen_keluar' WHERE nim ='$_GET[nim]'";

                        $hasil=mysqli_query($db,$q);

                        if ($q) {
                            echo "<script>alert('Data berhasil di input!')</script>";
                            echo "<script>window.location='index.php?p=record_absen'</script>";
                        }
                    }
                    ?>

    </div>