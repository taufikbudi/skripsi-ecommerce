-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Jan 2017 pada 10.33
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `olshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `email`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@shafiyyahfashion.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_order`
--

CREATE TABLE IF NOT EXISTS `detail_order` (
`id_detail_order` int(11) NOT NULL,
  `id_order` int(10) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_order`
--

INSERT INTO `detail_order` (`id_detail_order`, `id_order`, `id_produk`, `jumlah`, `harga`) VALUES
(10, 43, 6, 1, 105000),
(11, 47, 2, 1, 95000),
(12, 47, 3, 1, 87000),
(13, 48, 2, 1, 95000),
(14, 48, 4, 1, 92000),
(15, 49, 6, 1, 105000),
(16, 49, 3, 1, 87000),
(17, 50, 6, 1, 105000),
(18, 50, 5, 1, 110000),
(19, 51, 3, 2, 87000),
(20, 51, 2, 1, 95000),
(21, 52, 6, 1, 105000),
(22, 52, 4, 1, 92000),
(23, 53, 3, 1, 87000),
(24, 54, 2, 1, 95000),
(25, 54, 4, 1, 92000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Gamis'),
(2, 'Baju Muslim'),
(3, 'Mukena'),
(4, 'Aksesoris'),
(5, 'Abaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE IF NOT EXISTS `konfirmasi` (
`id_konfirmasi` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telpon` varchar(18) NOT NULL,
  `id_order` int(10) NOT NULL,
  `transfer` varchar(25) NOT NULL,
  `bank1` varchar(25) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `bank2` varchar(25) NOT NULL,
  `no_rek` varchar(20) NOT NULL,
  `atas_nama` varchar(25) NOT NULL,
  `keterangan` text,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `nama`, `email`, `telpon`, `id_order`, `transfer`, `bank1`, `jumlah`, `tanggal_bayar`, `bank2`, `no_rek`, `atas_nama`, `keterangan`, `status`) VALUES
(6, 'tes', 'tes@tes.com', '454775765675', 49, 'Transfer', 'BRI', 300000, '2016-12-16', 'tes', '87674639879876', 'tes', 'tes', 'Kirim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota_kirim`
--

CREATE TABLE IF NOT EXISTS `kota_kirim` (
`id_kota_kirim` int(10) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `biaya` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota_kirim`
--

INSERT INTO `kota_kirim` (`id_kota_kirim`, `kota`, `biaya`) VALUES
(2, 'Semarang', 45000),
(3, 'Yogyakarta', 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kustomer`
--

CREATE TABLE IF NOT EXISTS `kustomer` (
`id_kustomer` int(10) NOT NULL,
  `id_order` int(10) DEFAULT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telpon` varchar(18) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kustomer`
--

INSERT INTO `kustomer` (`id_kustomer`, `id_order`, `nama`, `alamat`, `kode_pos`, `kota`, `provinsi`, `email`, `telpon`, `total`) VALUES
(19, 43, 'Taufan', 'Pati\r\nPati', 59155, 'Pati', 'Jawa Tengah', 'vilfanvenci@gmail.com', '086767564454', 129000),
(21, 48, 'Adi', 'Semarang', 23523, 'Semarang', 'Jawa Tengah', 'adi@gmail.com', '08999558095', 200000),
(22, 49, 'tes', 'gftytydtfdghfg', 76465, 'tes', 'Tes', 'tes@tes.com', '86757363542424', 216000),
(23, 50, 'emon', 'kjhjfhdgd', 75748, 'monas', 'merdeka', 'emon@boy.com', '98656363646', 228000),
(24, 52, 'riyan', 'Jaya', 34632, 'Jaya', 'Jawa Tengah', 'riyan@gmail.com', '35346363463', 227000),
(25, 53, '', '', 0, '', '', '', '', 87000),
(26, 54, 'Rica', 'Pati\r\nPati', 59155, 'Pati', 'Jawa Tengah', 'rica@gmail.com', '2352352', 209000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`id_order` int(10) NOT NULL,
  `status_order` char(1) NOT NULL,
  `id_produk` int(5) DEFAULT NULL,
  `jumlah` int(3) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `id_session` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
`id_pembelian` int(10) NOT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `status_order` char(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `tanggal_beli`, `status_order`) VALUES
(39, '2016-12-13', 'P'),
(40, '2016-12-13', 'P'),
(41, '2016-12-13', 'P'),
(43, '2016-12-14', 'P'),
(47, '2016-12-15', 'P'),
(48, '2016-12-15', 'P'),
(49, '2016-12-15', 'P'),
(50, '2016-12-16', 'P'),
(51, '2016-12-19', 'P'),
(52, '2017-01-05', 'P'),
(53, '2017-01-05', 'P'),
(54, '2017-01-05', 'P');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
`id_produk` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `stok` int(3) DEFAULT NULL,
  `harga` int(10) NOT NULL,
  `deskripsi` text,
  `slide` char(1) NOT NULL,
  `rekomendasi` char(1) NOT NULL,
  `rating` int(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `gambar`, `stok`, `harga`, `deskripsi`, `slide`, `rekomendasi`, `rating`) VALUES
(2, 1, 'Gamis Batik Green', 'Model-Baju-Gamis-Batik-Kombinasi.jpg', 15, 95000, 'bahan nyaman', 'N', 'Y', NULL),
(3, 1, 'Gamis Batik', 'Contoh Busana Muslim Gamis Batik Terbaru 2016.png', 5, 87000, 'Gamis Batik di desain dengan konsep batik khas Indonesia agar menciptakan fashion mode dalam penggunaan gamis', 'Y', 'Y', NULL),
(4, 1, 'Gamis Batik Kombinasi', 'Model-baju-gamis-batik-kombinasi-terbaru-2016.png', 6, 92000, 'Bahan sangat halus dan nyaman untuk dipakai oleh wanita muslim. Desainnya juga sangat menawan dengan penggabungan corak batik ', 'Y', 'Y', NULL),
(5, 2, 'Baju Muslim Blazer Green', 'Contoh Model Baju Muslim Blazer Terbaru.png', 4, 110000, 'Baju muslim yang didesain secara khusus untuk acara santai dan kondangan bagi wanita muslim. ', 'Y', 'Y', NULL),
(6, 2, 'Baju Muslim Blazer Red', 'Model Baju Muslim Blazer Wanita Keren dan Gaul FatysFGas.jpg', 3, 105000, 'Baju muslim yang didesain secara khusus untuk acara santai dan kondangan bagi wanita muslim. ', 'N', 'N', NULL),
(7, 2, 'Baju Muslim Polkadot', 'Model Baju Muslim Polkadot Terbaru 2015.jpg', 6, 80000, 'Baju muslim dengan corak polkadot yang sangat imut. ', 'Y', 'Y', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
`id_rating` int(5) NOT NULL,
  `bintang1` int(5) DEFAULT NULL,
  `bintang2` int(5) DEFAULT NULL,
  `bintang3` int(5) DEFAULT NULL,
  `bintang4` int(5) DEFAULT NULL,
  `bintang5` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id_transaksi` int(10) NOT NULL,
  `id_order` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `status_order` char(1) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `total` varchar(18) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_order`, `nama`, `status_order`, `tanggal_beli`, `total`) VALUES
(2, 48, 'Adi', 'P', '2016-12-15', '200000'),
(3, 43, 'Taufan', 'P', '2016-12-14', '129000'),
(7, 49, 'tes', 'P', '2016-12-15', '216000'),
(8, 50, 'emon', 'P', '2016-12-16', '228000'),
(9, 52, 'riyan', 'P', '2017-01-05', '227000'),
(10, 54, 'Rica', 'P', '2017-01-05', '209000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
 ADD PRIMARY KEY (`id_detail_order`), ADD KEY `id_order` (`id_order`), ADD KEY `id_produk` (`id_produk`), ADD KEY `id_order_2` (`id_order`), ADD KEY `id_order_3` (`id_order`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
 ADD PRIMARY KEY (`id_konfirmasi`), ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `kota_kirim`
--
ALTER TABLE `kota_kirim`
 ADD PRIMARY KEY (`id_kota_kirim`);

--
-- Indexes for table `kustomer`
--
ALTER TABLE `kustomer`
 ADD PRIMARY KEY (`id_kustomer`), ADD UNIQUE KEY `id_order` (`id_order`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`id_order`), ADD UNIQUE KEY `id_produk` (`id_produk`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
 ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`id_produk`), ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
 ADD PRIMARY KEY (`id_rating`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id_transaksi`), ADD UNIQUE KEY `id_order` (`id_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
MODIFY `id_detail_order` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
MODIFY `id_konfirmasi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kota_kirim`
--
ALTER TABLE `kota_kirim`
MODIFY `id_kota_kirim` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kustomer`
--
ALTER TABLE `kustomer`
MODIFY `id_kustomer` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
MODIFY `id_pembelian` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
MODIFY `id_rating` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_order`
--
ALTER TABLE `detail_order`
ADD CONSTRAINT `detail_order_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `pembelian` (`id_pembelian`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
ADD CONSTRAINT `konfirmasi_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `transaksi` (`id_order`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kustomer`
--
ALTER TABLE `kustomer`
ADD CONSTRAINT `kustomer_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `detail_order` (`id_order`);

--
-- Ketidakleluasaan untuk tabel `order`
--
ALTER TABLE `order`
ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
