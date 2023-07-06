-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 11, 2022 lúc 06:38 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bancaycanh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctdonhang`
--

CREATE TABLE `ctdonhang` (
  `id` int(10) NOT NULL,
  `Madonhang` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ctdonhang`
--

INSERT INTO `ctdonhang` (`id`, `Madonhang`, `product_id`, `quantity`, `price`, `updated_at`, `created_at`) VALUES
(5, 6, 15, 5, 155000, '2022-05-05 09:21:36', '2022-05-05 09:21:36'),
(6, 6, 10, 1, 215000, '2022-05-05 09:21:36', '2022-05-05 09:21:36'),
(21, 18, 10, 3, 215000, '2022-05-09 17:49:28', '2022-05-09 17:49:28'),
(22, 18, 2, 5, 110000, '2022-05-09 17:49:28', '2022-05-09 17:49:28'),
(23, 19, 10, 1, 215000, '2022-05-11 08:27:48', '2022-05-11 08:27:48'),
(24, 19, 2, 1, 110000, '2022-05-11 08:27:48', '2022-05-11 08:27:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detailban`
--

CREATE TABLE `detailban` (
  `id` int(10) NOT NULL,
  `id_hdb` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `slg` int(11) NOT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detailban`
--

INSERT INTO `detailban` (`id`, `id_hdb`, `id_sp`, `slg`, `creat_at`, `update_at`) VALUES
(1, 2, 1, 3, '2022-04-05 13:55:40', '2022-04-04 13:55:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detailnhap`
--

CREATE TABLE `detailnhap` (
  `id` int(10) NOT NULL,
  `id_hdn` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `slg` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detailnhap`
--

INSERT INTO `detailnhap` (`id`, `id_hdn`, `id_sp`, `slg`, `updated_at`, `created_at`) VALUES
(1, 2, 1, 5, NULL, NULL),
(2, 1, 3, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(10) NOT NULL,
  `id_kh` int(10) NOT NULL,
  `Fist_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Last_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `id_kh`, `Fist_Name`, `Last_Name`, `dienthoai`, `diachi`, `Email`, `updated_at`, `created_at`) VALUES
(6, 1, 'Do', 'Duy', 333823775, 'Hà Nội', 'doduy1118@gmail.com', '2022-05-05 09:21:36', '2022-05-05 09:21:36'),
(18, 1, 'Do', 'Quỳnh', 376419034, 'Thanh Hà', 'annhien1001@gmail.com', '2022-05-09 17:49:28', '2022-05-09 17:49:28'),
(19, 1, 'Hoàng', 'Hùng', 376419035, 'Đà Nẵng', 'HoangHung@gmail.com', '2022-05-11 08:27:48', '2022-05-11 08:27:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonban`
--

CREATE TABLE `hoadonban` (
  `id` int(10) NOT NULL,
  `id_kh` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `Tongtien` float DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadonban`
--

INSERT INTO `hoadonban` (`id`, `id_kh`, `date`, `Tongtien`, `updated_at`, `created_at`) VALUES
(1, 1, '2022-04-05', 1500000, NULL, NULL),
(2, 2, '2022-04-04', 2000000, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonnhap`
--

CREATE TABLE `hoadonnhap` (
  `id` int(10) NOT NULL,
  `id_nhanvien` int(10) NOT NULL,
  `id_ncc` int(10) NOT NULL,
  `date` date NOT NULL,
  `Tongtien` float NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadonnhap`
--

INSERT INTO `hoadonnhap` (`id`, `id_nhanvien`, `id_ncc`, `date`, `Tongtien`, `updated_at`, `created_at`) VALUES
(1, 2, 2, '2022-04-03', 5000000, NULL, NULL),
(2, 3, 1, '2022-04-05', 10000000, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `introduce`
--

CREATE TABLE `introduce` (
  `id` int(10) NOT NULL,
  `Ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'nội dung\r\n',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `introduce`
--

INSERT INTO `introduce` (`id`, `Ten`, `image`, `noidung`, `updated_at`) VALUES
(1, 'HISTORY', 'b.philosophy.jpg', 'Cây cảnh, từ trước đến nay vẫn được xem như vật trang trí, làm đẹp không gian sống cho con người. Cây để bàn, bonsai, terrarium, cây thuỷ sinh hoặc cây treo chậu… mỗi loại mỗi cây đều có ý nghĩa và vẻ đẹp riêng của mình, góp phần đáng kể làm cho cuộc sống chúng ta thêm sinh động, trở nên đáng yêu và thanh bình hơn.<\\n>\r\n\r\nNhưng tại Vườn Cây Việt, chúng tôi muốn mang đến cho bạn không chỉ là cây cảnh, chúng tôi muốn mang đến cho bạn những trải nghiệm tuyệt vời mà không nơi nào có. Vườn Cây Việt hiểu rằng đối với cây cảnh, bạn sẽ muốn:<\\br>\r\n\r\nHiểu ý nghĩa (một cách sâu sắc, đúng đắn và vững chắc) về loại cây mà mình chọn.<\\br>\r\nHiểu phong thuỷ chính xác của cây để mang lại sự may mắn và thành công cho công việc, cuộc sống.<\\br>\r\nHiểu câu chuyện tạo nên ý nghĩa đằng sau từng loại cây\r\nHiểu cách chăm sóc để cây luôn trong trạng thái tốt nhất\r\nLựa chọn loại chậu và phụ kiện chăm sóc cây sao cho phù hợp với nhu cầu và một điều có thể bạn chưa để ý… là thông qua loại cây bạn chọn, bạn sẽ thể hiện được cá tính và những gì độc đáo của bản thân mà không cần nói ra mà người khác đã tự hiểu rồi. Bạn làm điều đó bằng cách nào?<\\br>\r\n\r\nRất khó, bởi không phải ai, dù thích chơi cây và yêu cây, đều có thể hiểu rõ từng ấy vấn đề. Nhưng không sao!<\\br>\r\n\r\nHãy một lần đến với Vườn Cây Việt, chúng tôi không hứa gì ngoài việc mang đến cho bạn các sản phẩm cây cảnh và dịch vụ chất lượng cao nhất thông qua quy trình bán hàng, giao hàng, chăm sóc khách hàng, chăm sóc sản phẩm tiêu chuẩn… với giá cả phải chăng phù hợp với túi tiền.<\\br>\r\n\r\nKhông chỉ là những chậu cây cảnh được chăm sóc tỉ mẩn và giao tận tay khách hàng, bạn còn nhận được nhiều thông tin hữu ích về ý nghĩa, cách chăm sóc và những câu chuyện thú vị của từng loại cây mà bạn chưa biết đến, và đặc biệt không phải ai cũng có… là cơ sở khoa học về đặc tính của từng loại cây. Tất cả ở hình thức đẹp và độc đáo nhất để bạn có thể sử dụng lâu dài.<\\br>\r\nSứ mệnh\r\nVới ý nghĩa đó, Vườn Cây Việt đặt ra cho mình sứ mệnh cung cấp các loại cây làm đẹp không gian sống và không chỉ vậy, còn cung cấp thêm các giá trị tinh thần cho khách hàng, là điểm đến cho mọi khách hàng có nhu cầu tìm mua những cây cảnh trang trí đẹp, phù hợp cá tính, phong thuỷ, không gian sống và làm việc.\r\n\r\nTầm nhìn\r\nĐến năm 2023, Vườn Cây Việt phấn đấu trở thành 1 trong 3 đơn vị dẫn đầu trong lĩnh vực cung cấp cây cảnh để bàn, cây cảnh mini, bonsai, cây thuỷ sinh, terrarium.... tại Việt Nam, đồng thời trở thành nhà cung cấp đa dạng các loại hình cây cảnh phù hợp cho nhiều đối tượng khách hàng khác nhau với hệ thống đối tác phân phối rộng khắp cả nước.\r\n\r\nCác sản phẩm của Vườn Cây Việt sẽ ngày càng hoàn thiện về mẫu mã, tính đa dạng nhằm đáp ứng được nhu cầu khác nhau đến từ khách hàng.\r\n\r\nGiá trị cốt lõi\r\n• Chất lượng: Tập trung vào chất lượng sản phẩm, cam kết chỉ đưa ra thị trường các sản phẩm thực sự chất lượng.\r\n\r\n• Chính trực: Không lừa dối khách hàng, luôn đảm bảo tư vấn cho khách hàng một cách công tâm, khách quan nhất về sản phẩm.\r\n\r\n• Sáng tạo, đổi mới: Không ngừng quan sát, tìm hiểu và học hỏi, từ đó đưa ra các ý tưởng, sản phẩm mới.\r\n\r\n• Đồng đội: Luôn phối hợp tốt giữa các thành viên trong công ty, sẵn sàng chia sẻ, góp ý, động viên và học hỏi lẫn nhau: “vì sự phát triển của từng cá nhân, vì sự phát triển bền vững của công ty”.\r\n\r\nĐừng dừng lại ở đây, hãy khám phá các sản phẩm tại Vuoncayviet.com ngay bây giờ!', '2022-04-26 17:56:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(10) NOT NULL,
  `Tenkh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diachi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `Tenkh`, `SDT`, `Diachi`, `Email`, `updated_at`, `created_at`) VALUES
(1, 'Phan Văn Hoàng', '0327859864', 'Thanh Hà-Hải Dương', 'PhanHoang@gmail.com', NULL, NULL),
(2, 'Đỗ Đức Dũng', '0334568863', 'ThanhXuan-HaNoi', 'DucDung@gmail.com', NULL, NULL),
(3, 'Trần Xuân Nhất', '0378956356', 'HaDong-HaNoi', 'NhatTran12@gmail.com', NULL, NULL),
(4, 'Nguyễn Thị Toán', '0358967412', 'Hà Nam', 'Toan123@gmail.com', NULL, NULL),
(5, 'Phạm Huy Hùng', '0398567459', 'Yên Dũng-Bắc Ninh', 'HuyHungs@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kho`
--

CREATE TABLE `kho` (
  `id` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `slg/loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kho`
--

INSERT INTO `kho` (`id`, `id_sp`, `slg/loai`) VALUES
(1, 1, 3),
(2, 2, 6),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id` int(10) NOT NULL,
  `Tenloai` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ghichu` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id`, `Tenloai`, `Ghichu`, `updated_at`, `created_at`) VALUES
(1, 'Cây để bàn', 'loại cây nhỏ,đẹp...', NULL, NULL),
(2, 'Cây để góc phòng', 'Cây to không cần nhiều ánh sáng...', NULL, NULL),
(3, 'Cây trước phòng', 'Cây to,ưa ánh sáng,...', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `updated_at`, `created_at`) VALUES
(1, 'Sự thật độc cây Kim tiền', 'Cây kim tiền là một trong những cây cảnh được ưa trồng ở các văn phòng cũng như gia đình.\r\n  Với ý nghĩa \"hút lộc\", phát tài nên cây kim phát tiền được nhiều gia đình lựa chọn trồng trong gia đình. Nhưng sự thật ẩn sau nó thật đáng sợ...', 'anh11.jpg', '2022-04-25 18:05:13', '2022-04-25 18:05:13'),
(2, 'Cây cảnh phù hợp với thời tiết mùa đông ở miền Bắc', 'Là loại cây cảnh nội thất phù hợp với môi trường thiếu ánh sáng,\r\n                thời tiết giá lạnh, không yêu cầu chăm sóc kỹ lưỡng, cầu kỳ, \r\n                kim phát tài là lựa chọn yêu thích của đa số người chơi cây nội thất nói chung và dân văn phòng nói riêng', 'anh5.jpg', '2022-04-25 18:06:02', '2022-04-25 18:06:02'),
(3, 'Mẹo chăm sóc cây cảnh cảnh không gian trong nhà.', 'Cây xanh không chỉ mang lại vẻ đẹp cho khôn gian căn phòng mà trồng cây xanh trong nhà còn\r\n                có thể góp phần nào loại bỏ được những khí độc hại, lọc bớt bụi mịn trong không khí.\r\n                 Một số cây cảnh có cơ chế sinh học ngược hấp thụ cac ...', 'anh7.jpg', '2022-04-27 01:06:26', '2022-04-26 22:06:26'),
(4, 'Kĩ thuật tưới nước cho cây chậu cây cảnh nội thất', 'Tưới nước chính là một kỹ thuật thiết yếu trong việc chăm sóc một chậu cây cảnh nội thất.\r\n                 Bạn có thể quên lau lá, quên vệ sinh chậu, quên bón thêm dinh dưỡng bổ sung, \r\n                 nhưng nếu quên tưới nước trong một khoảng thời gian nhất định ...', 'anh6.jpeg', '2022-04-27 22:06:59', '2022-04-28 01:06:59'),
(5, 'Cách chăm sóc cây Hương Thảo', 'Là loại cây cảnh nội thất phù hợp với môi trường thiếu ánh sáng,\r\n                thời tiết giá lạnh, không yêu cầu chăm sóc kỹ lưỡng, cầu kỳ, \r\n                kim phát tài là lựa chọn yêu thích của đa số người chơi cây nội thất nói chung và dân văn phòng nói riêng', 'anh13.jpg', '2022-04-25 18:07:24', '2022-04-25 20:07:24'),
(6, 'Một số lưu ý chăm sóc để cây cảnh phát triển tốt', 'Hiện nay các chậu cây cảnh rất được ưa chuộng đặt trang trí trong văn phòng làm việc, bàn làm việc cá nhân hay thậm chí là trang trí tại các bàn, kệ tủ của gia đình. Để cây có thể phát triển bình thường. Cùng Cây cảnh Tầm Nhìn', 'anh11.jpg', '2022-04-29 03:07:42', '2022-04-29 04:07:42'),
(7, 'Những điều cần biết khi bón phân cho cây cảnh', 'Chậu cây cảnh đặt trang trí trong văn phòng làm việc, bàn làm việc các nhân hay thâm chí là trang trí tại các bàn, kệ tủ trong mỗi gia đình đang là xu thế tất yếu hiện nay. Để cây luôn xanh mướt và phát triển tốt chúng ta thường ...', 'anh9.jpg', '2022-04-25 18:08:11', '2022-04-25 19:08:11'),
(8, 'Mẹo đơn giản giúp \'\'hồi sức\'\' cho cây xanh ', 'Khi chậu cây xanh của bạn có hiện tượng héo úa và có dấu hiệu sắp hỏng, bạn đừng vội bỏ đi nhé, hãy thử các mẹo vắt sau để “hội sức” cho cây.', 'anh10.jpg', '2022-04-30 00:08:31', '2022-04-26 03:08:31'),
(9, 'Nguyên nhân cách khắc phục bệnh cây Kim Phát Tài', 'Kim phát tài bị vàng lá hoặc rụng lá phần lớn liên quan đến chế độ tưới nước cho cây. Trong quá trình trồng và chăm sóc chậu cây bạn cần đặc biệt chú ý đến lượng nước bổ sung cho cây để cây sinh trưởng và phát triển tốt.', 'anh12.jpg', '2022-04-29 23:09:01', '2022-04-30 04:09:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id` int(10) NOT NULL,
  `Tenncc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diachi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dienthoai` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`id`, `Tenncc`, `Diachi`, `Email`, `Dienthoai`, `updated_at`, `created_at`) VALUES
(1, 'Hồng Loan', 'ThanhXuan-HaNoi', 'HongXuan@gmail.com', '0337859642', NULL, NULL),
(2, 'Nhất Trí', 'HưngYên', 'Nhat@gmail.com', '0357895856', NULL, NULL),
(3, 'LoanNghia', 'HaNam', 'LoanNghia@gmail.com', '0327856425', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `Manv` int(10) NOT NULL,
  `Tennv` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diachi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`Manv`, `Tennv`, `SDT`, `Diachi`, `Email`, `updated_at`, `created_at`) VALUES
(1, 'Đỗ Văn Duy', '0333823775', 'ThanhHa-HaiDuong', 'duydo1118@gmail.com', NULL, NULL),
(2, 'Đỗ Thị Quỳnh', '0376419034', 'HaNoi', 'annhien1001@gmail.com', NULL, NULL),
(3, 'Phạm Thị Huyền Trang', '0347895624', 'Hải Phòng', 'HuyenTrang@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) NOT NULL,
  `Maloai` int(10) NOT NULL,
  `Mancc` int(10) NOT NULL,
  `Tensp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giacu` int(11) NOT NULL,
  `giamoi` int(11) NOT NULL,
  `Anh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mota` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Thongtin` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `Maloai`, `Mancc`, `Tensp`, `giacu`, `giamoi`, `Anh`, `Mota`, `Thongtin`, `updated_at`, `created_at`) VALUES
(1, 2, 1, 'Cây Hạnh Phúc', 250000, 230000, 'anh1a.jpg', 'Cây to, đẹp, không thích hợp với ánh sáng mạnh', 'Cây hạnh phúc là loại cây có nguồn gốc từ châu Âu, là loại cây thuộc chi Heteropanax, là loại thân gỗ có thể cao từ 1 – 3m. Thân cây hạnh phúc có màu nâu đen, xù xì với các mảng bọc phía bên ngoài. Lá có màu xanh khi non và đậm dần khi trưởng thành, thường mọc xum xuê thành cành hoặc trên thân chính của cây. Cây hoa hạnh phúc có hoa màu trắng kem, quả giống hình quả đậu. Vì là loại cây cảnh thân gỗ nên cây hạnh phúc có tuổi thọ lâu và sức sống bền bỉ, dễ dàng chăm sóc tại nhà.\r\nVới màu sắc chủ đạo là màu xanh đậm nên cây hạnh phúc hợp với mệnh Kim nhất. Những người thuộc mệnh Kim trồng cây hạnh phúc trong nhà sẽ giúp cho họ cân bằng lại cuộc sống, gia đình sum vầy, viên mãn. Ngoài ra, theo tứ hành xung thì Kim sinh Thủy nên cây hạnh phúc còn hợp với người mệnh Thủy.', NULL, NULL),
(2, 1, 2, 'Cây Cẩm Nhung', 120000, 110000, 'anh15.jpg', 'nhỏ gọn', 'Cây cẩm nhung có tên gọi khác là cây may mắn, nó thuộc giống cây thân thảo, rễ chùm và có nguồn gốc từ Nam Mỹ. Cây cẩm nhung rất ưa những nơi mát mẻ, ưa bóng và sinh trưởng khá tốt.\r\nCẩm nhung có màu sắc tươi sáng và không đòi hỏi chăm sóc quá nhiều nên rất được ưa chuộng để trang trí trên bàn làm việc, cửa sổ,...\r\n\r\nLá cây cẩm nhung có nhiều phấn trắng, thuộc loại lá kép và lá khá nhỏ, mọc san sát nhau, phiến lá nhẵn. Vì vậy, lá cẩm nhung có một sức hút lạ kỳ, ai cũng thích ngắm và ngửi lá cẩm nhung.\r\n\r\nTùy theo màu sắc của lá cây mà thân cây có màu đỏ hoặc xanh lá.Cây cẩm nhung có 2 loại là cẩm nhung xanh và cẩm nhung đỏ.\r\nNgoài ra, dựa theo nghiên cứu của đại học Harvard, màu xanh của lá cẩm nhung giúp tăng trí nhớ tới 20%.\r\nCây cẩm nhung tượng trưng cho một tình bạn bền vững và luôn quan tâm, chia sẻ những điều trong cuộc sống.Trong tình yêu, cẩm nhung biểu tượng cho tình yêu thuần khiết, trong sáng.\r\n\r\nĐồng thời, cây cẩm nhung còn mang lại những điều may mắn để bạn trở nên tràn đầy niềm tin, lạc quan trước những khó khăn.\r\n\r\nChính vì những ý nghĩa vô cùng sâu sắc đó của cây nên cẩm nhung thường được làm quà để tặng bạn bè, người yêu.\r\n\r\n\r\n\r\n', NULL, NULL),
(3, 3, 3, 'Cây Kim Tiền', 150000, 180000, 'anh16.jpg', 'To,đẹp', 'Cây kim tiền còn được gọi là cây kim phát tài, cây phát tài, kim tiền phát lộc có nguồn gốc từ Châu Phi. Là loài cây cảnh dễ trồng, dễ chăm sóc, ít sâu bệnh, thường phổ biến trang trí trong không gian nhà hoặc văn phòng. Người ta tin rằng trồng cây kim tiền trong nhà sẽ đem lại sư may mắn, giàu có và thuận hòa cho gia chủ, giúp họ thăng tiến trong công việc.\r\nNhắc đến tên của cây kim tiền cũng đã thể hiện được ý nghĩa của bản thân. Cây Kim tiền mang đến cho gia chủ về tài lộc, may mắn, tiền tài, phú quý, giàu sang, sung túc, thịnh vượng.', NULL, NULL),
(4, 2, 2, 'Cây Tùng Bồng Lai', 200000, 195000, 'anh12.jpg', 'To,đẹp', '', NULL, NULL),
(5, 2, 2, 'Cây Tùng Bồng Lai', 190000, 185000, 'anh6.jpg', 'To,đẹp', '', NULL, NULL),
(6, 2, 2, 'Cây Lưỡi Hổ', 150000, 140000, 'anh17.jpg', 'đẹp', '', NULL, NULL),
(7, 2, 2, 'Cây Lan Ý', 180000, 180000, 'anh19.jpg', 'Đẹp', '', NULL, NULL),
(8, 3, 3, 'Cây Trầu Bà Xanh', 200000, 200000, 'anh1b.jpg', 'To đẹp', '', NULL, NULL),
(9, 1, 2, 'Cây Sen Đá', 150000, 145000, 'anh5.jpg', 'đẹp,không ưa nước', 'Cây hoa sen đá còn được gọi là hoa đá, liên đài... có tên tiếng Anh là Succulent. Đây là một loại cây dễ trồng, phát triển chậm nhưng sống lâu, không cầu kỳ trong việc chăm sóc. Cây hoa sen đá có nguồn gốc từ Mexico, Nam Mỹ, châu Úc và châu Phi.\r\nLoại cây này ưa môi trường sống trên đá, sỏi nhưng không phải là loại cây ưa nước.\r\nÝ nghĩa cây sen đá trong phong thuỷ:\r\nTrong phong thủy, cây hoa sen đá tượng trưng cho sự may mắn, phú quý, tài vận. Người ta tin rằng bên cạnh việc giúp cho công việc thăng tiến, loại cây này cũng tạo cho bạn những mối quan hệ xã hội tốt đẹp, gắn kết hơn, còn trong gia đình, đặt một vài chậu sen đá sẽ giúp bạn xua tan đi những muộn phiền, mệt mỏi trong cuộc sống.\r\nÝ nghĩa của sen đá trong tình yêu\r\nTừ đặc điểm sinh học của cây sen đá mà nó mang ý nghĩa vô cùng tốt đẹp và được nhiều cặp đôi lựa chọn làm quà tặng cho nhau mỗi dịp đặc biệt. Cây sen đá phát triển tốt, có sức sống mãnh liệt cũng giống như tình yêu luôn bền chặt, không thay đổi. Khi tặng nhau cây hoa sen đá, người ta thường gửi gắm hi vọng về một tình yêu bất diệt, trường tồn mãi mãi cùng thời gian.\r\nÝ nghĩa của cây hoa sen đá trong cuộc sống\r\nCây hoa sen đá là biểu tượng cho sự mạnh mẽ, kiên cường, không chịu khuất phục. Bên cạnh đó, khi tặng nhau loại cây này, người ta cũng mong muốn mang tới cho nhau sức khỏe dẻo dai cũng như sự gắn kết giữa các mối quan hệ trong xã hội.', NULL, NULL),
(10, 3, 3, 'Cây Trầu Bà Xanh', 220000, 215000, 'anh11.jpg', 'To,đẹp', '', NULL, NULL),
(11, 3, 3, 'Cây Trầu Bà Xanh', 190000, 190000, 'anh14.jpg', 'To,đẹp', '', NULL, NULL),
(12, 3, 3, 'Cây Kim Ngân', 210000, 210000, 'anh1.jpg', 'To,đẹp', '', NULL, NULL),
(13, 2, 2, 'Cây Lưỡi Hổ', 145000, 135000, 'anh17.jpg', 'Đẹp', '', NULL, NULL),
(14, 3, 3, 'Cây Kim Ngân', 185000, 180000, 'anh10.jpg', 'To,đẹp', '', NULL, NULL),
(15, 1, 2, 'Cây Sen Đá', 160000, 155000, 'anh4.jpg', 'đẹp', 'Cây hoa sen đá còn được gọi là hoa đá, liên đài... có tên tiếng Anh là Succulent. Đây là một loại cây dễ trồng, phát triển chậm nhưng sống lâu, không cầu kỳ trong việc chăm sóc. Cây hoa sen đá có nguồn gốc từ Mexico, Nam Mỹ, châu Úc và châu Phi.\r\nLoại cây này ưa môi trường sống trên đá, sỏi nhưng không phải là loại cây ưa nước.\r\nÝ nghĩa cây sen đá trong phong thuỷ:\r\nTrong phong thủy, cây hoa sen đá tượng trưng cho sự may mắn, phú quý, tài vận. Người ta tin rằng bên cạnh việc giúp cho công việc thăng tiến, loại cây này cũng tạo cho bạn những mối quan hệ xã hội tốt đẹp, gắn kết hơn, còn trong gia đình, đặt một vài chậu sen đá sẽ giúp bạn xua tan đi những muộn phiền, mệt mỏi trong cuộc sống.\r\nÝ nghĩa của sen đá trong tình yêu\r\nTừ đặc điểm sinh học của cây sen đá mà nó mang ý nghĩa vô cùng tốt đẹp và được nhiều cặp đôi lựa chọn làm quà tặng cho nhau mỗi dịp đặc biệt. Cây sen đá phát triển tốt, có sức sống mãnh liệt cũng giống như tình yêu luôn bền chặt, không thay đổi. Khi tặng nhau cây hoa sen đá, người ta thường gửi gắm hi vọng về một tình yêu bất diệt, trường tồn mãi mãi cùng thời gian.\r\nÝ nghĩa của cây hoa sen đá trong cuộc sống\r\nCây hoa sen đá là biểu tượng cho sự mạnh mẽ, kiên cường, không chịu khuất phục. Bên cạnh đó, khi tặng nhau loại cây này, người ta cũng mong muốn mang tới cho nhau sức khỏe dẻo dai cũng như sự gắn kết giữa các mối quan hệ trong xã hội.', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quyen` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `image`, `password`, `address`, `Quyen`, `updated_at`, `created_at`) VALUES
(6, 'Do Thi Quynh', 'annhien1001@gmail.com', 'received_440382173294886.jpeg', '$2y$10$bbcAHDFAfUsa8Jmx5OujhefHR/18.SBXpB1mhU5mXkxsDTl/c8Q9u', 'hải dương', 'admin', '2022-05-08 11:11:17', '2022-05-08 11:11:17'),
(7, 'Do Van Duy', 'doduy1118@gmail.com', 'received_742432586267834.jpeg\r\n', '$2y$10$JchazMDgh2Lq6L/rTYZ1.eS1mKtMEUX/LNgTmq15nZnF/cLzu17VG', 'Thanh Hà', 'admin', '2022-05-09 09:22:19', '2022-05-09 09:22:19'),
(8, 'abc', 'abc@gmail.com', '', '$2y$10$nMeDaO9BJiQ6Nk1SCEFjLOa0WrYXiGKNK9Yd5D0TR/EEW6o1L9mOy', 'Hà nội', 'Nguoidung', '2022-05-10 01:59:39', '2022-05-10 01:59:39');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ctdonhang`
--
ALTER TABLE ctdonhang
  ADD PRIMARY KEY (id),
  ADD KEY Madonhang (Madonhang),
  ADD KEY product_id (product_id);

--
-- Chỉ mục cho bảng `detailban`
--
ALTER TABLE `detailban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_hdb` (`id_hdb`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `detailnhap`
--
ALTER TABLE `detailnhap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_hdn` (`id_hdn`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kh` (`id_kh`);

--
-- Chỉ mục cho bảng `hoadonban`
--
ALTER TABLE `hoadonban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kh` (`id_kh`);

--
-- Chỉ mục cho bảng `hoadonnhap`
--
ALTER TABLE `hoadonnhap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ncc` (`id_ncc`),
  ADD KEY `id_nhanvien` (`id_nhanvien`);

--
-- Chỉ mục cho bảng `introduce`
--
ALTER TABLE `introduce`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kho`
--
ALTER TABLE `kho`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`Manv`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Maloai` (`Maloai`),
  ADD KEY `Mancc` (`Mancc`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ctdonhang`
--
ALTER TABLE ctdonhang
  MODIFY id int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `detailban`
--
ALTER TABLE `detailban`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `detailnhap`
--
ALTER TABLE `detailnhap`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `hoadonban`
--
ALTER TABLE `hoadonban`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hoadonnhap`
--
ALTER TABLE `hoadonnhap`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `introduce`
--
ALTER TABLE `introduce`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `kho`
--
ALTER TABLE `kho`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `Manv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ctdonhang`
--
ALTER TABLE ctdonhang
  ADD CONSTRAINT ctdonhang_ibfk_2 FOREIGN KEY (Madonhang) REFERENCES donhang (id),
  ADD CONSTRAINT ctdonhang_ibfk_3 FOREIGN KEY (product_id) REFERENCES sanpham (id);

--
-- Các ràng buộc cho bảng `detailban`
--
ALTER TABLE `detailban`
  ADD CONSTRAINT `detailban_ibfk_1` FOREIGN KEY (`id_hdb`) REFERENCES `hoadonban` (`id`),
  ADD CONSTRAINT `detailban_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `detailnhap`
--
ALTER TABLE `detailnhap`
  ADD CONSTRAINT `detailnhap_ibfk_1` FOREIGN KEY (`id_hdn`) REFERENCES `hoadonnhap` (`id`),
  ADD CONSTRAINT `detailnhap_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id`);

--
-- Các ràng buộc cho bảng `hoadonban`
--
ALTER TABLE `hoadonban`
  ADD CONSTRAINT `hoadonban_ibfk_1` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id`);

--
-- Các ràng buộc cho bảng `hoadonnhap`
--
ALTER TABLE `hoadonnhap`
  ADD CONSTRAINT `hoadonnhap_ibfk_1` FOREIGN KEY (`id_ncc`) REFERENCES `nhacungcap` (`id`),
  ADD CONSTRAINT `hoadonnhap_ibfk_2` FOREIGN KEY (`id_nhanvien`) REFERENCES `nhanvien` (`Manv`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`Maloai`) REFERENCES `loaisp` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`Mancc`) REFERENCES `nhacungcap` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
