-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 07, 2023 lúc 01:04 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `booking`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`id`, `id_user`, `name`, `type`, `key`, `value`) VALUES
(6, 56, '', '', 'Khu vực', 'miền nam'),
(7, 56, '', '', 'Type', 'Động vật'),
(10, 52, '', '', 'Thương hiệu', 'mì hảo hảo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `id_post`, `id_user`, `fullname`, `comment`, `update_at`) VALUES
(2, 1, 56, 'bran', 'alo minh vương', '0000-00-00 00:00:00'),
(3, 1, 56, 'bran', 'alo minh vương', '0000-00-00 00:00:00'),
(4, 1, 56, 'bran', 'alo minh vương', '0000-00-00 00:00:00'),
(5, 1, 56, 'bran', 'alo', '0000-00-00 00:00:00'),
(6, 6, 52, 'hồ thị ngọc trang', 'post có id = 6', '0000-00-00 00:00:00'),
(7, 1, 52, 'hồ thị ngọc trang', 'hfubbsdfs', '0000-00-00 00:00:00'),
(8, 1, 52, 'hồ thị ngọc trang', '3110', '0000-00-00 00:00:00'),
(9, 1, 52, 'hồ thị ngọc trang', 'hè lô', '0000-00-00 00:00:00'),
(10, 1, 52, 'hồ thị ngọc trang', 'alo', '0000-00-00 00:00:00'),
(11, 1, 52, 'hồ thị ngọc trang', 'alo', '0000-00-00 00:00:00'),
(12, 1, 52, 'hồ thị ngọc trang', 'alo', '0000-00-00 00:00:00'),
(13, 1, 52, 'hồ thị ngọc trang', 'alo', '0000-00-00 00:00:00'),
(14, 1, 52, 'hồ thị ngọc trang', 'alp', '0000-00-00 00:00:00'),
(15, 1, 52, 'hồ thị ngọc trang', 'alo', '0000-00-00 00:00:00'),
(16, 1, 52, 'hồ thị ngọc trang', 'alo', '0000-00-00 00:00:00'),
(17, 1, 52, 'hồ thị ngọc trang', 'alo', '0000-00-00 00:00:00'),
(18, 1, 52, 'hồ thị ngọc trang', 'aloha', '0000-00-00 00:00:00'),
(19, 1, 52, 'hồ thị ngọc trang', 'alo', '0000-00-00 00:00:00'),
(20, 1, 52, 'hồ thị ngọc trang', '3110', '0000-00-00 00:00:00'),
(22, 1, 56, 'bran', 'alo', '0000-00-00 00:00:00'),
(23, 6, 52, 'hồ thị ngọc trang', 'Vậy thì đây là cmt thứ 2 của post có id là 6', '0000-00-00 00:00:00'),
(24, 6, 52, 'hồ thị ngọc trang', 'これは　イヂ＝ろく', '0000-00-00 00:00:00'),
(25, 6, 52, 'hồ thị ngọc trang', 'alo 6', '0000-00-00 00:00:00'),
(26, 0, 54, 'HỒ THỊ NGỌC TRANG 4', 'Cho mình về sản phẩm với ạ', '0000-00-00 00:00:00'),
(27, 0, 54, 'HỒ THỊ NGỌC TRANG 4', 'ủa', '0000-00-00 00:00:00'),
(28, 0, 54, 'HỒ THỊ NGỌC TRANG 4', 'ủa', '0000-00-00 00:00:00'),
(29, 6, 54, 'HỒ THỊ NGỌC TRANG 4', 'ủa', '0000-00-00 00:00:00'),
(30, 7, 54, 'HỒ THỊ NGỌC TRANG 4', 'Chào bạn cho mình xin chút thông tin về sản phẩm được không ạ', '0000-00-00 00:00:00'),
(31, 7, 54, 'HỒ THỊ NGỌC TRANG 4', 'Cho mình xin phương thức liên hệ', '0000-00-00 00:00:00'),
(32, 7, 54, 'HỒ THỊ NGỌC TRANG 4', 'Để mình gửi bạn một vài vid mình đã quay nếu bạn ưng thì mình bắt tay vào làm việc luôn', '0000-00-00 00:00:00'),
(33, 0, 46, 'kol444', '', '0000-00-00 00:00:00'),
(34, 4, 46, 'kol444', 'hello', '0000-00-00 00:00:00'),
(35, 8, 52, 'hồ thị ngọc trang', 'hello', '0000-00-00 00:00:00'),
(36, 4, 52, 'hồ thị ngọc trang', 'em chào cô', '0000-00-00 00:00:00'),
(37, 4, 46, 'kol444', 'xin chào', '0000-00-00 00:00:00'),
(38, 0, 46, 'kol444', '', '0000-00-00 00:00:00'),
(39, 4, 56, 'bran', 'xin chào', '0000-00-00 00:00:00'),
(40, 10, 56, 'bran', 'xin chào', '0000-00-00 00:00:00'),
(41, 4, 46, 'kol444', 'xin chào 123', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_kol`
--

CREATE TABLE `tbl_kol` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_kol`
--

INSERT INTO `tbl_kol` (`id`, `id_user`, `key`, `value`, `status`, `update_at`) VALUES
(40, 46, 'Youtube', 'https://music.youtube.com/12', '', '2023-12-03 07:27:51'),
(41, 46, 'Facebook', 'https://www.facebook.com/', '', '0000-00-00 00:00:00'),
(42, 46, 'Zalo', '0904059246', '', '0000-00-00 00:00:00'),
(45, 54, 'Birth', '10/09/2023', '', '2023-09-24 17:34:31'),
(46, 54, 'Youtube', 'https://www.youtube.com/watch?v=SMyzXbdGxVY&amp;list=RDSMyzXbdGxVY&amp;start_radio=1&amp;ab_channel=tlinh', '', '0000-00-00 00:00:00'),
(47, 54, 'Youtube', 'sad', '', '0000-00-00 00:00:00'),
(48, 46, 'Type', 'Thời trang,Ẩm thực', '', '0000-00-00 00:00:00'),
(49, 54, 'Instagram', 'ín', '', '0000-00-00 00:00:00'),
(50, 54, 'Type', 'Nghệ thuật,Động vật', '', '0000-00-00 00:00:00'),
(52, 56, 'Tiktok', '2', '', '2023-09-27 10:04:45'),
(53, 56, 'Facebook', '1', '', '2023-09-27 10:04:29'),
(54, 46, 'Zalo', '0123456789', '', '0000-00-00 00:00:00'),
(55, 46, 'Birth', '15/02/2016', '', '0000-00-00 00:00:00'),
(56, 52, 'Type', 'Du lịch,Gia đình,Nghệ thuật', '', '0000-00-00 00:00:00'),
(57, 52, 'twitter', 'http://localhost:3333/kol/profile1', '', '2023-11-30 08:41:45'),
(58, 56, 'Type', 'Sức khỏe,Du lịch,Giải trí', '', '0000-00-00 00:00:00'),
(59, 46, 'Tiktok', 'https://www.tiktok.com/12', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `order_by` tinyint(1) NOT NULL DEFAULT 0,
  `name_by` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `name`, `note`, `order_by`, `name_by`, `user_id`, `create_at`) VALUES
(1, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(2, 'Canh Chua Cá Lóc', 'Không để nước', 0, '', 1, '2022-08-08 16:33:47'),
(3, 'Cá Rô Chiên', 'Nước mém gốc', 1, 'Lưu Phan Tú', 1, '2022-08-08 16:36:27'),
(4, 'Cơm Chiên Hải Sản', 'Không để cơm', 1, 'Ý Nhi', 1, '2022-08-08 16:42:13'),
(5, 'Kiến Rang', '', 1, 'Hải Tú', 1, '2022-08-08 16:43:54'),
(6, 'Canh rông biển', 'Đừng để tiêu', 0, '', 2, '2022-08-08 16:51:22'),
(7, 'Rau câu dừa', 'Xin thêm cái muỗng', 0, '', 1, '2022-08-09 13:14:09'),
(8, 'Bò Xào Nấm', '', 1, 'Lê Thanh Minh', 1, '2022-08-09 14:03:54'),
(9, 'Râu tôm nấu với ruột bầu', 'Chồng chan vợ húp gật đầu khen ngon', 0, '', 1, '2022-08-09 14:11:43'),
(10, 'Tầm Xào', '', 0, '', 1, '2022-08-09 14:12:14'),
(11, 'Ốc Khỉ', '', 1, 'Trương Chí Bình', 1, '2022-08-09 14:12:34'),
(12, 'Rùa Nấu Thuốc bắc', '', 0, '', 1, '2022-08-09 14:12:57'),
(21, 'Canh chua', '', 0, '', 1, '2022-08-10 08:21:52'),
(22, 'Cá chiên cà', '', 1, 'Sơn Tùng', 1, '2022-08-10 08:22:14'),
(23, 'dgfdg', 'gdfg', 0, '', 1, '2022-08-10 09:57:15'),
(24, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(25, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(26, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(27, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(28, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(29, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(30, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(31, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(32, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(33, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(34, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(35, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(36, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(37, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(38, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(39, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(40, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(41, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(42, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(43, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(44, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(45, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(46, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(47, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(48, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(49, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(50, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(51, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(52, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(53, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(54, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(55, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(56, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(57, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(58, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(59, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(60, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(61, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(62, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(63, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(64, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(65, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(66, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(67, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(68, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(69, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(70, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(71, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(72, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(73, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(74, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(75, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(76, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(77, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(78, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(79, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(80, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(81, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(82, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(83, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(84, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(85, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(86, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(87, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(88, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(89, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(90, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(91, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(92, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(93, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(94, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(95, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(96, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(97, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(98, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(99, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(100, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(101, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(102, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(103, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(104, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(105, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(106, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(107, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(108, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(109, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(110, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(111, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(112, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(113, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(114, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(115, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(116, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(117, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(118, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(119, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(120, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(121, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(122, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(123, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(124, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(125, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(126, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(127, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(128, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(129, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(130, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(131, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(132, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(133, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(134, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(135, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(136, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(137, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(138, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(139, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(140, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(141, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(142, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(143, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(144, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(145, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(146, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(147, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(148, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(149, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(150, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(151, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(152, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(153, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(154, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(155, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(156, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(157, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(158, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(159, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(160, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(161, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(162, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(163, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(164, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(165, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(166, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(167, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(168, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(169, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(170, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(171, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(172, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(173, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(174, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(175, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(176, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(177, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(178, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(179, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(180, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(181, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(182, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(183, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(184, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(185, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(186, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(187, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(188, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(189, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(190, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(191, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(192, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(193, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(194, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(195, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(196, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(197, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(198, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(199, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(200, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(201, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(202, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(203, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(204, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(205, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(206, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(207, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(208, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(209, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(210, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(211, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(212, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(213, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(214, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(215, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(216, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(217, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(218, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(219, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(220, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(221, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(222, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(223, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(224, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(225, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(226, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(227, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(228, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(229, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(230, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(231, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(232, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(233, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(234, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(235, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(236, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(237, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(238, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(239, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(240, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(241, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(242, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(243, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(244, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(245, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(246, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(247, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(248, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(249, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(250, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(251, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(252, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(253, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(254, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(255, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(256, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(257, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(258, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(259, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(260, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(261, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(262, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(263, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(264, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(265, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(266, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(267, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(268, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(269, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(270, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(271, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(272, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(273, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(274, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(275, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(276, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(277, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(278, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(279, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(280, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(281, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(282, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(283, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(284, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(285, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(286, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(287, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(288, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(289, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(290, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(291, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(292, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(293, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(294, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(295, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(296, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(297, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(298, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(299, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(300, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(301, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(302, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(303, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(304, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(305, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(306, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(307, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(308, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(309, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(310, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(311, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(312, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(313, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(314, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(315, 'Cá Kho Tộ', 'Xin Trái Ớt', 0, '', 1, '2022-08-08 16:15:55'),
(316, 'Test nè', '', 0, '', 1, '2022-08-10 15:18:28'),
(317, 'ádasd', 'ádsad', 0, '', 1, '2022-08-10 15:18:48'),
(318, 'ádasdasd', '', 0, '', 1, '2022-08-10 15:19:33'),
(323, 'hello', '', 0, '', 3, '2022-08-10 15:34:12'),
(324, 'Cơm chiên', '', 0, '', 3, '2022-08-10 15:34:19'),
(325, 'Cá chiên', '', 0, '', 3, '2022-08-10 15:34:53'),
(326, 'Cá nướng', '', 0, '', 3, '2022-08-10 15:35:50'),
(327, 'Hào sống', '', 0, '', 3, '2022-08-10 15:35:55'),
(328, 'Cua rang me', '', 0, '', 3, '2022-08-10 15:36:05'),
(329, 'Trâu gác bếp', '', 0, '', 3, '2022-08-10 15:36:10'),
(330, 'Trâu Nướng Than Đỏ', '', 1, 'Cao Thiên Nhi', 1, '2022-08-10 15:52:54'),
(331, 'lkl;fk;eldsfe', 'l;dkwfl;ke;lfsdf', 0, '', 4, '2023-08-15 19:31:50'),
(332, 'a.skj klsajsfl', 'a fkjsalkfj', 1, 'kj elkf jlksdjklf', 4, '2023-08-15 19:32:03'),
(333, 'Tàu hủ', 'thêm rau găm', 0, '', 5, '2023-08-24 15:02:47'),
(334, 'màn thầu', '', 0, '', 5, '2023-08-28 23:29:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `money` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `id_user`, `fullname`, `title`, `content`, `type`, `money`, `create_at`) VALUES
(4, 52, 'hồ thị ngọc trang', 'Mấy bạn làm về đồ chơi ơi ', 'Đồ chơi bong bóng dành em bé, cần 1 bạn hay làm về đồ chơi cho trẻ em . Nữ càng tốt ', 'Đồ chơi', '12k', '2023-09-29 16:55:12'),
(5, 56, 'bran', 'Giới thiệu phần mềm học tiếng anh ', 'Mình cần 1 bạn nam có thể review giúp mình một phần mềm tiếng anh của mình , ưu tiên làm về mảng tiếng anh nhé 🥰 . ', 'con người', '12k', '2023-10-11 14:26:46'),
(6, 52, 'hồ thị ngọc trang', 'Tìm kiếm food review', 'Mình cần người ở phía nam cụ thể là cần thơ , có thể lại quán quay review trà sữa , có thể chi khoảng 1 triệu ạ . Ai có hứng thú thì liên hệ mình nhé ', 'đồ ăn', '5 triệu', '2023-11-01 20:19:33'),
(7, 54, 'HỒ THỊ NGỌC TRANG 4', 'Tìm 2 bạn có thể giới thiệu về mỹ phẩm', 'Tớ cần 2 bạn có thể tạo vid tiktok để giới thiệu 1 sản phẩm dưỡng ẩm cho da mặt , mình có thể chi khoảng 5 triệu hoặc hơn nếu vid có tương tác tốt', 'Mỹ phẩm', '5 triệu', '2023-11-05 22:26:46'),
(8, 52, 'hồ thị ngọc trang', 'Tìm 2 bạn có thể giới thiệu về mỹ phẩm', 'hello', 'Mỹ phẩm', '5 triệu', '2023-11-27 10:55:34'),
(9, 52, 'hồ thị ngọc trang', 'Tìm 2 bạn có thể giới thiệu về mỹ phẩm 3', 'báo cáo', 'Mỹ phẩm', '5 triệu', '2023-11-30 08:38:12'),
(10, 56, 'bran', 'Review bánh tráng phơi sương', 'Mình cần 1 bạn KOC review shop của mình về mặt hàng bánh tráng phơi sương MT , bạn nào thấy ổn thì bình luận nhé', 'Đồ ăn vặt', '2 triệu', '2023-12-01 23:40:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `id_del` int(11) NOT NULL,
  `delete_at` datetime NOT NULL,
  `del` int(11) NOT NULL DEFAULT 0,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fullname`, `username`, `password`, `email`, `code`, `role`, `create_at`, `id_del`, `delete_at`, `del`, `update_at`) VALUES
(1, 'Bùi Khôi', 'khoibk', 'fbe805b93ce37704b867bcfb2e4b9922', 'khoibk@fsoft.com.vn', NULL, -1, '2022-08-08 16:08:53', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(2, 'Khôi Đẹp Trai', 'khoidz', 'a567d260dcce27322dc9403161f8ab91', 'khoideptrai@gmail.com', NULL, 0, '2022-08-08 16:51:01', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(4, 'Khôi', 'tuilaAdm', 'fbe805b93ce37704b867bcfb2e4b9922', 'heh123e@gmail.com', NULL, 0, '2023-08-15 19:31:37', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(5, 'chang', 'chang', '14e1b600b1fd579f47433b88e8d85291', 'hothingoctrang2001@gmail.com', NULL, -1, '2023-08-24 14:57:17', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(17, 'changbra', 'changbra', '14e1b600b1fd579f47433b88e8d85291', 'hothingoctrang2001@gmail.com', NULL, 2, '2023-08-25 00:15:33', 0, '2023-09-05 09:54:45', 0, '0000-00-00 00:00:00'),
(18, 'testb', 'tetb', '14e1b600b1fd579f47433b88e8d85291', 'hothingoctrang2001@gmail.com', NULL, 2, '2023-08-25 14:14:54', 0, '2023-09-05 09:40:51', 0, '0000-00-00 00:00:00'),
(23, 'ちゃんchang', 'mistgran', '14e1b600b1fd579f47433b88e8d85291', 'kunzamtac@gmail.com', NULL, 2, '2023-08-28 22:27:25', 5, '2023-09-11 10:43:58', 1, '2023-09-05 09:54:56'),
(46, 'kol444', 'kol', '14e1b600b1fd579f47433b88e8d85291', 'htntrang1900777@student.ctuetedu', NULL, 1, '2023-09-04 14:58:54', 5, '2023-11-30 08:35:06', 0, '2023-09-15 11:13:46'),
(47, 'kol2', 'kol2', '14e1b600b1fd579f47433b88e8d85291', 'kunzamtac@gmail.com', NULL, 1, '2023-09-04 15:27:38', 5, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(48, 'kol3', 'kol3', '14e1b600b1fd579f47433b88e8d85291', 'kunzamtacC@gmail.com', NULL, 1, '2023-09-04 16:45:03', 5, '0000-00-00 00:00:00', 0, '2023-09-04 18:24:04'),
(49, 'kol3', 'kol4', '14e1b600b1fd579f47433b88e8d85291', 'kunzamtac@gmail.com', NULL, 1, '2023-09-04 22:11:42', 5, '2023-12-01 23:21:25', 1, '0000-00-00 00:00:00'),
(50, 'adawd', 'adawd', '14e1b600b1fd579f47433b88e8d85291', 'kunzamtac@gmail.com', NULL, 1, '2023-09-04 23:52:23', 5, '2023-09-04 23:52:37', 1, '0000-00-00 00:00:00'),
(51, 'chang555', 'missgran', '14e1b600b1fd579f47433b88e8d85291', 'htntrang1900777@student.ctuetedu', NULL, 2, '2023-09-11 10:35:53', 0, '0000-00-00 00:00:00', 0, '2023-09-15 11:14:23'),
(52, 'hồ thị ngọc trang', 'testid', '14e1b600b1fd579f47433b88e8d85291', 'htntrang1900777@student.ctuetedu', NULL, 2, '2023-09-11 10:37:16', 0, '0000-00-00 00:00:00', 0, '2023-09-15 11:09:31'),
(53, 'kol1', 'kol1', '14e1b600b1fd579f47433b88e8d85291', 'kunzamtac@gmail.com', NULL, 1, '2023-09-11 10:38:33', 5, '2023-09-11 10:48:36', 1, '0000-00-00 00:00:00'),
(54, 'HỒ THỊ NGỌC TRANG 4', 'Trang', '14e1b600b1fd579f47433b88e8d85291', 'htntrang1900777@student.ctuet.ed', NULL, 2, '2023-09-11 10:48:53', 0, '0000-00-00 00:00:00', 0, '2023-09-13 20:11:50'),
(55, 'kol333', 'changte', '14e1b600b1fd579f47433b88e8d85291', 'hothingoctrang2001@gmail.com', NULL, 1, '2023-09-14 14:39:01', 5, '2023-11-27 10:48:16', 1, '2023-09-15 10:34:55'),
(56, 'bran', 'bra', '14e1b600b1fd579f47433b88e8d85291', 'hothingoctrang2001@gmail.com', NULL, 2, '2023-09-21 09:26:29', 5, '2023-12-03 07:25:30', 1, '2023-09-21 09:29:12'),
(57, 'trang', 'ngoc', '14e1b600b1fd579f47433b88e8d85291', 'hothingoctrang2001@gmail.com', NULL, 1, '2023-10-11 14:23:15', 0, '0000-00-00 00:00:00', 0, '2023-11-27 10:48:42'),
(58, 'Vương Diệp', 'min', '14e1b600b1fd579f47433b88e8d85291', 'vuongdiep2204@gmail.com', NULL, 1, '2023-11-05 21:24:57', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(59, 'Phúc', 'Phúc', '14e1b600b1fd579f47433b88e8d85291', 'phuc@gmail.com', NULL, 1, '2023-11-05 21:25:32', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(60, 'Vương Diệp', 'minnn', '14e1b600b1fd579f47433b88e8d85291', 'vuongdiep2204@gmail.com', NULL, 1, '2023-11-05 21:27:02', 0, '0000-00-00 00:00:00', 0, '2023-12-01 23:06:06'),
(61, 'dat123', 'datct', '14e1b600b1fd579f47433b88e8d85291', 'nxdat@gmail.com', NULL, 1, '2023-11-05 21:28:11', 5, '2023-12-03 07:24:12', 1, '2023-12-03 07:23:59'),
(62, 'trang0', 'user', '14e1b600b1fd579f47433b88e8d85291', 'htntrang1900777@student.ctuet.ed', NULL, 1, '2023-11-27 10:50:11', 5, '2023-12-01 23:05:10', 1, '2023-12-01 22:58:37'),
(63, 'chang12', 'chang12', '14e1b600b1fd579f47433b88e8d85291', 'hothingoctrang2001@gmail.com', NULL, 1, '2023-12-03 07:25:16', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_kol`
--
ALTER TABLE `tbl_kol`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `tbl_kol`
--
ALTER TABLE `tbl_kol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=335;

--
-- AUTO_INCREMENT cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
