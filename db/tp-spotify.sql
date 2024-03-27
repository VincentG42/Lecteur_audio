-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 13, 2024 at 12:40 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp-spotify`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `song_id` int NOT NULL,
  `content` varchar(255) NOT NULL,
  `valeur` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `song_id`, `content`, `valeur`) VALUES
(1, 3, 2, 'comment test', NULL),
(2, 3, 2, '2e test', NULL),
(3, 3, 2, '3e test', NULL),
(4, 3, 13, 'pour Turan', NULL),
(5, 3, 2, 'pour Turan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id`, `name`, `user_id`) VALUES
(1, 'Ma playlist', 3),
(3, 'Ma playlist 2', 3),
(4, 'Ma playlist', 6);

-- --------------------------------------------------------

--
-- Table structure for table `playlist_song`
--

CREATE TABLE `playlist_song` (
  `id` int NOT NULL,
  `playlist_id` int NOT NULL,
  `song_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlist_song`
--

INSERT INTO `playlist_song` (`id`, `playlist_id`, `song_id`) VALUES
(1, 3, 2),
(2, 3, 1),
(3, 3, 6),
(7, 0, 0),
(8, 0, 0),
(9, 3, 10),
(10, 3, 14),
(11, 3, 13),
(12, 3, 17),
(13, 3, 19);

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `pictures` varchar(255) NOT NULL,
  `track` varchar(255) NOT NULL,
  `singer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`id`, `title`, `album`, `pictures`, `track`, `singer`) VALUES
(1, 'Vacs In The Morning', '', 'cover_653.jpg', 'MartijnSchmit-VacsInTheMorning.mp3', 'Martijn Schmit'),
(2, 'Lockdown', '', 'cover_641.jpg', 'BaribalPold-Lockdown.mp3', 'Baribal & Pold '),
(3, 'Beautiful Lies', '', 'cover_640.jpg', 'SaurabhAlwadkar-BeautifulLies.mp3', 'Saurabh Alwadkar'),
(4, 'Takayama', '', 'cover_633.jpg', 'Niwel-Takayama.mp3', 'Niwel'),
(6, 'K For Kool', '', 'cover_621.jpg', 'Kuromaru-KForKool.mp3', 'Kuromaru'),
(7, 'Aching.', '', 'cover_655.jpg', 'Freddiedot-Aching.mp3', 'Freddiedot'),
(8, 'RYYZN', '', 'cover_649.jpg', 'RYYZN-Overthinking.mp3', 'Overthinking'),
(9, 'Here For The Night', '', 'cover_586.jpg', 'RYYZN-HereForTheNight.mp3', ' RYYZN'),
(10, 'Demigods', '', 'cover_556.jpg', 'MikeChinoBeats-Demigods.mp3', 'Mike Chino '),
(11, 'Follow me (feat Paps)', '', 'cover_534.jpg', 'Vendredi_Follow_me.mp3', ' Vendredi'),
(12, 'Stop', '', 'cover_507.jpg', 'Ghost_k_-_Stop_One_More_Time_Remix_2011.mp3', 'Ghost Kollective'),
(13, '   Lover', '', 'cover_613.jpg', 'SquareASaw-Lover.mp3', 'Square A Saw'),
(14, ' Paris La Nuit', '', 'cover_595.jpg', 'A_Virtual_Friend-Paris_La_Nuit.mp3', 'A Virtual Friend'),
(15, '  Nowhere Known', '', 'cover_582.jpg', 'YourFriendGhost-NowhereKnown.mp3', 'Your Friend Ghost'),
(16, '   Intro', '', 'cover_537.jpg', 'Quantum_Jazz_-_Intro.mp3', 'Quantum Jazz'),
(17, 'Dolling', '', 'cover_502.jpg', 'Cybersdf-Dolling.mp3', 'Cybersdf'),
(18, 'Marée', '', 'cover_604.jpg', 'KaiEngel-Maree.mp3', 'Kai Engel'),
(19, 'Flourish', '', 'cover_571.jpg', 'PurrpleCat-Flourish.mp3', 'Purrple Cat'),
(20, '   Episodes', '', 'cover_444.jpg', '07-azooraFeat.Graciellita-episodes.mp3', 'Azoora feat. Graciellita'),
(21, 'test', '', 'retro_image_of_a_web_developper_working_on_a_dee.jpg', 'Freddiedot-Aching.mp3', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `pseudo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `pseudo`) VALUES
(1, 'admin'),
(2, 'test'),
(3, 'Vincent'),
(4, 'test2'),
(5, 'Brieuc'),
(6, 'Sarah ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist_song`
--
ALTER TABLE `playlist_song`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `playlist_song`
--
ALTER TABLE `playlist_song`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
