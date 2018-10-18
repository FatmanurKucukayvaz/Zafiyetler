-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 May 2017, 01:37:34
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kou`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar1`
--

CREATE TABLE `kullanicilar1` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_isim` varchar(50) NOT NULL,
  `kullanici_ad` varchar(100) NOT NULL,
  `sifre` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar1`
--

INSERT INTO `kullanicilar1` (`kullanici_id`, `kullanici_isim`, `kullanici_ad`, `sifre`) VALUES
(1, 'Hilal Arslan', 'hilal', '123456'),
(2, 'Fatmanur Kucukayvaz', 'fatmanur', '123456'),
(5, 'heykir', 'heykir', '123456');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar1`
--
ALTER TABLE `kullanicilar1`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar1`
--
ALTER TABLE `kullanicilar1`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
