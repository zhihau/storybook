-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-11-25 08:36:53
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `db_story`
--

-- --------------------------------------------------------

--
-- 資料表結構 `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(6) COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT 'page#',
  `src` varchar(256) COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT 'file name',
  `chinese` varchar(1000) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `english` varchar(1000) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `books`
--

INSERT INTO `books` (`id`, `name`, `src`, `chinese`, `english`) VALUES
(1, 'page1', '1.jpg', '書名：勇敢的猴子海賊團<br>作者：海耶斯羅伯茨', 'The Brave Monkey Pirate<br>by Hayes Roberts'),
(2, 'page2', '2.jpg', '一天，海盜莫迪和他媽媽出去跑腿。', 'One day the pirate Modi was out running errands with his mom.'),
(3, 'page3', '3.jpg', '他們去他最喜歡的餐館買雜貨和吃豌豆。', 'They shopped for groceries and ate peas at his favorite restaurant.'),
(5, 'page4', '4.jpg', '然后海盜莫迪的媽媽說：“哦，是的，我們需要\r\n在醫生辦公室停下來進行快速檢查。”', 'Then the pirate Modi\'s mom said, \"Oh yes, we need to\r\nstop off at the doctor\'s office for a quick checkup.\"'),
(6, 'page5', '5.jpg', '醫生檢查了莫迪的心臟、血壓和膝蓋。', 'The doctor checked Modi\'s heart, his blood pressure, and his knees.'),
(7, 'page6', '6.jpg', '然後他解釋說，莫迪第二天會回來打一針，\r\n保護他免受壞血病之類的傷害。', 'Then he explained that Modi would come back the next day and get a shot,\r\nto protect him from scurvy or something.'),
(8, 'page7', '7.jpg', '海盜莫迪不喜歡開槍。', 'The pirate Modi did not like shots.'),
(9, 'page8', '8.jpg', '那天晚上他父親回到家\r\n莫迪把去看醫生的事全都告訴了他。', 'That evening his father came home and Modi told him all about the visit to the doctor.'),
(10, 'page9', '9.jpg', '莫迪的父親說：“莫迪，我知道一些可以幫助你的東西。\r\n拿著這張地圖和我最快的海盜船找到它。\r\n\r\n另外，如果你在看醫生時保持不動，你可以吃點冰淇淋。”', 'Modi\'s father said, \"Modi, I know of something that can help you.\r\nTake this map and my fastest pirate ship and find it.\r\n\r\nAlso, if you stay very still for the doctor you can have some ice cream.\"'),
(11, 'page10', '10.jpg', '所以莫迪跟著地圖穿過最狂野的海域，', 'So Modi followed the map through the wildest seas,'),
(12, 'page11', '11.jpg', '爬上充滿熾熱熔岩的火山，', 'and climbed up volcanoes filled with fiery lava,'),
(13, 'page12', '12.jpg', '偷偷溜過這麼可怕的生物\r\n\r\n不會在本書中描述它們，', 'and sneaked past creatures so terrible\r\n\r\nthat they will not be described in this book,'),
(14, 'page13', '13.jpg', '直到他到達了山頂的一座冰封城堡。', 'until he reached an icy castle at the top of the mountains.'),
(15, 'page14', '14.jpg', '在裡面，他在螃蟹巫師寶座上發現了一位偉大的螃蟹巫師。', 'Inside, he found a great crab wizard on a crab wizard throne.'),
(16, 'page15', '15.jpg', '螃蟹巫師說了這些話，\r\n\r\n“猴海賊，因為你不畏艱險來到這裡，我就把\r\n這塊石頭給你。當你出手時，你必須\r\n緊緊地捏住這塊石頭，數到三。你會被神奇地帶到未來\r\n中槍的地方會吃完的。還有，吃完之後你可以吃點冰淇淋。”', 'The crab wizard spoke these words,\r\n\r\n \r\n\r\n\"Monkey Pirate, because you have braved many obstacles to get here I will\r\ngive you this rock. When you get a shot, you must squeeze the rock very\r\ntightly, and count to three. You will be magically taken into the future\r\nwhere the shot will be finished. Also, you can have some ice cream after.\"'),
(17, 'page16', '16.jpg', '海盜莫迪謝過他，然後乘船回家睡覺。', 'The pirate Modi thanked him and sailed back home to get some sleep.'),
(18, 'page17', '17.jpg', '第二天早上，他帶著石頭去了醫生辦公室。', 'The next morning, he took the rock with him to the doctor\'s office.'),
(19, 'page18', '18.jpg', '醫生哼著小曲兒，填滿了莫迪的鏡頭。', 'The doctor hummed a little song and filled up Modi\'s shot.'),
(20, 'page19', '19.jpg', '莫迪緊緊地閉上眼睛，\r\n用力捏著石頭，\r\n數著1、2、', 'Modi closed his eyes very tightly,\r\nsqueezed the rock as hard as he could,\r\nand counted 1, 2,'),
(21, 'page20', '20.jpg', '', ''),
(22, 'page21', '21.jpg', '3！\r\n\r\n螃蟹巫師說得對！拍攝結束了。\r\n\r\n勇敢的猴子海盜現在對壞血病和其他一些東西免疫。', '3!\r\n\r\nThe crab wizard was right! The shot was finished.\r\n\r\nThe Brave Monkey Pirate was now immune to scurvy and some other stuff.'),
(23, 'page22', '22.jpg', '他在回家的路上吃了冰淇淋。', 'And he had ice cream on the way home.'),
(24, 'page23', '23.jpg', '結束。', 'The end.');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
