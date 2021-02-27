-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 07:06 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro7`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `article_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `article_body`, `article_image`, `created_at`, `updated_at`) VALUES
(1, 'Simple things you can do to drive more safely', '<p>Motor vehicle accidents are one of the leading causes of deaths in the U.S., according to the Centers for Disease Control.&nbsp;The CHP reports the most frequent accident causes on California roads include unsafe speed, unsafe following, improper turns, and inattention to the road.&nbsp;However, proper driver education, seat belts, following speed laws, obeying the rules of the road, and paying attention to the road and fellow drivers can help reduce the risk of being injured or killed in a motor vehicle accident.</p>\r\n\r\n<p><strong>Following posted speed limits</strong>&nbsp;on roads and highways and reducing excessive speed improves your ability to respond to unexpected road hazards. The higher the speed, the greater the risk of serious injury or death in a crash.</p>\r\n\r\n<p>Posted speed limits are maximums. Always maintain a speed that is reasonable for the road and the conditions at the time. Take into account the weather, visibility, traffic, and the surface conditions of the road when you determine your speed of travel. Never use a speed that endangers your safety, other persons, or property.</p>\r\n\r\n<p>The CHP recommends you&nbsp;<strong>leave a 3-second cushion</strong>&nbsp;between your car and any vehicle you are following. This applies if the pavement is dry, there&rsquo;s no heavy traffic, and your brakes are in top condition. In poor conditions, add one more second for each weather condition or hazard encountered.</p>\r\n\r\n<p><strong>Avoid unsafe turns</strong>&mdash;never pull out in front of a car that has not committed to a stop or a turn.</p>\r\n\r\n<p>Be a defensive driver and prevent accidents by scanning the road and other drivers. Watch the road ahead and behind you. Keep your eyes moving and stay alert to be prepared to react to the unexpected.</p>\r\n\r\n<p><strong>Pay attention</strong>&nbsp;to what you and other drivers are doing on the road. Adjust your seat and mirrors and preset your favorite radio stations and climate controls&nbsp;<em>before</em>&nbsp;you start the car. Don&rsquo;t eat, drink, smoke, or read while driving. The best and safest situation is to be stopped when using a cell phone. Never text or use a personal digital assistant while driving. And, do your personal grooming at home,&nbsp;<em>not</em>&nbsp;in the car.</p>\r\n\r\n<p><strong>Get driver&rsquo;s education</strong>&nbsp;training for California roads and know how to operate vehicles that you are assigned to take on the road.</p>\r\n\r\n<p><strong>Always wear your seat belt</strong>&nbsp;when driving or riding in a vehicle. According to the&nbsp;<a href=\"http://www.nhtsa.dot.gov/\" target=\"_blank\">National Highway Traffic Safety Administration</a>&nbsp;(NHTSA), seat belts reduce the risk of fatal injury by 45 percent in a car and by 60 percent in a light truck. A lap and shoulder belt is best, but use a lap belt if it is present. Only transport people in a car or truck if you have enough seatbelts for everyone.</p>\r\n\r\n<p>When you get behind the wheel of a vehicle,&nbsp;<strong>follow the rules of the road</strong>. Do not drive if you have been drinking, are on medication, or are very tired. Be a courteous and safe driver and yield the right of way when necessary.</p>', '1614448575.jpg', '2021-02-27 17:56:15', '2021-02-27 17:56:15'),
(2, 'What is Defensive Driving?', '<p>Defensive Driving is essentially driving in a manner that utilizes safe driving strategies to enables motorists to address identified hazards in a predictable manner. These strategies go well beyond instruction on basic traffic laws and procedures.</p>\r\n\r\n<p>With defensive driving classes, students learn to improve their driving skills by reducing their driving risks by anticipating situations and making safe well-informed decisions. Such decisions are implemented based on road and environmental conditions present when completing a safe driving maneuver.</p>\r\n\r\n<h2>Benefits of Defensive Driving</h2>\r\n\r\n<p>The benefits of taking a defensive driving class vary with each state, but often include a reduction of points on your driver&#39;s license following a ticket and the assurance that insurance rates will not increase. In some states, taking a defensive driving course can mean a reduction of up to 10% in your insurance rates for a period of three to five years.</p>\r\n\r\n<p>Just as the benefits of defensive driving classes vary with each state, so do the requirements. While most basic defensive driving classes are four hours long, some can be as long as six or eight hours.</p>\r\n\r\n<p>In some states, students have the option to take defensive driving courses online or by watching a video tape or DVD, while other states only allow students to take defensive driving in a classroom setting.</p>', '1614448749.jpg', '2021-02-27 17:59:09', '2021-02-27 17:59:09'),
(3, 'What Helps a New Driver? More Driving', '<p>How can we&nbsp;<a href=\"https://www.ncbi.nlm.nih.gov/pubmed/29057254\" target=\"_blank\">keep our kids safe</a>&nbsp;as they&rsquo;re learning to drive?</p>\r\n\r\n<p>Some think the main problem is teenage irresponsibility, said Robert D. Foss, the director emeritus of the Center for the Study of Young Drivers at the Highway Safety Research Center of the University of North Carolina at Chapel Hill.</p>\r\n\r\n<p>&ldquo;That&rsquo;s wrong,&rdquo; he said. &ldquo;There certainly are more issues with impulsivity than among adults, but that&rsquo;s a matter of degree.&rdquo; The real problem is lack of experience, and the only way to get to the other side is to have teenagers do more driving.</p>\r\n\r\n<p>Johnathon Ehsani, an assistant professor at the Johns Hopkins University School of Public Health Center for Injury Research and Policy, described&nbsp;<a href=\"https://www.sciencedirect.com/science/article/abs/pii/S0001457517302282\" target=\"_blank\">a project</a>&nbsp;in which 90 families in Virginia agreed to have their cars outfitted with video cameras and microphones, along with other data recorders, from the time the teenagers got their learner&rsquo;s permits until a year after they got their licenses.</p>\r\n\r\n<p>About half of the new drivers did indeed crash in that first year, mostly with minor accidents, and the data, soon to be published, let the researchers look at the question of what factors were associated with a lower crash rate during the first year of driving.</p>', '1614448823.jpg', '2021-02-27 18:00:23', '2021-02-27 18:00:23');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment_body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` bigint(20) UNSIGNED NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `question_context` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_answer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_owner_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_23_200218_create_admins_table', 1),
(5, '2021_02_23_200835_create_articles_table', 1),
(6, '2021_02_23_201142_create_contacts_table', 1),
(7, '2021_02_23_201553_create_training_centers_table', 1),
(8, '2021_02_23_201811_create_services_table', 1),
(9, '2021_02_23_204224_create_service_user_table', 1),
(10, '2021_02_25_072037_create_faqs_table', 1),
(11, '2021_02_26_215220_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `center_id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `center_id`, `service_name`, `service_desc`, `service_type`, `service_image`, `service_price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Car class vehicle', 'Owners of a full driving license can drive any type of car or small van, with a automatic transmission on the road. Owners of an automatic license can only drive automatic vehicles.', 'Automatic', '1614446358.jpg', 7.00, '2021-02-27 17:19:18', '2021-02-27 17:19:18'),
(2, 1, 'Car class vehicle', 'The advantages of taking an automatic driving course, and gaining an automatic license, are that these types of cars are easier to learn to drive.', 'Automatic', '1614446589.jpg', 8.00, '2021-02-27 17:20:37', '2021-02-27 17:23:09'),
(3, 5, 'Motorcycles', 'Learning basic motorcycle operation is similar to learning how to drive. Both can be a little intimidating at first. But if you approach riding a motorcycle with care and caution, you can make the learning process less intimidating.', 'Automatic', '1614446569.jpg', 9.00, '2021-02-27 17:22:49', '2021-02-27 17:22:49'),
(4, 1, 'Motocycles', 'To drive a motorcycle, you will need an M Class licence. The type of licence you get will depend on the type of motorcycle you want to drive.', 'Automatic', '1614446804.JPG', 10.00, '2021-02-27 17:26:44', '2021-02-27 17:26:44'),
(5, 4, 'Bus', 'To obtain a Class 2 licence to drive a bus with a seating capacity of more than 24 passengers, you must have held a valid Class 5 driver\'s licence for at least 2 years, have a good driving record, be in good health and pass a knowledge test and 2 road tests.', 'Manual', '1614447190.jpg', 12.00, '2021-02-27 17:33:10', '2021-02-27 17:33:10'),
(6, 2, 'Truck', 'Image result for truck driving license\r\nA Commercial Driver\'s License is required to drive commercial motor vehicles (CMVs) such as tractor trailers, semi-trucks, dump trucks, and passenger buses.', 'Automatic', '1614448895.jpg', 13.00, '2021-02-27 17:35:31', '2021-02-27 18:01:35'),
(7, 1, 'Scooter', 'The main benefit of scooters compared to other road vehicles is the training required. To drive a car, you need weeks (sometimes months) of lessons, along with the theory and practical tests.', 'Automatic', '1614447586.jpg', 14.00, '2021-02-27 17:39:46', '2021-02-27 17:39:46'),
(8, 5, 'Bulldozer', 'A bulldozer is a large motorized machine that travels on tracks and is equipped with a metal blade to the front for pushing material: soil, sand, snow, rubble, or rock during construction or conversion work.', 'Manual', '1614447789.jpg', 11.00, '2021-02-27 17:43:09', '2021-02-27 17:43:09'),
(9, 3, 'Farm vehicle', 'A farm vehicle is defined as a truck or truck tractor determined by PennDOT to be exclusively used for agricultural purposes. Examples include pick-up trucks, grain trucks, tanker trucks and cattle trucks.', 'Manual', '1614447871.jpg', 12.00, '2021-02-27 17:44:31', '2021-02-27 17:44:31'),
(10, 6, 'Drive Truck', 'A truck or lorry is a motor vehicle designed to transport cargo. Trucks vary greatly in size, power, and configuration.', 'Automatic', '1614447964.jpg', 14.00, '2021-02-27 17:46:04', '2021-02-27 17:46:04'),
(11, 1, 'Go Scooter', 'Scooter fans generally agree that riding a scooter is great fun, and they can hardly perceive its wholesome influence on their body. And that is good - what we enjoy doing, we do without difficulty and with ease.', 'Manual', '1614448164.jpg', 10.00, '2021-02-27 17:49:24', '2021-02-27 17:49:24'),
(12, 2, 'Bus', 'To obtain a Class 2 licence to drive a bus with a seating capacity of more than 24 passengers, you must have held a valid Class 5 driver\'s licence for at least 2 years, have a good driving record, be in good health and pass a knowledge test and 2 road tests.', 'Automatic', '1614448407.jpg', 15.00, '2021-02-27 17:53:27', '2021-02-27 17:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `service_user`
--

CREATE TABLE `service_user` (
  `service_user_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `training_centers`
--

CREATE TABLE `training_centers` (
  `center_id` bigint(20) UNSIGNED NOT NULL,
  `center_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `center_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `center_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_centers`
--

INSERT INTO `training_centers` (`center_id`, `center_name`, `center_location`, `center_image`, `created_at`, `updated_at`) VALUES
(1, 'Driver Gate', 'Jubaiha, Amman, Jordan', '1614444941.jpg', '2021-02-27 15:44:58', '2021-02-27 16:55:41'),
(2, 'Driver Council', 'Abdali, Amman, Jordan', '1614445748.jpg', '2021-02-27 15:46:23', '2021-02-27 17:09:08'),
(3, 'Go Drive School', '7th Circle, Amman, Jordan', '1614445938.jpg', '2021-02-27 15:47:25', '2021-02-27 17:12:18'),
(4, 'The Prodrive Drivers', 'Swaifyieh, Amman, Jordan', '1614445987.jpg', '2021-02-27 15:51:08', '2021-02-27 17:13:07'),
(5, 'Thinking Drive', '3th Circle, Amman, Jordan', '1614446017.jpg', '2021-02-27 15:55:02', '2021-02-27 17:13:37'),
(6, 'Driving Season', 'Marka, Amman, Jordan', '1614446071.jpg', '2021-02-27 15:55:41', '2021-02-27 17:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_age` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admins_admin_email_unique` (`admin_email`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comments_article_id_foreign` (`article_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `services_center_id_foreign` (`center_id`);

--
-- Indexes for table `service_user`
--
ALTER TABLE `service_user`
  ADD PRIMARY KEY (`service_user_id`),
  ADD KEY `service_user_user_id_foreign` (`user_id`),
  ADD KEY `service_user_service_id_foreign` (`service_id`);

--
-- Indexes for table `training_centers`
--
ALTER TABLE `training_centers`
  ADD PRIMARY KEY (`center_id`),
  ADD UNIQUE KEY `training_centers_center_name_unique` (`center_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_user_number_unique` (`user_number`),
  ADD UNIQUE KEY `users_national_id_unique` (`national_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `question_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service_user`
--
ALTER TABLE `service_user`
  MODIFY `service_user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training_centers`
--
ALTER TABLE `training_centers`
  MODIFY `center_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_center_id_foreign` FOREIGN KEY (`center_id`) REFERENCES `training_centers` (`center_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_user`
--
ALTER TABLE `service_user`
  ADD CONSTRAINT `service_user_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
