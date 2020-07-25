-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 04:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websach`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethd`
--

CREATE TABLE `chitiethd` (
  `SoDH` int(11) NOT NULL,
  `MaSach` int(11) NOT NULL,
  `MaHD` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `NgayDat` datetime NOT NULL,
  `NoiGiao` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `MaSach` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `TongTien` int(11) NOT NULL,
  `sdt` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `MaKH` int(11) NOT NULL,
  `TinhTrang` enum('Mới đặt','Đã thanh toán','Đã giao hàng','Hủy đơn hàng') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `NgayDat`, `NoiGiao`, `MaSach`, `SoLuong`, `TongTien`, `sdt`, `MaKH`, `TinhTrang`) VALUES
(74, '2020-07-24 21:44:25', '280, An Dươ', 7, 1, 50000, '09110011', 3, 'Mới đặt'),
(76, '2020-07-24 22:57:26', '280, An Dươ', 14, 1, 30000, '09110011', 10, 'Mới đặt'),
(77, '2020-07-24 23:49:03', '280, An Dươ', 1, 1, 30000, '09110011', 10, 'Mới đặt'),
(78, '2020-07-25 09:10:36', '280, An Dươ', 10, 3, 750000, '09110011', 10, 'Mới đặt');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `TenDN` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DienThoai` int(11) DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`TenDN`, `MatKhau`, `HoTen`, `DiaChi`, `DienThoai`, `Email`, `MaKH`) VALUES
('ngan', 'ngan', 'Nguyễn Võ Hiếu Ngân', '1bis Nguyễn Văn Trỗi Q.1', 965421251, 'nganhieunguyenvo@gmail.com', 3),
('phuong', 'phuong', 'Trương Thị Phương', '1 Mạc Đỉnh Chi Q.1', 989552554, 'truongphuongvt@gmail.com', 4),
('hanhnguyen', 'hanhnguyen', 'Ngô Hạnh Nguyên', '1 Xô Viết Nghệ Tĩnh, Bình Thạnh', 923154521, 'nhnguyen@gmail.com', 5),
('NNP', 'NNP', 'NNP', 'An Dương Vương, TP HCM', 123456789, 'nnp@gmail.com', 10),
('nguyen', 'nguyen', 'Trương Thị Thảo Nguyên', 'Nguyễn Thị Thập, Q.8', 997646112, 'nt4610634@gmail.com', 11);

-- --------------------------------------------------------

--
-- Table structure for table `loaisach`
--

CREATE TABLE `loaisach` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisach`
--

INSERT INTO `loaisach` (`MaLoai`, `TenLoai`) VALUES
(1, 'Truyện tranh'),
(2, 'Tiểu thuyết'),
(3, 'Tản văn'),
(4, 'Báo chí'),
(12, 'Sách bán chạy'),
(14, 'Sách mới');

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `MaSach` int(11) NOT NULL,
  `MaLoai` int(11) NOT NULL,
  `TenSach` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `GiaBan` int(11) NOT NULL,
  `GiamGia` int(11) DEFAULT NULL,
  `MoTa` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TacGia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NXB` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`MaSach`, `MaLoai`, `TenSach`, `GiaBan`, `GiamGia`, `MoTa`, `TacGia`, `NXB`, `Hinh`) VALUES
(1, 1, 'Một Cái Ôm ', 30000, NULL, '\"Bạn có bao giờ cảm thấy cần một cái ôm, một cái ôm thật chặt từ một ai đó ?\r\nBạn xương rồng Felipe nhỏ bé cũng cảm thấy như thế, nhưng gia đình cậu bé lại không thích gần gũi. Bạn biết rồi đấy, cơ thể gia đình đình xương rồng rất nhiều gai nhọn...', 'Simona Ciraolo', 'NXB Phụ Nữ', 'hinh1.jpg'),
(2, 1, 'Chốn Thần Tiên', 50000, NULL, 'Với những thắc mắc tò mò của bé về cuộc sống thường ngày, với những câu thơ ngắn nhưng cấu tứ rõ ràng, ngôn ngữ đáng yêu, cuốn sách sẽ mang đến cho bé ngoài những bài học đầu đời về cuộc sống này, còn là một thế giới ngôn từ phong phú.', 'Nguyễn Quỳnh Mai', 'NXB Phụ Nữ', 'hinh2.jpg'),
(3, 1, 'Khu Rừng Trong Thành Phố ', 45000, NULL, 'Sản phẩm bán chạy nhất	Top 100 sản phẩm Truyện Thiếu Nhi bán chạy của tháng\r\nVới những thắc mắc tò mò của bé về cuộc sống thường ngày, với những câu thơ ngắn nhưng cấu tứ rõ ràng, ngôn ngữ đáng yêu, cuốn sách sẽ mang đến cho bé ngoài những bài học đầ', 'Nguyễn Quỳnh Mai', 'NXB Phụ Nữ', 'hinh3.jpg'),
(4, 2, 'Tin Vào Điều Em Muốn', 55000, NULL, 'Tin Vào Điều Em Muốn. Tôi đang cắt những quả dâu tây chín mọng, nước rỉ dần trên bề mặt ướt lá, thứ nước óng ánh đỏ khiến tôi ngưng lại, nhìn chằm chằm sắc màu đầy mê hoặc đó.&nbsp;', 'Tiểu Châu', 'NXB Văn Học', 'hinh4.jpg'),
(5, 2, 'Hồ Đồ', 100000, NULL, 'Trên thế giới này, có một loại đàn ông mà nước mắt của cô có rơi bao nhiêu thì cũng không làm rung động được trái tim anh ta, dù cô có là một mỹ nhân khóc đến đổ cả Trường Thành đi chăng nữa thì anh ta cũng chẳng mảy may động lòng.&nbsp;', 'Ngải Tiểu Đồ', 'NXB Văn Học', 'hinh5.jpg'),
(6, 2, 'Nhà Tiểu Họa', 100000, NULL, 'Một ngày mùa thu năm 1686, cô gái Nella Oortman mười tám tuổi đến Amsterdam để bắt đầu cuộc sống làm vợ của thương gia nổi tiếng Johannes Brandt. Ngôi nhà mới của nàng dù đẹp lộng lẫy nhưng không hề ấm áp.&nbsp;', 'Jessie Burton', 'NXB Thanh Niên', 'hinh6.jpg'),
(7, 3, 'Sau Những Ngày Mưa', 50000, NULL, 'Câu chuyện nhẹ nhàng da diết và đầy tính nhân văn, trải ra theo giọng kể của một cô gái đi theo đoàn diễn hội chợ. Từ đó, những ký ức được hồi tưởng, gắn kết với quá khứ, hiện tại.&nbsp;', 'Phạm Thu Hà', 'NXB Trẻ', 'hinh7.jpg'),
(8, 3, 'Người Đi Bán Nắng', 40000, NULL, 'Đôi khi ta tự ví ta như một tài xế taxi, vòng vo đón khách, tài xế và khách cùng chia sẻ cho nhau một phần nho nhỏ cuộc đời, rồi khi khách tìm được bến đỗ của họ, coi như ta đã hoàn thành nhiệm vụ.&nbsp;', 'Minh Mẫn', 'NXB Văn Học', 'hinh8.jpg'),
(9, 3, 'Thừa Ra Một Người', 45000, NULL, 'Xã hội càng hiện đại càng ngổn ngang hơn. Chiều nào, góc nào, hướng nào cũng thấy ngổn ngang. Sáng mở mắt ra đã ngổn ngang. Ngổn ngang đến khi đi ngủ. Ngổn ngang cả trong mơ. Ngổn ngang phận người. Ngổn ngang chân trời.&nbsp;', 'Văn Thành Lê', 'NXB Trẻ', 'hinh9.jpg'),
(10, 4, 'Joyful', 250000, NULL, 'A completely original treatment of a completely new and original idea’ Arianna Huffington\r\nFind joy in the space around you\r\nWhen did you last feel joy? Changing your surroundings is the most easily accessible source in finding joy.', 'Ingrid Fetell Lee', 'Ebury Publishing', 'hinh10.jpg'),
(11, 4, 'The Trending - Xu Hướng', 110000, NULL, 'Trải nghiệm trong ngành thiết kế sáng tạo tại Việt Nam, có một sự thật, Marketing – Design hay Marketer – Designer, dù \'nằm gai nếm mật\' cùng nhau nhưng lại sống trong hai thế giới khác biệt.&nbsp;', 'Rio Creative', 'NXB Lao Động', 'hinh11.jpg'),
(12, 4, 'Tiktok Marketing', 80000, NULL, 'TikTok đang bùng nổ ở mọi nơi và đã trở thành một trong những ứng dụng được tải xuống nhiều nhất thế giới. Không có gì ngạc nhiên khi các nhà tiếp thị đã bắt đầu nhìn thấy tiềm năng của nền tảng này.&nbsp;', 'Markus Rach', 'NXB Thanh Niên', 'hinh12.jpg'),
(13, 12, 'Giáo Dục Não Phải - Tương Lai Cho Con Bạn', 60000, NULL, 'Người Việt Nam chúng ta thường tự hào rằng mình là một dân tộc thông minh. Thật khó để chứng minh theo lý thuyết thống kê và bằng các tiêu chí chặt chẽ, vững chắc rằng một dân tộc thông minh hơn những dân tộc khác.&nbsp;', 'Viện Giáo Dục Shichida Vi', 'NXB Thế Giới', 'hinh13.jpg'),
(14, 12, '7 Bước Đệm Dẫn Đến Thành Công', 30000, NULL, 'Có rất nhiều con đường đi tới thành công, nhưng con đường nào giúp chúng ta đi đến thành công ngắn nhất đó điều mà chúng ta cần quan tâm. Nhiều người đã chọn những cách bước đi khác nhau.', 'Nguyễn Duy Nguyên', 'NXB Lao Động', 'hinh14.jpg'),
(15, 14, 'Learning English With Jino - Các Loài Động Vật', 20000, NULL, 'Bộ sách Học tiếng Anh cùng Jino là những câu chuyện kể về chú rồng nhỏ Jino và những tình huống xảy ra trong cuộc sống hằng ngày, được viết dưới dạng song ngữ giúp các em nhỏ học từ vựng tiếng Anh một cách thích thú và hiệu quả hơn.', 'Apiradee Midomaru', 'NXB Thanh Niên', 'hinh155.jpg'),
(16, 14, 'Learning English With Jino - Cầu Vồng Trái Cây', 20000, NULL, 'Bộ sách Học tiếng Anh cùng Jino là những câu chuyện kể về chú rồng nhỏ Jino và những tình huống xảy ra trong cuộc sống hằng ngày, được viết dưới dạng song ngữ giúp các em nhỏ học từ vựng tiếng Anh một cách thích thú và hiệu quả hơn.', 'Apiradee Midomaru', 'NXB Thanh Niên', 'hinh16.jpg'),
(17, 14, 'Có Một Ngày, Bố Mẹ Sẽ Già Đi', 80000, NULL, 'Càng lớn lên, những quyến luyến của chúng ta đối với bố mẹ càng ít. Khi đại bàng non có thể giương cánh, nó luôn hướng tới không trung, chứ không phải rúc vào đôi cánh bố mẹ.', 'Nhiều Tác Giả', 'NXB Thế Giới', 'hinh17.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD PRIMARY KEY (`SoDH`),
  ADD KEY `fk_chitiethd_sach` (`MaSach`),
  ADD KEY `fk_chitiethd_hoadon` (`MaHD`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `maKH` (`MaKH`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `loaisach`
--
ALTER TABLE `loaisach`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`MaSach`),
  ADD KEY `maLoai` (`MaLoai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `loaisach`
--
ALTER TABLE `loaisach`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sach`
--
ALTER TABLE `sach`
  MODIFY `MaSach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD CONSTRAINT `fk_chitiethd_hoadon` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_chitiethd_sach` FOREIGN KEY (`MaSach`) REFERENCES `sach` (`MaSach`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hoadon_khachhang` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `fk_sach_loaiSach` FOREIGN KEY (`MaLoai`) REFERENCES `loaisach` (`MaLoai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
