-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2025 at 11:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastfood shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahsolat`
--

CREATE TABLE `mahsolat` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_persian_ci NOT NULL,
  `text` varchar(500) COLLATE utf8mb4_persian_ci NOT NULL,
  `imageurl` varchar(500) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `mahsolat`
--

INSERT INTO `mahsolat` (`id`, `name`, `text`, `imageurl`) VALUES
(10, 'پیتزا پپرونی:', 'پپرونی نوعی پیتزای تند آمریکایی است که از کالباس و گوشت گاو پخته شده با پاپریکا یا فلفل چیلی تهیه می شود.', 'images/پپرونی.jpg'),
(11, 'پیتزا مخصوص:', 'پیتزا مخصوص یکی از انواع پیتزا در ایران و خوشمزه ترین پیتزا است. این نوع پیتزا مختص ایرانی‌هاست و به شکل‌های مختلفی طبخ می‌شود. تقریبا هر رستوران، پیتزا مخصوص را به سبک خود تهیه می‌کند.', 'images/A2146.jpg'),
(12, 'پیتزا رست بیف:', 'پیتزا رست بیف به پیتزایی گفته می‌شود که برای طبخ آن از گوشت برش خورده و پخته شده سینه گاو استفاده می‌شود.', 'images/پیتزا-رست-بیف.png'),
(13, 'پیتزا گوشت و قارچ:', 'یکی از انواع محبوب این غذا پیتزا گوشت و قارچ است؛ زیرا در تهیه آن از هیچ گونه گوشت فرآوری شده ای استفاده نمی شود. این غذا به علت وجود قارچ و پنیر و گوشت، کالری بالایی دارد و برای کسانی که می خواهند یک غذای سالم بخورند، گزینه مناسب تری از انواع پیتزاهای تهیه شده با سوسیس و کالباس محسوب می شود.', 'images/pitza-gharch-goosht.jpg'),
(14, 'پیتزا زبان:', 'پیتزا زبان از خوشمزه‌ترین پیتزاهایی است که حتما باید آن را امتحان کنید! شما می‌توانید پیتزا زبان را با زبان گاو یا گوساله به همراه سس مخصوص آن تهیه کنید به دلیل مواد مغذی موجود در زبان گوساله و گاو این غذا سرشار از خواص مفید برای بدن شما خواهد بود.', 'images/5-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `peopele`
--

CREATE TABLE `peopele` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_persian_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` int(11) NOT NULL,
  `repassword` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `peopele`
--

INSERT INTO `peopele` (`id`, `name`, `lastname`, `email`, `username`, `password`, `repassword`, `admin`) VALUES
(1, 'مهدی', 'محمدی', 'm@gmail.com', 'Mahdi.King', 1234, 1234, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahsolat`
--
ALTER TABLE `mahsolat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peopele`
--
ALTER TABLE `peopele`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahsolat`
--
ALTER TABLE `mahsolat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `peopele`
--
ALTER TABLE `peopele`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
