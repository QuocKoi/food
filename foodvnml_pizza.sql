-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 03, 2021 lúc 11:54 AM
-- Phiên bản máy phục vụ: 5.7.33-cll-lve
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `foodvnml_pizza`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `burger`
--

CREATE TABLE `burger` (
  `id_burger` int(50) NOT NULL,
  `ten_burger` text COLLATE utf8_bin NOT NULL,
  `gia_burger` text COLLATE utf8_bin NOT NULL,
  `anh_burger` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `burger`
--

INSERT INTO `burger` (`id_burger`, `ten_burger`, `gia_burger`, `anh_burger`) VALUES
(1, 'Bacon Burger', '', 'images/burger/Bacon Burger.png'),
(2, 'Cheese Butter', '', 'images/burger/Cheese Butter.png'),
(3, 'Chicken Burger', '', 'images/burger/Chicken Burger.png'),
(4, 'Country Burger', '', 'images/burger/Country Burger.png'),
(5, 'Double Beef Burger', '', 'images/burger/Double Beef Burger.png'),
(6, 'Double Cheese', '', 'images/burger/Double Cheese.png'),
(7, 'Mushroom Burger', '', 'images/burger/Mushroom Burger.png'),
(8, 'Original Burger', '', 'images/burger/Original Burger.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `drink`
--

CREATE TABLE `drink` (
  `id_drink` int(50) NOT NULL,
  `ten_drink` text COLLATE utf8_bin NOT NULL,
  `gia_drink` text COLLATE utf8_bin NOT NULL,
  `anh_drink` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `drink`
--

INSERT INTO `drink` (`id_drink`, `ten_drink`, `gia_drink`, `anh_drink`) VALUES
(1, 'Chocolate cake', '', 'images/drink/Chocolate cake.jpg'),
(2, 'Fresh Lime', '15.000', 'images/drink/Fresh Lime.jpg'),
(3, 'Iced Tea Bottle', '12.000', 'images/drink/Iced Tea Bottle.jpg'),
(4, 'Iced Tea', '10.000', 'images/drink/Iced Tea.jpg'),
(5, 'Lemonades Drink', '15.000', 'images/drink/Lemonades Drink.jpg'),
(6, 'Muffin Chocolate', '20.000', 'images/drink/Muffin Chocolate.jpg'),
(7, 'Water Bottle', '5000', 'images/drink/Water Bottle.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giamgia`
--

CREATE TABLE `giamgia` (
  `id_giamgia` int(50) NOT NULL,
  `ten_giamgia` varchar(200) COLLATE utf8_bin NOT NULL,
  `gia` text COLLATE utf8_bin NOT NULL,
  `anh_giamgia` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `giamgia`
--

INSERT INTO `giamgia` (`id_giamgia`, `ten_giamgia`, `gia`, `anh_giamgia`) VALUES
(1, 'Pepperoni Pizza', '100.000 - 500.000', 'images/pizza/Pepperoni Pizza.jpg'),
(2, 'Trio Cheese', '', 'images/pizza/Trio Cheese.jpg'),
(3, 'Apricot Chicken', '100.000-300.000', 'images/pizza/Apricot Chicken.jpg'),
(4, 'Italiano Original', '', 'images/pizza/Italiano Original.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `goidathang`
--

CREATE TABLE `goidathang` (
  `id` int(11) NOT NULL,
  `ten_khuvuc` text COLLATE utf8_bin NOT NULL,
  `sdt_khuvuc` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `goidathang`
--

INSERT INTO `goidathang` (`id`, `ten_khuvuc`, `sdt_khuvuc`) VALUES
(1, 'Hà Nội', '1900 2066'),
(2, 'Hải Phòng', '1800 9294'),
(3, 'Hồ Chí Minh', '1900 8888');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id_lienhe` int(50) NOT NULL,
  `tenkh` text COLLATE utf8_bin NOT NULL,
  `diachi` text COLLATE utf8_bin NOT NULL,
  `dienthoai` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `ykien` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id_lienhe`, `tenkh`, `diachi`, `dienthoai`, `email`, `ykien`) VALUES
(0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `hoten` varchar(200) COLLATE utf8_bin NOT NULL,
  `matkhau` varchar(200) COLLATE utf8_bin NOT NULL,
  `dienthoai` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`id`, `hoten`, `matkhau`, `dienthoai`, `email`) VALUES
(1, 'th21', '12345', '', ''),
(2, 'quoc', '12345', '', ''),
(6, 'kata', '827ccb0eea8a706c4c34a16891f84e7b', '', ''),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', ''),
(9, 'kk', 'c4ca4238a0b923820dcc509a6f75849b', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pasta`
--

CREATE TABLE `pasta` (
  `id_pasta` int(50) NOT NULL,
  `ten_pasta` text COLLATE utf8_bin NOT NULL,
  `anh_pasta` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `pasta`
--

INSERT INTO `pasta` (`id_pasta`, `ten_pasta`, `anh_pasta`) VALUES
(1, 'BBQ chicken breast', 'images/pasta/BBQ chicken breast.jpg'),
(2, 'Bolognese Pasta', 'images/pasta/Bolognese Pasta.jpg'),
(3, 'Molto Tagliatelle', 'images/pasta/Molto Tagliatelle.jpg'),
(4, 'Pene Salmone', 'images/pasta/Pene Salmone.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pizza`
--

CREATE TABLE `pizza` (
  `id_pizza` int(11) NOT NULL,
  `ten_pizza` text COLLATE utf8_bin NOT NULL,
  `gia_pizza` text COLLATE utf8_bin NOT NULL,
  `anh_pizza` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `pizza`
--

INSERT INTO `pizza` (`id_pizza`, `ten_pizza`, `gia_pizza`, `anh_pizza`) VALUES
(1, 'Apricot Chicken', '250000', 'images/pizza/Apricot Chicken.jpg'),
(2, 'Chicken Hawaii', '250000', 'images/pizza/Chicken Hawaii.jpg'),
(3, 'Grand Italiano', '250000', 'images/pizza/Grand Italiano.jpg'),
(4, 'Hawaii Vegetarian Pizza', '250000', 'images/pizza/Hawaii Vegetarian Pizza.jpg'),
(5, 'Italiano Original', '250000', 'images/pizza/Italiano Original.jpg'),
(6, 'Pepperoni Calzone', '250000', 'images/pizza/Pepperoni Calzone.jpg'),
(7, 'Pepperoni Pizza', '250000', 'images/pizza/Pepperoni Pizza.jpg'),
(8, 'Primo Meat', '250000', 'images/pizza/Primo Meat.jpg'),
(9, 'Summer Pizza', '250000', 'images/pizza/Summer Pizza.jpg'),
(10, 'Supreme Pizza', '250000', 'images/pizza/Supreme Pizza.jpg'),
(11, 'Trio Cheese', '250000', 'images/pizza/Trio Cheese.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
