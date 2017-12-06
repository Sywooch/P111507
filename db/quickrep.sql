-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 06, 2017 lúc 04:00 PM
-- Phiên bản máy phục vụ: 5.5.55
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quickrep`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `answers_text` text COLLATE utf8_unicode_ci NOT NULL,
  `is_anonymous` varchar(45) COLLATE utf8_unicode_ci DEFAULT '0',
  `create_time` int(11) NOT NULL,
  `update_time` int(11) DEFAULT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `censor_flag` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `answers`
--

INSERT INTO `answers` (`id`, `user_id`, `question_id`, `status`, `answers_text`, `is_anonymous`, `create_time`, `update_time`, `images`, `censor_flag`) VALUES
(58, 10, 186, 1, '<p>Đoạn n&agrave;y tr&iacute;ch từ cuốn s&aacute;ch ưu th&iacute;ch nhất của t&ocirc;i: Nh&agrave; Giả Kim, của Paulo Coelho.</p>\r\n\r\n<p>&quot;Lời n&oacute;i dối lớn nhất tr&ecirc;n thế giới n&agrave;y l&agrave; g&igrave;?&quot;</p>\r\n\r\n<p>_ cậu b&eacute; hỏi &Ocirc;ng l&atilde;o trả lời, &quot; L&agrave; điều n&agrave;y: rằng ở một thời điểm n&agrave;o đ&oacute; trong cuộc đời, ta mất đi sự kiểm so&aacute;t với những g&igrave; xảy ra với ch&uacute;ng ta, v&agrave; cuộc sống ch&uacute;ng ta bị điều khiển bởi vận mệnh. Đ&oacute; l&agrave; lời n&oacute;i dối lớn nhất&quot;. Sức mạnh của suy nghĩ con người thực sự bị đ&aacute;nh gi&aacute; thấp</p>\r\n', '0', 1494999828, 1495005962, NULL, 1),
(59, 10, 188, 1, '<p>1.C&acirc;u trả lời bởi Tim Morgan</p>\r\n\r\n<p>Oh, c&acirc;u n&agrave;y dễ. Năm 1982, chuyến bay của h&atilde;ng h&agrave;ng kh&ocirc;ng British Airways 9 từ Singapore đến Australia đ&atilde; bay qua một ngọn n&uacute;i lửa phun tr&agrave;o gần Indonesia, v&agrave; tro l&agrave;m tất cả bốn động cơ 747 ngưng hoạt động. Phi c&ocirc;ng trưởng, b&igrave;nh tĩnh một c&aacute;ch ho&agrave;n hảo, đ&atilde; n&oacute;i qua loa: &quot;Thưa qu&yacute; vị, đ&acirc;y l&agrave; phi c&ocirc;ng trưởng của c&aacute;c bạn đang n&oacute;i. Ch&uacute;ng t&ocirc;i c&oacute; một vấn đề nhỏ. Tất cả bốn động cơ đ&atilde; ngừng hoạt động. Ch&uacute;ng t&ocirc;i đang l&agrave;m cật lực để c&oacute; được ch&uacute;ng chạy lại. T&ocirc;i tin rằng c&aacute;c bạn kh&ocirc;ng phải stress qu&aacute; nhiều.&quot;</p>\r\n\r\n<p>&nbsp;2. C&acirc;u trả lời của Doug Massey</p>\r\n\r\n<p>C&acirc;u y&ecirc;u th&iacute;ch của t&ocirc;i l&agrave; những g&igrave; c&aacute;c phi c&ocirc;ng n&oacute;i với t&ocirc;i khi t&ocirc;i l&agrave; h&agrave;nh kh&aacute;ch duy nhất tr&ecirc;n m&aacute;y bay đ&aacute;ng ra cho 100 người, tr&ecirc;n một chuyến bay từ Philadelphia đến Burlington, VT: &quot;Ch&agrave;o mừng bạn đến với h&atilde;ng h&agrave;ng kh&ocirc;ng tư nh&acirc;n Doug Massey. Ch&uacute;ng t&ocirc;i hy vọng bạn th&iacute;ch chuyến bay của bạn tới Burlington - sau khi ch&uacute;ng t&ocirc;i đạt đến độ cao bay cần thiết, t&ocirc;i sẽ tắt biển b&aacute;o hiệu c&agrave;i d&acirc;y an to&agrave;n v&agrave; khuyến kh&iacute;ch bạn thử tất cả c&aacute;c chỗ ngồi kh&aacute;c trong cabin v&agrave; cho ch&uacute;ng t&ocirc;i biết bạn th&iacute;ch c&aacute;i n&agrave;o nhất. &quot;</p>\r\n\r\n<p>&nbsp;3. C&acirc;u trả lời của Akshat Dalmia</p>\r\n\r\n<p>Tr&ecirc;n đường bay đến Paris tr&ecirc;n một chuyến bay sớm, phi c&ocirc;ng của British Airways th&ocirc;ng b&aacute;o: &#39;Ch&agrave;o c&aacute;c bạn v&agrave; c&aacute;c bạn, t&ocirc;i muốn th&ocirc;ng b&aacute;o với bạn rằng đ&acirc;y l&agrave; chuyến bay đầu ti&ecirc;n của t&ocirc;i ... [dừng lại một l&uacute;c trong khi h&agrave;nh kh&aacute;ch nh&igrave;n nhau] ... trong ng&agrave;y&#39; Thở ph&agrave;o nhẹ nh&otilde;m..</p>\r\n', '0', 1495024280, 1495024323, NULL, 1),
(60, 22, 189, 1, '<p>C&acirc;u trả lời của Sammy</p>\r\n\r\n<p>Joe Jack Ma, nh&agrave; sang lập Alibaba Group, một trong những người gi&agrave; nhất ở Trung Quốc, ch&acirc;u &Aacute; v&agrave; to&agrave;n thế giới. &Ocirc;ng từng n&oacute;i rằng một trong những điềi &ocirc;ng hối hận nhất l&agrave; sang lập ra Alibaba, c&ocirc;ng ty m&agrave; &ocirc;ng ban đầu dự định th&igrave; chỉ l&agrave; một c&ocirc;ng ty nhỏ. &Ocirc;ng chưa bao giờ nghĩ Alibaba sẽ lớn mạnh như h&ocirc;m nay. Giờ &ocirc;ng mang tr&ecirc;n m&igrave;nh tr&aacute;ch nhiệm khổng lồ bởi sự nghiệp v&agrave; cuộc sống của hang triệu người phụ thuộc v&agrave;o &ocirc;ng, &ocirc;ng kh&ocirc;ng c&ograve;n nhiều thời gian cho bản th&acirc;n m&igrave;nh. &Ocirc;ng c&oacute; đủ tiền để mua tất cả những thứ m&igrave;nh muốn, nhưng &ocirc;ng phải giấu gia đ&igrave;nh khỏi c&ocirc;ng ch&uacute;ng, &ocirc;ng phải l&agrave;m việc 24/7 v&agrave; &ocirc;ng kh&ocirc;ng c&oacute; thời gian để tận hưởng những thứ đơn giản kh&aacute;c trong cuộc sống.</p>\r\n', '0', 1495215131, 1495215175, NULL, 1),
(61, 23, 190, 1, '<p>C&acirc;u trả lời của Faisal Khan<br />\r\nHai b&iacute; quyết. Cả hai đều cực k&igrave; đơn giản v&agrave; dễ hiểu.<br />\r\n<strong>Một...</strong><br />\r\nĐa phần mọi người đều c&oacute; thu nhập h&agrave;ng th&aacute;ng. Họ trả hết c&aacute;c khoản chi ti&ecirc;u, phần c&ograve;n lại họ tr&iacute;ch ra một khoản nhỏ để đem đi tiết kiệm. Sai !<br />\r\nC&aacute;ch đ&uacute;ng phải l&agrave;: Với thu nhập hằng th&aacute;ng, tr&iacute;ch ra một khoản bạn muốn tiết kiệm trước, rồi d&ugrave;ng phần c&ograve;n lại để chi ti&ecirc;u. Tiền tiết kiệm phải được ưu ti&ecirc;n trước.<br />\r\n<strong>Hai...</strong><br />\r\n&quot;If something cost $1,000, and it is on sale for $750, and then you decide to buy it, you did not save $250. You spent $750.&quot;</p>\r\n\r\n<p>Nếu một m&oacute;n đồ trị gi&aacute; $1000, v&agrave; đang giảm gi&aacute; c&ograve;n $750, v&agrave; bạn quyết định mua n&oacute; th&igrave; kh&ocirc;ng phải bạn tiết kiệm được $250. Bạn vừa x&agrave;i mất $750.</p>\r\n', '0', 1495254107, 1495254185, NULL, 1),
(64, 31, 193, 1, '<p><strong>C&acirc;u trả lời của Paul Cowan&nbsp;tr&ecirc;n Quora.com</strong></p>\r\n\r\n<p>Trong khi t&ocirc;i đồng &yacute; với những b&agrave;i viết kh&aacute;c rằng đồ ăn v&agrave; thực tế l&agrave; bạn đang l&agrave;m việc tại Google l&agrave; một trong những điều thực tế v&agrave; ấn tượng nhất, t&ocirc;i đ&atilde; cực k&igrave; kinh ngạc khi đi t&igrave;m hiểu về những ph&uacute;c lợi được hưởng nếu chẳng may một nh&acirc;n vi&ecirc;n Google qua đời.</p>\r\n\r\n<p>Nếu một Googler chết, ngay lập tức họ sẽ nhận được tất cả cổ phần của họ trong c&ocirc;ng ti, bảo hiểm nh&acirc;n thọ lập tức được trả, vợ/chồng c&ograve;n sống của họ vẫn tiếp tục nhận được một nửa mức lương của Googler trong 10 năm tới. V&agrave; c&oacute; một khoản trợ cấp th&ecirc;m $ 1,000 / th&aacute;ng cho bất kỳ đứa con n&agrave;o của Googler đ&oacute;.</p>\r\n\r\n<p>Khi t&ocirc;i đề cập đến lợi &iacute;ch n&agrave;y cho vợ t&ocirc;i, c&ocirc; ấy đ&atilde; kh&oacute;c. C&ocirc; ấy thực sự đ&atilde; kh&oacute;c rằng c&ocirc;ng ty sẽ l&agrave;m điều đ&oacute; cho c&ocirc; ấy nếu c&oacute; chuyện g&igrave; xảy ra với t&ocirc;i.</p>\r\n\r\n<p>Điều tốt nhất l&agrave; g&igrave;? Cho đến nay, c&ocirc; ấy đ&atilde; chưa đầu độc t&ocirc;i khi n&agrave;o. Hẳn l&agrave; y&ecirc;u t&ocirc;i lắm !</p>\r\n', '0', 1496577268, 1496602891, NULL, 1),
(65, 31, 196, 1, '<p>A: [Maggie Peck, đ&atilde; đọc mỗi cuốn 5 lần, T&ugrave; nh&acirc;n ngục A 10+]</p>\r\n\r\n<p>Hầu hết c&aacute;c c&acirc;u trả lời ở tr&ecirc;n thật đ&aacute;ng thất vọng. Mọi người đang nghĩ c&aacute;i g&igrave; vậy?</p>\r\n\r\n<p>Ph&eacute;p thuật mạnh nhất từng được thực hiện trong bộ truyện Harry Potter ch&iacute;nh l&agrave; ph&eacute;p bảo vệ m&agrave; Lily đ&atilde; yểm l&ecirc;n Harry b&eacute; bỏng khi Voldermort cố gắng giết cậu. Đ&acirc;y cũng ch&iacute;nh l&agrave; một trong c&aacute;c điểm nhấn của t&aacute;c phẩm: T&igrave;nh y&ecirc;u của Lily mạnh đến mức ph&eacute;p thuật của b&agrave; đ&aacute;nh bại ph&aacute;p sư mạnh thứ nh&igrave; (hoặc ba) tr&ecirc;n cả thế giới.</p>\r\n\r\n<p>Điều n&agrave;y được NHẮC ĐI NHẮC LẠI, cả trực tiếp lẫn gi&aacute;n tiếp, bởi Rowling. Kh&ocirc;ng g&igrave; c&oacute; thể so s&aacute;nh được.</p>\r\n\r\n<p>Nguồn&nbsp;: <a href=\"https://www.quora.com/What-was-the-most-powerful-piece-of-magic-performed-by-anyone-in-the-Harry-Potter-books/answer/Maggie-Peck-1\">Quora.com</a>&nbsp;</p>\r\n', '0', 1496843779, 1496843891, NULL, 1),
(66, 31, 198, 1, '<p>C&acirc;u trả lời của Jenera Soloven<br />\r\nMột trong những b&iacute; mật &quot;đen tối&quot; của tuyển sinh đại học l&agrave; những học sinh học đi&ecirc;n cuồng để được điểm cao v&agrave; đậu v&agrave;o c&aacute;c trường đại học tốt kh&ocirc;ng phải tất cả đều đạt th&agrave;nh c&ocirc;ng tốt đẹp. Harvard v&agrave; c&aacute;c trường đại học danh tiếng kh&aacute;c thực ra th&iacute;ch kiếm những học sinh kh&ocirc;ng phải &quot;c&agrave;y&quot; tới mức đ&oacute; để th&agrave;nh c&ocirc;ng. Một phần l&iacute; do họ d&agrave;nh thời gian nh&igrave;n&nbsp;v&agrave;o những hoạt động ngoại kh&oacute;a l&agrave; v&igrave; đ&oacute; l&agrave; một dấu hiệu cho biết học sinh đ&oacute; c&oacute; nhiều thời gian rảnh rỗi. Nếu bạn học 24/7 để được to&agrave;n điểm A v&agrave; kh&ocirc;ng c&oacute; thời gian cho bất cứ việc g&igrave; kh&aacute;c, tức l&agrave; bạn kh&ocirc;ng c&oacute; một list c&aacute;c hoạt động ngoại kh&oacute;a, bạn sẽ kh&ocirc;ng bao giờ được nhận v&agrave;o Harvard. Nếu bạn học 20 ph&uacute;t một ng&agrave;y v&agrave; được to&agrave;n điểm A, v&agrave; bạn biết c&aacute;ch d&ugrave;ng thời gian rảnh hiệu quả, đ&oacute; l&agrave; những g&igrave; m&agrave; c&aacute;c trường top ưu ti&ecirc;n.</p>\r\n\r\n<p>T&ocirc;i biết một c&ocirc; kia học đi&ecirc;n cuồng từ năm lớp 2. Ba mẹ c&ocirc; &eacute;p c&ocirc; học, mong cho c&ocirc; trở th&agrave;nh b&aacute;c sĩ. C&ocirc; tr&ocirc;ng cực k&igrave; khổ sở qua mỗi năm học, v&agrave; mất 10 năm c&ocirc; mới học xong trường Y. C&ocirc; chưa từng hẹn h&ograve; với ai, kh&ocirc;ng bao giờ c&oacute; thời gian. C&ocirc; chưa bao giờ l&agrave;m g&igrave; chỉ để thấy vui vẻ. Sau tất cả những thứ đ&oacute;, c&ocirc; lại chẳng hề tiếp tục với ng&agrave;nh Y nữa. C&ocirc; chưa bao giờ muốn như thế, c&ocirc; chỉ cố gắng l&agrave;m điều c&ocirc; nghĩ l&agrave; đ&uacute;ng đắn.</p>\r\n\r\n<p>Nguồn : <a href=\"https://www.quora.com/Where-do-people-who-try-hard-in-high-school-and-college-end-up-later-on/answer/Janera-Soloven\">Quora.com</a></p>\r\n', '0', 1496915922, 1496916018, NULL, 1),
(67, 31, 199, 1, '<p>Johanna El Attar-Hill [+8100]</p>\r\n\r\n<p>T&ocirc;i đ&atilde; kết h&ocirc;n với một người đ&agrave;n &ocirc;ng khiếm thị. Trước khi gặp anh ấy, t&ocirc;i chưa bao giờ mảy may nghĩ tới việc những người m&ugrave; sẽ xoay sở với cuộc sống như thế n&agrave;o. Chồng t&ocirc;i từng bị từ chối khi đi xin việc chỉ v&igrave; mọi người nghĩ rằng với đ&ocirc;i mắt như thế anh ấy sẽ chẳng l&agrave;m được việc g&igrave; n&ecirc;n hồn.</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i sống trong một thị trấn rất nhỏ b&eacute;, thế n&ecirc;n ở đ&acirc;y chỉ c&oacute; mỗi chồng t&ocirc;i v&agrave; một ch&agrave;ng trai trẻ tuổi l&agrave; người khiếm thị. Rất nhiều người đ&atilde; l&ecirc;n mặt, k&ecirc;nh kiệu với anh ấy như thể đ&ocirc;i mắt khiếm thị sẽ ảnh hưởng đến tr&iacute; tuệ vậy. Một điều nữa l&agrave;m tổn thương t&ocirc;i l&agrave; khi mọi người cứ hỏi rằng tại sao lại cưới anh ta khi m&agrave; bạn c&oacute; thể tiến đến với những người tốt hơn.</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i muốn nhận nu&ocirc;i một đứa trẻ. V&agrave; khi đến trại trẻ mồ c&ocirc;i, ch&uacute;ng t&ocirc;i đ&atilde; bị từ chối chỉ v&igrave; đ&ocirc;i mắt của anh ấy. Ở th&agrave;nh phố, t&ocirc;i chắc chắn rằng điều n&agrave;y sẽ kh&ocirc;ng xảy ra đ&acirc;u, nhưng m&agrave; ở đ&acirc;y, tất cả mọi người quen biết lẫn nhau v&agrave; bằng một c&aacute;ch n&agrave;o đ&oacute; họ lu&ocirc;n nghĩ rằng anh ấy kh&ocirc;ng thể trở th&agrave;nh một người cha tốt.</p>\r\n\r\n<p>Chồng t&ocirc;i l&agrave; lập tr&igrave;nh vi&ecirc;n m&aacute;y t&iacute;nh. Anh ấy rất th&ocirc;ng minh, nhưng dường như mọi người kh&ocirc;ng thấy được điều đ&oacute;. Tất cả những g&igrave; họ thấy chỉ l&agrave; trở ngại về đ&ocirc;i mắt. Điều đ&oacute; khiến tr&aacute;i tim t&ocirc;i như vỡ vụn ra. T&ocirc;i đ&atilde; phải trở th&agrave;nh trụ cột kinh tế trong nh&agrave; chỉ v&igrave; kh&ocirc;ng ai cho anh ấy một cơ hội. Những người cấp tr&ecirc;n của t&ocirc;i n&oacute;i rằng họ kh&ocirc;ng muốn anh ấy d&iacute;nh d&aacute;ng g&igrave; đến c&ocirc;ng việc l&agrave;m ăn của họ, rằng anh ấy l&agrave; một g&aacute;nh nặng, rằng anh ấy c&oacute; thể đ&aacute;nh rơi, l&agrave;m vỡ mọi thứ như một thằng bại n&atilde;o. Điều ấy l&agrave;m t&ocirc;i tổn thương gh&ecirc; gớm v&agrave; khiến t&ocirc;i đ&aacute;nh gi&aacute; thấp nh&acirc;n c&aacute;ch của họ hơn. Khi họ muốn nhờ vả những việc li&ecirc;n quan đến m&aacute;y t&iacute;nh, anh ấy gi&uacute;p v&agrave; họ th&igrave; chẳng bao giờ trả c&ocirc;ng cho việc ấy. Hẳn rằng anh ấy kh&ocirc;ng phải l&agrave; một g&aacute;nh nặng khi l&agrave;m việc miễn ph&iacute; rồi.</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i kh&ocirc;ng phải l&uacute;c n&agrave;o cũng sống ở thị trấn n&agrave;y. Trước đ&acirc;y ch&uacute;ng t&ocirc;i sống ở NewYork nhưng sau khi cơn b&atilde;o Sandy 2012 ph&aacute; hủy ng&ocirc;i nh&agrave; th&igrave; buộc t&ocirc;i phải rời đi. Đ&ecirc;m cơn b&atilde;o đổ bộ, một bức tường nước cao tới 8 feet đ&atilde; đ&aacute;nh sập bức tường của ng&ocirc;i nh&agrave; v&agrave; t&ocirc;i th&igrave; bị mắc kẹt sau một c&aacute;i khung th&eacute;p. T&ocirc;i kh&ocirc;ng thể tho&aacute;t ra được v&agrave; nước th&igrave; cứ d&acirc;ng l&ecirc;n. Chồng t&ocirc;i đ&atilde; tho&aacute;t được ra ngo&agrave;i nhưng rồi đ&atilde; bơi lại v&agrave;o nh&agrave; để cứu t&ocirc;i. Anh ấy cứ tiếp tục gọi t&ecirc;n t&ocirc;i cho đến khi t&ocirc;i đ&aacute;p lại, thậm ch&iacute; anh ấy c&ograve;n cứu ch&uacute; m&egrave;o đang mắc kẹt trong ph&ograve;ng ngủ. Anh ấy kh&ocirc;ng hề quan t&acirc;m rằng m&igrave;nh kh&ocirc;ng nh&igrave;n thấy g&igrave;, rằng nước th&igrave; đang d&acirc;ng l&ecirc;n v&agrave; rằng ch&uacute;ng t&ocirc;i c&oacute; thể bị điện giật. Anh ấy đ&atilde; cứu mạng t&ocirc;i!</p>\r\n\r\n<p>Sau cơn b&atilde;o, nh&agrave; cửa trở n&ecirc;n rất đắt đỏ n&ecirc;n ch&uacute;ng t&ocirc;i quyết định chuyển đến sống trong một thị trấn nhỏ ở n&ocirc;ng th&ocirc;n. Khi ch&uacute;ng t&ocirc;i c&ograve;n ở NewYork, chồng t&ocirc;i cũng từng bị ph&acirc;n biệt đối xử, nhưng m&agrave; kh&ocirc;ng nhiều bằng ở thị trấn n&agrave;y.<br />\r\nMọi người chẳng ngại ng&ugrave;ng g&igrave; như thể họ cảm thấy họ c&oacute; quyền để chỉ ra những khiếm khuyết tr&ecirc;n cơ thể anh ấy vậy. Một lần, v&agrave;o lễ Halloween, ch&uacute;ng t&ocirc;i chia kẹo cho lũ trẻ v&agrave; bố mẹ của ch&uacute;ng đ&atilde; n&oacute;i với một người kh&aacute;c (ngay trước mặt ch&uacute;ng t&ocirc;i) rằng &ldquo;Đấy l&agrave; thằng m&ugrave; ch&uacute;ng ta vẫn thấy h&agrave;ng ng&agrave;y đấy&rdquo;. T&ocirc;i đ&atilde; rất rất tức giận đến mức m&agrave; tắt đ&egrave;n ở cổng v&ograve;m đi v&agrave; đ&oacute;ng cửa, dừng việc chia kẹo v&agrave;o đ&ecirc;m đ&oacute;.<br />\r\nThế n&ecirc;n, t&ocirc;i nghĩ rằng điều tồi tệ nhất bạn c&oacute; thể g&acirc;y ra đối với một người m&ugrave; ch&iacute;nh l&agrave; việc bạn chỉ đ&aacute;nh gi&aacute; họ dựa tr&ecirc;n khiếm khuyết cơ thể m&agrave; kh&ocirc;ng dựa tr&ecirc;n bất cứ điều g&igrave; kh&aacute;c. Họ muốn được đối xử như những người b&igrave;nh thường. Ch&uacute;ng t&ocirc;i đ&atilde; kết h&ocirc;n được gần 10 năm v&agrave; c&oacute; đ&ocirc;i l&uacute;c t&ocirc;i qu&ecirc;n mất anh ấy l&agrave; người khiếm thị v&igrave; t&ocirc;i kh&ocirc;ng bao giờ nghĩ về anh ấy theo c&aacute;ch đ&oacute;. Thật l&agrave; buồn cười khi thỉnh thoảng t&ocirc;i lại n&oacute;i &ldquo;anh nh&igrave;n n&agrave;y&rdquo; v&agrave; rồi cả hai cười ph&aacute; l&ecirc;n v&igrave; t&ocirc;i đ&atilde; thật sự qu&ecirc;n đi khiếm khuyết của anh ấy.</p>\r\n\r\n<p>Cả hai ch&uacute;ng t&ocirc;i đều theo Đạo Hồi. T&ocirc;i theo Đạo từ khi mới sinh ra c&ograve;n anh ấy cải Đạo v&agrave;i năm trước khi ch&uacute;ng t&ocirc;i gặp nhau. V&agrave; đ&oacute; lại l&agrave; một trở ngại nữa trong thị trấn n&agrave;y bởi mọi người chẳng biết g&igrave; về đạo Hồi v&agrave; họ nghĩ tất cả đều l&agrave; khủng bố, điều m&agrave; tất nhi&ecirc;n thật l&agrave; lố bịch. Nhưng ch&uacute;ng t&ocirc;i đ&atilde; giữ đức tin cho ri&ecirc;ng m&igrave;nh. Ngay cả khi t&ocirc;i nghe thấy ai đ&oacute; n&oacute;i &ldquo;Ai sẽ giao một đứa trẻ cho họ chứ? Vừa m&ugrave; vừa theo Đạo Hồi &aacute;?&rdquo;. D&ugrave; trong thị trấn c&oacute; rất nhiều đứa trẻ bị bỏ rơi hoặc những đứa trẻ sinh ra ngo&agrave;i sự mong đợi th&igrave; mẹ của ch&uacute;ng cũng kh&ocirc;ng muốn gửi con cho người theo Đạo Hồi hoặc l&agrave; người khiếm thị. Đ&oacute; thật sự l&agrave; điều kinh khủng đối với một người phụ nữ khao kh&aacute;t được l&agrave;m mẹ như t&ocirc;i, nhưng x&atilde; hội lại c&oacute; định kiến về sự khiếm khuyết về đ&ocirc;i mắt v&agrave; đức tin của ch&uacute;ng t&ocirc;i.</p>\r\n\r\n<p>Thế n&ecirc;n theo t&ocirc;i, việc đ&aacute;nh gi&aacute; người khiếm thị chỉ qua đ&ocirc;i mắt chứ kh&ocirc;ng phải qua nh&acirc;n c&aacute;ch, qua con người họ l&agrave; điều độc &aacute;c v&agrave; tồi tệ nhất m&agrave; bạn c&oacute; thể l&agrave;m.</p>\r\n', '0', 1496988999, 1496989022, NULL, 1),
(68, 23, 201, 1, '<p><span style=\"color:#1d2129\">Ashwini Hegade [+15,898]</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">Dưới đ&acirc;y l&agrave; một số điều &iacute;t ai biết về Leonardo DiCaprio:</span></p>\r\n\r\n<p><img alt=\"WGxdSGe.png\" src=\"http://i.imgur.com/WGxdSGe.png\" /></p>\r\n\r\n<p><span style=\"color:#1d2129\">&bull; T&ecirc;n đầy đủ của Leo l&agrave; Leonardo Wilhelm DiCaprio.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">&bull; Anh ấy đ&atilde; nhận nu&ocirc;i một b&eacute; g&aacute;i Nam Phi.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">&bull; Anh ấy chưa kết h&ocirc;n.&nbsp;<img alt=\"2764.png\" src=\"https://www.facebook.com/images/emoji.php/v9/f6c/1/16/2764.png\" style=\"height:16px; width:16px\" /></span></p>\r\n\r\n<p><span style=\"color:#1d2129\">&bull; Bố anh ấy l&agrave; họa sĩ vẽ truyện tranh v&agrave; l&agrave; người &Yacute;.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">&bull; Anh n&oacute;i s&otilde;i tiếng Đức v&igrave; mẹ anh được sinh ra ở Đức.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">&bull; L&uacute;c nhỏ, anh sống với mẹ v&agrave; b&agrave; ngoại sau khi bố mẹ li dị.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">&bull; Anh l&agrave; nh&agrave; m&ocirc;i trường học, s&aacute;ng lập ra tổ chức Leonardo DiCaprio.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">&bull; Anh l&agrave; th&agrave;nh vi&ecirc;n hội đồng của Hội đồng quốc ph&ograve;ng t&agrave;i nguy&ecirc;n thi&ecirc;n nhi&ecirc;n v&agrave; Global Green USA.</span></p>\r\n', '0', 1497073860, 1497077457, 'http://i.imgur.com/WGxdSGe.png', 1),
(69, 37, 202, 1, '<p>L&agrave; một tướng được y&ecirc;u th&iacute;ch nhất nh&igrave; trong tr&ograve; chơi Li&ecirc;n Minh Huyền Thoại về độ cơ động, s&aacute;t thương cao&nbsp;cũng như những kỹ năng đầy ma mị của anh ch&agrave;ng mang phong c&aacute;ch l&atilde;ng tử n&agrave;y.H&atilde;y c&ugrave;ng t&ocirc;i&nbsp;t&igrave;m hiểu lối chơi của Yasuo - Kẻ Bất Dung Thứ.</p>\r\n\r\n<p><img alt=\"\" src=\"https://quickrep.vn/uploads/contents/images/8bf10ee05e8895dc.jpg\" /></p>\r\n\r\n<p><strong>Tổng Qu&aacute;t về Sức Mạnh của Yasuo</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Ưu điểm:</strong></li>\r\n	<ul>\r\n		<li>Farm nhanh</li>\r\n		<li>S&aacute;t thương nhiều</li>\r\n		<li>Độ cơ động cao</li>\r\n		<li>Nhược điểm</li>\r\n	</ul>\r\n	<li><strong>Nhược điểm:</strong></li>\r\n	<ul>\r\n		<li>Gi&aacute;p v&agrave; m&aacute;u kh&aacute; yếu.</li>\r\n		<li>Kh&oacute; thuần thục n&ecirc;n cần luyện tập nhiều</li>\r\n		<li>Khả năng bị bỏ lại khi c&oacute; rừng đối phương hỏi thăm.</li>\r\n	</ul>\r\n</ul>\r\n\r\n<p><strong>Ngọc v&agrave; Bảng Bổ Trợ ch</strong><strong>o Yasuo ở vị trị Mid</strong></p>\r\n\r\n<p><span style=\"font-size:14px\">- Do c&aacute;c kỹ năng của Ya</span><span style=\"font-size:14px\">suo c&oacute; thời gian hồi chi&ecirc;u kh&aacute; nhanh c&ugrave;ng với một số thay đổi về Ch&iacute; Mạng&nbsp;n&ecirc;n Ngọc tăng Tốc Độ Đ&aacute;nh&nbsp;k&egrave;m theo Sức Mạnh C&ocirc;ng K&iacute;ch l&agrave; bảng ngọc cơ bản d&agrave;nh cho Yasuo.N&oacute; bao gồm:</span></p>\r\n\r\n<ul>\r\n	<li>9 vi&ecirc;n Ngọc Đỏ - Sức Mạnh C&ocirc;ng K&iacute;ch</li>\r\n	<li>9 vi&ecirc;n Ngọc V&agrave;ng - Gi&aacute;p</li>\r\n	<li>9 vi&ecirc;n Ngọc Xanh -Kh&aacute;ng Ph&eacute;p&nbsp;</li>\r\n	<li>3 vi&ecirc;n Ngọc T&iacute;m - Tốc Độ Đ&aacute;nh</li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://quickrep.vn/uploads/contents/images/91c4863ce73fc131.jpg\" /></p>\r\n\r\n<p><span style=\"font-size:14px\">- Bảng Bổ Trợ 18 - 0 - 12 cũng l&agrave; bảng bổ trợ Cơ Bản cho Yasuo, ở nh&aacute;nh Cuồng Bạo mạng lại cho Yasuo lượng s&aacute;t thương dồi dạo c&ugrave;ng với độ cơ động, một ch&uacute;t hồi phục để đảm bảo giai đoạn đi đường, nh&aacute;nh Ki&ecirc;n Định cũng cho Yasuo một ch&uacute;t cứng c&aacute;p khi đối phương k&ecirc;u gọi người đi Rừ</span><span style=\"font-size:14px\">ng của m&igrave;nh ra trợ gi&uacute;p.</span></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://quickrep.vn/uploads/contents/images/ffe0626ad825711f.jpg\" /></p>\r\n\r\n<p><strong>Bảng Kỹ Năng cho Yasuo ở vị trị Mid/Top</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://quickrep.vn/uploads/contents/images/499111a2af603156.jpg\" /></p>\r\n\r\n<p>Thứ tự kỹ năng của Yasuo sẽ ưu ti&ecirc;n n&acirc;ng tối đa kỹ năng <strong>Q (B&atilde;o Kiếm)</strong>, lần lượt sau đ&oacute; l&agrave; <strong>E (Qu&eacute;t Kiếm)</strong> v&agrave; <strong>W (Tường Gi&oacute;)</strong>, <strong>chi&ecirc;u cuối R (Trăn Trối)</strong> n&acirc;ng theo cấp độ.</p>\r\n\r\n<p><strong>Ph&eacute;p Bổ Trợ</strong></p>\r\n\r\n<p>Ở vị tr&iacute; Mid Lane, nếu bạn tự tin với khả năng của m&igrave;nh v&agrave; muốn chơi &quot;kh&ocirc; m&aacute;u&quot; với đối phương th&igrave; Tốc Biến + Thi&ecirc;u Đốt l&agrave;&nbsp;lựa chọn điều vời nhất.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.mobafire.com/images/summoner-spell/flash.png\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/summoner-spell/ignite.png\" /></p>\r\n\r\n<p>Nếu đối phương l&agrave; một tướng s&aacute;t thủ hoặc đơn giản m&agrave; bạn muốn chơi an to&agrave;n khi đi đường th&igrave; Tốc Biến + Kiệt Sức lựa chọn tốt.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.mobafire.com/images/summoner-spell/flash.png\" style=\"height:64px; width:64px\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/summoner-spell/exhaust.png\" /></p>\r\n\r\n<p>C&ograve;n nếu ở vị tr&iacute; Top Lane, bạn chắc chắn phải mang Dịch Chuyển để kết hợp cũng như trợ gi&uacute;p đồng đội khi xảy ra giao tranh, Dịch Chuyển đồng thời cũng l&agrave; một lựa chọn hữu hiệu gi&uacute;p bạn tiến ra đường nhanh hơn nếu c&oacute; những gi&acirc;y ph&uacute;t &quot;say m&aacute;u&quot; khiến bạn bị đối phương bỏ lại sau lưng.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.mobafire.com/images/summoner-spell/flash.png\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/summoner-spell/teleport.png\" /></p>\r\n\r\n<p><strong>C&aacute;ch l&ecirc;n trang bị cho Yasuo ở vị tr&iacute; Mid/Top Lane.</strong></p>\r\n\r\n<p>Trang bị cơ bản cho Yasuo l&agrave; Kiếm Doran v&agrave; 01 lọ m&aacute;u nếu bạn thực sự muốn đấu trực diện với đối phương.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.mobafire.com/images/item/dorans-blade.gif\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/health-potion.gif\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/warding-totem.gif\" /></p>\r\n\r\n<p>Hoặc đơn giản l&agrave; bạn muốn chơi an to&agrave;n, muốn tạo giao đoạn đi đường để k&eacute;o d&agrave;i trận đấu về cuối trận khi bạn đ&atilde; sở hữu nhưng m&oacute;n đồ trấn ph&aacute;i th&igrave; lựa chọn Khi&ecirc;n Doran v&agrave; 02 lọ m&aacute;u l&agrave; lựa chọn thật sự rất ph&ugrave; hợp.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.mobafire.com/images/item/dorans-shield.gif\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/health-potion.gif\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/warding-totem.gif\" /></p>\r\n\r\n<p>Mắt vật tổ vẫn cần thiết với Yasuo trong trận đầu để tr&aacute;nh những pha &quot;hỏi thăm&quot; của Rừng đối phương, hoặc để kiểm so&aacute;t tầm nh&igrave;n mỗi khi bạn tiến h&agrave;nh đẩy l&eacute;n trụ của địch.</p>\r\n\r\n<p><strong>Trang bị quan trọng với Yasuo</strong></p>\r\n\r\n<p><img src=\"http://www.mobafire.com/images/item/phantom-dancer.gif\" />&nbsp;</p>\r\n\r\n<p><em>Ma Vũ Song Kiếm<strong>: </strong></em>L&agrave; một trang bị thiết yếu khi m&agrave; m&agrave; giờ đ&acirc;y Yasuo kh&ocirc;ng c&ograve;n phụ thuộc qu&aacute; nhiều v&agrave;o ch&iacute; mạng.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.mobafire.com/images/item/infinity-edge.gif\" style=\"height:64px; width:64px\" /></p>\r\n\r\n<p>&nbsp;V&ocirc; Cực Kiếm: Đơn giản l&agrave; trang bị mạnh cho Yasuo nếu bạn c&oacute; một khởi đầu &quot;xanh xao&quot;.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.mobafire.com/images/item/blade-of-the-ruined-king.gif\" style=\"height:64px; width:64px\" /></p>\r\n\r\n<p>Gươm của Vua V&ocirc; Danh: Một trang bị tương đối ổn với Yasuo khi c&oacute; cả tốc độ đ&aacute;nh v&agrave; h&uacute;t m&aacute;u, gi&uacute;p bạn trụ được dễ d&agrave;ng hơn.</p>\r\n\r\n<p><img src=\"http://www.mobafire.com/images/item/maw-of-malmortius.gif\" />&nbsp;</p>\r\n\r\n<p>Chuỳ Gai&nbsp;Malmortius: Một trang bị ph&ograve;ng thủ khi bạn phải đối đầu với đối thủ l&agrave; ph&aacute;p sư g&acirc;y s&aacute;t thương ph&eacute;p, một l&aacute; chắn khi c&ograve;n thấp m&aacute;u cộng với lượng s&aacute;t thương gia tăng từ nội tại của trang bị n&agrave;y l&agrave; qu&aacute; đủ để bạn hạ gục đối phương trước khi kịp lướt đi.</p>\r\n\r\n<p><strong>C&aacute;ch l&ecirc;n trang bị cho Yasuo tuỳ v&agrave;o t&igrave;nh huống của trận đấu</strong><br />\r\nTuỳ v&agrave;o t&igrave;nh huống của trận đấu c&oacute; nghĩa l&agrave; bạn cần biết đối thủ của bạn l&agrave; ai, bạn c&oacute; một giao đoạn đi đường tốt hay tệ? Loại trang bị n&agrave;o l&agrave; tốt nhất để c&oacute; thể gi&uacute;p bạn gi&agrave;nh chiến thắng, ở b&agrave;i hướng dẫn n&agrave;y sẽ chỉ ra một v&agrave;i bộ trang bị cơ bản.</p>\r\n\r\n<ul>\r\n	<li>Đội của đối phương đa số g&acirc;y s&aacute;t thương vật l&yacute; th&igrave; x&acirc;y dựng một bộ trang bị gồm c&oacute; một ch&uacute;t gi&aacute;p cũng l&agrave; một lựa chọn rất tốt v&igrave; độ &quot;tr&acirc;u&quot;&nbsp;m&agrave; Yasuo c&oacute; thể khiến đội bạn cảm thấy kh&oacute; chịu.</li>\r\n</ul>\r\n\r\n<p><em><img src=\"http://www.mobafire.com/images/item/phantom-dancer.gif\" /><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/ninja-tabi.gif\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/infinity-edge.gif\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/frozen-mallet.gif\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/steraks-gage.gif\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/guardian-angel.gif\" /></p>\r\n\r\n<ul>\r\n	<li><em>Đội của đối phương đa số g&acirc;y s&aacute;t thương ph&eacute;p hoặc ph&aacute;p sư chủ lực b&ecirc;n địch qu&aacute; &quot;xanh&quot;, th&igrave; bạn n&ecirc;n cần một ch&uacute;t kh&aacute;ng ph&eacute;p, bộ trang bị sẽ bao gồm:</em></li>\r\n</ul>\r\n\r\n<p><img src=\"http://www.mobafire.com/images/item/phantom-dancer.gif\" /><em>&nbsp;<span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/mercurys-treads.gif\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/infinity-edge.gif\" /><em>&nbsp;&nbsp;<span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/edge-of-night.gif\" /><em><span style=\"font-size:48px\">+</span></em><img src=\"http://www.mobafire.com/images/item/maw-of-malmortius.gif\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/guardian-angel.gif\" /></p>\r\n\r\n<ul>\r\n	<li><em>Hoặc bạn muốn chơi một Yasuo &quot;cực kỳ tr&acirc;u b&ograve;&quot; th&igrave; bộ trang bị dưới đ&acirc;y sẽ gi&uacute;p bạn l&agrave;m điều đ&oacute;.</em></li>\r\n</ul>\r\n\r\n<p><img src=\"http://www.mobafire.com/images/item/phantom-dancer.gif\" /><em>&nbsp;<span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/ninja-tabi.gif\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/randuins-omen.gif\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/dead-mans-plate.gif\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/frozen-mallet.gif\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/guardian-angel.gif\" /></p>\r\n\r\n<ul>\r\n	<li><em>Bộ trang bị full s&aacute;t thương, gi&uacute;p bạn l&agrave;m một người &quot;g&aacute;nh team&quot; đ&uacute;ng nghĩa.</em></li>\r\n</ul>\r\n\r\n<p><img src=\"http://www.mobafire.com/images/item/phantom-dancer.gif\" /><em>&nbsp;<span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/berserkers-greaves.gif\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/infinity-edge.gif\" /><em>&nbsp;&nbsp;<span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/blade-of-the-ruined-king.gif\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/the-bloodthirster.gif\" /><em><span style=\"font-size:48px\">+</span></em><img alt=\"\" src=\"http://www.mobafire.com/images/item/trinity-force.gif\" /></p>\r\n', '1', 1497161049, 1497323477, 'https://quickrep.vn/uploads/contents/images/8bf10ee05e8895dc.jpg', 1),
(71, 31, 204, 1, '<p>Nếu c&oacute; ai đ&oacute; định bắt c&oacute;c bạn, cơ hội lớn nhất v&agrave; gần như cuối c&ugrave;ng của bạn l&agrave; chống cự ngay khoảnh khắc đ&oacute;.</p>\r\n\r\n<p><img alt=\"\" src=\"https://quickrep.vn/uploads/contents/images/50b0e90ab46a40e7.jpg\" /></p>\r\n\r\n<p><span style=\"background-color:#ffffff; color:#1d2129\">Nếu c&oacute; người đang đe doạ bạn với dao hoặc s&uacute;ng, bạn c&oacute; thẻ nghĩ rằng chống cự hoặc bỏ chạy l&agrave; một lựa chọn tồi, nhất l&agrave; khi đối tượng đi đ&ocirc;ng người. Tuy nhi&ecirc;n nếu ch&uacute;ng n&oacute;i với bạn l&agrave; h&atilde;y đi theo ch&uacute;ng, th&igrave; cơ hội để bạn c&oacute; thể nh&igrave;n thấy gia đ&igrave;nh một lần nữa đ&oacute; l&agrave; kh&ocirc;ng nghe theo điều đ&oacute;. Cơ hội trốn tho&aacute;t hoặc được giải cứu của bạn sẽ giảm thảm hại khi m&agrave; ch&uacute;ng đ&atilde; đưa được bạn đến vị tr&iacute; ch&uacute;ng muốn.</span></p>\r\n\r\n<p><span style=\"background-color:#ffffff; color:#1d2129\">Nếu bị bắt c&oacute;c, bạn phải t&iacute;ch cực để trốn tho&aacute;t c&agrave;ng sớm c&agrave;ng tốt. Mỗi gi&acirc;y nằm dưới sự kiểm so&aacute;t của ch&uacute;ng, cơ hội đ&oacute; c&agrave;ng giảm dần, sau 24h, khả năng cao l&agrave; bạn sẽ chết. Nếu ch&uacute;ng giết bạn ngay, ch&uacute;c mừng; v&igrave; nếu ch&uacute;ng kh&ocirc;ng giết bạn, th&igrave; những g&igrave; ch&uacute;ng l&agrave;m với bạn sau đ&oacute; thực sự sẽ c&ograve;n khủng khiếp hơn cả chết (xẻ lấy nội tạng, b&aacute;n l&agrave;m n&ocirc; lệ t&igrave;nh dục...)</span></p>\r\n\r\n<p><span style=\"background-color:#ffffff; color:#1d2129\">Thường thường, khi ch&uacute;ng bắt đầu thực hiện bắt c&oacute;c, t&acirc;m tr&iacute; ch&uacute;ng tập trung v&agrave;o việc l&agrave;m thế n&agrave;o để đe doạ bạn v&agrave; giữ cho bạn nguy&ecirc;n vẹn, c&oacute; nghĩa l&agrave; ch&uacute;ng kh&ocirc;ng c&oacute; &yacute; giết bạn. Vậy n&ecirc;n, bỏ chạy được xem như một lựa chọn rất tốt, v&igrave; &iacute;t nhất bạn c&oacute; 2 gi&acirc;y trước khi t&acirc;m tr&iacute; ch&uacute;ng kịp định thần rằng phải tấn c&ocirc;ng bạn. H&atilde;y vừa chạy vừa la h&eacute;t hết mức c&oacute; thể, h&atilde;y chạy đến chỗ c&oacute; người (chạy zic zắc nếu ch&uacute;ng c&oacute; s&uacute;ng). Khi đ&oacute;, t&acirc;m tr&iacute; của ch&uacute;ng sẽ từ bỏ &yacute; định bắt bạn, v&igrave; ch&uacute;ng chẳng c&oacute; g&igrave; nếu giết bạn, v&agrave; ch&uacute;ng thừa th&ocirc;ng minh để biết hậu quả sau đ&oacute; l&agrave; g&igrave; l&uacute;c n&agrave;y.</span></p>\r\n\r\n<p><span style=\"background-color:#ffffff; color:#1d2129\">Hi vọng điều n&agrave;y c&oacute; &iacute;ch cho bạn, h&atilde;y nhớ lấy n&oacute;, ph&ograve;ng một ng&agrave;y đen đủi nếu c&oacute; xảy ra.</span></p>\r\n', '0', 1497361901, 1497361919, 'https://quickrep.vn/uploads/contents/images/50b0e90ab46a40e7.jpg', 1),
(73, 38, 206, 1, '<p>Hẳn l&agrave; c&ocirc;ng việc kế to&aacute;n l&agrave; cập nhật t&iacute;nh ch&iacute;nh x&aacute;c, kịp thời,&hellip; thế nhưng c&oacute; rất nhiều doanh nghiệp hồ sơ sổ s&aacute;ch kế to&aacute;n kh&ocirc;ng in sổ, kh&ocirc;ng kẹp chứng từ rất nhiều năm, thuế th&ocirc;ng b&aacute;o tới thanh tra kiểm tra, kế to&aacute;n trưởng nghỉ, kế to&aacute;n vi&ecirc;n cũng nộp đơn xin nghỉ việc theo. L&agrave;m nghề m&agrave; c&aacute;c bạn đừng hoang mang như thế, b&igrave;nh tĩnh c&ugrave;ng nhau đưa ra phương &aacute;n để đối mặt với c&aacute;c b&aacute;c thuế nh&eacute;</p>\r\n\r\n<ol>\r\n	<li><strong>L&agrave;m văn bản xin gia hạn thời gian kiểm tra gửi cho cơ quan thuế.</strong></li>\r\n	<li><strong>Sau khi gia hạn xong kế to&aacute;n cần tiếp tục chuẩn bị hồ sơ quyết to&aacute;n :</strong></li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>B&aacute;o c&aacute;o t&agrave;i ch&iacute;nh c&aacute;c năm + tờ khai Quyết to&aacute;n thu nhập doanh nghiệp ( k&egrave;m theo danh s&aacute;ch loại nếu c&oacute; ) +tờ khai quyết to&aacute;n thu nhập c&aacute; nh&acirc;n ( k&egrave;m theo văn bản x&aacute;c nhận thu nhập to&agrave;n cầu đối với người nước ngo&agrave;i)</li>\r\n	<li>Sổ s&aacute;ch kế to&aacute;n c&aacute;c năm.</li>\r\n	<li>To&agrave;n bộ tờ khai thuế GTGT ( k&egrave;m theo bảng k&ecirc; mua v&agrave;o + b&aacute;n ra ) theo th&aacute;ng, qu&yacute; sắp xếp theo từng năm đ&oacute;ng b&igrave;a</li>\r\n	<li>B&aacute;o c&aacute;o t&igrave;nh h&igrave;nh sử dụng h&oacute;a đơn</li>\r\n	<li>Tập hợp to&agrave;n bộ quyển h&oacute;a đơn GTGT đầu ra đ&atilde; xuất trong thời gian Quyết to&aacute;n (v&iacute; dụ: Quyết to&aacute;n 10 năm th&igrave; chỉ cần mang số liệu của 10 năm đ&oacute;)</li>\r\n	<li>Hồ sơ t&agrave;i sản cố định t&aacute;ch ri&ecirc;ng 1 File</li>\r\n	<li>Hợp đồng mua b&aacute;n đầu ra v&agrave; đầu v&agrave;o, bi&ecirc;n bản đối chiếu c&ocirc;ng nợ c&aacute;c năm. Ch&uacute; &yacute; đ&iacute;nh k&egrave;m HĐ l&agrave; bi&ecirc;n bản giao nhận h&agrave;ng h&oacute;a, thanh l&yacute; hợp đồng.</li>\r\n	<li>Hồ sơ nh&acirc;n sự gồm : Hợp đồng lao động của những nh&acirc;n vi&ecirc;n c&oacute; đ&oacute;ng bảo hiểm x&atilde; hội, nh&acirc;n vi&ecirc;n kh&ocirc;ng đ&oacute;ng bảo hiểm x&atilde; hội nhưng vẫn c&oacute; t&ecirc;n tr&ecirc;n bảng lương.</li>\r\n	<li>Hồ sơ vay vốn ng&acirc;n h&agrave;ng: c&aacute;c hợp đồng vay vốn, hợp đồng bảo l&atilde;nh v&agrave; thư bảo l&atilde;nh của ng&acirc;n h&agrave;ng</li>\r\n	<li>Hồ sơ bảo hiểm x&atilde; hội</li>\r\n	<li>&nbsp;Mẫu 08</li>\r\n	<li>K&egrave;m theo l&agrave; những quyết định tăng lương, quyết định bổ nhiệm, hoặc bất kỳ quyết định n&agrave;o li&ecirc;n quan đến nh&acirc;n sự.</li>\r\n	<li>Bảng định mức sản xuất c&aacute;c năm .</li>\r\n	<li>To&agrave;n bộ phiếu thu, phiếu chi đ&atilde; kẹp chứng từ đầy đủ.</li>\r\n	<li>Sổ s&aacute;ch kế to&aacute;n</li>\r\n	<li>Sổ phụ ng&acirc;n h&agrave;ng.</li>\r\n	<li>Thỏa ước lao động tập thể, quy chế t&agrave;i ch&iacute;nh c&ocirc;ng ty</li>\r\n	<li>Kết xuất to&agrave;n bộ nhật k&yacute; chung, sổ đầu chi ph&iacute; ra file exel.</li>\r\n	<li>Cho k&yacute; t&aacute; đầy đủ chứng từ , sổ s&aacute;ch, bảng lương, đ&oacute;ng b&igrave;a đẹp</li>\r\n	<li>Kế to&aacute;n r&agrave; so&aacute;t kiểm tra lại sổ s&aacute;ch chứng từ, xem c&oacute; khoản chi ph&iacute; n&agrave;o cần loại trừ th&igrave; cho bổ sung sửa lại quyết to&aacute;n thuế Thu nhập doanh nghiệp, thu nhập c&aacute; nh&acirc;n trước khi cơ quan thuế ra quyết định kiểm tra.</li>\r\n	<li>Nộp to&agrave;n bộ khoản nợ thuế đối với cơ quan thuế.</li>\r\n</ul>\r\n\r\n<p><strong>3. Kết luận</strong></p>\r\n\r\n<ul>\r\n	<li>Khi c&aacute;n bộ thuế v&agrave;o thanh tra kiểm tra, kế to&aacute;n d&ugrave; c&oacute; cẩn thận đến đ&acirc;u l&agrave;m tốt &nbsp;th&igrave; sau khi quyết to&aacute;n cũng bị loại ra &iacute;t nhiều chi ph&iacute; dẫn tới truy thu nộp thuế. Đ&oacute; l&agrave; điều hiển nhi&ecirc;n chẳng qua l&agrave; mức phạt như thế n&agrave;o th&ocirc;i. Vậy n&ecirc;n kế to&aacute;n h&atilde;y xử l&yacute; t&igrave;nh huống với c&aacute;n bộ thuế cho thật kh&eacute;o l&eacute;o nhẹ nh&agrave;ng, b&igrave;nh tĩnh tự tin trả lời c&acirc;u hỏi với c&aacute;n bộ thuế thật ch&iacute;nh x&aacute;c v&agrave; đem lại t&iacute;nh ch&iacute;nh x&aacute;c cũng như lợi &iacute;ch cho doanh nghiệp m&igrave;nh.</li>\r\n</ul>\r\n\r\n<p><u><em><strong>Những lưu &yacute; n&ecirc;n l&agrave;m</strong></em></u></p>\r\n\r\n<ul>\r\n	<li>Ph&ograve;ng kiểm tra của c&aacute;c c&aacute;n bộ thu&ecirc;: n&ecirc;n t&aacute;ch ri&ecirc;ng vơi ph&ograve;ng l&agrave;m việc kế to&aacute;n, vừa thỏa m&aacute;i vừa để đề ph&ograve;ng nếu ch&uacute;ng ta cần l&agrave;m bổ sung chế giấy tờ sổ s&aacute;ch cũng thuận tiện hơn.</li>\r\n	<li>Trong qu&aacute; tr&igrave;nh thanh tra kiểm tra n&ecirc;n quan t&acirc;m tới c&aacute;c c&aacute;n bộ thuế: mời nước, mua đồ ăn hoa quả b&aacute;nh kẹo,</li>\r\n</ul>\r\n\r\n<p><strong>Ch&uacute;c c&aacute;c bạn c&oacute; một m&ugrave;a quyết to&aacute;n th&agrave;nh c&ocirc;ng </strong></p>\r\n', '0', 1497367281, 1497409436, NULL, 1),
(74, 38, 209, 1, '<p>Sau kỳ nộp b&aacute;o c&aacute;o t&agrave;i ch&iacute;nh năm kết th&uacute;c, kế to&aacute;n n&ecirc;n gh&eacute;p v&agrave; lưu trữ chứng từ cho khoa học ngăn lắp, gọn g&agrave;ng, thuận tiện cho việc thanh tra kiểm tra.</p>\r\n\r\n<p><strong>1. In to&agrave;n bộ sổ s&aacute;ch tờ khai thuế đ&oacute;ng b&igrave;a v&agrave; k&yacute; t&aacute; đầy đủ.</strong></p>\r\n\r\n<p><strong>2. In chứng từ v&agrave; tiến h&agrave;nh gh&eacute;p</strong></p>\r\n\r\n<ul>\r\n	<li>Chứng từ đầu ra theo thứ tự:</li>\r\n</ul>\r\n\r\n<ol style=\"margin-left:20px\">\r\n	<li>Phiếu thu</li>\r\n	<li>Phiếu hạch to&aacute;n ( nếu c&oacute; )</li>\r\n	<li>H&oacute;a đơn b&aacute;n ra ( k&egrave;m tờ khai đối với h&agrave;ng xuất khẩu nếu c&oacute; )</li>\r\n	<li>Phiếu xuất kho gi&aacute; vốn h&agrave;ng b&aacute;n</li>\r\n	<li>Chứng từ kh&aacute;c li&ecirc;n quan nếu c&oacute; (bi&ecirc;n bản b&agrave;n giao, hợp đồng, &hellip;)</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Chứng từ đầu v&agrave;o theo thứ tự:</li>\r\n</ul>\r\n\r\n<ol style=\"margin-left:20px\">\r\n	<li>Phiếu chi</li>\r\n	<li>Phiếu hạch to&aacute;n ( Nếu c&oacute; )</li>\r\n	<li>H&oacute;a đơn mua v&agrave;o</li>\r\n	<li>Phiếu nhập kho ( &aacute;p dụng cho trường hợp mua h&agrave;ng nhập kho )</li>\r\n	<li>Chứng từ kh&aacute;c c&oacute; li&ecirc;n quan ( Bi&ecirc;n bản b&agrave;n giao, phiếu bảo h&agrave;nh, hợp đồng,&hellip;)</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Chứng từ ng&acirc;n h&agrave;ng: Sắp xếp theo từng ng&acirc;n h&agrave;ng, in to&agrave;n bộ b&aacute;o nợ, b&aacute;o c&oacute; trong phần mềm kế to&aacute;n v&agrave; sắp xếp theo thứ tự:</li>\r\n</ul>\r\n\r\n<ol style=\"margin-left:20px\">\r\n	<li>Kẹp sổ phụ ng&acirc;n h&agrave;ng l&ecirc;n đầu ti&ecirc;n</li>\r\n	<li>Ph&aacute;t sinh c&oacute; hạch to&aacute;n c&ugrave;ng chứng từ gốc ng&acirc;n h&agrave;ng</li>\r\n	<li>Ph&aacute;t sinh nợ hạch to&aacute;n c&ugrave;ng chứng từ gốc ng&acirc;n h&agrave;ng. ( Sắp xếp theo thứ tự ng&agrave;y th&aacute;ng năm)</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Phiếu xuất kho sản xuất ( &aacute;p dụng với đơn vị sản xuất): k&egrave;m c&ugrave;ng định mức sản xuất chi tiết từng lần</li>\r\n	<li>Phiếu nhập &nbsp;kho th&agrave;nh phẩm ( &aacute;p dụng với đơn vị sản xuất): Tạo File ri&ecirc;ng</li>\r\n	<li>T&agrave;i sản cố định: Tạo 1 file ri&ecirc;ng lưu trữ tổng hợp từ năm n&agrave;y sang năm kh&aacute;c. Hồ sơ t&agrave;i sản: phiếu hạch to&aacute;n t&agrave;i sản, Sổ t&agrave;i sản, bi&ecirc;n bản b&agrave;n giao, thẻ t&agrave;i sản, hợp đồng mua b&aacute;n,..</li>\r\n</ul>\r\n\r\n<p><strong>3. C&aacute;ch đ&oacute;ng chứng từ</strong></p>\r\n\r\n<ul>\r\n	<li>Sử dụng tờ b&igrave;a cứng hoặc mua m&aacute;y đ&oacute;ng chứng từ đ&oacute;ng: tạo ra quyển chứng từ theo th&aacute;ng / qu&yacute; t&ugrave;y theo lượng chứng từ, đ&oacute;ng vu&ocirc;ng g&oacute;c cạnh, kh&ocirc;ng th&ograve; thụt, kh&ocirc;ng để chứng từ rơi ra khỏi quyển,</li>\r\n	<li>Sử dụng m&aacute;y khoan hoặc đồ bấm lỗ : tạo lỗ tr&ecirc;n quyển chứng từ, sau đ&oacute; d&ugrave;ng d&acirc;y hoặc đồ d&ugrave;ng văn ph&ograve;ng để ghim chứng từ lại với nhau thật cẩn thận chắc chắn, gọn đẹp.</li>\r\n	<li>Đ&oacute;ng b&igrave;a chứng từ cần ghi đủ nội dung: T&ecirc;n c&ocirc;ng ty, m&atilde; số thuế, t&ecirc;n quyển chứng từ , quyển số, thời gian .</li>\r\n</ul>\r\n\r\n<p><strong>4. Đ&oacute;ng lại cho v&agrave;o th&ugrave;ng carton</strong>, ghi r&otilde; b&ecirc;n ngo&agrave;i năm t&agrave;i ch&iacute;nh. Cất v&agrave;o tủ tr&aacute;nh mưa ẩm mốc.</p>\r\n', '0', 1497452443, 1497676401, NULL, 1),
(75, 37, 210, 1, '<p>Nếu muốn combo nhanh với Riven hiệu quả th&igrave; ngo&agrave;i tập luyện thuần thục vị tướng n&agrave;y ra th&igrave; bạn c&ograve;n phải nắm bắt một số mẹo cũng như thứ tự sử dụng chi&ecirc;u thức sao cho ch&iacute;nh x&aacute;c.</p>\r\n\r\n<p>Trước ti&ecirc;n bạn cần phải học đ&oacute; ch&iacute;nh l&agrave; thao t&aacute;c huỷ động t&aacute;c &quot;thừa&quot;, nghe c&oacute; vẻ rối nhưng thật ra đ&acirc;y l&agrave; những mẹo gi&uacute;p bạn dễ d&agrave;ng thực hiệu chuỗi combo của &nbsp;Riven một c&aacute;ch nhuần nhuyễn đ&oacute;.</p>\r\n\r\n<ul>\r\n	<li>Nguy&ecirc;n l&yacute; như sau: <strong>Q + A (Click chuột ra ngo&agrave;i khoảng kh&ocirc;ng)</strong>&nbsp;+ <strong>Q + A (Click v&agrave;o lại mục ti&ecirc;u)</strong> + <strong>Lặp lại cho tới khi hết Q thứ 3</strong> , c&oacute; thể hiểu v&igrave; sao <strong>bấm A</strong> v&igrave; đơn giản l&agrave; khi bạn đang thực hiện thao t&aacute;c <strong>Q - Tam Bộ Kiếm</strong> th&igrave; khi <strong>click n&uacute;t A</strong> ra<strong> bấm ra khoảng kh&ocirc;ng</strong> th&igrave; bạn đ&atilde; huỷ được động t&aacute;c vươn tay của <strong>Riven khi sắp sử dụng đến Q thứ 2</strong> (bạn c&oacute; thể xem h&igrave;nh minh hoạ b&ecirc;n dưới).</li>\r\n	<li>Việc huỷ động t&aacute;c &quot;thừa&quot; trong game kh&ocirc;ng chỉ &aacute;p dụng với Riven m&agrave; c&ograve;n &aacute;p dụng với tất cả c&aacute;c tướng, thay v&igrave; đứng im tại chỗ v&agrave; click chuột li&ecirc;n tục v&agrave;o mục ti&ecirc;u, th&igrave; bạn n&ecirc;n tập l&agrave;m quen với việc di chuyển nh&acirc;n vật bằng c&aacute;ch click chuột ra khoảng kh&ocirc;ng để &quot;huỷ&quot; động t&aacute;c khi sử dụng một chi&ecirc;u thức n&agrave;o đ&oacute;.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\">&nbsp;<img alt=\"\" src=\"http://pa1.narvii.com/5757/019d8dfcd4311f2118175bbf240e46f4fd5cb3f3_hq.gif\" style=\"height:616px; width:723px\" /></span><br />\r\nHuỷ động t&aacute;c &quot;thừa&quot; của Riven.</p>\r\n\r\n<p>Kết hợp c&aacute;c 2 chi&ecirc;u thức đơn giản với nhau trước để tối đa ho&aacute; thời gian d&ugrave;ng combo của Riven v&agrave; tr&ocirc;ng bạn cũng sẽ rất &quot;ngầu&quot; nữa.</p>\r\n\r\n<ul>\r\n	<li><strong>E + R</strong> : Đơn giản l&agrave; khi bạn thực hiện chi&ecirc;u <strong>E (Anh Dũng)</strong> th&igrave; bạn phải thật nhanh tay lu&ocirc;n <strong>R (Ch&eacute;m Gi&oacute;)</strong> để khi vừa kết th&uacute;c chi&ecirc;u <strong>E</strong> th&igrave; <strong>R</strong> của Riven đ&atilde; được bật, sẵn s&agrave;ng cho c&aacute;c chuỗi combo tiếp theo.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\">&nbsp;<img alt=\"\" src=\"http://embed.gyazo.com/e2ec482236d206db08eddaf284ddd906.gif\" style=\"height:446px; width:800px\" /><br />\r\n<em>Combo E + R cực nhanh của Riven.</em></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\">C&aacute;c chi&ecirc;u thức c&oacute; thể kết hợp nhanh với nhau được đ&oacute; l&agrave;:</span>\r\n\r\n	<ul>\r\n		<li><strong>E (Anh Dũng) + W (K&igrave;nh Lực).</strong></li>\r\n		<li><strong>E (Anh Dũng) + W (K&igrave;nh Lực) + R&igrave;u M&atilde;ng X&agrave;.</strong></li>\r\n		<li><strong>R (Bật - Ch&eacute;m Gi&oacute;) + Tốc Biến, Tốc Biến + R (Ch&eacute;m Gi&oacute;).</strong></li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p>Chuỗi combo phức tạp của Riven:&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>Combo E (Anh Dũng)</strong> + <strong>K&iacute;ch hoạt R&igrave;u M&atilde;ng X&agrave;</strong> + <strong>R (Ch&eacute;m Gi&oacute;)</strong> + <strong>Q (Tam Bộ Kiếm - Lần thứ 3)</strong></li>\r\n</ul>\r\n\r\n<p>Như h&igrave;nh minh hoạ b&ecirc;n dưới Riven đ&atilde; kết hợp lu&ocirc;n cả hai đ&oacute; l&agrave; <strong>E</strong> v&agrave; <strong>R&igrave;u M&atilde;ng X&agrave;</strong> c&ugrave;ng một l&uacute;c, tiếp theo đ&oacute; l&agrave; trong khi đang thao t&aacute;c <strong>R (Ch&eacute;m Gi&oacute;)</strong> th&igrave; bạn cũng đ&atilde; thực hiện xong chi&ecirc;u <strong>Q (Tam Bộ Kiếm - Lần Thứ 3)</strong>.</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"https://www.xemgame.com/data/pictures/xemgame/2014/08/combo_riven_3.gif\" style=\"height:182px; width:243px\" /></span></p>\r\n\r\n<p>Combo <strong>E (Anh Dũng)</strong> + <strong>R (Ch&eacute;m Gi&oacute;)</strong> + <strong>Q (Tam Bộ Kiếm - Lần thứ 3) </strong></p>\r\n\r\n<p>Chuỗi combo n&agrave;y đ&ograve;i hỏi phải thật sự nhanh tay mới c&oacute; thể thực hiện được, bạn n&ecirc;n tập luyện nhiều, lưu &yacute; l&agrave; <strong>R (Ch&eacute;m Gi&oacute;)</strong> phải bật trước đ&oacute; th&igrave; khi bạn thực hiện <strong>R (Ch&eacute;m Gi&oacute;)</strong>&nbsp;sau đ&oacute; <strong>Q (Tam Bộ Kiếm - Lần thứ 3)</strong>&nbsp;ngay lập tức sẽ khiến đối thủ bất ngờ.</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"https://www.xemgame.com/data/pictures/xemgame/2014/08/combo_riven_2.gif\" style=\"height:182px; width:243px\" /></span></p>\r\n\r\n<p><strong>Combo&nbsp;E (Anh Dũng)</strong> -&gt; <strong>K&iacute;ch hoạt R&igrave;u M&atilde;ng X&agrave;</strong> -&gt; <strong>W (K&igrave;nh Lực)</strong> -&gt; <strong>Q (Tam Bộ Kiếm - Lần thứ 3)</strong>, chuỗi combo n&agrave;y thật sự hoa mỹ n&ecirc;n chắc chắn cũng sẽ đ&ograve;i hỏi qu&aacute; tr&igrave;nh tập luyện d&agrave;i, một khi đ&atilde; th&agrave;nh thục rồi th&igrave; việc kết liễu đối phương trong 1s l&agrave; điều bạn ho&agrave;n to&agrave;n c&oacute; thể l&agrave;m được.</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n<img alt=\"\" src=\"https://www.xemgame.com/data/pictures/xemgame/2014/08/combo_riven_1.gif\" /></p>\r\n', '1', 1497457568, 1497675547, 'http://pa1.narvii.com/5757/019d8dfcd4311f2118175bbf240e46f4fd5cb3f3_hq.gif', 1),
(76, 37, 212, 1, '<p><strong>Nigga</strong> nếu dịch s&aacute;t c&oacute; nghĩ l&agrave; &quot;thằng mọi đen&quot;, từ n&agrave;y rất phổ biến tr&ecirc;n thế giới.</p>\r\n\r\n<p>Đối với người da m&agrave;u khi n&oacute;i chuyện với người da m&agrave;u th&igrave; từ n&agrave;y hết sức b&igrave;nh thường, họ gọi nhau như vậy để thể hiện độ th&acirc;n mật giữa 2 người, n&oacute; kh&aacute; giống nghĩ của từ &quot;brother (người anh em)&quot;, nhưng nếu bạn l&agrave; người da trắng m&agrave; n&oacute;i từ n&agrave;y với một người da m&agrave;u lạ mặt hoặc bạn chưa thật sự th&acirc;n với họ th&igrave; nghĩ của từ n&agrave;y ở ho&agrave;n cảnh n&agrave;y hết sức khủng khiếp, n&oacute; c&oacute; &yacute; nghĩa ph&acirc;n biết chủng tộc, ph&acirc;n biệt m&agrave;u da.</p>\r\n', '1', 1497676331, 1497676525, NULL, 1);
INSERT INTO `answers` (`id`, `user_id`, `question_id`, `status`, `answers_text`, `is_anonymous`, `create_time`, `update_time`, `images`, `censor_flag`) VALUES
(77, 38, 216, 1, '<p>Hiện nay c&oacute; nhi&ecirc;u doanh nghiệp trong nước khi thực hiện k&ecirc; khai thuế, ho&agrave;n thuế nhưng chưa nắm chắc được điều kiện được ho&agrave;n thuế v&agrave; thủ tục ho&agrave;n thuế bởi v&igrave; từ ng&agrave;y 1/7/2016, c&aacute;c doanh nghiệp kinh doanh nội địa &ldquo;<strong><em>chỉ được khấu trừ thuế GTGT đầu v&agrave;o, m&agrave; kh&ocirc;ng được ho&agrave;n thuế</em></strong>&rdquo;. B&agrave;i viết n&agrave;y sẽ cung cấp cho c&aacute;c bạn nội dung c&aacute;c điều kiện, hướng dẫn lập thủ tục, c&aacute;c căn cứ ph&aacute;p l&yacute; (đối với những bạn cần hiểu s&acirc;u v&agrave; nghi&ecirc;n cứu chuy&ecirc;n s&acirc;u hơn).</p>\r\n\r\n<ul>\r\n	<li>Căn cứ theo th&ocirc;ng tư 130/2016/TT &ndash; BTC ng&agrave;y 12/8/2016 <em><strong>&ldquo;Hướng dẫn Nghị định số 100/2016/NĐ-CP ng&agrave;y 01 th&aacute;ng 7 năm 2016 của Ch&iacute;nh phủ quy định chi tiết thi h&agrave;nh Luật sửa đổi, bổ sung một số điều của Luật thuế gi&aacute; trị gia tăng, luật thuế ti&ecirc;u thụ đặc biệt v&agrave; Luật quản l&yacute; thuế v&agrave; sửa đổi một số điều tại c&aacute;c th&ocirc;ng tư về thuế&rdquo;</strong></em></li>\r\n	<li>Căn cứ Th&ocirc;ng tư &nbsp;99/2016/TT-BTC &nbsp;ng&agrave;y 29/6/2016 của Bộ t&agrave;i ch&iacute;nh &ldquo;Hướng dẫn về quản l&yacute; ho&agrave;n thuế gi&aacute; trị gia tăng&rdquo;</li>\r\n	<li>Căn cứ &nbsp;th&ocirc;ng tư 156/2013/TT-BTC ng&agrave;y 06/11/2013 của Bộ t&agrave;i ch&iacute;nh &ldquo;Hướng dẫn thi h&agrave;nh một số điều của Luật quản l&yacute; thuế; Luật sửa đổi, bổ sung một số điều của Luật quản l&yacute; thuế v&agrave; nghị định số 83/2013/NĐ-CP ng&agrave;y 22/7/2013 của Ch&iacute;nh Phủ&rdquo;</li>\r\n	<li>Căn cứ Th&ocirc;ng tư 219/2013/TT- BTC ng&agrave;y 31/12/2013 của Bộ t&agrave;i ch&iacute;nh &ldquo;Hướng dẫn thi h&agrave;nh Luật thuế gi&aacute; trị gia tăng v&agrave; Nghị định số 209/2013/NĐ-CP ng&agrave;y 18/12/2013 của Ch&iacute;nh phủ quy định chi tiết v&agrave; hướng dẫn thi h&agrave;nh một số điều luật thuế gi&aacute; trị gia tăng&rdquo;</li>\r\n</ul>\r\n\r\n<p><strong>Trường hợp được ho&agrave;n thuế đối với h&agrave;ng h&oacute;a dịch vụ xuất khẩu quy định như sau:</strong></p>\r\n\r\n<ol>\r\n	<li>Cơ sở kinh doanh trong th&aacute;ng ( đối với trường hợp k&ecirc; khai theo th&aacute;ng), qu&yacute; (đối với trường hợp k&ecirc; khai theo qu&yacute;) c&oacute; h&agrave;ng h&aacute;o dịch vụ xuất khẩu c&oacute; số thuế gi&aacute; trị gia tăng đầu v&agrave;o chưa được khấu trừ từ 300 triệu đồng trở l&ecirc;n th&igrave; được ho&agrave;n thuế gi&aacute; trị gia tăng theo th&aacute;ng (qu&yacute;) trường hợp trong th&aacute;ng (qu&yacute;) c&oacute; số thuế gi&aacute; trị gia tăng đầu v&agrave;o chưa được khấu trừ chưa đủ 300 triệu đồng th&igrave; được kh&aacute;i trừ v&agrave;o th&aacute;ng (qu&yacute;) tiếp theo.</li>\r\n	<ul>\r\n		<li>Cơ sở kinh doanh trong th&aacute;ng (qu&yacute;) vừa c&oacute; h&agrave;ng h&oacute;a, dịch vụ xuất khẩu, vừa c&oacute; h&agrave;ng h&oacute;a dịch vụ b&aacute;n trong nước th&igrave; cơ sở kinh doanh phải hạch to&aacute;n ri&ecirc;ng số thuế GTGT đầu v&agrave;o sử dụng cho sản xuất kinh doanh h&agrave;ng h&oacute;a, dịch vụ xuất khẩu. Trường hợp kh&ocirc;ng hạch to&aacute;n ri&ecirc;ng được th&igrave; số thuế gi&aacute; trị gia tăng đầu v&agrave;o của h&agrave;ng h&oacute;a, dịch vụ xuất khẩu được x&aacute;c định theo tỷ lệ giữa doanh thu của h&agrave;ng h&oacute;a, dich vụ xuất khẩu tr&ecirc;n tổng doanh thu h&agrave;ng h&oacute;a, dịch vụ của c&aacute;c kỳ khai thuế Gi&aacute; trị gia tăng t&iacute;nh từ kỳ khai thuế tiếp theo kỳ ho&agrave;n thuế liền trước đến kỳ đề nghị ho&agrave;n thuế hiện tại.</li>\r\n		<li>Số thuế gi&aacute; trị gia tăng đầu v&agrave;o của h&agrave;ng h&oacute;a, dịch vụ xuất khẩu (bao gồm: số thuế gi&aacute; trị gia tăng đầu v&agrave;o hạch to&aacute;n ri&ecirc;ng được v&agrave; số thuế gi&aacute; trị gia tăng đầu v&agrave;o được ph&acirc;n bổ theo tỷ lệ n&ecirc;u tr&ecirc;n). Nếu sau khi b&ugrave; trừ số thuế gi&aacute; trị gia tăng phải nộp của h&agrave;ng h&oacute;a, dịch vụ ti&ecirc;u thụ trong nước c&ograve;n lại từ 300 triệu đồng trở l&ecirc;n th&igrave; cơ sở kinh doanh được ho&agrave;n thuế cho h&agrave;ng h&oacute;a, dịch vụ xuất khẩu. Số thuế gi&aacute; trị gia tăng được ho&agrave;n của h&agrave;ng h&oacute;a, dịch vụ xuất khẩu kh&ocirc;ng vượt qu&aacute; doanh thu của h&agrave;ng h&oacute;a, dịch vụ xuất khẩu nh&acirc;n với 10%.</li>\r\n		<li>Đối tượng được ho&agrave;n thuế trong một số trường hợp xuất khẩu như sau: Đối với trường hợp ủy th&aacute;c xuất khẩu, l&agrave; cơ sở c&oacute; h&agrave;ng h&oacute;a ủy th&aacute;c xuất khẩu; Đối với gia c&ocirc;ng chuyển tiếp l&agrave; cơ sở k&yacute; hợp đồng gia c&ocirc;ng xuất khẩu với ph&iacute;a nước ngo&agrave;i; Đối với h&agrave;ng h&oacute;a xuất khẩu để thực hiện c&ocirc;ng tr&igrave;nh x&acirc;y dựng ở nước ngo&agrave;i, l&agrave; doanh nghiệp c&oacute; h&agrave;ng h&oacute;a, vật tư xuất khẩu thực hiện c&ocirc;ng tr&igrave;nh x&acirc;y dựng ở nước ngo&agrave;i; Đối với h&agrave;ng h&oacute;a xuất khẩu tại chỗ l&agrave; cơ sở kinh doanh c&oacute; h&agrave;ng h&oacute;a xuất khẩu tại chỗ.</li>\r\n	</ul>\r\n	<li>Cơ&nbsp; sở kinh doanh kh&ocirc;ng được ho&agrave;n thuế đối với trường hợp h&agrave;ng h&oacute;a nhập khẩu sau đ&oacute; xuất khẩu, h&agrave;ng h&oacute;a xuất khẩu kh&ocirc;ng thực hiện việc xuất khẩu tại địa b&agrave;n hoạt động hải quan theo quy định của Luật Hải quan, nghị định số: 01/2015/NĐ-CP ng&agrave;y 02/01/2015 của Ch&iacute;nh phủ quy định &ldquo;Chi tiết thi h&agrave;nh phạm vi địa b&agrave;n hoạt động Hải Quan, tr&aacute;ch nhiệm phối hợp trong ph&ograve;ng chống bu&ocirc;n lậu, vận chuyển tr&aacute;i ph&eacute;p h&agrave;ng h&oacute;a qua bi&ecirc;n giới v&agrave; văn bản hướng dẫn&rdquo;.</li>\r\n	<li>Cơ quan Thuế thực hiện ho&agrave;n thuế trước, kiểm tra sau đối với người nộp thuế sản xuất h&agrave;ng h&oacute;a xuất khẩu kh&ocirc;ng bị xử l&yacute; đối với h&agrave;nh vi bu&ocirc;n lậu, vận chuyển tr&aacute;i ph&eacute;p h&agrave;ng h&oacute;a qua bi&ecirc;n giới, trốn thuế, gian lận thuế, gian lận thương mại trong thời gian 2 năm li&ecirc;n tục; Người nộp thuế kh&ocirc;ng thuộc đối tượng rủi ro cao theo quy định của luật quản l&yacute; thuế v&agrave; c&aacute;c văn bản hướng dẫn thi h&agrave;nh.</li>\r\n</ol>\r\n\r\n<p><strong><em><u>Một bộ hồ sơ ho&agrave;n thuế bao gồm:</u></em></strong></p>\r\n\r\n<p>Căn cứ theo điều 10 th&ocirc;ng tư 99/2016/TT/BTC ng&agrave;y 29/06/2016 c&oacute; hiệu lực từ ng&agrave;y 13/8/2016 hồ sơ ho&agrave;n thuế đối với h&agrave;ng h&oacute;a dịch vụ xuất khẩu như sau:</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Giấy đề nghị ho&agrave;n trả khoản thu NSNN theo Mẫu số 01/ĐNHT <em>(Ban h&agrave;nh k&egrave;m theo th&ocirc;ng tư 156/2013/TT-BTC).</em></li>\r\n	<li>Hợp đồng mua b&aacute;n, tờ khai hải quan, chứng từ thanh to&aacute;n qua ng&acirc;n h&agrave;ng.</li>\r\n	<li>Đi k&egrave;m Tờ khai Thuế Gi&aacute; trị gia tăng th&aacute;ng (qu&yacute;) phải thể hiện số thuế gi&aacute; trị gia tăng xin ho&agrave;n.</li>\r\n	<li>Bảng k&ecirc; hồ sơ xuất nhập khẩu h&agrave;ng h&oacute;a, dịch vụ theo Mẫu số: <strong>01-3/ĐNHT</strong> <em>(Ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 28/2011/TT-BTC ng&agrave;y 28/02/2011 của Bộ T&agrave;i ch&iacute;nh).</em></li>\r\n</ul>\r\n\r\n<p><strong><u>Ch&uacute; &yacute;</u></strong>:</p>\r\n\r\n<ul>\r\n	<li>Tất cả c&aacute;c h&oacute;a đơn tr&ecirc;n 20 triệu bắt buộc phải thanh to&aacute;n bằng chuyển khoản, phải c&oacute; chứng từ thanh to&aacute;n đi k&egrave;m.</li>\r\n	<li>Tất cả c&aacute;c b&aacute;o c&oacute; ng&acirc;n h&agrave;ng thể hiện ph&aacute;t sinh tiền về t&agrave;i khoản phải c&oacute; đầy chứng từ gốc của ng&acirc;n h&agrave;ng.</li>\r\n	<li>Trường hợp ho&agrave;n thuế lần đầu c&aacute;c bạn ch&uacute; &yacute; lập b&aacute;o c&aacute;o t&agrave;i ch&iacute;nh tại thời điểm xin ho&agrave;n thuế.</li>\r\n</ul>\r\n', '0', 1497714332, 1497842244, NULL, 1),
(78, 38, 217, 1, '<ul>\r\n	<li>Đối với doanh nghiệp mới th&agrave;nh lập c&aacute;c bạn phải nộp tờ khai thuế m&ocirc;n b&agrave;i cho cơ quan thuế sau đ&oacute; mới nộp tiền.</li>\r\n	<li>Đối với doanh nghiệp đang hoạt động kinh doanh đ&atilde; khai thuế m&ocirc;n b&agrave;i, th&igrave; kh&ocirc;ng phải k&ecirc; khai tờ khai thuế m&ocirc;n b&agrave;i cho năm tiếp theo ( &aacute;p dụng cho trường hợp kh&ocirc;ng thay đổi mức đ&oacute;ng thuế m&ocirc;n b&agrave;i)</li>\r\n	<li>Trường hợp c&oacute; thay đổi vốn điều lệ dẫn tới thay đổi mức đ&oacute;ng thuế m&ocirc;n b&agrave;i th&igrave; phải l&agrave;m tờ khai bổ sung.</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;Chi tiết mức đ&oacute;ng căn cứ theo quy định tại Nghị định 139/2016/NĐ-Cp v&agrave; được hướng dẫn cụ thể tại th&ocirc;ng tư 302/2016/TT-BTC như sau:</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"width:160px\">\r\n			<p style=\"text-align:center\"><strong>Vốn điều lệ</strong></p>\r\n			</td>\r\n			<td style=\"width:160px\">\r\n			<p style=\"text-align:center\"><strong>Mức thuế m&ocirc;n b&agrave;i</strong></p>\r\n			</td>\r\n			<td style=\"width:160px\">\r\n			<p style=\"text-align:center\"><strong>Bậc</strong></p>\r\n			</td>\r\n			<td style=\"width:160px\">\r\n			<p style=\"text-align:center\"><strong>M&atilde; tiểu mục</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:160px\">\r\n			<p style=\"text-align:center\">Tr&ecirc;n 10 tỷ đồng</p>\r\n			</td>\r\n			<td style=\"width:160px\">\r\n			<p style=\"text-align:right\">3.000.000 đ/ năm</p>\r\n			</td>\r\n			<td style=\"width:160px\">\r\n			<p style=\"text-align:center\">Bậc 1</p>\r\n			</td>\r\n			<td style=\"width:160px\">\r\n			<p style=\"text-align:center\">2862</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:160px\">\r\n			<p style=\"text-align:center\">Từ 10 tỷ đồng trở xuống</p>\r\n			</td>\r\n			<td style=\"width:160px\">\r\n			<p style=\"text-align:right\">2.000.000 đ/ năm</p>\r\n			</td>\r\n			<td style=\"width:160px\">\r\n			<p style=\"text-align:center\">Bậc 2</p>\r\n			</td>\r\n			<td style=\"width:160px\">\r\n			<p style=\"text-align:center\">2863</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:160px\">\r\n			<p style=\"text-align:center\">Chi nh&aacute;nh, văn ph&ograve;ng đại diện , địa điểm kinh doanh, đơn vị sự nghiệp, tổ chức kinh tế kh&aacute;c</p>\r\n			</td>\r\n			<td style=\"width:160px\">\r\n			<p style=\"text-align:right\">1.000.000 đ/ năm</p>\r\n			</td>\r\n			<td style=\"width:160px\">\r\n			<p style=\"text-align:center\">Bậc 3</p>\r\n			</td>\r\n			<td style=\"width:160px\">\r\n			<p style=\"text-align:center\">2864</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Hạch to&aacute;n thuế m&ocirc;n b&agrave;i theo Th&ocirc;ng tư 133 v&agrave; Th&ocirc;ng tư 200</li>\r\n</ol>\r\n\r\n<p style=\"margin-left:40px\">a. Theo th&ocirc;ng tư 133</p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li>Nợ TK 6422: Chi ph&iacute;&nbsp; quản l&yacute; doanh nghiệp</li>\r\n	<li>C&oacute; TK 3338: C&aacute;c loại thuế kh&aacute;c</li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px\">b. Theo th&ocirc;ng tư 200</p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li>Nợ TK 6425: Thuế, ph&iacute; v&agrave; lệ ph&iacute;</li>\r\n	<li>C&oacute; TK 3338: C&aacute;c loại thuế kh&aacute;c</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;2. Khi nộp thuế m&ocirc;n b&agrave;i.</p>\r\n\r\n<ul style=\"margin-left: 40px;\">\r\n	<li>Nợ TK 3338: Số tiền thuế m&ocirc;n b&agrave;i phải nộp</li>\r\n	<li>C&oacute; 111/112 : Số tiền nộp</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 1498021306, 1498368878, NULL, 1),
(79, 37, 215, 1, '<blockquote>C&ocirc;ng thức t&iacute;nh diện t&iacute;ch tam gi&aacute;c thường l&agrave;:&nbsp;<strong>S = (A X H)/ 2</strong></blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 1498056320, 1498083627, NULL, 1),
(80, 37, 214, 1, '<p><strong>First Name</strong>&nbsp; &nbsp; &nbsp; = T&ecirc;n của bạn&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>V&iacute; dụ: Trung, T&acirc;n, Việt, Lộc</p>\r\n</blockquote>\r\n\r\n<p><strong>Middle Name</strong>&nbsp; = T&ecirc;n đệm của bạn<br />\r\n<strong>Last Name</strong>&nbsp; &nbsp; &nbsp; = Family Name = Họ của bạn</p>\r\n\r\n<blockquote>\r\n<p>V&iacute; dụ: Ho&agrave;ng, Phạm, Nguyễn, Trần</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 1498056859, 1498095533, NULL, 1),
(81, 23, 222, 1, '<p><span style=\"background-color:#ffffff; color:#1d2129\">H&atilde;y đưa cho mỗi người tr&ecirc;n tr&aacute;i đất một con g&agrave; m&aacute;i!</span></p>\r\n\r\n<p><span style=\"background-color:#ffffff; color:#1d2129\">75% d&acirc;n số thấy rằng con g&agrave; n&agrave;y ch&eacute;n rất ngon. Thế n&ecirc;n, họ nướng con g&agrave;, tận hưởng một bữa đ&atilde; đời, rồi sau đ&oacute; lại tiếp tục đ&oacute;i v&agrave; h&ocirc;m sau.</span></p>\r\n\r\n<p><span style=\"background-color:#ffffff; color:#1d2129\">24% d&acirc;n số t&iacute;nh ra rằng con g&agrave; m&aacute;i sẽ đẻ trứng mỗi ng&agrave;y. Thế n&ecirc;n, họ tận hưởng việc x&agrave;i trứng của n&oacute;, trong v&agrave;i năm, đến khi con g&agrave; gi&agrave; đi v&agrave; chết.</span></p>\r\n\r\n<p><span style=\"background-color:#ffffff; color:#1d2129\">1% d&acirc;n số t&igrave;m ra giải ph&aacute;p rằng: nếu họ cho con g&agrave; m&aacute;i cặp với 1 con g&agrave; trống, th&igrave; sau đ&oacute; v&agrave;i năm, hai con g&agrave; sẽ tạo ra một đ&agrave;n g&agrave; đủ lớn để cung cấp tr&uacute;ng, thịt thoải m&aacute;i cho nhu cầu ăn, v&agrave; b&aacute;n nữa.</span></p>\r\n\r\n<p><span style=\"background-color:#ffffff; color:#1d2129\">V&iacute; dụ nhỏ đ&oacute; cho thấy sự kh&aacute;c biệt gi&agrave;u ngh&egrave;o nằm ở việc sử dụng nguồn lực. Vậy n&ecirc;n, nếu ph&acirc;n bổ lại của cải tr&ecirc;n thế giới cho những con người với tư duy v&agrave; kiến thức kh&ocirc;ng đổi, sau một thời gian, mọi thứ sẽ về lại đ&uacute;ng quy luật của n&oacute; m&agrave; th&ocirc;i.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 1498086202, 1498086222, NULL, 1),
(86, 31, 243, 1, '<p>Theo l&yacute; giải của c&aacute;c nh&agrave; khoa học th&igrave; ma kh&ocirc;ng tồn tại, nhưng tr&aacute;i đất c&ograve;n rất nhiều điều b&iacute; ẩn m&agrave; chưa c&oacute; lời giải đ&aacute;p. Hy vọng trong tương lai ch&uacute;ng ta sẽ biết được rằng những hiện tượng si&ecirc;u nhi&ecirc;n kia l&agrave; do đ&acirc;u v&agrave; ma c&oacute; tồn tại thực sự hay kh&ocirc;ng.</p>\r\n', '0', 1498669054, 1498743161, NULL, 1),
(87, 38, 219, 1, '<p>Ng&agrave;y nhuận của năm nhuận dương lịch được t&iacute;nh v&agrave;o th&aacute;ng 2 của năm nhuận.</p>\r\n\r\n<p>Tr&aacute;i Đất của ch&uacute;ng ta quay trọn một v&ograve;ng xung quanh mặt trời mất 365 ng&agrave;y v&agrave; 6 &nbsp;giờ. Năm dương lịch c&oacute; số nguy&ecirc;n l&agrave; 365 ng&agrave;y. Như vậy, một năm dương lịch c&ograve;n thừa 6 giờ v&agrave; 4 năm dồn lại thừa 24 giờ, bằng một ng&agrave;y.</p>\r\n\r\n<p>V&igrave; thế n&ecirc;n cứ 4 năm sẽ c&oacute; th&ecirc;m 1 ng&agrave;y nhuận v&agrave; năm đ&oacute; sẽ c&oacute; 366 ng&agrave;y, ng&agrave;y đ&oacute; sẽ rơi v&agrave;o ng&agrave;y 29 th&aacute;ng 2</p>\r\n\r\n<p>Để biết xem năm đ&oacute; c&oacute; phải năm nhuận hay kh&ocirc;ng, c&aacute;c bạn lấy năm đ&oacute; chia cho 4, chia hết cho 4 ch&iacute;nh l&agrave; năm nhuận.&nbsp;</p>\r\n', '0', 1498697528, 1498756674, NULL, 1),
(88, 38, 220, 1, '<p>&nbsp;</p>\r\n\r\n<p>Diện t&iacute;ch h&igrave;nh tr&ograve;n được t&iacute;nh theo c&ocirc;ng thức: B&igrave;nh phương b&aacute;n k&iacute;nh h&igrave;nh tr&ograve;n nh&acirc;n với PI<br />\r\n<img alt=\"Công thức tính chu vi hình tròn và diện tích hình tròn\" src=\"http://file.vforum.vn/hinh/2015/12/dien-tich-hinh-tron.jpg\" title=\"dien tich hinh tron\" /><br />\r\nTrong đ&oacute;:</p>\r\n\r\n<ul>\r\n	<li>r: B&aacute;n k&iacute;nh h&igrave;nh tr&ograve;n</li>\r\n	<li><em>&pi;</em>&nbsp;= Hằng số PI bằng 3.14</li>\r\n</ul>\r\n', '0', 1498697912, 1498743170, 'http://file.vforum.vn/hinh/2015/12/dien-tich-hinh-tron.jpg', 1),
(89, 38, 250, 1, '<p>Để chi ph&iacute; thưởng tết dương lịch h&agrave;ng năm được t&iacute;nh chi ph&iacute; hợp l&yacute; hợp lệ hồ sơ cần c&oacute;:</p>\r\n\r\n<ol>\r\n	<li>Quy định cụ thể mức nhận thưởng tr&ecirc;n quy chế t&agrave;i ch&iacute;nh c&ocirc;ng ty</li>\r\n	<li>C&oacute; quyết định chi thưởng tết dương lịch</li>\r\n	<li>C&oacute; chữ k&yacute; hoặc chuyển khoản bảng chi thưởng của c&aacute;n bộ c&ocirc;ng nh&acirc;n vi&ecirc;n.</li>\r\n</ol>\r\n\r\n<p><strong>Mẫu quyết định chi thưởng tết dương lịch cụ thể như sau:</strong></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://quickrep.vn/uploads/contents/images/262566f2d92bb268.jpg\" style=\"height:718px; width:582px\" /></p>\r\n', '0', 1498742286, 1499835191, NULL, 1),
(91, 40, 248, 1, '<p>M&igrave;nh c&oacute; thể t&oacute;m tắt một số th&ocirc;ng tin về bệnh <strong>Care (S&agrave;i sốt)</strong> cho bạn</p>\r\n\r\n<p>- L&agrave; bệnh truyền nhiễm do virus Care g&acirc;y ra v&agrave; rất nguy hiểm tr&ecirc;n ch&oacute;</p>\r\n\r\n<p>- Bệnh gặp&nbsp;ở mọi lứa tuổi</p>\r\n\r\n<p>- C&aacute;c triệu chứng hay gặp: sốt cao, ho khạc, rỉ mắt nhiều mắt t&egrave;m nhem, rỉ mũi nhiều, nốt s&agrave;i bụng bẹn, đi ph&acirc;n đen s&aacute;p m&ugrave;a tối, ch&oacute; gầy nhanh, giai đoạn cuối c&oacute; triệu chứng co giật li&ecirc;n tục</p>\r\n\r\n<p>- Do bệnh virus n&ecirc;n c&aacute;c kh&ocirc;ng c&oacute; thuốc điều trị hiệu quả cho bệnh. biện ph&aacute;p hiệu quả nhất l&agrave; sử dụng vaccin ph&ograve;ng bệnh khi ch&oacute; được 6 tuần tuổi lặp lại c&aacute;c mũi v&agrave;o tuần thứ 9 v&agrave; 12</p>\r\n\r\n<p>- Khi ch&oacute; mắc Carevirus việc điều trị th&agrave;nh c&ocirc;ng rất kh&oacute; khăn,n&oacute; li&ecirc;n quan đến sức đề kh&aacute;ng của c&aacute;c giống ch&oacute;. Nhưng để hiệu quả cao nhất cần thực hiện theo nguy&ecirc;n tắc điều trị sau:</p>\r\n\r\n<ul>\r\n	<li>Tăng cường sức đề kh&aacute;ng của con vật( truyền dịch,thuốc bổ)</li>\r\n	<li>Sử dụng c&aacute;c thuốc giảm triệu chứng(sốt, rỉ mũi,cầm ti&ecirc;u chảy,an thần)</li>\r\n	<li>Sử dụng thuốc kh&aacute;ng sinh phổ rộng tr&aacute;nh nhiễm tr&ugrave;ng kế ph&aacute;t</li>\r\n	<li>Truyền kh&aacute;ng huyết thanh (nếu c&oacute; điều kiện).</li>\r\n</ul>\r\n', '0', 1498806903, 1498848850, NULL, 1),
(92, 40, 245, 1, '<p>Ch&agrave;o bạn:</p>\r\n\r\n<p>Thời gian mang thai trung b&igrave;nh của ch&oacute; l&agrave; 60 ng&agrave;y, khoảng giao động hay gặp nhất l&agrave; từ 58 đến 63 ng&agrave;y.</p>\r\n\r\n<p>Thời gian mang thai của ch&oacute; phụ thuộc nhiều v&agrave;o k&iacute;ch thước con vật v&agrave; số lượng con c&oacute; trong bụng (chửa &iacute;t thai sẽ mang thai l&acirc;u v&agrave; ngược lại)</p>\r\n', '0', 1498807351, 1498848523, NULL, 1),
(93, 44, 249, 1, '<p>64 tỉnh</p>\r\n', '0', 1498958869, 1499064007, NULL, 1),
(95, 40, 256, 1, '<p>Xin ch&agrave;o.</p>\r\n\r\n<p>Cảm ơn c&acirc;u hỏi của bạn.</p>\r\n\r\n<p>Ch&oacute; ăn &iacute;t hoặc bỏ ăn rất hay gặp trong c&aacute;c trường hợp giai đoạn đầu của rất nhiều bệnh.</p>\r\n\r\n<p>Bạn cần theo d&otilde;i c&aacute;c triệu chứng kh&aacute;c, nếu t&igrave;nh trạng bỏ ăn ,biếng ăn k&eacute;o d&agrave;i bạn h&atilde;y hỏi ch&uacute;ng chi tiết ch&uacute;ng t&ocirc;i&nbsp;hoặc đưa c&uacute;n đến c&aacute;c trung t&acirc;m th&uacute; y tr&ecirc;n th&uacute; cảnh để được điều trị sớm&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 1498992033, 1499064123, NULL, 1),
(96, 40, 253, 1, '<p>Ch&agrave;o bạn.</p>\r\n\r\n<p>Thời gian g&acirc;y m&ecirc; sẽ phụ thuộc v&agrave;o thời gian phẫu thuật. hầu hết c&aacute;c ca phẫu thuật sau khi ho&agrave;n th&agrave;nh thời gian tỉnh m&ecirc; từ 10 đến 30p.</p>\r\n\r\n<p>Những trường hợp d&agrave;i hơn do qu&aacute;&nbsp;liều g&acirc;y m&ecirc;&nbsp;</p>\r\n\r\n<p>Bạn cấn theo d&otilde;i nhiệt độ, sự h&ocirc; hấp đều đặn của m&egrave;o.</p>\r\n\r\n<p>Nếu tr&ecirc;n 1h m&egrave;o ko tỉnh hơn h&atilde;y đưa m&egrave;o lại trung t&acirc;m th&uacute; y nơi triệt sản để cấp cứu</p>\r\n', '0', 1498992325, 1499065056, NULL, 1),
(97, 40, 252, 1, '<p>Ch&agrave;o bạn.</p>\r\n\r\n<p>Bạn mi&ecirc;u tả m&egrave;o nh&agrave; bạn đ&oacute; l&agrave; c&aacute;c&nbsp;triệu chứng bệnh l&yacute; giai đoạn đầu của bệnh. N&oacute; ko điển h&igrave;nh của 1 bệnh n&ecirc;n bạn cần hỏi kỹ hơn để m&igrave;nh tư vấn th&ecirc;m hoặc bạn h&atilde;y mang qua 1 ph&ograve;ng kh&aacute;m th&uacute; y để được kh&aacute;m v&agrave; điều trị sớm</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 1498992916, 1499065987, NULL, 1),
(98, 40, 251, 1, '<p>Ch&agrave;o bạn.</p>\r\n\r\n<p>M&igrave;nh cần bạn theo d&otilde;i th&ecirc;m t&igrave;nh trang đi ngo&agrave;i tr&ecirc;n c&uacute;n.2 th&aacute;ng tuổi c&uacute;n rất hay gặp một số bệnh truyền nhiễm. N&ocirc;n v&agrave; đi ngooaif l&agrave; phổ biến nhất đ&oacute; l&agrave; vi&ecirc;m ruột ti&ecirc;u chảy. c&ograve;n nếu c&uacute;n ko đi vệ sinh được hoặc kh&oacute; bạn n&ecirc;n xem x&eacute;t t&igrave;nh trạng tắc ruột c&oacute; do t&aacute;o b&oacute;n, lồng ruột hoặc giun qu&aacute; nhiều tạo b&uacute;i giun..c&aacute;c trường hợp bệnh c&oacute; một phương ph&aacute;p sử l&yacute; ri&ecirc;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 1498993238, 1499066005, NULL, 1),
(99, 40, 254, 1, '<p>Ch&agrave;o bạn&nbsp;</p>\r\n\r\n<p>M&egrave;o nh&agrave; bạn c&oacute; c&aacute;c triệu chứng của bệnh vi&ecirc;m ruột ti&ecirc;u chảy.</p>\r\n\r\n<p>bạn cần xem lại lịch vaccin để loại trừ bệnh giảm bạch cầu, xem lại lịch tẩy giun v&agrave; chế độ ăn uống gần đ&acirc;y.</p>\r\n\r\n<p>c&aacute;c trường hợp n&ocirc;n v&agrave; đi ngoiaf chưa d&otilde; nguy&ecirc;n nh&acirc;n can thiệp cần b&ugrave; nước v&agrave; điện giải truyền dịch , ti&ecirc;m thuốc bổ,giảm nhu động ruột, v&agrave; d&ugrave;ng kh&aacute;ng sinh đặc trị đường ruột.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 1498993509, 1499066015, NULL, 1);
INSERT INTO `answers` (`id`, `user_id`, `question_id`, `status`, `answers_text`, `is_anonymous`, `create_time`, `update_time`, `images`, `censor_flag`) VALUES
(100, 38, 278, 1, '<p>Mỗi một đơn vị hoạt động đều cần ban h&agrave;nh một quy ch&ecirc; t&agrave;i ch&iacute;nh mục đ&iacute;ch đem lại l&agrave;&nbsp;hoạt động t&agrave;i ch&iacute;nh của C&ocirc;ng ty mạng lại hiệu quả v&agrave; ph&ugrave; hợp với quy định của ph&aacute;p luật. Sau đ&acirc;y&nbsp;l&agrave; mẫu quy chế bao gồm c&aacute;c điều khoản của một c&ocirc;ng ty TNHH.</p>\r\n\r\n<p style=\"text-align:center\"><strong>QUY CHẾ T&Agrave;I CH&Iacute;NH</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>C&Ocirc;NG TY TNHH PNG VIỆT NAM</strong></p>\r\n\r\n<p style=\"margin-left:-35.45pt; text-align:center\">(Ban h&agrave;nh K&egrave;m theo quyết định số: 01/QĐ-PNG</p>\r\n\r\n<p style=\"margin-left:-35.45pt; text-align:center\">ng&agrave;y 02/01/2017 của Ban Gi&aacute;m đốc C&ocirc;ng ty)</p>\r\n\r\n<p style=\"margin-left:-35.45pt; text-align:center\"><strong><u>CHƯƠNG I</u></strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>NHỮNG QUY ĐỊNH CHUNG</strong></p>\r\n\r\n<p><strong>Điều 1.</strong> <strong>Điều khoản chung</strong></p>\r\n\r\n<p>- C&ocirc;ng ty TNHH PNG VIỆT NAM (sau đ&acirc;y gọi tắt l&agrave; C&ocirc;ng ty) được th&agrave;nh lập, tổ chức v&agrave; hoạt động theo Luật Doanh nghiệp của nước Cộng ho&agrave; x&atilde; hội chủ nghĩa Việt Nam;</p>\r\n\r\n<p>- C&ocirc;ng ty c&oacute; tư c&aacute;ch ph&aacute;p nh&acirc;n đầy đủ, tự chủ về mặt t&agrave;i ch&iacute;nh v&agrave; chịu tr&aacute;ch nhiệm hữu hạn trước ph&aacute;p luật về c&aacute;c khoản nợ trong phạm vi số vốn của C&ocirc;ng ty;</p>\r\n\r\n<p>- C&ocirc;ng ty được mở t&agrave;i khoản giao dịch bằng đồng Việt Nam v&agrave; bằng ngoại tệ tại c&aacute;c Ng&acirc;n h&agrave;ng, tổ chức t&iacute;n dụng;</p>\r\n\r\n<p>- C&aacute;c đơn vị, c&aacute; nh&acirc;n c&oacute; tr&aacute;ch nhiệm quản l&yacute; tốt t&agrave;i sản, vật tư, tiền vốn được giao v&agrave; chịu tr&aacute;ch nhiệm bồi ho&agrave;n thiệt hại nếu l&agrave;m thất tho&aacute;t;</p>\r\n\r\n<p>- Nguy&ecirc;n tắc chung trong quản l&yacute; thu chi: Mọi hoạt động thu, chi tại c&aacute;c đơn vị phải tu&acirc;n thủ theo quy định của ph&aacute;p luật, C&ocirc;ng ty v&agrave; phải được quản l&yacute; chặt chẽ:</p>\r\n\r\n<p>+ C&aacute;c khoản thu, chi ph&aacute;t sinh bằng ngoại tệ phải tu&acirc;n thủ quy định về quản l&yacute; ngoại tệ của nh&agrave; nước đồng thời phải quy đổi ra tiền VNĐ theo Quy định của ph&aacute;p luật hiện h&agrave;nh.</p>\r\n\r\n<p>+ C&aacute;c khoản thu, chi phải đảm bảo đ&uacute;ng đối tượng, đ&uacute;ng chế độ quy định về ph&acirc;n cấp, quy tr&igrave;nh, thủ tục, định mức, ho&aacute; đơn chứng từ, hồ sơ. Đơn vị, c&aacute; nh&acirc;n lập chứng từ thu chi khống, thu chi kh&ocirc;ng đ&uacute;ng quy định v&agrave; người quyết định thu, chi sai chế độ phải chịu tr&aacute;ch nhiệm trước ph&aacute;p luật v&agrave; bồi ho&agrave;n thiệt hại (nếu c&oacute;).</p>\r\n\r\n<p><strong>Điều 2. Quyền quản l&yacute; t&agrave;i ch&iacute;nh của C&ocirc;ng ty</strong></p>\r\n\r\n<p>- Sử dụng vốn của C&ocirc;ng ty để phục vụ c&aacute;c nhu cầu về sản xuất, kinh doanh theo nguy&ecirc;n tắc bảo to&agrave;n vốn v&agrave; sinh lời.</p>\r\n\r\n<p>- Nhượng b&aacute;n hoặc cho thu&ecirc; những t&agrave;i sản kh&ocirc;ng c&ograve;n ph&ugrave; hợp với điều kiện sản xuất kinh doanh hoặc chưa sử dụng hết c&ocirc;ng suất v&agrave; thanh l&yacute; t&agrave;i sản đ&atilde; hết gi&aacute; trị sử dụng.</p>\r\n\r\n<p>- C&ocirc;ng ty trực tiếp vay vốn ng&acirc;n h&agrave;ng, c&aacute;c tổ chức t&iacute;n dụng hoặc bảo l&atilde;nh, ủy quyền cho c&aacute;c đơn vị trực thuộc được quan hệ trực tiếp với ng&acirc;n h&agrave;ng.</p>\r\n\r\n<p>- C&ocirc;ng ty c&oacute; c&aacute;c quyền kh&aacute;c về t&agrave;i ch&iacute;nh theo Điều lệ C&ocirc;ng ty v&agrave; theo quy định của ph&aacute;p luật c&oacute; li&ecirc;n quan.</p>\r\n\r\n<p><strong>Điều 3. Nghĩa vụ quản l&yacute; t&agrave;i ch&iacute;nh của C&ocirc;ng ty</strong></p>\r\n\r\n<p>- Thực hiện đ&uacute;ng chế độ về quản l&yacute; vốn, t&agrave;i sản, ph&acirc;n chia c&aacute;c quỹ, hạch to&aacute;n, thống k&ecirc;, chế độ kiểm to&aacute;n v&agrave; c&aacute;c chế độ kh&aacute;c do ph&aacute;p luật v&agrave; Điều lệ C&ocirc;ng ty quy định; chịu tr&aacute;ch nhiệm về t&iacute;nh ch&iacute;nh x&aacute;c của c&aacute;c b&aacute;o c&aacute;o t&agrave;i ch&iacute;nh của C&ocirc;ng ty.</p>\r\n\r\n<p>- Bảo to&agrave;n v&agrave; ph&aacute;t triển vốn.</p>\r\n\r\n<p>- Thực hiện c&aacute;c nghĩa vụ kh&aacute;c theo quy định của ph&aacute;p luật, Điều lệ C&ocirc;ng ty v&agrave; Quy chế n&agrave;y</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><strong><u>CHƯƠNG II</u></strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>QUẢN L&Yacute; V&Agrave; SỬ DỤNG VỐN</strong></p>\r\n\r\n<p><strong>Điều 4.</strong> <strong>Vốn điều lệ </strong></p>\r\n\r\n<p>- Vốn điều lệ l&agrave; số vốn do th&agrave;nh vi&ecirc;n g&oacute;p v&agrave; được ghi v&agrave;o Điều lệ C&ocirc;ng ty. Vốn điều lệ của C&ocirc;ng ty được x&aacute;c định tại thời điểm th&agrave;nh lập l&agrave;: 1.000.000đ&ocirc; la Mỹ (Một triệu đ&ocirc; la Mỹ), tương đương 16.000.000.000 đồng (Mười s&aacute;u tỷ đồng).</p>\r\n\r\n<p>- Vốn điều lệ của C&ocirc;ng ty được tăng l&ecirc;n khi c&oacute; nghị quyết của hội đồng th&agrave;nh vi&ecirc;n.</p>\r\n\r\n<p>- Vốn điều lệ của C&ocirc;ng ty chỉ được sử dụng cho mục đ&iacute;ch hoạt động sản xuất, kinh doanh, thực hiện c&aacute;c h&igrave;nh thức đầu tư t&agrave;i ch&iacute;nh.</p>\r\n\r\n<p><strong>Điều 5. Bảo to&agrave;n vốn</strong></p>\r\n\r\n<p>C&ocirc;ng ty c&oacute; tr&aacute;ch nhiệm bảo to&agrave;n v&agrave; ph&aacute;t triển vốn bằng c&aacute;c biện ph&aacute;p sau đ&acirc;y:</p>\r\n\r\n<p>- Thực hiện đ&uacute;ng chế độ quản l&yacute; sử dụng vốn, t&agrave;i sản v&agrave; chế độ kế to&aacute;n theo quy định của Nh&agrave; nước, Điều lệ C&ocirc;ng ty v&agrave; Quy chế n&agrave;y.</p>\r\n\r\n<p>- C&aacute;c biện ph&aacute;p kh&aacute;c về bảo to&agrave;n vốn tại C&ocirc;ng ty theo quy định của ph&aacute;p luật.</p>\r\n\r\n<p><strong>Điều 6.</strong> <strong>Huy động vốn</strong></p>\r\n\r\n<p>- Vay vốn:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>C&ocirc;ng ty được vay vốn của c&aacute;c tổ chức t&iacute;n dụng, c&aacute;c ph&aacute;p nh&acirc;n kh&aacute;c th&ocirc;ng qua việc k&yacute; kết hợp đồng để vay vốn ngắn hạn, trung v&agrave; d&agrave;i hạn.</p>\r\n\r\n<p>Trong trường hợp đặc biệt, C&ocirc;ng ty được huy động vốn của c&aacute;c đối tượng kh&aacute;c để phục vụ hoạt động sản xuất, kinh doanh, với mức l&atilde;i suất kh&ocirc;ng qu&aacute; 1,5 lần mức l&atilde;i suất cho vay c&ugrave;ng thời điểm của ng&acirc;n h&agrave;ng thương mại c&oacute; quan hệ giao dịch với C&ocirc;ng ty.</p>\r\n\r\n<p>- Thu&ecirc; t&agrave;i ch&iacute;nh:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>C&ocirc;ng ty được quyền huy động vốn th&ocirc;ng qua h&igrave;nh thức thu&ecirc; t&agrave;i ch&iacute;nh để đầu tư t&agrave;i sản cố định.</p>\r\n\r\n<p><strong>Điều 7. </strong><strong>Đầu tư vốn ra ngo&agrave;i C&ocirc;ng ty</strong></p>\r\n\r\n<p>- C&ocirc;ng ty được quyền sử dụng vốn, t&agrave;i sản thuộc quyền quản l&yacute; của C&ocirc;ng ty để đầu tư ra ngo&agrave;i C&ocirc;ng ty. Việc đầu tư ra ngo&agrave;i C&ocirc;ng ty phải tu&acirc;n thủ c&aacute;c quy định của ph&aacute;p luật v&agrave; đảm bảo nguy&ecirc;n tắc c&oacute; hiệu quả, bảo to&agrave;n v&agrave; ph&aacute;t triển vốn, tăng thu nhập v&agrave; kh&ocirc;ng l&agrave;m ảnh hưởng đến mục ti&ecirc;u hoạt động của C&ocirc;ng ty.</p>\r\n\r\n<p>- C&aacute;c h&igrave;nh thức đầu tư ra ngo&agrave;i C&ocirc;ng ty:</p>\r\n\r\n<p>+ G&oacute;p vốn để th&agrave;nh lập C&ocirc;ng ty cổ phần, C&ocirc;ng ty tr&aacute;ch nhiệm hữu hạn, C&ocirc;ng ty hợp danh, C&ocirc;ng ty li&ecirc;n doanh, g&oacute;p vốn hợp đồng hợp t&aacute;c kinh doanh kh&ocirc;ng h&igrave;nh th&agrave;nh ph&aacute;p nh&acirc;n mới;</p>\r\n\r\n<p>+ Mua cổ phần hoặc g&oacute;p vốn tại c&aacute;c C&ocirc;ng ty cổ phần, C&ocirc;ng ty tr&aacute;ch nhiệm hữu hạn, C&ocirc;ng ty li&ecirc;n doanh, C&ocirc;ng ty hợp danh;</p>\r\n\r\n<p>+ Mua lại một C&ocirc;ng ty kh&aacute;c;</p>\r\n\r\n<p>+ Mua c&ocirc;ng tr&aacute;i, tr&aacute;i phiếu;</p>\r\n\r\n<p>+ C&aacute;c h&igrave;nh thức đầu tư kh&aacute;c theo quy định của ph&aacute;p luật.&nbsp;</p>\r\n\r\n<p>- Thẩm quyền quyết định dự &aacute;n đầu tư ra ngo&agrave;i theo Điều lệ của C&ocirc;ng ty</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><strong><u>CHƯƠNG III</u></strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>QUẢN L&Yacute;, SỬ DỤNG T&Agrave;I SẢN TẠI C&Ocirc;NG TY</strong></p>\r\n\r\n<p><strong>Điều 8. T&agrave;i sản cố định</strong></p>\r\n\r\n<p>T&agrave;i sản cố định của C&ocirc;ng ty bao gồm t&agrave;i sản cố định hữu h&igrave;nh, t&agrave;i sản cố định v&ocirc; h&igrave;nh.</p>\r\n\r\n<p>- C&ocirc;ng ty c&oacute; quyền thay đổi cơ cấu t&agrave;i sản phục vụ cho việc ph&aacute;t triển sản xuất kinh, doanh của C&ocirc;ng ty.</p>\r\n\r\n<p>- Việc mua sắm, đầu tư x&acirc;y dựng mới, cải tạo mở rộng t&agrave;i sản cố định phải tu&acirc;n thủ theo quy định hiện h&agrave;nh của Nh&agrave; nước v&agrave; của C&ocirc;ng ty, đồng thời đảm bảo hiệu quả kinh tế khả thi được thẩm định từ việc đầu tư.</p>\r\n\r\n<p><strong>Điều 9. Việc tr&iacute;ch, sử dụng tiền khấu hao t&agrave;i sản cố định.</strong></p>\r\n\r\n<p>- Tất cả t&agrave;i sản cố định hiện c&oacute; của C&ocirc;ng ty đều phải tr&iacute;ch khấu hao. Đối với c&aacute;c t&agrave;i sản cố định đ&atilde; khấu hao hết gi&aacute; trị nhưng vẫn đang sử dụng v&agrave;o hoạt động sản xuất, kinh doanh th&igrave; kh&ocirc;ng phải tr&iacute;ch khấu hao nữa;</p>\r\n\r\n<p>- Chi ph&iacute; khấu hao t&agrave;i sản cố định được hạch to&aacute;n theo theo chuẩn mực kế to&aacute;n Việt Nam;</p>\r\n\r\n<p>- Đối với những t&agrave;i sản cố định chưa khấu hao hết đ&atilde; hư hỏng, mất m&aacute;t phải x&aacute;c định nguy&ecirc;n nh&acirc;n, tr&aacute;ch nhiệm của tập thể, c&aacute; nh&acirc;n để xử l&yacute;, bồi thường. HĐTV quyết định mức bồi thường. Ch&ecirc;nh lệch giữa gi&aacute; trị c&ograve;n lại của t&agrave;i sản với tiền bồi thường v&agrave; gi&aacute; trị thu hồi được hạch to&aacute;n v&agrave;o chi ph&iacute; kh&aacute;c của C&ocirc;ng ty;</p>\r\n\r\n<p>- To&agrave;n bộ vốn do tr&iacute;ch khấu hao t&agrave;i sản cố định được d&ugrave;ng để t&aacute;i đầu tư, thay thế, đổi mới t&agrave;i sản v&agrave; sử dụng vốn cho nhu cầu kinh doanh. Tổng Gi&aacute;m đốc C&ocirc;ng ty sử dụng vốn khấu hao, c&aacute;c loại vốn v&agrave; quỹ để đầu tư x&acirc;y dựng cơ bản theo kế hoạch đ&atilde; được HĐTV ph&ecirc; duyệt;</p>\r\n\r\n<p><strong>Điều 11.</strong> <strong>Thanh l&yacute;, nhượng b&aacute;n t&agrave;i sản cố định v&agrave; c&aacute;c khoản đầu tư d&agrave;i hạn</strong></p>\r\n\r\n<p>- C&ocirc;ng ty chủ động nhượng b&aacute;n, thanh l&yacute; để thu hồi vốn đối với t&agrave;i sản lạc hậu kỹ thuật, t&agrave;i sản hư hỏng kh&ocirc;ng phục hồi được, t&agrave;i sản đ&atilde; hết thời gian sử dụng, t&agrave;i sản kh&ocirc;ng c&oacute; nhu cầu sử dụng hoặc kh&ocirc;ng sử dụng được v&agrave; c&aacute;c khoản đầu tư d&agrave;i hạn kh&ocirc;ng c&oacute; nhu cầu tiếp tục đầu tư;</p>\r\n\r\n<p>Tổng Gi&aacute;m đốc quyết định c&aacute;c phương &aacute;n thanh l&yacute;, nhượng b&aacute;n t&agrave;i sản cố định c&oacute; gi&aacute; trị c&ograve;n lại nhỏ hơn 500 triệu đồng. HĐTV c&oacute; thể uỷ quyền cho Tổng Gi&aacute;m đốc quyết định nhượng b&aacute;n, thanh l&yacute; t&agrave;i sản thuộc thẩm quyền của HĐTV;</p>\r\n\r\n<p>C&aacute;c phương &aacute;n lớn hơn mức thuộc thẩm quyền HĐTV, th&igrave; c&aacute;c th&agrave;nh vi&ecirc;n HĐTV họp b&agrave;n, quyết định do chủ tịch HĐTV k&iacute;.</p>\r\n\r\n<p>- Khi nhượng b&aacute;n, thanh l&yacute; t&agrave;i sản, vật tư phải lập Hội đồng thanh l&yacute; để x&aacute;c định t&igrave;nh trạng kỹ thuật v&agrave; gi&aacute; trị.</p>\r\n\r\n<p>- Hạch to&aacute;n nguy&ecirc;n gi&aacute;, gi&aacute; trị c&ograve;n lại v&agrave; chi ph&iacute; thanh l&yacute; nhượng b&aacute;n t&agrave;i sản phải tu&acirc;n thủ chế độ kế to&aacute;n hiện h&agrave;nh.</p>\r\n\r\n<p>-&nbsp; C&aacute;c khoản đầu tư d&agrave;i hạn do HĐTV quyết định.</p>\r\n\r\n<p><strong>Điều 12.</strong> <strong>Xử l&yacute; tổn thất t&agrave;i sản</strong></p>\r\n\r\n<p>Khi xảy ra tổn thất t&agrave;i sản (ch&aacute;y nổ, mất m&aacute;t, thiếu hụt, hư hỏng, k&eacute;m phẩm chất, l&agrave;m giảm gi&aacute; trị của t&agrave;i sản) C&ocirc;ng ty phải tiến h&agrave;nh x&aacute;c định nguy&ecirc;n nh&acirc;n, mức độ tổn thất, quy tr&aacute;ch nhiệm v&agrave; lập phương &aacute;n xử l&yacute; theo c&aacute;c nguy&ecirc;n tắc sau:</p>\r\n\r\n<p>- Đối với những tổn thất do nguy&ecirc;n nh&acirc;n chủ quan th&igrave; c&aacute; nh&acirc;n, tập thể g&acirc;y ra tổn thất phải bồi thường;</p>\r\n\r\n<p>+ Mức thiệt hại dưới 500 triệu đồng: Tổng Gi&aacute;m đốc quyết định xử l&yacute;;</p>\r\n\r\n<p>+ Mức thiệt hại từ 500 triệu đồng trở l&ecirc;n: do HĐTV quyết định xử l&yacute; theo đề nghị của Tổng Gi&aacute;m đốc;</p>\r\n\r\n<p>- Đối với những tổn thất do nguy&ecirc;n nh&acirc;n kh&aacute;ch quan, bất khả kh&aacute;ng th&igrave; th&ocirc;ng b&aacute;o cho đơn vị bảo hiểm xử l&yacute; bồi thường theo hợp đồng bảo hiểm;</p>\r\n\r\n<p>- Gi&aacute; trị t&agrave;i sản tổn thất sau khi đ&atilde; b&ugrave; đắp bằng tiền bồi thường của c&aacute; nh&acirc;n, tập thể, của tổ chức bảo hiểm nếu thiếu được b&ugrave; đắp bằng quỹ dự ph&ograve;ng t&agrave;i ch&iacute;nh của C&ocirc;ng ty. Trường hợp quỹ dự ph&ograve;ng t&agrave;i ch&iacute;nh kh&ocirc;ng đủ b&ugrave; đắp th&igrave; phần thiếu được Tổng Gi&aacute;m đốc tr&igrave;nh HĐTV phương &aacute;n xử l&yacute;.</p>\r\n\r\n<p><strong>Điều 13. Kiểm k&ecirc; t&agrave;i sản</strong></p>\r\n\r\n<p>C&ocirc;ng ty phải tổ chức kiểm k&ecirc;, x&aacute;c định số lượng t&agrave;i sản (t&agrave;i sản cố định v&agrave; đầu tư d&agrave;i hạn, t&agrave;i sản lưu động v&agrave; đầu tư ngắn hạn), đối chiếu c&aacute;c khoản c&ocirc;ng nợ phải trả, phải thu khi kho&aacute; sổ kế to&aacute;n để lập b&aacute;o c&aacute;o t&agrave;i ch&iacute;nh năm. Đối với t&agrave;i sản thừa, thiếu, kh&ocirc;ng thu hồi được, nợ qu&aacute; hạn cần x&aacute;c định r&otilde; nguy&ecirc;n nh&acirc;n, tr&aacute;ch nhiệm của những người c&oacute; li&ecirc;n quan v&agrave; x&aacute;c định mức bồi thường vật chất theo quy định.</p>\r\n\r\n<p>Việc kiểm k&ecirc; t&agrave;i sản phải được thực hiện hằng năm &iacute;t nhất một lần. Ngo&agrave;i ra, khi c&oacute; y&ecirc;u cầu từ HĐTV, Ban kiểm so&aacute;t th&igrave; việc kiểm k&ecirc; phải được tiến h&agrave;nh theo kế hoạch.</p>\r\n\r\n<p><strong>Điều 14. Đ&aacute;nh gi&aacute; lại gi&aacute; trị t&agrave;i sản</strong></p>\r\n\r\n<p>Kiểm k&ecirc; đ&aacute;nh gi&aacute; lại gi&aacute; trị t&agrave;i sản theo quy định của Nh&agrave; nước.</p>\r\n\r\n<p>Việc kiểm k&ecirc;, đ&aacute;nh gi&aacute; lại gi&aacute; trị t&agrave;i sản phải theo đ&uacute;ng c&aacute;c quy định hiện h&agrave;nh của Nh&agrave; nước. C&aacute;c khoản ch&ecirc;nh lệch tăng hoặc giảm gi&aacute; trị t&agrave;i sản do đ&aacute;nh gi&aacute; lại được ghi tăng hoặc giảm vốn điều lệ của C&ocirc;ng ty.</p>\r\n\r\n<p>Hội đồng nhượng b&aacute;n t&agrave;i sản, Hội đồng thanh l&yacute; t&agrave;i sản, Hội đồng kiểm k&ecirc; t&agrave;i sản, Hội đồng nghiệm thu, Hội đồng đ&aacute;nh gi&aacute; lại t&agrave;i sản do Chủ tịch HĐTV hoặc Tổng Gi&aacute;m đốc quyết định trong phạm vi thẩm quyền.</p>\r\n\r\n<p><strong>Điều 15.</strong>&nbsp; <strong>Quản l&yacute; h&agrave;ng tồn kho</strong></p>\r\n\r\n<p>- H&agrave;ng tồn kho l&agrave; h&agrave;ng ho&aacute; mua về để b&aacute;n c&ograve;n tồn kho, nguy&ecirc;n liệu, vật liệu, c&ocirc;ng cụ, dụng cụ tồn kho hoặc đ&atilde; mua đang đi tr&ecirc;n đường, sản phẩm dở dang trong qu&aacute; tr&igrave;nh sản xuất, sản phẩm ho&agrave;n th&agrave;nh nhưng chưa nhập kho, th&agrave;nh phẩm tồn kho, th&agrave;nh phẩm đang gửi b&aacute;n v&agrave; h&agrave;ng h&oacute;a tại kho người b&aacute;n chưa nhận về kho.</p>\r\n\r\n<p>- C&ocirc;ng ty c&oacute; tr&aacute;ch nhiệm kiểm tra, xử l&yacute; ngay những h&agrave;ng ho&aacute; tồn kho k&eacute;m phẩm chất, ứ đọng, chậm lu&acirc;n chuyển để thu hồi vốn.</p>\r\n\r\n<p>- Cuối kỳ kế to&aacute;n, khi gi&aacute; gốc h&agrave;ng tồn kho ghi tr&ecirc;n sổ kế to&aacute;n cao hơn gi&aacute; trị thuần c&oacute; thể thực hiện được th&igrave; C&ocirc;ng ty phải tr&iacute;ch lập dự ph&ograve;ng giảm gi&aacute; h&agrave;ng tồn kho theo quy định hiện h&agrave;nh.</p>\r\n\r\n<p><strong>Điều 16.</strong> <strong>Quản l&yacute; c&aacute;c khoản nợ phải thu</strong></p>\r\n\r\n<p>- C&ocirc;ng ty tổ chức quản l&yacute; nợ phải thu kh&oacute; đ&ograve;i theo c&aacute;c quy định của ph&aacute;p luật hiện h&agrave;nh về quản l&yacute;, xử l&yacute; nợ tồn đọng, mở sổ theo d&otilde;i c&aacute;c khoản nợ theo từng đối tượng nợ, thường xuy&ecirc;n ph&acirc;n loại c&aacute;c khoản nợ (nợ lu&acirc;n chuyển, nợ kh&oacute; đ&ograve;i, nợ kh&ocirc;ng c&oacute; khả năng thu hồi), đối chiếu c&ocirc;ng nợ, đ&ocirc;n đốc thu hồi nợ.</p>\r\n\r\n<p>- C&ocirc;ng ty được quyền b&aacute;n c&aacute;c khoản nợ phải thu để thu hồi vốn theo quy định của ph&aacute;p luật, gồm cả khoản nợ phải thu trong hạn, nợ phải thu kh&oacute; đ&ograve;i, nợ phải thu kh&ocirc;ng đ&ograve;i được. Gi&aacute; b&aacute;n c&aacute;c khoản nợ do hai b&ecirc;n thoả thuận.</p>\r\n\r\n<p>- Nợ phải thu kh&oacute; đ&ograve;i l&agrave; c&aacute;c khoản nợ qu&aacute; hạn thanh to&aacute;n theo quy định ghi tr&ecirc;n hợp đồng hoặc c&aacute;c cam kết kh&aacute;c hoặc chưa đến hạn thanh to&aacute;n nhưng đối tượng thiếu nợ kh&oacute; c&oacute; khả năng thanh to&aacute;n. C&ocirc;ng ty phải tr&iacute;ch lập quỹ dự ph&ograve;ng đối với khoản nợ phải thu kh&oacute; đ&ograve;i theo quy định hiện h&agrave;nh.</p>\r\n\r\n<p>- Đối với c&aacute;c khoản nợ kh&ocirc;ng c&oacute; khả năng thu hồi, C&ocirc;ng ty c&oacute; tr&aacute;ch nhiệm xử l&yacute;. Số nợ kh&ocirc;ng c&oacute; khả năng thu hồi được sau khi trừ tiền bồi thường của c&aacute; nh&acirc;n, tập thể c&oacute; li&ecirc;n quan được b&ugrave; đắp bằng c&aacute;c khoản dự ph&ograve;ng nợ phải thu kh&oacute; đ&ograve;i, quỹ dự ph&ograve;ng t&agrave;i ch&iacute;nh. Nếu c&ograve;n thiếu th&igrave; được Tổng Gi&aacute;m đốc tr&igrave;nh HĐTV quyết định xử l&yacute;.</p>\r\n\r\n<p>- Tổng Gi&aacute;m đốc chịu tr&aacute;ch nhiệm trước HĐTV về c&aacute;c khoản nợ phải thu của C&ocirc;ng ty. Khi k&yacute; hợp đồng phải t&iacute;nh to&aacute;n khả năng thanh to&aacute;n, thời hạn thanh to&aacute;n v&agrave; hiệu quả kinh tế của từng hợp đồng.</p>\r\n\r\n<p>- C&aacute;c tổn thất do kh&ocirc;ng thu hồi nợ kịp thời, đầy đủ, do nguy&ecirc;n nh&acirc;n chủ quan g&acirc;y ra, c&aacute; nh&acirc;n, tập thể li&ecirc;n quan vi phạm phải bồi thường. HĐTV quyết định mức bồi thường hoặc ủy quyền cho Tổng Gi&aacute;m đốc quyết định.</p>\r\n\r\n<p>- Xử l&yacute; c&aacute;c khoản nợ kh&oacute; đ&ograve;i phải c&oacute; đủ căn cứ t&agrave;i liệu chứng minh, tổng hợp v&agrave; giải tr&igrave;nh trong b&aacute;o c&aacute;o t&agrave;i ch&iacute;nh h&agrave;ng năm. Số c&ocirc;ng nợ thực sự kh&ocirc;ng đ&ograve;i được đ&atilde; được xử l&yacute;, kế to&aacute;n phải tiếp tục theo d&otilde;i tr&ecirc;n sổ kế to&aacute;n (ngo&agrave;i bảng c&acirc;n đối kế to&aacute;n) để khi thu được nợ phải hạch to&aacute;n v&agrave;o thu nhập của C&ocirc;ng ty.</p>\r\n\r\n<p><strong>Điều 17.</strong> <strong>C&ocirc;ng nợ tạm ứng</strong></p>\r\n\r\n<p>- Tạm ứng l&agrave; việc ứng trước một khoản tiền cho c&aacute;n bộ c&ocirc;ng nh&acirc;n vi&ecirc;n nhằm giải quyết c&aacute;c c&ocirc;ng việc ph&aacute;t sinh thường xuy&ecirc;n hoặc giải quyết một vụ việc cụ thể n&agrave;o đ&oacute; đ&atilde; được L&atilde;nh đạo đơn vị ph&ecirc; duyệt.</p>\r\n\r\n<p>- Bộ phận, c&aacute; nh&acirc;n tạm ứng chỉ được chi ti&ecirc;u tiền đ&atilde; tạm ứng theo đ&uacute;ng mục đ&iacute;ch v&agrave; nội dung c&ocirc;ng việc đ&atilde; được ph&ecirc; duyệt.</p>\r\n\r\n<p>- Đối với khoản tạm ứng mang t&iacute;nh chất thường xuy&ecirc;n như: chi ph&iacute; xuất nhập khẩu, chi ph&iacute; tiếp kh&aacute;ch, chi ph&iacute; mua c&ocirc;ng cụ dụng cụ, thiết bị thay thế sửa chữa,... Trong v&ograve;ng 1 tuần, sau khi c&oacute; chứng từ c&aacute;c khoản chi thực tế đ&atilde; ph&aacute;t sinh, ph&ograve;ng (bộ phận) tạm ứng tiền lập Giấy đề nghị thanh to&aacute;n để quyết to&aacute;n số đ&atilde; tiền tạm ứng.</p>\r\n\r\n<p>- Đối với khoản tạm ứng cho một c&ocirc;ng việc cụ thể, căn cứ dự to&aacute;n được duyệt hoặc từng c&ocirc;ng việc ph&aacute;t sinh đ&atilde; được l&atilde;nh đạo đơn vị đồng &yacute;, c&aacute; nh&acirc;n (bộ phận) thực hiện tiến h&agrave;nh c&aacute;c thủ tục tạm ứng tiền. Sau khi c&ocirc;ng việc đ&atilde; ho&agrave;n tất, chậm nhất l&agrave; 30 ng&agrave;y c&aacute; nh&acirc;n (bộ phận) đ&atilde; tạm ứng phải l&agrave;m thủ tục thanh quyết to&aacute;n tạm ứng.</p>\r\n\r\n<p>- Kế to&aacute;n quản l&yacute; c&ocirc;ng nợ c&oacute; tr&aacute;ch nhiệm thường xuy&ecirc;n theo d&otilde;i, kiểm tra, r&agrave; so&aacute;t, thu thập đầy đủ chứng từ thanh to&aacute;n c&ocirc;ng nợ hợp l&yacute; v&agrave; hợp lệ theo quy định hiện h&agrave;nh. Đồng thời đ&ocirc;n đốc việc tạm ứng, thanh to&aacute;n tiền cho nh&agrave; cung cấp theo hợp đồng hoặc theo đề nghị được Ban gi&aacute;m đốc ph&ecirc; duyệt.</p>\r\n\r\n<p>- C&aacute;c đối tượng c&oacute; biểu hiện d&acirc;y dưa c&ocirc;ng nợ th&igrave; phải giải quyết dứt điểm c&ocirc;ng nợ cũ mới được tiếp tục tạm ứng mới. Trường hợp d&acirc;y dưa c&ocirc;ng nợ qu&aacute; 01 th&aacute;ng ph&ograve;ng kế to&aacute;n phải b&aacute;o c&aacute;o Trưởng bộ phận đ&oacute;&nbsp;xử l&yacute;, nếu qu&aacute; 02 th&aacute;ng phải b&aacute;o c&aacute;o Ban Gi&aacute;m đốc C&ocirc;ng ty.</p>\r\n\r\n<p>- Trường hợp ph&aacute;t hiện người tạm ứng chiếm đoạt tiền tạm ứng, Ph&ograve;ng T&agrave;i ch&iacute;nh - Kế to&aacute;n phải b&aacute;o b&aacute;o ngay cho l&atilde;nh đạo đơn vị để xử l&yacute; kịp thời.</p>\r\n\r\n<p><strong>Điều 18.</strong> <strong>Quản l&yacute; tiền mặt tại quỹ</strong></p>\r\n\r\n<p>- Đơn vị được chủ động thu, chi bằng tiền mặt theo đ&uacute;ng chế độ quy định của C&ocirc;ng ty. Mọi khoản thu, chi bằng tiền mặt phải đ&uacute;ng đối tượng v&agrave; phải lập phiếu thu, phiếu chi. Nghi&ecirc;m cấm h&agrave;nh vi thủ quỹ chi tiền mặt khi chưa c&oacute; phiếu chi;</p>\r\n\r\n<p>- Kế to&aacute;n quỹ tiền mặt phải chịu tr&aacute;ch nhiệm bảo quản an to&agrave;n tiền mặt tại quỹ. K&eacute;t đựng tiền phải để tại nơi an to&agrave;n, đảm bảo ph&ograve;ng ch&aacute;y chữa ch&aacute;y tốt, tr&aacute;nh ẩm mốc, nước tr&agrave;n,... Khi tiền mặt tồn quỹ bị mất trộm c&aacute;c phải lập ngay bi&ecirc;n bản đồng thời b&aacute;o c&aacute;o với cơ quan C&ocirc;ng an v&agrave; l&atilde;nh đạo C&ocirc;ng ty.</p>\r\n\r\n<p>- Khi kết th&uacute;c năm, Ph&ograve;ng kế to&aacute;n &ndash; t&agrave;i ch&iacute;nh phải tiến h&agrave;nh kiểm quỹ tiền mặt, lập bi&ecirc;n bản v&agrave; đối chiếu số liệu giữa thực tế v&agrave; sổ s&aacute;ch.</p>\r\n\r\n<p><strong>Điều 19.</strong> <strong>Quản l&yacute; tiền gửi ng&acirc;n h&agrave;ng</strong></p>\r\n\r\n<p>- C&ocirc;ng ty được ph&eacute;p chủ động mở một hay nhiều t&agrave;i khoản giao dịch (VNĐ, ngoại tệ) tại c&aacute;c ng&acirc;n h&agrave;ng để phục vụ cho hoạt động sản xuất, kinh doanh.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><strong>CHƯƠNG IV</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>QUẢN L&Yacute; DOANH THU, CHI PH&Iacute; V&Agrave; KẾT QUẢ</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>HOẠT ĐỘNG KINH DOANH</strong></p>\r\n\r\n<p><strong>Điều 20. Quản l&yacute; doanh thu v&agrave; thu nhập kh&aacute;c</strong></p>\r\n\r\n<p>Doanh thu của C&ocirc;ng ty bao gồm: doanh thu từ hoạt động kinh doanh ch&iacute;nh, doanh thu từ hoạt động t&agrave;i ch&iacute;nh v&agrave; thu nhập hợp ph&aacute;p kh&aacute;c.</p>\r\n\r\n<p>- Doanh thu hoạt động kinh doanh th&ocirc;ng thường l&agrave; to&agrave;n bộ số tiền phải thu ph&aacute;t sinh trong kỳ từ việc b&aacute;n sản phẩm, h&agrave;ng ho&aacute;, cung cấp dịch vụ của C&ocirc;ng ty. Doanh thu b&aacute;n h&agrave;ng v&agrave; cung cấp dịch vụ: l&agrave; to&agrave;n bộ tiền b&aacute;n sản phẩm, h&agrave;ng ho&aacute;, cung ứng dịch vụ,... sau khi trừ (-) c&aacute;c khoản giảm gi&aacute; h&agrave;ng ho&aacute;, h&agrave;ng b&aacute;n bị trả lại (c&oacute; chứng từ hợp lệ), được kh&aacute;ch h&agrave;ng chấp nhận thanh to&aacute;n (kh&ocirc;ng ph&acirc;n biệt đ&atilde; thu tiền hay chưa thu tiền).</p>\r\n\r\n<p>- Doanh thu từ c&aacute;c hoạt động t&agrave;i ch&iacute;nh bao gồm: c&aacute;c khoản thu ph&aacute;t sinh từ tiền bản quyền; cho thu&ecirc; t&agrave;i sản của C&ocirc;ng ty; tiền l&atilde;i từ việc cho vay vốn; l&atilde;i tiền gửi; l&atilde;i b&aacute;n h&agrave;ng trả chậm; l&atilde;i cho thu&ecirc; t&agrave;i ch&iacute;nh; ch&ecirc;nh lệch l&atilde;i do b&aacute;n ngoại tệ, ch&ecirc;nh lệch tỉ gi&aacute; ngoại tệ, ch&ecirc;nh lệch l&atilde;i chuyển nhượng vốn v&agrave; lợi nhuận được chia từ việc đầu tư ra ngo&agrave;i C&ocirc;ng ty.</p>\r\n\r\n<p>- Thu nhập kh&aacute;c: l&agrave; c&aacute;c khoản thu từ hoạt động kh&ocirc;ng thường xuy&ecirc;n theo chế độ quy định hiện h&agrave;nh như: thu tiền bảo hiểm được bồi thường, c&aacute;c khoản nợ phải trả nhưng chủ nợ kh&ocirc;ng c&ograve;n, thu từ việc thanh l&yacute; nhượng b&aacute;n t&agrave;i sản cố định, thu tiền phạt kh&aacute;ch h&agrave;ng vi phạm hợp đồng v&agrave; c&aacute;c khoản thu kh&aacute;c.</p>\r\n\r\n<p>- To&agrave;n bộ doanh thu ph&aacute;t sinh trong kỳ phải c&oacute; c&aacute;c h&oacute;a đơn, chứng từ hợp lệ chứng minh v&agrave; phản &aacute;nh đầy đủ trong sổ kế to&aacute;n của đơn vị v&agrave; C&ocirc;ng ty theo chế độ kế to&aacute;n hiện h&agrave;nh.</p>\r\n\r\n<p><strong>Điều 21.</strong> <strong>Chi ph&iacute; hoạt động kinh doanh</strong>.</p>\r\n\r\n<p>Chi ph&iacute; sản xuất, kinh doanh bao gồm: Chi ph&iacute; sản xuất, kinh doanh, chi ph&iacute; lưu th&ocirc;ng, chi ph&iacute; hoạt động t&agrave;i ch&iacute;nh v&agrave; c&aacute;c chi ph&iacute; kh&aacute;c.</p>\r\n\r\n<p>- C&ocirc;ng ty phải x&acirc;y dựng, ban h&agrave;nh v&agrave; tổ chức thực hiện c&aacute;c định mức kinh tế - kỹ thuật ph&ugrave; hợp với đặc điểm kinh tế - kỹ thuật ng&agrave;nh nghề kinh doanh, m&ocirc; h&igrave;nh tổ chức quản l&yacute;, tr&igrave;nh độ trang bị của C&ocirc;ng ty.</p>\r\n\r\n<p>- Thường xuy&ecirc;n theo d&otilde;i, ph&acirc;n t&iacute;ch chi ph&iacute; sản xuất kinh doanh nhằm ph&aacute;t hiện những kh&acirc;u yếu, k&eacute;m trong quản l&yacute;, những yếu tố l&agrave;m tăng chi ph&iacute;, l&agrave;m tăng gi&aacute; th&agrave;nh sản phẩm để c&oacute; giải ph&aacute;p khắc phục kịp thời.</p>\r\n\r\n<p>- Việc ghi nhận chi ph&iacute; ph&aacute;t sinh phải đảm bảo chế độ kế to&aacute;n hiện h&agrave;nh v&agrave; theo quy định về chi ph&iacute; của C&ocirc;ng ty.</p>\r\n\r\n<p><strong>Điều 22. Chi ph&iacute; v&agrave; gi&aacute; th&agrave;nh.</strong></p>\r\n\r\n<p>- Tổng gi&aacute; th&agrave;nh to&agrave;n bộ sản phẩm h&agrave;ng h&oacute;a, chi ph&iacute; dịch vụ ti&ecirc;u thụ trong kỳ (hoặc gi&aacute; th&agrave;nh h&agrave;ng h&oacute;a b&aacute;n ra) bao gồm: gi&aacute; th&agrave;nh sản phẩm, h&agrave;ng h&oacute;a xuất ti&ecirc;u thụ trong kỳ (hoặc gi&aacute; vốn h&agrave;ng h&oacute;a b&aacute;n ra); chi ph&iacute; quản l&yacute; C&ocirc;ng ty ph&aacute;t sinh trong kỳ; chi ph&iacute; b&aacute;n h&agrave;ng ph&aacute;t sinh trong kỳ.</p>\r\n\r\n<p>- Nguy&ecirc;n tắc v&agrave; phương ph&aacute;p x&aacute;c định gi&aacute; th&agrave;nh sản phẩm, chi ph&iacute; dịch vụ theo quy định sau:</p>\r\n\r\n<p>Gi&aacute; th&agrave;nh to&agrave;n bộ sản phẩm, dịch vụ đ&atilde; ti&ecirc;u thụ gồm:</p>\r\n\r\n<p>+ Chi ph&iacute; về nguy&ecirc;n liệu, vật liệu, nhi&ecirc;n liệu v&agrave; động lực sử dụng trực tiếp cho sản xuất sản phẩm, dịch vụ: Tổng Gi&aacute;m đốc C&ocirc;ng ty ph&ecirc; duyệt hệ thống định mức ti&ecirc;u hao vật tư. Gi&aacute; vật tư được ph&ecirc; duyệt dựa theo gi&aacute; thị trường dựa tr&ecirc;n yếu tố: chất lượng v&agrave; hợp l&iacute;.</p>\r\n\r\n<p>+ C&aacute;c khoản phải trả người lao động trực tiếp sản xuất như: tiền lương, tiền c&ocirc;ng v&agrave; c&aacute;c khoản phụ cấp c&oacute; t&iacute;nh chất lương, chi ăn giữa ca, chi bảo hiểm x&atilde; hội, bảo hiểm y tế v&agrave; kinh ph&iacute; c&ocirc;ng đo&agrave;n.</p>\r\n\r\n<ul>\r\n	<li>Tiền lương, tiền c&ocirc;ng, v&agrave; c&oacute; t&iacute;nh chất tiền lương, tiền c&ocirc;ng.</li>\r\n	<li>Chi ph&iacute; bảo hiểm x&atilde; hội, bảo hiểm y tế, bảo hiểm thất nghiệp, kinh ph&iacute; c&ocirc;ng đo&agrave;n.</li>\r\n	<li>Tiền thưởng.</li>\r\n	<li>Chi ph&iacute; ăn ca.</li>\r\n</ul>\r\n\r\n<p>+ Chi ph&iacute; sản xuất chung: chi ph&iacute; chung ph&aacute;t sinh ở c&aacute;c ph&acirc;n xưởng, bộ phận kinh doanh như: tiền lương, phụ cấp, ăn giữa ca, chi ph&iacute; vật liệu, c&ocirc;ng cụ, dụng cụ, khấu hao t&agrave;i sản cố định, chi ph&iacute; dịch vụ mua ngo&agrave;i v&agrave; c&aacute;c chi ph&iacute; bằng tiền kh&aacute;c.</p>\r\n\r\n<p>+ Chi ph&iacute; b&aacute;n h&agrave;ng: c&aacute;c chi ph&iacute; ph&aacute;t sinh trong qu&aacute; tr&igrave;nh ti&ecirc;u thụ sản phẩm, h&agrave;ng h&oacute;a dịch vụ như tiền lương, c&aacute;c khoản phụ cấp phải trả cho nh&acirc;n vi&ecirc;n b&aacute;n h&agrave;ng, hoa hồng đại l&yacute;, hoa hồng m&ocirc;i giới, tiếp thị, x&uacute;c tiến thương mại, khuyến m&atilde;i, quảng c&aacute;o, đ&oacute;ng g&oacute;i, vận chuyển, bảo quản,... khấu hao t&agrave;i sản cố định, chi ph&iacute; vật liệu, bao b&igrave;, dụng cụ, đồ d&ugrave;ng, chi ph&iacute; dịch vụ mua ngo&agrave;i v&agrave; c&aacute;c chi ph&iacute; bằng tiền kh&aacute;c.</p>\r\n\r\n<p>+ Chi ph&iacute; quản l&yacute; C&ocirc;ng ty: c&aacute;c chi ph&iacute; quản l&yacute; kinh doanh, quản l&yacute; h&agrave;nh ch&iacute;nh v&agrave; c&aacute;c chi ph&iacute; kh&aacute;c c&oacute; li&ecirc;n quan đến hoạt động của C&ocirc;ng ty.</p>\r\n\r\n<p>+ To&agrave;n bộ chi ph&iacute; b&aacute;n h&agrave;ng v&agrave; chi ph&iacute; quản l&yacute; C&ocirc;ng ty được kết chuyển cho sản phẩm, dịch vụ ti&ecirc;u thụ trong năm để x&aacute;c định kết quả kinh doanh.</p>\r\n\r\n<p><strong>Điều 23. Quy chế, định mức chi ph&iacute;.</strong></p>\r\n\r\n<p><strong>23.1. Văn ph&ograve;ng phẩm, thiết bị văn ph&ograve;ng, tạp phẩm, quần &aacute;o đồng phục, BHLĐ</strong></p>\r\n\r\n<p>Văn ph&ograve;ng phẩm gồm giấy in , giấy photo, mực in, giấy viết, vở viết, t&agrave;i liệu phục vụ chuy&ecirc;n m&ocirc;n, b&uacute;t viết, file,t&uacute;i t&agrave;i liệu, ch&egrave;, c&agrave; ph&ecirc;, nước uống, ấm, ch&eacute;n, đồ d&ugrave;ng,&hellip;</p>\r\n\r\n<p>Thiết bị văn ph&ograve;ng gồm b&agrave;n, ghế, m&aacute;y t&iacute;nh, fax, photo, tủ t&agrave;i liệu, m&aacute;y scan,..</p>\r\n\r\n<p>Tạp phẩm gồm chổi, nước lau rửa, th&ugrave;ng r&aacute;c,...</p>\r\n\r\n<p>Quần &aacute;o đồng phục, bảo hộ lao động được cấp ph&aacute;t cho c&aacute;c bộ phận, c&aacute;c nh&acirc;n cần thiết để đảm bảo an to&agrave;n lao động theo quy định của luật an to&agrave;n, vệ sinh lao động v&agrave; được kiểm so&aacute;t theo quy tr&igrave;nh vệ sinh, an to&agrave;n lao động do ph&ograve;ng Nh&acirc;n sự quản l&yacute;.</p>\r\n\r\n<p>C&aacute;c chi ph&iacute; tr&ecirc;n được thanh to&aacute;n theo bảng k&ecirc; thực tế ph&aacute;t sinh h&agrave;ng th&aacute;ng đ&atilde; được Ban gi&aacute;m đốc ph&ecirc; duyệt. Bộ phận Nh&acirc;n sự c&oacute; tr&aacute;ch nhiệm thống k&ecirc;, xin mua v&agrave; quản l&yacute; nhằm tr&aacute;nh l&atilde;ng ph&iacute;.</p>\r\n\r\n<p><strong>23.2. Điện, nước, điện thoại</strong><strong>, fax, internet, dịch vụ thư điện tử, t&ecirc;n miền c&ocirc;ng ty, xăng xe m&aacute;y, cước ph&iacute; chuyển ph&aacute;t nhanh.</strong></p>\r\n\r\n<p>- Tiền điện, nước: Thực h&agrave;nh tiết kiệm, chống l&atilde;ng ph&iacute;, c&aacute;c m&aacute;y m&oacute;c, thiết bị, vị tr&iacute; phải tắt nguồn, đ&oacute;ng van khi kh&ocirc;ng sử dụng. Bộ phận Quản l&iacute; thiết bị, H&agrave;nh ch&iacute;nh nh&acirc;n sự c&oacute; tr&aacute;ch nhiệm kiểm tra, đ&ocirc;n đốc c&aacute;c bộ phận. Chi ph&iacute; điện nước được thanh to&aacute;n định kỳ theo thực tế ph&aacute;t sinh.</p>\r\n\r\n<p>- Tiền cước ph&iacute; điện thoại cố định, fax, internet, dịch vụ li&ecirc;n quan đến thư điện tử:</p>\r\n\r\n<p>Bộ phận nh&acirc;n sự c&oacute; tr&aacute;ch nhiệm quản l&iacute; chi ph&iacute; cước điện thoại b&agrave;n, fax, internet trong C&ocirc;ng ty để tr&aacute;nh mục đ&iacute;ch sử dụng kh&ocirc;ng đ&uacute;ng mục đ&iacute;ch.</p>\r\n\r\n<p>C&aacute;c nh&acirc;n vi&ecirc;n c&oacute; nhu cầu li&ecirc;n hệ c&ocirc;ng việc với b&ecirc;n ngo&agrave;i, hay chỉ sử dụng nội bộ trong c&ocirc;ng ty th&igrave; đăng k&iacute; với nh&acirc;n vi&ecirc;n nh&acirc;n sự để được lắp đặt điện thoại cố định đ&uacute;ng mục đ&iacute;ch.</p>\r\n\r\n<p>Tiền cước ph&iacute; internet v&agrave; dịch vụ thư điện tử, t&ecirc;n miền C&ocirc;ng ty: Nhận sự đăng k&iacute; g&oacute;i cước ph&ugrave; hợp với nhu cầu sử dụng internet, t&ecirc;n miền C&ocirc;ng ty, thư điện tử trong C&ocirc;ng ty, được Ban Gi&aacute;m đốc ph&ecirc; duyệt khi đăng k&iacute; v&agrave; k&yacute; hợp đồng dịch vụ với nh&agrave; cung cấp.</p>\r\n\r\n<p>Định mức chi ph&iacute; điện thoại b&agrave;n, fax, internet h&agrave;ng th&aacute;ng kh&ocirc;ng qu&aacute; 15.000.000 vnđ.</p>\r\n\r\n<p>Chi ph&iacute; tiền điện thoại di động nh&acirc;n vi&ecirc;n Việt Nam thường xuy&ecirc;n phải đi lại v&agrave; li&ecirc;n hệ, l&agrave;m việc qua điện thoại sẽ theo c&aacute;c quyết định cụ thể của Ban Gi&aacute;m đốc v&agrave; chi ph&iacute; tối đa l&agrave; 200.000vnđ/th&aacute;ng. Hiện C&ocirc;ng ty mới duyệt trợ cấp cho nh&acirc;n vi&ecirc;n Vũ Quang Hiệp-Ph&ograve;ng Xuất nhập khẩu.</p>\r\n\r\n<p>Chi ph&iacute; tiền điện thoại di động của quản l&yacute; người nước ngo&agrave;i thường xuy&ecirc;n phải li&ecirc;n hệ, l&agrave;m việc qua điện thoại trong nước v&agrave; nước ngo&agrave;i: C&ocirc;ng ty sẽ bố tr&iacute; mua v&agrave; cấp cho mỗi người 1 điện thoại di động. Chi ph&iacute; mua 1 m&aacute;y điện thoại mới kh&ocirc;ng vượt qu&aacute; 3.000.000vnđ/1 chiếc v&agrave; chi ph&iacute; cước điện thoại di động h&agrave;ng th&aacute;ng &nbsp;tối đa l&agrave; 2.500.000vnđ/th&aacute;ng.</p>\r\n\r\n<p>- Chi ph&iacute; xăng xe m&aacute;y cho c&aacute;c c&aacute;n bộ nh&acirc;n vi&ecirc;n thường xuy&ecirc;n phải ra ngo&agrave;i li&ecirc;n hệ, l&agrave;m việc với c&aacute;c sở ban ng&agrave;nh cụ thể như sau:</p>\r\n\r\n<p>+Ph&ograve;ng Xuất nhập khẩu: Được duyệt chi tối đa 80l&iacute;t/1 th&aacute;ng cho cả ph&ograve;ng xuất nhập khẩu.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +Ph&ograve;ng nh&acirc;n sự: Duyệt chi tối đa 30 l&iacute;t/1 th&aacute;ng cho nh&acirc;n vi&ecirc;n chuy&ecirc;n tr&aacute;ch về bảo hiểm v&agrave; chế độ bảo hiểm cho người lao động l&agrave; m&atilde; số H0034 &ndash; Trần Thị Chung.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Duyệt chi tối đa 20 l&iacute;t /1 th&aacute;ng&nbsp; cho nh&acirc;n vi&ecirc;n chuy&ecirc;n tr&aacute;ch li&ecirc;n hệ l&agrave;m việc với sở lao động, xuất nhập cảnh, đại sứ qu&aacute;n, ph&ograve;ng thương mại, ng&acirc;n h&agrave;ng,...</p>\r\n\r\n<p>Nếu một người phụ tr&aacute;ch cả hai c&ocirc;ng việc tr&ecirc;n th&igrave; chỉ duyệt chi tối đa 30 l&iacute;t xăng/th&aacute;ng cho người đ&oacute;.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +Ph&ograve;ng kế to&aacute;n: Duyệt chi tối đa 20 l&iacute;t/1 th&aacute;ng cho nh&acirc;n vi&ecirc;n thường xuy&ecirc;n ra ngo&agrave;i li&ecirc;n hệ l&agrave;m việc với sở ban ng&agrave;nh v&agrave; ng&acirc;n h&agrave;ng l&agrave; m&atilde; số S1085-Phạm Thị Ng&acirc;n.</p>\r\n\r\n<p>Gi&aacute; xăng theo thị trường v&agrave; y&ecirc;u cầu c&oacute; h&oacute;a đơn đầy đủ khi l&agrave;m đề nghị thanh to&aacute;n.</p>\r\n\r\n<p>Tiền cước ph&iacute; chuyển ph&aacute;t nhanh: chỉ chuyển ph&aacute;t nhanh chứng từ, h&agrave;ng h&oacute;a li&ecirc;n quan đến c&ocirc;ng việc của C&ocirc;ng ty, kh&ocirc;ng mang t&iacute;nh chất c&aacute; nh&acirc;n. Thanh to&aacute;n ph&iacute; chuyển ph&aacute;t nhanh theo thực tế ph&aacute;t sinh.</p>\r\n\r\n<p><strong>23.3. Chi ph&iacute; lương, phụ cấp, trợ cấp, bảo hiểm x&atilde; hội, bảo hiểm y tế, kinh ph&iacute; c&ocirc;ng đo&agrave;n.</strong></p>\r\n\r\n<p><strong>*** Tiền lương:</strong></p>\r\n\r\n<p>+ C&ocirc;ng ty &aacute;p dụng mức tiền lương tối thiểu do nh&agrave; nước quy định đối với doanh nghiệp c&oacute; vốn đầu tư&shy; nước ngo&agrave;i.</p>\r\n\r\n<p>+ Hết thời gian thử việc C&ocirc;ng ty sẽ k&yacute; hợp đồng lao động ch&iacute;nh thức (thời hạn tuỳ theo t&iacute;nh chất c&ocirc;ng việc) với người lao động v&agrave; lương cơ bản được điều chỉnh theo chức danh c&ocirc;ng việc x&acirc;y dựng trong thang bảng lương.</p>\r\n\r\n<p>+ H&igrave;nh thức t&iacute;nh lương: t&iacute;nh lương theo thời gian</p>\r\n\r\n<p>+ Thời gian trả lương cho người lao động: H&agrave;ng th&aacute;ng c&ocirc;ng ty trả lương v&agrave;o ng&agrave;y mồng10 th&aacute;ng sau.</p>\r\n\r\n<p>+ H&igrave;nh thức trả lương: Chuyển khoản v&agrave;o t&agrave;i khoản c&aacute; nh&acirc;n do c&ocirc;ng ty mở cho c&ocirc;ng nh&acirc;n vi&ecirc;n tại Ng&acirc;n h&agrave;ng m&agrave; C&ocirc;ng ty đang giao dịch.</p>\r\n\r\n<p>+ Đối với nh&acirc;n vi&ecirc;n h&agrave;nh ch&iacute;nh văn ph&ograve;ng sẽ trả lương th&aacute;ng theo thoả thuận. Đảm bảo kh&ocirc;ng thấp hơn quy định của nh&agrave; nước.</p>\r\n\r\n<p>+ Tiền lương th&aacute;ng lương thứ 13 được ph&acirc;n bổ th&agrave;nh 3 đợt như&shy; sau:</p>\r\n\r\n<ul>\r\n	<li>Chi trả bằng tiền v&agrave;o trước ng&agrave;y lễ 30/4 v&agrave; 1/5 tương đương 10% của 1 th&aacute;ng lương thứ 13 cho c&ocirc;ng nh&acirc;n hiện c&ograve;n l&agrave;m việc. Căn cứ t&iacute;nh 1 th&aacute;ng lương thứ 13 l&agrave; mức lương cơ bản tại thời điểm chi trả v&agrave; căn cứ th&acirc;m ni&ecirc;n l&agrave;m việc tại c&ocirc;ng ty.</li>\r\n	<li>Chi trả bằng tiền v&agrave;o trước ng&agrave;y Ng&agrave;y Quốc kh&aacute;nh 2/9 tương đương 10% của 1 th&aacute;ng lương thứ 13 cho c&ocirc;ng nh&acirc;n hiện c&ograve;n l&agrave;m việc. Căn cứ t&iacute;nh 1 th&aacute;ng lương thứ 13 l&agrave; mức lương cơ bản tại thời điểm chi trả căn cứ th&acirc;m ni&ecirc;n l&agrave;m việc tại c&ocirc;ng ty.</li>\r\n	<li>Chi trả bằng tiền v&agrave;o trước ng&agrave;y Tết Nguy&ecirc;n đ&aacute;n tương đương 80% của 1 th&aacute;ng lương thứ 13 cho c&ocirc;ng nh&acirc;n hiện c&ograve;n l&agrave;m việc. Căn cứ t&iacute;nh 1 th&aacute;ng lương thứ 13 l&agrave; mức lương cơ bản tại thời điểm chi trả v&agrave; căn cứ th&acirc;m ni&ecirc;n l&agrave;m việc tại c&ocirc;ng ty.</li>\r\n</ul>\r\n\r\n<p><strong>***Phụ cấp:</strong></p>\r\n\r\n<p>+ C&ocirc;ng ty &aacute;p dụng mức phụ cấp tr&aacute;ch nhiệm cho c&aacute;c chức vụ từ tổ ph&oacute; c&aacute;c chuyền sản xuất đến c&aacute;c chức vụ kh&aacute;c (c&ocirc;ng ty sẽ xem x&eacute;t điều chỉnh h&agrave;ng năm):</p>\r\n\r\n<p style=\"margin-left:.5in\">- Phụ cấp tr&aacute;ch nhiệm đối với tổ tr&shy;ởng: 700.000 đồng/th&aacute;ng.</p>\r\n\r\n<p style=\"margin-left:.5in\">- Phụ cấp tr&aacute;ch nhiệm đối với tổ ph&oacute;: 400.000 đồng/th&aacute;ng.</p>\r\n\r\n<p>- Mức phụ cấp tr&aacute;ch nhiệm thấp nhất: 50.000 đồng/th&aacute;ng.</p>\r\n\r\n<p>Ngo&agrave;i ra, với những c&aacute; nh&acirc;n c&oacute; th&acirc;m ni&ecirc;n cao, tay nghề cao c&oacute; thể được trợ cấp với mức phụ cấp thỏa thuận.</p>\r\n\r\n<p>+ H&agrave;ng th&aacute;ng b&igrave;nh x&eacute;t trợ cấp xếp loại A, B, C, D đối với c&ocirc;ng nh&acirc;n:</p>\r\n\r\n<p>&nbsp;Xếp loại A: thưởng 80.000VND</p>\r\n\r\n<p>&nbsp;Xếp loại B: thưởng 50.000VND</p>\r\n\r\n<p>&nbsp;Xếp loại C: thưởng 30.000VND</p>\r\n\r\n<p>&nbsp;Xếp loại D: Kh&ocirc;ng được thưởng.</p>\r\n\r\n<p>+ H&agrave;ng th&aacute;ng c&ocirc;ng ty chi trả phụ cấp tay nghề cho c&ocirc;ng nh&acirc;n l&agrave;m c&ocirc;ng đoạn đ&ograve;i hỏi tay nghề v&agrave; tr&aacute;ch nhiệm cao như sau:</p>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:613px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"height:17px; width:64px\">\r\n			<p style=\"text-align:center\"><strong>Stt</strong></p>\r\n			</td>\r\n			<td style=\"height:17px; width:160px\">\r\n			<p style=\"text-align:center\"><strong>Phụ Cấp</strong></p>\r\n			</td>\r\n			<td style=\"height:17px; width:147px\">\r\n			<p style=\"text-align:center\"><strong>C&ocirc;ng việc</strong></p>\r\n			</td>\r\n			<td style=\"height:17px; width:242px\">\r\n			<p style=\"text-align:center\"><strong>Mức phụ cấp</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"8\" style=\"height:17px; width:64px\">\r\n			<p>1</p>\r\n			</td>\r\n			<td rowspan=\"8\" style=\"height:17px; width:160px\">\r\n			<p style=\"text-align:center\">Phụ cấp tay nghề</p>\r\n			</td>\r\n			<td style=\"height:17px; width:147px\">\r\n			<p style=\"text-align:center\">May m&aacute;y 2 Kim</p>\r\n			</td>\r\n			<td style=\"height:17px; width:242px\">\r\n			<p style=\"text-align:center\">&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:17px; width:147px\">\r\n			<p style=\"text-align:center\">Tra trai</p>\r\n			</td>\r\n			<td style=\"height:17px; width:242px\">\r\n			<p style=\"text-align:center\">100,000 đồng/người/th&aacute;ng</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:17px; width:147px\">\r\n			<p style=\"text-align:center\">May cầu</p>\r\n			</td>\r\n			<td style=\"height:17px; width:242px\">\r\n			<p style=\"text-align:center\">&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:17px; width:147px\">\r\n			<p style=\"text-align:center\">Ghim trai</p>\r\n			</td>\r\n			<td rowspan=\"4\" style=\"height:17px; width:242px\">\r\n			<p style=\"text-align:center\">50,000 đồng/người/th&aacute;ng</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:17px; width:147px\">\r\n			<p style=\"text-align:center\">Diễu trai</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:17px; width:147px\">\r\n			<p style=\"text-align:center\">Kiểm h&agrave;ng</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:17px; width:147px\">\r\n			<p style=\"text-align:center\">C&ocirc;ng nh&acirc;n đ&oacute;ng g&oacute;i A</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:17px; width:147px\">\r\n			<p style=\"text-align:center\">Diễu trụ</p>\r\n			</td>\r\n			<td style=\"height:17px; width:242px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>+ H&agrave;ng th&aacute;ng C&ocirc;ng ty chi trả phụ cấp th&acirc;m ni&ecirc;n: C&ocirc;ng nh&acirc;n l&agrave;m việc tr&ecirc;n 1 năm được phụ cấp 50.000 đồng/th&aacute;ng v&agrave; từ năm thứ hai mỗi năm tiếp theo được cộng th&ecirc;m 25.000đồng/th&aacute;ng.</p>\r\n\r\n<p>+ H&agrave;ng th&aacute;ng C&ocirc;ng ty chi trả tiền chuy&ecirc;n cần trong th&aacute;ng l&agrave;: 150.000đ/người/th&aacute;ng.</p>\r\n\r\n<p>+ H&agrave;ng th&aacute;ng C&ocirc;ng ty chi trả tiền phụ cấp nh&agrave; ở, đi lại:</p>\r\n\r\n<p>Người lao động c&oacute; hộ khẩu th&agrave;nh phố l&agrave;: 150.000đ/th&aacute;ng</p>\r\n\r\n<p>Người lao động hộ khẩu ở huyện l&agrave; 200.000đồng/th&aacute;ng</p>\r\n\r\n<p>V&igrave; l&yacute; do n&agrave;o đ&oacute; m&agrave; C&ocirc;ng ty thanh to&aacute;n tiền lương cho người lao động chậm hơn thời gian theo quy định (qu&aacute; 15 ng&agrave;y) th&igrave; C&ocirc;ng ty phải b&ugrave; cho người lao động một khoản tiền &iacute;t nhất bằng l&atilde;i suất tiền gửi tiết kiệm do ng&acirc;n h&agrave;ng nh&agrave; nước c&ocirc;ng bố tại thời điểm trả lương cho những ng&agrave;y trả chậm. Thời gian trả chậm tối đa kh&ocirc;ng qu&aacute; 15 ng&agrave;y.</p>\r\n\r\n<p>+Phụ cấp cho c&ocirc;ng nh&acirc;n l&agrave;m ca đ&ecirc;m:</p>\r\n\r\n<p>C&ocirc;ng ty chi trả th&ecirc;m 50% gi&aacute; trị lương l&agrave;m việc ca đ&ecirc;m cho c&ocirc;ng nh&acirc;n l&agrave;m ca đ&ecirc;m.</p>\r\n\r\n<p>Trong trường hợp c&ocirc;ng nh&acirc;n l&agrave;m ca đ&ecirc;m tăng ca qu&aacute; 64 tiếng/1 th&aacute;ng, C&ocirc;ng ty chi trả th&ecirc;m 5% g&iacute;a trị lương l&agrave;m việc tăng ca đ&ecirc;m qu&aacute; 64 tiếng.</p>\r\n\r\n<p>&nbsp;Phụ cấp n&agrave;y được chi trả theo lương.</p>\r\n\r\n<p>+Phụ cấp nu&ocirc;i con nhỏ: Mỗi c&ocirc;ng nh&acirc;n c&oacute; con nhỏ dưới 6 tuổi được trợ cấp 10.000vnđ/1 ch&aacute;u.</p>\r\n\r\n<p>+Phụ cấp BHXH v&agrave; chi ph&iacute; đi lại: Với những c&ocirc;ng nh&acirc;n đủ tuổi về hưu v&agrave; c&oacute; sổ hưu tr&iacute; nhưng vẫn l&agrave;m tại C&ocirc;ng ty, C&ocirc;ng ty chi trả 29% phụ cấp BHXH v&agrave; chi ph&iacute; đi lại. Phụ cấp n&agrave;y t&iacute;nh bằng 29% của lương cơ bản tại thời điểm chi trả v&agrave; được trả c&ugrave;ng lương.</p>\r\n\r\n<p>+Trợ cấp th&ocirc;i việc: C&ocirc;ng ty chi trả trợ cấp th&ocirc;i việc theo Luật quy định hiện h&agrave;nh</p>\r\n\r\n<p>Căn cứ lương t&iacute;nh trả trợ cấp l&agrave; lương trung b&igrave;nh của 6 th&aacute;ng liền kề thời điểm nghỉ việc.</p>\r\n\r\n<p><strong>***Tiền lương l&agrave;m việc v&agrave;o ng&agrave;y nghỉ v&agrave; tiền lương tăng ca: </strong>C&ocirc;ng ty chi trả như sau:</p>\r\n\r\n<p>+L&agrave;m việc v&agrave;o ng&agrave;y chủ nhật v&agrave; nghỉ h&egrave;: trả 200% như luật quy định</p>\r\n\r\n<p>+Tăng ca v&agrave;o ca đ&ecirc;m: trả 195% như luật quy định</p>\r\n\r\n<p>+Tăng ca v&agrave;o ng&agrave;y thường: trả 150% như luật quy định</p>\r\n\r\n<p>+L&agrave;m việc v&agrave;o ng&agrave;y chủ nhật, ng&agrave;y lễ: trả 300% như luật quy định</p>\r\n\r\n<p>+C&aacute;c mức tiền lương kh&aacute;c sẽ t&iacute;nh theo Luật quy định hiện h&agrave;nh (nếu c&oacute; ph&aacute;t sinh)</p>\r\n\r\n<p><strong>***Tiền thưởng</strong>:</p>\r\n\r\n<p>Mức thưởng th&shy;ường kỳ hoặc thưởng cuối năm cho c&ocirc;ng nh&acirc;n lao động tuỳ theo khả năng của C&ocirc;ng ty.</p>\r\n\r\n<p>+ Mức thưởng do ban l&atilde;nh đạo C&ocirc;ng ty quyết định sau khi c&oacute; sự tham khảo &yacute; kiến với Ban chấp h&agrave;nh C&ocirc;ng đo&agrave;n.</p>\r\n\r\n<p>+ Định kỳ mỗi th&aacute;ng c&aacute;c ph&acirc;n xưởng sẽ b&igrave;nh chọn c&ocirc;ng nh&acirc;n, bộ phận xuất sắc trong th&aacute;ng. Ban gi&aacute;m đốc C&ocirc;ng ty sẽ lựa chọn ra c&ocirc;ng nh&acirc;n, bộ ph&acirc;n xuất sắc nhất th&aacute;ng v&agrave; chi trả tiền mặt trực tiếp cho c&aacute; nh&acirc;n v&agrave; bộ phận đ&oacute;.</p>\r\n\r\n<p>Chi ph&iacute; thưởng cho c&ocirc;ng nh&acirc;n xuất sắc c&aacute;c ph&acirc;n x&shy;ưởng l&agrave; 200.000 đồng/người, tổ trưởng xuất sắc l&agrave; 400.000 đồng.</p>\r\n\r\n<p>Thưởng bộ phận xuất sắc x&eacute;t duyệt theo sản lượng từng th&aacute;ng.</p>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:625px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"height:19px; width:133px\">\r\n			<p style=\"text-align:center\"><strong>Mức thưởng</strong></p>\r\n			</td>\r\n			<td style=\"height:19px; width:216px\">\r\n			<p style=\"text-align:center\"><strong>Sản lượng h&agrave;ng (Chiếc)</strong></p>\r\n			</td>\r\n			<td style=\"height:19px; width:102px\">\r\n			<p style=\"text-align:center\"><strong>Xếp loại</strong></p>\r\n			</td>\r\n			<td style=\"height:19px; width:174px\">\r\n			<p style=\"text-align:center\"><strong>&nbsp;Số tiền thưởng (VNĐ) </strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"3\" style=\"height:19px; width:133px\">\r\n			<p>1</p>\r\n			</td>\r\n			<td rowspan=\"3\" style=\"height:19px; width:216px\">\r\n			<p style=\"text-align:center\">25,000-29,000</p>\r\n			</td>\r\n			<td style=\"height:19px; width:102px\">\r\n			<p>A</p>\r\n			</td>\r\n			<td style=\"height:19px; width:174px\">\r\n			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1,500,000&nbsp;&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:19px; width:102px\">\r\n			<p>B</p>\r\n			</td>\r\n			<td style=\"height:19px; width:174px\">\r\n			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 700,000&nbsp;&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:19px; width:102px\">\r\n			<p>C</p>\r\n			</td>\r\n			<td style=\"height:19px; width:174px\">\r\n			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 350,000&nbsp;&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"4\" style=\"height:19px; width:133px\">\r\n			<p>2</p>\r\n			</td>\r\n			<td rowspan=\"4\" style=\"height:19px; width:216px\">\r\n			<p style=\"text-align:center\">30,000-35,000</p>\r\n			</td>\r\n			<td style=\"height:19px; width:102px\">\r\n			<p>A</p>\r\n			</td>\r\n			<td style=\"height:19px; width:174px\">\r\n			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2,700,000&nbsp;&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:19px; width:102px\">\r\n			<p>B</p>\r\n			</td>\r\n			<td style=\"height:19px; width:174px\">\r\n			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2,000,000&nbsp;&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:19px; width:102px\">\r\n			<p>C</p>\r\n			</td>\r\n			<td style=\"height:19px; width:174px\">\r\n			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1,500,000&nbsp;&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:19px; width:102px\">\r\n			<p>D</p>\r\n			</td>\r\n			<td style=\"height:19px; width:174px\">\r\n			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 700,000&nbsp;&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"4\" style=\"height:19px; width:133px\">\r\n			<p>3</p>\r\n			</td>\r\n			<td rowspan=\"4\" style=\"height:19px; width:216px\">\r\n			<p style=\"text-align:center\">35,000-40,000</p>\r\n			</td>\r\n			<td style=\"height:19px; width:102px\">\r\n			<p>A</p>\r\n			</td>\r\n			<td style=\"height:19px; width:174px\">\r\n			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3,000,000&nbsp;&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:19px; width:102px\">\r\n			<p>B</p>\r\n			</td>\r\n			<td style=\"height:19px; width:174px\">\r\n			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2,500,000&nbsp;&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:19px; width:102px\">\r\n			<p>C</p>\r\n			</td>\r\n			<td style=\"height:19px; width:174px\">\r\n			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2,000,000&nbsp;&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:19px; width:102px\">\r\n			<p>D</p>\r\n			</td>\r\n			<td style=\"height:19px; width:174px\">\r\n			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1,000,000&nbsp;&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>***Nghỉ h&agrave;ng năm:</strong> H&agrave;ng năm ngo&agrave;i ng&agrave;y nghỉ lễ, nghỉ ph&eacute;p h&agrave;ng năm theo Luật quy định, C&ocirc;ng ty bố tr&iacute; tổ chức cho c&aacute;n bộ c&ocirc;ng nh&acirc;n vi&ecirc;n trong C&ocirc;ng ty 02 ng&agrave;y nghỉ h&egrave; được hưởng nguy&ecirc;n lương.</p>\r\n\r\n<p>Trong trường hợp, trong năm C&ocirc;ng ty kh&ocirc;ng bố tr&iacute; được thời gian cho c&ocirc;ng nh&acirc;n vi&ecirc;n nghỉ hết ph&eacute;p năm th&igrave; đến thời điểm cuối năm c&ocirc;ng ty sẽ chi trả bằng tiền 200% gi&aacute; trị ng&agrave;y ph&eacute;p năm c&ograve;n lại v&agrave;o th&aacute;ng cuối c&ugrave;ng của năm đ&oacute;.</p>\r\n\r\n<p><strong>*** Phạt tiền (trừ lương)</strong> <strong>người lao động</strong>:</p>\r\n\r\n<p>Trong trường hợp người lao động nghỉ việc kh&ocirc;ng đủ thời gian b&aacute;o trước, kh&ocirc;ng l&yacute; do:</p>\r\n\r\n<p>+Với c&ocirc;ng nh&acirc;n vi&ecirc;n đang trong thời gian thử việc m&agrave; nghỉ: kh&ocirc;ng bị phạt</p>\r\n\r\n<p>+Với c&ocirc;ng nh&acirc;n vi&ecirc;n đ&atilde; được k&yacute; hợp đồng c&oacute; thời hạn v&agrave; v&ocirc; thời hạn ch&iacute;nh thức: phạt &frac12; th&aacute;ng lương cơ bản. Mức lương t&iacute;nh phạt l&agrave; mức lương cơ bản tại thời điểm chi trả.</p>\r\n\r\n<p><strong>***Bảo hiểm x&atilde; hội, y tế, thất nghiệp v&agrave; kinh ph&iacute; c&ocirc;ng đo&agrave;n:</strong></p>\r\n\r\n<p>+Bảo hiểm: C&ocirc;ng ty tham gia v&agrave; chi trả bảo hiểm cho to&agrave;n bộ c&aacute;c c&aacute;n bộ c&ocirc;ng nh&acirc;n vi&ecirc;n theo đ&uacute;ng luật quy định hiện h&agrave;nh</p>\r\n\r\n<p>+ C&ocirc;ng đo&agrave;n:</p>\r\n\r\n<p>Người lao động tr&iacute;ch ph&iacute; c&ocirc;ng đo&agrave;n từ lương theo thỏa thuận v&agrave; quy định của tổ chức c&ocirc;ng đo&agrave;n C&ocirc;ng ty</p>\r\n\r\n<p>C&ocirc;ng ty tr&iacute;ch&nbsp; v&agrave; chi trả kinh ph&iacute; c&ocirc;ng đo&agrave;n l&agrave; 1% t&iacute;nh tr&ecirc;n quỹ tiền lương theo quy định hiện h&agrave;nh.</p>\r\n\r\n<p><strong>23.4. Chế độ tiếp kh&aacute;ch, hội nghị</strong><strong>.</strong></p>\r\n\r\n<p>Kh&aacute;ch đến l&agrave;m việc tại C&ocirc;ng ty phải được đăng k&iacute; tại Ph&ograve;ng bảo vệ. Bộ phận Nh&acirc;n sự c&oacute; tr&aacute;ch nhiệm bố tr&iacute; ph&ograve;ng, tr&agrave; nước, băng r&ocirc;n, th&ocirc;ng b&aacute;o cho c&aacute;c đơn vị li&ecirc;n quan,...để đ&oacute;n v&agrave; tiếp kh&aacute;ch.</p>\r\n\r\n<p><strong>* C&aacute;c định mức tiếp kh&aacute;ch:</strong></p>\r\n\r\n<p>- Kh&aacute;ch của HĐTV, Ban Gi&aacute;m đốc:</p>\r\n\r\n<p>L&agrave; kh&aacute;ch h&agrave;ng, nh&agrave; cung cấp của C&ocirc;ng ty, l&agrave; kh&aacute;ch h&agrave;ng nhập khẩu sản phẩm của C&ocirc;ng ty qua đối t&aacute;c ruột PNG Corporation,</p>\r\n\r\n<p>L&agrave; c&aacute;c đối t&aacute;c tiềm năng đến tham quan, đ&aacute;nh gi&aacute; khả năng của c&ocirc;ng ty.</p>\r\n\r\n<p>L&agrave; c&aacute;c đơn vị, c&aacute;c c&aacute; nh&acirc;n được c&aacute;c c&ocirc;ng ty nhập khẩu sản phẩm của C&ocirc;ng ty cử đến để đ&aacute;nh gi&aacute; khả năng cung cấp sản phẩm theo ti&ecirc;u chuẩn Mỹ, Ch&acirc;u &Acirc;u...</p>\r\n\r\n<p>L&agrave; c&aacute;c nh&acirc;n vi&ecirc;n kiểm định chất lượng sản phẩm trước khi xuất khẩu do C&ocirc;ng ty nhập khẩu sản phẩm của C&ocirc;ng ty cử đến.</p>\r\n\r\n<p>L&agrave; c&aacute;c c&aacute;n bộ c&ocirc;ng nh&acirc;n vi&ecirc;n của c&aacute;c cơ quan nh&agrave; nước được cử đến l&agrave;m việc tại C&ocirc;ng ty.</p>\r\n\r\n<p>- Kh&aacute;ch của c&aacute;c ph&ograve;ng, ban chức năng: T&ugrave;y theo mức độ quan trọng của c&ocirc;ng việc li&ecirc;n quan, c&aacute; nh&acirc;n, đơn vị trực tiếp b&aacute;o c&aacute;o Ban Gi&aacute;m đốc xin &yacute; kiến về chi ph&iacute; v&agrave; duyệt chi theo đề nghị cho việc đ&oacute;n tiếp nếu c&oacute; ph&aacute;t sinh c&aacute;c khoản chi ph&iacute; n&agrave;y.</p>\r\n\r\n<p><strong>23.5. Chi ph&iacute; hiếu (đ&aacute;m ma).</strong></p>\r\n\r\n<p>Nhằm mục đ&iacute;ch hỗ trợ, thăm nom c&aacute; nh&acirc;n v&agrave; người th&acirc;n c&aacute;n bộ c&ocirc;ng nh&acirc;n vi&ecirc;n, tạo sự đo&agrave;n kết gắn b&oacute;, tương th&acirc;n tương &aacute;i trong to&agrave;n C&ocirc;ng ty. C&ocirc;ng ty hỗ trợ bằng tiền trong c&aacute;c trường hợp hiếu (đ&aacute;m ma) cho to&agrave;n bộ c&aacute;n bộ nh&acirc;n vi&ecirc;n theo c&aacute;c định mức như sau:</p>\r\n\r\n<p>&nbsp;- Hiếu: Bản th&acirc;n người lao động, bố, mẹ (cả bố mẹ vợ/chồng), con của người lao động: 300.000 vnđ/người, chi tiền mặt, v&agrave; một v&ograve;ng hoa.</p>\r\n\r\n<p><strong>23.6.</strong> <strong>Chi ph&iacute; cho nh&acirc;n vi&ecirc;n tai nạn lao động.</strong></p>\r\n\r\n<p>C&ocirc;ng ty chi trả to&agrave;n bộ số tiền c&aacute;n bộ c&ocirc;ng nh&acirc;n vi&ecirc;n điều trị tại cơ sơ y tế v&agrave; trả 100% lương cho người lao động trong những ng&agrave;y nghỉ điều trị do bị tai nạn lao động kể cả nội v&agrave; ngoại tr&uacute; theo c&aacute;c giấy tờ, chứng từ của bệnh viện.</p>\r\n\r\n<p><strong>23.7. Chi ph&iacute; ăn ca, chi ph&iacute; bữa phụ.</strong></p>\r\n\r\n<p>- Chi ph&iacute; bữa ăn trưa: C&ocirc;ng ty chịu tr&aacute;ch nhiệm cung cấp 1 suất cơm hộp ăn trưa/1 nh&acirc;n vi&ecirc;n của to&agrave;n bộ C&ocirc;ng ty v&agrave; mức chi theo từng thời điểm cụ thể, theo hợp đồng k&yacute; kết với nh&agrave; cung cấp suất ăn. Ri&ecirc;ng l&aacute;i xe sẽ trả bằng tiền với gi&aacute; trị tương đương 1 suất ăn (chưa bao gồm thuế GTGT) theo lương do t&iacute;nh chất c&ocirc;ng việc l&agrave; cơ động.</p>\r\n\r\n<p>- Chi ph&iacute; bữa phụ tăng ca: C&ocirc;ng ty cung cấp 1 bữa phụ/1 nh&acirc;n vi&ecirc;n cho c&aacute;c nh&acirc;n vi&ecirc;n tăng ca qu&aacute; 04 giờ sau giờ h&agrave;nh ch&iacute;nh, v&agrave; mức chi theo từng thời điểm cụ thể, theo hợp đồng k&yacute; kết với nh&agrave; cung cấp suất ăn.</p>\r\n\r\n<p>- Chi trợ cấp tiền ăn ca đ&ecirc;m: C&ocirc;ng ty chi trả bằng tiền theo lương, khoản chi tương ứng 1 suất ăn (chưa bao gồm thuế GTGT) cho 1 nh&acirc;n vi&ecirc;n l&agrave;m ca đ&ecirc;m theo quy định chia ca của C&ocirc;ng ty.</p>\r\n\r\n<p><strong>23.8. Chi đ&agrave;o tạo: </strong></p>\r\n\r\n<p>- Chi ph&iacute; cho người lao động khi được C&ocirc;ng ty cử đi đ&agrave;o tạo n&acirc;ng cao tr&igrave;nh độ; đ&agrave;o tạo, tập huấn nghiệp vụ; đ&agrave;o tạo theo trường tr&igrave;nh nh&acirc;n quyền, an sinh x&atilde; hội, vệ sinh an to&agrave;n lao động trong m&ocirc;i trường l&agrave;m việc theo ti&ecirc;u chuẩn được lựa chọn bởi c&aacute;c nh&agrave; nhập khẩu sản phẩm của C&ocirc;ng ty v&agrave; kh&aacute;ch h&agrave;ng; chương tr&igrave;nh chống khủng bố (CTPAT) khi xuất h&agrave;ng qua cửa khẩu Mỹ được C&ocirc;ng ty duyệt chi theo thực tế ph&aacute;t sinh cho từng trường hợp cụ thể.</p>\r\n\r\n<p><strong>&nbsp;23.9. C&aacute;c khoản chi kh&aacute;c.</strong></p>\r\n\r\n<p>- Ng&agrave;y lễ tết theo quy định, ng&agrave;y Quốc tế Phụ nữ 08/03, Phụ nữ Việt Nam 20/10, tết thiếu nhi, đại hội v&agrave; c&aacute;c hoạt động văn nghệ, thể dục thể thao, giao lưu thể thao với c&aacute;c kh&aacute;ch h&agrave;ng hoặc kh&aacute;ch h&agrave;ng PNG Corporation: c&aacute;c tổ chức, hoạt động, kinh ph&iacute;, chi ph&iacute; sẽ được Ban Gi&aacute;m đốc v&agrave; c&ocirc;ng đo&agrave;n thống nhất, c&oacute; tham khảo kết quả kinh doanh của C&ocirc;ng ty.</p>\r\n\r\n<p>- Ng&agrave;y th&agrave;nh lập C&ocirc;ng ty: Chi ph&iacute; tổ chức theo nghị quyết của HĐTV hoặc quyết định của Ban Tổng Gi&aacute;m đốc.</p>\r\n\r\n<p>- Chi ph&iacute; xăng, dầu, v&eacute;, ph&iacute; cầu đường, rửa xe, sửa xe, bơm hơi xe,...của xe &ocirc; t&ocirc;</p>\r\n\r\n<p>+ Chi ph&iacute; xăng, dầu: C&aacute;c xe sử dụng nhi&ecirc;n liệu t&ugrave;y thuộc v&agrave;o thực tế qu&atilde;ng được được Ban gi&aacute;m đốc chỉ đạo điều động.</p>\r\n\r\n<p>&nbsp;+ C&aacute;c chi ph&iacute; v&eacute;, ph&iacute; cầu, rửa xe, bơm hơi xe,....: Thanh to&aacute;n theo bảng k&ecirc;, đề nghị thanh to&aacute;n được ban gi&aacute;m đốc ph&ecirc; duyệt.</p>\r\n', '0', 1499915841, 1500006468, NULL, 1);
INSERT INTO `answers` (`id`, `user_id`, `question_id`, `status`, `answers_text`, `is_anonymous`, `create_time`, `update_time`, `images`, `censor_flag`) VALUES
(101, 38, 247, 1, '<p><strong>C&aacute;ch tra cứu m&atilde; số thuế c&aacute; nh&acirc;n gồm 4 bước :</strong></p>\r\n\r\n<p><strong>Bước 1</strong>: Truy cập Web :&nbsp;https://www.tncnonline.com.vn</p>\r\n\r\n<p><strong>Bước 2</strong>: Chọn v&agrave;o mục &quot; Tra cứu MST&quot;</p>\r\n\r\n<p><strong>Bước 3:</strong> Nhập số chứng minh thư</p>\r\n\r\n<p><strong>Bước 4</strong>: Nhập m&atilde; x&aacute;c nhận th&ocirc;ng tin</p>\r\n\r\n<p><em>Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng !</em></p>\r\n', '0', 1500086623, 1500181299, NULL, 1),
(102, 38, 261, 1, '<p><strong>Tam gi&aacute;c c&acirc;n</strong> l&agrave; tam gi&aacute;c c&oacute; hai cạnh b&ecirc;n v&agrave; 2 g&oacute;c bằng nhau</p>\r\n\r\n<p>Vậy <strong>diện t&iacute;ch tam gi&aacute;c c&acirc;n</strong> được x&aacute;c định như sau:&nbsp;</p>\r\n\r\n<p>C&ocirc;ng thức:<strong> S = ( A X H) /2</strong></p>\r\n\r\n<p>Trong đ&oacute; : &nbsp; &nbsp;</p>\r\n\r\n<ul>\r\n	<li>S : Diện t&iacute;ch tam gi&aacute;c c&acirc;n</li>\r\n	<li>A: &nbsp;chiều d&agrave;i&nbsp;cạnh đ&aacute;y&nbsp;của tam gi&aacute;c</li>\r\n	<li>H : Chiều cao của tam gi&aacute;c &nbsp;</li>\r\n</ul>\r\n\r\n<p><u><strong>v&iacute; dụ </strong></u>: Cho tam gi&aacute;c ABC c&acirc;n tại A,, Chiều cao AH = 5 cm , cạnh đ&aacute;y BC = 10 cm . T&iacute;nh diện t&iacute;ch tam gi&aacute;c c&acirc;n</p>\r\n\r\n<p><strong><u>B&agrave;i giải</u></strong>: &nbsp;Diện t&iacute;ch tam gi&aacute;c c&acirc;n S = 1/2 x&nbsp;( BC &nbsp;x AH) = 1/2 x ( 10&nbsp;x 5) = 25 (cm2)</p>\r\n\r\n<p><!--![endif]----></p>\r\n', '0', 1500218027, 1502801749, NULL, 1),
(103, 16, 282, 1, '<p>Đ&acirc;y l&agrave; một mẹo rất hữu &iacute;ch nếu như bạn thật sự muốn đ&aacute;nh m&aacute;y nhanh!</p>\r\n\r\n<p>Đ&acirc;y l&agrave; tay của bạn.</p>\r\n\r\n<p><img alt=\"l249oqG.png\" src=\"http://i.imgur.com/l249oqG.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đ&acirc;y l&agrave; b&agrave;n ph&iacute;m.</p>\r\n\r\n<p><img alt=\"MeaFFNk.png\" src=\"http://i.imgur.com/MeaFFNk.png\" /></p>\r\n\r\n<p>Đầu ti&ecirc;n h&atilde;y kết hợp c&aacute;c ng&oacute;n tay của bạn với c&aacute;c k&yacute; tự tương ứng tr&ecirc;n b&agrave;n ph&iacute;m.</p>\r\n\r\n<ul>\r\n	<li>Ng&oacute;n &uacute;t tay tr&aacute;i: ph&iacute;m <strong>Q</strong>, <strong>A</strong>, <strong>Z</strong></li>\r\n	<li>Ng&oacute;n &aacute;p &uacute;t tay tr&aacute;i: ph&iacute;m <strong>W</strong>, <strong>S</strong>, <strong>X</strong></li>\r\n	<li>Ng&oacute;n giữa tay tr&aacute;i: ph&iacute;m <strong>E</strong>, <strong>D</strong>, <strong>C</strong></li>\r\n	<li>Ng&oacute;n trỏ tay tr&aacute;i: <strong>R</strong>, <strong>T</strong>, <strong>F</strong>, <strong>G</strong>, <strong>V</strong>, <strong>B</strong></li>\r\n</ul>\r\n\r\n<p>V&agrave; tương tự như vậy đối với tay phải lần lượt như sau:</p>\r\n\r\n<ul>\r\n	<li>Ng&oacute;n &uacute;t tay phải: ph&iacute;m <strong>P</strong>, <strong>;</strong>, <strong>/</strong></li>\r\n</ul>\r\n\r\n<p><img alt=\"DiQ3ZeG.png\" src=\"http://i.imgur.com/DiQ3ZeG.png\" /></p>\r\n\r\n<ul>\r\n	<li>Ng&oacute;n &aacute;p &uacute;t tay phải: ph&iacute;m <strong>O</strong>, <strong>L</strong>, <strong>.</strong></li>\r\n	<li>Ng&oacute;n giữa tay phải: ph&iacute;m <strong>I</strong>, <strong>K</strong>, <strong>,</strong></li>\r\n	<li>Ng&oacute;n trỏ tay phải: <strong>Y</strong>, <strong>U</strong>, <strong>H</strong>, <strong>J</strong>, <strong>N</strong>.<strong>M</strong></li>\r\n</ul>\r\n\r\n<p>C&aacute;c bạn h&atilde;y li&ecirc;n tưởng như bức h&igrave;nh b&ecirc;n dưới v&agrave; bắt đầu ghi nhớ trong đầu của m&igrave;nh. Cứ như vậy, luyện tập li&ecirc;n tưởng, ghi nhớ, kết hợp c&aacute;c ng&oacute;n tay v&agrave; c&aacute;c k&yacute; tự b&agrave;n ph&iacute;m, t&ocirc;i tin chắc đ&aacute;nh văn bản một thời gian, bạn sẽ tự động tăng tốc độ đ&aacute;nh m&aacute;y của m&igrave;nh một c&aacute;ch nhanh ch&oacute;ng!</p>\r\n', '0', 1500694833, 1500710534, 'http://i.imgur.com/l249oqG.png', 1),
(104, 43, 280, 1, '<p>Ch&agrave;o c&aacute;c bạn nh&eacute;!</p>\r\n\r\n<p>Vừa rồi chỗ m&igrave;nh l&agrave;m c&oacute; một anh bị ch&oacute; cắn. Anh c&oacute; chia sẻ với m&igrave;nh l&agrave;&nbsp;về&nbsp;qu&ecirc; để&nbsp;thử độc xem c&oacute; độc virus dại kh&ocirc;ng&nbsp;.Qu&ecirc; anh hiện ở x&atilde; Đầm Hồng,&nbsp;huyện Chi&ecirc;m Ho&aacute;, tỉnh Tuy&ecirc;n Quang, anh l&agrave; người d&acirc;n tộc Dao ạ.</p>\r\n\r\n<p><em><strong>C&aacute;ch thử độc như sau:</strong></em>&nbsp;</p>\r\n\r\n<p>Lấy l&aacute; c&acirc;y thuốc,rửa sạch , để r&aacute;o nước,&nbsp;sau đ&oacute; gi&atilde; n&aacute;t .&nbsp;D&ugrave;ng&nbsp;d&acirc;y buộc v&agrave;o ph&iacute;a tr&ecirc;n vết&nbsp;bị ch&oacute; cắn.</p>\r\n\r\n<p>Tiếp theo lấy gai bưởi gẩy v&agrave;o vết thương cho m&aacute;u chảy ra. Sau đ&oacute; lấy l&aacute; thuốc vừa gi&atilde; n&aacute;t đắp v&agrave;o vết thương , d&ugrave;ng khăn sạch buộc v&agrave;o,&nbsp;để khoảng 30p sau.</p>\r\n\r\n<p>Nếu thấy v&ecirc;t cắn c&oacute; hiện tượng t&iacute;m đen th&igrave; c&oacute; độc ch&oacute; dại nha.</p>\r\n\r\n<p>Mọi người n&ecirc;n đi thử sớm để ph&aacute;t hiện sớm độc&nbsp;nếu c&oacute; nh&eacute;.</p>\r\n\r\n<p>C&acirc;y thuốc t&ecirc;n g&igrave; th&igrave; thầy thuốc kh&ocirc;ng cho biết t&ecirc;n.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 1501001403, 1501346110, NULL, 1),
(105, 43, 271, 1, '<p>Hiện nay từ P/S xuất hiện nhiều&nbsp;tr&ecirc;n facebook hay tr&ecirc;n thư , thư điện tử.</p>\r\n\r\n<p>P/S l&agrave; từ viết tắt của từ Postscript trong tiếng Anh.</p>\r\n\r\n<p>Dịch sang tiếng Việt th&igrave; c&oacute; nghĩa l&agrave; ghi ch&uacute;, t&aacute;i b&uacute;t-l&agrave; phần th&ocirc;ng tin viết th&ecirc;m v&agrave;o trong c&aacute;c bức thư, sau phần chữ k&yacute;.&nbsp;</p>\r\n\r\n<p>Với một b&agrave;i viết th&ocirc;ng thường th&igrave; P/s c&oacute; nghĩa l&agrave; ghi ch&uacute;, th&ecirc;m th&ocirc;ng tin, ch&uacute; th&iacute;ch. C&ograve;n với một l&aacute; thư th&igrave; P/s thường c&oacute; nghĩa l&agrave; t&aacute;i b&uacute;t.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 1501004424, 1501123551, NULL, 1),
(106, 43, 283, 1, '<p>Mổ đẻ Ch&oacute;, M&egrave;o n&ecirc;n mổ ở giữa bụng :</p>\r\n\r\n<ul>\r\n	<li>Đ&oacute; l&agrave; đường trắng, c&oacute; &iacute;t mạch m&aacute;u đi tới n&ecirc;n mất m&aacute;u &iacute;t</li>\r\n	<li>&Iacute;t d&acirc;y thần kinh n&ecirc;n mổ xong con vật &iacute;t bị đau.</li>\r\n	<li>Kh&ocirc;ng cắt ngang cơ.</li>\r\n	<li>L&agrave; điểm giữa tử cung n&ecirc;n mổ lấy con ra sẽ dễ</li>\r\n	<li>Mở rộng l&ecirc;n tr&ecirc;n v&agrave; dưới dễ d&agrave;ng, c&oacute; thể kiểm so&aacute;t được hầu hết c&aacute;c bộ phận trong bụng.</li>\r\n	<li>Con vật phục hồi nhanh,vết mổ nhanh l&agrave;nh, sẹo vết mổ chắc, c&oacute; t&iacute;nh thẩm mỹ.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 1501005935, 1501123622, NULL, 1),
(107, 45, 265, 1, '<p><strong>Thức ăn c&ocirc;ng nghiệp d&agrave;nh cho m&egrave;o</strong> vừa c&oacute; mặt lợi vừa c&oacute; mặt hại.</p>\r\n\r\n<ul>\r\n	<li>Lợi ở chỗ chủ vật sẽ kh&ocirc;ng mất nhiều thời gian chuẩn bị đồ ăn cho m&egrave;o, thức ăn ở dạng hạt n&ecirc;n rất sạch sẽ, m&ugrave;i vị c&oacute; t&aacute;c dụng k&iacute;ch th&iacute;ch vị gi&aacute;c v&agrave; khứu gi&aacute;c m&egrave;o tốt n&ecirc;n con vật sẽ ăn được nhiều v&agrave; l&acirc;u ch&aacute;n.</li>\r\n	<li>Nhưng song với mặt lợi l&agrave; mặt hại, nếu qu&aacute; lạm dụng thức ăn n&agrave;y sẽ g&acirc;y độc cho gan v&agrave; thận của m&egrave;o, kh&oacute; đ&agrave;o thải n&ecirc;n sẽ t&iacute;ch tụ lại trong gan.</li>\r\n</ul>\r\n', '0', 1501132353, 1501137644, NULL, 1),
(108, 45, 274, 1, '<div>SML l&agrave; cụm từ viết tắt được nhiều người sử dụng, đặc biệt l&agrave; giới trẻ. SML c&oacute; thể hiểu đơn giản l&agrave; <strong>Sấp Mặt Lu&ocirc;n</strong> c&aacute;c bạn nh&eacute;!</div>\r\n', '0', 1501134367, 1501137600, NULL, 1),
(109, 45, 270, 1, '<p><strong>C&ocirc;ng thức t&iacute;nh chu vi h&igrave;nh tr&ograve;n l&agrave;</strong>:&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>C = d x pi</p>\r\n</blockquote>\r\n\r\n<p>Trong đ&oacute;:</p>\r\n\r\n<ul>\r\n	<li>d l&agrave; đường k&iacute;nh h&igrave;nh tr&ograve;n</li>\r\n	<li>C l&agrave; chu vi h&igrave;nh tr&ograve;n</li>\r\n	<li>pi = 3,14</li>\r\n</ul>\r\n\r\n<p><strong>C&ocirc;ng thức t&iacute;nh diện t&iacute;ch h&igrave;nh tr&ograve;n l&agrave;</strong>:</p>\r\n\r\n<blockquote>\r\n<p>S = pi x R<sup>2</sup></p>\r\n</blockquote>\r\n\r\n<p>Trong đ&oacute;:</p>\r\n\r\n<ul>\r\n	<li>S l&agrave; diện t&iacute;ch h&igrave;nh tr&ograve;n</li>\r\n	<li>R l&agrave; b&aacute;n k&iacute;nh h&igrave;nh tr&ograve;n</li>\r\n	<li>pi = 3,14</li>\r\n</ul>\r\n', '0', 1501137806, 1501151294, NULL, 1),
(110, 45, 264, 1, '<div>C&aacute;c bệnh của ch&oacute; l&acirc;y sang người bao gồm :</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>I. <strong>Bệnh dại&nbsp;( Rabies)</strong></div>\r\n\r\n<ul>\r\n	<li>Dại l&agrave; một bệnh truyền nhiễm nguy hiểm ở ch&oacute; c&oacute; khả năng l&acirc;y lan sang người. 96% người mắc bệnh dại th&ocirc;ng qua vết cắn, vết cắn&nbsp;c&agrave;ng gần d&acirc;y thần kinh th&igrave; c&agrave;ng nguy hiểm, một số mắc do gh&eacute;p gi&aacute;c mạc của người bị mắc dại hoặc h&iacute;t phải kh&ocirc;ng kh&iacute; c&oacute; virus dại, nhất l&agrave; nơi dơi đang sinh sống.Ngươ&igrave; mắc bệnh dại thường c&oacute; những biểu hiện như: sợ nước, sợ gi&oacute;, sợ &aacute;nh s&aacute;ng, c&oacute; nhiều trường hợp người mắc dại bị t&ecirc; liệt&nbsp;dẫn tới h&ocirc;n m&ecirc;. Thời kỳ to&agrave;n ph&aacute;t: l&uacute;c n&agrave;y người bệnh đau nhức đầu nhiều, buồn n&ocirc;n, ch&oacute;ng mặt, lo &acirc;u cực độ, trạng th&aacute;i k&iacute;ch th&iacute;ch v&agrave; tăng cảm gi&aacute;c biểu hiện l&agrave; sợ nước, sợ gi&oacute;, &aacute;nh s&aacute;ng, m&ugrave;i lạ. Ngo&agrave;i ra c&ograve;n c&oacute; c&aacute;c biểu hiện của rối loạn thần kinh thực vật, như gi&atilde;n đồng tử, tăng tiết nước bọt, nước mắt, v&atilde; mồ h&ocirc;i, hạ huyết &aacute;p&hellip; Người bệnh tử vong sau v&agrave;i ng&agrave;y khi l&ecirc;n cơn dại. V&igrave; thế, khi bị ch&oacute; dại cắn h&atilde;y mau ch&oacute;ng đến cơ sở y tế gần nhất để được c&aacute;c b&aacute;c sĩ tư vấn v&agrave; gi&uacute;p đỡ, tr&aacute;nh những trường hợp xấu xảy ra.</li>\r\n</ul>\r\n\r\n<div>II. <strong>Bệnh Leptospira</strong></div>\r\n\r\n<ul>\r\n	<li>Leptospirosis&nbsp;l&agrave;&nbsp;bệnh&nbsp;truyền nhiễm cấp t&iacute;nh, do xoắn khuẩn&nbsp;Leptospira&nbsp;g&acirc;y ra, l&acirc;y truyền chủ yếu qua đường da, ni&ecirc;m mạc. Đặc điểm l&acirc;m s&agrave;ng l&agrave; hội chứng nhiễm khuẩn nhiễm độc to&agrave;n th&acirc;n v&agrave; hội chứng tổn thương gan, thận. Bệnh cos khả năng l&acirc;y sang người v&agrave; g&acirc;y nguy hiểm. Bệnh l&acirc;y lan do tiếp x&uacute;c với kh&ocirc;ng kh&iacute;, ch&oacute; c&oacute; chứa xoắn khuẩn, l&acirc;y l&acirc;n qua đường ti&ecirc;u h&oacute;a, thức ăn nước uống bị &ocirc; nhiễm...Người bị nhiễm bệnh sẽ c&oacute; biểu hiện mệt mỏi, ch&aacute;n ăn, nhức đầu,da v&agrave;ng, chảy m&aacute;u cam, chảy m&aacute;u ch&acirc;n răng... V&igrave; vậy ch&uacute;ng ta cần c&oacute; những biện ph&aacute;p để ph&ograve;ng ngừa bệnh x&acirc;m nhập v&agrave; l&acirc;y lan, h&atilde;y ăn uống sạch sẽ hợp vệ sinh, tr&aacute;nh tiếp x&uacute;c với ch&oacute; mắc bệnh v&agrave; nơi c&oacute; mầm bệnh, vệ sinh th&acirc;n thể v&agrave; m&ocirc; trường sạch sẽ.</li>\r\n</ul>\r\n', '0', 1501137908, 1501171456, NULL, 1),
(111, 43, 273, 1, '<p><strong>Kh&aacute;i niệm h&igrave;nh b&igrave;nh h&agrave;nh :</strong></p>\r\n\r\n<ul>\r\n	<li>H&igrave;nh b&igrave;nh h&agrave;nh l&agrave; một tứ gi&aacute;c c&oacute;hai cặp cạnh song song với nhau hoặc c&oacute; một cặp cạnh đối song song v&agrave; bằng nhau</li>\r\n</ul>\r\n\r\n<p><strong>T&iacute;nh chất h&igrave;nh b&igrave;nh h&agrave;nh</strong></p>\r\n\r\n<ul>\r\n	<li>C&aacute;c cạnh đối bằng nhau</li>\r\n	<li>C&aacute;c g&oacute;c đối bằng nhau</li>\r\n	<li>Hai đường ch&eacute;o cắt nhau tại trung điểm mỗi đường</li>\r\n	<li>H&igrave;nh b&igrave;nh h&agrave;nh l&agrave; trường hợp đặc biệt của h&igrave;nh thang</li>\r\n</ul>\r\n\r\n<p><strong>C&ocirc;ng thức t&iacute;nh diện t&iacute;ch h&igrave;nh b&igrave;nh h&agrave;nh</strong></p>\r\n\r\n<ul>\r\n	<li>Diện t&iacute;ch h&igrave;nh b&igrave;nh h&agrave;nh bằng t&iacute;ch của cạnh đ&aacute;y nh&acirc;n với chiều cao ứng với cạnh đ&oacute;.<img alt=\"OefGXef.jpg\" src=\"http://i.imgur.com/OefGXef.jpg\" /></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>S = h x a</p>\r\n</blockquote>\r\n\r\n<p>Trong đ&oacute;</p>\r\n\r\n<ul>\r\n	<li>S l&agrave; diện t&iacute;ch</li>\r\n	<li>a l&agrave; cạnh đ&aacute;y lớn</li>\r\n	<li>h l&agrave; chiều cao hạ từ đỉnh xuống cạnh a</li>\r\n</ul>\r\n', '0', 1501178222, 1501214194, 'http://i.imgur.com/OefGXef.jpg', 1),
(112, 43, 280, 1, '<p><strong><em>Mẹo thử độc ch&oacute; dại bằng đỗ xanh:</em></strong></p>\r\n\r\n<p><em>Lấy hạt đỗ xanh c&ograve;n nguy&ecirc;n vỏ xanh, rửa sạch r&ugrave;i đem nhai sống</em></p>\r\n\r\n<p>B&igrave;nh thường nếu nhai hạt đỗ sống sẽ c&oacute; cảm gi&aacute;c tanh, rất kh&oacute; ăn. Nhưng nếu bị ch&oacute; cắn m&agrave; c&oacute; độc virus dại th&igrave; khi nhai sẽ kh&ocirc;ng c&ograve;n cảm gi&aacute;c tanh, thay v&agrave;o đ&oacute; l&agrave; thấy b&ugrave;i, dễ ăn.</p>\r\n', '0', 1501249028, 1501345890, NULL, 1),
(113, 16, 291, 1, '<p><span style=\"color:#1d2129\">Đ&aacute;nh gi&aacute; từ thực tế l&agrave; lo&agrave;i người vẫn chưa bị tuyệt chủng, c&oacute; rất nhiều người nghĩ như vậy.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">H&atilde;y suy nghĩ về n&oacute; một c&aacute;ch logic: Nếu một ch&agrave;ng trai th&iacute;ch một c&ocirc; g&aacute;i, nhưng cổ kh&ocirc;ng cảm thấy giống vậy. Do đ&oacute;, ảnh quyết định n&oacute; kh&ocirc;ng đ&aacute;ng đấu tranh. N&ecirc;n kh&ocirc;ng c&oacute; mối quan hệ n&agrave;o cả. B&acirc;y giờ n&oacute;i một c&ocirc; g&aacute;i th&iacute;ch một ch&agrave;ng trai, nhưng ảnh&nbsp;kh&ocirc;ng th&iacute;ch c&ocirc; ấy trở lại. V&igrave; vậy, cổ quyết định n&oacute; kh&ocirc;ng đ&aacute;ng. Kh&ocirc;ng c&oacute; mối quan hệ n&agrave;o cả. Nếu những mối quan hệ duy nhất đ&aacute;ng theo đuổi l&agrave; những mối quan hệ m&agrave; cả hai người đều th&iacute;ch nhau, v&agrave; nếu t&igrave;nh đơn phương sẽ kh&ocirc;ng bao giờ đ&aacute;ng, th&igrave; điều đ&oacute; c&oacute; ngụ &yacute; rằng bất kỳ hai người n&agrave;o l&agrave; một cặp vợ chồng đều bắt đầu th&iacute;ch nhau v&agrave;o c&ugrave;ng một thời điểm ch&iacute;nh x&aacute;c.&nbsp;</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">V&agrave; x&aacute;c suất xảy ra điều đ&oacute; l&agrave; rất nhỏ. Trong bất kỳ mối quan hệ n&agrave;o, một người chắc chắn sẽ th&iacute;ch người kia trước. Nếu mọi người chỉ theo đuổi mối quan hệ với người th&iacute;ch họ c&ugrave;ng một l&uacute;c, th&igrave; sẽ kh&ocirc;ng c&oacute; mối quan hệ n&agrave;o được tiếp diễn.&nbsp;</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">T&ocirc;i c&oacute; một người bạn c&oacute; cha mẹ l&agrave; b&aacute;c sĩ v&agrave; y t&aacute;. Họ gặp nhau ở bệnh viện nơi họ l&agrave;m việc, v&agrave; người bố đ&atilde; mời người mẹ hẹn h&ograve; tận 13 lần trước khi b&agrave; n&oacute;i &ldquo;Yes&rdquo;.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">C&oacute; thể n&oacute;i rằng điều đ&oacute; kh&ocirc;ng đ&aacute;ng với bất k&igrave; ai. Tuy l&agrave; phần thưởng xứng đ&aacute;ng cho sự ki&ecirc;n tr&igrave; của bố bạn t&ocirc;i, nhưng n&oacute; c&oacute; thể rất nhiều khả năng l&agrave; một sự l&atilde;ng ph&iacute; thời gian của mọi người v&agrave; kết quả kh&aacute; l&agrave; tồi tệ. Nếu bạn biết r&otilde; r&agrave;ng rằng người kia kh&ocirc;ng th&iacute;ch bạn (như cổ đ&atilde; n&oacute;i trước mặt bạn, c&oacute; thể l&agrave; nhiều lần &quot;Em kh&ocirc;ng th&iacute;ch anh&quot; hoặc &quot;Kh&ocirc;ng, vẫn kh&ocirc;ng th&iacute;ch anh&rdquo; hoặc bằng c&aacute;ch kh&aacute;c b&agrave;y tỏ rằng cổ thực sự th&iacute;ch l&agrave;m mọi việc kh&aacute;c hơn l&agrave; hẹn h&ograve; với bạn), th&igrave; mối quan hệ kh&ocirc;ng đ&aacute;ng đ&acirc;u. Nếu bạn kh&ocirc;ng biết chắc rằng c&ocirc; ấy th&iacute;ch hay kh&ocirc;ng, h&atilde;y hỏi c&ocirc; ấy một lần. Nếu c&ocirc; ấy kh&ocirc;ng d&aacute;m chắn cổ c&oacute; th&iacute;ch bạn nhưng đồng &yacute; hẹn h&ograve; để xem liệu hai người c&oacute; t&acirc;m đầu &yacute; hợp th&igrave; được th&ocirc;i. C&ograve;n nếu c&ocirc; ấy n&oacute;i kh&ocirc;ng v&igrave; c&ocirc; ấy kh&ocirc;ng quan t&acirc;m, h&atilde;y r&uacute;t lui.</span></p>\r\n', '0', 1501569227, 1501642608, NULL, 1),
(114, 16, 292, 1, '<p><span style=\"color:#1d2129\">C&acirc;u trả lời của Gordon Miller [+466]:</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">Lần đầu ti&ecirc;n gặp người vợ hiện tại t&ocirc;i khi đ&oacute; 33 c&ograve;n c&ocirc;&nbsp;ấy 31 tuổi. Trước đ&oacute; cả hai đều đ&atilde; kết h&ocirc;n với một người kh&ocirc;ng hề muốn c&oacute; con mặc d&ugrave; ch&uacute;ng t&ocirc;i thật sự rất mong muốn c&oacute; một đứa b&eacute;. V&igrave; vậy, kh&ocirc;ng ngạc nhi&ecirc;n rằng đứa con đầu l&ograve;ng của vợ chồng t&ocirc;i ra đời khi t&ocirc;i đ&atilde; 35 v&agrave; vợ t&ocirc;i 33. C&oacute; thể n&oacute;i rằng đ&acirc;y l&agrave; điều tuyệt vời nhất m&agrave; ch&uacute;ng t&ocirc;i c&oacute; được trong suốt cuộc đời của m&igrave;nh. T&ocirc;i biết kh&ocirc;ng phải ai cũng may mắn v&agrave; c&oacute; phước như vậy, v&agrave; ơn ch&uacute;a v&igrave; giờ đ&acirc;y ch&uacute;ng t&ocirc;i đ&atilde; c&oacute; ba cậu nh&oacute;c đ&aacute;ng y&ecirc;u m&agrave; t&ocirc;i v&agrave; vợ sẽ hết sức tự h&agrave;o về con người ch&uacute;ng sẽ trở th&agrave;nh.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">T&ocirc;i c&oacute; mấy đứa bạn, ch&uacute;ng n&oacute; kh&ocirc;ng bao giờ muốn con c&aacute;i v&agrave; lu&ocirc;n chắc chắn với điều đ&oacute;. Ch&uacute;ng n&oacute; kh&ocirc;ng cảm thấy như đ&atilde; bỏ lỡ bất cứ điều g&igrave;. Họ đ&atilde; đi du lịch v&ograve;ng quanh thế giới, c&oacute; hơn 1 triệu đ&ocirc; trong ng&acirc;n h&agrave;ng. L&ecirc;n kế hoạch cho cuộc đời v&agrave; điều đ&oacute; đối với họ, quan trọng hơn việc c&oacute; một đứa con. T&ocirc;i thấy c&oacute; &iacute;t điểm chung giữa hai b&ecirc;n.&nbsp;</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">T&ocirc;i đo&aacute;n rằng bạn cũng thật sự muốn c&oacute; con nhưng chồng bạn th&igrave; kh&ocirc;ng. Kh&aacute; l&agrave; nguy hiểm cho đứa trẻ khi người mẹ bước qua ngưỡng tuổi 40. Những nguy cơ mắc bệnh tự kỉ v&agrave; c&aacute;c loại bệnh kh&aacute;c sẽ gia tăng. Nếu dự định c&oacute; con trong tương lai, t&ocirc;i khuy&ecirc;n bạn n&ecirc;n sớm n&oacute;i chuyện nghi&ecirc;m t&uacute;c với chồng m&igrave;nh.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">B&agrave;i viết gốc :</span>https://www.quora.com/Will-I-regret-not-having-kids-when-I-get-older</p>\r\n', '0', 1501570116, 1501642630, NULL, 1),
(115, 23, 293, 1, '<p><span style=\"color:#1d2129\">C&acirc;u trả lời của Deepak Shukla.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">C&oacute;.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">Thời gian sẽ dạy cho bạn thấy</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">T&ocirc;i gặp một c&ocirc; g&aacute;i. C&ocirc; v&agrave; t&ocirc;i th&agrave;nh bạn b&egrave;. Rồi người y&ecirc;u của nhau. Rồi vừa l&agrave; người y&ecirc;u vừa l&agrave; người bạn th&acirc;n nhất. T&ocirc;i đ&atilde; từng nghĩ m&igrave;nh sẽ cưới em một ng&agrave;y n&agrave;o đ&oacute;.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">Giờ ch&uacute;ng t&ocirc;i kh&ocirc;ng c&ograve;n n&oacute;i chuyện với nhau nữa.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">T&ocirc;i biết một cậu kia. Ch&uacute;ng t&ocirc;i từng chơi th&acirc;n ở trường. L&uacute;c n&agrave;o cũng c&oacute; nhau. Như anh em. Rồi thời gian tr&ocirc;i qua. Cả hai dần thay đổi.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">Giờ ch&uacute;ng t&ocirc;i kh&ocirc;ng c&ograve;n n&oacute;i chuyện với nhau nữa.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">T&ocirc;i gặp một người. Ch&uacute;ng t&ocirc;i đi du lịch c&ugrave;ng nhau. 6 tuần. 18 - 24 tiếng một ng&agrave;y, 7 ng&agrave;y một tuần ch&uacute;ng ở b&ecirc;n nhau. Anh ấy biết nghĩ b&iacute; mật s&acirc;u k&iacute;n nhất của t&ocirc;i. Rồi chuyến đi kết th&uacute;c.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">Giờ ch&uacute;ng t&ocirc;i kh&ocirc;ng c&ograve;n n&oacute;i chuyện với nhau nữa.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">I c&oacute; một người bạn. Sống chung với nhau 2 năm. Đ&ugrave;a vui mọi sự tr&ecirc;n đời. Rời đại học. Ch&uacute;ng t&ocirc;i cố gắng để chơi th&acirc;n với nhau. Rồi cuộc sống lu&ocirc;n c&oacute; c&aacute;ch của n&oacute; để chen v&agrave;o.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">Giờ ch&uacute;ng t&ocirc;i chả mấy khi n&oacute;i chuyện nữa.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">T&ocirc;i gặp một người. Ch&uacute;ng t&ocirc;i chả n&oacute;i chuyện hằng ng&agrave;y, thậm ch&iacute; c&oacute; khi hằng tuần. Thời gian cứ tr&ocirc;i v&agrave; ch&uacute;ng t&ocirc;i cứ lạ rồi lại th&acirc;n, lại l&agrave; rồi lại th&acirc;n, m&atilde;i trong c&aacute;i v&ograve;ng luẩn quẩn ấy.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">Anh ấy biết c&ocirc; g&aacute;i từng l&agrave; người t&ocirc;i y&ecirc;u</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">Anh ấy biết cậu bạn t&ocirc;i từng chơi chung</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">Anh ấy biết ch&agrave;ng trai t&ocirc;i đi du lịch c&ugrave;ng</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">Anh ấy biết người t&ocirc;i từng chung sống.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">Anh đứng đ&oacute; nh&igrave;n người đến. Rồi thấy họ rời đi. Anh vẫn sẽ thấy nhiều người kh&aacute;c đến, v&agrave; cũng sẽ thấy nhiều người kh&aacute;c đi.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">Người đ&oacute; l&agrave; anh trai t&ocirc;i.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">Thời gian đ&atilde; cho t&ocirc;i thấy, anh sẽ l&agrave; người b&ecirc;n t&ocirc;i m&atilde;i m&atilde;i.</span></p>\r\n\r\n<p><span style=\"color:#1d2129\">V&igrave; anh l&agrave; anh trai t&ocirc;i.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 1501642549, 1501642619, NULL, 1),
(116, 31, 244, 1, '<p>L&agrave;m sao để t&iacute;nh phần trăm nhanh v&agrave; ch&iacute;nh x&aacute;c nhất, b&agrave;i tổng hợp dưới đ&acirc;y sẽ gi&uacute;p bạn c&oacute; c&acirc;u trả lời ch&iacute;nh x&aacute;c!</p>\r\n\r\n<p><strong>1. C&aacute;ch t&iacute;nh phần trăm ch&ecirc;nh lệch:</strong></p>\r\n\r\n<p>Trong thời buổi kinh tế hiện nay, việc t&iacute;nh phần trăm ch&ecirc;nh lệch l&agrave; rất phổ biến.</p>\r\n\r\n<p>V&iacute; dụ: Cuối năm 2015 c&ocirc;ng ty A đạt doanh thu l&agrave; 200 tỷ đồng, đến cuối năm 2016 doanh thu đat 350 tỉ đồng. Vậy mức&nbsp; tăng trưởng doanh thu năm 2016 so với năm 2015 l&agrave; bao nhi&ecirc;u phần trăm?<br />\r\n&nbsp;</p>\r\n\r\n<blockquote><strong>Phần trăm tăng trưởng 2016 = ( Doanh thu 2016 - Doanh thu 2015 ) / Doanh thu 2015 * 100&nbsp;</strong>\r\n\r\n<p>( 350-200 ) / 200 x 100 = 75%</p>\r\n</blockquote>\r\n\r\n<p><br />\r\nCh&uacute;ng ta c&oacute; thể kết luận, c&ocirc;ng ty A c&oacute; mức tăng trưởng gần 75% so với năm 2015<br />\r\n<br />\r\nTương tự như vậy để t&iacute;nh phần trăm về lợi nhuận của năm sau so với năm trước, qu&yacute; sau so với qu&yacute; trước, th&aacute;ng sau so với th&aacute;ng trước... 1 c&aacute;ch dễ d&agrave;ng theo c&ocirc;ng thức dưới đ&acirc;y:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p><strong>Phần trăm ch&ecirc;nh lệch = (Doanh thu sau- doanh thu trước) / doanh thu trước X 100%</strong></p>\r\n</blockquote>\r\n\r\n<p>Đơn vị t&iacute;nh: %</p>\r\n\r\n<p><strong>2. C&aacute;ch t&iacute;nh phần trăm ho&agrave;n th&agrave;nh hoặc vượt chỉ ti&ecirc;u:</strong></p>\r\n\r\n<p>Trong cuộc sống c&aacute;c bạn cũng đ&atilde; gặp qua rất nhiều trường hợp x&eacute;t phần trăm ho&agrave;n th&agrave;nh so với chỉ ti&ecirc;u đặt ra, v&agrave; dĩ nhi&ecirc;n c&ocirc;ng thức t&iacute;nh cũng rất đơn giản.</p>\r\n\r\n<p>Trường hợp 1: Mức đạt được thấp hơn mức chỉ ti&ecirc;u</p>\r\n\r\n<p>Vd: Cửa h&agrave;ng A đặt chỉ ti&ecirc;u một ng&agrave;y b&aacute;n h&agrave;ng cho 100 kh&aacute;ch h&agrave;ng, cuối ng&agrave;y họ tổng kết c&oacute; 75 kh&aacute;ch h&agrave;ng mua h&agrave;ng cho cửa h&agrave;ng trong ng&agrave;y h&ocirc;m đ&oacute;, vậy ng&agrave;y h&ocirc;m đ&oacute; cửa h&agrave;ng A đ&atilde; ho&agrave;n th&agrave;nh được bao nhi&ecirc;u phần trăm chỉ ti&ecirc;u đề ra?</p>\r\n\r\n<blockquote>\r\n<p><strong>Phần trăm ho&agrave;n th&agrave;nh = ( Mức đ&atilde; ho&agrave;n th&agrave;nh : Mức đặt mục ti&ecirc;u ) * 100%</strong></p>\r\n</blockquote>\r\n\r\n<p>Đơn vị t&iacute;nh: %</p>\r\n\r\n<p>Như vậy cửa h&agrave;ng A đ&atilde; đạt: ( 75 : 100 ) X 100% = 75% mức chỉ ti&ecirc;u ban đầu đặt ra.</p>\r\n\r\n<p>Trường hợp 2: Mức đạt được vượt mức chỉ ti&ecirc;u</p>\r\n\r\n<p>Vd: C&ocirc;ng ty A đặt ra mục ti&ecirc;u cuối năm 2017 phải đạt doanh thu 200 tỷ đồng, nhưng đến cuối th&aacute;ng 9, tức l&agrave; hết qu&yacute; 3, doanh thu của c&ocirc;ng ty A đ&atilde; đạt mức 450 tỉ đồng, như vậy phần trăm doanh thu vượt chỉ ti&ecirc;u l&agrave; bao nhi&ecirc;u?</p>\r\n\r\n<p>Ta c&oacute; c&ocirc;ng thức sau đ&acirc;y:</p>\r\n\r\n<blockquote>\r\n<p><strong>Phần trăm vượt chỉ ti&ecirc;u = ( Doanh thu đ&atilde; ho&agrave;n th&agrave;nh - Doanh thu đặt mục ti&ecirc;u ) * 100%</strong></p>\r\n</blockquote>\r\n\r\n<p>Như vậy mức vượt chỉ ti&ecirc;u c&ocirc;ng ty A sẽ l&agrave;: ( 450 - 200 ) x 100% = 250%</p>\r\n\r\n<p>C&aacute;c bạn lưu &yacute; mức chỉ ti&ecirc;u vượt bao giờ cũng sẽ cao hơn 100%.</p>\r\n\r\n<p><strong>3. C&aacute;ch t&iacute;nh phần trăm h&agrave;ng h&oacute;a</strong></p>\r\n\r\n<p>Đ&acirc;y l&agrave; trường hợp ch&uacute;ng ta hay gặp nhất trong cuộc sống hằng ng&agrave;y v&agrave; c&aacute;ch t&iacute;nh cũng rất đơn giản.</p>\r\n\r\n<p>V&iacute; dụ: Cửa h&agrave;ng TGDĐ khai trương cửa h&agrave;ng mới, ng&agrave;y đầu ti&ecirc;n họ b&aacute;n khuyến m&atilde;i tất cả sản phẩm giảm gi&aacute; 10%, vậy nếu bạn mua 1 chiếc iphone 6 c&oacute; gi&aacute; b&aacute;n l&agrave; 16 triệu đồng, bạn sẽ được giảm bao nhi&ecirc;u tiền?</p>\r\n\r\n<p>Ta c&oacute; c&ocirc;ng thức sau:</p>\r\n\r\n<blockquote>\r\n<p><strong>Số tiền giảm gi&aacute; = ( Gi&aacute; gốc x % giảm gi&aacute; ) / 100%</strong></p>\r\n</blockquote>\r\n\r\n<p>Như vậy &aacute;p dụng c&ocirc;ng thức tr&ecirc;n ta sẽ t&iacute;nh được số tiền được giảm sẽ l&agrave;: ( 16000000 X 10 ) / 100 = 1.600.000 đồng.</p>\r\n\r\n<p><strong>Kết luận</strong>: Từ những c&ocirc;ng thức cơ bản tr&ecirc;n ch&uacute;ng ta c&oacute; thể suy ra nhiều c&aacute;ch t&iacute;nh phần trăm kh&aacute;c nhau t&ugrave;y theo mỗi trường hợp kh&aacute;c nhau.</p>\r\n', '0', 1501956328, 1502068139, NULL, 1),
(117, 43, 263, 1, '<p>Hiện nay, nu&ocirc;i th&uacute; cảnh đ&atilde; v&agrave; đang dần trở n&ecirc;n quen thuộc với mọi người. Vấn đề sức khỏe của th&uacute; cưng được c&aacute;c gia đ&igrave;nh rất quan t&acirc;m. Để đảm bảo sức khỏe v&agrave; ph&ograve;ng trừ bệnh tật th&igrave; ti&ecirc;m vaccine l&agrave; c&aacute;ch tốt nhất gi&uacute;p th&uacute; cưng ph&ograve;ng chống được c&aacute;c bệnh nguy hiểm, bệnh truyền nhiễm, hay bệnh kh&ocirc;ng c&oacute; thuốc chữa. Từ đ&oacute; m&agrave; c&aacute;c vấn đề thiệt hại về kinh tế, thời gian , c&ocirc;ng sức hay t&iacute;nh mạng của th&uacute; cưng sẽ được ph&ograve;ng tr&aacute;nh.</p>\r\n\r\n<p><strong><em>Lịch ti&ecirc;m vaccine như sau</em></strong></p>\r\n\r\n<ul>\r\n	<li>Mũi 1: l&uacute;c 3 tuần tuổi, ti&ecirc;m vacine ph&ograve;ng 5 bệnh</li>\r\n	<li>Mũi 2: l&uacute;c 6 tuần tuổi, ti&ecirc;m vacine ph&ograve;ng 7 bệnh</li>\r\n	<li>Mũi 3: l&uacute;c 3 th&aacute;ng tuổi, ti&ecirc;m vacine ph&ograve;ng b&ecirc;nh dại</li>\r\n	<li>Ti&ecirc;m nhắc lại: 1 năm sau ti&ecirc;m nhắc lại một mũi vaccine 5 bệnh hoặc 7 bệnh. V&agrave; nhắc lại định kỳ h&agrave;ng năm</li>\r\n</ul>\r\n\r\n<p><strong><em>Vaccine 5 bệnh ph&ograve;ng c&aacute;c bệnh sau</em></strong>: care virus, parvo virus, vi&ecirc;m gan truyền nhiễm, ho cũi ch&oacute;, ph&oacute; c&uacute;m</p>\r\n\r\n<p><strong><em>Vacine 7 bệnh ph&ograve;ng c&aacute;c bệnh</em></strong>: care virus, parvo virrus, vi&ecirc;m gan truyền nhiễm, ho cũi ch&oacute;, ph&oacute; c&uacute;m, leptospira v&agrave; corona virus.</p>\r\n\r\n<p><strong><em>C&aacute;ch bảo quản vaccine:</em></strong></p>\r\n\r\n<ul>\r\n	<li>Bảo quản ở nhiệt độ 2-7 độ C</li>\r\n	<li>Tr&aacute;nh &aacute;nh nắng mặt trời</li>\r\n	<li>Tr&aacute;nh va đập mạnh</li>\r\n	<li>Di chuyển vaccine cần bảo quản theo đ&uacute;ng quy định</li>\r\n</ul>\r\n\r\n<p><strong><em>Ch&uacute; &yacute; khi ti&ecirc;m vaccine:</em></strong></p>\r\n\r\n<ul>\r\n	<li>N&ecirc;n đưa ch&oacute; tới ph&ograve;ng kh&aacute;m th&uacute; y để được tư vấn v&agrave; ti&ecirc;m ph&ograve;ng</li>\r\n	<li>Kiểm tra sức khỏe v&agrave; nhiệt độ của ch&oacute; trước khi ti&ecirc;m, kh&ocirc;ng ti&ecirc;m khi ch&oacute; sốt hoặc c&oacute; biểu hiện bệnh l&yacute;. nhiệt độ b&igrave;nh thường của ch&oacute; l&agrave; 38-39,2 độ C</li>\r\n	<li>Tẩy giun cho ch&oacute; 1 tuần trước khi ti&ecirc;m</li>\r\n	<li>Kh&ocirc;ng tắm cho ch&oacute; sau khi ti&ecirc;m</li>\r\n	<li>kh&ocirc;ng cho ăn đồ tanh, mỡ, trứng , sữa; n&ecirc;n cho ăn thịt trong v&ograve;ng một tuần</li>\r\n	<li>Cần ti&ecirc;m đ&uacute;ng c&aacute;ch, nếu kh&ocirc;ng vaccine sẽ kh&ocirc;ng c&oacute; t&aacute;c dụng</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 1502123999, 1502206006, NULL, 1),
(118, 43, 260, 1, '<p><strong><em>Hải l&yacute;</em> l&agrave; đơn vị đo chiều d&agrave;i</strong> được sử dụng trong ng&agrave;nh h&agrave;ng hải hay l&agrave; một đơn vị độ d&agrave;i được d&ugrave;ng trong hoa ti&ecirc;u h&agrave;ng hải. L&agrave; độ d&agrave;i của cung kinh tuyến tr&ecirc;n bề mặt Tr&aacute;i Đất, tương ứng với g&oacute;c tr&ecirc;n đường tr&ograve;n lớn của n&oacute;.</p>\r\n\r\n<ul>\r\n	<li>K&iacute; hiệu : nautica mile - NM, international nautical mile - INM , hay dặm biển.</li>\r\n</ul>\r\n\r\n<p><strong>C&aacute;ch t&iacute;nh của hải l&yacute;</strong></p>\r\n\r\n<blockquote>\r\n<p>1 hải l&yacute; = 40000 km / (360 x 60) = 1,852 km hay 1852 m</p>\r\n</blockquote>\r\n\r\n<p>Trong đ&oacute;:</p>\r\n\r\n<ul>\r\n	<li>40000 km l&agrave; độ d&agrave;i cung kinh tuyến</li>\r\n	<li>360 độ l&agrave; tổng độ g&oacute;c</li>\r\n	<li>60 gi&acirc;y bằng 1 độ</li>\r\n</ul>\r\n\r\n<p><img alt=\"1 hải lý bằng bao nhiêu km\" src=\"http://file.vforum.vn/hinh/2014/6/hai-ly.jpg\" /></p>\r\n', '0', 1502127027, 1502206359, 'http://file.vforum.vn/hinh/2014/6/hai-ly.jpg', 1),
(119, 38, 276, 1, '<p>Khi doanh nghiệp ph&aacute;t sinh nghiệp vụ mua, b&aacute;n, thanh to&aacute;n&nbsp;tiền trong kỳ, số tiền c&ograve;n nợ sang kỳ sau hay goi tắt l&agrave; <strong>c&ocirc;ng nợ.</strong></p>\r\n\r\n<p>C&ocirc;ng nợ chia th&agrave;nh :</p>\r\n\r\n<ul>\r\n	<li>C&ocirc;ng nợ phải thu của kh&aacute;ch h&agrave;ng</li>\r\n	<li>C&ocirc;ng nợ phải trả cho nh&agrave; cung cấp</li>\r\n</ul>\r\n\r\n<p><strong>1. C&ocirc;ng nợ phải thu của kh&aacute;ch h&agrave;ng</strong></p>\r\n\r\n<p>Hạch to&aacute;n tr&ecirc;n t&agrave;i khoản 131,</p>\r\n\r\n<p>a) T&agrave;i khoản n&agrave;y d&ugrave;ng để phản &aacute;nh c&aacute;c khoản nợ phải thu v&agrave; t&igrave;nh h&igrave;nh thanh to&aacute;n c&aacute;c khoản nợ phải thu của doanh nghiệp với kh&aacute;ch h&agrave;ng về tiền b&aacute;n sản phẩm, h&agrave;ng h&oacute;a, BĐS đầu tư, TSCĐ, c&aacute;c khoản đầu tư t&agrave;i ch&iacute;nh, cung cấp dịch vụ. T&agrave;i khoản n&agrave;y c&ograve;n d&ugrave;ng để phản &aacute;nh c&aacute;c khoản phải thu của người nhận thầu XDCB với người giao thầu về khối lượng c&ocirc;ng t&aacute;c XDCB đ&atilde; ho&agrave;n th&agrave;nh. Kh&ocirc;ng phản &aacute;nh v&agrave;o t&agrave;i khoản n&agrave;y c&aacute;c nghiệp vụ thu tiền ngay.</p>\r\n\r\n<p>b) Khoản phải thu của kh&aacute;ch h&agrave;ng cần được hạch to&aacute;n chi tiết cho từng đối tượng, từng nội dung phải thu, theo d&otilde;i chi tiết kỳ hạn thu hồi (tr&ecirc;n 12 th&aacute;ng hay kh&ocirc;ng qu&aacute; 12 th&aacute;ng kể từ thời điểm b&aacute;o c&aacute;o) v&agrave; ghi ch&eacute;p theo từng lần thanh to&aacute;n. Đối tượng phải thu l&agrave; c&aacute;c kh&aacute;ch h&agrave;ng c&oacute; quan hệ kinh tế với doanh nghiệp về mua sản phẩm, h&agrave;ng ho&aacute;, nhận cung cấp dịch vụ, kể cả TSCĐ, bất động sản đầu tư, c&aacute;c khoản đầu tư t&agrave;i ch&iacute;nh.</p>\r\n\r\n<p>c) B&ecirc;n giao ủy th&aacute;c xuất khẩu ghi nhận trong t&agrave;i khoản n&agrave;y đối với c&aacute;c khoản phải thu từ b&ecirc;n nhận ủy th&aacute;c xuất khẩu về tiền b&aacute;n h&agrave;ng xuất khẩu như c&aacute;c giao dịch b&aacute;n h&agrave;ng, cung cấp dịch vụ th&ocirc;ng thường.</p>\r\n\r\n<p>d) Trong hạch to&aacute;n chi tiết t&agrave;i khoản n&agrave;y, kế to&aacute;n phải tiến h&agrave;nh ph&acirc;n loại c&aacute;c khoản nợ, loại nợ c&oacute; thể trả đ&uacute;ng hạn, khoản nợ kh&oacute; đ&ograve;i hoặc c&oacute; khả năng kh&ocirc;ng thu hồi được, để c&oacute; căn cứ x&aacute;c định số tr&iacute;ch lập dự ph&ograve;ng phải thu kh&oacute; đ&ograve;i hoặc c&oacute; biện ph&aacute;p xử l&yacute; đối với khoản nợ phải thu kh&ocirc;ng đ&ograve;i được.</p>\r\n\r\n<p>đ) Trong quan hệ b&aacute;n sản phẩm, h&agrave;ng ho&aacute;, cung cấp dịch vụ theo thoả thuận giữa doanh nghiệp với kh&aacute;ch h&agrave;ng, nếu sản phẩm, h&agrave;ng ho&aacute;, BĐS đầu tư đ&atilde; giao, dịch vụ đ&atilde; cung cấp kh&ocirc;ng đ&uacute;ng theo thoả thuận trong hợp đồng kinh tế th&igrave; người mua c&oacute; thể y&ecirc;u cầu doanh nghiệp giảm gi&aacute; h&agrave;ng b&aacute;n hoặc trả lại số h&agrave;ng đ&atilde; giao.</p>\r\n\r\n<p>e) Doanh nghiệp phải theo d&otilde;i chi tiết c&aacute;c khoản nợ phải thu của kh&aacute;ch h&agrave;ng theo từng loại tiền&nbsp;tệ. Đối với c&aacute;c khoản phải thu bằng ngoại tệ th&igrave; thực hiện theo nguy&ecirc;n tắc:</p>\r\n\r\n<p>- Khi ph&aacute;t sinh c&aacute;c khoản nợ phải thu của kh&aacute;ch h&agrave;ng (b&ecirc;n Nợ t&agrave;i khoản 131), kế to&aacute;n phải quy đổi ra Đồng Việt Nam theo tỷ gi&aacute; giao dịch thực tế tại thời điểm ph&aacute;t sinh (l&agrave; tỷ gi&aacute; mua của ng&acirc;n h&agrave;ng thương mại nơi chỉ định kh&aacute;ch h&agrave;ng thanh to&aacute;n). Ri&ecirc;ng trường hợp nhận trước của người mua, khi đủ điều kiện ghi nhận doanh thu th&igrave; b&ecirc;n Nợ t&agrave;i khoản 131 &aacute;p dụng tỷ gi&aacute; ghi sổ thực tế đ&iacute;ch danh đối với số tiền đ&atilde; nhận trước;</p>\r\n\r\n<p>- Khi thu hồi nợ phải thu của kh&aacute;ch h&agrave;ng (b&ecirc;n C&oacute; t&agrave;i khoản 131) kế to&aacute;n phải quy đổi ra Đồng Việt Nam theo tỷ gi&aacute; ghi sổ thực tế đ&iacute;ch danh cho từng đối tượng kh&aacute;ch nợ (Trường hợp kh&aacute;ch nợ c&oacute; nhiều giao dịch th&igrave; tỷ gi&aacute; thực tế đ&iacute;ch danh được x&aacute;c định l&agrave; tỷ gi&aacute; b&igrave;nh qu&acirc;n gia quyền di động c&aacute;c giao dịch của kh&aacute;ch nợ đ&oacute;). Ri&ecirc;ng trường hợp ph&aacute;t sinh giao dịch nhận trước tiền của người mua th&igrave; b&ecirc;n C&oacute; t&agrave;i khoản 131 &aacute;p dụng tỷ gi&aacute; giao dịch thực tế (l&agrave; tỷ gi&aacute; ghi v&agrave;o b&ecirc;n Nợ t&agrave;i khoản tiền) tại thời điểm nhận trước;</p>\r\n\r\n<p>- Doanh nghiệp phải đ&aacute;nh gi&aacute; lại c&aacute;c khoản phải thu của kh&aacute;ch h&agrave;ng c&oacute; gốc ngoại tệ tại tất cả c&aacute;c thời điểm lập B&aacute;o c&aacute;o t&agrave;i ch&iacute;nh theo quy định của ph&aacute;p luật. Tỷ gi&aacute; giao dịch thực tế khi đ&aacute;nh gi&aacute; lại khoản phải thu của kh&aacute;ch h&agrave;ng l&agrave; tỷ gi&aacute; mua ngoại tệ của ng&acirc;n h&agrave;ng thương mại nơi doanh nghiệp chỉ định kh&aacute;ch h&agrave;ng thanh to&aacute;n tại thời điểm lập B&aacute;o c&aacute;o t&agrave;i ch&iacute;nh. Trường hợp doanh nghiệp c&oacute; nhiều khoản phải thu v&agrave; giao dịch tại nhiều ng&acirc;n h&agrave;ng th&igrave; được chủ động lựa chọn tỷ gi&aacute; mua của một trong những ng&acirc;n h&agrave;ng thương mại nơi doanh nghiệp thường xuy&ecirc;n c&oacute; giao dịch. C&aacute;c đơn vị trong tập đo&agrave;n được &aacute;p dụng chung một tỷ gi&aacute; do C&ocirc;ng ty mẹ quy định (phải đảm bảo s&aacute;t với tỷ gi&aacute; giao dịch thực tế) để đ&aacute;nh gi&aacute; lại c&aacute;c khoản phải thu của kh&aacute;ch h&agrave;ng c&oacute; gốc ngoại tệ ph&aacute;t sinh từ c&aacute;c giao dịch trong nội bộ tập đo&agrave;n.</p>\r\n\r\n<p><strong>&nbsp;2. C&ocirc;ng nợ phải trả cho người b&aacute;n</strong></p>\r\n\r\n<p>Hạch to&aacute;n tr&ecirc;n t&agrave;i khoản 331</p>\r\n\r\n<p>a)T&agrave;i khoản n&agrave;y d&ugrave;ng để phản &aacute;nh t&igrave;nh h&igrave;nh thanh to&aacute;n về c&aacute;c khoản nợ phải trả của doanh nghiệp cho người b&aacute;n vật tư, h&agrave;ng h&oacute;a, người cung cấp dịch vụ, người b&aacute;n TSCĐ, BĐSĐT, c&aacute;c khoản đầu tư t&agrave;i ch&iacute;nh theo hợp đồng kinh tế đ&atilde; k&yacute; kết. T&agrave;i khoản n&agrave;y cũng được d&ugrave;ng để phản &aacute;nh t&igrave;nh h&igrave;nh thanh to&aacute;n về c&aacute;c khoản nợ phải trả cho người nhận thầu x&acirc;y lắp ch&iacute;nh, phụ. Kh&ocirc;ng phản &aacute;nh v&agrave;o t&agrave;i khoản n&agrave;y c&aacute;c nghiệp vụ mua trả tiền ngay.</p>\r\n\r\n<p>b) Nợ phải trả cho người b&aacute;n, người cung cấp, người nhận thầu x&acirc;y lắp cần được hạch to&aacute;n chi tiết cho từng đối tượng phải trả. Trong chi tiết từng đối tượng phải trả, t&agrave;i khoản n&agrave;y phản &aacute;nh cả số tiền đ&atilde; ứng trước cho người b&aacute;n, người cung cấp, người nhận thầu x&acirc;y lắp nhưng chưa nhận được sản phẩm, h&agrave;ng ho&aacute;, dịch vụ, khối lượng x&acirc;y lắp ho&agrave;n th&agrave;nh b&agrave;n giao.</p>\r\n\r\n<p>c) Doanh nghiệp phải theo d&otilde;i chi tiết c&aacute;c khoản nợ phải trả cho người b&aacute;n theo từng loại nguy&ecirc;n tệ.<strong> </strong><strong>Đối với c&aacute;c khoản c&ocirc;ng nợ phải trả bằng ngoại tệ th&igrave; thực hiện theo nguy&ecirc;n tắc:</strong></p>\r\n\r\n<p>- Khi ph&aacute;t sinh c&aacute;c khoản nợ phải trả cho người b&aacute;n (b&ecirc;n c&oacute; t&agrave;i khoản 331) bằng ngoại tệ, kế to&aacute;n phải quy đổi ra Đồng Việt nam theo tỷ gi&aacute; giao dịch thực tế tại thời điểm ph&aacute;t sinh (l&agrave; tỷ gi&aacute; b&aacute;n của ng&acirc;n h&agrave;ng thương mại nơi thường xuy&ecirc;n c&oacute; giao dịch). Ri&ecirc;ng trường hợp ứng trước cho nh&agrave; thầu hoặc người b&aacute;n, khi đủ điều kiện ghi nhận t&agrave;i sản hoặc chi ph&iacute; th&igrave; b&ecirc;n C&oacute; t&agrave;i khoản 331 &aacute;p dụng tỷ gi&aacute; ghi sổ thực tế đ&iacute;ch danh đối với số tiền đ&atilde; ứng trước.</p>\r\n\r\n<p>- Khi thanh to&aacute;n nợ phải trả cho người b&aacute;n (b&ecirc;n Nợ t&agrave;i khoản 331) bằng ngoại tệ, kế to&aacute;n phải quy đổi ra đồng Việt Nam theo tỷ gi&aacute; ghi sổ thực tế đ&iacute;ch danh cho từng đối tượng chủ nợ (Trường hợp chủ nợ c&oacute; nhiều giao dịch th&igrave; tỷ gi&aacute; thực tế đ&iacute;ch danh được x&aacute;c định tr&ecirc;n cơ sở b&igrave;nh qu&acirc;n gia quyền di động c&aacute;c giao dịch của chủ nợ đ&oacute;). Ri&ecirc;ng trường hợp ph&aacute;t sinh giao dịch ứng trước tiền cho nh&agrave; thầu hoặc người b&aacute;n th&igrave; b&ecirc;n Nợ t&agrave;i khoản 331 &aacute;p dụng tỷ gi&aacute; giao dịch thực tế (l&agrave; tỷ gi&aacute; b&aacute;n của ng&acirc;n h&agrave;ng nơi thường xuy&ecirc;n c&oacute; giao dịch) tại thời điểm ứng trước;</p>\r\n\r\n<p>- Doanh nghiệp phải đ&aacute;nh gi&aacute; lại c&aacute;c khoản phải trả cho người b&aacute;n c&oacute; gốc ngoại tệ tại tất cả c&aacute;c thời điểm lập B&aacute;o c&aacute;o t&agrave;i ch&iacute;nh theo quy định của ph&aacute;p luật. Tỷ gi&aacute; giao dịch thực tế khi đ&aacute;nh gi&aacute; lại khoản phải trả cho người b&aacute;n l&agrave; tỷ gi&aacute; b&aacute;n ngoại tệ của ng&acirc;n h&agrave;ng thương mại nơi doanh nghiệp thường xuy&ecirc;n c&oacute; giao dịch tại thời điểm lập B&aacute;o c&aacute;o t&agrave;i ch&iacute;nh. C&aacute;c đơn vị trong tập đo&agrave;n được &aacute;p dụng chung một tỷ gi&aacute; do C&ocirc;ng ty mẹ quy định (phải đảm bảo s&aacute;t với tỷ gi&aacute; giao dịch thực tế) để đ&aacute;nh gi&aacute; lại c&aacute;c khoản phải trả cho người b&aacute;n c&oacute; gốc ngoại tệ ph&aacute;t sinh từ c&aacute;c giao dịch trong nội bộ tập đo&agrave;n.</p>\r\n\r\n<p>d) B&ecirc;n giao nhập khẩu ủy th&aacute;c ghi nhận tr&ecirc;n t&agrave;i khoản n&agrave;y số tiền phải trả người b&aacute;n<strong> </strong>về h&agrave;ng nhập khẩu th&ocirc;ng qua b&ecirc;n nhận nhập khẩu ủy th&aacute;c như khoản phải trả người b&aacute;n th&ocirc;ng thường.</p>\r\n\r\n<p>đ) Những vật tư, h&agrave;ng h&oacute;a, dịch vụ đ&atilde; nhận, nhập kho nhưng đến cuối th&aacute;ng vẫn chưa c&oacute; h&oacute;a đơn th&igrave; sử dụng gi&aacute; tạm t&iacute;nh để ghi sổ v&agrave; phải điều chỉnh về gi&aacute; thực tế khi nhận được h&oacute;a đơn hoặc th&ocirc;ng b&aacute;o gi&aacute; ch&iacute;nh thức của người b&aacute;n.</p>\r\n\r\n<p>e) Khi hạch to&aacute;n chi tiết c&aacute;c khoản n&agrave;y, kế to&aacute;n phải hạch to&aacute;n r&otilde; r&agrave;ng, r&agrave;nh mạch c&aacute;c khoản chiết khấu thanh to&aacute;n, chiết khấu thương mại, giảm gi&aacute; h&agrave;ng b&aacute;n của người b&aacute;n, người cung cấp nếu chưa được phản &aacute;nh trong h&oacute;a đơn mua h&agrave;ng.</p>\r\n', '0', 1502201331, 1502296707, NULL, 1),
(120, 38, 286, 1, '<p>Để <strong>đ&aacute;nh dấu trang trong Word 2007</strong> bạn l&agrave;m theo 3 bước sau nh&eacute;,&nbsp;</p>\r\n\r\n<p>Bước 1: Chọn <strong>Insert</strong></p>\r\n\r\n<p>Bước 2: Tr&ecirc;n thanh c&ocirc;ng cụ chọn <strong>Page Number</strong></p>\r\n\r\n<p>Bước 3: Chọn <strong>Top Of Page</strong> : Nếu bạn muốn đ&aacute;nh thứ tự tr&ecirc;n đầu trang</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Chọn&nbsp;<strong>Bottom Of Page</strong> : Nếu bạn muốn đ&aacute;nh thứ tự dưới trang</p>\r\n\r\n<p>Đ&acirc;y l&agrave; c&aacute;ch đ&aacute;nh th&ocirc;ng dụng tiện lợi để <strong>đ&aacute;nh dấu trang trong Word</strong>&nbsp;m&agrave; c&aacute;c bạn đều l&agrave;m được, ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng!</p>\r\n', '0', 1502201992, 1502207025, NULL, 1),
(121, 43, 296, 1, '<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:14px\"><strong><em>Hecta, kilomet vu&ocirc;ng, m&eacute;t vu&ocirc;ng</em></strong> l&agrave; đơn vị đo diện t&iacute;ch.</span></span></p>\r\n\r\n<p>Trong đ&oacute; k&iacute; hiệu</p>\r\n\r\n<ul>\r\n	<li>hecta( ha)</li>\r\n	<li>m&eacute;t vu&ocirc;ng (m&sup2;),</li>\r\n	<li>kilomet vu&ocirc;ng (km&sup2;)</li>\r\n</ul>\r\n\r\n<p>Ha được sử dụng trong c&aacute;c ng&agrave;nh như trắc địa, quy hoạch, quản l&yacute; đất đai; thường được nhắc nhiều trong n&ocirc;ng nghiệp.</p>\r\n\r\n<p><strong>C&aacute;ch quy đổi:</strong></p>\r\n\r\n<blockquote>\r\n<p>1 ha = 10000 m&sup2; (m&eacute;t vu&ocirc;ng) = 0,01 km&sup2;(kilomet vu&ocirc;ng)</p>\r\n\r\n<p>1 km&sup2; = 100 ha</p>\r\n</blockquote>\r\n\r\n<p>Ngo&agrave;i ra ở Việt Nam c&ograve;n sử dụng mẫu, s&agrave;o, c&ocirc;ng để đo diện t&iacute;ch đất ruộng</p>\r\n\r\n<p>Theo nghị định số 134/2007/NĐ-CP ng&agrave;y 15 th&aacute;ng 8 năm 2007 của Ch&iacute;nh phủ về gi&aacute; trị chuyển đổi của một số đơn vị đo lường th&ocirc;ng dụng kh&aacute;c theo đơn vị đo lường ch&iacute;nh thức</p>\r\n\r\n<p><strong>Diện t&iacute;ch ruộng đất t&iacute;nh theo đơn vị cổ truyền</strong></p>\r\n\r\n<ul>\r\n	<li>Bắc Bộ</li>\r\n</ul>\r\n\r\n<blockquote>\r\n<p>1 s&agrave;o = 360 m&sup2;&nbsp;</p>\r\n\r\n<p>1 mẫu = 10 s&agrave;o = 3600&nbsp;m&sup2;</p>\r\n\r\n<p>1 ha = 10000&nbsp;m&sup2;&nbsp;=`~ 27,78 s&agrave;o =~2,78 mẫu.</p>\r\n</blockquote>\r\n\r\n<ul>\r\n	<li>Trung Bộ</li>\r\n</ul>\r\n\r\n<blockquote>\r\n<p>1 s&agrave;o = 499,95m&sup2; &nbsp;</p>\r\n\r\n<p>1 mẫu = 10 s&agrave;o = 4999,5&nbsp;m&sup2;</p>\r\n\r\n<p>1 ha =~ 20,02 s&agrave;o =~ 2 mẫu</p>\r\n</blockquote>\r\n\r\n<ul>\r\n	<li>Nam Bộ</li>\r\n</ul>\r\n\r\n<blockquote>\r\n<p>1 c&ocirc;ng = 1296 1m&sup2;&nbsp;</p>\r\n\r\n<p>1 mẫu = 10 c&ocirc;ng = 12960&nbsp;m&sup2;</p>\r\n\r\n<p>1 ha =~7,71 s&agrave;o =~ 0,77 mẫu</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 1502385776, 1502418506, NULL, 1),
(123, 43, 297, 1, '<p>Người Nhật trước khi đi ngủ họ thường ch&uacute;c nhau ngủ ngon,&nbsp;cảm gi&aacute;c&nbsp;bạn nhận được một lời ch&uacute;c ngủ ngon đến từ người kh&aacute;c trước khi đi ngủ th&igrave; thật l&agrave; tuyệt vời.</p>\r\n\r\n<p>C&acirc;u n&oacute;i &nbsp;ch&uacute;c ngủ ngon người Nhật họ thường sử dụng nhất đ&oacute; l&agrave; :&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong><em>おやすみなさい&nbsp;( oyasuminasai )&nbsp;</em></strong></li>\r\n	<li><strong><em>hay biến thể&nbsp;おやすみ&nbsp;hay&nbsp;お休み ( oyasumi )</em></strong></li>\r\n</ul>\r\n\r\n<p>Đ&acirc;y l&agrave; lời ch&uacute;c ngủ ngon, hay lời ch&agrave;o tạm biệt khi gặp nhau v&agrave;o buổi tối, d&ugrave;ng trong ho&agrave;n cảnh th&ocirc;ng thường giao tiếp h&agrave;ng ng&agrave;y, mang &yacute; nghĩa đơn giản, kh&ocirc;ng mang t&iacute;nh trang trọng.</p>\r\n\r\n<p>Dưới đ&acirc;y l&agrave; video hướng dẫn c&aacute;c bạn c&aacute;ch đọc &quot; Ch&uacute;c ngủ ngon bằng tiếng Nhật &quot; gi&uacute;p mọi người dễ h&igrave;nh dung hơn.</p>\r\n\r\n<p style=\"text-align:center\"><iframe frameborder=\"0\" height=\"315\" src=\"https://www.youtube.com/embed/RmgY1400EiQ\" width=\"560\"></iframe></p>\r\n', '0', 1502473696, 1502508187, NULL, 1),
(124, 38, 304, 1, '<p><strong>C&aacute;ch để đăng k&yacute; m&atilde; số thuế c&aacute; nh&acirc;n </strong>&nbsp;:&nbsp;&nbsp; &nbsp;</p>\r\n\r\n<p>Bước 1: Tải c&agrave;i đặt phần mềm <strong>QTTNCN 3.3.1</strong> v&agrave;o trong m&aacute;y t&iacute;nh</p>\r\n\r\n<p>Bước 2: Tạo hồ sơ đăng k&yacute; m&atilde; số thuế c&aacute; nh&acirc;n tr&ecirc;n phần mềm vừa c&agrave;i đặt</p>\r\n\r\n<ul>\r\n	<li>Mở phần mềm <strong>QTTNCN 3.3.1</strong></li>\r\n	<li>Chọn Đăng k&yacute; thuế&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li>\r\n	<li>Điền th&ocirc;ng tin v&agrave;o bảng &quot; <strong>Tệp hồ sơ đăng k&yacute; thuế TNCN</strong> &quot;&nbsp; &nbsp;</li>\r\n	<li>Sau khi điền th&ocirc;ng tin xong bấm n&uacute;t &quot; <strong>Kiểm tra</strong> &quot;</li>\r\n	<li>Kết xuất nộp hồ sơ :&nbsp;<strong>Chọn XML gửi qua cơ quan thuế</strong></li>\r\n</ul>\r\n\r\n<p>Bước 3: Nộp hồ sơ qua mạng</p>\r\n\r\n<ul>\r\n	<li>Truy cập trang Web :&nbsp;https://www.tncnonline.com.vn&nbsp;</li>\r\n	<li>Chọn mục : <strong>Đăng k&yacute; Thuế</strong></li>\r\n	<li>Chọn : Tổ chức chi trả : Điền đẩy đủ th&ocirc;ng tin doanh nghiệp</li>\r\n	<li>Chọn : Đăng nhập =&gt; &nbsp;Hiển thị ra 1 bảng,&nbsp;điền đầy đủ th&ocirc;ng tin người gửi =&gt;&nbsp;chọn file vừa kết xuất bước 2 đ&iacute;nh k&egrave;m</li>\r\n	<li>Chọn : Gửi File</li>\r\n</ul>\r\n\r\n<p>Bước 4&nbsp;: Sau khi nộp xong &nbsp;chọn mục &quot; Tra cứu file &quot; xem file đ&atilde; gửi th&agrave;nh c&ocirc;ng chưa.</p>\r\n\r\n<p>Bước 5&nbsp;: Kiểm tra MST c&aacute; nh&acirc;n</p>\r\n\r\n<ul>\r\n	<li>Sau từ 2 đến 7 ng&agrave;y gửi, c&aacute;c bạn c&oacute; thể tra cứu kết quả m&atilde; số thuế c&aacute; nh&acirc;n</li>\r\n	<li>Chọn&nbsp;trang :&nbsp;https://www.tncnonline.com.vn</li>\r\n	<li>Chọn :&nbsp;Đăng k&yacute; thuế =&gt; Tổ chức chi trả =&gt; Đăng nhập =&gt; Tra cứu File =&gt; Nếu tr&ecirc;n bảng thể hiện &quot; Đ&atilde; cấp m&atilde;&nbsp;&quot; =&gt; Tải file về đ&atilde; cấp m&atilde; số th&agrave;nh c&ocirc;ng</li>\r\n</ul>\r\n\r\n<p>Trường hợp tr&ecirc;n bảng tra cứu chưa hiển thị đ&atilde; cấp m&atilde;, c&aacute;c bạn in bản tờ khai đ&atilde; nhập bước 2 ra nộp trực tiếp cho cơ quan thuế.</p>\r\n', '0', 1502499507, 1502895922, NULL, 1),
(125, 31, 213, 1, '<p>Đầu ti&ecirc;n, c&aacute;c bạn cần t&igrave;m hiểu đưởng tr&ograve;n ngoại tiếp tam gi&aacute;c l&agrave; như thế n&agrave;o?</p>\r\n\r\n<p><img alt=\"\" src=\"https://quickrep.vn/uploads/contents/images/a78c40777645f753.jpg\" style=\"height:328px; width:349px\" /></p>\r\n\r\n<p><br />\r\n<strong>Đường tr&ograve;n ngoại tiếp tam gi&aacute;c</strong> l&agrave; đường tr&ograve;n đi qua tất cả c&aacute;c đỉnh của một<br />\r\ntam gi&aacute;c v&agrave; tam gi&aacute;c n&agrave;y gọi l&agrave; tam gi&aacute;c nội tiếp đường tr&ograve;n.<br />\r\nVậy <strong>c&ocirc;ng thức t&iacute;nh b&aacute;n k&iacute;nh đường tr&ograve;n ngoại tiếp tam gi&aacute;c</strong> thường sẽ l&agrave;:</p>\r\n\r\n<blockquote>R = abc / 4S</blockquote>\r\n\r\n<p>Trong đ&oacute;:</p>\r\n\r\n<ul>\r\n	<li>R l&agrave; b&aacute;n k&iacute;nh</li>\r\n	<li>a,b,c l&agrave; số đo c&aacute;c cạnh tam gi&aacute;c thường</li>\r\n	<li>S l&agrave; diện t&iacute;ch tam gi&aacute;c</li>\r\n</ul>\r\n\r\n<p>Ngo&agrave;i ra, đối với đa gi&aacute;c đều c&oacute; độ d&agrave;i mỗi cạnh l&agrave; a, ta c&oacute; <strong>c&ocirc;ng thức t&iacute;nh<br />\r\nb&aacute;n k&iacute;nh đường tr&ograve;n ngoại tiếp đa gi&aacute;c</strong> sẽ l&agrave;:</p>\r\n\r\n<p style=\"margin-left:40px\"><strong>R =&nbsp;a/2 ( sin180<span style=\"font-size:10.8333px\"><sup>0</sup></span>&nbsp;/ n )</strong></p>\r\n\r\n<p>Trong đ&oacute; :</p>\r\n\r\n<ul>\r\n	<li>R: b&aacute;n k&iacute;nh đường tr&ograve;n ngoại tiếp tam gi&aacute;c</li>\r\n	<li>a: độ d&agrave;i cạnh đa gi&aacute;c đều</li>\r\n	<li>n: số cạnh của đa gi&aacute;c</li>\r\n</ul>\r\n', '0', 1502801339, 1502803707, 'https://quickrep.vn/uploads/contents/images/a78c40777645f753.jpg', 1);
INSERT INTO `answers` (`id`, `user_id`, `question_id`, `status`, `answers_text`, `is_anonymous`, `create_time`, `update_time`, `images`, `censor_flag`) VALUES
(126, 38, 310, 1, '<p><span style=\"font-size:14px\">Kể từ ng&agrave;y </span>01/01/2017<span style=\"font-size:14px\">,&nbsp; căn cứ theo</span> <strong>th&ocirc;ng tư 302/2016/TT-BTC</strong><span style=\"font-size:14px\"><strong> </strong>&quot;&nbsp;th&ocirc;ng tư về hướng dẫn về lệ ph&iacute; thuế m&ocirc;n b&agrave;i &quot;</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Bậc thuế m&ocirc;n b&agrave;i được chia l&agrave;m 3 bậc</strong>&nbsp;thay đổi cụ thể&nbsp;như sau:&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:14px\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<em>ĐVT: Đồng</em></span></p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\"><span style=\"font-size:14px\"><strong>Vốn điều lệ / vốn đầu tư&nbsp;</strong></span></td>\r\n			<td><span style=\"font-size:14px\"><strong>&nbsp; &nbsp;Mức thuế m&ocirc;n b&agrave;i cả năm &nbsp;</strong></span></td>\r\n			<td><span style=\"font-size:14px\"><strong>&nbsp; &nbsp;Bậc &nbsp;&nbsp;</strong></span></td>\r\n			<td><span style=\"font-size:14px\"><strong>&nbsp; &nbsp;M&atilde; tiểu mục &nbsp;&nbsp;</strong></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\"><span style=\"font-size:14px\">Tr&ecirc;n 10 tỷ đồng</span></td>\r\n			<td style=\"text-align:center\"><span style=\"font-size:14px\">3.000.000&nbsp;</span></td>\r\n			<td style=\"text-align:center\"><span style=\"font-size:14px\">Bậc&nbsp; 1</span></td>\r\n			<td style=\"text-align:center\"><span style=\"font-size:14px\">2862</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\"><span style=\"font-size:14px\">Từ 10 tỷ đồng trở xuống</span></td>\r\n			<td style=\"text-align:center\"><span style=\"font-size:14px\">2.000.000</span></td>\r\n			<td style=\"text-align:center\"><span style=\"font-size:14px\">Bậc 2</span></td>\r\n			<td style=\"text-align:center\"><span style=\"font-size:14px\">2863</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:center\"><span style=\"font-size:14px\">Chi nh&aacute;nh văn ph&ograve;ng đại diện, địa điểm kinh doanh,</span></p>\r\n\r\n			<p style=\"text-align:center\"><span style=\"font-size:14px\">đơn vị sự nghiệp, tổ chức kinh tế kh&aacute;c</span></p>\r\n			</td>\r\n			<td style=\"text-align:center\">1.000.000</td>\r\n			<td style=\"text-align:center\">Bậc 3</td>\r\n			<td style=\"text-align:center\">2864</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '0', 1502896334, 1503024528, NULL, 1),
(127, 43, 312, 1, '<p>Trước đ&acirc;y việc ph&acirc;n chia c&aacute;c bệnh truyền l&acirc;y giữa&nbsp;động vật v&agrave; người dựa tr&ecirc;n c&aacute;c đặc điểm dịch tễ hoặc vật chủ bảo tồn l&agrave; người hay động vật c&oacute; xương sống bậc thấp. V&igrave; vậy c&oacute; c&aacute;c t&ecirc;n gọi kh&aacute;c nhau:</p>\r\n\r\n<ul>\r\n	<li><strong>Anthropozoonoses</strong>: nhứng bệnh truyền l&acirc;y từ động vật c&oacute; xương sống bậc thấp sang người</li>\r\n	<li><strong>Zooanthroponoses</strong>: những bệnh truyền l&acirc;y từ động vật sang người</li>\r\n	<li><strong>Amphixenoses</strong>: những bệnh m&agrave; t&aacute;c nh&acirc;n g&acirc;y nhiễm tr&ugrave;ng tồn tại cả ở người v&agrave; động vật,ch&uacute;ng c&oacute; thể truyền trực tiếp từ người sang động vật, hoặc từ động vật sang người.</li>\r\n</ul>\r\n\r\n<p>C&aacute;ch ph&acirc;n loại n&agrave;y ng&agrave;y c&agrave;ng &iacute;t được sử dụng v&igrave; c&oacute; thể g&acirc;y ra sự nhầm lẫn,thiếu khoa học.</p>\r\n\r\n<p>Schwabe(1964) đề xuất: việc ph&acirc;n chia <strong>zoonoses </strong>dựa v&agrave;o c&aacute;c dạng v&ograve;ng đời của c&aacute;c t&aacute;c nh&acirc;n g&acirc;y nhiễm tr&ugrave;ng, từ đ&oacute; <strong>zoonoses </strong>được&nbsp;ph&acirc;n chia th&agrave;nh 5 nh&oacute;m.</p>\r\n\r\n<ul>\r\n	<li>Nh&oacute;m c&aacute;c bệnh truyền l&acirc;y trực tiếp: phương thức truyền l&acirc;y tiếp x&uacute;c trực tiếp,th&ocirc;ng qua tiếp x&uacute;c với c&aacute;c vector truyền bệnh cơ học. C&aacute;c t&aacute;c nh&acirc;n g&acirc;y bệnh kh&ocirc;ng trải qua qu&aacute; tr&igrave;nh biến đổi hoặc ph&aacute;t triển trong qu&aacute; tr&igrave;nh truyền l&acirc;y</li>\r\n</ul>\r\n\r\n<p>V&iacute; dụ: <strong>Rabies</strong></p>\r\n\r\n<ul>\r\n	<li>Nh&oacute;m c&aacute;c bệnh truyền l&acirc;y theo v&ograve;ng đời: căn bệnh đ&ograve;i hỏi hai hoặc nhiều lo&agrave;i vật chủ ( động vật c&oacute; xương sống) để ho&agrave;n thiện v&ograve;ng đời của ch&uacute;ng</li>\r\n</ul>\r\n\r\n<p>V&iacute; dụ: <strong>Echinococcosis</strong></p>\r\n\r\n<ul>\r\n	<li>Nh&oacute;m c&aacute;c bệnh truyền l&acirc;y qua trung gian: truyền l&acirc;y qua động vật kh&ocirc;ng xương sống. T&aacute;c nh&acirc;n g&acirc;y bệnh ph&aacute;t triển,nh&acirc;n l&ecirc;n b&ecirc;n trong vector truyền bệnh ( động vật kh&ocirc;ng xương sống)</li>\r\n	<li>Nh&oacute;m c&aacute;c bệnh truyền l&acirc;y qua v&acirc;t chất hoại sinh: căn bệnh c&oacute; thể ph&aacute;t triển tr&ecirc;n độn vật c&oacute; xương sống v&agrave; cả tr&ecirc;n c&aacute;c dạng vật chất kh&ocirc;ng phải động vật như c&aacute;c chất hữ cơ, đất, thức ăn, c&acirc;y trồng</li>\r\n</ul>\r\n\r\n<p>V&iacute; dụ: <strong>Mycoses</strong>,<strong> Larva migrans</strong></p>\r\n\r\n<ul>\r\n	<li>Nh&oacute;m bệnh truyền qua thực phẩm: c&aacute;c bệnh truyền qua thức ăn , nước uống,v&agrave; c&aacute;c dạng thực phẩm kh&aacute;c. Được ph&acirc;n chia th&agrave;nh</li>\r\n</ul>\r\n\r\n<p>&nbsp;nh&oacute;m c&aacute;c bệnh nhiễm tr&ugrave;ng qua thực phẩm</p>\r\n\r\n<p>V&iacute; dụ: bệnh truyền qua thực phẩm do Salmonella, E.coli,..</p>\r\n\r\n<p>Nh&oacute;m c&aacute;c bệnh do ngộ độc độc tố</p>\r\n\r\n<p>V&iacute; dụ: độc tố của Staphylococcus aureus.</p>\r\n', '0', 1502948791, 1502982263, NULL, 1),
(128, 43, 294, 1, '<p><strong><em>Oppa</em></strong> l&agrave; một từ tiếng H&agrave;n, được sử dụng rất phổ biến.</p>\r\n\r\n<p>Oppa được du nhập v&agrave;o Việt Nam trong những năm gần đ&acirc;y th&ocirc;ng qua c&aacute;c bộ phim điện ảnh H&agrave;n Quốc, hay c&aacute;c trương tr&igrave;nh thực tế của H&agrave;n.</p>\r\n\r\n<p>Nếu l&agrave; một t&iacute;n đồ của phim H&agrave;n th&igrave; chắc chắn bạn kh&ocirc;ng thể bỏ qua từ n&agrave;y.</p>\r\n\r\n<p>T&ugrave;y v&agrave;o trường hợp m&agrave; Oppa sẽ c&oacute; nghĩa kh&aacute;c nhau:</p>\r\n\r\n<ul>\r\n	<li>Oppa: anh, c&aacute;ch xưng h&ocirc; khi em g&aacute;i n&oacute;i chuyện anh trai của m&igrave;nh,hay người đ&agrave;n &ocirc;ng lớn tuổi hơn m&igrave;nh.</li>\r\n	<li>Oppa: anh y&ecirc;u, c&aacute;ch xưng h&ocirc; giữa người con g&aacute;i với người con trai, khi họ l&agrave; người y&ecirc;u hay vợ chồng, mang &yacute; nghĩa th&acirc;n mật, biểu đat t&igrave;nh y&ecirc;u thương .</li>\r\n	<li>Oppa: c&oacute; nghi&atilde; l&agrave; anh, được giới trẻ Việt Nam goị k&egrave;m theo t&ecirc;n c&aacute;c thần tượng nam m&agrave; họ y&ecirc;u th&iacute;ch( l&agrave; diễn vi&ecirc;n ca sĩ,hoặc cầu thủ). N&oacute; thể hiện sự h&acirc;m mộ , mến mộ của fan d&agrave;nh cho thần tượng của m&igrave;nh</li>\r\n</ul>\r\n\r\n<p>v&iacute; dụ oppa Min Ho, oppa Kim Bum, oppa Song Joong Ki....</p>\r\n', '0', 1503083404, 1503118410, NULL, 1),
(129, 16, 315, 1, '<p><strong>Endcode</strong> đ&uacute;ng hơn th&igrave; gọi l&agrave; <strong>Endcode video</strong>, một thuật ngữ thường được xử dụng đối với &acirc;m thanh (audio) v&agrave; video , được mi&ecirc;u tả dễ hiễu l&agrave; &quot; giải n&eacute;n, m&atilde; h&oacute;a h&igrave;nh ảnh v&agrave; &acirc;m thanh kỹ thuật số &quot;.</p>\r\n\r\n<p>Encode bao gồm c&aacute;c thao t&aacute;c chỉnh sửa video, rồi xuất video theo định dạng ph&ugrave; hợp với mong muốn của bạn. Kết quả l&agrave; một file video ho&agrave;n chỉnh c&oacute; đ&ocirc; n&eacute;t chuẩn, &acirc;m thanh hay, hỗ trợ nhiều k&ecirc;nh, phụ đề (c&oacute; thể c&oacute; hoặc kh&ocirc;ng) m&agrave; dung lượng c&oacute; thể giảm đ&aacute;ng kể l&agrave;m bạn &quot;cho&aacute;ng&quot; : Gần như chỉ bằng 1 / 10 so với dung lượng gốc tr&ecirc;n DVD. Với những bộ video như vậy, bạn kh&ocirc;ng cần phải bận t&acirc;m về việc ổ cứng của bạn bị &quot;ngốn&quot; dung lượng nữa v&agrave; chất lượng của c&aacute;c bộ phim kh&ocirc;ng hề k&eacute;m so với bản gốc, hay đơn giản l&agrave; bạn muốn compress video lại.</p>\r\n\r\n<p>Một số phần mềm chuyển đổi định dạng , hay chỉnh sửa video nổi tiếng hiện nay gi&uacute;p bạn c&oacute; thể dễ d&agrave;ng thực hiện c&ocirc;ng việc Endcode , chuyển đổi định dạng video như : Nero Vision, Xilisoft Video Converter Ultimate, Total Video Converter, Any Video Converter,....</p>\r\n', '0', 1504262896, 1504264132, NULL, 1),
(130, 43, 317, 1, '<p>M&atilde; bưu ch&iacute;nh ( <strong>Postal code</strong> )&nbsp;&nbsp;l&agrave; hệ thống m&atilde; được quy định bởi li&ecirc;n hiệp bưu ch&iacute;nh to&agrave;n cầu, m&atilde; n&agrave;y&nbsp;gi&uacute;p định vị khu vực&nbsp;&nbsp;khi chuyển thư, bưu phẩm đến người nhận, hoặc&nbsp;khi đăng k&yacute; c&aacute;c th&ocirc;ng tin tr&ecirc;n website nước ngo&agrave;i&nbsp;m&agrave; y&ecirc;u cầu m&atilde; số n&agrave;y.</p>\r\n\r\n<p><strong>M&atilde; bưu ch&iacute;nh ở Việt Nam</strong> hiện nay&nbsp;l&agrave;&nbsp;1 d&atilde;y số&nbsp;bao gồm 6 chữ số, trong đ&oacute;:</p>\r\n\r\n<ul>\r\n	<li>2 chữ số đầu ti&ecirc;n x&aacute;c định t&ecirc;n tỉnh, th&agrave;nh phố trực thuộc trung ương,</li>\r\n	<li>2 chữ số tiếp theo&nbsp;x&aacute;c định m&atilde; quận, huyện, thị x&atilde;, th&agrave;nh phố trực thuộc tỉnh,</li>\r\n	<li>số thứ 5&nbsp;x&aacute;c định phường, x&atilde;, thị trấn</li>\r\n	<li>số thứ 6&nbsp;x&aacute;c định th&ocirc;n, ấp, phố, vị tr&iacute;&nbsp;hoặc đối tượng cụ thể.</li>\r\n</ul>\r\n\r\n<p>Mọi người đừng nhầm lẫn giữa m&atilde;&nbsp;bưu ch&iacute;nh v&agrave; m&atilde; điện thoại quốc gia Việt Nam : +84 v&agrave; 084</p>\r\n\r\n<p>Dưới đ&acirc;y l&agrave; m&atilde; bưu ch&iacute;nh 63 tỉnh của Việt Nam:</p>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"margin-left:40px; text-align:center\"><strong>STT</strong></p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px; text-align:center\"><strong>TỈNH/TH&Agrave;NH PHỐ</strong></p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px; text-align:center\"><strong>&nbsp;POSTAL CODE</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">1</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">An Giang</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">880000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">2</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">B&agrave; Rịa Vũng T&agrave;u</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">790000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">3</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Bạc Li&ecirc;u</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">260000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">4</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Bắc Kạn</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">960000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">5</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Bắc Giang</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">220000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">6</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Bắc Ninh</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">790000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">7</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Bến Tre</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">930000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">8</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">B&igrave;nh Dương</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">590000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">9</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">B&igrave;nh Định</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">820000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">10</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">B&igrave;nh Phước</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">830000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">11</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">B&igrave;nh Thuận</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">800000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">12</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">An Giang</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">970000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">13</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Cao Bằng</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">270000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">14</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Cần Thơ</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">900000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">15</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Đ&agrave; Nẵng</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">550000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">16</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Điện Bi&ecirc;n</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">380000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">17</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Đắk Lắk</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">630000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">18</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Đắc N&ocirc;ng</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">640000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">19</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Đồng Nai</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">810000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">20</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Đồng Th&aacute;p</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">870000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">21</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Gia Lai</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">600000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">22</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">H&agrave; Giang</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">310000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">23</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">H&agrave; Nam</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">400000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">24</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">H&agrave; Nội</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">100000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">25</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">H&agrave; Tĩnh</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">480000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">26</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Hải Dương</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">170000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">27</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Hải Ph&ograve;ng</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">180000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">28</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Hậu Giang</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">910000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">29</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">H&ograve;a B&igrave;nh</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">350000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">30</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">TP. Hồ Ch&iacute; Minh</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">700000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">31</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Hưng Y&ecirc;n</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">160000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">32</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Kh&aacute;nh Ho&agrave;</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">650000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">33</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Ki&ecirc;n Giang</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">920000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">34</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Kon Tum</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">580000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">35</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Lai Ch&acirc;u</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">390000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">36</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Lạng Sơn</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">240000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">37</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">L&agrave;o Cai</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">330000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">38</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">L&acirc;m Đồng</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">670000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">39</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Long An</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">850000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">40</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Nam Định</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">420000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">41</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Nghệ An</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">460000 - 470000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">42</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Ninh B&igrave;nh</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">430000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">43</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Ninh Thuận</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">660000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">44</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Ph&uacute; Thọ</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">290000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">45</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Ph&uacute; Y&ecirc;n</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">620000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">46</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Quảng B&igrave;nh</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">510000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">47</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Quảng Nam</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">560000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">48</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Quảng Ng&atilde;i</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">570000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">49</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Quảng Ninh</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">200000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">50</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Quảng Trị</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">520000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">51</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">S&oacute;c Trăng</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">950000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">52</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Sơn La</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">360000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">53</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">T&acirc;y Ninh</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">840000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">54</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Th&aacute;i B&igrave;nh</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">410000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">55</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Th&aacute;i Nguy&ecirc;n</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">250000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">56</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Thanh Ho&aacute;</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">440000 - 450000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">57</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Thừa Thi&ecirc;n Huế</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">530000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">58</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Tiền Giang</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">860000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">59</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Tr&agrave; Vinh</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">940000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">60</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Tuy&ecirc;n Quang</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">300000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">61</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Vĩnh Long</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">890000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">62</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Vĩnh Ph&uacute;c</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">280000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:24px\">\r\n			<p style=\"margin-left:40px\">63</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">Y&ecirc;n B&aacute;i</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"margin-left:40px\">320000</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '0', 1505143507, 1505310599, NULL, 1),
(131, 86, 288, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Từ n&agrave;y đang trở n&ecirc;n quen thuộc tr&ecirc;n mạng x&atilde; hội. Theo nghĩa tiếng anh th&ocirc;ng thường th&igrave;:</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Crush&nbsp;/<strong>krᴧ&int;</strong>/ : Sự nghiền n&aacute;t (Danh từ); nghiền, v&ograve; (Động từ)</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Tuy nhi&ecirc;n, giới trẻ hiện nay thường hiểu Crush theo cụm: have a crush on somebody (phải l&ograve;ng một ai đ&oacute;)</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Nếu bạn c&oacute; cảm gi&aacute;c th&iacute;ch một bạn nam hoặc một bạn nữ th&igrave; đ&oacute; gọi l&agrave; Crush. V&agrave; bạn sẽ thường nghe tụi bạn hoặc những người tr&ecirc;n mạng x&atilde; hội n&oacute;i những c&acirc;u đại loại như: &quot;Tớ crush cậu ấy rồi&quot;...&quot;Crush của tớ...&quot;. Đ&oacute; l&agrave; &yacute; chỉ người m&agrave; họ để &yacute;.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Tuy nhi&ecirc;n, Crush kh&ocirc;ng hẳn l&agrave; th&iacute;ch hay y&ecirc;u đơn phương. Crush chỉ dừng ở mức độ quan t&acirc;m, để &yacute; v&agrave; c&oacute; ảnh hưởng tới bạn th&ocirc;i. Mức độ của n&oacute; kh&ocirc;ng đủ để gọi l&agrave; th&iacute;ch hay y&ecirc;u đơn phương đ&acirc;u. V&igrave; vậy, nếu ai đ&oacute; d&ugrave;ng từ Crush th&igrave; đừng vội quy chụp với &quot;y&ecirc;u&quot; nh&eacute;!</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Nếu bạn đang Crush ai rồi th&igrave; h&atilde;y tận hưởng với niềm vui nho nhỏ ấy nh&eacute;&nbsp;<img alt=\"heart\" src=\"http://cdn.ckeditor.com/4.5.10/full/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" /></span></span></p>\r\n', '0', 1506605997, 1506616673, 'http://cdn.ckeditor.com/4.5.10/full/plugins/smiley/images/heart.png', 1),
(132, 86, 208, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Concept</strong> trong tiếng Anh nghĩa l&agrave; <strong>kh&aacute;i niệm</strong>, một số người hiểu n&oacute; l&agrave; <strong>quan niệm</strong>.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Tuy nhi&ecirc;n, người ta d&ugrave;ng từ <strong>&quot;concept&quot;</strong> trong rất nhiều lĩnh vực, đặc biệt từ <strong>&quot;concept&quot;</strong> được sử dụng nhiều trong c&aacute;c ng&agrave;nh nghề li&ecirc;n quan đến truyền th&ocirc;ng.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Trong<strong> </strong>quảng c&aacute;o, concept<strong> </strong>l&agrave; linh hồn, l&agrave; nội dung ch&iacute;nh trong một sản phẩm quảng c&aacute;o. N&oacute; xuất ph&aacute;t từ nhu cầu của kh&aacute;ch h&agrave;ng, được những người l&agrave;m quảng c&aacute;o khai ph&aacute; tạo n&ecirc;n một chiến lược quảng c&aacute;o. V&iacute; dụ: Concept của nh&atilde;n hiệu sữa nổi tiếng Dutch Lady l&agrave; &quot;B&agrave;y tỏ&quot;; Concept của Tr&agrave; thảo mộc Dr Thanh l&agrave; &quot;N&oacute;ng trong người, uống tr&agrave; Dr Thanh&quot;;...</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Trong một quyến b&aacute;o, concept<strong> </strong>l&agrave; &yacute; tưởng bao tr&ugrave;m to&agrave;n bộ những b&agrave;i viết trong đ&oacute;, định hướng người đọc theo một chủ đề nhất định. V&iacute; dụ concept của một tờ b&aacute;o c&oacute; thể l&agrave; &quot;y&ecirc;u&quot;; &quot;vũ trụ&quot;,...từ đ&oacute; c&aacute;c b&agrave;i viết sẽ định hướng theo suy nghĩ n&agrave;y.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">C&ograve;n trong chụp ảnh, bạn cũng hay nghe đến từ concept chụp. Concept trong chụp ảnh l&agrave; phong c&aacute;ch bạn muốn hướng đến. V&iacute; dụ như: Concept thanh xu&acirc;n học đường, concept &quot;c&ocirc; g&aacute;i mưa&quot;;...</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">C&aacute;c sự kiện hay chương tr&igrave;nh, tất cả đều c&oacute; concept. V&iacute; dụ bạn tổ chức một buổi sinh nhật cho CLB, concept l&agrave; &quot;Reply 1988&quot; th&igrave; tất cả từ kịch bản MC, timeline chương tr&igrave;nh hay c&aacute;ch trang tr&iacute; đều phải ho&agrave;i cổ v&agrave; mang dấu ấn của &quot;Reply 1988&quot;;...</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Concept</strong> c&ograve;n xuất hiện trong rất nhiều lĩnh vực. Nhưng bạn h&atilde;y hiểu n&ocirc;m na n&oacute; l&agrave; cốt l&otilde;i, l&agrave; chủ đề xuy&ecirc;n suốt trong một chương tr&igrave;nh hoặc một sản phẩm.</span></p>\r\n', '0', 1506618561, 1506675329, NULL, 1),
(133, 86, 295, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>BFF </strong>l&agrave; viết tắt của <strong>Best friend forever </strong>(bạn tốt m&atilde;i m&atilde;i).</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Từ n&agrave;y thường được sử dụng trong giới trẻ, được sử dụng rộng r&atilde;i tr&ecirc;n mạng x&atilde; hội, c&acirc;u n&oacute;i thường ng&agrave;y hay c&aacute;c b&agrave;i viết c&aacute; nh&acirc;n.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Nếu c&oacute; &yacute; định d&ugrave;ng từ n&agrave;y th&igrave; đối tượng hướng tới sẽ l&agrave; bạn b&egrave; th&acirc;n thiết nh&eacute;, đừng d&ugrave;ng từ n&agrave;y với người bạn th&iacute;ch kh&ocirc;ng lại phản t&aacute;c dụng đấy&nbsp;<img alt=\"cheeky\" src=\"http://cdn.ckeditor.com/4.5.10/full/plugins/smiley/images/tongue_smile.png\" style=\"height:23px; width:23px\" title=\"cheeky\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></p>\r\n', '0', 1506662611, 1506675347, 'http://cdn.ckeditor.com/4.5.10/full/plugins/smiley/images/tongue_smile.png', 1),
(134, 86, 221, 1, '<p><strong>Friendzone</strong> trong tiếng anh nghĩa l&agrave; &quot;<strong>khu vực bạn b&egrave;</strong>&quot;.</p>\r\n\r\n<p>Ở trong đời sống th&igrave; từ n&agrave;y hiểu theo nghĩa gốc l&agrave; được. Từ n&agrave;y thể hiện&nbsp;một mối quan hệ giữa A v&agrave; B, A th&iacute;ch B nhưng B chỉ coi A l&agrave; bạn b&egrave;, kh&ocirc;ng hơn kh&ocirc;ng k&eacute;m, d&ugrave; c&oacute; thế n&agrave;o th&igrave; A v&agrave; B vẫn m&atilde;i l&agrave; bạn b&egrave;. Đa số c&aacute;c bạn trẻ đều kh&ocirc;ng muốn bị rơi v&agrave;o trường hợp n&agrave;y bởi một khi đ&atilde; rơi v&agrave;o &quot;<strong>Friendzone</strong>&quot; rất kh&oacute; để tho&aacute;t ra, khi người bạn th&iacute;ch kh&ocirc;ng ngừng quan t&acirc;m đến bạn nhưng cũng kh&ocirc;ng muốn c&oacute; một mối quan hệ xa hơn t&igrave;nh bạn, bạn sẽ kh&oacute; chấp nhận vứt bỏ n&oacute; để đi t&igrave;m một người mới.</p>\r\n\r\n<p>Tr&ecirc;n c&aacute;c trang mạng x&atilde; hội, kh&aacute; nhiều bạn suy tư, lo lắng hỏi: &quot;L&agrave;m thế n&agrave;o để tho&aacute;t <strong>Friendzone</strong>?&quot;. Đ&acirc;y l&agrave; c&acirc;u hỏi kh&oacute; v&ocirc; c&ugrave;ng ấy. C&oacute; một c&aacute;ch hữu hiệu l&agrave; tỏ t&igrave;nh, được ăn cả ng&atilde; về kh&ocirc;ng. Nhưng x&aacute;c suất của việc th&agrave;nh c&ocirc;ng cực nhỏ, v&igrave; vậy, nếu đ&atilde; tr&oacute;t rơi v&agrave;o <strong>Friendzone </strong>th&igrave; h&atilde;y mạnh mẽ để x&aacute;c định đ&acirc;y chỉ l&agrave; mối quan hệ chẳng đi đến đ&acirc;u cả. A với B chỉ l&agrave; bạn b&egrave; th&ocirc;i.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 1506663663, 1506675369, NULL, 1),
(135, 86, 258, 1, '<p style=\"text-align:justify\"><strong>Đi du lịch </strong>l&agrave; việc bạn đi đến một nơi kh&aacute;c để tham quan, t&igrave;m hiểu, ngắm cảnh,...C&oacute; nhiều <strong>h&igrave;nh thức du lịch</strong>: du lịch nh&oacute;m, du lịch một m&igrave;nh, du lịch theo đo&agrave;n,...</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Đi du lịch</strong> khiến bạn mở mang th&ecirc;m được kiến thức, hiểu hơn về đất nước cũng như những v&ugrave;ng đất bạn đi đến. Nếu kh&ocirc;ng <strong>đi du lịch,</strong> bạn sẽ chỉ sống trong khu vực xung quanh m&igrave;nh, tầm hiểu biết chỉ hạn hẹp ở đ&oacute; th&ocirc;i. Tuy b&acirc;y giờ c&oacute; kh&aacute; nhiều phương tiện truyền th&ocirc;ng cũng như Internet khiến bạn dễ d&agrave;ng t&igrave;m hiểu được bất k&igrave; đ&acirc;u, nhưng kh&ocirc;ng c&oacute; g&igrave; hay ho bằng tận mắt bạn chứng kiến những k&igrave; quan xung quanh m&igrave;nh.</p>\r\n\r\n<p style=\"text-align:justify\">Thứ hai, <strong>đi du lịch</strong> khiến bạn mở rộng mối quan hệ của bản th&acirc;n. Nếu đi du lịch theo đo&agrave;n, bạn sẽ l&agrave;m quen được với những người cộng t&aacute;c với m&igrave;nh, th&acirc;n nhau hơn. Nếu đi du lịch một m&igrave;nh th&igrave; c&oacute; thể c&oacute; th&ecirc;m c&aacute;c mối quan hệ mới m&agrave; biết đ&acirc;u trong tương lai, những mối quan hệ đ&oacute; sẽ gi&uacute;p bạn. C&ograve;n với hội bạn th&acirc;n th&igrave; khỏi n&oacute;i, sau mỗi chuyến du lịch, c&aacute;c bạn sẽ thấu hiểu nhau nhiều hơn.</p>\r\n\r\n<p style=\"text-align:justify\">Ngo&agrave;i việc ngắm cảnh th&igrave; đi du lịch h&atilde;y ăn uống, check-in thật nhiều để lưu lại kỉ niềm. Về sau khi nh&igrave;n lại, bạn sẽ biết được niềm vui của việc đi du lịch l&agrave; g&igrave;.</p>\r\n\r\n<p style=\"text-align:justify\">Ch&uacute;c bạn c&oacute; những chuyến đi thật vui vẻ&nbsp;<img alt=\"heart\" src=\"http://cdn.ckeditor.com/4.5.10/full/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" /></p>\r\n', '0', 1506665560, 1506675387, 'http://cdn.ckeditor.com/4.5.10/full/plugins/smiley/images/heart.png', 1),
(136, 86, 320, 1, '<p><strong>0126</strong> l&agrave; đầu số của mạng <strong>Mobiphone</strong> nh&eacute; bạn.</p>\r\n\r\n<p>Ngo&agrave;i ra Mobiphone c&ograve;n c&oacute; c&aacute;c đầu số kh&aacute;c:&nbsp;<strong>090; 093; 0120; 0121; 0122; 0128</strong> nữa.<br />\r\n&nbsp;</p>\r\n', '0', 1507045911, 1507051265, NULL, 1),
(137, 86, 326, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\">Đầu ti&ecirc;n, để đổi h&igrave;nh nền tr&ecirc;n m&aacute;y t&iacute;nh th&igrave; bạn phải c&oacute; ảnh nền muốn đổi đ&atilde;. </span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Trong qu&aacute; tr&igrave;nh chọn ảnh, bạn n&ecirc;n chọn h&igrave;nh c&oacute; độ ph&acirc;n giải cao để khi l&ecirc;n l&agrave;m h&igrave;nh nền kh&ocirc;ng bị vỡ nh&eacute;. Bạn c&oacute; thể l&ecirc;n Google search &quot;<strong>Desktop background&quot;</strong> để t&igrave;m&nbsp;kiếm h&igrave;nh nền đẹp.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Sau khi save ảnh về m&aacute;y t&iacute;nh, bạn click chuột phải v&agrave;o ảnh, thấy d&ograve;ng chữ <strong>&quot;Set as desktop background&quot;,</strong> nhấn chuột tr&aacute;i v&agrave;o l&agrave; được.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Nếu muốn chỉnh h&igrave;nh nền, bạn di chuyển ra desktop, nhấn chuột phải, thấy d&ograve;ng chữ <strong>Personalize</strong>, click chuột tr&aacute;i v&agrave; trong đ&oacute; sẽ c&oacute; c&aacute;c c&ocirc;ng cụ để chỉnh sửa.</span></p>\r\n', '0', 1507058531, 1507060428, NULL, 1),
(138, 86, 323, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\">Giờ Ngọ rơi v&agrave;o khoảng từ <strong>11 giờ đến 13 giờ</strong>, giờ <strong>ch&iacute;nh ngọ l&agrave; 12 giờ trưa</strong>.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Giờ Ngọ c&oacute; thể chia l&agrave;m <strong>3 giai đoạn</strong> như sau:</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">+ <strong>Khởi ngọ</strong> tức l&agrave; giờ bắt đầu giờ ngọ, 11 giờ đến 12 giờ trưa</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">+ <strong>Ch&iacute;nh ngọ</strong> l&agrave; 12 giờ trưa, c&oacute; lẽ nhiều người biết điều n&agrave;y</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">+ <strong>M&atilde;n ngọ</strong> l&agrave; gần hết giờ ngọ, khoảng từ 12 giờ đến 13 giờ trưa</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Người xưa hay h&agrave;nh h&igrave;nh phạm nh&acirc;n v&agrave;o giờ Ngọ </strong>l&agrave; bởi người ta quan niệm đ&acirc;y l&agrave; giờ m&agrave; dương t&iacute;nh mạnh nhất, sẽ &aacute;t hồn phạm nh&acirc;n. Bởi v&igrave; họ cho rằng việc kết liễu một ai đ&oacute; l&agrave; do người &acirc;m quyết định n&ecirc;n &acirc;m hồn của người &acirc;m khi chết thi c&oacute; thể lởn vởn &aacute;m đao phủ v&agrave; những người xung quanh. Đ&acirc;y cũng l&agrave; l&uacute;c con người yếu đuối, kiệt sức nhất n&ecirc;n khi bị h&agrave;nh h&igrave;nh con người sẽ &iacute;t đau đớn hơn.</span></p>\r\n', '0', 1507059395, 1507346522, NULL, 1),
(139, 86, 325, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\">Thực ra c&acirc;u hỏi n&agrave;y kh&aacute; l&agrave; mơ hồ v&igrave; n&oacute; li&ecirc;n quan đến cảm x&uacute;c của con người, đ&ocirc;i khi chỉ những người trong cuộc mới hiểu.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">C&oacute; <strong>một số dấu hiệu nhận biết người y&ecirc;u cũ vẫn c&ograve;n cảm gi&aacute;c với m&igrave;nh</strong> như: vẫn n&oacute;i chuyện, vẫn c&oacute; những h&agrave;nh động quan t&acirc;m, vẫn để ảnh trong điện thoại, vẫn nhớ những ng&agrave;y quan trọng,...Nhưng tất cả chỉ mang t&iacute;nh chất tương đối th&ocirc;i&nbsp;<img alt=\"indecision\" src=\"http://cdn.ckeditor.com/4.5.10/full/plugins/smiley/images/whatchutalkingabout_smile.png\" style=\"height:23px; width:23px\" title=\"indecision\" /></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Cũng c&oacute; một ph&eacute;p thử l&agrave; bạn c&oacute; người y&ecirc;u mới v&agrave; xem th&aacute;i độ của người y&ecirc;u cũ như thế n&agrave;o. Nếu người ấy vẫn tỏ ra quan t&acirc;m th&igrave; c&oacute; nghĩa l&agrave; vẫn c&ograve;n cảm gi&aacute;c với bạn. Tuy nhi&ecirc;n cũng c&oacute; nhiều người diễn giỏi lắm n&ecirc;n những thứ li&ecirc;n quan đến cảm x&uacute;c của con người kh&ocirc;ng bao giờ ch&iacute;nh x&aacute;c 100%.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Nhưng với c&acirc;u hỏi n&agrave;y th&igrave; m&igrave;nh nghĩ đ&atilde; l&agrave; người y&ecirc;u cũ rồi th&igrave; bạn n&ecirc;n dứt hẳn. C&ograve;n quan t&acirc;m đến nhau th&igrave; quay lại với nhau. Nếu bạn vẫn đang hoang mang về cảm gi&aacute;c của người y&ecirc;u cũ tức l&agrave; bạn c&ograve;n quan t&acirc;m đến người ấy, vậy sao kh&ocirc;ng quay lại với nhau? Chứ nếu kh&ocirc;ng đến l&uacute;c một trong hai c&oacute; người mới, cảm x&uacute;c đ&ocirc;i b&ecirc;n cũng kh&ocirc;ng dễ chịu ch&uacute;t n&agrave;o đ&acirc;u&nbsp;<img alt=\"sad\" src=\"http://cdn.ckeditor.com/4.5.10/full/plugins/smiley/images/sad_smile.png\" style=\"height:23px; width:23px\" title=\"sad\" /></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ch&uacute;c bạn sớm t&igrave;m ra hướng đi cho t&igrave;nh y&ecirc;u của m&igrave;nh !</span></p>\r\n', '0', 1507060055, 1507060633, 'http://cdn.ckeditor.com/4.5.10/full/plugins/smiley/images/whatchutalkingabout_smile.png', 1),
(140, 86, 319, 1, '<p><strong>Hickey </strong>thường được gọi l&agrave; <strong>&quot;vết cắn y&ecirc;u&quot; </strong>trong qu&aacute; tr&igrave;nh hai người th&acirc;n mật. Đ&oacute; l&agrave; khi bạn t&aacute;c động l&acirc;u v&agrave;o một v&ugrave;ng da tr&ecirc;n cơ thể bằng việc cắn, m&uacute;t,...tạo th&agrave;nh những vết tụ m&aacute;u. B&igrave;nh thường, khoảng một đến hai tuần, vết tụ m&aacute;u đ&oacute; sẽ hết.</p>\r\n\r\n<p>Hickey đang trở th&agrave;nh một tr&agrave;o lưu trong giới trẻ của những cặp đ&ocirc;i. Họ cho rằng việc đ&oacute; l&agrave; thể hiện dấu vết của t&igrave;nh y&ecirc;u, đ&ocirc;i khi l&agrave; quyền sở hữu của m&igrave;nh với người kia. Tuy nhi&ecirc;n, việc n&agrave;y cũng tiềm ẩn những nguy cơ kh&ocirc;ng ngờ tới. Đ&atilde; c&oacute; trường hợp c&ocirc; g&aacute;i trong qu&aacute; tr&igrave;nh cắn y&ecirc;u v&agrave;o cổ người y&ecirc;u, v&ocirc; t&igrave;nh khiến anh n&agrave;y tử vong. Nguy&ecirc;n nh&acirc;n được cho l&agrave;&nbsp;v&igrave; một cục m&aacute;u đ&ocirc;ng từ vết cắn đ&atilde; di chuyển l&ecirc;n n&atilde;o, l&agrave;m vỡ mạch m&aacute;u n&atilde;o, khiến nạn nh&acirc;n tử vong.</p>\r\n\r\n<p>V&igrave; vậy, tuy Hickey kh&ocirc;ng xấu nhưng khi c&oacute; &yacute; định để lại những vết &quot;cắn y&ecirc;u&quot; tr&ecirc;n th&acirc;n thể của người y&ecirc;u th&igrave; phải ch&uacute; &yacute;, cẩn thận tr&aacute;nh những trường hợp đ&aacute;ng tiếc xảy ra.</p>\r\n', '0', 1507061831, 1507083899, NULL, 1),
(141, 86, 289, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Thả th&iacute;nh</strong> cũng l&agrave; một từ mới xuất hiện gần đ&acirc;y, được d&ugrave;ng rộng r&atilde;i trong giới trẻ. Thả th&iacute;nh l&agrave; <strong>chủ động n&oacute;i chuyện hay c&oacute; những h&agrave;nh động l&ocirc;i cuốn người kh&aacute;c</strong>, tạo thiện cảm để người kh&aacute;c c&oacute; t&igrave;nh cảm với m&igrave;nh. Lấy một v&iacute; dụ đơn giản l&agrave; A thả th&iacute;nh B, A sẽ chủ động l&agrave;m quen, c&oacute; những lời n&oacute;i th&acirc;n mật, những h&agrave;nh động khiến B cảm thấy A rất th&iacute;ch m&igrave;nh, muốn tiến đến một mối quan hệ x&aacute;c định với m&igrave;nh.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Thả th&iacute;nh c&oacute; thể<strong> từ một ph&iacute;a</strong> hoặc <strong>đ&ocirc;i b&ecirc;n thả th&iacute;nh nhau</strong>. C&oacute; trường hợp &quot;th&iacute;nh thơm&quot; th&igrave; quan hệ giữa đ&ocirc;i b&ecirc;n sẽ đến bước tiến mới. Nếu kh&ocirc;ng th&igrave; cứ thả th&iacute;nh qua lại v&agrave; rất dễ rơi v&agrave;o mối quan hệ kh&ocirc;ng r&otilde; r&agrave;ng, kh&ocirc;ng ai muốn bước tiếp.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">C&ograve;n c&oacute; một loại th&iacute;nh gọi l&agrave;<strong> &quot;th&iacute;nh quốc d&acirc;n&quot;</strong>. Đa phần mọi người đều sợ loại th&iacute;nh n&agrave;y v&igrave; kh&ocirc;ng cần biết l&agrave; ai, ai họ cũng c&oacute; thể th&acirc;n thiện, quan t&acirc;m, chăm s&oacute;c. Nếu tr&oacute;t d&iacute;nh phải th&iacute;nh quốc d&acirc;n sẽ đau khổ nhiều đấy.</span></span></p>\r\n', '0', 1507139230, 1507172821, NULL, 1);
INSERT INTO `answers` (`id`, `user_id`, `question_id`, `status`, `answers_text`, `is_anonymous`, `create_time`, `update_time`, `images`, `censor_flag`) VALUES
(142, 86, 327, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Trong tiếng anh, CV l&agrave; viết tắt của từ &quot;Curriculum Vitae&quot;. </strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ở Việt Nam,&nbsp;CV thường được dịch l&agrave; <strong>sơ yếu l&yacute; lịch</strong>, nhưng bản chất CV lại kh&aacute;c Sơ yếu l&yacute; lịch một ch&uacute;t. CV l&agrave; bản t&oacute;m tắt những th&ocirc;ng tin về tr&igrave;nh độ học vấn, kinh nghiệm l&agrave;m việc, c&aacute;c kỹ năng li&ecirc;n quan tới c&ocirc;ng việc m&agrave; ứng vi&ecirc;n mu&ocirc;n ứng tuyển. CV kh&ocirc;ng phải l&agrave; tờ khai l&yacute; lịch tự thuật c&aacute; nh&acirc;n.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Hiện nay, CV l&agrave; yếu tố đ&oacute;ng vai tr&ograve; rất quan trọng để nh&agrave; tuyển dụng đ&aacute;nh gi&aacute; v&agrave; xem x&eacute;t từng ứng vi&ecirc;n, thậm ch&iacute; l&agrave; cơ sở ch&iacute;nh để loại những ứng vi&ecirc;n kh&ocirc;ng ph&ugrave; hợp trước v&ograve;ng phỏng vấn. C&oacute; nghĩa l&agrave; dựa v&agrave;o CV, nh&agrave; tuyển dụng sẽ đ&aacute;nh gi&aacute; cơ bản về ứng vi&ecirc;n v&agrave; loại những ứng vi&ecirc;n kh&ocirc;ng đạt y&ecirc;u cầu. V&igrave; thế, CV cần phải chỉn chu v&agrave; được quan t&acirc;m v&igrave; đ&oacute; l&agrave; ấn tượng ban đầu đối với c&aacute;c nh&agrave; tuyển dụng.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Giữa h&agrave;ng ng&agrave;n CV được gửi về cho nh&agrave; tuyển dụng, CV của bạn phải l&agrave;m sao g&acirc;y được ấn tượng v&agrave;&nbsp;nổi bật nhất. Nhưng c&oacute; <strong>một số th&ocirc;ng tin cơ bản</strong> m&agrave; một CV cần đ&aacute;p ứng được:</span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Th&ocirc;ng tin c&aacute; nh&acirc;n:</strong>&nbsp;Họ t&ecirc;n, ng&agrave;y th&aacute;ng năm sinh, qu&ecirc; qu&aacute;n, số điện thoại v&agrave; email li&ecirc;n lạc.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Tr&igrave;nh độ học vấn:</strong>&nbsp;N&ecirc;n liệt k&ecirc; cấp học từ cao đẳng/ đại học trở l&ecirc;n. Ngo&agrave;i ra bạn cũng c&oacute; thể th&ecirc;m v&agrave;o c&aacute;c kh&oacute;a học chuy&ecirc;n m&ocirc;n, nghiệp vụ m&agrave; bạn đăng k&yacute; học ở c&aacute;c trung t&acirc;m.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Kinh nghiệm l&agrave;m việc:</strong>&nbsp;Chỉ n&ecirc;n viết v&agrave;o CV những c&ocirc;ng việc trong c&ugrave;ng ng&agrave;nh nghề, hoặc c&oacute; li&ecirc;n quan đến vị tr&iacute; m&agrave; bạn ứng tuyển. C&ograve;n nếu bạn c&oacute; c&ograve;n đang l&agrave; sinh vi&ecirc;n hoặc qu&aacute; &iacute;t kinh nghiệm, c&oacute; thể thay thế bằng c&aacute;c hoạt động x&atilde; hội, c&acirc;u lạc bộ m&agrave; bạn thấy rằng bạn đ&atilde; học được những kỹ năng cần thiết cho c&ocirc;ng việc.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Kỹ năng:</strong>&nbsp;C&aacute;c kỹ năng n&ecirc;n đưa v&agrave;o CV: tin học văn ph&ograve;ng, kỹ năng mềm: giao tiếp, thuyết tr&igrave;nh hoặc c&aacute;c kỹ năng đặc th&ugrave; của c&ocirc;ng việc như thiết kế, lập tr&igrave;nh v.v</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Mục ti&ecirc;u nghề nghiệp:</strong>&nbsp;Bạn n&ecirc;n chỉ r&otilde; những dự định, th&agrave;nh tựu m&agrave; bạn muốn đạt được trong tương lai hoặc kế hoạch ngắn gọn m&agrave; bạn muốn l&agrave;m để đạt được mục ti&ecirc;u đ&oacute;. C&oacute; thể viết mục ti&ecirc;u ngắn hạn v&agrave; d&agrave;i hạn để thể hiện bạn l&agrave; người c&oacute; ch&iacute; tiến thủ v&agrave; biết lập kế hoạch r&otilde; r&agrave;ng</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Chứng chỉ v&agrave; giải thưởng (nếu c&oacute;):</strong>&nbsp;VD chứng chỉ ngoại ngữ (IELTS, TOEIC), tin học, giải thưởng của c&aacute;c cuộc thi chuy&ecirc;n m&ocirc;n.</span></li>\r\n</ol>\r\n\r\n<h2 style=\"text-align:justify\"><strong><span style=\"font-size:14px\">Lưu &yacute; khi viết CV</span></strong></h2>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\">CV xin việc kh&ocirc;ng n&ecirc;n d&ugrave;ng từ ngữ qu&aacute; khoa trương, to t&aacute;t, kh&ocirc;ng tr&igrave;nh b&agrave;y d&agrave;i d&ograve;ng lan man.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\">Kh&ocirc;ng n&ecirc;n viết tất cả những c&ocirc;ng việc bạn l&agrave;m, kỹ năng bạn c&oacute; v&agrave;o CV, v&igrave; ch&uacute;ng c&oacute; thể kh&ocirc;ng li&ecirc;n quan đến vị tr&iacute; bạn ứng tuyển v&agrave; c&oacute; thể trở th&agrave;nh một điểm trừ trong CV.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\">Ch&uacute; &yacute; đến những từ kh&oacute;a trong y&ecirc;u cầu c&ocirc;ng việc để đưa v&agrave;o CV th&ocirc;ng tin ph&ugrave; hợp.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\">CV n&ecirc;n ngắn gọn v&agrave; s&uacute;c t&iacute;ch, độ d&agrave;i từ 1&ndash;2 trang l&agrave; ph&ugrave; hợp nhất.</span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Nếu bạn muốn c&oacute; một CV ấn tượng th&igrave; c&oacute; thể tham khảo c&aacute;c Template CV c&oacute; sẵn tr&ecirc;n mạng. Chỉ cần bạn search từ kh&oacute;a Template CV l&agrave; sẽ ra rất nhiều. Nếu bạn cần những gợi &yacute; cụ thể v&agrave; mong t&igrave;m được một c&ocirc;ng việc ph&ugrave; hợp với m&igrave;nh th&igrave; c&oacute; thể tham khảo trang web sau:&nbsp;<strong>https://www.topcv.vn</strong></span></p>\r\n', '0', 1507916945, 1507963905, NULL, 1),
(143, 86, 275, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Tỷ gi&aacute; hối đo&aacute;</strong>i l&agrave;<strong> quan hệ so s&aacute;nh</strong> về mặt gi&aacute; trị giữa hai&nbsp;đồng tiền của hai quốc gia. Tỷ gi&aacute; hối đo&aacute;i l&agrave; một trong những <strong>c&ocirc;ng cụ thực hiện ch&iacute;nh s&aacute;ch tiền tệ quốc gia</strong>.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Chẳng hạn, tỷ gi&aacute; hối đo&aacute;i giữa Bảng Anh v&agrave; Đ&ocirc; la Mỹ l&agrave; 1,8235, c&oacute; nghĩa l&agrave; quan hệ so s&aacute;nh về gi&aacute; trị giữa hai đồng tiền n&agrave;y như sau:&nbsp;1 Bảng Anh bằng 1,8235 Đ&ocirc; la Mỹ hay 0.5484 Bảng Anh tương đương 1 Đ&ocirc; la Mỹ.&nbsp;</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Do đ&oacute;, tỷ gi&aacute; hối đo&aacute;i&nbsp;gắn với quan hệ&nbsp;cung cầu về đồng tiền đ&oacute; tr&ecirc;n thị trường n&ecirc;n tỷ gi&aacute; sẽ thay đổi nếu cung cầu thay đổi, c&oacute; nghĩa l&agrave; tỷ gi&aacute; hối đo&aacute;i l&agrave; <strong>kh&ocirc;ng cố định, sẽ thay đổi theo từng thời k&igrave;.</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">Điều 13 Luật Ng&acirc;n h&agrave;ng Nh&agrave; nước Việt Nam năm 2010 quy định:</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">1. Tỷ gi&aacute; hối đo&aacute;i của đồng Việt Nam được h&igrave;nh th&agrave;nh tr&ecirc;n cơ sở cung cầu ngoại tệ tr&ecirc;n thị trường c&oacute; sự điều tiết của Nh&agrave; nước.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">2. Ng&acirc;n h&agrave;ng Nh&agrave; nước c&ocirc;ng bố tỷ gi&aacute; hối đo&aacute;i, quy định chế độ tỷ gi&aacute;, cơ chế điều h&agrave;nh tỷ gi&aacute;.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 1508005404, 1508090195, NULL, 1),
(144, 86, 328, 1, '<h3 style=\"text-align:justify\"><span style=\"font-size:14px\">Lo&agrave;i ch&oacute; Rottweiler đang kh&aacute; l&agrave; được c&aacute;c bạn trẻ Việt Nam ưa chuộng, thậm ch&iacute; c&oacute; người bỏ ra h&agrave;ng chục triệu để mua một em Rottweiler chuẩn Đức. </span></h3>\r\n\r\n<h3 style=\"text-align:justify\"><strong><span style=\"font-size:14px\">Một số th&ocirc;ng tin cơ bản về lo&agrave;i ch&oacute; n&agrave;y:</span></strong></h3>\r\n\r\n<h3 style=\"text-align:justify\"><strong><span style=\"font-size:14px\">Nguồn gốc xuất xứ</span></strong></h3>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ch&oacute; sinh tại c&aacute;c trại ch&oacute; uy t&iacute;n, hoặc c&oacute; giấy khai sinh do VKA (Hiệp hội ch&oacute; giống Việt Nam) cấp thường c&oacute; gi&aacute; đắt hơn v&agrave;i triệu so với những em Rott kh&ocirc;ng r&otilde; nguồn gốc. Những em ch&oacute; Rott c&oacute; giấy khai sinh sẽ ở một đẳng cấp kh&aacute;c trong giới chơi ch&oacute;, con của những ch&uacute; ch&oacute; n&agrave;y cũng sẽ c&oacute; gi&aacute; cao hơn v&igrave; về cơ bản ch&oacute; c&oacute; nguồn gốc sẽ an to&agrave;n hơn. Những ch&uacute; ch&oacute; lai lịch kh&ocirc;ng r&otilde; r&agrave;ng dễ mắc phải bệnh tật m&agrave; kh&ocirc;ng c&oacute; đảm bảo.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ch&oacute; nhập ngoại (trừ ch&oacute; Trung Quốc) lu&ocirc;n c&oacute; gi&aacute; đắt hơn ch&oacute; trong nước. Gi&aacute; thường cao gấp 2 &ndash; 3 lần ch&oacute; nội nếu nhập từ Th&aacute;i hoặc Indo. V&agrave; sẽ cao gấp 10 lần nếu nhập từ c&aacute;c nước &Acirc;u &ndash; Mỹ.</span></p>\r\n\r\n<h3 style=\"text-align:justify\"><strong><span style=\"font-size:14px\">Đặc điểm, k&iacute;ch thước</span></strong></h3>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ch&oacute; Rottweiler d&ograve;ng đại thường đắt gắp rưỡi đến gấp đ&ocirc;i d&ograve;ng trung. Chất lượng của từng b&eacute; Rott cũng ảnh hưởng nhiều tới gi&aacute;. Những b&eacute; d&aacute;ng chuẩn từ nhỏ, khung xương v&agrave; đầu thủ rộng, th&acirc;n h&igrave;nh rắn chắc lu&ocirc;n c&oacute; gi&aacute; cao hơn c&aacute;c b&eacute; kh&aacute;c trong đ&agrave;n.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Từ đ&oacute; m&agrave; người ta định mức gi&aacute; cho c&aacute;c b&eacute; Rott. Dưới đ&acirc;y l&agrave; <strong>một số mức gi&aacute; tham khảo</strong> nếu bạn muốn mua một em Rott sinh ở Việt Nam:</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ch&oacute; Rottweiler sinh trong nước&nbsp;<strong>thường c&oacute; gi&aacute; từ&nbsp;&nbsp;7&nbsp;&ndash; 9 triệu</strong>. C&aacute;c b&eacute; Rott ở mức gi&aacute; n&agrave;y thường l&agrave; Rott d&ograve;ng trung c&oacute; độ thuần chủng cao, bố mẹ kh&aacute; đẹp nhưng thường kh&ocirc;ng c&oacute; giấy tờ. Nếu bạn kh&ocirc;ng phải người nu&ocirc;i Rott để đi thi, hay nu&ocirc;i để nh&acirc;n giống th&igrave; c&oacute; giấy hay kh&ocirc;ng giấy kh&ocirc;ng qu&aacute; quan trọng.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Những b&eacute; Rottweiler sinh trong nước, c&oacute; giấy VKA đầy đủ thường được b&aacute;n bởi c&aacute;c trại lớn, hoặc người nh&acirc;n giống chuy&ecirc;n nghiệp thường c&oacute; gi&aacute;<strong> từ 14 &ndash; 20 triệu.</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ngo&agrave;i ra, ở Việt Nam c&ograve;n c&oacute; <strong>d&ograve;ng Rott đại cũng rất được người nu&ocirc;i săn l&ugrave;ng</strong>. Rott đại khi trưởng th&agrave;nh c&oacute; thể đạt khối lượng hơn 60kg tới 70kg nhưng th&acirc;n h&igrave;nh chắc chắn, kh&ocirc;ng hề xồ xề. Do số lượng hạn chế n&ecirc;n gi&aacute; ch&oacute; Rottweiler đại thường ở <strong>mức 13 &ndash; 16 triệu</strong> mỗi b&eacute;.</span></p>\r\n', '0', 1508047401, 1508090177, NULL, 1),
(145, 86, 322, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ng&acirc;n h&agrave;ng Vietcombank</strong> l&agrave; ng&acirc;n h&agrave;ng được rất nhiều người Việt Nam lựa chọn v&igrave; uy t&iacute;n v&agrave; an to&agrave;n. Tuy nhi&ecirc;n, nhiều người cũng thắc mắc về giờ hoạt động của ng&acirc;n h&agrave;ng v&igrave; c&oacute; những giao dịch khẩn cấp cần sự can thiệp của ng&acirc;n h&agrave;ng.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Đối với hầu hết c&aacute;c chi nh&aacute;nh Vietcombank giờ hoạt động sẽ l&agrave;:</span></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">Buổi s&aacute;ng: 8h - 12h</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">Buổi chiều: 13h - 17h</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Tuy nhi&ecirc;n, c&oacute; một số chi nh&aacute;nh ng&acirc;n h&agrave;ng Vietcombank ở một số th&agrave;nh phố lớn sẽ c&oacute; giờ hoạt động l&agrave;:</span></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">Buổi s&aacute;ng: 7h30 - 12h</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">Buổi chiều: 13h - 16h30</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">C&ograve;n về việc ng&acirc;n h&agrave;ng Vietcombank c&oacute; l&agrave;m việc thứ Bảy hay kh&ocirc;ng th&igrave; c&acirc;u trả lời l&agrave; hầu hết ng&acirc;n h&agrave;ng Vietcombank đều chỉ l&agrave;m việc <strong>từ thứ Hai đến thứ S&aacute;u</strong>. Chỉ c&oacute; <strong>một số ng&acirc;n h&agrave;ng Vietcombank ở th&agrave;nh phố lớn như Hồ Ch&iacute; Minh v&agrave; H&agrave; Nội</strong> sẽ c&oacute; người trực ng&acirc;n h&agrave;ng v&agrave;o thứ Bảy. V&iacute; dụ như ng&acirc;n h&agrave;ng Vietcombank chi nh&aacute;nh th&agrave;nh phố Hồ Ch&iacute; Minh sẽ hoạt động v&agrave;o s&aacute;ng thứ Bảy, thời gian l&agrave;m việc l&agrave; từ 7h30 - 11h30. Chi nh&aacute;nh đ&oacute; nằm ở&nbsp;<strong>t&ograve;a nh&agrave; Havana &ndash; 132 H&agrave;m Nghi, Quận 1, TP Hồ Ch&iacute; Minh.</strong></span></p>\r\n', '0', 1508914130, 1508976537, NULL, 1),
(146, 86, 332, 1, '<p>Tiếng Nhật c&oacute; nhiều c&acirc;u ch&agrave;o nhưng th&ocirc;ng dụng nhất, người ta thường d&ugrave;ng một số c&acirc;u ch&agrave;o như sau:</p>\r\n\r\n<p><strong>Buổi s&aacute;ng:</strong> おはようございます。（ohayou gozaimasu)</p>\r\n\r\n<p><strong>Buổi trưa:</strong> こんにちは。(konnichiwa)</p>\r\n\r\n<p><strong>Buổi tối: </strong>こんばんは。(konbanwa)</p>\r\n\r\n<p>C&aacute;ch đọc th&igrave; như phi&ecirc;n &acirc;m trong ngoặc th&ocirc;i, kh&ocirc;ng c&oacute; g&igrave; kh&oacute; khăn cả.</p>\r\n', '0', 1509207018, 1509228455, NULL, 1),
(147, 86, 331, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\">T&iacute;nh năng Bluetooth tr&ecirc;n laptop chắc kh&ocirc;ng c&ograve;n xa lạ với những người đang sở hữu một chiếc laptop v&agrave; t&ugrave;y v&agrave;o mỗi hệ điều h&agrave;nh th&igrave; sẽ c&oacute; c&aacute;ch mở bluetooth kh&aacute;c nhau. Th&ocirc;ng thường, laptop hiện h&agrave;nh thường sử dụng ba hệ điều h&agrave;nh l&agrave;<strong> win 7, win 8.1 v&agrave; win 10</strong>.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Đối với Win 7:</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em>Bước 1</em>: Click&nbsp;<strong>Menu Start --&gt; Control Panel --&gt; Network and Internet</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em>Bước 2</em>: Trong cửa sổ&nbsp;<strong>Network and Internet</strong>, click&nbsp;<strong>Network and Sharing Center</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em>Bước 3</em>: Tại đ&acirc;y, click tiếp&nbsp;<strong>Change adapter settings</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Click chuột phải v&agrave;o&nbsp;<strong>Bluetooth Network Connection</strong>, chọn&nbsp;<strong>Disable để tắt Bluetooth</strong>&nbsp;(hoặc nếu bạn muốn bật Bluetooth th&igrave; cũng l&agrave;m tương tự).</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Đối với Win 8.1:</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em>Bước 1:&nbsp;</em>Click v&agrave;o biểu tượng <strong>Bluetooth</strong> ở dưới thanh c&ocirc;ng cụ sau đ&oacute; chọn <strong>Show Bluetooth Devices</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Hoặc nếu kh&ocirc;ng c&oacute; biểu tượng Bluetooth dưới thanh taskbar bạn <strong>nhập từ kh&oacute;a Bluetooth v&agrave;o &ocirc; t&igrave;m kiếm</strong> rồi click chọn<strong> Bluetooth settings</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em>Bước 2:</em>&nbsp;Khi đ&oacute; bạn sẽ thấy cửa sổ&nbsp; <strong>Manage Bluetooth devices</strong> xuất hiện. Tại đ&acirc;y bạn c&oacute; thể bật tắt Bluetooth một c&aacute;ch dễ d&agrave;ng.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Đối với Win 10:</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong><em>C&aacute;ch 1:</em></strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em>Bước 1:</em>&nbsp;Nhấp v&agrave;o biểu tượng <strong>Acion Center </strong>nằm ở cuối m&agrave;n h&igrave;nh.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em>Bước 2</em>: Chọn biểu tượng Bluetooth trong c&aacute;c ph&iacute;m bật tắt nhanh.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong><em>C&aacute;ch 2:</em></strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em>Bước 1:</em>&nbsp;Nhấn tổ hợp ph&iacute;m&nbsp;<strong>Windows + I</strong>&nbsp;để mở nhanh Settings tr&ecirc;n Windows 10, hoặc bạn cũng c&oacute; thể nhấn Start Menu &gt; g&otilde;&nbsp;<strong>Settings</strong>&nbsp;v&agrave; nhấn v&agrave;o kết quả t&igrave;m kiếm để v&agrave;o <strong>Settings</strong> tr&ecirc;n Windows 10.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em>Bước 2:</em>&nbsp;Trong Settings chọn&nbsp;<strong>Devices</strong>&nbsp;&gt;<strong>Bluetooth.</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Click chọn&nbsp;<strong>Devices</strong>.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Bước 3: Trong&nbsp;<strong>Devices</strong>, bạn tiếp tục chọn mục Bluetooth để mở trang quản l&yacute; bật tắt Bluetooth tr&ecirc;n Windows 10.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Bước 4: Gạt chuyển n&uacute;t&nbsp;<strong>Off</strong>&nbsp;&gt;<strong>On</strong>&nbsp;để bật Bluetooth tr&ecirc;n Windows 10 nh&eacute;. Muốn tắt Bluetooth tr&ecirc;n Windows 10, bạn chỉ việc thực hiện ngược lại.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Tr&ecirc;n đ&acirc;y l&agrave; những c&aacute;ch cơ bản để c&oacute; thể mở, tắt bluetooth tr&ecirc;n laptop rồi. </span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ch&uacute;c bạn th&agrave;nh c&ocirc;ng!</span></p>\r\n', '0', 1509209704, 1509228503, NULL, 1),
(148, 86, 305, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\">Chế độ thai sản lu&ocirc;n l&agrave; vấn đề chị em phụ nữ quan t&acirc;m khi l&agrave;m việc trong cơ quan nh&agrave; nước. Chị em thương nhầm lẫn về chế độ thai sản khi nghĩ rằng chỉ c&oacute; chế độ khi sinh v&agrave; sau sinh, tuy nhi&ecirc;n chế độ thai sản đ&atilde;<strong> c&oacute; hiệu lực ngay từ khi người mẹ bắt đầu mang thai</strong>. Chế độ thai sản&nbsp;2017 đ&atilde; c&oacute; nhiều điểm đổi mới hơn, đặc biệt l&agrave; những quy định về chế độ thai sản cho cả người chồng c&oacute; vợ mang thai v&agrave; người mang thai hộ. Cụ thể như sau:</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Khi mang thai</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Thai phụ được quyền nghỉ việc để đi kh&aacute;m thai 5 lần, mỗi lần 1 ng&agrave;y. Thậm ch&iacute;, với những mẹ bầu ở xa cơ sở y tế hoặc trường hợp mang thai cần chăm s&oacute;c đặc biệt sẽ được nghỉ 2 ng&agrave;y cho mỗi lần kh&aacute;m thai.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ngo&agrave;i ra, nếu c&oacute; bất kỳ &ldquo;sự cố&rdquo; như sảy thai, thai chết lưu, sinh non&hellip; người mẹ cũng được hưởng một số quyền lợi đặc biệt như:</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Những trường hợp sảy thai dưới 1 th&aacute;ng sẽ được nghỉ ph&eacute;p 10 ng&agrave;y</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- 20 ng&agrave;y nghỉ nếu thai từ 1-3 th&aacute;ng</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- 40 ng&agrave;y nghỉ nếu thai từ 3-6 th&aacute;ng</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- 50 ng&agrave;y nghỉ nếu thai từ 6 th&aacute;ng trở l&ecirc;n (bao gồm ng&agrave;y nghỉ lễ, tết v&agrave; ng&agrave;y nghỉ h&agrave;ng tuần)</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Khi sinh con</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Chế độ thai sản khi sinh con được &aacute;p dụng như sau:</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em>&ndash; Thời gian nghỉ ph&eacute;p:</em>&nbsp;Bạn được quyền nghỉ trước v&agrave; sau thời gian sinh con 6 th&aacute;ng, trong đ&oacute; thời gian nghỉ trước khi sinh kh&ocirc;ng qu&aacute; 2 th&aacute;ng. Với những mẹ mang đa thai, từ b&eacute; thứ 2 trở đi, mẹ sẽ được t&iacute;nh th&ecirc;m 1 th&aacute;ng v&agrave;o thời gian nghỉ. Trong những trường hợp đặc biệt, nếu c&oacute; nhu cầu nghỉ th&ecirc;m, mẹ c&oacute; thể xin nghỉ ph&eacute;p kh&ocirc;ng hưởng lương. Đặc biệt, nếu c&oacute; đủ sức khỏe để quay lại l&agrave;m việc trước thời gian nghỉ ph&eacute;p, mẹ vẫn nhận được trợ cấp thai sản theo quy định, v&agrave; nhận th&ecirc;m tiền lương cho những ng&agrave;y l&agrave;m việc của m&igrave;nh.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em>&ndash; Mức trợ cấp thai sản:</em>&nbsp;Bằng 100% b&igrave;nh qu&acirc;n tiền lương h&agrave;ng th&aacute;ng của 6 th&aacute;ng liền kề trước khi sinh. Ngo&agrave;i ra, bạn c&ograve;n nhận được trợ cấp một lần khi sinh con hoặc nhận con nu&ocirc;i dưới 4 th&aacute;ng tuổi tương đương với 2 th&aacute;ng lương tối thiểu chung cho mỗi b&eacute;.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em>&ndash; Hỗ trợ sau khi sinh</em>: Trong v&ograve;ng 30 ng&agrave;y, kể từ ng&agrave;y l&agrave;m việc đầu ti&ecirc;n sau chế độ nghỉ thai sản, bạn c&oacute; quyền xin nghỉ th&ecirc;m để phục hồi sức khỏe, v&agrave; được nhận 30% lương tối thiểu chung/ng&agrave;y trong trường hợp nghỉ tại nh&agrave;, hoặc 40% lương tối thiểu chung/ng&agrave;y nếu nghỉ tại cơ sở tập trung.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">+ Nghỉ 5 ng&agrave;y/ năm trong những trường hợp b&igrave;nh thường</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">+ Nghỉ tối đa 7 ng&agrave;y/ năm trong trường hợp sinh mổ</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">+ Nghỉ tối đa 10 ng&agrave;y/ năm trong trường hợp mang đa thai</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Chế độ thai sản cho chồng</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Theo luật mới được cập nhật, bắt đầu từ 1/1/2016, chế độ thai sản kh&ocirc;ng chỉ c&oacute; hiệu lực với phụ nữ, m&agrave; những &ocirc;ng bố cũng &ldquo;tranh thủ&rdquo; được một ch&uacute;t quyền lợi cho m&igrave;nh. Theo đ&oacute;, nếu anh x&atilde; của bạn c&oacute; tham gia đ&oacute;ng bảo hiểm y tế cũng c&oacute; quyền được nghỉ theo chế độ thai sản, v&agrave; c&oacute; hiệu lực trong v&ograve;ng 30 ng&agrave;y t&iacute;nh từ ng&agrave;y đầu vợ sinh con.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Nghỉ 5 ng&agrave;y với những trường hợp sinh thường</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Nghỉ 7 ng&agrave;y trong trường hợp sinh mổ, hoặc sinh con dưới 32 tuần tuổi</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Nghỉ 10 ng&agrave;y trong trường hợp sinh đ&ocirc;i, v&agrave; từ b&eacute; thứ 3 trở đi sẽ được nghỉ th&ecirc;m 3 ng&agrave;y cho mỗi b&eacute;. Những trường hợp sinh đ&ocirc;i phải sinh mổ sẽ được nghỉ 14 ng&agrave;y.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ngo&agrave;i ra, đối với trường hợp chỉ c&oacute; chồng tham gia bảo hiểm x&atilde; hội th&igrave; người chồng cũng được hưởng tiền trợ cấp thai sản, cụ thể: Theo quy định tại điểm e khoản 1 điều 31 Luật BHXH sửa đổi, bổ sung năm 2014, c&oacute; hiệu lực từ ng&agrave;y 1/1/2016: Trường hợp vợ sinh con nhưng chỉ c&oacute; chồng tham gia BHXH th&igrave; mức tiền hưởng trợ cấp thai sản của chồng bằng hai th&aacute;ng lương cơ sở tại th&aacute;ng sinh con.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Chế độ thai sản cho người mang thai hộ</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Trước Luật Bảo hiểm x&atilde; hội năm 2014, luật chưa c&oacute; quy định chế độ thai sản cho người mang thai hộ nhưng từ 1/1/2016 khi Luật Bảo hiểm x&atilde; hội mới c&oacute; hiệu lực th&igrave; ch&iacute;nh s&aacute;ch n&agrave;y bắt đầu được &aacute;p dụng.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Người mang thai hộ được hưởng chế độ thai sản về kh&aacute;m thai, sẩy thai, nạo h&uacute;t, thai chết lưu, chế độ sinh con&hellip; từ thời điểm mang thai cho đến thời điểm giao đứa trẻ cho người mẹ nhờ mang thai hộ nhưng kh&ocirc;ng vượt qu&aacute; 6 th&aacute;ng.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Trong trường hợp kể từ ng&agrave;y sinh đến thời điểm giao đứa trẻ m&agrave; thời gian hưởng chế độ thai sản chưa đủ 60 ng&agrave;y th&igrave; người mang thai hộ vẫn được hưởng chế độ thai sản cho đến khi đủ 60 ng&agrave;y t&iacute;nh cả ng&agrave;y nghỉ lễ, nghỉ Tết, ng&agrave;y nghỉ hằng tuần.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Người mẹ nhờ mang thai hộ cũng được hưởng chế độ thai sản từ thời điểm nhận con cho đến khi con đủ 6 th&aacute;ng tuổi.</span></p>\r\n\r\n<p style=\"text-align:justify\"><em><strong><span style=\"font-size:14px\">Nguồn: Theo Nguyệt Minh (Kh&aacute;m ph&aacute;)</span></strong></em></p>\r\n', '0', 1509267130, 1509294239, NULL, 1),
(149, 86, 290, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\">Th&ocirc;ng thường, để n&eacute;n v&agrave; giải n&eacute;n file tr&ecirc;n win thường d&ugrave;ng phần mềm <strong>Winrar</strong>. Để n&eacute;n v&agrave; giải n&eacute;n với Winrar kh&aacute; đơn giản, kh&ocirc;ng c&oacute; g&igrave; phức tạp cả.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em><strong>1. C&aacute;ch n&eacute;n file:</strong></em></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">+ Để&nbsp;<strong>n&eacute;n file rar v&agrave; zip</strong>&nbsp;th&igrave; bạn click chuột phải v&agrave;o thư mục hoặc file đ&oacute; chọn Add to archive</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">+ Mục Add to archive hiển thị, mục General bạn chọn dạng file cần n&eacute;n l&agrave; ZIP, RAR. Để c&agrave;i đặt mật khẩu cho file đ&oacute; bạn chọn tab Advanced -&gt; Set password -&gt; Nhập mật khẩu cần đặt -&gt; Ok. Quay lại tab General chọn OK để qu&aacute; tr&igrave;nh&nbsp;<strong>n&eacute;n file rar hoặc n&eacute;n file zip</strong>&nbsp;ho&agrave;n tất.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em><strong>2. C&aacute;ch giải n&eacute;n file:</strong></em></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">+ C&aacute;c bạn click chuột phải v&agrave;o file cần giải n&eacute;n, chọn Extract here nếu bạn muốn giải n&eacute;n file tại thư mục đ&oacute;. C&ograve;n nếu chọn Extract files &hellip; th&igrave; sẽ chọn đường dẫn giải n&eacute;n mong muốn. Extract to &ldquo;t&ecirc;n file đ&oacute;&rdquo; th&igrave; n&oacute; sẽ&nbsp;<strong>giải n&eacute;n</strong>&nbsp;v&agrave; tạo thư mục cho file đ&oacute; lu&ocirc;n.</span></p>\r\n', '0', 1510086176, 1510233476, NULL, 1),
(150, 86, 262, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\">Nhiều người th&iacute;ch nu&ocirc;i ch&oacute; nhưng lại chỉ biết đến việc ti&ecirc;m ph&ograve;ng m&agrave; &iacute;t ai để &yacute; rằng việc tẩy giun cho ch&oacute; rất quan trọng. Lịch tẩy giun cho ch&oacute; hiệu quả thường được thực hiện như sau:</span></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">* Trong qu&aacute; tr&igrave;nh trưởng th&agrave;nh:</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">-&nbsp;<strong>Lần tẩy giun đầu ti&ecirc;n:</strong>&nbsp;Ch&oacute; con mới sinh được 3 tuần tuổi (thường ở ng&agrave;y thứ 21-23, muộn nhất l&agrave; ng&agrave;y thứ 25). L&uacute;c n&agrave;y giun c&oacute; thể đẻ trứng trong ruột ch&oacute;&nbsp;con do đ&oacute; cần phải tẩy giun, s&aacute;n trước khi trứng của ch&uacute;ng lan ra m&ocirc;i trường b&ecirc;n ngo&agrave;i.<br />\r\n<br />\r\n-&nbsp;<strong>Sau lần đầu ti&ecirc;n:</strong>&nbsp;Cứ 2 tuần 1 lần tẩy giun cho ch&oacute; cho tới khi được 3 th&aacute;ng tuổi.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">-&nbsp;<strong>Sau 3 th&aacute;ng tuổi:</strong>&nbsp;Mỗi th&aacute;ng 1 lần từ khi 3 th&aacute;ng cho tới 6 th&aacute;ng tuổi.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">-&nbsp;<strong>Ch&oacute;&nbsp;tr&ecirc;n 6 th&aacute;ng tuổi:</strong>&nbsp;2-3 th&aacute;ng tẩy 1 lần.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">-&nbsp;<strong>Ch&oacute; tr&ecirc;n 1 năm tuổi, ch&oacute;&nbsp;trưởng th&agrave;nh:</strong>&nbsp;1 năm tẩy 1-2 lần. T&ugrave;y theo m&ocirc;i trường sống v&agrave; điều kiện vệ sinh c&oacute; thể tẩy 3-4 lần 1 năm.</span></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">* Trong qu&aacute; tr&igrave;nh mang thai v&agrave; cho con b&uacute;:</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em>Ch&oacute; mẹ nhiễm giun s&aacute;n sẽ l&acirc;y truyền sang con qua nhau thai v&agrave; sữa v&igrave; vậy đặc biệt lưu &yacute; tiến h&agrave;nh thật cẩn thận cho ch&oacute; mẹ.</em></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Tẩy giun cho ch&oacute;&nbsp;c&aacute;i sinh sản trước khi phối giống 1 th&aacute;ng.<br />\r\n- Tẩy một lần cho ch&oacute; mẹ trước khi sinh khoảng 1 -2 tuần.<br />\r\n- Ch&oacute; mẹ đang cho con b&uacute; tẩy c&ugrave;ng với ch&oacute;&nbsp;con.</span></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">Một số lưu &yacute; trước khi tẩy giun cho ch&oacute;:</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Nếu s&aacute;ng ng&agrave;y h&ocirc;m sau định tẩy giun th&igrave; buổi tối h&ocirc;m trước cho ăn &iacute;t hơn so với mọi lần.<br />\r\n- Khi tẩy chỉ n&ecirc;n cho ăn &iacute;t th&ocirc;i v&agrave; thức ăn ngon hơn mọi ng&agrave;y (nửa khẩu phần ăn như mọi khi).</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- C&aacute;ch tẩy giun ch&oacute;: C&oacute; thể t&aacute;n thuốc thật nhỏ rồi trộn v&agrave;o thức ăn cho ch&oacute;&nbsp;nhỏ hoặc kẹp vi&ecirc;n thuốc v&agrave;o giữa miếng thịt, gan v&agrave; cho ăn đối với ch&oacute;&nbsp;ph&agrave;m ăn. C&aacute;ch kh&aacute;c l&agrave; d&ugrave;ng tay b&oacute;p miệng, cho ch&oacute; ngửa cổ, đặt thuốc v&agrave;o lưỡi, đẩy v&agrave;o b&ecirc;n trong, cho ch&oacute; ngậm miệng lại, vuốt cổ.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- T&ugrave;y theo m&ocirc;i trường vệ sinh ăn, ở sạch hay bẩn m&agrave; điều chỉnh lịch tẩy cho hợp l&yacute;. V&iacute; dụ&nbsp;ch&oacute;&nbsp;trưởng th&agrave;nh hay ăn thả r&ocirc;ng, ăn linh tinh, vệ sinh kh&ocirc;ng được sạch sẽ như nu&ocirc;i nhốt th&igrave; 1 năm c&oacute; thể tẩy 3 - 4 lần.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Kh&ocirc;ng n&ecirc;n tảy giun s&aacute;n khi ch&oacute; đang mắc bệnh hoặc thời tiết n&oacute;ng qu&aacute;.<br />\r\n- Sau khi tẩy n&ecirc;n cho ch&oacute; uống men ti&ecirc;u h&oacute;a để hỗ trợ hệ ti&ecirc;u h&oacute;a, tốt cho đường ruột hơn.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Thực hiện vệ sinh chuồng nu&ocirc;i v&agrave; nơi chăn thả ch&oacute; ph&ograve;ng ngừa t&aacute;i nhiễm giun s&aacute;n<br />\r\n- Hạn chế trẻ em tiếp x&uacute;c với ch&oacute;, sau đ&oacute; phải rửa tay sạch sẽ để hạn chế l&acirc;y nhiễm bệnh giun m&oacute;c.</span></p>\r\n', '0', 1510244641, 1510759383, NULL, 1),
(151, 86, 306, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\">Về cơ bản, <strong>luật Bảo hiểm x&atilde; hội </strong>kh&ocirc;ng c&oacute; g&igrave; thay đổi so với những quy định về bảo hiểm x&atilde; hội năm 2014 do Quốc hội ban h&agrave;nh. <strong>Bạn c&oacute; thể tham khảo ở:&nbsp;</strong></span><a href=\"https://thuvienphapluat.vn/van-ban/Bao-hiem/Luat-Bao-hiem-xa-hoi-2014-259700.aspx\"><span style=\"font-size:14px\">thư viện ph&aacute;p luật</span></a></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Một số thay đổi của&nbsp;<strong>luật Bảo hiểm x&atilde; hội 2017 mới :</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Theo Nghị định 44/2017/NĐ-CP ng&agrave;y 14/4/2017 của Ch&iacute;nh phủ quy định mức đ&oacute;ng Bảo hiểm x&atilde; hội&nbsp;bắt buộc v&agrave;o quỹ bảo hiểm tai nạn lao động, bệnh nghề nghiệp, c&oacute; hiệu lực thi h&agrave;nh từ ng&agrave;y 1/6, người sử dụng lao động h&agrave;ng th&aacute;ng đ&oacute;ng v&agrave;o Quỹ bảo hiểm tai nạn lao động, bệnh nghề nghiệp theo quy định tại Khoản 3, Điều 44 Luật An to&agrave;n, vệ sinh lao động với mức được điều chỉnh như sau:</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Giảm từ 1% xuống c&ograve;n 0,5% tr&ecirc;n quỹ tiền lương l&agrave;m căn cứ đ&oacute;ng Bảo hiểm x&atilde; hội&nbsp;của người lao động được quy định tại c&aacute;c Điểm a, b, c, d, đ v&agrave; h, Khoản 1, Điều 2 Luật BHXH 2014 (trừ đối tượng l&agrave; người gi&uacute;p việc).</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Giảm từ 1% xuống c&ograve;n 0,5% tr&ecirc;n lương cơ sở đối với người lao động quy định tại Điểm e, Khoản 1, Điều 2 Luật Bảo hiểm x&atilde; hội&nbsp;2014.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Đối với người lao động l&agrave;m việc theo hợp đồng lao động c&oacute; thời hạn từ đủ 1 th&aacute;ng đến dưới 3 th&aacute;ng sẽ thực hiện quy định tr&ecirc;n kể từ ng&agrave;y 1/1/2018.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Người sử dụng lao động l&agrave; doanh nghiệp, hợp t&aacute;c x&atilde;, hộ kinh doanh c&aacute; thể, tổ hợp t&aacute;c hoạt động trong lĩnh vực n&ocirc;ng nghiệp, l&acirc;m nghiệp, ngư nghiệp, di&ecirc;m nghiệp trả lương theo sản phẩm, theo kho&aacute;n th&igrave; mức đ&oacute;ng hằng th&aacute;ng theo quy định tại Điểm a, Khoản 1 Điều n&agrave;y (0,5%); phương thức đ&oacute;ng được thực hiện hằng th&aacute;ng, 3 th&aacute;ng hoặc 6 th&aacute;ng một lần.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Từ ng&agrave;y 26/6, Nghị định số 33/2016/NĐ-CP của Ch&iacute;nh phủ quy định chi tiết v&agrave; hướng dẫn thi h&agrave;nh một số điều của Luật Bảo hiểm x&atilde; hội&nbsp;về Bảo hiểm x&atilde; hội&nbsp;bắt buộc đối với qu&acirc;n nh&acirc;n, c&ocirc;ng an nh&acirc;n d&acirc;n v&agrave; người l&agrave;m c&ocirc;ng t&aacute;c cơ yếu hưởng lương như đối với qu&acirc;n nh&acirc;n c&oacute; hiệu lực.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Theo đ&oacute;, qu&acirc;n nh&acirc;n, c&ocirc;ng an nh&acirc;n d&acirc;n v&agrave; người l&agrave;m c&ocirc;ng t&aacute;c cơ yếu bắt đầu hưởng lương hưu h&agrave;ng th&aacute;ng từ năm 2016 đến hết năm 2017, tỷ lệ hưởng lương hưu được t&iacute;nh bằng 45% tương ứng với 15 năm đ&oacute;ng Bảo hiểm x&atilde; hội, sau đ&oacute;, cứ th&ecirc;m mỗi năm đ&oacute;ng Bảo hiểm x&atilde; hội&nbsp;được t&iacute;nh th&ecirc;m 2% đối với nam v&agrave; 3% đối với nữ; mức tối đa bằng 75%.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Để biết th&ecirc;m chi tiết về mức quy định đ&oacute;ng Bảo hiểm x&atilde; hội v&agrave; một số lưu &yacute; về thủ tục đ&oacute;ng Bảo hiểm x&atilde; hội theo quy định của ph&aacute;p luật, bạn c&oacute; thể tham khảo th&ecirc;m ở đ&acirc;y:</span>&nbsp; <a href=\"http://ketoanthienung.com/quy-dinh-huong-dan-ve-bao-hiem-xa-hoi-moi-nhat.htm\">Kế to&aacute;n thi&ecirc;n ưng</a></p>\r\n', '0', 1510245895, 1510759307, NULL, 1),
(152, 86, 284, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\">Bạn c&oacute; thể thay đổi h&igrave;nh nền của slide trong power point như sau:</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">V&agrave;o <strong>Format --&gt; Custom Background</strong> rồi chọn m&agrave;u bạn th&iacute;ch v&agrave; nhấp <strong>&quot;Apply&quot;</strong> cho một slide hoặc<strong> &quot;Apply to All&quot;</strong> cho tất cả c&aacute;c slide của bạn. Bạn cũng c&oacute; thể chọn m&agrave;u nền c&oacute; sẵn của c&aacute;c slide mẫu bằng c&aacute;ch nhấp v&agrave;o biểu tượng<strong> &quot;Apply Design Template&quot;</strong> tr&ecirc;n thanh <strong>&quot;Toolbar standard&quot;</strong>, sau đ&oacute; chọn m&agrave;u nền bạn th&iacute;ch.&nbsp;<br />\r\nC&ograve;n nếu bạn kh&ocirc;ng th&iacute;ch những h&igrave;nh nền c&oacute; sẵn th&igrave; bạn c&oacute; thể search Google <strong>&quot;Background Powerpoint&quot;</strong> hoặc bất cứ h&igrave;nh ảnh n&agrave;o bạn th&iacute;ch, save về m&aacute;y. Sau đ&oacute;, copy paste h&igrave;nh đ&oacute; v&agrave;o slide bạn muốn ch&egrave;n. Bạn n&ecirc;n chọn những ảnh c&oacute; độ ph&acirc;n giải cao để khi l&ecirc;n slide sẽ kh&ocirc;ng bị vỡ ảnh nh&eacute;.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ch&uacute;c bạn th&agrave;nh c&ocirc;ng!</span></p>\r\n', '0', 1510251078, 1510759126, NULL, 1),
(153, 86, 246, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Đầu ti&ecirc;n, Deep Web l&agrave; g&igrave;?</strong>&nbsp;Phần lớn trang web được biết đến như l&agrave; Deep Web, đ&ocirc;i khi c&ograve;n được gọi l&agrave; web ẩn, web v&ocirc; h&igrave;nh, ch&uacute;ng đề cập đến tất cả c&aacute;c nội dung kỹ thuật số m&agrave; kh&ocirc;ng thể được t&igrave;m thấy với một c&ocirc;ng cụ t&igrave;m kiếm. N&oacute; bao gồm email trong t&agrave;i khoản Gmail, c&aacute;c bản k&ecirc; ng&acirc;n h&agrave;ng trực tuyến, mạng nội bộ, tin nhắn trực tiếp qua Twitter, h&igrave;nh ảnh được đ&aacute;nh dấu ri&ecirc;ng tư khi tải l&ecirc;n Facebook. Ch&iacute;nh phủ, c&aacute;c nh&agrave; nghi&ecirc;n cứu v&agrave; c&aacute;c c&ocirc;ng ty lưu trữ dữ liệu th&ocirc; kh&ocirc;ng thể tiếp cận được với c&ocirc;ng ch&uacute;ng. Nội dung n&agrave;y được lưu trữ tr&ecirc;n c&aacute;c trang web động (được x&acirc;y dựng dựa tr&ecirc;n th&ocirc;ng tin truy vấn) v&agrave; những trang bị kh&oacute;a, những trang c&aacute; nh&acirc;n kh&ocirc;ng li&ecirc;n kết ra b&ecirc;n ngo&agrave;i. Theo Trend Micro, một phần quan trọng của Deep Web l&agrave; được d&agrave;nh ri&ecirc;ng cho những blog c&aacute; nh&acirc;n hoặc ch&iacute;nh trị, c&aacute;c trang tin tức, diễn đ&agrave;n thảo luận, c&aacute;c trang web t&ocirc;n gi&aacute;o v&agrave; thậm ch&iacute; đ&agrave;i ph&aacute;t thanh.&nbsp;Như vậy, Deep Web kh&ocirc;ng hẳn l&agrave; to&agrave;n thứ xấu xa, kinh khủng như ch&uacute;ng ta vẫn tưởng tượng. <strong>Nhưng ph&iacute;a dưới Deep Web vẫn c&ograve;n một tầng nữa, đ&oacute; ch&iacute;nh l&agrave; Dark Web.</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Tuy nhi&ecirc;n, kh&ocirc;ng thể phủ nhận Deep Web ẩn chứa kh&aacute; nhiều nguy hiểm cho những người sử dụng Internet.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Đầu ti&ecirc;n, Deep Web thường chứa những th&ocirc;ng tin đen.</strong>&nbsp;Tại những trang web ẩn n&agrave;y đầy rẫy những danh mục với h&agrave;ng trăm thể loại, chuy&ecirc;n mục ở c&aacute;c lĩnh vực. Tuy nhi&ecirc;n, nội dung những th&ocirc;ng tin trao đổi tr&ecirc;n cộng đồng n&agrave;y đa số vi phạm ph&aacute;p luật, c&oacute; thể kể như: c&aacute;c t&agrave;i khoản ng&acirc;n h&agrave;ng, xe m&aacute;y, điện thoại, m&aacute;y t&iacute;nh&hellip; bị đ&aacute;nh cắp; nhận l&agrave;m giả giấy tờ, hộ chiếu; nhận đ&aacute;nh cắp c&aacute;c t&agrave;i khoản c&aacute; nh&acirc;n&hellip; Kh&ocirc;ng chỉ vậy, nếu như những h&agrave;ng cấm: thuốc k&iacute;ch dục, cần sa, thuốc lắc, ma t&uacute;y, s&uacute;ng ống, đạn dược&hellip; bị cấm tuyệt đối v&agrave; kh&ocirc;ng hề xuất hiện tr&ecirc;n world wide web (www.), th&igrave; tại những Deep Web lại nhan nhản. Thậm ch&iacute;, tr&ecirc;n đ&acirc;y c&ograve;n c&oacute; những&nbsp;mục chuy&ecirc;n tổng hợp c&aacute;c tin khi&ecirc;u d&acirc;m bệnh hoạn, mua b&aacute;n t&igrave;nh dục, đăng tải cả những h&igrave;nh ảnh tra tấn t&igrave;nh dục d&atilde; man&hellip;Điều n&agrave;y c&oacute; thể dẫn đến sự lệch lạc trong suy nghĩ với một bộ phận giới trẻ tiếp cận với deep web.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Thứ hai, khi truy cập những trang web n&agrave;y cũng tiềm ẩn nhiều nguy cơ.</strong> &nbsp;Người d&ugrave;ng c&oacute; thể bị &aacute;m ảnh bởi nội dung gh&ecirc; sợ, kinh khủng c&ugrave;ng những giao diện mang m&agrave;u sắc u &aacute;m, r&ugrave;ng rợn. Cũng c&oacute; những trường hợp v&ocirc; t&igrave;nh truy cập v&agrave;o Deep web m&agrave; những dữ liệu trong m&aacute;y t&iacute;nh bị mất sạch, thậm ch&iacute; mất cả t&agrave;i khoản yahoo. gmail. skype, facebook,...</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Khi đ&atilde; tr&oacute;t v&ocirc; t&igrave;nh truy cập v&agrave;o deep web v&agrave; c&oacute; dấu hiệu bị mất dữ liệu hay bị quấy rối h&atilde;y<strong> li&ecirc;n lạc ngay với bộ phận an ninh mạng</strong> để c&oacute; những biện ph&aacute;p xử l&yacute; ngay lập tức.</span></p>\r\n', '0', 1510639296, 1510759103, NULL, 1);
INSERT INTO `answers` (`id`, `user_id`, `question_id`, `status`, `answers_text`, `is_anonymous`, `create_time`, `update_time`, `images`, `censor_flag`) VALUES
(154, 86, 303, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\">C&aacute;ch t&iacute;nh thuế thu nhập c&aacute; nh&acirc;n (TNCN) mới nhất:</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>- Căn cứ t&iacute;nh thuế: </strong>thu nhập t&iacute;nh thuế, thuế suất v&agrave; t&iacute;nh theo lũy tiến từng phần</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>- Thời điểm t&iacute;nh thuế:</strong> l&agrave; thời điểm chi trả. V&iacute; dụ: Trả lương th&aacute;ng 11/2017 v&agrave;o ng&agrave;y 05/12/2017 th&igrave; t&iacute;nh thuế TNCN v&agrave;o th&aacute;ng 12/2017</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>- C&ocirc;ng thức:</strong> <em>Thuế TNCN phải nộp = Thu nhập t&iacute;nh thuế x thuế suất</em></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp; <strong>&nbsp;Trong đ&oacute;: </strong><em>Thu nhập t&iacute;nh thuế = Thu nhập chịu thuế - c&aacute;c khoản giảm trừ</em></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <em>Thu nhập chịu thuế = Tổng thu nhập - c&aacute;c khoản miễn thuế</em></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>C&aacute;c khoản miễn thuế bao gồm: </strong>tiền ăn giữa ca, ăn trưa; tiền phụ cấp trang phục; mức chi phụ cấp điện thoại, c&ocirc;ng t&aacute;c theo quy định của c&ocirc;ng ty; tiền phải trả thay thế nh&agrave; kh&ocirc;ng vượt qu&aacute; 15% tổng thu nhập chịu thuế; tiền l&agrave;m th&ecirc;m giờ v&agrave;o c&aacute;c ng&agrave;y nghỉ, lễ, l&agrave;m việc ban đ&ecirc;m được trả cao hơn; khoản tiền nhận được do tổ chức, c&aacute; nh&acirc;n trả thu nhập chi trả đ&aacute;m hiếu, hỉ.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>C&aacute;c khoản giảm trừ: </strong>giảm trừ gia cảnh (đối với người nộp thuế l&agrave; 9 triệu/th&aacute;ng, 108 triệu/năm; đối với người phụ thuộc l&agrave; 3,6 triệu/th&aacute;ng); c&aacute;c khoản bảo hiểm bắt buộc ( theo quy định của luật Bảo hiểm x&atilde; hội); c&aacute;c khoản đ&oacute;ng g&oacute;p từ thiện, nh&acirc;n đạo, khuyến học.</span></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">- Thuế suất thuế TNCN được &aacute;p dụng theo Biểu thuế lũy tiến từng phần:</span></strong></p>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:619px\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"2\" style=\"text-align:justify\"><strong><span style=\"font-size:14px\">Bậc</span></strong></td>\r\n			<td rowspan=\"2\" style=\"text-align:justify\"><strong><span style=\"font-size:14px\">Thu nhập t&iacute;nh thuế/th&aacute;ng</span></strong></td>\r\n			<td rowspan=\"2\" style=\"text-align:justify\"><strong><span style=\"font-size:14px\">Thuế suất</span></strong></td>\r\n			<td colspan=\"2\" style=\"text-align:justify\"><strong><span style=\"font-size:14px\">C&aacute;ch t&iacute;nh số thuế phải nộp</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:justify\"><strong><span style=\"font-size:14px\">C&aacute;ch 1</span></strong></td>\r\n			<td style=\"text-align:justify\"><strong><span style=\"font-size:14px\">C&aacute;ch 2</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">1</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">Đến 5 triệu đồng (trđ)</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">5%</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">0 trđ + 5% TNTT</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">5% TNTT</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">2</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">Tr&ecirc;n 5 trđ đến 10 trđ</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">10%</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">0,25 trđ + 10% TNTT tr&ecirc;n 5 trđ</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">10% TNTT - 0,25 trđ</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">3</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">Tr&ecirc;n 10 trđ đến 18 trđ</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">15%</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">0,75 trđ + 15% TNTT tr&ecirc;n 10 trđ</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">15% TNTT - 0,75 trđ</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">4</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">Tr&ecirc;n 18 trđ đến 32 trđ</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">20%</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">1,95 trđ + 20% TNTT tr&ecirc;n 18 trđ</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">20% TNTT - 1,65 trđ</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">5</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">Tr&ecirc;n 32 trđ đến 52 trđ</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">25%</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">4,75 trđ + 25% TNTT tr&ecirc;n 32 trđ</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">25% TNTT - 3,25 trđ</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">6</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">Tr&ecirc;n 52 trđ đến 80 trđ</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">30%</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">9,75 trđ + 30% TNTT tr&ecirc;n 52 trđ</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">30% TNTT - 5,85 trđ</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">7</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">Tr&ecirc;n 80 trđ</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">35%</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">18,15 trđ + 35% TNTT tr&ecirc;n 80 trđ</span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\">35% TNTT - 9,85 trđ</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><u><strong>V&iacute; dụ: </strong></u>&Ocirc;ng A l&agrave;m việc tại c&ocirc;ng ty B. Th&aacute;ng 11/2017 &ocirc;ng A nhận c&aacute;c khoản thu nhập như sau:&nbsp;</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Lương theo ng&agrave;y c&ocirc;ng l&agrave;m việc: 40.000.000 (trong đ&oacute; lương cơ bản l&agrave; 6.000.000, đ&oacute; l&agrave; mức lương m&agrave; &ocirc;ng A tham gia bảo hiểm x&atilde; hội)</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Tiền thưởng: 500.000</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Tiền phụ cấp ăn trưa: 500.00</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Phụ cấp điện thoại: 200.000</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ngo&agrave;i ra, &ocirc;ng A c&ograve;n nu&ocirc;i 2 con dưới 18 tuổi, đ&atilde; đăng k&iacute; người phụ thuộc tại c&ocirc;ng ty.</span></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">C&aacute;ch t&iacute;nh thuế TNCN &ocirc;ng A phải nộp trong th&aacute;ng 11/2017 như sau:</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong><em><span style=\"font-size:14px\">1. T&iacute;nh thu nhập chịu thuế của &ocirc;ng A</span></em></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Tổng thu nhập = 40.000.000 + 500.000 + 200.000 + 500.000 = 41.200.000</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- C&aacute;c khoản được miễn = 500.000 (phụ cấp ăn trưa) + 200.000 (phụ cấp điện thoại) = 700.000</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">=&gt; <strong>Thu nhập chịu thuế </strong>= 41.200.000 - 700.000 = 40.500.000</span></p>\r\n\r\n<p style=\"text-align:justify\"><em><strong><span style=\"font-size:14px\">2. T&iacute;nh&nbsp;c&aacute;c khoản giảm trừ của &ocirc;ng A</span></strong></em></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Bản th&acirc;n: 9.000.000</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Hai người phụ thuộc: 3.600.000 x 2 = 7.200.000</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- C&aacute;c khoản bảo hiểm:&nbsp;</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">+ BHXH (8%) = 6.000.000 x 8% = 480.000</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">+ BHYT (1.5%) = 6.000.000 x 1.5 % = 90.000</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">+ BHTN (1%) = 6.000.000 x 1% = 60.000</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">=&gt; Tổng c&aacute;c khoản bảo hiểm = 480.000 + 90.000 + 60.000 = 630.000</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">=&gt; <strong>Tổng c&aacute;c khoản giảm trừ </strong>= 9.000.000 + 7.200.000 + 630.000 = 16.830.000</span></p>\r\n\r\n<p style=\"text-align:justify\"><strong><em><span style=\"font-size:14px\">3. Thu nhập t&iacute;nh thuế của &ocirc;ng A</span></em></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Thu nhập t&iacute;nh thuế</strong> = 40.500.000 - 16.830.000 = 23. 670.000</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Vậy thu nhập t&iacute;nh thuế của &ocirc;ng A thuộc bậc 4.</span></p>\r\n\r\n<p style=\"text-align:justify\"><em><strong><span style=\"font-size:14px\">4. T&iacute;nh thuế TNCN của &ocirc;ng A</span></strong></em></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Bậc 1 = 5.000.000 x 5% = 250.000</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Bậc 2 = (10.000.000 - 5.000.000) x 10% = 500.000</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Bậc 3 = (18.000.000 - 10.000.000) x 15% = 1.200.000</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Bậc 4 = (23.670.000 - 18.000.000) x 20% = 1.134.000</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Vậy <strong>số thuế TNCN m&agrave; &ocirc;ng A phải nộp trong th&aacute;ng 11/2017</strong> = 250.000 + 500.000 + 1.200.000 + 1.134.000 = 3.084.000</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng.</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', '0', 1510774873, 1511342720, NULL, 1),
(155, 86, 300, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\">Đầu ti&ecirc;n, <strong>m&atilde; số thuế c&aacute; nh&acirc;n</strong> l&agrave;<strong> 1 m&atilde; số thuế duy nhất với mục đ&iacute;ch k&ecirc; khai cho mọi khoản thu nhập</strong>. Việc đăng k&yacute; để cấp m&atilde; số thuế thu nhập c&aacute; nh&acirc;n được thực hiện tại cơ quan chi trả thu nhập, hoặc tại cơ quan thuế. M&atilde; số thuế c&aacute; nh&acirc;n kh&ocirc;ng tự động được cấp m&agrave; phải được đăng k&yacute; th&ocirc;ng qua một số c&aacute;ch kh&aacute;c nhau. Nếu bạn l&agrave;m việc tại c&aacute;c c&ocirc;ng ty, x&iacute; nghiệp th&ocirc;ng thường sẽ được cơ quản tổ chức của m&igrave;nh đăng k&yacute; m&atilde; số thuế thu nhập c&aacute; nh&acirc;n, c&ograve;n nếu bạn l&agrave; một người l&agrave;m việc tự do c&oacute; thể đăng k&yacute; m&atilde; số thuế thu nhập c&aacute; nh&acirc;n th&ocirc;ng qua cục thuế của quận, huyện hoặc đăng k&yacute; online.</span></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">C&aacute;ch tra cứu m&atilde; số thuế c&aacute; nh&acirc;n, th&ocirc;ng tin người nộp thuế online qua số chứng minh nh&acirc;n d&acirc;n:</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Để d&ograve; t&igrave;m,&nbsp;<strong>tra cứu m&atilde; số thuế thu nhập c&aacute; nh&acirc;n</strong>&nbsp;online, cũng như&nbsp;<strong>th&ocirc;ng tin người nộp thuế,</strong>&nbsp;c&oacute; thể check dựa theo&nbsp;số<strong>&nbsp;chứng minh thư&nbsp;</strong>(hoặc hộ chiếu).</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>C&aacute;ch 1:</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Truy cập v&agrave;o đường link:&nbsp;<a href=\"https://www.tncnonline.com.vn/Pages/TracuuMST.aspx\" target=\"_blank\">https://www.tncnonline.com.vn/Pages/TracuuMST.aspx</a></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Điền số CMND của c&aacute; nh&acirc;n người nộp thuế&nbsp;v&agrave;o &ocirc; Chứng minh thư/Hộ chiếu.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Điền d&atilde;y chữ v&agrave; số m&agrave;u đỏ trong h&igrave;nh chữ nhật b&ecirc;n dưới v&agrave;o &ocirc; X&aacute;c nhận th&ocirc;ng tin.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Bấm v&agrave;o &ocirc; T&igrave;m kiếm để bắt đầu check m&atilde; số thuế c&aacute; nh&acirc;n.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Chờ v&agrave; nhận kết quả.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>C&aacute;ch 2:</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Truy cập v&agrave;o đường link:&nbsp;<a href=\"http://tracuunnt.gdt.gov.vn/tcnnt/mstcn.jsp\">http://tracuunnt.gdt.gov.vn/tcnnt/mstcn.jsp</a></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Điền số CMND của m&igrave;nh v&agrave;o &ocirc; Chứng minh thư&nbsp;</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Điền m&atilde; x&aacute;c nhận</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">- Bấm v&agrave;o &ocirc; Tra cứu.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Chờ v&agrave; nhận kết quả.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ch&uacute;c bạn th&agrave;nh c&ocirc;ng!</span></p>\r\n', '0', 1510847434, 1511246107, NULL, 1),
(156, 86, 309, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Những điểm mới về thuế thu nhập doanh nghiệp năm 2017:&nbsp;</strong>&nbsp;&nbsp;<br />\r\nNg&agrave;y 31 th&aacute;ng 12 năm 2015, Bộ t&agrave;i ch&iacute;nh ban h&agrave;nh th&ocirc;ng tư 212/2015/TT-BCT hướng dẫn ch&iacute;nh s&aacute;ch thuế thu nhập doanh nghiệp đối với hoạt động bảo vệ m&ocirc;i trường. Theo đ&oacute;:<br />\r\n* Chi ph&iacute; thực hiện hoạt động quảng b&aacute; sản phẩm ph&acirc;n loại r&aacute;c tại nguồn theo quy định khoản 1 điều 48 nghị định 19/2015/NĐ-CP &nbsp;được t&iacute;nh v&agrave;o chi ph&iacute; được trừ khi x&aacute;c định thu nhập chịu thuế thu nhập doanh nghiệp theo số chi thực tế khi đắp ứng c&aacute;c điều kiện sau:<br />\r\n&nbsp;-&nbsp;Khoản chi&nbsp;c&oacute; đủ h&oacute;a đơn chứng từ hợp ph&aacute;p.<br />\r\n&nbsp;-&nbsp;Khoản chi nếu c&oacute; h&oacute;a đơn mua h&agrave;ng h&oacute;a dịch vụ từng lần c&oacute; gi&aacute; trị từ 20 triệu đồng trở l&ecirc;n khi thanh to&aacute;n phải c&oacute; chứng từ thanh to&aacute;n kh&ocirc;ng d&ugrave;ng tiền mặt trừ trường hợp kh&ocirc;ng c&oacute; chứng từ thanh to&aacute;n kh&ocirc;ng d&ugrave;ng tiền mặt theo nghị định 218/2013/NĐ-CP.<br />\r\n<strong>* Quy định về ưu đ&atilde;i thuế thu nhập doanh nghiệp như sau : &nbsp;</strong><br />\r\n&nbsp;<em><strong> -&nbsp;Ưu đ&atilde;i về thuế suất 10 % trong 15 năm&nbsp;&nbsp;</strong></em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n&nbsp; &nbsp; &nbsp;+ Miễn, giảm thuế, &nbsp;thời gian &aacute;p dụng thuế suất ưu đ&atilde;i đối với một số dự &aacute;n cụ thể.<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; Th&ocirc;ng tư 212/2015/TT-BCT c&oacute; hiệu lực từ 14/02/2017 v&agrave; &aacute;p dụng kể từ kỳ t&iacute;nh thuế năm 2017.<br />\r\n&nbsp;<em><strong> - Thuế suất 0 % đối với một số h&agrave;ng h&oacute;a nhập từ L&agrave;o</strong></em><br />\r\n&nbsp;Ng&agrave;y 31/12/2015, Bộ c&ocirc;ng thương ban h&agrave;nh th&ocirc;ng tư quy định việc nhập khẩu theo hạn ngạch thuế quan với thuế suất 0 % đối với h&agrave;ng h&oacute;a c&oacute; xuất xứ từ L&agrave;o.&nbsp; Cụ thể như sau:</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp; &nbsp; +Gạo v&agrave; thuốc l&aacute; sẽ được &aacute;p dụng hạn ngạch thuế quan nhập khẩu h&agrave;ng năm với mức thuế suất 0 %</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp; &nbsp; + M&atilde; số h&agrave;ng h&oacute;a v&agrave; tổng lượng hạn ngạch thuế quan hằng năm được quy định cụ thể tại phụ lục k&egrave;m theo th&ocirc;ng tư n&agrave;y</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp; &nbsp; + H&agrave;ng h&oacute;a nhập khẩu trong hạn ngạch thuế qua em 0 % phải c&oacute; giấy chứng nhận xuất xứ h&agrave;ng h&oacute;a mẫu S (C/O form S) do cơ quan c&oacute; thẩm quyền của L&agrave;o cấp ph&eacute;p.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp; &nbsp; + Thủ tục nhập khẩu h&agrave;ng h&oacute;a tại cơ quan hải quan theo nguy&ecirc;n tắc &ldquo; trừ lui tự động&rdquo; (tổng lượng h&agrave;ng nhập khẩu hưởng thuế suất 0 % trừ đi số lượng nhập khẩu từng mặt h&agrave;ng) </span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp; &nbsp; + Thương nh&acirc;n Việt Nam được nhập khẩu mặt h&agrave;ng gạo theo hạn ngạch thuế quan</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;&nbsp;+ Thương nh&acirc;n Việt Nam c&oacute; giấy ph&eacute;p nhập khẩu thuốc l&aacute; nguy&ecirc;n liệu theo hạn ngạch thuế quan do Bộ C&ocirc;ng thương cấp theo quy định tại Th&ocirc;ng tư 04/2014/TT-BCT mới được ph&eacute;p nhập khẩu.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Một số văn bản ph&aacute;p luật về Thuế thu nhập doanh nghiệp:</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Tham khảo to&agrave;n bộ Luật thuế thu nhập doanh nghiệp tại:&nbsp;https://thuvienphapluat.vn/van-ban/Doanh-nghiep/Luat-thue-thu-nhap-doanh-nghiep-sua-doi-2013-197250.aspx</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Th&ocirc;ng tư hướng dẫn về thuế Thu nhập doanh nghiệp tại:&nbsp;https://thuvienphapluat.vn/van-ban/Doanh-nghiep/Thong-tu-96-2015-TT-BTC-huong-dan-thue-thu-nhap-doanh-nghiep-tai-Nghi-dinh-12-2015-ND-CP-279331.aspx</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Th&ocirc;ng tư số 11/VBHN - BTC &nbsp;hướng dẫn thi h&agrave;nh nghị định số 218/2013/NĐ-CP ng&agrave;y 26 th&aacute;ng 12 năm 2013 của Ch&iacute;nh phủ quy định v&agrave; hướng dẫn thi h&agrave;nh Luật Thuế thu nhập doanh nghiệp: https://thuvienphapluat.vn/van-ban/Doanh-nghiep/Van-ban-hop-nhat-11-VBHN-BTC-2017-Thong-tu-huong-dan-218-2013-ND-CP-Thue-doanh-nghiep-352332.aspx</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', '0', 1510952628, 1511342713, NULL, 1),
(157, 86, 307, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\">C&aacute;c m&aacute;y t&iacute;nh hiện nay thường d&ugrave;ng tr&igrave;nh duyệt Win 7 hoặc Win 10. Dưới đ&acirc;y l&agrave; một số ph&iacute;m tắt trong Excel c&oacute; thể khiến c&aacute;c thao t&aacute;c trở n&ecirc;n nhanh hơn.</span></p>\r\n\r\n<h2 style=\"text-align:justify\"><em><strong><span style=\"font-size:14px\">1. Ph&iacute;m tắt Excel 2007, Excel 2010 điều hướng trong bảng t&iacute;nh:</span></strong></em></h2>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>C&aacute;c ph&iacute;m Mũi T&ecirc;n</strong>: Di chuyển l&ecirc;n, xuống, sang tr&aacute;i, hoặc sang phải trong một bảng t&iacute;nh.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Page Down / Page Up</strong>: Di chuyển xuống cuối bảng t&iacute;nh/ l&ecirc;n đầu của bảng t&iacute;nh.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Alt + Page Down / Alt + Page Up</strong>: Di chuyển m&agrave;n h&igrave;nh sang phải/ tr&aacute;i trong một bảng t&iacute;nh.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>T</strong><strong>ab / ph&iacute;m Shift + Tab</strong>: Di chuyển một &ocirc; sang phải/ sang tr&aacute;i trong một bảng t&iacute;nh.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Home</strong>: Di chuyển đến &ocirc; đầu của một h&agrave;ng trong một bảng t&iacute;nh.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Home</strong>: Di chuyển đến &ocirc; đầu ti&ecirc;n của một bảng t&iacute;nh.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + End</strong>: Di chuyển đến &ocirc; cuối c&ugrave;ng chứa nội dung tr&ecirc;n một bảng t&iacute;nh.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + F</strong>: Hiển thị hộp thoại Find and Replace (mở sẵn mục T&igrave;m kiếm - Find).</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + H</strong>: Hiển thị hộp thoại Find and Replace (Mở sẵn mục Thay thế - Replace).</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Shift + F4</strong>: Lặp lại việc t&igrave;m kiếm trước đ&oacute;.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + G (hoặc F5 )</strong>: Hiển thị hộp thoại &#39;Go to&#39;.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + mũi t&ecirc;n tr&aacute;i / Ctrl + Mũi t&ecirc;n phải</strong>: B&ecirc;n trong một &ocirc;: Di chuyển sang &ocirc; b&ecirc;n tr&aacute;i hoặc b&ecirc;n phải của &ocirc; đ&oacute;.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Alt + mũi t&ecirc;n xuống</strong>: Hiển thị danh s&aacute;ch AutoComplete.</span></p>\r\n\r\n<h2 style=\"text-align:justify\"><strong><em><span style=\"font-size:14px\">2. L&agrave;m việc với dữ liệu được chọn:</span></em></strong></h2>\r\n\r\n<h3 style=\"text-align:justify\"><em><span style=\"font-size:14px\">Chọn c&aacute;c &ocirc;:</span></em></h3>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ph&iacute;m Shift + Space (Ph&iacute;m c&aacute;ch)</strong>: Chọn to&agrave;n bộ h&agrave;ng.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Space (Ph&iacute;m c&aacute;ch)</strong>: Chọn to&agrave;n bộ cột.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + ph&iacute;m Shift + * (dấu sao)</strong>: Chọn to&agrave;n bộ khu vực xung quanh c&aacute;c &ocirc; đang hoạt động.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + A (hoặc Ctrl + ph&iacute;m Shift + ph&iacute;m c&aacute;ch)</strong>: Chọn to&agrave;n bộ bảng t&iacute;nh&nbsp;(hoặc c&aacute;c khu vực chứa dữ liệu).</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + ph&iacute;m Shift + Page Up</strong>: Chọn sheet hiện tại v&agrave; trước đ&oacute; trong c&ugrave;ng file Excel.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Shift + ph&iacute;m mũi t&ecirc;n</strong>: Mở rộng v&ugrave;ng lựa chọn từ một &ocirc; đang chọn.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Shift + Page Down / ph&iacute;m Shift + Page Up</strong>: Mở rộng v&ugrave;ng được chọn xuống cuối trang m&agrave;n h&igrave;nh / l&ecirc;n đầu trang m&agrave;n h&igrave;nh.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ph&iacute;m Shift + Home</strong>: Mở rộng v&ugrave;ng được chọn về &ocirc; đầu ti&ecirc;n của h&agrave;ng.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Shift + Home</strong>: Mở rộng v&ugrave;ng chọn về đầu ti&ecirc;n của bảng t&iacute;nh.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Shift + End</strong>: Mở rộng v&ugrave;ng chọn đến &ocirc; cuối c&ugrave;ng được sử dụng tr&ecirc;n bảng t&iacute;nh (g&oacute;c dưới b&ecirc;n phải).</span></p>\r\n\r\n<h3 style=\"text-align:justify\"><em><span style=\"font-size:14px\">Quản l&yacute; trong c&aacute;c v&ugrave;ng lựa chọn:</span></em></h3>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>F8</strong>: Bật t&iacute;nh năng mở rộng v&ugrave;ng lựa chọn (bằng c&aacute;ch sử dụng th&ecirc;m c&aacute;c ph&iacute;m mũi t&ecirc;n) m&agrave; kh&ocirc;ng cần nhấn giữ ph&iacute;m Shift.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Shift + F8</strong>: Th&ecirc;m một (liền kề hoặc kh&ocirc;ng liền kề) d&atilde;y c&aacute;c &ocirc; để lựa chọn. Sử dụng c&aacute;c ph&iacute;m mũi t&ecirc;n v&agrave; Shift + ph&iacute;m mũi t&ecirc;n để th&ecirc;m v&agrave;o lựa chọn.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Enter / ph&iacute;m Shift + Enter</strong>&nbsp;: Di chuyển lựa chọn &ocirc; hiện tại xuống / l&ecirc;n trong v&ugrave;ng đang được chọn.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Tab / ph&iacute;m Shift + Tab</strong>: Di chuyển lựa chọn &ocirc; hiện tại sang phải / tr&aacute;i trong v&ugrave;ng đang được chọn.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Esc</strong>: Hủy bỏ v&ugrave;ng đang chọn.</span></p>\r\n\r\n<h3 style=\"text-align:justify\"><em><span style=\"font-size:14px\">Chỉnh sửa b&ecirc;n trong &ocirc;:</span></em></h3>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Shift + mũi t&ecirc;n tr&aacute;i / Shift + mũi t&ecirc;n phải</strong>: Chọn hoặc bỏ chọn một k&yacute; tự b&ecirc;n tr&aacute;i / b&ecirc;n phải.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Shift + mũi t&ecirc;n tr&aacute;i /&nbsp;Ctrl + Shift + mũi t&ecirc;n phải</strong>: Chọn hoặc bỏ chọn một từ b&ecirc;n tr&aacute;i / b&ecirc;n phải.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Shift + Home / Shift + End</strong>: Chọn từ con trỏ văn bản đến đầu / đến cuối của &ocirc;.</span></p>\r\n\r\n<h2 style=\"text-align:justify\"><em><strong><span style=\"font-size:14px\">3.&nbsp;Ph&iacute;m tắt trong Excel 2007, Excel 2010 ch&egrave;n v&agrave; chỉnh sửa dữ liệu:</span></strong></em></h2>\r\n\r\n<h3 style=\"text-align:justify\"><em><span style=\"font-size:14px\">Ph&iacute;m tắt Undo / Redo:</span></em></h3>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Z</strong>: &nbsp;Ho&agrave;n t&aacute;c h&agrave;nh động trước đ&oacute; (nhiều cấp) - Undo.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl +</strong>&nbsp;<strong>Y</strong>: &nbsp;Đi tới h&agrave;nh động tiếp đ&oacute; (nhiều cấp) - Redo.</span></p>\r\n\r\n<h3 style=\"text-align:justify\"><em><span style=\"font-size:14px\">L&agrave;m việc với Clipboard:</span></em></h3>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + C</strong>: Sao ch&eacute;p nội dung của &ocirc; được chọn.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + X</strong>: Cắt nội dung của &ocirc; được chọn.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + V</strong>: D&aacute;n nội dung từ clipboard v&agrave;o &ocirc; được chọn.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Alt+ V</strong>: Nếu dữ liệu tồn tại trong clipboard: Hiển thị hộp thoại Paste Special.</span></p>\r\n\r\n<h3 style=\"text-align:justify\"><em><span style=\"font-size:14px\">C&aacute;c ph&iacute;m tắt chỉnh sửa &ocirc; b&ecirc;n trong:</span></em></h3>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>F2</strong>: &nbsp;Chỉnh sửa &ocirc; đang chọn với con trỏ chuột đặt ở cuối d&ograve;ng.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Alt + Enter</strong>: Xuống một d&ograve;ng mới trong c&ugrave;ng một &ocirc;.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Enter</strong>: &nbsp;Ho&agrave;n th&agrave;nh nhập 1 &ocirc; v&agrave; di chuyển xuống &ocirc; ph&iacute;a dưới.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Shift + Enter</strong>: &nbsp;Ho&agrave;n th&agrave;nh nhập 1 &ocirc; v&agrave; di chuyển l&ecirc;n &ocirc; ph&iacute;a tr&ecirc;n.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Tab /&nbsp;Shift + Tab</strong>: Ho&agrave;n th&agrave;nh nhập 1 &ocirc; v&agrave; di chuyển đến &ocirc; b&ecirc;n phải / hoặc b&ecirc;n tr&aacute;i.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Esc</strong>: Hủy bỏ việc sửa trong một &ocirc;.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Backspace</strong>: X&oacute;a k&yacute; tự b&ecirc;n tr&aacute;i của con trỏ văn bản, hoặc x&oacute;a c&aacute;c lựa chọn.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Delete</strong>: X&oacute;a k&yacute; tự b&ecirc;n phải của con trỏ văn bản, hoặc x&oacute;a c&aacute;c lựa chọn.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Delete</strong>: X&oacute;a văn bản đến cuối d&ograve;ng.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Shift + : (dấu hai chấm)</strong>: Ch&egrave;n thời gian hiện tại.</span></p>\r\n\r\n<h3 style=\"text-align:justify\"><em><span style=\"font-size:14px\">Chỉnh sửa c&aacute;c &ocirc; hoạt động hoặc lựa chọn:</span></em></h3>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + D</strong>: Copy nội dung ở &ocirc; b&ecirc;n tr&ecirc;n.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + R</strong>: Copy &ocirc; b&ecirc;n tr&aacute;i.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + &quot;</strong>: Copy nội dung &ocirc; b&ecirc;n tr&ecirc;n v&agrave; ở trạng th&aacute;i chỉnh sửa.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + &#39;</strong>: Copy c&ocirc;ng thức của &ocirc; b&ecirc;n tr&ecirc;n v&agrave; ở trạng th&aacute;i chỉnh sửa.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + &ndash;</strong>: Hiển thị menu x&oacute;a &ocirc; / h&agrave;ng / cột.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Shift + +</strong>: Hiển thị menu ch&egrave;n &ocirc; / h&agrave;ng / cột.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Shift + F2</strong>: Ch&egrave;n / Chỉnh sửa một &ocirc; comment.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Shift + F10, sau đ&oacute; M</strong>: X&oacute;a comment.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Alt + F1</strong>: Tạo v&agrave; ch&egrave;n biểu đồ với dữ liệu trong phạm vi hiện tại.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>F11</strong>: Tạo v&agrave; ch&egrave;n biểu đồ với dữ liệu trong phạm vi hiện tại trong một sheet biểu đồ ri&ecirc;ng biệt.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + K</strong>: Ch&egrave;n một li&ecirc;n kết.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Enter (trong một &ocirc; c&oacute; chứa li&ecirc;n kết)</strong>: K&iacute;ch hoạt li&ecirc;n kết.</span></p>\r\n\r\n<h3 style=\"text-align:justify\"><em><span style=\"font-size:14px\">Ẩn v&agrave; Hiện c&aacute;c phần tử:</span></em></h3>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + 9</strong>: Ẩn h&agrave;ng đ&atilde; chọn.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Shift + 9</strong>: Bỏ ẩn h&agrave;ng đang ẩn trong v&ugrave;ng lựa chọn chứa h&agrave;ng đ&oacute;.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + 0 (số 0)</strong>: Ẩn cột được chọn.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Shift + 0 (số 0)</strong>: Bỏ ẩn cột đang ẩn trong v&ugrave;ng lựa chọn.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Lưu &yacute;</strong>: Trong Excel 2010 kh&ocirc;ng c&oacute; t&aacute;c dụng, để hiện cột vừa bị ẩn, nhấn: Ctrl + Z.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Alt + Shift + Mũi t&ecirc;n phải</strong>: Nh&oacute;m h&agrave;ng hoặc cột.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Alt + Shift + mũi t&ecirc;n tr&aacute;i</strong>: Bỏ nh&oacute;m c&aacute;c h&agrave;ng hoặc cột.</span></p>\r\n\r\n<h2 style=\"text-align:justify\"><em><strong><span style=\"font-size:14px\">4. Ph&iacute;m tắt Excel 2007, Excel 2010 li&ecirc;n quan đến định dạng dữ liệu:</span></strong></em></h2>\r\n\r\n<h3 style=\"text-align:justify\"><em><span style=\"font-size:14px\">Định dạng &ocirc;:</span></em></h3>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + 1</strong>: Hiển thị hộp thoại Format.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + B (hoặc Ctrl + 2)</strong>: &Aacute;p dụng hoặc hủy bỏ định dạng chữ đậm.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + I (hoặc Ctrl + 3)</strong>: &Aacute;p dụng hoặc hủy bỏ định dạng in nghi&ecirc;ng.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + U (hoặc Ctrl + 4</strong>): &Aacute;p dụng hoặc hủy bỏ một gạch dưới.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + 5</strong>: &Aacute;p dụng hoặc hủy bỏ định dạng gạch ngang.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Alt + &#39; (dấu nh&aacute;y đơn)</strong>&nbsp;: Hiển thị hộp thoại Style.</span></p>\r\n\r\n<h3 style=\"text-align:justify\"><em><span style=\"font-size:14px\">C&aacute;c định dạng số:</span></em></h3>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Shift + $</strong>: &Aacute;p dụng định dạng tiền tệ với hai chữ số thập ph&acirc;n.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Shift + ~</strong>: &Aacute;p dụng định dạng số kiểu General.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + ph&iacute;m Shift + #</strong>: &Aacute;p dụng định dạng ng&agrave;y theo kiểu: ng&agrave;y, th&aacute;ng v&agrave; năm.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + ph&iacute;m Shift + @</strong>&nbsp;: &Aacute;p dụng định dạng thời gian với giờ, ph&uacute;t v&agrave; chỉ ra AM hoặc PM.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + ph&iacute;m Shift + ^</strong>: &Aacute;p dụng định dạng số khoa học với hai chữ số thập ph&acirc;n.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>F4</strong>: Lặp lại lựa chọn định dạng cuối c&ugrave;ng.</span></p>\r\n\r\n<h3 style=\"text-align:justify\"><em><span style=\"font-size:14px\">Căn &ocirc;:</span></em></h3>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Alt + H, A, R</strong>: Căn &ocirc; sang phải.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Alt + H , A, C</strong>: Căn giữa &ocirc;.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Alt + H , A, I</strong>: Căn &ocirc; sang tr&aacute;i.</span></p>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>C&ocirc;ng thức:</strong></span></h3>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>=</strong>: Bắt đầu một c&ocirc;ng thức.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Shift + F3:</strong>&nbsp;Hiển thị hộp thoại Insert Function.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + A</strong>: Hiển thị c&aacute;ch thức nhập sau khi nhập t&ecirc;n của c&ocirc;ng thức.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Shift + A</strong>: Ch&egrave;n c&aacute;c đối số trong c&ocirc;ng thức sau khi nhập t&ecirc;n của c&ocirc;ng thức.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Shift + F3</strong>: Ch&egrave;n một h&agrave;m th&agrave;nh một c&ocirc;ng thức.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Shift + Enter</strong>: Nhập c&ocirc;ng thức l&agrave; một c&ocirc;ng thức mảng.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>F9</strong>: T&iacute;nh tất cả c&aacute;c bảng trong tất cả c&aacute;c bảng t&iacute;nh.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Shift + F9</strong>: T&iacute;nh to&aacute;n bảng t&iacute;nh hoạt động.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Shift + U</strong>: Chuyển chế độ mở rộng hoặc thu gọn thanh c&ocirc;ng thức.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + &#39;</strong>: Chuyển chế độ Hiển thị c&ocirc;ng thức trong &ocirc; thay v&igrave; gi&aacute; trị.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + PageDown v&agrave; Ctrl + PagrUp</strong>: chuyển giữa c&aacute;c Sheet với nhau.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + ph&iacute;m mũi t&ecirc;n</strong>: di chuyển tới d&ograve;ng tr&ecirc;n c&ugrave;ng, dưới c&ugrave;ng, cạnh tr&aacute;i, cạnh phải của bảng t&iacute;nh. Ph&iacute;m tắt n&agrave;y sẽ gi&uacute;p ch&uacute;ng ta kh&ocirc;ng phải sử dụng đến chuột k&eacute;o thanh trượt để t&igrave;m tới &ocirc; cuối bảng, nhất l&agrave; với bảng t&iacute;nh d&agrave;i. Khi sử dụng ph&iacute;m Ctrl với bất cứ ph&iacute;m mũi t&ecirc;n theo hướng muốn di chuyển, bạn sẽ nhanh ch&oacute;ng tới được vị tr&iacute; cần t&igrave;m.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + ph&iacute;m mũi t&ecirc;n + Shift</strong>: khoanh chọn v&ugrave;ng dữ liệu tới cuối bảng thay v&igrave; chỉ di chuyển &ocirc; chọn xuống cuối bảng.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Click đ&uacute;p chuột tr&aacute;i tại &ocirc;</strong>: copy c&ocirc;ng thức xuống cuối bảng. Thao t&aacute;c th&ocirc;ng thường để copy xuống c&aacute;c h&agrave;ng b&ecirc;n dưới đ&oacute; khi xuất hiện dấu +, th&igrave; giữ v&agrave; k&eacute;o chuột cho tới cuối bảng. Tuy nhi&ecirc;n nhanh hơn, bạn đặt chuột v&agrave;o vị tr&iacute; dấu cộng, click đ&uacute;p chuột tr&aacute;i v&agrave; c&ocirc;ng thức sẽ được copy xuống dưới.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Shift + 1 (!)</strong>: định dạng &ocirc; dạng số thập ph&acirc;n với 2 số sau dấu phẩy.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Shift + 4 ($)</strong>: định dạng &ocirc; tiền tệ $.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Shift + 5 (%)</strong>: định dạng &ocirc; l&agrave; số %.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>F4</strong>: biến một &ocirc; th&agrave;nh gi&aacute; trị tuyệt đối. Khi ch&eacute;p c&ocirc;ng thức từ những vị tr&iacute; &ocirc; kh&aacute;c nhau như B1, C2,... sẽ tự động thay đổi khi copy xuống d&ograve;ng dưới trở th&agrave;nh B2, C3. Để kh&ocirc;ng cho c&ocirc;ng thức tự nhảy số như tr&ecirc;n, d&ugrave;ng kh&oacute;a $ v&agrave;o trước v&agrave; sau của k&yacute; tự &ocirc; để kh&oacute;a lại. V&agrave; kh&oacute;a nhanh một &ocirc; c&oacute; thể d&ugrave;ng F4.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>&amp;</strong>: kết hợp nội dung hai &ocirc;. Nhảy sang cột thứ 3 v&agrave; g&otilde; c&ocirc;ng thức =&ocirc; 1&amp;&quot; &quot;&amp;&ocirc; 2, trong đ&oacute; phần &quot; &quot; để tạo 1 dấu c&aacute;ch giữa nội dung 2 &ocirc; sau khi gh&eacute;p. Sau đ&oacute; copy c&ocirc;ng thức xuống cuối bảng sẽ xuất hiện cột c&oacute; nội dung gh&eacute;p từ cột 1 v&agrave; cột 2.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Alt +=:</strong>&nbsp;t&iacute;nh tổng nhanh một cột. B&ocirc;i đen v&ugrave;ng cần t&iacute;nh v&agrave; b&ocirc;i th&ecirc;m 1 &ocirc; trống b&ecirc;n dưới sau đ&oacute; nhấn Alt+=, gi&aacute; trị &ocirc; cuối l&agrave; tổng c&aacute;c c&aacute;c &ocirc; trong v&ugrave;ng chọn.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + Shift +; (dấu chấm phẩy)</strong>: điền nhanh thời gian hiện tại v&agrave;o &ocirc; trong bảng t&iacute;nh.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + ; (dấu chấm phẩy)</strong>: điền ng&agrave;y hiện tại v&agrave;o &ocirc;.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ctrl + ~ (cạnh số 1)</strong>: xem to&agrave;n bộ c&aacute;c &ocirc; ở dạng c&ocirc;ng thức.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Tr&ecirc;n đ&acirc;y l&agrave; c&aacute;c ph&iacute;m tắt gi&uacute;p bạn c&oacute; thao t&aacute;c nhanh hơn khi sử dụng excel. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng.</span></p>\r\n', '0', 1510959606, 1510966446, NULL, 1);
INSERT INTO `answers` (`id`, `user_id`, `question_id`, `status`, `answers_text`, `is_anonymous`, `create_time`, `update_time`, `images`, `censor_flag`) VALUES
(158, 86, 333, 1, '<h2 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><em>CEO</em>&nbsp;l&agrave; viết tắt của từ&nbsp;<strong><em>Chief Executive Officer</em></strong>, c&oacute; nghĩa l&agrave; <strong>gi&aacute;m đốc điều h&agrave;nh</strong>, giữ tr&aacute;ch nhiệm thực hiện những ch&iacute;nh s&aacute;ch của hội đồng quản trị. Ở những tập đo&agrave;n c&oacute; tổ chức chặt chẽ, c&aacute;c bạn sẽ thấy chủ tịch hội đồng quản trị thường đảm nhận lu&ocirc;n chức vụ&nbsp;<em>CEO</em>&nbsp;n&agrave;y.</span></span></h2>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Quyền hạn v&agrave; nhiệm vụ của một CEO:</span></span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Hoạch định</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">- Chi&ecirc;́n lược thực hi&ecirc;̣n t&acirc;̀m nhìn, sứ m&ecirc;̣nh, giá trị c&ocirc;́t lõi của c&ocirc;ng ty;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Thực hi&ecirc;̣n các nghị quy&ecirc;́t của H&ocirc;̣i đ&ocirc;̀ng quản trị và Đại H&ocirc;̣i đ&ocirc;̀ng c&ocirc;̉ đ&ocirc;ng, k&ecirc;́ hoạch kinh doanh và k&ecirc;́ hoạch đ&acirc;̀u tư của C&ocirc;ng ty đã được H&ocirc;̣i đ&ocirc;̀ng quản trị và Đại h&ocirc;̣i đ&ocirc;̀ng c&ocirc;̉ đ&ocirc;ng th&ocirc;ng qua;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Chi&ecirc;́n lược kinh doanh của c&ocirc;ng ty, phát tri&ecirc;̉n h&ecirc;̣ th&ocirc;́ng kinh doanh, ph&acirc;n ph&ocirc;́i. Chi&ecirc;́n lược, k&ecirc;́ hoạch, ng&acirc;n sách của các kh&ocirc;́i/phòng đ&ecirc;̉ thực thi k&ecirc;̉ hoạch kinh doanh của c&ocirc;ng ty;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Ch&acirc;̣m nh&acirc;́t vào ngày 15 tháng 12 hàng năm, T&ocirc;̉ng giám đ&ocirc;́c phải trình H&ocirc;̣i đ&ocirc;̀ng quản trị ph&ecirc; chu&acirc;̉n k&ecirc;́ hoạch kinh doanh chi ti&ecirc;́t cho năm tài chính ti&ecirc;́p theo tr&ecirc;n cơ sở đáp ứng các y&ecirc;u c&acirc;̀u của ng&acirc;n sách phù hợp cũng như k&ecirc;́ hoạch tài chính 5 năm;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Đ&ecirc;̀ xu&acirc;́t những bi&ecirc;̣n pháp n&acirc;ng cao hoạt đ&ocirc;̣ng và quản lý c&ocirc;ng ty.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Ph&aacute;t triển sản phẩm mới</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Quy&ecirc;́t định các tuy&ecirc;́n sản ph&acirc;̉m mới và đa đạng hoá các sản ph&acirc;̉m hi&ecirc;̣n hữu</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>X&acirc;y dựng thương hiệu</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Qy&ecirc;́t định các chi&ecirc;́n lược, chi&ecirc;́n dịch, chương trình phát tri&ecirc;̉n thương hi&ecirc;̣u của c&ocirc;ng ty;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Quy&ecirc;́t định các chương trình thu hút khách hàng.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>T&agrave;i ch&iacute;nh</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Chịu trách nhi&ecirc;̣m v&ecirc;̀ chỉ ti&ecirc;u tài chính trước H&ocirc;̣i đ&ocirc;̀ng quản trị;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">- Duy&ecirc;̣t các quy định v&ecirc;̀ tài chính và quy định v&ecirc;̀ th&acirc;̉m quy&ecirc;̀n ký duy&ecirc;̣t v&ecirc;̀ tài chính;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Duy&ecirc;̣t các khoản chi phí trong phạm vi ng&acirc;n sách đã được duy&ecirc;̣t;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Quy&ecirc;́t định t&acirc;́t cả các v&acirc;́n đ&ecirc;̀ kh&ocirc;ng c&acirc;̀n phải có quy&ecirc;́t nghị của H&ocirc;̣i đ&ocirc;̀ng quản trị, bao g&ocirc;̀m vi&ecirc;̣c thay mặt c&ocirc;ng ty ký k&ecirc;́t các hợp đ&ocirc;̀ng tài chính và thương mại, t&ocirc;̉ chức và đi&ecirc;̀u hành hoạt đ&ocirc;̣ng sản xu&acirc;́t kinh doanh thường nh&acirc;̣t của c&ocirc;ng ty theo những th&ocirc;ng l&ecirc;̣ quản lý t&ocirc;́t nh&acirc;́t;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Chu&acirc;̉n bị các bản dự toán dài hạn, hàng năm và hàng tháng của C&ocirc;ng ty (sau đ&acirc;y gọi là bản dự toán) phục vụ hoạt đ&ocirc;̣ng quản lý dài hạn, hàng năm và hàng tháng của c&ocirc;ng ty theo k&ecirc;́ hoạch kinh doanh. Bản dự toán hàng năm (bao g&ocirc;̀m cả bảng c&acirc;n đ&ocirc;́i k&ecirc;́ toán,báo cáo hoạt đ&ocirc;̣ng sản xu&acirc;́t kinh doanh và báo cáo lưu chuy&ecirc;̉n ti&ecirc;̀n t&ecirc;̣ dự ki&ecirc;́n) cho từng năm tài chính sẽ phải được trình cho H&ocirc;̣i đ&ocirc;̀ng quản trị đ&ecirc;̉ th&ocirc;ng qua và phải bao g&ocirc;̀m những th&ocirc;ng tin quy định tại các quy ch&ecirc;́ của C&ocirc;ng ty.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Đầu tư</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Th&acirc;̉m định các dự án đ&acirc;̀u tư;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Duy&ecirc;̣t k&ecirc;́ hoạch thực hi&ecirc;̣n dự án đ&acirc;̀u tư;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Duy&ecirc;̣t k&ecirc;́ hoạch vay, mua bán c&ocirc;̉ phi&ecirc;́u, tr&aacute;i phiếu.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Ch&iacute;nh s&aacute;ch</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Duy&ecirc;̣t các chính sách kinh doanh, ph&acirc;n ph&ocirc;́i, ti&ecirc;́p thị, nh&acirc;n sự, mua hàng, tín dụng.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Tổ chức</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Ki&ecirc;́n nghị v&ecirc;̀ s&ocirc;́ lượng và các loại cán b&ocirc;̣ quản lý mà c&ocirc;ng ty c&acirc;̀n thu&ecirc; đ&ecirc;̉ H&ocirc;̣i đ&ocirc;̀ng quản trị b&ocirc;̉ nhi&ecirc;̣m hoặc mi&ecirc;̃n nhi&ecirc;̣m khi c&acirc;̀n thi&ecirc;́t đ&ecirc;̉ thực hi&ecirc;̣n các th&ocirc;ng l&ecirc;̣ quản lý t&ocirc;́t nh&acirc;́t cũng như các cơ c&acirc;́u do H&ocirc;̣i đ&ocirc;̀ng quản trị đ&ecirc;̀ xu&acirc;́t và tư v&acirc;́n cho H&ocirc;̣i đ&ocirc;̀ng quản trị đ&ecirc;̉ quy&ecirc;́t định mức lương, thù lao, các lợi ích và các đi&ecirc;̀u khoản khác của hợp đ&ocirc;̀ng lao đ&ocirc;̣ng của cán b&ocirc;̣ quản lý;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Tham khảo ý ki&ecirc;́n của H&ocirc;̣i đ&ocirc;̀ng quản trị đ&ecirc;̉ quy&ecirc;́t định s&ocirc;́ lượng người lao đ&ocirc;̣ng, mức lương, trợ c&acirc;́p, lợi ích, vi&ecirc;̣c b&ocirc;̉ nhi&ecirc;̣m, mi&ecirc;̃n nhi&ecirc;̣m và các đi&ecirc;̀u khoản khác li&ecirc;n quan đ&ecirc;́n hợp đ&ocirc;̀ng lao đ&ocirc;̣ng của họ;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Ph&ecirc; duy&ecirc;̣t c&acirc;́u trúc t&ocirc;̉ chức của c&ocirc;ng ty, kh&ocirc;́i, phạm vi trách nhi&ecirc;̣m;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Duy&ecirc;̣t c&acirc;́u trúc lương, thang bảng lương, các y&ecirc;́u t&ocirc;́ trả lương;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Duy&ecirc;̣t quy ch&ecirc;́ ti&ecirc;̀n lương, ti&ecirc;̀n thưởng;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Duy&ecirc;̣t k&ecirc;́t quả đánh giá cán b&ocirc;̣ và quy&ecirc;́t định mức khen thưởng cán b&ocirc;̣.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Quyết định, Quy chế</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Duy&ecirc;̣t các quy định, quy ch&ecirc;́ đi&ecirc;̀u hành của toàn c&ocirc;ng ty;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Duy&ecirc;̣t quy định kh&acirc;́u hao tài sản c&ocirc;́ định.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Hoạt động điều h&agrave;nh</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">- Thoả thu&acirc;̣n và duy&ecirc;̣t các mục ti&ecirc;u cho các giám đ&ocirc;́c chức năng;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Đánh giá hoạt đ&ocirc;̣ng của các Kh&ocirc;́i và đi&ecirc;̀u chỉnh những k&ecirc;́ hoạch c&acirc;̀n thi&ecirc;́t;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Báo cáo định kỳ và đ&ocirc;̣t xu&acirc;́t cho H&ocirc;̣i đ&ocirc;̀ng quản trị;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Thực thi k&ecirc;́ hoạch kinh doanh hàng năm do Đại h&ocirc;̣i đ&ocirc;̀ng c&ocirc;̉ đ&ocirc;ng và H&ocirc;̣i đ&ocirc;̀ng quản trị th&ocirc;ng qua;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">-&nbsp;Thực hi&ecirc;̣n t&acirc;́t cả các hoạt đ&ocirc;̣ng khác theo quy định của Đi&ecirc;̀u l&ecirc;̣ này và các quy ch&ecirc;́ của C&ocirc;ng ty, các nghị quy&ecirc;́t của H&ocirc;̣i đ&ocirc;̀ng quản trị, hợp đ&ocirc;̀ng lao đ&ocirc;̣ng của T&ocirc;̉ng giám đ&ocirc;́c và pháp lu&acirc;̣t.</span></span></p>\r\n', '0', 1511733346, 1511856787, NULL, 1),
(159, 114, 339, 1, '<p><span style=\"color:rgb(0,0,0);\">e mới vào làm công ty quảng cáo nhưng còn thiếu kinh nghiệm, sếp giao nhiệm vụ cho e phải kiếm được cô người mẫu tóc siêu siêu đẹp để làm quảng cáo dầu gội và đưa ảnh mẫu cho e xem,ổng bắt e phải kiếm 1 người nào đó tóc đẹp giống như vậy.......dù kiều kiện hơi cao nhưng em vẫn đăng lên trên các trang web tìm việc làm nhưng những người đăng ký thì tóc họ không đạt yêu cầu,trong khi đó e ra ngoài thấy mấy cô công nhân thì tóc họ đẹp và phù hợp với yêu cầu sếp đưa ra lắm, ...nhưng e là con trai với lại không quen biết gì người ta hết chẳng lẽ tự nhiên chạy lại hỏi mời người ta làm người mẫu thì có kỳ cục quá k ạ,mọi người cho e xin ý kiến nếu mọi người đặt trường hợp vào vị trí giống em thì có nên chạy lại hỏi người lạ không,và người ta có khinh mình hay có nói e bị khùng, biến thái hay gì không ạ,và khi muốn hỏi người ta như vậy thì phải hỏi như thế nào ạ... tại mới đi làm nên không có kinh nghiệm...</span></p><p><br /></p><p><br /></p>', '0', 1511754681, 1511754681, NULL, 0),
(160, 86, 335, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Thư điện tử</strong>, hay&nbsp;<strong>email</strong>&nbsp;(từ chữ&nbsp;<em>electronic mail</em>), đ&ocirc;i khi được dịch kh&ocirc;ng ch&iacute;nh x&aacute;c l&agrave;&nbsp;<em>điện thư</em>, l&agrave; một hệ thống chuyển nhận thư từ qua c&aacute;c&nbsp;<a href=\"https://vi.wikipedia.org/wiki/M%E1%BA%A1ng_m%C3%A1y_t%C3%ADnh\" title=\"Mạng máy tính\"><span style=\"color:#000000\">mạng m&aacute;y t&iacute;nh</span></a><span style=\"color:#000000\">.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Email l&agrave; một phương tiện th&ocirc;ng tin rất nhanh. Một mẫu th&ocirc;ng tin c&oacute; thể được gửi đi ở dạng m&atilde; ho&aacute; hay dạng th&ocirc;ng thường v&agrave; được chuyển qua c&aacute;c mạng m&aacute;y t&iacute;nh đặc biệt l&agrave; mạng Internet. N&oacute; c&oacute; thể chuyển mẫu th&ocirc;ng tin từ một m&aacute;y nguồn tới một hay rất nhiều m&aacute;y nhận trong c&ugrave;ng l&uacute;c.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">C&aacute;ch đăng k&iacute; Gmail:</span></span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Bước 1:</strong>&nbsp;Để&nbsp;<strong>đăng k&yacute; Gmail</strong>&nbsp;bạn search google &quot;Đăng k&iacute; gmail&quot;, bạn click v&agrave;o link để bắt đầu đăng k&iacute;.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Bước 2:</strong>&nbsp;Giao diện trang&nbsp;<strong>đăng k&yacute; t&agrave;i khoản Gmail</strong>&nbsp;hiện ra như sau:</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><img alt=\"\" src=\"https://i.imgur.com/8KPJztF.png\" /></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Bạn điền đầy đủ th&ocirc;ng tin v&agrave;o như sau:</span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>T&ecirc;n:</strong>&nbsp;Nhập v&agrave;o Họ v&agrave; T&ecirc;n của bạn. Bạn c&oacute; thể đổi lại sau khi&nbsp;<strong>tạo t&agrave;i khoản Gmail</strong>&nbsp;cũng được.</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Chọn t&ecirc;n người d&ugrave;ng của bạn:</strong>&nbsp;Đ&acirc;y ch&iacute;nh l&agrave; địa chỉ Gmail của bạn. Bạn nhập t&ecirc;n nick Gmail muốn lập. Bạn c&oacute; thể sử dụng chữ c&aacute;i, số v&agrave; dấu chấm với độ d&agrave;i từ 6 đến 30 k&yacute; tự. Khi nhập địa chỉ Gmail ở đ&acirc;y c&oacute; thể bạn sẽ gặp phải th&ocirc;ng b&aacute;o:&nbsp;T&ecirc;n người d&ugrave;ng đ&oacute; đ&atilde; được sử dụng. Thử t&ecirc;n người d&ugrave;ng kh&aacute;c?&nbsp;tức l&agrave; địa chỉ Gmail đ&oacute; đ&atilde; bị đăng k&yacute; rồi. Bạn c&oacute; thể sử dụng t&ecirc;n gợi &yacute; ở dưới hoặc nghĩ ra 1 c&aacute;i nick Gmail kh&aacute;c đến khi n&agrave;o n&oacute; chấp thuận th&igrave; th&ocirc;i</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Tạo mật khẩu &amp; X&aacute;c nhận mật khẩu:</strong>&nbsp;Mật khẩu phải c&oacute; độ d&agrave;i &iacute;t nhất l&agrave; 8 k&yacute; tự. Bạn n&ecirc;n sử dụng kết hợp chữ HOA, chữ thường, số v&agrave; k&yacute; tự đặc biệt để mật khẩu được bảo mật cao nhất. Bạn kh&ocirc;ng n&ecirc;n sử dụng c&aacute;c mật khẩu dễ đo&aacute;n như 12345678, t&ecirc;n bạn, t&ecirc;n người th&acirc;n hoặc ng&agrave;y sinh, số điện thoại&hellip;&Ocirc; x&aacute;c nhận mật khẩu th&igrave; bạn nhập lại mật khẩu vừa nhập ở tr&ecirc;n.</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Sinh nhật:</strong>&nbsp;Điền đầy đủ ng&agrave;y th&aacute;ng năm sinh của bạn v&agrave;o. Theo quy định của Google, nếu t&iacute;nh đến thời điểm bạn tạo Gmail m&agrave; bạn chưa đủ 13 tuổi th&igrave; kh&ocirc;ng được&nbsp;<strong>lập t&agrave;i khoản Gmail</strong>. Vậy n&ecirc;n h&atilde;y ch&uacute; &yacute; đến phần n&agrave;y.</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Giới t&iacute;nh:</strong>&nbsp;Chọn Nam, Nữ hoặc Kh&aacute;c t&ugrave;y bạn&nbsp;</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Điện thoại di động:</strong>&nbsp;Nhập số điện thoại của bạn (kh&ocirc;ng bắt buộc). Nếu bạn c&oacute; một số điện thoại th&igrave; n&ecirc;n nhập v&agrave;o, v&igrave; nếu sau n&agrave;y bạn c&oacute; qu&ecirc;n mật khẩu hoặc bị ai đ&oacute; lấy mất t&agrave;i khoản Gmail th&igrave; c&oacute; thể dễ d&agrave;ng lấy lại được th&ocirc;ng qua số điện thoại n&agrave;y.</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Địa chỉ email hiện tại của bạn:</strong>&nbsp;Cũng tương tự như số điện thoại. Nếu bạn c&oacute; một t&agrave;i khoản email đang sử dụng được h&atilde;y nhập v&agrave;o. Việc li&ecirc;n kết t&agrave;i khoản email cũ của bạn với t&agrave;i khoản <strong>Gmail&nbsp;</strong>mới n&agrave;y sẽ gi&uacute;p bạn lấy lại mật khẩu dễ d&agrave;ng khi qu&ecirc;n hoặc mất t&agrave;i khoản Gmail.</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Chứng minh bạn kh&ocirc;ng phải l&agrave; r&ocirc;-bốt:</strong>&nbsp;Bạn c&oacute; thể tick v&agrave;o Bỏ qua x&aacute;c minh bước n&agrave;y nếu ở tr&ecirc;n bạn nhập v&agrave;o số điện thoại của bạn. Khi đ&oacute; bạn sẽ nhận được m&atilde; x&aacute;c nhận gửi về số điện thoại. Nếu bạn kh&ocirc;ng tick v&agrave;o bỏ qua bước x&aacute;c minh n&agrave;y th&igrave; bạn nhập chữ số trong ảnh v&agrave;o &ocirc; x&aacute;c minh ở dưới.</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Tick v&agrave;o &ocirc; &ldquo;T&ocirc;i đồng &yacute; với Điều khoản dịch vụ v&agrave; Ch&iacute;nh s&aacute;ch bảo mật của Google&rdquo;.</span></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Sau khi điền đầy đủ th&ocirc;ng tin bạn click v&agrave;o&nbsp;<strong>Bước tiếp theo</strong>&nbsp;để gửi th&ocirc;ng tin đăng k&yacute;.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Bước 3:</strong>&nbsp;Sau khi&nbsp;<strong>đăng k&yacute; Gmail th&agrave;nh c&ocirc;ng</strong>&nbsp;sẽ c&oacute; 1 m&agrave;n h&igrave;nh th&ocirc;ng b&aacute;o hiện ra l&agrave; bạn đ&atilde; đăng k&iacute; th&agrave;nh c&ocirc;ng t&agrave;i khoản gmail.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">B&acirc;y giờ th&igrave; bạn c&oacute; thể bắt đầu soạn mail, gửi v&agrave; nhận mail rồi. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng!</span></span></p>\r\n', '0', 1511885366, 1511923639, 'https://i.imgur.com/8KPJztF.png', 1),
(161, 86, 337, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Ph&uacute; Quốc</strong> l&agrave; địa điểm du lịch mới nổi n&ecirc;n vẫn đang trong qu&aacute; tr&igrave;nh x&acirc;y dựng nhiều. M&igrave;nh mới đi Ph&uacute; Quốc đợt th&aacute;ng 7 về n&ecirc;n ấn tượng về Ph&uacute; Quốc vẫn c&ograve;n mới mẻ lắm.&nbsp;</span></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">Đầu ti&ecirc;n, đến Ph&uacute; Quốc th&igrave; n&ecirc;n đi đ&acirc;u?&nbsp;</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ph&uacute; Quốc l&agrave; một huyện đảo n&ecirc;n đương nhi&ecirc;n du lịch biển của Ph&uacute; Quốc rất mạnh. Ph&uacute; Quốc được thi&ecirc;n nhi&ecirc;n ưu &aacute;i ban tặng rất nhiều b&atilde;i biển đẹp, trong đ&oacute; phải kể đến b&atilde;i Sao, b&atilde;i Khem, b&atilde;i &ocirc;ng Lang,...Trước m&igrave;nh c&oacute; đi b&atilde;i Khem v&agrave; th&iacute;ch m&ecirc; lu&ocirc;n. Nước biển trong, c&aacute;t mịn v&agrave; điều đặc biệt l&agrave; biển kh&ocirc;ng s&acirc;u, đến chỗ cấm đi xa hơn m&agrave; mực nước cũng chỉ tầm ngang ngực m&igrave;nh (m&igrave;nh cao 1m60).&nbsp;</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ph&uacute; Quốc cũng c&oacute; tổ hợp khu vui chơi giải tr&iacute; l&agrave; Vinpearl Ph&uacute; Quốc. Trong đ&oacute; c&oacute; rất nhiều tr&ograve; chơi th&uacute; vị, th&iacute;ch hợp cho đi gia đ&igrave;nh hoặc cho trẻ em đi giải tr&iacute; sau thời gian học tập căng thẳng. M&igrave;nh kh&ocirc;ng r&otilde; nhưng h&igrave;nh như v&eacute; ở cổng Vinpearl l&agrave; trọn g&oacute;i.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Một trong những điều l&agrave;m n&ecirc;n sự phong ph&uacute; ở Ph&uacute; Quốc l&agrave; hệ thống động thực vật hết sức phong ph&uacute;. Nếu c&oacute; dịp th&igrave; bạn phải đến vườn th&uacute; Safari với hơn 2000 động vật v&agrave; thảm thực vật phong ph&uacute;. Đi v&agrave;o đến Safari, bạn sẽ th&iacute;ch m&ecirc; một Ph&uacute; Quốc như vậy lu&ocirc;n. B&ecirc;n cạnh Safari th&igrave; c&ograve;n c&oacute; Suối Tranh, kh&ocirc;ng c&oacute; g&igrave; đặc biệt lắm nhưng cũng kh&aacute; ổn. Ph&uacute; Quốc c&ograve;n c&oacute; c&aacute;c vườn ch&ocirc;m ch&ocirc;m, đồi sim v&agrave; vườn ti&ecirc;u cho kh&aacute;ch du lịch c&oacute; thể đến thăm v&agrave; mua về l&agrave;m qu&agrave;.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Để thưởng thức ẩm thực Ph&uacute; Quốc th&igrave; m&igrave;nh khuy&ecirc;n n&ecirc;n v&agrave;o chợ đ&ecirc;m v&igrave; đồ ăn trong chợ đ&ecirc;m rất đa dạng từ hải sản đến đồ ăn vặt. M&igrave;nh đến rồi lạc tr&ocirc;i lu&ocirc;n ở đ&oacute; lu&ocirc;n ấy. C&oacute; nhiều đồ ăn lạ m&agrave; m&igrave;nh chưa biết lắm.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ph&uacute; Quốc đang cực ph&aacute;t triển với loại h&igrave;nh du lịch Resort. Nếu đến Ph&uacute; Quốc d&agrave;i n&agrave;y th&igrave; h&atilde;y thử cảm gi&aacute;c ở Resort, chất lượng phục vụ rất tốt v&agrave; chắc chắn b&aacute;n sẽ cảm thấy thoải m&aacute;i.</span></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">Kinh nghiệm du lịch cho nh&oacute;m khoảng 8 người:</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong><em>Ng&agrave;y 1</em></strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">M&igrave;nh đến Ph&uacute; Quốc v&agrave;o tầm trưa n&ecirc;n chọn về kh&aacute;ch sạn lu&ocirc;n. Ở Ph&uacute; Quốc c&oacute; rất nhiều kh&aacute;ch sạn v&agrave; homestay n&ecirc;n bạn c&oacute; thể tham khảo v&agrave; t&ugrave;y &yacute; lựa chọn. M&igrave;nh ở Bouleverd 4 sao n&ecirc;n chất lượng phục vụ kh&aacute; ổn. Sau đ&oacute;, m&igrave;nh đi ăn ở một qu&aacute;n cơm Bắc. Tuy nhi&ecirc;n nếu di chuyển bằng Taxi th&igrave; đừng để Taxi giới thiệu qu&aacute;n ăn cho bạn v&igrave; Taxi c&oacute; thể đưa bạn v&agrave;o những qu&aacute;n ăn m&agrave; ở đ&oacute; được tr&iacute;ch phần trăm.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Buổi chiều m&igrave;nh đi suối Tranh v&agrave; thăm vườn ch&ocirc;m ch&ocirc;m, ti&ecirc;u. M&igrave;nh cũng mua được rượu sim v&agrave; &iacute;t ti&ecirc;u ở đ&acirc;y. Nhớ thử ch&ocirc;m ch&ocirc;m ở đ&acirc;y v&igrave; d&ugrave; l&agrave; quả xanh th&igrave; n&oacute; cũng ngọt lạ lu&ocirc;n ấy.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Tối m&igrave;nh ăn ở chợ đ&ecirc;m v&agrave; đi loanh quanh ở đ&oacute;. Phải n&oacute;i l&agrave; chợ đ&ecirc;m l&agrave;m m&igrave;nh lạc tr&ocirc;i lu&ocirc;n, c&oacute; qu&aacute; nhiều thứ để ăn v&agrave; để mua ấy.&nbsp;</span></p>\r\n\r\n<p style=\"text-align:justify\"><em><strong><span style=\"font-size:14px\">Ng&agrave;y 2</span></strong></em></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Buổi s&aacute;ng m&igrave;nh d&ugrave;ng buffet ăn s&aacute;ng ở kh&aacute;ch sạn. Sau đ&oacute; m&igrave;nh đi&nbsp;thăm vườn th&uacute; Safari, c&aacute;ch trung t&acirc;m Ph&uacute; Quốc khoảng 20km. N&oacute;i chung l&agrave; v&eacute; kh&aacute; đắt nhưng đ&aacute;ng đồng tiền b&aacute;t gạo, đi v&agrave;o rồi thấy đẹp kinh khủng ấy.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Trưa m&igrave;nh ăn hải sản ở l&agrave;ng ch&agrave;i cổ H&agrave;m Ninh v&agrave; di chuyển đi mua qu&agrave; lu&ocirc;n. Phải n&oacute;i l&agrave; hải sản ở H&agrave;m Ninh l&agrave; số 1 Ph&uacute; Quốc, nếu đến th&igrave; chắc chắn phải thử một lần. Sau đ&oacute;, m&igrave;nh đi đến một số ch&ugrave;a ở Ph&uacute; Quốc. V&igrave; mẹ m&igrave;nh đi l&agrave;m lễ n&ecirc;n m&igrave;nh cũng kh&ocirc;ng r&otilde; t&ecirc;n ch&ugrave;a lắm.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ng&agrave;y h&ocirc;m nay m&igrave;nh chuyển v&agrave;o ở&nbsp;Resort Marriot. Chất lượng v&agrave; dịch vụ ở đ&acirc;y đều được đ&aacute;nh gi&aacute; 5 sao n&ecirc;n kh&ocirc;ng c&oacute; g&igrave; phải ch&ecirc; trạch cả. Đ&acirc;y cũng l&agrave; nơi chứa b&atilde;i Khem, một trong những b&atilde;i biển đẹp nhất Ph&uacute; Quốc. </span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em><strong>Ng&agrave;y 3 + Ng&agrave;y 4</strong></em></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">M&igrave;nh ở trong Resort 2 ng&agrave;y rồi trở về Bắc sau đ&oacute;, c&oacute; nghĩa cả 2 ng&agrave;y m&igrave;nh đều ở trong Resort. Gần Resort, c&aacute;ch khoảng&nbsp;1km c&oacute; địa điểm tham quan l&agrave; nh&agrave; t&ugrave; v&agrave; c&aacute;ch đ&oacute; khoảng 2km sẽ l&agrave; b&atilde;i Sao, cũng l&agrave; một trong những b&atilde;i biển đẹp nhất Ph&uacute; Quốc.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Đ&acirc;y l&agrave; chuyến du lịch Ph&uacute; Quốc của gia đ&igrave;nh m&igrave;nh. Nếu c&oacute; g&igrave; cần t&igrave;m hiểu th&ecirc;m, bạn c&oacute; thể tiếp tục hỏi m&igrave;nh&nbsp;<img alt=\"wink\" src=\"http://cdn.ckeditor.com/4.5.10/full/plugins/smiley/images/wink_smile.png\" style=\"height:23px; width:23px\" title=\"wink\" /></span></p>\r\n', '0', 1511921896, 1511923589, 'http://cdn.ckeditor.com/4.5.10/full/plugins/smiley/images/wink_smile.png', 1),
(162, 86, 336, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Noel (Gi&aacute;ng sinh)</strong> l&agrave; một dịp lễ lớn của người phương T&acirc;y v&agrave; những người theo đạo Thi&ecirc;n Ch&uacute;a. Th&ocirc;ng thường, người ta sẽ tổ chức gi&aacute;ng sinh v&agrave;o <strong>đ&ecirc;m 24/12 đến hết ng&agrave;y 25/12</strong>. Sở dĩ một ng&agrave;y lễ được k&eacute;o d&agrave;i trong 2 ng&agrave;y l&agrave; bởi theo quan niệm của người Do Th&aacute;i,&nbsp;một ng&agrave;y mới bắt đầu từ l&uacute;c ho&agrave;ng h&ocirc;n, do đ&oacute; người ta mới tổ chức sớm từ đ&ecirc;m tối ng&agrave;y 24 (gọi l&agrave; lễ vọng) trước khi tổ chức ch&iacute;nh thức trong cả ng&agrave;y 25 (gọi l&agrave; lễ ch&iacute;nh ng&agrave;y).</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em><strong>Đ&ecirc;m 24/12 - ng&agrave;y &ldquo;lễ vọng&rdquo; của Gi&aacute;ng sinh</strong></em></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Như đ&atilde; n&oacute;i ở tr&ecirc;n, theo C&ocirc;ng gi&aacute;o Roma, đ&ecirc;m 24/12 l&agrave; thời điểm &ldquo;lễ vọng&rdquo; được tổ chức th&ecirc;m nhằm thu h&uacute;t đ&ocirc;ng đảo người tham gia hơn. V&agrave;o đ&ecirc;m đ&oacute;, tất cả c&aacute;c địa điểm như th&aacute;nh đường hay mỗi hộ gia đ&igrave;nh đều trang tr&iacute; hang đ&aacute; với m&aacute;ng cỏ, b&ecirc;n trong c&oacute; tượng ch&uacute;a H&agrave;i đồng tượng Đức Mẹ Maria. Ở xung quanh đ&oacute; l&agrave; những ch&uacute; lừa, tượng Ba Vua, một số thi&ecirc;n thần, th&aacute;nh Giuse...</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em><strong>Ng&agrave;y 25/12 - ng&agrave;y Gi&aacute;ng sinh ch&iacute;nh thức</strong></em></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Th&ocirc;ng thường, c&aacute;c hoạt động sẽ được tổ chức v&agrave;o ng&agrave;y 25. Sở dĩ c&oacute; ng&agrave;y 25/12 l&agrave; ng&agrave;y Gi&aacute;ng sinh ch&iacute;nh thức bởi nhiều người cho rằng ch&uacute;a Jesu thực sự sinh ra v&agrave;o ng&agrave;y 25/12. Tuy nhi&ecirc;n, chưa c&oacute; t&agrave;i liệu n&agrave;o chứng thực điều n&agrave;y cả.&nbsp;</span></p>\r\n', '0', 1511922498, 1512060889, NULL, 1),
(163, 86, 330, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Vốn lưu động </strong>l&agrave; thước đo tiền mặt v&agrave; lượng t&agrave;i sản lưu động hiện c&oacute;, phục vụ nhu cầu hoạt động h&agrave;ng ng&agrave;y của c&ocirc;ng ty. Nắm vững th&ocirc;ng tin n&agrave;y sẽ hỗ trợ c&ocirc;ng t&aacute;c quản l&yacute; doanh nghiệp v&agrave; gi&uacute;p bạn c&oacute; được những quyết định đầu tư đ&uacute;ng đắn. Bằng c&aacute;ch t&iacute;nh vốn lưu động, bạn c&oacute; thể x&aacute;c định liệu một doanh nghiệp c&oacute; khả năng đ&aacute;p ứng những nghĩa vụ ngắn hạn của n&oacute; hay kh&ocirc;ng v&agrave; đồng thời, cần bao nhi&ecirc;u thời gian để l&agrave;m được điều đ&oacute;. Với &iacute;t hoặc kh&ocirc;ng c&oacute; vốn lưu động, c&oacute; lẽ tương lai của doanh nghiệp sẽ kh&ocirc;ng mấy tốt đẹp. Vốn lưu động cũng hữu &iacute;ch trong việc đ&aacute;nh gi&aacute; hiệu quả sử dụng nguồn lực của một doanh nghiệp.&nbsp;</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong><em>C&ocirc;ng thức t&iacute;nh vốn lưu động l&agrave;:&nbsp;</em></strong></span><br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Vốn lưu động = t&agrave;i sản ngắn hạn - nợ ngắn hạn</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n<span style=\"font-size:14px\"><strong>T&iacute;nh t&agrave;i sản ngắn hạn.</strong>&nbsp;T&agrave;i sản ngắn hạn l&agrave; t&agrave;i sản m&agrave; doanh nghiệp c&oacute; thể chuyển đổi th&agrave;nh tiền mặt trong thời gian một năm.&nbsp;Ch&uacute;ng bao gồm tiền mặt v&agrave; c&aacute;c t&agrave;i khoản ngắn hạn kh&aacute;c. V&iacute; dụ: c&aacute;c khoản phải thu, chi ph&iacute; trả trước v&agrave; tồn kho.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\">Th&ocirc;ng thường, bạn c&oacute; thể t&igrave;m thấy th&ocirc;ng tin tr&ecirc;n trong bảng c&acirc;n đối kế to&aacute;n của c&ocirc;ng ty - t&agrave;i liệu n&agrave;y n&ecirc;n c&oacute; mục tổng t&agrave;i sản ngắn hạn.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\">Nếu bảng c&acirc;n đối kế to&aacute;n kh&ocirc;ng bao gồm tổng t&agrave;i sản ngắn hạn, h&atilde;y kiểm tra từng d&ograve;ng của bảng c&acirc;n đối. Cộng tất cả t&agrave;i khoản đ&aacute;p ứng định nghĩa t&agrave;i sản ngắn hạn để c&oacute; được tổng cần t&igrave;m. V&iacute; dụ, bạn sẽ cộng c&aacute;c th&ocirc;ng số &quot;khoản phải thu&quot;, &quot;tồn kho&quot;, &quot;tiền mặt v&agrave; c&aacute;c khoản tương đương&quot;.</span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>T&iacute;nh nợ ngắn hạn.</strong>&nbsp;Nợ ngắn hạn l&agrave; những khoản cần thanh to&aacute;n trong thời hạn một năm. Ch&uacute;ng bao gồm khoản phải trả, nợ dồn t&iacute;ch v&agrave; c&aacute;c khoản vay ngắn hạn phải trả.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\">Bảng c&acirc;n đối kế to&aacute;n n&ecirc;n thể hiện tổng nợ ngắn hạn. Nếu kh&ocirc;ng c&oacute;, h&atilde;y sử dụng th&ocirc;ng tin c&oacute; trong bảng c&acirc;n đối để t&igrave;m tổng n&agrave;y bằng c&aacute;ch cộng dồn c&aacute;c t&agrave;i khoản nợ ngắn hạn được liệt k&ecirc;. V&iacute; dụ, ch&uacute;ng c&oacute; thể gồm &quot;khoản phải trả v&agrave; dự ph&ograve;ng&quot;, &quot;thuế phải trả&quot; v&agrave; &quot;nợ ngắn hạn&quot;.</span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>T&iacute;nh vốn lưu động.</strong>&nbsp;</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Đ&acirc;y chỉ l&agrave; ph&eacute;p trừ cơ bản. Lấy tổng t&agrave;i sản ngắn hạn trừ tổng nợ ngắn hạn.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\">V&iacute; dụ, giả sử một c&ocirc;ng ty c&oacute; t&agrave;i sản ngắn hạn l&agrave; 1 tỷ đồng v&agrave; nợ ngắn hạn l&agrave; 480 triệu đồng. Vốn lưu động của c&ocirc;ng ty sẽ l&agrave; 620 triệu đồng. Với t&agrave;i sản ngắn hạn hiện c&oacute;, c&ocirc;ng ty c&oacute; thể thanh to&aacute;n mọi khoản nợ ngắn hạn v&agrave; đồng thời, c&ograve;n tiền mặt để phục vụ những mục ti&ecirc;u kh&aacute;c. C&ocirc;ng ty c&oacute; thể d&ugrave;ng tiền mặt cho c&aacute;c hoạt động kinh doanh hoặc thanh to&aacute;n nợ d&agrave;i hạn. N&oacute; cũng c&oacute; thể được d&ugrave;ng để trả lợi tức cho cổ đ&ocirc;ng.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\">Nếu nợ ngắn hạn lớn hơn t&agrave;i sản ngắn hạn, kết quả cho thấy vốn lưu động bị thiếu hụt.&nbsp;Thiếu hụt vốn lưu động l&agrave; dấu hiệu cảnh b&aacute;o c&ocirc;ng ty đang c&oacute; nguy cơ vỡ nợ. Trong t&igrave;nh huống n&agrave;y, c&ocirc;ng ty c&oacute; thể sẽ cần đến những nguồn t&agrave;i ch&iacute;nh d&agrave;i hạn kh&aacute;c. Đ&oacute; c&oacute; thể l&agrave; dấu hiệu cho thấy c&ocirc;ng ty đang gặp rắc rối v&agrave; c&oacute; lẽ, kh&ocirc;ng l&agrave; lựa chọn đầu tư tốt.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\">V&iacute; dụ, giả sử c&ocirc;ng ty c&oacute; 2 tỷ đồng t&agrave;i sản ngắn hạn v&agrave; 2,4 tỷ đồng nợ ngắn hạn. Vốn lưu động của c&ocirc;ng ty bị thiết hụt 400 (hay - 400) triệu đồng. N&oacute;i c&aacute;ch kh&aacute;c, c&ocirc;ng ty sẽ kh&ocirc;ng thể đ&aacute;p ứng nghĩa vụ ngắn hạn v&agrave; phải b&aacute;n lượng t&agrave;i sản d&agrave;i hạn tương đương 400 triệu đồng hoặc t&igrave;m những nguồn t&agrave;i ch&iacute;nh kh&aacute;c.</span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Bạn phải hiểu được bản chất của Vốn lưu động để c&oacute; những quyết định đầu tư hợp l&yacute;, tr&aacute;nh những đầu tư hiện thời c&oacute; khả năng g&acirc;y lỗ cho c&ocirc;ng ty hay doanh nghiệp.</span></p>\r\n', '1', 1511923457, 1512060905, NULL, 1),
(164, 86, 281, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\">Kh&aacute; nhiều người t&ograve; m&ograve; về khả năng đ&aacute;nh m&aacute;y của m&igrave;nh. Th&ocirc;ng thường tốc độ đ&aacute;nh m&aacute;y sẽ được t&iacute;nh theo:</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>CPM&nbsp;:</strong> Charater per minute - <strong>Số k&yacute; tự trong 1 ph&uacute;t</strong></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>WPM:</strong> Word per minite - <strong>Số từ trong 1 ph&uacute;t</strong></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><strong><em><span style=\"font-size:14px\">Để kiểm tra tốc độ đ&aacute;nh m&aacute;y của bạn, c&oacute; một số trang web online hỗ trợ rất hữu &iacute;ch sau:</span></em></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>1. 10fastfingers</strong><br />\r\n<br />\r\nWebsite:&nbsp;<a href=\"http://10fastfingers.com/typing-test/vietnamese\" rel=\"nofollow\" target=\"_blank\">http://10fastfingers.com/typing-test/vietnamese</a><br />\r\n<br />\r\nĐ&acirc;y l&agrave; website hỗ trợ kiểm tra tốc độ đ&aacute;nh m&aacute;y tiếng Việt được kh&aacute; nhiều người d&ugrave;ng ở Việt Nam v&igrave; n&oacute; test kh&aacute; chuẩn với việc random c&aacute;c từ v&agrave; kh&ocirc;ng bị lỗi khi g&otilde; chứ sai. Tốc độ đ&aacute;nh chữ cũng được lưu lại nếu bạn đăng k&yacute; th&agrave;nh vi&ecirc;n v&agrave; c&oacute; xếp top nếu bạn đạt được điểm cao.&nbsp;Tuy nhi&ecirc;n cũng v&igrave; random c&aacute;c từ n&ecirc;n khi đ&aacute;nh chữ trong đoạn văn sẽ kh&ocirc;ng c&oacute; &yacute; nghĩa g&igrave; người d&ugrave;ng sẽ kh&ocirc;ng đo&aacute;n trước được c&aacute;c từ tiếp theo m&agrave; phải nh&igrave;n từng từ một.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>2. Typeracer</strong><br />\r\n<br />\r\nWebsite:&nbsp;<a href=\"http://play.typeracer.com/?universe=lang_vi\" rel=\"nofollow\" target=\"_blank\">http://play.typeracer.com/?universe=lang_vi</a><br />\r\n<br />\r\nCũng giống như 10fastfingers, typeracer cũng hỗ trợ người d&ugrave;ng g&otilde; tiếng Việt, tuy nhi&ecirc;n c&aacute;c đoạn văn được dịch qua google n&ecirc;n c&oacute; thể một số chữ bạn đ&aacute;nh đ&uacute;ng n&oacute; vẫn hiển thị sai l&agrave;m hỏng lu&ocirc;n b&agrave;i test. Th&ecirc;m v&agrave;o đ&oacute; sẽ bị k&egrave;m một số từ tiếng Anh trong đoạn văn cũng kh&aacute; kh&oacute; chịu.&nbsp;Tuy nhi&ecirc;n thay v&agrave;o đ&oacute; typeracer cho ph&eacute;p người d&ugrave;ng c&oacute; thể tạo ph&ograve;ng v&agrave;o đua tốc độ đ&aacute;nh ph&iacute;m với nhau kh&aacute; hay.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>3. qltt.biz</strong><br />\r\n<br />\r\nKh&aacute;c hẳn với 2 website tr&ecirc;n th&igrave; qltt cho ph&eacute;p người d&ugrave;ng tự copy 1 đoạn văn bản bằng tiếng Việt sau đ&oacute; g&otilde; lại c&aacute;c đoạn văn bản đ&oacute; để test tốc độ đ&aacute;nh ph&iacute;m.<br />\r\n<br />\r\nNgo&agrave;i ra nếu c&aacute;c bạn muốn test tiếng Anh hoặc c&aacute;c thứ tiếng kh&aacute;c c&oacute; thể v&agrave;o c&aacute;c <strong>Website: typingtest.com</strong></span></p>\r\n', '0', 1512143854, 1512184963, NULL, 1),
(165, 86, 329, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\">Lợi nhuận gộp l&agrave; sự so s&aacute;nh kh&aacute; đơn giản giữa chi ph&iacute; h&agrave;ng h&oacute;a m&agrave; c&ocirc;ng ty bạn b&aacute;n với thu nhập ph&aacute;t sinh từ h&agrave;ng ho&aacute; đ&oacute;.&nbsp;<strong><em>Tỷ lệ&nbsp;</em>lợi nhuận&nbsp;gộp</strong> l&agrave;<strong> tỷ suất giữa lợi nhuận gộp tr&ecirc;n tổng doanh thu, thể hiện th&agrave;nh tỷ lệ phần trăm</strong>. Tỷ lệ lợi nhuận gộp l&agrave; một c&aacute;ch thức nhanh ch&oacute;ng nhưng hữu dụng để so s&aacute;nh&nbsp;c&ocirc;ng ty bạn với đối thủ cạnh tranh hoặc c&aacute;c chỉ số trung b&igrave;nh ng&agrave;nh. N&oacute; cũng c&oacute; thể được sử dụng để so s&aacute;nh hiệu quả hiện tại của c&ocirc;ng ty bạn với qu&aacute; khứ, đặc biệt l&agrave; tại c&aacute;c thị trường m&agrave; gi&aacute; cả h&agrave;ng h&oacute;a của bạn c&oacute; thể biến động đ&aacute;ng kể.</span></p>\r\n\r\n<p style=\"text-align:justify\"><em><strong><span style=\"font-size:14px\">C&aacute;ch t&iacute;nh tỉ lệ lợi nhuận gộp:</span></strong></em></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">* T&iacute;nh lợi nhuận gộp</span></strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>T&iacute;nh tổng doanh thu.</strong> Cộng tất cả thu nhập từ c&aacute;c chương tr&igrave;nh, h&agrave;ng h&oacute;a v&agrave; sản phẩm kh&aacute;c nhau m&agrave; doanh nghiệp của bạn b&aacute;n. Đ&acirc;y l&agrave;&nbsp;<em>tổng doanh thu của bạn.&nbsp;</em>Bạn kh&ocirc;ng nhất thiết phải t&iacute;nh to&agrave;n bộ doanh thu của doanh nghiệp m&agrave; t&ugrave;y v&agrave;o nhu cầu cụ thể, bạn c&oacute; thể muốn t&iacute;nh doanh thu cho từng bộ phận hoặc sản phẩm ri&ecirc;ng lẻ của doanh nghiệp bạn.</span>\r\n\r\n	<ul>\r\n		<li><span style=\"font-size:14px\">V&iacute; dụ: Một cửa h&agrave;ng thể thao&nbsp;với 40 triệu&nbsp;doanh thu từ quần &aacute;o, 25 triệu&nbsp;từ sản phẩm ngo&agrave;i trời v&agrave; 35 triệu&nbsp;từ b&aacute;n h&agrave;ng thiết bị sẽ c&oacute; tổng doanh thu l&agrave;&quot; 40 triệu&nbsp;+ 25 triệu&nbsp;+ 35 triệu&nbsp;=&nbsp;<strong>100 triệu&nbsp;</strong></span></li>\r\n	</ul>\r\n	</li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>T&iacute;nh gi&aacute; vốn h&agrave;ng b&aacute;n.</strong> Cộng c&aacute;c chi ph&iacute; li&ecirc;n quan đến việc b&aacute;n sản phẩm để t&iacute;nh gi&aacute; vốn h&agrave;ng b&aacute;n (hoặc &quot;GVBH&quot;). Đối với một doanh nghiệp mua đi b&aacute;n lại, n&oacute; bao gồm chi ph&iacute; của ch&iacute;nh sản phẩm, cộng với chi ph&iacute; vận chuyển v&agrave; tồn kho. Tuy nhi&ecirc;n, nếu doanh nghiệp bạn&nbsp;<em>sản xuất</em>&nbsp;ch&iacute;nh sản phẩm của m&igrave;nh, gi&aacute; vốn h&agrave;ng b&aacute;n sẽ l&agrave; tổng hợp của gi&aacute; nguy&ecirc;n vật liệu, nh&acirc;n c&ocirc;ng v&agrave; chi ph&iacute; nh&agrave; m&aacute;y.</span>\r\n	<ul>\r\n		<li><span style=\"font-size:14px\">Lưu &yacute;: GVBH kh&ocirc;ng bao gồm c&aacute;c chi ph&iacute; ph&aacute;t sinh từ tiền lương, thuế thu nhập doanh nghiệp, chi ph&iacute; l&atilde;i suất, vv&hellip; GVBH chỉ l&agrave; thước đo chi ph&iacute; m&agrave; doanh nghiệp bạn phải ti&ecirc;u tốn để tạo ra v&agrave; b&aacute;n h&agrave;ng h&oacute;a của m&igrave;nh.</span></li>\r\n		<li><span style=\"font-size:14px\">V&iacute; dụ: Nếu để mua, vận chuyển v&agrave; tồn kho sản phẩm, cửa h&agrave;ng sản phẩm thể thao của ch&uacute;ng ta trả chi ph&iacute; 20 triệu&nbsp;cho quần &aacute;o, 7.5 triệu&nbsp;cho sản phẩm ngo&agrave;i trời v&agrave;&nbsp;17.5 triệu&nbsp;cho thiết bị, tổng gi&aacute; vốn h&agrave;ng b&aacute;n sẽ l&agrave; 20 triệu&nbsp;+ 7.5 triệu&nbsp;+ 17.5 triệu&nbsp;=&nbsp;<em>45 triệu&nbsp;</em></span></li>\r\n	</ul>\r\n	</li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Trừ GVBH từ tổng doanh thu.</strong> Khi trừ tổng gi&aacute; vốn h&agrave;ng b&aacute;n từ tổng doanh thu, bạn t&iacute;nh được lợi nhuận gộp trong kỳ của doanh nghiệp bạn. Con số m&agrave; bạn t&iacute;nh được thể hiện bạn kiếm được bao nhi&ecirc;u tiền từ việc b&aacute;n sản phẩm của bạn - từ nguồn tiền n&agrave;y, bạn sẽ phải trả thuế doanh nghiệp, tiền lương, thanh to&aacute;n l&atilde;i suất, vv. Lợi nhuận gộp n&ecirc;n l&agrave; số dương - nếu n&oacute; &acirc;m nghĩa l&agrave; bạn đang&nbsp;<em>mất</em>&nbsp;tiền khi b&aacute;n sản phẩm ở mức gi&aacute; hiện tại.</span>\r\n	<ul>\r\n		<li><span style=\"font-size:14px\">V&iacute; dụ: Trong trường hợp cửa h&agrave;ng sản phẩm thể thao của ch&uacute;ng ta, lợi nhuận gộp sẽ l&agrave; 100 triệu&nbsp;- 45 triệu&nbsp;=&nbsp;<strong>55 triệu.</strong></span></li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n\r\n<h3 style=\"text-align:justify\"><strong><span style=\"font-size:14px\">* T&iacute;nh tỉ lệ lợi nhuận gộp</span></strong></h3>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Chia lợi nhuận gộp cho tổng doanh thu.&nbsp;</strong><em>Tỷ lệ</em>&nbsp;lợi nhuận gộp (đ&ocirc;i khi chỉ gọi l&agrave; &quot;tỷ lệ gộp&quot;) kh&aacute;c với lợi nhuận gộp. Tỷ lệ l&atilde;i gộp l&agrave; tỷ lệ lợi nhuận gộp tr&ecirc;n tổng doanh thu của bạn. N&oacute; thể hiện bạn đang&nbsp;<em>thực sự</em>&nbsp;kiếm được bao nhi&ecirc;u tiền từ việc b&aacute;n sản phẩm của bạn. V&iacute; dụ, nếu bạn b&aacute;n sản phẩm với gi&aacute; 200 ngh&igrave;n, nhưng bạn tốn 100 ngh&igrave;n&nbsp;để c&oacute; được mỗi sản phẩm tr&ecirc;n kệ, như vậy, bạn chỉ thực sự kiếm được 100 ngh&igrave;n&nbsp;cho mỗi sản phẩm bạn b&aacute;n.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Thể hiện tỷ lệ n&agrave;y theo tỷ lệ phần trăm.</strong> Tỷ lệ l&atilde;i gộp thường được viết th&agrave;nh tỷ lệ phần trăm. Một khi bạn c&oacute; tỷ lệ lợi nhuận gộp / tổng doanh thu, chỉ cần nh&acirc;n kết quả số thập ph&acirc;n với 100 để c&oacute; được gi&aacute; trị phần trăm.</span>\r\n	<ul>\r\n		<li><span style=\"font-size:14px\">V&iacute; dụ: Với cửa h&agrave;ng sản phẩm thể thao, tỷ lệ l&atilde;i gộp l&agrave;: 55 triệu/100 triệu&nbsp;= 0.55 x 100 =&nbsp;<strong>55%&nbsp;</strong>. N&oacute;i c&aacute;ch kh&aacute;c, t&iacute;nh trung b&igrave;nh cho mỗi sản phẩm ch&uacute;ng ta b&aacute;n ra, ch&uacute;ng ta l&atilde;i được 55% từ chi ph&iacute;.</span></li>\r\n	</ul>\r\n	</li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Sử dụng tỷ lệ l&atilde;i gộp để theo d&otilde;i hiệu quả kinh doanh của bạn.</strong> So s&aacute;nh tỷ lệ l&atilde;i gộp hiện tại của doanh nghiệp với qu&aacute; khứ. Nếu tỷ lệ l&atilde;i gộp của bạn đang tăng l&ecirc;n, doanh nghiệp bạn đang trở n&ecirc;n hiệu quả hơn trong phạm vị hoặc l&agrave; kiếm được nhiều tiền hơn khi b&aacute;n sản phẩm hoặc l&agrave; tốn &iacute;t tiền hơn để c&oacute; được sản phẩm. Nếu tỷ lệ lợi nhuận&nbsp;gộp của bạn đang đi xuống, điều ngược lại l&agrave; đ&uacute;ng.</span>\r\n	<ul>\r\n		<li><span style=\"font-size:14px\">V&iacute; dụ: Giả sử cửa h&agrave;ng sản phẩm thể thao của ch&uacute;ng ta c&oacute; tỷ lệ l&atilde;i gộp l&agrave; 48% v&agrave;o th&aacute;ng trước, nhưng th&aacute;ng n&agrave;y, ch&uacute;ng ta mua sản phẩm từ nh&agrave; b&aacute;n bu&ocirc;n kh&aacute;c c&oacute; gi&aacute; tốt hơn, n&ecirc;n tỷ lệ l&atilde;i gộp hiện tại đạt được l&agrave; 55%. Trong trường hợp n&agrave;y, hiệu quả kinh doanh của ch&uacute;ng ta, t&iacute;nh theo tỷ lệ l&atilde;i gộp, đ&atilde; tăng 7%.</span></li>\r\n	</ul>\r\n	</li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>So s&aacute;nh tỷ lệ lợi nhuận&nbsp;gộp của bạn với đối thủ cạnh tranh.</strong> Việc so s&aacute;nh tỷ lệ lợi nhuận&nbsp;gộp của bạn với c&aacute;c chỉ số m&agrave; bạn c&oacute; thể t&igrave;m thấy ở đối thủ cạnh tranh&nbsp;<em>hoặc&nbsp;</em>tổng thể trong ng&agrave;nh của bạn l&agrave; rất hữu &iacute;ch. Nếu tỷ lệ lợi nhuận gộp của bạn cao hơn, bạn đang kinh doanh c&oacute; lợi thế hơn so với đối thủ, người sẽ phải b&aacute;n nhiều sản phẩm hơn để kiếm bằng số tiền m&agrave; bạn kiếm được, v&agrave; ngược lại.</span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', '0', 1512147247, 1512185008, NULL, 1);
INSERT INTO `answers` (`id`, `user_id`, `question_id`, `status`, `answers_text`, `is_anonymous`, `create_time`, `update_time`, `images`, `censor_flag`) VALUES
(166, 86, 277, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>&quot;FAQ&quot;</strong>&nbsp;l&agrave; một từ viết tắt trong tiếng Anh, đầy đủ l&agrave;&nbsp;<strong>&quot;Frequently Asked Questions&quot;</strong>, hiểu theo nghĩa tiếng Việt l&agrave;&nbsp;<strong>&quot;c&acirc;u hỏi thường gặp&quot;</strong>. Bạn thường hay gặp cụm từ<strong>&nbsp;FAQ</strong>&nbsp;tr&ecirc;n c&aacute;c website, mạng x&atilde; hội phổ biến, hoặc trong c&aacute;c nội quy, th&ocirc;ng b&aacute;o của tổ chức, doanh nghiệp.<br />\r\n<br />\r\nTh&ocirc;ng thường,<strong>&nbsp;FAQ</strong>&nbsp;cung cấp tất cả c&aacute;c c&acirc;u hỏi thường gặp v&agrave; c&acirc;u trả lời tương ứng với mục đ&iacute;ch gi&uacute;p cho người xem hiểu r&otilde; hơn về c&aacute;c vấn đề, giải đ&aacute;p được những thắc mắc, mong muốn thường trực nhất.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Rất nhiều website, nhất l&agrave; c&aacute;c website về sản phẩm, dịch vụ hoặc website thương mại điện tử ch&uacute; trọng đến<strong>&nbsp;FAQ</strong>&nbsp;v&agrave; thường d&agrave;nh ri&ecirc;ng một chuy&ecirc;n mục cho n&oacute;. Tất cả c&aacute;c&nbsp;<strong>c&acirc;u hỏi&nbsp;</strong>của kh&aacute;ch h&agrave;ng sẽ được tổng hợp lại cụ thể v&agrave; được trả lời một c&aacute;ch đầy đủ v&agrave; ch&iacute;nh x&aacute;c nhất.&nbsp;</span><span style=\"font-size:14px\"><strong>FAQ&nbsp;</strong>ngo&agrave;i việc hỗ trợ, giải đ&aacute;p cho kh&aacute;ch h&agrave;ng th&igrave; n&oacute; c&ograve;n g&oacute;p phần tư vấn cho kh&aacute;ch h&agrave;ng về sản phẩm, dịch vụ. N&oacute;i c&aacute;ch kh&aacute;c,&nbsp;<strong>FAQ&nbsp;</strong>l&agrave; chuy&ecirc;n mục c&oacute; chức năng như một người tư vấn về sản phẩm, dịch vụ.</span></p>\r\n', '0', 1512148702, 1512185022, NULL, 1),
(167, 86, 285, 1, '<p><span style=\"font-size:14px\">C&aacute;c c&ocirc;ng thức lượng gi&aacute;c cần nhớ:</span></p>\r\n\r\n<p><em><strong>1. T&iacute;nh chất tuần ho&agrave;n</strong></em></p>\r\n\r\n<p><span style=\"font-size:14px\"><img src=\"http://lh4.ggpht.com/-R2E6Kia_k40/WVDIKjhN87I/AAAAAAAAAHg/yT6Np14HOUEisrW4Zn4iBCHGZMGDnpMxwCLcBGAs/s1600/tuan-hoan.png\" /></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><em><strong>2. C&ocirc;ng thức lượng gi&aacute;c c&aacute;c cung li&ecirc;n quan đặc biệt</strong></em><br />\r\n<u>a. Hai cung đối nhau</u></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><img src=\"http://lh4.ggpht.com/-ZuehJHBrGw8/WVC0WwWuPCI/AAAAAAAAAGM/iXhjS22qwLozIQLHXAURCi6P-6AIABH0ACLcBGAs/s1600/hai-cung-doi-nhau.png\" /></span></p>\r\n\r\n<p><u><span style=\"font-size:14px\">b. Hai cung b&ugrave; nhau</span></u></p>\r\n\r\n<p><span style=\"font-size:14px\"><img src=\"http://lh4.ggpht.com/-zRG0bommpaU/WVCxOnt-c2I/AAAAAAAAAFw/LDBxsPYfMCAi0pHMYIEWRopQKWMFzwSOACLcBGAs/s1600/hai-cung-bu-nhau.png\" /></span></p>\r\n\r\n<p><u><span style=\"font-size:14px\">c. Hai cung phụ nhau</span></u></p>\r\n\r\n<p><span style=\"font-size:14px\"><img src=\"http://lh4.ggpht.com/--7w7ym4r3kk/WVCyLB4hrTI/AAAAAAAAAF8/SUOFNy0nCEctLcVksQRcDoNIgDi5vDpGgCLcBGAs/s1600/hai-cung-phu-nhau.png\" /></span></p>\r\n\r\n<p><u><span style=\"font-size:14px\">d. Hai cung hơn k&eacute;m &pi;</span></u></p>\r\n\r\n<p><span style=\"font-size:14px\"><img src=\"http://lh4.ggpht.com/-Z7wI8rmmQQE/WVCz9Xh33ZI/AAAAAAAAAGI/PwpPp5_gfncLLgAhNpTG08rWP6jV6yKiQCLcBGAs/s1600/hai-cung-hon-kem-pi.png\" /></span></p>\r\n\r\n<p><span style=\"font-size:14px\">e. Hai cung hơn k&eacute;m &pi;/2</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><img src=\"http://lh4.ggpht.com/-n7TA5-dOapI/WVC3NawL8UI/AAAAAAAAAGY/hO-yI8lY3F0at1uRdVMjXlGlxMiaKR1wgCLcBGAs/s1600/hai-cung-hon-kem-pi-2.png\" /></span></p>\r\n\r\n<p><em><strong><span style=\"font-size:14px\">3. C&ocirc;ng thức lượng gi&aacute;c cơ bản</span></strong></em></p>\r\n\r\n<p><span style=\"font-size:14px\"><img src=\"http://lh4.ggpht.com/-3nS2ye8amdY/WVCgN6MT26I/AAAAAAAAADU/tKPH7BYyzScWV17X0_9Hn-D5vmAE01eGQCLcBGAs/s1600/cong-thuc-luong-giac-co-ban.png\" /></span></p>\r\n\r\n<p><em><strong><span style=\"font-size:14px\">4. C&ocirc;ng thức cộng</span></strong></em></p>\r\n\r\n<p><span style=\"font-size:14px\"><img src=\"http://lh4.ggpht.com/-Js1dJo8fVhI/WVCg9X1eVlI/AAAAAAAAADc/yBUWlIr7AQE7w1OFTecCcQDsTyn1nujkwCLcBGAs/s1600/cong-thuc-cong-luong-giac.png\" /></span></p>\r\n\r\n<p><strong><em><span style=\"font-size:14px\">5. C&ocirc;ng thức nh&acirc;n đ&ocirc;i</span></em></strong></p>\r\n\r\n<p><span style=\"font-size:14px\"><img src=\"http://lh4.ggpht.com/-_LXAI5_oVq8/WVChnIy7fUI/AAAAAAAAADk/0v7uYdc2AskghVpB1nWwhFUReopzi1FqACLcBGAs/s1600/cong-thuc-nhan-doi-luong-giac.png\" /></span></p>\r\n\r\n<p><em><strong><span style=\"font-size:14px\">6. C&ocirc;ng thức nh&acirc;n ba</span></strong></em></p>\r\n\r\n<p><span style=\"font-size:14px\"><img src=\"http://lh4.ggpht.com/-KaTvnMIAueY/WVCif390T0I/AAAAAAAAADw/5wZ8nPuSNuoCTrB3tqU1OxU9Qsxf07xRgCLcBGAs/s1600/cong-thuc-nhan-ba-luong-giac.png\" /></span></p>\r\n\r\n<p><strong><em><span style=\"font-size:14px\">7. C&ocirc;ng thức biến đổi t&iacute;ch th&agrave;nh tổng</span></em></strong></p>\r\n\r\n<p><span style=\"font-size:14px\"><img src=\"http://lh4.ggpht.com/-tTfrnWT6Ss8/WVCjF6OIXEI/AAAAAAAAAD4/VtkFf9yDYEgYMoHOeKyvedXLndxfYlG3ACLcBGAs/s1600/cong-thuc-bien-doi-tich-thanh-tong-luong-giac.png\" /></span></p>\r\n\r\n<p><strong><em><span style=\"font-size:14px\">8. C&ocirc;ng thức biến đổi tổng th&agrave;nh t&iacute;ch</span></em></strong></p>\r\n\r\n<p><span style=\"font-size:14px\"><img src=\"http://lh4.ggpht.com/-1u5RP6Doz2s/WVClUTR-aZI/AAAAAAAAAEM/3dXdZ9Eytlk9rprfdUBiulLneCQ6n4lJQCLcBGAs/s1600/cong-thuc-bien-doi-tong-thanh-tich.png\" /></span></p>\r\n\r\n<p><strong><em><span style=\"font-size:14px\">9. C&ocirc;ng thức hạ bậc</span></em></strong></p>\r\n\r\n<p><span style=\"font-size:14px\"><img src=\"http://lh4.ggpht.com/-9vzoXD5Zds0/WVC-3S35buI/AAAAAAAAAG4/9o4378TB-Vcl1bjD5tvvBbo7CiiP2xPLACLcBGAs/s1600/cac-cong-thuc-ha-bac.png\" /></span></p>\r\n\r\n<p><strong><em><span style=\"font-size:14px\">10. C&ocirc;ng thức t&iacute;nh theo tan(a/2)</span></em></strong></p>\r\n\r\n<p><span style=\"font-size:14px\"><img src=\"http://lh4.ggpht.com/-G2zr0rzqgqk/WVCp7MHrpRI/AAAAAAAAAEw/KD6WX7kO2pU094MMm28BTRgYHEIOtrczgCLcBGAs/s1600/bieu-dien-theo-tan-a-2.png\" /></span></p>\r\n\r\n<p><strong><em><span style=\"font-size:14px\">11. Tập nghiệm phương tr&igrave;nh lượng gi&aacute;c cơ bản</span></em></strong></p>\r\n\r\n<p><img src=\"http://lh4.ggpht.com/-pGZdDw5BGRQ/WVDFR6uKDTI/AAAAAAAAAHU/6fd-SBee1HQMKggqSzuXj94-_pj4bPQ-ACLcBGAs/s1600/nghiem-phuong-trinh-luong-giac-co-ban.png\" /></p>\r\n', '0', 1512492627, 1512492994, 'http://lh4.ggpht.com/-R2E6Kia_k40/WVDIKjhN87I/AAAAAAAAAHg/yT6Np14HOUEisrW4Zn4iBCHGZMGDnpMxwCLcBGAs/s1600/tuan-hoan.png', 1),
(168, 86, 302, 1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em><strong>C&aacute;ch t&iacute;nh mức hưởng trợ cấp thất nghiệp, bảo hiểm thất nghiệp:</strong></em></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>1. Căn cứ theo Điều 49, Luật Việc l&agrave;m 2013</strong> quy định về điều kiện được hưởng Bảo hiểm thất nghiệp th&igrave; bạn đủ điều kiện hưởng Bảo hiểm thất nghiệp. V&igrave; vậy, bạn cần đăng k&yacute; thất nghiệp tại Trung t&acirc;m dịch vụ việc l&agrave;m trong thời hạn 3 th&aacute;ng kể từ thời điểm chấm dứt hợp đồng lao động&nbsp;để được xem x&eacute;t v&agrave; giải quyết.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>2. Số th&aacute;ng hưởng Trợ cấp thất nghiệp</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Thời gian hưởng Trợ cấp thất nghiệp được t&iacute;nh theo số th&aacute;ng đ&oacute;ng Bảo hiểm thất nghiệp, cứ đ&oacute;ng đủ 12 th&aacute;ng đến 36 th&aacute;ng th&igrave; được hưởng 3 th&aacute;ng Trợ cấp thất nghiệp; sau đ&oacute; cứ đ&oacute;ng th&ecirc;m đủ 12 th&aacute;ng th&igrave; được hưởng th&ecirc;m 1 th&aacute;ng Trợ cấp thất nghiệp nhưng tối đa kh&ocirc;ng qu&aacute; 12 th&aacute;ng.&nbsp;Như vậy, bạn đ&oacute;ng Bảo hiểm thất nghiệp được 4 năm th&igrave; bạn được hưởng 4 th&aacute;ng Trợ cấp thất nghiệp.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>3. Về c&aacute;ch t&iacute;nh Trợ cấp thất nghiệp</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Theo quy định tại Điều 50 Luật Việc l&agrave;m, mức hưởng Trợ cấp thất nghiệp h&agrave;ng th&aacute;ng bằng 60% mức b&igrave;nh qu&acirc;n tiền lương th&aacute;ng đ&oacute;ng Bảo hiểm thất nghiệp của 6 th&aacute;ng liền kề trước khi thất nghiệp, nhưng tối đa kh&ocirc;ng qu&aacute; 5 lần mức lương cơ sở đối với người lao động&nbsp;thuộc đối tượng thực hiện chế độ tiền lương do Nh&agrave; nước quy định, hoặc kh&ocirc;ng qu&aacute; 5 lần mức lương tối thiểu v&ugrave;ng theo quy định của Bộ luật lao động&nbsp;đối với người lao động&nbsp;đ&oacute;ng Bảo hiểm thất nghiệp theo chế độ tiền lương do NSDLĐ quyết định tại thời điểm chấm dứt hợp đồng lao động&nbsp;hoặc hợp đồng l&agrave;m việc.</span></p>\r\n', '0', 1512494341, 1512546560, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answer_bookmark`
--

CREATE TABLE `answer_bookmark` (
  `id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answer_vote`
--

CREATE TABLE `answer_vote` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `answer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('Admin', '1', 1487308520),
('cộng tác viên', '23', 1496559600),
('cộng tác viên', '31', 1496573523),
('cộng tác viên', '32', 1496644675),
('cộng tác viên', '33', 1496650132),
('cộng tác viên', '34', 1496657812),
('cộng tác viên', '35', 1496714874),
('cộng tác viên', '37', 1496894070),
('cộng tác viên', '38', 1497152532),
('cộng tác viên', '39', 1498124180),
('cộng tác viên', '40', 1498466883),
('cộng tác viên', '43', 1498717342),
('cộng tác viên', '45', 1499408186),
('cộng tác viên', '86', 1506357004),
('cộng tác viên', '89', 1506490200);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1487308196, 1487308196),
('/admin/*', 2, NULL, NULL, NULL, 1487308192, 1487308192),
('/admin/assignment/*', 2, NULL, NULL, NULL, 1487308189, 1487308189),
('/admin/assignment/assign', 2, NULL, NULL, NULL, 1487308189, 1487308189),
('/admin/assignment/index', 2, NULL, NULL, NULL, 1487308203, 1487308203),
('/admin/assignment/revoke', 2, NULL, NULL, NULL, 1487308189, 1487308189),
('/admin/assignment/view', 2, NULL, NULL, NULL, 1487308203, 1487308203),
('/admin/default/*', 2, NULL, NULL, NULL, 1487308189, 1487308189),
('/admin/default/index', 2, NULL, NULL, NULL, 1487308189, 1487308189),
('/admin/menu/*', 2, NULL, NULL, NULL, 1487308190, 1487308190),
('/admin/menu/create', 2, NULL, NULL, NULL, 1487308190, 1487308190),
('/admin/menu/delete', 2, NULL, NULL, NULL, 1487308190, 1487308190),
('/admin/menu/index', 2, NULL, NULL, NULL, 1487308190, 1487308190),
('/admin/menu/update', 2, NULL, NULL, NULL, 1487308190, 1487308190),
('/admin/menu/view', 2, NULL, NULL, NULL, 1487308190, 1487308190),
('/admin/permission/*', 2, NULL, NULL, NULL, 1487308190, 1487308190),
('/admin/permission/assign', 2, NULL, NULL, NULL, 1487308190, 1487308190),
('/admin/permission/create', 2, NULL, NULL, NULL, 1487308190, 1487308190),
('/admin/permission/delete', 2, NULL, NULL, NULL, 1487308190, 1487308190),
('/admin/permission/index', 2, NULL, NULL, NULL, 1487308190, 1487308190),
('/admin/permission/remove', 2, NULL, NULL, NULL, 1487308190, 1487308190),
('/admin/permission/update', 2, NULL, NULL, NULL, 1487308190, 1487308190),
('/admin/permission/view', 2, NULL, NULL, NULL, 1487308190, 1487308190),
('/admin/role/*', 2, NULL, NULL, NULL, 1487308191, 1487308191),
('/admin/role/assign', 2, NULL, NULL, NULL, 1487308191, 1487308191),
('/admin/role/create', 2, NULL, NULL, NULL, 1487308190, 1487308190),
('/admin/role/delete', 2, NULL, NULL, NULL, 1487308191, 1487308191),
('/admin/role/index', 2, NULL, NULL, NULL, 1487308190, 1487308190),
('/admin/role/remove', 2, NULL, NULL, NULL, 1487308191, 1487308191),
('/admin/role/update', 2, NULL, NULL, NULL, 1487308190, 1487308190),
('/admin/role/view', 2, NULL, NULL, NULL, 1487308190, 1487308190),
('/admin/route/*', 2, NULL, NULL, NULL, 1487308191, 1487308191),
('/admin/route/assign', 2, NULL, NULL, NULL, 1487308191, 1487308191),
('/admin/route/create', 2, NULL, NULL, NULL, 1487308191, 1487308191),
('/admin/route/index', 2, NULL, NULL, NULL, 1487308191, 1487308191),
('/admin/route/refresh', 2, NULL, NULL, NULL, 1487308191, 1487308191),
('/admin/route/remove', 2, NULL, NULL, NULL, 1487308191, 1487308191),
('/admin/rule/*', 2, NULL, NULL, NULL, 1487308192, 1487308192),
('/admin/rule/create', 2, NULL, NULL, NULL, 1487308191, 1487308191),
('/admin/rule/delete', 2, NULL, NULL, NULL, 1487308192, 1487308192),
('/admin/rule/index', 2, NULL, NULL, NULL, 1487308191, 1487308191),
('/admin/rule/update', 2, NULL, NULL, NULL, 1487308191, 1487308191),
('/admin/rule/view', 2, NULL, NULL, NULL, 1487308191, 1487308191),
('/admin/user/*', 2, NULL, NULL, NULL, 1487308192, 1487308192),
('/admin/user/activate', 2, NULL, NULL, NULL, 1487308192, 1487308192),
('/admin/user/change-password', 2, NULL, NULL, NULL, 1487308192, 1487308192),
('/admin/user/delete', 2, NULL, NULL, NULL, 1487308192, 1487308192),
('/admin/user/index', 2, NULL, NULL, NULL, 1487308192, 1487308192),
('/admin/user/login', 2, NULL, NULL, NULL, 1487308192, 1487308192),
('/admin/user/logout', 2, NULL, NULL, NULL, 1487308192, 1487308192),
('/admin/user/request-password-reset', 2, NULL, NULL, NULL, 1487308192, 1487308192),
('/admin/user/reset-password', 2, NULL, NULL, NULL, 1487308192, 1487308192),
('/admin/user/signup', 2, NULL, NULL, NULL, 1487308192, 1487308192),
('/admin/user/view', 2, NULL, NULL, NULL, 1487308192, 1487308192),
('/ajax/*', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/ajax/generateslugtitle', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/ajax/search-topics-profiles', 2, NULL, NULL, NULL, 1506953455, 1506953455),
('/answers/*', 2, NULL, NULL, NULL, 1487308194, 1487308194),
('/answers/create', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/answers/delete', 2, NULL, NULL, NULL, 1487308194, 1487308194),
('/answers/index', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/answers/update', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/answers/view', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/auth/*', 2, NULL, NULL, NULL, 1487308203, 1487308203),
('/auth/default/*', 2, NULL, NULL, NULL, 1487308203, 1487308203),
('/auth/default/index', 2, NULL, NULL, NULL, 1487308203, 1487308203),
('/authassignment/*', 2, NULL, NULL, NULL, 1487308194, 1487308194),
('/authassignment/create', 2, NULL, NULL, NULL, 1487308194, 1487308194),
('/authassignment/delete', 2, NULL, NULL, NULL, 1487308194, 1487308194),
('/authassignment/index', 2, NULL, NULL, NULL, 1487308194, 1487308194),
('/authitem/*', 2, NULL, NULL, NULL, 1487308195, 1487308195),
('/authitem/create', 2, NULL, NULL, NULL, 1487308194, 1487308194),
('/authitem/delete', 2, NULL, NULL, NULL, 1487308195, 1487308195),
('/authitem/index', 2, NULL, NULL, NULL, 1487308194, 1487308194),
('/authitem/update', 2, NULL, NULL, NULL, 1487308194, 1487308194),
('/authitem/view', 2, NULL, NULL, NULL, 1487308194, 1487308194),
('/authitemchild/*', 2, NULL, NULL, NULL, 1487308194, 1487308194),
('/authitemchild/auth-item', 2, NULL, NULL, NULL, 1487308194, 1487308194),
('/authitemchild/create', 2, NULL, NULL, NULL, 1487308194, 1487308194),
('/authitemchild/delete', 2, NULL, NULL, NULL, 1487308194, 1487308194),
('/authitemchild/index', 2, NULL, NULL, NULL, 1487308194, 1487308194),
('/authitemchild/view', 2, NULL, NULL, NULL, 1487308194, 1487308194),
('/ckeditor/*', 2, NULL, NULL, NULL, 1497072992, 1497072992),
('/ckeditor/default/*', 2, NULL, NULL, NULL, 1497072995, 1497072995),
('/ckeditor/default/file-browse', 2, NULL, NULL, NULL, 1497072999, 1497072999),
('/ckeditor/default/file-upload', 2, NULL, NULL, NULL, 1497073001, 1497073001),
('/ckeditor/default/image-browse', 2, NULL, NULL, NULL, 1497072997, 1497072997),
('/ckeditor/default/image-upload', 2, NULL, NULL, NULL, 1497072998, 1497072998),
('/debug/*', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/debug/default/*', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/debug/default/db-explain', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/debug/default/download-mail', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/debug/default/index', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/debug/default/toolbar', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/debug/default/view', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/gii/*', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/gii/default/*', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/gii/default/action', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/gii/default/diff', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/gii/default/index', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/gii/default/preview', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/gii/default/view', 2, NULL, NULL, NULL, 1487308193, 1487308193),
('/gridview/*', 2, NULL, NULL, NULL, 1487308203, 1487308203),
('/gridview/export/*', 2, NULL, NULL, NULL, 1487308203, 1487308203),
('/gridview/export/download', 2, NULL, NULL, NULL, 1487308203, 1487308203),
('/questions/*', 2, NULL, NULL, NULL, 1487308139, 1487308139),
('/questions/create', 2, NULL, NULL, NULL, 1487308195, 1487308195),
('/questions/delete', 2, NULL, NULL, NULL, 1487308195, 1487308195),
('/questions/index', 2, NULL, NULL, NULL, 1487308195, 1487308195),
('/questions/update', 2, NULL, NULL, NULL, 1487308195, 1487308195),
('/questions/view', 2, NULL, NULL, NULL, 1487308195, 1487308195),
('/site/*', 2, NULL, NULL, NULL, 1487308196, 1487308196),
('/site/captcha', 2, NULL, NULL, NULL, 1487308195, 1487308195),
('/site/error', 2, NULL, NULL, NULL, 1487308195, 1487308195),
('/site/index', 2, NULL, NULL, NULL, 1487308195, 1487308195),
('/site/login', 2, NULL, NULL, NULL, 1487308195, 1487308195),
('/site/logout', 2, NULL, NULL, NULL, 1487308196, 1487308196),
('/user/*', 2, NULL, NULL, NULL, 1487308196, 1487308196),
('/user/create', 2, NULL, NULL, NULL, 1487308196, 1487308196),
('/user/delete', 2, NULL, NULL, NULL, 1487308196, 1487308196),
('/user/index', 2, NULL, NULL, NULL, 1487308196, 1487308196),
('/user/update', 2, NULL, NULL, NULL, 1487308196, 1487308196),
('/user/view', 2, NULL, NULL, NULL, 1487308196, 1487308196),
('Admin', 2, 'can do anything', NULL, NULL, 1487308447, 1487308469),
('cộng tác viên', 2, 'parner of system.', NULL, NULL, 1496486104, 1496486104),
('manage', 2, 'manage system', NULL, NULL, 1496486038, 1496486038);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Admin', '/*'),
('Admin', '/admin/*'),
('Admin', '/admin/assignment/*'),
('Admin', '/admin/assignment/assign'),
('Admin', '/admin/assignment/index'),
('Admin', '/admin/assignment/revoke'),
('Admin', '/admin/assignment/view'),
('Admin', '/admin/default/*'),
('Admin', '/admin/default/index'),
('Admin', '/admin/menu/*'),
('Admin', '/admin/menu/create'),
('Admin', '/admin/menu/delete'),
('Admin', '/admin/menu/index'),
('Admin', '/admin/menu/update'),
('Admin', '/admin/menu/view'),
('Admin', '/admin/permission/*'),
('Admin', '/admin/permission/assign'),
('Admin', '/admin/permission/create'),
('Admin', '/admin/permission/delete'),
('Admin', '/admin/permission/index'),
('Admin', '/admin/permission/remove'),
('Admin', '/admin/permission/update'),
('Admin', '/admin/permission/view'),
('Admin', '/admin/role/*'),
('Admin', '/admin/role/assign'),
('Admin', '/admin/role/create'),
('Admin', '/admin/role/delete'),
('Admin', '/admin/role/index'),
('Admin', '/admin/role/remove'),
('Admin', '/admin/role/update'),
('Admin', '/admin/role/view'),
('Admin', '/admin/route/*'),
('Admin', '/admin/route/assign'),
('Admin', '/admin/route/create'),
('Admin', '/admin/route/index'),
('Admin', '/admin/route/refresh'),
('Admin', '/admin/route/remove'),
('Admin', '/admin/rule/*'),
('Admin', '/admin/rule/create'),
('Admin', '/admin/rule/delete'),
('Admin', '/admin/rule/index'),
('Admin', '/admin/rule/update'),
('Admin', '/admin/rule/view'),
('Admin', '/admin/user/*'),
('Admin', '/admin/user/activate'),
('Admin', '/admin/user/change-password'),
('Admin', '/admin/user/delete'),
('Admin', '/admin/user/index'),
('Admin', '/admin/user/login'),
('cộng tác viên', '/admin/user/login'),
('manage', '/admin/user/login'),
('Admin', '/admin/user/logout'),
('Admin', '/admin/user/request-password-reset'),
('Admin', '/admin/user/reset-password'),
('Admin', '/admin/user/signup'),
('Admin', '/admin/user/view'),
('Admin', '/ajax/*'),
('cộng tác viên', '/ajax/*'),
('Admin', '/ajax/generateslugtitle'),
('Admin', '/ajax/search-topics-profiles'),
('Admin', '/answers/*'),
('cộng tác viên', '/answers/*'),
('Admin', '/answers/create'),
('cộng tác viên', '/answers/create'),
('Admin', '/answers/delete'),
('Admin', '/answers/index'),
('cộng tác viên', '/answers/index'),
('Admin', '/answers/update'),
('Admin', '/answers/view'),
('Admin', '/auth/*'),
('Admin', '/auth/default/*'),
('Admin', '/auth/default/index'),
('Admin', '/authassignment/*'),
('Admin', '/authassignment/create'),
('Admin', '/authassignment/delete'),
('Admin', '/authassignment/index'),
('Admin', '/authitem/*'),
('Admin', '/authitem/create'),
('Admin', '/authitem/delete'),
('Admin', '/authitem/index'),
('Admin', '/authitem/update'),
('Admin', '/authitem/view'),
('Admin', '/authitemchild/*'),
('Admin', '/authitemchild/auth-item'),
('Admin', '/authitemchild/create'),
('Admin', '/authitemchild/delete'),
('Admin', '/authitemchild/index'),
('Admin', '/authitemchild/view'),
('cộng tác viên', '/ckeditor/*'),
('Admin', '/debug/*'),
('Admin', '/debug/default/*'),
('Admin', '/debug/default/db-explain'),
('Admin', '/debug/default/download-mail'),
('Admin', '/debug/default/index'),
('Admin', '/debug/default/toolbar'),
('Admin', '/debug/default/view'),
('Admin', '/gii/*'),
('Admin', '/gii/default/*'),
('Admin', '/gii/default/action'),
('Admin', '/gii/default/diff'),
('Admin', '/gii/default/index'),
('Admin', '/gii/default/preview'),
('Admin', '/gii/default/view'),
('Admin', '/gridview/*'),
('Admin', '/gridview/export/*'),
('Admin', '/gridview/export/download'),
('Admin', '/questions/*'),
('Admin', '/questions/create'),
('cộng tác viên', '/questions/create'),
('Admin', '/questions/delete'),
('Admin', '/questions/index'),
('cộng tác viên', '/questions/index'),
('Admin', '/questions/update'),
('cộng tác viên', '/questions/update'),
('Admin', '/questions/view'),
('cộng tác viên', '/questions/view'),
('Admin', '/site/*'),
('cộng tác viên', '/site/*'),
('Admin', '/site/captcha'),
('Admin', '/site/error'),
('Admin', '/site/index'),
('Admin', '/site/login'),
('cộng tác viên', '/site/login'),
('manage', '/site/login'),
('Admin', '/site/logout'),
('Admin', '/user/*'),
('Admin', '/user/create'),
('Admin', '/user/delete'),
('Admin', '/user/index'),
('Admin', '/user/update'),
('Admin', '/user/view'),
('Admin', 'cộng tác viên'),
('Admin', 'manage');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bookmarked_answers`
--

CREATE TABLE `bookmarked_answers` (
  `id` int(11) NOT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `comment_parent_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL COMMENT 'is của cau hoi , hoac cau tra loi',
  `create_time` int(11) NOT NULL,
  `update_time` varchar(45) DEFAULT NULL,
  `comment_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `comment`, `comment_parent_id`, `user_id`, `post_id`, `create_time`, `update_time`, `comment_type`) VALUES
(5, '63 tỉnh thành', NULL, 45, 249, 1499965460, '1499965460', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_answer`
--

CREATE TABLE `comment_answer` (
  `id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_question`
--

CREATE TABLE `comment_question` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `question_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `creadential_other`
--

CREATE TABLE `creadential_other` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `describe_an_experience` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `credential_education`
--

CREATE TABLE `credential_education` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `school` int(11) DEFAULT NULL,
  `concentration` varchar(255) DEFAULT NULL,
  `secondary_concentration` varchar(255) DEFAULT NULL,
  `degree_type` varchar(255) DEFAULT NULL,
  `graduation_year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `credential_education`
--

INSERT INTO `credential_education` (`id`, `user_id`, `school`, `concentration`, `secondary_concentration`, `degree_type`, `graduation_year`) VALUES
(5, 16, 68, '69', NULL, 'Cử nhân cao đẳng', 2012),
(6, 38, 72, '73', NULL, 'Cử nhân', 2014),
(7, 23, 68, '69', NULL, 'Cử nhân cao đẳng', 2012),
(8, 37, 77, '78', NULL, '', 2017);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `credential_employment`
--

CREATE TABLE `credential_employment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `start_year` date DEFAULT NULL,
  `end_year` date DEFAULT NULL,
  `i_current_work_here` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `credential_employment`
--

INSERT INTO `credential_employment` (`id`, `user_id`, `position`, `company`, `start_year`, `end_year`, `i_current_work_here`) VALUES
(3, 16, 'PHP developer', '67', '0000-00-00', '0000-00-00', 1),
(4, 38, 'Kế toán thuế', '71', '0000-00-00', '0000-00-00', 1),
(5, 23, 'Lập trình viên PHP', '76', '0000-00-00', '0000-00-00', 0),
(6, 37, 'Nhân viên', '67', '0000-00-00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `credential_location`
--

CREATE TABLE `credential_location` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `start_year` date DEFAULT NULL,
  `end_year` date DEFAULT NULL,
  `i_current_live_here` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `credential_location`
--

INSERT INTO `credential_location` (`id`, `user_id`, `location`, `start_year`, `end_year`, `i_current_live_here`) VALUES
(2, 16, '70', '0000-00-00', '0000-00-00', 1),
(3, 38, '74', '0000-00-00', '0000-00-00', 1),
(4, 23, '75', '0000-00-00', '0000-00-00', 1),
(5, 37, '79', '0000-00-00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `index_topic_question`
--

CREATE TABLE `index_topic_question` (
  `id` int(11) NOT NULL,
  `id_topic` int(11) DEFAULT NULL,
  `id_question` int(11) DEFAULT NULL,
  `create_times` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `knows_about`
--

CREATE TABLE `knows_about` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `knows_about`
--

INSERT INTO `knows_about` (`id`, `user_id`, `topic_id`) VALUES
(1, 12, 18),
(2, 12, 1),
(3, 15, 18),
(4, 15, 2),
(5, 15, 4),
(6, 16, 19),
(7, 20, 1),
(8, 20, 2),
(9, 20, 3),
(10, 20, 45),
(11, 20, 5),
(12, 23, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `log_message` tinytext,
  `create_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m130524_201442_init', 1487304972),
('m140506_102106_rbac_init', 1487305015),
('m140602_111327_create_menu_table', 1487304999),
('m160312_050000_create_user', 1487304999),
('m170311_153803_insert_topic', 1489247841);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_anonymous` int(11) DEFAULT '0',
  `body` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `follow_total` int(11) DEFAULT NULL,
  `comment_total` int(11) DEFAULT NULL,
  `upvote_total` int(11) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL COMMENT '0',
  `slug` varchar(500) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(45) DEFAULT NULL,
  `images` varchar(255) NOT NULL,
  `social_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `social_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `social_images` varchar(255) NOT NULL,
  `censor_flag` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`id`, `title`, `user_id`, `is_anonymous`, `body`, `follow_total`, `comment_total`, `upvote_total`, `views`, `status`, `slug`, `create_time`, `update_time`, `images`, `social_title`, `social_description`, `social_images`, `censor_flag`) VALUES
(186, 'Đâu là một quan niệm sai lầm nhất về cuộc sống?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'dau-la-mot-quan-niem-sai-lam-nhat-ve-cuoc-song', 1494999191, 1495004950, '', '', '', '', 1),
(188, 'Một vài điều cool nhất mà phi công đã nói với hành khách là gì?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'mot-vai-dieu-cool-nhat-ma-phi-cong-da-noi-voi-hanh-khach-la-gi', 1495022157, 1495022194, '', '', '', '', 1),
(189, 'Điều mà những người giàu có nhất thế giới tiếc nuối?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'dieu-ma-nhung-nguoi-giau-co-nhat-the-gioi-tiec-nuoi', 1495215065, 1495215118, '', '', '', '', 1),
(190, 'Đâu là những bí quyết hay để đầu tư và tiết kiệm kiệm tiền bạc?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'dau-la-nhung-bi-quyet-hay-de-dau-tu-va-tiet-kiem-kiem-tien-bac', 1495254015, 1495254035, '', '', '', '', 1),
(193, 'Một trong những điều tuyệt vời nhất khi làm việc tại Google?', 31, 0, '', NULL, NULL, NULL, 0, 1, 'mot-trong-nhung-dieu-tuyet-voi-nhat-khi-lam-viec-tai-google', 1496576039, 1496667424, '', 'Một trong những điều tuyệt vời nhất khi làm việc tại Google?', 'Khi tôi đề cập đến lợi ích này cho vợ tôi, cô ấy đã khóc. Cô ấy thực sự đã khóc rằng công ty sẽ làm điều đó cho cô ấy nếu có chuyện gì xảy ra với tôi.Điều tốt nhất là gì? Cho đến nay, cô ấy đã chưa đầu độc tôi khi nào. Hẳn là yêu tôi lắm !', 'mot-trong-nhung-dieu-tuyet-voi-nhat-khi-lam-viec-tai-google_1496667216.png', 1),
(196, 'Phép thuật nào là mạnh nhất từng được thực hiện trong bộ truyện Harry Potter?', 31, 0, '', NULL, NULL, NULL, 0, 1, 'phep-thuat-nao-la-manh-nhat-tung-duoc-thuc-hien-trong-bo-truyen-harry-potter', 1496843726, 1496844003, '', 'Phép thuật nào là mạnh nhất từng được thực hiện trong bộ truyện Harry Potter?', 'Hầu hết các câu trả lời ở trên thật đáng thất vọng.Điều này được NHẮC ĐI NHẮC LẠI, cả trực tiếp lẫn gián tiếp, bởi Rowling. Không gì có thể so sánh được!', 'phep-thuat-nao-la-manh-nhat-tung-duoc-thuc-hien-trong-bo-truyen-harry-potter_1496844003.jpg', 1),
(198, 'Những người thường cố gắng \"cày cuốc\" ở trường cấp ba và đại học thường sẽ đạt được gì về sau này?', 31, 0, '', NULL, NULL, NULL, 0, 1, 'nhung-nguoi-thuong-co-gang-cay-cuoc-o-truong-cap-ba-va-dai-hoc-thuong-se-dat-duoc-gi-ve-sau-nay', 1496915853, 1496916304, '', 'Những người thường cố gắng \"cày cuốc\" ở trường cấp ba và đại học thường sẽ đạt được gì về sau này?', 'Harvard và các trường đại học danh tiếng khác thực ra thích kiếm những học sinh không phải \"cày\" tới mức đó để thành công. Nếu bạn học 20 phút một ngày và được toàn điểm A, và bạn biết cách dùng thời gian rảnh hiệu quả, đó là những gì mà các trường top ưu tiên.', 'nhung-nguoi-thuong-co-gang-cay-cuoc-o-truong-cap-ba-va-dai-hoc-thuong-se-dat-duoc-gi-ve-sau-nay_1496916304.jpg', 1),
(199, 'Điều tồi tệ nhất mà bạn có thể gây ra cho người khiếm thị là gì?', 31, 0, '', NULL, NULL, NULL, 0, 1, 'dieu-toi-te-nhat-ma-ban-co-the-gay-ra-cho-nguoi-khiem-thi-la-gi', 1496988910, 1496989374, '', 'Điều tồi tệ nhất mà bạn có thể gây ra cho người khiếm thị là gì?', 'Rất nhiều người đã lên mặt, kênh kiệu với anh ấy như thể đôi mắt khiếm thị sẽ ảnh hưởng đến trí tuệ vậy. Một điều nữa làm tổn thương tôi là khi mọi người cứ hỏi rằng tại sao lại cưới anh ta khi mà bạn có thể tiến đến với những người tốt hơn.', 'dieu-toi-te-nhat-ma-ban-co-the-gay-ra-cho-nguoi-khiem-thi-la-gi_1496989374.jpg', 1),
(201, 'Những điều chưa biết về Leonardo DiCaorio?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'nhung-dieu-chua-biet-ve-leonardo-dicaorio', 1497072775, 1497072826, '', '', '', '', 1),
(202, 'Cách chơi Yasuo đi top / mid như thế nào ?', 37, 0, '', NULL, NULL, NULL, 0, 1, 'cach-choi-yasuo-di-top-mid-nhu-the-nao', 1497079096, 1497167712, '', 'Cách chơi Yasuo đi top / mid như thế nào ?', 'Yasuo  là một tướng được yêu thích nhất nhì trong trò chơi Liên Minh Huyền Thoại về độ cơ động, sát thương cao cũng như những kỹ năng đầy ma mị của anh chàng mang phong cách lãng tử ', 'cach-choi-yasuo-di-top-mid-nhu-the-nao_1497167712.jpg', 1),
(203, 'Làm sao để chơi Lee Sin một cách tốt nhất?', 37, 0, '', NULL, NULL, NULL, 0, 1, 'lam-sao-de-choi-lee-sin-mot-cach-tot-nhat', 1497355007, 1497355007, '', '', '', '', 1),
(204, 'Kiến thức nào có thể cứu sống bạn một ngày nào đó? ', 16, 0, '', NULL, NULL, NULL, 0, 1, 'kien-thuc-nao-co-the-cuu-song-ban-mot-ngay-nao-do', 1497361151, 1497362219, '', 'Kiến thức nào có thể cứu sống bạn một ngày nào đó?', 'Nếu có người đang đe doạ bạn với dao hoặc súng, bạn có thẻ nghĩ rằng chống cự hoặc bỏ chạy là một lựa chọn tồi, nhất là khi đối tượng đi đông người. Tuy nhiên nếu chúng nói với bạn là hãy đi theo chúng, thì cơ hội để bạn có thể nhìn thấy gia đình một lần nữa đó là không nghe theo điều đó. ', 'kien-thuc-nao-co-the-cuu-song-ban-mot-ngay-nao-do_1497362219.jpg', 1),
(206, 'Phải làm sao khi nhận quyết định kiểm tra thuế thanh tra 10 năm ?', 38, 0, '', NULL, NULL, NULL, 0, 1, 'phai-lam-sao-khi-nhan-quyet-dinh-kiem-tra-thue-thanh-tra-10-nam', 1497367156, 1497367908, '', '', '', '', 1),
(207, 'Làm sao để chỉnh độ sáng - tối cho màn hình máy tính để bàn ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'lam-sao-de-chinh-do-sang-toi-cho-man-hinh-may-tinh-de-ban', 1497413378, 1497540158, '', '', '', '', 1),
(208, 'Ý nghĩa của từ concept là gì ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'y-nghia-cua-tu-concept-la-gi', 1497413612, 1497540169, '', '', '', '', 1),
(209, 'Chứng từ kế toán nên ghép và lưu trữ như thế nào cho hợp lý?', 38, 0, '', NULL, NULL, NULL, 0, 1, 'chung-tu-ke-toan-nen-ghep-va-luu-tru-nhu-the-nao-cho-hop-ly', 1497452292, 1497452292, '', '', '', '', 1),
(210, 'Xin hướng dẫn cách combo Riven nhanh ?', 37, 0, '', NULL, NULL, NULL, 0, 1, 'xin-huong-dan-cach-combo-riven-nhanh', 1497454811, 1497497159, '', '', '', '', 1),
(212, 'Xin hỏi nghĩa của từ nigga là gì ?', 23, 0, '', NULL, NULL, NULL, 0, 1, 'xin-hoi-nghia-cua-tu-nigga-la-gi', 1497532855, 1497540183, '', '', '', '', 1),
(213, 'Công thức tính bán kính đường tròn ngoại tiếp tam giác là gì ?', 23, 0, '', NULL, NULL, NULL, 0, 1, 'cong-thuc-tinh-ban-kinh-duong-tron-ngoai-tiep-tam-giac-la-gi', 1497533199, 1497540190, '', '', '', '', 1),
(214, 'Nghĩa của từ First Name là gì ?', 23, 0, '', NULL, NULL, NULL, 0, 1, 'nghia-cua-tu-first-name-la-gi', 1497534380, 1497540196, '', '', '', '', 1),
(215, 'Xin hỏi công thức tính diện tích tam giác như thế nào ?', 23, 0, '', NULL, NULL, NULL, 0, 1, 'xin-hoi-cong-thuc-tinh-dien-tich-tam-giac-nhu-the-nao', 1497539508, 1497540203, '', '', '', '', 1),
(216, 'Hồ sơ hoàn thuế đối với hàng hóa dịch vụ xuất khẩu cần gì ?', 38, 0, '', NULL, NULL, NULL, 0, 1, 'ho-so-hoan-thue-doi-voi-hang-hoa-dich-vu-xuat-khau-can-gi', 1497714249, 1497887418, '', 'Hồ sơ hoàn thuế đối với hàng hóa dịch vụ xuất khẩu cần gì ?', 'Hiện nay có nhiêu doanh nghiệp trong nước khi thực hiện kê khai thuế, hoàn thuế nhưng chưa nắm chắc được điều kiện được hoàn thuế và thủ tục hoàn thuế bởi vì từ ngày 1/7/2016, các doanh nghiệp kinh doanh nội địa “chỉ được khấu trừ thuế GTGT đầu vào, mà không được hoàn thuế”.Bài viết này sẽ cung cấp cho các bạn nội dung các điều kiện, hướng dẫn lập thủ tục, các căn cứ pháp lý (đối với những bạn cần hiểu sâu và nghiên cứu chuyên sâu hơn).', 'ho-so-hoan-thue-doi-voi-hang-hoa-dich-vu-xuat-khau-can-gi_1497887418.jpg', 1),
(217, 'Mức đóng và hạch toán thuế môn bài năm 2017 chi tiết như thế nào?', 38, 0, '', NULL, NULL, NULL, 0, 1, 'muc-dong-va-hach-toan-thue-mon-bai-nam-2017-chi-tiet-nhu-the-nao', 1498021166, 1498021166, '', '', '', '', 1),
(219, 'Tại sao có ngày nhuận?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'tai-sao-co-ngay-nhuan', 1498052203, 1498083596, '', '', '', '', 1),
(220, 'Cách tính diện tích hình tròn như thế nào ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'cach-tinh-dien-tich-hinh-tron-nhu-the-nao', 1498052284, 1498083606, '', '', '', '', 1),
(221, 'friendzone là gì vậy mọi người ?', 23, 0, '', NULL, NULL, NULL, 0, 1, 'friendzone-la-gi-vay-moi-nguoi', 1498056154, 1498083614, '', '', '', '', 1),
(222, 'Điều gì sẽ xảy ra nếu như lấy của cải của 1% dân số giàu nhất thế giới chia cho 99% còn lại ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'dieu-gi-se-xay-ra-neu-nhu-lay-cua-cai-cua-1-dan-so-giau-nhat-the-gioi-chia-cho-99-con-lai', 1498086013, 1498091550, '', 'Điều gì sẽ xảy ra nếu như lấy của cải của 1% dân số giàu nhất thế giới chia cho 99% còn lại ?', '', 'dieu-gi-se-xay-ra-neu-nhu-lay-cua-cai-cua-1-dan-so-giau-nhat-the-gioi-chia-cho-99-con-lai_1498091550.jpg', 1),
(243, 'Ma có thật hay không ?', 31, 0, '', NULL, NULL, NULL, 0, 1, 'ma-co-that-hay-khong', 1498668911, 1498668911, '', '', '', '', 1),
(244, 'Cách tính phần trăm như thế nào nhanh và chính xác nhất ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'cach-tinh-phan-tram-nhu-the-nao-nhanh-va-chinh-xac-nhat', 1498672228, 1501993621, '', '', '', '', 1),
(245, 'Thời gian mang thai của chó bao lâu ?', 42, 0, '', NULL, NULL, NULL, 0, 1, 'thoi-gian-mang-thai-cua-cho-bao-lau', 1498703076, 1498704769, '', '', '', '', 1),
(246, 'Deep web nguy hiểm như thế nào ?', 23, 0, '', NULL, NULL, NULL, 0, 1, 'deep-web-nguy-hiem-nhu-the-nao', 1498703551, 1498703765, '', '', '', '', 1),
(247, 'Tra cứu mã số thuế cá nhân như thế nào ?', 23, 0, '', NULL, NULL, NULL, 0, 1, 'tra-cuu-ma-so-thue-ca-nhan-nhu-the-nao', 1498703649, 1498703734, '', '', '', '', 1),
(248, 'Bệnh care ở chó & cách chữa bệnh care ở chó hiệu quả ?', 23, 0, '', NULL, NULL, NULL, 0, 1, 'benh-care-o-cho-cach-chua-benh-care-o-cho-hieu-qua', 1498706192, 1499152941, '', 'Bệnh care ở chó & cách chữa bệnh care ở chó hiệu quả ?', ' Khi chó mắc Carevirus việc điều trị thành công rất khó khăn,nó liên quan đến sức đề kháng của các giống chó. Nhưng để hiệu quả cao nhất cần thực hiện theo nguyên tắc điều trị sau.', 'benh-care-o-cho-cach-chua-benh-care-o-cho-hieu-qua_1499152894.jpg', 1),
(249, 'Việt nam có bao nhiêu tỉnh thành tất cả ?', 22, 0, '', NULL, NULL, NULL, 0, 1, 'viet-nam-co-bao-nhieu-tinh-thanh-tat-ca', 1498706705, 1498709184, '', '', '', '', 1),
(250, 'Chi phí thưởng  tết dương lịch hàng năm  được tính chi phí hợp lý công ty thì hồ sơ cần những gì?', 38, 0, '<p>Chi ph&iacute; thưởng &nbsp;tết dương lịch h&agrave;ng năm &nbsp;được t&iacute;nh chi ph&iacute; hợp l&yacute; c&ocirc;ng ty th&igrave; hồ sơ cần những g&igrave;?</p>\r\n', NULL, NULL, NULL, 0, 1, 'chi-phi-thuong-tet-duong-lich-hang-nam-duoc-tinh-chi-phi-hop-ly-cong-ty-thi-ho-so-can-nhung-gi', 1498741912, 1498741912, '', '', '', '', 1),
(251, 'Chó nhà em được 2 tháng tuổi, hôm nay tự nhiên lại thấy nó nằm im , người cứ run lên, không chịu ăn gì , chỉ uống nước xong lại nôn ra , rồi đi tiểu đậm nhưng không đi ngoài được. Triệu chứng của nó như thế là bị sao vậy ạ ? ', 16, 0, '', NULL, NULL, NULL, 0, 1, 'cho-nha-em-duoc-2-thang-tuoi-hom-nay-tu-nhien-lai-thay-no-nam-im-nguoi-cu-run-len-khong-chiu-an-gi-chi-uong-nuoc-xong-lai-non-ra-roi-di-tieu-dam-nhung-khong-di-ngoai-duoc-trieu-chung-cua-no-nhu-the-la-bi-sao-vay-a', 1498925269, 1498925992, '', '', '', '', 1),
(252, 'Cho em hỏi mèo nhà em uể oải, chán ăn, lông xù có phải dấu hiệu bị mắc bệnh không ạ? ', 31, 0, '<p>H&ocirc;m trước n&oacute; c&oacute; đi chơi cả ng&agrave;y tr&ecirc;n tầng thượng l&uacute;c trời nắng to, h&nbsp;em phải l&agrave;m g&igrave; ạ?</p>\r\n', NULL, NULL, NULL, 0, 1, 'cho-em-hoi-meo-nha-em-ue-oai-chan-an-long-xu-co-phai-dau-hieu-bi-mac-benh-khong-a', 1498927262, 1498927262, '', '', '', '', 1),
(253, 'Mèo vừa thiến xong khoảng lúc 10h sáng cho hỏi khoảng bao nhiêu lâu thì mèo mới tỉnh ạ ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'meo-vua-thien-xong-khoang-luc-10h-sang-cho-hoi-khoang-bao-nhieu-lau-thi-meo-moi-tinh-a', 1498927346, 1498927555, '', '', '', '', 1),
(254, 'Mèo bỏ ăn, nôn ra nước màu vàng và đi phân lỏng, người ủ rũ vậy là bị bệnh gì và chữa như thế nào ạ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'meo-bo-an-non-ra-nuoc-mau-vang-va-di-phan-long-nguoi-u-ru-vay-la-bi-benh-gi-va-chua-nhu-the-nao-a', 1498927443, 1499253349, '', 'Mèo bỏ ăn, nôn ra nước màu vàng và đi phân lỏng, người ủ rũ vậy là bị bệnh gì và chữa như thế nào ạ?', 'Dr Thành : Mèo nhà bạn có các triệu chứng của bệnh viêm ruột tiêu chảy. Bạn cần xem lại lịch vaccin để loại trừ bệnh giảm bạch cầu, xem lại lịch tẩy giun và chế độ ăn uống gần đây.', 'meo-bo-an-non-ra-nuoc-mau-vang-va-di-phan-long-nguoi-u-ru-vay-la-bi-benh-gi-va-chua-nhu-the-nao-a_1499253349.jpg', 1),
(256, 'Chó làm biếng ăn và bỏ ăn là bị gì ?', 16, 0, '<p>L&uacute;c nhỏ c&uacute;n nh&agrave; em&nbsp;ăn nhiều lắm. Sau khoảng thời gian gần đ&acirc;y th&igrave; b&eacute; l&agrave;m biếng ăn v&agrave; bỏ ăn. B&eacute; chỉ uống nước v&agrave; ra ngo&agrave;i tự k&iacute;m xương ăn th&ocirc;i. B&eacute; vẫn khỏe mạnh v&agrave; lanh lợi . Triệu chứng như vậy th&igrave; c&uacute;n nh&agrave; em bị g&igrave; vậy ạ&nbsp;</p>\r\n', NULL, NULL, NULL, 0, 1, 'cho-lam-bieng-an-va-bo-an-la-bi-gi', 1498929105, 1498929175, '', '', '', '', 1),
(257, 'Cách kiếm được nhiều tiền năm 2017 ?', 44, 0, '', NULL, NULL, NULL, 0, 1, 'cach-kiem-duoc-nhieu-tien-nam-2017', 1498964053, 1498991812, '', '', '', '', 1),
(258, 'đi du lịch có gì vui?', 9, 0, '', NULL, NULL, NULL, 0, 1, 'di-du-lich-co-gi-vui', 1498965366, 1498991825, '', '', '', '', 1),
(259, 'Kimochi trong tiếng Nhật có nghĩa là gì vậy mọi người ? ', 16, 0, '', NULL, NULL, NULL, 0, 1, 'kimochi-trong-tieng-nhat-co-nghia-la-gi-vay-moi-nguoi', 1498991699, 1498991836, '', '', '', '', 1),
(260, '1 hải lý thì bằng bao nhiêu Km ?', 16, 0, '', NULL, NULL, NULL, 0, 1, '1-hai-ly-thi-bang-bao-nhieu-km', 1498991981, 1498992769, '', '', '', '', 1),
(261, 'Diện tích tam giác cân tính như thế nào ạ ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'dien-tich-tam-giac-can-tinh-nhu-the-nao-a', 1498992142, 1498992754, '', '', '', '', 1),
(262, 'Lịch tẩy giun trên chó sao cho hiệu quả ?', 42, 0, '', NULL, NULL, NULL, 0, 1, 'lich-tay-giun-tren-cho-sao-cho-hieu-qua', 1498993668, 1499065679, '', '', '', '', 1),
(263, 'Lịch tiêm phòng vaccin trên chó như thế nào ?', 42, 0, '', NULL, NULL, NULL, 0, 1, 'lich-tiem-phong-vaccin-tren-cho-nhu-the-nao', 1498993723, 1507258991, '', 'Lịch tiêm phòng vaccin trên chó như thế nào ?', '', 'lich-tiem-phong-vaccin-tren-cho-nhu-the-nao_1507258991.jpg', 1),
(264, 'Những bệnh nào trên chó lây sang người ?', 42, 0, '', NULL, NULL, NULL, 0, 1, 'nhung-benh-nao-tren-cho-lay-sang-nguoi', 1498993790, 1507258562, '', 'Những bệnh nào trên chó lây sang người ?', '', 'nhung-benh-nao-tren-cho-lay-sang-nguoi_1507258562.jpg', 1),
(265, 'Mèo ăn thức ăn hạt công nghiệp có tốt không?', 42, 0, '', NULL, NULL, NULL, 0, 1, 'meo-an-thuc-an-hat-cong-nghiep-co-tot-khong', 1498993867, 1501215579, '', 'Mèo ăn thức ăn hạt công nghiệp có tốt không?', 'Nếu quá lạm dụng thức ăn này sẽ gây độc cho gan và thận của mèo, khó đào thải nên sẽ tích tụ lại trong gan.', 'meo-an-thuc-an-hat-cong-nghiep-co-tot-khong_1501215579.jpg', 1),
(268, 'Xin hỏi công thức tính công suất?', 31, 0, '', NULL, NULL, NULL, 0, 1, 'xin-hoi-cong-thuc-tinh-cong-suat', 1499452172, 1499452172, '', '', '', '', 1),
(270, 'Xin hỏi công thức tính diện tích hình tròn và công thức tính chu vi hình tròn chính xác nhất ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'xin-hoi-cong-thuc-tinh-dien-tich-hinh-tron-va-cong-thuc-tinh-chu-vi-hinh-tron-chinh-xac-nhat', 1499872267, 1500008251, '', '', '', '', 1),
(271, 'P/s viết tắt của chữ gì và có nghĩa gì ạ ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'p-s-viet-tat-cua-chu-gi-va-co-nghia-gi-a', 1499874265, 1500029769, '', '', '', '', 1),
(273, 'Xin hỏi cách tính diện tích hình bình hành ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'xin-hoi-cach-tinh-dien-tich-hinh-binh-hanh', 1499874429, 1500029768, '', '', '', '', 1),
(274, 'Mình thấy mọi người hay chat sml, cho hỏi Sml là gì ạ ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'minh-thay-moi-nguoi-hay-chat-sml-cho-hoi-sml-la-gi-a', 1499874528, 1500029767, '', '', '', '', 1),
(275, 'Tỷ giá hối đoái là gì ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'ty-gia-hoi-doai-la-gi', 1499874837, 1500029723, '', '', '', '', 1),
(276, 'Trong kế toán từ công nợ là gì ạ ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'trong-ke-toan-tu-cong-no-la-gi-a', 1499874887, 1500029775, '', '', '', '', 1),
(277, 'Ai giải thích dùm mình nghĩa của từ FAQ là gì ạ ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'ai-giai-thich-dum-minh-nghia-cua-tu-faq-la-gi-a', 1499874993, 1500029776, '', '', '', '', 1),
(278, 'Quy chế tài chính công ty TNHH có những điều khoản như thế nào?', 38, 0, '', NULL, NULL, NULL, 0, 1, 'quy-che-tai-chinh-cong-ty-tnhh-co-nhung-dieu-khoan-nhu-the-nao', 1499910914, 1500029779, '', '', '', '', 1),
(279, 'Bệnh Parvovirus ở chó có gây ảnh hưởng đến các chỉ tiêu sinh lý, sinh hoá máu không? Nếu có thì ảnh hưởng như thế nào? Tại sao?', 45, 0, NULL, NULL, NULL, NULL, 0, 1, 'benh-parvovirus-o-cho-co-gay-anh-huong-den-cac-chi-tieu-sinh-ly-sinh-hoa-mau-khong-neu-co-thi-anh-huong-nhu-the-nao-tai-sao', 1499964754, 1501215459, '', '', '', '', 1),
(280, 'Cách thử độc dại khi bị chó cắn như nào?', 43, 0, NULL, NULL, NULL, NULL, 0, 1, 'cach-thu-doc-dai-khi-bi-cho-can-nhu-nao', 1499964964, 1501124076, '', '', '', '', 1),
(281, 'Cách kiểm tra tốc độ đánh máy ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'cach-kiem-tra-toc-do-danh-may', 1500693584, 1501215460, '', '', '', '', 1),
(282, 'Những kỹ năng mà mọi người nên biết là gì?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'nhung-ky-nang-ma-moi-nguoi-nen-biet-la-gi', 1500694294, 1501167498, '', 'Những kỹ năng mà mọi người nên biết là gì?', 'Đây là một mẹo rất hữu ích nếu như bạn thực sự muốn đánh máy nhanh !', 'nhung-ky-nang-ma-moi-nguoi-nen-biet-la-gi_1501167183.png', 1),
(283, 'Khi mổ đẻ chó mèo nên mổ ở đâu?', 43, 0, NULL, NULL, NULL, NULL, 0, 1, 'khi-mo-de-cho-meo-nen-mo-o-dau', 1501005770, 1501123402, '', '', '', '', 1),
(284, 'Làm sao để đổi hình nền của slide trong Power Point ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'lam-sao-de-doi-hinh-nen-cua-slide-trong-power-point', 1501235006, 1501249131, '', '', '', '', 1),
(285, 'Xin hỏi công thức lượng giác như thế nào ạ ?', 23, 0, '', NULL, NULL, NULL, 0, 1, 'xin-hoi-cong-thuc-luong-giac-nhu-the-nao-a', 1501235249, 1501246070, '', '', '', '', 1),
(286, 'Cách đánh số trang trong Word thì làm thế nào ạ ?', 23, 0, 'Mình muốn đánh số trang co dạng 1/200 (đánh số trang trên tổng số trang) trong word 2010 thì làm thế nào ạ?', NULL, NULL, NULL, 0, 1, 'cach-danh-so-trang-trong-word-thi-lam-the-nao-a', 1501235501, 1501246070, '', '', '', '', 1),
(287, 'Mình hẹn giờ tắt máy mà không được, mọi người giúp với ạ ?', 23, 0, 'Chẳng hạn em muốn hẹn 10 phút\nrun => shutdow -s-t600 => Ok nhưng mà không được .', NULL, NULL, NULL, 0, 1, 'minh-hen-gio-tat-may-ma-khong-duoc-moi-nguoi-giup-voi-a', 1501235650, 1501246069, '', '', '', '', 1),
(288, 'Crush là gì ?', 23, 0, '', NULL, NULL, NULL, 0, 1, 'crush-la-gi', 1501235865, 1501246069, '', '', '', '', 1),
(289, 'Hỏi về nghĩa của từ thả thính?', 23, 0, 'Mình thấy dân trên mạng nói \"thả thính\" nhưng mình ko hiểu chữ đó, ai biết xin giải thích giùm\n', NULL, NULL, NULL, 0, 1, 'hoi-ve-nghia-cua-tu-tha-thinh', 1501236081, 1501246068, '', '', '', '', 1),
(290, 'Cho mình hỏi cách nén và giải nén file ?', 23, 0, '', NULL, NULL, NULL, 0, 1, 'cho-minh-hoi-cach-nen-va-giai-nen-file', 1501236307, 1501246067, '', '', '', '', 1),
(291, 'Nếu một cô gái không thích bạn ngay từ đầu, có đáng để “đấu tranh” vì cô ấy không ? \"Không bao giờ bỏ cuộc dễ dàng\" ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'neu-mot-co-gai-khong-thich-ban-ngay-tu-dau-co-dang-de-dau-tranh-vi-co-ay-khong-khong-bao-gio-bo-cuoc-de-dang', 1501569160, 1501642639, '', '', '', '', 1),
(292, 'Liệu tôi có hối hận nếu không có con khi về già?', 16, 0, '<p>T&ocirc;i 35 tuổi v&agrave; đang cố quyết định xem c&oacute; n&ecirc;n đ&ocirc;ng lạnh trứng của m&igrave;nh hay kh&ocirc;ng. T&ocirc;i đ&atilde; kết h&ocirc;n v&agrave; c&oacute; vẻ như ch&uacute;ng t&ocirc;i kh&ocirc;ng hề muốn c&oacute; con. Đ&ocirc;i l&uacute;c t&ocirc;i tự hỏi liệu t&ocirc;i c&oacute; hối tiếc về việc đấy. T&ocirc;i thực sự lo lắng rằng ng&agrave;y n&agrave;o đ&oacute; m&igrave;nh sẽ sống c&ocirc; đơn. D&ugrave; sao th&igrave; l&iacute; do ấy cũng chưa đủ để c&oacute; một đứa con. Liệu bạn c&oacute; tiếc kh&ocirc;ng?</p>\r\n', NULL, NULL, NULL, 0, 1, 'lieu-toi-co-hoi-han-neu-khong-co-con-khi-ve-gia', 1501569263, 1501759861, '', 'Liệu tôi có hối hận nếu không có con khi về già?', '', 'lieu-toi-co-hoi-han-neu-khong-co-con-khi-ve-gia_1501759861.jpg', 1),
(293, 'Gia đình có thật sự quan trọng đến vậy không? ', 16, 0, '', NULL, NULL, NULL, 0, 1, 'gia-dinh-co-that-su-quan-trong-den-vay-khong', 1501642164, 1501642812, '', 'Gia đình có thật sự quan trọng đến vậy không?', 'Thời gian sẽ dạy cho bạn thấy. Tôi gặp một cô gái. Cô và tôi thành bạn bè. Rồi người yêu của nhau. Rồi vừa là người yêu vừa là người bạn thân nhất. Tôi đã từng nghĩ mình sẽ cưới em một ngày nào đó...', 'gia-dinh-co-that-su-quan-trong-den-vay-khong_1501642662.jpg', 1),
(294, 'Oppa nghĩa là gì ạ ?', 60, 0, '<p>M&igrave;nh thấy c&aacute;c bạn nữ hay n&oacute;i từ Oppa, từ n&agrave;y c&oacute; nghĩa l&agrave; g&igrave; vậy nhỉ ?</p>\r\n', NULL, NULL, NULL, 0, 1, 'oppa-nghia-la-gi-a', 1502347663, 1502347770, '', '', '', '', 1),
(295, 'BFF là viết tắt của từ nào, có nghĩa là gì ạ ?', 60, 0, '', NULL, NULL, NULL, 0, 1, 'bff-la-viet-tat-cua-tu-nao-co-nghia-la-gi-a', 1502347928, 1502348294, '', '', '', '', 1),
(296, 'Mọi người cho em hỏi 1 ha bằng bao nhiêu m2 ?', 60, 0, '', NULL, NULL, NULL, 0, 1, 'moi-nguoi-cho-em-hoi-1-ha-bang-bao-nhieu-m2', 1502348007, 1502348294, '', '', '', '', 1),
(297, 'Câu chúc ngủ ngon tiếng nhật là gì , được đọc viết như thế nào ạ ?', 60, 0, '', NULL, NULL, NULL, 0, 1, 'cau-chuc-ngu-ngon-tieng-nhat-la-gi-duoc-doc-viet-nhu-the-nao-a', 1502348065, 1502348293, '', '', '', '', 1),
(298, 'Nếu số liệu trong báo cáo tài chính thay đổi thì kế toán phải làm gì', 38, 0, '<p>Nếu số liệu trong b&aacute;o c&aacute;o t&agrave;i ch&iacute;nh thay đổi th&igrave; kế to&aacute;n phải l&agrave;m g&igrave;</p>\r\n', NULL, NULL, NULL, 0, 1, 'neu-so-lieu-trong-bao-cao-tai-chinh-thay-doi-thi-ke-toan-phai-lam-gi', 1502374379, 1502378719, '', '', '', '', 1),
(299, 'Xin hỏi muốn nộp thuế qua mạng phải làm như thế nào ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'xin-hoi-muon-nop-thue-qua-mang-phai-lam-nhu-the-nao', 1502473722, 1502505405, '', '', '', '', 1),
(300, 'Xin hướng dẫn cách tra cứu mã số thuế cá nhân qua mạng ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'xin-huong-dan-cach-tra-cuu-ma-so-thue-ca-nhan-qua-mang', 1502473912, 1502505405, '', '', '', '', 1),
(301, 'Xin hỏi cách tính thuế thu nhập doanh nghiệp theo quy định nhà nước năm 2017 ?', 23, 0, '', NULL, NULL, NULL, 0, 1, 'xin-hoi-cach-tinh-thue-thu-nhap-doanh-nghiep-theo-quy-dinh-nha-nuoc-nam-2017', 1502474858, 1502505403, '', '', '', '', 1),
(302, 'Cách tính mức hưởng trợ cấp thật nghiệp, bảo hiểm thất nghiệp như thế nào ?', 23, 0, '', NULL, NULL, NULL, 0, 1, 'cach-tinh-muc-huong-tro-cap-that-nghiep-bao-hiem-that-nghiep-nhu-the-nao', 1502476118, 1502505403, '', '', '', '', 1),
(303, 'Xin hỏi cách tính thuế thu nhập cá nhân mới nhất ?', 23, 0, '', NULL, NULL, NULL, 0, 1, 'xin-hoi-cach-tinh-thue-thu-nhap-ca-nhan-moi-nhat', 1502476198, 1502505402, '', '', '', '', 1),
(304, 'Cách đăng ký mã số thuế cá nhân qua mạng như thế nào ?', 23, 0, '', NULL, NULL, NULL, 0, 1, 'cach-dang-ky-ma-so-thue-ca-nhan-qua-mang-nhu-the-nao', 1502476330, 1502505401, '', '', '', '', 1),
(305, 'Chế độ thai sản 2017 bao gồm những nội dung nào ?', 23, 0, '<p>Cho m&igrave;nh hỏi những nội dung về chế độ thai sản mới nhất 2017 gồm những nội dung n&agrave;o như : Điều kiện , thời gian hưởng chế độ thai sản v&agrave; thủ tục để c&oacute; thể hưởng chế độ thai sản 2017</p>\r\n', NULL, NULL, NULL, 0, 1, 'che-do-thai-san-2017-bao-gom-nhung-noi-dung-nao', 1502476655, 1502505401, '', '', '', '', 1),
(306, 'Xin hỏi chi tiết luật bảo hiểm xã hội mới nhất 2017 ?', 23, 0, '', NULL, NULL, NULL, 0, 1, 'xin-hoi-chi-tiet-luat-bao-hiem-xa-hoi-moi-nhat-2017', 1502477061, 1502505401, '', '', '', '', 1),
(307, 'Ai có thể giúp mình các phím tắt trong excel với ạ ', 60, 0, '', NULL, NULL, NULL, 0, 1, 'ai-co-the-giup-minh-cac-phim-tat-trong-excel-voi-a', 1502477229, 1502505402, '', '', '', '', 1),
(308, 'Thủ tục thông báo phát hành hóa đơn lần đầu với cơ quan thuế như thế nào ?', 60, 0, '', NULL, NULL, NULL, 0, 1, 'thu-tuc-thong-bao-phat-hanh-hoa-don-lan-dau-voi-co-quan-thue-nhu-the-nao', 1502477304, 1502505399, '', '', '', '', 1),
(309, 'Luật thuế thu nhập doanh nghiệp gồm những gì ?', 60, 0, '', NULL, NULL, NULL, 0, 1, 'luat-thue-thu-nhap-doanh-nghiep-gom-nhung-gi', 1502477381, 1502505400, '', '', '', '', 1),
(310, 'Các bậc thuế môn bài mới nhất ?', 60, 0, 'Các mức thuế môn bài áp dụng cho các hộ kinh doanh cá thể và doanh nghiệp 2017 như thế nào ạ', NULL, NULL, NULL, 0, 1, 'cac-bac-thue-mon-bai-moi-nhat', 1502477627, 1502505399, '', '', '', '', 1),
(311, 'Cách hoạch toán chiết khấu thanh toán như thế nào ?', 60, 0, '', NULL, NULL, NULL, 0, 1, 'cach-hoach-toan-chiet-khau-thanh-toan-nhu-the-nao', 1502477904, 1502505399, '', '', '', '', 1),
(312, 'Phân loại các bệnh truyền lây giữa người và động vật?', 43, 0, NULL, NULL, NULL, NULL, 0, 1, 'phan-loai-cac-benh-truyen-lay-giua-nguoi-va-dong-vat', 1502797851, 1502803793, '', '', '', '', 1),
(315, 'Encode là gì?', 16, 0, 'Mình thấy mấy bạn chỉnh sửa video hay nói từ Encode video, các bạn cho mình hỏi encode video là gì ạ ?', NULL, NULL, NULL, 0, 1, 'encode-la-gi', 1502936587, 1502943998, '', '', '', '', 1),
(316, 'Cách làm auto vaccine khi có dịch PED xảy ra?', 43, 0, NULL, NULL, NULL, NULL, 0, 1, 'cach-lam-auto-vaccine-khi-co-dich-ped-xay-ra', 1504245660, 1505795433, '', '', '', '', 1),
(317, 'Xin hỏi ( Postal code ) mã bưu chính 63 tỉnh thành Việt Nam mới nhất ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'xin-hoi-postal-code-ma-buu-chinh-63-tinh-thanh-viet-nam-moi-nhat', 1504757745, 1505373397, '', 'Postal code  Việt Nam , mã bưu chính 63 tỉnh thành cập nhật mới nhất ', '', '', 1),
(318, 'URL là gì ? Cách tối ưu thẻ url trong seo', 16, 0, '', NULL, NULL, NULL, 0, 1, 'url-la-gi-cach-toi-uu-the-url-trong-seo', 1505208270, 1505308839, '', '', '', '', 1),
(319, 'Hickey là gì ? Ai có thể cho mình biết thông tin về trào lưu Hickey này với', 60, 0, '', NULL, NULL, NULL, 0, 1, 'hickey-la-gi-ai-co-the-cho-minh-biet-thong-tin-ve-trao-luu-hickey-nay-voi', 1506948247, 1506948644, '', '', '', '', 1),
(320, '0126 là mạng nào vậy mọi người ?', 60, 0, '', NULL, NULL, NULL, 0, 1, '0126-la-mang-nao-vay-moi-nguoi', 1506948363, 1506948643, '', '', '', '', 1),
(321, 'Chúc ngủ ngon trong tiếng Hàn là gì ?', 60, 0, '<p>&nbsp;Xin hỏi những c&acirc;u ch&uacute;c trước khi ngủ ngon bằng tiếng H&agrave;n hay v&agrave;&nbsp;&yacute; nghĩa.</p>\r\n', NULL, NULL, NULL, 0, 1, 'chuc-ngu-ngon-trong-tieng-han-la-gi', 1506948462, 1506948591, '', '', '', '', 1),
(322, 'Giờ làm việc của ngân hàng Vietcombank  các ngày trong tuần và thứ 7 như thế nào ạ ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'gio-lam-viec-cua-ngan-hang-vietcombank-cac-ngay-trong-tuan-va-thu-7-nhu-the-nao-a', 1506948768, 1506948908, '', '', '', '', 1),
(323, 'Giờ ngọ là mấy giờ ?', 60, 0, '<p>Coi phim m&igrave;nh hay thấy nhắc đến giờ Ngọ, xin hỏi giờ Ngọ l&agrave; mấy giờ vậy mọi người ?</p>\r\n', NULL, NULL, NULL, 0, 1, 'gio-ngo-la-may-gio', 1506948865, 1506948959, '', '', '', '', 1),
(324, 'Noel ngày mấy, Giáng sinh là ngày bao nhiêu ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'noel-ngay-may-giang-sinh-la-ngay-bao-nhieu', 1506949304, 1506949972, '', '', '', '', 1),
(325, 'Làm sao để biết Người yêu cũ vần còn cảm giác với mình ?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'lam-sao-de-biet-nguoi-yeu-cu-van-con-cam-giac-voi-minh', 1506949451, 1507175531, '', 'Làm sao để biết Người yêu cũ vần còn cảm giác với mình ?', '', 'lam-sao-de-biet-nguoi-yeu-cu-van-con-cam-giac-voi-minh_1507175531.jpg', 1),
(326, 'Xin hướng dẫn mình cách đổi hình nên trên máy tính với ạ ?', 60, 0, '', NULL, NULL, NULL, 0, 1, 'xin-huong-dan-minh-cach-doi-hinh-nen-tren-may-tinh-voi-a', 1506949560, 1506949971, '', '', '', '', 1),
(327, 'cv là gì? tạo một cv cần có những thông tin gì?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'cv-la-gi-tao-mot-cv-can-co-nhung-thong-tin-gi', 1507187255, 1507201929, '', '', '', '', 1),
(328, 'Xin cho mình thông tin về loài chó Rottweiler và giá bao nhiêu một chú chó Rottweiler?', 16, 0, '', NULL, NULL, NULL, 0, 1, 'xin-cho-minh-thong-tin-ve-loai-cho-rottweiler-va-gia-bao-nhieu-mot-chu-cho-rottweiler', 1507187505, 1507201928, '', '', '', '', 1),
(329, 'Cách tính tỷ lệ lợi nhuận gộp như thế nào?', 1, 0, '', NULL, NULL, NULL, 0, 1, 'cach-tinh-ty-le-loi-nhuan-gop-nhu-the-nao', 1508773353, 1508773435, '', '', '', '', 1),
(330, 'Làm sao để tính được Vốn lưu động ?', 1, 0, '', NULL, NULL, NULL, 0, 1, 'lam-sao-de-tinh-duoc-von-luu-dong', 1508773496, 1508773728, '', '', '', '', 1),
(331, 'Hướng dẫn cách mở bluetooth trên laptop ?', 1, 0, '', NULL, NULL, NULL, 0, 1, 'huong-dan-cach-mo-bluetooth-tren-laptop', 1508773722, 1508773730, '', '', '', '', 1),
(332, 'Xin chào tiếng Nhật nói như thế nào ?', 1, 0, '', NULL, NULL, NULL, 0, 1, 'xin-chao-tieng-nhat-noi-nhu-the-nao', 1508773930, 1511052765, '', '', '', '', 1),
(333, 'CEO là gì ? Ý nghĩa của từ CEO là gì ?', 1, 0, '', NULL, NULL, NULL, 0, 1, 'ceo-la-gi-y-nghia-cua-tu-ceo-la-gi', 1511052696, 1511052767, '', '', '', '', 1),
(334, '1 inch bằng bao nhiêu cm, m (mét), mm ?', 1, 0, '', NULL, NULL, NULL, 0, 1, '1-inch-bang-bao-nhieu-cm-m-met-mm', 1511052804, 1511052954, '', '', '', '', 1),
(335, 'Email là gì ? cách đăng ký Gmail như thế nào ?', 1, 0, '', NULL, NULL, NULL, 0, 1, 'email-la-gi-cach-dang-ky-gmail-nhu-the-nao', 1511052856, 1511052954, '', '', '', '', 1),
(336, 'Noel ( giáng sinh ) là ngày bao nhiêu ? ', 1, 0, '', NULL, NULL, NULL, 0, 1, 'noel-giang-sinh-la-ngay-bao-nhieu', 1511052931, 1511052954, '', '', '', '', 1),
(337, 'Đến Phú Quốc nên đi đâu ? xin hỏi kinh nghiệm du lịch Phú Quốc ạ ?', 1, 0, '', NULL, NULL, NULL, 0, 1, 'den-phu-quoc-nen-di-dau-xin-hoi-kinh-nghiem-du-lich-phu-quoc-a', 1511053823, 1511053823, '', '', '', '', 0),
(338, 'Xin vui lòng cho e ý kiến?\n', 114, 0, NULL, NULL, NULL, NULL, 0, 1, 'xin-vui-long-cho-e-y-kien', 1511754521, 1511754521, '', '', '', '', 0),
(339, 'e mới vào làm công ty quảng cáo nhưng còn thiếu kinh nghiệm, sếp giao nhiệm vụ cho e phải kiếm được cô người mẫu tóc siêu siêu đẹp để làm quảng cáo dầu gội và đưa ảnh mẫu cho e xem,ổng bắt e phải kiếm 1 người nào đó tóc đẹp giống như vậy.......dù kiều kiệ', 114, 0, NULL, NULL, NULL, NULL, 0, 1, 'e-moi-vao-lam-cong-ty-quang-cao-nhung-con-thieu-kinh-nghiem-sep-giao-nhiem-vu-cho-e-phai-kiem-duoc-co-nguoi-mau-toc-sieu-sieu-dep-de-lam-quang-cao-dau-goi-va-dua-anh-mau-cho-e-xem-ong-bat-e-phai-kiem-1-nguoi-nao-do-toc-dep-giong-nhu-vay-du-kieu-kien-hoi-cao-nhung-em-van-dang-len-tren-cac-trang-web-tim-viec-lam-nhung-nhung-nguoi-dang-ky-thi-toc-ho-khong-dat-yeu-cau-trong-khi-do-e-ra-ngoai-thay-may-co-cong-nhan-thi-toc-ho-dep-va-phu-hop-voi-yeu-cau-sep-dua-ra-lam-nhung-e-la-con-trai-voi-lai-khong-', 1511754616, 1511754616, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `question_follow`
--

CREATE TABLE `question_follow` (
  `id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `question_topic`
--

CREATE TABLE `question_topic` (
  `id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `create_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `question_vote`
--

CREATE TABLE `question_vote` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `value` tinyint(4) DEFAULT NULL COMMENT '1 upvote, 2downvote, null or 0 not vote'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `session`
--

CREATE TABLE `session` (
  `id` char(40) NOT NULL,
  `expire` int(11) DEFAULT NULL,
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `session`
--

INSERT INTO `session` (`id`, `expire`, `data`) VALUES
('019f7r9b7h2kkhnnau5m7vhj66', 1504974759, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a37323b),
('01uf596pc7fukktc1o3mirjeo1', 1496646999, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33323b),
('03gsdrgn4ig09tlfp0d45gt8m6', 1496476694, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('03jain2e3fi7lb5lh1kevh1k23', 1496811928, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('052v6dmq8sb8iap2sdtut2q9t1', 1504246995, ''),
('057ebp19n2pvan1oandnjv03u0', 1503462062, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('06gake80o913css4gadli8r806', 1496557426, ''),
('0bi8b0bfg3a7qtg8aks6o2jhv0', 1502422985, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('0bn6i2qgupr6nskfpbmubjgf91', 1505731637, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('0cfig0qkavptqu7bs8mo6mnt71', 1499697198, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31313a222f616e73776572732f3732223b),
('0d7gun5c2krvoojp3q0jnt1i13', 1502383528, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('0foue9vkp9n748u2k3l9er7j74', 1499482838, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31383a222f616e73776572732f7265706c792f323536223b),
('0gp79pc7ekebsb8t2na1ra6j14', 1501902175, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a35343b),
('0h51rpqkt29f48j0vk95c0dge0', 1496051655, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('0h7e1pvnlatjepfu45bgtairh5', 1503207334, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a34333b),
('0hagcmhae1ghtnul56t9m5gkl3', 1508497615, 0x5f5f666c6173687c613a303a7b7d),
('0iovgt0hn0vuse39rprtbcoaj5', 1495551341, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('0jkd2tq57jlnc1o7g64ei6g864', 1496577722, ''),
('0k1gpsue4n8un5uvoskq7plcq3', 1501212114, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('0lb6k201i8itcnljdi2eupd0f0', 1510987167, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('0lgncmpm6ta252tt5ktp5s9dn0', 1499966926, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34353b),
('0mrie99d3dphuotjinlsn1okl1', 1508476081, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a39383b),
('0ngaspomj8nfn6orqfelgv5m23', 1502946570, ''),
('0nkh210esen5v57ikth72803e5', 1499616617, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a32313a222f616e73776572732f616e73776572627975736572223b),
('0p2hopan959j9p5vu68eoabeu7', 1501134536, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('0pndp4kf0fuuoh505gpqa2c5h1', 1495523606, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('0rbfagn2r1m58n4u4pce4u9te6', 1508320172, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('0rfs4ir2p9m9a7kfhnb14l0v17', 1498975395, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a393b),
('0ru171lm47ui0g4c9v71da0s06', 1505338351, 0x5f5f666c6173687c613a303a7b7d),
('0tpoqkpdj4o9fs06pgu7bf7ps6', 1502880205, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('0uk04afne4jp155rl6inn34221', 1498907927, 0x5f5f666c6173687c613a303a7b7d),
('0vnb97djlkkca3iqfgad4kbl20', 1502208473, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('10ckmrmunanqutmrb1ga0eqth7', 1500219587, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('10eirg5r8701nmcknoggl9tmh3', 1500028453, 0x5f5f666c6173687c613a303a7b7d),
('10f7v3j1hhmpl6mt2cos3jr6i7', 1508988744, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('1220q0l2p3c5gckn5k6km91v55', 1497738920, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('127lrg5bmmra2jrn7ol9am5o06', 1501007609, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('13qrv6k85ckap7t9uucmh7a4a2', 1498710708, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('18g2i1eiung73ismkbfip37jb0', 1505313473, 0x5f5f666c6173687c613a303a7b7d),
('18ujqcl29bug5kcq5kj74d6an5', 1495255710, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('1a150qnonjm12nqq8246hflc64', 1495576248, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('1a2no1v5sk088nbsa8dq2qqni7', 1509971179, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3130323b),
('1aikj7ku7h498jgafric3qpdr3', 1500003566, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('1coei10gmt1i8t6qp4hf5en836', 1507178255, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a36313b),
('1d5evko2u6nem02mhia8kjupk3', 1500093702, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('1dqb69h4qu45u5m1crr9dq5631', 1496668397, ''),
('1fiod5qi12gqrluosni4v4b4i1', 1499367564, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('1flfkchioa5lgemcqmqeot8lh6', 1512186434, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('1h6vuc48gp9qbqmqeq023smo04', 1506359462, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('1ib47p97v42rrjqlvekvcrl0n6', 1497192174, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33383b),
('1k0sjm23nnj8gk8aoh941v2f07', 1510234917, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('1kkikl46rn05kkcvskljjqcqb3', 1501490381, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('1l6b0h1s31b3jis4nmjafel110', 1496596727, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('1mi651m16j7ut1u7sm5n59bhl3', 1501668342, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('1mqg7rhtl8omm0oc5248vfrqu3', 1497171076, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('1mu1h6lg5lj6piliaejsnatmf5', 1507032372, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('1oa1jrdk62nkel4e04uu6mns46', 1497498798, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('1oushnfdu82kv2mm7o83m2hm84', 1510748129, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3130363b),
('1pfjlvpgu2snv6bphob6c7o560', 1500351586, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('1po4l044ilp53df8ldfdnkckt6', 1507058978, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('1q0ckmo2tsjbdjmpvsfo9modg3', 1504246994, ''),
('1rb74upq8al79ullb7v48innk2', 1512300324, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3131383b),
('1rv6irbh0d5dptkjju1g1n2e55', 1498664336, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('1s2hl1kd9rivvv01u50ohvhlm3', 1496857719, ''),
('1snpmnssdtmlanneh13em4nof3', 1498708487, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('1svqkirjln11o8ohit9br6ipk3', 1498162551, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('20dad0d995lf0a81tumoa6l3a2', 1496674682, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33353b),
('210d76e4jf507qvmv7voi6d8j1', 1501643991, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('22feft5ppchnulhcccs1h8jgm0', 1507860176, 0x5f5f666c6173687c613a303a7b7d),
('23e7okk2t6n5fck79v0oorki17', 1501780132, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a35303b),
('24ospn7rrc464fncngfneah4h1', 1497935284, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('24uclci08f9ts9o13i6lcur5n3', 1501000568, ''),
('29gjquglucdp4srk57157nrde5', 1506049187, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('29pftsl1vo2007t2mkrp854gm2', 1497535821, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('29rneaohtqft8ftdepdg193465', 1498124851, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33393b),
('2b9f6o53uqfknovs9oq1rc5171', 1503670914, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('2doqhnkf2cr1vromcpiuc63o41', 1507392011, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('2e6s4gl054d7q16lu76ddsrgi5', 1508268016, 0x5f5f666c6173687c613a303a7b7d),
('2eisj7v5rp4sn2brsn66gc4067', 1499876437, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('2f79f3hocb2t6g6a2nbogavbt5', 1503124792, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('2g3opm8c5pgq35njsacbr5rfe2', 1505731451, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('2kqjat4ct00eacpabdv81204n6', 1501377055, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('2l7aoucauosdcths31f57bhch5', 1502437752, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('2lghpk5s5l1aqo5suhf0v18ue6', 1501346837, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('2m35k9hpgm711pf28atupb31h3', 1498713433, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34303b),
('2n7r0lof0buq1926da03u461b1', 1500408815, 0x5f5f666c6173687c613a303a7b7d),
('2nkekrsvsatpc5ikjrhi5p3m55', 1504742261, 0x5f5f666c6173687c613a303a7b7d),
('2obbb2l4kh2tujlqhh8e8l8304', 1500482189, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('2pa7ohnf0rlplsms0r2dbtqqa2', 1511858227, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('2qfrs1eaehsrgd39d80gg94oe7', 1508469401, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a39373b),
('2rj0buhunllpds7o4ucusobl95', 1509404743, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('2ruknmgcarn36ft07klocmre97', 1507532010, ''),
('2tr8gnt4ji23qrjmif63gamfr0', 1502430877, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a36313b),
('2u30o00rf67mtjv64u6tsi03s4', 1502645865, ''),
('2uorlogklkm6i1e76du1sgcv72', 1503643580, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a37323b),
('2vgj1qsmap08lmsubpt416fmf5', 1501691706, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('301m4faobgs7036aifivjg9tk7', 1500375404, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('30mtqco0qeq17oqikhh0s19dn1', 1507095391, ''),
('32muapl007e21ik8vmgm1eb0r7', 1502858213, ''),
('360iqqahl11g9lb4ihqv4hb3t2', 1498670517, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('36kgv38ot3eb64pvetns1n8mn3', 1498994209, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('36n3tdbh0j7go3i6nng40kf035', 1503420516, ''),
('36ufdiu8bio129hbvpn6l0n8l2', 1502858203, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('37dn960m28rn5t4040v3htif00', 1502647773, ''),
('38gmb9mjj96tmo9l02leh32gp5', 1502127328, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('3al8apnbsdbt5gtih7vqls3c11', 1508135276, 0x5f5f666c6173687c613a303a7b7d),
('3bt6hpdmt1g2vcfgfinme8dd86', 1505310611, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('3cnpobk8nfs3ukgp77f2hg47l6', 1501511194, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('3cu9ka9gff7cs4igskpdopjbh4', 1508479947, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('3drfvrn9qohr70ag5b25l630d1', 1496604331, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('3e2v016qc16dcthemhqskaeb17', 1502591613, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('3fmu18logq7v52qtcpsi0frqo0', 1505213855, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('3g186b5ch23s473mlnk9hjb0a5', 1503160125, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a36383b),
('3h2ht98nmhrjup14v4vp714io0', 1509902114, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('3heub8vhhsi68e066uqejkep64', 1507397921, 0x5f5f666c6173687c613a303a7b7d),
('3ik2qveus535n93kh8uvi03du0', 1502475222, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('3jlddu5eqdvm5aeu20p6vbk4i4', 1495080420, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('3jven07r8djkihrn8l0dlc35l3', 1499102689, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('3kgq1mr3dtq0geqnnvf6pta5t3', 1496810541, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('3njp6dct56nosicljn0g1310v7', 1507722318, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a39313b),
('3o57ris072m60q9nb8cm0b6ci7', 1497084013, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('3oq2068lvg836k7qbl7srl9rb6', 1506707476, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('3r89fd1adii7j1ql0uho3o4tb2', 1506059895, 0x5f5f666c6173687c613a303a7b7d),
('3rf0622q067pf70tfagajctm04', 1508859792, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('3rlt0eog128bsp31s4c8fap3f2', 1502420091, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('3rs8454tnl5ld1itmson0jm4c4', 1499966455, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('3udtrqhscv909baa45nlr63o16', 1498094463, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('3ugs1nhkaj2qmluulolv0he300', 1499536099, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('3vh3n3pk4mbtg14vmosj8llcg1', 1505926602, ''),
('3vl4ij9co8se43f2vmopndv796', 1502387963, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('412akvf23humigknd89rfrmcg6', 1506359311, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('41uou96f99jpfr1k4n7mgnqk33', 1507905570, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a39353b),
('4295eifmjh39ecfsljkqmc6nu6', 1496719430, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33353b),
('42sd2v1036th6jkasmdnh41ia0', 1507062076, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('43g43ik3jne6hu55vdacot4pd5', 1503207250, ''),
('44up4cc6u7c5a75boqqck99i00', 1498262062, ''),
('45brbcl83c3dqjp85nb59lf3u6', 1496992138, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('4650pc2hforigahlm3u8drcob5', 1506487496, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38373b),
('47jcra70cth4jo8pb4e848ae83', 1499059516, ''),
('47usl38bn1thvak6g6nh7519d7', 1502858218, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('485hcomhb1jhpi0rf739h5vt70', 1503070195, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('48635tuack9rqm45djgs415uk5', 1502512171, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('48nssc0vsae42rbho3d3tdqfh7', 1502858211, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('4907qgshm5jtojo545lvndao44', 1506366974, 0x5f5f666c6173687c613a303a7b7d),
('494v1nvlmj2t3m9pr0el8tsok3', 1497540949, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('4978hnpbslaehu46h327h302e6', 1502696658, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a36353b),
('4988tof4cprfif1fmcs481irt4', 1507815207, ''),
('4b3s86h77fvil6m528jd3d17i0', 1502647773, ''),
('4b5uja6fn2ceksiqmd9e0r2at6', 1498053644, ''),
('4ckk7d1per9tdef50idnpebor6', 1507090587, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('4d6obhl7kprvnb6al4r3kg82f2', 1500698727, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('4dak756ofur06bc52vqbfp1of2', 1496423592, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('4f8e20o71fv9evul72gl5qaec2', 1502387216, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('4fsg1h5vq416ucntg0c14f2r16', 1501003674, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('4ga6os6gd1raieqim2u7i5s9d3', 1496208342, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32373b),
('4gceor9sn08k4if13tn6ca0a67', 1507592473, 0x5f5f666c6173687c613a303a7b7d),
('4hd28jfb1jf7k5fa1qpecfig21', 1498700037, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31303a222f616e73776572732f37223b),
('4hr4an9cq67obctrsvf52kd3p4', 1511618534, 0x5f5f666c6173687c613a303a7b7d),
('4hu30hu2ugmiq4k1hcf5rivgp2', 1498807029, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34303b),
('4io8neufvh39pb0acisoblim21', 1510284831, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('4lmgpl8tvopjphptl1fs4ftk25', 1501302927, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('4p8korskutqr3clnqv9dqbnis5', 1498993594, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('4qr20ggjcqi8o77d22p8pem3u1', 1506625179, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('4r3ajkvup3mgvfpl6ofr0548f2', 1496641051, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('4rg18uk74344u7rskeajrv49f1', 1511925064, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('4sejbh0dr68964pv410fvluba3', 1498700546, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('4sen0fdq19mb6drse63hdpiph1', 1500531722, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('4smj67cf62b9gs1oo6k57ftl85', 1501995071, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('4uq4evmi68dstuasomqvf8ra92', 1503498172, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('4vrr4sn44ola77ae5r6jpniap7', 1507032367, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('509gji0i46f2krie3jgpv6c2o6', 1499915725, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('50fop8vad8425s66cno50gvas5', 1502514090, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('50h0tivafsmrdhtmntch4doke5', 1502858223, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('513opeioimtlag9gm19prgud75', 1505917350, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32363b),
('528e1u0h97egm4aqhfque7gl57', 1502356583, 0x5f5f666c6173687c613a303a7b7d),
('52bg205c51cc9g14ba363rnmf1', 1508384537, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a39363b),
('52lp8c6ojbscn05teo6637rh21', 1511344213, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('53akevkon2hui56k9peku4pdr4', 1506361482, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('53f9s2lr7mf0vlftrsivv9k600', 1506500648, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('54n38s02emh6l69f3mo96gnmn2', 1501312413, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34353b),
('55m4o52ljtiolc9no2dinldtc3', 1504683300, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('5707ao51om2ga3agantrjr4la3', 1505086469, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('5939ch6phgn0clvbhvbnf1gdu6', 1506506077, 0x5f5f666c6173687c613a303a7b7d),
('594llrun2r06ens68tbt9l6391', 1496578710, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('59lpmabia68lmddubli9nosq25', 1500471448, ''),
('5b5k70h55cga95ttbe7vvc1r87', 1496855400, ''),
('5bn8b2nf3vnk8ct2gask0rq0u3', 1498958829, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('5d5tvjoilmv1mufgf4aoh33373', 1511718826, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3131323b),
('5egjhgo80rkv6b45056phib086', 1511925080, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('5g97t91tnl152i8o120duvpqj7', 1506689089, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('5gr5vthbq5t4ufkm1qakc5pnk2', 1505410621, ''),
('5gufhpeq4a1njt2q2a61ph0oa3', 1498967176, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34343b),
('5hivpc79sliuk2b98lbnskmo82', 1512494435, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('5hk84ekis87bhh98lp7jcbgr77', 1499053102, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('5j452ioehss4cqpvpjhcptik90', 1503420518, ''),
('5klsa6i16i9a2phdu98epcbft4', 1497364492, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('5m31ns4vrlg3jfj086j9mhhu43', 1506311399, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('5mc38n88isr6rr17a5lv7547m4', 1496810231, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33363b),
('5mj9idv9tgau7he503rtd4lo42', 1502351843, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('5oqtqv115tcfvk40q5tsf27jh0', 1509157095, 0x5f5f666c6173687c613a303a7b7d),
('5p5qt5gh86068ljo5a0tg0nti6', 1497967419, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('5pe0p84tts9v2m2mb9pguh8de7', 1499155221, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('5q8uolb4pm4chg8rah1i14mmr6', 1503424793, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('5qq5gujl1m9c20f7sj1venc362', 1500025489, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('5s3qggrmchg5sejpk212puuj02', 1496576082, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('5sqltv2309gfkhbocj5u8ug521', 1505230207, 0x5f5f666c6173687c613a303a7b7d),
('5uaqoqj5t8reuu6a6rkjvod7i6', 1497363132, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('5v7ksf4484hvr8ib715skskse4', 1501258418, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31343a222f616e73776572732f696e646578223b),
('60447vhojp3vhm69p562udea72', 1496796017, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33343b),
('60f2ft6oh0b116dejv9hqfjsu0', 1501260270, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('62gjj6d16e4tdh83s580aj0ji6', 1502169011, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a35373b),
('63sg0j8qarlk046kd9gd4potb3', 1505182959, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38303b),
('644ovsh5j4g8kruq8ighuma7u5', 1506361434, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('64fa5ea3aj87ajup9hdmmsqoi2', 1501995231, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('669t8ccj27m8uvn9eguafe4sh0', 1500134109, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('67ghu9uq9sl3huje84mk8p0vp2', 1501212097, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('67lcd9m2gouas76ep1i3rovfi2', 1498381090, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('68uqfl168gmjqdmo7l2200i7j1', 1497411611, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('69c3haa190sjafk6i8jo7df640', 1496650947, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33323b),
('6a05r12tkr9kmot0sbprehp643', 1495080320, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('6aaqn6rmhpuo61ao9ugn6jbbg1', 1496896466, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33373b),
('6atnf09fk3ruqn0tt15m5bh5m7', 1497525290, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('6b8ukm9lkqaag0kv34b8ihr6p3', 1496631870, ''),
('6bkli577nfpnopvi96kjnn3ji6', 1499866604, ''),
('6c931knppts3v1d8drgq8t8h45', 1507399451, ''),
('6calb8a3n42hl5rbii22qkuc81', 1509835217, 0x5f5f666c6173687c613a303a7b7d),
('6cbg1ej8um48u53gmed5bi6ii6', 1498852368, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('6cn0namm7opqqmcqhifj2vtei1', 1497541645, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('6cpv56rvmmouojafq3avlh4mm6', 1505209761, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('6dcseu99ul9dvtii9nhimsqhb6', 1502479345, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a36303b),
('6dno1flqjok8gai0lip2nd6it3', 1506420212, ''),
('6el9kfrhstc1run9skhnl9h4f3', 1506493769, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('6euia949n6st66qr5t90qdh5b0', 1495080400, 0x5f5f666c6173687c613a303a7b7d),
('6hvdfke7unk22nq4p5u1k3ev77', 1506593550, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('6mmijsh4lr2gfjuho30igom763', 1505610518, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('6nemh8h5cs3i2c4921ia5h5tg3', 1502947116, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('6njqnv8r69jinrno5fki5lfdq4', 1508587999, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('6nvinbal3jljikr46gu2ge9267', 1510586257, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('6qm6u3a6qjrebp2ri1inkqodb6', 1497661521, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('6rit4anhc9tkh9pdalegrkgv30', 1495385940, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('6sia7ej8l0j6480edrackg12u7', 1507401384, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('6svvqaj4vbockginmdsdjrmm33', 1501821819, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('6tmk6t9psq2cg4tofnmp9d1uc0', 1504246996, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('6to7jfu0pvlobeo7s93h0d55o3', 1496672903, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('6v9k1v39pa3eajnupub8ut5ok4', 1500460009, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('6vn5ksd56tv0gq48abklek7215', 1510504174, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3130343b),
('70ed06pk59f0vmu2amsn41bdh0', 1506680290, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('71k2gr6mrq3kn6a1ait02bg0f5', 1509353029, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('72ev25lkj857reb6qor5l16mq7', 1505351614, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('731g14ohnhqjt7i5f3uuduus32', 1496992450, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('73mo9mp6q80cfg1u53fv89l9d0', 1501784561, ''),
('73ni8v76f3uoqofbm92n2vh181', 1497369111, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('7583ioiv31c313m9rfph1lrnp1', 1499066463, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('75fvojk9ap2oshsguuue49v9v4', 1501135025, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('75q2knqa4376896dl3c0nhltu2', 1502478507, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('75t9k74eamcs6odhsutkk5dmn5', 1506653423, ''),
('77hib1keod08hnhree74chiv92', 1496208438, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('77iro8nbokki6b69is02svi527', 1498975503, ''),
('782r10uq2s8hms92npoihkv1m7', 1510911717, 0x5f5f666c6173687c613a303a7b7d),
('78esb0512mq8ifa85ftr65slg3', 1512127752, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('78hbc2cmqs4lj162sumie1a356', 1498464498, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('7aif6pplnlhe9cot65ev205nf3', 1501927400, ''),
('7as3gujmvu0d7mbfhg88ncmpv6', 1497075573, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('7bo00re2j8ffckkp3hmffm7d53', 1502267117, ''),
('7db6h4bn6hv2bhn9qgppjkdjb4', 1503329217, ''),
('7del0clcgjvka1o8l8mqqgm1c4', 1498370318, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('7djr6v2omsv8hb8b4ig8pc11e6', 1496769315, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('7em95gaf7ept06k72vshic0a55', 1502858205, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('7emje4difo018oavu2mu3svdc2', 1497889442, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('7errq8qak10oj4si5bmpbpvp44', 1503078965, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('7eubo0s7lctrrv6nkdp856t2m4', 1509353509, 0x5f5f666c6173687c613a303a7b7d),
('7h7rm0acquh7rrtj1ggtuhqlh1', 1498708655, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32323b),
('7hkn4nd1qrakccs5jlj89s9740', 1507204976, ''),
('7hmep43i506iug41l3rr2iao91', 1510220038, 0x5f5f666c6173687c613a303a7b7d),
('7hmo1q06g8g5g0t0pdnh8ld1f6', 1503084845, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('7i7amms9ov04rfqntv5lcm5341', 1506303896, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38353b),
('7ipu6j2u44s2n75ve62ei06696', 1507222995, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('7ire8j1f4a092jhj2hl7oj0um4', 1497758410, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('7jjdnss77t5r7ala83rk59nhc3', 1509379074, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('7jskdvcd6357e5rov70fgl15n5', 1507063305, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('7kc13hqvm3cm2v3jhn1052lu77', 1499231017, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('7knv7qn8it4kjd9flrhudn6b61', 1509106090, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('7l0n06mbg5n0cn0cdjee718of1', 1501417432, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('7mr0ekfh9kq9ogb5fpgidgq6o5', 1508687031, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('7n7bm6jfojqc7mcr6h23cr41a1', 1501785521, ''),
('7q8vcquegg2gdciaokn55o70u6', 1498928995, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('7s6b6qtelrfm5pvfpjqqs89765', 1506358484, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('7t0tnr2jbpd8vd35phmkmooja5', 1502858202, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('7tue59pg6u4016b51s480qg7p6', 1498995004, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34303b),
('7umt3feieeqd9g5pbj708tr5o3', 1501989149, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a35363b),
('7uonvnpmlgr1em3415nsfrbg47', 1497363930, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('7uouuc6mgvc39asl4mprnhlna2', 1506955274, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a32383a222f616a61782f7365617263682d746f706963732d70726f66696c6573223b5f5f69647c693a313b),
('7vao0batb8cu8tmbrjsm4mp1l3', 1502447372, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('7viuhqhssa8ifcbevk2c08c7v4', 1510526483, 0x5f5f666c6173687c613a303a7b7d),
('80e608e98uqi8md3tsfcmpb495', 1511756149, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3131343b),
('811j45skh1e2i2t43h2khajdp5', 1509259187, 0x5f5f666c6173687c613a303a7b7d),
('81res6d9jgqubbfl1k5h3o8kj4', 1497844920, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('828jl9m7n33bd58pu39ju7ath3', 1496651903, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33343b),
('82n8pmgrt37u1jgdu3t2fgjpf6', 1507260446, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('82p6be5go2tfcc35hf30srpj27', 1510532393, ''),
('8309830c00d9rocttqud4n05o3', 1499497179, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32323b),
('840gagj7v9r3pdrl4jba84rti5', 1504846774, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a37373b),
('86n7f2aflon9qcli65mf701iv2', 1496165736, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('86ovigrrad6tqr837rr48kd5k2', 1502673598, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('86quoa952inv8unckldo39mpc7', 1506056485, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38343b),
('87kl46b1n1omr49r20avl9rh24', 1499155612, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('890ciq26h1rt8aup5q6h1e1634', 1508395104, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('89e76djdidsc53ksf23kaevt62', 1502868260, ''),
('8acrnluidhce5bdplkpms27da6', 1507536605, ''),
('8c37kn07fnbkd9rm71q6vskpi1', 1504265572, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('8cejvls3227fflhsu0rbi5gdj0', 1496850151, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('8dknug8417454opa7471k26ht6', 1509520517, ''),
('8f26vjf48a9shr3kn0cs87rvt4', 1502856019, ''),
('8fpa7bfkrvstcdv1dr1h1lhoc1', 1504760514, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('8fppff2fgijtpojdlvljqofho1', 1512405505, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('8g4a6pckmtctegeuqvr8nb5go0', 1507784997, 0x5f5f666c6173687c613a303a7b7d),
('8g85r60ni9tnc9vqacflvoos15', 1503112909, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a36373b),
('8gb2dg35h9qdf805ulonufji86', 1499681010, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('8ipg0vbege7c0kh0290a8nceh3', 1511345744, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('8isar9t2p2uiuhhkolr2mnuhs0', 1502431603, ''),
('8j8e9klav91bbuse0irphuev21', 1497838910, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('8j90ks8vtmgkl3lrf3b1o64vn5', 1506737940, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('8kb1jmn2ru21psgu5sqc225i04', 1507973919, ''),
('8kl4u7e5hlgfhi7h0gvm7skv86', 1505810102, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('8l7en7fvl5r02ihlqtd3ogk6a7', 1503571990, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('8ldlkvs3t3lanbv1pm5bl1et60', 1506835989, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('8mqfg24trgpktre9hnkeb2rrl2', 1503084215, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('8n1jti5ioq8f0251h0ph6ceqb1', 1496479800, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('8p3oq51t0vuvro32b5poft6m00', 1496917744, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('8qj2ovkqckjlqq1aqtu90p5lv5', 1497539961, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('8t02mo45sg0nm7ne8tttqt96r4', 1497192142, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('8t599kbfrbh9okscfvtjfr3oc2', 1512374388, ''),
('8teeuh3htls1q8mnsbqnd4da00', 1507234833, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a39323b),
('8tgshpkmasimb97gn15rgg0217', 1505494312, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('8tkddstp6sh57kec2f6rgaiar5', 1501597761, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('8vid4gj0038sekc1masuhein64', 1503031165, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('91duqap6l52renu040ntcr3mu6', 1508964643, 0x5f5f666c6173687c613a303a7b7d),
('96o7vmatfs7d9m7aq7td34rcp5', 1496573729, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('97tf8qu8ide3vep28tbr55p2t1', 1496897098, 0x5f5f666c6173687c613a303a7b7d),
('98tco2mp8f536dem8b0ro0i5q5', 1508172156, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('99h67a3cc3uvd09giq0dao5015', 1507821185, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('9ak8hm63pe1c68tgjcuo7r3lj2', 1506536417, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('9c2j41f21vqqline3iqp2ikod6', 1498125620, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('9c3thavkkfq7v6tv8naj1ctp04', 1507095343, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('9d6hc53b2ocv9u68l8igb0ooj6', 1503147964, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a36363b),
('9e8bsea9nha5d9fv90mbdg44a2', 1509282703, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('9g137qjm111toa5h91ingc6v92', 1497169972, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('9ga1h4fi26os37nhv3jflk5oc0', 1508915614, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('9gnnhuhlk4b5jqpfar5tm53r23', 1503026380, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('9i3hft2rkomo1lcfuaseqch8u3', 1503307605, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a37303b),
('9i3sroqaq8pe2o76gd7o3qfej7', 1495116096, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b6b72616a6565477269644578706f727453616c747c733a33323a22c06701e35e9326b016e4f8ee4b914d67e3d5653fe171c8b2fe6dc8f468eed963223b),
('9iaor1gdtebna278mg9j2hq787', 1501197757, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('9j7bnb9004g0qpbkuqp7qqhue5', 1498700023, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31313a222f616e73776572732f3732223b),
('9jdk94c9oi8bafoenri2al2ot2', 1498147644, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('9k6lu6fdekhp98hp0e02fg68m6', 1512183003, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3131373b),
('9ldse8vcbr0bb4phd0o968nhb7', 1502858211, ''),
('9ll7em8mnaermis8u15u035ft4', 1500600264, ''),
('9m3sq8b109042an2feaasqsbe0', 1501346851, ''),
('9mlqobbop6nb53028q9li827o5', 1506152402, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('9nsnilqutmgrkq0hd35hnfrpe3', 1498709344, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('9oeceennnssmmctire485fefi2', 1495207285, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('9ok2q1grfg2uk2btcftu65ij76', 1498469222, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('9opsklv07usr6a0h3pt0lkg9o5', 1508376600, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('9qij6c85fk6e5v18v6o270p3k1', 1501134982, ''),
('9r96b3uknd3soabfrfjbsqt9v3', 1501237749, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('9rir9hvli0n7obmvjvfn0q0c35', 1502802288, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('9uou7ubp9fs65rkugck79721j3', 1511139726, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('9uur7knf5cakdlp0pgf0p4m6l1', 1502858210, ''),
('9vevk695l12ntl9aup6b6u1697', 1502858563, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('a04edgmenov4rp1n37vf19ijq4', 1499147883, 0x5f5f666c6173687c613a303a7b7d),
('a0pjkogdul0jaulp82l3jmf396', 1497889040, 0x5f5f666c6173687c613a303a7b7d),
('a1mli031f114ddkd76qmrnr7p6', 1507004088, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('a1oqpmdqftuucrolhojisdbq91', 1495284236, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('a3162cjdlvssleidbmtiqtbtl5', 1500029669, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('a3eu5k5qkhgmehhg6lb7q02pp2', 1495721886, ''),
('a68hj534e7clbbrg94d7tvfgl7', 1498027827, ''),
('a6p24sbqhu93s8vbeth3od5da2', 1507127885, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a39303b),
('a8mpnjq0ecmlgtt0j459jt0t60', 1500646532, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34363b),
('aar6dgfme8hehhf17qlqm37jt6', 1499494834, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('abbfrj2hoemeruv37o273tbbd3', 1497661732, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('abre4pjo7fgfgtsg48k93mr4l2', 1502508551, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('abs5gc86ochk0c1ionqf2c3dk2', 1502392735, ''),
('acc8dlb62flao5fib7fev38kn5', 1502422980, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('ad1gm8792f77are0g8kq9a5k72', 1508462627, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('ae1e0f80pvvpgciae740moa3b7', 1502600375, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('ag6gi3u4r6km821suq5idpmo95', 1504017160, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a37343b),
('ahf61pfegnpu6c5p15vcd0g742', 1498185074, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('aib1nqejn29k34e4r4jcqpek86', 1499643698, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('aio7cviv4leq6g70c7ro2pa752', 1510844925, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('ama3geah9t88fre85dpr2cu6h4', 1506744872, 0x5f5f666c6173687c613a303a7b7d),
('amntko3rua8ug20fn7n9750be7', 1508124985, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('aob1bmc70f3tq302ujogfcjbi0', 1496163076, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32363b),
('aogccd16eefdddaoq3n28i2ju7', 1508192367, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('ar7je963pbeqsm6s51mhk05fe6', 1501237852, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('aslfc9ql69avl064aa8r1egbb2', 1503120257, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('atue9f7up7g2hbnjf4jpoffjd6', 1501151775, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('autlgmh0ivna9qgmf90roti476', 1501139349, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34353b),
('av3573pcr8d7kbp7esbst0m4p6', 1499876166, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('b1478nipm7cd26m6qspsud5nf7', 1501215687, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('b18p915ooabmucplq51ah8hcm6', 1495994061, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('b1ar9lsdepe16u6n3d4gr7o4i7', 1496934431, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a393b),
('b1p5j850lbmqb38tnhuhd6mlm7', 1512495906, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('b3iaevjc45ep9lmnmruos98jp7', 1510565482, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3130353b),
('b3ratrltlv1t7b75elv4m4qcu2', 1505433188, 0x5f5f666c6173687c613a303a7b7d),
('b4baahd8k88f3r37v1cnh5nfg4', 1502203467, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('b5htd8egnbr2urhqdb2kaaga80', 1496822761, 0x5f5f666c6173687c613a303a7b7d),
('b6ajrjos4jf2ch39q82064g1s5', 1502858184, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('b6g1p595oi5kd19boht7q99335', 1496477564, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('b6ovo7poncach2a5bm1d2p1it4', 1502506839, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('b7jcah1htipmqbp7vp808dn5n1', 1510243240, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3130333b),
('bagvcvmqi55b7om05c294gi9p7', 1500119462, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('barqvqopsjp7boo71vvrn51gs4', 1498026674, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('bf662umfqu3k2ucpbe0as2svq3', 1498992033, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34303b),
('bgc9pal0rjmav05ga8ubdi6r61', 1504113796, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('bjqi471dg29hj913de8jn70i05', 1502299539, ''),
('bkbam12v3182d1i1bam14i81a2', 1502707065, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('bmasg5ba5ol2gu5c263nqqs6i6', 1509689677, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('bntll8dnistld45h28anmuldq7', 1495255916, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('bod0pnathm74m5nkkj72gkm1q1', 1505180725, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('bout2pr8gv5t4koe11esmmvk87', 1497498599, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('bpbo15a68i1hd54f5kfm9p68p5', 1496586418, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('br7kfd6dqch06lf6a2b6t578p6', 1502856018, ''),
('bs97uonk8ee2k5q75qtvuenol0', 1502897523, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a36363b),
('bscr7lfklrmfpamainbe3vq2n2', 1495081266, 0x5f5f666c6173687c613a303a7b7d),
('bt775vapv95isfd4f81rceq4a6', 1498665300, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('bujf4pkpnatoqubmc0o98kat56', 1512014625, 0x5f5f666c6173687c613a303a7b7d),
('c0d9o93a7b96ghp4aijrakg6g3', 1497421078, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('c10mn1a4p3k57cb0ev1vn61gr4', 1510967904, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('c1lt1bvpgf959en3t9013nsat1', 1511018697, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3130393b),
('c1t2f0tkajr7vdjulnfkeocim7', 1510090464, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('c2ca0hecvfp9jlq1bu6ft0e9o2', 1496860341, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('c411lfkr0mio0d9m3qd8kv6re4', 1502508529, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('c73h6o6r9sah6tlt1686j1r8m0', 1505113401, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a37393b),
('c7r8o6ijlmhjfacfi89nv248j0', 1504590444, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('c81vbnpevvc5hkr0uh12trdrt2', 1507140685, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('c82fq7iqt2bd557n345hpl9g82', 1507186395, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('c852qtf2artfos1ssnjt00a786', 1499367826, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('c9l3543spvausk8os6kj92cda2', 1500273741, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('caqskogcfir4a4vlqj9h6rmie6', 1503311046, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('cb1rh407mrse45j57qer9ntnf7', 1506597141, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('ccucq47745iq2auc3vooogf4u3', 1498707271, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('ceeis4ipcasuk3q48jjhqfcit7', 1496993003, 0x5f5f666c6173687c613a303a7b7d),
('cfgqs3vqsk39ubs5qrodfvsfv7', 1502351795, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('cfjr96lkhsa58qi85f3a0fomg7', 1498665064, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('ciaopu10q6gn5ceujvrhd2hhs3', 1495423926, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('ckije02p0p3gmbrj6l6hvt1a43', 1502895359, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31313a222f616e73776572732f3732223b),
('clkqbc5u94v6bq1s9g9nt07hi6', 1509497296, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('clriod0jnmgruq7otukn43al47', 1503907500, 0x5f5f666c6173687c613a303a7b7d),
('cmg4nhn6apqgqe4ae2kj55rsa4', 1499517968, ''),
('co8t9hqdl52e7ub5bkrpdgt951', 1497174868, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('coa16h3ppjtthuk4amu8q1tud2', 1506418495, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('cqahaf694vhl69h45748uisg20', 1507965350, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('cqco0cb98ugriddgp27627qr90', 1496639905, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('cqrohoedssj3nn8qmm6m95m5j3', 1496644572, 0x5f5f666c6173687c613a303a7b7d),
('cqu4057ghsjn09dtukst8smd27', 1502856018, ''),
('cs94qt269l0h7h3keb4591tgh0', 1498975492, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a393b),
('cs9fakjog09qs1vclo9qc03k92', 1498201513, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('cspavarb2l6jqj1qh3r5ege140', 1512262582, 0x5f5f666c6173687c613a303a7b7d),
('cthrrlu1qur8r0vm4aurvuvj01', 1506040285, 0x5f5f666c6173687c613a303a7b7d),
('cumlr1d8ra33dh2nsdb608k9g2', 1502379423, ''),
('d2i0sqql3eko9i32k15mv2sja5', 1504581098, ''),
('d2orlpbvmgcva4atslc6p30lm0', 1509923530, 0x5f5f666c6173687c613a303a7b7d),
('d2v7pnpbv7jqhf8h2e2cfu6j17', 1504543271, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a37363b),
('d3ai2ck9962hnbooe8aheepq93', 1502945444, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('d4hp81bda7u1k8mlr7ttvjc2a6', 1511247532, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('d5unfkvmc6oif4mlfcncfekjt2', 1498995240, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34303b),
('d753764fqj7bmlbipi6cuoumi4', 1498663459, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('d7tem1r7irns6c91b0d7rbn2r6', 1495949267, 0x5f5f666c6173687c613a303a7b7d),
('d8ciaihfl121q8d3fr1v8a13i3', 1499458428, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('d91jhdcvqiqv3k0u7j7nvpcsc3', 1505911488, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('dab9u4qu4hvp583pjsp86kc0h2', 1501958050, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('davmqsn9ek8vcvhifr7fsdbrg3', 1496885103, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('dbjokdfdi3ec7nddmpcivbe443', 1496577878, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('dc6428mf799v1ug4dpftenqd31', 1497161167, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('dde07olbhu9ocj9to33kqpqd02', 1496845500, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('ddtib41fvfjdsefel0b49kni41', 1495216620, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32323b),
('devql833c0i9iv69r29q1coh50', 1502557765, ''),
('df4up2ok2gi6dkc67ppjm9rtd4', 1510045274, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('dg25438re8fn52vc7v9juo8ci0', 1503996471, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('dh41ihk8vb4rolgq3b3n1ejjm0', 1496649129, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('djhqbfjt9hhqc1irnk7ccaan95', 1507095727, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('djurquftjj0ldo11l4nj5qjqd4', 1511627590, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('dkf58k0cb8ghth92vace9fucp5', 1506715995, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('dkff3img96l62ldcbq1rg7ufk7', 1497082216, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('dkqjn9pbkv8mqkqo6og0501n80', 1498665316, ''),
('dning7bhcusnns446r84qjs735', 1501570600, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('docu4r02oquemnu6o4up7j8l00', 1495717521, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('dtmopqqkdmmjb8uvu9bt612g86', 1501262085, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('dtnqcc8724vt89r2lforcirra5', 1512284736, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('dumv3ctsrboplk5rf4rjef7qh0', 1497280079, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('dvv2afr3drd8r4ha3qjpmo9hp3', 1499050686, ''),
('e04dj7311fhlehp79krcpss5m2', 1501157650, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a34333b),
('e0mc3q0nnc3ttrvod1drlcaa56', 1502436119, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('e1m9ako041u1q1bmchnq7seg00', 1499410266, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('e1pk8fuv4ugklmegdmm4g4i4c7', 1502386607, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('e1sv7in6vuof1mjc22k76vvva5', 1511912128, 0x5f5f666c6173687c613a303a7b7d),
('e22p2f9uh4754svopk0pbe4jm6', 1502470267, ''),
('e27gipj93h7ec0meoda3dgshb7', 1501487826, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('e2hfs9275sm9nah7jos6u6rg82', 1512043174, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3131363b),
('e4fs9hlbqqafnasjslptnqg494', 1507536600, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('e7l7adhs4hlmvbasl3vg0p7dg7', 1498053724, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('e8d176rvn6mj2q8nrdeb0cf365', 1506596373, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('e8s6t2brgeerkj5j31vpu6ubf1', 1498993143, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('ea9bpn52ocjd39qa1b96peerp2', 1506624245, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('ean0j318vqa7q0ms6i0ejcudf0', 1506617363, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('eau5uetmrqs3586tgvp7rr4sq1', 1498718285, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('edrfnb0sm9u390msv21ureao41', 1508483589, ''),
('eeufsu4ieri0h4qvuubmfvdrv0', 1505953338, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('ehkgf2f3evvvpkl3pg452fhfl6', 1507037045, ''),
('ej59hll7jhk49bdob7skdjqn51', 1497710906, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31313a222f616e73776572732f3732223b),
('ej5fhrfn8qiahnlpa5tra1i1u5', 1499917569, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('eje4ab619186drjo3hd9jcpae3', 1497776151, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('ekmhrkpfmgf14cgr5vfpqe3495', 1501392015, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('eo863l23rvi89jsh46tf9i49h0', 1499655000, ''),
('es6k5t96t9nvklvjq9quum05i0', 1502818690, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('eshusoe7g1esa48fm4vgq04jc2', 1504840362, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('f12sucppqps6d9ccufbolo6hc0', 1495207295, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('f2dpiq9on3nctges2l2cstg7f1', 1508004130, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('f2k9vh55vmur6srti52mu8pbi3', 1505409878, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('f2ukrjr7hmj922fosgd5enp4g3', 1507176973, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('f3rf5h691q9lm41oqjuel983q3', 1497457975, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('f3usv6aka02tikaausqic01f32', 1504918852, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('f4mg7am1d9eo7l9kvqk1i0fs14', 1505911492, ''),
('f57i1cjdf4ojdrh41cduu265n7', 1497881603, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('f735qls4hj6bj5vg84fbjloa70', 1503420613, ''),
('f8e35e4ukn07qnpssegc0kghu3', 1501153705, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('f8n0c8d3pmvflj9uc4tmhh2oo3', 1499915554, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('f919lp6lg6dtdbm3n2ch0ck1e2', 1502062271, 0x5f5f666c6173687c613a303a7b7d),
('f9ik7ud2h983rst2nrnojaptd1', 1507426920, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('fa6qakti4lucgok1kau1ldc0m0', 1501668225, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('fanepvu4gjhjnn4mdi2qcv0ig6', 1508469882, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('fbgghbptfnqkrbo2emhjps7mg1', 1511256074, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3131303b),
('fbqu1gb3gok5065fj8h3vrvt33', 1512543646, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('fdcl7mfiglq9bvsb96dngur4u2', 1499407846, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34353b),
('fen9cugp0oeqr3m26d9plm9l40', 1502102358, ''),
('ff0flhkjkqj7kj8ggtmmepne22', 1505796873, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('ff8ni177euambtm7lualakvfh2', 1503418600, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('fgc1kovirlutkv4pre32sjjgh7', 1506903361, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('fhogbiejtfqsh7bmfjg63fh5j2', 1501775991, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('fj3gk5oei0ognf3tr0a3ohdoj4', 1501907761, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a35353b),
('fk7shj807jma9mi95li5h7a4b0', 1505202514, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31383b),
('fllio5q575usfucihkk9k4nqr1', 1502349507, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a36303b),
('flt2nq75c7u6jpjl9t14hhcrj7', 1508729998, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('fms1d8m8ru04k5ng1ucu1n2os6', 1506797912, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('fo5phmhal47d1besl3rl8fl0k5', 1502858203, ''),
('fou79nk6bf2pdlo50f3571nbh4', 1501680130, ''),
('fqp6v95k1jsq51q40romcfc1f2', 1498058299, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('fr5f1pfo98ssoctcr4jtbe9bg5', 1498749073, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('fskk5v9iugmiq707sqea5gt794', 1503803687, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b);
INSERT INTO `session` (`id`, `expire`, `data`) VALUES
('ftdpijv57nabk6vh7s9m02nvo7', 1501821820, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('ftin0fjrcfed8sh0ngk1c5lpk3', 1499059462, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('g04vj15eaeed48gdpptblph5t2', 1507044213, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34383b),
('g0n13g8tguhk897q485kugvtf0', 1496649798, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33323b),
('g15kb26ar3tumufde3omqvfeh0', 1502803536, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('g1fv6ljttgh2nqle71tai7g907', 1496379940, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('g2dhb80t5jun57f0d3dmppgt00', 1498485672, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('g2v7pnsqovnh9pmur3pkh5gc07', 1508897755, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('g38tqc0tvq85g9jhotjr65jmk7', 1504226945, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('g6bnad6h1psc4md71ee7ii5mp6', 1510028481, ''),
('g83ol5c0nne5ousmhl4vlff264', 1502408861, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('g8rf38211b0h0s2qobs9ic7ng2', 1508293321, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('g9vcj2vuh374l286oupko52pd2', 1506956352, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('gbgrtg4q2gjofurc5f75ni02s4', 1501248473, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34373b),
('gbhctfrp7m71aciuqeqqn5k321', 1496650233, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33333b),
('gc23em9tbuqtq12q0r2t3mbvu1', 1499497179, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32323b),
('gc9ov1eg2l9kaau4petbbs4sp1', 1502512331, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('gccv1f36uais4p3lain4smr1e6', 1500446854, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('gcgg0vpnbo7bbec52sdd7vbgi6', 1510640786, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('gd7uvmlqqsbp7eu5rhpqt453a4', 1507194497, 0x5f5f666c6173687c613a303a7b7d),
('ge8679ldln68hhh0fu8uov43b5', 1500892145, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('geh67l3trkkake7m0r0q1ie5k7', 1497453926, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('gfkp5kkn7vtj2n5vd57bl0cbs7', 1500268071, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('gg77e57f2nd7hfq7qaai9q74t4', 1496857702, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('gg9qsmkiv6eu8fmjtl7uo9rp22', 1507919608, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('ghkgp7avfdq894c48agcsr3mq4', 1496208321, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32343b),
('ghl1lkqbtdlk8dtq5jc2s1s9q2', 1508091601, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('gi8dgn7onfqce6h31l990g2d97', 1498222605, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31313a222f616e73776572732f3732223b),
('gj1cpc336k6ko465oqnvtvi3q1', 1500480419, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('gk1613mltbkb3936ql7o3i2775', 1495522453, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32343b),
('gkljd1tg6mejqu8q4pb8pb8866', 1498397098, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('gknrpi41cc2mts3v2dbj7s7fh6', 1500371537, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('gp1lf5lgvr4b0genbnflpmpn73', 1502541162, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a35363b),
('gpjcmltj0fepbm3qrb1d0fi352', 1499836457, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('gsch5m372phnick46q9s9n2gg6', 1496506376, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31373a222f61646d696e2f61737369676e6d656e74223b),
('gvmb5nepkim99ufa4affmorrd3', 1496895414, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('gvr5cusbdlmjf4n2rn4caj4if7', 1496716314, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('h04idik1p8r6mqp64h8oofs8g7', 1501574539, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('h09v08ahs1kqv67gh388uvhn11', 1497883422, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('h0t06228hsngn8o2j9bp58ct61', 1498707718, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('h0v9tl5bjth8o6lri6f0knhh80', 1502354401, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('h1rbu6q8iqa6gfs590gf078g65', 1506593777, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('h3sju7p235vogppsi59mp78av6', 1506625312, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('h6673lv1tm489u6sclqhbjbmb6', 1498664226, ''),
('h7e493qu9rnv8ib996riqj4na1', 1512187673, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('h8jkier3prp2ioq75h6lvmft33', 1497927431, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('h9n2a9vi8v62c93cd26s6cmub7', 1508461935, ''),
('h9q6o83cincf2b2k7g1bbqbdi4', 1502431444, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('h9tq58sb4uf0abcg8nfk4fao87', 1497193003, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33383b),
('ha4ebds8ggprlvucpitsluof32', 1499408733, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('ha8h0avc7g6v2v4cd61g095120', 1503207251, ''),
('haborl9d9vuui3epg6oujfq5b5', 1500713472, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('hat0q8jtm049afpldm7g7qc9l6', 1498062057, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('hb0gb85ii2ksp57i70q15ghvu4', 1502430937, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('hc2cjegdgttaj9flq774t57031', 1506625177, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('hc7aeearsa3cvdc6v8jctbhlq7', 1508891794, ''),
('hdspts81f54na578occckk6vk3', 1498958891, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('hdve87mon2i8t4ifojj2hildn2', 1511082621, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('hesgdpkdmh2i8t162t9qiuh4e0', 1510717324, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3130313b),
('hf4k49b9mphpnugot3cgahj821', 1508767485, 0x5f5f666c6173687c613a303a7b7d),
('hf5or7hd6f3v8dmqqpsp820797', 1507181545, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('hhbdjbn8im7gekvv6hcfpuo9i2', 1508376594, ''),
('hjbog933d1ruvhla49dg6bqlj5', 1509534764, 0x5f5f666c6173687c613a303a7b7d),
('hjcisl12stsq92vpn19dldha23', 1503031210, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('hkip5afovumed9cj2396ma7331', 1509006075, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a39373b),
('hlc3euhbn3sno7pr3k5nonmh26', 1497368522, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31363a222f7175657374696f6e732f696e646578223b),
('hlr1e3d7i32qjd07fcsdt0lq87', 1506310021, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('hmf1askaif17bg2ap2uervpk50', 1508176139, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('hn5ipg2htmejrb8d5lc0s0c946', 1501001649, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('hndcuqnch2k2bk94no6gdhjre5', 1512416509, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('ho1555ies2sln4ujh9sc7jd181', 1506493366, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38393b),
('hogjumr99lt7v7m95mt11ernu4', 1499359831, ''),
('hplfgir71rea88ipl3b1mbcsm2', 1506875017, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('hq52rq3l2aqgsabsdc4022b1o1', 1500715641, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('hqj1q9e9g06hd2lt4f0drqpf85', 1502819096, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('hqlhd0lnhp5br7vec0mnkum2p1', 1502070528, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('hr2qqaamafj129vt36otrrpq17', 1501049616, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('hsg1js3c87kh8nqfmh17oqcb62', 1499836631, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('hsqlr9sg1d4n2shebccudm93r0', 1497925307, ''),
('ht6gen852c6n092btt9hoj8bs5', 1496649527, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33323b),
('hteu13tr6r1aotutghatsf0i53', 1505374837, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('hvf3p12pq4m4h701njq4e13dq7', 1501746644, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34393b),
('hvqrcj4jdmrrtpf2hjnu07nlp4', 1499697633, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('i0gae5qqsvqj967d4a0o8iga76', 1502990788, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('i1emsui3n7rqjooc2t61p0un21', 1502507917, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a36333b),
('i23vehv0pr912vf0evsomq3hj2', 1507403365, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('i2ba6u4fv8u7ipvg6e6aatao13', 1509324582, ''),
('i2ck14n0sgm898tc53s7b10s87', 1495849337, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('i2lh9bifunq7hn5l347tnd7dq6', 1508385180, 0x5f5f666c6173687c613a303a7b7d),
('i2mmt4ppi0du14065frjkod246', 1499254801, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('i2na9mbniloh67lija6pom4972', 1502198517, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('i2vv1t6dugcab0rv88e8io44e2', 1496659252, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('i3efl5l11598pk1dr2jh65aqv4', 1508977980, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('i3oifln9t9lucqbobnme2dimn0', 1505493234, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('i52urs6l1eelv2a7ghn9l4aul3', 1504687944, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('i7ieibdpud4plgri019l34ua45', 1499676938, ''),
('i7tp6f11fsl4sned0mta72g055', 1511538091, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3131313b),
('i9u8v6umrr3vv1og5ikn6lov45', 1495081310, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('icb23cd97e0sm3ials97frmlj1', 1507692854, 0x5f5f666c6173687c613a303a7b7d),
('id21trc4al2k17n8vs0ichpmm5', 1502858212, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('ifc4b1jpg0hr264ff6urtboo12', 1495163057, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('il08hpujn10jo4hjqnt27ce3n6', 1507027348, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('ilta450ofjmttfqmnoorap15l4', 1500448370, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('ilv4cp4e69thurrnh80v0bmgf3', 1496487044, ''),
('im7m51d68aq19oe7uaomht5mp2', 1502858225, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('in1kutieeeg5bdrkfourhtn3m7', 1495124267, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('ip3q8jh7usopu7qoeg19emvgh3', 1498053645, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('ipc58t12vtk3rf9ae96ask24d7', 1501132863, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('iphvshcid9ecntu35h4qb4qls6', 1501646306, ''),
('iq0srhm9i2220him64fm92o491', 1505092936, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('iq58vfk2jrm9tqktib79v5obv7', 1500387655, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('iqj1rr1t4cvsuonjqbm0ad6i36', 1510801352, ''),
('irvq94hjdc64deeqdafh6ctr24', 1498975495, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a393b),
('it078hoktkd9q67l8i2dpb8ea1', 1495871581, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('j0lvuugabqgbqqpgp177ic29o4', 1495079706, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32323b),
('j2n59nvrl5afivtesctt51r7j2', 1506593418, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('j39d8t57iq8da4mvumefp6ndk6', 1498396961, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('j4l243dodj5itpmdn0vohs6kq3', 1505741936, 0x5f5f666c6173687c613a303a7b7d),
('j4lk6ektr8jtts2ebd4gp9r1q5', 1509295527, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a39393b),
('j4r8c9in47sf22du3dii0ijj63', 1507315788, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('j570jd5mgnrbjdtkptp7cliqc5', 1507044845, 0x5f5f666c6173687c613a303a7b7d),
('j5dfb1cp014bfrftg0aric5hf5', 1495080359, 0x5f5f666c6173687c613a303a7b7d),
('j5ou1pnvltrife5tfr6faahmc7', 1505289237, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('j6vc76mipvqi6jnsuuckibul55', 1497370201, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('j75kc7r2toqt1kj1mm9cv6hkq3', 1509287356, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('j80s0jafuof0muvv5e7jkohur4', 1499259252, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31343a222f616e73776572732f696e646578223b),
('j9pfmg5rmrose51hmp0nlc5ul0', 1508386021, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('j9r0n5b06n5290vfjjt2mg6s23', 1497888695, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('jf23o8uglmac0agdu9o6hhlbf4', 1497886836, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31363a222f7175657374696f6e732f696e646578223b),
('jfklieu4nidbv7fb76q06l8qe2', 1498057596, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('jfub1emap30950i45tvdsdpcs3', 1505964573, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('jgc47npibp6bd06dgaoe2gi520', 1501213037, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('jghvtvms3f0qrhi19a73k7vh35', 1501002876, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('jgju40gq3h89pbodicglb281p7', 1504246991, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a32313a222f616e73776572732f616e73776572627975736572223b),
('jh4clm21heir38evoceg17vus2', 1510823764, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3130383b),
('jiq44rpcvnamgagjf773jag380', 1498929007, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('jjnr79o0l99vv9gi3av8p1c6a3', 1497886752, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('jjr1k324g8gh9144m6rarm52n5', 1509424330, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('jk83qb4cfkk832bpl1dqa42uc4', 1504140765, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('jlahebt1elhacg4qdmmsph45j2', 1498465352, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a34303b),
('jm4jm5tlr77d0033edhup1lei4', 1498975391, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a393b),
('jpma6f55i7i85pgg1qjdu7sf46', 1501749466, ''),
('js8eh79luue0c28jajj6c3fc27', 1507347962, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('jt8loqp8b6ah0gofb7qblb70d7', 1498993146, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('jt9ajvdvgr7e74btpdptf8tjn7', 1497834378, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('jta042fqv328rtj0ld4f3ckq54', 1506621580, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('jut78ta3vm01q96rmbl1i14nj2', 1504238464, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a37353b),
('jv7ne3l8i58kif1hp9ifa48cl5', 1501636726, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('jvjkerg99ni363d0iv1mk5lph7', 1498098668, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33363b),
('k2bln2ahsa599bub2eehfhnfa6', 1506450743, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('k3c5p40nmjnucb7tkbtlsjhjm0', 1502425157, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32383b),
('k57o2pfohal9c6vmdhp4jccja0', 1498742929, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31313a222f616e73776572732f3732223b),
('k6o02muj5ns25afuv49lme7803', 1506489928, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38383b),
('k6rc1fqdp898pip8s2jllq0tq6', 1495210349, 0x5f5f666c6173687c613a303a7b7d),
('k7bvtahc7uudnf1oo2li9ttrt3', 1498462451, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('k7qe2phd80bqivu6o8g5fbltf0', 1510610440, 0x5f5f666c6173687c613a303a7b7d),
('k7vosrsgahtihcspa3kq4fsna4', 1502456069, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a36323b),
('k895n5blkt0obtqgehape58t52', 1498541332, ''),
('k9hiinicjf2e15jlbdul2u7ci0', 1501005899, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('k9nr8adniv3rt0uhdqq6u6cjp7', 1511283079, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34313b),
('ka9pjrcsll9fs8ms7ndq4i3q13', 1497459048, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('kar5ick5avhol2hocub74tn5l5', 1501152734, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('kbnki7jv29h69knj8l58ovpc41', 1506956508, ''),
('kcpfjc6niaotndv3mvtv02kan1', 1499870814, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34303b),
('kd4dvfgju3s03urufaklrvm733', 1498975390, ''),
('kdr8ca6u9rtvndqc7njigiahf4', 1504466127, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('kfbhuqc45f1bdmcnruur1l0kr5', 1505730478, 0x5f5f666c6173687c613a303a7b7d),
('kg22i84o5ieefu86616au6oru5', 1499066439, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34323b),
('kg8gpvnnjumdmhv76l39ovnui6', 1505144947, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('kjnc9744drnf967v1fhnn7ldl0', 1501728230, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('kmbamccoqngp0vu699p3p8ga43', 1497518201, ''),
('kmhl5lb330v5d4dc70mhbluo36', 1502506841, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('knt69rpc0ufdddlo11qaq41lo7', 1502851975, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('ko2g79cqphcj1ni1djfgf6g9a6', 1501133636, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34353b),
('kplnbgi1cdmt67ov9aihv57ca0', 1505312039, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('kppbaavl3g00veep3lml9e3981', 1501134822, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('kq9keis6u650qjjiovoqunau77', 1501204828, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('kqac1hvimdu7u9ksg1t05tltu3', 1502272071, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('krhdqdoub07sp2us5kh6g7vf66', 1507344869, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a37353b),
('ks8bvk2h95fa0rld3a7t3d8vj6', 1501833211, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a35323b),
('kunf5du4ilofivnq9ie027lkm3', 1504529714, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('l126hn8un22ajmb1ndha9t2q64', 1502068478, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('l13ar2i8noipa5kj7vvr3135c1', 1497805812, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('l1imvhbvl7564ohu9cuiaphvu7', 1509738412, 0x5f5f666c6173687c613a303a7b7d),
('l3kcmqhun1nt6vaato71g9c890', 1511018127, 0x5f5f666c6173687c613a303a7b7d),
('l3ksvehcifrk70cg60kkf2eog1', 1495081504, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('l40pmat1g040v0hmuudtjdpsh1', 1497805809, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('l545ak5q42g0258na77qi6atc3', 1502475260, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('l56bro9mktb9c6n92heq7kp7k0', 1502858209, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('l8u3cd5smlhaf9bioir19v7jb0', 1496813345, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('la18elnnjo448k0lvleka022r2', 1502430974, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('lbp797g6t5rdolk0so0tvuh6b3', 1503207144, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('lbsqa876d5mh2unh9lstepi222', 1508832495, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('lc2bac2sqfhch4osreipsg8es6', 1506149869, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('lere8osrr87e03da71s1b3a3l4', 1497260000, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('leri7u52tnji199hpmknaf9fl0', 1504264349, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('lgfim1f5glqijns5cgcvu1d387', 1507319744, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a38363b),
('lgjnfc9to485tgvmf25jfspio4', 1498610319, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('lhs9bj1ahmp5dk4nin1ce15au1', 1502298070, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('lhurfn0ik30544tt7tfcaegqd5', 1501984081, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('licc134u8qsrdfr32lbe4vaiu5', 1498320970, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('ljn79m9bhtdbik7n51lacds5e5', 1505554535, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('llh3jjmhffm3ples4km9572o16', 1497760052, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('llur83no06igmi3l6vv144vrb4', 1508838030, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('ln84c13rt676h5l0qd834ugab3', 1502198468, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('lo312io8kuipage67jl3vth7q2', 1499562824, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('lo5ap80pb8i5opf4la8finf606', 1498847628, ''),
('lq9e1pf7bmoob1ucd52mf2k3v4', 1511954998, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('lqpkfscchb0s0tv7obko6tjfk7', 1505052688, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a37383b),
('lroc80ao1je5lfak0nd6tn0qt3', 1503594357, ''),
('ls6r1k6422ohnlblip42h143n0', 1499702633, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('ltaj1vvqg5fa34oiddhpfp7m85', 1502943157, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('luffb17jen1ugtf30544m2kr16', 1498796445, ''),
('m0up30j27909pcno9i7holth90', 1498541439, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34313b),
('m14u0jpov3q9tko6pcagcbu0s5', 1502208642, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('m1q0ld424jjdpfhalifpnm12c6', 1498703940, ''),
('m27ui3o8b15h5unt4bsa0q71h5', 1501157282, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a34333b),
('m31ekjrlo1nashq6ohi1e67612', 1497417669, 0x5f5f666c6173687c613a303a7b7d),
('m3dqje7b334cpclsli4ucpfps4', 1501478520, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('m3unjvo9dqh4donn1aq37eugi5', 1507176026, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('m5m5u38ghqfl31avsmaj7mnjl5', 1496142170, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('m6asikk4a2a2c31264kmm8nfl5', 1505964953, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38343b),
('m81obn7v6lv0u0v04c845muv16', 1500032366, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('m8dhnb332f1b9nugn78vmk93u7', 1502166798, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('mbb15svucmg704pc2b15nsldc5', 1497364295, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('mbg9srpev1ra8rl0k79o7rd1r2', 1506650126, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('mbma8mdph6qc7imt4u62q1jvm4', 1501832400, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('mbpns02nd0f9eh5sjtc9fe4k93', 1498087569, ''),
('mcg950696ccrsmjfu6h1pd9p07', 1499916242, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('mcq6t8to2co6pnpn7b0k0ihna1', 1496339877, 0x5f5f666c6173687c613a303a7b7d),
('mdl1kusfmtdulthk8qmqcf3626', 1503420517, ''),
('mdnn53h1dbgdevssk43k1ecdu2', 1497844923, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('mert7fmpi4cb222dj5m1uukf20', 1496208324, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32383b),
('mfc8r836ehgsiqm7kts9n902n5', 1508376175, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('mfd59q96t6difijslhl67jjre4', 1501226763, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('mfmo0cudrccta0o1iqtievcpd5', 1502856018, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a36303b),
('mg4o4reisqj9rksf9ktu7ns7t4', 1509229956, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('mg8k0uc9srrvjiqj7g3r221lh4', 1504798724, ''),
('mga28hmtctiua3l8ci93o8eaa1', 1502858219, ''),
('mggtu920qi5tbu9ptbm06suct3', 1502275731, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('mgo45uah3c89rfeushmsor3r02', 1498749073, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('mgpraejopl7quni0pr2ndubhf3', 1506571831, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('mj78rnrfvb5md46ghn1evgvs75', 1501680128, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('ml5a62nbao89lcbhhu1f44pof1', 1500897597, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('mlckp5ekla2eaii2djljpfnrn4', 1501519285, ''),
('mmm87r31hhvtu2m25iktfhcti2', 1496208362, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32393b),
('mn3q4f6u8ru4tc916385iqf6p2', 1501138127, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34353b),
('mnolt70tsp5gbmnk4b5f4qjrf2', 1498222471, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('mosv1rl5ncprsfovoibqf61991', 1506698025, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31383a222f616e73776572732f7265706c792f323839223b5f5f69647c693a38363b),
('mqbelu0v8soomlht035j8ato45', 1508253730, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('mr8n4cg4lep7j4ag3e4l8rild2', 1496716321, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33353b),
('msjl48dpevfmlbdbvu1gpgo5q0', 1502258133, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a35383b),
('mtp30k4l6ttm1uvvc99qihf4m6', 1496998499, 0x5f5f666c6173687c613a303a7b7d),
('mu31cetb16q9rrkjq7ngorptd6', 1500696333, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('mudg0oqn1u2hn4r2p6i5bs4ph5', 1509845096, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('muifehus6c2l0grivq0jj6q8f4', 1496917365, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('muv2aulhtql8qlc6aec58d3810', 1507100851, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('mv8vdgnvmf1nk7v16lc3ldg2d2', 1505829170, ''),
('n0f1lskjlgvfb6hp95amb5a9h6', 1498336445, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('n0ptla0f0jbe2tvrorbehn2v67', 1497888929, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('n20mom34eluhgfcqlhid8al6u3', 1506620026, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('n2b1dk82vt1rnpki6us9s1h8t2', 1501224035, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('n4p764lqobb2h39qedsh9vojc0', 1501774130, ''),
('n6m47ti2pp2rmac06jlaipo511', 1502858216, ''),
('n7js40do0isdbgai10fpg5mop6', 1501595439, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31313a222f616e73776572732f3732223b),
('n88tmrealnvll1ilnu6qugbrf4', 1508775385, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('namb3k2jrg7gsqp5csd37oa0b2', 1497545393, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('nb1te1m3se3sup3pehk7o8e2s2', 1501219231, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('ncof54vh76i40qb8vj626vfig5', 1509297198, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('nejudg7ntmhi33u7dplbgpdpc5', 1496574783, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('ngk9ru523kih26qu8t8uqio840', 1508581016, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('ngqm3t6tc668shpohhl1kq5d44', 1505464455, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('ngspdm8qfo4a9i4o86hbfenpq6', 1497364363, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('ni3nsp5d4muc69803d1nsbm905', 1500121834, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('nmtkvb725gteh74198ga7unn21', 1496579454, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('nng0g5tpoqvm6t0bf48svc1tv4', 1506593839, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a38363b),
('nnp867nje871mq95aub5dvf5f3', 1506568041, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('no75rkpbgopearmhb9n3fsa4h4', 1506759708, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('nohv6okej57qh7jc8et6c6oag2', 1510481594, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('nq8q258um5653c7hji0euje9f0', 1501209091, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('nqac8lhc6dltcbekglmltefvj1', 1496487611, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31373a222f61646d696e2f61737369676e6d656e74223b),
('nqkqmhglc7ph31j0tb2u5v4je4', 1507710042, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a39343b),
('nr7ffe38em9gvj2thskn5q4gj0', 1507487512, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('nrahv47hl5l8vo43ecm7em0854', 1508592033, ''),
('nrgqmr4a7n821t4f8splga5v46', 1501175703, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('nrlo6p0mi8acbe0oit27pspc04', 1498200736, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('nrsdon3b5chcqc2s3klf8h6510', 1509066511, 0x5f5f666c6173687c613a303a7b7d),
('nsabpcv9rnlk4chvfkaom89ec4', 1505375222, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('nvcumeshffdf57u5tlo2mume13', 1509211355, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('nvqr98v6gqrgtbptrunsorjl37', 1501172908, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('o06qta5qsjvldgbhbqfptpsqn4', 1511755718, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3131333b),
('o1bkq9hlm9611dl8npt408cg31', 1498370668, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('o1mnk4hhtrg3otu826am399ho4', 1502984731, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('o24bnkvrie5fst99ek21op7ej3', 1506533698, 0x5f5f666c6173687c613a303a7b7d),
('o2no72och10gntuu1qjf6kab07', 1505493991, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38323b),
('o2t2cb9qklefhrvin7v30h8fr3', 1495643802, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('o35o8norai1pc55ebr2c9bist4', 1509877381, ''),
('o3kqmd7jciuavoodrul43nkfd2', 1496717238, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('o4l033sh0215idue7e61g85hm2', 1497661522, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('o6mh853boqvbq05isk5gujrc47', 1496596726, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('o7t04e3g3mfjgho8vedllnpdj0', 1502298147, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('o7ts7bkv99cj23mfknr1japha4', 1498671924, ''),
('o8e5rqdcqojaevgcfpkhgnven0', 1507100595, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('o8ptr6pp8icggkqfurqdapisq3', 1508051022, 0x5f5f666c6173687c613a303a7b7d),
('o944iftmdov1q0adard3fj6r80', 1502897774, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('oa265ec17p2c8hl3m2lorpnah7', 1504265415, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('ob0ebv7n4svtmracftaq02m2q2', 1497201558, ''),
('obbuv86kkmbeshgm6a2bdhavr0', 1506956066, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('oebj7jlg0uql3k4pltnubpmqc1', 1507967281, 0x5f5f666c6173687c613a303a7b7d),
('of6n95s8eva9sfu0ntogsg7705', 1504246995, ''),
('ofniratkusuh35iho10vf55fb6', 1505299735, ''),
('ohla856voa2r3mr177i36s35i7', 1496752281, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('ohnoj9uub30rh5iv9ila5id571', 1502374636, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31313a222f616e73776572732f3732223b),
('ojt7hbosuauhgi5100nfsps2j1', 1502431603, ''),
('ok1gtfs2moapjpj917ec04lt73', 1495872905, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('ok5mc286tliklq9rqchqckj9e0', 1501129069, 0x5f5f666c6173687c613a303a7b7d),
('okftftlcbh2q4r220n9ivleg46', 1509450106, 0x5f5f666c6173687c613a303a7b7d),
('okh51i7ubal3vnemba7r40q3t1', 1496649377, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33323b),
('om4a7ja8via1dv1cs2msv2mge6', 1496651350, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('omft8r50uqm2k4sbuh8r7l7oq4', 1503548860, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a37313b),
('oncsb2d8hon8idf523c8votad3', 1498884142, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('ontcij6ljma17tbahdh1b4hv02', 1495124866, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('ooj3apkefo20g97mu2cqdj1vs7', 1502856019, ''),
('ouhnuofsmk302eem052innudk6', 1502522942, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('oulkl7k8ta6jqgq7hft76tj3i7', 1500387027, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34363b),
('p1171v9c88v5af9q1ar9gmp3d6', 1501247005, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('p1jmnodo1o6bjsn2ocbqnpb5k1', 1508100041, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('p1mmou9qqqjtdemfh43liifo57', 1511809364, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3131353b),
('p28ofuj1p9dudvud5bha8gv4q1', 1498719377, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('p371a180u0ntr4bf9h1tvehae4', 1502938028, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('p3hsc3vrg4ls6lp2r624mi7r10', 1499461303, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('p3md7j986u9fl97odnkflhaj54', 1501623986, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34313b),
('p5eekp1ea936jqj82rhp1tppi0', 1497677772, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('p6c1ooj0fj06f58kpf05o5tk14', 1497162597, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('p6kl1diumuljul3j42efui1517', 1510793268, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('p77db0ep1hpapokeq0t472u7v7', 1498644386, ''),
('p7pk7amg8q2cn82h5bv509du21', 1500967505, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32383b),
('p7qgj8vfllbqnpqndu718fn6h0', 1507600421, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('p8p2kdq2pk699rfs38v9tb48i1', 1506261046, 0x5f5f666c6173687c613a303a7b7d),
('p8uikdj20dqonk98ve5g8p4r44', 1507042779, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('p9ahjngj1up777romoom9i49a0', 1497073509, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a32313a222f616e73776572732f616e73776572627975736572223b),
('pb7esorls3hedae9a5cm3nvm51', 1506653479, ''),
('pbq0up0079o6ot2g35hed7rk25', 1507002500, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('pchpmjt1jkfbnnmp5s9np9et11', 1505782096, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('pci725nd1707gugptb5iuisnt0', 1506618164, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('pdiblnnl5387mi77m14oopv1h6', 1496998498, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('pedd8o7vloscfhad3mroakaq25', 1505912789, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('pendqt95uquo16g1jrdd0tm7b4', 1502424737, ''),
('ph26thj746p0ouopv24ebqnq74', 1497364088, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('phrnraf2c6cjui5uvusrukrft7', 1496487587, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('pirh9v8d7jpimj0qolahvr1il3', 1509320093, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('pjir72n3cphbjvjsba2nud01k3', 1499079008, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('pljcfcooaugb4osqv65p5g2890', 1507783716, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('pmkur8qqelhfueqa69i20752p5', 1497882104, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('pp5koqoi0973sp2qia85pet8r0', 1511236875, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('pp5r2fi39sqm2tsdeqih9hubm2', 1505368158, 0x5f5f666c6173687c613a303a7b7d),
('pq66qhd6a6k3vm2i8mkhl7pvq7', 1498334967, ''),
('pq6aoq4k89edo36ki40vdd5576', 1504247132, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('pqjqvspqdbia1ra674op23u8t2', 1502856018, ''),
('ps96fak4ubr5iavtnr1b52pp67', 1500967190, ''),
('psbh97a4ukq01vrhum5h16pvc7', 1507302184, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('pss8cgmsgjh4pp0o4pkncqphm5', 1502431604, ''),
('ptg7emftffc28dg956b00ujs13', 1507917313, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('pvcr0o9lmc1al6f6nhanvo9780', 1499389976, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('pvubtn645h31khqdsft7853of3', 1497781827, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('q0enubf1knkigpka5n5oo2iso6', 1498797918, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('q0jg6ilbr6p7hhptcd120q7l75', 1507188696, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('q15nnbr66jadkmpr1bjsvne7v5', 1497715776, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('q1t7coh60kk8p0t5fuhnbup090', 1501258967, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('q1v6s5hqhq1qb1qclve7u2ffi7', 1497881466, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('q2564udmpgf8avrfs37psfbj54', 1502856018, ''),
('q3epuf15qe46fvhpe3voqro6c0', 1497459029, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('q59ehj1njk6so13h0m8106t584', 1498711579, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34303b),
('q5j7hgfn8s8ar6u6cvcn9h35n2', 1506359270, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('q60sp0nookraett34mf5civf54', 1508066356, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('q6be08qt4m6fp5b0teh57g6os1', 1503076206, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('q7tnu68esdm9lu4ec27o9rheo4', 1506667051, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('q94dsrva7hm8i2kui7jtbic3u2', 1495609420, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('qa2s9n1k3em5uc2v7c74s1fpb1', 1502406958, ''),
('qajgf1b422fueiv4p5ugcvnd75', 1502295218, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a35393b),
('qamcjp2au64r5are2ia15cvq25', 1501351672, ''),
('qao5r3akvbh0c1ep55a752sk61', 1511732544, 0x5f5f666c6173687c613a303a7b7d),
('qbslns2imb8qshgiq8qv52cm60', 1512062345, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('qc9c6ku96kcm9hou0p2k8ookr5', 1496669097, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('qdekjf4epbkpea477gk83hrv81', 1501258408, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('qdgj5qupjqm8rq8821br40kv32', 1509428474, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3130303b),
('qdlqsjsireflsbo6q9tpvp47i2', 1495207391, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('qegp2ak9f4g52aft7l9bd3elc2', 1500217293, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31313a222f616e73776572732f3732223b),
('qfd0sg5ibonctbathi8u812r30', 1497539182, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31313a222f616e73776572732f3732223b),
('qgdr667h5oercok80t8qq088p5', 1506955322, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a32383a222f616a61782f7365617263682d746f706963732d70726f66696c6573223b),
('qj6ffvh7lof9ln2lh4ffgotk02', 1496476985, ''),
('qlau2b5b5q60o0qh3akfe3rlh5', 1497453631, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31313a222f616e73776572732f3732223b),
('qlhvhablc10vsdecg4htpnuhb7', 1502675276, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a36343b),
('qmbrggg49j4jiral3b5aqqtg00', 1511142279, 0x5f5f666c6173687c613a303a7b7d),
('qmfbrudk9tjlvehhn4fgbau653', 1499190852, ''),
('qmjt0sd0oss8hanu0nsr34kkj0', 1497882118, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31313a222f616e73776572732f3732223b),
('qmo3o5f4u8rn3t3sfkmshf7n55', 1503639944, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('qn536mtejqmk44sl7ip5pvrdd7', 1501135887, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34353b),
('qnfbt1336pi6r8foiehucuaju0', 1497545295, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('qofj1j9hpc0kupjue80koc6hf0', 1508802736, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('qp4g6k53jjgqb0qaqn2sijtuk3', 1498749147, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a32313a222f616e73776572732f616e73776572627975736572223b),
('qpkjgebd1bose15j2kukq8bag3', 1497715769, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a32313a222f616e73776572732f616e73776572627975736572223b),
('qqn6rke5k88342qvuinevhk1n6', 1505809080, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('qquo86hk09feo1qbnhhcd2t4a4', 1507495512, 0x5f5f666c6173687c613a303a7b7d),
('qsttsghjo3e4toikau7048tp45', 1496936315, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('qta5ak935abpblo1quq9c7ojg7', 1498463172, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34303b),
('qu65mcl4027t46n5j7o6kg0uo0', 1502245616, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('r0ikcte128meqgkthq959esho6', 1501646350, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('r0l9q1fgngqhgmmkrplgg2klr0', 1509152506, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('r17ua4ghemndttc1tmgt3mm1s0', 1500460040, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('r221t6v51qkp19vltcg2mc8074', 1498099556, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('r2ac4o7tulvdldgqvdc71etb17', 1497402872, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('r2f5pntucgbh4j5ipd6mvkhuc3', 1498087787, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('r386s9n1v4gks9balm556mk073', 1505911621, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('r3j7oducnv0uoqln1smc4h3d00', 1502376662, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('r3ssb030eu9np6h72o8dc5job5', 1501832157, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a35313b),
('r3t0vg539vrvknacckpp299hq1', 1496767220, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('r5ns7962ies7bd5a1b9aub4e61', 1502743416, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('r5pd9gu993j3jm3tqj8pus7c50', 1497581052, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('r6b2liduu7pkj7tr6e1ge8sgq0', 1511055268, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('r8llm1s13ejd3bsguarj1vk953', 1495226741, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('r8q3glmlg2s13tegv4bj0jkat5', 1506600390, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('r94fepuq26gecnun2ivcg1g861', 1502555076, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('r96cdo1714j4i9063fgba5esk7', 1511456090, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('ra76i7s8qgne0781i2iufp1gf2', 1496604334, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('rc10vqt1dqlhm77b0dhj1l6se0', 1505267177, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('rcin544a29g1npcrttos9hort4', 1502647836, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('rcof0pqlbh44pt7luch80p9aq5', 1498706221, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('rfhatn1cmetancmurcct21ebf0', 1498096980, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('rfjt6hrndkugcvqkesun6rqor3', 1495079218, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('rftr3qaafqipcg27ujsuehoum1', 1497861708, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('rgakpgjugnadimfheq5blaj1h5', 1498705090, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('rgp5tconqubqcnuolrgoicmqp7', 1497369425, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('risar03mjegsafbhusmau01o03', 1497080709, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('rjc0k9ou6ihiievu13992dt496', 1497153944, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('rjp3npuhds5o702gdccl8k64k6', 1500892191, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('rk4drlif128j66vsrhq21bc4e5', 1501175733, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('rm6nkfniitmdg7utg0ulg7dbl3', 1502856019, ''),
('rn4rm6f768t07rfj6tb48cjlr4', 1502803665, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('rnp2c9v3ufm615cspnq7c6l611', 1501984099, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('rnq647lidhscnm82b9s4vn1gk5', 1504745816, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('ro03k5bs4aeajpev7i5es4la25', 1502950231, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('ro1hr1ag9599l639sqmf60f9o6', 1501048777, 0x5f5f666c6173687c613a303a7b7d),
('ro81v6i9rj4imh1dc4cg0uoe86', 1498928705, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('rod4dp020man9bgojnqc7m14r0', 1509587534, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('rohpaddk63n3u3sisees1041u4', 1498465136, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34303b),
('rp5j8d39dhubqtmfs8unl7mut5', 1503368078, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('rqqqqfr8bb7lsvpa1c6itp5a31', 1507281000, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('rsb26920d9tkd9rnncp1el0mp1', 1498850196, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('rsk7b1vft92hc3o9nadlkjc756', 1506474629, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('rsku3chc5mat14kipiqt2s4k60', 1509895795, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('rsq92ihe959ai0b9cjr1qq2uv5', 1496574473, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33303b),
('rth12tud6dmji6gjhqs7vkkl15', 1506071709, ''),
('rvr6tsnplhjj3hjigk2m6kojk1', 1503084939, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('s2cokr915k8f3khsd38l4s6tp3', 1500698833, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('s2kqgcpg267na1tf3ha8923rr6', 1497082689, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('s3fjruou52kanp6qdil1n3jp53', 1503254849, 0x5f5f666c6173687c613a303a7b7d),
('s40on6o0k3a08f1hqehqo8e5g0', 1509902264, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('s62e55dfrcsd9v923ourh098d7', 1511535471, 0x5f5f666c6173687c613a303a7b7d),
('s6e5rvpe2l5utqhk3hjrpr71j0', 1506625311, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('s7vrc9iif9nh2pdlvqc917b0c2', 1502414596, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('s9eusk2hv9nusi1qg463qj8gl2', 1502856019, ''),
('s9hgk1s74g9h3hvc0qrrru9bt3', 1502470570, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('s9k6ffckoq9ln9927l5ahvbjk0', 1512178133, 0x5f5f666c6173687c613a303a7b7d),
('sa4lfuo2n6c9l8v6agr8fdvuu3', 1503208536, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a36393b),
('sbjjeg74gsi7i65cj1g41n5u23', 1502431040, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('sc13ts67cump1etbcju4h2qsm3', 1496561025, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('sdgb9rv5u28hvmoc3ofuqduat3', 1503312598, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('sf95ttefv38mvr0405vhcidho3', 1501520033, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34383b),
('sfig88knnphvt0er9c2i1tlpp6', 1505554523, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('sg86oeb2h2pt35aspnqlkq6sf5', 1502858204, ''),
('sgckc8sdip42uisdi40jm916d2', 1506396900, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('shb09hgoafvv8k7coo7hask412', 1506509603, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38393b),
('siug39jt7fhjn1grtek4odcs93', 1510782145, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('sjq8toih760laordtg2h76thm3', 1498818341, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('soep18fhou7vso2nrmesr8em66', 1499334491, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31313a222f616e73776572732f3931223b),
('sq026fv4bgmm69r3ai0s6p8rr0', 1505373414, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38313b),
('sqh1mpvg9qnq7urcgqgpjdb1g6', 1499497486, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('sr8q10vdl9ijd5524j1ci0ghg2', 1507189242, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('ss1gu8es5mmjivvoi6o7ka3cp0', 1502184016, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('st4sp4nh2mdqln8f17ufbfs0v1', 1506922970, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('su27fv9uu4e6fl9jsbe3233lt4', 1505829188, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('su54al2okj2qk48qvot2k3p902', 1496477102, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('suet0dl1bvlon6a8779q22aqp4', 1509848558, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3130313b),
('sugap67vee6dopnhuncg48urf6', 1503500060, ''),
('svi4jtbegkotbgvu08i9qhs430', 1499453636, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('t2gbt7jsdfk20h01gaf76388i3', 1506951001, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a36303b),
('t3a92be5kirke8sbc1ccprb3e2', 1501341997, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('t4c8v4dbndbola5992gbtp9n04', 1503833296, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a37333b),
('t51gar52qorj909legthg1il15', 1502858201, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('t62a4qfv84iof72vmhnv0ifm05', 1500021825, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('t775rgmui7ak7re7jkegqd2c20', 1496996639, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('t7rckvhsemk8vksr7nqmajeut7', 1505677678, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38333b),
('t81a9cf8e62j32daj6uhl9tov6', 1510795440, 0x5f5f666c6173687c613a303a7b7d),
('t8p2r5r8qcg4fmltjculic6os0', 1498057453, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('t9mrlcs7be3plsr5lov6l8f2h5', 1502469056, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('tb6qmbktme6ctf3c9i1sunlnv4', 1502855952, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('tcurqpu13j1resbu8e60jlfcg1', 1502201034, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31313a222f616e73776572732f3732223b),
('tdt4ttlbgd6bq1v9m8cuumplr6', 1502555195, ''),
('tdvajtl88eb8rg2d831fbmoae3', 1495821127, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('tecriabli3klcb7f10g2jeeu06', 1501170238, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34353b),
('teheqn7qpak569s95bdo0jntd3', 1508734526, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('tenglamkp6a06dv2jcts8nmal2', 1497546033, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('teqfnaqviu66id1ti5p91jr8b0', 1499156950, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('tfs37fohsicfn7pg86bei82kl1', 1500259430, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('th29lvn4lfp8efphrohijbkhb3', 1502208098, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34363b),
('th8dui2sgirr4541c6u2snge76', 1498089116, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('tj7a5gdnlq9u216kdc52qfb1h4', 1511711441, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('tj8nbiprscsjdf5tt7cq89go15', 1506593419, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('tki6tsq0sreh11jhhcqqollke7', 1496918585, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('tl6bhgdb5cr2rh7tfj9nd3ths3', 1498613733, ''),
('tlicl2ecehg0d93jal829f7om3', 1495216616, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a313b),
('tlrbak6l8u3p4v2v5496a1q292', 1511125215, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('tm0h83e5vhui7eh51jtsamlu75', 1510762502, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('tmem6c2jgm0124p7crguodvi13', 1509603605, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('tn59hh78da0aco6tpi3rl862t2', 1508483592, ''),
('tobaffmgbhs214oq6iaijbrng0', 1504246994, ''),
('tod0jj58n3k02atbe6qrd9n4r7', 1500121931, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('tqpq3oqukbkavpsm4067njr736', 1501887380, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a35333b),
('tqsq23j3rcgu1bbtgbhopohi35', 1512548455, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('tr6a4j0k6p8quolo58captgu67', 1502430331, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34363b),
('tsl4mjd3rpud0msp9ha9urek23', 1505955442, 0x5f5f666c6173687c613a303a7b7d),
('tucv9akd6vvejk9ki7uij8lco1', 1502858215, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('tvorr14n61t3h2paps2pule6h5', 1503303811, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34313b),
('u0n7ennsf7rko37q06vq9p3vf2', 1497487621, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('u18ek3tfe0mhaqa8querockmq1', 1498447627, ''),
('u2dal3bqqfjflk3iuk18v7b6h2', 1505965552, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('u519gfntjovsmldv0ca31a9hc7', 1501761366, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('u5ie7q623stkit62v718bnucq1', 1495079899, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('u70hu2kkl31e4sm72hgo1pbmf0', 1495776574, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('u976fgm4dkp4e4r47mm56f6421', 1497080916, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('u9gq3d76f246h1ghfeahs0knt5', 1502111810, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b5f5f69647c693a33313b),
('u9u2vqlfng7455oti5pjbpfkl5', 1495080225, 0x5f5f666c6173687c613a303a7b7d),
('uaj54jp6gvd2si0nm5h844s3a3', 1504856481, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('ubl256tfo3lgn7t9ckjp05bui5', 1502128467, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b);
INSERT INTO `session` (`id`, `expire`, `data`) VALUES
('ubr80tnaqbb4piv3c2gqoh3vh6', 1501570748, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('ubrbe7m07pufenos5j7hlv7hj1', 1502501151, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('ubsgnvj5uikp4iic68u4351hh4', 1496812526, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('ucdre63njf9bpq8ffeos7p32f1', 1498756510, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('uch7vh97g6pklnp60nrp9b9qp3', 1497604131, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('udlskl023aihs4ek9o4djsl9o2', 1502393003, ''),
('ue1548ee5a4bd8sscdl503j914', 1508292260, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('ue247ni000lsii9esjdj9jnat5', 1507483642, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('uf3d1b0pjgvb4nocmvdg1ash46', 1502856019, ''),
('uf5cf7r387cb4ojoenfpn9fqa3', 1511575061, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('ufnenil5vo0jrsf04bo2reapb7', 1506147643, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('uibr2i9jjh5qnob91vkn6g43h0', 1502525287, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('ujtq588trb927bgf2r4suvipv1', 1498397205, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('uk3p27fnin7k0epifmsskrhcm2', 1501217024, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('ukofso5a060ddhk01i5nat0j22', 1499254789, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('ukqj42vioabqt7reki5l360tg3', 1495872499, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('ulpkmrmcgsjv3au7g9g0psonj2', 1498096700, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('unm7tq1d3ka9f03h6a85ch1r62', 1506177583, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('unmf22ja63jbur99p7r660nsv7', 1503023936, ''),
('unt5raelo11pvu5q6tsh2j2os5', 1508246647, ''),
('uo5u9uc01ncvvftli1nqm52t24', 1504413651, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('uoe8nvkavfkdmfkjc8gjs3i080', 1499598573, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('uokctucqf67noco8hmdq15eb60', 1497073510, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a32313a222f616e73776572732f616e73776572627975736572223b),
('uoo4itfgeu5b4nupl9ls7q9jd0', 1506392324, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('uor293e51dha25sl3mmkk4ql96', 1506676970, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('up3di2a6me9oevsn15gg48rn15', 1498926711, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('upg75a9541d45ep7jvcb3shb32', 1499335121, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('uqa60splgp9bm7chifobtc93h5', 1498711660, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34323b),
('ur84g0gebguv8g13819uanmf74', 1504539279, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a37323b),
('utk7e5dk4d0aj9jmi8fdlcna90', 1506311388, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('utveuqn0t8c5vuj2tli2bnbu22', 1507188948, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('uv31ddha8fagerhauvnoteo1o1', 1510298023, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38363b),
('v07i2fdp6hvld26i5b4iqlt3j5', 1507302171, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('v0ng8vicb3au92vtk6difol9h1', 1507251395, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a39333b),
('v1b5kf2vhj5td8b5eigq5e3gr4', 1498758439, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('v2b67o1qnns2ug5pc92n50r9h3', 1495081366, 0x5f5f666c6173687c613a303a7b7d),
('v2gc24nk28itugf95f9ig737c5', 1507003729, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('v39fpm4e9ieamfenquif68dfu5', 1497715663, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33383b),
('v3hg3u4gpc6amnjtc7nmpib467', 1503420518, ''),
('v3i53p8rmi1o53gkj8l9jo1s16', 1498796503, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34303b),
('v3ifoobpqv4g5l6o09gna8imu2', 1499654850, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('v4467msufc6j2ro2volbnadeo1', 1501687033, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('v4f4strhilfj2puujgfa7k26k2', 1505143846, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('v51rt3ubn4jgr7kgr3qh4mg8k2', 1503454734, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('v59al60a1luh34uh6la212l6o1', 1505366433, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a38313b),
('v63do80anu64rk6ierq6jltj30', 1502088547, 0x5f5f666c6173687c613a303a7b7d),
('v63lril3rrr5a04jd66efjooo3', 1504858321, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('v74ji23usl70bhukck2th5qhv1', 1502431604, ''),
('v7dpjs12gvk0f92e2c24ggerl0', 1506621803, 0x5f5f666c6173687c613a303a7b7d),
('v80n8gsdvcse2ijqi7to0e0e87', 1501156073, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('v8q4oj5vj3jqkmb1l52s7s7tm3', 1501199735, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('v9dugrken6iemo55kdec6ceju4', 1501236453, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('va10voj3rq75m80hmsi7s1sq76', 1495463403, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('va1e9jqv5l6so3qqhb1mkr5cu1', 1511455510, ''),
('vb589l8um3053efpo283jqt145', 1510102700, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('vbtoghpme4ja1d5lcstrns7sc1', 1502518548, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a34333b),
('vcqhj1u0o94r4j4nmno0c4gut3', 1504122094, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32333b),
('vdipu6aaomhk3f1rdrq2acd1h3', 1498460074, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('vfockfro8coobadlgvhn6odl46', 1498463620, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33313b),
('vfp7ha779ckqbvfg7qdjnq8mm2', 1510102414, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('vg89s3pel0fueu1goi3qpvbhc6', 1498758116, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('vj1chvubs33f3t8hhp2ncagj02', 1511247550, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('vkf7vopctloltk0jgvrkvb0hi6', 1505891107, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('vnvldar70m86qb98uu0hoojrs1', 1497677354, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a33373b),
('vo7v6dbppssn9hdo28ncvoca10', 1499876333, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b),
('vofaa3052o6sj0laj9ic5gak91', 1498088136, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('vsbva60m8h24dr01p2da5kb1a5', 1506625159, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a313a222f223b),
('vtpkc9lb8l1j9qole9nr46si73', 1510666230, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a3130313b),
('vts326hlcdlrbshka1c5c32n22', 1501599811, ''),
('vv7crjget8dn6mjvohpvvdnk61', 1502424194, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a32353b),
('vvj2a1a4uqi1r8h7e8391kmsb1', 1499459308, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a31363b);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quote` tinytext COLLATE utf8_unicode_ci,
  `body` text COLLATE utf8_unicode_ci,
  `images` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `google_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_description` tinytext COLLATE utf8_unicode_ci,
  `create_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  `status` int(45) NOT NULL DEFAULT '0',
  `slug` tinytext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci KEY_BLOCK_SIZE=1;

--
-- Đang đổ dữ liệu cho bảng `topics`
--

INSERT INTO `topics` (`id`, `title`, `quote`, `body`, `images`, `google_title`, `google_description`, `create_time`, `update_time`, `status`, `slug`) VALUES
(51, 'Doanh nghiệp địa phương', '', '', 'doanh-nghiep-dia-phuong_1496667942.png', 'Doanh nghiệp địa phương', '', NULL, NULL, 1, 'doanh-nghiep-dia-phuong'),
(52, 'Du lịch', '', '', 'du-lich_1496669616.jpeg', '', '', NULL, NULL, 1, 'du-lich'),
(53, 'Giáo dục', '', '', 'giao-duc_1496670571.jpeg', 'Giáo dục', '', NULL, NULL, 1, 'giao-duc'),
(54, 'Giải trí', '', '', 'giai-tri_1496670753.jpeg', 'Giải trí', '', NULL, NULL, 1, 'giai-tri'),
(55, 'Âm nhạc', '', '', 'am-nhac_1496670771.jpeg', '', '', NULL, NULL, 1, 'am-nhac'),
(56, 'Kinh doanh', '', '', 'kinh-doanh_1496670976.jpeg', '', '', NULL, NULL, 1, 'kinh-doanh'),
(57, 'Internet', '', '', 'internet_1496670988.jpeg', '', '', NULL, NULL, 1, 'internet'),
(58, 'Máy tính', '', '', 'may-tinh_1496671005.png', '', '', NULL, NULL, 1, 'may-tinh'),
(59, 'Môi trường', '', '', 'moi-truong_1496671034.jpeg', '', '', NULL, NULL, 1, 'moi-truong'),
(60, 'Địa điểm ăn uống', '', '', 'dia-diem-an-uong_1496671022.jpeg', '', '', NULL, NULL, 1, 'dia-diem-an-uong'),
(61, 'Thể thao', '', '', 'the-thao_1496671196.jpeg', '', '', NULL, NULL, 1, 'the-thao'),
(62, 'Món ăn', '', '', 'mon-an_1496671261.jpeg', '', '', NULL, NULL, 1, 'mon-an'),
(63, 'Thú cưng', '', '', 'thu-cung_1496671310.jpeg', '', '', NULL, NULL, 1, 'thu-cung'),
(64, 'Trò chơi', '', '', 'tro-choi_1496671463.jpg', '', '', NULL, NULL, 1, 'tro-choi'),
(65, 'Harry Potter', 'giới thiệu ngắn harry potter', 'giới thiệu harry potter', 'harry-potter_1496932085.png', '', '', NULL, NULL, 1, 'harry-potter'),
(67, 'GOS Entertainment And Media', NULL, NULL, NULL, NULL, NULL, '2017-06-18 16:29:23', NULL, 1, 'gos-entertainment-and-media'),
(68, 'FPT-Aptech Computer Education', NULL, NULL, NULL, NULL, NULL, '2017-06-18 16:30:24', NULL, 1, 'fpt-aptech-computer-education'),
(69, 'Công nghệ thông tin', NULL, NULL, NULL, NULL, NULL, '2017-06-18 16:30:39', NULL, 1, 'cong-nghe-thong-tin'),
(70, '36 Thống Nhất, Gò Vấp, HCM', NULL, NULL, NULL, NULL, NULL, '2017-06-18 16:31:42', NULL, 1, '36-thong-nhat-go-vap-hcm'),
(71, 'Công ty TNHH tư vấn dịch vụ thuế và kế toán Hải Dương', NULL, NULL, NULL, NULL, NULL, '2017-06-19 14:16:29', NULL, 1, 'cong-ty-tnhh-tu-van-dich-vu-thue-va-ke-toan-hai-duong'),
(72, 'Đại học lao động xã hội', NULL, NULL, NULL, NULL, NULL, '2017-06-19 14:17:34', NULL, 1, 'dai-hoc-lao-dong-xa-hoi'),
(73, 'Kế toán tổng hợp', NULL, NULL, NULL, NULL, NULL, '2017-06-19 14:17:45', NULL, 1, 'ke-toan-tong-hop'),
(74, 'Số 65 Tuệ Tĩnh, Phường Nguyễn Trãi, Tp Hải Dương', NULL, NULL, NULL, NULL, NULL, '2017-06-19 14:19:25', NULL, 1, 'so-65-tue-tinh-phuong-nguyen-trai-tp-hai-duong'),
(75, '154/4e Hố Nai3 Trảng Bom Đồng Nai', NULL, NULL, NULL, NULL, NULL, '2017-06-19 15:15:00', NULL, 1, '154-4e-ho-nai3-trang-bom-dong-nai'),
(76, 'Softworld Vietnam', NULL, NULL, NULL, NULL, NULL, '2017-06-19 15:16:42', NULL, 1, 'softworld-vietnam'),
(77, 'Cao Đẳng Lý Tự Trọng', NULL, NULL, NULL, NULL, NULL, '2017-06-21 14:42:01', NULL, 1, 'cao-dang-ly-tu-trong'),
(78, 'CNTT', NULL, NULL, NULL, NULL, NULL, '2017-06-21 14:42:08', NULL, 1, 'cntt'),
(79, 'Ở đâu còn lâu mới nói', NULL, NULL, NULL, NULL, NULL, '2017-06-21 14:42:27', NULL, 1, 'o-dau-con-lau-moi-noi'),
(80, 'Study', NULL, NULL, NULL, NULL, NULL, '2017-09-27 05:01:16', NULL, 0, 'study');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topic_bookmarks`
--

CREATE TABLE `topic_bookmarks` (
  `id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `topic_bookmarks`
--

INSERT INTO `topic_bookmarks` (`id`, `topic_id`, `user_id`, `created_time`) VALUES
(20, 14, 12, 1491657721),
(21, 13, 12, 1491657753),
(28, 8, 12, 1491658113),
(30, 10, 12, 1491658318),
(31, 11, 12, 1491658362),
(32, 15, 12, 1491658363),
(33, 8, 15, 1492960793),
(34, 15, 15, 1492960796),
(35, 14, 15, 1492960798),
(36, 51, 9, 1498963882),
(37, 53, 9, 1498963884),
(38, 52, 9, 1498964070),
(39, 55, 9, 1498964071);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `upvotes`
--

CREATE TABLE `upvotes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `upvote_type` tinyint(4) DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `upvotes`
--

INSERT INTO `upvotes` (`id`, `user_id`, `post_id`, `create_time`, `update_time`, `upvote_type`, `type`) VALUES
(9, 15, 0, 1492963380, 1492963380, NULL, NULL),
(10, 15, 0, 1492963426, 1492963426, NULL, NULL),
(11, 16, 182, 1493707096, 1493707097, 1, 1),
(13, 16, 181, 1493707120, 1493707120, 1, 1),
(14, 16, 183, 1493707126, 1493707126, 1, 1),
(15, 16, 177, 1493727854, 1493727854, 1, 1),
(16, 16, 0, 1493925182, 1493925182, NULL, NULL),
(17, 16, 0, 1493975050, 1493975050, NULL, NULL),
(18, 16, 0, 1494172267, 1494172267, NULL, NULL),
(19, 16, 0, 1495016260, 1495016260, NULL, NULL),
(20, 16, 0, 1495261776, 1495261776, NULL, NULL),
(21, 16, 0, 1496421507, 1496421507, NULL, NULL),
(22, 16, 0, 1496421517, 1496421517, NULL, NULL),
(23, 16, 0, 1496422102, 1496422102, NULL, NULL),
(25, 16, 190, 1496476224, 1496476224, 1, 1),
(26, 16, 193, 1496934850, 1496934850, 1, 2),
(27, 16, 196, 1496934852, 1496934852, 1, 2),
(28, 16, 198, 1496934855, 1496934855, 1, 2),
(29, 16, 190, 1496934857, 1496934857, 1, 2),
(30, 16, 199, 1497064924, 1497064924, 1, 2),
(31, 37, 202, 1497161081, 1497161081, 1, 1),
(32, 37, 201, 1497161086, 1497161086, 1, 1),
(33, 16, 0, 1498093023, 1498093023, NULL, NULL),
(34, 16, 0, 1498093024, 1498093024, NULL, NULL),
(35, 16, 0, 1498154281, 1498154281, NULL, NULL),
(36, 16, 0, 1498154378, 1498154378, NULL, NULL),
(37, 16, 0, 1498155333, 1498155333, NULL, NULL),
(39, 41, 0, 1498539999, 1498539999, NULL, NULL),
(40, 41, 0, 1501622526, 1501622526, NULL, NULL),
(41, 16, 0, 1506616715, 1506616715, NULL, NULL),
(43, 106, 332, 1510746689, 1510746689, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` tinytext NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `access_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `logged_in_ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `logged_in_at` timestamp NULL DEFAULT NULL,
  `created_ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  `banned_reason` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `fbid` varchar(20) DEFAULT NULL,
  `fbtoken` varchar(255) DEFAULT NULL,
  `resettoken` varchar(50) DEFAULT NULL,
  `resetexpire` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `register_status` tinyint(4) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `google_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `role_id`, `status`, `email`, `username`, `slug`, `password`, `auth_key`, `access_token`, `logged_in_ip`, `logged_in_at`, `created_ip`, `banned_at`, `banned_reason`, `fbid`, `fbtoken`, `resettoken`, `resetexpire`, `created_at`, `updated_at`, `password_hash`, `password_reset_token`, `first_name`, `last_name`, `register_status`, `type`, `avatar`, `google_id`, `google_token`) VALUES
(1, 0, 1, 'admin@gmail.com', 'admin super', 'admin', NULL, 'Jw94lxE_5Eh22A3d0wBJ1K832z1mpxAJ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-01 17:59:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$RfljqqCbzJUSdAO.zk0KBuSmeB25XA4BVlcxnQrD7De7DY7hh2D/y', NULL, 'admin', 'super', 1, 0, NULL, NULL, NULL),
(2, 0, 1, 'manage_question@gmail.com', 'Manage Question', '', NULL, 'rV9vawF85MkeX2xp6AHWm6BwCdH5T2Vk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$x05e8OUdg47QMQ17cWK/mexb1mGB14mWtbEImycluiWg7smAY/H82', NULL, 'Manage', 'Question', 1, 0, NULL, NULL, NULL),
(9, 0, 1, 'tdt.smile1@gmail.com', 'Dinh Tin Tran', 'dinh-tin-tran', NULL, 'f5x1MoxLKn6L5uBtJ61qB5MBDJaR4DlD', NULL, NULL, NULL, NULL, NULL, NULL, '1064397450372338', 'EAAQzgcX1WNcBAASrYa83QvxLzsPb5C4ZAHLhZBImGCF2bZBB8MPtvMFkFSZCHFkqhZC5jpZAL3ZBoBE09nPidSWctzAYldd50kP8CfFtEK22ZAAmCgdwBIYRB9UhQtHrQ8MpCaYFXd6d1UqBlj32j30DClCfZAQE5iBHlFXq7GTZCPGQZDZD', NULL, '2017-06-08 14:17:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$kyEcoaJN1D/AygIwTSQfBukZNk7y177KswuZR/BlKZnVIiMfLYZrO', NULL, 'Dinh Tin', 'Tran', 3, 0, 'https://scontent.xx.fbcdn.net/v/t1.0-1/c225.34.275.275/s50x50/427573_106770242801735_624946084_n.jpg?oh=ae8367f0f172741d8067adae8d504916&oe=59738BCD', NULL, NULL),
(10, 0, 1, 'tdt.smile2@gmail.com', 'Thug Like', 'thug-like', NULL, '7SQYatG0b-s7y3phIjNenksp3ujjHQKy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-08 07:09:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$v0ews1/2qj91koPHMyO8iOhtibtwnDruSb.uCXsVV18a0/QoiJO8.', NULL, 'Thug', 'Like', 1, 0, 'https://lh6.googleusercontent.com/-FKPFAtLGfPQ/AAAAAAAAAAI/AAAAAAAAABU/haCcS-YB_jY/photo.jpg', '103356172200408113330', '{\"access_token\":\"ya29.GlsLBMHlMq95aOynkLQ17OKMCE1I2EKjEjaJgYZr7_9Fq6S8a889tLB7HbScF-AApVbDolzB0eOJ86mHtsrxIC99mb9KYueHM3UEIhmAnG4Wr5ZVuJu1ORquQkEv\",\"expires_in\":3600,\"id_token\":\"eyJhbGciOiJSUzI1NiIsImtpZCI6ImRmZTcxYTdhNDdkMmRjNTZhZDFiMTZkNDg0ZGI5YjkzNTUyZ'),
(11, 0, 1, 'dinhtin@gmail.com', 'dinhtin tran', '', NULL, '2CJeAlTi9dreWfK1zPup2utO1zvz6ixL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-18 10:36:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$XcJ7sPUclHhFuSNtVadDCu2tXA2eyfYk1oh12CPt9DrK0ZhArn8Sq', NULL, 'dinhtin', 'tran', 1, 0, NULL, NULL, NULL),
(12, 0, 1, 'tdt.smile5@gmail.com', 'tin test', '', NULL, 'QP5q-osFNS4CPW8JdIgDAB8t-OKyITra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-18 17:26:37', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$2O9FxEem4q6uk5V49gBlruVQp.OXkS35m5.KHigOFT9VI8eFgXwcG', NULL, 'tin', 'test', 3, 0, NULL, NULL, NULL),
(13, 0, 1, 'tdt.smile4@gmail.com', 'dinhtin tran', '', NULL, 'gCrOnqx802dVbTcIVHMgb8xse1xyvu6O', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$OM6x4xpIJ4hcDI4WkD0/LeR5XeHzgZuYplC/ElCbimgcTLIBHVd8S', NULL, 'dinhtin', 'tran', 1, 0, NULL, NULL, NULL),
(14, 0, 1, 'tdt.smile7@gmail.com', 'tin test', '', NULL, 'whm--02NQ75prMz7oeVyFxF7wOxKOU-e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-19 08:03:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$pInpIu6oBLfxrTOVYFKZL.Yb/PayGYOZrqcGBBI2blWEuAoQtmoo.', NULL, 'tin', 'test', 2, 0, NULL, NULL, NULL),
(15, 0, 1, 'tdt.smile8@gmail.com', 'dinhtin tran', '', NULL, '4QGYS38GkmabgPi_T-qc9STjg5gG0q3d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-26 12:07:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$6h3EsmZxxDBjIaEO85RPWeMO/GViXRAwzZYywqvJ9xDwcjfgi0yMm', NULL, 'dinhtin', 'tran', 3, 0, 'https://lh6.googleusercontent.com/-FKPFAtLGfPQ/AAAAAAAAAAI/AAAAAAAAABU/haCcS-YB_jY/photo.jpg', NULL, NULL),
(16, 0, 1, 'ighost190@gmail.com', 'Ken Phạm', 'ken-pham', NULL, 'PwdPfJBBz6r8MZ6Vb_P5P98J3moRlf1n', NULL, NULL, NULL, NULL, NULL, NULL, '816133198550022', 'EAAQzgcX1WNcBAFwMGyjBKIwInfTyoZAZBfBbWG7gcZB3BM6DaZCROvkZCwvxCdH2X1zGhNwmFgT5M9m0v4s8AXQy8hssdZAeZCNY1xOYKYhYanYbi32oqmdUZCVkuqZBodZBref1lk5h7tBRrASIlqAuaTibCX8d7gsNIZD', NULL, '2017-06-18 15:12:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$RKUiBoNWDtVZ0qpSiZ5MXebdTQBVKoMJ48EzCmgroUHHO6eP5WLaW', NULL, 'Ken', 'Phạm', 3, 0, '2017/06/ken-pham-1497798740.jpg', NULL, NULL),
(18, 0, 1, 'leluongtatthanh@gmail.com', 'Lương Tất Thành Lê', 'luong-le-tat-thanh', NULL, 'P5k59tKJpcxTUhHT9fhOKENWthg9lhfL', NULL, NULL, NULL, NULL, NULL, NULL, '10206890125651247', 'EAAai9ZA7lamgBAMXrTaAYFeyRvjdytnG9ZAHIVf9Bja2ccJrGzGZBh0gbnGd2jVN0meAZAnGvFPp7sAUReQxF6aYzeZBknMnRjVadB3qBFJyjkxWF0HorwDNhMD9ZCsFgAqJcyjOSxRzOBvPzTYe9W79EnKZBLPrREZD', NULL, '2017-09-12 07:22:38', '0000-00-00 00:00:00', '2015-05-20 02:58:00', '$2y$13$v9s3IwUq/giReNQ9415HgefxRLa2uXh1pQKFPG02PpouT3hK8I0kG', NULL, 'Lương Tất Thành', 'Lê', 3, 0, 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/17991783_10206826470579910_8650715551302845172_n.jpg?oh=c31c0a3f75d9730015d574c9d72874d3&oe=597B6193', NULL, NULL),
(22, 0, 1, 'seo.alliancevietnam@gmail.com', 'Di Hứa', 'hua-di', NULL, '_5_6VqkfDDeHuQNkybROA2jF68Nc3SvI', NULL, NULL, NULL, NULL, NULL, NULL, '281270058949980', 'EAAai9ZA7lamgBAOH2PTJSIUmdNgIVTv0qEimIN5kfSElUZCpTJyGsLP16UOrNmSKwkrOAPMwdZCEIaIWWX82tzdhqtXDNItAjl7s2EcFhFZAU4IUvQyYjiYThdTeTodSWdGstpOTknmTIUXUlKiFXUDcY9XfXjHfZAAjXq7W05QZDZD', NULL, '2017-06-29 03:33:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$SkmJdgY/KBiLajhU5C06eOQbbhWB6QG2tZ73T/bDl.6f//Y39CzzW', NULL, 'Di', 'Hứa', 3, 0, '2017/06/di-hua-1498707211.jpg', NULL, NULL),
(23, 0, 1, 'funnypet190@gmail.com', 'Hải Địa', 'dia-trung-hai', NULL, 'pWruxt1ZbYz8gU-oeoEhvs-0_edQRHfY', NULL, NULL, NULL, NULL, NULL, NULL, '373353549726828', 'EAAai9ZA7lamgBABL9isd4KSSaYUZCGDaLY71cDf0naWH7wh3Whvh47B1jrkbZCZCy1stN7jQoz6KGy9dMlpXpTHF8npeRk8qEgkBF9cJB7MmxQqH4gL6tQZC7ziiaNqcccn8Pf2LVbPwuZAygvQngirgC28NaEZAkoZD', NULL, '2017-06-18 16:37:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$a/wpuiIl/ilsblAIXMkV6OGBH14eIMUTvE41Xr.cUl9ljTJWgAFba', NULL, 'Hải', 'Địa', 3, 0, '2017/06/hai-dia-1497803849.png', NULL, NULL),
(24, 0, 1, 'taka_hct@yahoo.com', 'Thái Huỳnh', 'thai-huynh', NULL, 'MAhOMhNIOWJlpvvO8v3i6Js0j9AE_Upj', NULL, NULL, NULL, NULL, NULL, NULL, '983155905152262', 'EAAai9ZA7lamgBANZCUeEEZB5ToX2oV2YD69LiAkjuMNZCZBIDTq7QsZCEGEDgTNKw3HXX93ZAejuofYr7fU6XVZAhZA79KtSowZCv37lOmD3195LW9U281bajCieQcrdTpOlVZAZC8nYDjzMKEjZAjqp8AEhqT27OxMy6QGxE0KPYhlfERQZDZD', NULL, '2017-06-08 07:09:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$kHuDUGa3I0VFHgUBgcb8n.MXWBCSg3hb1dQu7bA.bELy7F5hI.HxG', NULL, 'Thái', 'Huỳnh', 2, 0, 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/18268386_971084469692739_2017311177733224843_n.jpg?oh=aec739cd08e25d1ed4198ff4be884253&oe=59BC7348', NULL, NULL),
(25, 0, 1, 'vnhgroup4m@gmail.com', 'Mạnh Nguyễn', 'manh-nguyen', NULL, 'Q8PvzEdeZ8VEIaVKu_dbjlvyALLAIfkh', NULL, NULL, NULL, NULL, NULL, NULL, '2122783284615130', 'EAAai9ZA7lamgBAMOahGR9NfQ1Q3QmnNxmlvWeKCYwZCgmZAqaXCykyyjvDYuJgZB7cjoBn0uDKbHGJ39vHqGXh7PZANxpZCVTitCWglvyRsONoD2YuoR1SeYZBioG4a5Hzjzyrg2D8yjnS6VfK3ZAsr7dBWpeJZB3S1fCMeaK0OK8HcZAizQF67ZAok', NULL, '2017-06-08 07:09:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$1iV9zeMHiKbW6E2DC7rmgeWEvWlrA2IJndzCJcnHReoGFec6r8OOy', NULL, 'Mạnh', 'Nguyễn', 3, 0, 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/14731220_1988057818087678_5204125562891818510_n.jpg?oh=80212f441a0abdae488245bd31079a96&oe=59BCCF20', NULL, NULL),
(26, 0, 1, 'virtual_loran@yahoo.com.vn', 'Thần Hạ', 'ha-than', NULL, 'wnWJmucn20snO0YgQ3Iran7BOicpwdAm', NULL, NULL, NULL, NULL, NULL, NULL, '1063416623758677', 'EAAai9ZA7lamgBAPyLfoWEfpUr9XIA1Xu8tEa5MEeQex3DZBbZAoGZBgAx5lUqkGhHr2qcEw9TJGjdXgSv7lQ03ZCFaehWHrLltZBm7SMdKxDQfdwZCjKE6SWz1aqkAnUpLvZAxZCL5qoGtMQGrMJ3D4pQtF86SqW8OusZD', NULL, '2017-06-08 07:09:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$qtPSh63mTI87dmMylAs5Ae9ebg84lQlRQd3BDMb..ei6VVCv8ng.S', NULL, 'Thần', 'Hạ', 1, 0, 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/17884624_1024711460962527_6223587716878015296_n.jpg?oh=64aaac9ff40b794f6e02672cb09556ed&oe=59B9EB17', NULL, NULL),
(27, 0, 1, 'tram.nguyen@vngos.com', 'Trâm Nguyễn', 'tram-nguyen', NULL, '_ddsO8haHOt7_GkIS6jspSpTRQWr1njA', NULL, NULL, NULL, NULL, NULL, NULL, '1976859765867237', 'EAAai9ZA7lamgBANxKyi5pjuE8IIQF1KHPtosZAMLYTlLNfqHIv9iX15CnuTRnXo7ukf0NMxGXZCZAwuQY9BOnRogSZBLZCsZBZB9zGgXgBmqsgSmqnNG1YqCMUwrJK6japbKukZCg0J7PjmlMm7LbpqNH33iisjUIVmqAatZChXkZBBAAZDZD', NULL, '2017-06-08 07:09:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$imUQD7aFI2HlQTPka6At.u17b3qry270glY54bmEEeLumkSdcvyMG', NULL, 'Trâm', 'Nguyễn', 3, 0, 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/17424744_1940820429471171_741783610337899292_n.jpg?oh=b0d5d0f05ba6f4f44586e2f17fd81f97&oe=59A62044', NULL, NULL),
(28, 0, 1, 'damquocviet1204@gmail.com', 'Dam Quoc Viet', 'dam-quoc-viet', NULL, '66acyq1cPcJGkybU93LtjfOkerAlDEE-', NULL, NULL, NULL, NULL, NULL, NULL, '1534148859991050', 'EAAai9ZA7lamgBAM7aPfrKYgDhxfajxa7EBXnQCqTCjoZBhxIQnTjZABwfQG2JsSMB7QZAdURz0JBdhgamVVCvhG5XP5ojGWnlf5AhyQGDV3G14ZBinaZA5nO4NNqHPKl6IShByiE9lDeGan6upTJZAt8BOdhm32OiEZD', NULL, '2017-06-08 07:09:59', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$8O1pp2TmQhDUQwNcgPxXa.PAN25t5oBlotGLSnslvJ74RzsaEe/3u', NULL, 'Dam Quoc', 'Viet', 1, 0, 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/14199634_1191315107607762_388905719225260932_n.jpg?oh=7636171db8924ce32def14aa00d8aa3f&oe=59B07D11', NULL, NULL),
(29, 0, 1, 'thanhtam8293@yahoo.com.vn', 'Thanh Tam', 'thanh-tam', NULL, '1jgLtBSIMCA4e6jAevDB4ZbIFAOR_osq', NULL, NULL, NULL, NULL, NULL, NULL, '442481566114999', 'EAAai9ZA7lamgBAABZCk7j7JxtU7sUOsGZAVLR3KZAxWmUMWXLgqAS5BW8oB8skkId02f9ljRKlnZC6XPgAWWfqlGdpBhdhRoYFbFpZBfVak67H3Dz2N9ixwtqKjNR9NVKryKfqAUEZBvYDKZB8ZBeK74ZAo8P839VQqEkZD', NULL, '2017-06-08 07:10:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$TT3Nq2AgDaYT58DEa7PgMum4h6KCdvPyEkGQ3tR73QNB/0cZq8/RS', NULL, 'Thanh', 'Tam', 1, 0, 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/16473736_380010859028737_6138103129595181642_n.jpg?oh=6acfede813e891bb1819314473d5d734&oe=59E4BA7C', NULL, NULL),
(30, 0, 1, 'dasdas@yahoo.com', 'sadsd dsad', '', NULL, 'svBDlXgDrjMXtM5z6HgazMkbxCpXfT9N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-04 10:43:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$MEwJVLohwDKFkeHVAZFvXuD8L8iiVP5oYwI27lRIFPgqxfGHiB.LC', NULL, 'sadsd', 'dsad', 3, 0, NULL, NULL, NULL),
(31, 0, 1, 'ductrungts@gmail.com', 'Duc Trung', 'duc-trung', NULL, 'VHVrsjadKIlU5hKbOON9HIGdB2bR9f6_', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-08 07:10:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$8izAazERXn6lVRPHl5LyueTj7Tj6JocXHBtgz5JGvCZg8LBE7lUCu', NULL, 'Duc', 'Trung', 3, 0, NULL, NULL, NULL),
(32, 0, 1, 'stella.panda.sarranghae@gmail.com', 'Quyen Do', 'quyen-do', NULL, 'uKc0Hw8luiuF4ZtnNw7jEzzDxagMX0XM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-08 07:10:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$cEKntJy2M9eiL5MaU3MMaOlBblp8TRBDqpXpfZx3cGPH9c8ZNuw4.', NULL, 'Quyen', 'Do', 1, 0, NULL, NULL, NULL),
(33, 0, 1, 'nguyenhuynhminhtam138@gmail.com', 'Nguyen Tam', 'nguyen-tam', NULL, '6tXJw0o0-06VHT2Ysg1gBxE-jzwMyIMb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-08 07:10:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$lRrpJeKY05ILjgfei2ezCu6KYr5RcX3my.PA5iUGX77RcCUy7viwK', NULL, 'Nguyen', 'Tam', 1, 0, NULL, NULL, NULL),
(34, 0, 1, 'Anhdang01291@gmail.com', 'Tây Dâu', 'dau-tay', NULL, 'QgWJkwBwpPYYJQF-18Li6HpuGSzZQvIk', NULL, NULL, NULL, NULL, NULL, NULL, '219948878515281', 'EAAai9ZA7lamgBAIBXDbYUlHF8eXWYJpTQSQRGsNVFYZBNSdbyVWY4xBjN4x7dY4XB2ckhw80OhfVYR9r3uaRZBzRmtP55F7FM2avCZAY6B5ZBBUadM98mdPj0VzJVA7vJEGwiphMaSTRo5opOAHEDM08ZBFbZBVhwagcvzkzQl1zAZDZD', NULL, '2017-06-08 07:11:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$0qvL0JbEb4.Dnv3mX/M35.Yucy1REJC8GVaaHvaJarDBxqCDCOI6q', NULL, 'Tây', 'Dâu', 1, 0, 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/17952649_192610727915763_3324351585332631476_n.jpg?oh=916cef7bf89edb20fe92c2a2e3a5e97a&oe=59A141DB', NULL, NULL),
(35, 0, 1, 'nguyenhoaitrucly@gmail.com', 'Trúc Ly', 'truc-ly', NULL, 'U8o4FPBaMOojW6PUIsSNW5fBHM7LD4WP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-08 07:11:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$t/JevZzfqgO6OYNqdi8Mm.ze0VpobHhQ2UtCq4aUCWZL8W4wqOYV.', NULL, 'Trúc', 'Ly', 1, 0, NULL, NULL, NULL),
(36, 0, 1, 'ogames.vtg@gmail.com', 'Trình Nguyễn', 'trinh-nguyen', NULL, 'g_CaVW9ARZotGS7UwK60tiBX5k7ywRZS', NULL, NULL, NULL, NULL, NULL, NULL, '428304180885047', 'EAAai9ZA7lamgBAEQEV9GecTMQQFcZAAZB79ycUSmOxMylVppyvo6CxuwmtQ1Bk2O3IWxKYAxjMZC2KsDZAW7JZCk2vRD8sBjxvVTZAmwzlPDsiTxc0VBbCnFi2gReCEmC62p2CyuZB2bckd8HolAJNqpMnWKHerpYOezZB0GVrejQEAZDZD', NULL, '2017-06-08 07:11:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$Th9IYKm3KbxLIXiI61Px4.f679CJlEddStedaf8HZtaVHli0bM2S6', NULL, 'Trình', 'Nguyễn', 1, 0, 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/18519826_419869945061804_118456042226496054_n.jpg?oh=d7b8915c29f77218947f489c6e1294b7&oe=599BAAF5', NULL, NULL),
(37, 0, 1, 'linhttan8338@gmail.com', 'Tân Hoàng', 'hoang-tan', NULL, 'LaezQNwiaf5-tTBmdr0rdNIzOaW7inja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-19 13:48:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$m.QbHBdjlnmQUjqMVB4.3e8kz90DVmbfCJox.yIEmMMGyp3Wvf.kK', NULL, 'Tân', 'Hoàng', 1, 0, '2017/06/tan-hoang-1497880124.jpg', NULL, NULL),
(38, 0, 1, 'phamtuyen.5t@gmail.com', 'Pham Tuyen', 'pham-tuyen', NULL, 'wwBUchOJJceaHxRPNVOx-k-9_AR7dIc4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-19 14:15:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$gYr/Yp/Vt8bR16uv7ns9.eyBwJXlMlgb0P0h7dA9jEX38vPN.dG22', NULL, 'Pham', 'Tuyen', 3, 0, '2017/06/pham-tuyen-1497881753.jpg', NULL, NULL),
(39, 0, 1, 'duyenle2510@gmail.com', 'Lê Duyên', 'le-duyen', NULL, 's2h9iXUuMDgMq2bt13JJRhQ7ecbgFA9B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$f8VWWz3YrPh./9BkXU1Z2.cXTrvWZPgfGKClm.2kMrtNeI27VdaNW', NULL, 'Lê', 'Duyên', 1, 0, NULL, NULL, NULL),
(40, 0, 1, 'Dothanh.hua@gmail.com', 'Dr Thành', 'dr-thanh', NULL, 'euX0A61G19ROj2zOPNwEu8kWks74_5c9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-26 07:51:33', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$YADCvOZ3pGEOTqTntzEYbe8itZ/ElCuN.fNvBF6fAJ4erCE9P0ZPO', NULL, 'Dr', 'Thành', 3, 0, '2017/06/dr-thanh-1498463493.jpg', NULL, NULL),
(41, 0, 1, 'tee@riseup.vn', 'Xuân Trường Nguyễn', 'xuan-truong-nguyen', NULL, '3nLhEGfqOZeD6Fmu_Vz8gFGyz28px_E8', NULL, NULL, NULL, NULL, NULL, NULL, '750706765111920', 'EAAai9ZA7lamgBAGP6WxQXZCdq35ipw8Cs5sVMnu3loO8LVy9Xop8IXnYRBwOZBUKvIA8VbUqlTZAiJhsZBZAobavs3ZCS0DencHqOHZCqBnQXRF5N79ibyJ2QDineRFWIAPUeFvpG82rZB6NTm8kZB1ZAwCs37FwDstl4StyDdX3ZBueKpO4XoYewSj5', NULL, '2017-06-27 05:05:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$aY4PrpXGtFbhbsIehiO.sekNmmaldMDwlhkA/iqkOF2/AjHNmxLfG', NULL, 'Xuân Trường', 'Nguyễn', 3, 0, '2017/06/xuan-truong-nguyen1498539930.jpg', NULL, NULL),
(42, 0, 1, 'ttctc93@gmail.com', 'Thành Tʚ', 'thanh-to', NULL, 'wb0nOeoOq2kBqQrbA06rFOe86HalQkrJ', NULL, NULL, NULL, NULL, NULL, NULL, '1253536948106345', 'EAAai9ZA7lamgBAP30ZCvl5RmJvY73kIRmpruHGNBNI7NRBlfSludYZAY80d1NheZA6ZBZCEt3WZBVM7KbgFNNlqKG4J056Ix1v007JnIquXlFoh8ducjERmlDOg4YLoUKjeoL3NXjYZC1zgHbveaUpECpZB8yFMOrZBeEInUxJbrazvwZDZD', NULL, '2017-07-27 05:07:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$Y2P53W.TE1ajxik6OFEGqOBR4LS/M5evKdNAZ8.ZZ/piRyTpO0VlG', NULL, 'Thành', 'Tʚ', 3, 0, '2017/06/thanh-to1498702500.jpg', NULL, NULL),
(43, 0, 1, 'ntthao6793@gmail.com', 'Nguyễn Thảo', 'nguyen-thao', NULL, 'tKkXAl43w404CHk9vdbID8HXJPvP1V1I', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-28 13:31:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$hsVcHPdT.eSXaqlFgojKA.1avGuPVmI3sVZ8LJCL3Kc9CGnBYm1cC', NULL, 'Nguyễn', 'Thảo', 3, 0, NULL, NULL, NULL),
(44, 0, 1, 'tranlong.tka91@gmail.com', 'long tran', 'long-tran', NULL, 'nQS7lvWq-AuYOQOmIJTaFL_dMufMaFbu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-02 01:26:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$W9qLeFAF8TA0GykQXNWHsuNRIslbucCGF/1v1TGnfeEdyIgjL7M12', NULL, 'long', 'tran', 3, 0, NULL, NULL, NULL),
(45, 0, 1, 'Chuthimai.vnua@gmail.com', 'Mai Chu', 'mai-chu', NULL, 'vtgjjLdIuPjj2lv3vvfwkRm1wrU4_mSR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-27 05:07:22', '0000-00-00 00:00:00', '2015-01-13 12:33:00', '$2y$13$BGuJ0BwcIhF/QUv/4Fih5e3cMubHz3jK3B/DnN82cpKoxnOT83CSa', NULL, 'Mai', 'Chu', 1, 0, NULL, NULL, NULL),
(46, 0, 1, 'bichthuynguyen461@gmail.com', 'Thuy Nguyen', 'thuy-nguyen', NULL, 'ZZPylQsQgIYFMls-oa2lg26s93qqRvzb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$CsfmzoRUKx65yu4ql68eRO7C0FczRZzGtIMve6Gia.cCemTUFD7dy', NULL, 'Thuy', 'Nguyen', 1, 0, NULL, NULL, NULL),
(47, 0, 1, 'vanquyet12092001@gmal.com', 'Nguyễn Quyết', 'nguyen-quyet', NULL, 'oS3BK3bTDKh7nUPoCcGDUHm_j1fsnovM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$O6Rt424botDNlTFqquLxNO.Oho7MbqaC.Ho3KKkqPJcqaE9qc9Zz2', NULL, 'Nguyễn', 'Quyết', 1, 0, NULL, NULL, NULL),
(48, 0, 1, 'mrnguyenhuuduong@gmail.com', 'Hữu Dương', 'huu-duong', NULL, 's2cOzvjlFtxPgb1peN7AxqDQg2aga33L', NULL, NULL, NULL, NULL, NULL, NULL, '1493699697335377', 'EAAai9ZA7lamgBAEVFD2oAwhgjZC2uZAbwKGsgWkgjctSDIdNhNnilPbk8VgW2EM90BbhG5LjD33pi84zSiszo1Gs4KFmuLWGycA7bSOX61cdyDqZCOZANnrGTNBxfmHfHPZC6fzZCxZCZChpOpdKy3pqBGBBfNcqgvS320CrhAIZC1zwZDZD', NULL, '2017-07-31 16:16:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$U61r0YFz90Vzdac4DR498uztrbhjU2VAdwbge6hSkpOXiMgrdPZYm', NULL, 'Hữu', 'Dương', 3, 0, '2017/07/huu-duong1501517763.jpg', NULL, NULL),
(49, 0, 1, 'badboyii1987@yahoo.com', '中村 伸介', '', NULL, 'w5PUWrO2HSWkqVgECCQNG4HVnlmcyMmk', NULL, NULL, NULL, NULL, NULL, NULL, '1571999236205388', 'EAAai9ZA7lamgBADFZBEbFnGABbUntwvAKEfnSzwLrfBunmraQd6XQCKXJTDBiXdazDJBl6gWlf87vcZCZCNahgjAaI9ekvRr5S9j61tworxyZAjIZCnnki4rxr1XpvJnpo5hN47M4woVYk7cZCeEirHZBByw8XxbaldSA0sdNLIgOgZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$HBoUKFeb3rNb7uOTRjmoc.DawktUrUG0HuwdbwDxTvJCXqOQi7QMC', NULL, '中村', '伸介', 1, 0, '2017/08/1501745201.jpg', NULL, NULL),
(50, 0, 1, 'nthanhdat86@gmail.com', 'Ngô Thiết', 'ngo-thiet', NULL, 'KF0Wy4SdBl4jYf9Xu5np4FRPM8sFlemF', NULL, NULL, NULL, NULL, NULL, NULL, '306685139793073', 'EAAai9ZA7lamgBACNZAZAER3XT1X8ZCcZB9ehb6tCDx5ntrDKluPUk6eeTT7vK90Rdx09KVJ735KUWkQDN0Y1lBPZA3ziMZA7QXzxGcboLzWX2YEsSySAcCp5mZBK4yd6j4ZAQNRZBYCNCL74NTewnxzK3WJOZCwH84TLPZBQASAaC0kmfQZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$3f0VuCNf0hr7bZzqkT9Yf.oBmQvxtS7qX7CuxTJbCD6uaVdNsuOCq', NULL, 'Ngô', 'Thiết', 1, 0, '2017/08/ngo-thiet1501778688.jpg', NULL, NULL),
(51, 0, 1, 'candy_vienkeosua2000@yahoo.com', 'Ly Nguyễn', 'ly-nguyen', NULL, 'PVBrAn2KGr0uaCOkUPaVtuDxpMaR60c1', NULL, NULL, NULL, NULL, NULL, NULL, '1530888476976210', 'EAAai9ZA7lamgBAMpgAQmZCGfwZBEfvYqZCNSZAffPJEqMZBPgeqmxKrKPwhTkZAiQCtIifG4Nw2fzOjMyQz4Vo3akPoZCAotFUWA0iVhJ3pbU6YfVailUjuSpQIvJ0EzEh5800GZCxZBTOLMJzU6CO7KDkFqDW2jTcEZCKvtNudgMMiUgZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$ZkmnEnJmJRFmz/oA.1N40OWAu8tZ0RC4PtEFDFN2qL/JQljVwgHkC', NULL, 'Ly', 'Nguyễn', 1, 0, '2017/08/ly-nguyen1501830660.jpg', NULL, NULL),
(52, 0, 1, 'vudinhquyhd@gmail.com', 'Vuquyhd Vudinh', 'vuquyhd-vudinh', NULL, 'MmShXZ2aJRPXlaEwZsjMbvu8eKhvpWbg', NULL, NULL, NULL, NULL, NULL, NULL, '854468001374122', 'EAAai9ZA7lamgBAFZCZCukza542hYlfMQGX0h662iW3vdf9ayrA3mOeXUFyupmg9vjCPXlMHMa3c6FlZBwExiKFRzTjh86BCJYXnqAnQJK4HfVNw3mO2uWVCZChLuWTMgV33C0mqZCXk6WdbCdEfu9wvvh1LD3bESnAZCcohK43VOgZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$4yzC5Psz6gV280iuZxNQTuk/JYrMOV.X2Yg7tvJHvhoRgF6uymv42', NULL, 'Vuquyhd', 'Vudinh', 1, 0, '2017/08/vuquyhd-vudinh1501831534.jpg', NULL, NULL),
(53, 0, 1, 'cadi_kute@yahoo.com', 'Anh Biết Sai Rồi', 'anh-biet-sai-roi', NULL, 'lfGizmW5rQcJfVRiJjkuwGtur9AmhOM2', NULL, NULL, NULL, NULL, NULL, NULL, '707477422775226', 'EAAai9ZA7lamgBAMvcCUwQcFShIIP5QHedy3ZAqQkxOH6ZC2RpAmKwfbURC8ZANmxnAaFwjqke9yOWYQZB2OGws9UZAvTJZAnSORdYcZCW3kxYOLMSNfXTr55S5PPCoe6LX4lQPExbeT0IlynU2oHaMkHUFKDl6UXsepcWeK4C7gIVAZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$wtgtuavvtk32CU6Jl2HSxOWUN0YqsjtCtdjJzVAW31.DuZiYUdYjy', NULL, 'Anh Biết', 'Sai Rồi', 1, 0, '2017/08/anh-biet-sai-roi1501885917.jpg', NULL, NULL),
(54, 0, 1, 'Vinhrom44@gmail.com', 'Thanh Vinh', 'thanh-vinh', NULL, 'i4kIks8sTGP65Ewg-yLKiGfW080_emi8', NULL, NULL, NULL, NULL, NULL, NULL, '497209840623871', 'EAAai9ZA7lamgBAHFUowhnVH2ZAkJ7DvVFrRpz3MZAsKGxG2PoGxqZBR8LS4gUCNYpbtadktUTtOK6KHiPRSh66visK4GEJlgsA5ssk2GPsNzdnZC3zWAT3r4nxXDfi823gVjZCtzbgxTDbsZCxRwhJD8OXZAtzg98WCRrOl6T5jp1wZDZD', NULL, '2017-08-05 02:38:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$Sd3EhnjM4IZiPBbs5sjMweIKrpFnSDIhGCdl5TnmUv9IT.oawvkUS', NULL, 'Thanh', 'Vinh', 2, 0, '2017/08/thanh-vinh1501900646.jpg', NULL, NULL),
(55, 0, 1, 'pupulovely108@gmail.com', 'Như Tâm', 'nhu-tam', NULL, 'aPiLPASayybOe9Gq8gOmJdU5-Ep1mc7y', NULL, NULL, NULL, NULL, NULL, NULL, '344608922662498', 'EAAai9ZA7lamgBAN4AuXyn2bN2jcaD1tMhXss8XE8mo8J3ulIhYnTWum7qMRAm5zXYhaOMlSgHr6dbaWGA5wnQShW26bSpQZCbPwXlIueXS2b8pLQz5RKpQROYPOVeadG6KB1Cd0d5qqdR7pTJOvTbZB5D5jGvXlZCUV0dh0kkAZDZD', NULL, '2017-08-05 04:12:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$qXwfRJacTx4CD3VO9mRITeHfEdQzHusjn.ti.mURj2I5bWRiE44mW', NULL, 'Như', 'Tâm', 3, 0, '2017/08/nhu-tam1501906257.jpg', NULL, NULL),
(56, 0, 1, 'iqweenz01@gmail.com', 'Tiếu Quân', 'tieu-quan', NULL, '5c7deJQc8XVID18aBzgVGqZRrCTZXhgE', NULL, NULL, NULL, NULL, NULL, NULL, '1058703477599249', 'EAAai9ZA7lamgBAIIgZBO6ZAKGT6TfqyArDmZAIELpkycRhr76eUZAsxTdfL5tZAbKJ0ZBiG0aX7Y5ExPfyLjwF7OHRQonmsCgHTJLGK4NRa8GQXA9aPRcJSUMl4sAMOy4JTnjSUkeTNq9hWtyxrMBOpeQsvGDhfbZAg6QJLgeCIivwZDZD', NULL, '2017-08-06 02:48:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$Z5vr0gctob.9vgrbGu.inuAD1Da6K33MVxigzWInMBv0x81uxf8oS', NULL, 'Tiếu', 'Quân', 3, 0, '2017/08/tieu-quan1501987620.jpg', NULL, NULL),
(57, 0, 1, 'phucpdct29@gmail.com', 'Phuc Nguyen Van', 'phuc-nguyen-van', NULL, 'Qofxfi3U2jQCZyXjOhvZFUDl24BB6ZWd', NULL, NULL, NULL, NULL, NULL, NULL, '662133257309880', 'EAAai9ZA7lamgBAEyOXQuw2nb4ZA5tsRhOYFYTYpZCMDBITMZCCh7Lev7D76G6DFSxJoGW4AkJvNw5qPeeU8v6Qn4PJISNR7jtU9hWguz5ESHqP7rQIiJZBcY4lWsR7CKlvVhad1TH7oFfvJdQabXsFGC1j6b20SMTlrYMWVIixQZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$45HY1Co1CHip1U8b.pBSneFJ2vAHfOjjx9e4agf/HaGQY8QLAynSe', NULL, 'Phuc', 'Nguyen Van', 1, 0, '2017/08/phuc-nguyen-van1502167484.jpg', NULL, NULL),
(58, 0, 1, 'chuanh626@yahoo.com', 'Phạm Hưng', 'pham-hung', NULL, 'GqlSHHTPplPPbVVIBag3AMNjjjq5LYf0', NULL, NULL, NULL, NULL, NULL, NULL, '1912305455759900', 'EAAai9ZA7lamgBAJ2GMaQnxEZCyWeKilZA4JkQL0jHhMfyjTEIUUsZB9dKO6UpTnkGoTcbmj0l0QR3ywlaZAfXBl8ZBuaZCwUy88F2SvnA2IHZBuGYfN8t1UpXVqEQZAUBfYVLTfqi4HfFLZBMrhdAiF0u4IcfLbJkUIkWsUFBNrltkXgZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$X30tlbBRdyEAlF7Nf1P/L.E.9xpYBroeS8K/f9bLPhO1VEoxK5vGS', NULL, 'Phạm', 'Hưng', 1, 0, '2017/08/pham-hung1502256689.jpg', NULL, NULL),
(59, 0, 1, 'votientai24091991@gmail.com', 'Võ Tiến Tài', 'vo-tien-tai', NULL, 'ej-sW5yuxEGQf2ESR0ZKlaPanXMcZX0V', NULL, NULL, NULL, NULL, NULL, NULL, '1577082238979011', 'EAAai9ZA7lamgBAO4ZA8tJBGmtKZBpX4vEMRj0kQhOF0pim4JZC1dauogkvMoTVxmRg5KtnZAxQGX0aqRpZB5KyGSJRBOhWOZAUhRxgSW3jeF0MhJLhiypWmeeHeBt3UMKaI0nP0D2Il3oXupM9SXtM5ZCFQJqYV8UYwlewWd68xQXV4nXPfIqvq6', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$WbKq/8komnzruk6T.nmpV.KD305Giu5evMXnjMWnu3CQUXLxEdyjS', NULL, 'Võ Tiến', 'Tài', 1, 0, '2017/08/vo-tien-tai1502293775.jpg', NULL, NULL),
(60, 0, 1, 'daisytv.ads@gmail.com', 'Hòa Khánh', 'hoa-khanh', NULL, 'IduvFHG8mzdvK2rz6YzrstL4m9BJXHK0', NULL, NULL, NULL, NULL, NULL, NULL, '116636718991777', 'EAAai9ZA7lamgBAGBIirU0XwXJnv9meIaSTb6iteYEzlT14lyiLD6bb9XdifohZC3TT84i2Fj3LXJPvwTfH3ZA8MjJ2WBWjVagYpoiYuyUhMTxJI9XxFV6qA9XF7yk6TKXPdDvsQoZBGSGvgwI6dPNexybxoTj6rvTkyOWZBjuZC6h33Iyhsaut', NULL, '2017-08-10 06:47:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$CLBUBRT6cOA6rL8NOMWdfuAlPDV.xC7Qsib6fCIe20Rxl5/GCbUsK', NULL, 'Hòa', 'Khánh', 3, 0, '2017/08/hoa-khanh1502347610.jpg', NULL, NULL),
(61, 0, 1, 'vt2g.sp@Gmail.com', '务 阮', '', NULL, 'EAR6TUcnFoos936x0IwG1SdA4QHam4vu', NULL, NULL, NULL, NULL, NULL, NULL, '417241348669568', 'EAAai9ZA7lamgBAJqDis6XUCUpxC4nOlFo5VIDr9rxJOaY6v8cCqFokk7LOt8wYxcMOao7drnXJlhV2Rzy59MTY1k0vFIoG4HTmbergxtIBqgURmRevPD9YbaiMUUbsGjollSHABSmhI1woxjQzMRJJKBKYCMqM4CKJTj9ZAQZDZD', NULL, '2017-08-11 05:30:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$86QhhPIUKRSmiENbFmkRPOXOAOQEl3Nw8CpB9.WH.tiwa7aWPBgTG', NULL, '务', '阮', 3, 0, '2017/08/1502429380.jpg', NULL, NULL),
(62, 0, 1, 'bosaudoi_8996@yahoo.com', 'Thảo Hương', 'thao-huong', NULL, 'EsQREyapeZVADIVfAb6VVDxRLebi1uwh', NULL, NULL, NULL, NULL, NULL, NULL, '416563652078644', 'EAAai9ZA7lamgBAPZAJQOcFSkggUTGpRJBtP1ZBkxjvBadaGptkuzOfJOR88y5iVwLqZArQDUNX5tIEH6dODVLVm3lkG2sWRMsQ430u4GW3UtnH8MBOmzdMPdZCmZBZAuAtaxt7PgOx5QY60vFMzaxwwpkgDQGcb0G0AGqoaQZAjqtAZDZD', NULL, '2017-08-11 12:30:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$m22eFav9Tdek5fGsY675yOmTckqhUOhDDOzbYCWkly.im0om0J8S.', NULL, 'Thảo', 'Hương', 2, 0, '2017/08/thao-huong1502454591.jpg', NULL, NULL),
(63, 0, 1, 'luucong1991vn@gmail.com', 'Lưu Công', 'luu-cong', NULL, 'JtmRSdt6kDmDb0zbTuF1LpiXtUr4QCsb', NULL, NULL, NULL, NULL, NULL, NULL, '1109983332435923', 'EAAai9ZA7lamgBANhFpwnhytALbwZCQI9FHUlvHXaxie6k8lgbnZAJdIjYfYNuX6WiMwDjMAgeH4JtxU16wXBXa4wc6oFFZBHZCS1JAtMah4neGP0p5d5Kr8UZAHZBOgNgm428EIdodVByVxx4VX8fAzR5OzpuEKZBYGDKFbEZCNyBaQZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$1fKAviqxUBI.toeKNCBM/eN5JUJAtckdK5tJlcmCgUZIhgktW7WXq', NULL, 'Lưu', 'Công', 1, 0, '2017/08/luu-cong1502506450.jpg', NULL, NULL),
(64, 0, 1, 'tieugiaosu1@gmail.com', 'Tiểu Giáo Sư', 'tieu-giao-su', NULL, 'uXJgG9nSlm4KZp2uFBZz8Xg4bSdud0Ux', NULL, NULL, NULL, NULL, NULL, NULL, '1930317867255951', 'EAAai9ZA7lamgBAOHjzHes7N178LYVOXtFX9qlbq60QvRvlFOe2eyJ7t9ZCZA7HBu1INgVR5LZAEonZCcBJ2GJscEB64E4GZAPFvoKSbAoVdAILZBn1sCcZCC2ez81Jdo233qUTC9rESwZCLpdFdGO6XDNoTzLeed0PJ69VsvjyTCqjQZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$XlkrHx/nqKpIwIGb1criqu4nV2dy9/mp9dWY.EQ808t.19UWKbqmS', NULL, 'Tiểu', 'Giáo Sư', 1, 0, '2017/08/tieu-giao-su1502673832.jpg', NULL, NULL),
(65, 0, 1, 'nguyenviet301295@yahoo.com.vn', 'Viet Nguyen', 'viet-nguyen', NULL, 'LiNlIFJxcwm7xEVgwUa9Oh_fN1nZMW8c', NULL, NULL, NULL, NULL, NULL, NULL, '1974313176139839', 'EAAai9ZA7lamgBAKZCtIZCDTpKd2kNuvLX5OeZAyJ7cQhLwkILdeJioDKttp7uWXcUg7zhTjfsASN2mq0X5j32VhysZBJFYuPRDVF5hMItmanpvHT2M6ZCo1iBasmoZBbRd1EYRtzLRIyIPZADmV4aQeSaWdnUyNjTWRNjotadaMRLgZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$eBsqIb2vVQrPG6d9x9u.SOZznbdtXPKmuzeeq4zDI1KImI61O/mae', NULL, 'Viet', 'Nguyen', 1, 0, '2017/08/viet-nguyen1502695213.jpg', NULL, NULL),
(66, 0, 1, 't.van511997@gmail.com', 'Thanh Vân', 'thanh-van', NULL, 'xN1kWOBG1mvsCi8fICmEuPn8alo5bYcO', NULL, NULL, NULL, NULL, NULL, NULL, '1400685716718646', 'EAAai9ZA7lamgBAOFM64mMmpAUJvtt1gWqeJG1dDuMqsfy8mZB3nRYsk67OuB2pLAafqobqRKiCIm1EImDPsrF9MKPpqmzW3NLEWRvaiCFRQx3CveFNNC5hZCNvdJZBZBMhLoPh2l47McRHQ7S1a5zjCQPeZC5bvtYrEM3FibMZCcgZDZD', NULL, '2017-08-16 15:08:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$FGaK93RPwKFZahgfYIjeMejNhxmwWQpa4EBFhZTFDtUPECMhCtEvK', NULL, 'Thanh', 'Vân', 2, 0, '2017/08/thanh-van1502896038.jpg', NULL, NULL),
(67, 0, 1, 'congluanhuynh1811@yahoo.com', 'Luận Huỳnh', 'luan-huynh', NULL, 'ACcLyE4wi3L7vasTOZU4JjgZCsGvyspe', NULL, NULL, NULL, NULL, NULL, NULL, '803019089880241', 'EAAai9ZA7lamgBAFG7OOeQOkJhGjcZCgeVv5eC9oVLJK6ZBfE7927koToiLrYesebHliTj62zdjI08nzlR11ri5rLbOjzGDqygD1u7VmwnpW8TlZCjPsBWIdDTUr9wBAAWDH10YmXeRZCBmqvLlFDCKVhmlhQAFsSiCgZBX9ZCVaOwZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$plqgvC8kB5vioD.sVegZfeWcoXjQss5uxUN6z4IHOHkl4FmfP0zxi', NULL, 'Luận', 'Huỳnh', 1, 0, '2017/08/luan-huynh1503111464.jpg', NULL, NULL),
(68, 0, 1, 'nguyentuevinashin@gmail.com', 'Đưa Tin Người', 'dua-tin-nguoi', NULL, 'm1veDrfrM2by1gqrLGWyxAbAkGfDEaKZ', NULL, NULL, NULL, NULL, NULL, NULL, '563123657411987', 'EAAai9ZA7lamgBAF6UuGRW5YLwaVIdPbrVJWkmKR12OWVbabIyP2mDvvf8wuOWXuu6DlkxyDZAkXbz0HZCFo0wo6bcxjnHYVZB1qm9FO4UbiOMJKTeZAXNLIIioQqHKRAeUbXw4ze4uVO8yKhr3nZAQMQ1mb0xvn4ZCv0KYJdQ5xRgZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$OJdgAvuMD.VMeZUr7w8Igectv8DUb.KTROhJpi1YrpPg8HH9VoO3q', NULL, 'Đưa Tin', 'Người', 1, 0, '2017/08/dua-tin-nguoi1503158648.jpg', NULL, NULL),
(69, 0, 1, 'bombeobambeo@yahoo.com', 'Trần Văn Thìn', 'tran-van-thin', NULL, 'BP9EVTtQ3fljUuL5Rs-_Onb-Q9JkI19U', NULL, NULL, NULL, NULL, NULL, NULL, '1950656415211109', 'EAAai9ZA7lamgBAJrLaoDBmhzgZBGgxsB9gwa3yAKCtasgEPQ3HZClOuyQVd8Vdf0Y76epzO4QUOUG1GAzpIDvbG3ouvFoZBFVA9pBNZAC4kOPhHkinZAwVZAhPyaVLhyKJCFqzZCQrgGEC6VzLpMZBIZBNF0FZBaoIZCTjxtfhSGNNw7vAZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$s6MnRQXTSe02ZQyx0RFzueP0xD.GkzB.SRUC/TQTik.cmeuBz3aJ.', NULL, 'Trần', 'Văn Thìn', 1, 0, '2017/08/tran-van-thin1503207094.jpg', NULL, NULL),
(70, 0, 1, 'thanhduc382@gmail.com', 'Duc Tran', 'duc-tran', NULL, 'KJ6sebQG3rjx95HnNMMhztfWVazw8Plc', NULL, NULL, NULL, NULL, NULL, NULL, '1908622086077744', 'EAAai9ZA7lamgBALPnUDAzHygbuXfqcym1ueSNHWAEhiZAIH5ZCtZBH8XQflP6aiXgaGuKfroaWO5UKf8kw3cQxLO2Ks3LtExGZB0EZCOA1xMsfckZB7yag5dTKWx7FxoMPpZBY3luWvEpKFDP7OhbJJ9RB8TXORyUVgyToPDALmI2gZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$McX1vYAoJBlcpa57Y8ijOeJL7lzVTb31ciGEA4OSJpO5W0HPnlHny', NULL, 'Duc', 'Tran', 1, 0, '2017/08/duc-tran1503306160.jpg', NULL, NULL),
(71, 0, 1, 'dodinhkhai@hus.edu.vn', 'Khai Do', 'khai-do', NULL, 'riE89cpUDAlFQNabAjuXR6oDv1R6KOaY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$5U0QbeiTmeAL8d3y68In0OElnG/LYbqRva/B7pir2sZKD1tH7NqJ6', NULL, 'Khai', 'Do', 1, 0, NULL, NULL, NULL),
(72, 0, 1, 'hitoriki2010@gmail.com', 'Quang Trung', 'quang-trung', NULL, '770CXZ979oIoPr10xueVhOez5QxVUipI', NULL, NULL, NULL, NULL, NULL, NULL, '1453397144756020', 'EAAai9ZA7lamgBAFhkysf5FBQbHyE42pAw1E1YZADyeZCvKE5sFqDg1ebZBacsh6ZADSOLfXPr8uZAUBrlKrYcsJAvG3LJycsnvHv1mKUHmrGpa4sw8SiEfbbuwbc74iA0R85EtTMPbZBqSUKrvKZBQ35IqRc7k7PzyZBxN629C6ylswZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$vRcdrRyoOO7.yt5ry/y3Be/qt8S9hhusizAUTELZpBg7H1sFHCNj6', NULL, 'Quang', 'Trung', 1, 0, '2017/08/quang-trung1503642136.jpg', NULL, NULL),
(73, 0, 1, 'sun.mspr@gmail.com', 'Nguyên Minh Trần', 'nguyen-minh-tran', NULL, 'Nx3ukHGcLFM0Jh66396dSNwuQCE7Nz9_', NULL, NULL, NULL, NULL, NULL, NULL, '515546298781775', 'EAAai9ZA7lamgBAPiRm6pQJaLzjOdSyHkkGDZASopT71elK4VoRTKVIy1941hE32NiUN6ReSQ14yCp7LtCLPHNUydHZAnRYThKgrLNvsXLtdgZAB8K7oH9Kqbxv89gZBaBNTj5F3dWy9nwcZAtmM8fZA7WWCRdc5086NPEBJdQPLwwZDZD', NULL, '2017-08-27 11:04:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$bpKbk5hs6BXoG4FCP0dujOKhoP0UkuIJR28tV2wX8jTySX9Qz9pbu', NULL, 'Nguyên', 'Minh Trần', 3, 0, '2017/08/nguyen-minh-tran1503831336.jpg', NULL, NULL),
(74, 0, 1, 'xuantruonglk02@gmail.com', 'Trường Xuân', 'truong-xuan', NULL, 'T26l6XmsfEANRw-WcrgmmZZDbl5H987e', NULL, NULL, NULL, NULL, NULL, NULL, '369196433498388', 'EAAai9ZA7lamgBABm2ujtuJ5VlftL0R11ftqVplZBYOAeZAEa1suOuBDZCNclyY5ZC1ZCvCRC2tZBY3N46oF24MJzFsSNNMXAgfBj3314jPjkZALSLgQkRxjBrWKZCwi5TwT4CIZA7eGu3ZCZCVvf2uOWOKlBiggwLrr4OI5kZCf4dq1hUfwZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$hD56GAnxFpQl2yghVGwT5u.E93St/bZ5An9V63UsrtEjBcEPJ6C/6', NULL, 'Trường', 'Xuân', 1, 0, '2017/08/truong-xuan1504015679.jpg', NULL, NULL),
(75, 0, 1, 'vuthimui1979@gmail.com', 'Anh Nguyen Vu', 'anh-nguyen-vu', NULL, 'iG-CF3T2QGVNh09DPFhdlQU6NBnNtblx', NULL, NULL, NULL, NULL, NULL, NULL, '1402182966568128', 'EAAai9ZA7lamgBAGMWrU3raf26uobTtDdY4fJJrVHmX4nfvvGWQBSR4uesexDCJYZBzdQIsZBmTC2hPZC8Oc6MZBZCr0u8QjEZACMvh3f9klZCmKftlk2DZBaSrXr3aucKnpsRkTqIQY1MbdB8cCTQb1UsoZCVDHgXZAbnj7RKQbnTsZACgZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$kxztsqMj35EWiqdBKZBna.LvVr/hGqwb9ZAphcz8C5e5W1wWh6Zk.', NULL, 'Anh', 'Nguyen Vu', 1, 0, '2017/09/anh-nguyen-vu1504237020.jpg', NULL, NULL),
(76, 0, 1, 'hoangwiwa@gmail.com', 'Hoàng Nguyễn Văn', 'hoang-nguyen-van', NULL, 'xTQ7aAhupwcgFilWRVwgJoYsu4WhEnIr', NULL, NULL, NULL, NULL, NULL, NULL, '133333253954729', 'EAAai9ZA7lamgBAF7HI1vEHHOgZAgqz8ZBCmpDsZAin4XT3HwUHbkFH2fa8dcU7qMacX1HOfvlOFqgtYxEJZBxVJtP1KZBOPcAZBrVFwlZB1ZAhmV0dZB9bMLHr9IwSlujeoOZAh4vZAQQAo2hygv8YcqyDTMHz7qsSsYkxPKenCGBbjICAZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$wVF9gM8phBfwzKwiyozU7OEbG9UVUnS82BeKPLQN4AROKo4sFlfom', NULL, 'Hoàng', 'Nguyễn Văn', 1, 0, '2017/09/hoang-nguyen-van1504541821.jpg', NULL, NULL),
(77, 0, 1, 'heotheki99@gmail.com', 'thế kỉ Heo', 'the-ki-heo', NULL, 'MxQyPsqL82hRX8db1xdOWdus4_fe5ANb', NULL, NULL, NULL, NULL, NULL, NULL, '957917934360755', 'EAAai9ZA7lamgBAPlF3PvNnVIQjjSdQ1foAzI1LA4gO8954VkjKtwFSZC6q5NpZCVFoZAzZBZAr7QKrQmAZB73KKjjT606aCBjm3ZBCmLMFAHlga1B8HHIRFGY1rZBb7aW9YiZARmx0BotujHV5fYDc3MZAD9NAjMZBZAIQYCIcWonRUw6FwZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$Q9dsQdHK/K/GEbo7lkiiMePpbjNUnd9YbVzIedWIkAWeOGj4xR8Dy', NULL, 'thế kỉ', 'Heo', 1, 0, '2017/09/the-ki-heo1504845308.jpg', NULL, NULL),
(78, 0, 1, 'chicancoem_tronggiacmo@yahoo.com.vn', 'Đức Lê', 'duc-le', NULL, 'aepf_Da6vZUrDOvCiWejW_AEc5WAIk_m', NULL, NULL, NULL, NULL, NULL, NULL, '1199568393522738', 'EAAai9ZA7lamgBAB7mFyjrZBkSqxrY3D1PEDQzLZBQ2OoO1Ky4tvlYJogeAXFSJ2oaZBURxjurjUb9CUFJ7QuRCzFUZBkHknhndZAHzvSZBKUTdCw7OrZCRaEbfBuA3M9ZCBo2xeCi1ChPsZCz4z7AI3wLfJKdMMznQqryd8RKleFbq9AZDZD', NULL, NULL, '2015-05-05 05:04:00', '2015-05-05 05:04:00', '$2y$13$vqpO5gomhx/offZjpNtbRuDH1N/gtcCq86DXZ.0ddNbczDBlryaxW', NULL, 'Đức', 'Lê', 1, 0, '2017/09/duc-le1505051204.jpg', NULL, NULL),
(79, 0, 1, 'hathuyvugiang@yahoo.com', 'Trà Giang Vũ', 'tra-giang-vu', NULL, 'VEYefJTwPTKIN707HfAG-qeDIlFmTZUt', NULL, NULL, NULL, NULL, NULL, NULL, '618364941886678', 'EAAai9ZA7lamgBAB3a2WAUkV0Iz6NcHnzfo0ZBXM9d8G6ocZBWrsvwJxENTEIHYXlnQq6MedlFllxEbTZBRelcjm1XZCiJvOuNrFAKDYvgECMShw3ZBKWn8MsNhIZAogeFWeofoa4sT6TKS6ZBNuw3nfHpIskxcbbr1mdX5GtgajT2AZDZD', NULL, '2017-09-11 06:39:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$Y82ApWka4wX4dpOuZnqcOuWiXVcmFr8THu2FcyCmg/eHL4a9AIzhe', NULL, 'Trà Giang', 'Vũ', 3, 0, '2017/09/tra-giang-vu1505111891.jpg', NULL, NULL),
(80, 0, 1, 'duongtb159901@gmail.com', 'Bình Dương Trần', 'binh-duong-tran', NULL, 'prVoVZNTEIzFsCYeavA0ZJFFB9sZ_h12', NULL, NULL, NULL, NULL, NULL, NULL, '1717443848564834', 'EAAai9ZA7lamgBAA5MUz3UZBZAXmRNVyzTpsgFAzztx3bGoNU05rqUEBfgTw5wEF1xGZBCL9mI0pICC5VMUhZB3ucNaMIcIJag1gOZBRlC3l3L0kmpZBRqNGkcdx6y3nnmERxBKJTZB85AUQ4QJZBIqvsX6ZBuzsABE8pSak1WkP8TPwAZDZD', NULL, NULL, '2015-05-18 08:14:00', '2015-05-18 08:14:00', '$2y$13$TY9/aPOwr4efvCOHS5GnWuVNu2p2fpdq1eyqxFDiw05pSX0aAaRYe', NULL, 'Bình Dương', 'Trần', 1, 0, '2017/09/binh-duong-tran1505181514.jpg', NULL, NULL),
(81, 0, 1, 'Kecodocnumber1@gmail.com', 'Đạt Đặng', 'dat-dang', NULL, 'x55zjA8QTmK9ejxluiL6oHhBH5LHikX-', NULL, NULL, NULL, NULL, NULL, NULL, '339974666463039', 'EAAai9ZA7lamgBAPU4iIhHijnVAlZAQ7XMpNEJHJQgYJtnwZCCCL4fROgWEAZAs79OB60uocENzKw5Sy7Y0Nr4G6MHqBZAixhvKPMG1ZBVxZBJO8RiQDzaqvTriOAcJLcKwtNUxrk9xr1WPUXEGTDiyje9mKbZBCNgN5Xu1SHk99YNQZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$by9SiH8/Z5Z4GoD7m6QbZeE9Kmckd4rJouXUpz0sii2e9pnnlwwnq', NULL, 'Đạt', 'Đặng', 1, 0, '2017/09/dat-dang1505364833.jpg', NULL, NULL),
(82, 0, 1, 'lovanso.tq@gmail.com', 'Văn Sò Lò', 'van-so-lo', NULL, 'T-jhOf8tFjdfJKHGeqFnQuTfB_qnMqPV', NULL, NULL, NULL, NULL, NULL, NULL, '334978190263315', 'EAAai9ZA7lamgBAAXiDM6NuT3pZCBFF69bbA9c6Ah6gkGyKVWZAWZBi9yzRfSTFbE31fwlnUZCBhnOa21GI8CZCSUpjqSibj1xZBwpMQ0pt8B4HJ8LtRbagIk0Wke3cxJQ9FFkNWmsZC0HJNNOGzZCmeQzZCGyRgK1y3erdia46Ei2L2AZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$1PhU2GmIbDTublYl1XXwnOimYH65ddhVLAoDUZOffVb2jLQU7skJm', NULL, 'Văn Sò', 'Lò', 1, 0, '2017/09/van-so-lo1505492527.jpg', NULL, NULL),
(83, 0, 1, 'xd.langtuvotinh@gmail.com', 'Chung Nguyễn', 'chung-nguyen', NULL, 'Ce4yLtw3Bd2mvcuV0AliM5TYuAwgf1l3', NULL, NULL, NULL, NULL, NULL, NULL, '1991047431175230', 'EAAai9ZA7lamgBAGiuZBDAyWXZClj6xyqXwXQpzdmLuRzU5eopZB6r9j7IAyUVJ4eDcIw5NIlrzEmfnXZBQp2JzjqGMU1EtgNGZBLAtasWMzwGDfttSNZA3KGudzkA50Ra0UNkDAWPk16wqyTJoDAbhbBzN9ZCcopGcLi9lLbl67ixwZDZD', NULL, '2017-09-17 19:23:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$bX0QDRwNce69lAHsJ5BPfOrrOn2aO36i6mNHLNkovc.7EGy8hQy/y', NULL, 'Chung', 'Nguyễn', 2, 0, '2017/09/chung-nguyen1505675918.jpg', NULL, NULL),
(84, 0, 1, 'traitimvotinh882000@yahoo.com', 'Phương Chi Nguyễn', 'phuong-chi-nguyen', NULL, 'x0W9k5YV4e6q3rUqvBeRbZMFg2F-Wdul', NULL, NULL, NULL, NULL, NULL, NULL, '1980604718619932', 'EAAai9ZA7lamgBAL2pwBWUQtNSMIlatUXcIxYbBa4X4xp94OC2jHALs0C2Klyk5zAZAmAmJ0O6H93JkWACLeISJmlNhVWXGt13AhJMSgZAu1oa3GdZAgTNysZBtQkek34hi9wHiIwWJpTIYXSpnFeZCCngnZCeXZCy9kdXaPsrqRCoAZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$TVe5ihSFCNwsGdgaZbKvJuRLgSRI.FPtUe/hMxqIeGvKHWACTTLfi', NULL, 'Phương Chi', 'Nguyễn', 1, 0, '2017/09/phuong-chi-nguyen1505963467.jpg', NULL, NULL),
(85, 0, 1, 'luongcao28@gmail.com', 'Cao Minh', 'cao-minh', NULL, 'lfnsJaH2B0PIWwZh-dXa0BFmWfIVgJfP', NULL, NULL, NULL, NULL, NULL, NULL, '1959160547705478', 'EAAai9ZA7lamgBANfXKUIENGbntIZAercxFoyXlXO05TViHVF6E6G4uKBQGAM2VsPkwVhtmb74MS12uJa2td92fUEZBvmNmTXMS4t2IebRpWCVrd3eRL8dPLhuZBNTVVOhexNqHU0WuQ8wZB0Gw9C0DFT6O8myYrynozEZBo9ZB2UwZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$Je.5wISJ4DPlGAdqQgJOBu.xQ64GzBDrlUimGZMwsnTQbpC2hHymW', NULL, 'Cao', 'Minh', 1, 0, '2017/09/cao-minh1506070269.jpg', NULL, NULL),
(86, 0, 1, 'vuhailinh2811@gmail.com', 'Vũ Hải Linh', 'vu-hai-linh', NULL, 'I-CKZIY7CMpnHPdtwd-qXWJqKI-vhYPU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-25 16:28:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$AJ6BTCZ9egSTWFRMCM9M/.obfobYd8mOrsiEFcKlLKe01A3v7MYja', NULL, 'Vũ', 'Hải Linh', 2, 0, NULL, NULL, NULL),
(87, 0, 1, 'wkksubasu@gmail.com', 'Sugar Tank', 'sugar-tank', NULL, 'AQeKUg712hpMw_En1D70f6OHxfelFGKO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$11K.z1htes1AZGGFfNw..uuaehQznZir7Vjd6Gp06MBpzVXxFI.B.', NULL, 'Sugar', 'Tank', 1, 0, NULL, NULL, NULL),
(88, 0, 1, 'Linhlek31@gmail.com', 'Lê Linh', 'le-linh', NULL, '2Qwn42vxRF5sAptFatlteH7zHq08Xw9P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-27 05:00:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$y0V6GIue9obU/kfM/YRBv.VrBPM6kd25oSb9lb0Lu1ZqtppWYvsAq', NULL, 'Lê', 'Linh', 2, 0, NULL, NULL, NULL),
(89, 0, 1, 'linhlebc31@gmail.com', 'Lê Linh', 'le-linh', NULL, '7ompB6_ua-N1DaWAr0sHv06M9-FAVwhz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-27 05:32:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$cWZ.xm.h4kY/m5d/LEm20.H4rt7GWvlmEwLUEH9aF3./09BV8m776', NULL, 'Lê', 'Linh', 3, 0, NULL, NULL, NULL),
(90, 0, 1, 'ninjapain03@gmail.com', 'Cường Đặng', 'cuong-dang', NULL, '4ogvYQNU65NTxH4G3JAP84bHpj_kmrtm', NULL, NULL, NULL, NULL, NULL, NULL, '1582898351777510', 'EAAai9ZA7lamgBAIW1oIOQDhJlhTc4Qj1XXiL6WWgUNOXwXyXzetadtJ9ZCIOCZCpRWDD4unfmgvnZBjYW07fvdI1duad71KwbZBc3CpqdWrzcO8QoYrnyDnqZBjMTNAXKlB0JNAKgnrYapXGZBv4KZCdjAaF86eCcFmyWKJo97Ch1scge7NZA4Jqr', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$axOxSlebwvi7JFvF8JuA5OBryUbbEdlhMNduAZY7de0owZMr5FNZe', NULL, 'Cường', 'Đặng', 1, 0, '2017/10/cuong-dang1507126421.jpg', NULL, NULL),
(91, 0, 1, 'mylove_still@yahoo.com', 'Thủy Nguyễn', 'thuy-nguyen', NULL, 'MYtv-aOMOJa_XLT77_PoE19Sm-l_IYxy', NULL, NULL, NULL, NULL, NULL, NULL, '1679395318745924', 'EAAai9ZA7lamgBAI19devlpIZBK3ytaiEUPuNXMS3qejqDIhRXwuIatjJqKVvZBcRVds2ZC4JKcBZCZCRSdaB4LliiKsvvZCxwDkErGGqtSq6c8e5N93vybxwNoZCGaTpUGRsuBAiEyx2Qc4lI9akTQtTaAuVAeg0qpkMeG3evfqm6QZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$gi2hdMjVr5o1UrE7mh.Rq.DJaYJb6yk7FDaBz/2fHRnpCsOOQkhAu', NULL, 'Thủy', 'Nguyễn', 1, 0, '2017/10/thuy-nguyen1507203535.jpg', NULL, NULL),
(92, 0, 1, 'tomoyo230399@gmail.com', 'My Nguyễn', 'my-nguyen', NULL, 'wMY6TBT6r4GMp_Y96sOiLraUUxRBQSFW', NULL, NULL, NULL, NULL, NULL, NULL, '2028247634075192', 'EAAai9ZA7lamgBAKxQFnwX2BXDRf188Vnlzk1OgwyLmVtJFyyUpQzh5ZCRBW0MZBaO5hsZCr04bZA11mjdADKYtHWhGVFumbwSxhE3mvDdEDYAvZC7ZBI8YZCxfB9ym3gfcZCuyBEcyeb3ECJiBtG2hpjTT20spoDr0Pn2kSg0wzfoHAZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$my3hzeeu47C6yvd4xrcAi.TP4IWCSzt6g2w6Kn6RO/ySgQTi9ayLG', NULL, 'My', 'Nguyễn', 1, 0, '2017/10/my-nguyen1507233388.jpg', NULL, NULL),
(93, 0, 1, 'marija.malesevic@yandex.ru', 'Marija Malesevic', 'marija-malesevic', NULL, 'eBDymfV8CqliNa1NqvaWLIeeyKOgohzd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-06 00:29:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$W11e21y5Ei6pANdxkXf1P.AfK/Lcxj9lg47ICKMEVhv5iR2rbsccC', NULL, 'Marija', 'Malesevic', 3, 0, NULL, NULL, NULL),
(94, 0, 1, 'manhhoan1998@gmail.com', 'Phương Nghuyễn', 'phuong-nghuyen', NULL, 'zbcCzACHIG-0-613Zhtypy-Sh6DTVPSh', NULL, NULL, NULL, NULL, NULL, NULL, '1933131740341824', 'EAAai9ZA7lamgBAJbSbslXSPVGk0KYOqri93sYIQlldf03rxhigVLOZAb15ZCDhVAVnVz4xx5FZBjJ7A4na4cNJctzvWR6ESzQkwphCX5EhVfOzEuQJ9PbRZBPhMznymNKXHaXiaJuJNiHaNUN2MpWbVX8v6XJXq644QnaRH305wZDZD', NULL, '2017-10-11 07:56:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$DuK4OBM1Ig6ZKXrpNNuP/ONHEPRvEeCSXyv/1Zq1dDpX.43Fd1APG', NULL, 'Phương', 'Nghuyễn', 2, 0, '2017/10/phuong-nghuyen1507708443.jpg', NULL, NULL),
(95, 0, 1, 'lekhoi22p6@gmail.com', 'Nô Ta', 'no-ta', NULL, 'BsUSvlUe9_pmBBISy4lKkIeZALzXu_Am', NULL, NULL, NULL, NULL, NULL, NULL, '1131681743631099', 'EAAai9ZA7lamgBADTComQzol5UA2OhERvRa0jBCOBJ1ZA4CuEZCwoqqNC7PpkVSRwn17GdO8dFcluIfY1yKyDZA5TQ07LvfsI0NfDBwyCTZCZBcJxGrj1u9ELZAyxDS5itZCEfCOgR86JZAcKeZBacKqsKVpa2bPHdV2us4fZBZBQOhVWwwZDZD', NULL, '2017-10-13 14:15:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$ypJGNfbyiW5UbwUDryTqwuV2imYh5ejgGQDenVKt4JSGoHWWBunFK', NULL, 'Nô', 'Ta', 3, 0, '2017/10/no-ta1507904106.jpg', NULL, NULL),
(96, 0, 1, 'tainthe@hotmail.com', 'Nguyễn Thế Tài', 'nguyen-the-tai', NULL, 'HY7k7OS0iSCOpF_ho5eQjGME3_tbFGl2', NULL, NULL, NULL, NULL, NULL, NULL, '1579510938773425', 'EAAai9ZA7lamgBALLiEB5LLbpciqIkXvotovoVPYwJMhPrcwLB5JOYBublL2vtmS9JZAEaKgVe6ZAdNWUu0Cwzefg8jWj8sbZCOsaRZC6tPmCjZCwFxEL4KFAF9MQKPKoVPVf47QZBSkcr391rKdnhZA0qFINuwTzGNeD6Q4gjhDx5wZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$dUUHdTMYJI3qS5RUhO7GPuOE.Zq6/.TRNtKywp49TFP34i2l8Q2mq', NULL, 'Nguyễn Thế', 'Tài', 1, 0, '2017/10/nguyen-the-tai1508383071.jpg', NULL, NULL),
(97, 0, 1, 'beongan.suzy.141@gmail.com', 'Bảo Ngân Nguyễn', 'bao-ngan-nguyen', NULL, 'TRavXcK7kvGfbg09RHOvWDa-9JiJ4ByV', NULL, NULL, NULL, NULL, NULL, NULL, '2176726042554404', 'EAAai9ZA7lamgBALsgrvxwZCtfGuv0ZCGqnLwbVekxsLLzSrY4Bj6xjpiTQQZCKwSjxY5uRwAyjTaabZAQq0VB1T8wy0HGBtSNtMFZCWbZCVfTuSryNFtrFrrei8gKKgxKtXnkj2XA2oEQG8CR6koCys40yosNuudZAmymCQhKXzl2wZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$lZTL1alSqqM/o8xJTiEYT.chM2M7rZdXOAk8RQlxGRCcjf2rXtguO', NULL, 'Bảo Ngân', 'Nguyễn', 1, 0, '2017/10/bao-ngan-nguyen1508467959.jpg', NULL, NULL),
(98, 0, 1, 'hieuphohuong@gmail.com', 'Khánh Nguyễn', 'khanh-nguyen', NULL, 'pwd_OOaNg08kpqasyPu_-VDc0aftcrq-', NULL, NULL, NULL, NULL, NULL, NULL, '1835047046786703', 'EAAai9ZA7lamgBAMuVmVdl1Ez3ZC4GDle4XV5GQ1jpFtMGoLsbxm9Q3MQsQ91eu2aagrNXRfPAZBl2xsWOeeJZC5hBmCsp1yOi4INzYgkaIJifGIiDCwaA5SORuusKRhpX8gpAZAlzeFA6Jwqm9rCdVZBQiXMxkcafos5Ud3ncKBgZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$9C07/5l64BKR10YGQr.QZ.N4evAewha.ifb48L8Cnuv4r60.Rm5FG', NULL, 'Khánh', 'Nguyễn', 1, 0, '2017/10/khanh-nguyen1508474632.jpg', NULL, NULL),
(99, 0, 1, 'manhsuong92@gmail.com', 'Sương Mạnh', 'suong-manh', NULL, '9_DC2uxDJK91BvKE0_hvwOm0_VvWjWRn', NULL, NULL, NULL, NULL, NULL, NULL, '133937240697067', 'EAAai9ZA7lamgBAELuPWd7aZAJHjFe5IqkJJmvo6BjtQKsORqxSwjPgehq11gwgPZC3lx0WY01UjEoVUH8tPzqZCV4m2VWM0ZCK3hfIQGd2aaFbiZBRGQXr1AHy3dJz6kb7GSQygjWahIfgxIn3kvQwnDzb7tQ0DIXlo1uj4KQ5MCodyjHmxLxQ', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$BlUkjElVy/wuIOgdhmmaP.H2hTZGGl8fEAzUT5nk4iKexSUfGXBGK', NULL, 'Sương', 'Mạnh', 1, 0, '2017/10/suong-manh1509293934.jpg', NULL, NULL),
(100, 0, 1, 'vuhan.hty@gmail.com', 'Vu Han', 'vu-han', NULL, 'B2evoJVpSPGzQ-sF0tI84OFq1c2CrBwb', NULL, NULL, NULL, NULL, NULL, NULL, '133785907274787', 'EAAai9ZA7lamgBAFUeQNqKwZBpP64NLYQhmKAhva7z0qN3d5rqeRSXekNzY7I14f9EBfjkQS0Yo997XbXqdbE4jBjEl985JWclqmvVzs71PsuWZBHExdzOYJHZAqlwdsxtKmrLW3ZA78cPoEik1infvp3I5hWM4czkqGz39PeXowZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$YuiRmsLsCGSBwIHrxODqbulNy.PCdJaQcZwsBlITJSNOlahWAMU0e', NULL, 'Vu', 'Han', 1, 0, '2017/10/vu-han1509427028.jpg', NULL, NULL),
(101, 0, 1, 'ductien200189@gmail.com', 'Tiến Đinh', 'tien-dinh', NULL, '0ycT9OYi_cZXBm0QEo6Gq6F8sslovmXq', NULL, NULL, NULL, NULL, NULL, NULL, '1881453935516873', 'EAAai9ZA7lamgBADaHFe8hy6u5RmU4TFykx59VWGSVFoJFaNXVO5oNbb1tDWUqqW4Dy4llbTm82JTkqvOg5A1EzrDarRD1kY02wvLrISLQos0fWkB9ZCa9HbJSGcvlfkcngAhtHKO8BPMRFlJpLJBEdYHyb6pz608eSJUAr6AZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$qqkzQJl0aUzYsXr7EEjdQ.Np74as0wLzYNNf5wbQrw7vA/tHMde56', NULL, 'Tiến', 'Đinh', 1, 0, '2017/11/tien-dinh1509847004.jpg', NULL, NULL),
(102, 0, 1, 'contact@donghoi.org', 'Tu Hai', 'tu-hai', NULL, 'SKYV_z_h7hPv05hWHOMn4lrqF5y5PiU3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-06 11:59:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$rlP0gpU5HqrLkSIcg1aMcO6xtwZEaxFD2RnyWS2zdlU.Ll1C0ws26', NULL, 'Tu', 'Hai', 3, 0, NULL, NULL, NULL),
(103, 0, 1, 'quynhl0v3@gmail.com', 'Giang Hoàng', 'giang-hoang', NULL, 'csCTxG2dKKmKJNsqx_teRcmWEIvDBtQR', NULL, NULL, NULL, NULL, NULL, NULL, '1380779365377279', 'EAAai9ZA7lamgBAA9XR0OFTSzLIxwnPCWKBk59ioVcyZB0HlURZCUkSjedl8dYKdqQgZBQ5LVQzkVbA7Jlok0uC8DTFMFX7kaQnvGzMZCfwUQi5DwgtJbBqsFYoQZCPZA1lXsUbcodRHxqBiaIcCZBpDtZBnVHEjZBb1zSEIqbx1LjmtAZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$t9RZUD5.6Ex5JarA9rWZSeTb92.2iGvtuems60kfZL4dCJFPw6zsq', NULL, 'Giang', 'Hoàng', 1, 0, '2017/11/giang-hoang1510241783.jpg', NULL, NULL),
(104, 0, 1, 'boy_codon_tim_girl_codon_hp95@yahoo.com', 'Hảo Bùi Minh', 'hao-bui-minh', NULL, 'JWX-n_-eZ5iFMXLURcJA1JPkRuEcTMAb', NULL, NULL, NULL, NULL, NULL, NULL, '1718349094906395', 'EAAai9ZA7lamgBALySdzQmmWbdYXnpXZBNIN6WePtNKQw7HoEGAIYamCFVe6gZAzgPSJjZAYI80VJlgHt8VOqMvF6x6RrtSqXoHFRvmjaekjzS6WSdy9jXo2PlQ2e6ydWWZBIYuZC1KdPIaVppvwx8I2ISbWnQFivxyCvB0lmGh8AZDZD', NULL, '2017-11-12 16:05:33', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$AChuvtVCVUNn8iaYa7TE6uXU3CIiPIeq/hWySJ35l.oj/6SDVCF0e', NULL, 'Hảo', 'Bùi Minh', 2, 0, '2017/11/hao-bui-minh1510502687.jpg', NULL, NULL),
(105, 0, 1, 'foo@bar.com', 'foo bar', 'foo-bar', NULL, 'kk1tCnn4rDYt9icu3u_u00_5elOzwi3o', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$nHeGEYcyeQRuhi0JQlnvN.uWwiJ3aNvpSqXWzepVds.m6QrKIp07e', NULL, 'foo', 'bar', 1, 0, NULL, NULL, NULL),
(106, 0, 1, 'thuyanh12122002@gmail.com', 'Na Văn', 'na-van', NULL, 'QRoWP9Vjld3JqN8CBBt-F_UjDQWH7el9', NULL, NULL, NULL, NULL, NULL, NULL, '387060138396286', 'EAAai9ZA7lamgBACMWzjtzwBDqIJ19OITcDDMcM4e0piilpz7sn6K9cSKDVNiuEnRCGMBV6jkFF1lgUwSF31yTNZAgFbnbXLldv6KjuYvMXigSvm8yin4EJBBbW7EJeE4pgBFq629kHFAdUBEZBIdBB3ZCJZBqCNfZAtua1zx7qKQZDZD', NULL, '2017-11-15 11:51:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$mHyEV5LhiobsiGwjK5LHk.dpFuprJIuFOq9wL4vX5UL/ADQZ7mGrK', NULL, 'Na', 'Văn', 3, 0, '2017/11/na-van1510746567.jpg', NULL, NULL),
(107, 0, 1, 'iuxu4ever@yahoo.com.vn', 'Sơn Sơn', 'son-son', NULL, 'Pfixnq5O6wI3wbWaXHQHb01BUTrHkV81', NULL, NULL, NULL, NULL, NULL, NULL, '1325796617531171', 'EAAai9ZA7lamgBAHFzd6ZCc9oAQnhVnDZBrWZBNZA1YE0ZCYjSUM9jzIHL2MIS8SZBqTIsqip2l8sFAtqnxctZCgHVdvZBZC9ZB0XuX53aOXXTynfJV8T2He0xxWfnaTdcu5vjMudaoqz32JJ3Lnd9BYYqSZAaZBQknQ0QAPUtBqBsduKXxQZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$1rk4H.IY5bNw28.XD1gAOuNlPl15VKAwscjmd/DDyAFmrUnHTziE.', NULL, 'Sơn', 'Sơn', 1, 0, '2017/11/son-son1510799912.jpg', NULL, NULL),
(108, 0, 1, 'hungtronghn92@gmail.com', 'hung le', 'hung-le', NULL, 'FxihBtPhW876DzXquQFGCjrVG4R4WF2c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-16 08:26:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$eHheUOwtGcyHDbbL5yILPuW0j/f8J4koauZcQRRt2OafjdBJLtV4i', NULL, 'hung', 'le', 3, 0, NULL, NULL, NULL),
(109, 0, 1, 'fenninguyen@gmail.com', 'Phuong Anh Nguyen', 'phuong-anh-nguyen', NULL, 'wUpG8XUuekUN3LpOZM5k1r2DmLnfNwX5', NULL, NULL, NULL, NULL, NULL, NULL, '10211543814774400', 'EAAai9ZA7lamgBAJi1dgAZAe3nfhdRASCS6NFjhZCit23BS8deEq7UMHx0gwNTmZBI31IwcWsJA83i1oPVxB1XOZACaMNc1mk9dfn0mOzxKbLJ8w6n430WnItaZAV44bU8LkdeRobyLcpqyE1uE7iLi8QoyEyBTMZCwZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$6oaBMnRzoNadZyAdotMRCuJk0aX9oPJKvE7NvbEbR7qyXKv35asmS', NULL, 'Phuong Anh', 'Nguyen', 1, 0, '2017/11/phuong-anh-nguyen1511017233.jpg', NULL, NULL);
INSERT INTO `user` (`id`, `role_id`, `status`, `email`, `username`, `slug`, `password`, `auth_key`, `access_token`, `logged_in_ip`, `logged_in_at`, `created_ip`, `banned_at`, `banned_reason`, `fbid`, `fbtoken`, `resettoken`, `resetexpire`, `created_at`, `updated_at`, `password_hash`, `password_reset_token`, `first_name`, `last_name`, `register_status`, `type`, `avatar`, `google_id`, `google_token`) VALUES
(110, 0, 1, 'xxhorohoroxx@yahoo.com', 'Xương Xương', 'xuong-xuong', NULL, 'U70u0nqQTR5owSf5LvrOBj9E5JVIP3n0', NULL, NULL, NULL, NULL, NULL, NULL, '1482513555195360', 'EAAai9ZA7lamgBAGDfHNZCtFsAkiDRqLbibuZBIbEIEwZCIZAHWUD885dmZBIgToZCtmCpcfHH9XNakPcnWiZABh3AkCLoTVg4kt9lkxqqpQvQFYkVeOM63gPACmjqG5vIuGIRunYhGIJK9dJ80ZB5iA6FDeMZBoDq1TaSeiaZAZBZBdmOLFFZCVqNPbWGR', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$5sKa6y.AxBu1aDgsSeWomeU1UTF4aUrRQ0CUmsGdXRXqYft1ME4Mm', NULL, 'Xương', 'Xương', 1, 0, '2017/11/xuong-xuong1511254619.jpg', NULL, NULL),
(111, 0, 1, 'nguyenmanhtai95@gmail.com', 'Đật Con', 'dat-con', NULL, '0E1rb1wnYvosyQl1g8EEwWZHyIOGs-AL', NULL, NULL, NULL, NULL, NULL, NULL, '853956418142399', 'EAAai9ZA7lamgBAFtJKfG6jckM7ZAxivIuVVWUaiuZAh5NTA5cfV01z3GXdepgZBlsEy0wdzWHt22ThlZCHsF1U3bwwnCkavSGLKOD2R73ja95MZBVZBW00GSJSoiQduS7ZA3XYlIqOfLGEcXaOyrRcT7hJ3ktO7rzrhWgUGR648G5QZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$zoTQcR90LMGCN/CugbuNL.4L0OkBzgK/w4ZQO5bhAxiLSODS61KXK', NULL, 'Đật', 'Con', 1, 0, '2017/11/dat-con1511536644.jpg', NULL, NULL),
(112, 0, 1, 'huypham107@gmail.com', 'Huy Phạm Hoàng', 'huy-pham-hoang', NULL, 'UqWlyJSNeHXMhv_sTM9fuLSYsNjsXRWy', NULL, NULL, NULL, NULL, NULL, NULL, '1961883453826460', 'EAAai9ZA7lamgBABIYLlYZCoQgXIfd4V08ofVV3QsU09oIw7PDZCSTr70jSDfcZBhyD1j94zM1QCC5IgMzLd1K4ZApmK6SKOvgigxwDhde6FBxLiitxOZABdF1NGZBdAxH4ZAZBjFTOig5PdZBhmDLAS97lNoTuqiLW0o7kDvxOw6ofIwZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$ZlGOQIawLHyXFYueEMKBnu7CO7E3JzAW4y5SxbWUk2C5gpV.uebU2', NULL, 'Huy', 'Phạm Hoàng', 1, 0, '2017/11/huy-pham-hoang1511717381.jpg', NULL, NULL),
(113, 0, 1, 'kissmy_love22@yahoo.com', 'Quốc Anh Trương Phú', 'quoc-anh-truong-phu', NULL, '2SKlqRwpJcF1rVPlyj1YflVYE4PLszw-', NULL, NULL, NULL, NULL, NULL, NULL, '1228455480589510', 'EAAai9ZA7lamgBAAJWfOfClMIW8SaUCyYiEN3OPIpmqThQfMTKP6uFOtL4g9nELKDW6mEGsZA4KEZAq1iOH27ZCxdOYkdcZC6ObdfhSlRmlUgJwrmDMZBxcPyXbEpDi6e30GW4WfHEsIZCux9sT9r768f2ATZAIDAZBetON8fzdakknwZDZD', NULL, '2017-11-27 03:34:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$XfaLhJFcQI50nqHNHq5cVeh0XkIi/D/zVunjxpTOfWJK65m3l5cVm', NULL, 'Quốc Anh', 'Trương Phú', 2, 0, '2017/11/quoc-anh-truong-phu1511753384.jpg', NULL, NULL),
(114, 0, 1, 'quocanhlanh0x@gmail.com', 'Anh Truong', 'anh-truong', NULL, 'W0B5avatolJmq7N1XyRTHgiP_55-Gb82', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$2UGiU4y81Kr4oX9VbrGNBu8NU13WBLQ8.wvqfx44tXwVIpoBIEMEC', NULL, 'Anh', 'Truong', 1, 0, NULL, NULL, NULL),
(115, 0, 1, 'long97vip@gmail.com', 'Lê Long', 'le-long', NULL, 'jioiFhqxKG5ZSYR_FKNWYXr1-DuY7jB9', NULL, NULL, NULL, NULL, NULL, NULL, '876438009195684', 'EAAai9ZA7lamgBAHHxZABRpOVvBJql6QOZCe5t0CDgZAhJ0ZCldoupfv03eqymctG3vJ2LM37YijyNjg2OieyytJbX9ealZCTnwkcaQcc7NMqDqZBjEspj08Evfm8MCmhZCf4TDxQE2lrWGmqOZCqbX6uuuS0Rh6nu8DVZBJC2euEo18QZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$ZH31dRocmpgqMl.OX1AAGuXyEOwgFJ2Ozu2VvKGDrpyHaM8a7diaq', NULL, 'Lê', 'Long', 1, 0, '2017/11/le-long1511807921.jpg', NULL, NULL),
(116, 0, 1, 'quanabc9@gmail.com', 'Quan Voong', 'quan-voong', NULL, 'QAHyloReGUuDPx6nug1kMGi0kwX8iW5z', NULL, NULL, NULL, NULL, NULL, NULL, '1026022554205955', 'EAAai9ZA7lamgBAGsqXNxpZCmcDjIYiEALfGsx61gTSRDM8xcZBAkn2WV6ZAiV05J7GCQz9cwmcEe9EuZCmTzmy8AVhdKj9FdVjOo5Ir4gEMPK5g7qaxHdLDJZBFAjiGD2VezHOroWFppX6YYhdUUNOgSA0rEyj6XAxomTZB31qEpQZDZD', NULL, NULL, '2015-12-04 10:31:00', '2015-12-04 10:31:00', '$2y$13$M5Nh/L/JO8drAUJMtxTKreR.XP42pmK5b.LjstxpJ3Duvd8uqTV8e', NULL, 'Quan', 'Voong', 1, 0, '2017/11/quan-voong1512041730.jpg', NULL, NULL),
(117, 0, 1, 'tieuvanvan106@gmail.com', 'Ngọc Quý Lê', 'ngoc-quy-le', NULL, '9XCDvbUPMKRXRqEV6q5oP16llwU76Xzl', NULL, NULL, NULL, NULL, NULL, NULL, '1982468085298648', 'EAAai9ZA7lamgBAOmYYnsD2KXX1O1qLfd2iLNfCaWCFUyZCBLs7rDZCd3okQQAZBP8BsPsl561UZB3QidQqkTuTfb8cYgmQhQND477vbneGo5qpGuDqz6i6kD6jAa8olBZCiNZBwhaw5bW3d9Rj3lZCfN5ZC0mjZCPnScpGSZA29BUaC79xO1r3bOxXS', NULL, NULL, '2015-12-18 08:58:00', '2015-12-18 08:58:00', '$2y$13$YbTeBLLhy1Sq6SF01dp.w.qzXLb6MEgFT8kU4mMDFaBJ0rtySrdcy', NULL, 'Ngọc Quý', 'Lê', 1, 0, '2017/12/ngoc-quy-le1512181557.jpg', NULL, NULL),
(118, 0, 1, 'Phammi081290@gmail.com', 'Tỷ Tỷ Mì Tôm', 'ty-ty-mi-tom', NULL, 'jxUo8dcBUB8yocZsTo2TXXavZf-hDHHh', NULL, NULL, NULL, NULL, NULL, NULL, '517334005302105', 'EAAai9ZA7lamgBAOr99zfHMDcL3412koa7IAQG7O7rnL1Kl13eI1dpC4zZCF3ZBbI2b2gecS9fJ9bsGDU4rfzytvQFuFRZA8ert1atnMDTPp3I2pJ4KnUfrecvfH5Nyul1RhCWlQ6vc7S3jrHaagSzslaxV80g9ZBd0jOKmBPxZBQZDZD', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$pD2Num4oaj0UxWBNMQ2SS.bCSms/r8gfqaKG.TO8MVk3YbKYhaA/G', NULL, 'Tỷ Tỷ', 'Mì Tôm', 1, 0, '2017/12/ty-ty-mi-tom1512298747.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_notifications`
--

CREATE TABLE `user_notifications` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `extra` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_question_follow`
--

CREATE TABLE `user_question_follow` (
  `id` int(11) NOT NULL,
  `question_id` int(11) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_question_follow`
--

INSERT INTO `user_question_follow` (`id`, `question_id`, `user_id`, `status`, `create_time`) VALUES
(34, 222, 16, NULL, '2017-06-22 18:20:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_question_pass`
--

CREATE TABLE `user_question_pass` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_question_pass`
--

INSERT INTO `user_question_pass` (`id`, `user_id`, `question_id`, `create_time`) VALUES
(1, 16, 170, '2017-05-03 05:57:22'),
(2, 16, 171, '2017-05-03 06:00:26'),
(3, 16, 185, '2017-05-03 06:34:11'),
(4, 16, 184, '2017-05-03 06:59:18'),
(5, 16, 183, '2017-05-03 06:59:22'),
(6, 94, 321, '2017-10-11 07:55:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_topic_follow`
--

CREATE TABLE `user_topic_follow` (
  `id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_topic_follow`
--

INSERT INTO `user_topic_follow` (`id`, `topic_id`, `user_id`, `status`, `create_time`) VALUES
(1, 1, 11, NULL, '2017-03-11 16:14:30'),
(2, 2, 11, NULL, '2017-03-11 16:23:00'),
(3, 3, 11, NULL, '2017-03-11 16:23:00'),
(4, 4, 11, NULL, '2017-03-11 16:23:00'),
(5, 5, 11, NULL, '2017-03-11 16:23:00'),
(6, 6, 11, NULL, '2017-03-11 16:23:00'),
(7, 12, 11, NULL, '2017-03-11 16:23:00'),
(8, 11, 11, NULL, '2017-03-11 16:23:00'),
(9, 10, 11, NULL, '2017-03-11 16:23:00'),
(10, 8, 11, NULL, '2017-03-11 16:23:00'),
(11, 9, 11, NULL, '2017-03-11 16:23:00'),
(12, 7, 11, NULL, '2017-03-12 10:57:34'),
(13, 7, 11, NULL, '2017-03-12 10:57:34'),
(14, 7, 11, NULL, '2017-03-12 10:57:34'),
(29, 13, 12, NULL, '2017-03-18 11:22:45'),
(30, 1, 14, NULL, '2017-03-19 08:03:54'),
(31, 1, 14, NULL, '2017-03-19 08:03:54'),
(32, 2, 14, NULL, '2017-03-19 08:03:54'),
(33, 3, 14, NULL, '2017-03-19 08:03:54'),
(34, 4, 14, NULL, '2017-03-19 08:03:54'),
(35, 5, 14, NULL, '2017-03-19 08:03:54'),
(36, 6, 14, NULL, '2017-03-19 08:03:54'),
(37, 12, 14, NULL, '2017-03-19 08:03:54'),
(38, 11, 14, NULL, '2017-03-19 08:03:54'),
(39, 10, 14, NULL, '2017-03-19 08:03:54'),
(40, 9, 14, NULL, '2017-03-19 08:03:54'),
(41, 8, 14, NULL, '2017-03-19 08:03:55'),
(46, 5, 15, NULL, '2017-03-19 08:08:54'),
(47, 6, 15, NULL, '2017-03-19 08:08:54'),
(48, 12, 15, NULL, '2017-03-19 08:08:54'),
(49, 11, 15, NULL, '2017-03-19 08:08:54'),
(50, 10, 15, NULL, '2017-03-19 08:08:54'),
(51, 9, 15, NULL, '2017-03-19 08:08:54'),
(52, 7, 15, NULL, '2017-03-19 08:08:54'),
(53, 8, 15, NULL, '2017-03-19 08:10:00'),
(54, 8, 15, NULL, '2017-03-19 08:10:00'),
(55, 15, 15, NULL, '2017-03-19 08:20:20'),
(56, 15, 15, NULL, '2017-03-19 08:20:20'),
(57, 14, 15, NULL, '2017-03-19 08:20:20'),
(58, 13, 15, NULL, '2017-03-19 08:20:20'),
(63, 4, 15, NULL, NULL),
(65, 3, 15, NULL, NULL),
(68, 10, 12, NULL, NULL),
(71, 12, 12, NULL, NULL),
(73, 18, 12, NULL, NULL),
(74, 17, 12, NULL, NULL),
(75, 15, 12, NULL, NULL),
(76, 9, 16, NULL, '2017-04-24 19:23:34'),
(77, 4, 16, NULL, '2017-04-24 19:23:34'),
(78, 10, 16, NULL, '2017-04-24 19:23:34'),
(79, 2, 16, NULL, '2017-04-24 19:23:34'),
(80, 1, 16, NULL, '2017-04-24 19:23:34'),
(81, 7, 16, NULL, '2017-04-24 19:23:34'),
(82, 13, 16, NULL, '2017-04-24 19:23:34'),
(83, 14, 16, NULL, '2017-04-24 19:23:34'),
(84, 15, 16, NULL, '2017-04-24 19:23:34'),
(85, 17, 16, NULL, '2017-04-24 19:23:34'),
(90, 10, 17, NULL, '2017-05-04 18:57:53'),
(91, 9, 17, NULL, '2017-05-04 18:57:53'),
(92, 3, 17, NULL, '2017-05-04 18:57:53'),
(93, 2, 17, NULL, '2017-05-04 18:57:53'),
(94, 4, 17, NULL, '2017-05-04 18:57:53'),
(95, 5, 17, NULL, '2017-05-04 18:57:53'),
(96, 11, 17, NULL, '2017-05-04 18:57:53'),
(97, 12, 17, NULL, '2017-05-04 18:57:53'),
(98, 6, 17, NULL, '2017-05-04 18:57:53'),
(99, 19, 17, NULL, '2017-05-04 18:57:53'),
(100, 5, 18, NULL, '2017-05-04 23:07:31'),
(101, 10, 18, NULL, '2017-05-04 23:07:31'),
(102, 7, 18, NULL, '2017-05-04 23:07:32'),
(103, 13, 18, NULL, '2017-05-04 23:07:32'),
(104, 14, 18, NULL, '2017-05-04 23:07:32'),
(105, 11, 18, NULL, '2017-05-04 23:07:32'),
(106, 18, 18, NULL, '2017-05-04 23:07:32'),
(107, 15, 18, NULL, '2017-05-04 23:07:32'),
(108, 19, 18, NULL, '2017-05-04 23:07:32'),
(109, 17, 18, NULL, '2017-05-04 23:07:32'),
(110, 2, 19, NULL, '2017-05-17 05:36:07'),
(111, 1, 19, NULL, '2017-05-17 05:36:07'),
(112, 7, 19, NULL, '2017-05-17 05:36:07'),
(113, 8, 19, NULL, '2017-05-17 05:36:07'),
(114, 9, 19, NULL, '2017-05-17 05:36:07'),
(115, 3, 19, NULL, '2017-05-17 05:36:08'),
(116, 4, 19, NULL, '2017-05-17 05:36:08'),
(117, 5, 19, NULL, '2017-05-17 05:36:08'),
(118, 11, 19, NULL, '2017-05-17 05:36:08'),
(119, 10, 19, NULL, '2017-05-17 05:36:08'),
(120, 12, 19, NULL, '2017-05-17 05:36:08'),
(121, 6, 19, NULL, '2017-05-17 05:36:08'),
(122, 11, 20, NULL, '2017-05-17 16:39:23'),
(123, 10, 20, NULL, '2017-05-17 16:39:23'),
(124, 9, 20, NULL, '2017-05-17 16:39:23'),
(125, 8, 20, NULL, '2017-05-17 16:39:23'),
(126, 7, 20, NULL, '2017-05-17 16:39:23'),
(127, 1, 20, NULL, '2017-05-17 16:39:23'),
(128, 2, 20, NULL, '2017-05-17 16:39:23'),
(129, 3, 20, NULL, '2017-05-17 16:39:23'),
(130, 4, 20, NULL, '2017-05-17 16:39:23'),
(131, 5, 20, NULL, '2017-05-17 16:39:23'),
(132, 14, 21, NULL, '2017-05-17 16:40:37'),
(133, 13, 21, NULL, '2017-05-17 16:40:37'),
(134, 7, 21, NULL, '2017-05-17 16:40:37'),
(135, 1, 21, NULL, '2017-05-17 16:40:37'),
(136, 2, 21, NULL, '2017-05-17 16:40:37'),
(137, 3, 21, NULL, '2017-05-17 16:40:37'),
(138, 9, 21, NULL, '2017-05-17 16:40:37'),
(139, 8, 21, NULL, '2017-05-17 16:40:37'),
(140, 15, 21, NULL, '2017-05-17 16:40:37'),
(141, 17, 21, NULL, '2017-05-17 16:40:37'),
(142, 10, 21, NULL, '2017-05-17 16:40:37'),
(143, 4, 21, NULL, '2017-05-17 16:40:37'),
(144, 5, 21, NULL, '2017-05-17 16:40:37'),
(145, 11, 21, NULL, '2017-05-17 16:40:37'),
(146, 18, 21, NULL, '2017-05-17 16:40:37'),
(147, 19, 21, NULL, '2017-05-17 16:40:37'),
(148, 8, 22, NULL, '2017-05-18 03:31:01'),
(149, 2, 22, NULL, '2017-05-18 03:31:01'),
(150, 7, 22, NULL, '2017-05-18 03:31:01'),
(151, 1, 22, NULL, '2017-05-18 03:31:01'),
(152, 3, 22, NULL, '2017-05-18 03:31:01'),
(153, 4, 22, NULL, '2017-05-18 03:31:01'),
(154, 10, 22, NULL, '2017-05-18 03:31:01'),
(155, 5, 22, NULL, '2017-05-18 03:31:01'),
(156, 6, 22, NULL, '2017-05-18 03:31:01'),
(157, 12, 22, NULL, '2017-05-18 03:31:01'),
(158, 9, 22, NULL, '2017-05-18 03:31:01'),
(159, 11, 22, NULL, '2017-05-18 03:31:01'),
(160, 18, 22, NULL, '2017-05-18 03:31:01'),
(161, 18, 23, NULL, '2017-05-18 03:33:35'),
(162, 15, 23, NULL, '2017-05-18 03:33:35'),
(163, 14, 23, NULL, '2017-05-18 03:33:35'),
(164, 7, 23, NULL, '2017-05-18 03:33:35'),
(165, 8, 23, NULL, '2017-05-18 03:33:35'),
(166, 9, 23, NULL, '2017-05-18 03:33:35'),
(167, 11, 23, NULL, '2017-05-18 03:33:35'),
(168, 12, 23, NULL, '2017-05-18 03:33:35'),
(169, 10, 23, NULL, '2017-05-18 03:33:35'),
(170, 4, 23, NULL, '2017-05-18 03:33:35'),
(171, 3, 23, NULL, '2017-05-18 03:33:35'),
(172, 15, 24, NULL, '2017-05-23 05:36:15'),
(173, 9, 24, NULL, '2017-05-23 05:36:15'),
(174, 8, 24, NULL, '2017-05-23 05:36:15'),
(175, 7, 24, NULL, '2017-05-23 05:36:15'),
(176, 13, 24, NULL, '2017-05-23 05:36:15'),
(177, 14, 24, NULL, '2017-05-23 05:36:15'),
(178, 17, 24, NULL, '2017-05-23 05:36:15'),
(179, 18, 24, NULL, '2017-05-23 05:36:15'),
(180, 10, 24, NULL, '2017-05-23 05:36:15'),
(181, 11, 24, NULL, '2017-05-23 05:36:15'),
(182, 5, 24, NULL, '2017-05-23 05:36:15'),
(183, 4, 24, NULL, '2017-05-23 05:36:15'),
(184, 2, 25, NULL, '2017-05-27 07:28:44'),
(185, 3, 25, NULL, '2017-05-27 07:28:44'),
(186, 4, 25, NULL, '2017-05-27 07:28:44'),
(187, 11, 25, NULL, '2017-05-27 07:28:44'),
(188, 12, 25, NULL, '2017-05-27 07:28:44'),
(189, 18, 25, NULL, '2017-05-27 07:28:44'),
(190, 19, 25, NULL, '2017-05-27 07:28:44'),
(191, 24, 25, NULL, '2017-05-27 07:28:44'),
(192, 23, 25, NULL, '2017-05-27 07:28:44'),
(193, 29, 25, NULL, '2017-05-27 07:28:44'),
(194, 5, 27, NULL, '2017-05-31 05:01:31'),
(195, 6, 27, NULL, '2017-05-31 05:01:31'),
(196, 12, 27, NULL, '2017-05-31 05:01:31'),
(197, 10, 27, NULL, '2017-05-31 05:01:31'),
(198, 9, 27, NULL, '2017-05-31 05:01:31'),
(199, 8, 27, NULL, '2017-05-31 05:01:31'),
(200, 7, 27, NULL, '2017-05-31 05:01:31'),
(201, 14, 27, NULL, '2017-05-31 05:01:31'),
(202, 15, 27, NULL, '2017-05-31 05:01:31'),
(203, 17, 27, NULL, '2017-05-31 05:01:31'),
(204, 18, 27, NULL, '2017-05-31 05:01:31'),
(205, 2, 30, NULL, '2017-06-04 10:43:51'),
(206, 3, 30, NULL, '2017-06-04 10:43:51'),
(207, 4, 30, NULL, '2017-06-04 10:43:51'),
(208, 5, 30, NULL, '2017-06-04 10:43:51'),
(209, 6, 30, NULL, '2017-06-04 10:43:51'),
(210, 12, 30, NULL, '2017-06-04 10:43:51'),
(211, 11, 30, NULL, '2017-06-04 10:43:51'),
(212, 10, 30, NULL, '2017-06-04 10:43:51'),
(213, 9, 30, NULL, '2017-06-04 10:43:51'),
(214, 8, 30, NULL, '2017-06-04 10:43:51'),
(215, 7, 30, NULL, '2017-06-04 10:43:51'),
(216, 13, 30, NULL, '2017-06-04 10:43:51'),
(217, 14, 30, NULL, '2017-06-04 10:43:51'),
(218, 15, 30, NULL, '2017-06-04 10:43:51'),
(219, 3, 31, NULL, '2017-06-04 10:49:01'),
(220, 4, 31, NULL, '2017-06-04 10:49:01'),
(221, 5, 31, NULL, '2017-06-04 10:49:01'),
(222, 6, 31, NULL, '2017-06-04 10:49:01'),
(223, 1, 31, NULL, '2017-06-04 10:49:01'),
(224, 7, 31, NULL, '2017-06-04 10:49:01'),
(225, 8, 31, NULL, '2017-06-04 10:49:01'),
(226, 2, 31, NULL, '2017-06-04 10:49:01'),
(227, 9, 31, NULL, '2017-06-04 10:49:01'),
(228, 10, 31, NULL, '2017-06-04 10:49:01'),
(229, 11, 31, NULL, '2017-06-04 10:49:01'),
(230, 12, 31, NULL, '2017-06-04 10:49:01'),
(231, 51, 9, NULL, '2017-06-08 14:17:11'),
(232, 52, 9, NULL, '2017-06-08 14:17:11'),
(233, 53, 9, NULL, '2017-06-08 14:17:11'),
(234, 54, 9, NULL, '2017-06-08 14:17:12'),
(235, 55, 9, NULL, '2017-06-08 14:17:12'),
(236, 56, 9, NULL, '2017-06-08 14:17:12'),
(237, 62, 9, NULL, '2017-06-08 14:17:12'),
(238, 60, 9, NULL, '2017-06-08 14:17:12'),
(239, 61, 9, NULL, '2017-06-08 14:17:12'),
(240, 59, 9, NULL, '2017-06-08 14:17:12'),
(241, 58, 9, NULL, '2017-06-08 14:17:12'),
(242, 57, 9, NULL, '2017-06-08 14:17:12'),
(244, 53, 38, NULL, '2017-06-19 14:14:29'),
(245, 53, 38, NULL, '2017-06-19 14:14:29'),
(246, 59, 38, NULL, '2017-06-19 14:14:29'),
(247, 58, 38, NULL, '2017-06-19 14:14:30'),
(248, 56, 38, NULL, '2017-06-19 14:14:30'),
(249, 63, 38, NULL, '2017-06-19 14:14:30'),
(250, 57, 38, NULL, '2017-06-19 14:14:30'),
(251, 64, 38, NULL, '2017-06-19 14:14:30'),
(252, 51, 38, NULL, '2017-06-19 14:14:30'),
(253, 52, 38, NULL, '2017-06-19 14:14:30'),
(254, 55, 38, NULL, '2017-06-19 14:14:30'),
(255, 54, 38, NULL, '2017-06-19 14:14:30'),
(256, 62, 38, NULL, '2017-06-19 14:14:30'),
(258, 79, 40, NULL, '2017-06-26 07:43:19'),
(259, 53, 40, NULL, '2017-06-26 07:43:19'),
(260, 52, 40, NULL, '2017-06-26 07:43:19'),
(261, 54, 40, NULL, '2017-06-26 07:43:19'),
(262, 55, 40, NULL, '2017-06-26 07:43:19'),
(263, 56, 40, NULL, '2017-06-26 07:43:19'),
(264, 59, 40, NULL, '2017-06-26 07:43:19'),
(265, 57, 40, NULL, '2017-06-26 07:43:19'),
(266, 63, 40, NULL, '2017-06-26 07:43:19'),
(267, 64, 40, NULL, '2017-06-26 07:43:19'),
(268, 52, 41, NULL, '2017-06-27 05:05:46'),
(269, 57, 41, NULL, '2017-06-27 05:05:46'),
(270, 71, 41, NULL, '2017-06-27 05:05:46'),
(271, 55, 41, NULL, '2017-06-27 05:05:46'),
(272, 56, 41, NULL, '2017-06-27 05:05:46'),
(273, 54, 41, NULL, '2017-06-27 05:05:46'),
(274, 59, 41, NULL, '2017-06-27 05:05:46'),
(275, 65, 41, NULL, '2017-06-27 05:05:46'),
(276, 64, 41, NULL, '2017-06-27 05:05:46'),
(277, 58, 41, NULL, '2017-06-27 05:05:46'),
(278, 63, 42, NULL, '2017-06-29 02:15:33'),
(279, 57, 42, NULL, '2017-06-29 02:15:33'),
(280, 58, 42, NULL, '2017-06-29 02:15:33'),
(281, 59, 42, NULL, '2017-06-29 02:15:33'),
(282, 64, 42, NULL, '2017-06-29 02:15:33'),
(283, 56, 42, NULL, '2017-06-29 02:15:33'),
(284, 55, 42, NULL, '2017-06-29 02:15:33'),
(285, 54, 42, NULL, '2017-06-29 02:15:33'),
(286, 53, 42, NULL, '2017-06-29 02:15:33'),
(287, 52, 42, NULL, '2017-06-29 02:15:33'),
(288, 63, 44, NULL, '2017-07-02 01:26:51'),
(289, 79, 44, NULL, '2017-07-02 01:26:51'),
(290, 57, 44, NULL, '2017-07-02 01:26:51'),
(291, 58, 44, NULL, '2017-07-02 01:26:51'),
(292, 51, 44, NULL, '2017-07-02 01:26:51'),
(293, 53, 44, NULL, '2017-07-02 01:26:51'),
(294, 52, 44, NULL, '2017-07-02 01:26:51'),
(295, 54, 44, NULL, '2017-07-02 01:26:51'),
(296, 55, 44, NULL, '2017-07-02 01:26:51'),
(297, 56, 44, NULL, '2017-07-02 01:26:51'),
(298, 59, 44, NULL, '2017-07-02 01:26:51'),
(299, 60, 44, NULL, '2017-07-02 01:26:51'),
(300, 67, 44, NULL, '2017-07-02 01:26:51'),
(301, 70, 44, NULL, '2017-07-02 01:26:51'),
(302, 79, 43, NULL, '2017-07-28 13:31:43'),
(303, 63, 43, NULL, '2017-07-28 13:31:43'),
(304, 59, 43, NULL, '2017-07-28 13:31:43'),
(305, 58, 43, NULL, '2017-07-28 13:31:43'),
(306, 52, 43, NULL, '2017-07-28 13:31:43'),
(307, 54, 43, NULL, '2017-07-28 13:31:43'),
(308, 55, 43, NULL, '2017-07-28 13:31:43'),
(309, 56, 43, NULL, '2017-07-28 13:31:43'),
(310, 76, 43, NULL, '2017-07-28 13:31:43'),
(311, 64, 43, NULL, '2017-07-28 13:31:43'),
(312, 51, 48, NULL, '2017-07-31 16:16:46'),
(313, 57, 48, NULL, '2017-07-31 16:16:47'),
(314, 58, 48, NULL, '2017-07-31 16:16:47'),
(315, 56, 48, NULL, '2017-07-31 16:16:47'),
(316, 54, 48, NULL, '2017-07-31 16:16:47'),
(317, 53, 48, NULL, '2017-07-31 16:16:47'),
(318, 52, 48, NULL, '2017-07-31 16:16:47'),
(319, 79, 48, NULL, '2017-07-31 16:16:47'),
(320, 64, 48, NULL, '2017-07-31 16:16:47'),
(321, 78, 48, NULL, '2017-07-31 16:16:47'),
(322, 58, 54, NULL, '2017-08-05 02:38:21'),
(323, 76, 54, NULL, '2017-08-05 02:38:21'),
(324, 72, 54, NULL, '2017-08-05 02:38:21'),
(325, 68, 54, NULL, '2017-08-05 02:38:21'),
(326, 62, 54, NULL, '2017-08-05 02:38:21'),
(327, 61, 54, NULL, '2017-08-05 02:38:21'),
(328, 57, 54, NULL, '2017-08-05 02:38:21'),
(329, 56, 54, NULL, '2017-08-05 02:38:21'),
(330, 60, 54, NULL, '2017-08-05 02:38:21'),
(331, 55, 54, NULL, '2017-08-05 02:38:21'),
(332, 57, 55, NULL, '2017-08-05 04:11:58'),
(333, 58, 55, NULL, '2017-08-05 04:11:58'),
(334, 54, 55, NULL, '2017-08-05 04:11:58'),
(335, 52, 55, NULL, '2017-08-05 04:11:58'),
(336, 64, 55, NULL, '2017-08-05 04:11:58'),
(337, 63, 55, NULL, '2017-08-05 04:11:58'),
(338, 53, 55, NULL, '2017-08-05 04:11:58'),
(339, 56, 55, NULL, '2017-08-05 04:11:58'),
(340, 62, 55, NULL, '2017-08-05 04:11:58'),
(341, 60, 55, NULL, '2017-08-05 04:11:58'),
(342, 55, 56, NULL, '2017-08-06 02:48:25'),
(343, 54, 56, NULL, '2017-08-06 02:48:25'),
(344, 52, 56, NULL, '2017-08-06 02:48:25'),
(345, 58, 56, NULL, '2017-08-06 02:48:25'),
(346, 57, 56, NULL, '2017-08-06 02:48:25'),
(347, 79, 56, NULL, '2017-08-06 02:48:25'),
(348, 53, 56, NULL, '2017-08-06 02:48:25'),
(349, 64, 56, NULL, '2017-08-06 02:48:25'),
(350, 80, 56, NULL, '2017-08-06 02:48:25'),
(351, 78, 56, NULL, '2017-08-06 02:48:25'),
(352, 56, 56, NULL, '2017-08-06 02:48:25'),
(353, 52, 60, NULL, '2017-08-10 06:47:06'),
(354, 53, 60, NULL, '2017-08-10 06:47:06'),
(355, 54, 60, NULL, '2017-08-10 06:47:06'),
(356, 55, 60, NULL, '2017-08-10 06:47:06'),
(357, 59, 60, NULL, '2017-08-10 06:47:06'),
(358, 58, 60, NULL, '2017-08-10 06:47:06'),
(359, 57, 60, NULL, '2017-08-10 06:47:06'),
(360, 64, 60, NULL, '2017-08-10 06:47:06'),
(361, 65, 60, NULL, '2017-08-10 06:47:06'),
(362, 56, 60, NULL, '2017-08-10 06:47:06'),
(363, 51, 61, NULL, '2017-08-11 05:29:54'),
(364, 51, 61, NULL, '2017-08-11 05:29:55'),
(365, 51, 61, NULL, '2017-08-11 05:29:55'),
(366, 52, 61, NULL, '2017-08-11 05:29:55'),
(367, 52, 61, NULL, '2017-08-11 05:29:55'),
(368, 53, 61, NULL, '2017-08-11 05:29:56'),
(369, 53, 61, NULL, '2017-08-11 05:29:56'),
(370, 54, 61, NULL, '2017-08-11 05:29:56'),
(371, 55, 61, NULL, '2017-08-11 05:29:56'),
(372, 55, 61, NULL, '2017-08-11 05:29:56'),
(373, 56, 61, NULL, '2017-08-11 05:29:56'),
(374, 59, 61, NULL, '2017-08-11 05:29:56'),
(375, 58, 61, NULL, '2017-08-11 05:29:56'),
(376, 57, 61, NULL, '2017-08-11 05:29:56'),
(377, 63, 61, NULL, '2017-08-11 05:29:56'),
(378, 64, 61, NULL, '2017-08-11 05:29:56'),
(379, 65, 61, NULL, '2017-08-11 05:29:56'),
(380, 54, 62, NULL, '2017-08-11 12:30:19'),
(381, 52, 62, NULL, '2017-08-11 12:30:19'),
(382, 57, 62, NULL, '2017-08-11 12:30:19'),
(383, 58, 62, NULL, '2017-08-11 12:30:19'),
(384, 63, 62, NULL, '2017-08-11 12:30:19'),
(385, 65, 62, NULL, '2017-08-11 12:30:19'),
(386, 56, 62, NULL, '2017-08-11 12:30:19'),
(387, 51, 62, NULL, '2017-08-11 12:30:19'),
(388, 64, 62, NULL, '2017-08-11 12:30:19'),
(389, 78, 62, NULL, '2017-08-11 12:30:19'),
(390, 67, 66, NULL, '2017-08-16 15:08:02'),
(391, 61, 66, NULL, '2017-08-16 15:08:02'),
(392, 60, 66, NULL, '2017-08-16 15:08:02'),
(393, 59, 66, NULL, '2017-08-16 15:08:02'),
(394, 56, 66, NULL, '2017-08-16 15:08:02'),
(395, 57, 66, NULL, '2017-08-16 15:08:02'),
(396, 58, 66, NULL, '2017-08-16 15:08:02'),
(397, 64, 66, NULL, '2017-08-16 15:08:02'),
(398, 65, 66, NULL, '2017-08-16 15:08:02'),
(399, 63, 66, NULL, '2017-08-16 15:08:02'),
(400, 51, 73, NULL, '2017-08-27 11:04:01'),
(401, 51, 73, NULL, '2017-08-27 11:04:01'),
(402, 52, 73, NULL, '2017-08-27 11:04:01'),
(403, 53, 73, NULL, '2017-08-27 11:04:01'),
(404, 54, 73, NULL, '2017-08-27 11:04:01'),
(405, 55, 73, NULL, '2017-08-27 11:04:01'),
(406, 56, 73, NULL, '2017-08-27 11:04:01'),
(407, 62, 73, NULL, '2017-08-27 11:04:01'),
(408, 61, 73, NULL, '2017-08-27 11:04:01'),
(409, 60, 73, NULL, '2017-08-27 11:04:01'),
(410, 59, 73, NULL, '2017-08-27 11:04:01'),
(411, 65, 73, NULL, '2017-08-27 11:04:01'),
(412, 58, 73, NULL, '2017-08-27 11:04:01'),
(413, 64, 73, NULL, '2017-08-27 11:04:01'),
(414, 63, 73, NULL, '2017-08-27 11:04:01'),
(415, 57, 73, NULL, '2017-08-27 11:04:01'),
(416, 53, 79, NULL, '2017-09-11 06:38:53'),
(417, 58, 79, NULL, '2017-09-11 06:38:53'),
(418, 57, 79, NULL, '2017-09-11 06:38:53'),
(419, 52, 79, NULL, '2017-09-11 06:38:53'),
(420, 51, 79, NULL, '2017-09-11 06:38:53'),
(421, 63, 79, NULL, '2017-09-11 06:38:54'),
(422, 64, 79, NULL, '2017-09-11 06:38:54'),
(423, 54, 79, NULL, '2017-09-11 06:38:54'),
(424, 55, 79, NULL, '2017-09-11 06:38:54'),
(425, 62, 79, NULL, '2017-09-11 06:38:54'),
(426, 64, 83, NULL, '2017-09-17 19:23:57'),
(427, 58, 83, NULL, '2017-09-17 19:23:57'),
(428, 57, 83, NULL, '2017-09-17 19:23:57'),
(429, 59, 83, NULL, '2017-09-17 19:23:57'),
(430, 53, 83, NULL, '2017-09-17 19:23:57'),
(431, 54, 83, NULL, '2017-09-17 19:23:57'),
(432, 55, 83, NULL, '2017-09-17 19:23:57'),
(433, 63, 83, NULL, '2017-09-17 19:23:57'),
(434, 56, 83, NULL, '2017-09-17 19:23:57'),
(435, 51, 83, NULL, '2017-09-17 19:23:57'),
(436, 52, 86, NULL, '2017-09-25 16:28:16'),
(437, 54, 86, NULL, '2017-09-25 16:28:16'),
(438, 53, 86, NULL, '2017-09-25 16:28:16'),
(439, 56, 86, NULL, '2017-09-25 16:28:16'),
(440, 55, 86, NULL, '2017-09-25 16:28:17'),
(441, 59, 86, NULL, '2017-09-25 16:28:17'),
(442, 79, 86, NULL, '2017-09-25 16:28:17'),
(443, 64, 86, NULL, '2017-09-25 16:28:17'),
(444, 73, 86, NULL, '2017-09-25 16:28:17'),
(445, 67, 86, NULL, '2017-09-25 16:28:17'),
(446, 59, 88, NULL, '2017-09-27 05:00:43'),
(447, 55, 88, NULL, '2017-09-27 05:00:43'),
(448, 60, 88, NULL, '2017-09-27 05:00:43'),
(449, 57, 88, NULL, '2017-09-27 05:00:43'),
(450, 58, 88, NULL, '2017-09-27 05:00:43'),
(451, 56, 88, NULL, '2017-09-27 05:00:43'),
(452, 61, 88, NULL, '2017-09-27 05:00:43'),
(453, 62, 88, NULL, '2017-09-27 05:00:43'),
(454, 72, 88, NULL, '2017-09-27 05:00:43'),
(455, 65, 88, NULL, '2017-09-27 05:00:43'),
(456, 51, 89, NULL, '2017-09-27 05:30:39'),
(457, 52, 89, NULL, '2017-09-27 05:30:39'),
(458, 53, 89, NULL, '2017-09-27 05:30:39'),
(459, 54, 89, NULL, '2017-09-27 05:30:40'),
(460, 55, 89, NULL, '2017-09-27 05:30:40'),
(461, 56, 89, NULL, '2017-09-27 05:30:40'),
(462, 57, 89, NULL, '2017-09-27 05:30:40'),
(463, 58, 89, NULL, '2017-09-27 05:30:40'),
(464, 59, 89, NULL, '2017-09-27 05:30:40'),
(465, 65, 89, NULL, '2017-09-27 05:30:40'),
(466, 58, 93, NULL, '2017-10-06 00:29:21'),
(467, 53, 93, NULL, '2017-10-06 00:29:21'),
(468, 63, 93, NULL, '2017-10-06 00:29:21'),
(469, 57, 93, NULL, '2017-10-06 00:29:21'),
(470, 51, 93, NULL, '2017-10-06 00:29:21'),
(471, 52, 93, NULL, '2017-10-06 00:29:21'),
(472, 59, 93, NULL, '2017-10-06 00:29:21'),
(473, 54, 93, NULL, '2017-10-06 00:29:21'),
(474, 55, 93, NULL, '2017-10-06 00:29:21'),
(475, 64, 93, NULL, '2017-10-06 00:29:21'),
(476, 58, 94, NULL, '2017-10-11 07:56:42'),
(477, 57, 94, NULL, '2017-10-11 07:56:42'),
(478, 56, 94, NULL, '2017-10-11 07:56:42'),
(479, 55, 94, NULL, '2017-10-11 07:56:42'),
(480, 59, 94, NULL, '2017-10-11 07:56:42'),
(481, 61, 94, NULL, '2017-10-11 07:56:42'),
(482, 62, 94, NULL, '2017-10-11 07:56:42'),
(483, 63, 94, NULL, '2017-10-11 07:56:42'),
(484, 64, 94, NULL, '2017-10-11 07:56:42'),
(485, 73, 94, NULL, '2017-10-11 07:56:42'),
(486, 56, 95, NULL, '2017-10-13 14:15:27'),
(487, 55, 95, NULL, '2017-10-13 14:15:27'),
(488, 54, 95, NULL, '2017-10-13 14:15:27'),
(489, 53, 95, NULL, '2017-10-13 14:15:27'),
(490, 52, 95, NULL, '2017-10-13 14:15:27'),
(491, 51, 95, NULL, '2017-10-13 14:15:27'),
(492, 57, 95, NULL, '2017-10-13 14:15:27'),
(493, 58, 95, NULL, '2017-10-13 14:15:27'),
(494, 59, 95, NULL, '2017-10-13 14:15:27'),
(495, 70, 95, NULL, '2017-10-13 14:15:27'),
(496, 52, 102, NULL, '2017-11-06 11:59:23'),
(497, 51, 102, NULL, '2017-11-06 11:59:23'),
(498, 57, 102, NULL, '2017-11-06 11:59:23'),
(499, 58, 102, NULL, '2017-11-06 11:59:23'),
(500, 53, 102, NULL, '2017-11-06 11:59:23'),
(501, 54, 102, NULL, '2017-11-06 11:59:23'),
(502, 55, 102, NULL, '2017-11-06 11:59:23'),
(503, 56, 102, NULL, '2017-11-06 11:59:23'),
(504, 59, 102, NULL, '2017-11-06 11:59:23'),
(505, 64, 102, NULL, '2017-11-06 11:59:23'),
(506, 63, 102, NULL, '2017-11-06 11:59:23'),
(507, 61, 104, NULL, '2017-11-12 16:05:33'),
(508, 67, 104, NULL, '2017-11-12 16:05:33'),
(509, 58, 104, NULL, '2017-11-12 16:05:33'),
(510, 56, 104, NULL, '2017-11-12 16:05:33'),
(511, 59, 104, NULL, '2017-11-12 16:05:33'),
(512, 60, 104, NULL, '2017-11-12 16:05:33'),
(513, 78, 104, NULL, '2017-11-12 16:05:33'),
(514, 55, 104, NULL, '2017-11-12 16:05:33'),
(515, 63, 104, NULL, '2017-11-12 16:05:33'),
(516, 77, 104, NULL, '2017-11-12 16:05:33'),
(517, 52, 106, NULL, '2017-11-15 11:51:02'),
(518, 55, 106, NULL, '2017-11-15 11:51:02'),
(519, 58, 106, NULL, '2017-11-15 11:51:02'),
(520, 59, 106, NULL, '2017-11-15 11:51:02'),
(521, 57, 106, NULL, '2017-11-15 11:51:02'),
(522, 54, 106, NULL, '2017-11-15 11:51:02'),
(523, 79, 106, NULL, '2017-11-15 11:51:02'),
(524, 64, 106, NULL, '2017-11-15 11:51:02'),
(525, 80, 106, NULL, '2017-11-15 11:51:02'),
(526, 63, 106, NULL, '2017-11-15 11:51:02'),
(527, 56, 108, NULL, '2017-11-16 08:26:34'),
(528, 53, 108, NULL, '2017-11-16 08:26:34'),
(529, 58, 108, NULL, '2017-11-16 08:26:34'),
(530, 57, 108, NULL, '2017-11-16 08:26:34'),
(531, 55, 108, NULL, '2017-11-16 08:26:34'),
(532, 59, 108, NULL, '2017-11-16 08:26:34'),
(533, 54, 108, NULL, '2017-11-16 08:26:34'),
(534, 64, 108, NULL, '2017-11-16 08:26:34'),
(535, 63, 108, NULL, '2017-11-16 08:26:34'),
(536, 51, 108, NULL, '2017-11-16 08:26:34'),
(537, 51, 113, NULL, '2017-11-27 03:34:24'),
(538, 51, 113, NULL, '2017-11-27 03:34:24'),
(539, 51, 113, NULL, '2017-11-27 03:34:24'),
(540, 51, 113, NULL, '2017-11-27 03:34:24'),
(541, 51, 113, NULL, '2017-11-27 03:34:24'),
(542, 52, 113, NULL, '2017-11-27 03:34:24'),
(543, 53, 113, NULL, '2017-11-27 03:34:24'),
(544, 53, 113, NULL, '2017-11-27 03:34:24'),
(545, 53, 113, NULL, '2017-11-27 03:34:24'),
(546, 54, 113, NULL, '2017-11-27 03:34:24'),
(547, 54, 113, NULL, '2017-11-27 03:34:24'),
(548, 54, 113, NULL, '2017-11-27 03:34:24'),
(549, 56, 113, NULL, '2017-11-27 03:34:24'),
(550, 57, 113, NULL, '2017-11-27 03:34:24'),
(551, 57, 113, NULL, '2017-11-27 03:34:24'),
(552, 58, 113, NULL, '2017-11-27 03:34:24'),
(553, 58, 113, NULL, '2017-11-27 03:34:24'),
(554, 59, 113, NULL, '2017-11-27 03:34:24'),
(555, 59, 113, NULL, '2017-11-27 03:34:24'),
(556, 55, 113, NULL, '2017-11-27 03:34:24'),
(557, 63, 113, NULL, '2017-11-27 03:34:24');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `answer_bookmark`
--
ALTER TABLE `answer_bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `answer_vote`
--
ALTER TABLE `answer_vote`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Chỉ mục cho bảng `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Chỉ mục cho bảng `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Chỉ mục cho bảng `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Chỉ mục cho bảng `bookmarked_answers`
--
ALTER TABLE `bookmarked_answers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment_answer`
--
ALTER TABLE `comment_answer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment_question`
--
ALTER TABLE `comment_question`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`),
  ADD KEY `config_fk_user_idx` (`update_by`);

--
-- Chỉ mục cho bảng `creadential_other`
--
ALTER TABLE `creadential_other`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `credential_education`
--
ALTER TABLE `credential_education`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `credential_employment`
--
ALTER TABLE `credential_employment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `credential_location`
--
ALTER TABLE `credential_location`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `index_topic_question`
--
ALTER TABLE `index_topic_question`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `knows_about`
--
ALTER TABLE `knows_about`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Chỉ mục cho bảng `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `question_follow`
--
ALTER TABLE `question_follow`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `question_topic`
--
ALTER TABLE `question_topic`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `question_vote`
--
ALTER TABLE `question_vote`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `topic_bookmarks`
--
ALTER TABLE `topic_bookmarks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `upvotes`
--
ALTER TABLE `upvotes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`email`);

--
-- Chỉ mục cho bảng `user_question_follow`
--
ALTER TABLE `user_question_follow`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_question_pass`
--
ALTER TABLE `user_question_pass`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_topic_follow`
--
ALTER TABLE `user_topic_follow`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;
--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `credential_education`
--
ALTER TABLE `credential_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `credential_employment`
--
ALTER TABLE `credential_employment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `credential_location`
--
ALTER TABLE `credential_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `knows_about`
--
ALTER TABLE `knows_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;
--
-- AUTO_INCREMENT cho bảng `question_topic`
--
ALTER TABLE `question_topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT cho bảng `topic_bookmarks`
--
ALTER TABLE `topic_bookmarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT cho bảng `upvotes`
--
ALTER TABLE `upvotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT cho bảng `user_question_follow`
--
ALTER TABLE `user_question_follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT cho bảng `user_question_pass`
--
ALTER TABLE `user_question_pass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `user_topic_follow`
--
ALTER TABLE `user_topic_follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=558;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `config`
--
ALTER TABLE `config`
  ADD CONSTRAINT `config_ibfk_1` FOREIGN KEY (`update_by`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
