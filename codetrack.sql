-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 12:24 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codetrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `codingresult`
--

CREATE TABLE `codingresult` (
  `sno` int(11) NOT NULL,
  `mobileno` varchar(1000) NOT NULL,
  `questionno` varchar(1000) NOT NULL,
  `filepath` varchar(1000) NOT NULL,
  `output` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codingresult`
--

INSERT INTO `codingresult` (`sno`, `mobileno`, `questionno`, `filepath`, `output`, `name`, `email`) VALUES
(1, '9791329930', '1', 'Temp/9791329930_1.java', '', 'Rajesh', 'admin'),
(2, '9597993063', '4', 'Temp/9597993063_4.java', '', 'Sonu', 'chandrakala@prematix.com'),
(3, '9597993063', '2', 'Temp/9597993063_2.java', '', 'Sonu', 'chandrakala@prematix.com'),
(4, '9791329930', '5', 'Temp/9791329930_5.java', '', 'Aswin', 'user'),
(5, '9791329930', '3', 'Temp/9791329930_3.java', '', 'Aswin', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `sno` int(11) NOT NULL,
  `collegeid` varchar(1000) NOT NULL,
  `collegename` varchar(1000) NOT NULL,
  `interviewdate` date NOT NULL,
  `status` varchar(1000) NOT NULL DEFAULT 'Y',
  `createdby` varchar(1000) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`sno`, `collegeid`, `collegename`, `interviewdate`, `status`, `createdby`, `createdon`) VALUES
(5, '6107', 'GCEB', '2018-12-11', 'N', 'rajeshjas20296@gmail.com', '2018-12-18 04:34:46'),
(7, '6772', 'ACT', '0000-00-00', 'Y', 'rajeshjas20296@gmail.com', '2018-12-18 06:23:28'),
(8, '546', 'ACT', '2018-12-04', 'Y', 'rajeshjas20296@gmail.com', '2018-12-18 06:25:44'),
(9, '123', 'ABC college', '2018-12-26', 'Y', '', '2018-12-24 10:18:14'),
(10, '6789', 'pmc', '2018-12-31', 'Y', '', '2018-12-24 11:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `sno` int(11) NOT NULL,
  `course` varchar(1000) NOT NULL,
  `department` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL DEFAULT 'Y',
  `createdby` varchar(1000) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`sno`, `course`, `department`, `status`, `createdby`, `createdon`) VALUES
(1, 'BE', 'Computer Science and Engineering', 'Y', '', '2018-12-18 08:56:51'),
(2, 'BE', 'Information Technology', 'Y', 'rajeshjas20296@gmail.com', '2018-12-18 11:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sno` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `mobileno` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `role` varchar(1000) NOT NULL DEFAULT 'user',
  `gender` varchar(1000) NOT NULL,
  `dob` varchar(1000) NOT NULL,
  `collegeid` varchar(1000) NOT NULL,
  `course` varchar(1000) NOT NULL,
  `department` varchar(1000) NOT NULL,
  `tenth_percentage` varchar(1000) NOT NULL,
  `twelth_percentage` varchar(1000) NOT NULL,
  `ug_cgpa` varchar(1000) NOT NULL,
  `pg_cgpa` varchar(1000) NOT NULL,
  `yearofpass` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL DEFAULT 'Y',
  `teststatus` varchar(1000) NOT NULL DEFAULT 'Apptitude',
  `createdby` varchar(1000) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `name`, `mobileno`, `email`, `password`, `role`, `gender`, `dob`, `collegeid`, `course`, `department`, `tenth_percentage`, `twelth_percentage`, `ug_cgpa`, `pg_cgpa`, `yearofpass`, `status`, `teststatus`, `createdby`, `createdon`) VALUES
(1, 'Rajesh', '9791329930', 'admin', 'admin', 'admin', 'Male', '20-02-1996', '6107', 'BE', 'CSE', '97', '95', '7.0', '-', '2017', 'Y', 'Technical', 'Admin', '2018-12-15 05:28:40'),
(2, 'Aswin', '9791329930', 'user', 'user', 'user', 'Male', '2018-12-21', '6772', 'BE', 'CSE', '99', '97', '8.0', '-', '2017', 'Y', 'Coding', 'Admin', '2018-12-18 10:15:42'),
(3, 'Aswin', '9792091029', 'aswinnsh@gmail.com', 'U2mSf3lz', 'user', 'Male', '20-02-1996', '6107', 'BE', 'Computer Science and Engineering', '99', '95', '7', '7', '7', 'Y', 'Coding', 'User', '2018-12-20 11:23:51'),
(4, 'Selvam', '9442603558', 'selvam03558@gmail.com', 'oIunfpEy', 'user', 'Male', '1985-08-30', '6107', 'BE', 'Computer Science and Engineering', '63', '-', '93', '-', '2011', 'Y', '', '', '2018-12-22 09:20:09'),
(5, 'ram', '9876543211', 'ram@gmail.com', 'dMAGz5tM', 'user', 'Male', '2018-12-21', '6107', 'BE', 'Computer Science and Engineering', '90', '90', '90', '90', '2018-12-25', 'Y', '', '', '2018-12-24 05:12:08'),
(6, '1', '1', '1', 'fb7p9Tks', 'user', '1', '1', '123', 'BE', 'Computer Science and Engineering', '1', '1', '1', '1', '1', 'Y', 'Apptitude', 'admin', '2018-12-24 10:22:43'),
(7, 'Sonu', '9597993063', 'chandrakala@prematix.com', '0cqH9xW9', 'user', 'Female', '20-02-1996', '123', 'BE', 'Computer Science and Engineering', '99', '95', '7', '7', '7', 'Y', 'Coding', 'admin', '2018-12-24 10:24:21'),
(8, 'Johnu', '9876543219', 'ckala5005@gmail.com', 'rCDAxwkR', 'user', 'Female', '20-02-1996', '123', 'BE', 'Computer Science and Engineering', '99', '95', '7', '7', '7', 'Y', 'Apptitude', 'admin', '2018-12-24 10:24:21'),
(9, 'Sharvin', '8765432109', 'prematix.rajesh@gmail.com', 'JQL33gBB', 'user', 'Male', '20-02-1996', '123', 'BE', 'Computer Science and Engineering', '99', '95', '7', '7', '7', 'Y', 'Coding', 'admin', '2018-12-24 10:24:21'),
(10, 'Dhanusha', '9087654321', 'prematix_rajesh@hotmail.com', 'r1PYahlO', 'user', 'Female', '20-02-1996', '123', 'BE', 'Computer Science and Engineering', '99', '95', '7', '7', '7', 'Y', 'Apptitude', 'admin', '2018-12-24 10:24:22'),
(11, 'Rajalakshmi', '9876543210', 'rajalakshmi@prematix.com', 'CaTWStPw', 'user', 'Female', '2018-12-27', '123', 'BE', 'Computer Science and Engineering', '80', '90', '9', '9', '2018-12-27', 'Y', 'Coding', 'admin', '2018-12-24 11:08:01'),
(12, 'Veeramani', '9089000000', 'prematix.veeramani@gmail.com', 'uCZwBOKV', 'user', 'Male', '20-02-1996', '123', 'BE', 'Information Technology', '99', '95', '7', '7', '7', 'Y', 'Apptitude', 'admin', '2018-12-24 11:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `sno` int(11) NOT NULL,
  `problem` text NOT NULL,
  `description` text NOT NULL,
  `inputformat` text NOT NULL,
  `constraints` text NOT NULL,
  `outputformat` text NOT NULL,
  `sampleinput` text NOT NULL,
  `sampleoutput` text NOT NULL,
  `status` varchar(1000) NOT NULL DEFAULT 'Y',
  `createdby` varchar(1000) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`sno`, `problem`, `description`, `inputformat`, `constraints`, `outputformat`, `sampleinput`, `sampleoutput`, `status`, `createdby`, `createdon`) VALUES
(1, 'Java Essentials', 'You just need to read 5 strings from stdin and print them to stdout.', 'Read 5 strings with one string on each line.', '1 <= |S| <= 10^5', 'Print your strings to the stdout with each string in each line.', 'I am awesome.\r\n\r\nHow are you?\r\n\r\nI m Fine.\r\n\r\nOk\r\n\r\nSame Here', 'I am awesome.\r\n\r\nHow are you?\r\n\r\nI m Fine.\r\n\r\nOk\r\n\r\nSame Here', 'Y', 'admin', '2018-12-21 08:39:59'),
(2, 'Java Basics', 'You just need to read a single string, int, float from stdin and print them to stdout. ', 'Read a single string, int, float with one on each line.', '1 <= |S| <= 10^5\r\n1 <= N <= 10^5', 'Print your string, int, float value to the stdout with each in each line.', 'I am awesome.\r\n22\r\n45.70', 'I am awesome.\r\n22\r\n45.70', 'Y', 'admin', '2018-12-21 09:09:23'),
(3, 'Strings Repetition', 'You just need to take a string and a integer as an input and repeat the string upto the count given as in integer. ', 'You will be given a function with string and an integer as an argument. ', '1 <= S <= 10^3\r\n1 <= N <= 100', 'You need to return the string from the given function. ', 'Hello\r\n2', 'HelloHello', 'Y', 'admin', '2018-12-21 09:10:55'),
(4, 'Minimum Coins', 'Given a total and coins of certain denomination with infinite supply, what is the minimum number of coins it takes to form this total. You will be given coins as arrays. as elements of array.  \r\n', 'You will be given a function with arguments as array of integers, integer which represent total. ', '1 <= N<= 10^5', 'You will return the total number of ways. ', '4\r\n7\r\n3\r\n2\r\n6\r\n13', '2', 'Y', 'admin', '2018-12-24 10:34:57'),
(5, 'asdf', 'asdf', 'asrf', 'asdf', 'asd', 'asdf', 'asdf', 'Y', 'admin', '2018-12-25 09:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `sno` int(11) NOT NULL,
  `testtype` varchar(1000) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `optiona` varchar(1000) NOT NULL,
  `optionb` varchar(1000) NOT NULL,
  `optionc` varchar(1000) NOT NULL,
  `optiond` varchar(1000) NOT NULL,
  `optione` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL DEFAULT 'Y',
  `createdby` varchar(1000) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`sno`, `testtype`, `question`, `optiona`, `optionb`, `optionc`, `optiond`, `optione`, `answer`, `status`, `createdby`, `createdon`) VALUES
(1, 'Apptitude', 'A train running at the speed of 60 km/hr crosses a pole in 9 seconds. What is the length of the train?', '120 metres', '180 metres', '324 metres', '150 metres', '', 'D', 'Y', 'admin', '2018-12-19 10:08:10'),
(2, 'Apptitude', 'A train 125 m long passes a man, running at 5 km/hr in the same direction in which the train is going, in 10 seconds. The speed of the train is:', '45 km/hr', '50 km/hr', '54 km/hr', '55 km/hr', '', 'B', 'Y', 'admin', '2018-12-19 10:08:10'),
(3, 'Apptitude', 'The length of the bridge, which a train 130 metres long and travelling at 45 km/hr can cross in 30 seconds, is:', '200 m', '225 m', '245 m', '250 m', '', 'C', 'Y', 'admin', '2018-12-19 10:08:10'),
(4, 'Apptitude', 'Two trains running in opposite directions cross a man standing on the platform in 27 seconds and 17 seconds respectively and they cross each other in 23 seconds. The ratio of their speeds is:', '0.04375', '0.12638888888889', '0.12777777777778', 'None of these', '', 'B', 'Y', 'admin', '2018-12-19 10:08:10'),
(5, 'Apptitude', 'A train passes a station platform in 36 seconds and a man standing on the platform in 20 seconds. If the speed of the train is 54 km/hr, what is the length of the platform?', '120 m', '240 m', '300 m', 'None of these', '', 'B', 'Y', 'admin', '2018-12-19 10:08:10'),
(6, 'Apptitude', 'A train 240 m long passes a pole in 24 seconds. How long will it take to pass a platform 650 m long?', '65 sec', '89 sec', '100 sec', '150 sec', '', 'B', 'Y', 'admin', '2018-12-19 10:08:11'),
(7, 'Apptitude', 'Two trains of equal length are running on parallel lines in the same direction at 46 km/hr and 36 km/hr. The faster train passes the slower train in 36 seconds. The length of each train is:', '50 m', '72 m', '80 m', '82 m', '', 'A', 'Y', 'admin', '2018-12-19 10:08:11'),
(8, 'Apptitude', 'A train 360 m long is running at a speed of 45 km/hr. In what time will it pass a bridge 140 m long?', '40 sec', '42 sec', '45 sec', '48 sec', '', 'A', 'Y', 'admin', '2018-12-19 10:08:11'),
(9, 'Apptitude', 'Two trains are moving in opposite directions @ 60 km/hr and 90 km/hr. Their lengths are 1.10 km and 0.9 km respectively. The time taken by the slower train to cross the faster train in seconds is:', '36', '45', '48', '49', '', 'C', 'Y', 'admin', '2018-12-19 10:08:11'),
(10, 'Apptitude', ' A jogger running at 9 kmph alongside a railway track in 240 metres ahead of the engine of a 120 metres long train running at 45 kmph in the same direction. In how much time will the train pass the jogger?', '3.6 sec', '18 sec', '36 sec', '72 sec', '', 'C', 'Y', 'admin', '2018-12-19 10:08:11'),
(11, 'Technical', 'Which function overloads the >> operator?', ' more()', 'gt()', 'ge()', 'None of the above', '', 'D', 'Y', 'admin', '2018-12-20 06:41:11'),
(12, 'Technical', 'Which operator is overloaded by the or() function?', '||', '|', '//', '/', '', 'B', 'Y', 'admin', '2018-12-20 06:41:11'),
(13, 'Technical', 'print \"Hello World\"[::-1]', 'dlroW olleH', 'Hello Worl', 'd', 'Error', '', 'A', 'Y', 'admin', '2018-12-20 06:41:11'),
(14, 'Technical', 'Given a function that does not return any value, what value is shown when executed at the shell?', 'int', 'bool', 'void', 'None', '', 'D', 'Y', 'admin', '2018-12-20 06:41:11'),
(15, 'Technical', 'Which module in Python supports regular expressions?', 're', 'regex', 'pyregex', 'None of the above', '', 'A', 'Y', 'admin', '2018-12-20 06:41:11'),
(16, 'Technical', 'Which of the following is not a complex number?', 'k = 2 + 3j', 'k = complex(2, 3)', 'k = 2 + 3l\n', 'k = 2 + 3J\n', '', 'C', 'Y', 'admin', '2018-12-20 06:41:11'),
(17, 'Technical', 'What does ~~~~~~5 evaluate to?', '5', '-11', '11', '-5', '', 'A', 'Y', 'admin', '2018-12-20 06:41:11'),
(18, 'Technical', 'Given a string s = â€œWelcomeâ€, which of the following code is incorrect?', 'print s[0]', 'print s.lower()', 's[1] = â€˜râ€™', 'print s.strip()', '', 'C', 'Y', 'admin', '2018-12-20 06:41:11'),
(19, 'Technical', '________ is a simple but incomplete version of a function.', 'Stub', 'Function', 'A function developed using bottom-up approach', 'A function developed using top-down approach\n', '', 'A', 'Y', 'admin', '2018-12-20 06:41:11'),
(20, 'Technical', 'To start Python from the command prompt, use the command ______', 'execute python', 'go python\n', 'python', 'run python', '', 'C', 'Y', 'admin', '2018-12-20 06:41:11'),
(21, 'Technical', 'Which of the following is correct about Python?', 'It supports automatic garbage collection.', 'It can be easily integrated with C, C++, COM, ActiveX, CORBA, and Java\n', 'Both of the above', 'None of the above\n', '', 'C', 'Y', 'admin', '2018-12-20 06:41:11'),
(22, 'Technical', 'Which of these is not a core data type?', 'Lists', 'Dictionary', 'Tuples', 'Class', '', 'D', 'Y', 'admin', '2018-12-20 06:41:11'),
(23, 'Technical', 'What data type is the object below ? L = [1, 23, â€˜helloâ€™, 1]', 'Lists', 'Dictionary', 'Tuple', 'Array', '', 'A', 'Y', 'admin', '2018-12-20 06:41:11'),
(24, 'Technical', 'Which of the following function convert a string to a float in python?', 'int(x [,base])', 'long(x [,base] )', 'float(x)', 'str(x)', '', 'C', 'Y', 'admin', '2018-12-20 06:41:11'),
(25, 'Technical', 'What is called when a function is defined inside a class?', 'Module', 'Class', 'Another Function', 'Method', '', 'D', 'Y', 'admin', '2018-12-20 06:41:11'),
(26, 'Technical', 'Which of the following is the use of id() function in python?', 'Id returns the identity of the object', 'Every object doesnâ€™t have a unique id\n', 'All of the mentioned', 'None of the mentioned\n', '', 'A', 'Y', 'admin', '2018-12-20 06:41:11'),
(27, 'Technical', 'How is memory managed in Python?', 'private heap space', 'heap', 'public heap space', 'None', '', 'A', 'Y', '', '2018-12-24 10:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `sno` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `mobileno` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `collegeid` varchar(1000) NOT NULL,
  `course` varchar(1000) NOT NULL,
  `department` varchar(1000) NOT NULL,
  `testtype` varchar(1000) NOT NULL,
  `questions` int(11) NOT NULL,
  `attend` int(11) NOT NULL,
  `notattend` int(11) NOT NULL,
  `result` int(11) NOT NULL,
  `cutoff` int(11) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `codingstatus` varchar(1000) NOT NULL DEFAULT 'N',
  `gdstatus` varchar(1000) NOT NULL DEFAULT 'N',
  `gdcomments` varchar(1000) NOT NULL,
  `hrstatus` varchar(1000) NOT NULL DEFAULT 'N',
  `hrcomments` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`sno`, `name`, `mobileno`, `email`, `collegeid`, `course`, `department`, `testtype`, `questions`, `attend`, `notattend`, `result`, `cutoff`, `createdon`, `codingstatus`, `gdstatus`, `gdcomments`, `hrstatus`, `hrcomments`) VALUES
(1, 'Aswin', '9791329930', 'aswinnsh@gmail.com', '6772', 'BE', 'CSE', 'Apptitude', 10, 10, 0, 1, 7, '2018-12-24 04:56:28', 'Y', 'N', '', 'N', ''),
(2, 'Aswin', '9791329930', 'aswinnsh@gmail.com', '6772', 'BE', 'CSE', 'Apptitude', 10, 1, 9, 0, 7, '2018-12-24 05:58:48', 'Y', 'N', '', 'N', ''),
(3, 'Aswin', '9791329930', 'aswinnsh@gmail.com', '6772', 'BE', 'CSE', 'Technical', 10, 0, 10, 0, 7, '2018-12-24 05:59:02', 'Y', 'N', '', 'N', ''),
(4, 'Aswin', '9791329930', 'aswinnsh@gmail.com', '6772', 'BE', 'CSE', 'Apptitude', 10, 0, 10, 0, 7, '2018-12-24 06:12:30', 'Y', 'N', '', 'N', ''),
(5, 'Aswin', '9791329930', 'aswinnsh@gmail.com', '6772', 'BE', 'CSE', 'Technical', 10, 0, 10, 0, 7, '2018-12-24 06:18:20', 'Y', 'N', '', 'N', ''),
(6, 'Sharvin', '8765432109', 'prematix.rajesh@gmail.com', '123', 'BE', 'Computer Science and Engineering', 'Apptitude', 10, 9, 1, 1, 5, '2018-12-24 10:37:55', 'N', 'N', '', 'N', ''),
(7, 'Sharvin', '8765432109', 'prematix.rajesh@gmail.com', '123', 'BE', 'Computer Science and Engineering', 'Technical', 15, 15, 0, 5, 7, '2018-12-24 10:38:32', 'N', 'N', '', 'N', ''),
(8, 'Aswin', '9791329930', 'aswinnsh@gmail.com', '6772', 'BE', 'CSE', 'Apptitude', 10, 0, 10, 0, 5, '2018-12-24 10:49:05', 'Y', 'N', '', 'N', ''),
(9, 'Aswin', '9791329930', 'aswinnsh@gmail.com', '6772', 'BE', 'CSE', 'Technical', 15, 0, 15, 0, 7, '2018-12-24 10:49:11', 'Y', 'N', '', 'N', ''),
(10, 'Sonu', '9597993063', 'chandrakala@prematix.com', '123', 'BE', 'Computer Science and Engineering', 'Apptitude', 10, 10, 0, 4, 5, '2018-12-24 11:18:26', 'Y', 'N', '', 'N', ''),
(11, 'Sonu', '9597993063', 'chandrakala@prematix.com', '123', 'BE', 'Computer Science and Engineering', 'Technical', 15, 15, 0, 1, 7, '2018-12-24 11:19:47', 'Y', 'N', '', 'N', ''),
(12, 'Rajalakshmi', '9876543210', 'rajalakshmi@prematix.com', '123', 'BE', 'Computer Science and Engineering', 'Apptitude', 10, 7, 3, 2, 5, '2018-12-24 12:15:15', 'N', 'N', '', 'N', ''),
(13, 'Rajalakshmi', '9876543210', 'rajalakshmi@prematix.com', '123', 'BE', 'Computer Science and Engineering', 'Technical', 15, 6, 9, 2, 7, '2018-12-24 12:17:20', 'N', 'N', '', 'N', '');

-- --------------------------------------------------------

--
-- Table structure for table `testtime`
--

CREATE TABLE `testtime` (
  `sno` int(11) NOT NULL,
  `testtype` varchar(1000) NOT NULL,
  `questions` varchar(100) NOT NULL,
  `cutoff` varchar(1000) NOT NULL,
  `time` varchar(1000) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'Y',
  `createdby` varchar(1000) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testtime`
--

INSERT INTO `testtime` (`sno`, `testtype`, `questions`, `cutoff`, `time`, `status`, `createdby`, `createdon`) VALUES
(1, 'Apptitude', '10', '5', '10', 'Y', 'admin', '2018-12-19 11:43:48'),
(2, 'Technical', '15', '7', '30', 'Y', 'admin', '2018-12-20 06:42:35'),
(3, 'Coding', '2', '1', '30', 'Y', '', '2018-12-25 10:11:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codingresult`
--
ALTER TABLE `codingresult`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `testtime`
--
ALTER TABLE `testtime`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `codingresult`
--
ALTER TABLE `codingresult`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testtime`
--
ALTER TABLE `testtime`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
