-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2020 at 04:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toDoList`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(255) NOT NULL,
  `course` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `deadline` date NOT NULL,
  `atTime` time NOT NULL,
  `submitted` tinyint(1) NOT NULL,
  `personal` tinyint(1) NOT NULL,
  `new` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `course`, `name`, `description`, `deadline`, `atTime`, `submitted`, `personal`, `new`) VALUES
(1, 'HCI', 'Start Prototype', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque quis mi sit amet posuere. Nunc massa enim, pharetra quis dapibus vitae, mollis ac arcu. Nam condimentum tellus at consectetur faucibus. In lacus dui, accumsan ac arcu eu, consequat ultrices ipsum. Donec efficitur a dui quis faucibus. Sed purus elit, iaculis ac sem eu, condimentum sollicitudin lectus. Suspendisse potenti. Mauris gravida sed arcu ac porta. Nulla finibus ligula id nisl volutpat, vitae imperdiet ex eleifend. Aliquam tempus mi est, pharetra elementum neque pretium ac. Aliquam semper, lacus eget gravida mollis, nibh ex gravida nisi,', '2020-06-10', '23:59:00', 0, 0, 0),
(2, 'HCI', '10. User Evaluation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque quis mi sit amet posuere. Nunc massa enim, pharetra quis dapibus vitae, mollis ac arcu. Nam condimentum tellus at consectetur faucibus. In lacus dui, accumsan ac arcu eu, consequat ultrices ipsum. Donec efficitur a dui quis faucibus. Sed purus elit, iaculis ac sem eu, condimentum sollicitudin lectus. Suspendisse potenti. Mauris gravida sed arcu ac porta. Nulla finibus ligula id nisl volutpat, vitae imperdiet ex eleifend. Aliquam tempus mi est, pharetra elementum neque pretium ac. Aliquam semper, lacus eget gravida mollis, nibh ex gravida nisi', '2020-06-17', '23:59:00', 0, 0, 1),
(4, 'HCI', '11. Project: Final Presentation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque quis mi sit amet posuere. Nunc massa enim, pharetra quis dapibus vitae, mollis ac arcu. Nam condimentum tellus at consectetur faucibus. In lacus dui, accumsan ac arcu eu, consequat ultrices ipsum. Donec efficitur a dui quis faucibus. Sed purus elit, iaculis ac sem eu, condimentum sollicitudin lectus. Suspendisse potenti. Mauris gravida sed arcu ac porta. Nulla finibus ligula id nisl volutpat, vitae imperdiet ex eleifend. Aliquam tempus mi est, pharetra elementum neque pretium ac. Aliquam semper, lacus eget gravida mollis, nibh ex gravida nisi', '2020-06-17', '23:59:00', 0, 0, 0),
(6, 'HCI', '12. User Evaluation Analysis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque quis mi sit amet posuere. Nunc massa enim, pharetra quis dapibus vitae, mollis ac arcu. Nam condimentum tellus at consectetur faucibus. In lacus dui, accumsan ac arcu eu, consequat ultrices ipsum. Donec efficitur a dui quis faucibus. Sed purus elit, iaculis ac sem eu, condimentum sollicitudin lectus. Suspendisse potenti. Mauris gravida sed arcu ac porta. Nulla finibus ligula id nisl volutpat, vitae imperdiet ex eleifend. Aliquam tempus mi est, pharetra elementum neque pretium ac. Aliquam semper, lacus eget gravida mollis, nibh ex gravida nisi', '2020-06-22', '23:59:00', 0, 0, 0),
(7, 'HCI', 'Essay: Evaluating Interactive Systems (Individual Assignment)', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque quis mi sit amet posuere. Nunc massa enim, pharetra quis dapibus vitae, mollis ac arcu. Nam condimentum tellus at consectetur faucibus. In lacus dui, accumsan ac arcu eu, consequat ultrices ipsum. Donec efficitur a dui quis faucibus. Sed purus elit, iaculis ac sem eu, condimentum sollicitudin lectus. Suspendisse potenti. Mauris gravida sed arcu ac porta. Nulla finibus ligula id nisl volutpat, vitae imperdiet ex eleifend. Aliquam tempus mi est, pharetra elementum neque pretium ac. Aliquam semper, lacus eget gravida mollis, nibh ex gravida nisi', '2020-07-01', '23:59:00', 0, 0, 1),
(17, 'HCI ', 'Finish Back-end', 'Finish the server-side of the implementation', '2020-06-15', '23:59:00', 0, 0, 0),
(18, 'HCI', 'Exam', 'This is not really a exam, just a test.', '2020-07-03', '23:59:00', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `VUEvent`
--

CREATE TABLE `VUEvent` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `eventDescription` longtext NOT NULL,
  `eventDate` date NOT NULL,
  `eventTime` time NOT NULL,
  `location` text NOT NULL,
  `studyAssociation` text NOT NULL,
  `attends` tinyint(1) NOT NULL,
  `private` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `VUEvent`
--

INSERT INTO `VUEvent` (`id`, `name`, `eventDescription`, `eventDate`, `eventTime`, `location`, `studyAssociation`, `attends`, `private`) VALUES
(1, 'Irish Borrel', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque quis mi sit amet posuere. Nunc massa enim, pharetra quis dapibus vitae, mollis ac arcu. Nam condimentum tellus at consectetur faucibus. In lacus dui, accumsan ac arcu eu, consequat ultrices ipsum. Donec efficitur a dui quis faucibus. Sed purus elit, iaculis ac sem eu, condimentum sollicitudin lectus. Suspendisse potenti. Mauris gravida sed arcu ac porta. Nulla finibus ligula id nisl volutpat, vitae imperdiet ex eleifend. Aliquam tempus mi est, pharetra elementum neque pretium ac. Aliquam semper, lacus eget gravida mollis, nibh ex gravida nisi', '2020-06-20', '18:00:00', 'STORM Room', 'STORM', 0, 0),
(2, 'VU Festival', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque quis mi sit amet posuere. Nunc massa enim, pharetra quis dapibus vitae, mollis ac arcu. Nam condimentum tellus at consectetur faucibus. In lacus dui, accumsan ac arcu eu, consequat ultrices ipsum. Donec efficitur a dui quis faucibus. Sed purus elit, iaculis ac sem eu, condimentum sollicitudin lectus. Suspendisse potenti. Mauris gravida sed arcu ac porta. Nulla finibus ligula id nisl volutpat, vitae imperdiet ex eleifend. Aliquam tempus mi est, pharetra elementum neque pretium ac. Aliquam semper, lacus eget gravida mollis, nibh ex gravida nisi', '2020-06-22', '14:00:00', 'Main Building', 'VU', 0, 0),
(3, 'Minor Fair', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque quis mi sit amet posuere. Nunc massa enim, pharetra quis dapibus vitae, mollis ac arcu. Nam condimentum tellus at consectetur faucibus. In lacus dui, accumsan ac arcu eu, consequat ultrices ipsum. Donec efficitur a dui quis faucibus. Sed purus elit, iaculis ac sem eu, condimentum sollicitudin lectus. Suspendisse potenti. Mauris gravida sed arcu ac porta. Nulla finibus ligula id nisl volutpat, vitae imperdiet ex eleifend. Aliquam tempus mi est, pharetra elementum neque pretium ac. Aliquam semper, lacus eget gravida mollis, nibh ex gravida nisi', '2020-06-18', '18:00:00', 'Medical Faculty', 'VU', 0, 0),
(11, 'Franco', 'Have Lunch', '2020-06-17', '10:00:00', 'Cafeteria', 'NULL', 0, 1),
(13, 'Eduardo', 'play football', '2020-06-15', '15:00:00', 'wiskunde building main entrance', 'NULL', 0, 1),
(14, 'William', 'Study together', '2020-06-12', '12:40:50', '2nd floor library', 'NULL', 0, 1),
(15, 'Coding Competition', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque quis mi sit amet posuere. Nunc massa enim, pharetra quis dapibus vitae, mollis ac arcu. Nam condimentum tellus at consectetur faucibus. In lacus dui, accumsan ac arcu eu, consequat ultrices ipsum. Donec efficitur a dui quis faucibus. Sed purus elit, iaculis ac sem eu, condimentum sollicitudin lectus. Suspendisse potenti. Mauris gravida sed arcu ac porta. Nulla finibus ligula id nisl volutpat, vitae imperdiet ex eleifend. Aliquam tempus mi est, pharetra elementum neque pretium ac. Aliquam semper, lacus eget gravida mollis, nibh ex gravida nisi', '2020-06-11', '18:00:00', 'STORM ROOM', 'STORM', 0, 0),
(16, 'End of Year Celebration', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque quis mi sit amet posuere. Nunc massa enim, pharetra quis dapibus vitae, mollis ac arcu. Nam condimentum tellus at consectetur faucibus. In lacus dui, accumsan ac arcu eu, consequat ultrices ipsum. Donec efficitur a dui quis faucibus. Sed purus elit, iaculis ac sem eu, condimentum sollicitudin lectus. Suspendisse potenti. Mauris gravida sed arcu ac porta. Nulla finibus ligula id nisl volutpat, vitae imperdiet ex eleifend. Aliquam tempus mi est, pharetra elementum neque pretium ac. Aliquam semper, lacus eget gravida mollis, nibh ex gravida nisi', '2020-06-29', '01:00:00', 'VU Campus', 'VU', 0, 0),
(17, 'Oskar', 'play futsal', '2020-06-14', '10:00:00', 'STORM', 'NULL', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `VUEvent`
--
ALTER TABLE `VUEvent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `VUEvent`
--
ALTER TABLE `VUEvent`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
