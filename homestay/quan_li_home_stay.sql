-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 03:10 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quan_li_home_stay`
--

-- --------------------------------------------------------

--
-- Table structure for table `ct_gio_hang`
--

CREATE TABLE `ct_gio_hang` (
  `maGH` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maHST` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ct_gio_hang`
--

INSERT INTO `ct_gio_hang` (`maGH`, `maHST`) VALUES
('GH273', 'HST0012'),
('GH293', 'HST001'),
('GH466', 'HST002');

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

CREATE TABLE `gio_hang` (
  `maGH` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maUser` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gio_hang`
--

INSERT INTO `gio_hang` (`maGH`, `maUser`) VALUES
('GH466', 'ID002'),
('GH001', 'ID004'),
('GH293', 'ID859'),
('GH273', 'ID8722');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `maHD` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maUser` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maHST` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayBatDau` date NOT NULL,
  `ngayKetThuc` date NOT NULL,
  `thanhTien` decimal(10,0) NOT NULL,
  `thoiGian` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`maHD`, `maUser`, `maHST`, `ngayBatDau`, `ngayKetThuc`, `thanhTien`, `thoiGian`) VALUES
('HD118', 'ID002', 'HST0037', '2021-10-27', '2021-10-28', '1100000', '2021-10-27 19:36:15'),
('HD179', 'ID002', 'HST0024', '2021-10-27', '2021-10-28', '5700000', '2021-10-27 19:19:21'),
('HD206', 'ID002', 'HST0030', '2021-10-27', '2021-10-28', '420000', '2021-10-27 19:36:17'),
('HD503', 'ID002', 'HST0010', '2021-10-27', '2021-10-28', '650000', '2021-10-27 19:19:26'),
('HD534', 'ID002', 'HST0014', '2021-10-30', '2021-11-01', '1000000', '2021-10-28 20:31:26'),
('HD603', 'ID002', 'HST0040', '2021-10-27', '2021-10-28', '2900000', '2021-10-27 19:36:11'),
('HD637', 'ID002', 'HST001', '2021-10-29', '2021-10-30', '1650000', '2021-10-27 19:19:41'),
('HD646', 'ID002', 'HST0014', '2021-11-06', '2021-11-11', '2500000', '2021-10-28 20:33:11'),
('HD758', 'ID002', 'HST0014', '2021-11-03', '2021-11-05', '1000000', '2021-10-28 20:31:39'),
('HD881', 'ID002', 'HST001', '2021-10-27', '2021-10-28', '1650000', '2021-10-27 19:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `home_stay`
--

CREATE TABLE `home_stay` (
  `maHStay` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenHStay` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donGia` decimal(10,0) NOT NULL,
  `maLoaiHStay` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maTP` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phuKien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diaChi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moTa` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khongGian` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_one` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_two` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_three` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_four` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_five` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_six` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_stay`
--

INSERT INTO `home_stay` (`maHStay`, `tenHStay`, `donGia`, `maLoaiHStay`, `maTP`, `phuKien`, `diaChi`, `moTa`, `khongGian`, `img_one`, `img_two`, `img_three`, `img_four`, `img_five`, `img_six`) VALUES
('HST001', 'Full House Condotel', '1650000', 'LHST001', 'TP001', ' 1 Phòng tắm · 2 giường · 2 phòng ngủ', 'Đà Lạt, Lâm Đồng, Việt Nam', 'Trang bị nội thất 5 sao sang trọng, di chuyển nhanh với thang máy, với 2 phòng ngủ thiết kế theo phong cách Châu Âu cổ điển, view chợ đêm, phòng khách rộng rãi, ban công trang bị bộ bàn ghế cà phê ngắm hoàng hôn.', 'Trang bị nội thất đẳng cấp, các thiết bị tiện nghi trang bị đầy đủ, 2 smart tivi 49 inches, tủ lạnh, sofa bed, bộ bàn ăn, nồi hâm, bếp từ, bộ chén dĩa Gốm Nhật, chăn êm, nệm ấm...\r\n\r\n', 'images/dalat_one_one.PNG', 'images/dalat_one_seven.JPG', 'images/dalat_one_nine.JPG', 'images/dalat_one_nine.JPG', 'images/dalat_one_five.JPG', 'images/dalat_one_six.JPG'),
('HST0010', 'Andy\'s House - The Lotus Room', '650000', 'LHST003', 'TP001', 'Phòng riêng · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 2 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'Andy\'s House - VIP Room với diện tích 60m2. Gồm 1 phòng ngủ và 1 phòng tắm. Được chúng tôi trang bị đầy đủ các thiết bị tiện nghi, hiện đại: wifi, tivi, máy sấy tóc, chổ giữ xe…Phù hợp cho những chuyến đi công tác và gia đình nhỏ 3 người.', 'Bạn có thể mở cửa sổ kính lớn để ánh sáng và gió từ thiên nhiên vào trong phòng. Hay mở cửa để ra ngoài ban công rộng rãi, sạch sẽ có sẵn ghế hồ bơi bằng gỗ tắm nắng nhé. Chúng tôi còn trồng rất nhiều cây xanh trong phòng nữa đấy nhé. Có khu sinh hoạt và bồn tắm ngoài trời tạo cảm giác thoải mái, thư giãn khi đến với thành phố Hồ Chí Minh nhộn nhịp.', 'images/dalat_ten_one.JPG', 'images/dalat_ten_two.JPG', 'images/dalat_ten_three.JPG', 'images/dalat_ten_four.JPG', 'images/dalat_ten_five.JPG', 'images/dalat_ten_six.JPG'),
('HST0011', 'Luxury Pool Villa', '3500000', 'LHST001', 'TP001', 'Nguyên căn · 4 Phòng tắm · 8 giường · 5 phòng ngủ · 15 khách (tối đa 35 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'Joy\'n Villa 3 được thiết kế theo phong cách hiện đại và đơn giản. Đặc biệt villa chúng tôi có phòng xông hơi, phòng giải trí bida, ghế tình yêu.... Mang đến cho bạn sự gần gũi và thoải mái, đáp ứng nhu cầu thư giãn và vui chơi. Đặc biệt Joy Villa sở hữu hồ bơi chuẩn 5 sao đáp ứng mọi nhu cầu của quý khách <3', '- Không gian thoáng mát, ấm cúng dành cho cặp đôi, gia đình đều được.\r\n- Căn hộ đầy đủ thiết bị nấu nướng, 3 máy lạnh, máy giặt, tủ lạnh, bếp gas,...không thiếu gì cả.\r\n- Tư vấn, hướng dẫn nhiệt tình những địa điểm ăn uống ngon nhất Đà Lạt', 'images/dalat_eleven_one.JPG', 'images/dalat_eleven_two.JPG', 'images/dalat_eleven_three.JPG', 'images/dalat_eleven_four.JPG', 'images/dalat_eleven_five.JPG', 'images/dalat_eleven_six.JPG'),
('HST0012', 'Lavies House 11', '5700000', 'LHST001', 'TP001', 'Nguyên căn · 5 Phòng tắm · 6 giường · 6 phòng ngủ · 15 khách (tối đa 30 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'Chuỗi Lavies House Vũng Tàu xin giới thiệu Lavies House 11 - là biệt thự hồ bơi nguyên căn với 6 phòng ngủ, 6 giường và có nhiều nệm riêng, với các toilet khép kín riêng trong từng phòng. Căn biệt thự Lavies House 11 gần Bãi Sau. Đầy đủ dụng cụ nấu nướng như bếp ga, bếp từ, lò than, ly chén, ....Có bãi đậu xe cho khách', 'Bên cạnh đó, tôi cũng là một người vô cùng thân thiện và thoải mái. Chính vì vậy đừng ngại ngần mà chia sẻ với chúng tôi những điều bạn đang thắc mắc hoặc những khó khăn bạn gặp phải khi ở đây.', 'images/dalat_twelve_one.JPG', 'images/dalat_twelve_two.JPG', 'images/dalat_twelve_three.JPG', 'images/dalat_twelve_four.JPG', 'images/dalat_twelve_five.JPG', 'images/dalat_twelve_six.JPG'),
('HST0013', 'Homestay GoldSea', '458000', 'LHST003', 'TP001', 'Nguyên căn · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 4 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'GoldSea là một trong những chung cư được nhiều người du lịch biết đến trong những năm gần đây do nơi đây có hàng trăm căn hộ cho khách du lịch thuê ngắn hạn. Với vị trí địa lý thuận tiện cách Bãi Sau chỉ 100m và cách Bãi Trước 1500m trên trục đường Hoàng Hoa Thám, là khu vực nhộn nhịp nhất của thành phố Đà Lạt.', 'Xu hướng homestay rất được ưa chuộng, đặc biệt là homestay căn hộ chung cư bởi vị trí địa lý luôn thuận lợi, di chuyển dễ dàng, có bãi đậu xe an toàn, chỗ ở an ninh văn minh lịch sự và đặc biệt là sạch sẽ, view đẹp chính là lý do mà Melody và một số chung cư có homestay khác được nhiều khách du lịch lựa chọn đầu tiên cho chuyến nghỉ dưỡng Vũng Tàu của họ.', 'images/dalat_thirdteen_one.JPEG', 'images/dalat_thirdteen_two.JPEG', 'images/dalat_thirdteen_three.JPEG', 'images/dalat_thirdteen_four.JPEG', 'images/dalat_thirdteen_five.JPEG', 'images/dalat_thirdteen_six.JPEG'),
('HST0014', 'La Mer homestay', '500000', 'LHST003', 'TP001', 'Phòng riêng · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 3 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'Ở đây vẫn là những ngày đầy nắng ấm áp, bầu trời trong xanh, Rời xa sự ồn ào nơi phố thị kia và tìm cho mình một nơi yên tĩnh nghỉ ngơi để tinh thần nhẹ nhàng, thư thái...', 'Phòng ngủ máy lạnh, wc, nước nóng lạnh, Với đầy đủ bếp nấu, lò nướng, bàn ăn, chén dĩa song chảo và những dụng cụ làm bếp, gia vị cơ bản, quý khách sẽ tổ chức 1 bữa tiệc BBQ đầm ấm và vui vẻ ngay tại khuôn viên của homestay.\r\nRất gần chợ Mới và Lotte Mart thuận tiện mua sắm và xem phim.', 'images/dalat_fourteen_one.JPG', 'images/dalat_fourteen_two.JPG', 'images/dalat_fourteen_three.JPG', 'images/dalat_fourteen_four.JPG', 'images/dalat_fourteen_five.JPG', 'images/dalat_fourteen_six.JPG'),
('HST0015', 'Homestay Melody', '1200000', 'LHST002', 'TP001', 'Nguyên căn · 2 Phòng tắm · 2 giường · 2 phòng ngủ · 6 khách (tối đa 15 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'LiCi Homestay nằm tại khu căn hộ Melody là một khách sạn bên bờ biển nằm ở Đà Lạt, cách Tượng chúa 1,7 km và cách Mũi Nghinh Phong 2,2 km. Với tầm nhìn ra hồ, chỗ ở này có ban công và hồ bơi.', 'Chỗ ở (rộng 85m2) gồm có 1 phòng khách, 2 phòng ngủ, 1 phòng bếp, 2 toilet. Lựa chọn lý tưởng cho nhóm bạn, cặp đôi và gia đình nghỉ dưỡng ở thành phố biển Vũng Tàu. Homestay ở tầng cao, view hướng biển, sạch sẽ thoáng mát. Đi xa nhưng vẫn có cảm giác thoải mái như đang ở nhà.Bạn vẫn có thể mua hải sản tươi sống về chế biến theo ý thích. Căn hộ máy lạnh này được trang bị 2 phòng ngủ, TV màn hình phẳng và nhà bếp với tủ lạnh và bếp nấu.', 'images/dalat_fifteen_one.JPG', 'images/dalat_fifteen_two.JPG', 'images/dalat_fifteen_three.JPG', 'images/dalat_fifteen_four.JPG', 'images/dalat_fifteen_five.JPG', 'images/dalat_fifteen_six.JPG'),
('HST0016', 'Kaia Residence', '1140000', 'LHST002', 'TP001', 'Nguyên căn · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 3 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'Nơi những câu chuyện của chúng tôi gặp bạn của bạn\r\nNơi mà bạn cảm thấy như ở nhà.\r\nNơi mà bạn cảm thấy thư giãn.\r\nNơi mà bạn cảm thấy thanh lịch.\r\nẨn mình trong một thung lũng yên tĩnh ở trung tâm Đà Nẵng, ẩn sau một khu vườn yên tĩnh thuần khiết, The Kaia Residence, một nơi lưu trú được thiết kế cá nhân hóa cao chỉ với 10 căn hộ, là một lời nhắc nhở không ngừng về vẻ đẹp của kiến ​​trúc hiện đại thế kỷ 20.', 'Mỗi phòng đều có ban công riêng, nhìn ra khung cảnh vườn xanh, nhà bếp được trang bị tốt và bàn viết tùy chỉnh kết hợp với nhiều loại ghế bành và ghế sofa, mang đến không gian sống thư giãn nhưng ấm cúng như ở nhà.', 'images/dalat_sixteen_one.JPG', 'images/dalat_sixteen_two.JPG', 'images/dalat_sixteen_three.JPG', 'images/dalat_sixteen_four.JPG', 'images/dalat_sixteen_five.JPG', 'images/dalat_sixteen_six.JPG'),
('HST0017', 'Villa Riverfront', '8500000', 'LHST001', 'TP001', 'Nguyên căn · 4 Phòng tắm · 5 giường · 5 phòng ngủ · 8 khách (tối đa 8 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'Icity Villa Riverfront nằm trong chuỗi biệt thự và khách sạn căn hộ 5 sao đã đưa vào vận hành khai thác bởi Icity Hotel Group, nằm trong chuỗi hệ thống các biệt thự và căn hộ dịch vụ chất lượng 5 sao trên khắp Việt Nam. Villa nằm tại Hải Châu, quận trung tâm của Thành phố Đà Nẵng, đối diện là sông Hàn thơ mộng, cách siêu thị Lotte và công viên Châu Á 1,2km, cách siêu thị Mega Market 500m.', 'Hệ thống cửa chính sử dụng khóa từ đảm bảo an toàn và tiện dụng. Phòng bếp đầy đủ tiện nghi cao cấo như: Tủ lạnh Hafele có máy tự làm đá, máy lọc nước AO Smith, lò nướng, lò vi sóng, trang bị sẵn bàn ủi, máy giặt, máy điều hoà, máy sấy tóc, áo choàng tắm, vật dụng đầy đủ phòng tắm cao cấp, két sắt từng phòng, dép và khăn các loại…', 'images/dalat_seventeen_one.JPG', 'images/dalat_seventeen_two.JPG', 'images/dalat_seventeen_three.JPG', 'images/dalat_seventeen_four.JPG', 'images/dalat_seventeen_five.JPG', 'images/dalat_seventeen_six.JPG'),
('HST0018', 'Yellow Submarine', '420000', 'LHST003', 'TP001', 'Nguyên căn · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 2 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'Những căn phòng khách sạn có thiết kế như rập khuôn có làm bạn chán? Hãy tạm quên chúng đi. Cho dù đang tìm một nơi cho kỳ nghỉ của mình hay chỉ để nán lại vài hôm, bạn cần một chỗ nghỉ ngơi thoải mái, đủ khác biệt và riêng tư. Đây chính là nơi để bạn ngủ trong yên bình và thức dậy trong nắng ấm.', '+ Tận hưởng những phút giây thoải mái, trò chuyện cùng bạn bè ở không gian bếp chung dưới nhà.\r\n+ Rạp chiếu phim mini để bạn đắm chìm vào những thước phim trong khi hàn huyên với bạn bè, với tay để lấy món ăn mình yêu thích.\r\n+ Thư viện sách với không gian yên tĩnh và lý tưởng để đọc sách mà không bị xao nhãng.', 'images/dalat_eightteen_one.JPG', 'images/dalat_eightteen_two.JPG', 'images/dalat_eightteen_three.JPG', 'images/dalat_eightteen_four.PNG', 'images/dalat_eightteen_five.JPG', 'images/dalat_eightteen_six.PNG'),
('HST0019', 'Paradise Destination', '999000', 'LHST002', 'TP001', 'Nguyên căn · 5 Phòng tắm · 4 giường · 4 phòng ngủ · 8 khách (tối đa 12 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'Paradise Destination tọa lạc tại vị trí đắc địa, con đường sầm uất trung tâm TP. Đà Lạt, thuận tiện cho việc đi lại, ăn uống cũng như tham quan các điểm du lịch như : Bà Nà Hill, Núi Thần Tài, Asian Park, Núi Ngũ Hành Sơn, Phố cổ Hội An, Bãi biển Đà Nẵng, Chợ đêm,….', 'Paradise Destination nằm ngay trung tâm chính của Đà Lạt nên sẽ rất thuận tiện đi các điểm :\r\n-Cà phê TyRolls : 2 phút đi bộ\r\n-Siêu thị Vinmart: 2 phút bị bộ\r\n-Phương Đông Club: 5 phút đi taxi ( 2 – 3 usd )\r\n-Chợ Cồn : 5 phút đi taxi ( 2 – 3 usd )\r\n-Ga tàu : 5 phút đi taxi ( 2 – 3 usd)\r\n-Chợ Hàn : 10 – 15 phút đi taxi ( 4-5usd)\r\n-Sân bay Đà Nẵng : 10 – 15 phút đi taxi ( 4-5usd)', 'images/dalat_nineteen_one.JPG', 'images/dalat_nineteen_two.JPG', 'images/dalat_nineteen_three.JPG', 'images/dalat_nineteen_four.JPG', 'images/dalat_nineteen_five.JPG', 'images/dalat_nineteen_six.JPG'),
('HST002', 'Mayli Homestay Đà Lạt', '400000', 'LHST003', 'TP001', 'Phòng riêng · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 3 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'Mayli Homestay là căn biệt thự nằm trong khu biệt thự biệt lập tại đường Cô Giang, cách quảng trường Đà Lạt 5 phút đi xe. Nhà có tổng cộng 11 phòng dành cho khách.', 'Từng căn phòng với thiết kế đặc biệt lấy cảm hứng từ thiên nhiên, đất trời, những điều đặc biệt nhất tại Đà Lạt. Mọi ngóc ngách ở căn phòng đều có thể cho bạn những bức hình lung linh, đáng yêu.\r\n\r\nPhòng ngủ đôi dành cho 2 người với giường đôi cỡ lớn, được trang bị chăn ga với chất liệu cotton living sang trọng, hiện đại, cho bạn giấc ngủ thật êm ái, ngon lành sau những chuyến đi khám phá tại Đà Lạt.', 'images/dalat_two_three.JFIF', 'images/dalat_two_two.JFIF', 'images/dalat_two_one.JFIF', 'images/dalat_two_four.JFIF', 'images/dalat_two_five.JFIF', 'images/dalat_two_six.JFIF'),
('HST0020', 'Suit family apartment', '750000', 'LHST003', 'TP001', 'Phòng riêng · 2 Phòng tắm · 2 giường · 2 phòng ngủ · 4 khách (tối đa 4 khách)\r\n\r\n\r\n', 'Đà Lạt, Lâm Đồng, Việt Nam', 'Căn hộ cao cấp dành cho các gia đình· 65 m2 gồm 2 phòng tắm ·2 giường ·2 phòng ngủ ·4 khách (tối đa 5 khách)\r\nĐược thiết kế theo phong cách Nhật Bản - Hiện đại và sang trọng với đầy đủ tiện nghi cao cấp.\r\n', 'Nằm ngay ở vị trí tuyệt vời nhất, gần bãi biển đẹp Mỹ Khê và gần các điểm tham quan như Công Viên Châu Á, Vòng quay mặt trời, Nhà Đảo ngược, Núi Ngũ hành Sơn, nhà thờ Con Gà, cầu Rồng phun lửa, Sông Hàn ...\r\nBạn mất tầm 20 phút để xem được bồng lai tiên cảnh như Bà Nà Hill, Phố cổ Hội An, Núi Thần Tài,...\r\nBên cạnh là siêu thị Lottemart bạn có thể mua đồ về nấu ăn hoặc có thể ăn buffe và xem phim tại đó.', 'images/dalat_twenty_one.JPG', 'images/dalat_twenty_two.JPG', 'images/dalat_twenty_three.JPG', 'images/dalat_twenty_four.JPG', 'images/dalat_twenty_five.JPG', 'images/dalat_twenty_six.JPG'),
('HST0021', 'Full House Condotel', '1650000', 'LHST001', 'TP002', ' 1 Phòng tắm · 2 giường · 2 phòng ngủ', 'Cầu Giấy, Hà Nội, Vietnam', 'Trang bị nội thất 5 sao sang trọng, di chuyển nhanh với thang máy, với 2 phòng ngủ thiết kế theo phong cách Châu Âu cổ điển, view chợ đêm, phòng khách rộng rãi, ban công trang bị bộ bàn ghế cà phê ngắm hoàng hôn.', 'Trang bị nội thất đẳng cấp, các thiết bị tiện nghi trang bị đầy đủ, 2 smart tivi 49 inches, tủ lạnh, sofa bed, bộ bàn ăn, nồi hâm, bếp từ, bộ chén dĩa Gốm Nhật, chăn êm, nệm ấm...\r\n\r\n', 'images/dalat_one_one.PNG', 'images/dalat_one_seven.JPG', 'images/dalat_one_nine.JPG', 'images/dalat_one_nine.JPG', 'images/dalat_one_five.JPG', 'images/dalat_one_six.JPG'),
('HST0022', 'Andy\'s House - The Lotus Room', '650000', 'LHST003', 'TP002', 'Phòng riêng · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 2 khách)', 'Cầu Giấy, Hà Nội, Vietnam', 'Andy\'s House - VIP Room với diện tích 60m2. Gồm 1 phòng ngủ và 1 phòng tắm. Được chúng tôi trang bị đầy đủ các thiết bị tiện nghi, hiện đại: wifi, tivi, máy sấy tóc, chổ giữ xe…Phù hợp cho những chuyến đi công tác và gia đình nhỏ 3 người.', 'Bạn có thể mở cửa sổ kính lớn để ánh sáng và gió từ thiên nhiên vào trong phòng. Hay mở cửa để ra ngoài ban công rộng rãi, sạch sẽ có sẵn ghế hồ bơi bằng gỗ tắm nắng nhé. Chúng tôi còn trồng rất nhiều cây xanh trong phòng nữa đấy nhé. Có khu sinh hoạt và bồn tắm ngoài trời tạo cảm giác thoải mái, thư giãn khi đến với thành phố Hồ Chí Minh nhộn nhịp.', 'images/dalat_ten_one.JPG', 'images/dalat_ten_two.JPG', 'images/dalat_ten_three.JPG', 'images/dalat_ten_four.JPG', 'images/dalat_ten_five.JPG', 'images/dalat_ten_six.JPG'),
('HST0023', 'Luxury Pool Villa', '3500000', 'LHST001', 'TP002', 'Nguyên căn · 4 Phòng tắm · 8 giường · 5 phòng ngủ · 15 khách (tối đa 35 khách)', 'Cầu Giấy, Hà Nội, Vietnam', 'Joy\'n Villa 3 được thiết kế theo phong cách hiện đại và đơn giản. Đặc biệt villa chúng tôi có phòng xông hơi, phòng giải trí bida, ghế tình yêu.... Mang đến cho bạn sự gần gũi và thoải mái, đáp ứng nhu cầu thư giãn và vui chơi. Đặc biệt Joy Villa sở hữu hồ bơi chuẩn 5 sao đáp ứng mọi nhu cầu của quý khách <3', '- Không gian thoáng mát, ấm cúng dành cho cặp đôi, gia đình đều được.\r\n- Căn hộ đầy đủ thiết bị nấu nướng, 3 máy lạnh, máy giặt, tủ lạnh, bếp gas,...không thiếu gì cả.\r\n- Tư vấn, hướng dẫn nhiệt tình những địa điểm ăn uống ngon nhất Đà Lạt', 'images/dalat_eleven_one.JPG', 'images/dalat_eleven_two.JPG', 'images/dalat_eleven_three.JPG', 'images/dalat_eleven_four.JPG', 'images/dalat_eleven_five.JPG', 'images/dalat_eleven_six.JPG'),
('HST0024', 'Lavies House 11', '5700000', 'LHST001', 'TP002', 'Nguyên căn · 5 Phòng tắm · 6 giường · 6 phòng ngủ · 15 khách (tối đa 30 khách)', 'Cầu Giấy, Hà Nội, Vietnam', 'Chuỗi Lavies House Vũng Tàu xin giới thiệu Lavies House 11 - là biệt thự hồ bơi nguyên căn với 6 phòng ngủ, 6 giường và có nhiều nệm riêng, với các toilet khép kín riêng trong từng phòng. Căn biệt thự Lavies House 11 gần Bãi Sau. Đầy đủ dụng cụ nấu nướng như bếp ga, bếp từ, lò than, ly chén, ....Có bãi đậu xe cho khách', 'Bên cạnh đó, tôi cũng là một người vô cùng thân thiện và thoải mái. Chính vì vậy đừng ngại ngần mà chia sẻ với chúng tôi những điều bạn đang thắc mắc hoặc những khó khăn bạn gặp phải khi ở đây.', 'images/dalat_twelve_one.JPG', 'images/dalat_twelve_two.JPG', 'images/dalat_twelve_three.JPG', 'images/dalat_twelve_four.JPG', 'images/dalat_twelve_five.JPG', 'images/dalat_twelve_six.JPG'),
('HST0025', 'Homestay GoldSea', '458000', 'LHST003', 'TP002', 'Nguyên căn · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 4 khách)', 'Cầu Giấy, Hà Nội, Vietnam', 'GoldSea là một trong những chung cư được nhiều người du lịch biết đến trong những năm gần đây do nơi đây có hàng trăm căn hộ cho khách du lịch thuê ngắn hạn. Với vị trí địa lý thuận tiện cách Bãi Sau chỉ 100m và cách Bãi Trước 1500m trên trục đường Hoàng Hoa Thám, là khu vực nhộn nhịp nhất của thành phố Đà Lạt.', 'Xu hướng homestay rất được ưa chuộng, đặc biệt là homestay căn hộ chung cư bởi vị trí địa lý luôn thuận lợi, di chuyển dễ dàng, có bãi đậu xe an toàn, chỗ ở an ninh văn minh lịch sự và đặc biệt là sạch sẽ, view đẹp chính là lý do mà Melody và một số chung cư có homestay khác được nhiều khách du lịch lựa chọn đầu tiên cho chuyến nghỉ dưỡng Vũng Tàu của họ.', 'images/dalat_thirdteen_one.JPEG', 'images/dalat_thirdteen_two.JPEG', 'images/dalat_thirdteen_three.JPEG', 'images/dalat_thirdteen_four.JPEG', 'images/dalat_thirdteen_five.JPEG', 'images/dalat_thirdteen_six.JPEG'),
('HST0026', 'La Mer homestay', '500000', 'LHST003', 'TP002', 'Phòng riêng · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 3 khách)', 'Cầu Giấy, Hà Nội, Vietnam', 'Ở đây vẫn là những ngày đầy nắng ấm áp, bầu trời trong xanh, Rời xa sự ồn ào nơi phố thị kia và tìm cho mình một nơi yên tĩnh nghỉ ngơi để tinh thần nhẹ nhàng, thư thái...', 'Phòng ngủ máy lạnh, wc, nước nóng lạnh, Với đầy đủ bếp nấu, lò nướng, bàn ăn, chén dĩa song chảo và những dụng cụ làm bếp, gia vị cơ bản, quý khách sẽ tổ chức 1 bữa tiệc BBQ đầm ấm và vui vẻ ngay tại khuôn viên của homestay.\r\nRất gần chợ Mới và Lotte Mart thuận tiện mua sắm và xem phim.', 'images/dalat_fourteen_one.JPG', 'images/dalat_fourteen_two.JPG', 'images/dalat_fourteen_three.JPG', 'images/dalat_fourteen_four.JPG', 'images/dalat_fourteen_five.JPG', 'images/dalat_fourteen_six.JPG'),
('HST0027', 'Homestay Melody', '1200000', 'LHST002', 'TP002', 'Nguyên căn · 2 Phòng tắm · 2 giường · 2 phòng ngủ · 6 khách (tối đa 15 khách)', 'Cầu Giấy, Hà Nội, Vietnam', 'LiCi Homestay nằm tại khu căn hộ Melody là một khách sạn bên bờ biển nằm ở Đà Lạt, cách Tượng chúa 1,7 km và cách Mũi Nghinh Phong 2,2 km. Với tầm nhìn ra hồ, chỗ ở này có ban công và hồ bơi.', 'Chỗ ở (rộng 85m2) gồm có 1 phòng khách, 2 phòng ngủ, 1 phòng bếp, 2 toilet. Lựa chọn lý tưởng cho nhóm bạn, cặp đôi và gia đình nghỉ dưỡng ở thành phố biển Vũng Tàu. Homestay ở tầng cao, view hướng biển, sạch sẽ thoáng mát. Đi xa nhưng vẫn có cảm giác thoải mái như đang ở nhà.Bạn vẫn có thể mua hải sản tươi sống về chế biến theo ý thích. Căn hộ máy lạnh này được trang bị 2 phòng ngủ, TV màn hình phẳng và nhà bếp với tủ lạnh và bếp nấu.', 'images/dalat_fifteen_one.JPG', 'images/dalat_fifteen_two.JPG', 'images/dalat_fifteen_three.JPG', 'images/dalat_fifteen_four.JPG', 'images/dalat_fifteen_five.JPG', 'images/dalat_fifteen_six.JPG'),
('HST0028', 'Kaia Residence', '1140000', 'LHST002', 'TP002', 'Nguyên căn · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 3 khách)', 'Cầu Giấy, Hà Nội, Vietnam', 'Nơi những câu chuyện của chúng tôi gặp bạn của bạn\r\nNơi mà bạn cảm thấy như ở nhà.\r\nNơi mà bạn cảm thấy thư giãn.\r\nNơi mà bạn cảm thấy thanh lịch.\r\nẨn mình trong một thung lũng yên tĩnh ở trung tâm Đà Nẵng, ẩn sau một khu vườn yên tĩnh thuần khiết, The Kaia Residence, một nơi lưu trú được thiết kế cá nhân hóa cao chỉ với 10 căn hộ, là một lời nhắc nhở không ngừng về vẻ đẹp của kiến ​​trúc hiện đại thế kỷ 20.', 'Mỗi phòng đều có ban công riêng, nhìn ra khung cảnh vườn xanh, nhà bếp được trang bị tốt và bàn viết tùy chỉnh kết hợp với nhiều loại ghế bành và ghế sofa, mang đến không gian sống thư giãn nhưng ấm cúng như ở nhà.', 'images/dalat_sixteen_one.JPG', 'images/dalat_sixteen_two.JPG', 'images/dalat_sixteen_three.JPG', 'images/dalat_sixteen_four.JPG', 'images/dalat_sixteen_five.JPG', 'images/dalat_sixteen_six.JPG'),
('HST0029', 'Villa Riverfront', '8500000', 'LHST001', 'TP002', 'Nguyên căn · 4 Phòng tắm · 5 giường · 5 phòng ngủ · 8 khách (tối đa 8 khách)', 'Cầu Giấy, Hà Nội, Vietnam', 'Icity Villa Riverfront nằm trong chuỗi biệt thự và khách sạn căn hộ 5 sao đã đưa vào vận hành khai thác bởi Icity Hotel Group, nằm trong chuỗi hệ thống các biệt thự và căn hộ dịch vụ chất lượng 5 sao trên khắp Việt Nam. Villa nằm tại Hải Châu, quận trung tâm của Thành phố Đà Nẵng, đối diện là sông Hàn thơ mộng, cách siêu thị Lotte và công viên Châu Á 1,2km, cách siêu thị Mega Market 500m.', 'Hệ thống cửa chính sử dụng khóa từ đảm bảo an toàn và tiện dụng. Phòng bếp đầy đủ tiện nghi cao cấo như: Tủ lạnh Hafele có máy tự làm đá, máy lọc nước AO Smith, lò nướng, lò vi sóng, trang bị sẵn bàn ủi, máy giặt, máy điều hoà, máy sấy tóc, áo choàng tắm, vật dụng đầy đủ phòng tắm cao cấp, két sắt từng phòng, dép và khăn các loại…', 'images/dalat_seventeen_one.JPG', 'images/dalat_seventeen_two.JPG', 'images/dalat_seventeen_three.JPG', 'images/dalat_seventeen_four.JPG', 'images/dalat_seventeen_five.JPG', 'images/dalat_seventeen_six.JPG'),
('HST003', 'The Windy', '1000000', 'LHST002', 'TP001', 'Phòng riêng · 1 Phòng tắm · 2 giường · 1 phòng ngủ · 4 khách (tối đa 5 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'Phòng 4 khách ở The Windy BnB Da Lat - Rollei Stories với diện tích 35m2, tầng hầm, có 1 phòng ngủ và 1 phòng tắm được trang bị các thiết bị và vật dụng tiện nghi, hiện đại. Với mong muốn có thể tạo nên  không  gian thoải  mái , dễ chịu cũng như là tiện nghi cho khách đến lưu trú nên đây sẽ là điểm đến cũng như sự lựa chọn phù hợp cho chuyến nghĩ dưỡng của bạn.', 'Ngoài không gian sinh hoạt riêng thì sẽ còn phòng sinh hoạt chung  là phòng khách . Phòng khách rộng rãi được bày trí góc tranh nghệ thuật, sofa lớn là không gian để có thể cùng nhau ngồi uống trà trò chuyện và chụp vài tấm ảnh cùng bức tường tranh thì còn gì bằng.\r\nNhắc đến Đà Lạt là cảm nhận được ngay sự mát mẻ và trong lành. Đà Lạt  không chỉ là thành phố chỉ dành cho những cặp đôi mà còn dành cho cả gia đình, những chuyến đi kỷ niệm thì Đà Lạt đều có thể đáp ứng tất cả. Với những ai yêu th', 'images/dalat_three_one.JPG', 'images/dalat_three_two.JPG', 'images/dalat_three_three.JPG', 'images/dalat_three_four.JPG', 'images/dalat_three_five.JPG', 'images/dalat_three_six.JPG'),
('HST0030', 'Yellow Submarine', '420000', 'LHST003', 'TP002', 'Nguyên căn · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 2 khách)', 'Cầu Giấy, Hà Nội, Vietnam', 'Những căn phòng khách sạn có thiết kế như rập khuôn có làm bạn chán? Hãy tạm quên chúng đi. Cho dù đang tìm một nơi cho kỳ nghỉ của mình hay chỉ để nán lại vài hôm, bạn cần một chỗ nghỉ ngơi thoải mái, đủ khác biệt và riêng tư. Đây chính là nơi để bạn ngủ trong yên bình và thức dậy trong nắng ấm.', '+ Tận hưởng những phút giây thoải mái, trò chuyện cùng bạn bè ở không gian bếp chung dưới nhà.\r\n+ Rạp chiếu phim mini để bạn đắm chìm vào những thước phim trong khi hàn huyên với bạn bè, với tay để lấy món ăn mình yêu thích.\r\n+ Thư viện sách với không gian yên tĩnh và lý tưởng để đọc sách mà không bị xao nhãng.', 'images/dalat_eightteen_one.JPG', 'images/dalat_eightteen_two.JPG', 'images/dalat_eightteen_three.JPG', 'images/dalat_eightteen_four.PNG', 'images/dalat_eightteen_five.JPG', 'images/dalat_eightteen_six.PNG'),
('HST0031', 'Paradise Destination', '999000', 'LHST002', 'TP002', 'Nguyên căn · 5 Phòng tắm · 4 giường · 4 phòng ngủ · 8 khách (tối đa 12 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'Paradise Destination tọa lạc tại vị trí đắc địa, con đường sầm uất trung tâm TP. Đà Lạt, thuận tiện cho việc đi lại, ăn uống cũng như tham quan các điểm du lịch như : Bà Nà Hill, Núi Thần Tài, Asian Park, Núi Ngũ Hành Sơn, Phố cổ Hội An, Bãi biển Đà Nẵng, Chợ đêm,….', 'Paradise Destination nằm ngay trung tâm chính của Đà Lạt nên sẽ rất thuận tiện đi các điểm :\r\n-Cà phê TyRolls : 2 phút đi bộ\r\n-Siêu thị Vinmart: 2 phút bị bộ\r\n-Phương Đông Club: 5 phút đi taxi ( 2 – 3 usd )\r\n-Chợ Cồn : 5 phút đi taxi ( 2 – 3 usd )\r\n-Ga tàu : 5 phút đi taxi ( 2 – 3 usd)\r\n-Chợ Hàn : 10 – 15 phút đi taxi ( 4-5usd)\r\n-Sân bay Đà Nẵng : 10 – 15 phút đi taxi ( 4-5usd)', 'images/dalat_nineteen_one.JPG', 'images/dalat_nineteen_two.JPG', 'images/dalat_nineteen_three.JPG', 'images/dalat_nineteen_four.JPG', 'images/dalat_nineteen_five.JPG', 'images/dalat_nineteen_six.JPG'),
('HST0032', 'Mayli Homestay Đà Lạt', '400000', 'LHST003', 'TP002', 'Phòng riêng · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 3 khách)', 'Cầu Giấy, Hà Nội, Vietnam', 'Mayli Homestay là căn biệt thự nằm trong khu biệt thự biệt lập tại đường Cô Giang, cách quảng trường Đà Lạt 5 phút đi xe. Nhà có tổng cộng 11 phòng dành cho khách.', 'Từng căn phòng với thiết kế đặc biệt lấy cảm hứng từ thiên nhiên, đất trời, những điều đặc biệt nhất tại Đà Lạt. Mọi ngóc ngách ở căn phòng đều có thể cho bạn những bức hình lung linh, đáng yêu.\r\n\r\nPhòng ngủ đôi dành cho 2 người với giường đôi cỡ lớn, được trang bị chăn ga với chất liệu cotton living sang trọng, hiện đại, cho bạn giấc ngủ thật êm ái, ngon lành sau những chuyến đi khám phá tại Đà Lạt.', 'images/dalat_two_three.JFIF', 'images/dalat_two_two.JFIF', 'images/dalat_two_one.JFIF', 'images/dalat_two_four.JFIF', 'images/dalat_two_five.JFIF', 'images/dalat_two_six.JFIF'),
('HST0033', 'Suit family apartment', '750000', 'LHST003', 'TP002', 'Phòng riêng · 2 Phòng tắm · 2 giường · 2 phòng ngủ · 4 khách (tối đa 4 khách)\r\n\r\n\r\n', 'Cầu Giấy, Hà Nội, Vietnam', 'Căn hộ cao cấp dành cho các gia đình· 65 m2 gồm 2 phòng tắm ·2 giường ·2 phòng ngủ ·4 khách (tối đa 5 khách)\r\nĐược thiết kế theo phong cách Nhật Bản - Hiện đại và sang trọng với đầy đủ tiện nghi cao cấp.\r\n', 'Nằm ngay ở vị trí tuyệt vời nhất, gần bãi biển đẹp Mỹ Khê và gần các điểm tham quan như Công Viên Châu Á, Vòng quay mặt trời, Nhà Đảo ngược, Núi Ngũ hành Sơn, nhà thờ Con Gà, cầu Rồng phun lửa, Sông Hàn ...\r\nBạn mất tầm 20 phút để xem được bồng lai tiên cảnh như Bà Nà Hill, Phố cổ Hội An, Núi Thần Tài,...\r\nBên cạnh là siêu thị Lottemart bạn có thể mua đồ về nấu ăn hoặc có thể ăn buffe và xem phim tại đó.', 'images/dalat_twenty_one.JPG', 'images/dalat_twenty_two.JPG', 'images/dalat_twenty_three.JPG', 'images/dalat_twenty_four.JPG', 'images/dalat_twenty_five.JPG', 'images/dalat_twenty_six.JPG'),
('HST0034', 'The Windy', '1000000', 'LHST002', 'TP002', 'Phòng riêng · 1 Phòng tắm · 2 giường · 1 phòng ngủ · 4 khách (tối đa 5 khách)', 'Cầu Giấy, Hà Nội, Vietnam', 'Phòng 4 khách ở The Windy BnB Da Lat - Rollei Stories với diện tích 35m2, tầng hầm, có 1 phòng ngủ và 1 phòng tắm được trang bị các thiết bị và vật dụng tiện nghi, hiện đại. Với mong muốn có thể tạo nên  không  gian thoải  mái , dễ chịu cũng như là tiện nghi cho khách đến lưu trú nên đây sẽ là điểm đến cũng như sự lựa chọn phù hợp cho chuyến nghĩ dưỡng của bạn.', 'Ngoài không gian sinh hoạt riêng thì sẽ còn phòng sinh hoạt chung  là phòng khách . Phòng khách rộng rãi được bày trí góc tranh nghệ thuật, sofa lớn là không gian để có thể cùng nhau ngồi uống trà trò chuyện và chụp vài tấm ảnh cùng bức tường tranh thì còn gì bằng.\r\nNhắc đến Đà Lạt là cảm nhận được ngay sự mát mẻ và trong lành. Đà Lạt  không chỉ là thành phố chỉ dành cho những cặp đôi mà còn dành cho cả gia đình, những chuyến đi kỷ niệm thì Đà Lạt đều có thể đáp ứng tất cả. Với những ai yêu th', 'images/dalat_three_one.JPG', 'images/dalat_three_two.JPG', 'images/dalat_three_three.JPG', 'images/dalat_three_four.JPG', 'images/dalat_three_five.JPG', 'images/dalat_three_six.JPG'),
('HST0035', 'LA MAISON GRISE - Pine Valley View', '4500000', 'LHST001', 'TP002', 'Nguyên căn · 8 Phòng tắm · 16 giường · 8 phòng ngủ · 10 khách (tối đa 16 khách)', 'Cầu Giấy, Hà Nội, Vietnam', 'LA MAISON GRISE - Quang cảnh thung lũng thông\r\nLa Maison Grise DaLat I Private I Luxury I Toàn bộ cho thuê biệt thự - 10 phút lái xe đến trung tâm.\r\nKhung cảnh tuyệt đẹp của Thung lũng thông, bạn có thể tận hưởng cả bình minh và hoàng hôn ngay tại biệt thự.', 'Biệt thự mới được xây dựng theo phong cách hiện đại, nhà bếp được trang bị đầy đủ dụng cụ BBQ, tiện nghi và bộ khăn tắm sẵn sàng trong mỗi phòng ngủ. Biệt thự nằm trên con phố chính của thành phố Đà Lạt, cũng gần nhiều nhà hàng và quán cà phê, cách hồ Xuân Hương (2 phút lái xe) khoảng 2km. Chúng tôi cung cấp bãi đậu xe miễn phí trước và bãi đậu xe lớn gần đó. Đừng lo lắng về việc chia sẻ bất cứ điều gì với người khác vì khách của chúng tôi sẽ có quyền riêng tư 100%. Chúng tôi cho phép bạn có toà', 'images/dalat_four_one.JPEG', 'images/dalat_four_two.JPEG', 'images/dalat_four_three.JPEG', 'images/dalat_four_four.JPEG', 'images/dalat_four_five.JPEG', 'images/dalat_four_six.JPEG'),
('HST0036', 'Nomad Home & Coffee', '450000', 'LHST003', 'TP002', 'Phòng riêng · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 2 khách)', 'Cầu Giấy, Hà Nội, Vietnam', 'Phòng màu hồng siêu cute dành cho 2 người\r\nPhòng có nhà vệ sinh riêng, nước nóng lạnh, có sẵn khăn tắm, dầu gội và sữa tắm\r\nNomad là nơi dành cho các bạn yêu thích sự yên tĩnh, tận hưởng không khí Đà Lạt. Bạn có thể thoải mái nghỉ ngơi ở sân vườn, nghe suối reo, chim hót hoặc thưởng thức tách cà phê nóng thơm lừng mỗi sáng. Nomad không phù hợp với các bạn yêu thích sự ồn ào, náo nhiệt\r\nCó phục vụ ăn sáng', 'Chỉ cách trung tâm thành phố 1km\r\nTừ Nomad đến chợ Đà Lạt chỉ mất 1.7km (tương đương 5 phút đi xe ~ 28k tiền taxi)\r\nNomad ở gần nhà thờ Domaine\r\nGần cái địa điểm ăn uống như lẩu bò Ba Toa, Tiệm bánh Cối Xay Gió, Sữa đậu nành bùng binh Thắng Lợi', 'images/dalat_five_one.JPG', 'images/dalat_five_two.JPG', 'images/dalat_five_three.JPG', 'images/dalat_five_four.JPG', 'images/dalat_five_five.JPG', 'images/dalat_five_six.JPG'),
('HST0037', 'Apt Vinhomes Skylake', '1100000', 'LHST002', 'TP002', 'Nguyên căn · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 3 khách)', 'Cầu Giấy, Hà Nội, Vietnam', 'Căn hộ mới và hiện đại vừa được trang bị tiện nghi giúp khách hàng cảm thấy như đang ở nhà. Toàn bộ căn hộ tràn ngập ánh sáng tự nhiên, tạo sự vừa thoáng vừa rộng rãi. Các tòa nhà có đầy đủ tiện nghi bao gồm Phòng tập thể dục, bể bơi 4 mùa, sân vườn đẹp, nhà hàng, khu vui chơi trẻ em, Cửa hàng dược phẩm ...', 'Giao thông rất thuận tiện để đi bất cứ nơi nào trong thành phố cũng như các khu công nghiệp quanh thủ đô Hà Nội. Khách truy cập vào toàn bộ nơi. Tôi sẽ có mặt 24/7. Khu phố rất an toàn và xinh đẹp với công viên, hồ nước và khu giải trí. Cửa hàng tiện lợi, siêu thị và các dịch vụ khác cũng có sẵn trong khoảng cách đi bộ. Rất an toàn để có được xung quanh. Grab hoặc taxi được khuyến nghị nếu bạn muốn đi quanh thành phố.', 'images/dalat_six_one.JPG', 'images/dalat_six_two.JPG', 'images/dalat_six_three.JPG', 'images/dalat_six_four.JPG', 'images/dalat_six_five.JPG', 'images/dalat_six_six.JPG'),
('HST0038', 'Đồi Thông Dinh II', '690000', 'LHST003', 'TP002', 'Phòng riêng · 1 Phòng tắm · 2 giường · 1 phòng ngủ · 2 khách (tối đa 3 khách)', 'Cầu Giấy, Hà Nội, Vietnam', 'Vị trí ngay dưới đồi thông Dinh 2, cách Chợ đêm 5 phút đi xe máy\r\nĐường vào hơi dốc (dốc thẳng Hội trường Lê Văn Tám), nhưng bù lại view nhà rất đẹp và riêng tư\r\nĐầy đủ tiện nghi, nội thất gỗ tự nhiên, decor xinh xắn và rất sạch sẽ', 'Phòng ngủ, giường đọc sách (bay window) và ban công nhìn ra đồi thông xanh mướt\r\nVườn quanh nhà trồng hoa, cây trái và rau xanh bốn mùa, khách có thể sử dụng để nấu ăn\r\nGần nhà hàng, quán cà phê, siêu thị Vinmart, Big C, nhà thuốc\r\nQuản gia trực 24/24 trong nhà hỗ trợ khách khi cần thiết', 'images/dalat_seven_one.JPG', 'images/dalat_seven_two.JPG', 'images/dalat_seven_three.JFIF', 'images/dalat_seven_four.JPG', 'images/dalat_seven_five.JFIF', 'images/dalat_seven_six.JFIF'),
('HST0039', '2 BR- Lux Millennium', '1200000', 'LHST002', 'TP002', 'Nguyên căn · 2 Phòng tắm · 2 giường · 2 phòng ngủ · 5 khách (tối đa 6 khách)', 'Cầu Giấy, Hà Nội, Vietnam', 'Căn hộ Justay 2 phòng ngủ toạ lạc ở toà nhà cao cấp Millenium trung tâm Đà Lạt.\r\nVị trí:\r\n10 phút đi bộ tới chợ bến thành, Bitexco, phố đi bộ Nguyễn Huệ, phố Tây Bùi Viện\r\nCạnh sông Đà Lạt thơ mộng, đẹp đẽ, náo nhiệt\r\n5\' đi bộ tới khu ẩm thực lớn nhất Đà Lạt', 'Phòng:\r\nCăn hộ cao cấp 2 phòng ngủ view sông và Bitexco\r\n2 toilet\r\nThiết kế với tông xanh lá thiên nhiên\r\nTiện ích cao cấp:\r\nMiễn phí hồ bơi chân mây tầng 7 view thành phố\r\nMiễn phí phòng Gym\r\nKhu BBQ\r\nKhu phòng họp sang trọng\r\nKhu chơi dành cho trẻ em\r\nSân vườn trên cao.\r\nDịch vụ: Justay là Công ty chuyên cung cấp chỗ ở ngắn hạn dài hạn chuyên nghiệp. Chúng tôi hỗ trợ:\r\nCheck in 24/24\r\nKí gửi hành lí trước khi đến\r\nCung cấp các gói tour giá tốt.\r\nCung cấp dịch vụ giặt ủi\r\nHỗ trợ kê thêm đệm cho', 'images/dalat_eight_one.JPG', 'images/dalat_eight_two.JPG', 'images/dalat_eight_three.JPG', 'images/dalat_eight_four.JPG', 'images/dalat_eight_five.JPG', 'images/dalat_eight_six.JPG'),
('HST004', 'LA MAISON GRISE - Pine Valley View', '4500000', 'LHST001', 'TP001', 'Nguyên căn · 8 Phòng tắm · 16 giường · 8 phòng ngủ · 10 khách (tối đa 16 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'LA MAISON GRISE - Quang cảnh thung lũng thông\r\nLa Maison Grise DaLat I Private I Luxury I Toàn bộ cho thuê biệt thự - 10 phút lái xe đến trung tâm.\r\nKhung cảnh tuyệt đẹp của Thung lũng thông, bạn có thể tận hưởng cả bình minh và hoàng hôn ngay tại biệt thự.', 'Biệt thự mới được xây dựng theo phong cách hiện đại, nhà bếp được trang bị đầy đủ dụng cụ BBQ, tiện nghi và bộ khăn tắm sẵn sàng trong mỗi phòng ngủ. Biệt thự nằm trên con phố chính của thành phố Đà Lạt, cũng gần nhiều nhà hàng và quán cà phê, cách hồ Xuân Hương (2 phút lái xe) khoảng 2km. Chúng tôi cung cấp bãi đậu xe miễn phí trước và bãi đậu xe lớn gần đó. Đừng lo lắng về việc chia sẻ bất cứ điều gì với người khác vì khách của chúng tôi sẽ có quyền riêng tư 100%. Chúng tôi cho phép bạn có toà', 'images/dalat_four_one.JPEG', 'images/dalat_four_two.JPEG', 'images/dalat_four_three.JPEG', 'images/dalat_four_four.JPEG', 'images/dalat_four_five.JPEG', 'images/dalat_four_six.JPEG'),
('HST0040', 'Sunwah Golden House', '2900000', 'LHST001', 'TP002', 'Nguyên căn · 2 Phòng tắm · 3 giường · 3 phòng ngủ · 7 khách (tối đa 7 khách)', 'Cầu Giấy, Hà Nội, Vietnam', 'Căn hộ của chúng tôi nằm bên bờ sông Sài Gòn, khu căn hộ nằm cạnh Bitexco Tower & Landmark 81- Tòa nhà cao nhất Việt Nam. Tầm nhìn rộng ra sông Sài Gòn và cầu Sài Gòn, cầu Thủ Thiêm từ tất cả các phòng của căn hộ. Đây là khu đẳng cấp với vị trí trung tâm nổi bật, dịch vụ tiện ích như Gym, hồ bơi; cung cấp đầy đủ các tiện nghi phòng như wifi, tivi màn hình phẳng, điều hoà, khu vực bếp nấu ăn với đầy đủ dụng cụ.', 'Chúng tôi luôn có lễ tân đón tiếp, phục vụ miễn phí trà và cà phê cho khách lưu trú. Ngoài ra chúng tôi còn cung cấp dịch vụ dọn phòng miễn phí mỗi ngày cho khách.\r\n\r\nCác địa điểm nổi tiếng xung quanh gồm có toà Landmark 81 - toà nhà cao nhất Việt Nam, Bến Nhà Rồng, Nhà hát Thành phố, Dinh Thống Nhất và Nhà thờ Đức Bà. Sân bay gần nhất là sân bay quốc tế Tân Sơn Nhất, cách đó chỉ 40 phút lái xe.', 'images/dalat_nine_one.JPG', 'images/dalat_nine_two.JPG', 'images/dalat_nine_three.JPG', 'images/dalat_nine_four.JPG', 'images/dalat_nine_five.JPG', 'images/dalat_nine_six.JPG'),
('HST0041', 'Full House Condotel', '1650000', 'LHST001', 'TP003', ' 1 Phòng tắm · 2 giường · 2 phòng ngủ', 'Sơn Trà, Đà Nẵng, Việt Nam', 'Trang bị nội thất 5 sao sang trọng, di chuyển nhanh với thang máy, với 2 phòng ngủ thiết kế theo phong cách Châu Âu cổ điển, view chợ đêm, phòng khách rộng rãi, ban công trang bị bộ bàn ghế cà phê ngắm hoàng hôn.', 'Trang bị nội thất đẳng cấp, các thiết bị tiện nghi trang bị đầy đủ, 2 smart tivi 49 inches, tủ lạnh, sofa bed, bộ bàn ăn, nồi hâm, bếp từ, bộ chén dĩa Gốm Nhật, chăn êm, nệm ấm...\r\n\r\n', 'images/dalat_one_one.PNG', 'images/dalat_one_seven.JPG', 'images/dalat_one_nine.JPG', 'images/dalat_one_nine.JPG', 'images/dalat_one_five.JPG', 'images/dalat_one_six.JPG'),
('HST0042', 'Andy\'s House - The Lotus Room', '650000', 'LHST003', 'TP003', 'Phòng riêng · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 2 khách)', 'Sơn Trà, Đà Nẵng, Việt Nam', 'Andy\'s House - VIP Room với diện tích 60m2. Gồm 1 phòng ngủ và 1 phòng tắm. Được chúng tôi trang bị đầy đủ các thiết bị tiện nghi, hiện đại: wifi, tivi, máy sấy tóc, chổ giữ xe…Phù hợp cho những chuyến đi công tác và gia đình nhỏ 3 người.', 'Bạn có thể mở cửa sổ kính lớn để ánh sáng và gió từ thiên nhiên vào trong phòng. Hay mở cửa để ra ngoài ban công rộng rãi, sạch sẽ có sẵn ghế hồ bơi bằng gỗ tắm nắng nhé. Chúng tôi còn trồng rất nhiều cây xanh trong phòng nữa đấy nhé. Có khu sinh hoạt và bồn tắm ngoài trời tạo cảm giác thoải mái, thư giãn khi đến với thành phố Hồ Chí Minh nhộn nhịp.', 'images/dalat_ten_one.JPG', 'images/dalat_ten_two.JPG', 'images/dalat_ten_three.JPG', 'images/dalat_ten_four.JPG', 'images/dalat_ten_five.JPG', 'images/dalat_ten_six.JPG'),
('HST0043', 'Luxury Pool Villa', '3500000', 'LHST001', 'TP003', 'Nguyên căn · 4 Phòng tắm · 8 giường · 5 phòng ngủ · 15 khách (tối đa 35 khách)', 'Sơn Trà, Đà Nẵng, Việt Nam', 'Joy\'n Villa 3 được thiết kế theo phong cách hiện đại và đơn giản. Đặc biệt villa chúng tôi có phòng xông hơi, phòng giải trí bida, ghế tình yêu.... Mang đến cho bạn sự gần gũi và thoải mái, đáp ứng nhu cầu thư giãn và vui chơi. Đặc biệt Joy Villa sở hữu hồ bơi chuẩn 5 sao đáp ứng mọi nhu cầu của quý khách <3', '- Không gian thoáng mát, ấm cúng dành cho cặp đôi, gia đình đều được.\r\n- Căn hộ đầy đủ thiết bị nấu nướng, 3 máy lạnh, máy giặt, tủ lạnh, bếp gas,...không thiếu gì cả.\r\n- Tư vấn, hướng dẫn nhiệt tình những địa điểm ăn uống ngon nhất Đà Lạt', 'images/dalat_eleven_one.JPG', 'images/dalat_eleven_two.JPG', 'images/dalat_eleven_three.JPG', 'images/dalat_eleven_four.JPG', 'images/dalat_eleven_five.JPG', 'images/dalat_eleven_six.JPG'),
('HST0044', 'Lavies House 11', '5700000', 'LHST001', 'TP003', 'Nguyên căn · 5 Phòng tắm · 6 giường · 6 phòng ngủ · 15 khách (tối đa 30 khách)', 'Sơn Trà, Đà Nẵng, Việt Nam', 'Chuỗi Lavies House Vũng Tàu xin giới thiệu Lavies House 11 - là biệt thự hồ bơi nguyên căn với 6 phòng ngủ, 6 giường và có nhiều nệm riêng, với các toilet khép kín riêng trong từng phòng. Căn biệt thự Lavies House 11 gần Bãi Sau. Đầy đủ dụng cụ nấu nướng như bếp ga, bếp từ, lò than, ly chén, ....Có bãi đậu xe cho khách', 'Bên cạnh đó, tôi cũng là một người vô cùng thân thiện và thoải mái. Chính vì vậy đừng ngại ngần mà chia sẻ với chúng tôi những điều bạn đang thắc mắc hoặc những khó khăn bạn gặp phải khi ở đây.', 'images/dalat_twelve_one.JPG', 'images/dalat_twelve_two.JPG', 'images/dalat_twelve_three.JPG', 'images/dalat_twelve_four.JPG', 'images/dalat_twelve_five.JPG', 'images/dalat_twelve_six.JPG'),
('HST0045', 'Homestay GoldSea', '458000', 'LHST003', 'TP003', 'Nguyên căn · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 4 khách)', 'Sơn Trà, Đà Nẵng, Việt Nam', 'GoldSea là một trong những chung cư được nhiều người du lịch biết đến trong những năm gần đây do nơi đây có hàng trăm căn hộ cho khách du lịch thuê ngắn hạn. Với vị trí địa lý thuận tiện cách Bãi Sau chỉ 100m và cách Bãi Trước 1500m trên trục đường Hoàng Hoa Thám, là khu vực nhộn nhịp nhất của thành phố Đà Lạt.', 'Xu hướng homestay rất được ưa chuộng, đặc biệt là homestay căn hộ chung cư bởi vị trí địa lý luôn thuận lợi, di chuyển dễ dàng, có bãi đậu xe an toàn, chỗ ở an ninh văn minh lịch sự và đặc biệt là sạch sẽ, view đẹp chính là lý do mà Melody và một số chung cư có homestay khác được nhiều khách du lịch lựa chọn đầu tiên cho chuyến nghỉ dưỡng Vũng Tàu của họ.', 'images/dalat_thirdteen_one.JPEG', 'images/dalat_thirdteen_two.JPEG', 'images/dalat_thirdteen_three.JPEG', 'images/dalat_thirdteen_four.JPEG', 'images/dalat_thirdteen_five.JPEG', 'images/dalat_thirdteen_six.JPEG'),
('HST0046', 'La Mer homestay', '500000', 'LHST003', 'TP003', 'Phòng riêng · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 3 khách)', 'Sơn Trà, Đà Nẵng, Việt Nam', 'Ở đây vẫn là những ngày đầy nắng ấm áp, bầu trời trong xanh, Rời xa sự ồn ào nơi phố thị kia và tìm cho mình một nơi yên tĩnh nghỉ ngơi để tinh thần nhẹ nhàng, thư thái...', 'Phòng ngủ máy lạnh, wc, nước nóng lạnh, Với đầy đủ bếp nấu, lò nướng, bàn ăn, chén dĩa song chảo và những dụng cụ làm bếp, gia vị cơ bản, quý khách sẽ tổ chức 1 bữa tiệc BBQ đầm ấm và vui vẻ ngay tại khuôn viên của homestay.\r\nRất gần chợ Mới và Lotte Mart thuận tiện mua sắm và xem phim.', 'images/dalat_fourteen_one.JPG', 'images/dalat_fourteen_two.JPG', 'images/dalat_fourteen_three.JPG', 'images/dalat_fourteen_four.JPG', 'images/dalat_fourteen_five.JPG', 'images/dalat_fourteen_six.JPG'),
('HST0047', 'Homestay Melody', '1200000', 'LHST002', 'TP003', 'Nguyên căn · 2 Phòng tắm · 2 giường · 2 phòng ngủ · 6 khách (tối đa 15 khách)', 'Sơn Trà, Đà Nẵng, Việt Nam', 'LiCi Homestay nằm tại khu căn hộ Melody là một khách sạn bên bờ biển nằm ở Đà Lạt, cách Tượng chúa 1,7 km và cách Mũi Nghinh Phong 2,2 km. Với tầm nhìn ra hồ, chỗ ở này có ban công và hồ bơi.', 'Chỗ ở (rộng 85m2) gồm có 1 phòng khách, 2 phòng ngủ, 1 phòng bếp, 2 toilet. Lựa chọn lý tưởng cho nhóm bạn, cặp đôi và gia đình nghỉ dưỡng ở thành phố biển Vũng Tàu. Homestay ở tầng cao, view hướng biển, sạch sẽ thoáng mát. Đi xa nhưng vẫn có cảm giác thoải mái như đang ở nhà.Bạn vẫn có thể mua hải sản tươi sống về chế biến theo ý thích. Căn hộ máy lạnh này được trang bị 2 phòng ngủ, TV màn hình phẳng và nhà bếp với tủ lạnh và bếp nấu.', 'images/dalat_fifteen_one.JPG', 'images/dalat_fifteen_two.JPG', 'images/dalat_fifteen_three.JPG', 'images/dalat_fifteen_four.JPG', 'images/dalat_fifteen_five.JPG', 'images/dalat_fifteen_six.JPG'),
('HST0048', 'Kaia Residence', '1140000', 'LHST002', 'TP003', 'Nguyên căn · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 3 khách)', 'Sơn Trà, Đà Nẵng, Việt Nam', 'Nơi những câu chuyện của chúng tôi gặp bạn của bạn\r\nNơi mà bạn cảm thấy như ở nhà.\r\nNơi mà bạn cảm thấy thư giãn.\r\nNơi mà bạn cảm thấy thanh lịch.\r\nẨn mình trong một thung lũng yên tĩnh ở trung tâm Đà Nẵng, ẩn sau một khu vườn yên tĩnh thuần khiết, The Kaia Residence, một nơi lưu trú được thiết kế cá nhân hóa cao chỉ với 10 căn hộ, là một lời nhắc nhở không ngừng về vẻ đẹp của kiến ​​trúc hiện đại thế kỷ 20.', 'Mỗi phòng đều có ban công riêng, nhìn ra khung cảnh vườn xanh, nhà bếp được trang bị tốt và bàn viết tùy chỉnh kết hợp với nhiều loại ghế bành và ghế sofa, mang đến không gian sống thư giãn nhưng ấm cúng như ở nhà.', 'images/dalat_sixteen_one.JPG', 'images/dalat_sixteen_two.JPG', 'images/dalat_sixteen_three.JPG', 'images/dalat_sixteen_four.JPG', 'images/dalat_sixteen_five.JPG', 'images/dalat_sixteen_six.JPG'),
('HST0049', 'Villa Riverfront', '8500000', 'LHST001', 'TP003', 'Nguyên căn · 4 Phòng tắm · 5 giường · 5 phòng ngủ · 8 khách (tối đa 8 khách)', 'Sơn Trà, Đà Nẵng, Việt Nam', 'Icity Villa Riverfront nằm trong chuỗi biệt thự và khách sạn căn hộ 5 sao đã đưa vào vận hành khai thác bởi Icity Hotel Group, nằm trong chuỗi hệ thống các biệt thự và căn hộ dịch vụ chất lượng 5 sao trên khắp Việt Nam. Villa nằm tại Hải Châu, quận trung tâm của Thành phố Đà Nẵng, đối diện là sông Hàn thơ mộng, cách siêu thị Lotte và công viên Châu Á 1,2km, cách siêu thị Mega Market 500m.', 'Hệ thống cửa chính sử dụng khóa từ đảm bảo an toàn và tiện dụng. Phòng bếp đầy đủ tiện nghi cao cấo như: Tủ lạnh Hafele có máy tự làm đá, máy lọc nước AO Smith, lò nướng, lò vi sóng, trang bị sẵn bàn ủi, máy giặt, máy điều hoà, máy sấy tóc, áo choàng tắm, vật dụng đầy đủ phòng tắm cao cấp, két sắt từng phòng, dép và khăn các loại…', 'images/dalat_seventeen_one.JPG', 'images/dalat_seventeen_two.JPG', 'images/dalat_seventeen_three.JPG', 'images/dalat_seventeen_four.JPG', 'images/dalat_seventeen_five.JPG', 'images/dalat_seventeen_six.JPG'),
('HST005', 'Nomad Home & Coffee', '450000', 'LHST003', 'TP001', 'Phòng riêng · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 2 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'Phòng màu hồng siêu cute dành cho 2 người\r\nPhòng có nhà vệ sinh riêng, nước nóng lạnh, có sẵn khăn tắm, dầu gội và sữa tắm\r\nNomad là nơi dành cho các bạn yêu thích sự yên tĩnh, tận hưởng không khí Đà Lạt. Bạn có thể thoải mái nghỉ ngơi ở sân vườn, nghe suối reo, chim hót hoặc thưởng thức tách cà phê nóng thơm lừng mỗi sáng. Nomad không phù hợp với các bạn yêu thích sự ồn ào, náo nhiệt\r\nCó phục vụ ăn sáng', 'Chỉ cách trung tâm thành phố 1km\r\nTừ Nomad đến chợ Đà Lạt chỉ mất 1.7km (tương đương 5 phút đi xe ~ 28k tiền taxi)\r\nNomad ở gần nhà thờ Domaine\r\nGần cái địa điểm ăn uống như lẩu bò Ba Toa, Tiệm bánh Cối Xay Gió, Sữa đậu nành bùng binh Thắng Lợi', 'images/dalat_five_one.JPG', 'images/dalat_five_two.JPG', 'images/dalat_five_three.JPG', 'images/dalat_five_four.JPG', 'images/dalat_five_five.JPG', 'images/dalat_five_six.JPG'),
('HST0050', 'Yellow Submarine', '420000', 'LHST003', 'TP003', 'Nguyên căn · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 2 khách)', 'Sơn Trà, Đà Nẵng, Việt Nam', 'Những căn phòng khách sạn có thiết kế như rập khuôn có làm bạn chán? Hãy tạm quên chúng đi. Cho dù đang tìm một nơi cho kỳ nghỉ của mình hay chỉ để nán lại vài hôm, bạn cần một chỗ nghỉ ngơi thoải mái, đủ khác biệt và riêng tư. Đây chính là nơi để bạn ngủ trong yên bình và thức dậy trong nắng ấm.', '+ Tận hưởng những phút giây thoải mái, trò chuyện cùng bạn bè ở không gian bếp chung dưới nhà.\r\n+ Rạp chiếu phim mini để bạn đắm chìm vào những thước phim trong khi hàn huyên với bạn bè, với tay để lấy món ăn mình yêu thích.\r\n+ Thư viện sách với không gian yên tĩnh và lý tưởng để đọc sách mà không bị xao nhãng.', 'images/dalat_eightteen_one.JPG', 'images/dalat_eightteen_two.JPG', 'images/dalat_eightteen_three.JPG', 'images/dalat_eightteen_four.PNG', 'images/dalat_eightteen_five.JPG', 'images/dalat_eightteen_six.PNG'),
('HST0051', 'Paradise Destination', '999000', 'LHST002', 'TP003', 'Nguyên căn · 5 Phòng tắm · 4 giường · 4 phòng ngủ · 8 khách (tối đa 12 khách)', 'Sơn Trà, Đà Nẵng, Việt Nam', 'Paradise Destination tọa lạc tại vị trí đắc địa, con đường sầm uất trung tâm TP. Đà Lạt, thuận tiện cho việc đi lại, ăn uống cũng như tham quan các điểm du lịch như : Bà Nà Hill, Núi Thần Tài, Asian Park, Núi Ngũ Hành Sơn, Phố cổ Hội An, Bãi biển Đà Nẵng, Chợ đêm,….', 'Paradise Destination nằm ngay trung tâm chính của Đà Lạt nên sẽ rất thuận tiện đi các điểm :\r\n-Cà phê TyRolls : 2 phút đi bộ\r\n-Siêu thị Vinmart: 2 phút bị bộ\r\n-Phương Đông Club: 5 phút đi taxi ( 2 – 3 usd )\r\n-Chợ Cồn : 5 phút đi taxi ( 2 – 3 usd )\r\n-Ga tàu : 5 phút đi taxi ( 2 – 3 usd)\r\n-Chợ Hàn : 10 – 15 phút đi taxi ( 4-5usd)\r\n-Sân bay Đà Nẵng : 10 – 15 phút đi taxi ( 4-5usd)', 'images/dalat_nineteen_one.JPG', 'images/dalat_nineteen_two.JPG', 'images/dalat_nineteen_three.JPG', 'images/dalat_nineteen_four.JPG', 'images/dalat_nineteen_five.JPG', 'images/dalat_nineteen_six.JPG'),
('HST0052', 'Mayli Homestay Đà Lạt', '400000', 'LHST003', 'TP003', 'Phòng riêng · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 3 khách)', 'Sơn Trà, Đà Nẵng, Việt Nam', 'Mayli Homestay là căn biệt thự nằm trong khu biệt thự biệt lập tại đường Cô Giang, cách quảng trường Đà Lạt 5 phút đi xe. Nhà có tổng cộng 11 phòng dành cho khách.', 'Từng căn phòng với thiết kế đặc biệt lấy cảm hứng từ thiên nhiên, đất trời, những điều đặc biệt nhất tại Đà Lạt. Mọi ngóc ngách ở căn phòng đều có thể cho bạn những bức hình lung linh, đáng yêu.\r\n\r\nPhòng ngủ đôi dành cho 2 người với giường đôi cỡ lớn, được trang bị chăn ga với chất liệu cotton living sang trọng, hiện đại, cho bạn giấc ngủ thật êm ái, ngon lành sau những chuyến đi khám phá tại Đà Lạt.', 'images/dalat_two_three.JFIF', 'images/dalat_two_two.JFIF', 'images/dalat_two_one.JFIF', 'images/dalat_two_four.JFIF', 'images/dalat_two_five.JFIF', 'images/dalat_two_six.JFIF'),
('HST0053', 'Suit family apartment', '750000', 'LHST003', 'TP003', 'Phòng riêng · 2 Phòng tắm · 2 giường · 2 phòng ngủ · 4 khách (tối đa 4 khách)\r\n\r\n\r\n', 'Sơn Trà, Đà Nẵng, Việt Nam', 'Căn hộ cao cấp dành cho các gia đình· 65 m2 gồm 2 phòng tắm ·2 giường ·2 phòng ngủ ·4 khách (tối đa 5 khách)\r\nĐược thiết kế theo phong cách Nhật Bản - Hiện đại và sang trọng với đầy đủ tiện nghi cao cấp.\r\n', 'Nằm ngay ở vị trí tuyệt vời nhất, gần bãi biển đẹp Mỹ Khê và gần các điểm tham quan như Công Viên Châu Á, Vòng quay mặt trời, Nhà Đảo ngược, Núi Ngũ hành Sơn, nhà thờ Con Gà, cầu Rồng phun lửa, Sông Hàn ...\r\nBạn mất tầm 20 phút để xem được bồng lai tiên cảnh như Bà Nà Hill, Phố cổ Hội An, Núi Thần Tài,...\r\nBên cạnh là siêu thị Lottemart bạn có thể mua đồ về nấu ăn hoặc có thể ăn buffe và xem phim tại đó.', 'images/dalat_twenty_one.JPG', 'images/dalat_twenty_two.JPG', 'images/dalat_twenty_three.JPG', 'images/dalat_twenty_four.JPG', 'images/dalat_twenty_five.JPG', 'images/dalat_twenty_six.JPG'),
('HST0054', 'The Windy', '1000000', 'LHST002', 'TP003', 'Phòng riêng · 1 Phòng tắm · 2 giường · 1 phòng ngủ · 4 khách (tối đa 5 khách)', 'Sơn Trà, Đà Nẵng, Việt Nam', 'Phòng 4 khách ở The Windy BnB Da Lat - Rollei Stories với diện tích 35m2, tầng hầm, có 1 phòng ngủ và 1 phòng tắm được trang bị các thiết bị và vật dụng tiện nghi, hiện đại. Với mong muốn có thể tạo nên  không  gian thoải  mái , dễ chịu cũng như là tiện nghi cho khách đến lưu trú nên đây sẽ là điểm đến cũng như sự lựa chọn phù hợp cho chuyến nghĩ dưỡng của bạn.', 'Ngoài không gian sinh hoạt riêng thì sẽ còn phòng sinh hoạt chung  là phòng khách . Phòng khách rộng rãi được bày trí góc tranh nghệ thuật, sofa lớn là không gian để có thể cùng nhau ngồi uống trà trò chuyện và chụp vài tấm ảnh cùng bức tường tranh thì còn gì bằng.\r\nNhắc đến Đà Lạt là cảm nhận được ngay sự mát mẻ và trong lành. Đà Lạt  không chỉ là thành phố chỉ dành cho những cặp đôi mà còn dành cho cả gia đình, những chuyến đi kỷ niệm thì Đà Lạt đều có thể đáp ứng tất cả. Với những ai yêu th', 'images/dalat_three_one.JPG', 'images/dalat_three_two.JPG', 'images/dalat_three_three.JPG', 'images/dalat_three_four.JPG', 'images/dalat_three_five.JPG', 'images/dalat_three_six.JPG');
INSERT INTO `home_stay` (`maHStay`, `tenHStay`, `donGia`, `maLoaiHStay`, `maTP`, `phuKien`, `diaChi`, `moTa`, `khongGian`, `img_one`, `img_two`, `img_three`, `img_four`, `img_five`, `img_six`) VALUES
('HST0055', 'LA MAISON GRISE - Pine Valley View', '4500000', 'LHST001', 'TP003', 'Nguyên căn · 8 Phòng tắm · 16 giường · 8 phòng ngủ · 10 khách (tối đa 16 khách)', 'Sơn Trà, Đà Nẵng, Việt Nam', 'LA MAISON GRISE - Quang cảnh thung lũng thông\r\nLa Maison Grise DaLat I Private I Luxury I Toàn bộ cho thuê biệt thự - 10 phút lái xe đến trung tâm.\r\nKhung cảnh tuyệt đẹp của Thung lũng thông, bạn có thể tận hưởng cả bình minh và hoàng hôn ngay tại biệt thự.', 'Biệt thự mới được xây dựng theo phong cách hiện đại, nhà bếp được trang bị đầy đủ dụng cụ BBQ, tiện nghi và bộ khăn tắm sẵn sàng trong mỗi phòng ngủ. Biệt thự nằm trên con phố chính của thành phố Đà Lạt, cũng gần nhiều nhà hàng và quán cà phê, cách hồ Xuân Hương (2 phút lái xe) khoảng 2km. Chúng tôi cung cấp bãi đậu xe miễn phí trước và bãi đậu xe lớn gần đó. Đừng lo lắng về việc chia sẻ bất cứ điều gì với người khác vì khách của chúng tôi sẽ có quyền riêng tư 100%. Chúng tôi cho phép bạn có toà', 'images/dalat_four_one.JPEG', 'images/dalat_four_two.JPEG', 'images/dalat_four_three.JPEG', 'images/dalat_four_four.JPEG', 'images/dalat_four_five.JPEG', 'images/dalat_four_six.JPEG'),
('HST0056', 'Nomad Home & Coffee', '450000', 'LHST003', 'TP003', 'Phòng riêng · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 2 khách)', 'Sơn Trà, Đà Nẵng, Việt Nam', 'Phòng màu hồng siêu cute dành cho 2 người\r\nPhòng có nhà vệ sinh riêng, nước nóng lạnh, có sẵn khăn tắm, dầu gội và sữa tắm\r\nNomad là nơi dành cho các bạn yêu thích sự yên tĩnh, tận hưởng không khí Đà Lạt. Bạn có thể thoải mái nghỉ ngơi ở sân vườn, nghe suối reo, chim hót hoặc thưởng thức tách cà phê nóng thơm lừng mỗi sáng. Nomad không phù hợp với các bạn yêu thích sự ồn ào, náo nhiệt\r\nCó phục vụ ăn sáng', 'Chỉ cách trung tâm thành phố 1km\r\nTừ Nomad đến chợ Đà Lạt chỉ mất 1.7km (tương đương 5 phút đi xe ~ 28k tiền taxi)\r\nNomad ở gần nhà thờ Domaine\r\nGần cái địa điểm ăn uống như lẩu bò Ba Toa, Tiệm bánh Cối Xay Gió, Sữa đậu nành bùng binh Thắng Lợi', 'images/dalat_five_one.JPG', 'images/dalat_five_two.JPG', 'images/dalat_five_three.JPG', 'images/dalat_five_four.JPG', 'images/dalat_five_five.JPG', 'images/dalat_five_six.JPG'),
('HST0057', 'Apt Vinhomes Skylake', '1100000', 'LHST002', 'TP003', 'Nguyên căn · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 3 khách)', 'Sơn Trà, Đà Nẵng, Việt Nam', 'Căn hộ mới và hiện đại vừa được trang bị tiện nghi giúp khách hàng cảm thấy như đang ở nhà. Toàn bộ căn hộ tràn ngập ánh sáng tự nhiên, tạo sự vừa thoáng vừa rộng rãi. Các tòa nhà có đầy đủ tiện nghi bao gồm Phòng tập thể dục, bể bơi 4 mùa, sân vườn đẹp, nhà hàng, khu vui chơi trẻ em, Cửa hàng dược phẩm ...', 'Giao thông rất thuận tiện để đi bất cứ nơi nào trong thành phố cũng như các khu công nghiệp quanh thủ đô Hà Nội. Khách truy cập vào toàn bộ nơi. Tôi sẽ có mặt 24/7. Khu phố rất an toàn và xinh đẹp với công viên, hồ nước và khu giải trí. Cửa hàng tiện lợi, siêu thị và các dịch vụ khác cũng có sẵn trong khoảng cách đi bộ. Rất an toàn để có được xung quanh. Grab hoặc taxi được khuyến nghị nếu bạn muốn đi quanh thành phố.', 'images/dalat_six_one.JPG', 'images/dalat_six_two.JPG', 'images/dalat_six_three.JPG', 'images/dalat_six_four.JPG', 'images/dalat_six_five.JPG', 'images/dalat_six_six.JPG'),
('HST0058', 'Đồi Thông Dinh II', '690000', 'LHST003', 'TP003', 'Phòng riêng · 1 Phòng tắm · 2 giường · 1 phòng ngủ · 2 khách (tối đa 3 khách)', 'Sơn Trà, Đà Nẵng, Việt Nam', 'Vị trí ngay dưới đồi thông Dinh 2, cách Chợ đêm 5 phút đi xe máy\r\nĐường vào hơi dốc (dốc thẳng Hội trường Lê Văn Tám), nhưng bù lại view nhà rất đẹp và riêng tư\r\nĐầy đủ tiện nghi, nội thất gỗ tự nhiên, decor xinh xắn và rất sạch sẽ', 'Phòng ngủ, giường đọc sách (bay window) và ban công nhìn ra đồi thông xanh mướt\r\nVườn quanh nhà trồng hoa, cây trái và rau xanh bốn mùa, khách có thể sử dụng để nấu ăn\r\nGần nhà hàng, quán cà phê, siêu thị Vinmart, Big C, nhà thuốc\r\nQuản gia trực 24/24 trong nhà hỗ trợ khách khi cần thiết', 'images/dalat_seven_one.JPG', 'images/dalat_seven_two.JPG', 'images/dalat_seven_three.JFIF', 'images/dalat_seven_four.JPG', 'images/dalat_seven_five.JFIF', 'images/dalat_seven_six.JFIF'),
('HST0059', '2 BR- Lux Millennium', '1200000', 'LHST002', 'TP003', 'Nguyên căn · 2 Phòng tắm · 2 giường · 2 phòng ngủ · 5 khách (tối đa 6 khách)', 'Sơn Trà, Đà Nẵng, Việt Nam', 'Căn hộ Justay 2 phòng ngủ toạ lạc ở toà nhà cao cấp Millenium trung tâm Đà Lạt.\r\nVị trí:\r\n10 phút đi bộ tới chợ bến thành, Bitexco, phố đi bộ Nguyễn Huệ, phố Tây Bùi Viện\r\nCạnh sông Đà Lạt thơ mộng, đẹp đẽ, náo nhiệt\r\n5\' đi bộ tới khu ẩm thực lớn nhất Đà Lạt', 'Phòng:\r\nCăn hộ cao cấp 2 phòng ngủ view sông và Bitexco\r\n2 toilet\r\nThiết kế với tông xanh lá thiên nhiên\r\nTiện ích cao cấp:\r\nMiễn phí hồ bơi chân mây tầng 7 view thành phố\r\nMiễn phí phòng Gym\r\nKhu BBQ\r\nKhu phòng họp sang trọng\r\nKhu chơi dành cho trẻ em\r\nSân vườn trên cao.\r\nDịch vụ: Justay là Công ty chuyên cung cấp chỗ ở ngắn hạn dài hạn chuyên nghiệp. Chúng tôi hỗ trợ:\r\nCheck in 24/24\r\nKí gửi hành lí trước khi đến\r\nCung cấp các gói tour giá tốt.\r\nCung cấp dịch vụ giặt ủi\r\nHỗ trợ kê thêm đệm cho', 'images/dalat_eight_one.JPG', 'images/dalat_eight_two.JPG', 'images/dalat_eight_three.JPG', 'images/dalat_eight_four.JPG', 'images/dalat_eight_five.JPG', 'images/dalat_eight_six.JPG'),
('HST006', 'Apt Vinhomes Skylake', '1100000', 'LHST002', 'TP001', 'Nguyên căn · 1 Phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 3 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'Căn hộ mới và hiện đại vừa được trang bị tiện nghi giúp khách hàng cảm thấy như đang ở nhà. Toàn bộ căn hộ tràn ngập ánh sáng tự nhiên, tạo sự vừa thoáng vừa rộng rãi. Các tòa nhà có đầy đủ tiện nghi bao gồm Phòng tập thể dục, bể bơi 4 mùa, sân vườn đẹp, nhà hàng, khu vui chơi trẻ em, Cửa hàng dược phẩm ...', 'Giao thông rất thuận tiện để đi bất cứ nơi nào trong thành phố cũng như các khu công nghiệp quanh thủ đô Hà Nội. Khách truy cập vào toàn bộ nơi. Tôi sẽ có mặt 24/7. Khu phố rất an toàn và xinh đẹp với công viên, hồ nước và khu giải trí. Cửa hàng tiện lợi, siêu thị và các dịch vụ khác cũng có sẵn trong khoảng cách đi bộ. Rất an toàn để có được xung quanh. Grab hoặc taxi được khuyến nghị nếu bạn muốn đi quanh thành phố.', 'images/dalat_six_one.JPG', 'images/dalat_six_two.JPG', 'images/dalat_six_three.JPG', 'images/dalat_six_four.JPG', 'images/dalat_six_five.JPG', 'images/dalat_six_six.JPG'),
('HST0060', 'Sunwah Golden House', '2900000', 'LHST001', 'TP003', 'Nguyên căn · 2 Phòng tắm · 3 giường · 3 phòng ngủ · 7 khách (tối đa 7 khách)', 'Sơn Trà, Đà Nẵng, Việt Nam', 'Căn hộ của chúng tôi nằm bên bờ sông Sài Gòn, khu căn hộ nằm cạnh Bitexco Tower & Landmark 81- Tòa nhà cao nhất Việt Nam. Tầm nhìn rộng ra sông Sài Gòn và cầu Sài Gòn, cầu Thủ Thiêm từ tất cả các phòng của căn hộ. Đây là khu đẳng cấp với vị trí trung tâm nổi bật, dịch vụ tiện ích như Gym, hồ bơi; cung cấp đầy đủ các tiện nghi phòng như wifi, tivi màn hình phẳng, điều hoà, khu vực bếp nấu ăn với đầy đủ dụng cụ.', 'Chúng tôi luôn có lễ tân đón tiếp, phục vụ miễn phí trà và cà phê cho khách lưu trú. Ngoài ra chúng tôi còn cung cấp dịch vụ dọn phòng miễn phí mỗi ngày cho khách.\r\n\r\nCác địa điểm nổi tiếng xung quanh gồm có toà Landmark 81 - toà nhà cao nhất Việt Nam, Bến Nhà Rồng, Nhà hát Thành phố, Dinh Thống Nhất và Nhà thờ Đức Bà. Sân bay gần nhất là sân bay quốc tế Tân Sơn Nhất, cách đó chỉ 40 phút lái xe.', 'images/dalat_nine_one.JPG', 'images/dalat_nine_two.JPG', 'images/dalat_nine_three.JPG', 'images/dalat_nine_four.JPG', 'images/dalat_nine_five.JPG', 'images/dalat_nine_six.JPG'),
('HST007', 'Đồi Thông Dinh II', '690000', 'LHST003', 'TP001', 'Phòng riêng · 1 Phòng tắm · 2 giường · 1 phòng ngủ · 2 khách (tối đa 3 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'Vị trí ngay dưới đồi thông Dinh 2, cách Chợ đêm 5 phút đi xe máy\r\nĐường vào hơi dốc (dốc thẳng Hội trường Lê Văn Tám), nhưng bù lại view nhà rất đẹp và riêng tư\r\nĐầy đủ tiện nghi, nội thất gỗ tự nhiên, decor xinh xắn và rất sạch sẽ', 'Phòng ngủ, giường đọc sách (bay window) và ban công nhìn ra đồi thông xanh mướt\r\nVườn quanh nhà trồng hoa, cây trái và rau xanh bốn mùa, khách có thể sử dụng để nấu ăn\r\nGần nhà hàng, quán cà phê, siêu thị Vinmart, Big C, nhà thuốc\r\nQuản gia trực 24/24 trong nhà hỗ trợ khách khi cần thiết', 'images/dalat_seven_one.JPG', 'images/dalat_seven_two.JPG', 'images/dalat_seven_three.JFIF', 'images/dalat_seven_four.JPG', 'images/dalat_seven_five.JFIF', 'images/dalat_seven_six.JFIF'),
('HST008', '2 BR- Lux Millennium', '1200000', 'LHST002', 'TP001', 'Nguyên căn · 2 Phòng tắm · 2 giường · 2 phòng ngủ · 5 khách (tối đa 6 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'Căn hộ Justay 2 phòng ngủ toạ lạc ở toà nhà cao cấp Millenium trung tâm Đà Lạt.\r\nVị trí:\r\n10 phút đi bộ tới chợ bến thành, Bitexco, phố đi bộ Nguyễn Huệ, phố Tây Bùi Viện\r\nCạnh sông Đà Lạt thơ mộng, đẹp đẽ, náo nhiệt\r\n5\' đi bộ tới khu ẩm thực lớn nhất Đà Lạt', 'Phòng:\r\nCăn hộ cao cấp 2 phòng ngủ view sông và Bitexco\r\n2 toilet\r\nThiết kế với tông xanh lá thiên nhiên\r\nTiện ích cao cấp:\r\nMiễn phí hồ bơi chân mây tầng 7 view thành phố\r\nMiễn phí phòng Gym\r\nKhu BBQ\r\nKhu phòng họp sang trọng\r\nKhu chơi dành cho trẻ em\r\nSân vườn trên cao.\r\nDịch vụ: Justay là Công ty chuyên cung cấp chỗ ở ngắn hạn dài hạn chuyên nghiệp. Chúng tôi hỗ trợ:\r\nCheck in 24/24\r\nKí gửi hành lí trước khi đến\r\nCung cấp các gói tour giá tốt.\r\nCung cấp dịch vụ giặt ủi\r\nHỗ trợ kê thêm đệm cho', 'images/dalat_eight_one.JPG', 'images/dalat_eight_two.JPG', 'images/dalat_eight_three.JPG', 'images/dalat_eight_four.JPG', 'images/dalat_eight_five.JPG', 'images/dalat_eight_six.JPG'),
('HST009', 'Sunwah Golden House', '2900000', 'LHST001', 'TP001', 'Nguyên căn · 2 Phòng tắm · 3 giường · 3 phòng ngủ · 7 khách (tối đa 7 khách)', 'Đà Lạt, Lâm Đồng, Việt Nam', 'Căn hộ của chúng tôi nằm bên bờ sông Sài Gòn, khu căn hộ nằm cạnh Bitexco Tower & Landmark 81- Tòa nhà cao nhất Việt Nam. Tầm nhìn rộng ra sông Sài Gòn và cầu Sài Gòn, cầu Thủ Thiêm từ tất cả các phòng của căn hộ. Đây là khu đẳng cấp với vị trí trung tâm nổi bật, dịch vụ tiện ích như Gym, hồ bơi; cung cấp đầy đủ các tiện nghi phòng như wifi, tivi màn hình phẳng, điều hoà, khu vực bếp nấu ăn với đầy đủ dụng cụ.', 'Chúng tôi luôn có lễ tân đón tiếp, phục vụ miễn phí trà và cà phê cho khách lưu trú. Ngoài ra chúng tôi còn cung cấp dịch vụ dọn phòng miễn phí mỗi ngày cho khách.\r\n\r\nCác địa điểm nổi tiếng xung quanh gồm có toà Landmark 81 - toà nhà cao nhất Việt Nam, Bến Nhà Rồng, Nhà hát Thành phố, Dinh Thống Nhất và Nhà thờ Đức Bà. Sân bay gần nhất là sân bay quốc tế Tân Sơn Nhất, cách đó chỉ 40 phút lái xe.', 'images/dalat_nine_one.JPG', 'images/dalat_nine_two.JPG', 'images/dalat_nine_three.JPG', 'images/dalat_nine_four.JPG', 'images/dalat_nine_five.JPG', 'images/dalat_nine_six.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `loai_home_stay`
--

CREATE TABLE `loai_home_stay` (
  `maLoaiHST` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenLoaiHST` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loai_home_stay`
--

INSERT INTO `loai_home_stay` (`maLoaiHST`, `tenLoaiHST`) VALUES
('LHST001', 'Biệt Thự'),
('LHST002', 'Nhà Riêng'),
('LHST003', 'Căn Hộ');

-- --------------------------------------------------------

--
-- Table structure for table `phan_quyen`
--

CREATE TABLE `phan_quyen` (
  `maQuyen` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenQuyen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phan_quyen`
--

INSERT INTO `phan_quyen` (`maQuyen`, `tenQuyen`) VALUES
('admin', 'Quản trị viên'),
('user', 'Người dùng');

-- --------------------------------------------------------

--
-- Table structure for table `thanh_pho`
--

CREATE TABLE `thanh_pho` (
  `maTP` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenTP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anhTP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thanh_pho`
--

INSERT INTO `thanh_pho` (`maTP`, `tenTP`, `hinh_anhTP`) VALUES
('TP001', 'Đà Lạt', 'images/dalat.png'),
('TP0010', 'Hạ Long', 'images/halong.PNG'),
('TP002', 'Hà Nội', 'images/hanoi.PNG'),
('TP003', 'Đà Nẵng', 'images/danang.PNG'),
('TP004', 'Hồ Chí Minh', 'images/hochiminh.PNG'),
('TP005', 'Nha Trang', 'images/nhatrang.PNG'),
('TP006', 'Phú Yên', 'images/phuyen.PNG'),
('TP007', 'Vũng Tàu', 'images/vungtau.PNG'),
('TP008', 'Phan Thiết', 'images/phanthiet.PNG'),
('TP009', 'Quãng Ninh', 'images/quangninh.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maQuyen` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `email`, `password`, `maQuyen`) VALUES
('ID001', 'Lâm Trường', 'truong.ll.60cntt@ntu.edu.vn', '123', 'admin'),
('ID002', 'Lê Lâm Trường', 'truongle.281000@gmail.com', '12345', 'user'),
('ID004', 'Naruto', 'naruto@gmail.com', '12345', 'user'),
('ID7376', 'doreamon', 'doreamon@gmail.com', '12345', 'user'),
('ID859', 'sasuke', 'sasuke@gmail.com', '12345', 'user'),
('ID8722', 'Obito', 'obito@gmail.com', '12345', 'user'),
('ID9855', 'nobita', 'nobita@gmail.com', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ct_gio_hang`
--
ALTER TABLE `ct_gio_hang`
  ADD KEY `fk_giohang` (`maGH`),
  ADD KEY `fk_homestay` (`maHST`);

--
-- Indexes for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`maGH`),
  ADD KEY `fk_user` (`maUser`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`maHD`);

--
-- Indexes for table `home_stay`
--
ALTER TABLE `home_stay`
  ADD PRIMARY KEY (`maHStay`),
  ADD KEY `maTP` (`maTP`),
  ADD KEY `maLoaiHStay` (`maLoaiHStay`);

--
-- Indexes for table `loai_home_stay`
--
ALTER TABLE `loai_home_stay`
  ADD PRIMARY KEY (`maLoaiHST`);

--
-- Indexes for table `phan_quyen`
--
ALTER TABLE `phan_quyen`
  ADD PRIMARY KEY (`maQuyen`);

--
-- Indexes for table `thanh_pho`
--
ALTER TABLE `thanh_pho`
  ADD PRIMARY KEY (`maTP`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `maQuyen` (`maQuyen`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ct_gio_hang`
--
ALTER TABLE `ct_gio_hang`
  ADD CONSTRAINT `fk_giohang` FOREIGN KEY (`maGH`) REFERENCES `gio_hang` (`maGH`),
  ADD CONSTRAINT `fk_homestay` FOREIGN KEY (`maHST`) REFERENCES `home_stay` (`maHStay`);

--
-- Constraints for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`maUser`) REFERENCES `user` (`ID`);

--
-- Constraints for table `home_stay`
--
ALTER TABLE `home_stay`
  ADD CONSTRAINT `home_stay_ibfk_2` FOREIGN KEY (`maTP`) REFERENCES `thanh_pho` (`maTP`),
  ADD CONSTRAINT `home_stay_ibfk_3` FOREIGN KEY (`maLoaiHStay`) REFERENCES `loai_home_stay` (`maLoaiHST`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`maQuyen`) REFERENCES `phan_quyen` (`maQuyen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
