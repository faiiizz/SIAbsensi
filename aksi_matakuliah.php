<?php 
	include 'koneksi.php';
?>
<div class="col">
<br>
<div class="col" role="main">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel"><div class="form-group">
        <center><h2>Jadwal Kuliah</h2></center>
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                            <th class="column-title"><center>No</center></th>
                                <th class="column-title"><center>Hari</center></th>
                                <th class="column-title"><center>Lokal</center></th>
                            </tr>
                        </thead>
                        <?php
                             {
                                $sql="SELECT * FROM tabel_hari";
                            }
                            $hasil=mysqli_query($db,$sql);
                            $no=0;
                            while ($data = mysqli_fetch_array($hasil)) {
                            $no++;
                            ?>
                        <tbody>
                            <tr class="even pointer">
                            <td><center><?php echo $no;?></center></td>
                                <td><center><?php echo $data["nama_hari"]; ?></center></td>
                                <td><center>
                                    <a href="index.php?p=jadwal_kuliah&&id_hari=<?php echo $data["id_hari"]; ?>&id_kelas=<?php echo $data["id_kelas"]; ?>" class="btn btn-sm btn-success">TK A</a>
                                    <a href="index.php?p=jadwal_kuliah&&id_hari=<?php echo $data["id_hari"]; ?>&id_kelas=<?php echo $data["id_kelas"]; ?>" class="btn btn-sm btn-danger">TK B</a>
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