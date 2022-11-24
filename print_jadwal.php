<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Spadati</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<?php 
	
    include "koneksi.php";
    $ambil = mysqli_query($db, "SELECT * FROM tabel_kelas WHERE id_kelas ='$_GET[id_kelas]'");
    $d = mysqli_fetch_array($ambil);
  
?>
<div class="col">
<br>
<div class="col" role="main">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel"><div class="form-group">
        <center><h2> Laporan Jadwal Kuliah <?php echo $_GET['id_kelas'];?></h2></center>
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                            <th class="column-title"><center>Id Kuliah</center></th>
                            <th class="column-title"><center>NIP</center></th>
                                <th class="column-title"><center>Kode Mata Kuliah</center></th>
                                <th class="column-title"><center>Jam</center></th>
                                <th class="column-title"><center>Kelas</center></th>
                                <th class="column-title"><center>Hari</center></th>
                            </tr>
                        </thead>
                        <?php
                             {
                                $sql="SELECT * FROM tabel_jadwal_kuliah JOIN tabel_kelas USING(id_kelas) JOIN tabel_hari USING(id_hari) WHERE id_kelas='$_GET[id_kelas]'";
                            }
                            $hasil=mysqli_query($db,$sql);
                            $no=0;
                            while ($data = mysqli_fetch_array($hasil)) {
                            $no++;
                            ?>
                        <tbody>
                            <tr class="even pointer">
                            <td><center><?php echo $no;?></center></td>
                                <td><center><?php echo $data["nip"]; ?></center></td>
                                <td><center><?php echo $data["kode_mk"]; ?></center></td>
                                <td><center><?php echo $data["jam"]; ?></center></td>
                                <td><center><?php echo $data["nama_kelas"]; ?></center></td>
                                <td><center><?php echo $data["nama_hari"]; ?></center></td>
                            </tr>
                        </tbody>
                        <?php
    }
    ?>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script type="text/javascript">
	window.print();

  function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

    oFReader.onload = function (oFREvent) {
      document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
  };
</script>