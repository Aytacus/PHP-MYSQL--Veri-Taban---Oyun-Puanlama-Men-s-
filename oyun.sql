-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: sql105.epizy.com
-- Üretim Zamanı: 22 May 2023, 10:14:26
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `epiz_34253549_oyun`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilardb`
--

CREATE TABLE `kullanicilardb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kullaniciadidb` varchar(60) NOT NULL,
  `kullanicisifredb` varchar(64) NOT NULL,
  `epostadb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kullanicilardb`
--

INSERT INTO `kullanicilardb` (`id`, `kullaniciadidb`, `kullanicisifredb`, `epostadb`) VALUES
(5, 'ayt', 'aytayt123', 'zamluk@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oyunlardb`
--

CREATE TABLE `oyunlardb` (
  `oyunid` bigint(20) NOT NULL,
  `oyunismidb` varchar(100) NOT NULL,
  `oyuncikistarihidb` date NOT NULL,
  `oyunpuani` int(11) NOT NULL,
  `sayac` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `ortalama_puan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `oyunlardb`
--

INSERT INTO `oyunlardb` (`oyunid`, `oyunismidb`, `oyuncikistarihidb`, `oyunpuani`, `sayac`, `ortalama_puan`) VALUES
(23, 'Red Dead Redemption 2', '2018-10-26', 34, 4, 8.5),
(24, 'Dying Light 2', '2022-02-04', 9, 1, 9);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilardb`
--
ALTER TABLE `kullanicilardb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kullaniciadidb` (`kullaniciadidb`);

--
-- Tablo için indeksler `oyunlardb`
--
ALTER TABLE `oyunlardb`
  ADD PRIMARY KEY (`oyunid`),
  ADD UNIQUE KEY `oyunismidb` (`oyunismidb`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilardb`
--
ALTER TABLE `kullanicilardb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `oyunlardb`
--
ALTER TABLE `oyunlardb`
  MODIFY `oyunid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
