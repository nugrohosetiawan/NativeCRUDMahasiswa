-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Jan 2018 pada 06.17
-- Versi Server: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `id_dosen` int(10) NOT NULL,
  `namados` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `namados`) VALUES
(1, 'andi'),
(2, 'tomi'),
(2, 'tomi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(10) NOT NULL,
  `nama_kelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `id_dosen` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12115977 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jurusan`, `kelas`, `id_dosen`) VALUES
(12115972, 'nugroho', 'TI', 'TI04', 0),
(12115974, 'andiiiiiis', 'Teknik Kom', 'TI', 0),
(12115975, 'andi', 'SI', 'Teknik Kom', 2),
(12115976, 'nugrohoo', 'Teknik Kom', 'TI', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mattkul`
--

CREATE TABLE IF NOT EXISTS `mattkul` (
  `id_mat` int(10) NOT NULL,
  `namamat` varchar(10) NOT NULL,
  `waktu` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mattkul`
--

INSERT INTO `mattkul` (`id_mat`, `namamat`, `waktu`) VALUES
(1, 'jaringan k', 'senin'),
(2, 'jaringan k', 'senin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mattkul`
--
ALTER TABLE `mattkul`
  ADD PRIMARY KEY (`id_mat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12115977;
--
-- AUTO_INCREMENT for table `mattkul`
--
ALTER TABLE `mattkul`
  MODIFY `id_mat` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
