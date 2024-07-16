-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 01:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onesource`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `usertype`, `status`) VALUES
(10, 'admin@gmail.com', '698d51a19d8a121ce581499d7b701668', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `project_type` varchar(250) NOT NULL,
  `loginid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `image`, `project_type`, `loginid`) VALUES
(4, 'Elite Tankship DMCC', '../project/Elite 2.jpg', 'upcoming', 10),
(5, 'Focal Shipping', '../project/focal 2.jpg', 'upcoming', 10),
(6, 'Gerard Kiosk', '../project/WhatsApp Image 2023-08-23 at 10.58.48 PM.jpg', 'upcoming', 10),
(7, 'Leila Heller Gallery', '../project/Gallery 1.jpg', 'upcoming', 10),
(8, 'Medor', '../project/IMG_0083.JPG', 'upcoming', 10),
(9, 'Restaurant', '../project/Restaurant View 1 (1).jpg', 'upcoming', 10),
(10, 'Victory school', '../project/sudheer 893.jpg', 'upcoming', 10),
(11, 'Villa works', '../project/WhatsApp Image 2023-03-22 at 10.24.55 AM.jpg', 'upcoming', 10),
(12, 'Al RAAS Clinic @ Karama', '../project/Al Raas Clinic  Entrance.jpg', 'upcoming', 10),
(13, 'Art Gallery CAfe @ AL Quoz', '../project/Coffe Shop.jpg', 'current', 10),
(14, 'Bhavans School @ Sharjah', '../project/view 2.jpg', 'current', 10),
(15, 'Design Research Studio @ Al Quoz', '../project/Spa View 1.jpg', 'current', 10),
(16, ' Restaurant @ City Walk', '../project/Restaurant 1.jpg', 'current', 10),
(17, 'White Square @JLT', '../project/Conference 1.jpg', 'current', 10),
(18, 'Time global', '../project/3.jpg', 'current', 10);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `loginid` int(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `loginid`, `address`, `mobile`, `confirm_password`) VALUES
(10, 'adminn', 10, 'null', '9562641523', '698d51a19d8a121ce581499d7b701668');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `loginid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `image`, `bio`, `loginid`) VALUES
(15, 'Designing 3D & 2D', '../service/Designing-3D-2D.jpg', 'Whether you\'re looking to enhance your brand with captivating graphics, tell your story through stunning illustrations, or elevate your online presence with sleek website layouts, our team of skilled designers is here to turn your vision into reality. With expertise in graphic design, illustration, and user interface design, we ensure that every project is not In the realm of 2D & 3D design, we offer a myriad of services tailored to your needs. just visually appealing but also communicates your message effectively to your audience.', 10),
(16, 'Turnkey Projects', '../service/TurneyKey Projects.jpeg', 'success, we pride ourselves on our ability to deliver turnkey solutions that exceed expectations. Our approach is collaborative, transparent, and client-focused, ensuring that your needs and objectives are always at the forefront of everything we do. Whether you\'re With a wealth of experience across various industries and a proven track record of seeking a partner for a single project or looking to establish a long -term relationship, we\'re here to provide the ex pertise and support you need to achieve your goals.', 10),
(17, 'Residential & Commercial Interior Works', '../service/Residential & commercial Interior.jpg', 'For residential projects, we understand that your home is more than just a place to live it\'s a reflection of your personality, your lifestyle, and your aspirations. Whether you\'re looking to revamp a single room or redesign your entire home, our team of talented designers is here to bring your vision to life. From cozy living rooms to luxurious bedrooms, we tailor every detail to suit your taste, ensuring that your home is not just beautiful but also a true expression of who you are. In the realm of commercial interiors, we know that first impressions matter. Whether you\'re designing a corporate office, a retail space, or a hospitality venue, we specialize in creating environments that leave a lasting impact on clients, customers, and guests alike. From sleek and modern to timeless and elegant, our designs are meticulously crafted to enhance your brand identity.', 10),
(18, 'Gypsum Partition & Ceiling', '../service/Gypsum Partition & Ceiling.jpeg', 'Gypsum partitions offer a flexible and cost-effective way to divide spaces, whether it\'s in a residential, commercial, or industrial setting. With our expertise in gypsum partitioning, we can create customized layouts that maximize space utilization while providing priv acy, soundproofing, and visual appeal. From open -plan offices to modern living spaces, our gypsum partitions are designed to meet the unique needs of every project, delivering both practicality and style in equal measure.', 10),
(19, 'Furniture and Kitchen Cabinets', '../service/Furniture & Kitchen .jpeg', 'In the realm of furniture, we believe that every piece should be a work of art, meticulously crafted to perfection. From luxurious sofas and elegant dining tables to stylish storage solutions, our furniture pieces are designed to enhance your home\'s aesthetic appeal while providing comfort and functionality for years to come Our bespoke kitchen cabinets are designed to optimize space, maximize storage, and create a beautiful backdrop for your culinary adventures. From sleek and modern to classic and timeless, our cabinets are tailored to suit your taste and lifestyle, with custom finishes, hardware, and accessories that elevate your kitchen to a whole new level of sophistic.', 10),
(20, 'Decking & Wooden Flooring', '../service/wooden-flooring.jpeg', 'When it comes to wooden flooring, we understand that nothing compares to the timeless appeal and warmth of natural wood underfoot. Our range of wooden flooring options includes everything from classic hardwoods like oak and maple to exotic species like teak and mahogany, each chosen for its unique grain patterns, rich colors, and lasting quality. Whether you \'re renovating a single room or outfitting an entire home, our wooden flooring solutions are designed to elevate your space with elegance and sophistication, creating a foundation that is as beautiful as it is enduring.', 10),
(21, 'Pargolas - Metal & Wood', '../service/Pergola metal & wood.jpeg', 'With a range of materials, finishes, and design options to choose from, our metal and wood pergolas can be customized to suit your taste, lifestyle, and budget. From powder -coated steel frames to handcrafted wooden beams, every detail is carefully chosen for its quality, durability, and aesthetic appeal, creating a timeless centerpiece that enhances your outdoor living experience for years to come.', 10),
(22, 'Villa & Majlis Work', '../service/Villa & Majilis Works.jpeg', 'Welcome to our world of exquisite villa and majlis work, where luxury meets craftsmanship to create spaces that embody elegance, comfort, and sophistication. From rich fabrics and ornate furnishings to intricate woodwork and intricate detailing, our majlis work is designed to impress and inspire, creating a setting that is both elegant and inviting.', 10),
(23, 'Glass & Aluminium Works', '../service/Glass and aluminium works.jpg', 'From residential to commercial projects, our glasswork is crafted to enhance the beauty and functionality of any environment, creating a seamless connection between indoors and out. Our aluminum work adds a touch of modern elegance to any space, with sle ek profiles and clean lines that complement the beauty of glass while providing strength, durability, and weather resistance.', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
