-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 26, 2020 lúc 07:04 PM
-- Phiên bản máy phục vụ: 8.0.22-0ubuntu0.20.04.3
-- Phiên bản PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nienluan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ID` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hdx_sp`
--

CREATE TABLE `hdx_sp` (
  `HDX_MA` int NOT NULL,
  `SP_MA` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `hdx_sp`
--

INSERT INTO `hdx_sp` (`HDX_MA`, `SP_MA`) VALUES
(9, 14),
(10, 14),
(11, 14),
(12, 14),
(13, 14),
(14, 14),
(15, 14),
(16, 14),
(17, 14),
(18, 14),
(19, 14),
(20, 14),
(21, 14),
(22, 14),
(23, 14),
(24, 14),
(25, 14),
(26, 14),
(27, 14),
(28, 14),
(29, 14),
(30, 14),
(31, 14),
(7, 15),
(8, 15),
(9, 15),
(10, 15),
(11, 15),
(12, 15),
(13, 15),
(14, 15),
(15, 15),
(16, 15),
(17, 15),
(18, 15),
(19, 15),
(20, 15),
(21, 15),
(22, 15),
(23, 15),
(24, 15),
(25, 15),
(26, 15),
(27, 15),
(28, 15),
(29, 15),
(30, 15),
(31, 15),
(2, 17),
(7, 17),
(9, 17),
(10, 17),
(11, 17),
(12, 17),
(13, 17),
(14, 17),
(15, 17),
(16, 17),
(17, 17),
(18, 17),
(19, 17),
(20, 17),
(21, 17),
(22, 17),
(23, 17),
(24, 17),
(25, 17),
(26, 17),
(27, 17),
(28, 17),
(29, 17),
(30, 17),
(31, 17),
(32, 17),
(33, 17),
(34, 17),
(35, 18),
(32, 20),
(33, 20),
(34, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonxuat`
--

CREATE TABLE `hoadonxuat` (
  `HDX_MA` int NOT NULL,
  `HDX_NGAYLAP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `KH_MA` int NOT NULL,
  `HDX_TRANGTHAI` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadonxuat`
--

INSERT INTO `hoadonxuat` (`HDX_MA`, `HDX_NGAYLAP`, `KH_MA`, `HDX_TRANGTHAI`) VALUES
(1, '2020-12-26 07:18:05', 9, 1),
(2, '2020-12-26 07:19:40', 10, 0),
(3, '2020-12-26 10:04:01', 2, 1),
(4, '2020-12-26 10:09:34', 2, 1),
(5, '2020-12-26 10:09:45', 2, 1),
(6, '2020-12-26 10:11:41', 2, 1),
(7, '2020-12-26 11:03:05', 3, 0),
(8, '2020-12-26 11:04:07', 2, 0),
(9, '2020-12-26 11:04:36', 2, 0),
(10, '2020-12-26 11:16:47', 2, 0),
(11, '2020-12-26 11:17:19', 2, 0),
(12, '2020-12-26 11:17:19', 2, 0),
(13, '2020-12-26 11:17:20', 2, 0),
(14, '2020-12-26 11:17:20', 2, 0),
(15, '2020-12-26 11:17:20', 2, 0),
(16, '2020-12-26 11:17:20', 2, 0),
(17, '2020-12-26 11:17:20', 2, 0),
(18, '2020-12-26 11:17:20', 2, 0),
(19, '2020-12-26 11:20:41', 2, 0),
(20, '2020-12-26 11:21:35', 2, 0),
(21, '2020-12-26 11:21:37', 2, 0),
(22, '2020-12-26 11:21:38', 2, 0),
(23, '2020-12-26 11:21:38', 2, 1),
(24, '2020-12-26 11:21:38', 2, 1),
(25, '2020-12-26 11:21:38', 2, 0),
(26, '2020-12-26 11:21:39', 2, 0),
(27, '2020-12-26 11:21:40', 2, 0),
(28, '2020-12-26 11:21:40', 2, 0),
(29, '2020-12-26 11:21:40', 2, 0),
(30, '2020-12-26 11:21:52', 2, 0),
(31, '2020-12-26 11:26:38', 2, 0),
(32, '2020-12-26 11:29:10', 2, 1),
(33, '2020-12-26 11:48:38', 2, 0),
(34, '2020-12-26 11:57:50', 2, 1),
(35, '2020-12-26 12:03:54', 12, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `KH_MA` int NOT NULL,
  `KH_TEN` varchar(50) NOT NULL,
  `KH_SDT` varchar(50) NOT NULL,
  `KH_DIACHi` varchar(50) NOT NULL,
  `KH_EMAIL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`KH_MA`, `KH_TEN`, `KH_SDT`, `KH_DIACHi`, `KH_EMAIL`) VALUES
(1, 'Hoang Ngoc Ai Trinh', '0918789026', 'Hue', 'Trinh@gmail.com'),
(2, 'Lý Thanh Tân', '0567921886', 'Chau Thanh, An Giang', 'tanvirgo238@gmail.com'),
(3, 'Lý Thanh Tân', '0567921886', 'Chau Thanh, An Giang', 'tanvirgo238@gmail.com'),
(4, 'fdkj', 'fdkjfkd', 'fsdjkfsj', 'kdsjkfs'),
(5, 'fdksjfs', 'kfskfsjksf', 'ksfkjfsjfs', 'sfdksfkjsf'),
(6, 'fslfksll', 'fslfjsljf', 'fsjfsfj', 'fsljsfj'),
(7, 'fsjfskjs', 'fksjkfsj,', 'fjsjfslsfj', 'fsjljs'),
(8, 'fsjfjksj', 'jfjsljsjf,', 'fsjsjfsjf', 'fksfjslfjslj'),
(9, 'fjsfjsjfs', 'flfkssfjj', 'fsjfsjfsjfs', 'fskfjsjfj'),
(10, 'fshkfjshf', 'fkskfhsh', 'hfskhfskhfskhf', 'fksjfskf'),
(11, '', '', '', ''),
(12, 'Tan', '033', 'Cần Thơ', 'nvdkg1999@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `KM_MA` int NOT NULL,
  `KM_TEN` varchar(50) NOT NULL,
  `KM_NGAYKETTHUC` varchar(50) NOT NULL,
  `KM_HESO` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`KM_MA`, `KM_TEN`, `KM_NGAYKETTHUC`, `KM_HESO`) VALUES
(1, 'Giáng sinh', '20/12/2020', 0.2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `LOAI_MA` int NOT NULL,
  `LOAI_TEN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`LOAI_MA`, `LOAI_TEN`) VALUES
(1, 'Cao cap'),
(3, 'trung cấp'),
(4, 'Bình Dân'),
(5, 'test'),
(6, 'test'),
(7, 'test1'),
(8, 'test1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `NSX_MA` int NOT NULL,
  `NSX_TEN` varchar(50) NOT NULL,
  `NSX_DIACHI` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`NSX_MA`, `NSX_TEN`, `NSX_DIACHI`) VALUES
(10, 'Cat Tuong', 'Chau Thanh, An Giang'),
(14, 'Thanh Tan', 'Chau Thanh, An Giang'),
(15, 'Hoàng Khánh', 'Thanh Hóa'),
(16, 'SamSung', 'Korea'),
(17, 'vivo', 'Trung Quốc'),
(18, 'Oppo', 'Trung Quốc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `SP_MA` int NOT NULL,
  `SP_TEN` varchar(50) NOT NULL,
  `SP_HDH` varchar(50) NOT NULL,
  `SP_CHIP` varchar(50) NOT NULL,
  `SP_RAM` varchar(50) NOT NULL,
  `SP_PIN` varchar(50) NOT NULL,
  `SP_GIA` varchar(50) NOT NULL,
  `SP_HINHANH` varchar(60) NOT NULL,
  `KM_MA` int DEFAULT NULL,
  `NSX_MA` int NOT NULL,
  `LOAI_MA` int NOT NULL,
  `SP_IMEI` varchar(30) DEFAULT NULL,
  `SP_GIAKHO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`SP_MA`, `SP_TEN`, `SP_HDH`, `SP_CHIP`, `SP_RAM`, `SP_PIN`, `SP_GIA`, `SP_HINHANH`, `KM_MA`, `NSX_MA`, `LOAI_MA`, `SP_IMEI`, `SP_GIAKHO`) VALUES
(14, 'Iphone11 Promax', 'iOS 13', 'Apple A13 Bionic 6 nhân', '4gb', '4000 mAh', '30990000', '../img/iphone11_promax.png', NULL, 10, 1, '860295044193252', '25000000'),
(15, 'oppo A31', 'android', 'MediaTek Helio P35 8 nhân', '6 GB', '4230 mAh', '4790000', '../img/oppoA31.png', NULL, 10, 1, '860295044193250', '3000000'),
(17, 'Xiaomi Redmi Note 9 Pro', 'android', 'Snapdragon 720G 8 nhân', '10 GB', '5020 mAh', '6490000', '../img/mi9pro.png', NULL, 10, 1, '860295044193251', '5000000'),
(18, 'Samsung Galaxy A21s', 'android', 'Exynos 850 8 nhân', '6 GB', '5000 mAh', '5290000', '../img/samsunga21.png', NULL, 16, 1, '860295044193248', '4000000'),
(19, 'Samsung Galaxy A20s', 'android', 'Snapdragon 450 8 nhân', '4 GB', '5000 mAh', '5390000', '../img/samsunga20.png', NULL, 16, 1, '860295044193249', '4000000'),
(20, 'Samsung Galaxy Note 10+', 'android', 'Exynos 9825 8 nhân', '12 GB', '4300 mAh', '16490000', '../img/samsungnote10plus.png', NULL, 16, 1, '860295044193247', '13000000'),
(21, 'Samsung Galaxy Note 9', 'android', 'Exynos 9810 8 nhân', '6 GB', '4000 mAh', '7845000', '../img/samsungnote9.png', NULL, 16, 1, '860295044193246', '6500000'),
(23, 'Vivo X50', 'android', 'Snapdragon 730 8 nhân', '8gb', '4000 mAh', '11990000', '../img/vivox50.png', NULL, 17, 1, '860295044193254', '10000000'),
(24, 'Samsung Galaxy S10 Lite', 'android', 'Snapdragon 855 8 nhân', '8gb', '4500 mAh', '12990000', '../img/samsung-galaxy-s10-lite.png', NULL, 16, 1, '860295044193255', '11500000');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `hdx_sp`
--
ALTER TABLE `hdx_sp`
  ADD PRIMARY KEY (`HDX_MA`,`SP_MA`),
  ADD KEY `SP_MA` (`SP_MA`);

--
-- Chỉ mục cho bảng `hoadonxuat`
--
ALTER TABLE `hoadonxuat`
  ADD PRIMARY KEY (`HDX_MA`),
  ADD KEY `KH_MA` (`KH_MA`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`KH_MA`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`KM_MA`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`LOAI_MA`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`NSX_MA`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`SP_MA`),
  ADD UNIQUE KEY `SP_IMEI` (`SP_IMEI`),
  ADD KEY `KH_MA` (`KM_MA`),
  ADD KEY `LOAI_MA` (`LOAI_MA`),
  ADD KEY `NXS_MA` (`NSX_MA`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hoadonxuat`
--
ALTER TABLE `hoadonxuat`
  MODIFY `HDX_MA` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `KH_MA` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `KM_MA` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `LOAI_MA` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `NSX_MA` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `SP_MA` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hdx_sp`
--
ALTER TABLE `hdx_sp`
  ADD CONSTRAINT `hdx_sp_ibfk_1` FOREIGN KEY (`HDX_MA`) REFERENCES `hoadonxuat` (`HDX_MA`),
  ADD CONSTRAINT `hdx_sp_ibfk_2` FOREIGN KEY (`SP_MA`) REFERENCES `sanpham` (`SP_MA`);

--
-- Các ràng buộc cho bảng `hoadonxuat`
--
ALTER TABLE `hoadonxuat`
  ADD CONSTRAINT `hoadonxuat_ibfk_1` FOREIGN KEY (`KH_MA`) REFERENCES `khachhang` (`KH_MA`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`KM_MA`) REFERENCES `khuyenmai` (`KM_MA`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`LOAI_MA`) REFERENCES `loaisanpham` (`LOAI_MA`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`NSX_MA`) REFERENCES `nhasanxuat` (`NSX_MA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
