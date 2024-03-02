-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 18, 2023 at 04:27 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`) VALUES
(1, 'Web Design', 'HTML/CSS Basics, Graphic Design Software, Responsive Design, Typography, Color Theory, Wireframing and Prototyping, and UI/UX Design.'),
(2, 'Web Development', 'Programming Languages, Frameworks, Version Control/Git, Web APIs, Database Management, Problem-Solving, Web Performance Optimization, and much more.'),
(3, 'Media Design', 'Graphic Design, Digital Imaging, Animation, Video Editing, 3D Modeling and Animation, Motion Graphics, Coding/Scripting, Audio Editing, and more.');

-- --------------------------------------------------------

--
-- Table structure for table `categories_projects`
--

CREATE TABLE `categories_projects` (
  `id` int NOT NULL,
  `project-id` int NOT NULL,
  `categories-id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories_projects`
--

INSERT INTO `categories_projects` (`id`, `project-id`, `categories-id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int NOT NULL,
  `title` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `upload date` datetime NOT NULL,
  `url` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `description`, `upload date`, `url`) VALUES
(1, 'Pap', 'aima', '2023-11-18 04:08:36', 'C:\\'),
(2, 'Pap', 'Adve', '2023-11-18 04:08:36', 'C:\\'),
(3, 'Web', 'Scre', '2023-11-18 04:08:36', 'C:\\');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `date`) VALUES
(1, 'Earbuds - Paper Thin Tech ', 'In this assignment, I was tasked with creating multiple pieces of media such as 3D renders including designing, implementing design, advertisement imagery, animation, and a full webpage.\r\n\r\nI used many different skills and programs while working on this assignment. I had to work on aspects such as designing a case, earbuds, and brand identity for the webpage of this assignment. I also had to use my skills in coding; I was tasked to create a webpage using HTML, CSS, JavaScript, and PHP coding languages to complete this project.', '2023-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `skill` varchar(200) NOT NULL,
  `description` varchar(1500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `description`) VALUES
(2, 'Programming Languages', 'HTML, CSS, PHP, Java Script, etc.'),
(3, 'Frameworks', 'wireframing on grid'),
(4, 'Version Control/Git', 'Using script to host code to collaborate with other developers,  version control to keep track of progress, and review code. etc.'),
(5, 'Database Management', 'Managing website database, and PHP language.'),
(6, 'Problem-Solving', 'solving problems on the go, being able to create solutions from issues arising as part of the development process.'),
(7, 'Web Performance Optimization', 'Ability to enhance the speed and efficiency of web applications and websites. '),
(10, 'HTML/CSS Basics\r\n', 'Proficient in foundational web development languages, HTML and CSS. Capable of creating structured and visually appealing web pages by leveraging HTML for content and CSS for styling.'),
(11, 'Graphic Design Software\r\n', 'Skilled in using graphic design tools such as Adobe Photoshop, Illustrator, or other relevant software. Able to create and manipulate visual elements to enhance the aesthetic appeal of digital projects.'),
(12, 'Responsive Design', 'Experienced in designing websites and applications that adapt seamlessly to different screen sizes and devices. Utilizes media queries and flexible layouts to ensure a consistent user experience across desktops, tablets, and smartphones.'),
(13, 'Typography', 'Knowledgeable in the art and science of selecting and arranging fonts. Capable of choosing typefaces that complement the overall design, enhance readability, and convey the desired brand personality.'),
(14, 'Color Theory', 'Proficient in understanding and applying color theory principles to create visually harmonious designs. Skilled in selecting color palettes that evoke specific emotions and align with branding guidelines.'),
(15, 'Wireframing and Prototyping', 'Experienced in creating wireframes to outline the basic structure and layout of a digital project. Proficient in using prototyping tools to build interactive models, allowing for user testing and refining the user experience before development.'),
(16, 'UI/UX Design', 'Adept at user interface (UI) design, focusing on creating visually appealing and intuitive interfaces. Knowledgeable in user experience (UX) principles, ensuring that designs prioritize user needs, preferences, and overall satisfaction.'),
(17, 'Graphic Design', 'Proficiency in creating visual content using software like Adobe Photoshop, Illustrator, or Canva. Skills involve layout design, typography, and creating images for both digital and print media.'),
(18, 'Animation', 'Knowledge of creating motion graphics and animations using software like Adobe '),
(19, 'Digital Imaging', 'Ability to manipulate and enhance digital images using tools like Adobe Photoshop or GIMP. Skills include photo retouching, color correction, and image composition.'),
(20, 'Video Editing', 'Proficiency in editing and assembling video footage using software like Adobe Premiere Pro or Final Cut Pro. Skills involve cutting, splicing, adding effects/transitions, and adjusting audio.'),
(21, '3D Modeling and Animation', 'Expertise in creating three-dimensional models and animations using software such as Blender or Autodesk Maya. Skills include modeling, texturing, rigging, and animating 3D objects.'),
(22, 'Motion Graphics', 'Ability to create animated graphics and visual effects for videos, presentations, or websites using software like After Effects or Cinema 4D. Skills involve kinetic typography, animated logos, and dynamic visual elements.'),
(23, 'Audio Editing', 'Knowledge of editing and enhancing audio files using software like Audacity or Adobe Audition. Skills include cutting, mixing, adjusting levels, and adding effects to audio tracks.');

-- --------------------------------------------------------

--
-- Table structure for table `skills_projects`
--

CREATE TABLE `skills_projects` (
  `id` int NOT NULL,
  `project-id` int NOT NULL,
  `skill-id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills_projects`
--

INSERT INTO `skills_projects` (`id`, `project-id`, `skill-id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 4),
(4, 1, 6),
(5, 1, 10),
(6, 1, 11),
(7, 1, 12),
(8, 1, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories_projects`
--
ALTER TABLE `categories_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills_projects`
--
ALTER TABLE `skills_projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories_projects`
--
ALTER TABLE `categories_projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills_projects`
--
ALTER TABLE `skills_projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
