<?php 
	include 'koneksi.php';
?>
<div class="col">
<br>
<div class="col" role="main">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel"><div class="form-group">
        <center><h2>PILIH KELAS</h2></center>
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                            <th class="column-title"><center>No</center></th>
                            <th class="column-title"><center>Nama Kelas</center></th>
                                <th class="column-title"><center>Action</center></th>
                            </tr>
                        </thead>
                        <?php
                             {
                                $sql="SELECT * FROM tabel_kelas";
                            }
                            $hasil=mysqli_query($db,$sql);
                            $no=0;
                            while ($data = mysqli_fetch_array($hasil)) {
                            $no++;
                            ?>
                        <tbody>
                            <tr class="even pointer">
                            <td><center><?php echo $no;?></center></td>
                                <td><center><?php echo $data["nama_kelas"]; ?></center></td>
                                <td><center>
                                    <a href="index.php?p=absen_jadwal_kuliah&id_kelas=<?php echo $data["id_kelas"]; ?>" class="btn btn-sm btn-success">Pilih Kelas</a>
                                </center></td>
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