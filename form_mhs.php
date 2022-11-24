<section class="section">
  <h1 class="card-title">Tambah Data Mahasiswa</h1>

  <!-- General Form Elements -->
  <form action="aksi_tambah.php" method="POST">
    <div class="row mb-3">
      <label>NIM</label>
      <div class="col-sm-11">
        <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM">
      </div>
    </div>
    <div class="row mb-3">
      <label>Nama Mahasiswa</label>
      <div class="col-sm-11">
        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Mahasiswa">
      </div>
    </div>
    <div class="row mb-3">
      <label>Tanggal Lahir</label>
      <div class="col-sm-11">
        <input type="date" name="ttl" class="form-control">
      </div>
    </div>
    <div class="row mb-3">
      <label>Jenis Kelamin</label>
      <div class="col-sm-11">
        <input type="text" name="jenis_kelamin" class="form-control" placeholder="Masukkan Jenis Kelamin">
      </div>
    </div>
    <div class="row mb-3">
      <label>Alamat</label>
      <div class="col-sm-11">
        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
      </div>
    </div>
    <div class="row mb-3">
    <div class="form-group">
      <label for="prodi" class="form-label">Pilih Prodi</label>
      <select class="form-control" name="prodi">
        <?php
        include "koneksi.php";
        //Perintah sql untuk menampilkan semua data pada tabel prodi
        $sql = "select * from tabel_prodi";
        $hasil = mysqli_query($db, $sql);
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)) {
          $no++;
          $ket = "";
          if (isset($_GET['prodi'])) {
            $prodi = trim($_GET['prodi']);
            if ($prodi == $data['kode_prodi']) {
              $ket = "selected";
            }
          }
        ?>
          <option <?php echo $ket; ?> value="<?php echo $data['kode_prodi']; ?>">
            <?php echo $data['nama_prodi']; ?></option>
        <?php
        }
        ?>
      </select>
    </div>
    </div>
    <div class="form-group">
      <label for="prodi" class="form-label"> Pilih Kelas</label>
      <select class="form-control" name="kelas">
        <?php
        include "koneksi.php";
        //Perintah sql untuk menampilkan semua data pada tabel prodi
        $sql = "select * from tabel_kelas";
        $hasil = mysqli_query($db, $sql);
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)) {
          $no++;
          $ket = "";
          if (isset($_GET['kelas'])) {
            $kelas = trim($_GET['kelas']);
            if ($kelas == $data['id_kelas']) {
              $ket = "selected";
            }
          }
        ?>
          <option <?php echo $ket; ?> value="<?php echo $data['id_kelas']; ?>">
            <?php echo $data['nama_kelas']; ?></option>
        <?php
        }
        ?>
      </select>
    </div>
    </div>
      </div>
    <div class="row mb-3">
      <div class="col-sm-11">
        <button type="submit" name="submit" class="btn btn-primary">Submit </button>
      </div>
    </div>

  </form><!-- End General Form Elements -->
  </div>
  </div>

  </div>
</section>