-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 15, 2020 lúc 05:06 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ccptpm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `TenSP` varchar(100) NOT NULL,
  `Gia` decimal(10,0) NOT NULL,
  `GiaCu` decimal(10,0) NOT NULL,
  `XuatXu` varchar(100) NOT NULL,
  `HinhAnh` text NOT NULL,
  `HinhAnh1` text NOT NULL,
  `MoTa` text NOT NULL,
  `Size` varchar(100) NOT NULL,
  `ID_LOAI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ID`, `TenSP`, `Gia`, `GiaCu`, `XuatXu`, `HinhAnh`, `HinhAnh1`, `MoTa`, `Size`, `ID_LOAI`) VALUES
(1, 'Sơ mi trắng quần tây', '200000', '220000', '', 'https://4men.com.vn/images/thumbs/2017/10/trang-phuc-don-xuan-cho-cac-chang-thanh-lich-news-280.jpg', 'https://karan.vn/file/images/959-tn01-0.jpg', 'Thích hợp cho môi trường công sở, đón xuân,...', 'S / M / L', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productcategory`
--

CREATE TABLE `productcategory` (
  `ID` int(11) NOT NULL,
  `TenLoai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `productcategory`
--

INSERT INTO `productcategory` (`ID`, `TenLoai`) VALUES
(1, 'Trang phục nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `full_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`Id`, `user_name`, `Email`, `password`, `full_name`) VALUES
(11, 'DuyKhanh', 'duykhanh@gmail.com', '202cb962ac59075b964b07152d234b70', 'Khanh Duy Bùi'),
(12, 'DucHieu', 'nduchieu98@gmail.com', '202cb962ac59075b964b07152d234b70', 'Nguyễn Đức Hiếu'),
(13, 'Tan', 'tanthong@gmail.com', '202cb962ac59075b964b07152d234b70', 'Ngô Tấn Thông'),
(17, 'DuyKhanhh', 'dsdsd@gmail.com', '202cb962ac59075b964b07152d234b70', 'Khanh'),
(18, 'DuyKhanh123', 'a@gmail.com', '123', 'KHnha Bùi'),
(19, 'AnhTuyen', 'trantuyen@gmail.com', '202cb962ac59075b964b07152d234b70', 'Anh Tuyển'),
(20, 'QuocVy', 'vyle@gmail.com', '202cb962ac59075b964b07152d234b70', 'Lê Vy'),
(21, 'PhuocLoc', 'loc@gmail.com', '202cb962ac59075b964b07152d234b70', 'Lộc Phước'),
(22, 'KhanhDuy', 'khanh@gmail.com', '202cb962ac59075b964b07152d234b70', 'Khanh'),
(23, 'KhanhDuy', 'khanh123@gmail.com', '202cb962ac59075b964b07152d234b70', 'Khanh'),
(24, 'KhanhDuy', 'khanh123@gmail.com', '202cb962ac59075b964b07152d234b70', 'Khanh'),
(25, 'KhanhDuy', 'khanh123@gmail.com', '202cb962ac59075b964b07152d234b70', 'Khanh'),
(26, 'KhanhDuy', 'khanh123@gmail.com', '202cb962ac59075b964b07152d234b70', 'Khanh'),
(27, 'DEMO', 'demo@gmail.com', '202cb962ac59075b964b07152d234b70', 'Khanh Demo');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
