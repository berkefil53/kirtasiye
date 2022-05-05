-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 Nis 2016, 14:25:45
-- Sunucu sürümü: 5.6.21
-- PHP Sürümü: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `kirtasiye`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisiler`
--

CREATE TABLE IF NOT EXISTS `kisiler` (
`kisid` int(11) NOT NULL,
  `kisiadi` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kisisoyadi` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kisiler`
--

INSERT INTO `kisiler` (`kisid`, `kisiadi`, `kisisoyadi`) VALUES
(28, 'berke', 'fil'),
(29, 'emine', 'dilsiz'),
(31, 'ufuk', 'çap'),
(32, 'halit', 'eroğlu'),
(33, 'edanur', 'dilsiz');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullaniciler`
--

CREATE TABLE IF NOT EXISTS `kullaniciler` (
`kulid` int(11) NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kuladi` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kulsifre` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullaniciler`
--

INSERT INTO `kullaniciler` (`kulid`, `email`, `kuladi`, `kulsifre`) VALUES
(1, '', 'admin', '12345');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `satis`
--

CREATE TABLE IF NOT EXISTS `satis` (
`sid` int(11) NOT NULL,
  `kisid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `adet` int(11) NOT NULL,
  `zaman` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `satis`
--

INSERT INTO `satis` (`sid`, `kisid`, `uid`, `adet`, `zaman`) VALUES
(1, 28, 10, 3, 12),
(2, 28, 10, 1, 0),
(3, 28, 10, 1, 0),
(4, 29, 10, 1, 0),
(5, 28, 10, 4, 0),
(6, 29, 12, 5, 0),
(7, 29, 10, 1, 0),
(8, 29, 10, 5, 0),
(9, 29, 10, 5, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE IF NOT EXISTS `urunler` (
`uid` int(11) NOT NULL,
  `uadi` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ufiyat` varchar(10) COLLATE utf8mb4_turkish_ci NOT NULL,
  `uresim` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT 'bosresim.png'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`uid`, `uadi`, `ufiyat`, `uresim`) VALUES
(10, 'cetvel', '121', 'cetvel.jpg'),
(12, 'kalemkutusu', '15', 'kkutusu.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kisiler`
--
ALTER TABLE `kisiler`
 ADD PRIMARY KEY (`kisid`);

--
-- Tablo için indeksler `kullaniciler`
--
ALTER TABLE `kullaniciler`
 ADD PRIMARY KEY (`kulid`);

--
-- Tablo için indeksler `satis`
--
ALTER TABLE `satis`
 ADD PRIMARY KEY (`sid`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
 ADD PRIMARY KEY (`uid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kisiler`
--
ALTER TABLE `kisiler`
MODIFY `kisid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- Tablo için AUTO_INCREMENT değeri `kullaniciler`
--
ALTER TABLE `kullaniciler`
MODIFY `kulid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `satis`
--
ALTER TABLE `satis`
MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
