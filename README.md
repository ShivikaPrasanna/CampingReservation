# CampingReservation
- Camping reservation for new or returning users to make reservation for camps. 
- Admins have additional rights to modify camp information such as the cost or add/delete a camp. 
- This is a prototype for a web application that uses HTML5, CSS, Bootstrap, Javascript and PHP.
- Please note: the password uses MD5 hashing technique.

To run this web application, start the MAMP server. Select the application and run on localhost. 

***** DATABASE INFORMATION:
Create the database using PHPAdmin. The following are the tables used in this application:

DROP TABLE IF EXISTS `camps_db`;
CREATE TABLE `camps_db` (
  `camp_id` varchar(30) NOT NULL,
  `camp_name` varchar(200) NOT NULL,
  `cost` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `description` varchar(300) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `camps_db` (`camp_id`, `camp_name`, `cost`, `address`, `phone_number`, `description`, `start_date`, `end_date`, `image`) VALUES
('1', 'Cedar Hill Stateparks', '$200', 'TX', '1231231231', 'Birding, Biking, Fishing & Camping', '01-01-2017', '12-31-2018', 'cedar.jpg'),
('2', 'Arcadia Lake', '$500', 'OK', '4564564564', 'Scenic view with Tent sites and Camping grounds', '12-02-2018', '12-01-2019', 'arcadia.jpg');

ALTER TABLE `camps_db`
  ADD PRIMARY KEY (`camp_id`);
----------------------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `username` varchar(30) NOT NULL,
  `camp_id` varchar(30) NOT NULL,
  `camp_name` varchar(200) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `cart`
  ADD PRIMARY KEY (`username`,`camp_id`);  
----------------------------------------
DROP TABLE IF EXISTS `user_camps_db`;
CREATE TABLE `user_camps_db` (
  `username` varchar(30) NOT NULL,
  `camp_id` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user_camps_db` (`username`, `camp_id`) VALUES
('alice', '1'),
('alice', '2'),
('bernard', '1');

ALTER TABLE `user_camps_db`
  ADD PRIMARY KEY (`username`,`camp_id`);
----------------------------------------
DROP TABLE IF EXISTS `users_db`;
CREATE TABLE `users_db` (
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users_db` (`username`, `name`, `password`, `email_address`, `role`) VALUES
('alice', 'alice', '680fe9cc7aea780b69e903f70b179bf5', 'alice001@gmail.com', 'user'),
('bernard', 'bernard', '942ad545286822362e4ea25912a2f987', 'bernard.002@gmail.com', 'user'),
('i', 'i', '5433e11b64397c0d6d974054d8f4425a', 'i@gmail.com', 'admin'),
('s', 's', 'a0c56f6e1681b38171a42e2e91c33b31', 's@gmail.com', 'admin'),
('v', 'v', 'a52fd8cdeb70f9c5fc08b97f84a5577b', 'v.bb@gmail.com', 'admin');

ALTER TABLE `users_db`
  ADD PRIMARY KEY (`username`);
----------------------------------------

Note: All camp images and names have been taken from Google.
  
