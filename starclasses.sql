-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 10, 2023 lúc 10:44 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `starclasses`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2023-05-27 04:33:05', '2023-05-27 04:33:05'),
(2, 1, '2023-05-27 04:39:41', '2023-05-27 04:39:41'),
(3, 2, '2023-05-27 04:39:47', '2023-05-27 04:39:47'),
(4, 3, NULL, NULL),
(5, 1, '2023-05-30 03:45:31', '2023-05-30 03:45:31'),
(6, 1, '2023-05-30 03:46:04', '2023-05-30 03:46:04'),
(7, 2, '2023-05-30 11:06:01', '2023-05-30 11:06:01'),
(8, 2, '2023-05-30 11:06:46', '2023-05-30 11:06:46'),
(9, 2, '2023-05-30 11:14:39', '2023-05-30 11:14:39'),
(10, 2, '2023-05-30 11:14:41', '2023-05-30 11:14:41'),
(11, 2, '2023-05-30 11:20:19', '2023-05-30 11:20:19'),
(12, 2, '2023-05-30 11:44:21', '2023-05-30 11:44:21'),
(13, 2, '2023-05-31 04:31:12', '2023-05-31 04:31:12'),
(14, 2, '2023-05-31 04:34:46', '2023-05-31 04:34:46'),
(15, 2, '2023-05-31 04:49:38', '2023-05-31 04:49:38'),
(16, 2, '2023-05-31 04:49:41', '2023-05-31 04:49:41'),
(17, 2, '2023-05-31 04:49:41', '2023-05-31 04:49:41'),
(18, 2, '2023-05-31 04:49:41', '2023-05-31 04:49:41'),
(19, 2, '2023-05-31 04:49:41', '2023-05-31 04:49:41'),
(20, 2, '2023-05-31 04:49:42', '2023-05-31 04:49:42'),
(21, 2, '2023-05-31 04:49:42', '2023-05-31 04:49:42'),
(22, 2, '2023-05-31 04:49:42', '2023-05-31 04:49:42'),
(23, 2, '2023-05-31 04:49:42', '2023-05-31 04:49:42'),
(24, 2, '2023-05-31 04:49:42', '2023-05-31 04:49:42'),
(25, 2, '2023-05-31 04:49:43', '2023-05-31 04:49:43'),
(26, 2, '2023-05-31 04:49:43', '2023-05-31 04:49:43'),
(27, 2, '2023-05-31 04:49:43', '2023-05-31 04:49:43'),
(28, 2, '2023-05-31 04:49:43', '2023-05-31 04:49:43'),
(29, 2, '2023-05-31 04:49:44', '2023-05-31 04:49:44'),
(30, 2, '2023-05-31 04:49:44', '2023-05-31 04:49:44'),
(31, 2, '2023-05-31 04:50:09', '2023-05-31 04:50:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_course`
--

CREATE TABLE `bill_course` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_course`
--

INSERT INTO `bill_course` (`id`, `bill_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 1, 26, '2023-05-27 04:33:05', '2023-05-27 04:33:05'),
(2, 2, 26, '2023-05-27 04:39:41', '2023-05-27 04:39:41'),
(3, 3, 1, '2023-05-27 04:39:48', '2023-05-27 04:39:48'),
(4, 3, 2, '2023-05-27 04:39:48', '2023-05-27 04:39:48'),
(5, 4, 5, '2023-05-27 04:39:48', '2023-05-27 04:39:48'),
(6, 4, 6, '2023-05-27 04:39:48', '2023-05-27 04:39:48'),
(7, 4, 8, '2023-05-27 04:39:48', '2023-05-27 04:39:48'),
(8, 6, 1, '2023-05-30 03:46:04', '2023-05-30 03:46:04'),
(9, 6, 2, '2023-05-30 03:46:04', '2023-05-30 03:46:04'),
(10, 11, 40, '2023-05-30 11:20:19', '2023-05-30 11:20:19'),
(11, 11, 12, '2023-05-30 11:20:19', '2023-05-30 11:20:19'),
(12, 12, 50, '2023-05-30 11:44:21', '2023-05-30 11:44:21'),
(13, 12, 60, '2023-05-30 11:44:21', '2023-05-30 11:44:21'),
(14, 12, 70, '2023-05-30 11:44:21', '2023-05-30 11:44:21'),
(15, 13, 20, '2023-05-31 04:31:12', '2023-05-31 04:31:12'),
(16, 14, 20, '2023-05-31 04:34:46', '2023-05-31 04:34:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `course_id`, `user_id`, `created_at`, `updated_at`) VALUES
(23, 40, 2, '2023-05-31 05:29:41', '2023-05-31 05:29:41'),
(24, 6, 2, '2023-05-31 05:34:05', '2023-05-31 05:34:05'),
(27, 18, 2, '2023-06-07 12:09:43', '2023-06-07 12:09:43'),
(28, 25, 2, '2023-06-09 09:33:54', '2023-06-09 09:33:54'),
(29, 29, 2, '2023-06-09 09:45:03', '2023-06-09 09:45:03'),
(30, 39, 2, '2023-06-09 09:46:09', '2023-06-09 09:46:09'),
(31, 55, 2, '2023-06-09 09:46:29', '2023-06-09 09:46:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chapters`
--

CREATE TABLE `chapters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chapters`
--

INSERT INTO `chapters` (`id`, `content`, `parent_id`, `video_link`, `course_id`, `created_at`, `updated_at`) VALUES
(24, 'Bài 3', 0, 'https://www.youtube.com/embed/jfKfPfyJRdk', 2, NULL, NULL),
(25, 'Bài 3.1', 24, 'https://www.youtube.com/embed/jfKfPfyJRdk', 2, NULL, NULL),
(26, 'Bài 3.2', 24, 'https://www.youtube.com/embed/jfKfPfyJRdk', 2, NULL, NULL),
(27, 'Bài 3.3', 24, 'https://www.youtube.com/embed/jfKfPfyJRdk', 2, NULL, NULL),
(28, 'Bài 3.4', 24, 'https://www.youtube.com/embed/jfKfPfyJRdk', 2, NULL, NULL),
(29, 'Bài 3.5', 24, 'https://www.youtube.com/embed/jfKfPfyJRdk', 2, NULL, NULL),
(30, 'Bài 3.6', 24, 'https://www.youtube.com/embed/jfKfPfyJRdk', 2, NULL, NULL),
(31, 'Bài 4', 0, 'https://www.youtube.com/embed/jfKfPfyJRdk', 2, NULL, NULL),
(32, 'Bài 4.1', 31, 'https://www.youtube.com/embed/jfKfPfyJRdk', 2, NULL, NULL),
(40, 'bai 01- ky nang ngủ', 0, 'https://youtu.be/5kIe-ElX2Uo', 4, '2023-05-22 03:46:29', '2023-05-22 03:46:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(350) NOT NULL,
  `description` text NOT NULL,
  `price` double(8,2) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `thumbnail` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `price`, `discount`, `thumbnail`, `created_at`, `updated_at`, `department_id`, `teacher_id`) VALUES
(1, 'English for enthusiasts', 'Bino gossip English', 69.99, 59.99, '/storage/thumbnails/j15hAfIHvLdSrZbNOC35PGHpqIBo0APrL9HMq1Ck.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 2, 3),
(2, 'Learn guitar accompaniment', 'Learn guitar accompaniment to seduce girls', 110.99, 100.99, '/storage/thumbnails/NzK3HfqlNLvopUclx1FFRi13OYmSFPE7A5mgPH4z.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 60, 4),
(3, 'Master Excel, Word, Powerpoint', 'Help you master Excel through 100 topics from basic to advanced.', 30.99, 20.99, '/storage/thumbnails/BSvsQmEW7LVjMByflRFrIKY58Q4yZUY3dMpSPhLk.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 12, 5),
(4, 'AutoCAD campaign', 'The enthusiastic course is adapted from the knowledge system in the form of an easy-to-remember Mindmaster mind map. The content has been practically tested, condensed and optimized with over 60 offline classes held.', 70.99, 58.99, '/storage/thumbnails/8QD3crayKxLjrHIv0H1g4kWzWoXMsTT9W08hSgX3.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 18, 6),
(5, 'Master Photosop with Huy Quan Hoa', 'The course will help you to add your knowledge of Photoshop in a methodical way, easy to learn and effective, along with useful tips, unique skills on photo compositing and image editing.', 15.99, 10.99, '/storage/thumbnails/nluHGI5wXBleyFo5QVfQx3LKUnkDtuYtnDfoDix8.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 17, 7),
(6, 'Learn HTML, CSS, JavaScript from basic to advanced', 'BOOTSTRAP 4, HTML5/CSS3 course helps you master skills, methods, effects,... cutting Web from Design files to help master knowledge of CSS, HTML, understand Bootstrap and Web cutting skills with Illustrate , Pix and handle professional website content in just 5 days', 30.99, 20.99, '/storage/thumbnails/ti3o8JNHzLzpfDZeKbtfkwhFbZLjV5IW2iMdTnyl.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 16, 8),
(7, 'Program Python from Zero to Hero', 'Python Online course from Zero to Hero with experts to help you have a good foundation from Python language to build Website, Game, Application yourself', 60.99, 39.99, '/storage/thumbnails/VJ2X6oYdmxbBVuaE27FgonuRhb2bTtI3593T9Rvn.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 45, 9),
(8, 'The Art of Communicate and Negotiate', 'Reveal the secret to communicate effectively, know how to negotiate to achieve your goals, build good relationships.', 60.99, 29.99, '/storage/thumbnails/OZYXQOoXIMDsQOmluwgoy6EzBFTnsAZYs0YimTEc.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 31, 10),
(9, 'Classic business strategy in the F&B industry', 'The course is for business owners, individuals who are doing business or want to start a business in the F&B industry.', 30.99, 20.99, '/storage/thumbnails/hvizDfkUfzjpwydmWIUa9JR7qvBRmkvU4U4vj6CA.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 26, 11),
(10, 'Basic Yoga practice at home with Nguyen Hieu', 'Practicing basic yoga at home helps improve your mental and physical health. Maximize the cost of studying at the center', 70.99, 55.99, '/storage/thumbnails/LrJqICCLCAIqBQnSsGCin3AWYui9tw7Dd0gMjVkk.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 52, 12),
(11, 'Breakthrough business', 'Basic knowledge that any successful person should have.', 169.99, 99.99, '/storage/thumbnails/KuMx7ZEm7S3KBFimvyIIca1EpusJanuLc41scWWs.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 24, 13),
(12, 'Financial freedom with securities', 'Finance and securities course from investor Dang Trong Khang helps you avoid risks and pitfalls to increase passive income in a sustainable way', 69.99, 20.99, '/storage/thumbnails/mPG1cbmJOUBzmcj3sJ6LbqOrcsWq5rUo0VVicq2E.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 27, 14),
(13, 'Introduction Securities', 'Introductory Securities course will help you to fully grasp the knowledge and invest in Securities. The most thorough and detailed for beginners to join.', 69.99, 29.99, '/storage/thumbnails/f0ymGuz7KWWoFv9OELCeXgXdGKIRxSGT5YnsTOC1.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 27, 14),
(14, 'Starting a business from 1', 'This startup course will help you to be professionally and professionally trained in methods of financial preparation, human resources, planning, preventive measures, minimizing risks when starting a business, and improving business status. effective', 79.99, 59.99, '/storage/thumbnails/8l0tXvWhUOJU7akCaueBchMNeblOl70uIHHAOdMg.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 27, 15),
(15, 'The secret to selecting and treating talented people', 'As a business owner, you need to know how to choose the best people but you are too busy to do it in person, this course will help you hire the best people.', 69.99, 20.99, '/storage/thumbnails/YekH6q5NRgngWGCURyEnnE6ROwHtZ76sia1WuSqZ.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 27, 16),
(16, 'Standard pronunciation and practice speaking English', 'The intensive course helps students to pronounce all words in English STANDARD. Not only that, the course also teaches students how to be attached, express English naturally, as well as help improve English speaking speed.', 60.99, 34.99, '/storage/thumbnails/kEH9Zhfhcr0mDTGYpIta4N8w3OSrGF50a2Zuqqud.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 2, 17),
(17, 'Learn to communicate Korean is so easy', 'The communicate Korean course helps you master Korean vocabulary and grammar structures in communicate quickly to confidently learn and work in a Korean environment.', 60.99, 59.99, '/storage/thumbnails/HX0s7aou3R2BswAR7pJiVqFsAf5OLk9VphpR8RQI.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 1, 18),
(18, 'Speak Korean like a native speaker - Beginner', 'Help you self-study Korean at home, reaching the elementary level.', 70.99, 39.99, '/storage/thumbnails/p5i1Umjo1niOM5ONBnxfXl5LQWDO9lJgdiIyzVuj.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 1, 19),
(19, 'App to practice Chinese quickly (Beginner)', 'Regain basic Chinese, confidently communicate with natives.', 60.99, 49.99, '/storage/thumbnails/jnUjaUgWPTAbtlinqlGuUzXDNJvJVhMRAG3MqH4G.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 3, 20),
(20, 'Learn Japanese is easy', 'Learn Japanese in a lively, exciting, and full of senses with a detailed, easy-to-understand and easy-to-apply curriculum.', 60.99, 54.99, '/storage/thumbnails/d3K4p9azTf1KrNwdsHVXE5mA9v0RxjCGgmoq0RRd.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 4, 21),
(21, 'Facebook Smart Marketing 2021', 'The course updates the smartest features on Facebook to help you optimize advertising costs.', 150.99, 99.99, '/storage/thumbnails/AD8c37ZK1mBVXVkET0F7FYJqAJmTIbzckD1YaIms.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 5, 22),
(22, 'Google Ads Marketing full episode', 'The course on running google adwords helps students master how to run Google Ads ads, catch the latest trends in self-run for their products.', 90.99, 65.99, '/storage/thumbnails/rpgEKRh9p0QUqiPp8qvjdY59lVNhyDR96ZgmLIIi.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 5, 23),
(23, 'Explode in sales with Google Ads from A-Z', 'Help you own a very powerful Marketing weapon in the Internet environment - Google Ads Network, understand Google, know how to flow Google Ads ads with an optimal budget of more than 30% right at home', 90.99, 69.99, '/storage/thumbnails/W1CbiwmVn1ReF2quUGs6R3fH2IFhBdmPfjipS972.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 6, 24),
(24, 'Google Ads combine with chatbot facebook', 'Teach you how to use sales funnels, lading pages, how to advertise Google Ads effectively, optimize costs to help you increase revenue, increase business efficiency immediately', 70.99, 69.99, '/storage/thumbnails/Jk9wJGCy5aYYy7yjZhxicNdGsd0fejxP0DLQxiIm.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 6, 25),
(25, 'Training content skills to write website articles from A-Z', 'The course of writing standard seo articles trains the skills of writing standard SEO website articles, helping students master the skills of writing website articles and building website content from A-Z', 100.99, 99.99, '/storage/thumbnails/J8mJbA2OhxV0dFDt9wulkPAe5gxFAwHuFCKjgc8Q.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 9, 26),
(26, 'Excel practical application in business', 'Master the basic knowledge and practical application of Microsoft Excel (2010, 2013, 2016, 2019 - office 365) in the business environment', 120.99, 19.99, '/storage/thumbnails/upZOPYdJvAxJszGUjKbx6zfX4QbpSQpmsGk7x6Ps.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 11, 27),
(27, 'Excel for campaign - advanced', 'The course will provide the necessary Excel knowledge and skills for the job, providing you with a lot of practical data to practice. From there, you will have the conditions to strengthen your Excel knowledge and skills, helping you to solve your work faster, more accurately and more efficiently.', 100.99, 50.99, '/storage/thumbnails/LSws0yOs7v77yLGJOJqIXDFz2yDEc0AugnYxAQ5R.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 11, 28),
(28, 'Edit Word 365 documents from basic to advanced', 'Text editing skills', 70.99, 39.99, '/storage/thumbnails/GFpW3fn8XikpB4VVQ4nyfVOyuO2mWoeU5qmqVYrF.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 12, 29),
(29, 'PowerPoint 2016 handbook for teachers and trainers', 'Confidently conquer Powerpoint 2016 to Design more vivid and classy lectures.', 69.99, 59.99, '/storage/thumbnails/7TXM0ghNinclKYlhHO4vPbQIrC2QQ1LathWwVHOz.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 13, 30),
(30, 'Professional PowerPoint design', 'Professional PowerPoint Design course helps students present, Design impressive Presents with attractive slides, attracting the audience.', 60.99, 29.99, '/storage/thumbnails/zPP3rcXoMqVYCbUnaUTsE0BkuSGoOwAw8UA5pNOh.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 13, 31),
(31, 'Advertising design with CorelDRAW software', 'Corel online software course helps you master Design skills related to the advertising - printing industry to make printed products on Digital printers', 90.99, 49.99, '/storage/thumbnails/jULH3ps5iCw82aBt70EXV0WDhQI7k946a242hc1r.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 14, 32),
(32, 'The course CorelDRAW Advertising design', 'Design and work with CorelDraw software professionally, quickly and save time', 79.99, 49.99, '/storage/thumbnails/XHIwgKS56yAgG1Ww74e4ISaH0UgTsfXDAZfbatAj.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 14, 33),
(33, 'Adobe Illustrator CC 2015 from basic to advanced', 'This course helps you get all the knowledge from A-Z about Illustrator CC 2015, know how to apply it to your own vector graphics projects, illustrate & edit publications...', 79.99, 69.99, '/storage/thumbnails/SrfpQM34s9lAuYKklcobD3S6cTG5McTnNd70YkXV.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 15, 34),
(34, 'A guide to make a top selling Landing Page website for non-experts', 'The Ultimate Sales Landing Page Tutorial Course for Non-Professionals will guide you to make landing pages even if you don\'t know anything about IT.', 89.99, 49.99, '/storage/thumbnails/9vUmc2Fkfoe5tmUilqbOQMw2J8HX6Uemlsl3akH8.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 16, 35),
(35, 'Become a photoshop specialist of architecture, interior, planning', 'Help you improve your thinking and skills in using Photoshop proficiently in the field of Architecture, Interior Design, Planning professionally, suitable for beginners or not proficient in Photoshop.', 125.99, 59.99, '/storage/thumbnails/Hjlm7hm584GrHvK88Wv7pfngAPEOTw9FEntTMGzh.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 17, 36),
(36, 'The secret to buying and selling real estate safely and effectively', 'The real estate trading course shares how you can easily conduct house purchase and sale transactions, and transfer land use rights safely and effectively. Moreover, Lawyer Khoa with 15 years of experience in consulting and resolving disputes on Real estate will share tips on circumventing the law to handle difficult situations.', 190.99, 99.99, '/storage/thumbnails/ieCOsYVITw8AwQ3Z8zRBig4wD4BpmY8mePr5FB0Z.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 22, 37),
(37, 'Visual effect magic like Zach King', 'The course helps you to fully master After Effects software, understand the process of making Visual effects for videos, thereby creating effects-filled movies following the current hot trend such as Zach King, Tiktok, a movie. interesting ad..', 120.99, 69.99, '/storage/thumbnails/SHkh29mNqO1pwtJ7DRyy396KlZeF8iktIU8DU3Sf.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 70, 38),
(38, 'Feng Shui application for Real estate', 'Help you understand and apply the five elements yin and yang, Feng Shui theory in building architecture, increasing fortune for life, work and relationships. Effective support for Real estate work', 90.99, 59.99, '/storage/thumbnails/w76BkHRveMJgGmQrNUf9uGGRV4htOARLKL0vRVpt.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 63, 39),
(39, 'The secrets of breakthrough Business Online', 'Selling course on e-commerce platform For the first time, you will know the SECRETS of starting a successful e-commerce business on the Internet with just 0 dong capital, how to do Business Online with experts for the first time. for you', 100.99, 39.99, '/storage/thumbnails/C7z6ZCZnTa3uYaHFP8ZurzjjKMSAHaXvgO4GtLzO.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 23, 40),
(40, 'The secret to retail thousands of orders on Shopee, Zalo and Facebook', 'Breakthrough in revenue thanks to sales secrets on e-commerce sites', 120.99, 19.99, '/storage/thumbnails/XlctmtQB5aiXGUmkeVlQdKea2StwLQVh6zo4079G.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 23, 41),
(41, 'Startup from A to Z', 'A guide to the startup process, how to set up a perfect startup plan. How to raise capital effectively and the best marketing strategies today!', 125.99, 85.99, '/storage/thumbnails/ZN664gLMsiwKmwJ5DDtyEASpQP5lSW8V5kPrPbdV.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 24, 42),
(42, 'Starting a business and selling on the Internet successfully', 'Know the tricks and bloody lessons for your successful Internet business: Calculating break-even points, calculating costs, predicting the market, choosing and investing the right products...', 80.99, 69.99, '/storage/thumbnails/bGKnjhaNcbudkHOuFZYMsFOdUEbgAUKp8wie1Wk8.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 23, 43),
(43, 'Increase breakthrough sales by building brands on the Internet', 'Building a personal brand on the Internet, thereby increasing sales suddenly, quickly and sustainably', 80.99, 69.99, '/storage/thumbnails/Ii8IxkWqgju5LgjsZfUjOLZ6K1GAOZRMdoJ35S1V.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 30, 44),
(44, 'Building and optimizing Personal brand', 'The secret to building a successful Personal brand, affirming your personal values, helping you make great strides in building the most effective communication strategy', 149.99, 99.99, '/storage/thumbnails/K2SWY4KSP0rdfa0IC8uAgLZ5P0WFdfXB4rNBE2w5.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 30, 45),
(45, 'Read the opponent in negotiate', 'Decipher and understand the enemy right from the small gestures and attitudes, helping you get the key to perform Negotiate, negotiate and conquer the opponent quickly!', 60.99, 54.99, '/storage/thumbnails/l4O8fxWnESm94AAAlje4vs3CzATyneUxHzv2b8M2.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 31, 46),
(46, 'Negotiate professional by English', 'Elevate your business with professional English Negotiate skills.', 80.99, 69.99, '/storage/thumbnails/3U7isfZWbODsBgt5pDBhdACqJ1Y2GLHPa62XYEIN.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 31, 47),
(47, 'CEO and the art of human resources management', 'Own the staff you\'ve always wanted with simple, easy and effective arts', 188.99, 124.99, '/storage/thumbnails/E1hfBqv91mLnaP1qqCJofWfOnKhSp2Rs1EISHmyF.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 33, 48),
(48, 'Good boss don\'t do it all', 'Learn how good boss work, change your mindset, change the way you delegate, train your team to stay busy at work.', 70.99, 34.99, '/storage/thumbnails/OYG2gxmcAGRYTQdXMfTsjltWoFhRD3QMrkYEIXSN.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 33, 49),
(49, 'Business administration experience in foreign corporations', 'Grasp the practical knowledge being applied daily by multinational companies and corporations to analyze the business environment and make actionable decisions..', 80.99, 45.99, '/storage/thumbnails/5HEsvjpRyLSE4e1M9AjutpLy5OcimY16a9bV1jsh.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 32, 50),
(50, 'Sale in Facebook from A to Z', 'Optimize ads, increase sales and close rates', 80.99, 59.99, '/storage/thumbnails/WdJRhmzUXuzg845XqZXw2VdcgCJmYgb7TsekQH9Y.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 5, 51),
(51, 'TikTok : Reach 100,000+ customers in 30 days at a cost of 0 VND', 'Short videos and TikTok are gaining more and more importance, and are indispensable online marketing channels... GET STARTED NOW!', 49.99, 29.99, '/storage/thumbnails/G5YX3orQgVd5wJzyiFjk7KucmoODXmMtQ2RRbsVT.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 23, 52),
(52, '36 rejection handling strategies', 'Handling Rejection - Successfully Closing Sales.', 80.99, 59.99, '/storage/thumbnails/zesUBim7b50yHMT6rtDvfW1IA3S17jHaog8OtnbR.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 40, 53),
(53, 'The art of insurance consulting through Telesales', 'Helping you to practice skills and grasp the top tips in Telesale in insurance consulting.', 60.99, 49.99, '/storage/thumbnails/LZHIU3dtMEfLiJerHNuc9bZLgh6WEnCS6nQDRtfi.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 40, 54),
(54, 'The secret to creating viral ads and livestreaming Online selling', 'The secret for you to explode creatively with Viral advertising ideas, capture and write the best viral content, attract customers, and excel PR with Livestream on many different internet channels', 100.99, 59.99, '/storage/thumbnails/fzRvMySoLXaJQSMl8TEDixVYmZ10SUDmpqBstJj2.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 23, 25),
(55, 'Selling by video marketing and livestream', 'This course will help you build a sales channel with a large number of customers on Facebook with Video Marketing and Livestream.', 100.99, 59.99, '/storage/thumbnails/vmDYnGxk4i8mqWnhnjSjXdLCZP9UfGAwcwfxZfZE.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 10, 55),
(56, 'Become a Super Salesman with the Magic Sales Questionnaire', 'Get a set of magic sales questions to help you succeed in every transaction whether in person or over the phone..', 70.99, 59.99, '/storage/thumbnails/e6blitGJEuW9XVzhiLfuAhga65DYhjLnuXD4JTO3.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 43, 56),
(57, 'Retail Queen', 'Business is always a career chosen by many people to start a business, the course will help you grasp the knowledge and experience, especially the art of selling and closing a sale quickly that you never knew..', 70.99, 59.99, '/storage/thumbnails/fJFRT5284fhMyoAhHgUWkOhAWXvFIlBozGzpPklb.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 43, 57),
(58, 'Data Structures and Algorithms with LeetCode', 'The course on data structures and algorithms with java helps you review all your knowledge of data structures and algorithms, solving dozens of LeetCode lessons.', 100.99, 69.99, '/storage/thumbnails/BSy9RZhIfIce0XKg33Eweu1EG1hQJi5ChGYmdNIM.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 45, 58),
(59, 'Program iOS Swift', 'Help you master the skill of Program iOS Swift.', 50.99, 29.99, '/storage/thumbnails/Vl1uy9xKcFty8ky01iDjBTf8IvTQ08pYjnMkSUkZ.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 45, 59),
(60, 'Lear C/C++ from A to Z', 'The program C/C++ Online course equips you with basic to advanced C/C++ programming skills, illustrated through simple practice exercises. At the same time, it helps you to grasp the basic knowledge of learning C++/C so that you can continue to learn more languages.', 60.99, 49.99, '/storage/thumbnails/0OH6xVYsM3XbAI6fCPyrG5Ytx63NA6iLoPIggAhb.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 45, 60),
(61, 'Self-healing without drugs', 'Synthesize flapping, vibration, movement, breathing, eating, Meditation, yoga and Qigong according to the principles of medical nutrition and traditional learning', 65.99, 59.99, '/storage/thumbnails/cpCRx5XUigNXaCYRbXnZkPCaRc8GeFwjcCnyNcim.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 48, 61),
(62, 'The secret to practicing Yin and Yang Qigong to control and cure diseases', 'Practice Qigong at home - sustainable health - happy life.', 149.99, 89.99, '/storage/thumbnails/XAicrveLsCg0f0myLw9JFCkB69oZvnHw0cqx2CC9.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 48, 62),
(63, 'Instructions to practice Fitness at home effectively in 8 weeks', 'Exercise health, create aesthetic physique, strong and supple body with Fitness', 70.99, 59.99, '/storage/thumbnails/kAWRjbEkA2pLzHf5L5CTSPwKFFfysNsUvKjcW8Oi.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 47, 63),
(64, 'Fitness - 30 days to regain the shape of the twenties', 'The course helps women regain their beauty 3 rounds after 30 days', 70.99, 59.99, '/storage/thumbnails/9DyK52aoKCRXfUxWj5fyklIpwhBjFXLqBhmZc5Z7.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 47, 64),
(65, 'Respond and relieve stress, from A - Z', 'Join the course so that stress and its consequences are no longer your obsession.', 80.99, 69.99, '/storage/thumbnails/1SGNIdLwysPhdMiAFJ5emQSBiC549wSt8IU5Vz5b.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 49, 65),
(66, 'Identifying postpartum depression and how to avoid it', 'Surely all of us know the harmful effects of depression. So what do you need to do to prevent and avoid dangerous diseases in this 4.0 digital age and especially postpartum depression?', 80.99, 69.99, '/storage/thumbnails/E4W5ElP7sYAeHtSGuR3vyrEh9ooTHKRc4zMtYcG1.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 49, 66),
(67, 'Bartending famous Taiwanese milk tea and fruit detox tea', 'Learn the formula of Bartending milk tea, the hottest fruit detox tea on the market. Confidently open a shop, increase competitiveness with a different menu.', 80.99, 54.99, '/storage/thumbnails/5mOUcVCHZIAWR9iDcRn2daKHWhLS4ovx7kDTzfXd.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 54, 67),
(68, 'Full set of winter drinks Bartending', 'Help increase sales for beverage stores next winter.', 70.99, 39.99, '/storage/thumbnails/OZcJQrjANY9UWsh43M7KSqsXyGMSUuJ8dJQBO3XL.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 54, 68),
(69, 'Basic Baking Nerikiri (Wagashi) Techniques', 'Hand-made lovely Nerikiri cakes with countless shapes, beautiful colors, satisfying passion, saving money and food safety', 70.99, 59.99, '/storage/thumbnails/AMUkpiQkg9uWzdfpbm8W8Y1Qjh8t6Qd54bjbnrkM.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 55, 69),
(70, 'Baking soft noodles and pizza at home by yourself', 'Help you quickly grasp the recipe and technique and secret to Baking pasta and pizza at home.', 60.99, 39.99, '/storage/thumbnails/yJN3cTZNwZZAQEpUKePwQq9DOuPPgPmwDWkh9cgJ.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 55, 70),
(71, 'Knowledgeable mother - 360-day comprehensive Thai teaching', 'The course helps you become a wise mother, with comprehensive knowledge of Thai religion, knowing how to raise children from the womb and giving birth to a comprehensive health.', 120.99, 19.99, '/storage/thumbnails/tAfEVOVir2uaHDRbnnWr0OqPmHMFNMTgcj7ur0h0.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 64, 41),
(72, 'Parents learn their children to be successful', 'The parenting course for successful children helps parents gain great knowledge to understand and teach their children interestingly, gently, connecting a happy, loving family.', 70.99, 49.99, '/storage/thumbnails/qV4RcCOrX8ZKWsH35s2CdAi4YY0K9ziN4zNXAMh6.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 65, 71),
(73, 'Baby bath - 10 golden days of newborn care', 'Don\'t miss the extremely important hygiene step to keep your baby completely healthy right from birth.', 80.99, 49.99, '/storage/thumbnails/ym8cNjOmWzyXg2Q74ShPkpi49RY8W9c4qjnkwIpI.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 66, 72),
(74, 'Essence of TAZAMA - Essence of the nectar triangle', 'This Tazama course is designed just for you, containing all the secret techniques of the honey triangle to help you maintain your attractive youthful beauty, keep the fire in your room.', 120.99, 49.99, '/storage/thumbnails/hAor5ZdIbSjNLQT40CeBEC8CXDwCYoMrG2K9f4xK.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 69, 73),
(75, 'Great way to keep the fire of family happiness', 'Helping you have an overview of family life, love and marriage, conflicts and have the perfect solutions to resolve those conflicts, bringing a happy and fulfilling life.', 120.99, 49.99, '/storage/thumbnails/ZzHwhY7EeJ1pE7dqiNB6xzgZeXaSEV1JuUirAFvg.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 68, 74),
(76, '2 hours to be a great dad!', 'It\'s not difficult to become a great dad with just 2 hours with instructor Ha The Anh! The course helps dads know how to effectively raise and educate their children so that they can have the most perfect educational environment', 120.99, 69.99, '/storage/thumbnails/qc9EnKjdI7CU93FjOKBzenxzNn9MaqvAUbu3jWpi.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 66, 75),
(77, 'Top-notch media montage with Adobe premiere', 'Professional video editing course with Adobe Premiere fully equips you with the most basic knowledge about Adobe Premiere, professional editing thinking, giving you a solid foundation with the most professional editing profession.', 80.99, 69.99, '/storage/thumbnails/4jKY5YpA1X4gLYRgnHaxjGuW3O48rdjCPaFNLMGs.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 70, 76),
(78, 'After Effects Advanced ( VFX Basics )', 'Guide you to create your own animated clips with advanced and attractive effects and effects using Adobe After Effects software, helping you become a professional effects editor with an attractive salary.', 60.99, 49.99, '/storage/thumbnails/TsgHLE8T1m5wHESIaThE5uSfGu5oBBsnFtqEqQuF.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 70, 77),
(79, 'Learn photography from basic to advanced', 'The photography course that contains all the secrets of photography and photo manipulation will be revealed right away so you can get the best, best and most impressive photos!', 90.99, 59.99, '/storage/thumbnails/VPOToQbxMS31JpO6R3w4swO57fcXITi4ubl30aqn.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 71, 78),
(80, 'Basic photography', 'The basic photography course will help you confidently perform camera operations and professional photography skills, get amazing photos and one-of-a-kind moments in photography!', 80.99, 59.99, '/storage/thumbnails/mrroRT2gNM2sg1jL4o5XgVJ1gfPZti2SCSd6XkfD.jpg', '2023-05-25 11:28:48', '2023-05-25 11:28:48', 71, 78),
(82, 'Demo02', 'Demo01', 1.00, 2.00, '/storage/thumbnails/w8lnsTTYxnEu9caCRlgq7i3N5PTb1MibvJwPh4Q6.png', NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course_tag`
--

CREATE TABLE `course_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `course_tag`
--

INSERT INTO `course_tag` (`id`, `course_id`, `tag_id`) VALUES
(1, 15, 5),
(2, 10, 5),
(3, 20, 5),
(4, 30, 5),
(5, 55, 5),
(6, 38, 5),
(7, 68, 5),
(8, 23, 5),
(9, 33, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `faculty_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `departments`
--

INSERT INTO `departments` (`id`, `name`, `slug`, `faculty_id`, `created_at`, `updated_at`) VALUES
(1, 'Korean', 'korean', 1, NULL, NULL),
(2, 'English', 'english', 1, NULL, NULL),
(3, 'Chinese', 'chinese', 1, NULL, NULL),
(4, 'Japanese', 'japanese', 1, NULL, NULL),
(5, 'Marketing Online', 'marketing-online', 2, NULL, NULL),
(6, 'Google Ads', 'google-ads', 2, NULL, NULL),
(7, 'Seo', 'seo', 2, NULL, NULL),
(8, 'Branding', 'branding', 2, NULL, NULL),
(9, 'Content Marketing', 'content-marketing', 2, NULL, NULL),
(10, 'Video Marketing', 'video-marketing', 2, NULL, NULL),
(11, 'Excel', 'excel', 3, NULL, NULL),
(12, 'Word', 'word', 3, NULL, NULL),
(13, 'PowerPoint', 'powerpoint', 3, NULL, NULL),
(14, 'Advertising Design', 'advertising-design', 4, NULL, NULL),
(15, 'Design software', 'design-software', 4, NULL, NULL),
(16, 'Web design', 'web-design', 4, NULL, NULL),
(17, 'Photoshop', 'photoshop', 4, NULL, NULL),
(18, 'AutoCAD', 'autocad', 4, NULL, NULL),
(19, '3DSMAX', '3dsmax', 4, NULL, NULL),
(20, 'After effect', 'after-effect', 4, NULL, NULL),
(21, 'Interior architecture', 'interior-architecture', 4, NULL, NULL),
(22, 'Real estate', 'real-estate', 5, NULL, NULL),
(23, 'Business Online', 'business-online', 5, NULL, NULL),
(24, 'Startup', 'startup', 5, NULL, NULL),
(25, 'Make money Online', 'make-money-online', 5, NULL, NULL),
(26, 'Corporate governance', 'corporate-governance', 5, NULL, NULL),
(27, 'Securities', 'securities', 5, NULL, NULL),
(28, 'Dropshipping', 'dropshipping', 5, NULL, NULL),
(29, 'Accounting', 'accounting', 5, NULL, NULL),
(30, 'Personal brand', 'personal-brand', 6, NULL, NULL),
(31, 'Negotiate', 'negotiate', 6, NULL, NULL),
(32, 'Leadership skills', 'leadership-skills', 6, NULL, NULL),
(33, 'Human resources management', 'human-resources-management', 6, NULL, NULL),
(34, 'Memory training', 'memory-training', 6, NULL, NULL),
(35, 'Communicate', 'communicate', 6, NULL, NULL),
(36, 'Management skills', 'management-skills', 6, NULL, NULL),
(37, 'Present', 'present', 6, NULL, NULL),
(38, 'Voice practice', 'voice-practice', 6, NULL, NULL),
(39, 'Online selling', 'online-selling', 7, NULL, NULL),
(40, 'Telesales', 'telesales', 7, NULL, NULL),
(41, 'Livestream selling', 'livestream-selling', 7, NULL, NULL),
(42, 'Customer care', 'customer-care', 7, NULL, NULL),
(43, 'Strategy of sale', 'strategy-of-sale', 7, NULL, NULL),
(44, 'Program', 'program', 8, NULL, NULL),
(45, 'Programming language', 'programming-language', 8, NULL, NULL),
(46, 'Qigong', 'qigong', 9, NULL, NULL),
(47, 'Lose weight', 'lose-weight', 9, NULL, NULL),
(48, 'Meditation', 'meditation', 9, NULL, NULL),
(49, 'Reduce stress', 'reduce-stress', 9, NULL, NULL),
(50, 'Fitness and Gym', 'fitness-and-gym', 9, NULL, NULL),
(51, 'Love', 'love', 9, NULL, NULL),
(52, 'Yoga', 'yoga', 9, NULL, NULL),
(53, 'Massage', 'massage', 9, NULL, NULL),
(54, 'Bartending', 'bartending', 10, NULL, NULL),
(55, 'Baking', 'baking', 10, NULL, NULL),
(56, 'Beautify', 'beautify', 10, NULL, NULL),
(57, 'Horoscope', 'horoscope', 10, NULL, NULL),
(58, 'Magic', 'magic', 10, NULL, NULL),
(59, 'Music', 'music', 10, NULL, NULL),
(60, 'Musical instruments', 'musical-instruments', 10, NULL, NULL),
(61, 'Cuisine and Cooking', 'cuisine-and-cooking', 10, NULL, NULL),
(62, 'Dance', 'dance', 10, NULL, NULL),
(63, 'Feng Shui', 'feng-shui', 10, NULL, NULL),
(64, 'Pregnant', 'pregnant', 11, NULL, NULL),
(65, 'Teach smart children', 'teach-smart-children', 11, NULL, NULL),
(66, 'Baby care', 'baby-care', 11, NULL, NULL),
(67, 'The room', 'the-room', 12, NULL, NULL),
(68, 'Family happiness', 'family-happiness', 12, NULL, NULL),
(69, 'Married life', 'married-life', 12, NULL, NULL),
(70, 'Montage', 'montage', 13, NULL, NULL),
(71, 'Take photo', 'take-photo', 13, NULL, NULL),
(72, 'Techniques', 'techniques', 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `icon`) VALUES
(1, 'Foreign language', '<i class=\"bi bi-translate\"></i>'),
(2, 'Marketing', '<i class=\"bi bi-shop\"></i>'),
(3, 'Office Informatics', '<i class=\"bi bi-pc-display\"></i>'),
(4, 'Design', '<i class=\"bi bi-brush-fill\"></i>'),
(5, 'Business and Startup', '<i class=\"bi bi-graph-up-arrow\"></i>'),
(6, 'Soft skills', '<i class=\"bi bi-lightbulb\"></i>'),
(7, 'Sales', '<i class=\"bi bi-cart-check-fill\"></i>'),
(8, 'Information technology', '<i class=\"bi bi-code-slash\"></i>'),
(9, 'Health and Gender', '<i class=\"bi bi-house-heart-fill\"></i>'),
(10, 'Lifestyle', '<i class=\"bi bi-cup-hot-fill\"></i>'),
(11, 'Raise up child', '<i class=\"bi bi-person-check-fill\"></i>'),
(12, 'Marriage and Family', '<i class=\"bi bi-people-fill\"></i>'),
(13, 'Photography and Editing', '<i class=\"bi bi-camera-fill\"></i>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_13_092727_create_faculties_table', 1),
(6, '2023_05_13_155311_create_departments_table', 2),
(7, '2023_05_14_154523_create_courses_table', 3),
(8, '2023_05_14_155213_create_tags_table', 3),
(10, '2023_05_14_155359_create_course_tags_table', 4),
(11, '2023_05_15_172337_create_course_tag_table', 5),
(12, '2023_05_16_165251_create_bills_table', 6),
(13, '2023_05_16_165738_create_bill_course_table', 6),
(17, '2023_05_17_050241_create_roles_table', 7),
(18, '2023_05_17_050255_create_permissions_table', 7),
(19, '2023_05_17_050400_create_role_user_table', 7),
(20, '2023_05_17_050506_create_permission_role_table', 7),
(21, '2023_05_17_072034_add_column_table_permission', 8),
(22, '2023_05_17_102442_create_sliders_table', 9),
(25, '2023_05_20_104332_create_reviews_table', 11),
(26, '2023_05_20_170124_create_chapters_table', 12),
(28, '2023_05_25_044350_add_columns_table_users', 13),
(29, '2023_05_27_074007_create_wishlists_table', 14),
(30, '2023_05_27_074326_create_carts_table', 14),
(31, '2023_06_05_095045_create_visitors_table', 15),
(36, '2023_06_06_074756_create_notifications_table', 16),
(37, '2023_06_06_090938_create_notification_user_table', 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'Demo03', '<p><strong>T&agrave;i khoản đ&atilde; được tạo</strong></p>', '2023-06-06 09:24:29', '2023-06-08 02:13:49'),
(2, 2, 'Thông báo Demo', '<p><strong><span style=\"color: rgb(147, 101, 184);\">Th&ocirc;ng b&aacute;o Demo</span></strong></p>', '2023-06-06 02:42:15', '2023-06-06 02:42:15'),
(3, 2, 'Demo02', '<p><strong><span style=\"color: rgb(235, 107, 86);\">Demo02</span></strong></p>', '2023-06-06 02:43:37', '2023-06-06 02:43:37'),
(4, 2, 'Demo03', '<p><strong><span style=\"color: rgb(235, 107, 86);\">Demo03</span></strong></p>', '2023-06-06 02:48:30', '2023-06-06 03:03:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notification_user`
--

CREATE TABLE `notification_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notification_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `notification_user`
--

INSERT INTO `notification_user` (`id`, `notification_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 0, NULL, NULL),
(2, 1, 4, 0, NULL, NULL),
(3, 1, 5, 0, NULL, NULL),
(4, 1, 6, 0, NULL, NULL),
(6, 4, 3, 0, NULL, NULL),
(10, 2, 2, 0, NULL, NULL),
(11, 3, 3, 0, NULL, NULL),
(12, 5, 17, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `key_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`, `key_code`, `created_at`, `updated_at`, `parent_id`) VALUES
(1, 'Khoa', 'Khoa', '', NULL, NULL, 0),
(2, 'Danh sách khoa', 'Danh sách khoa', 'faculty_list', NULL, NULL, 1),
(3, 'Thêm khoa', 'Thêm khoa', 'faculty_create', NULL, NULL, 1),
(4, 'Sửa khoa', 'Sửa khoa', 'faculty_edit', NULL, NULL, 1),
(5, 'Xoá khoa', 'Xoá khoa', 'faculty_delete', NULL, NULL, 1),
(6, 'Bộ môn', 'Bộ môn', '', NULL, NULL, 0),
(7, 'Danh sách bộ môn', 'Danh sách bộ môn', 'department_list', NULL, NULL, 6),
(8, 'Thêm bộ môn', 'Thêm bộ môn', 'department_create', NULL, NULL, 6),
(9, 'Sửa bộ môn', 'Sửa bộ môn', 'department_edit', NULL, NULL, 6),
(10, 'Xoá bộ môn', 'Xoá bộ môn', 'department_delete', NULL, NULL, 6),
(11, 'Khoá học', 'Khoá học', '', NULL, NULL, 0),
(12, 'Danh sách khoá học', 'Danh sách khoá học', 'course_list', NULL, NULL, 11),
(13, 'Thêm khoá học', 'Thêm khoá học', 'course_create', NULL, NULL, 11),
(14, 'Sửa khoá học', 'Sửa khoá học', 'course_edit', NULL, NULL, 11),
(15, 'Xoá khoá học', 'Xoá khoá học', 'course_delete', NULL, NULL, 11),
(16, 'Tài khoản', 'Tài khoản', '', NULL, NULL, 0),
(17, 'Danh sách tài khoản', 'Danh sách tài khoản', 'user_list', NULL, NULL, 16),
(18, 'Thêm tài khoản', 'Thêm tài khoản', 'user_create', NULL, NULL, 16),
(19, 'Sửa tài khoản', 'Sửa tài khoản', 'user_edit', NULL, NULL, 16),
(20, 'Xoá tài khoản', 'Xoá tài khoản', 'user_delete', NULL, NULL, 16),
(21, 'Loại tài khoản', 'Loại tài khoản', '', NULL, NULL, 0),
(22, 'Danh sách loại tài khoản', 'Danh sách loại tài khoản', 'role_list', NULL, NULL, 21),
(23, 'Thêm loại tài khoản', 'Thêm loại tài khoản', 'role_create', NULL, NULL, 21),
(24, 'Sửa loại tài khoản', 'Sửa loại tài khoản', 'role_edit', NULL, NULL, 21),
(25, 'Xoá loại tài khoản', 'Xoá loại tài khoản', 'role_delete', NULL, NULL, 21),
(26, 'Hoá đơn', 'Hoá đơn', '', NULL, NULL, 0),
(27, 'Danh sách hoá đơn', 'Danh sách hoá đơn', 'bill_list', NULL, NULL, 26),
(28, 'Thêm hoá đơn', 'Thêm hoá đơn', 'bill_create', NULL, NULL, 26),
(29, 'Sửa hoá đơn', 'Sửa hoá đơn', 'bill_edit', NULL, NULL, 26),
(30, 'Xoá hoá đơn', 'Xoá hoá đơn', 'bill_delete', NULL, NULL, 26),
(31, 'Đánh giá', '', '', NULL, NULL, 0),
(32, 'Danh sách đánh giá', 'Danh sách bình luận', 'review_list', NULL, NULL, 31),
(33, 'Thêm đánh giá', 'Thêm bình luận', 'review_create', NULL, NULL, 31),
(34, 'Sửa đánh giá', 'Sửa bình luận', 'review_edit', NULL, NULL, 31),
(35, 'Xoá đánh giá', 'Xoá bình luận', 'review_delete', NULL, NULL, 31),
(36, 'Mục lục', 'Mục lục', '', NULL, NULL, 0),
(37, 'Danh sách mục lục', 'Danh sách mục lục', 'chapter_list', NULL, NULL, 36),
(38, 'Thêm mục lục', 'Thêm mục lục', 'chapter_create', NULL, NULL, 36),
(39, 'Sửa mục lục', 'Sửa mục lục', 'chapter_edit', NULL, NULL, 36),
(40, 'Xoá mục lục', 'Xoá mục lục', 'chapter_delete', NULL, NULL, 36),
(41, 'Slider', 'Slider', '', NULL, NULL, 0),
(42, 'Danh mục slider', 'Danh mục slider', 'slider_list', NULL, NULL, 41),
(43, 'Thêm slider', 'Thêm slider', 'slider_create', NULL, NULL, 41),
(44, 'Sửa slider', 'Sửa slider', 'slider_edit', NULL, NULL, 41),
(45, 'Xoá slider', 'Xoá slider', 'slider_delete', NULL, NULL, 41);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`) VALUES
(85, 1, 2),
(86, 1, 3),
(87, 1, 4),
(88, 1, 5),
(89, 1, 7),
(90, 1, 8),
(91, 1, 9),
(92, 1, 10),
(93, 1, 12),
(94, 1, 13),
(95, 1, 14),
(96, 1, 15),
(97, 1, 17),
(98, 1, 18),
(99, 1, 19),
(100, 1, 20),
(101, 1, 22),
(102, 1, 23),
(103, 1, 24),
(104, 1, 25),
(105, 1, 27),
(106, 1, 28),
(107, 1, 29),
(108, 1, 30),
(109, 1, 32),
(110, 1, 33),
(111, 1, 34),
(112, 1, 35),
(113, 1, 37),
(114, 1, 38),
(115, 1, 39),
(116, 1, 40),
(117, 1, 42),
(118, 1, 43),
(119, 1, 44),
(120, 1, 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) NOT NULL,
  `rate` double(8,2) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `reviews`
--

INSERT INTO `reviews` (`id`, `content`, `rate`, `status`, `course_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Khoá học rất hay', 5.00, 1, 26, 2, '2023-05-27 10:23:20', '2023-05-27 10:23:27'),
(3, 'Bài giảng rất chi tiết', 4.50, 1, 26, 3, '2023-05-18 11:01:59', '2023-05-19 11:02:04'),
(4, 'Thank you very much', 5.00, 1, 26, 2, '2023-05-27 11:52:47', '2023-05-27 11:52:47'),
(5, 'Khoá học rất hay', 5.00, 1, 12, 2, '2023-05-27 22:13:00', '2023-05-27 22:13:00'),
(6, 'Amazing good job!', 1.00, 1, 12, 2, '2023-05-27 22:36:18', '2023-05-27 22:36:18'),
(7, 'Test comment', 5.00, 1, 12, 2, '2023-05-27 22:41:54', '2023-05-27 22:41:54'),
(8, 'test commnet 02', 5.00, 1, 12, 2, '2023-05-27 22:49:39', '2023-05-27 22:49:39'),
(9, 'Tuyệt vời', 5.00, 1, 13, 2, '2023-05-27 22:51:02', '2023-05-27 22:51:02'),
(10, 'Khoá học hay vl', 1.00, 1, 1, 2, '2023-05-31 10:58:30', '2023-05-31 10:58:30'),
(11, 'Khoá học hay', 1.00, 1, 18, 2, '2023-06-07 12:10:09', '2023-06-07 12:10:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Super admim - q5nguyen@gmail.com'),
(2, 'student', 'Sinh viên'),
(3, 'teacher', 'Giảng viên'),
(4, 'manager', 'Quản lý'),
(5, 'hacker', 'hacker đẳng cấp vip pro'),
(11, 'block', 'Tài khoản bị khoá');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(2, 2, 1, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 4, 3, NULL, NULL),
(5, 5, 3, NULL, NULL),
(6, 6, 3, NULL, NULL),
(7, 7, 3, NULL, NULL),
(8, 8, 3, NULL, NULL),
(9, 9, 3, NULL, NULL),
(10, 10, 3, NULL, NULL),
(11, 11, 3, NULL, NULL),
(12, 12, 3, NULL, NULL),
(13, 13, 3, NULL, NULL),
(14, 14, 3, NULL, NULL),
(15, 15, 3, NULL, NULL),
(16, 16, 3, NULL, NULL),
(17, 17, 3, NULL, NULL),
(18, 18, 3, NULL, NULL),
(19, 19, 3, NULL, NULL),
(20, 20, 3, NULL, NULL),
(21, 21, 3, NULL, NULL),
(22, 22, 3, NULL, NULL),
(23, 23, 3, NULL, NULL),
(24, 24, 3, NULL, NULL),
(25, 25, 3, NULL, NULL),
(26, 26, 3, NULL, NULL),
(27, 27, 3, NULL, NULL),
(28, 28, 3, NULL, NULL),
(29, 29, 3, NULL, NULL),
(30, 30, 3, NULL, NULL),
(31, 31, 3, NULL, NULL),
(32, 32, 3, NULL, NULL),
(33, 33, 3, NULL, NULL),
(34, 34, 3, NULL, NULL),
(35, 35, 3, NULL, NULL),
(36, 36, 3, NULL, NULL),
(37, 37, 3, NULL, NULL),
(38, 38, 3, NULL, NULL),
(39, 39, 3, NULL, NULL),
(40, 40, 3, NULL, NULL),
(41, 41, 3, NULL, NULL),
(42, 42, 3, NULL, NULL),
(43, 43, 3, NULL, NULL),
(44, 44, 3, NULL, NULL),
(45, 45, 3, NULL, NULL),
(46, 46, 3, NULL, NULL),
(47, 47, 3, NULL, NULL),
(48, 48, 3, NULL, NULL),
(49, 49, 3, NULL, NULL),
(50, 50, 3, NULL, NULL),
(51, 51, 3, NULL, NULL),
(52, 52, 3, NULL, NULL),
(53, 53, 3, NULL, NULL),
(54, 54, 3, NULL, NULL),
(55, 55, 3, NULL, NULL),
(56, 56, 3, NULL, NULL),
(57, 57, 3, NULL, NULL),
(58, 58, 3, NULL, NULL),
(59, 59, 3, NULL, NULL),
(60, 60, 3, NULL, NULL),
(61, 61, 3, NULL, NULL),
(62, 62, 3, NULL, NULL),
(63, 63, 3, NULL, NULL),
(64, 64, 3, NULL, NULL),
(65, 65, 3, NULL, NULL),
(66, 66, 3, NULL, NULL),
(67, 67, 3, NULL, NULL),
(68, 68, 3, NULL, NULL),
(69, 69, 3, NULL, NULL),
(70, 70, 3, NULL, NULL),
(71, 71, 3, NULL, NULL),
(72, 72, 3, NULL, NULL),
(73, 73, 3, NULL, NULL),
(74, 74, 3, NULL, NULL),
(75, 75, 3, NULL, NULL),
(76, 76, 3, NULL, NULL),
(77, 77, 3, NULL, NULL),
(78, 78, 3, NULL, NULL),
(79, 79, 1, NULL, NULL),
(80, 1, 1, NULL, NULL),
(81, 80, 1, NULL, NULL),
(82, 81, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`id`, `thumbnail`, `course_id`, `created_at`, `updated_at`) VALUES
(1, '/storage/sliders/oWHw3WUS8l6nSgcJv2dBxaUYweT8jf4E92NKdqfQ.jpg', 27, NULL, NULL),
(2, '/storage/sliders/aFc1GYUc7a0pxrz5ugNIiqGZtxPSTZirAkWaRuY0.jpg', 21, NULL, NULL),
(3, '/storage/sliders/eVu3XuBolvDeK58dLDw76Xhy8ZcgMv2IiqXIUFQa.jpg', 22, NULL, NULL),
(4, '/storage/sliders/ixiWr5fhF9IUQdZglZzlra8mxKmWZqOXpwjG8XQK.jpg', 1, NULL, NULL),
(5, '/storage/sliders/I3EPWFFJkJf31dIhYWJLTOoeSvGXYWf8ppLGV7iq.jpg', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(1, 'best_seller'),
(2, 'special_offer'),
(3, 'new_release'),
(4, 'most_popular'),
(5, 'vip');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `birth_day` date DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `description`, `birth_day`, `phone_number`, `address`, `thumbnail`) VALUES
(1, 'Nguyễn Văn Quý', 'quy@gmail.com', NULL, '$2y$10$B4RevL6s2yE.NQXvCFf5qOwmuHO6WwRTFovjHzSLQFCqZ6xmokhl.', NULL, '1993-02-26 14:00:00', '2023-06-05 23:33:09', 'Lối nhỏ - Đen Vâu', '2023-06-06', '0986295956', 'Tỉnh Thái Bình', '/storage/thumbnails/cm3LPStm6TghYCsRXsxQpAq43Lpk1fWhNSDpBHQF.png'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$k1lnsDn6Y6jxCnB7udwoNuvD.MvVylD9c0J1IGJUE17jh6a/3je6K', NULL, '2023-05-17 20:46:28', '2023-06-08 01:43:16', 'Lối nhỏ - Đen Vâu', '1998-02-26', '0707225588', 'Tỉnh Thái Bình', '/storage/thumbnails/cm3LPStm6TghYCsRXsxQpAq43Lpk1fWhNSDpBHQF.png'),
(3, 'Bino', 'bino@gmail.com', NULL, '$2y$10$WznRTyocUjkXg/Oih4FR0eL3tMCQslCsgK7b1qayAnDcA8GQ67HbK', NULL, '2023-05-25 03:54:46', '2023-05-25 03:54:46', 'Bino gossip English', '1992-07-23', '0795283741', 'Tỉnh Bắc Kạn', '/storage/thumbnails/hHmwMOLycduONLenC5ygWMvKW93BM9LF5WUxcc5j.jpg'),
(4, 'Hien Rau', 'hienrau@gmail.com', NULL, '$2y$10$ZSqecAnwv4BvF9VIUu6ELOBd3lPQ55Hnc4rR5ADlXeWqeRYNwujy6', NULL, '2023-05-25 03:54:46', '2023-05-25 03:54:46', 'Learn guitar accompaniment to seduce girls', '1990-02-11', '0637987154', 'Tỉnh Cao Bằng', '/storage/thumbnails/gpyfSgNVKicmDmqP6PJitmP2f6dkk7rUsVSe0HJx.jpg'),
(5, 'Dinh Hong Linh', 'dinhhonglinh@gmail.com', NULL, '$2y$10$qlhFnmBHXAhTk3DIvgaTmOIOSk21uVkUPXNP.ZoVJCkF2NDvW3Nwe', NULL, '2023-05-25 03:54:46', '2023-05-25 03:54:46', 'Help you master Excel through 100 topics from basic to advanced.', '1990-03-13', '0387116273', 'Tỉnh Quảng Ngãi', '/storage/thumbnails/8kjEQXb0AfyAe6Lm0dp5QXf334bRrPgJeeouokRF.jpg'),
(6, 'Nguyen Quang Thuan', 'nguyenquangthuan@gmail.com', NULL, '$2y$10$8LVFtwG01RFGZkWGa4zCI.8YxW5tvYENLrdm64xihQom.QCW5rQF6', NULL, '2023-05-25 03:54:46', '2023-05-25 03:54:46', 'The enthusiastic course is adapted from the knowledge system in the form of an easy-to-remember Mindmaster mind map. The content has been practically tested, condensed and optimized with over 60 offli...', '1993-03-04', '0832719770', 'Tỉnh Trà Vinh', '/storage/thumbnails/6QWsi32lKSMexbl2NXVHSvkCsvnE5qKQwFhYHxCZ.jpg'),
(7, 'Mai Xuan Huy', 'maixuanhuy@gmail.com', NULL, '$2y$10$iNy3vzw5gkmDi.cN2w2AiOaROvHxnU1/R4LGhF6QGb2pZBuDhJV.K', NULL, '2023-05-25 03:54:46', '2023-05-25 03:54:46', 'The course will help you to add your knowledge of Photoshop in a methodical way, easy to learn and effective, along with useful tips, unique skills on photo compositing and image editing.', '1990-01-06', '0246663459', 'Tỉnh Quảng Ngãi', '/storage/thumbnails/vt2tyqyRBSlbuWbX2mJeJBOU9hzOAh73Cpe8hFB9.jpg'),
(8, 'Nguyen Duc Viet', 'nguyenducviet@gmail.com', NULL, '$2y$10$FS5MSzWwE6ON3/D2w0HVDOf.6Yj4spgz8fEFGL5iOwrx3xaI53oGa', NULL, '2023-05-25 03:54:46', '2023-05-25 03:54:46', 'BOOTSTRAP 4, HTML5/CSS3 course helps you master skills, methods, effects,... cutting Web from Design files to help master knowledge of CSS, HTML, understand Bootstrap and Web cutting skills with Illus...', '1997-01-28', '0748915598', 'Tỉnh Đắk Lắk', '/storage/thumbnails/CzDWJmNZldS5AC1mLdJkxHG5mdckA6EABaQuxL24.jpg'),
(9, 'Vu Quoc Tuan', 'vuquoctuan@gmail.com', NULL, '$2y$10$LkoNXR.uo8Fh3DQTSNOxquhM/JbZpfAe09CoUCjjjoOKPW/oaU1QK', NULL, '2023-05-25 03:54:46', '2023-05-25 03:54:46', 'Python Online course from Zero to Hero with experts to help you have a good foundation from Python language to build Website, Game, Application yourself', '1993-02-17', '0237988699', 'Tỉnh Nam Định', '/storage/thumbnails/ZVJHbmqa8dRHSPT1RjDGi3hjgtp4dSxXAf2AWQFY.jpg'),
(10, 'Phan Van Truong', 'phanvantruong@gmail.com', NULL, '$2y$10$MN.ey0KfNJIece.y1L0bG.x5jTUGR/1bM/ZYNJILxZA6gN.06usK2', NULL, '2023-05-25 03:54:46', '2023-05-25 03:54:46', 'Reveal the secret to communicate effectively, know how to negotiate to achieve your goals, build good relationships.', '1993-02-25', '0880223967', 'Thành phố Hồ Chí Minh', '/storage/thumbnails/Bp4ZGlqqk9mNDMJ4BM4dke3uxXpsgURPnHlyzh04.jpg'),
(11, 'Nguyen Tan Trung', 'nguyentantrung@gmail.com', NULL, '$2y$10$78K0oKjs0065A7nBBGKYlOgUhxWIAgkY.6Tg/a5r901OP1rfHg.s6', NULL, '2023-05-25 03:54:46', '2023-05-25 03:54:46', 'The course is for business owners, individuals who are doing business or want to start a business in the F&B industry.', '1998-08-04', '0359635631', 'Tỉnh Hà Tĩnh', '/storage/thumbnails/t1dAYEzwaFKybNxK596Bty43q6QH1bkrfkGZoyeg.jpg'),
(12, 'Nguyen Hieu', 'nguyenhieu@gmail.com', NULL, '$2y$10$3Ib6/q0ztMZTTAbFbVXCK.alZXe81wlH12nwKa7BnMxQryrzJC736', NULL, '2023-05-25 03:54:47', '2023-05-25 03:54:47', 'Practicing basic yoga at home helps improve your mental and physical health. Maximize the cost of studying at the center', '1999-05-04', '0470571476', 'Tỉnh Lâm Đồng', '/storage/thumbnails/0rZdUbDeto37QLMd58PmPOEqnEylcMbNuCLsBUKm.jpg'),
(13, 'Nguyen Thanh Long', 'nguyenthanhlong@gmail.com', NULL, '$2y$10$dGQ/t5dknazgi./DlKUS6OTuv3Bnn78VD7vZx83ExCbFhjRd4p2Be', NULL, '2023-05-25 03:54:47', '2023-05-25 03:54:47', 'Basic knowledge that any successful person should have.', '1994-09-27', '0934021746', 'Tỉnh Hưng Yên', '/storage/thumbnails/kV5gJYcCwoHXEY9JwfdN8qxgYnVgbKzAkzkuDVNi.jpg'),
(14, 'Dang Trong Khang', 'dangtrongkhang@gmail.com', NULL, '$2y$10$mN2vImDyIanhDzu10SlBnernPBDp56S92DwuHYGQQRWTEIBn11pmu', NULL, '2023-05-25 03:54:47', '2023-05-25 03:54:47', 'Finance and securities course from investor Dang Trong Khang helps you avoid risks and pitfalls to increase passive income in a sustainable way', '1995-10-09', '0372054487', 'Tỉnh Bến Tre', '/storage/thumbnails/PyqaKkiRnGYNU9227Pq02Q8BFSXbO62ICifZVM92.jpg'),
(15, 'Nguyen Trung Kien', 'nguyentrungkien@gmail.com', NULL, '$2y$10$3ZczprFwNuYwB9.U6uurpuaVfh3Tt0hxiGzU.T0OMHShLmtMgmk4a', NULL, '2023-05-25 03:54:47', '2023-05-25 03:54:47', 'This startup course will help you to be professionally and professionally trained in methods of financial preparation, human resources, planning, preventive measures, minimizing risks when starting a...', '1996-12-03', '0912553261', 'Tỉnh Bạc Liêu', '/storage/thumbnails/LeXkskiTMYDXZ5uzEILa9aEKtIYvsPUslAxpOqa5.jpg'),
(16, 'Nguyen Trong Trung', 'nguyentrongtrung@gmail.com', NULL, '$2y$10$rmMrKd8qGVGS5A2YnRsoluUu18NzVyHjifhY0t0hdI0J.4GVq.nF6', NULL, '2023-05-25 03:54:47', '2023-05-25 03:54:47', 'As a business owner, you need to know how to choose the best people but you are too busy to do it in person, this course will help you hire the best people.', '1992-04-19', '0198370341', 'Tỉnh Quảng Bình', '/storage/thumbnails/1DsFlSMcKjxRTodIVBvphRXjJQigCo51VbrDkfPh.jpg'),
(17, 'Nguyen Canh Tuan', 'nguyencanhtuan@gmail.com', NULL, '$2y$10$.DVRRO0REGxI2pU13KBF1.Iq5v30twrvlbg3/amd.f135ltQz8NEC', NULL, '2023-05-25 03:54:47', '2023-05-25 03:54:47', 'The intensive course helps students to pronounce all words in English STANDARD. Not only that, the course also teaches students how to be attached, express English naturally, as well as help improve E...', '1994-06-09', '0877461095', 'Tỉnh Điện Biên', '/storage/thumbnails/M0BlHuwhmCoRn1IKtVDBVYsMqsQ3uFRXAjdR20Vq.jpg'),
(18, 'Chau Thuy Trang', 'chauthuytrang@gmail.com', NULL, '$2y$10$xv2HUSn1iEVtMBAcQxBQ6eqSG0hIjp3PPCZO4U9E0jxtzOUJAQh6W', NULL, '2023-05-25 03:54:47', '2023-05-25 03:54:47', 'The communicate Korean course helps you master Korean vocabulary and grammar structures in communicate quickly to confidently learn and work in a Korean environment.', '1997-10-03', '0873119840', 'Tỉnh Quảng Ngãi', '/storage/thumbnails/XWlZEMPrcOvmRhyx1O2cmgWk2dB2xe8PoxYy8YUo.jpg'),
(19, 'Kim Min Su', 'kimminsu@gmail.com', NULL, '$2y$10$Wskj5ygg6lXA4aL3U9xS.OvWlFBmk.p1obZudq8XLT1VLVvrJb2By', NULL, '2023-05-25 03:54:47', '2023-05-25 03:54:47', 'Help you self-study Korean at home, reaching the elementary level.', '1994-11-02', '0576310059', 'Tỉnh Thái Bình', '/storage/thumbnails/qPBOnSQM9wRjIcCHjMBCVUBoqJkqYMlk2MokWxHr.jpg'),
(20, 'Nguyen Danh Van', 'nguyendanhvan@gmail.com', NULL, '$2y$10$Q0l.fOljqsnv2c2fBIUQruZA9hAh75FdHYRWaYEnjam6XcUx4bSH.', NULL, '2023-05-25 03:54:47', '2023-05-25 03:54:47', 'Regain basic Chinese, confidently communicate with natives.', '1991-02-16', '0647897191', 'Tỉnh Quảng Bình', '/storage/thumbnails/eONEi5l2PuTKQ0QO3QiND4aOrZ63SkJtF5Dr0Eir.jpg'),
(21, 'Thanh Truc', 'thanhtruc@gmail.com', NULL, '$2y$10$4XBpQkkFYlgQPLjys1StpO4ZTomJx5cspKmMG37Xjy7Sd32wKoiGu', NULL, '2023-05-25 03:54:47', '2023-05-25 03:54:47', 'Learn Japanese in a lively, exciting, and full of senses with a detailed, easy-to-understand and easy-to-apply curriculum.', '1990-06-20', '0711821148', 'Thành phố Hà Nội', '/storage/thumbnails/hBjxDtrT6X7weAkctIuPzTW6AFc7Hwx7Rd5tXL7m.jpg'),
(22, 'Luong Van Nam', 'luongvannam@gmail.com', NULL, '$2y$10$7a3bXGNn9n.b9o9dlqd9mORLfYbzpTmf.ZTfsYFTScfubjGoF.Y.a', NULL, '2023-05-25 03:54:47', '2023-05-25 03:54:47', 'The course updates the smartest features on Facebook to help you optimize advertising costs.', '2000-06-16', '0587625882', 'Tỉnh Sơn La', '/storage/thumbnails/edxjv7hU1Hfcwx4RSPTJtOZY18M1matfbvOwq6ow.jpg'),
(23, 'Nguyen Ngoc Long', 'nguyenngoclong@gmail.com', NULL, '$2y$10$5mLI/qSx/WGFgBt0uJyqQ.2VGotSZa.Afpz/LoV1D9y2rU17heBSq', NULL, '2023-05-25 03:54:47', '2023-05-25 03:54:47', 'The course on running google adwords helps students master how to run Google Ads ads, catch the latest trends in self-run for their products.', '1992-09-23', '0715143394', 'Tỉnh Bắc Ninh', '/storage/thumbnails/232VtC4srZ6tSnGRgjX9Hqkfxu0tTTN74lkrzVqa.jpg'),
(24, 'Pham Tuan Anh', 'phamtuananh@gmail.com', NULL, '$2y$10$FwU0B5TNL0x8u8GnPR28Wuy57suiQVQD5Aa9No/OYF5Zlm5iboVpy', NULL, '2023-05-25 03:54:47', '2023-05-25 03:54:47', 'Help you own a very powerful Marketing weapon in the Internet environment - Google Ads Network, understand Google, know how to flow Google Ads ads with an optimal budget of more than 30% right at home', '1998-05-08', '0834695344', 'Tỉnh Tiền Giang', '/storage/thumbnails/8foCPNR1lNjnV98C4pJsxqXpgsp9wMaNp1mcgNVI.jpg'),
(25, 'Vu Ngoc Quyen', 'vungocquyen@gmail.com', NULL, '$2y$10$OTE1aPk.YzypMBppAJOW9.lpkFW8T/LmVCsejetCdoqRnsx76NBzW', NULL, '2023-05-25 03:54:47', '2023-05-25 03:54:47', 'Teach you how to use sales funnels, lading pages, how to advertise Google Ads effectively, optimize costs to help you increase revenue, increase business efficiency immediately', '1993-03-06', '0720684164', 'Thành phố Đà Nẵng', '/storage/thumbnails/cDWEhoEkWVMXgETtcFUYdA07MpTGGP4HWjnCkSVf.jpg'),
(26, 'Leo Minh', 'leominh@gmail.com', NULL, '$2y$10$2h6bVG2eJvkw0ETfanmnT.4Np8fQfa0HnQDQsGnOZ7rst86U3H4r6', NULL, '2023-05-25 03:54:47', '2023-05-25 03:54:47', 'The course of writing standard seo articles trains the skills of writing standard SEO website articles, helping students master the skills of writing website articles and building website content from...', '1995-10-28', '0140562593', 'Tỉnh Quảng Trị', '/storage/thumbnails/pKoIj7VzSte5HbHQN3K3hoBstx5Fy1zzOxbfUNrt.jpg'),
(27, 'Le Chi Xuan', 'lechixuan@gmail.com', NULL, '$2y$10$VD1g.3lGTEOh1FNzG3fKdOD4qSzxbPfEu/iTAYkpPJW9ljbgeU/Yy', NULL, '2023-05-25 03:54:47', '2023-05-25 03:54:47', 'Master the basic knowledge and practical application of Microsoft Excel (2010, 2013, 2016, 2019 - office 365) in the business environment', '1992-09-27', '0299637296', 'Tỉnh Yên Bái', '/storage/thumbnails/RRl0XQsWrlE3E5wOFOylu6JLc0HWsjbS5oCFsmPB.jpg'),
(28, 'Nguyen Hoang Long', 'nguyenhoanglong@gmail.com', NULL, '$2y$10$xCVlElDG8eO4rpmGHHEmHuOSegfOmBJRcTz5KBk/0cvxokYH7qK8O', NULL, '2023-05-25 03:54:48', '2023-05-25 03:54:48', 'The course will provide the necessary Excel knowledge and skills for the job, providing you with a lot of practical data to practice. From there, you will have the conditions to strengthen your Excel...', '1999-06-05', '0252480532', 'Tỉnh Hải Dương', '/storage/thumbnails/uE0pXWGIgSyF4ZFf6cP2xD5lHN1MKnqMtNl92Wqg.jpg'),
(29, 'Do Trung Thanh', 'dotrungthanh@gmail.com', NULL, '$2y$10$5jtst62WpHta3XZJPFr3IufJ23SZjCyAsmCtkFuuYAJYxAbQ1G8c2', NULL, '2023-05-25 03:54:48', '2023-05-25 03:54:48', 'Text editing skills', '1994-01-25', '0947756261', 'Tỉnh Bình Phước', '/storage/thumbnails/39ILJbFfZBFAu4VpJZVo96DRae32g6Wp69uDGSzw.jpg'),
(30, 'Huynh Hoang Voi', 'huynhhoangvoi@gmail.com', NULL, '$2y$10$lwXwI7jptBU0MmT2UjBrz.2cObVS5yvPE4enEinWyugnt42g9MSh.', NULL, '2023-05-25 03:54:48', '2023-05-25 03:54:48', 'Confidently conquer Powerpoint 2016 to Design more vivid and classy lectures.', '1999-09-09', '0721287808', 'Tỉnh Trà Vinh', '/storage/thumbnails/dYcBPWCkjiec0Kw6y3KshlCuUVKu2CdZOBn82YWn.jpg'),
(31, 'Tran Quang Vu', 'tranquangvu@gmail.com', NULL, '$2y$10$yl.T9UiGTADhwiuZpi3tKuWkcUvRPY306jZAoSj4ydD/jSQvuX9FW', NULL, '2023-05-25 03:54:48', '2023-05-25 03:54:48', 'Professional PowerPoint Design course helps students present, Design impressive Presents with attractive slides, attracting the audience.', '1997-08-06', '0290669869', 'Tỉnh Thừa Thiên Huế', '/storage/thumbnails/TPh2hjar3imXcWPn8Gxa0anfNSDm8uD7vRJkT1Ui.jpg'),
(32, 'Nguyen Duc Minh', 'nguyenducminh@gmail.com', NULL, '$2y$10$WKWMh8ivnnsf2H/P2MpTy.cF/umc2xL/36lAzDixc57vpIA1vGL12', NULL, '2023-05-25 03:54:48', '2023-05-25 03:54:48', 'Corel online software course helps you master Design skills related to the advertising - printing industry to make printed products on Digital printers', '1993-09-25', '0630153517', 'Thành phố Hồ Chí Minh', '/storage/thumbnails/w8soMfSONERKPk4v1EFTvxiwsYYR9BlHTalrG21q.jpg'),
(33, 'Nguyen Phuc Anh', 'nguyenphucanh@gmail.com', NULL, '$2y$10$45coGUVUq7azdYgyNe86D.JZYX1g8JOIJ.lojQlSYNJGTzJ.smD1i', NULL, '2023-05-25 03:54:48', '2023-05-25 03:54:48', 'Design and work with CorelDraw software professionally, quickly and save time', '1995-11-25', '0902949068', 'Thành phố Hồ Chí Minh', '/storage/thumbnails/hLmp7C3rlJzhxWFilt28oyocneuE2tKxREwtSbXY.jpg'),
(34, 'Le Duc Loi', 'leducloi@gmail.com', NULL, '$2y$10$Eoztk71wLICbcoul8iTKS.grisF7CRY7MOWL590r6Kh3ot2sTzHjy', NULL, '2023-05-25 03:54:48', '2023-05-25 03:54:48', 'This course helps you get all the knowledge from A-Z about Illustrator CC 2015, know how to apply it to your own vector graphics projects, illustrate & edit publications...', '1994-02-27', '0418717626', 'Tỉnh Hải Dương', '/storage/thumbnails/iwYRiS2X9jOpbxGEl8c9jw0eEr765bTic41tltiK.jpg'),
(35, 'Truong Van Hoa', 'truongvanhoa@gmail.com', NULL, '$2y$10$Ik/vs.xVxkYP6jW.kb/6M.c8/O5kZ7GCiB9MOR9nwMgSJrXZZM05a', NULL, '2023-05-25 03:54:48', '2023-05-25 03:54:48', 'The Ultimate Sales Landing Page Tutorial Course for Non-Professionals will guide you to make landing pages even if you don\'t know anything about IT.', '1992-11-20', '0948636250', 'Tỉnh Tiền Giang', '/storage/thumbnails/TOwq4TrLsPFLqN5ojiBk3Lx8v4Fjq6VjxKxWASNb.jpg'),
(36, 'Hoang Tung Duong', 'hoangtungduong@gmail.com', NULL, '$2y$10$Y3wM56oci1ru0Gc0fl3sz.twYUWrJayoWfoj.lew808ZX.mvKWYaO', NULL, '2023-05-25 03:54:48', '2023-05-25 03:54:48', 'Help you improve your thinking and skills in using Photoshop proficiently in the field of Architecture, Interior Design, Planning professionally, suitable for beginners or not proficient in Photoshop.', '1993-11-17', '0458028847', 'Tỉnh Sóc Trăng', '/storage/thumbnails/KixYIPkUUyXdIHLNng5BaPMPBp9QqIp62nO3syh4.jpg'),
(37, 'Do Dang Khoa', 'dodangkhoa@gmail.com', NULL, '$2y$10$fv503t6CynZO44n2w.5kWuOI3PuUELAbAhBjjqb.jN8uJfNWfVIKq', NULL, '2023-05-25 03:54:48', '2023-05-25 03:54:48', 'The real estate trading course shares how you can easily conduct house purchase and sale transactions, and transfer land use rights safely and effectively. Moreover, Lawyer Khoa with 15 years of exper...', '1999-08-13', '0405714679', 'Tỉnh Ninh Thuận', '/storage/thumbnails/g70FbCSHMsjx2E6TR1Gu8oH88SSugS5rHUks3XYo.jpg'),
(38, 'Charlie Nguyen', 'charlienguyen@gmail.com', NULL, '$2y$10$z.FO5Is2D6fCaQ3Yhm81O.Jz3.yDlH/fhOrLnehjJwXdVoWS3IhHK', NULL, '2023-05-25 03:54:48', '2023-05-25 03:54:48', 'The course helps you to fully master After Effects software, understand the process of making Visual effects for videos, thereby creating effects-filled movies following the current hot trend such as...', '1993-12-08', '0994917182', 'Tỉnh Lào Cai', '/storage/thumbnails/2j2CECqxGqaOT60DavAr5PQ1YXfGddKHyNLS711b.jpg'),
(39, 'Tam Nguyen', 'tamnguyen@gmail.com', NULL, '$2y$10$dyJuvbV0qQO7m9XbzM6MJ.kREqdHIQSLcgomqQpmuwL1sRJJD4Ndq', NULL, '2023-05-25 03:54:48', '2023-05-25 03:54:48', 'Help you understand and apply the five elements yin and yang, Feng Shui theory in building architecture, increasing fortune for life, work and relationships. Effective support for Real estate work', '1992-10-19', '0251048469', 'Tỉnh Cà Mau', '/storage/thumbnails/EPnbNmAcjWJF6b6picRnEptOBIrjF7Bsp832oI5u.jpg'),
(40, 'Cat Van Khoi', 'catvankhoi@gmail.com', NULL, '$2y$10$CnWRWB7OBWHOy3sgVWdi2ug7gTbjVFbOY5Jfx7GXa5nn28B3U1xYW', NULL, '2023-05-25 03:54:48', '2023-05-25 03:54:48', 'Selling course on e-commerce platform For the first time, you will know the SECRETS of starting a successful e-commerce business on the Internet with just 0 dong capital, how to do Business Online wit...', '1990-04-13', '0635761012', 'Tỉnh Bắc Kạn', '/storage/thumbnails/DVWRvHHB8JNDVId8BwUdx5XVJ86UXoX4yteBjrK1.jpg'),
(41, 'Tran Hoa', 'tranhoa@gmail.com', NULL, '$2y$10$HTI69MZyNA1Rd9nEgMedU.atIqb1STfyoBmUebzN.8.NsspgVMa7q', NULL, '2023-05-25 03:54:48', '2023-05-25 03:54:48', 'Breakthrough in revenue thanks to sales secrets on e-commerce sites', '2000-06-18', '0245616796', 'Tỉnh Hà Giang', '/storage/thumbnails/9DqvrTwHuT3U0xWqMHmKzJBndy6daCbqZeEmsIIc.jpg'),
(42, 'Do Thanh Tinh', 'dothanhtinh@gmail.com', NULL, '$2y$10$06ZlUj7p.YEyVOu/QbGiUeHSVkGJu3JvwBsM.Ny2Sv5W.RegJ4GS.', NULL, '2023-05-25 03:54:48', '2023-05-25 03:54:48', 'A guide to the startup process, how to set up a perfect startup plan. How to raise capital effectively and the best marketing strategies today!', '1996-12-20', '0516649062', 'Tỉnh Đắk Lắk', '/storage/thumbnails/jLL7CTcwVF0yfUf42PIvTLwOSsI9aYlWFG6LumrA.jpg'),
(43, 'Nguyen Phan Anh', 'nguyenphananh@gmail.com', NULL, '$2y$10$RVlqHr287V6Q9Bwtjkzvo.gqpoWUlLQXageOGE/WORzr/4yyQzbY.', NULL, '2023-05-25 03:54:48', '2023-05-25 03:54:48', 'Know the tricks and bloody lessons for your successful Internet business: Calculating break-even points, calculating costs, predicting the market, choosing and investing the right products...', '1990-09-25', '0785087041', 'Tỉnh Bình Thuận', '/storage/thumbnails/tvCx8YLdEGlc0t1HgkxIagAVMq4jb8Lq96n4Syl0.jpg'),
(44, 'Le Dang Khuong', 'ledangkhuong@gmail.com', NULL, '$2y$10$G5u5P1C1QUPGI3LFFCgdrOhvqCaWs0tv.UiI9kOmM6AgOt31kbzLm', NULL, '2023-05-25 03:54:48', '2023-05-25 03:54:48', 'Building a personal brand on the Internet, thereby increasing sales suddenly, quickly and sustainably', '1996-11-10', '0776489023', 'Tỉnh Trà Vinh', '/storage/thumbnails/0FdU2j8QsCioICR9xZ2hKIPAXKq8D3RpTha7npaF.jpg'),
(45, 'Nguyen Thu Huong', 'nguyenthuhuong@gmail.com', NULL, '$2y$10$j/qiYZBYw3CRy4wwlRy/dOUe.WjWYXrvZeC9GV4O7LQnZS2yodBmC', NULL, '2023-05-25 03:54:49', '2023-05-25 03:54:49', 'The secret to building a successful Personal brand, affirming your personal values, helping you make great strides in building the most effective communication strategy', '1990-05-10', '0968332389', 'Tỉnh Tuyên Quang', '/storage/thumbnails/DZcbjFTIhtCahqJjQcbcNbN9L121YMM8h0eAdk8m.jpg'),
(46, 'Chau Dinh Linh', 'chaudinhlinh@gmail.com', NULL, '$2y$10$lgn3.QBxtP6usDHj8UO98.cBauG92NNo9BPYIkGiBgfgxJQOi2Rhy', NULL, '2023-05-25 03:54:49', '2023-05-25 03:54:49', 'Decipher and understand the enemy right from the small gestures and attitudes, helping you get the key to perform Negotiate, negotiate and conquer the opponent quickly!', '1997-01-26', '0519142331', 'Tỉnh Đắk Lắk', '/storage/thumbnails/0meZaRrT8GYPYbu8fE1XfuvwB1UVZhSxNHoGNfjv.jpg'),
(47, 'Quynh Vu', 'quynhvu@gmail.com', NULL, '$2y$10$WOv9Kll9GvnBc21.kaMssu1jAQMZyfR9neS0WaQ2tPWUGc2TR.A0G', NULL, '2023-05-25 03:54:49', '2023-05-25 03:54:49', 'Elevate your business with professional English Negotiate skills.', '1996-05-21', '0577559670', 'Tỉnh Bắc Ninh', '/storage/thumbnails/oN058rkP9VJmhGLBBAqPyKP69YsapojIMW9pn8HE.jpg'),
(48, 'Nguyen Van Ben', 'nguyenvanben@gmail.com', NULL, '$2y$10$ppOFRpYCh4FCBUUny8VdHeZ3R1U1mVv8soB4ebHUK6xNs/SKra3IS', NULL, '2023-05-25 03:54:49', '2023-05-25 03:54:49', 'Own the staff you\'ve always wanted with simple, easy and effective arts', '1992-12-23', '0101294204', 'Tỉnh Bình Thuận', '/storage/thumbnails/wNt9dUe8YZwrFGdIuA6Yjo2AjgMlvqocr2jjaxUc.jpg'),
(49, 'Ngo Bich Hoa', 'ngobichhoa@gmail.com', NULL, '$2y$10$vnHwZJ4f3nr8Wf4UExSXBu3tsjwdu0/leH9FqjIp61S/iCMvjOBwy', NULL, '2023-05-25 03:54:49', '2023-05-25 03:54:49', 'Learn how good boss work, change your mindset, change the way you delegate, train your team to stay busy at work.', '1994-11-16', '0191740550', 'Tỉnh Quảng Bình', '/storage/thumbnails/OPktuMG16PvmZ437AwZ8B8q6Mibto0QcBhXWJ63e.jpg'),
(50, 'Ho Nguyen Vien Han', 'honguyenvienhan@gmail.com', NULL, '$2y$10$jU6QFCCha84/LU9Ahjw0tev1dQAwKL7f/alYsztHaeGqb8x7icZhu', NULL, '2023-05-25 03:54:49', '2023-05-25 03:54:49', 'Grasp the practical knowledge being applied daily by multinational companies and corporations to analyze the business environment and make actionable decisions..', '1994-01-02', '0581894726', 'Tỉnh Quảng Bình', '/storage/thumbnails/rTKkuqPl8UxhLNCcIYk1DgLmXrDuhlJccN0x9Xkr.jpg'),
(51, 'Nguyen Tat Kiem', 'nguyentatkiem@gmail.com', NULL, '$2y$10$X1ShmSV2yzDB0N.IANHtQet2rkX9s4vQ2vB2QClq4LDHqcgixF72.', NULL, '2023-05-25 03:54:49', '2023-05-25 03:54:49', 'Optimize ads, increase sales and close rates', '1992-05-18', '0392433624', 'Tỉnh Quảng Trị', '/storage/thumbnails/XsR3RHt4CLF9OtZh7k9FHtKq3X2jvzWR8hrPPZWv.jpg'),
(52, 'Can Manh Linh', 'canmanhlinh@gmail.com', NULL, '$2y$10$Qwr65JkqeXSGg31lgW3Lb.c0fZnY4ziQ1KzCzSqhSH6p7WvgRRbmi', NULL, '2023-05-25 03:54:49', '2023-05-25 03:54:49', 'Short videos and TikTok are gaining more and more importance, and are indispensable online marketing channels... GET STARTED NOW!', '1993-12-13', '0393141752', 'Tỉnh Kon Tum', '/storage/thumbnails/jufRzeH6HSXnH5wmzFFLQjSF49KwySb6Vu0SmZVj.jpg'),
(53, 'Dang Van Tan', 'dangvantan@gmail.com', NULL, '$2y$10$BRr0FHs9ALyb6vdIHcTlM.XS/iYwmt7SbKWl5rqHw8xW6Eq2zPCB2', NULL, '2023-05-25 03:54:49', '2023-05-25 03:54:49', 'Handling Rejection - Successfully Closing Sales.', '1993-07-09', '0237686562', 'Tỉnh Cao Bằng', '/storage/thumbnails/liiAXGGfAOq6d6C1qywFmHa5yjGGB3POmhPhcA1i.jpg'),
(54, 'Le Van Minh', 'levanminh@gmail.com', NULL, '$2y$10$1XOP8BKcnXN3yMXN8jJji.Ji210OnO3GFpfu3IZyUo0D7cbmquyXe', NULL, '2023-05-25 03:54:49', '2023-05-25 03:54:49', 'Helping you to practice skills and grasp the top tips in Telesale in insurance consulting.', '1996-03-28', '0322540171', 'Thành phố Hà Nội', '/storage/thumbnails/61fKErlEpLmxN8wG3HVlyEFqa4imWUuSeZVs37WF.jpg'),
(55, 'Van Truong Hi', 'vantruonghi@gmail.com', NULL, '$2y$10$GvXqZoQ4wPQ.NFFMB/fQu.tZMtAE4Bk7B.7Z8S9h86IJRpEAIBZQi', NULL, '2023-05-25 03:54:49', '2023-05-25 03:54:49', 'This course will help you build a sales channel with a large number of customers on Facebook with Video Marketing and Livestream.', '1993-02-19', '0841909437', 'Tỉnh Nam Định', '/storage/thumbnails/r02MYf2YQuH6eTEtVmrHqLsDz8NbzCh5M1Bj9ANR.jpg'),
(56, 'Nhan Katherine', 'nhankatherine@gmail.com', NULL, '$2y$10$szT8gfgBHty2IPL7TzX6Beq/cEZjWnz813njnDs39Jzn0aHpTF/WW', NULL, '2023-05-25 03:54:49', '2023-05-25 03:54:49', 'Get a set of magic sales questions to help you succeed in every transaction whether in person or over the phone..', '1999-03-19', '0206278115', 'Tỉnh Quảng Bình', '/storage/thumbnails/rlCiD2jlWm5xW2ghBoBK6qdHdktAfKNl8KEyZ1Qj.jpg'),
(57, 'Pham Ha', 'phamha@gmail.com', NULL, '$2y$10$6gSEpQ2lpWoxOKH8wyvBwOlSUkAmgkD3IJlrngAzLwcTyGOWa3KrK', NULL, '2023-05-25 03:54:49', '2023-05-25 03:54:49', 'Business is always a career chosen by many people to start a business, the course will help you grasp the knowledge and experience, especially the art of selling and closing a sale quickly that you ne...', '1997-11-04', '0830209346', 'Tỉnh Lai Châu', '/storage/thumbnails/NBoyOWERAVIUILl9JtIaG9dFRajxfkmoKwPgUswC.jpg'),
(58, 'Hoang Van Cong', 'hoangvancong@gmail.com', NULL, '$2y$10$ahnvma9l8te44suTSsiPEOGGPISFrmA6qt8LRq5e1dblYLU66S.pG', NULL, '2023-05-25 03:54:49', '2023-05-25 03:54:49', 'The course on data structures and algorithms with java helps you review all your knowledge of data structures and algorithms, solving dozens of LeetCode lessons.', '1993-12-05', '0206333183', 'Tỉnh Bến Tre', '/storage/thumbnails/rQBRjsGLWJdFACY0HhYy4uNT3IjMYWi83lq6znxt.jpg'),
(59, 'The program\'s lecturers', 'theprogram\'slecturers@gmail.com', NULL, '$2y$10$n/Cpu2sAuW1GOh5TsqwnFuSWOWooBq/6jwereoQ7laSv3C9HbV2y6', NULL, '2023-05-25 03:54:49', '2023-05-25 03:54:49', 'Help you master the skill of Program iOS Swift.', '1994-05-23', '0864355156', 'Tỉnh Quảng Trị', '/storage/thumbnails/s2tthaNT4kXJlClWNKcqIyvjsHx5EyvDm4N2Ht1h.jpg'),
(60, 'Duong Tich Dat', 'duongtichdat@gmail.com', NULL, '$2y$10$8/g3.tjPEIyiBHfkZjdW8uf3Ouu0f2wGUIu62bXFGz9jUiBdd/vR6', NULL, '2023-05-25 03:54:49', '2023-05-25 03:54:49', 'The program C/C++ Online course equips you with basic to advanced C/C++ programming skills, illustrated through simple practice exercises. At the same time, it helps you to grasp the basic knowledge o...', '1995-07-05', '0723317058', 'Tỉnh Bình Thuận', '/storage/thumbnails/e85JqOCkVnavpCrIO9Z73fI0EuVG2tqSuPSUAgSP.jpg'),
(61, 'Dao Duy Van', 'daoduyvan@gmail.com', NULL, '$2y$10$AgsZ/UBoFPWvKIEp71jLtu89XujW6PzdNyjPfLKQkIyPpVlTUqye2', NULL, '2023-05-25 03:54:50', '2023-05-25 03:54:50', 'Synthesize flapping, vibration, movement, breathing, eating, Meditation, yoga and Qigong according to the principles of medical nutrition and traditional learning', '1998-07-10', '0381931776', 'Tỉnh Bắc Ninh', '/storage/thumbnails/cC93hNBQzhykzsnOqFsNgBe9SILHTRUKsFMVlnt6.jpg'),
(62, 'Vu Van Hoi', 'vuvanhoi@gmail.com', NULL, '$2y$10$NTxs81iS807wCnubMOQKIecZs4.yKCIbiqm2CaqVZGwnKKi3b9OIu', NULL, '2023-05-25 03:54:50', '2023-05-25 03:54:50', 'Practice Qigong at home - sustainable health - happy life.', '1997-12-17', '0212368617', 'Tỉnh Nam Định', '/storage/thumbnails/zMxc9GnlLsk29d5WP14zCG4sc6asRclUShOsRCzj.jpg'),
(63, 'Sweet Media', 'sweetmedia@gmail.com', NULL, '$2y$10$JOS2z6J09AMtBhTWjbq5x.5vJMRwu8NCpIq8EiziAWqfRr1AzGTbm', NULL, '2023-05-25 03:54:50', '2023-05-25 03:54:50', 'Exercise health, create aesthetic physique, strong and supple body with Fitness', '1991-07-26', '0909839549', 'Tỉnh Bình Thuận', '/storage/thumbnails/uSsDX9g7y0qThAHzgBvHivzij1Ma24rScfl3EUhp.jpg'),
(64, 'Do Anh Nhu', 'doanhnhu@gmail.com', NULL, '$2y$10$LTiK7JAUf1u266HnZ8/4qu8b25Bf0WO12KlkFwudEH9nVHbrwqhOG', NULL, '2023-05-25 03:54:50', '2023-05-25 03:54:50', 'The course helps women regain their beauty 3 rounds after 30 days', '1999-02-01', '0576445855', 'Tỉnh Bến Tre', '/storage/thumbnails/4ppyGgbaH12onCbZhj0umFTSp7vX9use3ulLH5Fb.jpg'),
(65, 'Dang Thi Hanh', 'dangthihanh@gmail.com', NULL, '$2y$10$0SyzghmTGmbgEf.OIXA1fuiP0vToo4wgzLWYuqp7T.Dgo.lEdAsGK', NULL, '2023-05-25 03:54:50', '2023-05-25 03:54:50', 'Join the course so that stress and its consequences are no longer your obsession.', '2000-08-25', '0148524969', 'Tỉnh Kon Tum', '/storage/thumbnails/0FGGQ3phAgJgjBECLzuGinmw11bCSC0A7vUcLNzt.jpg'),
(66, 'La Linh Nga', 'lalinhnga@gmail.com', NULL, '$2y$10$hZunBBE1kDopRQFYV9418Oyqxte3avmNwjHayRSLgZtDYDi.Ss8f2', NULL, '2023-05-25 03:54:50', '2023-05-25 03:54:50', 'Surely all of us know the harmful effects of depression. So what do you need to do to prevent and avoid dangerous diseases in this 4.0 digital age and especially postpartum depression?', '1997-07-20', '0300953572', 'Tỉnh Thái Nguyên', '/storage/thumbnails/uSJBVAeOrLZ5oICnkadmciQHRpys5NyxCmox6KJ6.jpg'),
(67, 'Do Gia Tran', 'dogiatran@gmail.com', NULL, '$2y$10$138mlOfCTnofPQe8y0aT8O9Mcty4HZGFWk/1i7p0Yo7829lfUw/0C', NULL, '2023-05-25 03:54:50', '2023-05-25 03:54:50', 'Learn the formula of Bartending milk tea, the hottest fruit detox tea on the market. Confidently open a shop, increase competitiveness with a different menu.', '1997-08-05', '0936069892', 'Tỉnh Thừa Thiên Huế', '/storage/thumbnails/T6eHpsrOe9fOcEKV9DprQTjsnlVrMqBehXXAil2x.jpg'),
(68, 'Kim Ngoc Hoang', 'kimngochoang@gmail.com', NULL, '$2y$10$IcFPC/ifTyS01NjOYnF9eOtCI7kgs4efva1rKaKEe6TAU0/6y4WVi', NULL, '2023-05-25 03:54:50', '2023-05-25 03:54:50', 'Help increase sales for beverage stores next winter.', '1991-04-08', '0941618623', 'Tỉnh Đồng Nai', '/storage/thumbnails/8FJWwOMGILwcl16Iudcml8wegR3n88omiIZqYvEG.jpg'),
(69, 'Hoang Thi Van', 'hoangthivan@gmail.com', NULL, '$2y$10$KXItWHwFx9Cyc9hm.l1n.eQx7FmaFQdQwioUymGgePPGaNqNVV9Fy', NULL, '2023-05-25 03:54:50', '2023-05-25 03:54:50', 'Hand-made lovely Nerikiri cakes with countless shapes, beautiful colors, satisfying passion, saving money and food safety', '1999-04-06', '0332145284', 'Tỉnh Khánh Hòa', '/storage/thumbnails/fERRUKwRrdbvAUFcDOFUCRHvZ9JIgAX3DqN7p1r0.jpg'),
(70, 'Bach Huynh Uyen Linh', 'bachhuynhuyenlinh@gmail.com', NULL, '$2y$10$o5kY3uGLFzEd9uFZWvkWAuM2dRqbW6hNA6zegNeWc2Ho/bwL1cdLS', NULL, '2023-05-25 03:54:50', '2023-05-25 03:54:50', 'Help you quickly grasp the recipe and technique and secret to Baking pasta and pizza at home.', '1995-12-24', '0195736656', 'Tỉnh Hoà Bình', '/storage/thumbnails/S0mu4OmgZbTiFRWJJFsEvNb38HAzpl893pk71WEI.jpg'),
(71, 'Nguyen Phung Phong', 'nguyenphungphong@gmail.com', NULL, '$2y$10$FOwudbGGiz8QIWFC4JQGtOb3Tzx/cDKLKO2cdbR7P8zX5U6b3pQv.', NULL, '2023-05-25 03:54:50', '2023-05-25 03:54:50', 'The parenting course for successful children helps parents gain great knowledge to understand and teach their children interestingly, gently, connecting a happy, loving family.', '1992-03-10', '0931829035', 'Tỉnh Hà Giang', '/storage/thumbnails/J50qmfgAUZZUQ751qwhBlnZj7Q6vX71BlbVYRFdF.jpg'),
(72, 'Dinh Thi Tuyet', 'dinhthituyet@gmail.com', NULL, '$2y$10$sLm6kLtgxLx0fSttqBCt2O.ckEfR8Rz7szvExZeJLk058CxQ9Yw6O', NULL, '2023-05-25 03:54:50', '2023-05-25 03:54:50', 'Don\'t miss the extremely important hygiene step to keep your baby completely healthy right from birth.', '1994-09-07', '0285893402', 'Tỉnh Vĩnh Phúc', '/storage/thumbnails/3cTWZYf9tvvI1qgbUBG0FG1iX6iYML8hTbL5pgFc.jpg'),
(73, 'Nhung Lady', 'nhunglady@gmail.com', NULL, '$2y$10$fXEASCezTdOlmwUtCA88e.CdAGD5v2a7LjRI53P8XvoDEMZwG.82S', NULL, '2023-05-25 03:54:50', '2023-05-25 03:54:50', 'This Tazama course is designed just for you, containing all the secret techniques of the honey triangle to help you maintain your attractive youthful beauty, keep the fire in your room.', '1995-12-22', '0154029748', 'Tỉnh Quảng Trị', '/storage/thumbnails/p4dEu5p13tLilgnRcHyLMaVc5vDH1IfhqV3LZ6R6.jpg'),
(74, 'Phung Thi Thuy Dung', 'phungthithuydung@gmail.com', NULL, '$2y$10$8FcqXNbjtRGzHMk8qgaJ.uMByTvUMnOqUq8mrN5LN4EVkLA7cocwa', NULL, '2023-05-25 03:54:50', '2023-05-25 03:54:50', 'Helping you have an overview of family life, love and marriage, conflicts and have the perfect solutions to resolve those conflicts, bringing a happy and fulfilling life.', '1994-01-10', '0614470970', 'Tỉnh Đắk Lắk', '/storage/thumbnails/xOZ6Q9zXkMtUJnLquyYx2VUUEEjaHtlu6VHFTIHa.jpg'),
(75, 'Ha The Anh', 'hatheanh@gmail.com', NULL, '$2y$10$pvlsGcVfFdEs9gngS9Lyzunu6t8XVOS3x3ihsvfvEB9EIVtiLBBli', NULL, '2023-05-25 03:54:50', '2023-05-25 03:54:50', 'It\'s not difficult to become a great dad with just 2 hours with instructor Ha The Anh! The course helps dads know how to effectively raise and educate their children so that they can have the most per...', '1995-11-09', '0103874489', 'Tỉnh Thanh Hóa', '/storage/thumbnails/1SWAXTaFihT4uET05tQ5rTK3rm0vfGYoPUlElRlr.jpg'),
(76, 'Master Tran', 'mastertran@gmail.com', NULL, '$2y$10$An4Mj4MVsmg5x1HlmJuQRuFeuVPAf1UCOziIG1TVicMdtQ54n1EI.', NULL, '2023-05-25 03:54:50', '2023-05-25 03:54:50', 'Professional video editing course with Adobe Premiere fully equips you with the most basic knowledge about Adobe Premiere, professional editing thinking, giving you a solid foundation with the most pr...', '1997-02-08', '0295786082', 'Tỉnh Cao Bằng', '/storage/thumbnails/fskD3CpEngcxa7CzwKLC0ujM4s8ouOc6EG15Yf59.jpg'),
(77, 'Le Duc Cong Thanh', 'leduccongthanh@gmail.com', NULL, '$2y$10$9xBo7GHLFAi7CR76PQ1v7ubkt5RfvJtBal2gjVK5dmNAIIXAo5GWK', NULL, '2023-05-25 03:54:51', '2023-05-25 03:54:51', 'Guide you to create your own animated clips with advanced and attractive effects and effects using Adobe After Effects software, helping you become a professional effects editor with an attractive sal...', '1997-09-17', '0809961716', 'Tỉnh Quảng Nam', '/storage/thumbnails/FESL0nPL9Bq2ICFIRpaltdZsUTMIl0QmOSfPN6d1.jpg'),
(78, 'Hoang Viet Thang', 'hoangvietthang@gmail.com', NULL, '$2y$10$qtAl0PKBT9qYqtD6WSLY/OJYJCVBPjpc5IgdUdlQ74frwLhs9MmOi', NULL, '2023-05-25 03:54:51', '2023-05-25 03:54:51', 'The photography course that contains all the secrets of photography and photo manipulation will be revealed right away so you can get the best, best and most impressive photos!', '1998-05-26', '0217906921', 'Tỉnh Ninh Bình', '/storage/thumbnails/oHkFpPYPBp8pf56nzFCQffdHhuxzAhNN7400WI5k.jpg'),
(79, 'Nguyễn Văn Demo', 'demo@gmail.com', NULL, '$2y$10$6XVBteJ/8ZpDDjZvj8RJDeL4CKvGuFtVTHjZcA9kxwtK0gtGEbJjC', NULL, '2023-06-05 23:20:46', '2023-06-05 23:20:46', 'demo01', '2023-06-06', '0986295910', 'Thành phố Hà Nội', '/images/user.png'),
(80, 'Nguyễn Văn Demo02', 'admindemo@gmail.com', NULL, '$2y$10$8z3/N1G3cCIo6KHRPUCXke2QurR.nimv5Vl2Ku2LX8hQIB.lFwosS', NULL, '2023-06-08 00:17:43', '2023-06-08 00:17:43', 'demo02', '2023-06-08', '0986295911', 'Tỉnh Thái Bình', 'images\\user.png'),
(81, 'demo03', 'admindemo03@gmail.com', NULL, '$2y$10$OAjxdmILGt/e.IH/K5Caj.J1xsVtspfWOUPJ1AgxutLWaMoTzz3Km', NULL, '2023-06-08 00:19:27', '2023-06-08 00:19:27', 'demo03', '2023-06-08', '0986295912', 'Tỉnh Thái Bình', '/images/user.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visitors` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `visitors`
--

INSERT INTO `visitors` (`id`, `visitors`) VALUES
(1, 999);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `wishlists`
--

INSERT INTO `wishlists` (`id`, `course_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 40, 2, '2023-05-27 02:28:12', '2023-05-27 02:28:12'),
(8, 26, 2, '2023-05-30 03:30:43', '2023-05-30 03:30:43'),
(9, 1, 2, '2023-05-30 03:31:06', '2023-05-30 03:31:06');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill_course`
--
ALTER TABLE `bill_course`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `course_tag`
--
ALTER TABLE `course_tag`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `notification_user`
--
ALTER TABLE `notification_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `bill_course`
--
ALTER TABLE `bill_course`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `course_tag`
--
ALTER TABLE `course_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `notification_user`
--
ALTER TABLE `notification_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
