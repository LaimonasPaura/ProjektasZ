-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 06:08 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `planets`
--

-- --------------------------------------------------------

--
-- Table structure for table `planet`
--

CREATE TABLE `planet` (
  `ID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `about` mediumtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planet`
--

INSERT INTO `planet` (`ID`, `name`, `about`, `image`) VALUES
(1, 'Mars', 'Mars is the fourth planet from the Sun and is the second smallest planet in the solar system. Named after the Roman god of war, Mars is also often described as the \"Red Planet\" due to its reddish appearance. The ancient Greeks called the planet Ares, after their god of war; the Romans, associating the planet\'s blood-red colour with Mars, their own god of war, whilst Egyptian priests called on \'Her Desher\', or ?the red one?. Mars and Earth have approximately the same landmass. Surface gravity on Mars is only 37% of the Earth?s (meaning you could leap nearly three times higher on Mars). Also, Mars is home to the tallest mountain in the solar system (Olympus Mons, 21km high and 600km in diameter). There have been a total of 40 missions to Mars but only 18 of them have been successful (Most recent ? Mars Curiosity 2012). Mars is home for the largest dust storms in the solar system, which can last for months and cover the entire planet. It is known that some pieces of Mars have fallen to Earth. Although for years Mars has been known to have water only in the ice form, scientist spotted signs of liquid water trickling form the cliffs seen in satellite images.', 'https://upload.wikimedia.org/wikipedia/commons/0/02/OSIRIS_Mars_true_color.jpg'),
(2, 'Earth', 'Earth is the third planet from the Sun and is the largest of the terrestrial planets. The Earth is the only planet in our solar system not to be named after a Greek or Roman deity. The Earth was formed approximately 4.54 billion years ago and is the only known planet to support life. The Earth\'s rotation is gradually slowing. This deceleration is happening almost imperceptibly, at approximately 17 milliseconds per hundred years. This has the effect of lengthening our days, but it happens so slowly that it could be as much as 140 million years before the length of a day will have increased to 25 hours. Earth has only one natural satellite (Moon).It is the largest satellite of any planet in our solar system. In real terms, however, it is only the fifth largest natural satellite.', 'https://upload.wikimedia.org/wikipedia/commons/9/97/The_Earth_seen_from_Apollo_17.jpg'),
(3, 'Jupiter', 'The planet Jupiter is the fifth planet out from the Sun, and is two and a half times more massive than all the other planets in the solar system combined and is also the fourth brightest object in the solar system (after Sun, Moon and Venus). It is named after the king of the Roman gods. To the Greeks, it represented Zeus, the god of thunder. The Mesopotamians saw Jupiter as the god Marduk and patron of the city of Babylon. Germanic tribes saw this planet as Donar, or Thor. Jupiter has the shortest day of all the solar system planets (around 9h and 55 min). The giant red spot (also known as the Greta Red Spot) is actually a huge storm which rages for at least\r\n350 years. It is so large that three Earths could feet inside of it. Jupiter?s moon Ganymede is the largest in the solar system. It measures 5.268 km across which makes it larger than Mercury. Jupiter was visited by eight spacecraft.\r\n', 'https://upload.wikimedia.org/wikipedia/commons/2/2b/Jupiter_and_its_shrunken_Great_Red_Spot.jpg'),
(4, 'Saturn', 'Saturn is the sixth planet from the Sun and the most distant that can be seen with the naked eye. Saturn is the second largest planet and is best known for its fabulous ring system that was first observed in 1610 by the astronomer Galileo Galilei. It is the fifth brightest object in the solar system and is also easily studied through binoculars or a small telescope. It is named for the Roman god Saturnus, and was known to the Greeks as Cronus. Saturn has 150 moons and smaller moonlets. All are frozen worlds. The largest moons are Titan and Rhea. Saturn has the most extensive rings in the solar system which are made mostly of chunks of ice and small amounts of carbonaceous dust. The rings stretch out more than 120,700 km from the planet, but are amazingly thin: only about 20 meters thick.', 'http://www.8planets.co.uk/wp-content/themes/8planets/images/saturn_1_lg.jpg'),
(5, 'Venus', 'Venus is the second planet from the Sun and is the second brightest object in the night sky after the Moon. Named after the Roman goddess of love and beauty, Venus is the second largest terrestrial planet and is sometimes referred to as the Earth?s sister planet due the their similar size and mass. A day on the surface of Venus takes 117 Earth days. Venus is the second brightest object in the night sky. Only the Moon is brighter. The average surface temperature is 462 ?C, and because Venus does not tilt on its axis, there is no seasonal variation. More than 1,000 volcanoes or volcanic centers larger than 20 km have been found on the surface of Venus. It is thought Venus did once have oceans but these evaporated as the planets temperature increased.', 'https://upload.wikimedia.org/wikipedia/commons/e/e5/Venus-real_color.jpg'),
(6, 'Mercury', 'Mercury is the closest planet to the Sun and due to its proximity it is not easily seen except during twilight. A year on Mercury is just 88 days long.  Mercury is the smallest planet in the Solar System with just 4,879 Kilometers across its equator, compared with 12,742 Kilometers for the Earth. As the iron core of the planet cooled and contracted, the surface of the planet became wrinkled. Scientist have named these wrinkles, Lobate Scarps. The surface of Mercury which faces the Sun sees temperatures of up to 427?C, whilst on the alternate side this can be as low as -173?C. This is due to the planet having no atmosphere to help regulate the temperature.', 'https://upload.wikimedia.org/wikipedia/commons/d/d9/Mercury_in_color_-_Prockter07-edit1.jpg'),
(7, 'Uranus', 'Uranus is the seventh planet from the Sun. While being visible to the naked eye, it was not recognised as a planet due to its dimness and slow orbit. Uranus became the first planet discovered with the use of a telescope. Uranus is tipped over on its side with an axial tilt of 98 degrees. It is often described as ?rolling around the Sun on its side. The name comes from the ancient Greek deity Ouranos. Uranus turns on its axis once every 17 hours, 14 minutes. The planet rotates in a retrograde direction, opposite to the way Earth and most other planets turn. Uranus makes one trip around the Sun every 84 Earth years. With minimum atmospheric temperature of -224?C Uranus is nearly coldest planet in the solar system. ', 'https://upload.wikimedia.org/wikipedia/commons/3/3d/Uranus2.jpg'),
(8, 'Neptune', 'Neptune is the eighth planet from the Sun making it the most distant in the solar system. This gas giant planet may have formed much closer to the Sun in early solar system history before migrating to its present position. Large storms whirl through its upper atmosphere, and high-speed winds track around the planet at up 600 meters per second. One of the largest storms ever seen was recorded in 1989. It was called the Great Dark Spot. It lasted about five years. Neptune has 14 moons. The most interesting moon is Triton, a frozen world that is spewing nitrogen ice and dust particles out from below its surface. It is probably the coldest world in the solar system.', 'https://upload.wikimedia.org/wikipedia/commons/5/56/Neptune_Full.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `planet`
--
ALTER TABLE `planet`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `planet`
--
ALTER TABLE `planet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
