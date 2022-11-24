<div class="container">
    <div class="row mt-3">
    <a class="btn btn-primary mt-3">Record Absen</a><br>
        <table class="table table-striped table-hover">
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Absen Masuk </th>  
                <th>Absen Keluar </th>  
                <th>Kelas</th>   
            </tr>
            <?php
            include 'koneksi.php';
            $no_urut=1;
            $data = mysqli_query($db, "SELECT * FROM  tabel_mahasiswa JOIN tabel_absen USING(nim) JOIN tabel_kelas USING(id_kelas) ");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no_urut++; ?></td>
                    <td><?php echo $d['nim']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['absen_masuk']; ?></td>
                    <td><?php echo $d['absen_keluar']; ?></td>
                    <td><?php echo $d['nama_kelas']; ?></td>
                </tr>

                <?php
                }
                ?>

        </table>
            </div>
    </div>
</div>