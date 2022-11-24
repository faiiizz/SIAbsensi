<div class="container"></div>
<div class="col md-5">
    <h3><center>LAPORAN DATA MAHASISWA</center></H1>
    <div class="row mt-3">
        <table class="table table-striped table-hover">
            <tr>
            <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis kelamin</th>
                <th>Alamat</th>
                <th>Prodi</th>  
     
            </tr>
            <?php
            include 'koneksi.php';
            $no_urut=1;
            $data = mysqli_query($db, "SELECT* FROM  tabel_mahasiswa JOIN tabel_prodi USING(kode_prodi)");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no_urut++; ?></td>
                    <td><?php echo $d['nim']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['ttl']; ?></td>
                    <td><?php echo $d['jenis_kelamin']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['nama_prodi']; ?></td>
                
                </tr>

                <?php
                }
                ?>

        </table>
        <a href="print_data.php" class="btn btn-danger">PRINT</a>
            </div>
    </div>
    </div>