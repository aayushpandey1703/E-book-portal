-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 11:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(100) NOT NULL,
  `name` char(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `email`, `phone`) VALUES
(479, 'aayush', 'pandeyaayush81@gmail.com', '8452918276');

-- --------------------------------------------------------

--
-- Table structure for table `admin_book`
--

CREATE TABLE `admin_book` (
  `aid` int(100) NOT NULL,
  `bid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_book`
--

INSERT INTO `admin_book` (`aid`, `bid`) VALUES
(479, 'c1000'),
(479, 'c9100'),
(479, 'c9101'),
(479, 'c9102'),
(479, 'c9103'),
(479, 'c9104'),
(479, 'c9105'),
(479, 'c1001'),
(479, 'c1100'),
(479, 'c1200'),
(479, 'c1101');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `class` varchar(100) NOT NULL,
  `author` varchar(255) NOT NULL,
  `rate` int(100) NOT NULL DEFAULT 1,
  `link` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `image`, `bname`, `class`, `author`, `rate`, `link`, `description`, `date`) VALUES
('c1000', '10science.jpg', 'Science-2', 'Class 10', 'NCERT', 1, 'class10 science.pdf', 'test..                  ', '2020-11-03'),
('c1001', '10math.jpg', 'Mathematics-10', 'Class 10', 'NCERT', 1, 'class10_math.pdf', '    test..                                ', '2020-11-03'),
('c1100', '11business.jpg', 'Business Studies', 'Class 11', 'NCERT', 1, 'business-11.pdf', '  It is a book for business.....                                  ', '2020-11-04'),
('c1101', '11chem1.jpg', 'Chemistry part 1', 'Class 11', 'NCERT', 1, 'chem-11.pdf', '  it is a chemistry book.....                                  ', '2020-11-04'),
('c1200', '12maths.jpg', 'Mathematics-12', 'Class 12', 'NCERT', 1, 'maths-12.pdf', '  it is 12th maths book                                  ', '2020-11-04'),
('c9100', '9social.jpg', 'Democratic Politics-1', 'Class 9', 'NCERT', 3, 'class9 social science.pdf', ' This book is based on the latest CBSE syllabus of NCERT. Consisting of 10 chapters this book has is recommended for every beginner. It has a high color printing quality Political science, occasionally called politology, is a social science which deals with systems of governance, and the analysis of political activities, political thoughts, associated constitutions and political behavior.\r\n\r\nPolitical science comprises numerous subfields, including comparative politics, political economy, international relations, political theory, public administration, public policy, and political methodology. Furthermore, political science is related to, and draws upon, the fields of economics, law, sociology, history, philosophy, human geography, journalism, political anthropology and social policy.\r\n\r\nComparative politics is the science of comparison and teaching of different types of constitutions, political actors, legislature and associated fields, all of them from an intrastate perspective. International relations deals with the interaction between nation-states as well as intergovernmental and transnational organizations. Political theory is more concerned with contributions of various classical and contemporary thinkers and philosophers.                               ', '2020-10-04'),
('c9101', '9economics.jpg', 'Economics-1', 'Class 9', 'NCERT', 2, 'class9 geography.pdf', ' This book is based on the latest CBSE syllabus of NCERT. Consisting of 10 chapters this book has is recommended for every beginner. It has a high color printing quality. Economics focuses on the behaviour and interactions of economic agents and how economies work. Microeconomics analyzes basic elements in the economy, including individual agents and markets, their interactions, and the outcomes of interactions. Individual agents may include, for example, households, firms, buyers, and sellers. Macroeconomics analyzes the economy as a system where production, consumption, saving, and investment interact, and factors affecting it: employment of the resources of labour, capital, and land, currency inflation, economic growth, and public policies that have impact on these elements.\r\n\r\nOther broad distinctions within economics include those between positive economics, describing \"what is\", and normative economics, advocating \"what ought to be\"; between economic theory and applied economics; between rational and behavioural economics; and between mainstream economics and heterodox economics  ', '2020-10-04'),
('c9102', '9geography.jpg', 'Contemporary india-1', 'Class 9', 'NCERT', 5, 'class9 geography.pdf', ' This book is based on the latest CBSE syllabus of NCERT. Consisting of 10 chapters this book has is recommended for every beginner. It has a high color printing quality. Geography is a systematic study of the Universe and its features. Traditionally, geography has been associated with cartography and place names. Although many geographers are trained in toponymy and cartology, this is not their main preoccupation. Geographers study the space and the temporal database distribution of phenomena, processes, and features as well as the interaction of humans and their environment.[2] Because space and place affect a variety of topics, such as economics, health, climate, plants and animals, geography is highly interdisciplinary. The interdisciplinary nature of the geographical approach depends on an attentiveness to the relationship between physical and human phenomena and its spatial patterns.Geography is often defined in terms of two branches: human geography and physical geography. Human geography is concerned with the study of people and their communities, cultures, economies, and interactions with the environment by studying their relations with and across space and place. Physical geography is concerned with the study of processes and patterns in the natural environment like the atmosphere, hydrosphere, biosphere, and geosphere.\r\n\r\nThe four historical traditions in geographical research are spatial analyses of natural and the human phenomena, area studies of places and regions, studies of human-land relationships, and the Earth sciences. Geography has been called \"the world discipline\" and \"the bridge between the human and the physical sciences', '2020-10-04'),
('c9103', '9science.jpg', 'Science', 'Class 9', 'NCERT', 4, 'class9 science.pdf', ' This book is based on the latest CBSE syllabus of NCERT. Consisting of 10 chapters this book has is recommended for every beginner. It has a high color printing quality. Modern science is typically divided into three major branches that consist of the natural sciences (e.g., biology, chemistry, and physics), which study nature in the broadest sense; the social sciences (e.g., economics, psychology, and sociology), which study individuals and societies; and the formal sciences (e.g., logic, mathematics, and theoretical computer science), which study abstract concepts. There is disagreement. however, on whether the formal sciences actually constitute a science as they do not rely on empirical evidence. Disciplines that use existing scientific knowledge for practical purposes, such as engineering and medicine, are described as applied sciences.\r\n\r\nScience is based on research, which is commonly conducted in academic and research institutions as well as in government agencies and companies. The practical impact of scientific research has led to the emergence of science policies that seek to influence the scientific enterprise by prioritizing the development of commercial products, armaments, health care, and environmental protection. Science in a broad sense existed before the modern era and in many historical civilizations. Modern science is distinct in its approach and successful in its results, so it now defines what science is in the strictest sense of the term. Science in its original sense was a word for a type of knowledge, rather than a specialized word for the pursuit of such knowledge. In particular, it was the type of knowledge that people can communicate to each other and share. For example, knowledge about the working of natural things was gathered long before recorded history and led to the development of complex ', '2020-10-04'),
('c9104', '9math.jpg', 'Mathematics', 'Class 9', 'NCERT', 3, 'iemh1a1.pdf', ' This book is based on the latest CBSE syllabus of NCERT. Consisting of 10 chapters this book has is recommended for every beginner. It has a high color printing quality. Mathematics is the science that deals with the logic of shape, quantity and arrangement. Math is all around us, in everything we do. It is the building block for everything in our daily lives, including mobile devices, architecture (ancient and modern), art, money, engineering, and even sports.\r\n\r\nSince the beginning of recorded history, mathematic discovery has been at the forefront of every civilized society, and in use in even the most primitive of cultures. The needs of math arose based on the wants of society. The more complex a society, the more complex the mathematical needs. Primitive tribes needed little more than the ability to count, but also relied on math to calculate the position of the sun and the physics of hunting.Geometry went hand in hand with algebra, invented in the ninth century by a Persian mathematician, Mohammed ibn-Musa al-Khowarizmi. He also developed quick methods for multiplying and diving numbers, which are known as algorithms — a corruption of his name.\r\n\r\nAlgebra offered civilizations a way to divide inheritances and allocate resources. The study of algebra meant mathematicians were solving linear equations and systems, as well as quadratics, and delving into positive and negative solutions. Mathematicians in ancient times also began to look at number theory. With origins in the construction of shape, number theory looks at figurate numbers, the characterization of numbers, and theorems.', '2020-10-04'),
('c9105', 'iebe1cc.jpg', 'beehive', 'Class 9', 'NCERT', 1, 'iebe1ps.pdf', '  This is just a test......                              ', '2020-10-08');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` enum('customer','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `pass`, `role`) VALUES
(479, 'aayush', '123', 'admin'),
(513, 'Sumith Pevekar', '123', 'customer'),
(616, 'Aayush Pandey', '123', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mid` int(100) DEFAULT NULL,
  `name` char(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mid`, `name`, `email`, `phone`) VALUES
(616, 'Aayush Pandey', 'pandeyaayush81@gmail.com', '8452918276'),
(513, 'Sumith Pevekar', 'pevekar.sumith73@gmail.com', '+918452918276');

-- --------------------------------------------------------

--
-- Table structure for table `member_book`
--

CREATE TABLE `member_book` (
  `mid` int(100) NOT NULL,
  `bid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_book`
--

INSERT INTO `member_book` (`mid`, `bid`) VALUES
(616, 'c9100'),
(616, 'c9101');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `otp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`otp`, `email`) VALUES
('865940', 'pandeyaayush81@gmail.com'),
('636547', 'pevekar.sumith73@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD KEY `aid` (`aid`);

--
-- Indexes for table `admin_book`
--
ALTER TABLE `admin_book`
  ADD KEY `aid2` (`aid`),
  ADD KEY `bid2` (`bid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD KEY `member_ibfk_1` (`mid`);

--
-- Indexes for table `member_book`
--
ALTER TABLE `member_book`
  ADD KEY `mid` (`mid`),
  ADD KEY `bid3` (`bid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `aid` FOREIGN KEY (`aid`) REFERENCES `login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admin_book`
--
ALTER TABLE `admin_book`
  ADD CONSTRAINT `aid2` FOREIGN KEY (`aid`) REFERENCES `login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bid2` FOREIGN KEY (`bid`) REFERENCES `books` (`bid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `member_book`
--
ALTER TABLE `member_book`
  ADD CONSTRAINT `bid3` FOREIGN KEY (`bid`) REFERENCES `books` (`bid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mid` FOREIGN KEY (`mid`) REFERENCES `login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
