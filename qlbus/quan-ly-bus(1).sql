-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 02, 2019 lúc 02:43 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quan-ly-bus`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banvengay`
--

CREATE TABLE `banvengay` (
  `magdvn` int(6) UNSIGNED NOT NULL,
  `ngay` date NOT NULL,
  `mapx` int(4) UNSIGNED NOT NULL,
  `mavn` int(6) UNSIGNED NOT NULL,
  `sovephatra` int(11) NOT NULL,
  `sovethuve` int(11) NOT NULL,
  `sovebanduoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banvengay`
--

INSERT INTO `banvengay` (`magdvn`, `ngay`, `mapx`, `mavn`, `sovephatra`, `sovethuve`, `sovebanduoc`) VALUES
(1, '2019-01-11', 1, 3, 200, 15, 185),
(2, '2019-02-02', 2, 3, 150, 5, 145),
(3, '2019-01-03', 4, 11, 100, 20, 80),
(6, '0000-00-00', 8, 12, 1000, 111, 480),
(7, '0034-02-23', 11, 3, 500, 50, 448),
(8, '0023-03-31', 10, 13, 1000, 20, 880),
(9, '2018-01-12', 14, 10, 820, 124, 689),
(10, '1231-03-21', 9, 12, 455, 23, 411);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banvethang`
--

CREATE TABLE `banvethang` (
  `magdvt` int(4) UNSIGNED NOT NULL,
  `ngay` date NOT NULL,
  `manvbvt` int(4) UNSIGNED NOT NULL,
  `mavt` int(6) UNSIGNED NOT NULL,
  `sovephatra` int(11) NOT NULL,
  `sovethuve` int(11) NOT NULL,
  `sovebanduoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banvethang`
--

INSERT INTO `banvethang` (`magdvt`, `ngay`, `manvbvt`, `mavt`, `sovephatra`, `sovethuve`, `sovebanduoc`) VALUES
(1, '2019-01-01', 2, 2, 500, 10, 480);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diembvt`
--

CREATE TABLE `diembvt` (
  `madbvt` int(4) UNSIGNED NOT NULL,
  `tendbvt` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diembvt`
--

INSERT INTO `diembvt` (`madbvt`, `tendbvt`, `diachi`, `sdt`) VALUES
(1, 'ĐH Thủy Lợi', '175 TÂY SƠN, ĐỐNG ĐA, HÀ NỘI', '0973540339'),
(2, 'HV Bưu Chính VT', 'Km 10 Đường Nguyễn Trãi, Quận Hà Đông, Hà Nội', '0344578789'),
(3, 'BX Giáp Bát', 'BX Giáp Bát', '0979985566'),
(4, 'Bách Khoa', 'Bách Khoa - Đường Lê Thanh Nghị', '0976688996'),
(5, '2233', 'Sơn La', '038989885'),
(6, '2222', '2222', '2222'),
(7, '2234', '22', '22'),
(8, 'BX Mỹ Đình', 'BX Mỹ Đình', '0989977878');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoatdong`
--

CREATE TABLE `hoatdong` (
  `mahd` int(6) UNSIGNED NOT NULL,
  `ngay` date NOT NULL,
  `ca` int(2) NOT NULL,
  `bienso` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `matuyen` int(6) UNSIGNED NOT NULL,
  `matx` int(4) UNSIGNED NOT NULL,
  `mapx` int(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoatdong`
--

INSERT INTO `hoatdong` (`mahd`, `ngay`, `ca`, `bienso`, `matuyen`, `matx`, `mapx`) VALUES
(1, '2019-02-01', 4, '001', 1, 1, 1),
(57, '2019-02-02', 5, '002', 2, 2, 2),
(58, '2018-12-12', 9, '003', 3, 3, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(4) UNSIGNED NOT NULL,
  `ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `taikhoan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `capbac` enum('0','1','2','3') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `ten`, `taikhoan`, `matkhau`, `capbac`) VALUES
(1, 'Nguyễn Văn Nhân', 'nhansu', 'e10adc3949ba59abbe56e057f20f883e', '0'),
(2, 'Trần Đình Hành', 'dieuhanh', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(3, 'Kiều Mỹ Doanh', 'kinhdoanh', 'e10adc3949ba59abbe56e057f20f883e', '2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvienbvt`
--

CREATE TABLE `nhanvienbvt` (
  `manvbvt` int(4) UNSIGNED NOT NULL,
  `tennvbvt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `cmnd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `madbvt` int(4) UNSIGNED NOT NULL,
  `luong` int(11) NOT NULL,
  `anhnvbvt` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvienbvt`
--

INSERT INTO `nhanvienbvt` (`manvbvt`, `tennvbvt`, `ngaysinh`, `diachi`, `sdt`, `cmnd`, `madbvt`, `luong`, `anhnvbvt`) VALUES
(1, 'Vương Thị Vấn', '1995-01-16', 'Hà Nội', '0123489489', '112122115', 1, 6000000, 'jfla.gif'),
(2, 'Vàng Mỹ Miều', '1992-01-01', 'Thái Bình', '0245558878', '2233445788', 2, 6500000, 'jfla.gif'),
(3, '11', '0011-11-11', '11', '11', '11', 5, 11, 'jfla.gif'),
(4, '22', '0222-02-22', '22', '22', '22', 5, 22, '22'),
(5, '33', '0333-03-31', '33', '33', '33', 3, 33, '33'),
(6, 'jfla', '3223-12-23', 'lala', '222222', '3222233', 5, 21312323, 'jfla.gif');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuxe`
--

CREATE TABLE `phuxe` (
  `mapx` int(4) UNSIGNED NOT NULL,
  `tenpx` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `cmnd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `matuyen` int(4) UNSIGNED NOT NULL,
  `luong` int(11) NOT NULL,
  `anhpx` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phuxe`
--

INSERT INTO `phuxe` (`mapx`, `tenpx`, `ngaysinh`, `diachi`, `sdt`, `cmnd`, `matuyen`, `luong`, `anhpx`) VALUES
(1, 'Thích Đậu Phụ', '1995-01-16', 'Hà Đông', '097778774', '554456568', 4, 7000000, 'px.jpg'),
(2, 'Nguyễn Văn Chào', '1992-01-18', 'Hà Nội', '097225889', '123335556', 6, 6000000, 'px.jpg'),
(4, 'Lò Văn Chảo', '2019-01-06', 'Mộc Châu', '0989988559', '1121112233', 6, 7000000, 'px.jpg'),
(5, 'a', '1989-01-24', 'Sơn La', '038989885', '251115454', 2, 10000000, 'px.jpg'),
(7, 'tt', '0434-03-31', 'Thái Nguyên', 't', 't', 1, 6, 'px.jpg'),
(8, '3', '0033-03-31', '3', '3', '33', 1, 3, ''),
(9, '66', '0666-06-06', '66', '66', '66', 3, 66, ''),
(10, 'zzgg', '0111-11-11', 'zz', 'zz', 'zz', 3, 0, ''),
(11, '77777777', '0777-07-07', '777', '777', '777', 3, 77, ''),
(12, '4444', '0444-04-04', '4444', '4444', '44444', 2, 44, ''),
(13, 'zz', '3123-03-12', 'zz', '22222', '333333', 5, 123, 'px.jpg'),
(14, 'thaite', '0213-03-12', 'eeee', '333333', '1312323', 17, 13123, 'px.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taixe`
--

CREATE TABLE `taixe` (
  `matx` int(4) UNSIGNED NOT NULL,
  `tentx` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `cmnd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `loaibang` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `matuyen` int(4) UNSIGNED NOT NULL,
  `luong` int(11) NOT NULL,
  `anhtx` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taixe`
--

INSERT INTO `taixe` (`matx`, `tentx`, `ngaysinh`, `diachi`, `sdt`, `cmnd`, `loaibang`, `matuyen`, `luong`, `anhtx`) VALUES
(1, 'Nguyễn Văn Báo', '1989-01-01', 'Hà Đông', '0123489489', '112198849', 'E', 1, 10000000, 'smile.jpg'),
(2, 'Nguyễn Văn Hai', '1988-01-02', 'Hà Nội', '0123448878', '121254568', 'E', 2, 11000000, 'smile.jpg'),
(3, 'Trần Văn Ba', '1990-01-04', 'Hà Nam', '097335889', '212158878', 'F', 1, 12000000, 'smile.jpg'),
(4, 'Phạm Xuân Bá', '1991-01-02', 'Bắc Ninh', '0973558995', '1154668956', 'E', 2, 11000000, 'smile.jpg'),
(5, 'Phùng Trường Giang', '1989-01-24', 'Sơn La', '038989885', '251115454', 'E', 2, 10000000, 'smile.jpg'),
(7, 'Trần Thế Vinh', '1993-01-18', 'Hà Nội', '0388944658', '1548775769', 'F', 6, 12000000, 'smile.jpg'),
(8, 'Hùng Văn Hổ', '1995-01-05', 'Bắc Ninh', '0123445778', '1122445789', 'F', 1, 10000000, 'smile.jpg'),
(14, '1322e', '0123-03-12', '123', '123', '123', '2', 5, 123, 'smile.jpg'),
(20, '1122', '0011-11-11', '11', '11', '11', '1', 2, 11, 'smile.jpg'),
(24, 'ffgg', '0000-00-00', 'ff', 'ff', 'ff', 'f', 3, 0, 'smile.jpg'),
(25, 'hhgg', '0044-04-04', 'hh', 'hh', 'hh', 'h', 3, 0, 'smile.jpg'),
(28, '333333', '0033-03-31', '33', '33', '33', '3', 1, 33, '33'),
(29, '44', '0044-04-04', '44', '44', '44', '4', 4, 444, '44'),
(30, '55', '0055-05-05', '55', '55', '5555', '5', 2, 55, '55'),
(31, '22', '0022-02-22', '22', '22', '22', '2', 2, 22, '22'),
(32, '777', '0777-07-07', '77', '77', '77', '7', 3, 77, '77'),
(33, 'bb', '0222-02-22', 'bb', '222', '33332', 'e', 18, 22, 'smile.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuyen`
--

CREATE TABLE `tuyen` (
  `matuyen` int(4) UNSIGNED NOT NULL,
  `tentuyen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `giobd` time NOT NULL,
  `giokt` time NOT NULL,
  `chieudi` text COLLATE utf8_unicode_ci NOT NULL,
  `chieuve` text COLLATE utf8_unicode_ci NOT NULL,
  `tansuat` int(11) NOT NULL,
  `soluongxe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tuyen`
--

INSERT INTO `tuyen` (`matuyen`, `tentuyen`, `giobd`, `giokt`, `chieudi`, `chieuve`, `tansuat`, `soluongxe`) VALUES
(1, 'Gia Lâm - Yên Nghĩa', '05:30:00', '22:30:00', 'Bến xe Gia Lâm - Ngô Gia Khảm - Ngọc Lâm - Nguyễn Văn Cừ - Cầu Chương Dương - Trần Nhật Duật - Yên Phụ - Điểm trung chuyển Long Biên - Hàng Đậu - Hàng Cót - Hàng Gà - Hàng Điếu - Đường Thành - Phủ Doãn - Triệu Quốc Đạt - Hai Bà Trưng - Lê Duẩn - Khâm Thiên - Đường mới (Vành đai 1) - Quay đầu tại điểm mở dải phân cách - Đường mới (Vành đai 1)- Nguyễn Lương Bằng - Tây Sơn - Ngã tư Sở - Nguyễn Trãi - Trần Phú (Hà Đông) - Quang Trung (Hà Đông) - Ba La - Quốc lộ 6 - Bến xe Yên Nghĩa.', 'Bến xe Yên Nghĩa - Quốc lộ 6 - Ba La - Quang Trung (Hà Đông) - Trần Phú (Hà Đông) - Nguyễn Trãi - Ngã tư Sở - Tây Sơn - Nguyễn Lương Bằng - Xã Đàn - Quay đầu tại đối diện ngõ Xã Đàn 2 - Xã Đàn - Khâm Thiên - Nguyễn Thượng Hiền - Yết Kiêu - Trần Hưng Đạo - Quán Sứ - Hàng Da - Đường Thành - Phùng Hưng - Lê Văn Linh - Phùng Hưng (đường trong) - Phan Đình Phùng - Hàng Đậu - Trần Nhật Duật - Cầu Chương Dương - Nguyễn Văn Cừ - Nguyễn Sơn - Ngọc Lâm - Ngô Gia Khảm - Bến xe Gia Lâm.', 15, 10),
(2, 'Bác cổ - Yên Nghĩa', '06:00:00', '22:00:00', 'Bác Cổ (Bãi đỗ xe Trần Khánh Dư) - Trần Khánh Dư (đường dưới) - Trần Hưng Đạo - Lê Thánh Tông - Hai Bà Trưng - Quang Trung - Tràng Thi - Điện Biên Phủ - Trần Phú - Chu Văn An - Tôn Đức Thắng - Đường mới (Vành đai 1) - Quay đầu tại điểm mở dải phân cách - Đường mới (Vành đai 1) - Nguyễn Lương Bằng - Tây Sơn - Ngã tư Sở - Nguyễn Trãi - Trần Phú (Hà Đông) - Quang Trung (Hà Đông) - Ba La - Quốc Lộ 6 - BX Yên Nghĩa.', 'Bến xe Yên Nghĩa - Quốc Lộ 6 - Ba La - Quang Trung (Hà Đông) - Trần Phú (Hà Đông) - Nguyễn Trãi - Ngã tư Sở - Tây Sơn - Nguyễn Lương Bằng - Xã Đàn - Quay đầu tại đối diện ngõ Xã Đàn 2 - Xã Đàn - Tôn Đức Thắng - Nguyễn Thái Học - Phan Bội Châu - Hai Bà Trưng - Phan Chu Trinh - Tràng Tiền - Bác Cổ (Bãi đỗ xe Trần Khánh Dư).', 15, 10),
(3, 'Giáp Bát - Gia Lâm', '06:00:00', '22:00:00', 'Bến xe Giáp Bát - Giải Phóng - Lê Duẩn - Nguyễn Thượng Hiền - Yết Kiêu - Trần Hưng Đạo - Trần Khánh Dư - Trần Quang Khải - Trần Nhật Duật - Long Biên (Điểm quay đầu trước phố Hàng Khoai) - Trần Nhật Duật - Cầu Chương Dương - Nguyễn Văn Cừ - Nguyễn Sơn - Ngọc Lâm - Ngô Gia Khảm - Bến xe Gia Lâm', 'Bến xe Gia Lâm - Ngô Gia Khảm - Ngọc Lâm - Nguyễn Văn Cừ - Cầu Chương Dương - Trần Nhật Duật - Long Biên (Điểm quay đầu trước phố Hàng Khoai) - Trần Nhật Duật - Trần Quang Khải - Trần Khánh Dư - Trần Hưng Đạo - Lê Duẩn - Giải Phóng - Ngã 3 Đuôi Cá - Bến xe Giáp Bát.', 15, 10),
(4, 'Long Biên - Nước Ngầm', '06:00:00', '22:00:00', 'Long Biên (Yên Phụ - đoạn Hàng Than đến Hòe Nhai) - quay đầu tại đối diện phố Hàng Than - Yên Phụ - Điểm trung chuyển Long Biên - Trần Nhật Duật - Nguyễn Hữu Huân - Lý Thái Tổ - Ngô Quyền - Hai Bà Trưng - Lê Thánh Tông - Trần Thánh Tông - Tăng Bạt Hổ - Yecxanh - Lò Đúc - Trần Khát Chân - Quay đầu tại đối diện số nhà 274 Trần Khát Chân - Trần Khát Chân - Kim Ngưu - Tam Trinh - Cầu Voi - Nguyễn Tam Trinh - Đường Lĩnh Nam - Đường dẫn cầu Thanh Trì - Pháp Vân - Rẽ trái tại nút giao đường vành đai 3 và đường Ngọc Hồi (gần BX Nước Ngầm) - Ngọc Hồi - Quay đầu tại công ty ABB - Ngọc Hồi - Bến xe Nước Ngầm.', 'BX Nước Ngầm - Giải Phóng - Pháp Vân - Đường dẫn cầu Thanh Trì - Đường Lĩnh Nam - Nguyễn Tam Trinh - Kim Ngưu - Lò Đúc - Phan Chu Trinh - Lý Thái Tổ - Ngô Quyền - Hàng Vôi - Hàng Tre - Hàng Muối - Trần Nhật Duật - Điểm trung chuyển Long Biên - Yên Phụ - Long Biên (Yên Phụ - đoạn Hàng Than đến Hòe Nhai)', 15, 15),
(5, 'Linh Đàm - Phú Diễn', '07:00:00', '23:00:00', 'Linh Đàm (Khu đô thị Linh Đàm) - Nguyễn Duy Trinh - Nguyễn Hữu Thọ - Cầu Dậu - Kim Giang - Khương Đình - Nguyễn Trãi - Quay đầu tại 177 Nguyễn Trãi - Nguyễn Trãi - Nguyễn Tuân - Hoàng Minh Giám - Nguyễn Chánh - Vũ Phạm Hàm - Trung Kính - Trần Thái Tông - Tôn Thất Thuyết - Nguyễn Hoàng - Hàm Nghi - Nguyễn Cơ Thạch - Hồ Tùng Mậu - Cầu Diễn - Đường K1 Cầu Diễn - Ga Phú Diễn - Phú Diễn (Trại Gà)', 'Phú Diễn (Trại Gà) - Đường K1 Cầu Diễn - Ga Phú Diễn - Cầu Diễn - Quay đầu Doanh trại quân đội nhân dân (nhà máy Z157) - Hồ Tùng Mậu - Nguyễn Cơ Thạch - Hàm Nghi - Nguyễn Hoàng - Tôn Thất Thuyết - Trần Thái Tông - Trung Kính - Vũ Phạm Hàm - Nguyễn Chánh - Mạc Thái Tông - Hoàng Minh Giám - Nguyễn Tuân - Nguyễn Trãi - quay đầu tại ngã 4 Khuất Duy Tiến, Nguyễn Trãi - Nguyễn Trãi - Khương Đình - Kim Giang - Cầu Dậu - Nguyễn Hữu Thọ - Nguyễn Duy Trinh - Khu đô thị Linh Đàm', 30, 10),
(6, 'Giáp Bát - Cầu Giẽ', '05:30:00', '22:30:00', 'Bến xe Giáp Bát - Giải Phóng - Kim Đồng - Giải Phóng - Ngọc Hồi - Quốc Lộ 1 - Liên Ninh - Quán Gánh - Thị trấn Thường Tín - Tía - Đỗ Xá - Nghệ - Thị trấn Phú Xuyên - Guột - Cầu Giẽ (Ngã 3 đường ra cao tốc Pháp Vân - Cầu Giẽ)', 'Cầu Giẽ (Ngã 3 đường ra cao tốc Pháp Vân - Cầu Giẽ) - Quốc Lộ 1 - Guột - Thị trấn Phú Xuyên - Nghệ - Đỗ Xá - Tía - Thị trấn Thường Tín - Quán Gánh - Liên Ninh - Ngọc Hồi - Giải Phóng - Bến xe Giáp Bát.', 15, 16),
(7, 'Cầu Giấy - Nội Bài', '05:30:00', '22:30:00', 'Bãi đỗ xe Cầu Giấy - Cầu Giấy - Điểm trung chuyển Cầu Giấy (hè trước tường rào Vườn thú Hà Nội) - Cầu Giấy - Nguyễn Văn Huyên - Hoàng Quốc Việt - Phạm Văn Đồng - Cầu Thăng Long - Võ Văn Kiệt - Đường dưới cầu vượt Kim Chung - Võ Văn Kiệt - Quay đầu tại điểm mở (đối diện công ty dịch vụ hàng hóa hàng không - ACS) - Võ Văn Kiệt - Sân bay Nội Bài (Sân đỗ P2, nhà ga T1)', 'Sân bay Nội Bài (Sân đỗ P2, nhà ga T1) - Võ Văn Kiệt - Đường vào sân đỗ nhà ga T2, sân bay Nội Bài - Điểm dừng xe buýt đón trả khách (sân đỗ xe nhà ga T2) - Võ Văn Kiệt - Cầu Thăng Long - Phạm Văn Đồng - Hoàng Quốc Việt - Nguyễn Văn Huyên - Nguyễn Khánh Toàn - Trần Đăng Ninh - Cầu Giấy - Điểm trung chuyển Cầu Giấy - Cầu Giấy (đường dưới) - Bãi đỗ xe Cầu Giấy', 15, 20),
(8, '	Long Biên - Đông Mỹ', '05:30:00', '23:00:00', '', '', 20, 10),
(9, 'Bờ Hồ - Bờ Hồ', '06:00:00', '22:00:00', '	Bãi đỗ xe Bờ Hồ - Đinh Tiên Hoàng - Lê Thái Tổ - Bà Triệu - Hồ Xuân Hương - Nguyễn Bỉnh Khiêm - Trần Nhân Tông - Lê Duẩn - Khâm Thiên - Đường mới (Vành đai 1) - Quay đầu tại điểm mở dải phân cách - Đường mới (Vành đai 1) - Nguyễn Lương Bằng - Tây Sơn – Ngã Tư Sở - Láng - Láng Hạ - Huỳnh Thúc Kháng - Nguyễn Chí Thanh - Quay đầu tại đối diện số nhà 56 Nguyễn Chí Thanh - Nguyễn Chí Thanh - Chùa Láng - Đường Láng - Điểm trung chuyển Cầu Giấy - Kim Mã - Liễu Giai - Văn Cao - Hoàng Hoa Thám - Ngọc Hà - Lê Hồng Phong - Điện Biên Phủ - Phan Bội Châu - Hai Bà Trưng - Hàng Bài - Đinh Tiên Hoàng - Bãi đỗ xe Bờ Hồ', 'Bãi đỗ xe Bờ Hồ - Lê Thái Tổ - Tràng Thi - Điện Biên Phủ - Lê Hồng Phong - Đội Cấn - Liễu Giai - Kim Mã - Cầu Giấy - Điểm trung chuyển Cầu Giấy (hè trước tường rào Vườn thú Hà Nội) - Cầu Giấy - Đường Láng - Chùa Láng - Nguyễn Chí Thanh - Quay đầu tại gầm cầu vượt Nguyễn Chí Thanh - Nguyễn Chí Thanh - Huỳnh Thúc Kháng - Láng Hạ - Láng - Ngã Tư Sở - Tây Sơn - Nguyễn Lương Bằng - Xã Đàn - Quay đầu tại đối diện ngõ Xã Đàn 2 - Xã Đàn - Khâm Thiên - Lê Duẩn - Trần Nhân Tông - Quang Trung - Nguyễn Du - Phố Huế - Hàng Bài - Đinh Tiên Hoàng - Bãi đỗ xe Bờ Hồ', 30, 10),
(10, 'Long Biên - Từ Sơn', '06:00:00', '23:00:00', 'Long Biên (đối diện Đội CSGT số 1 Hà Nội - số 3 Trần Nhật Duật) - Trần Nhật Duật - Yên Phụ - Quay đầu tại đối diện 92 Yên Phụ - Điểm trung chuyển Long Biên - Trần Nhật Duật - Cầu Chương Dương - Nguyễn Văn Cừ - Ngô Gia Tự - Cầu Đuống - Hà Huy Tập - Quốc lộ 1A - Dốc Lã - Đình Bảng - Trần Phú (Từ Sơn) - Minh Khai (Từ Sơn) - Từ Sơn (Cổng bệnh viện đa khoa Từ Sơn)', 'Từ Sơn (Cổng bệnh viện đa khoa Từ Sơn) - Minh Khai (Từ Sơn) - Quay đầu tại điểm mở - Minh Khai (Từ Sơn) - Trần Phú (Từ Sơn) - Dốc Lã - Hà Huy Tập - Cầu Đuống - Ngô Gia Tự - Nguyễn Văn Cừ - Cầu Chương Dương - Trần Nhật Duật - Yên Phụ - Điểm trung chuyển Long Biên - Yên Phụ - Quay đầu tại đối diện 92 Yên Phụ - Trần Nhật Duật - Long Biên (đối diện Đội CSGT số 1 Hà Nội - số 3 Trần Nhật Duật)', 30, 15),
(11, 'CV Thống Nhất - HV Nông Nghiệp', '05:30:00', '22:00:00', 'Công viên Thống Nhất - Trần Nhân Tông - Quang Trung - Trần Hưng Đạo - Phan Chu Trinh - Lý Thái Tổ - Ngô Quyền - Hàng Vôi - Hàng Tre - Hàng Muối - Long Biên (Điểm quay đầu trước phố Hàng Khoai) - Trần Nhật Duật - Cầu Chương Dương - Đê Ngọc Thụy - Ngọc Lâm - Nguyễn Văn Cừ - Nguyễn Văn Linh - Nguyễn Đức Thuận - Ngô Xuân Quảng - HV Nông nghiệp Việt Nam', 'HV Nông nghiệp Việt Nam - Ngô Xuân Quảng - Nguyễn Đức Thuận - Nguyễn Văn Linh - Nguyễn Văn Cừ - Ngọc Lâm - Đê Ngọc Thụy - Cầu Chương Dương - Trần Nhật Duật - Long Biên (Điểm quay đầu tại phố Hàng Khoai) - Trần Nhật Duật - Nguyễn Hữu Huân - Lý Thái Tổ - Ngô Quyền - Trần Hưng Đạo - Lê Duẩn - Trần Nhân Tông - Công viên Thống Nhất', 20, 15),
(12, 'CV Nghĩa Đô - Đại Áng', '05:30:00', '22:30:00', 'Công viên Nghĩa Đô - Nguyễn Văn Huyên - Nguyễn Khánh Toàn - Đào Tấn - Liễu Giai - Nguyễn Chí Thanh - Quay đầu tại gầm cầu vượt Nguyễn Chí Thanh - Nguyễn Chí Thanh - Huỳnh Thúc Kháng - Thái Hà - Chùa Bộc - Tôn Thất Tùng - Lê Trọng Tấn - Trần Điền - Định Công - Đại Kim - Nguyễn Cảnh Dị - Nguyễn Hữu Thọ - KĐT Linh Đàm - Đường Hoàng Liệt - Ngọc Hồi - Quốc lộ 1 - Cầu Ngọc Hồi - Xã Ngọc Hồi - Đường mới - Đại Áng (cổng UBND xã Đại Áng)', 'Đại Áng (Cổng UBND xã Đại Áng) - Đường mới - Xã Ngọc Hồi - Cầu Ngọc Hồi - Quốc lộ 1 - Ngọc Hồi - Giải Phóng - Quay đầu tại chùa Pháp Vân - Giải Phóng - Đường Hoàng Liệt - KĐT Linh Đàm - Nguyễn Hữu Thọ - Nguyễn Cảnh Dị - Đại Kim - Đường Định Công - Trần Điền - Lê Trọng Tấn - Tôn Thất Tùng - Chùa Bộc - Thái Hà - Huỳnh Thúc Kháng - Nguyễn Chí Thanh - Liễu Giai - Đào Tấn - Nguyễn Khánh Toàn - Nguyễn Văn Huyên - Quay đầu tại cổng Công viên Nghĩa Đô - Công viên Nghĩa Đô', 15, 20),
(13, 'CV nước Hồ Tây - HV Cảnh Sát', '06:00:00', '22:30:00', 'Công viên nước Hồ Tây - Lạc Long Quân - Hoàng Quốc Việt - Nguyễn Văn Huyên - Tô Hiệu - Trần Quốc Hoàn - Phạm Văn Đồng - Hồ Tùng Mậu - Cầu Diễn - Hoàng Công Chất - Phan Bá Vành - Cầu Noi - Học viện Cảnh sát nhân dân - Cổ Nhuế (cạnh công ty da giầy Thụy Khuê, ngã 3 đường nội bộ Khu công nghiệp Đông Á).', 'Cổ Nhuế (cạnh công ty da giầy Thụy Khuê, ngã 3 đường nội bộ Khu công nghiệp Đông Á) - Học viện Cảnh sát nhân dân - Cầu Noi - Phan Bá Vành - Hoàng Công Chất - Cầu Diễn - Quay đầu tại Trung tâm kiểm định xe máy Cầu Diễn (Đối diện chợ Cầu Diễn) - Cầu Diễn - Hồ Tùng Mậu - Phạm Văn Đồng - Trần Quốc Hoàn - Tô Hiệu - Nguyễn Văn Huyên - Hoàng Quốc Việt - Vòng xuyến Bưởi, Hoàng Quốc Việt - Bưởi - Lạc Long Quân - Công viên nước Hồ Tây.', 30, 15),
(14, 'Bờ Hồ - Cổ Nhuế', '06:00:00', '23:00:00', 'Bờ Hồ (Bãi đỗ xe Bờ Hồ) - Cầu Gỗ - Hàng Thùng - Hàng Tre - Hàng Muối - Trần Nhật Duật - Yên Phụ (Quay đầu tại số nhà 92 Yên Phụ) - Điểm trung chuyển Long Biên - Hàng Đậu - Quán Thánh - Thụy Khuê - Lạc Long Quân - Hoàng Quốc Việt - Phạm Văn Đồng - Nam Thăng Long - Đường dẫn Chân cầu Thăng Long qua KĐT Ciputra - Cổ Nhuế (Cạnh đường vào làng Nhật Tảo).', 'Cổ Nhuế (Cạnh đường vào làng Nhật Tảo) - Đường Chân cầu Thăng Long - Đường mới Chân Cầu Thăng Long (Đối diện KĐT Ciputra) - Phạm Văn Đồng - Bãi đỗ xe Nam Thăng Long - Phạm Văn Đồng - Hoàng Quốc Việt - Vòng xuyến Bưởi, Hoàng Quốc Việt - Bưởi - Hoàng Hoa Thám - cầu vượt Hoàng Hoa Thám - Hoàng Hoa Thám - Phan Đình Phùng - Hàng Đậu - Trần Nhật Duật - Nguyễn Hữu Huân - Lò Sũ - Đinh Tiên Hoàng - Bờ Hồ (Bãi đỗ xe Bờ Hồ)', 20, 10),
(15, '	BX Gia Lâm - Phố Nỉ', '00:00:00', '00:00:00', 'Bến xe Gia Lâm - Ngô Gia Khảm - Ngọc Lâm - Nguyễn Văn Cừ - Ngô Gia Tự - Cầu Đuống - Quốc Lộ 3 - Dốc Vân - Cổ Loa - Đường cải tránh Quốc lộ 3 - Quốc lộ 3 - Đông Anh - Nguyên Khê - Phủ Lỗ - Đa Phúc - Phố Nỉ (Trung tâm thương mại Bình An)', 'Phố Nỉ (Trung tâm thương mại Bình An) - Đa Phúc - Phủ Lỗ - Nguyên Khê - Đông Anh - Đường cải tránh Quốc lộ 3 - Quốc lộ 3 - Cổ Loa - Dốc Vân - Quốc lộ 3 - Cầu Đuống - Ngô Gia Tự - Nguyễn Văn Cừ - Ngô Gia Khảm - Bến xe Gia Lâm', 15, 15),
(16, 'BX Mỹ Đình - BX Nước Ngầm', '06:00:00', '22:30:00', 'Bến xe Mỹ Đình - Phạm Hùng - Quay đầu tại Đình Thôn - Phạm Hùng - Xuân Thủy - Cầu Giấy - Đường Láng - Ngã tư Sở - Trường Chinh - Ngã tư Vọng - Giải Phóng - Ngọc Hồi - Quay đầu tại đối diện công ty ABB - Ngọc Hồi - Bến xe Nước Ngầm', '	Bến xe Nước Ngầm - Ngọc Hồi - Giải Phóng - Quảng trường bến xe Giáp Bát - Giải Phóng - Phố Vọng - Ngã tư Vọng - Trường Chinh - Ngã tư Sở - Đường Láng - Cầu Giấy - Xuân Thủy - Phạm Hùng - Bến xe Mỹ Đình', 30, 15),
(17, '	Long Biên - Nội Bài', '06:30:00', '22:30:00', 'Long Biên (Đối diện Đội CSGT số 1 Hà Nội - Số 3 Trần Nhật Duật) - Trần Nhật Duật - Yên Phụ - Quay đầu tại đối diện 92 Yên Phụ - Điểm trung chuyển Long Biên - Yên Phụ - Trần Nhật Duật - Cầu Chương Dương - Nguyễn Văn Cừ - Ngô Gia Tự - Cầu Đuống - Thiên Đức - Dốc Vân - Quốc lộ 3 - Đường Cổ Loa - Cao Lỗ - Đông Anh - Quốc lộ 3 - Nguyên Khê - Phủ Lỗ - Quốc lộ 2 - Đường nối Quốc lộ 2 và đường Võ Văn Kiệt, Võ Nguyên Giáp - Võ Nguyên Giáp - Quay đầu tại điểm mở - Võ Nguyên Giáp - Võ Văn Kiệt - Sân bay Nội Bài (Sân đỗ P2, Nhà ga T1)', 'Sân bay Nội Bài (Sân đỗ P2, Nhà ga T1) - đường trục nội cảng - Trạm thu phí Sân bay Nội Bài - Võ Văn Kiệt - Quay đầu tại điểm mở đường Võ Văn Kiệt - Võ Văn Kiệt - Đường nối Quốc lộ 2 và đường Võ Văn Kiệt - Quốc lộ 2 - Phủ Lỗ - Nguyên Khê - Đông Anh - Cao Lỗ - Đường Cổ Loa - Quốc lộ 3 - Thiên Đức - Cầu Đuống - Ngô Gia Tự - Nguyễn Văn Cừ - Cầu Chương Dương - Trần Nhật Duật - Yên Phụ - Điểm trung chuyển Long Biên - Yên Phụ - Quay đầu tại đối diện 92 Yên Phụ - Trần Nhật Duật - Long Biên (Đối diện Đội CSGT số 1 Hà Nội - Số 3 Trần Nhật Duật)', 20, 20),
(18, '	CV Nghĩa Đô - Đại Áng', '05:30:00', '10:30:00', 'Công viên Nghĩa Đô - Nguyễn Văn Huyên - Nguyễn Khánh Toàn - Đào Tấn - Liễu Giai - Nguyễn Chí Thanh - Quay đầu tại gầm cầu vượt Nguyễn Chí Thanh - Nguyễn Chí Thanh - Huỳnh Thúc Kháng - Thái Hà - Chùa Bộc - Tôn Thất Tùng - Lê Trọng Tấn - Trần Điền - Định Công - Đại Kim - Nguyễn Cảnh Dị - Nguyễn Hữu Thọ - KĐT Linh Đàm - Đường Hoàng Liệt - Ngọc Hồi - Quốc lộ 1 - Cầu Ngọc Hồi - Xã Ngọc Hồi - Đường mới - Đại Áng (cổng UBND xã Đại Áng)', 'Đại Áng (Cổng UBND xã Đại Áng) - Đường mới - Xã Ngọc Hồi - Cầu Ngọc Hồi - Quốc lộ 1 - Ngọc Hồi - Giải Phóng - Quay đầu tại chùa Pháp Vân - Giải Phóng - Đường Hoàng Liệt - KĐT Linh Đàm - Nguyễn Hữu Thọ - Nguyễn Cảnh Dị - Đại Kim - Đường Định Công - Trần Điền - Lê Trọng Tấn - Tôn Thất Tùng - Chùa Bộc - Thái Hà - Huỳnh Thúc Kháng - Nguyễn Chí Thanh - Liễu Giai - Đào Tấn - Nguyễn Khánh Toàn - Nguyễn Văn Huyên - Quay đầu tại cổng Công viên Nghĩa Đô - Công viên Nghĩa Đô', 20, 20),
(19, 'Trần Khánh Dư - Đường Bảo Sơn', '00:00:00', '00:00:00', 'Bãi đỗ xe Trần Khánh Dư - Trần Khánh Dư (đường dưới) - Bệnh viện Việt Xô - Trần Khánh Dư (đường trên) - Nguyễn Khoái - Dốc cầu Vĩnh Tuy - Vĩnh Tuy - Minh Khai - Đại La - Ngã tư Vọng - Trường Chinh - Đường Láng - Quay đầu tại đối diện số nhà 124 đường Láng - Đường Láng - Ngã tư Sở - Nguyễn Trãi - Trần Phú (Hà Đông) - Quang Trung (Hà Đông) - Vạn Phúc - Tố Hữu - Lê Trọng Tấn - Thiên Đường Bảo Sơn.', 'Thiên Đường Bảo Sơn - Lê Trọng Tấn - Tố Hữu - Vạn Phúc - Quang Trung (Hà Đông) - Trần Phú (Hà Đông) - Nguyễn Trãi - Ngã Tư Sở - Trường Chinh - Ngã tư Vọng - Đại La - Minh Khai - Vĩnh Tuy - quay đầu tại nút giao Vĩnh Tuy và đường dẫn lên đê Nguyễn Khoái - Vĩnh Tuy - Minh Khai - Nguyễn Khoái - Trần Khánh Dư (đường dưới) - Bệnh viện Việt Xô - Trần Khánh Dư (đường trên) - Bãi đỗ xe Trần Khánh Dư', 0, 0),
(20, 'Cầu Giấy - Phùng', '00:00:00', '00:00:00', 'Bãi đỗ xe Cầu Giấy - Cầu Giấy - Điểm trung chuyển Cầu Giấy (hè trước tường rào Vườn thú Hà Nội) - Cầu Giấy - Xuân Thủy - Hồ Tùng Mậu - Cầu Diễn - Nhổn - Trạm trung chuyển xe buýt Nhổn - Trôi - Phùng (Bến xe Đan Phượng)', 'Phùng (Bến xe Đan Phượng) - Quốc lộ 32 - Quay đầu tại ngã ba tượng đài liệt sĩ - Quốc lộ 32 - Trôi - Nhổn - Trạm trung chuyển xe buýt Nhổn - Cầu Diễn - Hồ Tùng Mậu - Xuân Thủy - Cầu Giấy - Điểm trung chuyển Cầu Giấy (hè trước tường rào Trường ĐHGTVT) - Cầu Giấy (đường dưới) - Bãi đỗ xe Cầu Giấy', 0, 0),
(21, 'BX Giáp Bát - BX Yên Nghĩa', '00:00:00', '00:00:00', 'Bến xe Giáp Bát - Giải Phóng - Phố Vọng - Giải Phóng - Xã Đàn - Phạm Ngọc Thạch - Chùa Bộc - Tây Sơn - Ngã tư Sở - Nguyễn Trãi - Trần Phú (Hà Đông) - Quang Trung (Hà Đông) - Ba La - Quốc Lộ 6 - Bến xe Yên Nghĩa.', 'Bến xe Yên Nghĩa - Quốc Lộ 6 - Ba La - Quang Trung (Hà Đông) - Trần Phú (Hà Đông) - Nguyễn Trãi - Ngã tư Sở - Tây Sơn - Chùa Bộc - Phạm Ngọc Thạch - Đào Duy Anh - Giải Phóng - Ngã tư Vọng - Ngã 3 Đuôi Cá - Bến xe Giáp Bát', 0, 0),
(22, '	BX Gia Lâm - Kim Mã', '00:00:00', '00:00:00', 'Bến xe Gia Lâm - Ngô Gia Khảm - Ngọc Lâm - Nguyễn Văn Cừ - Cầu Chương Dương - Trần Nhật Duật - Yên Phụ (Quay đầu tại đối diện số nhà 92 Yên Phụ) - Điểm trung chuyển Long Biên - Hàng Đậu - Quán Thánh - Nguyễn Biểu - Hoàng Diệu - Trần Phú - Kim Mã (Tòa nhà PTA Kim Mã)', 'Kim Mã (Tòa nhà PTA Kim Mã) - Giảng Võ - Giang Văn Minh - Kim Mã - Nguyễn Thái Học - Hoàng Diệu - Phan Đình Phùng - Hàng Đậu - Long Biên - Trần Nhật Duật - Cầu Chương Dương - Nguyễn Văn Cừ - Nguyễn Sơn - Ngọc Lâm - Ngô Gia Khảm - Bến xe Gia Lâm', 0, 0),
(23, 'Nguyễn Công Trứ - Nguyễn Công Trứ', '00:00:00', '00:00:00', 'Điểm đỗ xe buýt 32 Nguyễn Công Trứ - Nguyễn Công Trứ - Phố Huế - Tuệ Tĩnh - Bà Triệu - Lê Đại Hành - Hoa Lư - Đại Cồ Việt - Quay đầu tại đối diện số nhà 100 Đại Cồ Việt - Đại Cồ Việt - Tạ Quang Bửu - Lê Thanh Nghị - Giải Phóng - Phương Mai - Lương Đình Của - Đông Tác - Chùa Bộc - Tây Sơn - Quay đầu tại đối diện số nhà 127 Tây Sơn - Tây Sơn - Đặng Tiến Đông - Trần Quang Diệu - Hoàng Cầu - Đê La Thành - Giảng Võ - Cát Linh - Tôn Đức Thắng - Nguyễn Thái Học - Cửa Nam - Phùng Hưng - Lê Văn Linh - Phùng Hưng (đường trong) - Phan Đình Phùng - Hàng Đậu - Long Biên - Trần Nhật Duật - Nguyễn Hữu Huân - Lý Thái Tổ - Ngô Quyền - Hai Bà Trưng - Lê Thánh Tông - Trần Hưng Đạo - Phan Huy Chú - Hàn Thuyên - Lê Văn Hưu - Ngô Thì Nhậm - Điểm đỗ xe buýt 32 Nguyễn Công Trứ', 'Điểm đỗ xe buýt 32 Nguyễn Công Trứ - Nguyễn Công Trứ - Lò Đúc - Phan Chu Trinh - Trần Hưng Đạo - Lê Thánh Tông - Lý Thái Tổ - Ngô Quyền - Hàng Vôi - Hàng Tre - Hàng Muối - Trần Nhật Duật - Điểm trung chuyển Long Biên - Yên Phụ - Hàng Than - Quán Thánh - Hoè Nhai - Phan Đình Phùng - Lý Nam Đế - Trần Phú - Chu Văn An - Tôn Đức Thắng - Cát Linh - Giảng Võ - Đê La Thành - Hoàng Cầu - Trần Quang Diệu - Đặng Tiến Đông - Tây Sơn - Chùa Bộc - Phạm Ngọc Thạch - Lương Định Của - Phương Mai - Giải Phóng - Quay đầu tại gầm cầu vượt Ngã Tư Vọng - Lê Thanh Nghị - Tạ Quang Bửu - Đại Cồ Việt - Quay đầu tại đối diện số nhà 36 Đại Cồ Việt - Đại Cồ Việt - Hoa Lư - Lê Đại Hành - Thái Phiên - Phố Huế - Nguyễn Công Trứ - Điểm đỗ xe buýt 32 Nguyễn Công Trứ', 0, 0),
(24, 'Long Biên - Ngã Tư Sở - Cầu Giấy', '00:00:00', '00:00:00', 'Long Biên (Điểm trung chuyển Long Biên - Khoang E3.2) - Trần Nhật Duật - Trần Quang Khải - Trần Khánh Dư - Trung chuyển xe buýt Trần Khánh Dư - Nguyễn Khoái - Minh Khai - Đại La - Trường Chinh - Ngã tư Sở - Đường Láng - Cầu Giấy - Điểm trung chuyển Cầu Giấy (hè trước tường rào Trường ĐHGTVT) - Cầu Giấy (đường dưới) - Bãi đỗ xe Cầu Giấy.', '\nBãi đỗ xe Cầu Giấy - Cầu Giấy - Điểm trung chuyển Cầu Giấy (hè trước tường rào Vườn thú Hà Nội) - Cầu Giấy - Đường Láng - Trường Chinh - Đại La - Minh Khai - Nguyễn Khoái - Trần Khánh Dư - Trần Quang Khải - Trần Nhật Duật - Long Biên - Điểm trung chuyển Long Biên - Quay đầu tại đối diện 92 Yên Phụ - Điểm trung chuyển Long Biên (Khoang E3.2)', 0, 0),
(25, 'BX Nam Thăng Long - BX Giáp Bát', '00:00:00', '00:00:00', 'Bãi đỗ xe Nam Thăng Long - Phạm Văn Đồng - Nguyễn Hoàng Tôn - Lạc Long Quân - Đường Bưởi dưới (Đường bên sông Tô Lịch) - Đào Tấn - Liễu Giai - Kim Mã - Giảng Võ - Quay đầu tại 138 Giảng Võ - Giảng Võ - Cát Linh - Tôn Đức Thắng - Ô Chợ Dừa - Quay đầu tại điểm mở dải phân cách - Ô Chợ Dừa - Xã Đàn - Phạm Ngọc Thạch - Đào Duy Anh - Giải Phóng - Ngã 3 Đuôi Cá - Giải Phóng - Bến xe Giáp Bát', 'Bến xe Giáp Bát - Giải Phóng - Xã Đàn - Nguyễn Lương Bằng - Ô Chợ Dừa - Tôn Đức Thắng - Cát Linh - Giảng Võ - Núi Trúc - Kim Mã - Kim Mã (đường dưới, cạnh BĐX Ngọc Khánh) - Liễu Giai - Đào Tấn - Đường Bưởi (đường dưới bên nút giao Đội Cấn) - Lạc Long Quân - Nguyễn Hoàng Tôn - Phạm Văn Đồng - Gầm cầu Thăng Long - Xóm 1 Đông Ngạc - Tân Xuân - Phạm Văn Đồng - Bãi đỗ xe Nam Thăng Long', 0, 0),
(26, 'Mai Động - SVĐ Mỹ Đình', '00:00:00', '00:00:00', 'Mai Động (Đường vào XN buýt Thăng Long cũ, trước cầu tạm Benley, gần bãi đỗ xe Đền Lừ 2) - Nguyễn Tam Trinh - Cầu Mai Động - Kim Ngưu - Thanh Nhàn - Lê Thanh Nghị - Giải Phóng - Xã Đàn - Phạm Ngọc Thạch - Chùa Bộc - Thái Hà - Huỳnh Thúc Kháng - Nguyễn Chí Thanh - Đê La Thành - Cầu Giấy - Điểm trung chuyển Cầu Giấy (hè trước tường rào Vườn thú Hà Nội) - Cầu Giấy - Xuân Thuỷ - Hồ Tùng Mậu - Quay đầu tại cổng nghĩa trang Mai Dịch - Hồ Tùng Mậu - Lê Đức Thọ - Sân vận động Quốc Gia.', 'Sân vận động Quốc Gia - Lê Đức Thọ - Hồ Tùng Mậu - Xuân Thủy - Cầu Giấy - Điểm trung chuyển Cầu Giấy (hè trước tường rào Trường ĐHGTVT) - Cầu Giấy (đường dưới) - Đê La Thành - Nguyễn Chí Thanh - Quay đầu tại gầm cầu vượt Nguyễn Chí Thanh, Trần Duy Hưng - Nguyễn Chí Thanh - Huỳnh Thúc Kháng - Thái Hà - Chùa Bộc - Phạm Ngọc Thạch - Đào Duy Anh - Xã Đàn - Đường trên hầm Kim Liên - Đại Cồ Việt - Trần Đại Nghĩa - Lê Thanh Nghị - Thanh Nhàn - Kim Ngưu - Tam Trinh - Cầu Ku1 - Nguyễn Tam Trinh - Mai Động (Đường vào XN buýt Thăng Long cũ, qua cầu tạm Benley, gần bãi đỗ xe Đền Lừ 2).', 0, 0),
(27, 'BX Yên Nghĩa - BX Nam Thăng Long', '00:00:00', '00:00:00', 'Bến xe Yên Nghĩa - Quốc Lộ 6 - Ba La - Quang Trung (Hà Đông) - Trần Phú (Hà Đông) - Nguyễn Trãi - Đường Láng - Nguyễn Chí Thanh - Kim Mã - Cầu Giấy - Điểm trung chuyển Cầu Giấy (hè trước tường rào Vườn thú Hà Nội) - Cầu Giấy - Trần Đăng Ninh - Nguyễn Phong Sắc - Trần Quốc Hoàn - Phạm Văn Đồng - Đỗ Nhuận - Nam Thăng Long (Bãi đỗ xe buýt Nam Thăng Long).', '\nNam Thăng Long (Bãi đỗ xe buýt Nam Thăng Long) - Phạm Văn Đồng - Hoàng Quốc Việt - Điểm trung chuyển Hoàng Quốc Việt - Phạm Tuấn Tài - Trần Quốc Hoàn - Nguyễn Phong Sắc - Trần Đăng Ninh - Cầu Giấy - Cầu Giấy (đường dưới) - Điểm trung chuyển Cầu Giấy (hè trước tường rào Trường ĐHGTVT) - Cầu Giấy (đường dưới) - Kim Mã - Nguyễn Chí Thanh - Đường Láng - Nguyễn Trãi - Trần Phú (Hà Đông) - Quang Trung (Hà Đông) - Ba La - Quốc Lộ 6 - Bến xe Yên Nghĩa.', 0, 0),
(28, 'BX Giáp Bát - Đại Học Mỏ', '00:00:00', '00:00:00', 'Bến xe Giáp Bát - Giải Phóng - Xã Đàn - Ô Chợ Dừa - Hoàng Cầu - Giảng Võ - Ngọc Khánh - Kim Mã - Quay đầu tại số nhà 295 Kim Mã - Kim Mã - Cầu Giấy - Điểm trung chuyển Cầu Giấy (hè trước tường rào Vườn thú Hà Nội) - Cầu Giấy - Trần Đăng Ninh - Nguyễn Khánh Toàn - đường mới (cạnh công viên Nghĩa Đô) - Chùa Hà - Tô Hiệu - Nguyễn Phong Sắc - Trần Cung - Phạm Văn Đồng - Tân Xuân - chân cầu Thăng Long (Tân Xuân) - Hoàng Tăng Bí - Đức Thắng - Đại học Mỏ Địa Chất (Phố Viên, điểm đầu cuối tuyến 31).', 'Đại học Mỏ Địa Chất (Phố Viên, điểm đầu cuối tuyến 31) - Phố Viên - Đức Thắng - Hoàng Tăng Bí - chân cầu Thăng Long (Tân Xuân) - Tân Xuân - Phạm Văn Đồng - Bãi đỗ xe Nam Thăng Long - Phạm Văn Đồng - Trần Cung - Nguyễn Phong Sắc - Tô Hiệu - Chùa Hà - Trần Đăng Ninh - Cầu Giấy - Điểm trung chuyển Cầu Giấy (hè trước tường rào Trường ĐHGTVT) - Cầu Giấy (đường dưới) - Cầu Giấy - Kim Mã - Ngọc Khánh - Giảng Võ - Hoàng Cầu - Ô Chợ Dừa - Xã Đàn - Phạm Ngọc Thạch - Đào Duy Anh - Giải Phóng - Ngã 3 Đuôi Cá - Giải Phóng - Bến xe Giáp Bát.', 0, 0),
(29, 'BX Giáp Bát - Tân Lập', '00:00:00', '00:00:00', 'Bến xe Giáp Bát - Giải Phóng - Kim Đồng - Giải Phóng - Nguyễn Hữu Thọ - Cầu Dậu - Nghiêm Xuân Yêm - Nguyễn Xiển - Nguyễn Trãi - Quay đầu tại đối diện 241 Nguyễn Trãi - Nguyễn Trãi - Nguyễn Tuân - Hoàng Minh Giám - Nguyễn Chánh - Vòng xuyến Nguyễn Chánh, Nam Trung Yên - Nguyễn Chánh - Dương Đình Nghệ - Phạm Hùng - Hồ Tùng Mậu - Đường Cầu Diễn - Quốc lộ 32 - Nhổn - Quốc lộ 32 - Ngã 4 Trạm Trôi - Tân Lập - Tân Lập (Sân bóng xã Tân Lập)', 'Tân Lập (Sân bóng xã Tân Lập) - Tân Lập - Ngã 4 Trạm Trôi - Quốc lộ 32 - Nhổn - Quốc lộ 32 - Đường Cầu Diễn - Hồ Tùng Mậu - Phạm Hùng - Quay đầu tại Landmark 72 - Phạm Hùng - Dương Đình Nghệ - Nguyễn Chánh - Vòng xuyến Nguyễn Chánh, Nam Trung Yên - Nguyễn Chánh - Hoàng Minh Giám - Lê Văn Lương - Hoàng Đạo Thúy - Ngụy Như Kom Tum - Vũ Trọng Phụng - Nguyễn Trãi - Nguyễn Xiển - Nghiêm Xuân Yêm - Cầu Dậu - Nguyễn Hữu Thọ - Giải Phóng - Quay đầu tại chùa Pháp Vân - Giải Phóng - Bến xe Giáp Bát', 0, 0),
(30, 'Mai Động - BX Mỹ Đình', '00:00:00', '00:00:00', 'Mai Động (Đường vào XN buýt Thăng Long cũ, trước cầu tạm Benley, gần bãi đỗ xe Đền Lừ 2) - Nguyễn Tam Trinh - Kim Ngưu - Lò Đúc - Trần Xuân Soạn - Trần Nhân Tông - Lê Duẩn - Khâm Thiên - Đường mới (Vành đai 1) - Hoàng Cầu - Thái Hà - Láng Hạ - Lê Văn Lương - Hoàng Minh Giám – Nguyễn Chánh – vòng xuyến Nguyễn Chánh, Nam Trung Yên – Nguyễn Chánh – Dương Đình Nghệ - Phạm Hùng - Quay đầu trước Bến xe Mỹ Đình - Bến xe Mỹ Đình.', 'Bến xe Mỹ Đình - Phạm Hùng - Quay đầu tại đối diện Landmark 72 - Phạm Hùng - Dương Đình Nghê – Nguyễn Chánh - vòng xuyến Nguyễn Chánh, Nam Trung Yên - Nguyễn Chánh – Hoàng Minh Giám - Lê Văn Lương - Láng Hạ - Thái Hà - rẽ phải vào Yên Lãng - Quay đầu tại điểm mở dải phân cách - Yên Lãng - Hoàng Cầu - Ô Chợ Dừa - Xã Đàn - Quay đầu tại đối diện ngõ Xã Đàn 2 - Xã Đàn - Khâm Thiên - Lê Duẩn - Trần Nhân Tông - Trần Xuân Soạn - Ngô Thì Nhậm - Nguyễn Công Trứ - Lò Đúc - Trần Khát Chân - Quay đầu tại đối diện số nhà 274 Trần Khát Chân - Trần Khát Chân - Kim Ngưu - Tam Trinh - Cầu Ku1 - Nguyễn Tam Trinh - Mai Động (Đường vào XN buýt Thăng Long cũ, qua cầu tạm Benley, gần bãi đỗ xe Đền Lừ 2)', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vengay`
--

CREATE TABLE `vengay` (
  `mavn` int(6) UNSIGNED NOT NULL,
  `tenvn` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `dongia` int(11) NOT NULL,
  `matuyen` int(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vengay`
--

INSERT INTO `vengay` (`mavn`, `tenvn`, `dongia`, `matuyen`) VALUES
(1, 'Vé phổ thông', 7000, 1),
(2, 'Vé phổ thông', 7000, 2),
(3, 'Vé phổ thông', 7000, 3),
(4, 'Vé phổ thông', 7000, 4),
(5, 'Vé phổ thông', 7000, 5),
(6, 'Vé phổ thông', 7000, 6),
(7, 'Vé phổ thông', 7000, 7),
(8, 'Vé phổ thông', 7000, 8),
(9, 'Vé phổ thông', 7000, 9),
(10, 'Vé phổ thông', 7000, 10),
(11, 'Vé phổ thông', 7000, 11),
(12, 'Vé tuyến 103', 9000, 12),
(13, 'Vé phổ thông', 7000, 13),
(14, 'Vé phổ thông', 7000, 14),
(15, 'Vé phổ thông', 7000, 15),
(16, 'Vé phổ thông', 7000, 16),
(17, 'Vé phổ thông', 7000, 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vethang`
--

CREATE TABLE `vethang` (
  `mavt` int(6) UNSIGNED NOT NULL,
  `tenvt` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `dongia` int(11) NOT NULL,
  `ghichu` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vethang`
--

INSERT INTO `vethang` (`mavt`, `tenvt`, `dongia`, `ghichu`) VALUES
(1, 'Ưu tiên liên tuyến', 100000, 'Dành cho sinh viên'),
(2, 'Vé 1 tuyến', 50000, 'Dành cho sinh viên'),
(3, 'Vé 1 tuyến', 200000, 'Vé phổ thông'),
(4, 'Ưu tiên liên tuyến', 150000, 'Dành cho công nhân viên chức'),
(5, 'Ưu tiên liên tuyến', 100000, 'rưer');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `bienso` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hangsx` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `namsx` year(4) NOT NULL,
  `nhacc` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `soghe` int(11) NOT NULL,
  `matuyen` int(4) UNSIGNED NOT NULL,
  `anhxe` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `xe`
--

INSERT INTO `xe` (`bienso`, `hangsx`, `namsx`, `nhacc`, `soghe`, `matuyen`, `anhxe`) VALUES
('001', 'Toyota', 2000, 'Trường Hải', 32, 1, '01.PNG'),
('002', '1122', 2011, '11', 11, 2, '11'),
('003', 'HuynDai', 2000, 'CTCP Vinh Phú', 22, 3, '01.PNG'),
('004', 'Toyota', 2001, 'Trường Hải', 30, 4, '02.PNG'),
('005', 'HuynDai', 2005, 'Trường Hải', 32, 5, '01.PNG'),
('006', 'Toyota', 2000, 'Trường Hải', 32, 6, '01.PNG'),
('007', 'HuynDai', 2005, 'Trường Hải', 32, 7, '02.PNG'),
('008', 'Toyota', 2000, 'Trường Hải', 30, 8, '01.PNG'),
('009', 'HuynDai', 2005, 'Trường Hải', 32, 9, '02.PNG'),
('010', 'Toyota', 2000, 'Trường Hải', 30, 10, '01.PNG'),
('011', 'HuynDai', 2005, 'Trường Hải', 32, 11, '02.PNG'),
('012', 'Toyota', 2000, 'Trường Hải', 30, 12, '01.PNG'),
('013', 'HuynDai', 2005, 'Trường Hải', 32, 13, '02.PNG'),
('014', 'Toyota', 2000, 'Trường Hải', 30, 14, '01.PNG'),
('015', 'HuynDai', 2005, 'Trường Hải', 32, 15, '02.PNG');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banvengay`
--
ALTER TABLE `banvengay`
  ADD PRIMARY KEY (`magdvn`),
  ADD KEY `mapx` (`mapx`),
  ADD KEY `mavn` (`mavn`);

--
-- Chỉ mục cho bảng `banvethang`
--
ALTER TABLE `banvethang`
  ADD PRIMARY KEY (`magdvt`),
  ADD KEY `manvbvt` (`manvbvt`),
  ADD KEY `mavt` (`mavt`);

--
-- Chỉ mục cho bảng `diembvt`
--
ALTER TABLE `diembvt`
  ADD PRIMARY KEY (`madbvt`);

--
-- Chỉ mục cho bảng `hoatdong`
--
ALTER TABLE `hoatdong`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `matuyen` (`matuyen`),
  ADD KEY `bienso` (`bienso`),
  ADD KEY `matx` (`matx`),
  ADD KEY `mapx` (`mapx`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvienbvt`
--
ALTER TABLE `nhanvienbvt`
  ADD PRIMARY KEY (`manvbvt`),
  ADD KEY `madbvt` (`madbvt`);

--
-- Chỉ mục cho bảng `phuxe`
--
ALTER TABLE `phuxe`
  ADD PRIMARY KEY (`mapx`),
  ADD KEY `matuyen` (`matuyen`);

--
-- Chỉ mục cho bảng `taixe`
--
ALTER TABLE `taixe`
  ADD PRIMARY KEY (`matx`),
  ADD KEY `matuyen` (`matuyen`);

--
-- Chỉ mục cho bảng `tuyen`
--
ALTER TABLE `tuyen`
  ADD PRIMARY KEY (`matuyen`);

--
-- Chỉ mục cho bảng `vengay`
--
ALTER TABLE `vengay`
  ADD PRIMARY KEY (`mavn`),
  ADD KEY `matuyen` (`matuyen`);

--
-- Chỉ mục cho bảng `vethang`
--
ALTER TABLE `vethang`
  ADD PRIMARY KEY (`mavt`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`bienso`),
  ADD KEY `matuyen` (`matuyen`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banvengay`
--
ALTER TABLE `banvengay`
  MODIFY `magdvn` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `banvethang`
--
ALTER TABLE `banvethang`
  MODIFY `magdvt` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `diembvt`
--
ALTER TABLE `diembvt`
  MODIFY `madbvt` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `hoatdong`
--
ALTER TABLE `hoatdong`
  MODIFY `mahd` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhanvienbvt`
--
ALTER TABLE `nhanvienbvt`
  MODIFY `manvbvt` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `phuxe`
--
ALTER TABLE `phuxe`
  MODIFY `mapx` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `taixe`
--
ALTER TABLE `taixe`
  MODIFY `matx` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `tuyen`
--
ALTER TABLE `tuyen`
  MODIFY `matuyen` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `vengay`
--
ALTER TABLE `vengay`
  MODIFY `mavn` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `vethang`
--
ALTER TABLE `vethang`
  MODIFY `mavt` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `banvengay`
--
ALTER TABLE `banvengay`
  ADD CONSTRAINT `banvengay_ibfk_1` FOREIGN KEY (`mapx`) REFERENCES `phuxe` (`mapx`),
  ADD CONSTRAINT `banvengay_ibfk_2` FOREIGN KEY (`mavn`) REFERENCES `vengay` (`mavn`);

--
-- Các ràng buộc cho bảng `banvethang`
--
ALTER TABLE `banvethang`
  ADD CONSTRAINT `banvethang_ibfk_1` FOREIGN KEY (`manvbvt`) REFERENCES `nhanvienbvt` (`manvbvt`),
  ADD CONSTRAINT `banvethang_ibfk_2` FOREIGN KEY (`mavt`) REFERENCES `vethang` (`mavt`);

--
-- Các ràng buộc cho bảng `hoatdong`
--
ALTER TABLE `hoatdong`
  ADD CONSTRAINT `hoatdong_ibfk_1` FOREIGN KEY (`matuyen`) REFERENCES `tuyen` (`matuyen`),
  ADD CONSTRAINT `hoatdong_ibfk_2` FOREIGN KEY (`bienso`) REFERENCES `xe` (`bienso`),
  ADD CONSTRAINT `hoatdong_ibfk_3` FOREIGN KEY (`matx`) REFERENCES `taixe` (`matx`),
  ADD CONSTRAINT `hoatdong_ibfk_4` FOREIGN KEY (`mapx`) REFERENCES `phuxe` (`mapx`);

--
-- Các ràng buộc cho bảng `nhanvienbvt`
--
ALTER TABLE `nhanvienbvt`
  ADD CONSTRAINT `nhanvienbvt_ibfk_1` FOREIGN KEY (`madbvt`) REFERENCES `diembvt` (`madbvt`);

--
-- Các ràng buộc cho bảng `phuxe`
--
ALTER TABLE `phuxe`
  ADD CONSTRAINT `phuxe_ibfk_1` FOREIGN KEY (`matuyen`) REFERENCES `tuyen` (`matuyen`);

--
-- Các ràng buộc cho bảng `taixe`
--
ALTER TABLE `taixe`
  ADD CONSTRAINT `taixe_ibfk_1` FOREIGN KEY (`matuyen`) REFERENCES `tuyen` (`matuyen`);

--
-- Các ràng buộc cho bảng `vengay`
--
ALTER TABLE `vengay`
  ADD CONSTRAINT `vengay_ibfk_1` FOREIGN KEY (`matuyen`) REFERENCES `tuyen` (`matuyen`);

--
-- Các ràng buộc cho bảng `xe`
--
ALTER TABLE `xe`
  ADD CONSTRAINT `xe_ibfk_1` FOREIGN KEY (`matuyen`) REFERENCES `tuyen` (`matuyen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
