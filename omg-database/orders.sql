SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'Ericka Toledo', 'mikasa12', 'sun'),
(9, 'Ian Fandino', 'Ian14', 'mars'),
(10, 'Shammah Raquinio', 'Shams', 'earth'),
(12, 'Administrator', 'admin', '1234');



-- new added table from eri---

CREATE TABLE `tbl_cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `tbl_cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
-- --------------------------------------------------------
--
CREATE TABLE `tbl_messages` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `tbl_messages`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `tbl_messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;



CREATE TABLE `tbl_users` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(4, 'Coffee Series', '1.jpg', 'Yes', 'Yes'),
(5, 'Yogurt Series', '2.jpg', 'Yes', 'Yes'),
(6, 'Choco Series', '3.jpg', 'Yes', 'Yes'),
(8, 'Milktea Series', '', 'No', 'Yes');



CREATE TABLE `tbl_drinks` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tbl_drinks` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(1, 'Caramel Macchiato', 'Caramel Goodness Coffee', '69.00', 'caramel macchiato1.png', 4, 'Yes', 'Yes'),
(2, 'Cappuccino', 'Coffee based made with espresso and milk', '69.00', 'cappucino2.png', 4, 'Yes', 'Yes'),
(3, 'Mocha', 'With Icecream with Cream Cheese', '69.00', 'mocha3.png', 4, 'No', 'Yes'),
(4, 'Coffee Crumble ', 'With Icecream with Cream Cheese', '69.00', 'coffee crumble4.png', 4, 'Yes', 'Yes'),
(5, 'Blueberry Yogurt', 'Have a delight Blueberry Yogurt ', '69.00', 'bluebery yogurt1.png',5, 'Yes', 'Yes'),
(6, 'Strawberry Yogurt', 'Strawberry Goody', '69.00', 'strawberry yogurt2.png',5, 'No', 'No');

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(100) NOT NULL,
  `drink` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
   `method` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tbl_order` (`id`, `drink`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(1, 'Caramel Macchiato', '69.00', 3, '207.00', '2022-04-26 03:49:48', 'Cancelled', 'Naruto Uchiha', '09957774322', 'almamater12@gmail.com', 'Tokyo,Japan'),
(2, 'Cappuccino', '69.00', 4, '276.00', '2022-04-26 03:52:43', 'Delivered', 'Kelly Dillard', '09957774322', 'almamater12@gmail.com', 'Seoul Korea'),
(3, 'Mocha', '69.00', 2, '138.00', '2022-04-26 04:07:17', 'Delivered', 'Jana Bush', '09957774322', 'tydujy@mailinator.com', 'Manila,Philippines');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--

-- Indexes for table `tbl_drinks`
--
ALTER TABLE `tbl_drinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;


ALTER TABLE `tbl_drinks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
