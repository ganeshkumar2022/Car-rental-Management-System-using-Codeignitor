-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 09:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `user_id`, `name`) VALUES
(4, 2, 'Air Conditioner'),
(5, 2, 'Power Door Locks'),
(6, 2, 'Antilock Braking System'),
(7, 2, 'CD Player'),
(66, 4, 'Air Conditioner'),
(67, 4, 'Power Door Locks'),
(68, 4, 'Antilock Braking System'),
(69, 4, 'Brake Assist'),
(70, 5, 'Air Conditioner'),
(71, 5, 'Power Door Locks'),
(72, 5, 'Power Steering'),
(73, 5, 'Driver Airbag'),
(74, 5, 'CD Player'),
(75, 5, 'Central Locking');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bid` int(11) NOT NULL,
  `from_date` varchar(30) NOT NULL,
  `to_date` varchar(30) NOT NULL,
  `car_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Not Confirm yet',
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bid`, `from_date`, `to_date`, `car_id`, `user_id`, `message`, `status`, `reading_time`) VALUES
(1, '10/02/2023', '12/02/2023', 4, 5, 'i want two days', 'Not Confirm yet', '2023-06-11 11:00:58'),
(8, '13/05/2023', '17/052023', 2, 5, 'i want three days car ', 'Cancelled', '2023-06-12 02:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `create_time` varchar(50) NOT NULL,
  `update_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `create_time`, `update_time`) VALUES
(1, 'bmw', '01-06-2023 10:41:59am Thursday', ''),
(2, 'toyota', '01-06-2023 10:42:09am Thursday', ''),
(3, 'aadi', '01-06-2023 10:42:15am Thursday', '02-06-2023 10:08:40am Friday'),
(9, 'maruti', '04-06-2023 01:03:54pm Sunday', '');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `overview` varchar(200) NOT NULL,
  `price` varchar(30) NOT NULL,
  `fuel` varchar(30) NOT NULL,
  `year` int(11) NOT NULL,
  `seat` varchar(30) NOT NULL,
  `myimage1` varchar(50) NOT NULL,
  `myimage2` varchar(50) NOT NULL,
  `myimage3` varchar(50) NOT NULL,
  `myimage4` varchar(50) NOT NULL,
  `myimage5` varchar(50) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `title`, `brand`, `overview`, `price`, `fuel`, `year`, `seat`, `myimage1`, `myimage2`, `myimage3`, `myimage4`, `myimage5`, `create_time`) VALUES
(2, 'BMW X3', '1', 'It looks sharp, gets useful tech and features on the inside, and while the ride quality is a bit firm', '2000', 'diesel', 2023, '5', './uploads/bmwx31.jfif', './uploads/bmwx32.jfif', './uploads/bmwx33.jfif', './uploads/bmwx34.jfif', './uploads/bmwx35.jfif', '2023-06-05 03:47:04'),
(4, 'Maruti XL 5', '9', '    The XL5 is expected to come with features such as 15-inch alloy wheels, projector headlamps with LED DRLs, and LED elements in its tail lamps           ', '4000', 'diesel', 2023, '4', './uploads/marutixl51.jfif', './uploads/marutixl52.jfif', './uploads/marutixl53.jfif', './uploads/marutixl54.jfif', './uploads/marutixl55.jfif', '2023-06-07 03:44:23'),
(5, 'Aadi a4', '3', 'he Audi A4 earns impressive crash-test ratings. According to the National Highway Traffic Safety Administration (NHTSA)', '2300', 'petrol', 2022, '5', './uploads/aadia41.jfif', './uploads/aadia42.jfif', './uploads/aadia43.jfif', './uploads/aadia44.jfif', './uploads/aadia45.jfif', '2023-06-07 20:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `companyinfo`
--

CREATE TABLE `companyinfo` (
  `id` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companyinfo`
--

INSERT INTO `companyinfo` (`id`, `address`, `email`, `mobile`) VALUES
(1, '54/2 chidambaram, chennai .', 'ram@gmail.com', '944877855');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `mobile`, `message`, `reading_time`) VALUES
(1, 'ganesh', 'ganesh@gmail.com', '74827689597', 'hi', '2023-06-15 20:59:29'),
(9, 'nishitha', 'nishitha@gmail.com', '9886764242', 'i want the car for 7 days', '2023-06-15 21:04:45'),
(10, 'a', 'a@gmail.com', '1', '1', '2023-06-15 21:05:06'),
(11, 'a', 'a@gmail.com', '1', '1', '2023-06-15 21:05:28'),
(12, 'a', 's@gmail.com', 's', 's', '2023-06-15 21:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dob` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `mobile`, `email`, `password`, `reg_date`, `dob`, `address`, `country`, `city`) VALUES
(1, 'ganesh', '9876543212', 'ganesh@gmail.com', '123', '2023-06-02 03:30:13', '2023-05-17', '      t nagar            ', 'india', 'chennai'),
(2, 'ramya', '9996778521', 'ramya@gmail.com', '1234', '2023-05-11 06:21:41', '', '', '', ''),
(3, 'molly stewart', '97678768768', 'molly@gmail.com', '123', '2023-05-14 03:28:57', '', '', '', ''),
(4, 'ram', '975746574', 'ram@gmail.com', '123', '2023-05-16 20:02:41', '', '', '', ''),
(5, 'keerthi', '86482784798', 'keerthi@gmail.com', '1234', '2023-06-10 19:16:15', '2001-05-03', 'mettu kundu', 'india', 'madurai'),
(6, 'aishwarya', '986574623', 'aishu@gmail.com', '123', '2023-06-07 20:31:13', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`, `reading_time`) VALUES
(4, 'nishithakutty@gmail.com', '2023-06-14 04:38:59'),
(5, 'aishwarya08@gmail.com', '2023-06-14 04:42:41'),
(7, 'oi@gmail.com', '2023-06-15 21:42:55');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `tid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Waiting for approval',
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`tid`, `user_id`, `message`, `status`, `reading_time`) VALUES
(6, 2, 'hello how are you', 'active', '2023-06-13 04:33:40'),
(9, 1, '    hi your service is very amazing', 'active', '2023-06-13 04:29:25'),
(12, 1, 'service charge is too costly', 'active', '2023-06-13 04:33:42'),
(13, 6, 'your service is amazing', 'active', '2023-06-13 04:28:32'),
(14, 5, 'hi your service is very amazing keep it up', 'active', '2023-06-13 04:33:45'),
(15, 1, 'oi loosu', 'Waiting for approval', '2023-06-14 04:03:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companyinfo`
--
ALTER TABLE `companyinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `companyinfo`
--
ALTER TABLE `companyinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
