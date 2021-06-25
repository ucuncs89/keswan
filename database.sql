-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2019 at 04:34 PM
-- Server version: 10.2.24-MariaDB-cll-lve
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ucuncsco_keswan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` varchar(32) NOT NULL,
  `password_admin` varchar(32) NOT NULL,
  `email_admin` varchar(32) NOT NULL,
  `nama_admin` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `password_admin`, `email_admin`, `nama_admin`) VALUES
('admin', '123', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hewan`
--

CREATE TABLE `tbl_hewan` (
  `id_hewan` int(11) NOT NULL,
  `username_user` varchar(32) NOT NULL,
  `umur_hewan` int(11) NOT NULL,
  `jenis_hewan` varchar(32) NOT NULL,
  `jenis_kelamin_hewan` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hewan`
--

INSERT INTO `tbl_hewan` (`id_hewan`, `username_user`, `umur_hewan`, `jenis_hewan`, `jenis_kelamin_hewan`) VALUES
(10001, 'pache', 2, 'Sapi', 'Betina'),
(10000, 'user', 2, 'Sapi', 'Jantan'),
(10002, 'user', 1, 'Unggas', 'Betina'),
(10003, 'user123', 2, 'Sapi', 'Betina');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inseminasi`
--

CREATE TABLE `tbl_inseminasi` (
  `id_inseminasi` int(11) NOT NULL,
  `username_user` varchar(32) NOT NULL,
  `id_hewan` int(11) NOT NULL,
  `nama_pejantan` varchar(32) NOT NULL,
  `id_petugas` varchar(32) NOT NULL,
  `tgl_ib` date NOT NULL,
  `ib_ke` int(11) NOT NULL,
  `status_ib` varchar(12) NOT NULL,
  `kode_straw` varchar(12) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inseminasi`
--

INSERT INTO `tbl_inseminasi` (`id_inseminasi`, `username_user`, `id_hewan`, `nama_pejantan`, `id_petugas`, `tgl_ib`, `ib_ke`, `status_ib`, `kode_straw`, `alamat`) VALUES
(20000, 'user', 10000, '', '12', '2019-08-19', 0, 'proses', '', 'Jl Ngamprah no 25 Kab Bandung Barat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelahiran`
--

CREATE TABLE `tbl_kelahiran` (
  `id_kelahiran` int(11) NOT NULL,
  `tgl_pkb` date NOT NULL,
  `id_petugas` varchar(32) NOT NULL,
  `username_user` varchar(32) NOT NULL,
  `id_hewan` int(11) NOT NULL,
  `kode_straw` varchar(12) NOT NULL,
  `bulan` int(11) NOT NULL,
  `jenis_kelamin_anak` varchar(16) NOT NULL,
  `status` varchar(12) NOT NULL,
  `jumlah_lahir` int(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelahiran`
--

INSERT INTO `tbl_kelahiran` (`id_kelahiran`, `tgl_pkb`, `id_petugas`, `username_user`, `id_hewan`, `kode_straw`, `bulan`, `jenis_kelamin_anak`, `status`, `jumlah_lahir`, `alamat`) VALUES
(30000, '2019-08-19', '12', 'user', 10000, '', 0, '', 'proses', 0, 'Jl Ngamprah no 25 Kab Bandung Barat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_periksa`
--

CREATE TABLE `tbl_periksa` (
  `id_periksa` int(11) NOT NULL,
  `username_user` varchar(32) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `anamnese` varchar(32) NOT NULL,
  `gejala` varchar(64) NOT NULL,
  `diagnosa` varchar(32) NOT NULL,
  `terapi` varchar(32) NOT NULL,
  `ket` varchar(32) NOT NULL,
  `status` text NOT NULL,
  `id_petugas` varchar(32) NOT NULL,
  `alamat` text NOT NULL,
  `id_hewan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_periksa`
--

INSERT INTO `tbl_periksa` (`id_periksa`, `username_user`, `tgl_periksa`, `anamnese`, `gejala`, `diagnosa`, `terapi`, `ket`, `status`, `id_petugas`, `alamat`, `id_hewan`) VALUES
(40000, 'user', '2019-08-19', 'Flu', 'demam yang tinggi Â± 42Â°C', 'Infectious Bovine Rhinotracheiti', 'albendazole', 'Jaga baik baik', 'selesai', '12', 'Jl Ngamprah no 25 Kab Bandung Barat', 10000),
(40001, 'user', '2019-08-20', '-', '', '', '', '', 'proses', '12', 'Jl Ngamprah no 25 Kab Bandung Barat', 10000),
(40002, 'pache', '2019-08-20', '-', '', '', '', '', 'proses', '12', 'Jl lembang no 250 Kab Bandung barat', 10001),
(40003, 'user123', '2019-08-20', '-', 'demam yang tinggi Â± 42Â°C', 'Infectious Bovine Rhinotracheiti', 'albendazole', 'Sehat', 'selesai', '12', 'Jl Ngamprah no 25 Kab Bandung Barat', 10003);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `id_petugas` varchar(32) NOT NULL,
  `nama_petugas` varchar(64) NOT NULL,
  `email_petugas` text NOT NULL,
  `no_telepon_petugas` varchar(16) NOT NULL,
  `password_petugas` varchar(32) NOT NULL,
  `status_petugas` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id_petugas`, `nama_petugas`, `email_petugas`, `no_telepon_petugas`, `password_petugas`, `status_petugas`) VALUES
('12', 'Mulyana', 'hello@gmail.com', '0123132123', '1234', 'offline'),
('id_petugas', 'nama_petugas', 'email_petugas@email', '0123', '123', 'offline'),
('petugas', 'petugas keswan', 'petugas@petugas.com', 'alamat', '123', 'offline');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username_user` varchar(32) NOT NULL,
  `nama_user` varchar(32) NOT NULL,
  `email_user` varchar(64) NOT NULL,
  `alamat_user` varchar(64) NOT NULL,
  `password_user` varchar(32) NOT NULL,
  `status_user` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username_user`, `nama_user`, `email_user`, `alamat_user`, `password_user`, `status_user`) VALUES
('001', 'asd', 'email@eemail.com', 'Bandung', '123', 'offline'),
('123', 'hellow nama', 'email@eemail.com', '123', '123', 'offline'),
('Aigit', 'Sigitpurwanto', 'uesjjs@gmail.com', 'Cianjur', '123qwe', 'offline'),
('hellow', 'hellow nama', 'hellow@hellow.com', 'bandung', '123456', 'offline'),
('user', 'ucuncs', 'ucuncs89@gmail.com', '123', '123123', 'offline'),
('username_user', 'nama_user', 'email_user', 'alamat_user', 'password_user', 'offline'),
('israganteng', 'isra ganteng', 'kokokokokok@gmail.com', 'bandung', '123456', 'offline'),
('hellow123', 'budi ', 'ucuncs89@gmail.com', 'bandung', '123', 'offline'),
('Sigit1', 'Sigitpurwanto', 'uesjjs@gmail.com', 'Bandung', '123qwe', 'offline'),
('luluayu04', 'Lulu Ayu', 'luluayuwardani@gmail.com', 'Jl sulaksana no 20 Antapani', 'luluayuwardani123', 'offline'),
('Fasyarara', 'Fasya zahra nadia', 'fasyazahra18@gmail.com', 'Jalan sekemirung kidul', '12345678', 'offline'),
('pache', 'pachelevine', 'pachelevine21@gmail.com', 'jalan simpang sari', '12345621', 'offline'),
('user123', 'Ilham', 'ilham@gmail.com', 'Ngamprah 25 Kab Bandung Barat', '123123', 'offline');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vaksinasi`
--

CREATE TABLE `tbl_vaksinasi` (
  `id_vaksinasi` int(11) NOT NULL,
  `nama_vaksinasi` varchar(32) NOT NULL,
  `tgl_vaksinasi` date NOT NULL,
  `username_user` varchar(32) NOT NULL,
  `id_petugas` varchar(32) NOT NULL,
  `status` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `id_hewan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vaksinasi`
--

INSERT INTO `tbl_vaksinasi` (`id_vaksinasi`, `nama_vaksinasi`, `tgl_vaksinasi`, `username_user`, `id_petugas`, `status`, `alamat`, `id_hewan`) VALUES
(50000, '', '2019-08-19', 'user', '12', 'proses', 'Jl Ngamprah no 25 Kab Bandung Barat', 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_hewan`
--
ALTER TABLE `tbl_hewan`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indexes for table `tbl_inseminasi`
--
ALTER TABLE `tbl_inseminasi`
  ADD PRIMARY KEY (`id_inseminasi`);

--
-- Indexes for table `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`);

--
-- Indexes for table `tbl_periksa`
--
ALTER TABLE `tbl_periksa`
  ADD PRIMARY KEY (`id_periksa`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username_user`);

--
-- Indexes for table `tbl_vaksinasi`
--
ALTER TABLE `tbl_vaksinasi`
  ADD PRIMARY KEY (`id_vaksinasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_hewan`
--
ALTER TABLE `tbl_hewan`
  MODIFY `id_hewan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- AUTO_INCREMENT for table `tbl_inseminasi`
--
ALTER TABLE `tbl_inseminasi`
  MODIFY `id_inseminasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20001;

--
-- AUTO_INCREMENT for table `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  MODIFY `id_kelahiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30001;

--
-- AUTO_INCREMENT for table `tbl_periksa`
--
ALTER TABLE `tbl_periksa`
  MODIFY `id_periksa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40004;

--
-- AUTO_INCREMENT for table `tbl_vaksinasi`
--
ALTER TABLE `tbl_vaksinasi`
  MODIFY `id_vaksinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50001;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
