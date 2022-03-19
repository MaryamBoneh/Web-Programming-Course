-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 18, 2022 at 10:39 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Stories`
--

-- --------------------------------------------------------

--
-- Table structure for table `Story`
--

CREATE TABLE `Story` (
  `ID` int(11) NOT NULL,
  `NAME` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `Story`
--

INSERT INTO `Story` (`ID`, `NAME`) VALUES
(1, 'سفید برفی'),
(2, 'مرد عنکبوتی');

-- --------------------------------------------------------

--
-- Table structure for table `StorySections`
--

CREATE TABLE `StorySections` (
  `ID` int(11) NOT NULL,
  `TEXT` text COLLATE utf8_persian_ci NOT NULL,
  `STORY_ID` int(11) NOT NULL,
  `PARENT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `StorySections`
--

INSERT INTO `StorySections` (`ID`, `TEXT`, `STORY_ID`, `PARENT`) VALUES
(1, 'روزی روزگاری جادوگری در سرزمینی دور زندگی می کرد که هر روز از آینه می پرسید: چه کسی از من زیباتر است؟ و آینه پاسخ می داد: شما سرورم. و تا همیشه پاسخ آینه همین بود. ', 1, 0),
(2, 'روزی روزگاری جادوگری در سرزمینی دور زندگی می کرد که هر روز از آینه می پرسید: چه کسی از من زیباتر است؟ و آینه پاسخ می داد: شما سرورم. اما یک روز گفت: دختری به نام سفیدبرفی. ', 1, 0),
(3, 'و هیچ مشکلی پیش نیومد و جادوگر به زندگی خودش پرداخت!', 1, 1),
(4, 'جادوگر عصبی شد و گفت: اون کیه؟ آینه گفت دختری به نام سفید برفی. جادوگر گفت خب اون برای خودش زیباست منم برای خودم. مهم نیست منم زیبام!', 1, 2),
(5, 'جادوگر عصبی شد و گفت: اون کیه؟ آینه گفت دختری به نام سفید برفی. جادوگر گفت: آدرسش رو به من بده میخوام بکشمش!', 1, 2),
(6, 'و سفید برفی به زندگی خودش ادامه داد و جادوگر هم خوشحال زندگیش رو کرد.\r\nچون اون فهمید زیبایی یه مسئله نسبیه و از نظر هر کسی زیبایی تعریف خاصی داره.', 1, 4),
(7, 'جادوگر یه سیب رو زهرآگین کرد و رفت سفید برفی رو که توی کلبه ای پناه گرفته بود پیدا کرد و سیب رو داد به سفید برفی و اون هم خوردش و بیهوش شد', 1, 5),
(8, 'جادوگر یه سیب رو زهرآگین کرد و رفت سفید برفی رو که توی کلبه ای پناه گرفته بود پیدا کرد اما تا سیب رو داد به سفید برفی یه کلاغ اومد به سفید برفی خبر داد که اون سمیه و سفید برفی جادوگر رو دست به سرش کرد.', 1, 5),
(9, 'شاهزاده به طریقی خبردار شد که سفیدبرفی داره می میره اومد و پیداش کرد و با بوسه اونو بیدار کرد', 1, 7),
(10, 'شاهزاده به طریقی خبردار شد که سفیدبرفی داره می میره اومد و پیداش کرد و نتونست براش کاری کنه تا نجاتش بده. سفید برفی رو توی تابوت گذاشت و از کلبه خارجش کرد.', 1, 7),
(11, 'و بعد سفیدبرفی به دوستانش گفت اون جادوگر خبیث رو بکشن.', 1, 8),
(12, 'سفیدبرفی بخاطر قلب مهربونی که داشت، جادوگر رو بخشید و ازونجا دور شد.', 1, 8),
(13, 'جادوگر مرد و سفید برفی توی جنگل به زندگی اش ادامه داد.', 1, 11),
(14, 'و جادوگر تحت تاثیر قرار گرفت و از کارای زشتش توبه کرد و رفت. و بعدها سفید برفی و جادوگر دوستان خوبی برای یکدیگر شدند.', 1, 12),
(15, 'اونها با هم ازدواج کردن و سالهای زیادی رو با آرامش و خوشی کنار هم زندگی کردن❤️', 1, 9),
(16, 'توی راه تابوت افتاد و تکه سیبی که توی گلوی سفیدبرفی گیر کرده بود افتاد بیرون و بهوش اومد!', 1, 10),
(17, 'شاهزاده تابوت سفیدبرفی رو به قصر برد.', 1, 10),
(18, 'کاری از دست شاهزاده و طبیب ها بر نیومد و همونجا سفیدبرفی رو دفن کردن.', 1, 17),
(19, 'اونها به قصر رفتن و ازدواج کردن و گذشته هارو فراموش کردن.', 1, 16),
(20, 'اونها به قصر رفتن و ازدواج کردن و جادوگر رو به عروسیشون دعوت کردن.', 1, 16),
(21, 'سالهای زیادی رو کنار هم با خوبی و آرامش زندگی کردن❤️', 1, 19),
(22, 'سفیدبرفی جادوگر رو مجبور کرد با کفش های آهنی داغ برقصه تا بمیره.\r\n\r\nجادوگر مرد و سفیدبرفی و شاهزاده باهم زندگی کردن اما همیشه عذاب وجدان داشتن از قتلی که مرتکب شدن.', 1, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Story`
--
ALTER TABLE `Story`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `StorySections`
--
ALTER TABLE `StorySections`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Story`
--
ALTER TABLE `Story`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `StorySections`
--
ALTER TABLE `StorySections`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
