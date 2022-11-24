-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2022 pada 10.04
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_absen`
--

CREATE TABLE `tabel_absen` (
  `id_absen` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `absen_masuk` varchar(20) NOT NULL,
  `absen_keluar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_absen`
--

INSERT INTO `tabel_absen` (`id_absen`, `nim`, `absen_masuk`, `absen_keluar`) VALUES
(1, 2001, 'present', 'excused'),
(2, 2004, 'present', 'excused'),
(3, 2002, 'excused', 'sick');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_dosen`
--

CREATE TABLE `tabel_dosen` (
  `nip` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_dosen`
--

INSERT INTO `tabel_dosen` (`nip`, `nama`, `ttl`, `alamat`) VALUES
(1001, 'Dewi Suzana', '1991-12-03', 'jl.gunung sarik'),
(1002, 'Rasyidah', '1983-12-08', 'jl.merapi'),
(1003, 'Roni Patihan', '1992-01-09', 'jl.malalak'),
(1004, 'Windy Melfi', '2003-01-22', 'jl.Malauik'),
(1005, 'Winda Putri Sari', '2012-01-12', 'jl.Lauik'),
(1006, 'Reza Aulia', '1983-01-14', 'jl.malasuih'),
(1007, 'Rita Cantik', '1993-01-14', 'jl.Tunggul Hitam'),
(1008, 'Epi yunaldi', '2003-01-16', 'jl.gajah II'),
(1009, 'Viky adzrandra', '2005-01-29', 'jl.gelatik2'),
(10010, 'Farhan Hakim', '1993-01-21', 'jl. arab saudi'),
(10011, 'Dina athallah', '2004-01-23', 'jl. baralek12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_hari`
--

CREATE TABLE `tabel_hari` (
  `id_hari` int(11) NOT NULL,
  `nama_hari` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_hari`
--

INSERT INTO `tabel_hari` (`id_hari`, `nama_hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jumat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jadwal_kuliah`
--

CREATE TABLE `tabel_jadwal_kuliah` (
  `id_kuliah` int(10) NOT NULL,
  `nip` int(10) NOT NULL,
  `kode_mk` varchar(10) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `id_kelas` varchar(30) NOT NULL,
  `id_hari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_jadwal_kuliah`
--

INSERT INTO `tabel_jadwal_kuliah` (`id_kuliah`, `nip`, `kode_mk`, `jam`, `id_kelas`, `id_hari`) VALUES
(3, 1001, '001', '10.00-12.00', 'A', 1),
(4, 1002, '002', '13.30-15.50', 'A', 2),
(11, 1003, '003', '09.00-12.00', 'A', 3),
(12, 1004, '004', '13.30-15.50', 'A', 4),
(17, 1005, '005', '10.00-12.00', 'A', 5),
(19, 1006, '006', '09.00-12.00', 'B', 1),
(23, 1007, '007', '10.00-12.00', 'B', 2),
(24, 1008, '008', '13.30-15.40', 'B', 3),
(27, 1009, '009', '13.30-15.40', 'B', 4),
(28, 10010, '0010', '13.30-15.40', 'B', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jurusan`
--

CREATE TABLE `tabel_jurusan` (
  `kode_jurusan` varchar(5) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_jurusan`
--

INSERT INTO `tabel_jurusan` (`kode_jurusan`, `nama_jurusan`) VALUES
('TI', 'Teknologi informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kelas`
--

CREATE TABLE `tabel_kelas` (
  `id_kelas` varchar(5) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `kode_prodi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_kelas`
--

INSERT INTO `tabel_kelas` (`id_kelas`, `nama_kelas`, `kode_prodi`) VALUES
('A', 'TK A', 'Tekom'),
('B', 'TK B', 'Tekom');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `kode_prodi` varchar(5) NOT NULL,
  `id_kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`nim`, `nama`, `ttl`, `jenis_kelamin`, `alamat`, `kode_prodi`, `id_kelas`) VALUES
(2001, 'Syifa lutfia rahfi', '2002-12-25', 'Perempuan', 'jl.bangau no. 12', 'Tekom', 'A'),
(2002, 'naufal ramadhan', '2002-06-22', 'Laki-Laki', 'jl.merpati II no.28', 'Tekom', 'B'),
(2004, 'Najya talitha ', '2001-08-21', 'Perempuan', 'jl.bangau no. 11', 'Tekom', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_matakuliah`
--

CREATE TABLE `tabel_matakuliah` (
  `kode_mk` varchar(10) NOT NULL,
  `nama_mk` varchar(10) NOT NULL,
  `semester` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_matakuliah`
--

INSERT INTO `tabel_matakuliah` (`kode_mk`, `nama_mk`, `semester`) VALUES
('001', 'APSI', '1'),
('0010', 'Sosial', '1'),
('0011', 'Perancang', '1'),
('0012', 'Analisis', '1'),
('002', 'Basis Data', '1'),
('003', 'PKWN', '1'),
('004', 'Agama', '1'),
('005', 'Web Dasar', '1'),
('006', 'ALPRO', '1'),
('007', 'Animasi', '1'),
('008', 'Teknologi', '1'),
('009', 'Desain', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_prodi`
--

CREATE TABLE `tabel_prodi` (
  `kode_prodi` varchar(5) NOT NULL,
  `kode_jurusan` varchar(5) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_prodi`
--

INSERT INTO `tabel_prodi` (`kode_prodi`, `kode_jurusan`, `nama_prodi`) VALUES
('Tekom', 'TI', 'Teknik komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `username`, `nama`, `email`, `password`) VALUES
(2, 'faiiizz_', 'syafik maula faiz', 'syafikmaula0727@gmail.com', '07b74e668e1eed433b64f7524db9e2fe');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_absen`
--
ALTER TABLE `tabel_absen`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `nim` (`nim`);

--
-- Indeks untuk tabel `tabel_dosen`
--
ALTER TABLE `tabel_dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tabel_hari`
--
ALTER TABLE `tabel_hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indeks untuk tabel `tabel_jadwal_kuliah`
--
ALTER TABLE `tabel_jadwal_kuliah`
  ADD PRIMARY KEY (`id_kuliah`),
  ADD KEY `kode_mk` (`kode_mk`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_hari` (`id_hari`);

--
-- Indeks untuk tabel `tabel_jurusan`
--
ALTER TABLE `tabel_jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indeks untuk tabel `tabel_kelas`
--
ALTER TABLE `tabel_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `kode_prodi` (`kode_prodi`);

--
-- Indeks untuk tabel `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `kode_prodi` (`kode_prodi`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `tabel_matakuliah`
--
ALTER TABLE `tabel_matakuliah`
  ADD PRIMARY KEY (`kode_mk`);

--
-- Indeks untuk tabel `tabel_prodi`
--
ALTER TABLE `tabel_prodi`
  ADD PRIMARY KEY (`kode_prodi`),
  ADD KEY `kode_jurusan` (`kode_jurusan`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_absen`
--
ALTER TABLE `tabel_absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tabel_hari`
--
ALTER TABLE `tabel_hari`
  MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tabel_jadwal_kuliah`
--
ALTER TABLE `tabel_jadwal_kuliah`
  MODIFY `id_kuliah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_absen`
--
ALTER TABLE `tabel_absen`
  ADD CONSTRAINT `tabel_absen_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tabel_mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_jadwal_kuliah`
--
ALTER TABLE `tabel_jadwal_kuliah`
  ADD CONSTRAINT `tabel_jadwal_kuliah_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tabel_dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_jadwal_kuliah_ibfk_2` FOREIGN KEY (`kode_mk`) REFERENCES `tabel_matakuliah` (`kode_mk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_jadwal_kuliah_ibfk_3` FOREIGN KEY (`id_hari`) REFERENCES `tabel_hari` (`id_hari`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_kelas`
--
ALTER TABLE `tabel_kelas`
  ADD CONSTRAINT `tabel_kelas_ibfk_1` FOREIGN KEY (`kode_prodi`) REFERENCES `tabel_prodi` (`kode_prodi`);

--
-- Ketidakleluasaan untuk tabel `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD CONSTRAINT `tabel_mahasiswa_ibfk_1` FOREIGN KEY (`kode_prodi`) REFERENCES `tabel_prodi` (`kode_prodi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_mahasiswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `tabel_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_prodi`
--
ALTER TABLE `tabel_prodi`
  ADD CONSTRAINT `tabel_prodi_ibfk_1` FOREIGN KEY (`kode_jurusan`) REFERENCES `tabel_jurusan` (`kode_jurusan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
