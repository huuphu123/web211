-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 01:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btl_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `number`, `user_id`) VALUES
(8, 2, 1, 1),
(9, 3, 1, 1),
(15, 1, 1, 4),
(21, 1, 3, 7),
(22, 3, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Mobile Phone'),
(2, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `block` tinyint(1) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `news_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `parent_comment` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `date`, `block`, `content`, `news_id`, `product_id`, `user_id`, `parent_comment`) VALUES
(1, '2022-05-30 00:00:00', 0, 'Good and stable', NULL, 1, 1, NULL),
(2, '2022-05-30 00:00:00', 0, 'Not bad', NULL, 2, 1, NULL),
(4, '2022-05-30 00:00:00', 0, 'Brilliant News !', 1, NULL, 1, NULL),
(7, '2022-05-30 00:00:00', 0, 'Nice', 1, NULL, 3, NULL),
(8, '2022-06-19 01:21:01', 0, 'PERFECT PRODUCT !', NULL, 1, 1, NULL),
(9, '2022-06-19 03:11:33', 0, 'Cannot Wait', 1, NULL, 4, NULL),
(10, '2022-06-19 03:26:29', 0, 'Bad product', NULL, 2, 4, 2),
(11, '2022-06-19 03:26:50', 0, 'Bad product need to improve', NULL, 2, 4, NULL),
(12, '2022-06-19 03:27:03', 0, ' should not buy it', NULL, 2, 4, 2),
(15, '2022-06-19 03:41:09', 0, 'Lovely LAPTOP', NULL, 5, 6, NULL),
(16, '2022-06-19 03:41:44', 0, 'Good laptop !', 2, NULL, 6, NULL),
(17, '2022-06-19 04:15:31', 0, 'beautiful phone', NULL, 1, 7, NULL),
(18, '2022-06-19 04:15:45', 0, 'comment', NULL, 1, 7, 1),
(19, '2022-06-19 04:15:50', 0, 'ssss', NULL, 1, 7, 1),
(20, '2022-06-19 04:15:52', 0, 'ssssss', NULL, 1, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `address`) VALUES
(1, 'BBargain', '323, Pham Van chieu'),
(2, 'FTU', 'Thành phố Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `block` tinyint(1) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `block`, `img`, `title`, `description`, `content`, `date`) VALUES
(1, 0, 'public/uploads/news/ae6f357adc.jpg', 'God of War Ragnarok Release Date', NULL, 'God of War Ragnarok is officially slated to release sometime this year via PS4 and PS5. The million-dollar question is when exactly? There has been a metric ton of speculation and rumors claiming the game is going to be delayed to 2023, but so far nothing has come of any of this scuttlebutt. And the longer this remains the case, the more likely the game is going to release this year. To this end, it looks like it may end up releasing in October.  \r\n\r\nAn officially licensed God of War Ragnarok Calm and Reasonable Premium Tee from J!NX is set to release in \"October 2022.\" The listing for the merchandise notes this is \"subject to change,\" but it`s interesting it has narrowed down the \"2022\" window to October. This could be guesswork or a mistake, or it could be a bonafide leak. Unfortunately, there`s no way to tell, but the listing has caught the attention of PlayStation fans. \r\n\r\nThe speculation making the rounds alongside this discovery is that merchandise isn`t going to release for the game before it`s even out, and while this is a reasonable conclusion to draw, there`s actually been quite a few instances where merchandise for a product has released before that product. It`s not the norm, but it happens.', '2022-05-30 00:00:00'),
(2, 0, 'public/uploads/news/672bbccbca.jpg', 'Lenovo Legion 7 Review', NULL, 'It`s hard not to have high expectations for the Lenovo Legion 7. The Lenovo Legion 7i, its Intel-based sibling, is one of the most powerful machines on the market, with a tremendous 16-inch display. The Legion 7 (note the lack of an i) is an AMD-equivalent of that system ($1,439.99 to start, $2,649.99 as tested.) The Legion 7 retains the design and some of the hardware of our previous review unit, like an RTX 3080, 32GB of DDR4 RAM, and 1TB of SSD storage. But this time, it is using a Ryzen 9 5900HX, one of AMD`s highest-end mobile processors. \r\n\r\nWith its Intel-based sibling sitting firmly as one of the best gaming laptops for its power, design, and price, we anticipated that the same would be the case for our review of the AMD-powered Legion 7. It`s not a perfect laptop, but we were pretty pleased.', '2022-05-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `type` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `date`, `money`, `user_id`, `name`, `phone`, `location`, `type`) VALUES
(1, '2022-06-18 23:18:47', 3000, 1, 'Khang Nguyen', '0904473064', '323, Pham van chieu', 'Paypal'),
(2, '2022-06-19 03:29:16', 4000, 4, 'Phu Pham', '09022222', 'VN', 'Momo'),
(3, '2022-06-19 04:16:47', 8000, 7, 'Tung', '0904473064', 'Vn', 'Momo');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `img` varchar(255) DEFAULT 'public/uploads/product/product.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `price`, `quantity`, `name`, `category_id`, `content`, `img`) VALUES
(1, 2000, 40, 'Iphone 12 Mini', 1, 'Apple new Iphone', 'public/uploads/product/e495986988.png'),
(2, 1000, 48, 'Samsung S21', 1, 'Samsung phone', 'public/uploads/product/7591ae3332.png'),
(3, 1000, 48, 'Samsung Galaxy S22', 1, 'Samsung flagship ', 'public/uploads/product/a74c7fa3bb.png'),
(4, 600, 50, 'Iphone SE 2022', 1, 'Compact but strong', 'public/uploads/product/2c30f86c60.png'),
(5, 2000, 50, 'HP Victus 16', 2, 'Gaming beast', 'public/uploads/product/ce9cd2bb3d.png'),
(6, 1000, 48, 'Dell Vostro 3400', 2, 'Laptop for Business', 'public/uploads/product/cd0a910211.png'),
(7, 2000, 50, 'Microsoft Surface Pro 7', 2, 'Luxury Tablet from Microsoft', 'public/uploads/product/543bc97b65.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT 'public/uploads/user/client.jpg',
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `img`, `name`, `age`, `location`, `phone`, `password`) VALUES
(1, 'user@hcmut.edu.vn', 'public/uploads/user/client.jpg', 'Nguyen Van A', 20, NULL, '0123456789', '1234567'),
(3, 'user2@hcmut.edu.vn', 'public/uploads/user/client.jpg', 'Nguyen Van C', 40, NULL, '0123456702', '01234567'),
(4, 'puzzle.kn@gmail.com', 'public/uploads/user/30bf68f613.jpg', 'Nguyen Huu Khang', 20, 'VN', '0904473064', '123456'),
(6, 'hang123@gmail.com', 'public/uploads/user/faba27b78e.jpg', 'Nguyen Phuong Hang', 60, 'VN', '0904473064', '123456'),
(7, 'ss@gmail.com', 'public/uploads/user/a3e2d005f1.jpeg', 'nguyen thanh tung', 22, 'Vn', '0904473064', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `parent_comment` (`parent_comment`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`parent_comment`) REFERENCES `comment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_4` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
