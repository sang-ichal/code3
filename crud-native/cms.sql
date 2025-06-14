-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2024 at 03:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(3) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `artikel` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `artikel`, `gambar`) VALUES
(1, 'PISANG', 'Pisang adalah buah tropis yang kaya kalium, berkulit kuning, dan berdaging lembut, sering dikonsumsi segar atau diolah dalam berbagai masakan.', 'https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/04/13/Pisang-Mas-2346743405.jpg'),
(2, 'SEMANGKA', 'Semangka termasuk dalam buah dalam keluarga buah labu-labuan atau Cucurbitaceae. Tanaman buah ini adalah tanaman herba yang tumbuh merambat. Menurut asal usulnya, buah berkulit hijau ini pertama kali berasal dari gurun Kalahari, Mesir, Afrika, dan diperkirakan dipanen 5.000 tahun yang lalu. Kemudian tanaman buah ini menyebar ke negara-negara seperti India, Cina, Amerika, dan Indonesia melalui pedagang.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Watermeloen.jpg/800px-Watermeloen.jpg'),
(3, 'APEL', 'Apel adalah buah yang dihasilkan dari pohon apel. Buah apel biasanya berwarna merah kulitnya jika masak dan siap dimakan, tetapi bisa juga kulitnya berwarna hijau atau kuning. Kulit buahnya agak lembek dan daging buahnya keras. Pohon apel berasal dari Asia Tengah, dan telah ditanam dan dibudidayakan selama ribuan tahun di Asia dan Eropa. Menurut Kamus Besar Bahasa Indonesia (KBBI), arti kata apel adalah pohon (genus dalus) yang buahnya bundar, berdaging tebal dan mengandung air serta berkulit lunak berwarna merah (kemerah-merahan), kuning (kekuning-kuningan), atau hijau, jika matang rasanya manis keasam-asaman.', 'https://www.balipost.com/wp-content/uploads/2017/12/balipostcom_makan-apel-setiap-hari-ini-10-manfaatnya_01-696x464.jpg'),
(4, 'BUAH NAGA', 'Buah naga adalah buah dari beberapa jenis kaktus dari marga Hylocereus dan Selenicereus. Buah ini berasal dari Meksiko, Amerika Tengah dan Amerika Selatan namun sekarang juga dibudidayakan di negara-negara Asia seperti Taiwan, Vietnam, Filipina, Indonesia dan Malaysia13. Buah naga kaya akan antioksidan dan zat pewarna alami yang disebut antosianin. Buah ini juga dapat melindungi sel dan jaringan tubuh dari kerusakan akibat radikal bebas dan bahkan menurunkan risiko kanker.', 'https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/09/14080126/X-Manfaat-Buah-Naga-Putih-untuk-Kesehatan.jpg.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
