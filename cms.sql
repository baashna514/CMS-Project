-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 03:09 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Technology'),
(2, 'Life'),
(3, 'Medical'),
(4, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `date`, `name`, `username`, `post_id`, `email`, `website`, `image`, `comment`, `status`) VALUES
(1, 1012345688, 'Moini', 'baashna514', 2, 'moinabbas80@gmail.com', 'www.gettheedge.com', 'admin.jpg', 'This one is awesome post.', 'approve'),
(2, 1023456788, 'Moin', 'Baashna', 2, 'moin@hotmail.com', 'moin.com', 'admin.jpg', 'This is My Comment', 'approve'),
(3, 1526318061, 'Naeem', 'user', 1, 'naeem@gmail.com', 'www.hello.com', 'admin.jpg', 'Amazing Website With Wonderful Front End.', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `author_image` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `post_data` text NOT NULL,
  `views` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `date`, `title`, `author`, `author_image`, `image`, `categories`, `tags`, `post_data`, `views`, `status`) VALUES
(1, 1234567899, 'Google, CBSE Partner to Offer Access to Exam-Related Information on Search', 'Moin Abbas', 'admin.jpg', '1.gif', 'Technology', 'technology, education,google, google partnership,exam related information', 'Google partnered with the Central Board of Secondary Education (CBSE) to make finding results and other exam-related information easier and more reliable on Search.<br>\r\n                  Beginning with the JEE Main exam results that were to be made public on Monday evening, students can now quickly, securely and seamlessly locate their score in various exams on their smartphone or desktop using Google Search, the company said.<br>\r\n                  \"We are collaborating with Google for smooth dissemination of results through an easy and secure platform,\" Rama Sharma, Senior Public Relations Officer, CBSE, said in a statement.<br>\r\n                  Google has also worked closely with CBSE to ensure that the data is handled securely and used solely for the purpose of showing the results on its Search page. The feature will be live only for a short duration, the statement said.<br>\r\n                  \"With over 260 million students enrolled in more than 1.5 million schools across India, we believe having reliable, seamless, and safe access to education-related information is crucial,\" said Shilpa Agrawal, Product Manager, Google Search.', 14, 'publish'),
(2, 1345678590, 'Artificial intelligence (AI) could potentially result in a nuclear war by 2040', 'Moin Abbas', 'admin.jpg', '2.jpg', 'Technology', 'AI, artificial intelligence, nuclear war, 2040,', 'Artificial intelligence (AI) could potentially result in a nuclear war by 2040, according to a research paper by a U.S. think tank.\r\n\r\nThe paper, by the nonprofit Rand Corporation, warns that AI could erode geopolitical stability and remove the status of nuclear weapons as a means of deterrence.\r\nAI could also tempt nations to launch a pre-emptive strike against another nation to gain bargaining power, even if they have no intention of carrying out an attack, researchers said.', 12, 'publish'),
(3, 1234567890, '3D Model of a Human Cell', 'Moin Abbas', 'admin.jpg', '3.jpg', 'Medical', 'allen institue, 3D model,human cell, 3D human cell, artificial intelligence', 'Seeing inside the body, though, still presents a challenge. Yes, we have scans, stains, and microscopes, that let us glimpse o the body\'s working, but they offer only limited information.\r\nTo get a more thorough view of what\'s going on in individual cell, researchers at the Allen Institute turned to artificial intelligence to create the first complete 3D model of a Human cell that shows how all the different components and structures found within a cell fit and work together.', 13, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `salt` varchar(255) NOT NULL DEFAULT '$2y$10$quickbrownfoxjumpsover'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `date`, `first_name`, `last_name`, `username`, `email`, `image`, `password`, `role`, `details`, `salt`) VALUES
(1, 1012345688, 'Moin', 'Abbas', 'Baashna', 'moinabbas80@gmail.com', 'user1.jpg', '12345', 'admin', '', '$2y$10$quickbrownfoxjumpsover	'),
(3, 1526759354, 'Mohsin', 'Ali', 'Mohsin514', 'mohsin@gmail.com', 'user1.jpg', '$2y$10$quickbrownfoxjumpsoveeob1NkAIqYlnDNd6AAwE0Nv1BMtRiD26', 'author', '', '$2y$10$quickbrownfoxjumpsover'),
(6, 1526760955, 'Mohammad', 'Awais', 'awais305', 'awais305@gmail.com', '1.gif', '$2y$10$quickbrownfoxjumpsoveeob1NkAIqYlnDNd6AAwE0Nv1BMtRiD26', 'author', '', '$2y$10$quickbrownfoxjumpsover'),
(7, 1526761590, 'Haider', 'Ali', 'haider', 'haider@gmail.com', 'user1.jpg', '$2y$10$quickbrownfoxjumpsoveeob1NkAIqYlnDNd6AAwE0Nv1BMtRiD26', 'author', '', '$2y$10$quickbrownfoxjumpsover'),
(8, 1526762359, 'Zubair', 'Arshad', 'zubairarshad', 'zubair@gmail.com', 'admin.jpg', '$2y$10$quickbrownfoxjumpsoveeob1NkAIqYlnDNd6AAwE0Nv1BMtRiD26', 'author', '', '$2y$10$quickbrownfoxjumpsover'),
(9, 1526762531, 'Ahsan', 'Ali', 'ahsanali', 'ahsan@gmail.com', 'admin.jpg', '$2y$10$quickbrownfoxjumpsoveeob1NkAIqYlnDNd6AAwE0Nv1BMtRiD26', 'author', '', '$2y$10$quickbrownfoxjumpsover');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
