-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Mei 2018 pada 14.02
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuriak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` varchar(20) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `detail` longtext NOT NULL,
  `review` longtext NOT NULL,
  `author` varchar(30) NOT NULL,
  `kelebihan` longtext NOT NULL,
  `kekurangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `tgl`, `detail`, `review`, `author`, `kelebihan`, `kekurangan`) VALUES
('A0001', 'hp android memuaskan ', '2018-04-30', 'bagus', 'bagus dsfsadfwafqwe fwa fds afds fawd fqw f se fsadf q we fdsf ads fewf ew fdsfds feqw rds fsdf wf qwefds fdsf dsfdfsd feqf ds fsdaf sd fdf qwsf sda fsdaf ds f', 'jika ada', 'ga ada', 'terus buat apa'),
('A0002', 'kapan Wisuda???', '2018-04-30', 'jlskdjfkljsdflksdflk jsfkj dlkfjdsajf kldsj fkldsjf lkjflkasdj flkdsjfkdsj fd skfljdlkjfsd f', 'dsfljskdlfjlkd fjsd kjdf lksjda lfkjds fk sjdflkds jfkdsljfklsd jfkdl fklds jkds fjklds fjlksda jfkldsj fksld fjklsdj fdslkj fksld fkd fjkdsl jfklds jfklsdj fksd jflksadj fkdlsa fjklsdjf sadsfj dslk jklds', 'LAmmzz', 'dsj fldsfj kdsdks jfld jklds jkls jfskdla jksj fdlks fdlfj sdk', 'dsj flkd jfksdlj fdlska jfldjf lksdj flkdsj flsadf ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
