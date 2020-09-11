-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 10:22 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_table`
--

CREATE TABLE `job_table` (
  `job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` int(15) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `requirement` varchar(1000) NOT NULL,
  `skill` varchar(1000) NOT NULL,
  `location` varchar(100) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `apply` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_table`
--

INSERT INTO `job_table` (`job_id`, `user_id`, `name`, `email`, `phone`, `description`, `requirement`, `skill`, `location`, `experience`, `salary`, `img1`, `img2`, `img3`, `apply`) VALUES
(15, 14, 'Tata Consultancy Services', 'info@tcs.com', 91, 'We ensure the highest levels of certainty and satisfaction through a deep-set commitment to our clients, comprehensive industry expertise and a global network of innovation and delivery centers. Our mission is to help customers achieve their business objectives by providing innovative, best-in-class consulting, IT solutions and services and to make it a joy for all stakeholders to work with us. We function as a full stakeholder to business, offering a consulting-led approach with an integrated portfolio of technology led solutions that encompass the entire Enterprise value chain. Our Customer-centric Engagement Model defines how we do engage with you, offering specialized services and solutions that meet the distinct needs of your business. We build bespoke teams around your domain and technology requirements drawn from our talent pool of over 443,676 global professionals including 36.2% women from 146 nationalities. Our domain expertise has been built upon decades of experience workin', 'DevOps Build Engineer', 'At-least 4 years of experience with DevOps [CI/CD/Ansbile].\r\nGood understanding and technical background in Application Performance Monitoring. Experience with monitoring application technologies (Java, Python). Exposure to Middleware components such as WebServer, AppServer. Excellent Written and Communication Skills and team player.', 'Kochi, Hyderabad', 'None', '4', 'tcs1_a.jpg', 'tcs2.jpg', 'tcs3.jpeg', 'https://www.tcs.com/careers?country=IN&lang=EN'),
(16, 14, 'Cognizant Technology Solutions', 'cognizant@solutions.com', 91, 'Cognizant is an American multinational corporation that provides IT services, including digital, technology, consulting, and operations services. ... It was founded as an in-house technology unit of Dun & Bradstreet in 1994, and started serving external clients in 1996', 'Program Analyst', 'Develop coding (business layer coding, interface development, service development, creation of stored procedures etc) as required in the project. Raise clarifications / issues / concerns regarding work output to the lead on time. Seek review from peer / Senior Developer periodically. Rework on the code based on code review / defects raised in unit testing or any other relevant testing phases. Participate in code peer review, as required. Highlight any potential risks to the Leads and seek inputs to resolve issues identified. Support integration of components, as required. Update traceability matrix for the work package developed. Provide support on process audit activities.', 'Chennai, Tamil Nadu, India', 'None', '5', 'cog1.jpg', 'cog3.jpg', 'cog4.jpg', 'https://careers.cognizant.com/studentandinterns/na/en'),
(17, 14, 'Capgemini', 'capgemini@india.com', 91, 'Capgemini SE is a French multinational corporation that provides consulting, technology, professional, and outsourcing services. It is headquartered in Paris, France. Capgemini has over 270,000 employees in over 50 countries, of whom nearly 120,000 are in India.', 'Junior Fullstack Developer', 'Technical skills:Java/J2EE, .Net, C++, Python, Web development technology (JavaScript, HTML, CSS, JQuery, JSON), database (Oracle), responsive Web design, ETL, PL/SQL, Hadoop, cloud APIs (e.g., a public cloud such as AWS, Azure, GCP, or an advanced private cloud such as Google or Facebook), UX design skills, UI prototyping, database management and data manipulation. Functional skills:system analysis, business analytics (such as Power BI), project management, testing, technical and/or creative writing, workshop facilitation, HR process knowledge, SharePoint, Office365, Dynamics.', 'Hyderabad', 'None', '4', 'cap1.png', 'cap2.jpg', 'cap3.jpg', 'https://www.capgemini.com/in-en/careers/'),
(18, 14, 'WIPRO', 'wipro@india.com', 91, 'Wipro Limited is an Indian multinational corporation that provides information technology, consulting and business process services. It is headquartered in Bangalore, Karnataka, India. In 2013, Wipro separated its non-IT businesses and formed the privately owned Wipro Enterprises.', '.NET-Developer', 'Use Microsoft technologies: Sitecore, C#, ASP.NET, SQL, MVC, and WebAPI to develop technical solutions to complex problems that require the regular use of ingenuity and creativity. Responsible for establishing deployment profile, IIS configuration and management. Design, code, test, debug and document software according to the functional requirements. Analyze, diagnose and resolve errors related to their applications n tHelp define project plans and tasks assignment requiring software development.', 'Noida', '2', '6', 'wip1.jpg', 'wip2.jpg', 'wip4.png', 'https://careers.wipro.com/careers-home/'),
(19, 14, 'Accenture Solutions', 'accenture@usa.com', 98, 'Accenture plc is a multinational professional services company. A Fortune Global 500 company, it reported revenues of $43.2 billion in 2019 and had 492,000 employees, serving clients in more than 120 countries. In 2015, the company had about 150,000 employees in India, 48,000 in the US, and 50,000 in the Philippines.', 'Program/Project Manager', 'Coordinate internal resources and third parties vendors for the flawless execution of projects Ensure that all projects are delivered on-time, within scope and within budget Assist in the definition of project scope and objectives, involving all relevant stakeholders and ensuring technical feasibility Ensure resource availability and allocation Develop a detailed project plan to monitor and track progress.', 'Kolkata, West Bengal', '2', '6', 'acc1.png', 'acc2_a.jpg', 'acc3.jpg', 'https://www.accenture.com/in-en/careers?src=PSEARCH&c=car_in_rmbrandawarenes_11024992&n=psgs_0919&gclid=CjwKCAjw19z6BRAYEiwAmo64LbdMatlzcmeNgdjJzQ0B3PKiFNanryoXrYQ53igOXXqcl7WK61wzAhoCXTEQAvD_BwE'),
(20, 14, 'Mindtree Solutions', 'mindtree@india.com', 91, 'Mindtree Limited is an Indian multinational information technology and outsourcing company headquartered in Bangalore, India and New Jersey, USA. It part of the Larsen & Toubro group. Founded in 1999, the company employs approximately 21,991 employees with an annual revenue of ₹7839.9 crore (US$1.1 billion). Mindtree delivers digital transformation and technology services from ideation to execution, enabling Global 2000 clients to outperform the competition. “Born digital,” Mindtree takes an agile, collaborative approach to creating customized solutions across the digital value chain. Our deep expertise in infrastructure and applications management turns IT into a strategic asset. Whether you need to run your business more efficiently or accelerate revenue growth, Mindtree can get you there.', 'Oracle DBMS Developer', 'Planning for Production Storage and Capacity Management.\r\nCreate logical models and build physical models. Installing and Managing Oracle 10g and 11g RAC databases. Configuring and Administering Oracle 10g/11g Automatic Storage Management(ASM). Cloning development databases from PROD using RMAN and BCVs. Managing Database Performance using (Statspack, TKPROF, AWR, ADDM). Implementation and Administration of Oracle Data guard. Planning for Production Storage and Capacity Management. Hands on experience on OS (HP/AIX/Linux/Sun OS/Windows etc) and OS issues monitoring and troubleshooting. Infrastructure Specialist in Oracle 9i/10g/11g database server. Creating databases from the ground up. Design, implement and operate database systems for performance and reliability. Administer production and development databases, ensuring maximum availability. Installation and configuration of Oracle 11g on Unix platforms including Solaris, AIX & RH Linux, Upgrade of Oracle Database from 9i, 10g, 11g t', 'Bangalore, Karnataka', 'None', '4', 'mind1_a.jpg', 'mind2.jpg', 'mind3.jpg', 'https://www.mindtree.com/careers'),
(22, 39, 'ITC Infotech', 'ITCinfo@india.com', 1994367890, 'ITC Infotech is a global technology solution and services leader providing business-friendly solutions, that enable future-readiness for clients. ... Our solutions and services are focused on Banking & Financial Services, Healthcare, Manufacturing, Consumer Goods, Travel and Hospitality.', 'Java Developer', 'Desirable Skills Strong Java programming skills Minimum of 5 years practical software development experience Robust object-oriented design pattern knowledge and implementation experience using Java; Python a plus Advanced knowledge and experience developing and working with relational databases such as Sybase and MySQL Experience with multi-tier application architecture and high performance distributed and in-memory caching solutions Strong understanding of data modeling techniques Strong foundation in SDLC best practices including test driven development, unit testing discipline, agile development, and CI/CD strategies Education: B.E, B. Tech, MCA, MSc (CS) or equivalent Passion for engineering highly available, performant systems Creativity and resourcefulness to problem solve independently', 'Bangalore, Karnataka', '3', '8', 'ITC1.jpg', 'ITC3.png', 'ITC2.jpg', 'https://jobs.itcinfotech.com/#!/');

-- --------------------------------------------------------

--
-- Table structure for table `premium_table`
--

CREATE TABLE `premium_table` (
  `job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` int(15) NOT NULL,
  `description` varchar(255) NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `apply` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `premium_table`
--

INSERT INTO `premium_table` (`job_id`, `user_id`, `name`, `email`, `phone`, `description`, `requirement`, `skill`, `location`, `experience`, `salary`, `img1`, `img2`, `img3`, `apply`) VALUES
(9, 39, 'Delloite ', 'delloite@india.com', 91, 'Deloitte Touche Tohmatsu Limited, commonly referred to as Deloitte, is a multinational professional services network. Deloitte is one of the Big Four accounting organizations and the largest professional services network in the world by revenue and number', 'Senior Manager', 'Conduct advanced level research, analysis, and writing in LSHC – assist and support LSHC research/project leads in building eminence for Deloitte’s LSHC practice in the marketplace. Support research proposals and projects being developed by LSHC project l', 'Bangalore, Karnataka', '5', '10', 'dello1.jpg', 'dello2.jpg', 'dello3.jpg', 'https://www2.deloitte.com/us/en/pages/careers/topics/careers.html'),
(11, 14, 'Mphasis Limited', 'mphasisindia@limited.com', 91, 'Mphasis Limited is an IT services company based in Bangalore, India. The company provides infrastructure technology and applications outsourcing services, as well as architecture guidance, application development and integration, and application managemen', 'Senior Software Developer', 'Good knowledge on agile methodology. Good hands on with architecting the solution. Behavioral Skills. Good communication. Comfortable talking to business when needed. Multi-tasking', 'Hyderabad', '4', '12', 'm1.png', 'm2.jpg', 'h3.jpg', 'https://careers.mphasis.com/'),
(12, 14, 'American Express', 'american_express@usa.com', 91, 'The American Express Company, also known as Amex, is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850 and is one of the 30 components of the Dow Jones Industrial A', 'Engineer II - Big Data Developer (Python and Spark)', 'Every member of our team must be able to demonstrate the following technical, functional, leadership and business core competencies, including: Agile Practices, Programming Languages (Python, Spark, Shell Scripting etc.), Thorough Data Analysis, Critical ', 'Chennai, Tamil Nadu, India', '4', '14', 'a4.png', 'ameri2.jpg', 'ameri3.jpg', 'https://jobs.americanexpress.com/india'),
(13, 39, 'Amazon Web Servies', 'amazonweb@info.com', 91, 'Amazon Web Services is a subsidiary of Amazon providing on-demand cloud computing platforms and APIs to individuals, companies, and governments, on a metered pay-as-you-go basis.', 'Sr. Technical Program Manager', 'Excellent organizational skills and project tracking abilities; experience of procurement and logistics, strong focus and attention to detail; the ability to work in a very fast-paced, hectic, and energetic environment, yet able to maintain high quality s', 'Bangalore, Karnataka', '5', '15', 'amaz1_a.png', 'amaz2.jpg', 'amaz3.jpg', 'https://aws.amazon.com/careers/'),
(14, 14, 'Microsoft', 'microsoftsolutions@usa.com', 79, 'Microsoft Corporation (/maɪkroʊ.sɒft/) is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and rela', 'Software Developer', 'Software Development, C, C++, C#, Java, JavaScript, SQL, Python, Algorithms.', 'Bangalore, Karnataka', '2', '20', 'micr1.jpg', 'micr2.jpg', 'micr3.jpg', 'https://careers.microsoft.com/us/en'),
(15, 14, 'Siemens Limited', 'siemens@info_usa.com', 89, 'Siemens AG is a German multinational conglomerate company headquartered in Munich and the largest industrial manufacturing company in Europe with branch offices abroad. ', 'Sales incentives strategy lead', 'Definition and roll-out of the strategy. Implement a transparent sales performance process across all divisions, from target setting to quarterly order intake tracking for each of the 400 sales and account managers in the country.', 'Hyderabad, India', '5', '18', 'siemen1_a.png', 'siemen2.jpg', 't2.jpg', 'https://new.siemens.com/global/en/company/jobs/search-careers.html'),
(16, 14, 'Xebia Technologies', 'xebia@usa.com', 1997856456, 'As a pioneering IT consultancy company, Xebia delivers high-quality services to cover all aspects of digital transformation. Expert collectives specialized in Data & AI, Cloud, DevOps, Business Agility, Security, Training & Learning, Software Development,', 'Data Scientist', 'Expertise with one of the following scripting languages; Python, R, Knime, Mat-lab, Java, Mat-lab/Octave OpenNLP, WordNet, NLTK. Hadoop ecosystem, H2o, elastic search, spark. Tech savy and willing to work with open-Source Tools. Proven track record and ex', 'Bangalore, Karnataka', '5', '18', 'x1.jpg', 'x2.jpg', 'm2.jpg', 'https://pages.xebia.com/data-scientist');

-- --------------------------------------------------------

--
-- Table structure for table `stud_table`
--

CREATE TABLE `stud_table` (
  `stud_id` int(10) NOT NULL,
  `user_id` int(20) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `profession` varchar(200) NOT NULL,
  `objective` varchar(500) NOT NULL,
  `education` varchar(500) NOT NULL,
  `experience` varchar(500) NOT NULL,
  `skill` varchar(500) NOT NULL,
  `language` varchar(500) NOT NULL,
  `links` varchar(50) NOT NULL,
  `img1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_table`
--

INSERT INTO `stud_table` (`stud_id`, `user_id`, `name`, `address`, `email`, `phone`, `profession`, `objective`, `education`, `experience`, `skill`, `language`, `links`, `img1`) VALUES
(6, 13, 'Angelina Stuart', 'Sukanta Pally, Agarpara, Kolkata-700109', 'angelinastuart@gmail.com', 1995645389, 'Software Engineer', 'Young engineer with 2 years knowledge in software industry.', 'B.Tech - Georgia State University (CGPA-7/10). ', 'IBM-2 years as software developer and tester, already done 2 projects one for data science and other for machine learning.', 'C, C++, .Net, NodeJS, React, AngularJS, PHP, MySQL', 'English, Spanish, Japanese', 'www.github.com/Arijit', 'job1.jpg'),
(7, 13, 'Jason Bourne', '17/A Manhattan Street, New York, United States of America', 'jasonbourne@hotmail.com', 1783456712, 'Ethical Hacker', 'Young dynamic professional hacker qualified with penetration testing and cyber security as well as hands on experience in digital financial transactions.', 'MS - MIT (CGPA-5/5)', '4 years as bug finder in Facebook, Microsoft.', 'Networking, Problem Solving, SQL Injection.', 'English,Chinese', 'www.github.com/JasonBourne', 'job2.jpg'),
(10, 13, 'Scarlett Johansson', 'Manhattan, New York city, United States of America', 'witchscarlet@hotmail.com', 1994367890, 'Business Analyst', 'Responsible for bridging the gap between IT and the business using data analytics to assess processes, determine requirements and deliver data-driven recommendations and reports to executives and stakeholders.', 'MS - California State University, Los Angeles (CGPA-4/5)', '2 years as business and marketing engineer in Deloitte,USA. 1 year as project manager and Team Leader in Deloitte,USA.', 'MBA in marketing and finance as well as in strategies. Having knowledge of .Net and C#.', 'English, Russian, Italian, Spanish', 'www.github.com/witch', 'job7.jpg'),
(12, 13, 'Chris Evans', 'Brooklyn, New York city, United States of America', 'evans@office.com', 1973435645, 'Web Analyst', 'Experienced in web development and website maintainance. Perform gap analyses and root case analyses on goals and objectives. Define, track, measure and analyze performance of both internal and external promotions including multi/omni channel attribution. Design A/B and multivariate test strategies to optimize performance of a feature, product or offering. Utilize mathematical and anal.', 'MCA - IIT Kharagpur (CGPA-9/10)', '1 year experience as web developer in Technotrix Solutions. 2 years experience as web analyst in Capgemini.', 'Formulate market, audience and product analyses and provide actionable insights to stakeholders to help drive digital subscriptions, grow audience and optimize revenue.', 'English, Russian, Japanese, Spanish.', 'www.github.com/Chrisevans', 'job10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `radio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `u_name`, `password`, `name`, `phone`, `email`, `radio`) VALUES
(13, 'lily', '12345', 'Lily Saha Ray', '2145685645', 'lily@gmail.com', 'applicant'),
(14, 'rookie', '98765', 'rookie', '+91-9007837970', 'rudrasishbagchi@gmail.com', 'recruiter'),
(39, 'admin', 'admin@123', 'Arijit Saha Ray', '1456231254', 'arijitsaharay07@gmail.com', 'recruiter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_table`
--
ALTER TABLE `job_table`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `premium_table`
--
ALTER TABLE `premium_table`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `stud_table`
--
ALTER TABLE `stud_table`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_table`
--
ALTER TABLE `job_table`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `premium_table`
--
ALTER TABLE `premium_table`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `stud_table`
--
ALTER TABLE `stud_table`
  MODIFY `stud_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
