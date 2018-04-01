-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2017 at 05:44 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skptricksdemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `POSTID` int(3) NOT NULL,
  `POSTTITLE` varchar(100) NOT NULL,
  `POSTDETAILS` varchar(10000) NOT NULL,
  `POSTLINK` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`POSTID`, `POSTTITLE`, `POSTDETAILS`, `POSTLINK`) VALUES
(1, 'PDO::FETCH_CLASS VS. PDO::FETCH_PROPS_LATE', 'PDO::FETCH_CLASS\r\n\r\nIn our last post we have discussed about PDO::FETCH_CLASS, from which I think you are able to build complete understanding on PDO::FETCH_CLASS. But in this post we are going to discuss about few shortcomes about PDO::FETCH_CLASS.\r\n\r\nLets see the below example for PDO::FETCH_CLASS.', 'http://www.skptricks.com/2017/10/pdofetchclass-vs-pdofetchpropslate.html'),
(2, 'PDO::FETCH_CLASS Example', 'PDO::FETCH_CLASS helps to maintain the direct relation with class attribute. Basically Returns a new instance of the requested class, mapping the columns of the result set to named properties in the class.\r\nAnother useful mode is PDO::FETCH_CLASS, which can create an object of particular class and no need of extra line of codes.\r\n\r\n$stmt->setFetchMode(PDO::FETCH_CLASS, \"user\");\r\nreturn $obj = $stmt->fetchAll(); \r\n$obj variable will produce an array filled with objects of News class, setting class properties from returned values.', 'http://www.skptricks.com/2017/10/pdo-fetch-class-example.html'),
(3, 'Display Browser Notifications from Web Application', 'Browser desktop notification system helps to push the new updates notification in web application using browser. This notification system is quite bit similar to android notification. we are providing the source which helps you to integrate notification system in application and through which you get the real time updates.\r\n\r\nNote: Use this Chrome and Firefox Browser.\r\n', 'http://www.skptricks.com/2017/10/display-browser-notifications-from-web.html'),
(4, 'Submit Checkbox values in Form with JQuery', 'This post explains how to submit checkbox values in Form using JQuery. Also in this tutorial we have provided complete explanation how to get selected checkbox Values/Unique IDs. Based on this values you can perform delete or other operations as per the need.\r\n\r\nWe have retrieved these Values/Unique IDs using below two methods:\r\nFetching the Unique values/ID\'s using JQuery script after that, you can use these ID\'s in AJAX Code to perform delete operation.\r\nFetching the Unique values using PHP script, when we submit the FORM by clicking on delete button and afterwards page redirected to \"submit.php\" page. This page will show selected checkbox Unique values/ID\'s.', 'http://www.skptricks.com/2017/10/submit-checkbox-values-in-form-with-jquery.html'),
(5, 'Secure User Password In Login and Registration Page', 'In this post, we are providing some techniques and ideas to secure you webpage login and registration page. Now a days security is more important to all of us as it protects website from unauthorized access.\r\nHere we will share some information in which you learn how to secure user password field of login page using PHP language. To secure user password field  in login and registration page, we are using two PHP functions, which are as follows :\r\npassword_hash() Function.\r\npassword_verify() Function.\r\npassword_hash()\r\n\r\npassword_hash() creates a new password hash using a strong one-way hashing algorithm. Also password_hash() is compatible with crypt(). Therefore, password hashes created by crypt() can be used with password_hash().', 'http://www.skptricks.com/2017/10/password-hash-and-password-verify-using-user-login-page.html'),
(6, 'PHP Session Management With Some Tips', 'Long time back, we have discussed about the PHP Session for state management. Now I will share some new concepts about session that you might not heard about it. Check out our blog archive on the topic if you’re looking to learn about PHP Session For State Management.\r\n\r\nWhy do we need session ?\r\nSessions are a simple way to store data for individual users against a unique session ID. This can be used to persist state information between page requests.\r\n\r\nLets see the some more examples about PHP Session, Which may help you to build more understanding.\r\n\r\nGenerate Session ID using session_id() function. ', 'http://www.skptricks.com/2017/10/php-session-management-with-some-tips.html'),
(7, 'PHP Login and Registration System with PDO Connection', 'In this Post we are providing you an easy registration and login process using PDO connection with better password encryption and secure web page login.\r\nWhy do we use PDO for Login and Registration System?\r\n\r\nPDO is a PHP extension that allow us to implement code which is portable across many databases and platforms.\r\n\r\n\r\nLets see the simple explanation about login and registration system.\r\n\r\nUSER Table \r\nUser table contains all the users registration details.', 'http://www.skptricks.com/2017/10/php-login-and-registration-system-with.html'),
(8, 'PHP MySQL connection using PDO', 'Today, In this post we will learn how to connect to MySQL using PDO in PHP and just for the information PDO stands for \"PHP Data Objects\".\r\nHere we will see the some useful examples to perform CURD operations in MySQL database using PDO and also it provides you some information about MySQL Prepared Statement.\r\n\r\nConnections to MySQL database can be established by creating instances of the PDO base class and specify the driver, database name, username, and password.\r\nSYNTAX:\r\n$dbConnection = new PDO(\"mysql:host=$dbhost;dbname=$dbname\", $dbuser, $dbpass);', 'http://www.skptricks.com/2017/10/connections-and-connection-management-using-pdo-mysql.html'),
(9, 'PHP File Upload', 'With the help of php, it is very easy to upload files to the server. PHP file upload features allows you to upload binary and text files both. Depending upon the requirement one can upload single and multiple files through PHP script by modifying the few line of codes.\r\n\r\nNOTE : Make sure you have mentioned/used proper authentication mechanism in you code, while uploading the files to server. Otherwise small loop holes create a trouble in future and indirectly you are providing access to unauthorized users.\r\n\r\nPHP $_FILES\r\n\r\nThe PHP global $_FILES contains all the information of file. By the help of $_FILES global, we can get file name, file type, file size, temp file name and errors associated with file.', 'http://www.skptricks.com/2017/10/php-file-upload-using-post-method.html'),
(10, 'PHP Form Handling', 'This tutorial we discuss about PHP form handling. PHP Forms are used in most of web applications and you can say it is a most integral part of web application. PHP Forms are used to send and receive data request depending upon requested form details. Here we learn about POST and GET request of PHP Form.\r\n\r\nPHP has two superglobals global function to get PHP form data, which are as follows :\r\n$_GET\r\n$_POST \r\nPHP Get Form\r\n\r\nwhen we are not providing any method type in form tag then Get request is consider as default form request. The data passed through get request is visible on the browser URL. You can send limited amount of data through get request. Get Request is consider as less secure one because all the requested data is visible in browser URL.', 'http://www.skptricks.com/2017/10/php-form-handling-using-get-and-post-method.html'),
(11, 'PHP Select Data From MySQL Database\r\n', 'In this article, we are going to learn how to select records from database table using PHP Script. To select records from database table we are using PHP mysqli_query() function. This function is used to perform query operation in MySQL database.\r\n\r\nNOTE : mysql_query() function is deprecated, since PHP 5.5 Version.\r\n               mysqli_connect() function is not available form PHP 7\r\n\r\nThere are two other MySQLi functions used to retrieve data from MySQL Database:\r\nmysqli_num_rows(mysqli_result ): returns number of rows from database.\r\nmysqli_fetch_assoc(mysqli_result ): returns row as an associative array. Each key of the array represents the column name of the table. It return NULL if there are no more rows.', 'http://www.skptricks.com/2017/10/php-mysql-select.html'),
(12, 'PHP Delete Data From MySQL Database\r\n', 'In this article, we are going to learn how to delete records in database table using PHP Script. To delete records in database table we are using PHP mysqli_query() function. This function is used to perform query operation in MySQL database.\r\n\r\n\r\nNOTE : mysql_query() function is deprecated, since PHP 5.5 Version.\r\nmysqli_connect() function is not available form PHP 7', 'http://www.skptricks.com/2017/10/steps-to-delete-data-in-mysql-database.html'),
(13, 'PHP Update Data Into MySQL Database\r\n', 'In this article, we are going to learn how to update records in database table using PHP Script. To update records in database table we are using PHP mysqli_query() function. This function is used to perform query operation in MySQL database.\r\nSimilarly, we have used this function to perform insertion operation in database.\r\n\r\nNOTE : mysql_query() function is deprecated, since PHP 5.5 Version.\r\n              mysqli_connect() function is not available form PHP 7.', 'http://www.skptricks.com/2017/10/how-to-update-data-in-mysql-using-php-script.html'),
(14, 'PHP Insert Data Into MySQL\r\n', 'In this post, we are going to learn how to insert records in database table using PHP Script. To insert records in database table we are using PHP mysqli_query() function. This function is used to perform query operation in MySQL database.\r\n\r\nBefore we start with insert operation in MySQL database, I think we should have complete idea about how to create MySQL database table using PHP script.\r\n\r\nNOTE : mysql_query() function is deprecated, since PHP 5.5 Version.', 'http://www.skptricks.com/2017/10/how-to-insert-data-into-mysql-database-table-using-php.html'),
(15, 'PHP Create MySQL Table\r\n', 'In this article, we are going to learn how to create database table in MySQL using PHP Script. To create database table using PHP script we require mysqli_query() function, Which help us to perform query operation in database.\r\nCheck out our previous tutorial to Create MySQL database using php.\r\n\r\nNOTE : mysqli_connect() function is not available form PHP 7\r\n\r\nwe are creating below table from our script:\r\n         Table : companyrecord\r\n          ============================\r\n          || id        ||    empname   ||  empsalary   ||\r\n          ============================', 'http://www.skptricks.com/2017/10/steps-to-create-mySQL-table-using-php-script.html'),
(16, 'PHP Create MySQL Database', '\r\nToday, we will show you example to Create MySQL Database using PHP Script. Here we are using mysqli_query() function to create database.\r\n\r\nNOTE : mysqli_query() function Performs a query operation on the database.\r\n               mysqli_connect() function is not available form PHP 7', 'http://www.skptricks.com/2017/10/php-create-mysql-database.html'),
(17, 'php mysql connection\r\n', 'Now a days, Database is required to stores, organizes and manages a large amount of information within a single software application. Records keeping is very easier for user, who is maintaining the large database. Database application manages data efficiently and allows users to perform multiple tasks with easily.\r\n\r\nToday, we will discuss about MySQL database and also we will provide brief details, how we can connected to MySQL database with PHP application. In case you want to Learn PHP Basic, then do follow our blog and do post your comments. \r\n\r\nThere are two ways to establish a connection with MySQL database using PHP :\r\nUsing mysqli_connect() function.\r\nUsing PDO::__construct() function.\r\nNOTE : mysql_connect() extension is deprecated since PHP 5.5.\r\n               mysqli_connect() function is not available form PHP 7', 'http://www.skptricks.com/2017/10/php-connect-to-mysql-database.html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`POSTID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
