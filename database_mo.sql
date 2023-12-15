-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Pi 15.Dec 2023, 20:11
-- Verzia serveru: 10.4.24-MariaDB
-- Verzia PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `database_mo`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `event`
--

CREATE TABLE `event` (
  `ID` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `speaker_id` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `happened` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `event`
--

INSERT INTO `event` (`ID`, `title`, `description`, `date`, `speaker_id`, `price`, `happened`) VALUES
(1, 'Online Business', 'The purpose of lorem ipsum is to create a natural looking block of text that doesn\'t distract from the layout. A practice not without controversy, laying out pages with meaningless filler.', '2023-12-03', 1, 350, 1),
(2, 'Life in Corporate', 'The purpose of lorem ipsum is to create a natural looking block of text that doesn\'t distract from the layout. A practice not without controversy, laying out pages with meaningless filler.', '2023-09-12', 5, 350, 1),
(3, 'Startup Development', 'The purpose of lorem ipsum is to create a natural looking block of text that doesn\'t distract from the layout. A practice not without controversy, laying out pages with meaningless filler.', '2023-12-03', 3, 350, 1),
(4, 'Building Company', 'The purpose of lorem ipsum is to create a natural looking block of text that doesn\'t distract from the layout. A practice not without controversy, laying out pages with meaningless filler.', '2024-03-04', 1, 350, 0),
(5, 'HR Business', 'The purpose of lorem ipsum is to create a natural looking block of text that doesn\'t distract from the layout. A practice not without controversy, laying out pages with meaningless filler.', '2024-12-19', 3, 200, 0),
(6, 'Business Models', 'The purpose of lorem ipsum is to create a natural looking block of text that doesn\'t distract from the layout. A practice not without controversy, laying out pages with meaningless filler.', '2024-02-07', 2, 250, 0);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `review`
--

CREATE TABLE `review` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `text` varchar(200) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `review`
--

INSERT INTO `review` (`ID`, `user_id`, `event_id`, `text`, `date_time`) VALUES
(21, 11, 1, 'Such a great experience! Recommend...', '2023-12-14 23:11:32'),
(22, 10, 2, 'I have got many info about staff related to working in company, thanks.', '2023-12-14 23:15:30'),
(23, 10, 1, 'I´ve spread my horizonts thanks your course. Great!', '2023-12-14 23:22:26'),
(24, 12, 3, 'I recommend this one to everyone who would like to set off start', '2023-12-15 15:34:30'),
(26, 13, 2, 'I like it', '2023-12-15 19:15:30');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `ID` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `speaker`
--

CREATE TABLE `speaker` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `speaker`
--

INSERT INTO `speaker` (`ID`, `first_name`, `last_name`, `mail`, `password`, `position`, `img`) VALUES
(1, 'Logan', 'Wilson', 'loganwilson@mail.com', '123', 'CEO / FOUNDER', 'logan.jpg'),
(2, 'Natalie', 'Portman', 'natalieportman@mail.com', '123', 'EVENT PLANNER', 'natalie.jpg'),
(3, 'Thomas', 'Alva', 'thomasalva@mail.com', '123', 'STARTUP COACH', 'thomas.jpg'),
(4, 'Isabella', 'Loren', 'isabellaloren@mail.com', '123', 'EVENT MANAGER', 'isabella.jpg'),
(5, 'Samantha', 'Bevel', 'samanthabevel@mail.com', '123', 'TOP LEVEL SPEAKER', 'samantha.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `user`
--

INSERT INTO `user` (`ID`, `first_name`, `last_name`, `mail`, `password`, `img`) VALUES
(9, 'Alexander', 'Johnson', 'ajohnson@gmail.com', '123', 'default.jpg'),
(10, 'Henry', 'Mitchell', 'hmitchell@gmail.com', '123', 'default.jpg'),
(11, 'Sophia', 'Davis', 'sdavis@gmail.com', '123', 'default2.jpg'),
(12, 'Hannah', 'Carten', 'hcarten@gmail.com', '123', 'default2.jpg'),
(13, 'Steven', 'Stephenson', 'sstephenson@gmail.com', '123', 'default.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `user_event`
--

CREATE TABLE `user_event` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `user_event`
--

INSERT INTO `user_event` (`ID`, `user_id`, `event_id`) VALUES
(39, 12, 6),
(40, 12, 5),
(41, 12, 4),
(45, 13, 5),
(46, 13, 4),
(47, 13, 6);

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `SpeakerID` (`speaker_id`);

--
-- Indexy pre tabuľku `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexy pre tabuľku `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EventID` (`event_id`),
  ADD KEY `UserID` (`user_id`);

--
-- Indexy pre tabuľku `speaker`
--
ALTER TABLE `speaker`
  ADD PRIMARY KEY (`ID`);

--
-- Indexy pre tabuľku `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexy pre tabuľku `user_event`
--
ALTER TABLE `user_event`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserID` (`user_id`),
  ADD KEY `EventID` (`event_id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `event`
--
ALTER TABLE `event`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pre tabuľku `review`
--
ALTER TABLE `review`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pre tabuľku `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pre tabuľku `speaker`
--
ALTER TABLE `speaker`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pre tabuľku `user_event`
--
ALTER TABLE `user_event`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`speaker_id`) REFERENCES `speaker` (`ID`);

--
-- Obmedzenie pre tabuľku `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`ID`);

--
-- Obmedzenie pre tabuľku `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `shopping_cart_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`ID`),
  ADD CONSTRAINT `shopping_cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`ID`);

--
-- Obmedzenie pre tabuľku `user_event`
--
ALTER TABLE `user_event`
  ADD CONSTRAINT `user_event_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `user_event_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
