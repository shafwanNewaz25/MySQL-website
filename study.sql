-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 10:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `study`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_ID` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_ID`, `user`, `product`, `quantity`, `dateAdded`) VALUES
(33, 2, 38, 1, '2021-05-17 01:26:12'),
(34, 5, 38, 1, '2021-05-17 01:34:34'),
(35, 3, 38, 1, '2021-05-17 01:42:13'),
(38, 3, 42, 1, '2021-05-18 00:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `productID` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `somoy` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `userID`, `productID`, `orderid`, `somoy`) VALUES
(50, 2, 38, 71, '2021-05-17 01:26:28'),
(51, 2, 38, 72, '2021-05-17 01:29:12'),
(52, 5, 38, 73, '2021-05-17 01:34:41'),
(53, 5, 37, 74, '2021-05-17 01:39:11'),
(55, 3, 38, 76, '2021-05-17 01:43:37'),
(56, 3, 36, 77, '2021-05-17 01:46:52'),
(57, 3, 37, 78, '2021-05-17 04:03:54'),
(58, 9, 41, 79, '2021-05-18 00:12:05'),
(59, 9, 38, 80, '2021-05-18 00:13:46'),
(60, 3, 42, 81, '2021-05-18 00:21:29');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user` int(7) DEFAULT NULL,
  `firstName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `postCode` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderStatus` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user`, `firstName`, `lastName`, `address`, `address2`, `telephone`, `phone`, `state`, `city`, `postCode`, `item`, `total`, `orderStatus`) VALUES
(71, 2, 'Sakib', 'Apon', 'House 80/A', 'Road- 2, Block A, Niketon, Gulshan 1.', '', '', 'Dhaka', 'Dhaka', '1212', NULL, '', 'Processing'),
(72, 2, 'AA', 'AA', '', '', '78', '', 'Please Select', '', '', NULL, '', 'Processing'),
(73, 5, 'Sakib', 'Apon', 'House 80/A', 'Road- 2, Block A, Niketon, Gulshan 1.', 's', 's', 'Dhaka', 'Dhaka', '1212', NULL, '', 'Processing'),
(74, 5, 'Sakib', 'Apon', 'House 80/A', 'Road- 2, Block A, Niketon, Gulshan 1.', '', '', 'Dhaka', 'Dhaka', '1212', NULL, '', 'Processing'),
(76, 3, 'Sakib', 'Apon', 'House 80/A', 'Road- 2, Block A, Niketon, Gulshan 1.', '53', '5', 'Dhaka', 'Dhaka', '1212', NULL, '', 'Processing'),
(77, 3, 'Sakib', 'Apon', 'House 80/A', 'Road- 2, Block A, Niketon, Gulshan 1.', '78', '01951445484', 'Dhaka', 'Dhaka', '1212', NULL, '', 'Processing'),
(78, 3, 'Sakib', 'Apon', 'House 80/A', 'Road- 2, Block A, Niketon, Gulshan 1.', '78', '', 'Dhaka', 'Dhaka', '1212', NULL, '', 'Approved'),
(79, 9, 'Sakib01', 'Apon01', 'House 80/A', 'Road- 2, Block A, Niketon, Gulshan 1.', '12345678', '12345678', 'Dhaka', 'Dhaka', '1212', NULL, '', 'Processing'),
(80, 9, 'Sakib01', 'Apon01', 'House 80/A', 'Road- 2, Block A, Niketon, Gulshan 1.', '01951445484', '01951445484', 'Dhaka', 'Dhaka', '1212', NULL, '', 'Consultant 1'),
(81, 3, 'Sakib', 'Apon', 'House 80/A', 'Road- 2, Block A, Niketon, Gulshan 1.', '', '', 'Dhaka', 'Dhaka', '1212', NULL, '', 'Processing');

-- --------------------------------------------------------

--
-- Table structure for table `uni`
--

CREATE TABLE `uni` (
  `id` int(11) NOT NULL,
  `university` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `uniweb` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interstudent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campsize` int(11) DEFAULT NULL,
  `campussize` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `malefemaleratio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endvalue` int(11) DEFAULT NULL,
  `foreignstudent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `applicationfee` int(11) DEFAULT NULL,
  `minimumGrade` int(11) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `uniemail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hostelmeal` int(11) DEFAULT NULL,
  `avgtution` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni`
--

INSERT INTO `uni` (`id`, `university`, `uniweb`, `interstudent`, `year`, `type`, `campsize`, `campussize`, `malefemaleratio`, `endvalue`, `foreignstudent`, `rank`, `applicationfee`, `minimumGrade`, `address`, `phone`, `uniemail`, `city`, `hostelmeal`, `avgtution`, `description`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`) VALUES
(36, 'University of Calgary', 'www.ucalgary.ca/', '12', '1966', 'ca', 1, '80 Acres', '1: 14', 120, '74 Countries', 216, 150, 70, '2500 University Drive NW, Calgary, Alberta T2N 1N4,CANADA.', 1, 'ucalgary@gmail.com', 'Calgary, Alberta, Canada', 8262, 12000, 'The University of Calgary is a public research university located in Calgary, Alberta, Canada. The University of Calgary started in 1944 as the Calgary branch of the University of Alberta, founded in 1908, prior to being instituted into a separate, autonomous university in 1966.', '1024-university-of-calgary-e1592605314930.jpg', '1588765498phpnM3Omm.jpeg', '1588767309phpx6jgDG.jpeg', '1588769013phpQ3woUn.jpeg', 'university-of-calgary-taylor-institute-for-teaching-and-learning-4.jpg', ''),
(37, 'University Of Victoria', 'www.uvic.ca', '15.8', '1903', 'ca', 0, '402 Acres', '1 : 1.12', 394, '118 Countries', 370, 124, 70, 'Victoria, British Columbia, Canada', 1, 'vic@gmail.com', 'Victoria, BC V8P 5C2, Canada', 10000, 8000, 'The University of Victoria (UVic) is a leading public research university in Canada. The origin of the university dates back to 1903 when it was referred to as Victoria College. Popularly known as UVic, the university is situated in the city of Victoria, the capital of British Columbia.\r\n\r\nThe university has specialized in eight areas of research that include culture and creativity, climate and energy, health and life sciences, data science and cyber-physical systems, ocean science and technology, global studies and social justice, mathematics, and computer science, and indigenous research. Further, the university has partnered with government, industries, and research organizations for research and development initiatives. The University of Victoria is in the mission to tackle world problems through technology and social development.\r\n\r\nSpread across a 402-acre land, the main campus of the University of Victoria is one of the largest in North America. With world-class infrastructure and highly-qualified faculty members, UVic offers a wide range of undergraduate, graduate, and professional degrees as well as diploma programs for aspiring students. \r\n\r\nThe University of Victoria is known for its dynamic learning system. The advanced laboratories, art studios, libraries, and computer labs contribute to the environment of innovation and inventions. UVic has collaborated with leading universities and institutes of the world for integrated research and knowledge sharing programs. The core faculties of the university are humanities, engineering, science, human and social development, education, social sciences, and fine arts. Further, the major schools and divisions of the university include Peter B. Gustavson School of Business, Medical Sciences, UVic Law, and Continuing Studies. \r\n\r\nA significant share of the faculty members is from different corners of the world. Moreover, the visiting faculty members include eminent professors from various foreign universities and industry experts of different nationalities. UVic is truly a global university as students across the world enroll to pursue a great career.Further, the university provides placement assistance to its students.\r\n\r\nNot just academics, the University of Victoria is also a hub for fun and recreational activities. There are sports courts, youth camps, student clubs, art galleries, movie theatres, restaurants, and pubs on the university campus. Further, various games, events, and other cross-disciplinary activities are organized frequently in the university.\r\n\r\nThe University of Victoria holds eminence in the global research arena. The alumni of the university are presently the leaders in their respective fields across the world. Leading companies absorb students of UVic. The long list of notable alumni includes the likes of Andrew J. Weaver - Member of the Legislative Assembly of British Columbia, Rona Ambrose - Former Member of the Canadian House of Commons, Ryan Cochrane - Canadian Swimmer, Stewart Butterfield - Canadian Businessman, Jeff Mallett - Investor, Tamara Vrooman - CEO of Vancity, Alison Sydor - Canadian Cyclist, Lauren Woolstencroft - Canadian Alpine Skier, W. P. Kinsella - Canadian Novelist, and Calvin Chen - Actor among others. ', 'u.jpg', 'u2.jpg', 'u3.jpg', 'u4.png', 'u5.jpeg', 'university-of-calgary-taylor-institute-for-teaching-and-learning-4.jpg'),
(38, 'UBC', 'www.ubc.ca', '24.9', '1908', 'ca', 2, '400 Acres', '1 : 1.25', 1000, '113 Countries', 31, 0, 65, 'Vancouver, BC V6T 1Z4, Canada', 604, 'graduate.apply@ubc.ca', 'Vancouver, British Columbia, Canada.', 12000, 9000, 'Established in 1908, the University of British Columbia is an open research university. Based on the founder of the university, Henry Marshall Tory, a medal of his name was brought into existence in 1941. Recently, the university is recognized as the most international university in North America. It has a motto that says, “It is Yours”. This motto was declared in 1915 and commits to support innovation of ideas, discovery, and learning. The motive is to encourage the students and create new concepts that bring remarkable changes in the world. By the 20th century, the university began to offer a degree in the field of nursing, agriculture, and engineering. Also, it introduced the American model of specialization and a research thesis.\r\n\r\nLocated in Point Grey, the university comprises of two campuses, one in Vancouver and the other in Okanagan. The main campus is in Vancouver and is spread across 400 acres of land. The campus is covered with greenery all over. It houses some popular centers like the Chan Centre for Performing Arts, Centre for Interactive Research in Sustainability, UBC Welcome Centre and UBC Centre for Plant Research. Few of the departments that are found at the campus include Faculty of Arts, Faculty of Dentistry, Faculty of Law and Faculty of Science. Okanagan Campus is known to be home to the center of research and learning. Both campuses organize many cultural activities and events.\r\n\r\nThe university offers undergraduate degree programs, postgraduate degree programs, joint academic programs, exchange programs, and distance education programs. A wide list of subjects incorporates under these programs that give students the opportunity to choose among the various subjects according to their area of interest. The list includes Applied Science, Architecture, Law, Medicine, Dentistry, Philosophy, Anthropology and Ancient Culture, Religion and Ethnicity. Moreover, the students are guided under expert professionals that provide basic knowledge and practical experience. Also, the students are given a chance to understand the curriculum of different universities and learn many other things under the student exchange program. In addition, the university is visited by experienced faculty that takes the students to the work field for exposure.\r\n\r\nUBC has a notable list of alumni that includes Justin Trudeau (Current Prime of Canada), Kim Campbell (19th Prime Minister and the 1st to serve in office), William Gibson (significant figure in Cyberpunk movement), Bjarni Tryggvason (Astronaut), David Suzuki (Broadcaster and Environmentalist), Monica Lam (Founder of Moka5) and Evangeline Lily (Actress). ', 'ubc2.jpg', 'ubc.jpg', 'ubc3.jpeg', 'ubc4.jpg', 'ubc5.jpg', 'ubc6.jpg'),
(39, 'MIT', 'www.mit.edu', '30.4', '1861', 'usa', 1, '168 Acres', '1:1.3', 14000, '130 Countries', 1, 160, 80, '77 Massachusetts Ave, Cambridge, MA 02139, USA', 617, 'gradadmissions@mit.edu', 'Cambridge, Massachusetts, USA', 14000, 55000, 'Incorporated in the year 1861, Massachusetts Institute of Technology is a private research institute located in Cambridge, Massachusetts. In 1865, four years after the approval of its founding charter, the Institute admitted its first student and shortly thereafter in 1871, admitted its first woman student. MIT’s opening marked the foundation of a new kind of independent educational institution by coupling teaching and research with a primary focus on solving real-world problems. There are 30 departments across 5 schools in MIT, pioneering new ways of learning on the campus.\r\n\r\nWith more than 1,067 Faculty members, MIT continues to play a vital role in shaping the future of undergraduate and graduate students as advisors, mentors, coaches, committee members and much more. In addition, the Institute’s board of trustees include 78 eminent leaders in science, engineering, education, industry, and other professions. Additionally, the faculty members continue to thrive the global standard of excellence in their disciplines.\r\n\r\nMIT is set in a campus of 168 acres, situated between Central and Kendall Squares, and across the Charles River from Boston’s Back Bay; comprising of 26 acres of playing fields, more than 20 gardens and green spaces, 18 student residences and around 50 publicly cited works of art.\r\n\r\nThe academic departments and institutes encompass numerous degree-granting programs and interdisciplinary centers, laboratories, and programs. In the year 2019-20, MIT student population of 11,520 including 458 international undergraduate and 2873 international graduate students came from all 50 states, the District of Columbia, four territories, and 129 foreign countries. MIT also offers a number of executive and professional programs for entrepreneurs, executives, managers, and technical professionals through online as well as on-campus mode.  \r\n\r\nMany MIT staff are eminent international scholars from different parts of the world. MIT is placed at the heart of one of the most vibrant hubs of innovation and entrepreneurship – Cambridge. From medical research to clean water technology, sustainable energy, urban resiliency, Alzheimer’s, cancer and infectious disease are some of the innovations where MIT scholars have made an impact. In the academic year 2016–2017, MIT hosted 2,379 international scholars comprising of 75% men and 25% women from 96 countries. It is one of the top institutions that produced 95 Noble laureates, 59 National Medal of Science winners, 29 National Medal of Technology and Innovation winners, 77 MacArthur Fellows and 15 A. M. Turing Award winners.', 'mit4.jpg', 'mit2.jpg', 'mit3.jpg', 'mit.jpg', 'mit5.jpg', 'mit6.jpg'),
(41, 'Harvard University', 'www.harvard.edu/', '8', '1861', 'usa', 1, '5457 Acres', '1 : 0.94', 3700, '80 countries', 3, 100, 80, '1350 Massachusetts Ave, Cambridge, Massachusetts 02138, USA', 617, 'elizabeth_capuano@harvard.edu', 'Cambridge, Massachusetts, USA', 14000, 53000, '\r\nHarvard University, established in 1636, is the oldest and one of the most famous institutions in the United States. A statue of John Harvard, College’s first patron, stands in front of University Hall in Harvard Yard and is perhaps the University’s best-known landmark. This Ivy League university carries its legacy from over 375 years not only in the United States but globally as well. Harvard currently has 12 degree-granting Schools in addition to the Radcliffe Institute for Advanced Study. The University has grown from nine students with a single master in the mid-1600s to an enrollment of more than 20,000-degree candidates including undergraduate, graduate, and professional students.', 'h2.jpg', 'h1.jpg', 'h3.jpg', 'h4.jpg', 'h6.jpg', 'h7.jpg'),
(42, 'University of Oxford', 'www.ox.ac.uk', '43', '1096', 'uk', 1, '50 Acres', '1 : 0.86', 6000, '150 Countries', 5, 130, 82, '44 01865 270000', 0, 'international.strategy@admin.ox.ac.uk', 'Oxford, Oxfordshire, UK', 18000, 63000, '\r\nThe University Of Oxford, established in 1096 and situated in Oxford, England, is the oldest \r\nuniversity in the English speaking world. In less than a century, Oxford had achieved an important \r\nset of learning and won the praises of popes, kings, and sages by virtue of its antiquity, curriculum, a\r\n philosophical system, and privileges. Throughout the twentieth and early twenty-first centuries, Oxford has \r\nadded a serious new analysis capability within the natural and applied sciences, together with medication.', 'ox0.jpg', 'ox1.jpg', 'ox2.jpg', 'ox3.jpeg', 'ox4.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'shafwannewaz', 'shafwannewaz25@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'shadyrx2', 'shadyrx2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'admin', 'shafwannewaz255@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'tester', 'tester1@gmail.com', 'f5d1278e8109edd94e1e4197e04873b9'),
(5, 'abc', 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(6, 'ABCD', 'abcd@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(7, 'shadyrx201', 'shadyrx2@gmail.com', 'c40607a5148e0f4e9251dd0faf47751a'),
(8, 'shakib', 'shakib@gmail.com', '28e9ae3ae3f544edf077eae414725fa2'),
(9, 'shafwan01', 'shafwan01@gmail.com', 'aec4d501e637563a09d7fb97378d56ff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni`
--
ALTER TABLE `uni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `uni`
--
ALTER TABLE `uni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
