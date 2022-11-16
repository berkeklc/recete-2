-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 16 Kas 2022, 14:30:53
-- Sunucu sürümü: 8.0.31-cll-lve
-- PHP Sürümü: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `berkekil_recete`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_groups`
--

CREATE TABLE `admin_groups` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `admin_groups`
--

INSERT INTO `admin_groups` (`id`, `name`) VALUES
(1, 'Yönetici');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_perms`
--

CREATE TABLE `admin_perms` (
  `groupId` int UNSIGNED NOT NULL,
  `module` varchar(255) NOT NULL,
  `perm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `admin_perms`
--

INSERT INTO `admin_perms` (`groupId`, `module`, `perm`) VALUES
(1, 'home', 'options'),
(1, 'home', 'password'),
(1, 'home', 'user-list'),
(1, 'home', 'user-insert'),
(1, 'home', 'user-update'),
(1, 'home', 'user-delete'),
(1, 'home', 'group-list'),
(1, 'home', 'group-insert'),
(1, 'home', 'group-update'),
(1, 'home', 'group-delete'),
(1, 'menu', 'list'),
(1, 'menu', 'insert'),
(1, 'menu', 'update'),
(1, 'menu', 'delete'),
(1, 'banner', 'list'),
(1, 'banner', 'insert'),
(1, 'banner', 'update'),
(1, 'banner', 'delete'),
(1, 'contact', 'list'),
(1, 'contact', 'view'),
(1, 'contact', 'delete'),
(1, 'content', 'list'),
(1, 'content', 'insert'),
(1, 'content', 'update'),
(1, 'content', 'delete'),
(1, 'social', 'list'),
(1, 'social', 'insert'),
(1, 'social', 'update'),
(1, 'social', 'delete'),
(1, 'spot', 'list'),
(1, 'spot', 'insert'),
(1, 'spot', 'update'),
(1, 'spot', 'delete'),
(1, 'module', 'list'),
(1, 'module', 'update'),
(1, 'module', 'delete'),
(1, 'module', 'order'),
(1, 'project', 'list'),
(1, 'project', 'insert'),
(1, 'project', 'update'),
(1, 'project', 'delete'),
(1, 'project', 'image-list'),
(1, 'project', 'image-insert'),
(1, 'project', 'image-update'),
(1, 'project', 'image-delete'),
(1, 'service', 'list'),
(1, 'service', 'insert'),
(1, 'service', 'update'),
(1, 'service', 'delete'),
(1, 'before', 'list'),
(1, 'before', 'insert'),
(1, 'before', 'update'),
(1, 'before', 'delete'),
(1, 'certificate', 'list'),
(1, 'certificate', 'insert'),
(1, 'certificate', 'update'),
(1, 'certificate', 'delete'),
(1, 'gallery', 'list'),
(1, 'gallery', 'insert'),
(1, 'gallery', 'update'),
(1, 'gallery', 'delete'),
(1, 'gallery', 'image-list'),
(1, 'gallery', 'image-insert'),
(1, 'gallery', 'image-update'),
(1, 'gallery', 'image-delete'),
(1, 'product', 'list'),
(1, 'product', 'insert'),
(1, 'product', 'update'),
(1, 'product', 'delete'),
(1, 'product', 'image-list'),
(1, 'product', 'image-insert'),
(1, 'product', 'image-update'),
(1, 'product', 'image-delete'),
(1, 'productcategory', 'list'),
(1, 'productcategory', 'insert'),
(1, 'productcategory', 'update'),
(1, 'productcategory', 'delete'),
(1, 'cv', 'list'),
(1, 'cv', 'view'),
(1, 'cv', 'delete'),
(1, 'maillist', 'list'),
(1, 'maillist', 'delete'),
(1, 'news', 'list'),
(1, 'news', 'insert'),
(1, 'news', 'update'),
(1, 'news', 'delete'),
(1, 'koleksiyon', 'list'),
(1, 'koleksiyon', 'insert'),
(1, 'koleksiyon', 'update'),
(1, 'koleksiyon', 'delete'),
(1, 'koleksiyon', 'image-list'),
(1, 'koleksiyon', 'image-insert'),
(1, 'koleksiyon', 'image-update'),
(1, 'koleksiyon', 'image-delete'),
(1, 'koleksiyoncategory', 'list'),
(1, 'koleksiyoncategory', 'insert'),
(1, 'koleksiyoncategory', 'update'),
(1, 'koleksiyoncategory', 'delete'),
(1, 'document', 'list'),
(1, 'document', 'insert'),
(1, 'document', 'update'),
(1, 'document', 'delete'),
(1, 'home', 'options'),
(1, 'home', 'password'),
(1, 'home', 'user-list'),
(1, 'home', 'user-insert'),
(1, 'home', 'user-update'),
(1, 'home', 'user-delete'),
(1, 'home', 'group-list'),
(1, 'home', 'group-insert'),
(1, 'home', 'group-update'),
(1, 'home', 'group-delete'),
(1, 'menu', 'list'),
(1, 'menu', 'insert'),
(1, 'menu', 'update'),
(1, 'menu', 'delete'),
(1, 'banner', 'list'),
(1, 'banner', 'insert'),
(1, 'banner', 'update'),
(1, 'banner', 'delete'),
(1, 'contact', 'list'),
(1, 'contact', 'view'),
(1, 'contact', 'delete'),
(1, 'content', 'list'),
(1, 'content', 'insert'),
(1, 'content', 'update'),
(1, 'content', 'delete'),
(1, 'social', 'list'),
(1, 'social', 'insert'),
(1, 'social', 'update'),
(1, 'social', 'delete'),
(1, 'spot', 'list'),
(1, 'spot', 'insert'),
(1, 'spot', 'update'),
(1, 'spot', 'delete'),
(1, 'module', 'list'),
(1, 'module', 'update'),
(1, 'module', 'delete'),
(1, 'module', 'order'),
(1, 'project', 'list'),
(1, 'project', 'insert'),
(1, 'project', 'update'),
(1, 'project', 'delete'),
(1, 'project', 'image-list'),
(1, 'project', 'image-insert'),
(1, 'project', 'image-update'),
(1, 'project', 'image-delete'),
(1, 'service', 'list'),
(1, 'service', 'insert'),
(1, 'service', 'update'),
(1, 'service', 'delete'),
(1, 'before', 'list'),
(1, 'before', 'insert'),
(1, 'before', 'update'),
(1, 'before', 'delete'),
(1, 'certificate', 'list'),
(1, 'certificate', 'insert'),
(1, 'certificate', 'update'),
(1, 'certificate', 'delete'),
(1, 'gallery', 'list'),
(1, 'gallery', 'insert'),
(1, 'gallery', 'update'),
(1, 'gallery', 'delete'),
(1, 'gallery', 'image-list'),
(1, 'gallery', 'image-insert'),
(1, 'gallery', 'image-update'),
(1, 'gallery', 'image-delete'),
(1, 'product', 'list'),
(1, 'product', 'insert'),
(1, 'product', 'update'),
(1, 'product', 'delete'),
(1, 'product', 'image-list'),
(1, 'product', 'image-insert'),
(1, 'product', 'image-update'),
(1, 'product', 'image-delete'),
(1, 'productcategory', 'list'),
(1, 'productcategory', 'insert'),
(1, 'productcategory', 'update'),
(1, 'productcategory', 'delete'),
(1, 'cv', 'list'),
(1, 'cv', 'view'),
(1, 'cv', 'delete'),
(1, 'maillist', 'list'),
(1, 'maillist', 'delete'),
(1, 'news', 'list'),
(1, 'news', 'insert'),
(1, 'news', 'update'),
(1, 'news', 'delete'),
(1, 'koleksiyon', 'list'),
(1, 'koleksiyon', 'insert'),
(1, 'koleksiyon', 'update'),
(1, 'koleksiyon', 'delete'),
(1, 'koleksiyon', 'image-list'),
(1, 'koleksiyon', 'image-insert'),
(1, 'koleksiyon', 'image-update'),
(1, 'koleksiyon', 'image-delete'),
(1, 'koleksiyoncategory', 'list'),
(1, 'koleksiyoncategory', 'insert'),
(1, 'koleksiyoncategory', 'update'),
(1, 'koleksiyoncategory', 'delete'),
(1, 'document', 'list'),
(1, 'document', 'insert'),
(1, 'document', 'update'),
(1, 'document', 'delete');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `groupId` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `groupId`) VALUES
(1, 'root', '123123', NULL),
(6, 'egegen', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `modules`
--

CREATE TABLE `modules` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `table` varchar(255) NOT NULL,
  `modified` int UNSIGNED NOT NULL,
  `permissions` text NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `menuPattern` text,
  `controller` varchar(255) NOT NULL,
  `order` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `modules`
--

INSERT INTO `modules` (`id`, `name`, `title`, `table`, `modified`, `permissions`, `type`, `icon`, `menuPattern`, `controller`, `order`) VALUES
(1, 'home', 'Home', 'admin_users', 1668584223, 'options,password,user-list,user-insert,user-update,user-delete,group-list,group-insert,group-update,group-delete', NULL, NULL, NULL, 'HomeAdminController', 0),
(15, 'module', 'Modüller', 'modules', 1668584223, 'list,update,delete,order', NULL, NULL, NULL, 'ModuleAdminController', 0),
(22, 'product', 'Ürün İçerikleri', 'products', 1668593750, 'list,insert,update,delete,image-list,image-insert,image-update,image-delete', 'public', NULL, 'a:5:{s:5:\"title\";s:5:\"title\";s:4:\"hint\";s:5:\"title\";s:4:\"link\";a:2:{i:0;s:4:\"slug\";i:1;s:2:\"id\";}s:10:\"moduleLink\";b:1;s:8:\"language\";b:1;}', 'ProductAdminController', 0),
(23, 'productcategory', 'Ürün Başlıkları', 'product_categories', 1668593739, 'list,insert,update,delete', 'public', NULL, 'a:5:{s:5:\"title\";s:5:\"title\";s:4:\"hint\";s:5:\"title\";s:4:\"link\";a:2:{i:0;s:4:\"slug\";i:1;s:2:\"id\";}s:10:\"moduleLink\";b:1;s:8:\"language\";b:1;}', 'ProductcategoryAdminController', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `module_arguments`
--

CREATE TABLE `module_arguments` (
  `id` int UNSIGNED NOT NULL,
  `module` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `value` longtext,
  `type` varchar(255) NOT NULL,
  `arguments` longtext NOT NULL,
  `language` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `options`
--

CREATE TABLE `options` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `value` longtext,
  `type` varchar(255) NOT NULL,
  `arguments` longtext NOT NULL,
  `language` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `options`
--

INSERT INTO `options` (`id`, `name`, `title`, `value`, `type`, `arguments`, `language`) VALUES
(1, 'metaTitle', 'Site Başlığı', 'Reçete', 'text', '{\"required\":true}', 'tr'),
(2, 'metaDescription', 'Site Tanımı', 'Reçete', 'textarea', '{\"required\":true}', 'tr'),
(3, 'metaKeywords', 'Site Anahtar Kelimeleri', 'Reçete', 'textarea', '{\"required\":true}', 'tr'),
(4, 'customMeta', 'Özel Metalar', '', 'textarea', '[]', 'tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int UNSIGNED NOT NULL,
  `categoryId` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `metaTitle` varchar(255) DEFAULT NULL,
  `metaDescription` text,
  `metaKeywords` text,
  `order` int UNSIGNED NOT NULL DEFAULT '0',
  `language` varchar(5) NOT NULL,
  `cash` varchar(255) DEFAULT NULL COMMENT 'Fiyat',
  `urunid` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `categoryId`, `title`, `slug`, `image`, `summary`, `detail`, `metaTitle`, `metaDescription`, `metaKeywords`, `order`, `language`, `cash`, `urunid`) VALUES
(193, 37, 'Sos', 'sos', 'a3a491a2d7dd928f6f83fcc0ad8fd390.jpg', 'Sos', '<p>Sos</p>\n', '', '', '', 9, 'tr', NULL, 'Sos'),
(194, 37, 'Ketçap', 'ketcap', 'fa307d7e5e06e798cef3a9a036ace58e.jpg', 'Ketçap', '<p>Ket&ccedil;ap</p>\n', '', '', '', 10, 'tr', NULL, 'Ketçap'),
(195, 37, 'Yağ', 'yag', 'd3b6470bd163a300519fa07aa0188325.jpg', 'Yağ', '<p>Yağ</p>\n', '', '', '', 11, 'tr', NULL, 'Yağ'),
(196, 38, 'Filtre Kahve', 'filtre-kahve', '569cf8918637d2b3cd445283a38ddd4e.jpg', 'Filtre Kahve', '<p>Filtre Kahve</p>\n', '', '', '', 12, 'tr', NULL, 'Filtre Kahve'),
(197, 38, 'Espresso', 'espresso', '983a7d4f63d3a46010cd12e5fd9a0d16.jpg', 'Espresso', '<p><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">Espresso</span></p>\n', '', '', '', 13, 'tr', NULL, 'Espresso');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `detail` longtext,
  `image` varchar(255) NOT NULL,
  `metaTitle` varchar(255) DEFAULT NULL,
  `metaDescription` text,
  `metaKeywords` text,
  `order` int UNSIGNED NOT NULL DEFAULT '0',
  `language` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `product_categories`
--

INSERT INTO `product_categories` (`id`, `title`, `slug`, `summary`, `detail`, `image`, `metaTitle`, `metaDescription`, `metaKeywords`, `order`, `language`) VALUES
(37, 'Pizza', 'pizza', 'Pizza', '0', 'a474ea8707ffddcbb6afbf0cd7917177.jpg', '0', '0', '0', 4, 'tr'),
(38, 'RedEye', 'redeye', 'RedEye', '0', '95c8ceb35d78ecdb9990a7715ee6ec04.jpg', '0', '0', '0', 5, 'tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_images`
--

CREATE TABLE `product_images` (
  `id` int UNSIGNED NOT NULL,
  `productId` int UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `order` int UNSIGNED NOT NULL DEFAULT '0',
  `language` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `product_images`
--

INSERT INTO `product_images` (`id`, `productId`, `image`, `title`, `order`, `language`) VALUES
(1367, 194, '4b3b1f01c872c31a539abcbc9b9bf7f8.jpg', 'Domates', 2, 'tr'),
(1368, 194, '68b563de52c39b89039cb1158f0babf9.jpg', 'Sirke', 3, 'tr'),
(1369, 194, 'd33acff90691b4e1dff8407d932ed2ac.jpg', 'Şeker', 4, 'tr'),
(1370, 196, 'c12903db5104f2db1a080b74a7e49308.jpg', 'İnce Öğütülmüş Kahve', 1, 'tr'),
(1371, 196, '9be244980e2f979376c497e1e2df5801.jpg', 'Su', 2, 'tr'),
(1372, 197, 'e6a577f131d386f4810a875cb6d33f43.jpg', 'Kalın Öğütülmüş Kahve', 1, 'tr');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin_groups`
--
ALTER TABLE `admin_groups`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `admin_perms`
--
ALTER TABLE `admin_perms`
  ADD KEY `fk_admin_perms_groupId` (`groupId`) USING BTREE;

--
-- Tablo için indeksler `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_admin_users_groupId` (`groupId`) USING BTREE;

--
-- Tablo için indeksler `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`) USING BTREE;

--
-- Tablo için indeksler `module_arguments`
--
ALTER TABLE `module_arguments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_module_arguments_module` (`module`) USING BTREE;

--
-- Tablo için indeksler `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin_groups`
--
ALTER TABLE `admin_groups`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `module_arguments`
--
ALTER TABLE `module_arguments`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- Tablo için AUTO_INCREMENT değeri `options`
--
ALTER TABLE `options`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- Tablo için AUTO_INCREMENT değeri `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Tablo için AUTO_INCREMENT değeri `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1373;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `admin_perms`
--
ALTER TABLE `admin_perms`
  ADD CONSTRAINT `admin_perms_ibfk_1` FOREIGN KEY (`groupId`) REFERENCES `admin_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `admin_users`
--
ALTER TABLE `admin_users`
  ADD CONSTRAINT `admin_users_ibfk_1` FOREIGN KEY (`groupId`) REFERENCES `admin_groups` (`id`) ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `module_arguments`
--
ALTER TABLE `module_arguments`
  ADD CONSTRAINT `module_arguments_ibfk_1` FOREIGN KEY (`module`) REFERENCES `modules` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
