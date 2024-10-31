-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 07:24 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarymanagementdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `ISBN_NO` varchar(100) DEFAULT NULL,
  `Book_Title` varchar(200) DEFAULT NULL,
  `Book_Type` int(10) UNSIGNED DEFAULT NULL,
  `Author_Name` varchar(100) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Purchase_Date` date DEFAULT NULL,
  `Edition` varchar(40) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT '0.00',
  `Pages` int(11) DEFAULT NULL,
  `Publisher` varchar(140) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `ISBN_NO`, `Book_Title`, `Book_Type`, `Author_Name`, `Quantity`, `Purchase_Date`, `Edition`, `Price`, `Pages`, `Publisher`) VALUES
(1, '0-9778-7195-9', 'River  Between', 1, 'Ngugi wa Thiongo', 33, '2018-02-24', '1', '300.00', 120, 'Longhorn'),
(2, '0-5654-4624-0', 'I Was Told There\'d Be Cake: Essays', 1, 'Sloane Crosley', 13, '2015-02-24', '2015', '1350.00', 231, 'Riverhead Books'),
(3, '0-9083-8914-0', 'Runaway', 2, 'Alice Munro', 23, '2009-02-24', '2004', '450.00', 354, 'McClelland and Stewart'),
(4, '0-4818-4618-2', 'Something Wicked This Way Comes', 1, 'Ray Bradbury', 32, '2019-01-03', '2019', '400.00', 293, 'Harper Voyager'),
(5, '0-5327-4994-4', 'Pride and Prejudice and Zombies', 1, 'Seth Grahame-Smith, Jane Austen', 13, '2020-01-23', '2011', '199.00', 320, 'Quirk Classics'),
(6, '0-4216-6448-7', 'The Lord Of The Rings', 3, 'J. R. R. Tolkien', 52, '2011-01-11', '1968', '1350.00', 460, 'Allen & Unwin'),
(7, '0-7355-7673-4', 'Watchmen', 3, 'Alan Moore, Dave Gibbons', 36, '2016-04-23', '1987', '0.00', 101, 'DC Comics'),
(8, '0-2867-7134-9', 'Frankenstein', 3, 'Mary Wollstonecraft Shelley', 19, '2014-04-11', '1818', '800.00', 280, 'Lackington, Hughes, Harding, Mavor & Jones'),
(9, '0-8474-0513-3', 'The Martian Chronicles', 3, 'Ray Bradbury', 13, '2011-07-22', '1951', '900.00', 222, 'Doubleday'),
(10, '0-9196-4660-3', 'World War Z', 3, 'Max Brooks', 29, '2015-10-08', '2007', '1000.00', 342, 'Crown Publishing Group'),
(11, '0-8513-9612-7', 'Everything’s Eventual: 14 Dark Tales', 2, 'Stephen King', 17, '2012-09-29', '2002', '850.00', 465, 'Charles Scribner\'s Sons'),
(12, '0-4886-1972-6', 'Men Without Women', 2, 'Haruki Murakami', 9, '2015-07-10', '2014', '500.00', 288, 'Bungeishunjū'),
(13, '0-9645-6310-X', 'Nine Stories', 2, 'J.D. Salinger', 11, '2014-10-05', '1954', '950.00', 320, 'Little, Brown and Company'),
(14, '0-2580-0424-X', 'Kiss Kiss', 2, 'Roald Dahl', 5, '2016-07-30', '1960', '750.00', 309, 'Alfred A. Knopf'),
(15, '0-8771-0381-X', 'Lamb to the Slaughter', 2, 'Roald Dahl', 9, '2017-09-11', '1954', '900.00', 69, 'Harper\'s Magazine'),
(16, '0-6647-0122-1', 'The Thrawn Trilogy', 3, 'Timothy Zahn', 29, '2006-11-04', '1993', '1150.00', 448, 'Del Rey Books'),
(17, '0-7447-3694-3', 'In Cold Blood', 7, 'Truman', 19, '2021-04-23', '1965', '600.00', 343, 'Penguin Random House LLC.'),
(18, '0-9603-1965-4', 'The Silent Patient', 9, 'Alex Michaelides', 5, '2021-04-23', '2019', '850.00', 336, 'Macmillan Publishers'),
(19, '0-9798-4364-2', 'The Silence of the Lambs', 9, 'Thomas Harris', 39, '2021-04-23', '1988', '1150.00', 338, 'St. Martin\'s Press'),
(20, '0-7569-2031-0', 'A Game of Thrones', 1, 'George R. R. Martin', 85, '2015-04-23', '1996', '1600.00', 694, 'HarperCollins'),
(21, '0-8816-3699-1', 'The Dark Tower: The Gunslinger', 4, 'Stephen King', 28, '2021-02-23', '1982', '1230.00', 300, 'Donald M. Grant, Publisher'),
(22, '0-4136-3548-1', 'Lucifer\'s Hammer', 3, 'Jerry Pournelle, Larry Niven', 9, '2021-04-22', '1977', '600.00', 494, 'Del Rey Books');

-- --------------------------------------------------------

--
-- Table structure for table `book_issue`
--

CREATE TABLE `book_issue` (
  `id` int(10) UNSIGNED NOT NULL,
  `Member` int(10) UNSIGNED DEFAULT NULL,
  `Number` int(10) UNSIGNED DEFAULT NULL,
  `Book_Number` int(10) UNSIGNED DEFAULT NULL,
  `Book_Title` int(10) UNSIGNED DEFAULT NULL,
  `Issue_Date` date DEFAULT NULL,
  `Return_Date` date DEFAULT NULL,
  `Status` varchar(40) DEFAULT NULL,
  `issue_id` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_issue`
--

INSERT INTO `book_issue` (`id`, `Member`, `Number`, `Book_Number`, `Book_Title`, `Issue_Date`, `Return_Date`, `Status`, `issue_id`) VALUES
(1, 1, 1, 1, 1, '2018-02-24', '2018-02-24', 'returned', '1023'),
(8, 9, 9, 10, 10, '2021-04-23', '2021-04-27', 'returned', '602'),
(9, 7, 7, 11, 11, '2021-04-14', '2021-04-23', 'issued', '603'),
(10, 5, 5, 1, 1, '2021-04-20', '2021-04-24', 'issued', '609'),
(11, 3, 3, 10, 10, '2021-04-21', '2021-04-23', 'returned', '612'),
(12, 13, 13, 2, 2, '2021-04-15', '2021-04-18', 'returned', '622'),
(13, 1, 1, 19, 19, '2021-04-22', '2021-05-09', 'issued', '669'),
(14, 8, 8, 21, 21, '2021-04-23', '2021-06-07', 'issued', '660'),
(15, 2, 2, 18, 18, '2021-03-29', '2021-04-23', 'returned', '852'),
(17, 11, 11, 1, 1, '2021-04-10', '2021-04-22', 'issued', '963'),
(18, 15, 15, 6, 6, '2021-02-11', '2021-04-23', 'returned', '888');

-- --------------------------------------------------------

--
-- Table structure for table `magazines`
--

CREATE TABLE `magazines` (
  `id` int(10) UNSIGNED NOT NULL,
  `Type` varchar(40) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Date_Of_Receipt` date DEFAULT NULL,
  `Date_Published` date DEFAULT NULL,
  `Pages` int(11) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT '0.00',
  `Publisher` varchar(140) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `magazines`
--

INSERT INTO `magazines` (`id`, `Type`, `Name`, `Date_Of_Receipt`, `Date_Published`, `Pages`, `Price`, `Publisher`) VALUES
(1, 'Entertainment', 'Entertainment Weekly', '2021-04-18', '2021-04-19', 39, '110.00', 'Meredith Corporation'),
(2, 'Pop Culture Fashion', 'Vanity Fair', '2021-04-19', '2021-04-21', 41, '105.00', 'Condé Nast'),
(3, 'Music, Politics', 'Rolling Stone', '2021-04-22', '2021-04-23', 55, '130.00', 'Penske Media Corporation'),
(4, 'Fashion, Lifestyle', 'Vogue', '2021-04-20', '2021-04-23', 52, '120.00', 'Condé Nast');

-- --------------------------------------------------------

--
-- Table structure for table `membership_grouppermissions`
--

CREATE TABLE `membership_grouppermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `groupID` int(11) DEFAULT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT '0',
  `allowEdit` tinyint(4) NOT NULL DEFAULT '0',
  `allowDelete` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_grouppermissions`
--

INSERT INTO `membership_grouppermissions` (`permissionID`, `groupID`, `tableName`, `allowInsert`, `allowView`, `allowEdit`, `allowDelete`) VALUES
(1, 2, 'books', 1, 3, 3, 3),
(2, 2, 'NewsPapers', 1, 3, 3, 3),
(3, 2, 'Magazines', 1, 3, 3, 3),
(4, 2, 'Users', 1, 3, 3, 3),
(5, 2, 'Book_Issue', 1, 3, 3, 3),
(6, 2, 'Return_Book', 1, 3, 3, 3),
(7, 2, 'Types', 1, 3, 3, 3),
(8, 2, 'Return', 1, 3, 3, 3),
(30, 3, 'books', 0, 3, 0, 0),
(31, 3, 'NewsPapers', 0, 3, 0, 0),
(32, 3, 'Magazines', 0, 3, 0, 0),
(33, 3, 'Users', 0, 3, 0, 0),
(34, 3, 'Book_Issue', 0, 3, 0, 0),
(35, 3, 'Return_Book', 0, 3, 0, 0),
(36, 3, 'Types', 0, 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `membership_groups`
--

CREATE TABLE `membership_groups` (
  `groupID` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `description` text,
  `allowSignup` tinyint(4) DEFAULT NULL,
  `needsApproval` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_groups`
--

INSERT INTO `membership_groups` (`groupID`, `name`, `description`, `allowSignup`, `needsApproval`) VALUES
(1, 'anonymous', 'Anonymous group created automatically on 2018-02-24', 0, 0),
(2, 'Admins', 'Admin group created automatically on 2018-02-24', 0, 1),
(3, 'demo', 'demo users', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `membership_userpermissions`
--

CREATE TABLE `membership_userpermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `memberID` varchar(20) NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT '0',
  `allowEdit` tinyint(4) NOT NULL DEFAULT '0',
  `allowDelete` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `membership_userrecords`
--

CREATE TABLE `membership_userrecords` (
  `recID` bigint(20) UNSIGNED NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `pkValue` varchar(255) DEFAULT NULL,
  `memberID` varchar(20) DEFAULT NULL,
  `dateAdded` bigint(20) UNSIGNED DEFAULT NULL,
  `dateUpdated` bigint(20) UNSIGNED DEFAULT NULL,
  `groupID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_userrecords`
--

INSERT INTO `membership_userrecords` (`recID`, `tableName`, `pkValue`, `memberID`, `dateAdded`, `dateUpdated`, `groupID`) VALUES
(1, 'Types', '1', 'admin', 1519466337, 1519466337, 2),
(2, 'Types', '2', 'admin', 1519466356, 1519466356, 2),
(3, 'Types', '3', 'admin', 1519466381, 1519466381, 2),
(4, 'books', '1', 'admin', 1519466456, 1619183735, 2),
(5, 'Users', '1', 'admin', 1519466500, 1619182931, 2),
(6, 'Book_Issue', '1', 'admin', 1519466549, 1619196527, 2),
(7, 'Return_Book', '1', 'admin', 1519466780, 1519466780, 2),
(8, 'Users', '2', 'admin', 1519468487, 1619182955, 2),
(9, 'books', '2', 'admin', 1519468656, 1619184073, 2),
(11, 'books', '3', 'admin', 1519479901, 1619185728, 2),
(12, 'NewsPapers', '1', 'admin', 1519479996, 1619186362, 2),
(17, 'Users', '3', 'admin', 1619089939, 1619182980, 2),
(19, 'Users', '4', 'admin', 1619183387, 1619183400, 2),
(20, 'Users', '5', 'admin', 1619183422, 1619183422, 2),
(21, 'Users', '6', 'admin', 1619183446, 1619183446, 2),
(22, 'Users', '7', 'admin', 1619183467, 1619183467, 2),
(23, 'Users', '8', 'admin', 1619183493, 1619183493, 2),
(24, 'Users', '9', 'admin', 1619183513, 1619183513, 2),
(25, 'Users', '10', 'admin', 1619183542, 1619183542, 2),
(26, 'Users', '11', 'admin', 1619183564, 1619183564, 2),
(27, 'Users', '12', 'admin', 1619183585, 1619183585, 2),
(28, 'Users', '13', 'admin', 1619183609, 1619183609, 2),
(29, 'books', '4', 'admin', 1619183892, 1619183892, 2),
(30, 'books', '5', 'admin', 1619183974, 1619183974, 2),
(31, 'books', '6', 'admin', 1619184647, 1619184647, 2),
(32, 'books', '7', 'admin', 1619184743, 1619184743, 2),
(33, 'books', '8', 'admin', 1619185065, 1619185065, 2),
(34, 'books', '9', 'admin', 1619185151, 1619185151, 2),
(35, 'books', '10', 'admin', 1619185243, 1619185243, 2),
(36, 'books', '11', 'admin', 1619185529, 1619185529, 2),
(37, 'books', '12', 'admin', 1619185625, 1619185625, 2),
(38, 'books', '13', 'admin', 1619185813, 1619185813, 2),
(39, 'books', '14', 'admin', 1619185892, 1619185892, 2),
(40, 'books', '15', 'admin', 1619186013, 1619186013, 2),
(41, 'books', '16', 'admin', 1619186138, 1619186138, 2),
(42, 'NewsPapers', '2', 'admin', 1619186289, 1619186289, 2),
(43, 'NewsPapers', '3', 'admin', 1619186339, 1619186339, 2),
(44, 'NewsPapers', '4', 'admin', 1619186407, 1619186407, 2),
(45, 'NewsPapers', '5', 'admin', 1619186465, 1619186465, 2),
(46, 'NewsPapers', '6', 'admin', 1619186561, 1619186561, 2),
(47, 'Magazines', '1', 'admin', 1619186696, 1619186696, 2),
(48, 'Magazines', '2', 'admin', 1619186784, 1619186784, 2),
(49, 'Magazines', '3', 'admin', 1619186855, 1619186855, 2),
(50, 'Book_Issue', '8', 'admin', 1619186928, 1619188225, 2),
(51, 'Book_Issue', '9', 'admin', 1619186953, 1619186953, 2),
(52, 'Book_Issue', '10', 'admin', 1619186991, 1619186991, 2),
(53, 'Book_Issue', '11', 'admin', 1619187027, 1619187071, 2),
(54, 'Book_Issue', '12', 'admin', 1619187048, 1619198333, 2),
(55, 'Return_Book', '2', 'admin', 1619187108, 1619187108, 2),
(56, 'books', '17', 'admin', 1619187655, 1619187655, 2),
(57, 'books', '18', 'admin', 1619187753, 1619187753, 2),
(58, 'books', '19', 'admin', 1619187871, 1619187871, 2),
(59, 'books', '20', 'admin', 1619187965, 1619187965, 2),
(60, 'books', '21', 'admin', 1619188047, 1619188047, 2),
(61, 'Book_Issue', '13', 'admin', 1619188096, 1619188305, 2),
(62, 'Book_Issue', '14', 'admin', 1619188130, 1619188130, 2),
(63, 'Book_Issue', '15', 'admin', 1619188160, 1619188352, 2),
(65, 'Book_Issue', '17', 'admin', 1619188209, 1619188209, 2),
(66, 'Return_Book', '3', 'admin', 1619188281, 1619188281, 2),
(67, 'Return_Book', '4', 'admin', 1619188343, 1619188343, 2),
(68, 'Users', '14', 'admin', 1619197135, 1619197135, 2),
(69, 'Users', '15', 'admin', 1619197769, 1619197769, 2),
(70, 'books', '22', 'admin', 1619197888, 1619197888, 2),
(71, 'NewsPapers', '7', 'admin', 1619198040, 1619198040, 2),
(72, 'Magazines', '4', 'admin', 1619198138, 1619198138, 2),
(73, 'Book_Issue', '18', 'admin', 1619198218, 1619198262, 2),
(74, 'Return_Book', '5', 'admin', 1619198290, 1619198290, 2),
(75, 'Return_Book', '6', 'admin', 1619198359, 1619198359, 2);

-- --------------------------------------------------------

--
-- Table structure for table `membership_users`
--

CREATE TABLE `membership_users` (
  `memberID` varchar(20) NOT NULL,
  `passMD5` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `signupDate` date DEFAULT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL,
  `isBanned` tinyint(4) DEFAULT NULL,
  `isApproved` tinyint(4) DEFAULT NULL,
  `custom1` text,
  `custom2` text,
  `custom3` text,
  `custom4` text,
  `comments` text,
  `pass_reset_key` varchar(100) DEFAULT NULL,
  `pass_reset_expiry` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_users`
--

INSERT INTO `membership_users` (`memberID`, `passMD5`, `email`, `signupDate`, `groupID`, `isBanned`, `isApproved`, `custom1`, `custom2`, `custom3`, `custom4`, `comments`, `pass_reset_key`, `pass_reset_expiry`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', '2018-02-24', 2, 0, 1, 'John Walker', '8865 Ralph Street', 'Saint Louis', 'Missouri', 'Admin member created automatically on 2018-02-24\nmember updated his profile on 04/23/2021, 12:29 pm from IP address ::1', NULL, NULL),
('demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@demo.com', '2018-02-25', 3, 0, 1, 'demo user', 'demo', 'demo', 'demo', 'demo', NULL, NULL),
('guest', NULL, NULL, '2018-02-24', 1, 0, 1, NULL, NULL, NULL, NULL, 'Anonymous member created automatically on 2018-02-24', NULL, NULL),
('ronald', '02d62574863469f4f1ef99d8fc453a31', 'admin@admin.com', '2021-04-23', 2, 0, 1, NULL, NULL, NULL, NULL, 'Admin member created automatically on 2021-04-23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `newspapers`
--

CREATE TABLE `newspapers` (
  `id` int(10) UNSIGNED NOT NULL,
  `Language` varchar(40) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Date_Of_Receipt` date DEFAULT NULL,
  `Date_Published` date DEFAULT NULL,
  `Pages` int(11) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT '0.00',
  `Type` varchar(40) DEFAULT NULL,
  `Publisher` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newspapers`
--

INSERT INTO `newspapers` (`id`, `Language`, `Name`, `Date_Of_Receipt`, `Date_Published`, `Pages`, `Price`, `Type`, `Publisher`) VALUES
(1, 'English', 'The Standard', '2019-02-24', '2019-02-24', 35, '20.00', 'News', 'Standard Group Media'),
(2, 'English', 'Los Angeles Times', '2021-03-09', '2021-03-10', 11, '20.00', 'News', 'Patrick Soon-Shiong'),
(3, 'English', 'Newsday', '2021-04-01', '2021-04-02', 9, '20.00', 'News', 'Debby Krenek'),
(4, 'English', 'The Washington Post', '2021-04-10', '2021-04-11', 12, '30.00', 'News', 'Fred Ryan'),
(5, 'English', 'New York Post', '2021-04-18', '2021-04-19', 9, '20.00', 'News', 'Sean Giancola'),
(6, 'English', 'The Wall Street Journal', '2021-04-20', '2021-04-23', 56, '110.00', 'American business-focused Newspaper', 'Almar Latour, Dow Jones & Company'),
(7, 'English', 'The Daily Telegraph', '2021-04-21', '2021-04-23', 21, '30.00', 'News', 'Barclay Brothers');

-- --------------------------------------------------------

--
-- Table structure for table `return_book`
--

CREATE TABLE `return_book` (
  `id` int(10) UNSIGNED NOT NULL,
  `Book_Number` int(10) UNSIGNED DEFAULT NULL,
  `Book_Title` int(10) UNSIGNED DEFAULT NULL,
  `Issue_Date` date DEFAULT NULL,
  `Due_Date` int(10) UNSIGNED DEFAULT '1',
  `Return_Date` date DEFAULT NULL,
  `Member` int(10) UNSIGNED DEFAULT NULL,
  `Number` int(10) UNSIGNED DEFAULT NULL,
  `Fine` decimal(10,2) DEFAULT '0.00',
  `Status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `return_book`
--

INSERT INTO `return_book` (`id`, `Book_Number`, `Book_Title`, `Issue_Date`, `Due_Date`, `Return_Date`, `Member`, `Number`, `Fine`, `Status`) VALUES
(1, 1, 1, '0000-00-00', 1, '2018-03-04', 1, 1, '50.00', 'cleared'),
(2, 11, 11, '0000-00-00', 11, '2021-04-23', 3, 3, '0.00', 'cleared'),
(3, 8, 8, '0000-00-00', 8, '2021-04-23', 9, 9, '60.00', 'cleared'),
(4, 15, 15, '0000-00-00', 15, '2021-04-23', 2, 2, '0.00', 'pending'),
(5, 18, 18, '0000-00-00', 18, '2021-04-23', 15, 15, '50.00', 'cleared'),
(6, 12, 12, '0000-00-00', 12, '2021-04-23', 13, 13, '100.00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `Name`) VALUES
(1, 'Novel'),
(2, 'Short Story'),
(3, 'Science Fiction'),
(4, 'Fantasy'),
(5, 'Historical Fiction'),
(6, 'Action and Adventure'),
(7, 'Detective and Mystery'),
(8, 'Romance'),
(9, 'Suspense and Thrillers'),
(10, 'Biographies and Autobiographies');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `Membership_Number` varchar(40) DEFAULT NULL,
  `Name` varchar(140) DEFAULT NULL,
  `Contact` varchar(40) DEFAULT NULL,
  `ID_Number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Membership_Number`, `Name`, `Contact`, `ID_Number`) VALUES
(1, '1001', 'Johnny Wiley', '3569997850', 99239183),
(2, '1002', 'James E Radcliffe', '2114520000', 33432113),
(3, '1003', 'Phillip Brown', '9502469690', 75200002),
(4, '1004', 'Harold V Knight', '7450001250', 36500009),
(5, '1005', 'Daniel Bahr', '8501112000', 75300000),
(6, '1006', 'Gordon Crabtree', '9003698500', 13000070),
(7, '1007', 'Walter Guerrero', '3025681000', 17800008),
(8, '1008', 'Brenda Gower', '9012458500', 17560001),
(9, '1009', 'James Sanders', '1002569840', 10003650),
(10, '1010', 'Dennis Bergeron', '9102456600', 32000020),
(11, '1011', 'Louise Carpio', '7539510002', 18601250),
(12, '1012', 'Rodger Crawford', '8500000021', 85200001),
(13, '1013', 'Keith H Shaddix', '9036754440', 12355500),
(14, '1014', 'Inez Lockwood', '4072995194', 750000210),
(15, '1014', 'Anthony Starr', '8542221400', 70006969);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Book_Type` (`Book_Type`);

--
-- Indexes for table `book_issue`
--
ALTER TABLE `book_issue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Member` (`Member`),
  ADD KEY `Book_Number` (`Book_Number`);

--
-- Indexes for table `magazines`
--
ALTER TABLE `magazines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Indexes for table `membership_groups`
--
ALTER TABLE `membership_groups`
  ADD PRIMARY KEY (`groupID`);

--
-- Indexes for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Indexes for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  ADD PRIMARY KEY (`recID`),
  ADD UNIQUE KEY `tableName_pkValue` (`tableName`,`pkValue`),
  ADD KEY `pkValue` (`pkValue`),
  ADD KEY `tableName` (`tableName`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `membership_users`
--
ALTER TABLE `membership_users`
  ADD PRIMARY KEY (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `newspapers`
--
ALTER TABLE `newspapers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_book`
--
ALTER TABLE `return_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Book_Number` (`Book_Number`),
  ADD KEY `Member` (`Member`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `book_issue`
--
ALTER TABLE `book_issue`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `magazines`
--
ALTER TABLE `magazines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `membership_groups`
--
ALTER TABLE `membership_groups`
  MODIFY `groupID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  MODIFY `recID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `newspapers`
--
ALTER TABLE `newspapers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `return_book`
--
ALTER TABLE `return_book`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
