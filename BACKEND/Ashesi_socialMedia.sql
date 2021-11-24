-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 02:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ashesi_socialmedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `accountNo` int(11) NOT NULL,
  `my_id` int(11) DEFAULT NULL,
  `dateRegistered` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `chatbot_id` int(11) NOT NULL,
  `replies` varchar(300) DEFAULT NULL,
  `queries` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`chatbot_id`, `replies`, `queries`) VALUES
(1, 'Hello there 😁', 'hi|hello|hey'),
(2, 'I\'m fine thank you how about you', 'how are you|how are you doing|what\'s up|sup'),
(3, 'That\'s amazing', 'I\'m fine|I am fine|I\'m okay|I am okay|I\'m cool|I am cool|I\'m great|I am great|I\'m alright|I am alright|I\'m happy|I am happy'),
(4, 'Oh that\'s sad, feel better soon ☺️', 'I\'m not fine|I am not fine|I\'m not okay|I am not okay|I\'m not cool|I am not cool|I\'m not great|I am not great|I\'m not alright|I am not alright| I\'m sad| I am sad'),
(5, 'Splashy and all the basic functions are free.', 'Does it cost anything to use splashy?'),
(6, 'Splashy is mainly for Ashesi students and faculty', 'Who uses splashy?'),
(7, 'Click on the club’s tab > select the club you wish to join > on the club page click the join button', 'How do I join a club?'),
(8, 'You have to create an account by entering a name, a working e-mail address and password, and some obligatory information about yourself such as gender and date of birth.', 'What does it take to become a splashy User?'),
(9, 'There are many different tools and settings you use so it may be a bit confusing for the beginners, but if you try them out you will learn how it works.', 'Is it difficult to use splashy?'),
(10, 'Click on the post tab, fill in the details of your post and click the post button\r\n Who created splashy?\r\n', 'How do I make a post?'),
(11, 'The website was developed by Samantha Reindorf, Rodney Nayo, Hamed Traore and Nana Yaw Adjei Koranteng', ' Who created splashy?'),
(12, 'It was made in November 2021', 'When was Splashy made?'),
(13, 'After making a post you can view it on your timeline along with the posts of others\r\n\r\n', 'How do I view my post?'),
(14, 'Here is a list of FAQS ask away:\r\n• Does it cost anything to use splashy?\r\n• Who uses splashy?\r\n• What does it take to become a splashy User?\r\n• Is it difficult to use splashy?\r\n• How do I make a post?\r\n• Who created splashy?\r\n• When was Splashy made?\r\n• How do I view my post?\r\n', 'Help| I need help| I have a question'),
(15, 'You\'re welcome😉', 'Thank you|thanks|thank you|thankyou'),
(16, 'Goodbye🙋🏽‍♂️ | Bye 🙋🏽‍♂️', 'Goodbye | Bye | I am going | Later | Bye-bye| Bye '),
(17, 'So sorry to hear that 🤦‍♀️, type help and you may find something I can help you with 😁.', 'Not working well');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chat_id` bigint(20) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `chat_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `chat_details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(20) NOT NULL,
  `my_id` int(11) DEFAULT NULL,
  `post_id` int(20) DEFAULT NULL,
  `comment_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comment_details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(20) NOT NULL,
  `programName` varchar(20) DEFAULT NULL,
  `course_name` varchar(20) DEFAULT NULL,
  `semester_run` varchar(20) DEFAULT NULL,
  `year_run` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(20) NOT NULL,
  `eventOrganizer` varchar(100) NOT NULL,
  `eventName` varchar(100) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_time` time(2) DEFAULT NULL,
  `event_description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `eventOrganizer`, `eventName`, `event_date`, `event_time`, `event_description`) VALUES
(37, 'OTHERS', 'Happiness Conference', '2021-12-03', '14:09:00.00', 'A time to chillax, relax and feelax');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `my_id` int(11) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `join_place`
--

CREATE TABLE `join_place` (
  `full_name` varchar(50) DEFAULT NULL,
  `yeargroup` varchar(20) DEFAULT NULL,
  `club_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `join_place`
--

INSERT INTO `join_place` (`full_name`, `yeargroup`, `club_name`) VALUES
('Samantha Reindorf', '3', 'real-estate'),
('', '1', 'leo'),
('', '1', 'leo'),
('', '1', 'leo'),
('Flow', '4', 'tedx'),
('Flow', '4', 'tedx'),
('Flow', '4', 'tedx'),
('Flow', '4', 'tedx');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` bigint(20) NOT NULL,
  `post_id` int(20) DEFAULT NULL,
  `likes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `club_id` int(11) NOT NULL,
  `clubName` varchar(20) DEFAULT NULL,
  `club_image` varchar(50) DEFAULT NULL,
  `club_description` varchar(100) DEFAULT NULL,
  `upcoming_events` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`club_id`, `clubName`, `club_image`, `club_description`, `upcoming_events`) VALUES
(1, 'Leo Club', NULL, 'A cllub full of community service, leadership and impact', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(20) NOT NULL,
  `my_id` int(11) DEFAULT NULL,
  `post_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `post_details` text DEFAULT NULL,
  `post_image` varchar(20) DEFAULT NULL,
  `num_likes` int(11) DEFAULT NULL,
  `num_comments` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `my_id`, `post_time`, `post_details`, `post_image`, `num_likes`, `num_comments`) VALUES
(44, NULL, '2021-11-23 22:38:38', 'Hellpppppppppppppppppp', 'images/BANNER.jpeg', NULL, NULL),
(45, NULL, '2021-11-23 22:41:05', 'Hellpppppppppppppppppp', 'images/BANNER.jpeg', NULL, NULL),
(46, 1, '2021-11-23 22:41:54', 'Hellpppppppppppppppppp', 'images/BANNER.jpeg', NULL, NULL),
(47, 1, '2021-11-23 22:42:35', 'can you feeeel itttttttttttttt😆', 'images/WhatsApp Imag', NULL, NULL),
(48, 1, '2021-11-23 22:42:50', 'can you feeeel itttttttttttttt😆', 'images/WhatsApp Imag', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `my_id` int(11) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `my_id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `user_status` varchar(20) DEFAULT NULL,
  `telno` varchar(15) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`my_id`, `user_id`, `fname`, `lname`, `user_status`, `telno`, `email`, `password`) VALUES
(1, '9672023', 'Samantha', 'Kwaku', 'Student', '551584465', 'skwaku@gmail.com', 'Allot3i2021'),
(2, '69862023', 'Gabriel', 'Owusu', 'Student', '243491588', 'gabe@ashesi.edu.gh', 'gOwusu@40'),
(3, '123', 'Samantha', '788545', 'Student', '233551584465', 'samanthareindorf@outlook.com', 'graceup'),
(4, '9682023', 'Jason', 'Koomson', 'Student', '5771584465', 'jkoomson@ashesi.edu.gh', '4eva212021'),
(5, '0', '', '', NULL, '0', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accountNo`),
  ADD UNIQUE KEY `accountNo` (`accountNo`),
  ADD KEY `my_id` (`my_id`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`chatbot_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`),
  ADD UNIQUE KEY `chat_id` (`chat_id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD UNIQUE KEY `comment_id` (`comment_id`),
  ADD KEY `my_id` (`my_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `course_id` (`course_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD UNIQUE KEY `event_id` (`event_id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD KEY `my_id` (`my_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`club_id`),
  ADD UNIQUE KEY `club_id` (`club_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`),
  ADD KEY `my_id` (`my_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD KEY `my_id` (`my_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`my_id`),
  ADD UNIQUE KEY `my_id` (`my_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `chatbot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `my_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`my_id`) REFERENCES `users` (`my_id`);

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`my_id`),
  ADD CONSTRAINT `chats_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`my_id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`my_id`) REFERENCES `users` (`my_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);

--
-- Constraints for table `instructors`
--
ALTER TABLE `instructors`
  ADD CONSTRAINT `instructors_ibfk_1` FOREIGN KEY (`my_id`) REFERENCES `users` (`my_id`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`my_id`) REFERENCES `users` (`my_id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`my_id`) REFERENCES `users` (`my_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
