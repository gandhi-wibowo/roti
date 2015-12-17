-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2015 at 12:19 AM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `roti`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE IF NOT EXISTS `bahan` (
  `id_bahan` int(11) NOT NULL AUTO_INCREMENT,
  `id_cake` int(11) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `jumlah_bahan` int(11) NOT NULL,
  `satuan_bahan` varchar(25) NOT NULL,
  PRIMARY KEY (`id_bahan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `bahan`
--

INSERT INTO `bahan` (`id_bahan`, `id_cake`, `nama_bahan`, `jumlah_bahan`, `satuan_bahan`) VALUES
(18, 13, 'Telur', 5, '3'),
(19, 13, 'Terigu', 125, '1'),
(20, 13, 'Tepung Maizena', 35, '1'),
(21, 13, 'Baking Powder', 1, '5'),
(22, 13, 'Soda Kue', 1, '5'),
(23, 13, 'Tereigu', 1, '5'),
(24, 13, 'Susu Kental Manis', 160, '2'),
(25, 13, 'Margarin Cair', 200, '1'),
(26, 13, 'Gula', 400, '1'),
(27, 13, 'Air Panas', 425, '2'),
(28, 14, 'Kacang Hijau Kupas', 100, '1'),
(29, 14, 'Gula Pasir', 65, '1'),
(30, 14, 'Santan', 150, '2'),
(31, 14, 'Garam', 25, '4'),
(32, 14, 'Vanili', 1, '4'),
(33, 14, 'Tepung Ketan Hitam', 100, '1'),
(34, 14, 'Tepung Ketan Putih', 100, '1'),
(35, 14, 'Kentang Kukus', 75, '1'),
(36, 14, 'Minyak Goreng', 1, '5'),
(37, 14, 'Santan Hangat', 150, '2'),
(38, 14, 'Garam', 5, '4'),
(39, 15, 'Tepung Terigu Protein Sedang (Segitiga Biru)', 250, '1'),
(40, 15, 'Telur Utuh', 1, '3'),
(41, 15, 'Garam', 1, '4'),
(42, 15, 'Air', 70, '2'),
(43, 15, 'Margarine', 1, '5'),
(44, 15, 'Wortel (Potong kecil)', 150, '1'),
(45, 15, 'Kentang (Potong Kecil)', 100, '1'),
(46, 15, 'Seledri', 2, '1'),
(47, 15, 'Telur Rebus (Potong 10 bagian / butir)', 4, '3'),
(48, 15, 'Bawang putih (Iris Tipis)', 2, '1'),
(49, 15, 'Bawang Merah (iris Tipis)', 3, '1'),
(50, 15, 'Merica bubuk', 50, '4'),
(51, 15, 'Garam dan gula secukupnya', 0, '1'),
(52, 15, 'Minyak Untuk Menumis Secukupnya', 0, '1'),
(53, 15, 'Soun (Rendam dengan air biasa hingga lembut)', 1, '6'),
(54, 16, 'Tepung Terigu', 100, '1'),
(55, 16, 'Tepung Beras', 2, '5'),
(56, 16, 'Telur', 1, '3'),
(57, 16, 'Garam', 25, '4'),
(58, 16, 'Air', 25, '2'),
(59, 16, 'Margarin Cair', 2, '5'),
(60, 16, 'Wortel iris memanjang', 1, '3'),
(61, 16, 'Toge', 20, '1'),
(62, 16, 'Merica halus', 1, '4'),
(63, 16, 'Saus Tiram', 1, '5'),
(64, 16, 'Gula Pasir', 1, '4'),
(65, 16, 'Kacang Tanah Goreng', 30, '1'),
(66, 16, 'Petis', 1, '4'),
(67, 17, 'telur ayam', 5, '3'),
(68, 17, 'santan', 250, '2'),
(69, 17, 'gula pasir', 100, '2'),
(70, 17, 'tepung terigu', 1, '5'),
(71, 17, 'garam Secukupny', 0, '4'),
(72, 17, 'pasta pandan Secukupny', 0, '1'),
(73, 18, 'tepung terigu', 400, '1'),
(74, 18, 'mentega blue band', 70, '1'),
(75, 18, 'air', 80, '2'),
(76, 18, 'garam', 1, '4'),
(77, 18, 'minyak untuk menggoreng Secukupnya', 0, '2'),
(78, 19, 'tepung terigu', 500, '1'),
(79, 19, 'telur', 2, '3'),
(80, 19, 'mentega', 1, '5'),
(81, 19, 'santan', 300, '2'),
(82, 19, 'air bersih', 300, '2'),
(83, 19, 'vanili', 5, '5'),
(84, 19, 'garam', 5, '5'),
(85, 19, 'gula pasir', 125, '1'),
(86, 19, 'Beking powder', 5, '5'),
(87, 19, 'ragi instan', 5, '5'),
(88, 20, 'pisang raja belah menjadi 2 bagian tipis lalu masa', 7, '3'),
(89, 20, 'tepung terigu', 150, '1'),
(90, 20, 'gula pasir', 5, '5'),
(91, 20, 'garam', 5, '4'),
(92, 20, 'susu cair (ultra) ato pake santan juga bisa', 300, '2'),
(93, 20, 'vanili', 5, '4'),
(94, 20, 'keju parut', 300, '1'),
(95, 20, 'coklat bubuk', 2, '4'),
(96, 20, 'minyak sayur', 2, '5'),
(97, 20, 'Pasta coklat Secukupnya', 0, '1'),
(98, 20, 'Garam Secukupnya', 0, '1'),
(99, 20, 'telur', 1, '3');

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE IF NOT EXISTS `cake` (
  `id_cake` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nama_cake` varchar(35) NOT NULL,
  `jam` time NOT NULL,
  `tgl` date NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_cake`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`id_cake`, `id_user`, `nama_cake`, `jam`, `tgl`, `gambar`, `deskripsi`) VALUES
(13, 1, 'BOLU KARAMEL ATAU SARANG SEMUT', '11:19:24', '2015-11-26', '1.jpg', 'resep asli dari mba google..sudah dimodif. hasilnya lumayan menurut yng sudah mencoba'),
(14, 1, 'Kue Ku Ketan Hitam', '11:23:22', '2015-11-26', '2.jpg', 'Udah lama pingin nyoba bikin kue ini, tapi koq ribet kayaknya, udah gitu yg nama nya kue tradisional itu, kliatannya aja sederhana padahal rumit, dari pd klamaan mikir soal kegagalan, mending aku nekat ajah hihi, trnyata gak seribet yg aku bayangin loh, gampang banget koq, udah gitu hasilnya lembyuuuut & legit walo kue udah dingin.(resep asli dari sajian sedap, untuk 30 biji)'),
(15, 1, 'Pastel Sayur dan Telur', '11:31:22', '2015-11-26', '3.jpg', 'Suami dan anak-anak paling suka sama telur. Karena itu pastel ini pun menjadi kue kesukaan keluarga kecilku. Cocok juga untuk sajian kue arisan :'),
(16, 1, 'Lumpia saus petis', '11:37:57', '2015-11-26', '4.jpg', 'Sore hari hujan, mau bikin camilan yang cepat & nikmat utk teman minum teh. Awalnya ingin bikin bakwan saja, tapi terlalu biasa. Dengan bahan yang sama, berkeasi deh jadi lumpia. Kebetulan ada petis, sip deh buat sausnya.'),
(17, 1, 'Bingka Pandan Khas Kalsel', '11:40:17', '2015-11-26', '5.jpg', 'berhubung kemaren bikin bingka gula merah makan sendiri.suami lagi diluar kota liat fotonya aza.akhirnya dia request minta dibikinkan bingka.terserah rasa apa.akhirnya saya bikinkan rasa pandan aza.'),
(18, 1, 'Pastel Mini Abon Ikan', '11:42:47', '2015-11-26', '6.jpg', 'ngiler bgt liat pastel dipinggir jalan, karena ada abon ikan buatan sendiri, akhirnya nekat. allhmdulillah berhasill'),
(19, 1, 'Martabak mini suka-suka', '11:46:11', '2015-11-26', '7.jpg', 'Martabak Mini Dengan Variasi suka suka'),
(20, 1, 'Dadar gulung pisang keju', '11:49:35', '2015-11-26', '8.jpg', 'Gara2 ada pisang yg hampir matang daripada gak kemakan aku bikin dadar gulung pisang keju deh');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `pwd` text NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `pwd`, `photo`) VALUES
(3, 'gandhi', 'f18ed7847686171c3f3f8670cdb0291e', 'l.jpg'),
(4, 'dayat', '1855c11f044cc8944e8cdac9cae5def8', 'dayat.jpg'),
(5, 'nasmaidi', '99cb7a819447f2baf0fc1cd93913d898', 'edie.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
