-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 18 2022 г., 10:25
-- Версия сервера: 8.0.29
-- Версия PHP: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accesssale`
--

CREATE TABLE `accesssale` (
  `idaccessSale` int NOT NULL,
  `starusSale` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `accesssale`
--

INSERT INTO `accesssale` (`idaccessSale`, `starusSale`) VALUES
(1, 'Доступен к продаже'),
(2, 'Не доступен к продаже');

-- --------------------------------------------------------

--
-- Структура таблицы `brends`
--

CREATE TABLE `brends` (
  `id_brends` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `brends`
--

INSERT INTO `brends` (`id_brends`, `title`, `description`) VALUES
(1, 'Sony', 'Японский производитель.'),
(2, 'Lenovo', 'Lenovo Group Limited — китайская транснациональная корпорация. '),
(3, 'Huawei ', 'Huawei - Китайский производитель. '),
(4, 'ASUS ', 'ASUS - расположенная на Тайване транснациональная компания.');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id_category` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `photoGoods_id_photoGoods` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id_category`, `title`, `photoGoods_id_photoGoods`) VALUES
(1, 'Ноутбуки', 1),
(2, 'Планшеты', 7),
(3, 'Телефоны', 5),
(4, 'Акустика', 12),
(5, 'Наушники', 16),
(6, 'Аудио техника', 16);

-- --------------------------------------------------------

--
-- Структура таблицы `closuretable`
--

CREATE TABLE `closuretable` (
  `id_closureTable` int NOT NULL,
  `descendant_id_category` int NOT NULL,
  `ansestor` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `closuretable`
--

INSERT INTO `closuretable` (`id_closureTable`, `descendant_id_category`, `ansestor`) VALUES
(1, 5, 5),
(3, 3, 3),
(4, 2, 2),
(5, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id_goods` int NOT NULL,
  `title_goods` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `code` int NOT NULL,
  `YN` bigint NOT NULL,
  `priceRose` decimal(10,2) DEFAULT NULL,
  `promoPrise` decimal(10,2) NOT NULL,
  `infoAdd` varchar(255) DEFAULT NULL,
  `accessSale_idaccessSale` int NOT NULL,
  `brends_id_brends` int NOT NULL,
  `category_id_category` int NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id_goods`, `title_goods`, `code`, `YN`, `priceRose`, `promoPrise`, `infoAdd`, `accessSale_idaccessSale`, `brends_id_brends`, `category_id_category`, `photo`, `rating`, `description`) VALUES
(1, 'ASUS Vivobook 14 X409FA-BV625-1', 6740, 1245896354125, '2040.99', '1699.99', NULL, 1, 4, 1, 'ASUSVivobook14X409FA-BV625/ASUS-Vivobook-14-X409FA-BV625-1.jpg', 5, 'Ноутбук ASUS Vivobook 14 X409FA-BV625-1'),
(2, 'Huawei nova Y70 4GB128GB-1', 9878, 4333369998753, '718.99', '599.99', NULL, 1, 3, 3, 'Huawei-nova-Y70-4GB128GB/Huawei-nova-Y70-4GB128GB-1.jpg', 4, 'Телефон Huawei nova Y70 4GB128GB-1'),
(3, 'lenovo tab-m10-plus-gen-3', 8794, 5874256912578, '1010.00', '0.00', NULL, 1, 2, 2, 'LenovoTabP11PlusTB-J616F64GBZA940029RU/lenovo-tab-m10-plus-gen-3-feature-1.jpg', 4, 'Планшет lenovo tab m10 plus gen 3'),
(4, 'Sony HT-A7000', 9654, 3354677452784, '1800.00', '0.00', NULL, 1, 1, 4, 'HT-A7000/HT-A7000-1.jpg', 5, 'Саундбар Sony HT-A7000'),
(5, 'Sony WH-1000XM4', 8578, 8888545454281, '900.00', '800.50', NULL, 1, 1, 5, 'WH-1000XM4/sony-wh-1000xm4-black-1.jpg', NULL, 'Наушники WH-1000XM4');

-- --------------------------------------------------------

--
-- Структура таблицы `goodsorder`
--

CREATE TABLE `goodsorder` (
  `id_goodsOrder` int NOT NULL,
  `orders_id_orders` int NOT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `goods_id_goods` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `kitpromo`
--

CREATE TABLE `kitpromo` (
  `id_kitPromo` int NOT NULL,
  `goods_id_goods` int NOT NULL,
  `promoLabel_id_promoLabel` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `kitpromo`
--

INSERT INTO `kitpromo` (`id_kitPromo`, `goods_id_goods`, `promoLabel_id_promoLabel`) VALUES
(1, 2, 1),
(2, 1, 2),
(3, 2, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_orders` int NOT NULL,
  `address` varchar(255) NOT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `orderStatus_id_orderStatus` int NOT NULL,
  `PaymentMethods_id_PaymentMethods` int NOT NULL,
  `deliveryDateStart` date NOT NULL,
  `deliveryDateAND` date NOT NULL,
  `desiredTimeDelivery` datetime NOT NULL COMMENT 'Время доставки, заявленное покупателем.',
  `user_id_user` int NOT NULL,
  `user_id_courier` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `orderstatus`
--

CREATE TABLE `orderstatus` (
  `id_orderStatus` int NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `paymentmethods`
--

CREATE TABLE `paymentmethods` (
  `id_PaymentMethods` int NOT NULL,
  `paymentMethodscol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `phones`
--

CREATE TABLE `phones` (
  `id_phones` int NOT NULL,
  `number` decimal(10,0) NOT NULL,
  `user_id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `photogoods`
--

CREATE TABLE `photogoods` (
  `id_photoGoods` int NOT NULL,
  `photoLink` varchar(255) NOT NULL,
  `photoTitle` varchar(255) DEFAULT NULL,
  `goods_id_goods` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `photogoods`
--

INSERT INTO `photogoods` (`id_photoGoods`, `photoLink`, `photoTitle`, `goods_id_goods`) VALUES
(1, 'ASUSVivobook14X409FA-BV625/ASUS-Vivobook-14-X409FA-BV625-1.jpg', 'ASUS Vivobook 14 X409FA-BV625 1', 1),
(2, 'ASUSVivobook14X409FA-BV625/ASUS-Vivobook-14-X409FA-BV625-rotate-2.jpg', 'ASUS Vivobook 14 X409FA-BV625-rotate', 1),
(3, 'ASUSVivobook14X409FA-BV625/ASUS-Vivobook-14-X409FA-BV625-3.jpg', 'ASUS Vivobook 14 X409FA-BV625', 1),
(4, 'ASUSVivobook14X409FA-BV625/ASUS-Vivobook-14-X409FA-BV625-4.jpg', 'ASUS Vivobook 14 X409FA-BV625', 1),
(5, 'Huawei-nova-Y70-4GB128GB/Huawei-nova-Y70-4GB128GB-1.jpg', 'Huawei nova Y70 4GB128GB', 2),
(6, 'Huawei-nova-Y70-4GB128GB/Huawei-nova-Y70-4GB128GB-2.jpg', 'Huawei nova Y70 4GB128GB', 2),
(7, 'LenovoTabP11PlusTB-J616F64GBZA940029RU/lenovo-tab-m10-plus-gen-3-feature-1.jpg', 'lenovo-tab-m10-plus-gen-3', 3),
(8, 'LenovoTabP11PlusTB-J616F64GBZA940029RU/lenovo-tab-m10-plus-gen-3-feature-2.jpg', 'lenovo-tab-m10-plus-gen-3', 3),
(9, 'LenovoTabP11PlusTB-J616F64GBZA940029RU/lenovo-tab-m10-plus-gen-3-feature-3.jpg', 'lenovo-tab-m10-plus-gen-3', 3),
(10, 'LenovoTabP11PlusTB-J616F64GBZA940029RU/lenovo-tab-m10-plus-gen-3-feature-4.jpg', 'lenovo-tab-m10-plus-gen-3', 3),
(11, 'LenovoTabP11PlusTB-J616F64GBZA940029RU/lenovo-tab-m10-plus-gen-3-feature-5.jpg', 'lenovo-tab-m10-plus-gen-3', 3),
(12, 'HT-A7000/HT-A7000-1.jpg', 'HT-A7000-1', 4),
(13, 'HT-A7000/HT-A7000-2.jpg', 'HT-A7000-2', 4),
(14, 'HT-A7000/HT-A7000-3.jpg', 'HT-A7000-3', 4),
(15, 'HT-A7000/HT-A7000-4.jpg', 'HT-A7000-4', 4),
(16, 'WH-1000XM4/sony-wh-1000xm4-black-1.jpg', 'sony-wh-1000xm4-black-1', 5),
(17, 'WH-1000XM4/sony-wh-1000xm4-black-2.jpg', 'sony-wh-1000xm4-black-2', 5),
(18, 'WH-1000XM4/sony-wh-1000xm4-black-3.jpg', 'sony-wh-1000xm4-black-3', 5),
(19, 'WH-1000XM4/sony-wh-1000xm4-black-4.jpg', 'sony-wh-1000xm4-black-4', 5),
(20, 'WH-1000XM4/sony-wh-1000xm4-black-5.jpg', 'sony-wh-1000xm4-black-5', 5),
(21, 'WH-1000XM4/sony-wh-1000xm4-black-6.jpg', 'sony-wh-1000xm4-black-6', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `promolabel`
--

CREATE TABLE `promolabel` (
  `id_promoLabel` int NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `promolabel`
--

INSERT INTO `promolabel` (`id_promoLabel`, `label`) VALUES
(3, '40%'),
(4, '50%'),
(1, 'Акция!'),
(2, 'Бесплатная доставка'),
(5, 'Супер цена');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id_reviews` int NOT NULL,
  `reviewText` text NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `goods_id_goods` int NOT NULL,
  `user_id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `specificationscategory`
--

CREATE TABLE `specificationscategory` (
  `id_specificationsCategory` int NOT NULL,
  `specificationsTitle_id_specificationsTitle` int NOT NULL,
  `category_id_category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `specificationscategory`
--

INSERT INTO `specificationscategory` (`id_specificationsCategory`, `specificationsTitle_id_specificationsTitle`, `category_id_category`) VALUES
(1, 1, 3),
(2, 1, 2),
(3, 1, 1),
(4, 11, 4),
(5, 2, 3),
(6, 2, 2),
(7, 2, 1),
(8, 8, 5),
(9, 4, 4),
(10, 5, 3),
(11, 5, 1),
(14, 5, 2),
(15, 7, 3),
(16, 7, 2),
(17, 7, 1),
(18, 6, 3),
(19, 6, 2),
(20, 6, 1),
(21, 3, 4),
(22, 3, 3),
(23, 2, 2),
(24, 3, 1),
(25, 3, 5),
(26, 9, 3),
(27, 9, 2),
(28, 10, 3),
(29, 10, 2),
(32, 10, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `specificationstitle`
--

CREATE TABLE `specificationstitle` (
  `id_specificationsTitle` int NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `specificationstitle`
--

INSERT INTO `specificationstitle` (`id_specificationsTitle`, `title`) VALUES
(10, 'Камера'),
(9, 'Количество сим-карт'),
(3, 'Мощность динамиков'),
(7, 'Объём памяти'),
(6, 'ОЗУ'),
(5, 'Процессор'),
(1, 'Размер экрана'),
(11, 'Сабвуфер'),
(4, 'Тип акустики'),
(8, 'Тип наушников'),
(2, 'Тип экрана');

-- --------------------------------------------------------

--
-- Структура таблицы `specificationsvalue`
--

CREATE TABLE `specificationsvalue` (
  `id_specificationsValue` int NOT NULL,
  `value` varchar(255) NOT NULL,
  `goods_id_goods` int NOT NULL,
  `specificationsCategory_id_specificationsCategory` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `specificationsvalue`
--

INSERT INTO `specificationsvalue` (`id_specificationsValue`, `value`, `goods_id_goods`, `specificationsCategory_id_specificationsCategory`) VALUES
(1, '14.0\"', 1, 3),
(2, '1366 x 768 TN+Film, 60 Гц,', 1, 7),
(3, ' Intel Core i3 10110U 2100 МГц,', 1, 11),
(4, '8 Гб DDR4', 1, 20),
(5, '256 ГБ', 1, 17),
(6, '2х5Вт', 1, 24),
(7, '10.61\"', 3, 2),
(8, 'IPS LCD', 3, 6),
(9, 'Mediatek Helio G80 8 x 2 GHz, Cortex-A75 / A55', 3, 14),
(10, '4 Гб', 3, 19),
(11, '64 Гб', 3, 16),
(12, '1sim', 3, 27),
(13, '8Мп', 3, 29),
(14, '6,75\"', 2, 1),
(15, 'TFT', 2, 23),
(16, 'HiSilicon Kirin 710', 2, 10),
(17, '4Гб', 2, 18),
(18, '128Гб', 2, 15),
(19, '8Мп', 2, 28),
(20, '2', 2, 26),
(21, 'Саундбар 7.1', 4, 9),
(22, 'Отдельно', 4, 4),
(23, '500Вт', 4, 21),
(24, 'Мониторные с микрофоном', 5, 8),
(25, '4-20000Гц', 5, 21);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `Name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `patronymic` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userPhoto_id_userPhoto` int NOT NULL,
  `userStatus_id_userStatus` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `Name`, `patronymic`, `surname`, `email`, `login`, `password`, `userPhoto_id_userPhoto`, `userStatus_id_userStatus`) VALUES
(4, 'Dmitry', 'Dmitry', 'Dmitry', 'Dmitry@mail.ru', 'Dmitry', 'Dmitryrt', 1, 1),
(26, 'Jon', 'Jon', 'Jon', 'on@mail.ru', 'GeorgsI', '$2y$10$guowQqBrdv3H8So7YXlHS.YHl3FmrHPH2e/FDj1wxsIzXebBFFo0a', 1, 1),
(30, 'Роман', 'Роман', 'Роман', 'roman@mail.ru', 'dddre', '$2y$10$hFvdIZDybagATDnsEsuy8.E8xEG9ha2BfNG8ocL1tca3uz1VEY4Zy', 1, 1),
(31, 'Роман', 'Роман', 'Роман', 'romaеn@mail.ru', 'dddreeee', '$2y$10$YmF24N6e31O75vSAneEcu.4eNi4rE1tqn7viVFR0znTxDCreQ8iJC', 1, 1),
(33, 'Роман', 'Роман', 'Роман', 'r8o@mail.ru', 'dddr34', '$2y$10$Q0yI/6vo/rZkTeO5fpEmvOk.utJsp1TFfcFVMg5gMMnpl8vCqLdMK', 1, 1),
(34, 'Роман', 'Роман', 'Роман', 'r84o@mail.ru', 'y', 'y', 1, 2),
(35, 'Роман', 'Роман', 'Роман', 'r84еo@mail.ru', 'fff', 'fff', 1, 3),
(36, 'Dasha', 'Dasha', 'Dasha', 'asha@mail.ru', 'ddd', '$2y$10$J4lTTjLwcSB.1gmgkU2rZeCqpO5JN.GlT22hKGAG4rUlZ8fWu8ULu', 1, 1),
(37, 'Dima', 'Dima', 'Dima', 'ima@mail.ru', 'Dima', '$2y$10$JruK8r/.7aOgixejDCIiaOm6Sv586QvhWXXHCxWnaM/GwtYHuR/ry', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `userphoto`
--

CREATE TABLE `userphoto` (
  `id_userPhoto` int NOT NULL,
  `userPhotocol` varchar(255) NOT NULL COMMENT 'Для фотографий/аватарок покупателей.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `userphoto`
--

INSERT INTO `userphoto` (`id_userPhoto`, `userPhotocol`) VALUES
(1, 'gfbfgbfgfggfgfb');

-- --------------------------------------------------------

--
-- Структура таблицы `userrights`
--

CREATE TABLE `userrights` (
  `id_userRights` int NOT NULL,
  `rights` varchar(255) NOT NULL,
  `userStatus_id_userStatus` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `userstatus`
--

CREATE TABLE `userstatus` (
  `id_userStatus` int NOT NULL,
  `title_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `userstatus`
--

INSERT INTO `userstatus` (`id_userStatus`, `title_status`) VALUES
(1, 'user'),
(2, 'manager'),
(3, 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accesssale`
--
ALTER TABLE `accesssale`
  ADD PRIMARY KEY (`idaccessSale`),
  ADD UNIQUE KEY `idaccessSale_UNIQUE` (`idaccessSale`),
  ADD UNIQUE KEY `starusSale_UNIQUE` (`starusSale`);

--
-- Индексы таблицы `brends`
--
ALTER TABLE `brends`
  ADD PRIMARY KEY (`id_brends`),
  ADD UNIQUE KEY `idbrends_UNIQUE` (`id_brends`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`),
  ADD UNIQUE KEY `idcategory_UNIQUE` (`id_category`),
  ADD UNIQUE KEY `title_UNIQUE` (`title`),
  ADD KEY `photoGoods_id_photoGoods` (`photoGoods_id_photoGoods`);

--
-- Индексы таблицы `closuretable`
--
ALTER TABLE `closuretable`
  ADD PRIMARY KEY (`id_closureTable`),
  ADD UNIQUE KEY `idclosureTable_UNIQUE` (`id_closureTable`) INVISIBLE,
  ADD KEY `fk_closureTable_category1_idx` (`descendant_id_category`),
  ADD KEY `fk_closureTable_category2_idx` (`ansestor`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id_goods`),
  ADD UNIQUE KEY `idgoods_UNIQUE` (`id_goods`),
  ADD KEY `fk_goods_accessSale1_idx` (`accessSale_idaccessSale`),
  ADD KEY `fk_goods_brends1_idx` (`brends_id_brends`),
  ADD KEY `fk_goods_category1_idx` (`category_id_category`);

--
-- Индексы таблицы `goodsorder`
--
ALTER TABLE `goodsorder`
  ADD PRIMARY KEY (`id_goodsOrder`),
  ADD UNIQUE KEY `idgoodsOrder_UNIQUE` (`id_goodsOrder`),
  ADD KEY `fk_goodsOrder_orders1_idx` (`orders_id_orders`),
  ADD KEY `fk_goodsOrder_goods1_idx` (`goods_id_goods`);

--
-- Индексы таблицы `kitpromo`
--
ALTER TABLE `kitpromo`
  ADD PRIMARY KEY (`id_kitPromo`),
  ADD UNIQUE KEY `idkitPromo_UNIQUE` (`id_kitPromo`),
  ADD KEY `fk_kitPromo_goods1_idx` (`goods_id_goods`),
  ADD KEY `fk_kitPromo_promoLabel1_idx` (`promoLabel_id_promoLabel`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`),
  ADD UNIQUE KEY `idorders_UNIQUE` (`id_orders`),
  ADD KEY `fk_orders_orderStatus1_idx` (`orderStatus_id_orderStatus`),
  ADD KEY `fk_orders_PaymentMethods1_idx` (`PaymentMethods_id_PaymentMethods`),
  ADD KEY `fk_orders_user1_idx` (`user_id_user`),
  ADD KEY `fk_orders_user2_idx` (`user_id_courier`);

--
-- Индексы таблицы `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`id_orderStatus`),
  ADD UNIQUE KEY `idorderStatus_UNIQUE` (`id_orderStatus`),
  ADD UNIQUE KEY `status_UNIQUE` (`status`);

--
-- Индексы таблицы `paymentmethods`
--
ALTER TABLE `paymentmethods`
  ADD PRIMARY KEY (`id_PaymentMethods`),
  ADD UNIQUE KEY `idPaymentMethods_UNIQUE` (`id_PaymentMethods`);

--
-- Индексы таблицы `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id_phones`),
  ADD UNIQUE KEY `number_UNIQUE` (`number`),
  ADD KEY `fk_phones_user1_idx` (`user_id_user`);

--
-- Индексы таблицы `photogoods`
--
ALTER TABLE `photogoods`
  ADD PRIMARY KEY (`id_photoGoods`),
  ADD UNIQUE KEY `id_photoGoods_UNIQUE` (`id_photoGoods`),
  ADD UNIQUE KEY `photoLink_UNIQUE` (`photoLink`),
  ADD KEY `fk_photoGoods_goods1_idx` (`goods_id_goods`);

--
-- Индексы таблицы `promolabel`
--
ALTER TABLE `promolabel`
  ADD PRIMARY KEY (`id_promoLabel`),
  ADD UNIQUE KEY `id_promoLabel_UNIQUE` (`id_promoLabel`),
  ADD UNIQUE KEY `label_UNIQUE` (`label`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id_reviews`),
  ADD UNIQUE KEY `id_reviews_UNIQUE` (`id_reviews`),
  ADD KEY `fk_reviews_goods1_idx` (`goods_id_goods`),
  ADD KEY `fk_reviews_user1_idx` (`user_id_user`);

--
-- Индексы таблицы `specificationscategory`
--
ALTER TABLE `specificationscategory`
  ADD PRIMARY KEY (`id_specificationsCategory`),
  ADD UNIQUE KEY `idspecificationsCategory_UNIQUE` (`id_specificationsCategory`),
  ADD KEY `fk_specificationsCategory_specificationsTitle1_idx` (`specificationsTitle_id_specificationsTitle`),
  ADD KEY `fk_specificationsCategory_category1_idx` (`category_id_category`);

--
-- Индексы таблицы `specificationstitle`
--
ALTER TABLE `specificationstitle`
  ADD PRIMARY KEY (`id_specificationsTitle`),
  ADD UNIQUE KEY `idspecificationsTitle_UNIQUE` (`id_specificationsTitle`),
  ADD UNIQUE KEY `title_UNIQUE` (`title`);

--
-- Индексы таблицы `specificationsvalue`
--
ALTER TABLE `specificationsvalue`
  ADD PRIMARY KEY (`id_specificationsValue`),
  ADD UNIQUE KEY `idspecificationsValue_UNIQUE` (`id_specificationsValue`),
  ADD KEY `fk_specificationsValue_goods1_idx` (`goods_id_goods`),
  ADD KEY `fk_specificationsValue_specificationsCategory1_idx` (`specificationsCategory_id_specificationsCategory`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `login_UNIQUE` (`login`),
  ADD UNIQUE KEY `password_UNIQUE` (`password`),
  ADD KEY `fk_buyer_userPhoto1_idx` (`userPhoto_id_userPhoto`),
  ADD KEY `fk_user_userStatus1_idx` (`userStatus_id_userStatus`);

--
-- Индексы таблицы `userphoto`
--
ALTER TABLE `userphoto`
  ADD PRIMARY KEY (`id_userPhoto`),
  ADD UNIQUE KEY `iduserPhoto_UNIQUE` (`id_userPhoto`);

--
-- Индексы таблицы `userrights`
--
ALTER TABLE `userrights`
  ADD PRIMARY KEY (`id_userRights`),
  ADD UNIQUE KEY `id_userRights_UNIQUE` (`id_userRights`),
  ADD UNIQUE KEY `rights_UNIQUE` (`rights`),
  ADD KEY `fk_userRights_userStatus1_idx` (`userStatus_id_userStatus`);

--
-- Индексы таблицы `userstatus`
--
ALTER TABLE `userstatus`
  ADD PRIMARY KEY (`id_userStatus`),
  ADD UNIQUE KEY `id_userStatus_UNIQUE` (`id_userStatus`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accesssale`
--
ALTER TABLE `accesssale`
  MODIFY `idaccessSale` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `brends`
--
ALTER TABLE `brends`
  MODIFY `id_brends` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `closuretable`
--
ALTER TABLE `closuretable`
  MODIFY `id_closureTable` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id_goods` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `goodsorder`
--
ALTER TABLE `goodsorder`
  MODIFY `id_goodsOrder` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `kitpromo`
--
ALTER TABLE `kitpromo`
  MODIFY `id_kitPromo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `id_orderStatus` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `paymentmethods`
--
ALTER TABLE `paymentmethods`
  MODIFY `id_PaymentMethods` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `phones`
--
ALTER TABLE `phones`
  MODIFY `id_phones` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `photogoods`
--
ALTER TABLE `photogoods`
  MODIFY `id_photoGoods` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `promolabel`
--
ALTER TABLE `promolabel`
  MODIFY `id_promoLabel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id_reviews` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `specificationscategory`
--
ALTER TABLE `specificationscategory`
  MODIFY `id_specificationsCategory` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `specificationstitle`
--
ALTER TABLE `specificationstitle`
  MODIFY `id_specificationsTitle` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `specificationsvalue`
--
ALTER TABLE `specificationsvalue`
  MODIFY `id_specificationsValue` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `userphoto`
--
ALTER TABLE `userphoto`
  MODIFY `id_userPhoto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `userrights`
--
ALTER TABLE `userrights`
  MODIFY `id_userRights` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `userstatus`
--
ALTER TABLE `userstatus`
  MODIFY `id_userStatus` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`photoGoods_id_photoGoods`) REFERENCES `photogoods` (`id_photoGoods`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `closuretable`
--
ALTER TABLE `closuretable`
  ADD CONSTRAINT `fk_closureTable_category1` FOREIGN KEY (`descendant_id_category`) REFERENCES `category` (`id_category`),
  ADD CONSTRAINT `fk_closureTable_category2` FOREIGN KEY (`ansestor`) REFERENCES `category` (`id_category`);

--
-- Ограничения внешнего ключа таблицы `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `fk_goods_accessSale1` FOREIGN KEY (`accessSale_idaccessSale`) REFERENCES `accesssale` (`idaccessSale`),
  ADD CONSTRAINT `fk_goods_brends1` FOREIGN KEY (`brends_id_brends`) REFERENCES `brends` (`id_brends`),
  ADD CONSTRAINT `fk_goods_category1` FOREIGN KEY (`category_id_category`) REFERENCES `category` (`id_category`);

--
-- Ограничения внешнего ключа таблицы `goodsorder`
--
ALTER TABLE `goodsorder`
  ADD CONSTRAINT `fk_goodsOrder_goods1` FOREIGN KEY (`goods_id_goods`) REFERENCES `goods` (`id_goods`),
  ADD CONSTRAINT `fk_goodsOrder_orders1` FOREIGN KEY (`orders_id_orders`) REFERENCES `orders` (`id_orders`);

--
-- Ограничения внешнего ключа таблицы `kitpromo`
--
ALTER TABLE `kitpromo`
  ADD CONSTRAINT `fk_kitPromo_goods1` FOREIGN KEY (`goods_id_goods`) REFERENCES `goods` (`id_goods`),
  ADD CONSTRAINT `fk_kitPromo_promoLabel1` FOREIGN KEY (`promoLabel_id_promoLabel`) REFERENCES `promolabel` (`id_promoLabel`);

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_orderStatus1` FOREIGN KEY (`orderStatus_id_orderStatus`) REFERENCES `orderstatus` (`id_orderStatus`),
  ADD CONSTRAINT `fk_orders_PaymentMethods1` FOREIGN KEY (`PaymentMethods_id_PaymentMethods`) REFERENCES `paymentmethods` (`id_PaymentMethods`),
  ADD CONSTRAINT `fk_orders_user1` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `fk_orders_user2` FOREIGN KEY (`user_id_courier`) REFERENCES `user` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `phones`
--
ALTER TABLE `phones`
  ADD CONSTRAINT `fk_phones_user1` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `photogoods`
--
ALTER TABLE `photogoods`
  ADD CONSTRAINT `fk_photoGoods_goods1` FOREIGN KEY (`goods_id_goods`) REFERENCES `goods` (`id_goods`);

--
-- Ограничения внешнего ключа таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_reviews_goods1` FOREIGN KEY (`goods_id_goods`) REFERENCES `goods` (`id_goods`),
  ADD CONSTRAINT `fk_reviews_user1` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `specificationscategory`
--
ALTER TABLE `specificationscategory`
  ADD CONSTRAINT `fk_specificationsCategory_category1` FOREIGN KEY (`category_id_category`) REFERENCES `category` (`id_category`),
  ADD CONSTRAINT `fk_specificationsCategory_specificationsTitle1` FOREIGN KEY (`specificationsTitle_id_specificationsTitle`) REFERENCES `specificationstitle` (`id_specificationsTitle`);

--
-- Ограничения внешнего ключа таблицы `specificationsvalue`
--
ALTER TABLE `specificationsvalue`
  ADD CONSTRAINT `fk_specificationsValue_goods1` FOREIGN KEY (`goods_id_goods`) REFERENCES `goods` (`id_goods`),
  ADD CONSTRAINT `fk_specificationsValue_specificationsCategory1` FOREIGN KEY (`specificationsCategory_id_specificationsCategory`) REFERENCES `specificationscategory` (`id_specificationsCategory`);

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_buyer_userPhoto1` FOREIGN KEY (`userPhoto_id_userPhoto`) REFERENCES `userphoto` (`id_userPhoto`),
  ADD CONSTRAINT `fk_user_userStatus1` FOREIGN KEY (`userStatus_id_userStatus`) REFERENCES `userstatus` (`id_userStatus`);

--
-- Ограничения внешнего ключа таблицы `userrights`
--
ALTER TABLE `userrights`
  ADD CONSTRAINT `fk_userRights_userStatus1` FOREIGN KEY (`userStatus_id_userStatus`) REFERENCES `userstatus` (`id_userStatus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
