-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 25 Nis 2022, 20:16:12
-- Sunucu sürümü: 10.1.37-MariaDB
-- PHP Sürümü: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `egemen_rental`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `parentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `genres`
--

INSERT INTO `genres` (`id`, `name`, `parentID`) VALUES
(1, 'Comedy', 0),
(3, 'Action', 0),
(4, 'Fiction', 0),
(5, 'Western', 0),
(6, 'American Comedy', 1),
(7, 'Turkish Comedy', 1),
(8, 'Sci - Fiction', 4),
(9, 'Pulp - Fiction', 4),
(10, 'Movie Action', 3),
(11, 'New Western', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `movie`
--

INSERT INTO `movie` (`id`, `name`) VALUES
(1, 'Star Wars : Return of the Jedi'),
(2, 'Pulp Fiction'),
(3, 'Lord Of The Rings : Return of the king'),
(4, 'Deadpool'),
(5, 'Lord Of The Rings : The fellowship of the ring'),
(6, 'Star Wars : Revenge of the sith');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `movie_re_genre`
--

CREATE TABLE `movie_re_genre` (
  `id` int(11) NOT NULL,
  `movieID` int(11) NOT NULL,
  `genreID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `movie_re_genre`
--

INSERT INTO `movie_re_genre` (`id`, `movieID`, `genreID`) VALUES
(1, 1, 10),
(2, 2, 10),
(3, 3, 9),
(4, 4, 9);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `movieID` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rentalEndtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(2555) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `movie_re_genre`
--
ALTER TABLE `movie_re_genre`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `movie_re_genre`
--
ALTER TABLE `movie_re_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
