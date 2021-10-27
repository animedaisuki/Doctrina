-- phpMyAdmin SQL Dump
-- version 5.1.1deb3+bionic1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2021 年 10 月 27 日 14:50
-- 伺服器版本： 5.7.36-0ubuntu0.18.04.1
-- PHP 版本： 7.2.24-0ubuntu0.18.04.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `time` date NOT NULL,
  `rating` int(11) NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `course_detail`
--

CREATE TABLE `course_detail` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `learning_obj` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `course_detail`
--

INSERT INTO `course_detail` (`id`, `cid`, `learning_obj`, `views`) VALUES
(11, 10, 'You’ll learn the fundamentals of drawing', 0),
(12, 10, 'You’ll learn about materials Like the different pencil lead weights and what each one is best used for', 0),
(13, 10, 'Shading techniques', 0),
(14, 10, 'How to manage line weight', 0),
(15, 10, 'A process and structure to creating a drawing from start to finish, that’s easy for anyone to manage!', 0),
(16, 10, 'How to simplify objects to make them easy to draw!', 0),
(17, 10, 'How to recognize and draw using planes', 0),
(18, 10, 'How to light (and even photograph) a subject to make drawing easier (And how to light a portrait)', 0),
(19, 10, 'Different approaches to drawing to see what works best for you', 0),
(20, 10, 'An approach to preliminary shading and how to easily shade to create realism in your drawings!', 0),
(21, 11, 'create dynamic websites', 0),
(22, 11, 'add JavaScript to webpages', 0),
(23, 11, 'learn about using the Document Object Model', 0),
(24, 11, 'create and write JavaScript', 0),
(25, 12, 'write own javascript to manipulate HTML page', 0),
(26, 12, 'Gain strong fundamental knowledge of javascript', 0),
(27, 12, 'Apply JavaSript in real time applications', 0),
(28, 13, 'create amazing JavaScript applications', 0),
(29, 13, 'use JavaScript in projects', 0),
(30, 13, 'create an online calculator', 0),
(31, 14, 'Work In JavaScript Confidently', 0),
(32, 14, 'Have a Strong Understanding Of The Foundamentals Of JavaScript', 0),
(33, 14, 'Work With Variables and Strings', 0),
(34, 14, 'Work With Numbers In JavaScript', 0),
(35, 14, 'Learn and create calculator using JavaScript', 0),
(36, 14, 'Learn and create image slider with ligh-box effect', 0),
(37, 14, 'Create complete birth finder project which work dynamically!', 0),
(66, 18, 'How to draw any shape.', 0),
(67, 18, 'How to observe and analyze any subject.', 0),
(68, 18, 'How to draw any form by breaking it down into basic shapes before adding dark lines.', 0),
(69, 18, 'How to use light lines and basic shapes to lay an accurate foundation for finished drawings.', 0),
(70, 18, 'How to hold the pencil.', 0),
(71, 18, 'How to bring your drawings to life with detail and texture.', 0),
(72, 19, 'Learn to use Python professionally, learning both Python 2 and Python 3!', 0),
(73, 19, 'Create games with Python, like Tic Tac Toe and Blackjack!', 0),
(74, 19, 'Learn advanced Python features, like the collections module and how to work with timestamps!', 0),
(75, 19, 'Learn to use Object Oriented Programming with classes!', 0),
(76, 19, 'Understand complex topics, like decorators.', 0),
(77, 19, 'Understand how to use both the Jupyter Notebook and create .py files', 0),
(78, 19, 'Get an understanding of how to create GUIs in the Jupyter Notebook system!', 0),
(79, 19, 'Build a complete understanding of Python from the ground up!', 0),
(80, 20, 'Get to know the core concepts of serverless architecture and Serverless framework.', 0),
(81, 20, 'Use Serverless plugins.', 0),
(82, 20, 'Create REST endpoints with API Gateway.', 0),
(83, 20, 'Create executable isolated functions with AWS Lambda.', 0),
(84, 20, 'Bind the REST endpoints as event triggers for the Lambda functions.', 0),
(85, 20, 'Store data in a database with DynamoDB – without managing any servers.', 0),
(86, 20, 'Use AWS S3 to store data.', 0),
(87, 20, 'Use third-party APIs to create chatbots.', 0),
(88, 21, 'Learn the core Java skills needed to apply for Java developer positions in just 14 hours.', 0),
(89, 21, 'Be able to sit for and pass the Oracle Java Certificate exam if you choose.', 0),
(90, 21, 'Be able to demonstrate your understanding of Java to future employers.', 0),
(91, 21, 'Learn industry \"best practices\" in Java software development from a professional Java developer who has worked in the language for 18 years.', 0),
(92, 21, 'Acquire essential java basics for transitioning to the Spring Framework, Java EE, Android development and more.', 0),
(93, 21, 'Obtain proficiency in Java 8 and Java 11.', 0),
(94, 22, 'Install Jupyter Notebook Server', 0),
(95, 22, 'Create a new notebook', 0),
(96, 22, 'Explore Components of Jupyter Notebook', 0),
(97, 22, 'Use Kaggle Data Sets', 0),
(98, 22, 'Perform Probability Sampling', 0),
(99, 22, 'Explore and use Tabular Data', 0),
(100, 23, 'Learn how to code in Python, a popular coding language used for websites like YouTube and Instagram.', 0),
(101, 23, 'Learn TensorFlow and how to build models of linear regression.', 0),
(102, 23, 'Make an image recognition model with CIFAR.', 0),
(103, 24, 'Advance your programming skills from a junior level newbie to a competent intermediate level object oriented software developer', 0),
(104, 24, 'Design and develop software using best practices in Object oriented programming', 0),
(105, 24, 'Apply the 5 crucial object oriented design principles using Java', 0),
(106, 24, 'Apply design patterns such as Strategy, Observer, Template Method, Factory, and Builder', 0),
(107, 24, 'Make the leap into professional software craftsmanship and take your career to the next level!', 0),
(108, 25, 'Prepare data using SQL', 0),
(109, 25, 'Understand the main conceptions of classification models', 0),
(110, 25, 'Construct a customer dashboard using Power BI', 0),
(111, 25, 'Create a segmentation model using SQL', 0),
(112, 25, 'Build a targeting model using Azure ML', 0),
(113, 25, 'Build a recommendation system using Azure ML', 0),
(114, 26, 'Familiarize yourself with Python', 0),
(115, 26, 'Learn data analysis using modern processing techniques with NumPy, SciPy, and Pandas', 0),
(116, 26, 'Determine different approaches to data visualization, and how to choose the most appropriate one for your needs', 0),
(117, 26, 'Make 3D visualizations mainly using mplot3d', 0),
(118, 26, 'Work with image data and build systems for image recognition and biometric face recognition', 0),
(119, 26, 'Grasp how to use deep neural networks to build an optical character recognition system', 0),
(120, 27, 'Learn PHP Object Oriented Programming Concepts.', 0),
(121, 27, 'How to Apply OOP Concept in your Project.', 0),
(122, 27, 'Implement OOP Concepts like Inheritance, Polymorphism, Data Encapsulation, Data Abstraction and Overriding.', 0),
(123, 27, 'Learn How to Write Modular Code and Reusable Code using OOP Concepts.', 0),
(124, 27, 'Learn to Write Classes, Interface, Abstract Classes and Traits.', 0),
(125, 27, 'Learn PHP OOP with Examples, Exercises, Assignments and Quiz.', 0),
(126, 28, 'Develop confidence in solving problems by yourself', 0),
(127, 28, 'Develop ability and confidence in teaching yourself the latest PHP techniques', 0),
(128, 28, 'Have a solid knowledge foundation in PHP basics', 0),
(129, 28, 'Be able to self-study a new built-in function by reading the PHP manual', 0),
(130, 28, 'Create a membership system that allows user to register and log in', 0),
(131, 28, 'Create a membership system that allows user to upload files', 0),
(132, 29, 'Creating Dynamic Web Pages in PHP', 0),
(133, 29, 'Creating a MySQL Database to store Member Data', 0),
(134, 29, 'Creating PHP & AJAX Validated Member Registration Forms', 0),
(135, 29, 'Creating PHP & AJAX Validated Member Login Authentication', 0),
(136, 29, 'Working with Session Variables – Login/Logout Functionality', 0),
(137, 29, 'Developing Validated Contact Forms for Web to Email Transmission via SMTP', 0),
(138, 29, 'PhpMailer Integration to facilitate Email Transmission', 0),
(139, 29, 'Uploading the Project from a Local Testbed to a Production Server', 0),
(140, 30, 'How to Create Form Box With HTML/CSS/PHP', 0),
(141, 30, 'How to Create Mysql Database & Create Table into the Database.', 0),
(142, 30, 'How to Read Data From Mysqili Database With PHP Coding', 0),
(143, 30, 'How to Crate Data in to The Mysqli Database With PHP Coding', 0),
(144, 30, 'How to Update Data in to the Mysqli Database With PHP', 0),
(145, 30, 'How to Delete Data From The Mysqli Database With PHP.', 0),
(146, 31, 'Create accurate and believable head drawings and portrait paintings digitally\r\n', 0),
(147, 31, 'Understand the anatomy of the head and face\r\n', 0),
(148, 31, 'Understand painting principles that will aid you in general\r\n', 0),
(149, 31, 'Understand light and color\r\n', 0),
(150, 32, 'Learn how to use charcoal, graphite pencil, pens, and makers to effectively draw, individually and in combination with other materials\r\n', 0),
(151, 32, 'Learn how to use watercolor paint, India ink, and acrylic paint to produce artistic, colorful washes\r\n', 0),
(152, 32, 'Learn how to effectively paint with India ink and acrylic paint, using various dynamic mark making techniques\r\n', 0),
(153, 32, 'Practice creativity and artistic expression\r\n', 0),
(154, 32, 'Learn how to use optional materials such as salt, water, rubbing alcohol, and acetone to produce interest and texture in artworks\r\n', 0),
(155, 32, 'Draw and paint creative, expressive portraits, landscapes, still life artworks and more, using a combination of representational and expressive techniques\r\n', 0),
(156, 33, 'Update PHP webpages easily', 0),
(157, 33, 'Setup local Apache server to render PHP files', 0),
(158, 33, 'Understand PHP data types', 0),
(159, 33, 'Write basic PHP Syntax', 0),
(160, 33, 'Use echo and print statements to display text', 0),
(161, 33, 'Use various types of PHP Operators', 0),
(162, 33, 'Create and use variables', 0),
(163, 34, 'Learn from scratch to make a sculpture', 0),
(164, 34, 'To realize a three-dimensional piece modeled in plasticine or clay', 0),
(165, 34, 'Have knowledge about the use of materials suitable for the manufacture of a sculpture', 0),
(166, 34, 'Construct a simple stable structure', 0),
(167, 34, 'Perform light volumes', 0),
(168, 34, 'Work textures with different techniques', 0),
(169, 35, 'Urban Sketching\r\n', 0),
(170, 35, 'Environmental Illustration\r\n', 0),
(171, 35, 'Outdoor Mapping\r\n', 0),
(172, 35, 'Landscape Sketching\r\n', 0),
(173, 35, 'Travel Sketching\r\n', 0),
(174, 35, 'Color Deviceing\r\n', 0),
(175, 36, 'Solve over 150 Python exercices from beginner level to expert levels.\r\n', 0),
(176, 36, 'How to solve coding problems similar to job interview problems.\r\n', 0),
(177, 36, 'Create a good foundation of elementary things in Python what you will use in everyday programming.\r\n', 0),
(178, 36, 'Projects sections that can be added to a portofolio for developer jobs applications.\r\n', 0),
(179, 37, 'Be brilliant & use up layers of paintskins or learn how to make new ones from scratch\r\n', 0),
(180, 37, 'Know what glue is archival for paintings\r\n', 0),
(181, 37, 'Attain knowledge of how to easily make an appealing abstract background with texture\r\n', 0),
(182, 37, 'Discover an easy secret to highlighting the tops artistically like a pro\r\n', 0),
(183, 37, 'Get inside knowledge on how to varnish a 3D painting easy & reduce brush lines\r\n', 0),
(184, 37, 'Know the supplies to get & easy formulas to follow\r\n', 0),
(185, 37, 'Accomplish forming the paintskins into amazing pipe corals of beauty\r\n', 0),
(186, 37, 'Imagine & form interesting pipe coral shapes\r\n', 0),
(187, 37, 'Dazzle others with your use of mesmerizing colors\r\n', 0),
(188, 37, 'Attractively arrange the pipe corals on canvas\r\n', 0),
(189, 37, 'Find inspiration easily with this one tool to prevent Artist\'s Block\r\n', 0),
(190, 38, 'Use NumPy to quickly work with Numerical Data\r\n', 0),
(191, 38, 'Use Pandas for Analyze and Visualize Data\r\n', 0),
(192, 38, 'Use Matplotlib to create custom plots\r\n', 0),
(193, 38, 'Learn how to use statsmodels for Time Series Analysis\r\n', 0),
(194, 38, 'Calculate Financial Statistics, such as Daily Returns, Cumulative Returns, Volatility, etc..\r\n', 0),
(195, 38, 'Use Exponentially Weighted Moving Averages\r\n', 0),
(196, 39, 'Pass any basic level art history class at the college level.\r\n', 0),
(197, 39, 'Go to museums and art galleries and really understand what you are looking at.', 0),
(198, 40, 'Framework with a small footprint', 0),
(199, 40, 'Simple solutions over complexity', 0),
(200, 40, 'Clear documentation', 0),
(201, 41, 'To learn the basics of form as they pertain to sculpture.\r\n', 0),
(202, 41, 'To gain the ability to sculpt an original figure from scratch.\r\n', 0),
(203, 41, 'To obtain the knowledge of materials used in sculpting character maquettes.\r\n', 0),
(204, 41, 'To create your own ideas inspired by the practice of observation and the use of practical techniques.\r\n', 0),
(205, 42, 'Build a simple HTML text site', 0),
(206, 42, 'Program websites with JavaScript', 0),
(207, 42, 'Build and publish a Google Chrome Extension', 0),
(208, 42, 'Style web pages using CSS', 0),
(209, 42, 'Build a Pipboy using Bootstrap', 0),
(223, 46, 'Learning both python 2 and python 3.\r\n\r\n', 0),
(224, 46, 'Have a basic understanding about Python programming language.', 0),
(225, 46, 'Learn Python from experienced professional.', 0),
(226, 46, 'Detailed aspects of the Python programming language.', 0),
(227, 46, 'Go from a total beginner to a confident Python programmer', 0),
(228, 47, 'Basic Python programming ', 0),
(229, 47, 'How to create a console application and how to convert it into a web app', 0),
(230, 47, 'How to create executable files and an installation wizard from your Python app', 0),
(231, 47, 'Basic Python programming', 0),
(232, 47, 'How to create a console application and how to convert it into a web app', 0),
(233, 47, 'How to create executable files and an installation wizard from your Python app', 0),
(234, 49, 'Learn the core Java skills', 0),
(235, 49, 'Learn the “best practice” from the industry professional', 0),
(236, 49, 'Use data structures and arrays to handle data sets and collection of objects', 0),
(237, 50, 'You will learn to debug your code', 0),
(238, 50, 'You will learn to use PHP for back end', 0),
(239, 50, 'How to use forms to submit data to databases', 0),
(240, 50, 'You will learn code refactoring', 0),
(247, 53, 'Basic java functions, such as classes, objects and loops.', 0),
(248, 53, 'Learn to create a counter and count how many times this word occurred.', 0),
(249, 53, 'Learn to create a file and extract data from it.', 0),
(250, 54, 'Basic Java coding', 0),
(251, 54, 'Use data structures and arrays to handle data sets and collection of objects', 0),
(252, 54, 'How to use Java to build a basic calculator ', 0),
(269, 59, 'asdfasdf', 0),
(270, 61, '•	Master Machine Learning on Python & R\r\n•	Have a great intuition of many Machine Learning models\r\n•	Make accurate predictions\r\n•	Make powerful analysis\r\n•	Make robust Machine Learning models\r\n•	Create strong added value to your business\r\n•	Use Machine Learning for personal purpose\r\n•	Handle specific topics like Reinforcement Learning, NLP and Deep Learning\r\n•	Handle advanced techniques like Dimensionality Reduction\r\n•	Know which Machine Learning model to choose for each type of problem\r\n•	Build an army of powerful Machine Learning models and know how to combine them to solve any problem\r\n', 0),
(271, 62, '•	Learn to use powerful Python libraries such as NumPy, Pandas, and Matplotlib\r\n•	Understand Modern Portfolio Theory\r\n•	Use Monte Carlo simulation techniques to optimize portfolio allocation\r\n•	Understand SciPy minimization algorithms to create optimized portfolio holdings\r\n•	Use and understand stock fundamentals data, such as CFC, Revenue, and EPS\r\n•	Calculate the Sharpe Ratio for any stock\r\n•	Understand cumulative returns and daily average returns in stocks\r\n', 0),
(272, 63, '•	Learn to program in R at a good level\r\n•	Learn how to use R Studio\r\n•	Learn the core principles of programming\r\n•	Learn how to create vectors in R\r\n•	Learn how to create variables\r\n•	Learn about integer, double, logical, character and other types in R\r\n•	Learn how to create a while() loop and a for() loop in R\r\n•	Learn how to build and use matrices in R\r\n•	Practice working with statistical data in R\r\n•	Practice working with financial data in R\r\n•	Practice working with sports data in R\r\n', 0),
(273, 65, 'Tinky Winky (played by Dave Thompson and Simon Shelton in the original series and by Jeremiah Krage in the revival series)[15] is the first Teletubby, as well as the largest and oldest of the group. He is covered in purple terrycloth and has a triangular antenna on his head. He often carries a red bag.', 0),
(274, 65, 'Dipsy (played by John Simmit in the original series and by Nick Kellington in the revival series)[16] is the second Teletubby. He is green and named after his antenna, which resembles a dipstick. Dipsy is the most stubborn of the Teletubbies, and will occasionally refuse to go along with the others\' group opinion. His face is notably darker than the rest of the Teletubbies, and the creators have stated that he is black.[17] He often wears a large hat with a black and white pattern.', 0),
(275, 65, 'Laa-Laa (played by Nikky Smedley in the original series and by Rebecca Hyland in the revival series)[16] is the third Teletubby. She is yellow and has a curly antenna. Laa-Laa is very sweet, likes to sing and dance, and is often shown looking out for the other Teletubbies. Her favourite toy is an orange rubber ball.', 0),
(276, 66, 'Create model view controller web applications with Spring Web MVC\r\n', 0),
(277, 66, 'Secure your applications and services with Spring Security\r\n', 0),
(278, 66, 'Persist data with Spring Data and MongoDB\r\n', 0),
(279, 66, 'Create RESTful web services and consume them in web pages with Spring Web MVC\r\n', 0),
(280, 66, 'Include social login in your applications with OpenID Connect\r\n', 0),
(281, 66, 'Build reactive applications and services with Spring Web Flux and Project Reactor\r\n', 0),
(282, 66, 'Use Spring Cloud Config to configure your application\r\n', 0),
(283, 69, 'Be familiar with the vast Java ecosystem\r\n', 0),
(284, 69, 'Jump into a real world Java program with confidence\r\n', 0),
(285, 69, 'Understand the pros and cons of competing Java tools and frameworks\r\n', 0),
(286, 70, 'Develop web application using Java/J2EE', 0),
(287, 70, 'Learn about Java framework Spring MVC and Mybatis', 0),
(288, 70, 'Learn how to combine/integrate front-end and back-end with two different frameworks', 0),
(289, 70, 'Learn about database operations Create, Read, Update and Delete', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `doc_path`
--

CREATE TABLE `doc_path` (
  `id` int(11) NOT NULL,
  `filename` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `path` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `week` int(11) NOT NULL,
  `uuid` varchar(400) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `doc_path`
--

INSERT INTO `doc_path` (`id`, `filename`, `uid`, `cid`, `path`, `week`, `uuid`) VALUES
(1, 'Recursion.pdf', 76, 10, 'https://2bnumberone.uqcloud.net/demo/uploads/files/Recursion.pdf', 1, 'cde84f6d-308f-42b0-ba06-4faf0db9a106'),
(2, 'Recursion1.pdf', 76, 10, 'https://2bnumberone.uqcloud.net/demo/uploads/files/Recursion1.pdf', 2, '7c9d20b2-76b6-474b-a1d6-51a4ef4770f0'),
(3, 'Recursion2.pdf', 76, 10, 'https://2bnumberone.uqcloud.net/demo/uploads/files/Recursion2.pdf', 3, '803e6a9e-5836-4549-9339-c7fa2178f2c5'),
(4, 'Recursion3.pdf', 76, 10, 'https://2bnumberone.uqcloud.net/demo/uploads/files/Recursion3.pdf', 4, '88d577b5-afb3-4a4b-92b6-3c6b8befd2df'),
(5, 'Recursion4.pdf', 76, 10, 'https://2bnumberone.uqcloud.net/demo/uploads/files/Recursion4.pdf', 5, '47fb0fe5-5388-49d1-8705-8509c7072d8e'),
(6, 'Recursion5.pdf', 76, 18, 'https://2bnumberone.uqcloud.net/demo/uploads/files/Recursion5.pdf', 1, '50dcd1f8-190d-43bd-b2de-bd078b7bfe87'),
(7, 're.pdf', 78, 21, 'https://2bnumberone.uqcloud.net/demo/uploads/files/re.pdf', 2, '6a669c38-ab5c-4e82-b5f2-a23be222f3c7'),
(8, 're1.pdf', 78, 21, 'https://2bnumberone.uqcloud.net/demo/uploads/files/re1.pdf', 3, '0fa0947b-df8e-420b-8580-c6a78adc150a'),
(9, 'recur.pdf', 78, 24, 'https://2bnumberone.uqcloud.net/demo/uploads/files/recur.pdf', 1, '79897684-98a7-46cf-9f7b-5b729692258e'),
(10, 'recur1.pdf', 78, 24, 'https://2bnumberone.uqcloud.net/demo/uploads/files/recur1.pdf', 2, '7ed1165e-b071-4ead-9562-0567268562bd'),
(11, 'recur2.pdf', 78, 24, 'https://2bnumberone.uqcloud.net/demo/uploads/files/recur2.pdf', 3, 'f27727af-31c7-4f5e-b42a-f71cee1f8948'),
(12, '777.pdf', 78, 27, 'https://2bnumberone.uqcloud.net/demo/uploads/files/777.pdf', 1, 'eea2e4bc-9d4e-4519-abca-59b087635ffc'),
(13, '7771.pdf', 78, 27, 'https://2bnumberone.uqcloud.net/demo/uploads/files/7771.pdf', 3, '85bb696f-ef56-43c0-a45b-26d715bc1e24'),
(14, '7772.pdf', 78, 27, 'https://2bnumberone.uqcloud.net/demo/uploads/files/7772.pdf', 4, 'f4d14630-0c0d-48b1-9ae5-ad12b711e134'),
(15, '888.pdf', 78, 28, 'https://2bnumberone.uqcloud.net/demo/uploads/files/888.pdf', 1, '8fc0e44c-0a84-4870-a2a1-af5fa43a47ad'),
(16, '999.pdf', 78, 28, 'https://2bnumberone.uqcloud.net/demo/uploads/files/999.pdf', 2, '4446e5fb-fc7d-4024-8702-b63efe50d07e'),
(17, '9991.pdf', 78, 28, 'https://2bnumberone.uqcloud.net/demo/uploads/files/9991.pdf', 3, 'f87dc0a0-45ba-4559-a899-3cf404887925'),
(18, '9992.pdf', 78, 28, 'https://2bnumberone.uqcloud.net/demo/uploads/files/9992.pdf', 5, 'a0b2875c-74b9-4b2e-ada8-12d8e23102bc'),
(19, '9993.pdf', 78, 28, 'https://2bnumberone.uqcloud.net/demo/uploads/files/9993.pdf', 6, '74f09e32-1888-4618-bf1d-4ea872ff67a6'),
(20, 'algorithm.pdf', 78, 29, 'https://2bnumberone.uqcloud.net/demo/uploads/files/algorithm.pdf', 1, 'ac6e0438-88fa-48a4-a7ca-637ffaf04610'),
(21, 'algorithm1.pdf', 78, 29, 'https://2bnumberone.uqcloud.net/demo/uploads/files/algorithm1.pdf', 1, 'b0f7a578-37db-45b1-b57e-4673c01a8952'),
(22, 'algorithm2.pdf', 78, 29, 'https://2bnumberone.uqcloud.net/demo/uploads/files/algorithm2.pdf', 1, '5df7dc74-4f77-4966-b387-b27cead84c4f'),
(23, 'algorithm3.pdf', 78, 29, 'https://2bnumberone.uqcloud.net/demo/uploads/files/algorithm3.pdf', 2, '7ff8d9bd-6b09-4434-a033-54e63d703202'),
(24, 'algorithm4.pdf', 78, 29, 'https://2bnumberone.uqcloud.net/demo/uploads/files/algorithm4.pdf', 3, '0aaa3047-af26-4b2c-9ed2-2a901505a2cf'),
(25, 'algorithm5.pdf', 78, 29, 'https://2bnumberone.uqcloud.net/demo/uploads/files/algorithm5.pdf', 4, '0676f863-1b1b-4ff7-92b2-81f57f96e9b0'),
(26, 'Start_Point_How_to_use_CI3.pdf', 85, 40, 'https://2bnumberone.uqcloud.net/demo/uploads/files/Start_Point_How_to_use_CI3.pdf', 1, 'ae706d3b-aaf5-4318-999f-b71bde656973'),
(27, 'Queries_in_Codeigniter_3.pdf', 85, 40, 'https://2bnumberone.uqcloud.net/demo/uploads/files/Queries_in_Codeigniter_3.pdf', 2, '6d6c78ca-006c-4db0-bfa7-196d90ae19fc'),
(28, 'sql_-_Copy_(2)1.docx', 76, 59, 'https://2bnumberone.uqcloud.net/demo/uploads/files/sql_-_Copy_(2)1.docx', 1, '6cdbdfb3-ba40-49c1-a612-45a9483752d1'),
(31, 'upload_in_codeignier31.pdf', 85, 40, 'https://2bnumberone.uqcloud.net/demo/uploads/files/upload_in_codeignier31.pdf', 3, 'ae2e58d7-dac0-4afd-939d-7887f691b854'),
(33, 'Deco7180__Participation,_Documentation_Reflection_.pdf', 93, 66, 'https://2bnumberone.uqcloud.net/demo/uploads/files/Deco7180__Participation,_Documentation_Reflection_.pdf', 1, '9e947699-8e5b-4f2d-aa0f-4c010822f10f'),
(35, 'Studio3_Build_Assessment_4_(2).pdf', 93, 66, 'https://2bnumberone.uqcloud.net/demo/uploads/files/Studio3_Build_Assessment_4_(2).pdf', 3, 'f706a1a8-a757-45a2-8b88-05d568fd8eee'),
(36, 'COMP3506_Tutorial_Week_2_(1).pdf', 93, 69, 'https://2bnumberone.uqcloud.net/demo/uploads/files/COMP3506_Tutorial_Week_2_(1).pdf', 2, '6024f174-4b94-44c9-8f68-e55f78300113'),
(37, 't2solutions(1).pdf', 93, 69, 'https://2bnumberone.uqcloud.net/demo/uploads/files/t2solutions(1).pdf', 2, 'b5e8d143-078a-4b28-80a0-838f1e14226c'),
(38, 'COMP3506_7505_Resources_(1).pdf', 93, 69, 'https://2bnumberone.uqcloud.net/demo/uploads/files/COMP3506_7505_Resources_(1).pdf', 3, '01082f16-c0a4-45f7-9103-1aa30b74d201'),
(39, 'Week_3_Tutorial_(1).pdf', 93, 69, 'https://2bnumberone.uqcloud.net/demo/uploads/files/Week_3_Tutorial_(1).pdf', 3, '67dee7d4-704f-4940-8509-8e50b431e85f'),
(40, 'COMP3506_7505_Resources_(3).pdf', 93, 69, 'https://2bnumberone.uqcloud.net/demo/uploads/files/COMP3506_7505_Resources_(3).pdf', 4, 'f593fa90-27b3-41a0-b94b-93f70b9fb3be'),
(41, 't4solutions.pdf', 93, 69, 'https://2bnumberone.uqcloud.net/demo/uploads/files/t4solutions.pdf', 4, '51f18942-d564-4645-9576-94ab3c62658f'),
(42, 'COMP3506_Week_5_Tutorial.pdf', 93, 69, 'https://2bnumberone.uqcloud.net/demo/uploads/files/COMP3506_Week_5_Tutorial.pdf', 5, '17cb0e4a-bfad-4ca2-8ef9-45b80cb120aa'),
(43, 't5solutions_(1).pdf', 93, 69, 'https://2bnumberone.uqcloud.net/demo/uploads/files/t5solutions_(1).pdf', 5, '3f5916b2-539e-4e4b-84bc-80dc08cfd21a'),
(44, 'COMP3506_Week_10_Tutorial.pdf', 93, 70, 'https://2bnumberone.uqcloud.net/demo/uploads/files/COMP3506_Week_10_Tutorial.pdf', 10, '93f39533-a823-402d-8fcd-77ed145278bc'),
(45, 't10solutions.pdf', 93, 70, 'https://2bnumberone.uqcloud.net/demo/uploads/files/t10solutions.pdf', 10, '22366724-5740-4521-92a3-594c468e3bb7'),
(46, 'COMP3506_Week_7_Tutorial.pdf', 93, 70, 'https://2bnumberone.uqcloud.net/demo/uploads/files/COMP3506_Week_7_Tutorial.pdf', 7, 'fb465f7d-d91f-4856-9e2e-2a3237d54da8'),
(47, 't7solutions_(3).pdf', 93, 70, 'https://2bnumberone.uqcloud.net/demo/uploads/files/t7solutions_(3).pdf', 7, '799b4f6c-a831-47a8-88c7-70fa7cfda955'),
(48, 'COMP3506_Week_8_Tutorial(1).pdf', 93, 70, 'https://2bnumberone.uqcloud.net/demo/uploads/files/COMP3506_Week_8_Tutorial(1).pdf', 8, '6645660d-5432-47f3-9bfa-699d58715558'),
(49, 'COMP3506_Week_9_Tutorial.pdf', 93, 70, 'https://2bnumberone.uqcloud.net/demo/uploads/files/COMP3506_Week_9_Tutorial.pdf', 9, 'c6806f4f-d7ed-4f72-ba2a-5555ecb267c0'),
(50, 't9solutions_(1).pdf', 93, 70, 'https://2bnumberone.uqcloud.net/demo/uploads/files/t9solutions_(1).pdf', 9, 'a7c488e4-b8fb-4d84-b593-edd361e3c370');

-- --------------------------------------------------------

--
-- 資料表結構 `email_token`
--

CREATE TABLE `email_token` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `favorite_list`
--

CREATE TABLE `favorite_list` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `favorite_list`
--

INSERT INTO `favorite_list` (`id`, `uid`, `course_id`) VALUES
(2, 82, 24),
(3, 82, 11),
(5, 78, 27),
(6, 78, 28),
(8, 78, 29),
(10, 84, 38),
(11, 84, 14),
(12, 84, 13),
(13, 84, 12),
(16, 84, 11),
(17, 84, 40),
(18, 85, 40),
(19, 78, 19),
(20, 80, 19),
(21, 80, 36),
(22, 80, 38),
(23, 78, 11),
(24, 79, 46),
(26, 82, 27),
(27, 81, 61),
(28, 81, 62),
(29, 81, 63),
(31, 90, 49),
(33, 78, 42),
(34, 91, 62),
(35, 79, 53),
(37, 93, 21),
(38, 93, 18),
(39, 93, 65),
(40, 93, 62);

-- --------------------------------------------------------

--
-- 資料表結構 `forget_pass_token`
--

CREATE TABLE `forget_pass_token` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `forget_pass_token`
--

INSERT INTO `forget_pass_token` (`id`, `uid`, `email`, `token`, `date`) VALUES
(39, 82, '707636519@qq.com', 'TyP4Yu/IPnO41M9hvk0jPMLtFwCMUSpcTrzKZfwkALc=', 1635054913),
(40, 88, 'wendyyeung7@gmail.com', 'DPai3LWhZUGnFEZ+smER5JzZIPYH284o0yWHAzIiOjU=', 1635073178),
(41, 88, 'wendyyeung7@gmail.com', 'FURdaGTNZlfE6JFxHsYulReMJJhyrhzI7GfmvMz+5S8=', 1635073352),
(42, 88, 'wendyyeung7@gmail.com', 'eqrgQhVcOYHTCpzm+nHWhf5XS8JktyOfJOPwGCDdMGs=', 1635073359),
(43, 90, 'david.guo@uqconnect.edu.au', 'hJHlgtGgOBgB3n2rcqCmwLaiYZl3UegeK9YFjrfjUXA=', 1635076580),
(44, 93, 'testerDavidGuo@gmail.com', 'R2mrhc2QfX8ayWLLTonOXAGqXPmMjsWIPkz9/tK4K7Q=', 1635338728),
(45, 93, 'testerDavidGuo@gmail.com', 'ooABzdw/594t8DCP69pedRUJnZzl2jEOtNiQyYhbudw=', 1635338729),
(46, 93, 's4632761@student.uq.edu.au', 'Th5vka4rdTMhl3iaInHu/XuHFAmReu+JlNVV8SIPatg=', 1635343635),
(47, 93, 's4632761@student.uq.edu.au', 'wP0b//svPMt6jG29i9RtNIQ8H/u+S3f46C6oVZiojow=', 1635343695),
(48, 93, 's4632761@student.uq.edu.au', 'm92zGAJLmocgSe1pII+9r+80PzgEXxlBDH0H2IFYrMg=', 1635343759);

-- --------------------------------------------------------

--
-- 資料表結構 `upload_list`
--

CREATE TABLE `upload_list` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `course_description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `course_img_path` varchar(300) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'waiting',
  `intro` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `upload_date` date NOT NULL,
  `field` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `uuid` varchar(400) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `upload_list`
--

INSERT INTO `upload_list` (`course_id`, `course_name`, `course_description`, `course_img_path`, `intro`, `author_id`, `upload_date`, `field`, `uuid`) VALUES
(10, 'How to Draw From Beginner to Master', 'I designed this course to work for everyone, even students who claim they can barely draw a stick figure! Its made to help you to progress quickly and get to enjoy drawing.\r\nYou’ll learn time honored drawing techniques combined with contemporary approaches,\r\ndelivered to you in a no nonsense, no fluff video edited to match anyones pace perfectly!\r\nYou’ll learn techniques I’ve adapted by masters like Leonardo Da Vinci, \r\nWilliam Adolphe Bougereau and John singer sergeant as well as lighting techniques by Rebrandt Van Rijn.', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/caa2e6ce0150896a2d0473abb9e65a9.png', 'Drawing and Shading From Fundamentals to Photorealism', 76, '2021-10-21', 'sketch', '3f28529c-e99e-450d-bd1c-a6fdcbe328a9'),
(11, 'Building Websites JavaScript and the DOM', 'JavaScript HTML and CSS are the three core foundations for any website.  Learn to use JavaScript, and make some your web visitors happy.  Adding JavaScript will allow you to create more interactive and more incredible dynamic web content.\r\n\r\nJavaScript is super popular and used by most modern websites to create a better user experiences.  Its easy to get started with JavaScript as you don\'t need any special programs, its runs within your web browser.  JavaScript is designed for performing dynamic tasks within your web pages.\r\n\r\nThis course has everything you need to start creating your own JavaScript code.  This is a step by step guide explaining how and why JavaScript is used.   Learn the code fundamental concepts of JavaScript and how it can be used in connection to your HTML.\r\n\r\nExplore what you can do with JavaScript!\r\n•	This course covers \r\n•	JavaScript Variables\r\n•	Arrays and Objects\r\n•	working with Arrays\r\n•	Functions and how to use them\r\n•	Conditional statements\r\n•	Learning about the Document Object Model\r\n•	Connect JavaScript to your HTML webpage\r\n•	Selecting elements\r\n•	Updating CSS via JavaScript\r\n•	Events and listeners\r\n•	Making your webpage interactive\r\n\r\nThis course has what you need to learn about JavaScript.  Get to know JavaScript\r\n•	HD quality Videos\r\n•	Instructor with over 18 years Real world experience\r\n•	Top links and Resources\r\n•	Source Code included\r\n•	and much more\r\n\r\nJavaScript is in demand and learning JavaScript can set you apart.  See what JavaScript can do, start creating your own code today.\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Building_Websites_JavaScript_and_the_DOM2.jpg', 'Learn how to create interactive, dynamic effects on your website with JavaScript using the DOM', 77, '2021-10-21', 'javascript', '799ba803-ec87-420c-ada2-72e863049cfb'),
(12, 'JavaScript for beginners with live examples', 'In this Course you will learn JavaScript from Basic fundamentals to advanced topics, Each topic is covered with examples to understand the concepts better.\r\n\r\nWhat Exactly Is JavaScript?:\r\n\r\nJavaScript is a programming language used to make web pages interactive. It runs on your visitor\'s computer and doesn\'t require constant downloads from your website. JavaScript is often used to create polls, validation and quizzes.\r\n\r\nJavaScript was originally developed in 10 days in May 1995 by Brendan Eich, while he was working for Netscape Communications Corporation. Indeed, while competing with Microsoft for user adoption of web technologies and platforms, Netscape considered their client-server offering a distributed OS with a portable version of Sun Microsystems\' Java providing an environment in which applets could be run.[citation needed] Because Java was a competitor of C++ and aimed at professional programmers, Netscape also wanted a lightweight interpreted language that would complement Java by appealing to nonprofessional programmers, like Microsoft\'s Visual Basic.\r\n\r\nWhat you will learn in this course?:\r\n•	Basic fundamentals from scratch (covers everything from scratch)\r\n•	JavaScript Objects\r\n•	JavaScript Error Handling\r\n•	validations\r\n•	Debugging\r\n•	Multimedia\r\n•	Image map\r\n•	Animation\r\n\r\nAnd many more with examples replicating real time scenarios..\r\n\r\nAdditional Topics will be added regularly\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/JavaScript_for_beginners_with_live_examples.jpg', 'Javascript: Learn complete javascript from basics concepts to advanced with examples', 77, '2021-10-21', 'javascript', '3679cc2e-097c-4496-abc9-5cd9ffa5e945'),
(13, 'JavaScript in Action JavaScript Projects', 'JavaScript is the most popular programming language online.  I\'ve designed this course to show you some really amazing things that you can do with JavaScript.\r\n\r\nWithin this course you will learn to create an online JavaScript calculator application from scratch.  Learn how to create applications like this while learning more about using and applying JavaScript.  \r\nJavaScript is easy to use and creating applications in JavaScript can add a lot of value to your websites.  Web visitors enjoy interaction and having the ability to interact with your web content.  I\'ve been using and creating JavaScript applications for over 15 years and am always amazed at the capabilities it has.  You can do so many amazing things with JavaScript.\r\n\r\nWithin this course we show you how to add event listeners to classes, create and update calculations right on your webpage, and make updates to the application to provide more functionality.  \r\n\r\nThe source code and instruction is included within this course.  This course content you will not find elsewhere, let\'s start learning JavaScript.... Let\'s begin.\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/JavaScript_in_Action_JavaScript_Projects.jpg', 'Guide to create JavaScript coded applications like an online calculator from scratch', 77, '2021-10-21', 'javascript', 'ccf086b0-5f33-4557-8d61-a7af42691a2f'),
(14, 'Latest JavaScript Traning 2019 - JavaScript for Beginners', 'What is Javascript?  \r\n\r\njavascriptis a programming language that is usually used for web pages and applications. Its primary purpose on the Web is to add more functionality to pages. Good examples of javascript applications are online quizzes and surveys. \r\n \r\njavascript is a high-level, dynamic, run-time language.  \r\n\r\nWhy JavaScript is important?  \r\n\r\nIf you want to learn web designing, or web developing javascript is one of the fundamental things you should know and master. \r\n \r\njavascript is a client-side programming/scripting language most of the time we are using javascript for static web pages to make it dynamic.  \r\n\r\nThere are many reason you should learn javascript like it is a good introduction to computer programming.  \r\n\r\nThe Advantages of javascript\r\n\r\njavascript has multiple libraries and frameworks you can take advantage of. Just being familiar with javascript will be good enough for you to use and embed awesome functions in your applets or pages. Why? Because you can take advantage of its multiple frameworks and libraries that will make your life easier. Aside from that, it executes fast.  \r\n\r\nWhy you should take this course?  \r\n\r\njavascript for beginners is a complete course for anyone who is interested in learning javascript from scratch if you are totally new in JavaScript this course will guide you to learn JavaScript than if you know some basic about javascript again this course will take your carrier to the next advance level of javascript I have explained the lectures that anyone can understand.\r\n\r\nProject inside this course.\r\n\r\nYou will learn how to use JavaScript to build\r\n1.      javascript Birth Finder\r\n2.      javascript Simple Calculator\r\n3.      javascript Image Slider\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Latest_JavaScript_Traning_2019_-_JavaScript_for_Beginners.jpg', 'Start Learning JavaScript with Latest JavaScript Course & Build Calculator, Birth-Finder, Image Slider using JavaScript', 77, '2021-10-21', 'javascript', 'e20aeb17-a8c4-4f16-b501-9038e3596e0d'),
(18, 'The Art & Science of Drawing / BASIC SKILLS', 'The Art & Science of Drawing is a remarkable program that will teach you how to draw one day at a time.\r\nThe program is simple, each day you’ll watch one video lesson that will introduce an essential drawing skill,and then do the recommended practice.\r\nThe Art & Science of Drawing is overflowing with powerful insights into the drawing process and offers some of the clearest, most accessible drawing instruction available. \r\nMany of the tools and techniques you\'ll learn here are rarely seen outside of private art academies.\r\nThis course is highly recommended for anyone interested in painting as well. \r\nMost master painters agree that drawing is a fundamental and essential skill for all painters. \r\nBASIC SKILLS is the perfect primer for anyone wanting to learn to draw. The skills you\'ll learn here will dramatically improve your art & design no matter what medium you work in.\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/1ce09dcc78d4d1754ec46b4232ac4a0.png', 'Drawing is not a talent. It\'s a skill anyone can learn.', 76, '2021-10-21', 'sketch', 'c8586519-897e-4a22-b42d-4d8fa54ce5ad'),
(19, '2021 Complete Python Bootcamp From Zero to Hero in Python', 'Become a Python Programmer and learn one of employer\'s most requested skills of 2021!\r\nThis is the most comprehensive, yet straight-forward, course for the Python programming language on Udemy! \r\nWhether you have never programmed before, already know basic syntax, or want to learn about the advanced features of Python,\r\n this course is for you! In this course we will teach you Python 3.With over 100 lectures and more than 21 hours of video this comprehensive course leaves no stone unturned!\r\n This course includes quizzes, tests, coding exercises and homework assignments as well as 3 major projects to create a Python project portfolio!\r\nLearn how to use Python for real-world tasks, such as working with PDF Files, sending emails, reading Excel files, Scraping websites for informations, working with image files, and much more!\r\nThis course will teach you Python in a practical manner, with every lecture comes a full coding screencast and a corresponding code notebook! Learn in whatever manner is best for you!\r\nWe will start by helping you get Python installed on your computer, regardless of your operating system, whether its Linux, MacOS, or Windows, we\'ve got you covered.', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/ef21bcbb17355a81f54d51a4b253e90.png', 'Learn Python like a Professional Start from the basics and go all the way to creating your own applications and games', 76, '2021-10-21', 'python', '7eb82c32-253e-4368-a001-17dba86adb68'),
(20, 'Serverless JavaScript by Example', 'Serverless architecture is viewed as the savior of future web development, as it makes it possible to avoid many problems that traditional cloud hosting faces. The time has come for you to join the revolution!\r\nIn this course, you will learn how to use AWS and the Serverless framework, which simplifies the process of creating serverless applications significantly. This course will take you step by step through the process of creating three real-world applications, as well as configuring AWS and the Serverless framework to work locally on your machine. You’ll also see how to deploy your applications to AWS, as well as learning how to monitor your application.\r\nAt the end of this video tutorial, you’ll learn to create an image resizer on AWS, which will automatically resize images.\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Serverless_JavaScript_by_Example1.jpg', 'Become dexterous with live demonstrations on serverless web development', 77, '2021-10-21', 'javascript', '1a54a76e-0e74-4e0e-a290-5e22d2bd0aa1'),
(21, 'Java Programming Masterclass covering Java 11 & Java 17', 'You’ve just stumbled upon the most complete, in-depth Java programming course online. With close to 600,000 students enrolled and over one hundred and forty thousand reviews (with tens of thousands of those 5-star) to date, these comprehensive java tutorials cover everything you’ll ever need.\r\nWhether you want to:\r\n- build the skills you need to get your first Java programming job\r\n- move to a more senior software developer position\r\n- pass the oracle java certification exam\r\n- or just learn java to be able to create your own java apps quickly.\r\n...this complete Java Masterclass is the course you need to do all of this, and more.\r\nN.B. Java 17 support coming soon, read on below...\r\n\r\nWhy would you choose to learn Java?\r\nThe reality is that there is a lot of computer languages out there.  It\'s in the hundreds.  Why would you choose the Java language?\r\nThe number one reason is its popularity.  According to many official websites that track the popularity of languages, Java is either #1 or in the top 3.  Popularity means more companies and their staff are using it, so there are more career opportunities available for you if you are skilled in the language.\r\nThe last thing you want to do is pick a language that is not in mainstream use.  Java came out in the 1990s and is still very popular today.\r\nWhat version of Java should you learn?\r\n\r\nGenerally speaking, you would want to learn the very latest version of a computer programming language, but that\'s not the case with Java.\r\nOracle, the owner of Java release many versions of Java.  Some are released and expire in six months, with no future updates or support.  Other versions have long-term support, for many years.\r\nYou can probably see why learning a version of Java that has expired makes no sense, and is likely a waste of time.\r\nA company using Java technology (big or small) is not going to use a version of Java that has no updates or support.  They will stick to stable, well-supported versions of Java that get updates.\r\nRight now, in July 21 the version of Java that offers this long-term support (LTS) is Java 11 - It\'s being fully supported until at least 2025 and likely will be extended from there.\r\nAs such, you want to learn the version of Java that your future employer will use, and that\'s Java 11.\r\nThe next LTS version of Java is Java 17, scheduled for release in September 2021.   The course will be updated, and the updates made available to you free once Java 17 is live.  The course will also be updated in the future as new LTS versions are announced by Oracle.\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Picture_1.png', 'Learn Java In This Course And Become a Computer Programmer. Obtain valuable Core Java Skills And Java Certification', 78, '2021-10-21', 'java', 'b2955326-44fc-40ae-b3da-a31f57fd6596'),
(22, 'Data Science and Machine Learning For Beginners with Python', 'Data science is the study of data. It involves developing methods of recording, storing, and analyzing data to effectively extract useful information . Data is a fundamental part of our everyday work, whether it be in the form of valuable insights about our customers, or information to guide product,policy or systems development.   Big business, social media, finance and the public sector all rely on data scientists to analyse their data and draw out business-boosting insights.\r\n\r\nPython is a dynamic modern object -oriented programming language that is easy to learn and can be used to do a lot of things both big and small. Python is what is referred to as a high level language. That means it is a language that is closer to humans than computer.It is also known as a general purpose programming language due to it\'s flexibility. Python is used a lot in data science. \r\n\r\nMachine learning relates to many different ideas, programming languages, frameworks. Machine learning is difficult to define in just a sentence or two. But essentially, machine learning is giving a computer the ability to write its own rules or algorithms and learn about new things, on its own. In this course, we\'ll explore some basic machine learning concepts and load data to make predictions.\r\n\r\nWe will also be using SQL to interact with data inside a PostgreSQL Database.\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Data_Science_and_Machine_Learning_For_Beginners_with_Python2.jpg', 'Learn to Analyse , Make Predictions, Explore data Frames,Clean and Visualize Data', 77, '2021-10-21', 'datascience', 'ebe69ba2-140a-47f5-b553-8fc386d2f579'),
(23, 'Build and train a data model to recognize objects in images!', '\"Well done!!!!!! I found it the BEST source for me out of many to learn how to implement AI project due the facts it starts from the very basics of Python and TensorFlow and assumes no prior knowledge (or almost no prior knowledge) which should not be taken for granted since other courses do so. The instructor is wonderful and explains all the concepts wonderfully! Thank you so much! helped me a lot!\"\r\n\r\nThis course was funded by a wildly successful Kickstarter.\r\n\r\nLet\'s learn how to perform automated image recognition! In this course, you learn how to code in Python, calculate linear regression with TensorFlow, and perform CIFAR 10 image data and recognition. We interweave theory with practical examples so that you learn by doing.\r\n\r\nAI is code that mimics certain tasks. You can use AI to predict trends like the stock market. Automating tasks has exploded in popularity since TensorFlow became available to the public (like you and me!) AI like TensorFlow is great for automated tasks including facial recognition. One farmer used the machine model to pick cucumbers! \r\n\r\nJoin Mammoth Interactive in this course, where we blend theoretical knowledge with hands-on coding projects to teach you everything you need to know as a beginner to image recognition.\r\n\r\nEnroll today to join the Mammoth community!\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Build_and_train_a_data_model_to_recognize_objects_in_images!1.jpg', 'Make an image recognition model with TensorFlow & Python predictive modeling, regression analysis & machine learning!', 77, '2021-10-21', 'datascience', '4056dd99-6fc0-43a9-90f1-4182183ec129'),
(24, 'Master Object Oriented Design in Java - Homework + Solutions', 'SUPER CHARGE OF YOUR PROGRAMMING CAREER and acquire some seriously marketable skills!\r\n    Just because you learned how to use a hammer doesn\'t mean you are ready to construct a building. Similarly, It\'s not enough to just understand a programming language. That\'s just a tool that can be used to develop various programs. The real craftsmanship is in software DESIGN. \r\n    This course is designed to take a junior level programmer with limited knowledge about object orientation to a competent level object oriented software designer! I expect you to understand the basics of loops, methods and conditionals in Java. You\'ll be completing hands-on HOMEWORK Exercises through out the course! I have provided detailed video solutions to the exercises so that you can check your answers and get step by step instructions of how to tackle the object oriented design assignments. \r\n      You can find plenty of resources online for solving a programming puzzle  or practicing algorithms. But… when it comes to object oriented design,  admittedly, there is limited material out there for you to practice. So  in this course, we use a LEARN-BY-DOING  approach to explore a series of progressively challenging exercises to  discover the 5 core object oriented design PRINCIPLES summarized by an  acronym called SOLID: \r\n  (S). Single Responsibility   \r\n          (O). Open/Closed   \r\n    (L).  Liskov Substitution   \r\n          (l ). Interface Segregation   \r\n          (D). Dependency Inversion   \r\n      During this journey you\'ll get practice applying some of the most important DESIGN PATTERNS that competent developers must have under their belt. There are so many design patterns out there, but we\'ll be thoroughly covering only the most important ones. Save yourself the time from learning all the design patterns and going on a design frenzy. Focus on the 20% that covers 80% of the scenarios and add miles to your programming efficiency. \r\n  These cover 80% of patterns used out there in professional software development.   \r\n  1). Strategy Pattern   \r\n          2). Observer Pattern   \r\n          3). Builder pattern   \r\n          4). Factory method pattern   \r\n          5). Template Method Pattern   \r\n  6). Singleton Pattern \r\n                              The topics can be applied to pretty much any object oriented language. But, we\'ll be using Java, so I expect you to be familiar with the basic language constructs such as classes, methods and interfaces. But don\'t worry if you don\'t know about these, I\'ve taken the time to create 6 comprehensive prerequisite lessons on introduction to object orientation. In these lessons, new comers can learn about the basics of object orientation such as: \r\n  1). Classes and objects   \r\n          2). Inheritance and polymorphism,   \r\n          3). Interfaces and abstract classes.   \r\n                              I\'m certain that, by practicing the concepts covered, you\'ll make a substantial leap forward in your programming career. I hope to see you in the coming lessons.\r\nThis course is from This site offers lectures on practical software development topics to immediately impact your programming skills. Things you can take to your interview and feel confident in your abilities!\r\nWho this course is for:\r\n•	If you\'ve had trouble creating java programs that contain more than 1 or 2 classes, this course is for you\r\n•	If you\'re afraid to show your code to senior developers, you MUST take this course\r\n•	If you want to design well constructed software this course is for you\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Picture_2.png', 'Don\'t just learn Java! Learn to write practical industry standard object oriented software and super charge your career!', 78, '2021-10-21', 'java', '89959fc0-2a58-430d-a72c-f573eae24fff'),
(25, 'Become a Citizen Data Scientist : Marketing perspective', 'Become a Citizen Data Scientist is an introductory course take your skills to the next level\r\n\r\nThroughout the course, you will learn the basics concepts in order to understand and apply advanced analytics, …,\r\n\r\nYou will engage in 5 hands-on labs for creating advanced models ….\r\n•	Empower yourself with advanced analytics using SQL, Microsoft Azure ML, and Power BI\r\n•	At the end of the course, you’ll be able to prepare data using SQL, create targeting and recommendations models using Microsoft Azure ML and conceive dynamic dashboard using Power BI.”\r\n \r\nBecause our goal is to get you up to speed as quickly as possible, we’ll cover through the 30 lectures,\r\n•	Lay the foundations of Citizen Data Science\r\n•	marketing framework analysis.\r\n•	Learn the basics of SQL\r\n•	Understand the main conceptions of classification models\r\n•	Quick start with Microsoft Azure ML\r\n•	Prepare data using SQL\r\n•	Construct a customer dashboard using Power BI\r\n•	Create a segmentation model using SQL\r\n•	Build a targeting model using Azure ML\r\n•	Build a recommendation system using Azure ML\r\n•	Test your progression with 5 quizzes\r\n\r\nThe ultimate course purpose is to unleash the potential of data science for your career and your organization\r\n\r\nThe course will enable you to extract actionable insight from your customers’ data\r\n \r\nAccording to a Mckinsey Study, demand for data scientists is projected to exceed supply by more than 50% by 2018. That’s the gap you as citizen Data Scientists are going to fill\r\nCitizen data scientist are \"Business people with the right attitude - curious, adventurous, determined - to research and improve things in the organization\" SAS\r\nThe need is so, that according to Gartner, by 2017, the number of citizen data scientists will grow 5 times faster than the number of highly skilled data scientists.\r\n \r\nThis course is designed for business professionals:  marketer, manager and analytical minds in every department … who want to take their skills to the next level.\r\n\r\nIf you have solid business knowledge, curious, determined to improve things in your company or just willing to learn new methods and tools than this course is for you….\r\n\r\nThe course may not be for you if you are looking for an in-depth discussion of the deeper mathematical and statistical theories behind the data science algorithms. \r\n\r\nYou will learn the main concepts of data science such as Data mining Process, Machine learning, and classification model\r\n\r\nYou will be introduced to a Marketing framework analysis based on 4 elements: EXPLORE, SEGMENT, TARGET AND RECOMMEND.\r\n\r\nYou will learn the basics of three tools: SQL, Power BI, and Microsoft Azure ML.\r\n\r\nYou will be able to test and practice all these skills through 5 Quizzes and 5 hands-on Labs: Data Preparation using SQL, Customer Dashboard using POWER BI, managerial segmentation with SQL, targeting and recommendation models using Microsoft Azure ML Studio.\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Become_a_Citizen_Data_Scientist_Marketing_perspective1.jpg', 'Understand your customer : Profiling, Segmentation, Targeting and Recommendation using Microsoft Azure ML, SQL, Power BI', 82, '2021-10-21', 'datascience', 'e55042b8-220a-42e7-acaa-4ac3f481ddc3'),
(26, 'Learning Path: From Python Programming to Data Science', 'Python has become the language of choice for most data analysts/data scientists to perform various tasks of data science. If you’re looking forward to implementing Python in your data science projects to enhance data discovery, then this is the perfect Learning Path is for you. Starting out at the basic level, this Learning Path will take you through all the stages of data science in a step-by-step manner.\r\n\r\nPackt’s Video Learning Paths are a series of individual video products put together in a logical and stepwise manner such that each video builds on the skills learned in the video before it.\r\n\r\nWe begin this journey with nailing down the fundamentals of Python. You’ll be introduced to basic and advanced programming concepts of Python before moving on to data science topics. Then, you’ll learn how to perform data analysis by taking advantage of the core data science libraries in the Python ecosystem. You’ll also understand the data visualization concepts better, learn how to apply them and  overcome any challenges that you might face while implementing them. Moving ahead, you’ll learn to use a wide variety of machine learning algorithms to solve real-world problems. Finally, you’ll learn deep learning along with a brief  introduction to TensorFlow.\r\n\r\nBy the end of the Learning Path, you’ll be able to improve the efficiency of your data science projects using Python.\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Learning_Path_From_Python_Programming_to_Data_Science.jpg', 'Unleash the true potential of Python by learning basic programming and high-end data science techniques.', 82, '2021-10-21', 'datascience', '53ad1e12-bfe7-489f-8552-bf27eb5a2c96'),
(27, 'Complete PHP OOP Concepts for Absolute Beginners + Projects', 'Right After this course, you can write Modular Code using Classes and Objects ......\r\nDuring Interview, You will be able to explain OOP concept with written examples ......\r\nApply the OOP Concepts right away into your existing project ......\r\nYou will understand how others develop and use OOP concept in the PHP Libraries ......\r\nLearn PHP OOP 10X times faster with Examples, Exercises, Assignments, Blogs and Quiz ......\r\nYou will learn OOP Concept with real time Examples - Database, Files, Posts, Students, Bank, University, Course, Lectures and many more Classes ......\r\n16+ hours of PHP OOP Training fully focused on Writing and Learning PHP OOP Concept ......\r\n-------------------------------------------------------------------------------------------------------------\r\nWhy should I learn OOP?\r\nObject Oriented Programming (OOP) is programming concept which brings the following benefits to your program:\r\n•	You logical group your code into Components.\r\n•	You build Small Components of code which can be reused.\r\n•	Components are extend or leverage from other Components.\r\n•	Simplify the complex concept into smaller Components.\r\n•	Extending the component, Reusing the Component, Hiding Features and many other benefits.\r\nIf you want to be senior developer or build website for business then you should know how to write in OOP.\r\nEven when you use the 3rd Party Libraries they are built using OOP and without knowing this OOP it is really difficult to use 3rd Party Libraries as well.\r\nBuilding your projects using OOP will be easy to extend and share by other developers as well.\r\n\r\nHow this course can help me learn OOP?\r\nThis course is designed to teach you OOP in two simple ways:\r\n1.	Understand and Able to Explain OOP Concept.\r\n2.	Implement OOP Concept using the real time examples.\r\nThere are Exercises, Assignments and Quiz focused to make sure you go thru the practical hands-on to remember the concept thoroughly.\r\n\r\n100% Guaranteed Learning Experience:\r\nWe teach one concept at a time and then leverage that skills to learn new topics.\r\nLectures are broken into specific outcome and carefully explained with theory and examples.\r\nEvery sections from Starting to Last is carefully organised into these categories:\r\n1.	Objective - What you\'ll learn in this section\r\n2.	What is it? - Explain about the Concept\r\n3.	Examples - Convert Concept into Real time Examples.\r\n4.	Exercises - Practice, Practice, Practice\r\n5.	Quiz - Test yourself\r\n6.	Assignments - Practical Handson\r\n7.	Blogs - References\r\n8.	Summary - What you have learned in this section\r\nWith lots of time spent in organizing these topics and making sure you get to learn PHP OOP Concept faster and with tons of supporting source code and proper guidance.\r\n\r\nWhat will I do in this Course?\r\nYou will get to know the Basics OOP Concept with examples.\r\nLearn how to apply that OOP Concept into real world examples like Database and File Operations.\r\nWe provide hands-on material upfront so that you have all tools and code to start with.\r\nYou will start with starting point source code and ending source code so that you know where you will start and end.\r\nYou will be:\r\n•	Learning how to write PHP OOP with Examples.\r\n•	Then do Exercise on the same topic by your own. (We provide solution as well)\r\n•	After that take the Quiz.\r\n•	Then take the Final Assignment Test. (Challenge yourself)\r\n•	Finally some reference blogs for continuing your study offline.\r\nWith proper source code materials, you are never lost.\r\nSections have a proper outcome before we start. So, know what you will learn after the section.\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Picture_3.png', 'Learn PHP OOP from Scratch: Object Oriented Programming Concepts with Examples and Projects. Learn PHP OOPS Guaranteed!', 78, '2021-10-21', 'php', '692fa589-de93-4a9d-bb94-af5e995bd419'),
(28, 'BlackBelt PHP and MySQL Skills for Creating Dynamic Websites', 'The aim of this course is to help you master web development in the most efficient way. \r\nThe content design of this course is inspired by the Jiu Jitsu ranking system. \r\nThe whole course includes seven levels: yellow, orange, green, blue, purple, brown and black. \r\nIn yellow, orange and green course, considering you just started your PHP study, the learning curve is kept at a rather smooth level.\r\nYou will learn the most fundamental coding concepts and simple operations.\r\nIn blue belt, things start to change. The learning curve starts to get steep and you will need to combine skills learnt at different times together.\r\nAfter purple belt, you will start to build programs that can be used in real-life situation. This means you will need to take into consideration safety and efficiency. \r\nWe know that everybody forgets. We also know that you have other things going on with your life and your study will be constantly interrupted. Therefore, every time previous knowledge is needed, we will give you a timely review. We believe this can make your study easier and more efficient.\r\nStarting from purple belt, you will learn how to build program that can survive in real life. This means you need to learn more than just coding skills. You will learn program design and safety and efficiency knowledge. \r\nWho this course is for:\r\n•	This course is for anyone who wants to build a dynamic website using PHP and MySQL\r\n•	This course is for anyone who wants to improve their PHP skills\r\n•	This course is for anyone who wants to learn more PHP techniques\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Picture_4.png', 'Learning how to create programs that are safe and efficient enough to survive in real life from ground zero.', 78, '2021-10-21', 'php', '11e127b3-03ad-40af-9e99-b4b22f3b6c65'),
(29, 'Create a Members Only Blog using PHP, MySQL, & AJAX', 'Course: Create a Members Only Blog using PHP, MySQL, & AJAX\r\nCreate a Database Driven Blog with Authentication, Validated Contact Forms, & Session Variables using PHP, MYSQL, & AJAX\r\nThis course offers a hands-on approach in learning how to develop web applications using PHP, MySQL, and AJAX.\r\n\r\nStudents will develop a blog with MySQL database integration. The project aims to cover the following key concepts:\r\n•	Creating Dynamic Web Pages in PHP\r\n•	Creating a MySQL Database to store Member Data.\r\n•	Creating PHP & AJAX Validated Member Registration Forms\r\n•	Creating PHP & AJAX Validated Member Login Authentication\r\n•	Working with Session Variables – Login/Logout Functionality\r\n•	Developing Validated Contact Forms for Web to Email Transmission via SMTP\r\n•	PhpMailer Integration to facilitate Email Transmission\r\n•	Uploading the Project from a Local Testbed to a Production Server\r\nThe concepts explored in this course will help students learn the essential skills necessary to develop web applications of any size and complexity.\r\nWhat you\'ll learn - Overview:\r\n•	Creating Dynamic Web Pages in PHP\r\n•	Creating a MySQL Database to store Member Data\r\n•	Creating PHP & AJAX Validated Member Registration Forms\r\n•	Creating PHP & AJAX Validated Member Login Authentication\r\n•	Working with Session Variables – Login/Logout Functionality\r\n•	Developing Validated Contact Forms for Web to Email Transmission via SMTP\r\n•	PhpMailer Integration to facilitate Email Transmission\r\n•	Uploading the Project from a Local Testbed to a Production Server\r\nKey Concepts:\r\n•	Login Authentication\r\n•	Database Development\r\n•	AJAX Integration\r\n•	PHPMailer\r\n•	Form Development\r\n•	Form Validation and Email Transmission\r\nWho this course is for:\r\n•	Students interested in learning how to Build Web Applications\r\n•	Students interested in Learning how to code in PHP\r\n•	Students interested in building their own Blog\r\n•	Students interested in Creating Contact forms with PHP & AJAX form Validation\r\n•	Students interested in Building User Authenticated Login Forms\r\n•	Students interested in learning how to Install and Configure PhpMailer\r\n•	Students interested in learning how to store User Data into MySQL Tables\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Picture_5.png', 'Create a Database Driven Blog with Authentication, Validated Contact Forms, & Session Variables using PHP, MYSQL, & AJAX', 78, '2021-10-21', 'php', '23993bfe-c9dd-4e90-9eb9-b10e4044a91c'),
(30, 'PHP for Beginners - Learn PHP OOP MySQLi CRUD', 'What is PHP ?\r\nPHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.\r\nWhat Can PHP Do?\r\nAnything. PHP is mainly focused on server-side scripting, so you can do anything any other CGI program can do, \r\nsuch as collect form data, generate dynamic page content, or send and receive cookies. But PHP can do much more.\r\nPHP can be used on all major operating systems, including Linux, many Unix variants (including HP-UX, Solaris and OpenBSD), Microsoft Windows, Mac OS X, RISC OS, and probably others. PHP also has support for most of the web servers today. This includes Apache, IIS, and many others. And this includes any web server that can utilize the FastCGI PHP binary, like lighttpd and nginx.\r\nPHP works as either a module, or as a CGI processor.\r\nWhat You will Get from this course\r\nIn this course you will learn PHP Basic But Most important things, its about PHP CRUD And CRUD means \r\n•	C - Create or insert data in to MySQLi Database using php code. \r\n•	R - Read data from MySQLi Database using php code. \r\n•	U - Update Data in MySQLi Database using php code. \r\n•	D - Delete Data from MySQLi Database using php code. \r\nYou will also learn how to create simple form box using HTML / CSS / PHP. \r\nWith step by step video with takes you to another level to Learn PHP Code.\r\n\r\nWhen i update something new, I add it to the course - at no additional cost to you! This is a course that will continue to add more and more to every aspect of your life.\r\nIn addition to the Udemy 30-day money back guarantee, you have my personal guarantee that you will love what you learn from this course.\r\n---------------------------------------------------------------------------------------------------------------------\r\nThis course will not remain this price forever! It\'s time to take action!\r\nwithout action nothing will change in you life, and I am also not responsible for your actions.\r\nClick the \"Buy Now\" button at the top right now!\r\nI am excited to see you in the course!\r\nSincerely,\r\nKazi Ariyan\r\n\r\n\r\nWho this course is for:\r\n•	Web Developers\r\n•	Web Designers\r\n•	Anyone who is new to PHP Developement\r\n•	Programmers\r\n•	Who Start with PHP Dynamic Website\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Picture_6.png', 'In This Course You will Learn How to Create, Read, Update and Delete Data From Your MySQLi Database', 78, '2021-10-21', 'php', '7813c22b-42a8-4761-821e-584471487c84'),
(31, 'Digital Head and Portrait Painting', 'Join the course that takes you from beginner to seasoned expert in portrait painting!\r\n\r\nDo you want to learn how to paint beautiful portraits? A refresher for anatomical drawing?  Maybe you want to understand how light and color work to improve your drawing and painting skills.\r\n\r\nThis \'Digital Head and Portrait Painting\' course will teach you how to create believable and appealing portrait drawings and paintings digitally, both in grayscale and color.  Whether you use Photoshop, ProCreate, Krita, or whatever other digital painting software, the content of this course will apply just the same!  The principles I teach even apply outside of the realm of portraits.\r\n\r\nI’ll guide you through the process of understanding face and head anatomy so you can confidently draw from both reference and you imagination, and I’ll show you some valuable resources to further expand your anatomical and artistic knowledge.  I’ll teach you the essentials of painting, light, and color, as well as explaining the way that common elements of portrait paintings should be implemented for the best results.  I’ll even go into full detail as I do two large painting demos for you, detailing my entire thought process and techniques so you can follow along every step of the way.\r\n\r\nThe human head is an essential part of drawing and painting people, and understanding it is indispensable when designing appealing and believable characters, drawing from observation, and making impressive portfolio pieces.  By the end of the course, you can go from knowing little about anatomy and drawing, to understanding and painting beautiful portraits!\r\n\r\nThe course is set up to take you through progressive steps that build on each other.  As you learn each principle, it will help you understand the next.  With 6.5 hours worth of lectures, there’s plenty to learn, and I look forward to sharing it all with you!\r\n\r\nYou\'ll also get exclusive resources and personal help!\r\n\r\nYou’ll have access to my own personal brushes for digital painting in ProCreate, the program that I use most frequently, as well as links to extra resources and reference for anatomy, drawing, design, and painting.  In addition, you’ll be able to join a Facebook group exclusively for artists to post your work and get feedback from me and your classmates.  You’ll also have priority for live feedback and paintovers during my livestreaming sessions on Twitch.\r\n\r\nPlus, this course comes with a 100% money-back guarantee if you’re not completely satisfied.  \r\n\r\nI’m ready to start helping you take your artistic abilities to the next level!\r\n\r\n\r\n\r\nJoin the course and let’s make some art together!', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Digital_Head_and_Portrait_Painting.jpg', 'Learn how to draw and paint the human head like a pro!\r\n', 83, '2021-10-21', 'painting', 'dd4e0d94-4a9a-40d7-a35f-127c13b99004'),
(32, 'Expressive Drawing, Painting & Mixed Media Techniques Course', 'Welcome to the expressive drawing, painting, and mixed media techniques masterclass! In this online artistic drawing and painting course, you will apply creativity and learn various dynamic mark making techniques in various drawing, painting, and mixed media projects.\r\n\r\nYou will learn how materials such as graphite, charcoal, watercolor paint, acrylic paint, India ink, ink pens and markers, and pastel can work individually or with each other in order to produce beautiful, amazing works of art. There are specific considerations for each of these materials, and by completing this course, you will become a \"materials master\"! I also show how to use optional materials such as water, rubbing alcohol, acetone, denatured alcohol, vellum paper, unique mark making tools such as feathers and mop brushes, and masking materials such as painter\'s tape, rubber cement, and masking fluid.\r\n\r\nHowever, if you only have access to paper, pencil, and some paint such as watercolor or acrylic, that is okay as well! I demonstrate these techniques and how they can be applied across a variety of mediums with a variety of mark making, erasing, and blending tools.\r\n\r\nThis course also allows you to practice creativity and expressiveness as you draw and paint in various artistic projects.\r\n\r\nBy the time you complete this expressive drawing and painting course, you will have produced a portfolio of amazing drawings, paintings, and mixed media works of art, including expressive and creative landscapes, portraits, still life drawings, and much, much more.\r\n\r\nOnce you enroll in this course, you get:\r\n\r\nLifetime access to all of the content, including over 8 hours of on-demand, helpful video demonstrations and instruction.\r\n\r\nVarious PDF handouts and support files.\r\n\r\nAccess to our exclusive Drawing Club forum, for helpful feedback and critique from peers and me, the instructor of this course, Jonathan Simon.\r\n\r\nAfter the introduction section (where we provide helpful considerations of mark making and materials), the sections in this drawing course focus on specific projects, so you can follow along with my demonstration. Each section includes a material list and support files:\r\n\r\nExpressive Ink Pen Eye Drawing with Watercolor - You will draw and paint an fun, beautiful, and expressive drawing and painting of an eye using various materials, including watercolor paint and ink pen and optional materials (salt and gesso).\r\n\r\nFlowing Fish Drawing with Color Wash - By the time you have completed this project, you will have learned various relevant mark making, drawing, painting, blending, and erasing techniques and how to effectively transfer images. You will also learn flowing drawing techniques for the fish drawing and various ways to produce a beautiful watercolor wash.\r\n\r\nInk and Watercolor Expressive Portrait - During this project, you will learn how to produce an interesting, expressive portrait drawing and painting, by using various dynamic mark making and painting methods with ink and watercolor.\r\n\r\nAtmospheric Ink Landscape with Acrylic Wash - You will draw an interesting landscape composition using ink, then we will apply a color wash using acrylic paint. Considerations of using ink and acrylic together as we draw and paint are included.\r\n\r\nInk and Pastel Artistic Tulip Landscape - In this project, you will draw an artistic landscape with colorful ink and add tulips with bright pastels. Material- and tool-specific considerations are included. Have fun!\r\n\r\nCharcoal Still Life with Masking Methods - You will learn charcoal mark making methods and assorted masking techniques to produce an artistic  still life drawing. We will then show how to safely tear and burn the edges for artistic effect.\r\n\r\nFinal Project: Portrait and Cityscape Artwork - In this final project of this course, we will use a variety of materials and methods used earlier in the course to produce an expressive portrait with a cityscape background. We will add layers of ink, charcoal, pastel, and gesso using two photos as reference.\r\n\r\nEnroll now and get started producing amazing, beautiful works of art! We\'ll see you in the course. There is a 30-day money-back guarantee, so if you don\'t like the course, you can get a refund. But we know you\'ll love this course, as you produce awesome drawings, paintings, and mixed media art projects in this course.\r\n\r\nPlease note that anyone who wants to draw or paint expressively can join this course, but if you have trouble drawing the eye or face in three of the projects, we suggest you enroll in our Drawing Masterclass, which is an unofficial prerequisite for this course. It is not required, and we show you in this expressive course how to use tracing and transferring methods instead of sketching from reference or imagination, but just in case, this is an FYI. We do not go over the forms and subforms of the eye in this course, since it is more about expanding beyond that and drawing expressively and creatively and adding to the representational drawings and paintings that we produce in this course. Our other course can be found here on Udemy by clicking on our profiles.', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/2543987_cc30_13.jpg', 'Learn methods+materials for amazing art: watercolor, acrylic, ink, pens, charcoal, pencil, pastel, abstract and more.\r\n', 83, '2021-10-21', 'painting', '801c439f-6914-4cf7-bfb3-2f101150890a'),
(33, 'PHP From Scratch : Practical Beginners Introduction', 'PHP is a popular programming language that you can use to write simple code for web pages. If you have been using HTML to develop websites, learning PHP will allow you to create dynamic pages. In this course,  you will learn the fundamentals of PHP. The course covers concepts such as how to embed PHP code into an HTML page, and reviews the basic PHP data types such as strings and arrays. The course also covers the different control structures in PHP, how to work with built-in PHP functions, and how to define your own custom functions.\r\nPHP is  one of the the most popular server-side language used to build dynamic websites.\r\nTopics include:\r\nHow to setup local PHP development environment\r\nWhat is PHP\r\nBasic PHP Syntax \r\nPHP Data Types\r\nPHP Variables\r\nPHP Variable Scopes\r\nPHP Arrays\r\nUsing Print and Echo Statements\r\nUsing code  comments\r\nPHP Operators\r\nUsing PHP Conditional Statements to make decisions\r\nUsing switch statement\r\nUsing while loops\r\nUsing For and foreach loops\r\nPHP Functions\r\nFunction arguments\r\nPHP String functions\r\nCreating custom functions\r\nPHP String functions\r\nPHP Include statement\r\nUsing echo and print statement\r\nPHP Date functions\r\nBuild  your own  yearly web calendar\r\nBuild a basic website\r\nWho this course is for:\r\n•	Beginner web developers\r\n•	Beginner programmers\r\n•	Anyone who wants to learn how to code with PHP\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Picture_7.png', 'Learn PHP From The Ground Up With Practical Hands-On Examples', 78, '2021-10-21', 'php', '55861c92-96ad-43b5-8383-81568963ee65');
INSERT INTO `upload_list` (`course_id`, `course_name`, `course_description`, `course_img_path`, `intro`, `author_id`, `upload_date`, `field`, `uuid`) VALUES
(34, 'Learn sculpture', 'Requirements\r\n•	No knowledge of sculpture of any kind is necessary.\r\n•	It is important to have a sculpture project to work: it is a 100% practical course and it is important that you work on a piece of your choice, so that your hands become accustomed to mastering materials and tools.\r\n•	If you still do not have a sculpture project, you can take the course and let yourself be inspired by it, but then you must create your own figure (or make a similar one to mine) so that knowledge is practical and not theoretical.\r\n•	Persistence: not always everything will come to the first. You have to exercise and repeat the exercises. Little by little everything will turn out exactly as you imagined.\r\n•	You want to experiment: making sculpture is fun!\r\n•	We will use a number of different materials and tools. Here is the list: drawing material, pencil or pen, sharpie, embossed wooden base, shelf squared or asparagus with nuts (plus cut-off for metal) or an L for shelves, Latex gloves, thinner, brushes, polyurethane foam, plastic bags and adhesive tape, vinyl or acrylic paint or automotive sealant for carts, cups and blisters, silicon rubber and TP catalyst (optional), clear acrylic lacquer Spray (optional), modeling clay (any brand), sand paper (240 or thinner), kitchen knife or cutter, modeling tools (wooden spatulas, carving tools and dental spatulas)\r\n•	All materials are required (except those indicated as optional). About modeling tools, I give you a recommendation: before buying all the tools you find in the art shop, watch the videos and buy what you need. When I started I had 3 tools and even though I have 50 now, I still use two or three favorites.\r\n•	A space to work with good light\r\nDescription\r\nMORE THAN 700 STUDENTS IN THE SPANISH VERSION!\r\nLearn to make a sculpture modeled in traditional plasticine (oil clay): the course guides you step by step in the creation of structures, volumes and surface of the piece, to the final details.\r\nHave you ever had the curiosity to make a sculpture? Are you a student of fine arts and want a clear course that explains simply modeling techniques? Do you want to perfect your sculptural technique and learn more about materials?\r\nIn a few hours this video guides you from the realization of a light structure to the creation of volumes, until the final finishes. Each method and each material is clearly explained so that you can use it in the best way.\r\nDo not miss the advice and techniques of a professional! \r\nremember: you have a 30 days money back guarantee :D\r\nWho this course is for:\r\n•	Students of visual and plastic arts\r\n•	Art and Craft Lovers\r\n•	All those people wanting to experiment with new artistic projects but do not know how.\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Picture_8.png', 'How to make a three-dimensional piece clearly and step by step.', 78, '2021-10-21', 'sculpture', '57879d79-e522-4171-80cb-e86802c28998'),
(35, 'Urban Sketching: A Guide to Landscape and Urban Sketching', 'Are you new to the urban sketch scene or want a refresher on the fundamentals? \r\n\r\nWell, this course covers everything there is to know, including what it is, where to go, and starter techniques and tips for the urban sketcher on the go. From finding that perfect location to getting your sketch just right, this course is filled with the information you need to make all your sketching adventures successful. Sneak peek into what’s all included.\r\n\r\nDrawing our life stories seems to be a universal part of human nature, going all the way back to prehistoric man in caves. At Artists Network, when we talk about urban sketching, we don’t put the emphasis on anything city-centric. Instead, we focus on sketching in urban sketching as a creative and fun activity — a way to capture the people, places and things around us — in our sketchbooks. For capturing those ideas here are some tools and kits you should have around you.\r\n\r\nSUPPLY KIT REQUIREMENTS\r\n\r\n- Waterproof fine liner (e.g., Sharpie pen or Pigma Micron pen)\r\n\r\n- Thicker felt-tip pen (e.g., Faber-Castell Pitt Artist marker in B tip)\r\n\r\n- A small (preferably ~ 4″ × 6″ or 5″ × 8″) mixed media or watercolor sketchbook (e.g., Hand Book, Strathmore, Canson, Moleskine, Stillman & Birn)\r\n\r\n- A compact set of watercolors (e.g., Winsor & Newton Cotman Sketchers Pocket Box or similar)\r\n\r\n- Waterbrush (e.g., Pentel Aquash, size large)\r\n\r\n- Paper towels\r\n\r\n- Zippered mesh bag or pouch to hold materials\r\n\r\n- Binder clips\r\n\r\nOPTIONAL EXPANDED KIT\r\n\r\n- Fountain pen (e.g., Lamy Safari with EF nib) and non-water-soluble fountain-pen-safe ink such as Noodler’s Lexington Grey or Platinum Carbon\r\n\r\n- Travel brush size 6 round or larger that comes to a good point (brands include Rosemary & Co./da Vinci/Escoda—sable or a synthetic/blend)\r\n\r\n- ½-inch flat brush (can cut handle to fit pouch if needed)\r\n\r\n- Water container with lid (such as a small Nalgene bottle).\r\n\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/4159498_ba1b_5.jpg', 'Everyday Sketching with easy and efficient techniques in just 15 mins.', 83, '2021-10-21', 'sketch', 'd4effd2b-c765-4f9b-9995-ab41ef24c862'),
(36, 'Learn Python By Solving 100+ Problems', 'This is not a standard video course teaching you hours of theory that you might forget a few months later. \r\nThis course aims to teach through practice, problems to cover all the basics of Python and to put you on course to become a Python developer. \r\nEach problem we solve will have 3 steps: Do it yourself, where you attempt or solve the problem. \r\nThis is the most important part of the 3 step process because once you use your brainpower to solve it, you put some effort into finding a way to solve it,\r\n it will stay with you forever and you will be more likely to be able to solve similar problems even harder. \r\nIdea, is the step where l come to help to give you some clues of how it needs to be done and what are the mechanisms behind solving it efficiently. \r\nCode, the step where l write the code to solve it and l explain step by step how it works.\r\n\r\nwhat you\'ll learn\r\nSolve over 150 Python exercices from beginner level to expert levels.\r\nHow to solve coding problems similar to job interview problems.\r\nCreate a good foundation of elementary things in Python what you will use in everyday programming.\r\nProjects sections that can be added to a portofolio for developer jobs applications.', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/5f08867b642a91bc24eb17bba368b44.png', 'Master Python by solving real life problems.\r\n', 78, '2021-10-21', 'python', 'f8572337-348d-41fa-9056-bb59582b1c64'),
(37, 'Turn Unused Palette Paint into Coral Sculptures', 'Covers:\r\n\r\nThis course is about taking unused built up acrylic palette paint and turning it into stunning sculptures on canvas in a totally easy way, and also shows how to make a new paintskin if you haven\'t built up palette layers yet.\r\n\r\nWhat people are saying...\r\n\r\n\"Its amazing! If i was actually in front of it, i\'d have to put my hands in my pockets so i wouldn\'t touch it from curiousity of trying to figure out how you did that.\" ~ Bobbie SunyNite Brown\r\n\"Awesome, Ruth!!! Congrats The class is well worth the money!\" ~ Esther Lee\r\n\"Ruth, I signed up last night, will be back to it over the weekend. This is so very intriguing! What a genius technique! I like your content and your presentation.\" ~ Maria Freyenbacher\r\nHow taught:\r\nUsing video demonstrations, downloads, formulas, paint chart & coupon deals, handouts, easy quizzes, Recaps, and an ending ACTION STEP\r\n\r\nBenefits:\r\n*Take something discarded & turn it into a show-stunning piece\r\n*Learn new way to save paint from being wasted\r\n*Be brilliant & use up layers of paintskins or learn how to make new ones from scratch\r\n*Accomplish forming the paintskins into amazing pipe corals of beauty\r\n*Know what glue is archival for paintings\r\n*Imagine & form interesting pipe coral shapes\r\n*Attain knowledge of how to easily make an appealing abstract background with texture\r\n*Dazzle others with your use of mesmerizing colors\r\n*Discover an easy secret to highlighting the tops artistically like a pro\r\n*Attractively arrange the pipe corals on canvas\r\n*Get inside knowledge on how to varnish a 3D painting easy & reduce brush lines\r\n*Find inspiration easily with this one tool to prevent Artist\'s Block\r\n*Know the supplies to get & download easy formulas to follow\r\n\r\nWhy enroll:\r\n*Paint something mesmerizing in a new way while saving unused dried paint!\r\n\r\nIdeal Student/Target Audience:\r\n*Acrylic painters that want to add dimension to their paintings\r\n*Re-purpose creators who like to turn nothing into something\r\n*Those who want to paint something distinguished\r\n*Artists looking for something innovative, late-breaking, & fun to do\r\n*Accomplish something revolutionary, unusual, & upscale\r\n*Get in on the new & express your creativity in a whole mind-blowing way\r\n*Advance your skills & push the boundaries of acrylic painting possibilities\r\n*For those who want to push past their comfort zone\r\n*Not for those who don\'t like to plan or need immediate results\r\n*Not for those who want to paint flat & without texture', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/379888_14e1_2.jpg', 'Easily Make a 3D Pipe Coral Acrylic Painting and Save Paint\r\n', 83, '2021-10-21', 'sculpture', '1edc95e1-860e-487e-96e4-e21e343741bc'),
(38, 'Python for Financial Analysis and Algorithmic Trading', 'Welcome to Python for Financial Analysis and Algorithmic Trading! \r\nAre you interested in how people use Python to conduct rigorous financial analysis and pursue algorithmic trading, then this is the right course for you!\r\nThis course will guide you through everything you need to know to use Python for Finance and Algorithmic Trading!\r\nWe\'ll start off by learning the fundamentals of Python, and then proceed to learn about the various core libraries used in the Py-Finance Ecosystem, \r\nincluding jupyter, numpy, pandas, matplotlib, statsmodels, zipline, Quantopian, and much more!', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/e625d4f8e1210a624a6def29dfe9220.png', 'Learn numpy , pandas , matplotlib , quantopian , finance , and more for algorithmic trading with Python!', 78, '2021-10-21', 'python', 'a81e52c2-75be-4369-a145-eb70828e0031'),
(39, 'Art History Renaissance to 20th Century', 'This course now has professionally created captions in English on 98% of all the videos.\r\n\r\nThis is part one of a year-long college-level survey course in art history. This course covers art history from the European Renaissance around 1300 A.D. until the Mid 20th Century\r\n\r\nThis course is designed as a basic college-level survey of art history. I provide an online textbook as well as study guides and worksheets.  This course covers the language used to discuss art.  A complete overview of art, culture, and architecture from the Renaissance to the 1950s. \r\n\r\nEach work is covered in depth, the works physical or formal properties are discussed such as technology used to create the work, color, medium, materials, composition, and shading.\r\n\r\nThe symbolism of each work is discussed and how to interpret the interrelationship of symbols in a work of art. \r\n\r\nThis course is the actual content of a course I teach at an accredited college in California called Ohlone college.\r\n\r\nI designed this course as a series of clear, non-jargon laden video lectures and texts designed to help any student who wants to pass AP art history and or any beginning level art history survey course.', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/28636_91c1_6.jpg', 'A basic level survey of painting, sculpture, and architecture.\r\n', 84, '2021-10-21', 'sculpture', 'eb8510ae-9887-464e-bfa5-cb0ae88de89e'),
(40, 'INFS7202', 'CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications.', 'https://2bnumberone.uqcloud.net/demo/assets/img/course_default.jpg', 'Introduction to basic MVC.', 85, '2021-10-21', 'codeigniter', 'b4b31b74-8af1-47db-b3c2-7502e0274560'),
(41, 'Sculpting Creatures and Critters', 'Have you ever wanted to bring your ideas to life in clay but weren’t sure where to start? This class will give you the skills needed to start creating your own original sculptures using Super Sculpey. We will start from the ground up, beginning with concept creation moving into armatures, building up clay, creating detail and texture, and finally, painting. At the end of the class, you will have a completed sculpture of your own.\r\n\r\nStudents will need to purchase materials in order to complete this class. Materials list and recommended buying locations will be provided.\r\n\r\nPrevious sculpting experience is not necessary. However, at least some working knowledge of art basics (form, shape, color theory, etc.) as well as basic drawing skills are highly recommended.', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/266636_826b_3.jpg', 'Bringing Your Ideas to Life in Clay', 84, '2021-10-21', 'sculpture', '73a75d75-0d63-426d-a500-dbffe4dc9a9e'),
(42, 'The Complete Front-End Web Development Course!', 'If you would like to get started as a front-end web developer, you are going to LOVE this course! Work on projects ranging from a simple HTML page to a complete JavaScript based Google Chrome extension. We will cover the following technologies in this course:\r\n\r\nWeb development basics with HTML\r\n\r\nCascading Style Sheets (CSS)\r\n\r\nJavaScript programming\r\n\r\njQuery JavaScript library\r\n\r\nBootstrap framework\r\n\r\nWe will work on 3 class projects throughout this course:\r\n\r\nSimple text site - We will use what we learned in the HTML sections to create a simple text site. This project will help you learn HTML structure and the essential elements.\r\n\r\nFallout inspired Pip-Boy - We will take what we learned in the CSS and Bootstrap sections of the course to code a Pip-Boy from the game Fallout. This project will help you learn the design elements of modern web development.\r\n\r\nGoogle Chrome extension - We will finish the course by programming a JavaScript based Google Chrome extension. This project will help you understand the logical parts of web development.\r\n\r\nThis course covers the most popular web development frameworks, and will get you started on your path towards becoming a full-stack web developer!\r\n\r\nStill not sold? Check out a few of the awesome reviews this course has received!\r\n\r\n\"Excellent Course! Highly Recommend It! Such a great hands on experience with this course.\"\r\n\r\n\"Very nice course, covers all the stuff you need, good voice and good explanation makes it perfect for people that are new to HTML. Also there\'s some best practices recommendations which are useful even for advanced developers.\"\r\n\r\n\"Excellence in giving the optimal set of tools for web development beginners seeking a well-rounded start for professional web development.\"\r\n\r\nThank you for taking the time to read this, and we hope to see you in the course! ', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/1166306_84a1_3.jpg', 'Get started as a front-end web developer using HTML, CSS, JavaScript, jQuery, and Bootstrap!\r\n', 84, '2021-10-21', 'webdevelopment', '913a95d2-d02f-453d-8b7c-568b82a26ef4'),
(46, 'Python Bootcamp: from zero to hero', 'No experience in programming required. Python is simple and easy to learn, which you will be able to write a program in a very short time. Moreover, Python is one of the most popular programming language that has a huge growth year by year. \r\n\r\nThis course is a step by step guide through the Python programming language, which you will go from a beginner to a professional and create your own programs.\r\n\r\n\r\nWe\'ll cover the following topics:\r\n\r\n1.	An introduction to the basic concepts of Python. Learn how to use Python interactively and by using a script. Create your first variables and acquaint yourself with Python\'s basic data types.\r\n2.	Learn to store, access, and manipulate data in lists: the first step toward efficiently working with huge amounts of data\r\n3.	You\'ll learn how to use functions, methods, and packages to efficiently leverage the code that brilliant Python developers have written. The goal is to reduce the amount of code you need to solve challenging problems!\r\n4.	NumPy is a fundamental Python package to efficiently practice data science. Learn to work with powerful tools in the NumPy array, and get started with data exploration.\r\n5.	How to create a console application and how to convert it into a web app\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Screen_Shot_2021-10-22_at_2_03_55_pm1.png', 'Learn python from basic and go all the way to become a professional.', 79, '2021-10-22', 'python', 'b03eb184-b1d9-4042-a133-14b00377462e'),
(47, 'Python: get starting', 'Python is very simple, yet incredibly powerful programming language. You can use it for writing web and desktop apps, scripts, and more. This course teaches you the basics of Python syntax, functions, creating console and web apps, and distribution.\r\n\r\nHello, and welcome to Python: Getting Started, part of the Python Learning Path.\r\nAlong the way, you’re going to be learning about things like:\r\n- syntax\r\n- functions\r\n- classes\r\n- how to create a console application and how to convert it into a web app\r\n- how to create executable files and an installation wizard from your Python app\r\n\r\nIn addition to Python, you’ll also be using Flask and Pycharm. This is a beginner-friendly course, but you’ll want to make sure you’re already up to speed on programming basics, such as what a function does and what a variable is.\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Screen_Shot_2021-10-22_at_2_04_11_pm.png', 'Learn some basic python programming language.', 79, '2021-10-22', 'python', 'e9eb78be-ce97-4624-a4c1-d82496871116'),
(49, 'Java programming covering Java 11 & Java 16', 'The best Java course out there, which is covering Java 11 and Java 16. Moreover, it helps you to build the skill for your first Java programming job and pass the oracle java certificate exam. This course is designed to give you the Java skills you need for becoming a Java developer. \r\n\r\nGain a deep understanding of how to build, deploy and scale programs in Java for almost any application. View Java tutorials that will help take your skillset to the next level in this widely utilized and useful language.\r\n\r\nLevel up your java skills\r\nAre you ready to learn all things Java? Then you\'re in the right place! From the fundamentals to advanced principles, we\'ve got what you need. Check out the Java tutorials, courses, and learning paths below and start taking your Java skills to the next level today!', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Screen_Shot_2021-10-22_at_2_09_58_pm1.png', 'Learn Java in this course and become a programmer', 79, '2021-10-22', 'java', '16d92577-c8b1-421d-9f91-2d6d9d60142f'),
(50, 'Write PHP like a pro: using php back end. ', 'PHP is a widely used programming language for the server side, which is a powerful and fast growing over years. Also, PHP works fine with HTML as well as CSS, which makes it a great language for anyone interested in programming language. \r\n\r\nThis course will get you started in no time, covering installation, forms management, working with databases, state management, and more!\r\n\r\nWe will process form data and later store everything in a MySQL database. We will take special care about common security-related pitfalls and will avoid common attacks. Finally, we will develop a small sample application which also features authentication and authorization. This course does not provide a complete introduction into the language syntax, so knowledge of any programming language is beneficial but you will be able to pick up the rest!', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Screen_Shot_2021-10-22_at_2_12_01_pm1.png', 'Learn everything you need to get familiar with PHP.', 79, '2021-10-22', 'php', '18e3b588-b670-4607-a4c6-60aaf6ba3568'),
(52, 'Drawing forms and shapes', 'We will make you master with the basic drawing skill of forms and shapes. This is perfect for painters who want to add depth to their skill as well as their work.\r\n\r\nStart by drawing an airplane, a donut, and a house so you can measure your progress. Take ten minutes right now and do this (it’s OK if it’s terrible, you’re learning how to draw).\r\n\r\nThe first thing that most drawing tutorials teach you to draw is shapes, starting with a sphere. After all, any object that you see around you can be constructed by using one, or a combination of, three different shapes:\r\n\r\n- A circle – a sphere is a circle in 3D.\r\n- A square – a cube is a square in 3D.\r\n- A triangle – a cone is a triangle in 3D.\r\n\r\nIn addition, there are two more 3D forms:\r\n\r\n- A pyramid, which is a variation of the cube.\r\n- A cylinder, which is a variation of the cone.', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Screen_Shot_2021-10-22_at_2_34_35_pm1.png', 'Learn to draw shape in 3D.', 79, '2021-10-22', 'sketch', '4e979517-e9bb-4e36-af34-1a76d88a4b98'),
(53, 'Java for Everybody: Basic Programming Concepts.', 'Java is one of the most popular programming languages, and it widely used by top companies. \r\n\r\nThis class aim to teach basics concepts in Java and programming in the simplest possible ways. If you are completely new to programming and Java, We recommend you start with the first class and then get back to this one. This class is a bigger version of the first one, however, most concepts are reviewed in this class. \r\n\r\nWe are going to cover:\r\n\r\n- Classes and Objects. \r\n\r\n- Decision making\r\n\r\n- Loops\r\n\r\n- Arrays and ArrayLists\r\n\r\n- Exception\r\n\r\nAnd Finally we\'ll solve some examples to link everything we learned together.', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Screen_Shot_2021-10-22_at_2_43_58_pm.png', 'Let\'s get start with Java.', 79, '2021-10-22', 'java', '1c5a8a0c-52ef-4209-8006-0f8871cccda0'),
(54, 'Get start with Java', 'Java is among the most popular programming languages out there, mainly because of how versatile and compatible it is. Java can be used for a large number of things, including software development, mobile applications, and large systems development. As of 2019, 88% market share of all smartphones run on Android, the mobile operating system written in Java. Knowing Java opens a great deal of doors for you as a developer.\r\n\r\nIn this course you’ll be exposed to fundamental programming concepts, including object-oriented programming (OOP) using Java. You’ll build 7 Java projects—like a basic calculator—to help you practice along the way.\r\n\r\nWe will go through the following list in order to build a basic foundation for your Java skill:\r\n- Hello World\r\n- Variables\r\n- Arrays and ArrayLists\r\n- Loops\r\n- String Methods\r\n- Two-Dimensional Arrays\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Screen_Shot_2021-10-22_at_2_51_37_pm.png', 'Learn the basics of the popular Java language in this introductory course.', 79, '2021-10-22', 'java', 'd62f1228-02a0-4520-b924-41dca0a13f3d'),
(56, 'Vue - The Complete Guide (w/ Router, Vuex, Composition API)', 'Frontend frameworks like Vue JS are extremely popular because they give us this reactive, great user experience we know from mobile apps - but now in the browser! No wonder that jobs requiring frontend framework skills like VueJS are amongst the best paid ones in the industry!\r\n\r\nWe\'ll start at the very basics, what Vue.js is and how it works before we move on to more complex and advanced topics but I\'ll be honest: It\'s too much to fit it all into one sentence, so here\'s what you\'ll learn in this Course:\r\n\r\n- What is VueJS and Why would you use it?\r\n\r\n- The Basics (including the basic Syntax, Understanding Templates and much more!)\r\n\r\n- How to Output Reactive Data & Listen to Events\r\n\r\n- Interacting with DOM (Rendering Lists, Conditionally attaching/ detaching Elements ...)\r\n\r\n- Setting up a Development Environment and Workflow\r\n\r\n- Using Components (and what Components are to begin with)\r\n\r\n- A Deep Dive Look Behind the Scenes of Vue\r\n\r\n- Binding to Form Inputs\r\n\r\n- And much more ...', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Screen_Shot_2021-10-22_at_2_58_21_pm.png', 'Vue.js is an awesome JavaScript Framework for building Frontend Applications!', 79, '2021-10-22', 'webdevelopment', '8dafe1bc-6a3c-4f66-9ba8-5e8ec066fbc9'),
(58, 'Build Responsive Real-World Websites with HTML and CSS', 'Well, I\'m here to teach you HTML, CSS, and web design, all by building the stunning website that you just saw, step-by-step.\r\n\r\nSo, after finishing this course, you will know exactly how to build a beautiful, professional, and ready-to-launch website just like Omnifood, by following a 7-step process. And it will even look great on any computer, tablet, and smartphone.\r\n\r\nSo, in order to become a confident and independent developer, capable of building your own websites in the future, you will learn:\r\n\r\n- The fundamentals of modern and semantic HTML, CSS, and building layouts in a small separate project, which will prepare you for the main course project (www.omnifood.dev). This includes modern flexbox and CSS Grid!\r\n\r\n- How to design beautiful websites, by learning a web design framework I created just for this course. It consists of easy-to-use guidelines for design aspects like typography, colors, images, spacing, and more (this is like a small standalone course!).\r\n\r\n- How to use well-established website components and layout patterns in order to come up with professional-looking designs\r\n\r\n- How to make any website work on any mobile device, no matter the design and layout (responsive design)\r\n\r\n- How to use the 7 steps of building a professional website in practice: planning, sketching, designing, building, testing, optimizing, and launching', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/Screen_Shot_2021-10-22_at_3_02_12_pm1.png', 'Learn modern HTML5, CSS3 and web design by building a stunning website for your portfolio!', 79, '2021-10-22', 'webdevelopment', 'eaa8908f-9574-4697-bc9d-61e23574aa7e'),
(59, 'php', 'asdfasdf', 'https://2bnumberone.uqcloud.net/demo/assets/img/course_default.jpg', 'new php', 76, '2021-10-24', 'php', '6639fcce-2e97-4286-a9b0-bb6d4e53d98a'),
(61, 'Core Python: Big Picture', 'In this course, Core Python: Big Picture, you will learn about Python, a widely used and fun programming language, and perhaps the only popular programming language named after a world-famous comedy group. First, you\'ll discover what Python. Next, you\'ll explore why Python is growing in popularity and used across many different fields in many different ways. Finally, you\'ll learn what Python’s strengths are, as well as its weaknesses. By the end of this course, you should have the knowledge of Core Python needed to tell if you are interested in learning more about Python and understand why you want to use it.', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/屏幕截图_2021-10-24_2042171.png', 'This course is a big picture introduction to Python, a widely used programming language growing in popularity, is simple to learn, and ultimately, fun to use.\r\n\r\n', 81, '2021-10-24', 'python', '8c151294-33c6-42cc-bf62-2f1ddff0d22d'),
(62, 'Core Python: Getting Started', 'In this course, Core Python: Getting Started, we are going to introduce you to the essentials of the Python language as well as important parts of the Python standard library. Some of the major topics that we will cover include: Python\'s fundamental data types, using functions and modules to organize your code, Python\'s underlying object model, defining your own types using classes, and working with iteration and inerrable objects. By the end this course, you\'ll have the skills and knowledge to work on almost any Python project, and you\'ll be in a great position to continue learning more advanced aspects of the language.', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/屏幕截图_2021-10-24_204543.png', 'In this course we\'ll introduce you to the essentials of the Python language, development culture, and important parts of the Python standard library. This course will help you develop the foundation you need to work on any Python project.', 81, '2021-10-24', 'python', '7d952521-669f-420d-a85e-70e8069dbfcc'),
(63, 'Data Science with R', 'Data science is the practice of transforming data into knowledge, and R is one of the most popular programming language used by data scientists. In a data-driven economy, this combination of skills is in extremely high demand, commanding significant increases in salary, as it is revolutionizing the world. In this course, Data Science with R, you\'ll learn first learn about the practice of data science, the R programming language, and how they can be used to transform data into actionable insight. Next, you\'ll learn how to transform and clean your data, create and interpret descriptive statistics, data visualizations, and statistical models. Finally, you\'ll learn how to handle Big Data, make predictions using machine learning algorithms, and deploy R to production. By the end of this course, you\'ll have the skills necessary to use R and the principles of data science to transform your data into actionable insight.\r\n\r\n', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/屏幕截图_2021-10-24_204818.png', 'Data science is becoming more and more valuable to the workplace and to the global economy. Learn how to use the practice of data science and the programming language R to transform your data into actionable insight.\r\n\r\n', 81, '2021-10-24', 'python', '4795e28b-351c-4148-9ee8-a79a674a01b8'),
(65, 'HOW TO MAKE 天线宝宝', 'Teletubbies is a British children\'s television series created by Anne Wood and Andrew Davenport for the BBC. The programme focuses on four differently coloured characters known as the Teletubbies, named after the television screens on their bellies. Recognised throughout popular culture for the uniquely shaped antenna protruding from the head of each character, the Teletubbies communicate through gibberish and were designed to bear resemblance to toddlers.[7]\r\n\r\nThe series rapidly became a commercial success in Britain and abroad. It won multiple BAFTA awards and was nominated for two Daytime Emmys throughout its run.[8][9] A single based on the show\'s theme song reached number 1 in the UK Singles Chart in December 1997 and remained in the Top 75 for 32 weeks, selling over a million copies.[10] By October 2000, the franchise generated over £1 billion ($1.6 billion) in merchandise sales.[11]\r\n\r\nThough the original run ended in 2001,[12] a rebooted series was green-lit in 2014.[13] The reboot premiered on CBeebies in the United Kingdom and on the Nick Jr. Channel in the United States.[14] Re-runs of the original 1997–2001 series continue to be shown on television channels worldwide.\r\n\r\nThe original series returned to live TV in the US on Pluto TV on 1 May 2019, but the episodes are shown in the UK format instead of the US format. The same error occurred with the series\' availability on the Noggin app since 25 May 2016.', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/IMG_18701.JPG', 'In this video, you will learn how to be cute', 91, '2021-10-27', 'painting', 'ec36fd68-8717-4133-9b45-96274a586929'),
(66, 'Modern Java Web Applications with Spring Boot 2.x', 'Building web application has been a challenge for many Java developers because of the complexities of their software requirements, leading to a bloated and unmanaged framework library repository and configurations. Spring Boot 2.x, a feature-rich platform built from the Spring 5.x framework, is created by to help developers solve their complex problems with fewer configurations but with strong dependency management features.\r\n\r\nIn this course, you will learn how to create various modules in a Human Resources Information System (HRIS) such as employee timesheets, leave management, and profiling. You will use Spring Boot 2.x to create your HRIS app while integrating Spring Web MVC, Spring WebFlux, Spring Data, RESTful web services, and clients. Above all, you\'ll use the latest version of Spring Security—5.0—to secure your apps and OAuth 2.x to implement an OpenID connection. You\'ll apply reactive programming with its Spring Web Flux and Project Reactor features. Finally, you will deploy your apps and services using some popular cloud and container platforms such as Spring Cloud Foundry, Docker, and AWS.\r\n\r\nBy the end of the course, you will be confident in implementing the core features of Spring Boot 2.x to create scalable, optimal, and robust enterprise web applications.\r\n\r\nAbout the Author\r\n\r\nSherwin John Calleja Tragura started his career as a Java developer by focusing on the Documentum and Alfresco document management systems. His first exposure to mobile applications started in 2010 when he first installed and used the Alfresco mobile application, which featured core document content services.\r\n\r\nHe is currently a technical corporate trainer and a subject matter expert on Java, JEE, and Spring application development. He is a certified EMC Documentum and OCP Java 7 Associate. He authored the following Packt books—Spring MVC Blueprints and Spring 5 Cookbook and also a Packt video course: Jakarta EE 8 Recipes. Before that, he was a technical editor for Alfresco Share, Alfresco 3 Records Management, Mastering Hibernate, and Delphi Cookbook.', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/11.jpg', 'Learn how to build, test, and deploy enterprise-grade Java applications', 93, '2021-10-27', 'mybatis', 'a243fa9a-a30e-4735-a32a-087c96e1adff'),
(69, 'Java for the Real World', 'So you\'ve just got your first Java development job out of school or you\'re an experienced developer using Java for the first time. You know how to write code, but do you understand the Java landscape, tools, and frameworks used in real world applications?\r\n\r\nThis course bridges the gap between understanding Java the language and understanding the Java ecosystem. You will get an overview of the major tools and frameworks in use today from a Java professional with over 10 years of industry experience.\r\n\r\nAfter completing this course, you will have the knowledge to jump into your first application with confidence.\r\n\r\nNote: I have manually corrected 100% of the captions to help Deaf, Hard-of-Hearing, and English as a second language learners.', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/2.jpg', 'A tour of the major frameworks and tools used in corporate Java applications\r\n', 93, '2021-10-27', 'mybatis', 'f1c68b6a-2d57-4b79-a8ec-d62393643b32'),
(70, 'Developing Database Application using Spring MVC and MyBatis', 'A crash course on Developing a database web application using Spring MVC and Mybatis.\r\n\r\nThese are the two most popular java frameworks, used to build industry-standard enterprise applications.\r\n\r\nThis is not an a-z reference course to Spring MVC and Mybatis but this course will help you to integrate the two different frameworks which will help you to create web-based enterprise applications.\r\n\r\nWho this course is for:\r\nStudents who wants to learn Spring MVC and Mybatis\r\nStudents who wants to upgrade their knowledge with Java frameworks', 'https://2bnumberone.uqcloud.net/demo/assets/course_img/3.jpg', 'Developing a database web application using Spring MVC and Mybatis/iBatis\r\n', 93, '2021-10-27', 'mybatis', '3de11583-40c8-4c35-8f1d-aa909cdc0d82');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified` int(11) NOT NULL DEFAULT '0',
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Institution` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Major` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Oauth_provider` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_picture_path` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fname`, `lname`, `email`, `email_verified`, `gender`, `Institution`, `Major`, `Oauth_provider`, `user_picture_path`) VALUES
(76, 'yuan0432234736', 'c7F6vyGiJtCwMaq7bQPbhhr/2lFWTDWVPHw8OEm3stc=', 'ziqi', 'yuan', 'yuan0432234736@gmail.com', 1, '', '', '', 'google', 'https://lh3.googleusercontent.com/a/AATXAJz4b8BmSVMELbhSfQrIUoMyhO-FPQNMMrmS6g8c=s96-c'),
(77, 'lzj19980601', 'jA50z0n+gb3Y7H7GACIq5CT8chOUfRfFICKVkrds2Ks=', 'ZIJUN', 'LI', 'lzj19980601@gmail.com', 1, 'Male', 'QUT', 'Interaction Design', 'google', 'https://lh3.googleusercontent.com/a/AATXAJybRxNLGc1Dpv1z8Tp6p0JjFVd-wCZdRgy-YUgU=s96-c'),
(78, 'davidg9911mail', 'r7rmC7EUy6f40VQWrwW7zVwj34f3uaiebifDdFOoMwY=', 'David', 'Guo', 'davidg9911mail@gmail.com', 1, '', '', '', 'google', 'https://lh3.googleusercontent.com/a/AATXAJyMBChlO-BHUVi9UAxlxd0Ms8G-uwD_3rOuX__5=s96-c'),
(79, 'boianhlucy1985', 'lhKsKV+pgb8BFaHJ9HTNIjRu9AAXZR4oeR0uy8LRe3A=', 'pei ying', 'liu', 'boianhlucy1985@gmail.com', 1, 'Female', 'University of Queensland', 'Information Tec', 'google', 'https://lh3.googleusercontent.com/a/AATXAJxuBJIKmlyroX8PfWosxdER-m7zxvSR1EJAZIN9=s96-c'),
(80, 'Daniel', '$2y$10$BsEF8ag7CJFyxbQL9Z6jjOQOYlgv1VLISQz5pJdFXymgxgkgA2j1m', 'ziqi', 'yuan', 'yuan04322347136@gmail.com', 0, '', 'uq', '', NULL, 'https://2bnumberone.uqcloud.net/demo/assets/img/user_default.png'),
(81, 'ttwariel', 'yhSS9ck2eOc7FwpIib1Y8sPDsvZKXN2BBYBEc1fBFw8=', 'Tingwen', 'Tan', 'ttwariel@gmail.com', 1, '', '', '', 'google', 'https://lh3.googleusercontent.com/a/AATXAJzBTLrcmIm5BGc8dHesQNTbKusFZp02YifnuH6y=s96-c'),
(82, 'john', '$2y$10$LippzvAHeta/A44/r3jJAO8JO.oy9gAopAqTo2.2IAgefZ/gUox8y', 'zijun', 'li', '707636519@qq.com', 0, 'Male', 'QUT', 'Information Tec', NULL, 'https://2bnumberone.uqcloud.net/demo/assets/img/user_default.png'),
(83, 'zijun', '$2y$10$F1DxCK/ntMgErRRW0JWWz.aa3kYhyRsys5loZydAVeaF6.5tAcJuK', 'zijun', 'li', '66666666@gmail.com', 0, '', 'QUT', '', NULL, 'https://2bnumberone.uqcloud.net/demo/assets/img/user_default.png'),
(84, 'haoxuan', '$2y$10$5n2Hm0kOeh3Tn0GEgkgs0uuZErjz1liSbPd30D4SBxHKNfBFDdKte', 'haoxuan', 'yeah', 'safsadfsa@qq.com', 0, '', 'UQ', '', NULL, 'https://2bnumberone.uqcloud.net/demo/assets/img/user_default.png'),
(85, 'xccxccxccb57', 'ocbMreG1/0WjEIrUUQx6sb6o40P3qpoUxwZMb31BVmM=', 'い', '沢', 'xccxccxccb57@gmail.com', 1, 'Male', 'University of Queensland', 'Information Tec', 'google', 'https://lh3.googleusercontent.com/a-/AOh14Gi58sXTNb9D1kD0AaKbPItm1SOp0TsPKgDUmERD-A=s96-c'),
(86, 'johnlili', '$2y$10$3pA6VZVlZGdWXQ43Wr98xenUjvfULlg3hgsq74PaEnw5J9oFS4gWm', 'john', 'lili', 'asdklfja@qq.com', 1, 'Male', 'Griffith university', 'Interaction Design', NULL, 'https://2bnumberone.uqcloud.net/demo/assets/img/user_default.png'),
(87, 'coffee789', '$2y$10$Jv/SOTOqpmYQ5hpjhs2VsOUjOBMs4aGyKcHr2yrdfAfg3N/hW0eYi', 'coffee789', 'coffee789', 'coffee789@g.com', 1, 'Male', 'University of Queensland', 'Information Tec', NULL, 'https://2bnumberone.uqcloud.net/demo/assets/img/user_default.png'),
(88, 'coffee999', '$2y$10$mKNdW/jgwRJ1qaU0I/SZa.IB7ldoKIR1OUy7p0.KXw7UnzH3FRanm', 'coffee999', 'coffee999', 'wendyyeung7@gmail.com', 1, 'Male', 'University of Queensland', 'Information Tec', NULL, 'https://2bnumberone.uqcloud.net/demo/assets/img/user_default.png'),
(90, 'davidguo', '$2y$10$sIW4VJFUsFoHR6S06142QOQE416YYBg4CBBPxFk2rK8xl/C/8BtW6', 'David', 'Guo', 'david.guo@uqconnect.edu.au', 1, 'Male', 'Griffith university', 'Interaction Design', NULL, 'https://2bnumberone.uqcloud.net/demo/assets/img/user_default.png'),
(91, 'SHABIDAVID', '$2y$10$zYFtHnSX8j5cJSKxu4t15O/uDb8n.OBiD53KcXYSnOErx6W3zI2qy', 'DAVID', 'SHABI', 'NAOOMIQU@GMAIL.COM', 1, 'Male', 'Bond University', 'Interaction Design', NULL, 'https://2bnumberone.uqcloud.net/demo/assets/img/user_default.png'),
(93, 'tester', '$2y$10$MpJ3vKdbwVg6mdMIY.hb7OWBwfIQas3MSdF8OKQCdgmRPGlV2lGdW', 'tester', 'David', 's4632761@student.uq.edu.au', 1, 'Male', 'University of Queensland', 'Information Tec', NULL, 'https://2bnumberone.uqcloud.net/demo/assets/img/user_default.png');

-- --------------------------------------------------------

--
-- 資料表結構 `user_filter`
--

CREATE TABLE `user_filter` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `field` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `video_path`
--

CREATE TABLE `video_path` (
  `id` int(11) NOT NULL,
  `filename` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `path` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `week` int(11) NOT NULL,
  `uuid` varchar(400) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `video_path`
--

INSERT INTO `video_path` (`id`, `filename`, `uid`, `cid`, `path`, `week`, `uuid`) VALUES
(1, 'javacourse.mp4', 76, 10, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/javacourse.mp4', 1, 'c3673300-819d-4cb8-a478-a56775e50cfc'),
(2, 'javacourse1.mp4', 76, 10, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/javacourse1.mp4', 2, '39c01ed0-7f33-4ae3-b2cb-b29f216260e2'),
(3, 'javacourse2.mp4', 76, 10, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/javacourse2.mp4', 3, 'e17fe19b-9029-4853-8c7f-e22f99215bea'),
(4, 'javacourse3.mp4', 76, 10, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/javacourse3.mp4', 4, '78cd2e33-4f61-4f98-8f11-08a5b705ddff'),
(5, 'javacourse4.mp4', 76, 10, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/javacourse4.mp4', 5, '66a8c73a-bd2a-4994-a877-a81f7121bb2b'),
(6, 'javacourse5.mp4', 76, 18, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/javacourse5.mp4', 1, '44987ce7-c522-4551-9516-cb83a420e223'),
(7, 'rabbit.mp4', 78, 21, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/rabbit.mp4', 1, 'bdfb2750-c387-4280-a2dd-3f91622ba95f'),
(8, 'rabbit1.mp4', 78, 21, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/rabbit1.mp4', 2, '95d929c3-738f-4383-8a8d-1f35adb55afc'),
(9, 'rabbit2.mp4', 78, 21, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/rabbit2.mp4', 3, '637b6274-28f0-4f55-970c-d5a3447127c2'),
(10, 'rabbitman.mp4', 78, 24, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/rabbitman.mp4', 1, 'f30d82f3-3816-412a-a653-678af526f735'),
(11, 'rabbitman1.mp4', 78, 24, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/rabbitman1.mp4', 2, '4d3eb5b5-6992-48b9-ae9b-7ff4cb3ee3c6'),
(12, 'rabbitman2.mp4', 78, 24, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/rabbitman2.mp4', 3, 'd223dce7-78f4-438c-bc6f-2c22366a5770'),
(13, 'rabbitgirl.mp4', 78, 27, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/rabbitgirl.mp4', 1, '47746894-a53c-41d0-9add-3737af35a3a4'),
(14, 'rabbitgirl1.mp4', 78, 27, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/rabbitgirl1.mp4', 2, '8e9776bc-4afc-4b19-a198-953c83b02616'),
(15, 'rabbitgirl2.mp4', 78, 27, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/rabbitgirl2.mp4', 5, '15b0cbfd-3492-4113-a692-1f43799a34d8'),
(16, 'rabbitgirl3.mp4', 78, 28, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/rabbitgirl3.mp4', 4, 'c2c6922b-a263-4ee7-9f02-b9617fbf41a9'),
(17, 'rabbitloveyou.mp4', 78, 29, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/rabbitloveyou.mp4', 1, '730b994a-09f8-4d9c-b4d6-88b5c72d7a61'),
(18, 'rabbitloveyou1.mp4', 78, 29, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/rabbitloveyou1.mp4', 2, 'a71936dc-059d-4db1-9743-d57be63cbe68'),
(19, 'rabbitloveyou2.mp4', 78, 29, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/rabbitloveyou2.mp4', 3, '6625890e-25f4-4f88-a42a-230c0c2ae90a'),
(20, 'CI3_Week_1.mp4', 85, 40, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/CI3_Week_1.mp4', 1, '47ae79ab-92b6-4fb0-8634-61f51042cb97'),
(21, 'v0200fg10000c3em49rc77u51380qf4g.MP4', 91, 65, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/v0200fg10000c3em49rc77u51380qf4g.MP4', 1, '76a9d7f1-f5e7-40f3-9e10-38df9a4021bc'),
(22, 'v0300fg10000c4hotgbc77u5kub963r0.MP4', 91, 65, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/v0300fg10000c4hotgbc77u5kub963r0.MP4', 2, 'fea4b6af-1c1a-4e22-ac9c-5991a90334e0'),
(23, 'javacourse6.mp4', 93, 66, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/javacourse6.mp4', 3, 'fd096e86-da5b-4123-be53-d4058b531325'),
(24, 'javacourse7.mp4', 93, 69, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/javacourse7.mp4', 5, '696558b3-781c-468c-87e3-91f97afc9206'),
(25, 'javacourse8.mp4', 93, 69, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/javacourse8.mp4', 1, 'd7463e5f-bc7d-4912-a52e-a37395748ffc'),
(26, 'javacourse9.mp4', 93, 69, 'https://2bnumberone.uqcloud.net/demo/uploads/videos/javacourse9.mp4', 3, 'd615ffb1-d597-498a-bb95-9f79150171a2');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`),
  ADD KEY `uid` (`uid`);

--
-- 資料表索引 `course_detail`
--
ALTER TABLE `course_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`);

--
-- 資料表索引 `doc_path`
--
ALTER TABLE `doc_path`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`),
  ADD KEY `doc_path_ibfk_2` (`uid`);

--
-- 資料表索引 `email_token`
--
ALTER TABLE `email_token`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `favorite_list`
--
ALTER TABLE `favorite_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- 資料表索引 `forget_pass_token`
--
ALTER TABLE `forget_pass_token`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- 資料表索引 `upload_list`
--
ALTER TABLE `upload_list`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `author_id` (`author_id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user_filter`
--
ALTER TABLE `user_filter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_filter_ibfk_1` (`uid`);

--
-- 資料表索引 `video_path`
--
ALTER TABLE `video_path`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`),
  ADD KEY `uid` (`uid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `course_detail`
--
ALTER TABLE `course_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=290;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `doc_path`
--
ALTER TABLE `doc_path`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `email_token`
--
ALTER TABLE `email_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `favorite_list`
--
ALTER TABLE `favorite_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `forget_pass_token`
--
ALTER TABLE `forget_pass_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `upload_list`
--
ALTER TABLE `upload_list`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user_filter`
--
ALTER TABLE `user_filter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `video_path`
--
ALTER TABLE `video_path`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `upload_list` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `course_detail`
--
ALTER TABLE `course_detail`
  ADD CONSTRAINT `course_detail_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `upload_list` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `doc_path`
--
ALTER TABLE `doc_path`
  ADD CONSTRAINT `doc_path_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `upload_list` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doc_path_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `favorite_list`
--
ALTER TABLE `favorite_list`
  ADD CONSTRAINT `favorite_list_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `forget_pass_token`
--
ALTER TABLE `forget_pass_token`
  ADD CONSTRAINT `forget_pass_token_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `upload_list`
--
ALTER TABLE `upload_list`
  ADD CONSTRAINT `upload_list_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `user_filter`
--
ALTER TABLE `user_filter`
  ADD CONSTRAINT `user_filter_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `video_path`
--
ALTER TABLE `video_path`
  ADD CONSTRAINT `video_path_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `upload_list` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `video_path_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
