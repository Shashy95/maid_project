-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2018 at 07:25 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `maids`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL auto_increment,
  `admin_name` varchar(20) NOT NULL,
  `admin_pass` varchar(20) NOT NULL,
  `admin_email` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pass`, `admin_email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(200) NOT NULL auto_increment,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `subject`, `message`) VALUES
(1, 'Sharon Novatus', 'cielonovatus95@gmail.com', 'Concerning website', 'I love your website .it is really helpful');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL auto_increment,
  `img` varchar(200) NOT NULL,
  `identity` varchar(200) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `status` varchar(40) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `region` varchar(40) NOT NULL,
  `experience` int(20) NOT NULL,
  `children` int(20) NOT NULL,
  `description` varchar(2000) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `img`, `identity`, `fname`, `age`, `status`, `specialization`, `region`, `experience`, `children`, `description`) VALUES
(22, '1.jpg', 'OM 0001', 'Lilian Moses', '18', 'Single', 'Washing Clothes', 'Arusha', 2, 0, 'Lilian Moses is a 18 year old girl living with her parents in Arusha.She was born in Arusha.She is the third child out of five children.\r\n\r\n\r\nLilian is a christian girl she studied to the level of form 6 ever since then she has been working as maid she has worked twice doing the same work at first she worked in Dar where she was staying at her aunt then she worked again in Arusha.\r\n\r\n\r\nShe loves washing clothes and our interviews and test shows that she is good and willing to work anywhere.She is hardworking and well behaved and has skills in other works too but she mostly loves to wash.\r\n\r\nShe is capable of washing every kind of clothes and at any given time she finishes the task.\r\n\r\n\r\nHope you chose her'),
(23, '2.jpg', 'OM 0002', 'Safarina Mussa', '23', 'Married', 'Care for Elderly/Disabled', 'Morogoro', 3, 0, 'Sarafina Mussa is a 23 year old girl living in Morogoro with her relatives.She was born in Tanga.She is the first born child out of three children.\r\n\r\n\r\nSafarina is a christian girl she studied to the level of form 4 ever since then she has been working as maid she has worked three times before she started taking care of old people she used to take care of his  grandfather while her parents were working she got the experience and the tolerance to deal with elderly people.\r\n\r\n\r\nShe has done this three times and she always gets along with them doing.She statrted working at certain family in Arusha then she left to Morogoro and continued doing the same thing \r\n\r\n\r\nOur interviews and test shows that she is good at her  work anywhere.She is hardworking and well behaved and has skills in other works too but she mostly loves to wash.\r\n\r\nShe is capable of taking care of elderly person due to her tolerance and love\r\n\r\n\r\nHope you chose her'),
(24, '3.jpg', 'OM 0003', 'Asha Omary', '27', 'Single', 'Cooking', 'Kagera', 3, 1, 'Asha Omary  is 27 years old.She is the last born in her family.\r\nAsha is a muslim and has one chid and studied to the level of form four.\r\n\r\nHer grandmother and mother were her inspiration for her to love cooking so loves trying new cooking,\r\n\r\nShe worked 3 times with the same job through the other times she got much experience\r\n\r\nApart from that she can do other works like washing clothes and willing to learn others.\r\nOur test and interviews showed us that she is very much capable \r\nhope you choose her.\r\n'),
(25, '4.jpg', 'OM 0004', 'Salma Swalehe', '35', 'Married', 'Cooking', 'Kigoma', 5, 3, 'Salma Swalehe  is 35 years old.She is the first born in her family.\r\nSalma is a muslim and has 3 children and married for 8 years living in KIgoma and studied to the level of form four.\r\n\r\nHer grandmother taught her all about cooking  so loves trying new cooking,\r\n\r\nShe worked 5 times with the same job through the other times she got much experience\r\n\r\nApart from that she can do other works like washing clothes,cleaning the house and willing to learn others.\r\nOur test and interviews showed us that she is very much capable \r\nhope you choose her.\r\n'),
(26, '5.jpg', 'OM 0005', 'Mary Zacharia', '35', 'Married', 'Cleaning the house', 'Mbeya', 3, 3, 'Mary Zachariah is 35 years old living in Mbeya with her 3 children and her husband\r\n\r\nMary is a christian and she has been married for 10 years now.\r\n\r\nMary decided to help different families in cleaning the house for almost 5 years she understands the importance of cleanliness so she tries to find houses that require such services.\r\n\r\n\r\nOur tests and interviews showed us she is capable and very good at it.\r\nShe deseve a chance to work\r\n\r\nHope you chose her'),
(27, '6.jpg', 'OM 0006', 'Anna Mutafurwa', '20', 'Single', 'Cooking', 'Mwanza', 2, 0, 'Anna Mutafurwa  is 20 years old.She is the last born in her family.\r\nAnna  is a christian and  lives in Mwanza .\r\n\r\n\r\nShe has worked 2 times with the same job through the other times she got much experience.She started at the age of 16 she worked in Dar es Salaam.\r\n\r\nApart from that she can do other works like washing clothes and willing to learn others.\r\nOur test and interviews showed us that she is very much capable \r\nhope you choose her.\r\nShe is good at everything'),
(28, '7.jpg', 'OM 0007', 'Lulu Baraza', '19', 'Single', ' Washing clothes ', 'Manyara', 1, 0, 'Lulu Baraza is a 19 year old girl living with her parents in Manyara.\r\n\r\n\r\nLulu is a christian girl she studied to the level of form 6 ever since then she has been doing work of washing clothes\r\n\r\n\r\nShe loves washing clothes and our interviews and test shows that she is good and willing to work anywhere.She is hardworking and well behaved and has skills in other works too but she mostly loves to wash.\r\n\r\nShe is capable of washing every kind of clothes and at any given time she finishes the task.\r\n\r\n\r\nHope you chose her'),
(29, 'c.png', 'OM 0008', 'Jessica Mwangulube', '27', 'Single', 'Cleaning the house', 'Arusha', 2, 1, 'she loves cleaning the house and loves being neat.'),
(30, '9.jpg', 'OM 0009', 'Mwajuma Ally', '24', 'Married', 'Care for Children', 'Tanga', 4, 2, 'Mwajuma Ally is 24 year old living  in Tanga.She is married and has two children.\r\n\r\nMwajuma is a Muslim. she has worked 4 times in which she started taking care of children of different age, she got the experience being mother and working for long hence it helps her doing her job easily .\r\n\r\n\r\nOur interviews and test shows that she is good at her  work anywhere.She is hardworking and well behaved and she loves children and veryy much devoted to them.\r\n\r\nShe is capable of taking care of children due to her patience and love\r\n'),
(32, '11.jpg', 'OM 0010', 'Editha Novatus', '25', 'Married', 'Cooking', 'Dar es Salaam', 1, 1, 'Editha Novatus  is 25 years old.She is the last born in her family.\r\nEditha is a and has one chid and she is married.\r\n\r\nShe loved cooking since she was young girl was always curious about cooking different foods\r\n\r\nShe worked 1 time with was last year \r\n\r\nApart from that she can do other works like washing clothes and willing to learn others.\r\nOur test and interviews showed us that she is very much capable \r\nhope you choose her.\r\n'),
(33, '12.jpg', 'OM 0011', 'Irene Mpinga', '19', 'Single', 'Cooking', 'Iringa', 0, 0, 'Irene Mpinga is 19 years old living in Iringa with her parents.\r\nIrene is a christian and  and studied to the level of form four.\r\n\r\n\r\n\r\nShe has no experience in working but she is good and has the heart to learn she got much experience\r\n\r\nApart from that she can do other works like washing clothes,cleaning house and any other duties and willing to learn others.\r\nOur test and interviews showed us that she is very much capable \r\nhope you choose her.\r\n'),
(34, '13.jpg', 'OM 0012', 'Glory Massawe', '38', 'Married', 'Cooking', 'Kilimanjaro', 10, 4, 'Glory Massawe  is 38 years old.Glory is a christian  and has four children and got married for 13 years.\r\n\r\n\r\nShe worked 10 times with the same job through the other times she got much experience.She started doing this since the age of 18 working at different places\r\n\r\nApart from that she can do other works like washing clothes and willing to learn others.\r\nOur test and interviews showed us that she is very much capable.\r\nShe has much experience.\r\nHope you choose her'),
(35, '10.jpg', 'OM 0013', 'Adimu Mganga', '42', 'Married', 'Care for Children', 'Mtwara', 7, 3, 'Adimu Mganga is 42 year old living  in Mtwara.She is married and has three children.\r\n\r\n\r\nAdimu is a Muslim. she has worked 7 times in which she started taking care of children of different age, she got the experience being mother and working for long hence it helps her doing her job easily .\r\n\r\n\r\nOur interviews and test shows that she is good at her  work anywhere.She is hardworking and well behaved and has skills in other works too.\r\n\r\nShe is capable of taking care of children due to her patience and love\r\n'),
(36, '14.jpg', 'OM 0014', 'Winnie Kaijunga', '21', 'Single', 'Washing Clothes', 'Dodoma', 3, 0, 'Winnie Kaijunga is a 19 year old  living  in Dodoma.She is the third child out of five children.\r\n\r\n\r\nWinnie is a christian girl she studied to the level of form 4 ever since then she has been working as maid she has worked thrice doing the same work \r\n\r\n\r\nShe loves washing clothes and our interviews and test shows that she is good and willing to work anywhere.She is hardworking and well behaved and has skills in other works too but she mostly loves to wash.\r\n\r\nShe is capable of washing every kind of clothes and at any given time she finishes the task.\r\n\r\n\r\nHope you chose herShe loves washing not as much as other duties'),
(37, '15.jpg', 'OM 0015', 'Saida Mhile', '40', 'Married', 'Washing clothes ', 'Kagera', 5, 2, 'Saida Mhile is a 40 year old  living with her family that is her 2 children and married in 12 years living in Kagera.\r\n\r\n\r\nSaida is a muslim girl she studied to the level of form 6 ever since then she has been working as maid she has worked for five times.\r\n\r\n\r\nShe loves washing clothes and our interviews and test shows that she is good and willing to work anywhere.She is hardworking and well behaved and has skills in other works too.\r\n\r\nShe is capable of washing every kind of clothes and at any given time she finishes the task.\r\n\r\n\r\nHope you chose her'),
(38, '19.jpg', 'OM 0016', 'Nuru Swalehe', '27', 'Single', 'Care for Elderly/Disabled', 'Tabora', 2, 1, 'Nuru Swalehe is a 27 year old girl living in Tabora with her child.She is the first born child out of three children.\r\n\r\n\r\nNuru is a Muslim girl she studied to the level of form 4 ever since then she has been working as maid she has worked twice times before she started taking care of old people, she got the experience working in the orphanage and so she took care of them .\r\n\r\n\r\nShe has done this two times and she always gets along with them doing.\r\n\r\n\r\nOur interviews and test shows that she is good at her  work anywhere.She is hardworking and well behaved and has skills in other works too.\r\n\r\nShe is capable of taking care of elderly person due to her patience and love\r\n'),
(39, '8.jpg', 'OM 0017', 'Asha Ramadhani', '21', 'Single', 'Care for Children', 'Dar es Salaam', 3, 0, 'Asha Ramadhani is a 21 year old girl living in Tanga.She is the first born child out of three children.\r\n\r\n\r\nAsha is a Muslim girl she studied to the level of form 4 ever since then she has been working as maid she has worked three times in which she started taking care of children of fifferent age, she got the experience working in the orphanage and so she took care of them .\r\n\r\n\r\nShe has done this her siblings she took care of them so she understands children\r\n\r\n\r\nOur interviews and test shows that she is good at her  work anywhere.She is hardworking and well behaved and has skills in other works too.\r\n\r\nShe is capable of taking care of children due to her patience and love\r\n'),
(40, '24.jpg', 'OM 0018', 'Neema Waziri', '33', 'Married', 'Cleaning the house', 'Kigoma', 6, 2, 'Neema Waziri is 33 years old living in Kigoma with her 2 children and her husband\r\n\r\nNeema is a christian and she has been married for 6 years now.\r\n\r\nNeema is fond of cleaniness so she decided to help different families in cleaning the house she worked in different place in 6 times she is also willing and capable to do other kinds of work.\r\n\r\n\r\nOur tests and interviews showed us she is capable and very good at it.\r\nShe deseve a chance to work\r\n\r\nHope you chose herShe loves doing all kind of job'),
(41, '27.jpg', 'OM 0019', 'Farida Hanif', '29', 'Married', 'Care for Elderly/Disabled', 'Zanzibar', 4, 0, 'Farida Hanif  is a 29 year old woman living in Zanzibar living  with her husband.She was born in Tanga.She is the first born child out of four children.\r\n\r\n\r\nFarida is a Muslim woman she studied to the level of form 6 and got married at 21.\r\n\r\nshe has worked four times before she started taking care of disabled people of different kinds.She had a young brother who couldnot walk she attended some seminar to learn more about his young brother condition.\r\n\r\nUnfortunately he died but it pushed her to help people in need \r\n\r\nShe has done at different places in Zanzibar for 4 times and what makes her good is her understanding and devotion.\r\n\r\n\r\nOur interviews and test shows that she deserves to get such a chance \r\n\r\n\r\n\r\n\r\nHope you chose her'),
(42, '23.jpg', 'OM 0020', 'Joyce Michael', '23', 'Single', 'Washing Clothes', 'Kigoma', 2, 0, 'Joyce Michael is a 23 year old girl living in Kigoma..\r\n\r\n\r\nJoyce is a christian girl she studied to the level of form 6 ever since then she has been working as maid she has worked twice doing the same work.\r\n\r\n\r\nShe loves washing clothes and our interviews and test shows that she is good and willing to work anywhere.She is hardworking and well behaved .\r\n\r\nShe is capable of washing every kind of clothes and at any given time she finishes the task.\r\n\r\n\r\nHope you chose her'),
(43, '22.jpg', 'OM 0021', 'Neema Michael', '20', 'Single', 'Cooking', 'Mara', 2, 0, 'Neema Michael is 20 years old.She is the last born in her family.\r\nAnna  is a christian and  lives in Mara .She attended till grade 7 then she started working at home.\r\n\r\n\r\nAt the time she was 16 she was first employed,She has worked 2 times with the same job through the other times she got much experience.\r\n\r\nApart from that she can do other works like washing clothes and willing to learn others.\r\nOur test and interviews showed us that she is very much capable \r\nhope you choose her.\r\nShe is good at everything'),
(44, '20.jpg', 'OM 0022', 'Saida Mutalemwa', '18', 'Single', 'Cooking', 'Kagera', 0, 0, 'Saida Mutalemwa is 18 years old.She is the last born in her family.\r\nSaida is a christian and  lives in Kagera .She attended till form 6 then she started working at home.\r\n\r\n\r\nShe did not have money to continue so she is expecting to work as a maid.she is good and loves cooking taught by her mother.\r\n\r\nApart from that she can do other works like washing clothes and willing to learn others.Saida is short sightedness person  she uses glasses in order to see\r\n\r\n\r\nOur test and interviews showed us that she is very much capable \r\nhope you choose her.\r\nShe is good at everything'),
(45, '21.jpg', 'OM 0023', 'Esther Rimbani', '26', 'Single', 'Washing Clothes', 'Manyara', 2, 1, 'Esther Rimbani is a 26 year old  living with her parents and her child.\r\n\r\n\r\nEsther is a christian girl she studied to the level of form 6 ever since then she has been working as maid she has worked twice doing the same work \r\n\r\n\r\nShe loves washing clothes and our interviews and test shows that she is good and willing to work anywhere.She is hardworking and well behaved .\r\n\r\nShe is capable of washing every kind of clothes and at any given time she finishes the task.\r\n\r\n\r\nHope you chose her'),
(46, '25.jpg', 'OM 0024', 'Veronica Chitai', '22', 'Single', 'Cleaning the house', 'Dar es Salaam', 2, 0, 'Veronica Chitai is 22 years old living in Dar es Salaam .Veronica  is a christian.\r\n\r\nVeronica decided to help different families in cleaning the house she worked this job like 2 times.she understands the importance of cleanliness so she tries to find houses that require such services.\r\n\r\n\r\nOur tests and interviews showed us she is capable and very good at it.\r\nShe deserve a chance to work\r\n\r\nHope you chose her'),
(47, '16.jpg', 'OM 0025', 'Aaron Charles', '22', 'Single', 'Washing Clothes', 'Dar es Salaam', 2, 0, 'Aaron Charles is  22 year old  living  in Dar es Salaam.\r\n\r\n\r\nAaron is a christian and  studied to the level of form 6 ever since then he has been doing work of washing clothes to gain money for his studies\r\n\r\n\r\nHis great at washing clothes and it is not something hard for him to do Aaron loves washing clothes and our interviews and test shows that he is good and willing to work anywhere.he is hardworking and well behaved.\r\n\r\nhe is capable of washing every kind of clothes and at any given time he finishes the task.\r\n\r\n\r\nHope you chose him'),
(48, '26.jpeg', 'OM 0026', 'Silvia Tandau', '25', 'Married', 'Cooking', 'Zanzibar', 4, 0, 'Silvia Tandau is 25 years old.Silvia is a christian and  lives Zanzibar .She is married for 2 years now\r\n\r\n\r\nAt the time she was 18 she was first employed,She has worked 4 times with the same job  with some other duties to do too.She can cook most of the foods that we Africans love and she is always interested in learning on how to prepare new type of foods.\r\n\r\nApart from that she can do other works like washing clothes and willing to learn others.\r\nOur test and interviews showed us that she is very much capable \r\nhope you choose her.\r\nShe is good at everything'),
(49, '17.jpg', 'OM 0027', 'David Haule', '25', 'Single', 'Cleaning the house', 'Geita', 4, 1, 'David Haule is 25 years old living in Geita and married for 1 year  and has one child.David is a christian.\r\n\r\nDavid decided to help different families in cleaning the house he worked this job like 4 times.he understands the importance of cleanliness and hates untidy and unneat place so he tries to find houses that require such services.\r\n\r\n\r\nOur tests and interviews showed us she is capable and very good at it.\r\nhe deserve a chance to work\r\n\r\nHope you chose him'),
(50, '28.jpg', 'OM 0028', 'Shukuru Ally', '22', 'Single', 'Cleaning the house', 'Shinyanga', 3, 0, 'Shukuru Ally is 22 years old living in Shinyanga.Shukuru  is a muslim.He has been doing this job ever since he finished form 6 to gain money for his own uses.\r\n\r\nShukuru decided to help different families in cleaning the house he worked this job like 3 times.he understands the importance of cleanliness and hates untidy and unneat place so he tries to find houses that require such services.\r\n\r\n\r\nOur tests and interviews showed us she is capable and very good at it.\r\nhe deserve a chance to work\r\n\r\nHope you chose him'),
(51, '29.jpg', 'OM 0029', 'Anneth Tibaijuka', '30', 'Single', 'Cooking', 'Dodoma', 5, 2, 'Anneth Tibaijuka is 30 years old. Anneth  is a christian and  lives in Dodoma with her 2 children .\r\n\r\n\r\nShe has got much experience she has been employed 5 times Three times she worked at Dodoma and one time in Dar and the other one in Tanga  .\r\n\r\nApart from that she can do other works like washing clothes,cleaning the house and care of children she can handle all of that.\r\n\r\nOur test and interviews showed us that she is very much capable \r\nhope you choose her.\r\nShe is good at everything'),
(52, '30.jpg', 'OM 0030', 'Cecilia Josephat', '26', 'Single', 'Cleaning the house', 'Mtwara', 5, 0, 'Cecilia Josephat is 26 years old living in Mtwara .Cecilia  is a christian.\r\n\r\nCecilia decided to help different families in cleaning the house she worked this job like 2 times.she understands the importance of cleanliness so she tries to find houses that require such services.Cecilia loves cleaning so much she lived in a life of cleaniness her mother never liked dirt so she grew up being very clean\r\n\r\n\r\nOur tests and interviews showed us she is capable and very good at it.\r\nShe deserve a chance to work\r\n\r\nHope you chose her'),
(53, '35.JPG', 'OM 0031', 'Grace Mwilili', '37', 'Married', 'Care for Children', 'Kigoma', 3, 3, 'Grace Mwilili is 37  year old living  in Kigoma .She is married  for 8  years now and has three children.\r\nGrace  is a Christian. she has worked 3 times in which she started taking care of children of different age, she got the experience being mother and working for long hence it helps her doing her job easily .\r\n\r\n\r\nOur interviews and test shows that she is good at her  work anywhere.She is hardworking and well behaved and she loves children and very much devoted to them.\r\n\r\nShe is capable of taking care of children due to her patience and love\r\n'),
(54, '33.jpg', 'OM 0032', 'Zainab Omary', '33', 'Married', 'Care for Elderly/Disabled', 'Pwani', 6, 2, 'Zainab Omary is a 33 years old girl .She is the first born child out of 4 children.She is maried woman\r\n\r\n\r\nSafarina is a muslim girl she studied to the level of form 4 ever since then she has been working as maid she has worked six times just  taking care of old people she used to take care of her  grandparents  while her parents were working \r\n\r\n\r\nThus she loves doing it.she got the experience which is very good.\r\n\r\n\r\n\r\n\r\n\r\nOur interviews and test shows that she is excellent at her  work .She is hardworking and well behaved and has skills in other works too.\r\n\r\nShe is capable of taking care of elderly person due to her tolerance and love\r\n\r\n\r\nHope you chose her\r\n\r\n'),
(55, '49.jpg', 'OM 0033', 'Musa Amiri', '30', 'Married', 'Cleaning the house', 'Morogoro', 2, 0, 'Musa Amiri is 30 years old living in Morogoro and married for 1 year .Musa  is a muslim.\r\n\r\nMusa decided to help different families in cleaning the house he worked this job like 2 times.he understands the importance of cleanliness and hates untidy and unneat place so he tries to find houses that require such services.\r\n\r\n\r\nOur tests and interviews showed us she is capable and very good at it.\r\nhe deserve a chance to work\r\n\r\nHope you chose him'),
(56, '38.jfif', 'OM 0034', 'Imani Ipyana', '18', 'Single', 'Washing Clothes', 'Tabora', 1, 0, 'Imani  Ipyana is a 18 year old girl living with her parents in Tabora.\r\n\r\n\r\nImani is a christian girl she studied to the level of form 6 ever since then she has been doing work of washing clothes,she has only worked only once\r\n\r\n\r\nShe loves washing clothes and our interviews and test shows that she is good and willing to work anywhere.She is hardworking and well behaved and has skills in other works too but she mostly loves to wash.\r\n\r\nShe is capable of washing every kind of clothes and at any given time she finishes the task.\r\n\r\n\r\nHope you chose her'),
(57, '43.jpg', 'OM 0035', 'Flora Mbwambo', '31', 'Married', 'Care for Children', 'Singida', 1, 1, 'Flora Mbwambo is a 31 year  living in Singida .She is the first born child out of three children.\r\n\r\n\r\nFlora is a christian she studied to the level of form 4 ever since then she has been working as maid she has worked one time in which she started taking care of children of different age .Aisha loves children and she is devoted in taking care of them\r\n\r\nAs a mother it gives her the opportunity to take care of children as her own.\r\n\r\nOur interviews and test shows that she is good at her  work anywhere.She is hardworking and well behaved and has skills in other works too.\r\n\r\nShe is capable of taking care of children due to her patience and love\r\n'),
(58, '18.jpg', 'OM 0036', 'Aadila Noel', '24', 'Single', 'Cooking', 'Pwani', 2, 0, 'Aadila Noel is 24 years old.She is the first born in her family.\r\nAadila  is a christian and  lives in Pwani .She attended till form 4.\r\n\r\n\r\nAt the time she was 18 after she finished form  6 she was first employed in Pwani she worked for short time.She has worked 2 times  the second time she worked in Arusha. She got much experience.\r\n\r\nApart from that she can do other works like washing clothes and willing to learn others.\r\nOur test and interviews showed us that she is very much capable and friendly .\r\nHope you choose her.\r\nShe is good at everything'),
(59, '50.jpg', 'OM 0037', 'Edward Ngonyani', '27', 'Single', 'Washing Clothes', 'Arusha', 3, 2, 'Edward Nyongani  is  27 year old  living  in Arusha with his family that  includes two children and wife.\r\n\r\n\r\nEdward is a christian and  studied to the level of form 6 ever since then he has been doing work of washing clothes to gain money for his family\r\n\r\n\r\nHis great at washing clothes and it is not something hard for him to do Edward loves washing clothes and our interviews and test shows that he is good and willing to work anywhere.he is hardworking and well behaved.\r\n\r\nhe is capable of washing every kind of clothes and at any given time he finishes the task.\r\n\r\n\r\nHope you chose him'),
(60, '48.jpg', 'OM 0038', 'Mary Mchome', '20', 'Single', 'Cooking', 'Tanga', 2, 0, 'Mary Mchome is 20 years old.She is the third born  out of four in her family.\r\nMary is a christian  and  studied to the level of form four.\r\n\r\nShe lost her parents while still young so she has been living with her aunt.Her aunt taught her all about cooking.\r\n\r\nShe worked 2 times the first she worked was in Arusha and second time in Arusha,at the moment she is in Tanga\r\n\r\nApart from that she can do other works like washing clothes,cleaning the house and willing to learn others.\r\nOur test and interviews showed us that she is very much capable \r\nhope you choose her.\r\n'),
(61, '44.jpg', 'OM 0039', 'Happiness Luvanda', '24', 'Single', 'Care for Children', 'Dodoma', 1, 0, 'Happiness Luvanda is 24 year old living in Dodoma.She is the last born in her family.\r\nHappiness  is a christian and has worked once since she started taking care of children of different age, she got the experience by attending seminars on how to handle kids hence it helps her doing her job easily .\r\n\r\n\r\nOur interviews and test shows that she is good at her  work anywhere.She is hardworking and well behaved and she loves children and very much devoted to them.\r\n\r\nShe is capable of taking care of children due to her patience and love\r\n'),
(62, '47.jpg', 'OM 0040', 'Nancy Kokuberwa', '29', 'Married', 'Care for Children', 'Kagera', 4, 1, 'Nancy Kokuberwa  is 29 year old  living in Kagera .She is the first born child out of five children and she has one child and married for 3 years.\r\n\r\n\r\nNancy is a christian  ever since  young she took care of young kids then she has been working as maid she has worked four times in which she started taking care of children of different age .Nancy loves children and she is devoted in taking care of them\r\n\r\nAs a mother it gives her the opportunity to take care of children as her own.\r\n\r\nOur interviews and test shows that she is good at her  work anywhere.She is hardworking and well behaved and has skills in other works too.\r\n\r\nShe is capable of taking care of children due to her patience and love\r\n'),
(63, '51.jpg', 'OM 0041', 'Pius Msolwa', '26', 'Single', 'Cooking', 'Mwanza', 5, 0, 'Pius Msolwa is 26 years old.He is the last born in her family.Samuel  is a christian and has been  living in Dodoma and level of education reached is university degree.\r\n\r\nHe always loved cooking that is what pushed him to do such work.He would always ask his mom to teach him how to cook variety of foods.He can cook many type of foods that most families eat.\r\n\r\nHe worked 5 times in different families three times he  worked in Mara and the other two in Mwanza where he had good experience,He is willing to learn more that what makes good.\r\n\r\nOur test and interviews showed us that he is very much capable \r\nhope you choose him\r\n'),
(64, '46.jpg', 'OM 0042', 'Sarafina Kitira', '43', 'Married', 'Care for Elderly/Disabled', 'Iringa', 1, 3, 'Sarafina Mariki is a 43 year old  living in Iringa .She is a married woman with 3 children,\r\n\r\n\r\nSafarina is a christian . she has been working as maid she has worked since at the age of 28. she has worked one .She took care  of disabled child and she worked well\r\n\r\nShe also has disabled child hence she can handle well the job.d for  a long .\r\n\r\n\r\n\r\n\r\nOur interviews and test shows that she is good at her  work anywhere.She is hardworking and experience has helped her well behaved .\r\n\r\nShe is capable of taking care of elderly person due to her tolerance and love\r\n\r\n\r\nHope you chose her '),
(65, '34.jpg', 'OM 0043', 'Idda Abdul', '30', 'Single', 'Care for Elderly/Disabled', 'Mwanza', 5, 0, 'Idda Abdul is a 30 years old girl living in Mwanza ..\r\n\r\n\r\nIdda is a christian girl since then she has been working as maid she has worked 5 times before she started taking care of old people she used to take care of his  grandfather while her parents were working she got the experience and the tolerance to deal with elderly people.\r\n\r\n\r\nShe has done this three times and she always gets along with them doing.She statrted working at certain family in Arusha then she left to Morogoro and continued doing the same thing \r\n\r\n\r\nOur interviews and test shows that she is good at her  work anywhere.She is hardworking and well behaved and has skills in other works too\r\n\r\nShe is capable of taking care of elderly person due to her tolerance and love\r\n\r\n\r\nHope you chose her'),
(66, '41.jpg', 'OM 0044', 'Khadija Waziri', '18', 'Single', 'Washing Clothes', 'Arusha', 0, 0, 'great'),
(67, '45.jpg', 'OM 0045', 'Rosemary Tito', '31', 'Single', 'Cooking', 'Shinyanga', 3, 0, 'Rosemary Tito is 31 years old.She is the second born in her family.Rosemary  is a christian living in Shinyanga.\r\n\r\nShe always loved cooking that is what pushed her to do such work.She would always ask his mom to teach him how to cook variety of foods.He can cook many type of foods that most families eat.\r\n\r\nSe worked 3 times in different families where she had good experience,He is willing to learn more that what makes good.\r\n\r\nOur test and interviews showed us that she is very much capable \r\nhope you choose her.\r\n'),
(68, '52.jpg', 'OM 0046', 'Noela Mosha', '21', 'Single', 'Cleaning the house', 'Mara', 1, 0, 'Noela Mosha is 21 years old living in Mara .Noela  is a christian.\r\n\r\nNoela decided to help different families in cleaning the house she worked this job like 1 time.she understands the importance of cleanliness so she tries to find houses that require such services and she can also do other services too.\r\n\r\n\r\nOur tests and interviews showed us she is capable and very good at it.\r\nShe deserve a chance to work\r\n\r\nHope you chose her'),
(69, '42.png', 'OM 0047', 'Wema Thadei', '23', 'Single', 'Cooking', 'Mara', 1, 0, 'Wema Thadei is 23 years old.She is the third born out of four in her family.Wema is a christian living in Mara.\r\n\r\nShe always loved cooking that is what pushed him to do such work.He would always ask his mom to teach him how to cook variety of foods.He can cook many type of foods that most families eat.\r\n\r\nHe worked 1 times and she enjoyed working and she had good experience,She is willing to learn more that what makes good.\r\n\r\nOur test and interviews showed us that she is very much capable \r\nhope you choose her.\r\n'),
(70, '53.jpg', 'OM 0048', 'Doreen Pantaleo', '24', 'Single', 'Cleaning the house', 'Dar es Salaam', 1, 0, 'Doreen Pantaleo is 24 years old living in Dar es Salaam her being the last born in her family .Doreen  is a christian.\r\n\r\nDoreen decided to help different families in cleaning the house she worked this job like one time.she understands the importance of cleanliness so she tries to find houses that require such services.\r\n\r\n\r\nOur tests and interviews showed us she is capable and very good at it.\r\nShe deserve a chance to work\r\n\r\nHope you chose her'),
(71, '37.jpg', 'OM 0049', 'Elizabeth John', '43', 'Married', 'Care for Children', 'Simiyu', 4, 4, 'Elizabeth John is 41 year old  living in Simiyu.She is the second born out of five children .She has 4 children and has been married for 18 years\r\n\r\n\r\nElizabeth is a christian and she studied to the level of form 4 ever since then she has been working as maid she has worked four times in which she started taking care of children of different age.\r\n\r\n\r\nShe is a mother so  she understands children and how patient it should be\r\n\r\n\r\nOur interviews and test shows that she is good at her  work anywhere.She is hardworking and well behaved and has skills in other works too.\r\n\r\nShe is capable of taking care of children due to her patience and love\r\n'),
(72, '54.jpg', 'OM 0050', 'Rahma Abdallah', '24', 'Married', 'Cooking', 'Pemba', 3, 1, 'Rahma Abdallah is 24 years old.She is the first born in her family.\r\nRahma is a muslim and has 1 child and married for 1 year living in Pemba.\r\n\r\nHer mother taught her all about cooking\r\n\r\nShe worked 3 times all the times she did the work in Pemba,she had a hard time working for the first time but her employer was kind hearted and patient enough with her.For the other times she already had much experience.\r\n\r\nOur test and interviews showed us that she is very much capable \r\nhope you choose her.\r\n'),
(73, '31.jpg', 'OM 0051', 'Catherine Msuya', '26', 'Married', 'Washing Clothes', 'Dar es Salaam', 2, 2, 'Catherine Msuya is  26 year old  living  in Dar es Salaam with 2 children and married for 4 years.\r\n\r\n\r\nCatherine is a christian and  studied to the level of form 6 ever since then she has been doing work of washing clothes to gain money \r\n\r\n\r\nShe is  great at washing clothes and it is not something hard for her to do Catherine loves washing clothes and still capable of doing other works also and our interviews and test shows that she is good and willing to work anywhere.she is hardworking and well behaved.\r\n\r\nShe is capable of washing every kind of clothes and at any given time she finishes the task.\r\n\r\n\r\nHope you chose her'),
(74, '32.jpg', 'OM 0052', 'Esther Michael', '33', 'Married', 'Care for Elderly/Disabled', 'Ruvuma', 1, 1, 'Esther Michael is a 33 year  living in Ruvuma with her family..She is the only child.\r\n\r\n\r\nEsther is a christian woman she has been working as maid she has an experience of living with old people and taking care of them .\r\n\r\nShe took care of an old woman 2016 and got along very well.\r\n\r\nShe has an understanding mind and patience for things and she does love taking care of elderly people it comes from heart.\r\n\r\n\r\n\r\nOur interviews and test shows that she is good at her  work anywhere.She is hardworking and well behaved and has skills in other works too.\r\n\r\nShe is capable of taking care of elderly person due to her tolerance and love\r\n\r\n\r\nHope you chose hergood and hardworking'),
(75, '56.png', 'OM 0053', 'Johnson Luvanda', '25', 'Single', 'Washing Clothes', 'Mwanza', 2, 0, 'Johnson Luvanda is  25 year old girl living  in Mwanza.\r\n\r\n\r\nJohnson is a christian  ever since at the age of 20 then he has been doing work of washing clothes and has worked 2 times\r\n\r\n\r\nHis great at washing clothes and it is not something hard for him to do Aaron loves washing clothes and our interviews and test shows that he is good and willing to work anywhere.he is hardworking and well behaved.\r\n\r\nhe is capable of washing every kind of clothes and at any given time he finishes the task.\r\n\r\n\r\nHope you chose him'),
(76, '57.JPG', 'OM 0054', 'Samuel Njovu', '26', 'Married', 'Cooking', 'Dodoma', 2, 1, 'Samuel Njovu is 26 years old.He is the first born in her family.Samuel  is a christian and has 1 child and married for 12year living in Dodoma.\r\n\r\nHe always loved cooking that is what pushed him to do such work.He would always ask his mom to teach him how to cook variety of foods.He can cook many type of foods that most families eat.\r\n\r\nHe worked 2 times in different families where he had good experience,He is willing to learn more that what makes good.\r\n\r\nOur test and interviews showed us that she is very much capable \r\nhope you choose him.\r\n'),
(77, '55.jfif', 'OM 0055', 'Zaitun Mohammed', '24', 'Single', 'Cooking', 'Tanga', 2, 0, 'Zaitun Mohammed is 24 years old.Zainab is a muslim and  lives inTanga.\r\n\r\n\r\nShe has worked 2 times,all those times she got good experience and life.\r\nAt the time she was 20 she was first employed.She can cook most of the foods that we Africans love and she is always interested in learning on how to prepare new type of foods.\r\n\r\nApart from that she can do other works like washing clothes and willing to learn others.\r\nOur test and interviews showed us that she is very much capable \r\nhope you choose her.\r\nShe is good at everything'),
(78, '39.jpg', 'OM 0056', 'Pendo Urassa', '32', 'Married', 'Cleaning the house', 'Mtwara', 2, 0, 'Pendo Urassa is 32 years old living in Mtwara .She is married for five years now.Pendo  is a christian.\r\n\r\nPendo decided to help different families in cleaning the house she worked this job like 2 times.she understands the importance of cleanliness so she tries to find houses that require such services.\r\n\r\n\r\nOur tests and interviews showed us she is capable and very good at it.\r\nShe deserve a chance to work\r\n\r\nHope you chose her'),
(79, '40.jpg', 'OM 0057', 'Zamda Ruhanga', '35', 'Married', 'Cooking', 'Kagera', 4, 2, 'Zamda Ruhanga is 35 years old.Zamda is a muslim and  lives Kagera .She is married for 10 years now\r\n\r\n\r\nAt the time she was 18 she was first employed,She has worked 4 times with the same job  with some other duties to do too.She can cook most of the foods that we Africans love and she is always interested in learning on how to prepare new type of foods.\r\n\r\nApart from that she can do other works like washing clothes and willing to learn others.\r\nOur test and interviews showed us that she is very much capable \r\nhope you choose her.\r\nShe is good at everything'),
(80, '58.jpeg', 'OM 0058', 'Aisha Jumbe', '45', 'Married', 'Care for Children', 'Morogoro', 5, 3, 'Aisha Jumbe is a 45 year  living in Morogoro .She is the first born child out of three children.\r\n\r\n\r\nAisha is a Muslim girl she studied to the level of form 4 ever since then she has been working as maid she has worked five times in which she started taking care of children of different age .Aisha loves children and she is devoted in taking care of them\r\n\r\nAs a mother it gives her the opportunity to take care of children as her own.\r\n\r\nOur interviews and test shows that she is good at her  work anywhere.She is hardworking and well behaved and has skills in other works too.\r\n\r\nShe is capable of taking care of children due to her patience and love\r\n'),
(82, '60.jpg', 'OM 0059', 'Latifah Hamis', '22', 'Single', 'Cooking', 'Zanzibar', 3, 0, 'Latifah Hamis is 22 years old.She is the last born in her family.\r\nLatifah is a muslim and  lives in Zanzibar .She attended till grade 7 .\r\n\r\n\r\nAt the time she was 15 she was first employed through her first time she learned and got much experience.She has worked 3 times all at Zanzibar.\r\n\r\nApart from that she can do other works like washing clothes and other works too.\r\nOur test and interviews showed us that she is very much capable \r\nhope you choose her.\r\nShe is good at everything');

-- --------------------------------------------------------

--
-- Table structure for table `pm`
--

CREATE TABLE `pm` (
  `id` int(200) NOT NULL auto_increment,
  `title` varchar(256) NOT NULL,
  `username` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pm`
--

INSERT INTO `pm` (`id`, `title`, `username`, `message`) VALUES
(1, 'Concerning selection', 'Shashy', 'Congratulation Shashy you got the maid  you selected with id OM 0012 please contact her for through 0769123456');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `title`, `fname`, `lname`, `dob`, `city`, `username`, `password`, `phone`, `email`) VALUES
(1, 'Miss', 'Sharon', 'Novatus', '1997-11-24', 'Arusha', 'Shashy', 'love', '0655682268', 'cielonovatus95@gmail.com'),
(2, 'Miss', 'Florence', 'Esau', '1994-12-24', 'Mwanza', 'Fifi', 'fifi', '0653074097', 'fifiesau@gmail.com'),
(3, 'Miss', 'Jovina', 'Mutafurwa', '1995-11-06', 'Dar es Salaam', 'Jovy', 'blessed', '0653715184', 'jovymutafurwa06@yahoo.com'),
(4, 'Mrs', 'Merian', 'Rwabizi', '1995-09-10', 'Dar es Salaam', 'Rian', 'sweet', '0654024942', 'merian24@gmail.com'),
(5, 'Mr', 'Davis', 'Mushi', '1996-05-20', 'Dar es Salaam', '255Dave', 'jigsaw', '0713099801', 'davismushi96@yahoo.com'),
(6, 'Mr', 'Edward', 'Rutatola', '1997-06-05', 'Dar es Salaam', 'Eddy', 'eddy', '0713234567', 'eddyrutatola@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id` int(200) NOT NULL auto_increment,
  `title` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `title`, `username`, `message`) VALUES
(1, 'About The selection', 'Shashy', 'Thank you for your reply');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(200) NOT NULL auto_increment,
  `age` varchar(30) NOT NULL,
  `experience` int(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `age`, `experience`, `description`, `username`) VALUES
(1, '18-25', 1, 'Hello i would like a maid who takes care of disabled from Arusha', 'Shashy'),
(2, '18-25', 1, 'Hello i would like a maid who takes care of children from Tanga', 'Shashy');

-- --------------------------------------------------------

--
-- Table structure for table `selection`
--

CREATE TABLE `selection` (
  `id` int(200) NOT NULL auto_increment,
  `username` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `selection`
--

INSERT INTO `selection` (`id`, `username`, `message`) VALUES
(1, 'Shashy', 'i am interested with maid with id number OM 0012'),
(2, 'Rian', 'Hello am interested in lilian moses with id OM 0001.Hope i will get reply soon');
