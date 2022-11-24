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
                            <th class="column-title"><center>Id Kuliah</center></th>
                            <th class="column-title"><center>NIP</center></th>
                                <th class="column-title"><center>Kode Mata Kuliah</center></th>
                                <th class="column-title"><center>Jam</center></th>
                                <th class="column-title"><center>Kelas</center></th>
                                <th class="column-title"><center>Hari</center></th>
                                <th class="column-title"><center>Ambil Absensi</center></th>
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
                                <td><center><a href="index.php?p=absensi&&kode_mk=<?php echo $data['kode_mk']; ?>&id_kelas=<?php echo $data["id_kelas"]; ?>">Ambil</a></center></td>
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