-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2025 at 07:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tours_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `travel_date` varchar(100) DEFAULT NULL,
  `travel_time` varchar(100) DEFAULT NULL,
  `hotel_name` varchar(255) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Pending',
  `booking_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `customer_id`, `location`, `travel_date`, `travel_time`, `hotel_name`, `price`, `status`, `booking_time`) VALUES
(1, 10, 'Cox’s Bazar Tour Package', '10 March TO 13 March', '10:00 PM - 6:00 AM', 'Sayeman Beach Resort', '5000', 'Accepted', '2025-04-28 12:54:13'),
(2, 10, 'Cox’s Bazar Tour Package', '10 March TO 13 March', '10:00 PM - 6:00 AM', 'Sayeman Beach Resort', '5000', 'Accepted', '2025-04-28 12:54:17'),
(6, 10, 'Cox’s Bazar Tour Package', '10 March TO 13 March', '10:00 PM - 6:00 AM', 'Sayeman Beach Resort', '3500', 'Accepted', '2025-04-28 13:02:37'),
(7, 10, 'Cox’s Bazar Tour Package', '10 March TO 13 March', '10:00 PM - 6:00 AM', 'Sayeman Beach Resort', '4500', 'Accepted', '2025-04-28 13:08:29'),
(8, 10, 'Cox’s Bazar Tour Package', '10 March TO 13 March', '10:00 PM - 6:00 AM', 'Sayeman Beach Resort', '4500', 'Rejected', '2025-04-28 13:09:07'),
(9, 10, 'Cox’s Bazar Tour Package', '10 March TO 13 March', '10:00 PM - 6:00 AM', 'Sayeman Beach Resort', '4500', 'Accepted', '2025-04-28 13:09:25'),
(10, 10, 'Sundarbans Tour Package', '10 April TO 12 April', '10:00 PM - 6:00 AM', 'Forest Eco Lodge', '9900', 'Rejected', '2025-04-28 14:44:53'),
(11, 10, 'Srimangal', '15 May 2025 ', '10:00 PM - 6:00 Ap ', 'Tea Resort & Eco Park ', '3360', 'Accepted', '2025-04-28 15:00:59'),
(12, 10, 'Amiakhum Waterfall', '10 April TO 12 April', '10:00 PM - 6:00 AM', 'Local Homestay ', '3850', 'Accepted', '2025-04-28 15:01:14'),
(13, 10, 'Kuakata', '15 May 2025 ', '10:00 PM - 6:00 Ap ', 'Kuakata Grand Hotel ', '3150', 'Accepted', '2025-04-30 05:26:38'),
(14, 10, 'Cox’s Bazar Tour Package', '10 March TO 13 March', '10:00 PM - 6:00 AM', 'Sayeman Beach Resort', '3750', 'Rejected', '2025-04-30 09:00:36'),
(15, 13, 'Saint Martin\'s Island Tour Package', '15 March TO 18 March', '11:00 PM - 7:00 AM', 'Blue Marine Resort / Coral View Resort', '4800', 'Accepted', '2025-04-30 09:43:10'),
(16, 13, 'Cox’s Bazar Tour Package', '10 March TO 13 March', '10:00 PM - 6:00 AM', 'Sayeman Beach Resort', '4000', 'Accepted', '2025-04-30 09:43:56'),
(17, 2, 'Sundarbans Tour Package', '10 April TO 12 April', '10:00 PM - 6:00 AM', 'Forest Eco Lodge', '8250', 'Accepted', '2025-07-13 14:35:52'),
(18, 1, 'Sundarbans Tour Package', '10 April TO 12 April', '10:00 PM - 6:00 AM', 'Forest Eco Lodge', '8800', 'Pending', '2025-07-20 16:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text DEFAULT NULL,
  `location` varchar(50) NOT NULL,
  `travel_by` varchar(50) NOT NULL,
  `hotelType` varchar(50) NOT NULL,
  `hotelName` varchar(255) NOT NULL,
  `days` varchar(20) NOT NULL,
  `guests` int(11) NOT NULL,
  `arrivals` date NOT NULL,
  `totalCost` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `customer_id` int(11) DEFAULT NULL,
  `leaving` date DEFAULT NULL,
  `status` enum('Pending','Accepted','Rejected') DEFAULT 'Pending',
  `booking_date` date DEFAULT NULL,
  `package_id` varchar(100) DEFAULT NULL,
  `travel_date` date DEFAULT NULL,
  `travel_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `phone`, `address`, `location`, `travel_by`, `hotelType`, `hotelName`, `days`, `guests`, `arrivals`, `totalCost`, `created_at`, `customer_id`, `leaving`, `status`, `booking_date`, `package_id`, `travel_date`, `travel_time`) VALUES
(3, 'SM Sanaullah', 'smsanaullah0099@gmail.com', '01815463141', 'mohammadpur', 'cox', 'Ac Bus', '5 Star', 'Long Beach Hotel', '3days', 1, '2025-04-24', '15,600 Tk', '2025-04-23 04:56:09', 10, NULL, 'Accepted', NULL, NULL, NULL, NULL),
(4, 'SM Sanaullah', 'smsanaullah0099@gmail.com', '01815463141', 'mohammadpur', 'sajek', 'Train', '5 Star', 'Luxury Hilltop Resort', '3days', 1, '2025-05-01', '14,550 Tk', '2025-04-23 06:07:21', 10, NULL, 'Accepted', NULL, NULL, NULL, NULL),
(5, 'SM Sanaullah', 'smsanaullah0099@gmail.com', '01815463141', 'mohammadpur', 'sundarban', 'Ac Bus', '5 Star', 'Jungle Emperor Resort', '3days', 1, '2025-05-01', '18,600 Tk', '2025-04-23 06:10:37', 10, NULL, 'Accepted', NULL, NULL, NULL, NULL),
(6, 'Rifat', 'rifat@gmail.com', '01715463141', 'old Dhaka', 'cox', 'Air', '5 Star', 'Sayyman Beach Resort', '5days', 2, '2025-04-25', '65,000 Tk', '2025-04-23 06:24:45', 2, NULL, 'Accepted', NULL, NULL, NULL, NULL),
(7, 'SM Sanaullah', 'smsanaullah0099@gmail.com', '01815463141', 'mohammadpur', 'saint', 'Train', '5 Star', 'Saint Martin Grand Resort', '3days', 1, '2025-04-26', '15,450 Tk', '2025-04-25 17:34:14', 10, NULL, 'Accepted', NULL, NULL, NULL, NULL),
(8, 'SM Sanaullah', 'smsanaullah0099@gmail.com', '09876543456', 'mohammadpur', 'saint', 'Bus', '3 Star', 'Saint Martin Eco Resort', '3days', 2, '2025-05-01', '20,700 Tk', '2025-04-26 14:48:38', 10, NULL, 'Accepted', NULL, NULL, NULL, NULL),
(9, 'kawser', 'kawser@gmail.com', '01888654397', 'mohammadpur', 'sajek', 'Train', '5 Star', 'Luxury Hilltop Resort', '5days', 2, '2025-05-01', '48,500 Tk', '2025-04-28 10:31:31', 11, NULL, 'Accepted', NULL, NULL, NULL, NULL),
(10, 'Rahat', 'rahat@gmail.com', '018976544567', 'mohammadpur', 'cox', 'Bus', '3 Star', 'Hill Tower Hotel & Resort', '3days', 7, '2025-05-09', '61,950 Tk', '2025-04-30 09:47:24', 13, NULL, 'Accepted', NULL, NULL, NULL, NULL),
(11, 'Sana', 'sanaullah@gmail.com', '01815463141', 'mohammadpur', 'sajek', 'Ac Bus', '5 Star', 'Sky View Luxury Resort', '3days', 2, '2025-07-30', '32,400 Tk', '2025-07-20 16:29:22', 1, NULL, 'Pending', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `email`, `phone_number`, `address`, `password`) VALUES
(1, 'Sana', 'sanaullah@gmail.com', '08767893', 'hrtegrfwea', '$2y$10$CGq3Ly542r3VJy39F1T1vOmPWl6RwDF6rVutp48e5ZEbBfWJq/..C'),
(2, 'rifat', 'rifat@gmail.com', '08767893', 'gbsvfd', '$2y$10$GfiCgpYmbhBVGPfW8JVNZuOaziOviXq.zbqY5SZcLznfXZ4jvEs2e'),
(9, 'Sanaullah', 'sanaullah098@gmail.com', '0987698', 'iuagskdfl', '$2y$10$Ep8FS4dGl36udc1SWbZha./zrBPj/MiqNjHm3x8vmDagbv0U2a1OS'),
(10, 'SM Sanaullah', 'smsanaullah0099@gmail.com', '01815463141', 'mohammadpur', '$2y$10$PpRheKxdBrr6LTnlgV4bBe8EvaaetQ0ujk5e33xZ3jvbQV7vzk8ue'),
(11, 'kawser', 'kawser@gmail.com', '01888654387', 'Mohammadpur', '$2y$10$4RKTijbMBREgdvVYaog/aup51n6aFCtYg5HxnOeEzG7PPCyoK6u0C'),
(12, 'Sana', 'sazzad12@gmail.com', '01833503069', 'fth', '$2y$10$gQ9Zo7pAXIEjyc9V7sSP9OdSOrC3LVUPAh7bKlZpECy4s7vaxln/O'),
(13, 'Rahat', 'rahat@gmail.com', '0189789650', 'mohamadpur', '$2y$10$98A2KbLF49tiNmpA0WK80u6vcUbqqQqfo/71IrM55DejNGLlTO1du');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `review_text` text NOT NULL,
  `rating` int(11) NOT NULL CHECK (`rating` between 1 and 5),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','approved') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `customer_id`, `booking_id`, `review_text`, `rating`, `created_at`, `status`) VALUES
(7, 10, 5, 'good tour', 5, '2025-04-25 17:31:46', 'approved'),
(8, 2, 6, 'amazing', 5, '2025-04-25 17:43:31', 'approved'),
(10, 10, 7, 'onek valo lagshe apnader sathe tour a jete pere. next time abar jabo apnader sathe insha\'Allah.', 5, '2025-04-25 18:37:11', 'approved'),
(11, 11, 9, 'excellent  tour. Thanks cholo ghuriFiri', 5, '2025-04-28 10:33:32', 'approved'),
(15, 10, 5, 'Good tours cholo ghurifiri', 4, '2025-04-30 09:51:22', 'approved'),
(16, 1, 11, 'sdg s ghh sd sdg', 5, '2025-07-24 11:53:54', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `reviews_ibfk_2` (`booking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
