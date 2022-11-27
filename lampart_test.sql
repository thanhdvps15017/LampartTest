-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 27, 2022 lúc 09:02 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lampart_test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Catagory`
--

CREATE TABLE `Catagory` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `Catagory`
--

INSERT INTO `Catagory` (`id`, `name`) VALUES
(79, '[value-1]'),
(80, '[value-2]'),
(81, '[value-3]'),
(82, '[value-e]'),
(84, '1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Products`
--

CREATE TABLE `Products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `Products`
--

INSERT INTO `Products` (`id`, `name`, `img`, `iddm`) VALUES
(5, 'Sản phẩm 1', '1.jpeg', 79),
(6, 'Sản phẩm 2', '2.png', 79),
(7, 'Sản phẩm 3', '3.jpeg', 79),
(8, 'Sản phẩm 4', '4.jpeg', 80),
(9, 'Sản phẩm 5', '5.jpeg', 80),
(10, 'Sản phẩm 6', '6.png', 80),
(11, 'Sản phẩm 7', '7.jpeg', 81),
(12, 'Sản phẩm 8', '8.jpeg', 81),
(13, 'Sản phẩm 9', '9.jpeg', 81),
(14, 'Sản phẩm 10', '10.jpeg', 82),
(15, 'Sản phẩm 11', '11.jpeg', 82),
(16, 'Sản phẩm 12', '12.jpeg', 82),
(17, 'Sản phẩm 13', '13.jpeg', 82),
(27, '1234', '8.jpeg', 80),
(28, '1', '1.jpeg', 79);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `Catagory`
--
ALTER TABLE `Catagory`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `As_iddm_id` (`iddm`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `Catagory`
--
ALTER TABLE `Catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT cho bảng `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `Products`
--
ALTER TABLE `Products`
  ADD CONSTRAINT `As_iddm_id` FOREIGN KEY (`iddm`) REFERENCES `Catagory` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
