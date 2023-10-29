-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2023 lúc 09:55 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doanweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cho`
--

CREATE TABLE `cho` (
  `MACHO` varchar(7) NOT NULL,
  `MADANHMUC` varchar(3) NOT NULL,
  `NGAYSINH` date NOT NULL,
  `GIOITINH` varchar(3) NOT NULL,
  `MAUSAC` varchar(9) NOT NULL,
  `CANNANG` varchar(6) NOT NULL,
  `TINHTRANGTIEMCHUNG` varchar(13) NOT NULL,
  `TINHTRANGSUCKHOE` varchar(3) NOT NULL,
  `GIATIEN` varchar(13) NOT NULL,
  `MOTA` varchar(11) NOT NULL,
  `HINHANH` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cho`
--

INSERT INTO `cho` (`MACHO`, `MADANHMUC`, `NGAYSINH`, `GIOITINH`, `MAUSAC`, `CANNANG`, `TINHTRANGTIEMCHUNG`, `TINHTRANGSUCKHOE`, `GIATIEN`, `MOTA`, `HINHANH`) VALUES
('SP00282', 'A01', '2023-09-04', 'Đực', 'Nâu đỏ', '13KG', 'Đã tiêm 1 mũi', 'Tốt', '15.000.000VND', 'Thuần chủng', ''),
('SP00283', 'A02', '2023-03-22', 'Cái', 'Nâu trắng', '4.5KG', 'Đã tiêm 1 mũi', 'Tốt', '22.000.000VND', 'Thuần chủng', ''),
('SP00284', 'A03', '2023-02-21', 'Cái', 'Trắng', '12.5KG', 'Đã tiêm 1 mũi', 'Tốt', '12.000.000VND', 'Thuần chủng', ''),
('SP00285', 'A04', '2023-01-03', 'Đực', 'Vàng đậm', '12.5KG', 'Đã tiêm 1 mũi', 'Tốt', '11.000.000VND', 'Thuần chủng', ''),
('SP00286', 'A05', '2023-08-03', 'Cái', 'Nâu', '3KG', 'Đã tiêm 1 mũi', 'Tốt', '8.500.000VND', 'Thuần chủng', ''),
('SP00287', 'A06', '2023-04-25', 'Cái', 'Đen trắng', '12.5KG', 'Đã tiêm 1 mũi', 'Tốt', '10.000.000VND', 'Thuần chủng', ''),
('SP00288', 'A07', '2023-01-29', 'Đực', 'Nâu vàng', '3KG', 'Đã tiêm 1 mũi', 'Tốt', '8.500.000VND', 'Thuần chủng', ''),
('SP00289', 'A01', '2023-05-05', 'Cái', 'Đen trắng', '14KG', 'Đã tiêm 1 mũi', 'Tốt', '17.000.000VND', 'Thuần chủng', ''),
('SP00290', 'A02', '2023-03-01', 'Đực', 'Nâu trắng', '5KG', 'Đã tiêm 1 mũi', 'Tốt', '22.000.000VND', 'Thuần chủng', ''),
('SP00291', 'A03', '2023-05-23', 'Đực', 'Trắng', '13KG', 'Đã tiêm 1 mũi', 'Tốt', '13.000.000VND', 'Thuần chủng', ''),
('SP00292', 'A04', '2023-05-15', 'Cái', 'Vàng nhạt', '13KG', 'Đã tiêm 1 mũi', 'Tốt', '12.000.000VND', 'Thuần chủng', ''),
('SP00293', 'A05', '2023-04-18', 'Đực', 'Trắng', '3.5KG', 'Đã tiêm 1 mũi', 'Tốt', '9.000.000VND', 'Thuần chủng', ''),
('SP00294', 'A06', '2023-02-25', 'Cái', 'Đen trắng', '13KG', 'Đã tiêm 1 mũi', 'Tốt', '12.000.000VND', 'Thuần chủng', ''),
('SP00295', 'A07', '2023-04-21', 'Cái', 'Nâu vàng', '3.5KG', 'Đã tiêm 1 mũi', 'Tốt', '9.500.000VND', 'Thuần chủng', ''),
('SP00296', 'A01', '2023-01-13', 'Cái', 'Nâu', '12.5KG', 'Đã tiêm 1 mũi', 'Tốt', '19.000.000VND', 'Thuần chủng', ''),
('SP00297', 'A02', '2023-03-02', 'Cái', 'Nâu trắng', '5.5KG', 'Đã tiêm 1 mũi', 'Tốt', '25.000.000VND', 'Thuần chủng', ''),
('SP00298', 'A03', '2023-12-03', 'Đực', 'Trắng', '13.5KG', 'Đã tiêm 1 mũi', 'Tốt', '14.000.000VND', 'Thuần chủng', ''),
('SP00299', 'A04', '2023-03-17', 'Cái', 'Vàng nhạt', '13.5KG', 'Đã tiêm 1 mũi', 'Tốt', '13.000.000VND', 'Thuần chủng', ''),
('SP00300', 'A05', '2023-03-05', 'Đực', 'Nâu', '4KG', 'Đã tiêm 1 mũi', 'Tốt', '9.500.000VND', 'Thuần chủng', ''),
('SP00301', 'A06', '2023-04-18', 'Đực', 'Nâu đỏ', '13.5KG', 'Đã tiêm 1 mũi', 'Tốt', '13.000.000VND', 'Thuần chủng', ''),
('SP00302', 'A07', '2023-01-30', 'Cái', 'Nâu vàng', '4KG', 'Đã tiêm 1 mũi', 'Tốt', '10.000.000VND', 'Thuần chủng', ''),
('SP00303', 'A01', '2023-01-16', 'Đực', 'Hồng phấn', '13.5KG', 'Đã tiêm 1 mũi', 'Tốt', '20.000.000VND', 'Thuần chủng', ''),
('SP00304', 'A02', '2023-04-19', 'Đực', 'Nâu trắng', '6KG', 'Đã tiêm 1 mũi', 'Tốt', '25.000.000VND', 'Thuần chủng', ''),
('SP00305', 'A03', '2023-05-31', 'Đực', 'Trắng', '14KG', 'Đã tiêm 1 mũi', 'Tốt', '15.000.000VND', 'Thuần chủng', ''),
('SP00306', 'A04', '2023-03-14', 'Đực', 'Vàng đậm', '14KG', 'Đã tiêm 1 mũi', 'Tốt', '14.000.000VND', 'Thuần chủng', ''),
('SP00307', 'A05', '2023-08-04', 'Cái', 'Trắng', '4.5KG', 'Đã tiêm 1 mũi', 'Tốt', '10.000.000VND', 'Thuần chủng', ''),
('SP00308', 'A06', '2023-03-30', 'Đực', 'Xám trắng', '14KG', 'Đã tiêm 1 mũi', 'Tốt', '13.000.000VND', 'Thuần chủng', ''),
('SP00309', 'A07', '2023-02-13', 'Đực', 'Nâu vàng', '4.5KG', 'Đã tiêm 1 mũi', 'Tốt', '11.000.000VND', 'Thuần chủng', ''),
('SP00310', 'A01', '2023-02-03', 'Cái', 'Nâu đỏ', '12KG', 'Đã tiêm 1 mũi', 'Tốt', '18.000.000VND', 'Thuần chủng', ''),
('SP00311', 'A02', '2023-09-01', 'Đực', 'Nâu trắng', '7KG', 'Đã tiêm 1 mũi', 'Tốt', '30.000.000VND', 'Thuần chủng', ''),
('SP00312', 'A03', '2023-04-20', 'Cái', 'Trắng', '14.5KG', 'Đã tiêm 1 mũi', 'Tốt', '16.000.000VND', 'Thuần chủng', ''),
('SP00313', 'A04', '2023-10-04', 'Cái', 'Vàng nhạt', '14.5KG', 'Đã tiêm 1 mũi', 'Tốt', '15.000.000VND', 'Thuần chủng', ''),
('SP00314', 'A05', '2023-02-24', 'Đực', 'Nâu', '4KG', 'Đã tiêm 1 mũi', 'Tốt', '10.500.000VND', 'Thuần chủng', ''),
('SP00315', 'A06', '2023-02-28', 'Đực', 'Nâu đỏ', '14.5KG', 'Đã tiêm 1 mũi', 'Tốt', '15.000.000VND', 'Thuần chủng', ''),
('SP00316', 'A07', '2023-09-02', 'Đực', 'Nâu vàng', '4KG', 'Đã tiêm 1 mũi', 'Tốt', '12.000.000VND', 'Thuần chủng', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `MADANGNHAP` varchar(8) NOT NULL,
  `TENDANGNHAP` varchar(30) NOT NULL,
  `MATKHAU` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`MADANGNHAP`, `TENDANGNHAP`, `MATKHAU`) VALUES
('DN100', 'DUYMANH', 'Manh0205@'),
('DN101', 'NGUYENTOAN', 'Toan123@'),
('DN102', 'TRANANH', 'Anhtran11$'),
('DN103', 'HANHNGUYEN', 'hanh987@'),
('DN104', 'VANTRUNG', 'trung1998#'),
('DN105', 'MYHOA', 'myhoa123@'),
('DN106', 'BUIGIANG', 'giang12345'),
('DN107', 'TRANNGA', 'Ngatran123#'),
('DN108', 'TRONGDAT', 'dat2512@'),
('DN109', 'LEHANH', 'Hanh111@');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `MADANHGIA` varchar(8) NOT NULL,
  `MAKHACHHANG` varchar(8) NOT NULL,
  `NGAYDANHGIA` timestamp NOT NULL DEFAULT current_timestamp(),
  `NOIDUNG` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`MADANHGIA`, `MAKHACHHANG`, `NGAYDANHGIA`, `NOIDUNG`) VALUES
('DG001', 'KH001', '2023-08-14 17:00:00', 0x43c3ba6e20636f6e2072e1baa57420c491c3a16e672079c3aa752076c3a0207468c3b46e67206d696e68),
('DG002', 'KH002', '2023-08-19 17:00:00', 0x48c3a06e67206e68e1baad6e206e68c6b02068c3ac6e682c2063c3ba6e20636f6e2072e1baa574206e676f616e2076c3a020c491c3a16e672079c3aa75),
('DG003', 'KH003', '2023-01-07 17:00:00', 0x52e1baa5742072e1baa5742072e1baa57420c491c3a16e672079c3aa75206c75c3b46e2c2063c3ba6e2072e1baa574206e676f616e20e1baa1),
('DG004', 'KH004', '2023-08-07 17:00:00', 0x4e676fc3a0692073e1bba963206d6f6e6720c491e1bba3692c2063c3ba6e2072e1baa574207468c3b46e67206d696e68206c75c3b46e20e1baa1),
('DG005', 'KH005', '2023-03-07 17:00:00', 0x5175c3a12064e1bb85207468c6b0c6a16e672076c3a02063757465206c75c3b46e6e6e6e6e6e21);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MADANHMUC` varchar(3) NOT NULL,
  `TENDANHMUC` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`MADANHMUC`, `TENDANHMUC`) VALUES
('A01', 'ALASKA'),
('A02', 'CORGI'),
('A03', 'SAMOYED'),
('A04', 'GOLDEN'),
('A05', 'POODLE'),
('A06', 'HUSKY'),
('A07', 'PUG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MAHOADON` varchar(8) NOT NULL,
  `MAKHACHHANG` varchar(8) NOT NULL,
  `MACHO` varchar(7) NOT NULL,
  `NGAYLAPHOADON` timestamp NOT NULL DEFAULT current_timestamp(),
  `SOLUONG` int(2) NOT NULL,
  `GHICHU` varchar(100) NOT NULL,
  `TONGTIEN` varchar(30) NOT NULL,
  `TINHTRANHOADON` varchar(18) NOT NULL,
  `PHUONGTHUCTHANHTOAN` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MAHOADON`, `MAKHACHHANG`, `MACHO`, `NGAYLAPHOADON`, `SOLUONG`, `GHICHU`, `TONGTIEN`, `TINHTRANHOADON`, `PHUONGTHUCTHANHTOAN`) VALUES
('D01', 'KH001', 'SP00289', '2023-08-07 17:00:00', 1, '', '17.000.000VND', 'Đã giao', 'Tiền mặt'),
('D02', 'KH002', 'SP00297', '2023-03-07 17:00:00', 1, '', '25.000.000VND', 'Đang chuẩn bị hàng', 'Ví VNPAY'),
('D03', 'KH003', 'SP00312', '2023-07-18 17:00:00', 1, '', '16.000.000VND', 'Đang giao', 'Tiền mặt'),
('D04', 'KH004', 'SP00292', '2023-08-12 17:00:00', 1, '', '12.000.000VND', 'Đã giao', 'Tiền mặt'),
('D05', 'KH005', 'SP00300', '2023-07-23 17:00:00', 1, '', '9.500.000VND', 'Đã giao', 'Ví VNPAY'),
('D06', 'KH006', 'SP00315', '2023-06-15 17:00:00', 1, '', '15.000.000VND', 'Đang giao', 'Ví VNPAY'),
('D07', 'KH007', 'SP00316', '2023-06-21 17:00:00', 1, '', '12.000.000VND', 'Đang chuẩn bị hàng', 'Ví VNPAY'),
('D08', 'KH008', 'SP00307', '2023-07-29 17:00:00', 1, '', '10.000.000VND', 'Đã giao', 'Tiền mặt'),
('D09', 'KH009', 'SP00304', '2023-11-06 17:00:00', 1, '', '25.000.000VND', 'Đang giao', 'Ví VNPAY'),
('D10', 'KH010', 'SP00298', '2023-07-24 17:00:00', 1, '', '14.000.000VND', 'Đã giao', 'Tiền mặt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKHACHHANG` varchar(8) NOT NULL,
  `TENKHACHHANG` varchar(40) NOT NULL,
  `NGAYSINH` date NOT NULL,
  `GIOITINH` varchar(10) NOT NULL,
  `DIACHI` varchar(100) NOT NULL,
  `SODIENTHOAI` int(15) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `MADANGNHAP` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MAKHACHHANG`, `TENKHACHHANG`, `NGAYSINH`, `GIOITINH`, `DIACHI`, `SODIENTHOAI`, `EMAIL`, `MADANGNHAP`) VALUES
('KH001', 'DO DUY MANH', '1999-05-02', 'NAM', '97 HAO NAM, P.O CHO DUA, DONG DA, HA NO', 95738452, 'manhdo02@gmail.com', 'DN100'),
('KH002', 'NGUYEN VAN TOAN', '2000-04-12', 'NAM', '101 MAI HAC DE, BUI THI XUAN, H.B.T, HA NOI', 93632221, 'toan1204@gmail.com', 'DN101'),
('KH003', 'TRAN NGOC ANH', '1995-11-03', 'NU', '24B LO DUC, PHAM DINH HO, HAI BA TRUNG, HA NOI', 97235632, 'anhanh11@gmail.com', 'DN102'),
('KH004', 'NGUYEN THI HANH', '1999-05-22', 'NU', '26 TUE TINH, BUI THI XUAN, HAI BA TRUNG, HA NOI', 82534378, 'hanhnguyen@gmail.com', 'DN103'),
('KH005', 'PHAN VAN TRUNG', '1998-06-03', 'NAM', 'SO19, TRAN QUOC HOAN, D.V.H, CAU GIAY, HA NOI', 38236567, 'vantrung1998@gmail.com', 'DN104'),
('KH006', 'LUU THI MY HOA', '2001-07-16', 'NU', '8C HOANG NGOC PHACH, LANG HA, DONG DA, HN', 97636466, 'myhoa2001@gmail.com', 'DN105'),
('KH007', 'BUI THI GIANG', '2002-12-24', 'NU', '30 HANG BONG, HANG GAI, HOAN KIEM, HA NOI', 84766481, 'giangbui24@gmail.com', 'DN106'),
('KH008', 'TRAN THI THUY NGA', '1998-11-09', 'NU', '2 NHA CHUNG, HANG TRONG, HOAN KIEM, HA NOI', 87543323, 'trannga0911@gmail.com', 'DN107'),
('KH009', 'LE TRONG DAT', '2000-12-25', 'NAM', '6 NGACH 371/9 KIM MA, BA DINH, HA NOI', 87375355, 'datle2512@gmail.com', 'DN108'),
('KH010', 'LE THI HANH', '1999-07-05', 'NU', '30 TA QUANG BUU , HAI BA TRUNG , HA NOI', 96364431, 'hanh517@gmail.com', 'DN109');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoannganhang`
--

CREATE TABLE `taikhoannganhang` (
  `MATAIKHOAN` varchar(8) NOT NULL,
  `TENNGANHANG` varchar(25) NOT NULL,
  `SOTAIKHOAN` int(15) NOT NULL,
  `MAKHACHHANG` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoannganhang`
--

INSERT INTO `taikhoannganhang` (`MATAIKHOAN`, `TENNGANHANG`, `SOTAIKHOAN`, `MAKHACHHANG`) VALUES
('TK100', 'VIETCOMBANK', 1024465573, 'KH001'),
('TK101', 'MBBANK', 2147483647, 'KH002'),
('TK102', 'AGRIBANK', 2147483647, 'KH003'),
('TK103', 'BIDV', 2147483647, 'KH004'),
('TK104', 'VIETCOMBANK', 1035578223, 'KH005'),
('TK105', 'MBBANK', 2147483647, 'KH006'),
('TK106', 'TPBANK', 2147483647, 'KH007'),
('TK107', 'BIDV', 2147483647, 'KH008'),
('TK108', 'VIETCOMBANK', 1028865173, 'KH009'),
('TK109', 'TPBANK', 2147483647, 'KH010');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cho`
--
ALTER TABLE `cho`
  ADD PRIMARY KEY (`MACHO`),
  ADD KEY `MADANHMUC` (`MADANHMUC`);

--
-- Chỉ mục cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`MADANGNHAP`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`MADANHGIA`),
  ADD KEY `MAKHACHHANG` (`MAKHACHHANG`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MADANHMUC`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MAHOADON`),
  ADD KEY `MAKHACHHANG` (`MAKHACHHANG`),
  ADD KEY `MACHO` (`MACHO`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKHACHHANG`),
  ADD KEY `MADANGNHAP` (`MADANGNHAP`);

--
-- Chỉ mục cho bảng `taikhoannganhang`
--
ALTER TABLE `taikhoannganhang`
  ADD PRIMARY KEY (`MATAIKHOAN`),
  ADD KEY `MAKHACHHANG` (`MAKHACHHANG`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cho`
--
ALTER TABLE `cho`
  ADD CONSTRAINT `cho_ibfk_1` FOREIGN KEY (`MADANHMUC`) REFERENCES `danhmuc` (`MADANHMUC`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD CONSTRAINT `dangnhap_ibfk_1` FOREIGN KEY (`MADANGNHAP`) REFERENCES `khachhang` (`MADANGNHAP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`MAKHACHHANG`) REFERENCES `khachhang` (`MAKHACHHANG`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MAKHACHHANG`) REFERENCES `khachhang` (`MAKHACHHANG`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`MACHO`) REFERENCES `cho` (`MACHO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`MADANGNHAP`) REFERENCES `dangnhap` (`MADANGNHAP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `taikhoannganhang`
--
ALTER TABLE `taikhoannganhang`
  ADD CONSTRAINT `taikhoannganhang_ibfk_1` FOREIGN KEY (`MAKHACHHANG`) REFERENCES `khachhang` (`MAKHACHHANG`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
