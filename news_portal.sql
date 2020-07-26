-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2020 at 06:28 PM
-- Server version: 5.6.41-84.1-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sonalrid_tech_chronicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(20) NOT NULL,
  `cat_name` varchar(500) NOT NULL,
  `cat_image` varchar(1000) NOT NULL,
  `cat_status` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) NOT NULL,
  `modified_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_image`, `cat_status`, `created_by`, `created_at`, `modified_by`, `modified_at`) VALUES
(1, 'Mobile', 'download3.jpg', '1', 0, '2019-12-24 15:26:55', 0, '0000-00-00'),
(2, 'Laptop', 'laptop.jpg', '1', 0, '2019-12-24 15:27:14', 0, '0000-00-00'),
(3, 'Tablet', 'tablet.jpg', '1', 0, '2019-12-24 15:27:43', 0, '0000-00-00'),
(4, 'Social', 'social.jpg', '1', 0, '2019-12-24 15:28:10', 0, '0000-00-00'),
(5, 'demo', 'chandan.png', '1', 0, '2020-01-02 07:48:45', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) NOT NULL,
  `modified_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `user_type`, `created_by`, `created_at`, `modified_by`, `modified_at`) VALUES
(1, 'admin', 'admin', '', 0, '2019-12-16 05:56:42', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `cat_id`, `title`, `description`, `image`, `created_by`, `created_at`, `modified_at`, `modified_by`) VALUES
(1, 1, 'Vivo V17 goes on sale in India on Amazon, Flipkart; check out price, features', '<p>Chinese phone maker Vivo&#39;s recently launched smartphone V17 is now on sale in India. The phone can be bought both online and offline. The phone would be available in Amazon, Flipkart, and Vivo India e-store online.</p>\r\n\r\n<p>The new Vivo V17 has an L-shaped quad-camera module at the back and a 32MP selfie camera at the front. The V17 is priced at Rs 22,990 in the country for the 8GB Ram + 128 GB storage model.</p>\r\n\r\n<p>Vivo V17 has a 6.44-inch display and 5.77 cm (6.21) with rounded corners. The phone has a tiny 2.98-mm punch hole for front camera.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Vivo V17 features and design</strong></p>\r\n\r\n<p>The V17 has a super amoled display. It has an aspect ratio of 20:9. The thickness of V17 is 8.54 mm and the weight is 176 gramme. It runs on Funtouch OS 9.2 based on Android Pie and packs a 4,500mAh battery with 18W fast charging support. Powered by Qualcomm Snapdragon 675 SoC, the phone has 8 GB RAM and 128 GB ROM.</p>\r\n', 'vivo_v17_660_171219114636-2.jpg', 0, '2019-12-24 15:34:51', '0000-00-00', 0),
(2, 1, 'Infinix Hot 8 Starts Receiving XOS 5.5 Update With Social Turbo, Game Assistant, and More', '<p>Infinix has begun the rollout of a new update for the Infinix Hot 8 phone in India that brings a host of new features and the updated Android security patch. The latest over-the-air (OTA) update for the Infinix Hot 8 brings the updated XOS v5.5 custom skin based on Android Pie that introduces features such as Social Turbo, Game Assistant, and new gesture-based features. The latest update for the Infinix Hot 8 also adds a beautification feature for WhatsApp video calls, a peek mode for privacy, and more.</p>\r\n\r\n<p><a href=\"https://gadgets.ndtv.com/mobiles/infinix-phones\" target=\"_self\">Infinix</a>&nbsp;says that the XOS v5.5 update is now rolling out for&nbsp;<a href=\"https://gadgets.ndtv.com/infinix-hot-8-price-in-india-91080\" target=\"_self\">Infinix Hot 8</a>&nbsp;users in India. The update brings the December Android security patch, as well as we the updated GMS (Google Mobile Services) v201910 package. Talking about new features arriving with the update, the notable ones in includ', 'download3.jpg', 0, '2019-12-24 15:35:47', '0000-00-00', 0),
(3, 1, 'Samsung Galaxy Note 10 Lite, Galaxy S10 Lite May Launch at CES 2020', '<p>Samsung Galaxy Note 10 Lite and Galaxy S10 Lite have been extensively leaked in the past couple of weeks, and both the phones are rumoured to launch early next month. Now, a new report says that the Galaxy Note 10 and the Galaxy S10 Lite might be showcased at the CES 2020, which kicks off on January 7, 2020. The probable CES 2020 debut of the two upcoming Samsung phones makes sense since both the phones have previously been rumoured to launch in January. And with CES being the world&#39;s biggest consumer technology show, Samsung might well take to the stage to lift the covers from the Galaxy Note 10 Lite and Galaxy S10 Lite.</p>\r\n\r\n<p>A&nbsp;<a href=\"http://www.koreaherald.com/view.php?ud=20191223000779\" target=\"_blank\">report</a>&nbsp;by Korean Herald claims that the Galaxy Note 10 Lite and the Galaxy S10 Lite are &lsquo;likely to make an appearance&#39; at CES 2020. The report doesn&#39;t mention whether the information made its way from an insider source or if an executive hinte', 'download.jpg', 0, '2019-12-24 15:38:26', '0000-00-00', 0),
(4, 2, 'Microsoft’s Your Phone App Now Allows Users to Make, Receive Calls From Their PC', '<p>Microsoft has introduced calling support in the Your Phone app. The feature was tested for a few months by Windows Insider members, and it has now rolled out to the general public. This feature will allow users to make and receive calls on their PCs using the Your Phone app. Compatible users should be able to dial a number to make a call, check call history, and seamlessly transfer calls between the PC and phone. Essentially, this feature will allow users to avoid picking up their phones while working on the PC.</p>\r\n\r\n<p><a href=\"https://gadgets.ndtv.com/tags/microsoft\">Microsoft</a>&nbsp;has announced the general availability of the&nbsp;<a href=\"https://gadgets.ndtv.com/tags/your-phone\">Your Phone</a>&nbsp;app calling feature via the Windows Insider&nbsp;<a href=\"https://twitter.com/windowsinsider/status/1204869547552993280\" target=\"_blank\">Twitter</a>&nbsp;handle. The feature was in testing for a while, and now it has rolled out for all compatible&nbsp;</p>\r\n', 'post32.jpg', 0, '2019-12-24 15:39:47', '0000-00-00', 0),
(5, 2, 'RedmiBook 13 With 10th Gen Intel Core Processors, 89 Percent Screen-to-Body Ratio Launched', '<p>RedmiBook 13 has been officially unveiled with a narrow-edge display to offer a &ldquo;full screen&rdquo; experience. Taking on the Huawei MateBook 13 that had 4.4mm thick bezels to deliver 88 percent screen-to-body ratio, the RedmiBook 13 is touted to offer 89 percent screen space. The new RedmiBook is also claimed to have a custom fan that increases the air volume by 25 percent along with reduced noise by two decibels over what we saw on earlier RedmiBook models. The RedmiBook 13 is powered by the 10th generation Intel Core processor.</p>\r\n\r\n<h2>RedmiBook 13 price, sale details</h2>\r\n\r\n<p>The&nbsp;<a href=\"https://gadgets.ndtv.com/xiaomi-redmibook-13-price-in-india-91347\" target=\"_self\">RedmiBook 13</a>&nbsp;price is&nbsp;<a href=\"https://www.weibo.com/3021514657/Ik7yCsvPL\" target=\"_blank\">initially set</a>&nbsp;at CNY 4,199 (roughly Rs. 42,300) that includes the Intel Core i5 processor along with 8GB RAM and 512GB SSD. It goes up to CNY 5,199 for the configuration that includes a', 'laptop2.jpg', 0, '2019-12-24 16:27:22', '0000-00-00', 0),
(6, 2, 'Dell Latitude 7400 2-in-1 Review: A Business Laptop With a Pleasing Personality', '<p>Is it just me, or do laptops that are classified as &ldquo;business laptops&rdquo; just look plain and simple boring? Bereft of any personality, colour and look like their entire existence is meant for a purpose of being slaves in the corporate world? Much like the companies that bought them and the human slaves that use them? If you agree with me, chances are you would appreciate of the way the Microsoft Surface computing devices and the Apple MacBook do the blend of the best of both worlds, without leaning too much to one side. They are not boring. Simple. Perfect time then, for the Dell Latitude 7400 2-in-1 convertible computing device to make its presence felt. And it is absolutely fantastic that the inspiration comes from the gorgeous Dell XPS 13 laptop and its equally beautiful iterations over the years. The Dell Latitude 7400 2-in-1 simply takes a bucket load of inspiration, adds a few more of goodies and what you have is a very capable business laptop. There are three varian', 'Dell-Latitude-7400-2-in-1.jpg', 0, '2019-12-24 16:27:54', '0000-00-00', 0),
(7, 3, 'SAMSUNG HAS FILED A PATENT FOR A CLAMSHELL FOLDABLE TABLET', '<p>After the release of the Samsung Galaxy Fold earlier this year, Samsung have been looking at how they can implement foldable screens into its other products. Just recently, Samsung had patent listing from the European Union Intellectual Property Office that reveals that the Korean tech giant is looking at releasing a Tablet that comes with a flexible screen. Unlike the Galaxy Fold, this device could feature a clamshell design as opposed to a horizontal fold.&nbsp;</p>\r\n\r\n<p>First reported by&nbsp;<a href=\"https://en.letsgodigital.org/tablets/samsung-galaxy-foldable-tablet/\" rel=\"nofollow\" target=\"_blank\">LetsGoDigital</a>, the Galaxy foldable Tab will be slightly larger than the Galaxy Fold. It&rsquo;s not surprising that Samsung have decided to move forward with foldable devices since this seems to be the coming trend. Both Huawei and Motorola have already thrown their hats into the foldable phone market. Surprisingly, the Samsung folding tab resembles a Motorola Razr more than the', 'post21.jpg', 0, '2019-12-24 16:33:43', '0000-00-00', 0),
(8, 3, 'SAMSUNG GALAXY TAB S6, WATCH 4G, WATCH ACTIVE 2 LAUNCHED IN INDIA', '<p>Samsung has launched the Galaxy Tab S6 along with two new smart wearables in India. The wearables include the Galaxy Watch 4G and Galaxy Watch Active 2. Sold with an optional keyboard case, the Galaxy Tab S6 is pitched as a replacement for the laptop and more as a competitor to Apple&rsquo;s iPad Pro. The new range of Samsung devices will go on sale from October 11, right on time for you to make that grand Diwali purchase.&nbsp;</p>\r\n\r\n<h2><strong>SAMSUNG GALAXY TAB S6</strong></h2>\r\n\r\n<p>Let&rsquo;s start with the Galaxy Tab S6 first. It&rsquo;s Samsung&rsquo;s most powerful tablet till date; it features the flagship Qualcomm Snapdragon 855 SoC along with 6GB of RAM and 128GB of internal storage (there&rsquo;s expandable storage as well). Note that India does not get the 8GB+256GB variant. Previously, Samsung refrained from putting a Qualcomm chip in its high-end tablets and instead chose to go with its own Exynos processors.</p>\r\n', 'post22.jpg', 0, '2019-12-24 16:34:41', '0000-00-00', 0),
(9, 4, 'Holiday Season 2019: Google Marks Arrival of Holidays With Special Christmas Eve Doodle', '<p>Holiday season is here and Google is celebrating its arrival&nbsp;with a new festive-themed doodle, continuing a long tradition of spreading the cheers at this time of the year. With less than a day left before the celebrations begin for Christmas, Google has updated its search homepage with a doodle that is all about the annual festival season and Santa Claus embarking on his fabled duty of distributing gifts. In addition to the new Christmas-themed doodle, Google has also added a share button that let users spread the festivities season wishes with their friends and family members.</p>\r\n\r\n<p>Just a day ahead of Christmas, search engine giant Google has started celebrating the holiday season as it rolled out a new special Doodle titled &#39;Happy Holidays 2019&#39; adding to the holiday spirit. The search engine posted their annual &#39;Happy Holidays&#39; doodles from Monday.</p>\r\n\r\n<p>The first illustration showed a bunch of burning candles along with cherries and its leaves that', 'download_(1).jpg', 0, '2019-12-24 16:39:01', '0000-00-00', 0),
(10, 1, 'Twitter and Facebook Announce Over 6,000 Account Removals Related to Political Manipulation', '<p>As we head into the holiday break, both&nbsp;<a href=\"https://blog.twitter.com/en_us/topics/company/2019/new-disclosures-to-our-archive-of-state-backed-information-operations.html\">Twitter</a>&nbsp;and&nbsp;<a href=\"https://about.fb.com/news/2019/12/removing-coordinated-inauthentic-behavior-from-georgia-vietnam-and-the-us/\">Facebook</a>&nbsp;have announced a raft of new profile and Page removals as part of each platform&#39;s ongoing investigations into co-ordinated manipulation of their networks for political influence campaigns.</p>\r\n\r\n<p>And the scope of these latest removals is significant - the largest action of its type yet reported by Twitter:</p>\r\n\r\n<ul>\r\n	<li>Twitter has&nbsp;<a href=\"https://blog.twitter.com/en_us/topics/company/2019/new-disclosures-to-our-archive-of-state-backed-information-operations.html\">removed</a>&nbsp;5,929 accounts originating from Saudi Arabia, which were part of a larger network of &quot;88,000 accounts engaged in spammy behavior across a wide ra', 'download_(2).jpg', 0, '2019-12-24 16:41:00', '0000-00-00', 0),
(11, 4, 'How to Get Verified on Facebook and Instagram', '<p>Hey, do you want to get that elusive verified tick on your Facebook and/or Instagram profile?</p>\r\n\r\n<p>Of course you do, everyone does - and now, Facebook has provided an&nbsp;<a href=\"https://www.facebook.com/creators/verification-and-safety-facebook-instagram\">updated overview</a>&nbsp;of how you can do it.</p>\r\n\r\n<p>But a word of warning - even if you do apply through these processes, there is absolutely no guarantee, of any kind, that Facebook or Instagram will approve your verification request. The below notes simply relate to how you can go about applying, it&#39;s not an insider&#39;s guide to getting verified, as such.</p>\r\n\r\n<p>First off, on Facebook - if you want to get a blue verification tick on your Facebook Page or profile, you need to fill out&nbsp;<a href=\"https://www.facebook.com/help/contact/342509036134712\">this form</a>:</p>\r\n\r\n<p><img alt=\"Facebook verification\" src=\"https://www.socialmediatoday.com/user_media/diveimage/Facebook_verification.png\" /></p>\r\n\r\n<p>F', 'unnamed_(1).jpg', 0, '2019-12-24 16:44:10', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `nid` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) NOT NULL,
  `modified_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`nid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `nid` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
