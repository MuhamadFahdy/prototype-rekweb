-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 10:13 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasbesar`
--

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `deskripsi_barang` varchar(255) NOT NULL,
  `harga_barang` varchar(255) NOT NULL,
  `img_barang` text NOT NULL,
  `brand_barang` varchar(255) NOT NULL,
  `category_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_barang`, `nama_barang`, `deskripsi_barang`, `harga_barang`, `img_barang`, `brand_barang`, `category_barang`) VALUES
(42, 'Acer V6820i 4K UHD DLP Projector', 'Contrast Ratio: 10,000:1 Aspect Ratio: 16:9 (Native), 4:3 (Compatible) Throw Ratio: 1.21 (75', '15402485', 'pro1.jpg', 'ACER', 'projector'),
(43, 'Acer Chromebook 11 ', 'Chrome OS\r\nIntel® Celeron® N3350 processor Dual-core 1.10 GHz\r\n11.6\" HD (1366 x 768) 16:9 IPS\r\nIntel® HD Graphics 500 with Shared Memory\r\n4 GB, LPDDR4\r\n32 GB Flash Memory', '3345044', 'ch.jpg', 'ACER', 'laptop '),
(44, 'Acer Aspire 3', 'Windows 10 Home\r\nAMD A4-9120e processor Dual-core 1.50 GHz\r\nAMD Radeon™ R3 Graphics shared memory\r\n14\" HD (1366 x 768) 16:9\r\n4 GB, DDR4 SDRAM\r\n128 GB SSD', '3485004', 'as.jpg', 'ACER', 'laptop'),
(45, 'Acer Chromebook R 11', 'Chrome OS\r\nIntel® Celeron® N3150 Quad-core 1.60 GHz\r\n11.6\" HD (1366 x 768) 16:9 IPS Multitouch Display\r\nIntel HD Graphics with Shared Memory\r\n4 GB, DDR3L SDRAM\r\n32 GB Flash Memory', '4184804', 'ch3.jpg', 'ACER', 'laptop'),
(46, 'Acer Swift 1', 'Windows 10 Home\r\nIntel® Celeron® N4000 processor Dual-core 1.10 GHz\r\nIntel® UHD Graphics 600 with Shared Memory\r\n14\" Full HD (1920 x 1080) 16:9 IPS\r\n4 GB, DDR4 SDRAM\r\n64 GB Flash Memory\r\n30-day Microsoft Office trial included', '4604684', 'sw.jpg', 'ACER', 'laptop'),
(47, 'Acer Chromebook Spin 13', 'Chrome OS\r\nIntel® Core™ i3-8130U processor Dual-core 2.20 GHz\r\nIntel® UHD Graphics 620 with Shared Memory\r\n13.5\" QHD (2256 x 1504) 3:2 IPS\r\n4 GB, LPDDR3\r\n128 GB Flash Memory', '9783204', 'ch4.jpg', 'ACER', 'laptop'),
(48, 'Acer Predator Helios', 'Windows 10 Home\r\nIntel® Core™ i7-8750H processor Hexa-core 2.20 GHz\r\nNVIDIA® GeForce® GTX 1060 with 6 GB Dedicated Memory\r\n15.6\" Full HD (1920 x 1080) 16:9 IPS\r\n8 GB, DDR4 SDRAM\r\n1 TB HDD\r\n30-day Microsoft Office trial included', '12582404', 'pre.jpg', 'ACER', 'laptop'),
(49, 'Acer Swift 5', 'Windows 10 Home\r\nIntel® Core™ Quad-core 1.30 GHz\r\nIntel® Iris Plus Graphics G7 shared memory\r\n14\" Full HD (1920 x 1080) 16:9 IPS\r\n8 GB, LPDDR4\r\n512 GB SSD', '13982004', 'sw2.jpg', 'ACER', 'laptop'),
(50, 'Acer Nitro 7', 'Windows 10 Home\r\nIntel® Core™ i7-9750H processor Hexa-core 2.60 GHz\r\nNVIDIA® GeForce® GTX 1050 with 3 GB dedicated memory\r\n15.6\" Full HD (1920 x 1080) 16:9 IPS\r\n8 GB, DDR4 SDRAM\r\n256 GB SSD', '14681804', 'nit.jpg', 'ACER', 'laptop'),
(51, 'Acer Predator Helios 300', 'Windows 10 Home\r\nIntel® Core™ i7-9750H processor Hexa-core 2.60 GHz\r\nNVIDIA® GeForce® GTX 1660Ti with 6 GB dedicated memory\r\n17.3\" Full HD (1920 x 1080) 16:9 IPS\r\n8 GB, DDR4 SDRAM\r\n512 GB SSD', '19580404', 'pre1.jpg', 'ACER', 'laptop'),
(52, 'Acer 21.5\" Nitro QG1', 'Screen: 21.5\" Full HD (1920 x 1080) 75 Hz\r\nPanel Technology: Vertical Alignment (VA) (178°x178°) FreeSync\r\nInputs: HDMI, VGA\r\nResponse Time: 1 ms VRB\r\nBrightness: 250 Nit', '1245644', 'mo.jpg', 'ACER', 'monitor'),
(53, 'Acer 21.5\" AOPEN', '21.5\" Full HD (1920 x 1080) TN 16:9 display\r\n16.7 million colors\r\n100 million: 1 max (ACM) contrast ratio\r\n5 ms response time\r\n200 nit brightness\r\nVESA mount compatible', '1035704', 'mo1.jpg', 'ACER', 'monitor'),
(54, 'Acer 24\" Basic K2', 'Screen: 23.8\" Full HD (1920 x 1080) 60 Hz\r\nPanel Technology: Vertical Alignment (VA) (178°x178°)\r\nInputs: DVI, VGA\r\nResponse Time: 4 ms\r\nBrightness: 250 Nit\r\nWall Mountable', '1245644', 'mo2.jpg', 'ACER', 'monitor'),
(55, 'Acer 27\" HA0 Basic', 'Screen: 27\" Full HD (1920 x 1080) 75 Hz\r\nPanel Technology: IPS (178°x178°) FreeSync\r\nInputs: HDMI, VGA\r\nResponse Time: 4 ms GTG\r\nBrightness: 250 Nit', '2085404', 'mo3.jpg', 'ACER', 'monitor'),
(56, 'Acer Aspire TC', 'Windows 10 Home\r\nIntel® Core™ i5-8400 processor Hexa-core 2.80 GHz\r\nIntel® UHD Graphics 630 with Shared Memory\r\n8 GB, DDR4 SDRAM, 16 GB Intel® Optane™ memory\r\n1 TB HDD\r\n30-day Microsoft Office trial included', '8383604', 'de2.jpg', 'ACER ', 'desktop'),
(57, 'Acer Nitro 50', 'Windows 10 Home\r\nIntel® Core™ i5-8400 processor Hexa-core 2.80 GHz\r\nAMD Radeon RX 580 with 4 GB Dedicated Memory\r\n8 GB, DDR4 SDRAM\r\n1 TB HDD, 16 GB SSD\r\n30-day Microsoft Office trial included', '8383604', 'de3.jpg', 'ACER', 'desktop'),
(58, 'Acer Predator Orion 5000', 'Windows 10 Home\r\nIntel® Core™ i5-8600K processor Hexa-core 3.60 GHz\r\nNVIDIA® GeForce® GTX 1060 with 6 GB Dedicated Memory\r\n16 GB, DDR4 SDRAM\r\n256 GB SSD\r\n30-day Microsoft Office trial included', '13982004', 'de4.jpg', 'ACER', 'desktop'),
(59, 'Acer Predator Orion 9000', 'Windows 10 Home\r\nIntel® Core™ i7-8700K processor Hexa-core 3.70 GHz\r\n1 x NVIDIA® GeForce® RTX 2080 Ti with 11 GB Dedicated Memory\r\n32 GB, DDR4 SDRAM\r\n2 TB HDD, 256 GB SSD\r\n30-day Microsoft Office trial included', '46172804', 'de5.jpg', 'ACER', 'desktop'),
(60, 'Acer EV-833H DLP 3D', 'Contrast Ratio: 10,000:1\r\nAspect Ratio: 16:9 (Native), 4:3 (Compatible)\r\nThrow Ratio: 1.5 (100\"@10.83 ft)\r\nLamp Life: 4000 Hour (Normal Mode); 6000 Hour (Economy Mode)\r\nBrightness: 3000 lm\r\nResolution: Full HD (1920 x 1080)', '6284204', 'pro.jpg', 'ACER', 'projector'),
(61, 'Acer Leap Ware Smart Watch - Purple', 'Touchscreen\r\nAccelerometer, Heart Rate, UV Sensors\r\nBluetooth 4.0 + LE\r\n4 MB Flash & 4 MB SRAM\r\nRechargeable Battery\r\nWater Resistant', '1805484', 'le.jpg', 'ACER', 'wearable'),
(62, 'Acer Leap Ware Smart Watch - Red', 'Touchscreen\r\nAccelerometer, Heart Rate, UV Sensors\r\nBluetooth 4.0 + LE\r\n4 MB Flash & 4 MB SRAM\r\nRechargeable Battery\r\nWater Resistant', '1805484', 'le1.jpg', 'ACER', 'wearable'),
(63, 'Asus ZenBook Pro Duo', 'Windows 10 Pro\r\nFull-width 4K UHD ScreenPad Plus\r\n15.6” 4K OLED HDR Display with 100% DCI-P3\r\n9th Gen Intel® Core™ i9 processor\r\nNVIDIA® GeForce RTX™ 2060\r\nThunderbolt™ 3 USB-C™ and Wi-Fi 6 for fast connectivity\r\n1TB PCIe®3.0 x4 SSD', '26751579', 'zen.jpg', 'ASUS', 'laptop'),
(64, 'Asus ZenBook Pro 15', 'Windows 10 Pro\r\n8th Gen Intel® Core i7 processor\r\nNVIDIA® GeForce® GTX 1050 Ti\r\n15.6” 4K UHD NanoEdge PANTONE® Validated display\r\nDual band 2X2 802.11ac gigabit Wi-Fi', '27964650', 'zen1.jpg', 'ASUS', 'laptop '),
(65, 'Asus TUF Gaming', '\r\nWindows 10 Pro\r\nAMD™ 7 3650H\r\nNVIDIA GeForce GTX GPU\r\n15.6\" FHD, up to 120Hz Display\r\nMIL-STD-810G standards\r\nLong Battery Life', '8420732', 'tuf.jpg', 'ASUS', 'laptop '),
(66, 'Asus ProArt', '32-inch, 4K UHD 3840 x 2160 resolution display with IPS technology for immersive visuals\r\n100% Rec.709 and 99.5% Adobe RGB true color reproduction, factory pre-calibrate for outstanding color accuracy (?E <2). Support DCI-P3 and Rec. 2020 color standard.\r', '16022642', 'art.jpg', 'ASUS', 'monitor'),
(67, 'Samsung Galaxy Book2', '12\" \r\n128GB\r\nSilver (Verizon)\r\nS Pen and Keyboard included', '13982004', 'sam.jpg', 'SAMSUNG', 'laptop'),
(68, 'Samsung Notebook 9 Pen', 'Windows 10 Home\r\n8th Gen Intel® Core™ i7 Mobile Processor 13.3\" FHD LED Display (1920x1080 dots)\r\n512GB SSD Storage', '19580404', 'sam1.jpg', 'SAMSUNG', 'laptop');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(256) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(10, 'adi', 'adi@gmail.com', 'default.jpg', '$2y$10$SKbGh3sfNX4geqvbeC.F9e88dPTWG3CfC26lEVThOUQlJxe46MSDS', 2, 1, 1574325458),
(11, 'lin', 'lin@gmail.com', 'default.jpg', '$2y$10$p9zto9dAERhNujEDIFjznOJjt4Ga1CVKrqYZkj6J2B2HeIUERuQLK', 2, 1, 1575144176);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
