-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 09, 2020 lúc 04:01 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mvc_tintuc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `picture`, `status`, `meta_title`, `meta_description`, `meta_keywords`, `slug`, `created_at`, `updated_at`) VALUES
(45, 'Bóng đá Italy', 'Bóng đá Italy mo ta', '1595593195.png', 'active', '', '', '', 'bong-da-italy', 1595593195, 1597063155),
(46, 'Bóng đá Việt', 'Bóng đá Việt mô tả', '1595593210.png', 'active', 'Title category', 'Title category des', 'Title category key', 'bong-da-viet', 1595593210, 1597063136),
(47, 'Bóng đá Đức', 'Bóng đá Đức mô tả', '1597063181.png', 'active', '', '', '', 'bong-da-duc', 1597063181, 1597063181);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `name`, `description`, `content`, `category_id`, `picture`, `status`, `meta_title`, `meta_description`, `meta_keywords`, `slug`, `created_at`, `updated_at`) VALUES
(5, 'Cúp C1 và C2 thời đại dịch Covid-19: 26 trận trong 2,5 tuần ', 'Premier League, La Liga và Serie A đã kết thúc, Premiership ở Scotland 2020-21 thì mới khởi tranh', '<p><em>Lịch thi đấu lượt về v&ograve;ng 1/8 Champions League:</em></p>\r\n\r\n<p><strong>* 02h00 ng&agrave;y 8/8: &nbsp;Juventus vs Lyon (K+PC)</strong></p>\r\n\r\n<p><strong><a href=\"https://fptplay.vn/xem-truyen-hinh/kpc\" target=\"_blank\">https://fptplay.vn/xem-truyen-hinh/kpc</a></strong></p>\r\n\r\n<p><strong>* 02h00 ng&agrave;y 8/8: &nbsp;Man City vs Real Madrid (K+PM)</strong></p>\r\n\r\n<p><a href=\"https://fptplay.vn/xem-truyen-hinh/kpm\" target=\"_blank\"><strong>https://fptplay.vn/xem-truyen-hinh/kpm</strong></a></p>\r\n\r\n<p><strong>* 02h00 ng&agrave;y 9/8: Bayern Munich vs Chelsea (3-0)</strong></p>\r\n\r\n<p><strong><a href=\"https://fptplay.vn/xem-truyen-hinh/kpc\" target=\"_blank\">https://fptplay.vn/xem-truyen-hinh/kpc</a></strong></p>\r\n\r\n<p><strong>* 02h00 ng&agrave;y 9/8: Barcelona vs Napoli (1-1)</strong></p>\r\n\r\n<p><a href=\"https://fptplay.vn/xem-truyen-hinh/kpm\" target=\"_blank\"><strong>https://fptplay.vn/xem-truyen-hinh/kpm</strong></a></p>\r\n\r\n<p><strong>C&aacute;c đội đ&atilde; v&agrave;o v&ograve;ng tứ kết:</strong></p>\r\n\r\n<p><strong>PSG</strong>&nbsp;3-2 (tổng tỷ số) Borussia Dortmund</p>\r\n\r\n<p><strong>Leipzig</strong>&nbsp;4-0 Tottenham</p>\r\n\r\n<p>Valencia 4-8&nbsp;<strong>Atalanta</strong></p>\r\n\r\n<p>Liverpool 2-4&nbsp;<strong>Atletico Madrid</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ch&iacute;nh x&aacute;c th&igrave; sau một thời gian UEFA quyết định ho&atilde;n c&aacute;c trận đấu ở Champions League v&agrave; Europa League v&igrave; đại dịch Covid-19 th&igrave; nay, họ chấp nhận ho&agrave;n tất v&ograve;ng 1/8 v&agrave; m&ugrave;a giải 2019-20 trong những s&acirc;n vận động đ&oacute;ng k&iacute;n cửa.</p>\r\n\r\n<p><strong>26 trận đấu trong 2,5 tuần</strong></p>\r\n\r\n<p>Th&uacute; vị l&agrave; tuần đấu n&agrave;y cũng đ&aacute;nh dấu mở m&agrave;n của v&ograve;ng loại Champions League m&ugrave;a giải 2020-21. Nghĩa l&agrave; trong ng&agrave;y thứ Bảy, khi Chelsea gặp Bayern Munich v&agrave; Barcelona tiếp Napoli trong trận lượt về v&ograve;ng 1/8, v&ograve;ng sơ loại của m&ugrave;a giải 2020-21 sẽ bắt đầu.</p>\r\n\r\n<p>Như đ&atilde; biết, lễ bốc thăm cho v&ograve;ng loại thứ nhất v&agrave; v&ograve;ng loại thứ hai Champions League 2020-21 sẽ diễn ra ng&agrave;y 9 v&agrave; 10/8 tới đ&acirc;y. Tương tự như vậy l&agrave; lễ bốc thăm cho v&ograve;ng loại thứ nhất v&agrave; v&ograve;ng loại thứ hai Europa League trong hai ng&agrave;y n&agrave;y.</p>\r\n\r\n<p>Một vấn đề đ&aacute;ng n&oacute;i nữa xung quanh c&aacute;c C&uacute;p ch&acirc;u &Acirc;u ở m&ugrave;a giải năm nay l&agrave; những thay đổi lớn trong giai đoạn cuối tại Champions League v&agrave; Europa League so với c&aacute;c m&ugrave;a giải trước đ&oacute;. Theo đấy th&igrave; từ v&ograve;ng tứ kết, tất cả c&aacute;c trận đấu của Champions League sẽ chỉ diễn ra một lượt v&agrave; thi đấu tại hai địa điểm ở Lisbon (Bồ Đ&agrave;o Nha) từ ng&agrave;y 12 đến 23/8. Cụ thể th&igrave; s&acirc;n da Luz của Benfica v&agrave; Jose Alvalade của Sporting Lisbon sẽ tổ chức c&aacute;c trận đấu tứ kết v&agrave;o ng&agrave;y 12 v&agrave; 15/8, rồi mỗi s&acirc;n một trận b&aacute;n kết v&agrave;o ng&agrave;y 18 v&agrave; 19/8.</p>\r\n\r\n<p>Giống như Champions League, c&aacute;c trận đấu ở Europa League từ v&ograve;ng tứ kết cũng sẽ chỉ c&oacute; một lượt. Kh&aacute;c biệt l&agrave; giai đoạn kết th&uacute;c giải diễn ra ở nhiều địa điểm tr&ecirc;n khắp nước Đức, trong đ&oacute; c&oacute; Dusseldorf, Gelsenkirchen, Duisburg v&agrave; Cologne.</p>\r\n\r\n<p>Sau v&ograve;ng tứ kết v&agrave;o ng&agrave;y 10 v&agrave; 11/8, v&ograve;ng b&aacute;n kết sẽ diễn ra v&agrave;o ng&agrave;y 16 v&agrave; 17/8, trận chung kết được tổ chức sau đấy 4 ng&agrave;y.</p>\r\n\r\n<p>N&oacute;i ngắn gọn, với 26 trận đấu g&oacute;i gọn trong hai tuần rưỡi, giai đoạn n&agrave;y v&agrave; tới đ&acirc;y đ&uacute;ng l&agrave; ng&agrave;y hội thực sự của b&oacute;ng đ&aacute; ch&acirc;u &Acirc;u, trước khi m&ugrave;a giải hạ m&agrave;n ở Lisbon v&agrave;o ng&agrave;y 23/8 với trận chung kết Champions League, chỉ 2 ng&agrave;y sau thời điểm chung kết Europa League diễn ra tại Cologne.</p>\r\n\r\n<p><img alt=\"Chú thích ảnh\" src=\"https://bongda.mobi/public/template/admin/ver1/js/kcfinder/upload/images/baothethao/Bong_da_chau_Au_trong_dai_dich_Covid-19.jpg\" /></p>\r\n\r\n<p><em>Sẽ c&oacute; 26 trận đấu C&uacute;p ch&acirc;u &Acirc;u trong 2,5 tuần</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Chống dịch nghi&ecirc;m ngặt</strong></p>\r\n\r\n<p>Hiển nhi&ecirc;n th&igrave; UEFA c&oacute; l&iacute; do để cảnh b&aacute;o rằng, việc tổ chức c&aacute;c trận đấu quốc tế sẽ gặp rủi ro nếu c&aacute;c quy định về ph&ograve;ng chống virus corona tại Champions League v&agrave; Europa League kh&ocirc;ng được tu&acirc;n thủ.</p>\r\n\r\n<p>Như đ&atilde; n&oacute;i ở tr&ecirc;n, hai giải đấu n&agrave;y đ&atilde; v&agrave; đang tiếp tục trong tuần n&agrave;y sau khi bị tr&igrave; ho&atilde;n tới 5 th&aacute;ng v&igrave; đại dịch Covid-19. Cũng v&igrave; thế m&agrave; c&aacute;c quy định đ&atilde; được gửi đến cho tất cả 28 đội ở hai giải trước giờ b&oacute;ng lăn v&agrave; trước khi v&ograve;ng tứ kết diễn ra sau c&aacute;nh cửa đ&oacute;ng k&iacute;n ở Bồ Đ&agrave;o Nha v&agrave; Đức.</p>\r\n\r\n<p>&quot;UEFA hi vọng tất cả c&aacute;c b&ecirc;n tu&acirc;n thủ những thực h&agrave;nh tốt nhất về vệ sinh cả trong m&ocirc;i trường trận đấu được kiểm so&aacute;t, cũng như trong cuộc sống hằng ng&agrave;y của họ&quot;, quy định n&ecirc;u r&otilde;. &quot;Điều bắt buộc l&agrave; tất cả c&aacute;c biện ph&aacute;p ph&ograve;ng ngừa được n&ecirc;u trong t&agrave;i liệu n&agrave;y, cũng như c&aacute;c thực h&agrave;nh tốt nhất về vệ sinh ti&ecirc;u chuẩn, sẽ được tu&acirc;n thủ nghi&ecirc;m ngặt bởi tất cả c&aacute;c th&agrave;nh vi&ecirc;n. Việc kh&ocirc;ng t&ocirc;n trọng c&aacute;c chuẩn mực x&atilde; hội như vậy c&oacute; thể g&acirc;y ra hậu quả nghi&ecirc;m trọng cho việc tổ chức c&aacute;c trận đấu quốc tế&quot;.</p>\r\n\r\n<p>Sự thận trọng của UEFA kh&ocirc;ng phải l&agrave; thừa bởi sau Champions League v&agrave; Europa League, c&aacute;c trận đấu tại v&ograve;ng loại Nations League sẽ mở m&agrave;n v&agrave;o đầu th&aacute;ng 9 tới. Ngo&agrave;i ra, m&ugrave;a giải cấp CLB ở ch&acirc;u &Acirc;u 2020-21 cũng bắt đầu v&agrave;o ng&agrave;y 8/8, nghĩa l&agrave; ngay cuối tuần n&agrave;y.</p>\r\n\r\n<p>Được biết, c&aacute;c quy định chống dịch Covid-19 đ&atilde; được soạn thảo dưới sự hướng dẫn của chủ tịch ủy ban y tế UEFA l&agrave; Tim Meyer, người cũng chịu tr&aacute;ch nhiệm về c&aacute;c quy định tương tự tại Bundesliga của Đức.</p>\r\n\r\n<p>Theo đ&oacute;, c&aacute;c cầu thủ v&agrave; nh&acirc;n vi&ecirc;n CLB đ&atilde; được th&ocirc;ng b&aacute;o rằng, họ sẽ được kiểm tra hai hoặc ba ng&agrave;y trước khi rời đất nước của m&igrave;nh để tham dự v&ograve;ng tứ kết v&agrave; một lần nữa l&agrave; một ng&agrave;y trước mỗi trận đấu.</p>\r\n\r\n<p>UEFA cho biết, kết quả x&eacute;t nghiệm sẽ được c&ocirc;ng bố &quot;tối thiểu 6 giờ&quot; trước khi b&oacute;ng lăn.</p>\r\n\r\n<p>Về ph&iacute;a c&aacute;c đội b&oacute;ng, họ cũng được th&ocirc;ng b&aacute;o cho cầu thủ của m&igrave;nh phải đeo khẩu trang ở những địa điểm c&ocirc;ng cộng khi di chuyển v&agrave; việc sử dụng c&aacute;c chuyến bay ri&ecirc;ng được khuyến kh&iacute;ch mạnh mẽ.</p>\r\n\r\n<p>Ngo&agrave;i ra, cầu thủ cũng được nhắc nhở l&agrave; kh&ocirc;ng được ph&eacute;p đổi &aacute;o sau trận đấu.</p>\r\n\r\n<p>Được biết, UEFA đ&atilde; từ chối y&ecirc;u cầu từ một số đội b&oacute;ng - trong đ&oacute; c&oacute; MU, Wolves v&agrave; Inter Milan - được ph&eacute;p bay v&agrave;o v&agrave; ra khỏi Đức nhằm bảo đảm nghi&ecirc;m c&aacute;c quy định kiểm so&aacute;t xung quanh c&aacute;c kh&aacute;ch sạn m&agrave; họ đ&oacute;ng qu&acirc;n.</p>\r\n', 46, '1596802937.jpg', 'active', '', '', '', 'cup-c1-va-c2-thoi-dai-dich-covid-19-26-tran-trong-25-tuan', 1595597029, 1597063219),
(6, 'Man City vs Real Madrid: Pep Guardiola sẽ biến Zidane thành lịch sử ', 'Zinedine Zidane là vua ở đấu trường Champions League, là tượng đài vĩ đại ở giải đấu này nhưng tất cả có lẽ', '<p><em>Lịch thi đấu lượt về v&ograve;ng 1/8 Champions League:</em></p>\r\n\r\n<p><strong>* 02h00 ng&agrave;y 8/8: &nbsp;Juventus vs Lyon (K+PC)</strong></p>\r\n\r\n<p><strong><a href=\"https://fptplay.vn/xem-truyen-hinh/kpc\" target=\"_blank\">https://fptplay.vn/xem-truyen-hinh/kpc</a></strong></p>\r\n\r\n<p><strong>* 02h00 ng&agrave;y 8/8: &nbsp;Man City vs Real Madrid (K+PM)</strong></p>\r\n\r\n<p><a href=\"https://fptplay.vn/xem-truyen-hinh/kpm\" target=\"_blank\"><strong>https://fptplay.vn/xem-truyen-hinh/kpm</strong></a></p>\r\n\r\n<p><img alt=\"Lich thi dau bong da hom nay, Juventus vs Lyon, Man City vs Real Madrid, Cúp C1, K+PM, K+PC, Lịch thi đấu bóng đá, Lịch thi đấu Cúp C1, Truc tiep bong da, Juve vs Lyon\" src=\"https://bongda.mobi/public/template/admin/ver1/js/kcfinder/upload/images/baothethao/Juve_vs_Lyon.jpg\" /></p>\r\n\r\n<p><em>Juventus vs Lyon</em></p>\r\n\r\n<p>02h00 ng&agrave;y 9/8/2020 Bayern Munich vs Chelsea (3-0)</p>\r\n\r\n<p>02h00 ng&agrave;y 9/8/2020 Barcelona vs Napoli (1-1)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cần một ph&eacute;p m&agrave;u để Real Madrid c&oacute; thể vượt qua được Manchester City sau khi đ&atilde; để thua đối thủ ở lượt đi v&agrave; ở trận lượt về họ kh&ocirc;ng c&oacute; đội trưởng Ramos v&igrave; &aacute;n treo gi&ograve;, người lu&ocirc;n đ&oacute;ng vai tr&ograve; quyết định ở c&aacute;c trận đấu quan trọng như vậy, trong khi sự thay thế Militao thiếu kinh nghiệm v&agrave; thiếu sự ăn &yacute; với c&aacute;c đồng đội. H&agrave;ng tiền vệ với những ng&ocirc;i sao như Modric, Toni Kroos hay Casemiro vẫn sẽ mang tới niềm hi vọng cho một cuộc lật đổ ngay tại xứ sở sương m&ugrave;.&nbsp;</p>\r\n\r\n<p>Nhưng nhiệm vụ c&ograve;n kh&oacute; khăn hơn đ&oacute; l&agrave; phải ghi nhiều hơn hai b&agrave;n thắng v&agrave;o lưới đối thủ trong khi h&agrave;ng c&ocirc;ng hoạt động kh&ocirc;ng thật sự hiệu quả, d&ugrave; đội b&oacute;ng Ho&agrave;ng gia c&oacute; nhiều ng&ocirc;i sao tr&ecirc;n h&agrave;ng c&ocirc;ng như Benzema, Hazard hay Asensio, m&agrave; những chiến thắng tối thiểu ở La Liga vừa qua đ&atilde; cho thấy điều đ&oacute;, họ chỉ đ&aacute;nh bại đối thủ nhờ những quả phạt đền d&ugrave; tất cả những ng&ocirc;i sao n&oacute;i tr&ecirc;n đều ra s&acirc;n. V&agrave; đ&oacute; chưa phải l&agrave; rắc rối cuối c&ugrave;ng khi HLV Zidane c&ograve;n kh&ocirc;ng c&oacute; được sự phục vụ của Gareth Bale, người từ chối ra s&acirc;n thi đấu m&agrave; kh&ocirc;ng c&oacute; bất cứ l&yacute; do n&agrave;o li&ecirc;n quan đến thể thao.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Gareth Bale l&agrave; cầu thủ của Real Madrid v&agrave; quyết định kh&ocirc;ng thi đấu của cậu ấy kh&ocirc;ng thay đổi điều g&igrave; cả, t&ocirc;i t&ocirc;n trọng điều đ&oacute;, cậu ấy như tất cả những người kh&aacute;c. Cậu ấy kh&ocirc;ng muốn ra s&acirc;n, v&agrave; đ&oacute; l&agrave; điều duy nhất t&ocirc;i c&oacute; thể n&oacute;i với mọi người. Phần c&ograve;n lại đều đ&atilde; ở đ&acirc;y, tất cả những cầu thủ tốt nhất của t&ocirc;i v&agrave; ch&uacute;ng t&ocirc;i sẽ tập trung v&agrave;o phần việc của m&igrave;nh&quot;, Zidane n&oacute;i trong sự lạnh nhạt về trường hợp của tiền đạo người xứ Wales.</p>\r\n\r\n<p>VIDEO: Man City vs Real Madrid: Pep Guardiola sẽ biến Zidane th&agrave;nh lịch sử</p>\r\n\r\n<p>Real Madrid đ&atilde; gi&agrave;nh La Liga với phong độ cao v&agrave; sự chắc chắn của h&agrave;ng ph&ograve;ng ngự v&agrave; họ c&ograve;n l&agrave; chuy&ecirc;n gia ở Champions League nhưng Manchester City cũng đang c&oacute; được sự chuẩn bị tốt nhất ở thời điểm n&agrave;y. C&aacute;c ng&ocirc;i sao của họ đang cho thấy kh&aacute;t khao lớn để gi&agrave;nh Champions League, họ được tổ chức tốt v&agrave; chiến thắng ở lượt đi l&agrave; điểm tựa lớn để đội b&oacute;ng nước Anh c&oacute; niềm tin bảo vệ được th&agrave;nh quả của m&igrave;nh. Pep Guardiola hiểu Real Madrid nguy hiểm như thế n&agrave;o với lối chơi ph&ograve;ng ngự phản c&ocirc;ng v&agrave; Zidane lu&ocirc;n mang tới sự bất ngờ nhưng đội chủ nh&agrave; cũng c&oacute; nhiều bất ngờ để d&agrave;nh cho đối thủ của m&igrave;nh, d&ugrave; Pep Guardiola lu&ocirc;n đ&aacute;nh gi&aacute; cao t&agrave;i năng của huyền thoại người Ph&aacute;p.</p>\r\n\r\n<p>&quot;V&acirc;ng, thật kh&oacute; để biết Zidane sẽ d&ugrave;ng chiến thuật n&agrave;o, khi bạn nghĩ l&agrave; anh ấy sẽ sử dụng c&aacute;ch n&agrave;y th&igrave; anh ấy sẽ khiến bạn bất ngờ với một chiến thuật kh&aacute;c hoặc trở lại với trạng th&aacute;i cơ bản m&agrave; ai cũng từng biết. V&igrave; vậy, thật kh&oacute; để đ&aacute;nh gi&aacute; được Real qua chiến thuật của Zidane. R&otilde; r&agrave;ng l&agrave; ch&uacute;ng t&ocirc;i vẫn phải chơi theo c&aacute;ch của m&igrave;nh như ở trận lượt đi, ch&uacute;ng t&ocirc;i đ&atilde; chơi tốt theo chiến thuật đ&oacute; v&agrave; c&oacute; chiến thắng. T&ocirc;i đ&atilde; xem lại to&agrave;n bộ c&aacute;c trận đấu của Real ở La Liga v&agrave; t&ocirc;i biết c&aacute;ch m&agrave; họ chơi như thế n&agrave;o nhưng ch&uacute;ng t&ocirc;i cũng c&oacute; khả năng khiến họ gặp nguy hiểm v&agrave; g&acirc;y kh&oacute; khăn cho họ v&agrave; đ&oacute; l&agrave; c&aacute;ch m&agrave; ch&uacute;ng t&ocirc;i chuẩn bị cho trận đấu n&agrave;y&quot;, Pep Guardiola tỏ ra tự tin v&agrave;o khả năng của Manchester City.</p>\r\n\r\n<p>Nếu Manchester City bảo vệ được lợi thế của m&igrave;nh họ sẽ c&oacute; nhiều cơ hội đi xa ở Champions League v&agrave; thực tế đ&acirc;y cũng l&agrave; mục ti&ecirc;u cuối c&ugrave;ng của đội b&oacute;ng &aacute;o xanh ở m&ugrave;a giải n&agrave;y, cũng như suốt qu&atilde;ng thời gian trước đ&oacute;.</p>\r\n', 46, '1596802873.jpg', 'active', 'title test', 'title test des', 'title test key', 'man-city-vs-real-madrid-pep-guardiola-se-bien-zidane-thanh-lich-su', 1596029989, 1597063213);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `picture`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Vi Thanh Son', 'thanhsonnew', 'doraemon1999kt@gmail.com', '01951edade636dd822c08d3366860219', '1595855555.png', 'active', 1595855555, 1595855598),
(4, 'Thanh Son', 'thanhsonnew', 'sonvi10101999@gmail.com', '01951edade636dd822c08d3366860219', '1596025414.png', 'active', 1596025414, 1596025414);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
