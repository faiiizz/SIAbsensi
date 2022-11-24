<div class="container">
    <div class="row mt-3">
    <a class="btn btn-primary mt-3">Data Mahasiswa</a><br>
        <table class="table table-striped table-hover">
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis kelamin</th>
                <th>Alamat</th>
                <th>Prodi</th>  
                <th>Kelas</th>  
                <th>Action</th>  
            </tr>
            <?php
            include 'koneksi.php';
            $no_urut=1;
            $data = mysqli_query($db, "SELECT * FROM  tabel_mahasiswa JOIN tabel_prodi USING(kode_prodi)");
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
                    <td><?php echo $d['id_kelas']; ?></td>
                    <td>
                    <a href="index.php?p=edit&&nim=<?php echo $d['nim']; ?>">Edit</a>
                    <a href="index.php?p=hapus&&nim=<?php echo $d['nim']; ?>" onclick="return confirm('Serius ni mau dihapus?')">Hapus</a>
                </td>
                </tr>

                <?php
                }
                ?>

        </table>
            </div>
    </div>
</div>