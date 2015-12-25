-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 03. Maret 2013 jam 16:36
-- Versi Server: 5.1.37
-- Versi PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `distro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE IF NOT EXISTS `tbl_barang` (
  `id_barang` int(3) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `harga`, `gambar`, `keterangan`) VALUES
(1, 'Semangat Indonesiaku Cewe', 'Rp. 120.000', 'g1.jpg', 'Indonesia di tubuhku !!\r\nYeah!!\r\n<br><br>\r\n<b>Spesifikasi Kaos</b>\r\n<br><br>\r\n\r\nDibuat menggunakan bahan 100% cotton 32s (bahan nyaman di kulit), dengan gambar dicetak menggunakan sablon bright rubber. Untuk wanite model kaos memiliki kerah V.'),
(2, 'Lencana Kemerdekaan Cewek', 'Rp. 120.000', 'g2.jpg', 'Desain ini menggunakan konsep gabungan antara lencana militer dengan parodi (tulisan merdekanya mirip Metallica kan? nah disitu sisi parodinya).\r\n<br><br>\r\n<b>Spesifikasi Kaos</b>\r\n<br><br>\r\n\r\nDibuat menggunakan bahan 100% cotton 32s (bahan lembut dan nyaman di kulit), dengan gambar dicetak menggunakan sablon plastisol berwarna ema'),
(3, 'Macet Lagi Cowo', 'Rp. 120.000', 'g3.jpg', 'Desain ini menggunakan konsep gabungan antara lencana militer dengan parodi (tulisan merdekanya mirip Metallica kan? nah disitu sisi parodinya).\r\n<br><br>\r\n<b>Spesifikasi Kaos</b>\r\n<br><br>\r\n\r\nDibuat menggunakan bahan 100% cotton 32s (bahan lembut dan nyaman di kulit), dengan gambar dicetak menggunakan sablon plastisol berwarna ema'),
(4, 'Bhineka Tunggal Ika Cewe', 'Rp. 120.000', 'g4.jpg', 'Desain ini menggunakan konsep gabungan antara lencana militer dengan parodi (tulisan merdekanya mirip Metallica kan? nah disitu sisi parodinya).\r\n<br><br>\r\n<b>Spesifikasi Kaos</b>\r\n<br><br>\r\n\r\nDibuat menggunakan bahan 100% cotton 32s (bahan lembut dan nyaman di kulit), dengan gambar dicetak menggunakan sablon plastisol berwarna ema'),
(5, 'Keroncongan Cewe', 'Rp. 120.000', 'g5.jpg', 'Indonesia di tubuhku !!\r\nYeah!!\r\n<br><br>\r\n<b>Spesifikasi Kaos</b>\r\n<br><br>\r\n\r\nDibuat menggunakan bahan 100% cotton 32s (bahan nyaman di kulit), dengan gambar dicetak menggunakan sablon bright rubber. Untuk wanite model kaos memiliki kerah V.'),
(6, 'Renggut Kemerdekaan', 'Rp. 120.000', 'g6.jpg', 'Indonesia di tubuhku !!\r\nYeah!!\r\n<br><br>\r\n<b>Spesifikasi Kaos</b>\r\n<br><br>\r\n\r\nDibuat menggunakan bahan 100% cotton 32s (bahan nyaman di kulit), dengan gambar dicetak menggunakan sablon bright rubber. Untuk wanite model kaos memiliki kerah V.'),
(7, 'Bhinneka Tunggal Ika Chibi Cowo', 'Rp. 120.000', 'gatot.jpg', 'Desain ini menggunakan konsep gabungan antara lencana militer dengan parodi (tulisan merdekanya mirip Metallica kan? nah disitu sisi parodinya).\r\n<br><br>\r\n<b>Spesifikasi Kaos</b>\r\n<br><br>\r\n\r\nDibuat menggunakan bahan 100% cotton 32s (bahan lembut dan nyaman di kulit), dengan gambar dicetak menggunakan sablon plastisol berwarna ema'),
(8, 'Bhineka Tunggal Ika Bencong', 'Rp. 100.000', 'd0dc8d88174f15ed5b4a93c58816848b_keroncongan_02.jpg', 'Indonesia di tubuhku !!\r\nYeah!!\r\n<br><br>\r\n<b>Spesifikasi Kaos</b>\r\n<br><br>\r\n\r\nDibuat menggunakan bahan 100% cotton 32s (bahan nyaman di kulit), dengan gambar dicetak menggunakan sablon bright rubber. Untuk wanite model kaos memiliki kerah V.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE IF NOT EXISTS `tbl_galeri` (
  `id_galeri` int(3) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `gambar`, `keterangan`) VALUES
(1, 'gal (1).jpg', 'Orang-orang yang aneh :D'),
(2, 'gal (2).jpg', 'Orang-orang yang aneh :D'),
(3, 'gal (3).jpg', 'Orang-orang yang aneh :D'),
(4, 'gal (4).jpg', 'Orang-orang yang aneh :D'),
(5, 'gal (5).jpg', 'Orang-orang yang aneh :D'),
(6, 'gal (6).jpg', 'Orang-orang yang aneh :D'),
(7, 'gal (7).jpg', 'Orang-orang yang aneh :D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hubungi`
--

CREATE TABLE IF NOT EXISTS `tbl_hubungi` (
  `id_hubungi` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id_hubungi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_hubungi`
--

INSERT INTO `tbl_hubungi` (`id_hubungi`, `nama`, `email`, `alamat`, `pesan`) VALUES
(1, 'Gede Lumbung', 'gedelumbung@gmail.com', 'Denpasar, Bali', 'Atau kamu pingin menanyakan sesuatu terkait kemungkinan kerjasama dengan kami?\r\nJangan ragu-ragu, silakan hubungi kami melalui form kontak yang ada di bawah ini, dan kami akan merespon secepatnya.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_member`
--

CREATE TABLE IF NOT EXISTS `tbl_member` (
  `id_member` int(3) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `pass` char(40) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `user`, `pass`, `nama`) VALUES
(1, 'suma', 'dce704fd8aa775365f1168c59dc4d9ad', 'Gede Lumbung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesanan`
--

CREATE TABLE IF NOT EXISTS `tbl_pesanan` (
  `id_pesan` int(5) NOT NULL AUTO_INCREMENT,
  `id_barang` int(5) NOT NULL,
  `id_member` int(5) NOT NULL,
  `ukuran` varchar(3) NOT NULL,
  `banyak` int(5) NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tbl_pesanan`
--

INSERT INTO `tbl_pesanan` (`id_pesan`, `id_barang`, `id_member`, `ukuran`, `banyak`) VALUES
(1, 7, 1, 'xl', 15),
(2, 6, 1, 'm', 5),
(3, 8, 2, 'l', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(3) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `pass` char(40) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `user`, `pass`) VALUES
(1, 'admin', '96e79218965eb72c92a549dd5a330112');
