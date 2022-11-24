<?php
    include 'koneksi.php';
    $hapus = mysqli_query($db, "DELETE FROM tabel_mahasiswa WHERE nim ='$_GET[nim]'");

    if ($hapus) {
        echo "<script>alert('Data berhasil di hapus!')</script>";	
        echo "<script>window.location='index.php?p=data_mahasiswa'</script>";
    }
?>