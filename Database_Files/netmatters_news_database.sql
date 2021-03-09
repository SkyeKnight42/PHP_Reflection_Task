-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 05:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmatters_news_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_enquiry`
--

CREATE TABLE `contact_enquiry` (
  `id_number` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `telephone` int(11) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `news_updates` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(5) NOT NULL,
  `post_date` date NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(25) NOT NULL,
  `tab_title` varchar(20) NOT NULL,
  `tab_path` varchar(50) NOT NULL,
  `image_URL` text NOT NULL,
  `image_alt_text` varchar(128) NOT NULL,
  `author_name` varchar(128) NOT NULL,
  `author_image_URL` text NOT NULL,
  `author_image_alt` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_date`, `title`, `description`, `type`, `tab_title`, `tab_path`, `image_URL`, `image_alt_text`, `author_name`, `author_image_URL`, `author_image_alt`) VALUES
(1, '2020-10-13', 'September 2020 Notable Employee', 'The highlight of every month here at Netmatters is the announcement of the \"Notable of Notable Employees\". This award is given to a single employee who has gone above and beyond during the previous month. They have exceeded expectations in their day to day role or have been influential in the company’s success.\r\n\r\nEvery department manager is asked to nominate an employee from their department, who they feel has done exceptionally well during the course of the previous month. Each one of these employees is then considered as a candidate for this award. As the world begins to return to some kind of normality, our team all continue to adapt and deliver at the very highest levels. As ever, our notable nominees have stood out from the crowd and gone above and beyond.\r\n\r\nOur Notable of Notables in September has stepped up to help on one of the bigger Netmatters IT projects, our own admin system, and has done so with thought and consideration. This month&#39;s Notable of Notables is awarded to Stef Lynn-Smith!', 'bespoke', 'NEWS', 'View All&#58; Bespoke Software / News', 'september-2020-notable-n88L.jpg', 'Stefan Lynn&#8209;Smith Image', 'Netmatters Ltd', 'netmatters-ltd-VXAv.png', 'Netmatters Logo'),
(2, '2020-10-08', 'Securing a Role in The Tech Industry', 'The tech industry is one of the fastest growing in East Anglia. Technology has an impact on every area of our lives and businesses are investing heavily in software to futureproof themselves. That means there is a constant need for excellent software developers all of the time.\r\n\r\nFor someone who has never had any training as a software developer though, there can be significant barriers to securing one of these roles. Knowing where to start, and what skills are needed to successfully embark on this career is one of them.\r\n\r\nExperienced developers are snapped up, they are able to hit the ground running with minimal training – an attractive proposition for smaller businesses with limited budgets or time to get their products to market. However, as a tech enthusiast with a desire to break into this industry how do you do so? If you spend time gaining qualifications you lack the necessary “real-world” experience, and if you enter in a junior role you miss the chance to train for qualifications unless you try and study in your spare time – which becomes difficult if you are working full-time.\r\n\r\nLike many regional tech companies, Netmatters had fallen into this same pattern and were struggling to recruit talent at the rate we needed it to grow. It became apparent that we needed to do something to change the way we recruited and trained – we shifted our thinking and the Scion Scheme was born.', 'bespoke', 'NEWS', 'View All&#58; Bespoke Software / News', 'securing-a-role-BNOs.jpg', 'Person Writing Code', 'Netmatters Ltd', 'netmatters-ltd-VXAv.png', 'Netmatters Logo'),
(3, '2020-10-08', 'Business Development / Account Manager', 'Netmatters is a rapidly growing technology company offering a diverse range of products and services.\r\n\r\nThis is your chance to join the team, and to work with creative, hard-working individuals in a fast-paced, energising environment. Team members are expected to work hard and deliver results based on a proven system for managing work and time. Team members benefit from a generous bonus scheme based on company and personal performance. This position has no ceiling, the successful candidate can establish themselves within the business and become a key driver of success and receive the benefits this would bring.', 'it', 'CAREERS', 'View All&#58; IT Support / Careers', 'business-development-pAAs.jpg', 'Hiring Image', 'Elliott Peacock', 'elliott-peacock-w8vu.jpg', 'Elliott Peacock Image');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  MODIFY `id_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
