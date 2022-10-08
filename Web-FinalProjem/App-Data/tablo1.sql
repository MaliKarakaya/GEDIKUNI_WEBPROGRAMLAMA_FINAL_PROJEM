-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Haz 2022, 14:02:10
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

CREATE DATABASE tablo1;
Use tablo1;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tablo1`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ccyorum`
--

CREATE TABLE `ccyorum` (
  `id` int(11) NOT NULL,
  `yorum_yazan` varchar(400) NOT NULL,
  `yorum_icerik` varchar(400) NOT NULL,
  `yorum_tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `ccyorum`
--

INSERT INTO `ccyorum` (`id`, `yorum_yazan`, `yorum_icerik`, `yorum_tarih`) VALUES
(5, 'Muhammet Ali', 'ilk yorum', '2022-06-13 02:49:09'),
(7, 'tolga aydaç', 'gerçekten güzel bir blog faydalı oldu', '2022-06-14 12:43:14'),
(12, 'Muhammet Ali', '16,06,2022 deneme', '2022-06-16 13:01:24'),
(13, 'ded', 'ededede', '2022-06-23 11:57:24'),
(14, 'ded', 'ededede', '2022-06-23 11:58:42');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `flutteryorum`
--

CREATE TABLE `flutteryorum` (
  `id` int(11) NOT NULL,
  `yorum_yazan` varchar(50) NOT NULL,
  `yorum_icerik` varchar(400) NOT NULL,
  `yorum_tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `flutteryorum`
--

INSERT INTO `flutteryorum` (`id`, `yorum_yazan`, `yorum_icerik`, `yorum_tarih`) VALUES
(4, 'Muhammet Ali', 'Flutter için faydalı bir yazı olmuş', '2022-06-14 14:51:42'),
(5, 'Muhammet Ali', '16,06,2022 deneme', '2022-06-16 13:15:04'),
(6, 'Muhammet Ali', '23.06.2022 deneme', '2022-06-23 00:57:07');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `parola` varchar(150) NOT NULL,
  `kayit_tarihi` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_adi`, `email`, `parola`, `kayit_tarihi`) VALUES
(39, 'muhammetali', 'muhaemo@gmail.com', '123456', '2022-06-09 20:18:14'),
(40, 'muhammetali1', 'muhaemo@gmail.com', '123456', '2022-06-09 20:43:19'),
(41, 'sancak', 'mdaskldmas@gmail.com', '1233456', '2022-06-11 21:33:27'),
(45, 'muhammetali5', 'muhaemo@gmail.com', '123456', '2022-06-11 21:38:36'),
(46, 'Tolgaydaç', 'mdaskldmas@gmail.com', '123456', '2022-06-14 16:24:57'),
(47, 'muhammetali9', 'muhaemo@gmail.com', '123456', '2022-06-16 17:38:37'),
(48, 'ekerls', 'ekerls@yandex.com', '123456', '2022-06-23 14:59:49');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `larvelyorum`
--

CREATE TABLE `larvelyorum` (
  `id` int(11) NOT NULL,
  `yorum_yazan` varchar(50) NOT NULL,
  `yorum_icerik` varchar(400) NOT NULL,
  `yorum_tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `larvelyorum`
--

INSERT INTO `larvelyorum` (`id`, `yorum_yazan`, `yorum_icerik`, `yorum_tarih`) VALUES
(1, 'Muhammet Ali', 'Laravel İçin Faydalı Bir Yazı Olmuş', '2022-06-14 15:52:26'),
(2, 'Muhammet Ali', '16,06,2022 deneme', '2022-06-16 13:36:57'),
(3, 'ekerls', 'asdasdasd', '2022-06-23 11:57:14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `phpyorum`
--

CREATE TABLE `phpyorum` (
  `id` int(11) NOT NULL,
  `yorum_yazan` varchar(50) NOT NULL,
  `yorum_icerik` varchar(400) NOT NULL,
  `yorum_tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `phpyorum`
--

INSERT INTO `phpyorum` (`id`, `yorum_yazan`, `yorum_icerik`, `yorum_tarih`) VALUES
(1, 'Muhammet Ali', 'php için faydalı bir yazı', '2022-06-14 13:47:31'),
(2, 'Muhammet Ali', ' $sonuc=mysqli_query($baglanti,$sorgu);', '2022-06-16 13:13:16');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ccyorum`
--
ALTER TABLE `ccyorum`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `flutteryorum`
--
ALTER TABLE `flutteryorum`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kullanici_adi` (`kullanici_adi`);

--
-- Tablo için indeksler `larvelyorum`
--
ALTER TABLE `larvelyorum`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `phpyorum`
--
ALTER TABLE `phpyorum`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ccyorum`
--
ALTER TABLE `ccyorum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `flutteryorum`
--
ALTER TABLE `flutteryorum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Tablo için AUTO_INCREMENT değeri `larvelyorum`
--
ALTER TABLE `larvelyorum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `phpyorum`
--
ALTER TABLE `phpyorum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
