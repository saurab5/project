-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2017 at 09:38 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `record`
--

-- --------------------------------------------------------

--
-- Table structure for table `fav`
--

CREATE TABLE `fav` (
  `fav_id` int(40) NOT NULL,
  `loc_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fav`
--

INSERT INTO `fav` (`fav_id`, `loc_id`, `username`) VALUES
(9, 10, 'gaurab'),
(10, 11, 'gaurab'),
(15, 2, 'milan'),
(16, 6, 'milan');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `loc_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `details` longtext NOT NULL,
  `date` date DEFAULT NULL,
  `location` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`loc_id`, `name`, `details`, `date`, `location`, `image`, `type`) VALUES
(1, 'Chitwan', 'Chitwan National Park is one of the premier drawcards in Nepal, and there was little damage to areas visited by tourists in the 2015 earthquake. The World HeritageÃ¢â‚¬â€œlisted reserve protects over 932 sq km of forests, marshland and rippling grassland, and is home to sizeable wildlife populations.', '0000-00-00', 'chitwan', ' assets/img/chitwan.jpg', 'place'),
(2, 'Pokhara', 'Far from the earthquake epicenter, and almost unaffected by the disaster, Pokhara ticks all the right boxes, with spectacular scenery, adventure activities, and accommodation and food choices galore. Whether youÃ¢â‚¬â„¢ve returned from a three-week trek or endured a bus trip from hell, Lakeside Pokhara is the perfect place to recharge your batteries.', '0000-00-00', 'pokhara', ' assets/img/pokhara.jpg', 'place'),
(4, 'Lumbini', 'It was in Lumbini, around the year 563 BC, that one of historyâ€™s greatest and most revered figures, Siddhartha Gautama â€“ better known as the Buddha â€“ was born. Itâ€™s no great surprise to learn that the World Heritageâ€“listed Lumbini is of huge religious significance and attracts Buddhist pilgrims from around the world.', '0000-00-00', 'lumbini', ' assets/img/lumbini.jpg', 'place'),
(5, 'Bhaktapur Durbar Square', '"Bhaktapur Durbar Square" the city is also known, is a museum of medieval art and architecture with many examples of sculpture, woodcarving and colossal pagoda temples consecrated to different gods and goddesses which is 15 km far from Kathmandu. It is a conglomeration of pagoda and shikhara-style temples grouped around a fifty-five window palace of brick and wood. The square is one of the most charming architectural showpieces of the Valley as it highlights the ancient arts of Nepal. The golden effigies of kings perched on the top of stone monoliths, the guardian deities looking out from their sanctuaries, the wood carvings in every place-struts, lintels, uprights, tympanums, gateways and windows-all seem to form a well-orchestrated symphony. Pottery and weaving are its major traditional industries.', '0000-00-00', 'Bhaktapur', ' assets/img/bhaktapur.jpg', 'place'),
(6, 'Patan', 'Patan is my howntown', '0000-00-00', 'kumaripati', ' assets/img/patan.jpg', 'place'),
(7, 'Shivaratri', 'Maha Shivaratri is a Hindu festival celebrated annually in honour of the god Shiva. There is a Shivaratri in every lunary month on its 13th night /14th day, but once a year in late winter (February/March) and before the arrival of spring, marks Maha Shivaratri which means "the Great Night of Shiva".', '2017-02-25', 'Nepal', ' assets/img/Pashupatinath.jpg', 'event'),
(8, 'Maghe sankranti', 'Maghe Sankranti is a Nepalese festival observed on the first of Magh in the Bikram Samwat Nepali calendar (about 14 January) bringing an end to the ill-omened month of Poush when all religious ceremonies are forbidden. On this day, the sun is believed to leave its southernmost position and begin its northward journey. Maghe Sankranti is similar to solstice festivals in other religious traditions', '2017-01-19', 'Nepal', ' assets/img/maghe.jpg', 'event'),
(9, 'Trout fish', 'Himalayan Trout Fish Farm is located in Kathmandu, Nepal. Company is working in Leisure business activities.Trout is the common name for a number of species of freshwater fish belonging to the genera Oncorhynchus, Salmo and Salvelinus, all of the subfamily Salmoninae of the family Salmonidae.', '0000-00-00', 'godawari', ' assets/img/fish.jpg', 'lactivities'),
(10, 'Machindranath', 'Rato Machindranath Raath yatra is a month long chariot pulling festival of Patan, takes place sometime during April-may.  Rato Machindranath, the god of rain resides for six months in the temple located near Patan Durbar Square.  The rain of god is brought to the chariot that is assembled in Pulchok.  The chariot is pulled through various parts of the town of Patan; the route begins from pulchok, goes thru Gabahal, Hakha, Sundhara, LaganKhel and ends in Jawalakhel.  On the last day of the chariot pulling festival, Bhoto Jatra (Vest festival) takes place.  During Bhoto Jatra festival, the jewel studded vest is displayed by officials from each corner of the chariot so that the entire public can see it.  After this festival, Rato Machindranath is then taken to Bungamati temple, where  Rato Machindranath resides for the rest of the year.', '2017-04-12', 'patan', ' assets/img/machindranath.jpg', 'levent'),
(11, 'Bisket_jatra', 'Bisket Jatra is an annual event in Bhaktapur, Madhyapur Thimi, Dhapasi and Tokha in Nepal. This festival is celebrated at the start of the new year on the Bikram Sambat calendar, however, the festival it self is not related to Bikram Sambat.', '2017-05-14', 'Bhaktapur', ' assets/img/bisket_jatra.png', 'levent');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` text NOT NULL,
  `user` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `fname`, `lname`, `username`, `password`, `email`, `age`, `user`) VALUES
(15, 'gaurab', 'basnet', 'gaurab', 'e66055e8e308770492a44bf16e875127', 'gaurabbasnet5@gmail.com', '19', NULL),
(16, 'admin', 'admin', 'admin', 'e66055e8e308770492a44bf16e875127', 'admin5@gmail.com', '19', 'admin'),
(20, 'Milan', 'Amatya', 'milan', 'e66055e8e308770492a44bf16e875127', 'milan22@yahoo.com', '19', NULL),
(21, 'saurab', 'singh', 'saurab', 'e66055e8e308770492a44bf16e875127', 'saurabbasnet5@gmail.com', '19', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fav`
--
ALTER TABLE `fav`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `loc_id` (`loc_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fav`
--
ALTER TABLE `fav`
  MODIFY `fav_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `fav`
--
ALTER TABLE `fav`
  ADD CONSTRAINT `fav_ibfk_2` FOREIGN KEY (`loc_id`) REFERENCES `place` (`loc_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
