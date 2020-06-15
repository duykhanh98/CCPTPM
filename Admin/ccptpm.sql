-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 15, 2020 lúc 08:09 AM
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
(1, 'Sơ mi trắng quần tây', '200000', '220000', '', 'https://cdn3.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/8e8754ef-7b20-2400-4d35-0015906167b9.jpg?w=440', 'https://cdn3.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/ae1e725a-84d3-2900-f078-00159062165a.jpg?w=440', 'Thích hợp cho môi trường công sở, đón xuân,...', 'S / M / L', 1),
(2, 'Du lịch', '190000', '250000', 'Hồ Chí Minh, Việt Nam', 'https://cdn3.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/8e8754ef-7b20-2400-4d35-0015906167b9.jpg?w=440', 'https://anh.eva.vn//upload/2-2016/images/2016-04-22/chuan-bi-trang-phuc-cho-chang-di-du-lich-me2-1461327271-width500height750.jpg', 'Thoải mái cho các chuyến đi du lịch vào dịp cuối tuấn, dã ngoại,..', 'S / M / L / XXL', 1),
(5, 'SHEIN Áo sơ mi Xù Hoa', '141000', '150000', 'Đồng Nai, VN', 'https://img.ltwebstatic.com/images3_pi/2020/05/26/159048060088d94d388188ae1bec64db29312d8b80_thumbnail_405x552.webp', 'https://img.ltwebstatic.com/images3_pi/2020/06/02/15910637615d6437e7992113c5cff52ce33b5480c4_thumbnail_405x552.webp', 'Phong cách:	Boho\r\nMàu sắc:	Nhiều màu\r\nKiểu mẫu:	Hoa, Tất cả trên in\r\nViền :	Vai lạnh, áo hai dây\r\nChiều dài:	Thường xuyên\r\nKiểu:	Ngọn\r\nChi tiết:	Xù, Vai lạnh\r\nChiều dài tay:	Ngắn tay\r\nMùa:	Mùa Hè\r\nThành phần:	100% Polyester\r\nVật liệu:	Polyester\r\nSợi vải:	Không căng\r\nMỏng:	Không\r\nLoại Phù hợp:	Phù hợp thường\r\nLoại túi váy:	Áo chui', 'S / M / L / XL', 2),
(6, 'SHEIN Leggings Sọc Xám Thể thao', '141000', '150000', 'Đồng Nai, VN', 'https://img.ltwebstatic.com/images3_pi/2019/11/02/1572674602573925b6ab6eaadd36eaa7a84601a31a_thumbnail_405x552.webp', 'https://img.ltwebstatic.com/images3_pi/2019/11/02/1572674602573925b6ab6eaadd36eaa7a84601a31a_thumbnail_405x552.webp', 'Phong cách:	Boho\r\nMàu sắc:	Nhiều màu\r\nKiểu mẫu:	Hoa, Tất cả trên in\r\nViền :	Vai lạnh, áo hai dây\r\nChiều dài:	Thường xuyên\r\nKiểu:	Ngọn\r\nChi tiết:	Xù, Vai lạnh\r\nChiều dài tay:	Ngắn tay\r\nMùa:	Mùa Hè\r\nThành phần:	100% Polyester\r\nVật liệu:	Polyester\r\nSợi vải:	Không căng\r\nMỏng:	Không\r\nLoại Phù hợp:	Phù hợp thường\r\nLoại túi váy:	Áo chui', 'S / M / L / XL', 2),
(7, 'Váy Houndstooth màu đen', '141000', '150000', 'Đồng Nai, VN', 'https://img.ltwebstatic.com/images3_pi/2019/10/25/1571990099229c23369431555f0f0e52f5dc411143_thumbnail_405x552.webp', 'https://img.ltwebstatic.com/images3_pi/2019/10/25/1571990091f3924196981f9b0c5f0af7f67c271d5c_thumbnail_405x552.webp', 'Phong cách:	Boho\r\nMàu sắc:	Nhiều màu\r\nKiểu mẫu:	Hoa, Tất cả trên in\r\nViền :	Vai lạnh, áo hai dây\r\nChiều dài:	Thường xuyên\r\nKiểu:	Ngọn\r\nChi tiết:	Xù, Vai lạnh\r\nChiều dài tay:	Ngắn tay\r\nMùa:	Mùa Hè\r\nThành phần:	100% Polyester\r\nVật liệu:	Polyester\r\nSợi vải:	Không căng\r\nMỏng:	Không\r\nLoại Phù hợp:	Phù hợp thường\r\nLoại túi váy:	Áo chui', 'S / M / L / XL', 2),
(8, 'SHEIN Áo thun Khối Màu', '16200', '180000', 'Đồng Nai, VN', 'https://img.ltwebstatic.com/images3_pi/2020/05/05/15886412981e09a12fe2412acc42a0c1d87f20eb9e_thumbnail_405x552.webp', 'https://img.ltwebstatic.com/images3_pi/2020/05/05/15886413021ca363f1f5ffdbf2eaf013fbde531c81_thumbnail_405x552.webp', 'Phong cách:	Boho\r\nMàu sắc:	Nhiều màu\r\nKiểu mẫu:	Hoa, Tất cả trên in\r\nViền :	Vai lạnh, áo hai dây\r\nChiều dài:	Thường xuyên\r\nKiểu:	Ngọn\r\nChi tiết:	Xù, Vai lạnh\r\nChiều dài tay:	Ngắn tay\r\nMùa:	Mùa Hè\r\nThành phần:	100% Polyester\r\nVật liệu:	Polyester\r\nSợi vải:	Không căng\r\nMỏng:	Không\r\nLoại Phù hợp:	Phù hợp thường\r\nLoại túi váy:	Áo chui', 'S / M / L / XL', 2),
(9, 'SHEIN Áo sơ mi Xù Hoa', '141000', '150000', 'Đồng Nai, VN', 'https://img.ltwebstatic.com/images3_pi/2020/05/26/159048060088d94d388188ae1bec64db29312d8b80_thumbnail_405x552.webp', 'https://img.ltwebstatic.com/images3_pi/2020/06/02/15910637615d6437e7992113c5cff52ce33b5480c4_thumbnail_405x552.webp', 'Phong cách:	Boho\r\nMàu sắc:	Nhiều màu\r\nKiểu mẫu:	Hoa, Tất cả trên in\r\nViền :	Vai lạnh, áo hai dây\r\nChiều dài:	Thường xuyên\r\nKiểu:	Ngọn\r\nChi tiết:	Xù, Vai lạnh\r\nChiều dài tay:	Ngắn tay\r\nMùa:	Mùa Hè\r\nThành phần:	100% Polyester\r\nVật liệu:	Polyester\r\nSợi vải:	Không căng\r\nMỏng:	Không\r\nLoại Phù hợp:	Phù hợp thường\r\nLoại túi váy:	Áo chui', 'S / M / L / XL', 2),
(10, 'Áo thun Lá thư trắng', '164000', '185000', 'Vĩnh Long, VN', 'https://img.ltwebstatic.com/images3_pi/2020/04/20/15873492060d912cb241951482729bc743b146e4a6_thumbnail_405x552.webp', 'https://img.ltwebstatic.com/images3_pi/2020/04/20/158734921058c14b70b9c218f943ee5095d8a0f750_thumbnail_405x552.webp', 'Phong cách:	Boho\r\nMàu sắc:	Nhiều màu\r\nKiểu mẫu:	Hoa, Tất cả trên in\r\nViền :	Vai lạnh, áo hai dây\r\nChiều dài:	Thường xuyên\r\nKiểu:	Ngọn\r\nChi tiết:	Xù, Vai lạnh\r\nChiều dài tay:	Ngắn tay\r\nMùa:	Mùa Hè\r\nThành phần:	100% Polyester\r\nVật liệu:	Polyester\r\nSợi vải:	Không căng\r\nMỏng:	Không\r\nLoại Phù hợp:	Phù hợp thường\r\nLoại túi váy:	Áo chui', 'S / M / L / XL', 2),
(11, 'Áo Thun Nam Y2010', '135000', '225000', 'Việt Nam', 'https://cdn3.yame.vn/pimg/ao-thun-nam-y2010-co-tru-c01-0019042/7073abc8-6f2b-cc00-c392-00164ac307f7.jpg?w=440', 'https://cdn2.yame.vn/pimg/ao-thun-nam-y2010-co-tru-c01-0019042/8b346e88-2040-be00-d0de-00164ac28415.jpg?w=440', 'Thích hợp cho môi trường công sở, đón xuân,...', 'M / L /XL', 1),
(12, 'Sơ mi trắng quần tây', '200000', '220000', '', 'https://cdn3.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/8e8754ef-7b20-2400-4d35-0015906167b9.jpg?w=440', 'https://cdn3.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/ae1e725a-84d3-2900-f078-00159062165a.jpg?w=440', 'Thích hợp cho môi trường công sở, đón xuân,...', 'S / M / L', 1);

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
(1, 'Trang phục nam'),
(2, 'Trang phục nữ');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
