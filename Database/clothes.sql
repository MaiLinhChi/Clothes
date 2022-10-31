-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 11, 2022 lúc 01:33 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `clothes`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `user` varchar(25) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `mahd` int(10) NOT NULL,
  `makh` int(10) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`mahd`, `makh`, `ngaydat`, `tongtien`) VALUES
(1, 1, '2022-01-16', 0),
(2, 1, '2022-01-16', 0),
(3, 1, '2022-01-16', 0),
(4, 1, '2022-01-16', 0),
(5, 1, '2022-01-16', 0),
(6, 1, '2022-01-16', 0),
(7, 1, '2022-01-16', 0),
(8, 1, '2022-01-16', 0),
(9, 1, '2022-01-16', 0),
(10, 1, '2022-01-16', 0),
(11, 1, '2022-01-16', 2840),
(12, 1, '2022-01-16', 2840),
(13, 1, '2022-01-16', 2840),
(14, 1, '2022-01-16', 195),
(15, 1, '2022-01-16', 195),
(16, 1, '2022-01-16', 468),
(17, 1, '2022-01-16', 468),
(18, 1, '2022-01-16', 468),
(19, 1, '2022-01-16', 468),
(20, 1, '2022-01-16', 468),
(21, 1, '2022-01-16', 468),
(22, 1, '2022-01-16', 468),
(23, 1, '2022-01-16', 468),
(24, 1, '2022-01-17', 468),
(25, 1, '2022-01-17', 2076),
(26, 1, '2022-01-17', 2355);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `billdetail`
--

CREATE TABLE `billdetail` (
  `mahd` int(10) NOT NULL,
  `mahh` int(10) NOT NULL,
  `soluongmua` int(10) NOT NULL,
  `mausac` varchar(20) CHARACTER SET utf8 NOT NULL,
  `kichthuoc` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `thanhtien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `billdetail`
--

INSERT INTO `billdetail` (`mahd`, `mahh`, `soluongmua`, `mausac`, `kichthuoc`, `thanhtien`) VALUES
(11, 7, 1, 'Mustard', '0', 110),
(11, 11, 10, 'Beige', '0', 2730),
(12, 7, 1, 'Mustard', '0', 110),
(12, 11, 10, 'Beige', '0', 2730),
(13, 7, 1, 'Mustard', '0', 110),
(13, 11, 10, 'Beige', '0', 2730),
(14, 5, 1, 'Black', '0', 85),
(14, 7, 1, 'Mustard', '0', 110),
(15, 5, 1, 'Black', '0', 85),
(15, 7, 1, 'Mustard', '0', 110),
(16, 5, 1, 'Black', '0', 85),
(16, 7, 1, 'Mustard', '0', 110),
(16, 11, 1, 'Beige', '0', 273),
(17, 5, 1, 'Black', '0', 85),
(17, 7, 1, 'Mustard', '0', 110),
(17, 11, 1, 'Beige', '0', 273),
(18, 5, 1, 'Black', '0', 85),
(18, 7, 1, 'Mustard', '0', 110),
(18, 11, 1, 'Beige', '0', 273),
(19, 5, 1, 'Black', '0', 85),
(19, 7, 1, 'Mustard', '0', 110),
(19, 11, 1, 'Beige', '0', 273),
(20, 5, 1, 'Black', '0', 85),
(20, 7, 1, 'Mustard', '0', 110),
(20, 11, 1, 'Beige', '0', 273),
(21, 5, 1, 'Black', '0', 85),
(21, 7, 1, 'Mustard', '0', 110),
(21, 11, 1, 'Beige', '0', 273),
(22, 5, 1, 'Black', '0', 85),
(22, 7, 1, 'Mustard', '0', 110),
(22, 11, 1, 'Beige', '0', 273),
(23, 5, 1, 'Black', 'S', 85),
(23, 7, 1, 'Mustard', 'S', 110),
(23, 11, 1, 'Beige', 'L', 273),
(24, 5, 1, 'Black', 'S', 85),
(24, 7, 1, 'Mustard', 'S', 110),
(24, 11, 1, 'Beige', 'L', 273),
(25, 5, 1, 'Black', 'S', 85),
(25, 7, 1, 'Mustard', 'S', 110),
(25, 11, 2, 'Beige', 'L', 546),
(25, 12, 3, 'White', 'S', 1335),
(26, 5, 1, 'Black', 'S', 85),
(26, 7, 1, 'Mustard', 'S', 110),
(26, 8, 1, 'Navy', 'L', 279),
(26, 11, 2, 'Beige', 'L', 546),
(26, 12, 3, 'White', 'S', 1335);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `mabl` int(10) NOT NULL,
  `mahh` int(10) NOT NULL,
  `makh` int(10) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` longtext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`mabl`, `mahh`, `makh`, `ngaybl`, `noidung`) VALUES
(1, 1, 1, '2022-01-16', '  xau vl'),
(2, 1, 1, '2022-01-16', '  Quá đẹp'),
(3, 1, 1, '2022-01-16', '  Quá đẹp'),
(4, 1, 1, '2022-01-16', '  Quá đẹp'),
(5, 1, 1, '2022-01-16', '  Quá đẹp'),
(6, 1, 1, '2022-01-16', '  Quá đẹp'),
(7, 1, 1, '2022-01-16', '  Quá đẹp'),
(8, 1, 1, '2022-01-16', '  Quá đẹp'),
(9, 2, 1, '2022-01-16', '  QUÁ DỮ'),
(10, 1, 1, '2022-01-16', '  '),
(11, 6, 1, '2022-01-17', '  xau qua'),
(12, 11, 1, '2022-01-17', 'đẹp quá'),
(13, 11, 1, '2022-01-17', 'đẹp quá'),
(14, 11, 1, '2022-01-17', 'đẹp quá'),
(15, 11, 1, '2022-01-17', 'đẹp quá'),
(16, 11, 1, '2022-01-17', 'đẹp quá'),
(17, 11, 1, '2022-01-17', 'đẹp quá'),
(18, 11, 1, '2022-01-17', 'đẹp quá'),
(19, 11, 1, '2022-01-17', 'đẹp quá'),
(20, 11, 1, '2022-01-17', 'đẹp quá'),
(21, 11, 1, '2022-01-17', 'đẹp quá'),
(22, 11, 1, '2022-01-17', 'đẹp quá'),
(23, 11, 1, '2022-01-17', 'đẹp quá'),
(24, 11, 1, '2022-01-17', 'đẹp quá'),
(25, 11, 1, '2022-01-17', 'đẹp quá'),
(26, 11, 1, '2022-01-17', 'đẹp quá'),
(27, 11, 1, '2022-01-17', 'đẹp quá'),
(28, 11, 1, '2022-01-17', 'đẹp quá'),
(29, 11, 1, '2022-01-17', 'đẹp quá'),
(30, 11, 1, '2022-01-17', 'đẹp quá'),
(31, 11, 1, '2022-01-17', 'đẹp quá'),
(32, 11, 1, '2022-01-17', 'đẹp quá'),
(33, 10, 1, '2022-01-17', 'ngon lành'),
(34, 7, 1, '2022-01-18', 'ok'),
(35, 7, 1, '2022-01-18', 'ok'),
(36, 7, 1, '2022-01-18', 'ok'),
(37, 7, 1, '2022-01-18', 'ok'),
(38, 7, 1, '2022-01-18', 'ok'),
(39, 7, 1, '2022-01-18', 'ok'),
(40, 7, 1, '2022-01-18', 'ok'),
(41, 7, 1, '2022-01-18', 'ok'),
(42, 8, 1, '2022-01-18', 'a'),
(43, 8, 1, '2022-01-18', 'ok');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `makh` int(10) NOT NULL,
  `tenkh` varchar(60) CHARACTER SET utf8 NOT NULL,
  `taikhoan` varchar(20) CHARACTER SET utf8 NOT NULL,
  `matkhau` varchar(60) CHARACTER SET utf8 NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sodienthoai` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`makh`, `tenkh`, `taikhoan`, `matkhau`, `email`, `diachi`, `sodienthoai`) VALUES
(1, 'Linh Chí', 'LinhChi', '202cb962ac59075b964b07152d234b70', 'mailinhchi22082002@gmail.com', 'Long An', 765077346),
(2, 'Sang', 'Thanh', 'd41d8cd98f00b204e9800998ecf8427e', '', 'Long An', 765077346),
(3, 'Sang', 'ThanhSang', '202cb962ac59075b964b07152d234b70', 'mailinhchi2282002@gmail.com', 'Long An', 765077346),
(4, 'Minh', 'QuocMinh', '202cb962ac59075b964b07152d234b70', 'mailinhchi22082002@gmail.com', 'Long An', 765077346);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `maha` int(10) NOT NULL,
  `mahh` int(10) NOT NULL,
  `hinhanh` varchar(60) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`maha`, `mahh`, `hinhanh`) VALUES
(1, 1, '1.jpg'),
(2, 1, '2.jpg'),
(3, 1, '3.jpg'),
(4, 1, '4.jpg'),
(5, 2, '5.jpg'),
(6, 2, '6.jpg'),
(7, 2, '7.jpg'),
(8, 2, '8.jpg'),
(9, 3, '9.jpg'),
(10, 3, '10.jpg'),
(11, 3, '11.jpg'),
(12, 3, '12.jpg'),
(13, 4, '13.jpg'),
(14, 4, '14.jpg'),
(15, 4, '15.jpg'),
(16, 5, '16.jpg'),
(17, 5, '17.jpg'),
(18, 6, '18.jpg'),
(19, 6, '19.jpg'),
(20, 6, '20.jpg'),
(21, 7, '21.jpg'),
(22, 7, '22.jpg'),
(23, 8, '23.jpg'),
(24, 8, '24.jpg'),
(25, 9, '25.jpg'),
(26, 9, '26.jpg'),
(27, 9, '27.jpg'),
(28, 10, '28.jpg'),
(29, 11, '29.jpg'),
(30, 11, '30.jpg'),
(31, 12, '31.jpg'),
(32, 12, '32.jpg'),
(33, 12, '33.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `mahh` int(10) NOT NULL,
  `maloai` int(10) NOT NULL,
  `tenloai` varchar(20) CHARACTER SET utf8 NOT NULL,
  `tenhh` varchar(60) CHARACTER SET utf8 NOT NULL,
  `dongia` float NOT NULL,
  `giamgia` float NOT NULL,
  `hinhanh` varchar(150) CHARACTER SET utf8 NOT NULL,
  `soluotxem` int(10) NOT NULL,
  `ngaylap` date NOT NULL,
  `mota` longtext CHARACTER SET utf8 NOT NULL,
  `tonkho` int(10) NOT NULL,
  `mausac` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`mahh`, `maloai`, `tenloai`, `tenhh`, `dongia`, `giamgia`, `hinhanh`, `soluotxem`, `ngaylap`, `mota`, `tonkho`, `mausac`) VALUES
(1, 1, 'T-shirt', 'CORRIDOR SHADOW CHECK SPACE DYED SHIRT', 230589000, 0, '1a.jpg', 12935, '2022-01-16', 'Corridor have some of the best and most unique fabrics in the business and it is what really sets the apart. In this shirt they use space dying which is a process when the cone of the cotton is dipped to produce multiple colours on the same string', 10, 'Indigo'),
(2, 1, 'T-shirt', 'CORRIDOR CLASSIC STRIPE T-SHIRT', 89, 0, '2a.jpg', 11948, '2022-01-16', 'The Navy Stripe T-Shirt is a heavyweight, 100% cotton jersey made in a dense weave. The collar utilises the main shirt fabric for an extra stripe around the neck. This colour combo is both seasonally wearable and, as far as stripey t-shirts go, kind of exciting.', 43, 'Navy/Tan'),
(3, 1, 'T-shirt', 'CORRIDOR TICKING STRIPE LINEN OVERSHIRT', 345, 301, '3a.jpg', 12484, '2022-01-16', 'The Ticking Stripe Overshirt features an easy linen/cotton blend in indigo/natural for a sophisticated spring chore coat. The overshirt has become the modern sports coat and Corridor evolved their textiles to function as both a solid and a pattern; and this ticking stripe does that wonderfully.', 32, 'Indigo'),
(4, 1, 'T-shirt', 'GITMAN VINTAGE LINEN STRIPE SHIRT', 285, 124, '4a.jpg', 13485, '2022-01-16', 'Consider this the summer version of Gitman\'s Cambridge Stripe Oxford. Woven with a blend of linen and cotton, this shirt has the softness you want with the breathability you need for warm summer days. Additionally, this blend of fibers creates a natural slub finish for a detailed texture unlike any other fabric we use.\n\nFormal or casual, tucked or untucked, our easy-wearing shirts are an obvious choice for warm summer days.', 54, 'Blue/White'),
(5, 1, 'T-shirt', 'SNOW PEAK TAKIBI T-SHIRT', 85, 43, '5a.jpg', 10384, '2022-01-16', 'Made from 100% cotton, the Snow Peak t-shirt line uses locally sourced quality materials. Each design is thoughtfully developed to embody the Snow Peak lifestyle while paying tribute to our humble origins.', 47, 'Black'),
(6, 1, 'T-shirt', 'SNOW PEAK CO/PE DRY PULLOVER T-SHIRT', 225, 0, '6a.jpg', 84756, '2022-01-16', 'A lightweight knitted tee, the Co/Pe Dry Pullover is moisture-wicking and breathable for outdoor activities.  Classic crew neck, short sleeves, and straight hem..', 32, 'Black'),
(7, 1, 'T-shirt', 'SNOW PEAK PRINTED LONG SLEEVE CAMPFIELD T-SHIRT', 110, 0, '7a.jpg', 18474, '2022-01-16', 'An easy fitting long sleeve t-shirt perfect for the outdoor lifestyle. With a printed graphic of the perfect Snow Peak campfield', 59, 'Mustard'),
(8, 1, 'T-shirt', 'GITMAN VINTAGE OVERDYED OXFORD BUTTON DOWN SHIRT', 279, 0, '8a.jpg', 13843, '2022-01-16', 'If we receive your order before 12.00pm Tuesday-Friday your order should be shipped that day otherwise the following business day. Orders received on Mondays will be shipped the next business day.', 85, 'Navy'),
(9, 2, 'Pants', 'SNOW PEAK OKAYAMA OX PANTS (RAW)', 265, 232, '9a.jpg', 12838, '2022-01-16', 'Designed in a classic carpenter silhouette and constructed of renowned Okayama canvas, the Okayama OX Pants in raw cotton offer durability and functionality for daily and outdoor use. Featuring reinforced knees, a leg loop, and five pockets for storage. Zip front with button closure and secure belt loops at waist.', 48, 'Ecru'),
(10, 2, 'Pants', 'SNOW PEAK TAKIBI PANTS', 499, 329, '10q.jpg', 13848, '2022-01-16', 'Fully constructed of fire-resistant aramid materials, the TAKIBI Pants offer unique fire protection with lasting durability and functional design. Zip and button front with surrounding belt loops waist, front slash pockets, back welted pockets, and dual side cargo pockets with inner pouch and snap closure. Loose, straight leg. We suggest taking your normal size for a loose fit.\r\n\r\nPlease note: Flame retardancy characteristics is based on Snow Peaks own standard for enjoying a campfire. There is no guarantee of flameproofing.', 32, 'Olive'),
(11, 2, 'Pants', 'EAST HARBOUR SURPLUS TOMMY COTTON TWILL FATIGUE PANT', 273, 154, '11q.jpg', 13434, '2022-01-16', 'Based on a vintage military fatigue pant the \"Tommy\" is perhaps a trouser you may not have in your quiver. Made in a garment dyed cotton twill fabric and with a more casual fit these are a new favourite here at MCS.', 21, 'Beige'),
(12, 2, 'Pants', 'FORTELA NEW STEVE DENIM TROUSER', 445, 0, '12q.jpg', 12, '2022-01-16', 'The Steve denim trouser is Fortela favourite, inspired by the white denim worn by Steve McQueen. Made from Japanese selvedge bull twill fabric and with an easy silhouette these are the jeans you\'ve been missing ', 21, 'White'),
(26, 1, 'T-shirt', 'Joseph Abboud Purple Gingham Dress Shirt', 59, 24, 'a13.jpg', 12421, '0000-00-00', 'In a subtle purple gingham pattern, this fine dress shirt by Joseph Abboud completes your dress, or dress casual look in comfort and crisp style. This fine shirt is tailored from 100% Egyptian cotton and is woven with natural stretch for the best in comfort and fit. A non-iron finish makes this shirt easy care and provides a long lasting polished look. Regular sizes are Modern Fit. Tall sizes are Modern Fit. Big sizes are Classic Fit.', 10, 'PURPLE GINGHAM'),
(27, 1, 'T-shirt', 'Joseph Abboud Purple Gingham Dress Shirt', 59, 24, 'a13.jpg', 12421, '0000-00-00', 'In a subtle purple gingham pattern, this fine dress shirt by Joseph Abboud completes your dress, or dress casual look in comfort and crisp style. This fine shirt is tailored from 100% Egyptian cotton and is woven with natural stretch for the best in comfort and fit. A non-iron finish makes this shirt easy care and provides a long lasting polished look. Regular sizes are Modern Fit. Tall sizes are Modern Fit. Big sizes are Classic Fit.', 10, 'PURPLE GINGHAM'),
(28, 1, 'T-shirt', 'Joseph Abboud Purple Gingham Dress Shirt', 59, 24, 'a13.jpg', 12421, '0000-00-00', 'In a subtle purple gingham pattern, this fine dress shirt by Joseph Abboud completes your dress, or dress casual look in comfort and crisp style. This fine shirt is tailored from 100% Egyptian cotton and is woven with natural stretch for the best in comfort and fit. A non-iron finish makes this shirt easy care and provides a long lasting polished look. Regular sizes are Modern Fit. Tall sizes are Modern Fit. Big sizes are Classic Fit.', 10, 'PURPLE GINGHAM'),
(29, 1, 'T-shirt', 'Joseph Abboud Purple Gingham Dress Shirt', 59, 24, 'a13.jpg', 12421, '0000-00-00', 'In a subtle purple gingham pattern, this fine dress shirt by Joseph Abboud completes your dress, or dress casual look in comfort and crisp style. This fine shirt is tailored from 100% Egyptian cotton and is woven with natural stretch for the best in comfort and fit. A non-iron finish makes this shirt easy care and provides a long lasting polished look. Regular sizes are Modern Fit. Tall sizes are Modern Fit. Big sizes are Classic Fit.', 10, 'PURPLE GINGHAM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating`
--

CREATE TABLE `rating` (
  `mahh` int(10) NOT NULL,
  `username` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rating`
--

INSERT INTO `rating` (`mahh`, `username`, `rating`) VALUES
(1, 'LinhChi', 3),
(1, 'QuocMinh', 5),
(2, 'LinhChi', 3),
(2, 'ThanhSang', 4),
(7, 'LinhChi', 4),
(12, 'LinhChi', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `fk_bill_product` (`makh`);

--
-- Chỉ mục cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  ADD PRIMARY KEY (`mahd`,`mahh`),
  ADD KEY `fk_cthd_mahh` (`mahh`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`mabl`),
  ADD KEY `fk_mabl_makh` (`makh`),
  ADD KEY `fk_mabl_mahh` (`mahh`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`maha`),
  ADD KEY `fk_image_mahh` (`mahh`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`mahh`);

--
-- Chỉ mục cho bảng `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`mahh`,`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `mahd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `mabl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `makh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `maha` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `mahh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk_bill_product` FOREIGN KEY (`makh`) REFERENCES `customer` (`makh`);

--
-- Các ràng buộc cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  ADD CONSTRAINT `fk_cthd_mahd` FOREIGN KEY (`mahd`) REFERENCES `bill` (`mahd`),
  ADD CONSTRAINT `fk_cthd_mahh` FOREIGN KEY (`mahh`) REFERENCES `bill` (`mahd`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_mabl_mahh` FOREIGN KEY (`mahh`) REFERENCES `product` (`mahh`),
  ADD CONSTRAINT `fk_mabl_makh` FOREIGN KEY (`makh`) REFERENCES `customer` (`makh`);

--
-- Các ràng buộc cho bảng `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_image_mahh` FOREIGN KEY (`mahh`) REFERENCES `product` (`mahh`);

--
-- Các ràng buộc cho bảng `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `FK_MAHH` FOREIGN KEY (`mahh`) REFERENCES `product` (`mahh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
