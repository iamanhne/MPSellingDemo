-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 11, 2024 lúc 04:44 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `htstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_account`
--

CREATE TABLE `admin_account` (
  `account_id` int(11) UNSIGNED NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_account`
--

INSERT INTO `admin_account` (`account_id`, `username`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) UNSIGNED NOT NULL,
  `brand` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`brand_id`, `brand`, `description`) VALUES
(1, 'Iphone', 'Iphone'),
(2, 'Realme', 'Realme'),
(3, 'Xiaomi', 'Xiaomi'),
(11, 'Samsung', 'Samsung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(11) UNSIGNED NOT NULL,
  `customer_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_products`
--

CREATE TABLE `cart_products` (
  `cart_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `description`) VALUES
(1, 'Phone', 'Smartphone'),
(2, 'Tablet', 'Tablet'),
(3, 'Laptop', 'Laptop'),
(4, 'Desktop', 'Desktop');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) UNSIGNED NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`customer_id`, `fullname`, `email`, `phone`, `address`, `password`) VALUES
(1, 'Nguyễn Văn Nam', 'namnguyen12345@gmail.com', 398233838, '207 Giải Phóng, Đồng Tâm, Minh Khai, Hai Bà Trưng, Hà Nội', '123456'),
(2, 'Phạm Văn Bắc', 'vanbac94@gmail.com', 987654321, '207 Giải Phóng, Đồng Tâm, Hai Bà Trưng, Hà Nội', '654321'),
(3, 'Vũ Văn Đông', 'dongvu99@gmail.com', 987654321, '209 Trường Chinh, Thanh Xuân, Hà Nội', '786542');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `image_id` int(11) UNSIGNED NOT NULL,
  `url` text NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`image_id`, `url`, `product_id`) VALUES
(1, './assets/img/blog3.jpg', 1),
(2, './assets/img/blog4.jpg', 1),
(3, './assets/img/blog26.jpg', 1),
(4, './assets/img/blog25.jpg', 1),
(5, './assets/img/blog23.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `date_time` date NOT NULL,
  `total` double(10,0) NOT NULL,
  `status_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_products`
--

CREATE TABLE `order_products` (
  `order_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `color` text NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_img_main` text NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL,
  `brand_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_img_main`, `product_name`, `description`, `color`, `price`, `quantity`, `brand_id`) VALUES
(1, './assets/img/iphone-12-1.jpg', 'Iphone 12', 'Iphone 12 128GB black/silver/pink', 'Black, Silver, Pink', 19000000, 1, 1),
(2, './assets/img/iphone-11-1.jpg', 'Iphone 11', 'Iphone 11 128GB /black/silver/pink', 'Silver,Blue,Pink', 12900000, 10, 1),
(3, './assets/img/xiaomi-mi-10i.jpg', 'Xiaomi Mi10', 'Xiaomi Mi10 128GB blue', 'Blue', 18000000, 10, 3),
(4, './assets/img/realme-q5.jpg', 'Realme Q5', 'Realme Q5 64GB black', 'Black', 5000000, 10, 2),
(14, './assets/img/iphone-15-prm-white-1-3.jpg', 'Iphone 15 Pro Max', 'iPhone 15 Pro Max là một chiếc điện thoại thông minh cao cấp được mong đợi nhất năm 2023. Với nhiều tính năng mới và cải tiến, iPhone 15 Pro Max chắc chắn sẽ là một lựa chọn tuyệt vời cho những người dùng đang tìm kiếm một chiếc điện thoại có hiệu năng mạnh mẽ, camera chất lượng và thiết kế sang trọng.', 'Black, White', 39500000, 2, 1),
(15, './assets/img/xiaomi-redmi-12.jpg', 'Xiaomi Redmi 12 4GB', 'Xiaomi Redmi 12 mẫu điện thoại mới nhất được nhà Xiaomi tung ra vào tháng 06/2023 khiến cho cộng đồng đam mê công nghệ vô cùng thích thú. Máy khoác lên mình một vẻ ngoài cá tính, màn hình lớn đem đến trải nghiệm đã mắt cùng một hiệu năng ổn định với mọi tác vụ.', 'Silver, Black', 3590000, 2, 3),
(16, './assets/img/samsung-galaxy-s23-ultra.jpg', 'Samsung Galaxy S23 Ultra 5G 256GB', 'Samsung Galaxy S23 Ultra 5G 256GB là chiếc smartphone cao cấp nhất của nhà Samsung, sở hữu cấu hình không tưởng với con chip khủng được Qualcomm tối ưu riêng cho dòng Galaxy và camera lên đến 200 MP, xứng danh là chiếc flagship Android được mong đợi nhất trong năm 2023.', 'Black, White, Silver', 23990000, 4, 11),
(17, './assets/img/samsung-galaxy-z-fold4-256gb-1.jpg', 'Samsung Galaxy Z Fold4 5G 256GB ', 'Tại sự kiện Samsung Unpacked thường niên, Samsung Galaxy Z Fold4 256GB chính thức được trình làng thị trường công nghệ, mang trên mình nhiều cải tiến đáng giá giúp Galaxy Z Fold trở thành dòng điện thoại gập đã tốt nay càng tốt hơn.', 'Kẽm, Trắng, Đen', 25990000, 2, 11),
(18, './assets/img/realme-c53-gold-1.jpg', 'Realme C53 (6GB/128GB)', 'Realme C53 - chiếc điện thoại giá rẻ với thiết kế đẹp, màn hình lớn và camera sắc nét, thực sự là một lựa chọn hợp lý dành cho người dùng khi đang băn khoăn tìm mua một thiết bị trong phân khúc giá.', 'Gold, Black, White', 3990000, 1, 2),
(19, './assets/img/samsung-galaxy-zflip5-xanh-256gb-1-1.jpg', 'Samsung Galaxy Z Flip5 5G 256GB ', 'Samsung Galaxy Z Flip5 đã chính thức ra mắt vào ngày 26 tháng 7. Đây là một chiếc điện thoại thông minh có thiết kế độc đáo với màn hình gập, được trang bị bộ vi xử lý cao cấp Snapdragon 8 Gen 2 for Galaxy, RAM 8 GB, bộ nhớ trong 256 GB, camera kép 12 MP và pin 3700 mAh.\r\n', 'Xanh mint, Tím, Trắng', 19900000, 1, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `statuses`
--

CREATE TABLE `statuses` (
  `status_id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `statuses`
--

INSERT INTO `statuses` (`status_id`, `name`, `email`, `message`) VALUES
(7, 'Hoang Anh', 'anh@gmail.com', 'Halo how a u today'),
(8, 'Hoang Anh', 'anh2@gmail.com', '48616C6F2032'),
(9, 'mobile', 'daohoanganh0402@gmail.com', 'ahno u');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `store`
--

CREATE TABLE `store` (
  `id` int(10) NOT NULL,
  `img_store` text NOT NULL,
  `short_about` varchar(1000) NOT NULL,
  `about` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `store`
--

INSERT INTO `store` (`id`, `img_store`, `short_about`, `about`) VALUES
(1, './assets/img/htstore.jpg\r\n', '    H&T Store là một cửa hàng trực tuyến nhỏ chuyên cung cấp các sản phẩm điện thoại di động với tinh thần làm việc từ gia đình đến gia đình. Chúng tôi tập trung vào việc cung cấp những lựa chọn điện thoại đa dạng và phù hợp với nhu cầu của các cá nhân và gia đình.\r\n    Chúng tôi cung cấp một loạt các sản phẩm điện thoại di động từ các thương hiệu phổ biến như Apple, Samsung, Xiaomi và một số hãng khác. Đây không chỉ là những chiếc điện thoại thông minh tiện ích mà còn là những người bạn đồng hành tin cậy của mọi gia đình.', 'H&T Store là một trang web thương mại điện tử chuyên cung cấp các sản phẩm điện thoại di động và phụ kiện kèm theo. Được thành lập như một nền tảng cá nhân, trang web này mang đến không chỉ những sản phẩm chất lượng mà còn là sự tập trung vào trải nghiệm người dùng tốt nhất.\r\n\r\nVới mục tiêu đem đến sự đa dạng và chất lượng, H&T Store không ngừng cập nhật và mở rộng danh mục sản phẩm của mình, bao gồm các mẫu điện thoại mới nhất từ các thương hiệu uy tín nhất trên thị trường. Điện thoại di động đa dạng về mẫu mã, tính năng và phân khúc giá, từ những mẫu smartphone cao cấp, đến các dòng điện thoại tầm trung và cả những sản phẩm phổ thông, đáp ứng nhu cầu của mọi khách hàng.\r\n\r\nH&T Store cam kết đem đến trải nghiệm mua sắm trực tuyến thuận lợi và an toàn nhất cho người dùng. Với giao diện thân thiện, dễ sử dụng, cùng hệ thống thanh toán bảo mật, việc chọn lựa và mua sắm trở nên đơn giản hơn bao giờ hết.\r\n\r\nNgoài ra, trang web cũng cung cấp các chính sách hỗ trợ và chăm sóc khách hàng tận tâm. Từ dịch vụ giao hàng nhanh chóng đến chính sách đổi trả linh hoạt, H&T Store luôn lắng nghe và đáp ứng những yêu cầu, phản hồi từ phía người dùng.\r\n\r\nVới sứ mệnh không chỉ đơn thuần là cung cấp sản phẩm mà còn là tạo nên trải nghiệm mua sắm trực tuyến tốt nhất, H&T Store hy vọng trở thành người bạn đồng hành tin cậy trên hành trình công nghệ của mọi người.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`account_id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `one_to_mani` (`customer_id`);

--
-- Chỉ mục cho bảng `cart_products`
--
ALTER TABLE `cart_products`
  ADD PRIMARY KEY (`cart_id`,`product_id`),
  ADD KEY `fk_product_id` (`product_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `email` (`email`,`phone`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `one_to_many` (`product_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Chỉ mục cho bảng `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Chỉ mục cho bảng `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`status_id`);

--
-- Chỉ mục cho bảng `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `account_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `statuses`
--
ALTER TABLE `statuses`
  MODIFY `status_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `store`
--
ALTER TABLE `store`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `one_to_mani` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Các ràng buộc cho bảng `cart_products`
--
ALTER TABLE `cart_products`
  ADD CONSTRAINT `fk_cart_id` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`cart_id`),
  ADD CONSTRAINT `fk_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Các ràng buộc cho bảng `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `one_to_many` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`status_id`);

--
-- Các ràng buộc cho bảng `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
