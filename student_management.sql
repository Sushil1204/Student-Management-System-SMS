

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(6) AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'sushil', 'sushilspundkar@gmail.com', 'e3afed0047b08059d0fada10f400c1e5'),
(2, 'User@1204', 'sanjayspundkar71@gmail.com', '8f9bfe9d1345237cb3b2b205864da075');

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `SID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Mobile_number` int(20) NOT NULL,
  `Gender` enum('M','F') NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Roll_No` int(10) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `student` (`SID`, `Firstname`, `Lastname`, `Date_of_Birth`, `Mobile_number`, `Gender`, `Address`, `Class`, `Roll_No`) VALUES
(2, 'keval', 'koli', '2001-02-11', 123456789, 'M', 'mumbai', 'FYCS', 2),
(3, 'sakshi', 'pundkar', '2002-01-20', 987654321, 'F', 'mumbai', 'FYCS', 3),
(4, 'kapil', 'mohod', '2001-04-12', 986752582, 'M', 'mumbai', 'FYCS', 4),
(5, 'rohit', 'thorat', '2001-05-20', 123548679, 'M', 'kandivali', 'FYCS', 5),
(6, 'pratik', 'pundkar', '2000-12-02', 976756453, 'M', 'akot', 'FYCS', 6),
(1, 'sushil', 'pundkar', '2001-04-12', 877968516, 'M', 'Mumbai', 'FYCS', 1),
(7, 'vidhi', 'patel', '2001-01-02', 123465897, 'F', 'Malad', 'FYCS', 7),
(8, 'mohit', 'sharma', '2000-12-08', 987564231, 'M', 'kandivali', 'FYCS', 8);
COMMIT;
