

CREATE TABLE `bookclass` (
  `classid` varchar(11) NOT NULL,
  `classname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`classid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO bookclass VALUES("000","General Works");
INSERT INTO bookclass VALUES("100","Philosophy");
INSERT INTO bookclass VALUES("200","Religions");
INSERT INTO bookclass VALUES("300","Social Science");
INSERT INTO bookclass VALUES("400","Languages");
INSERT INTO bookclass VALUES("500","Natural Science");
INSERT INTO bookclass VALUES("600","Technology");
INSERT INTO bookclass VALUES("700","Arts/Recreation");
INSERT INTO bookclass VALUES("800","Literature");





CREATE TABLE `books` (
  `bookid` int(11) NOT NULL AUTO_INCREMENT,
  `accNo` int(50) NOT NULL,
  `booksubject` varchar(100) DEFAULT NULL,
  `booktitle` varchar(50) DEFAULT NULL,
  `bookclass` varchar(50) DEFAULT NULL,
  `author1` varchar(50) DEFAULT NULL,
  `author2` varchar(50) DEFAULT NULL,
  `author3` varchar(50) DEFAULT NULL,
  `bookpub` varchar(50) DEFAULT NULL,
  `booked` varchar(50) NOT NULL,
  `bookcopies` int(11) DEFAULT '0',
  `isbn` varchar(50) DEFAULT NULL,
  `copyright` int(11) DEFAULT '0',
  `daterecieve` varchar(20) DEFAULT NULL,
  `dateadded` datetime DEFAULT NULL,
  `placeofpob` varchar(50) DEFAULT NULL,
  `status` int(20) NOT NULL,
  PRIMARY KEY (`bookid`),
  KEY `author1` (`author1`),
  KEY `author2` (`author2`),
  KEY `author3` (`author3`),
  KEY `bookclass` (`bookclass`),
  KEY `bookcopies` (`bookcopies`),
  KEY `booked` (`booked`),
  KEY `bookid` (`bookid`),
  KEY `bookpub` (`bookpub`),
  KEY `booksubject` (`booksubject`),
  KEY `booktitle` (`booktitle`),
  KEY `copyright` (`copyright`),
  KEY `dateadded` (`dateadded`),
  KEY `daterecieve` (`daterecieve`),
  KEY `isbn` (`isbn`),
  KEY `placeofpob` (`placeofpob`)
) ENGINE=MyISAM AUTO_INCREMENT=2411 DEFAULT CHARSET=utf8;

INSERT INTO books VALUES("2338","4872","","Adventure oh Huckleberry Finn","700","Twain shaen","","","","","102","","0","2017-04-01 02:10:26","2017-04-01 02:10:26","","1");
INSERT INTO books VALUES("2367","4875","","C++ programming Language","600","dyesebel romo","","","","","19","","0","2017-04-19 18:53:19","2017-04-19 18:53:19","","1");
INSERT INTO books VALUES("2366","4936","","Business Writing","800","Francis Crisostomo","","","","","119","","0","2017-2018","2017-01-23 11:25:22","","0");
INSERT INTO books VALUES("2369","8787","","Place Of Publication Book Edition Book Place Of Pu","100","Francis Crisostomo","","","","","96","","0","2017-2018","2017-03-20 17:33:07","","1");
INSERT INTO books VALUES("2378","487234","English","manual of life","200","Francis Crisostomo","","","","","23","","0","2017-02-07 18:34:43","2017-02-07 18:34:43","","0");
INSERT INTO books VALUES("2384","6969","Math","Algebra","700","Albert Einstien","","","","","90","","0","2017-04-19 18:53:47","2017-04-19 18:53:47","","1");
INSERT INTO books VALUES("2386","48725","Math","java programming Language","600","dyesebel romo dfdf","","","","","686","","0","2016-2017","2017-05-02 05:14:50","","1");
INSERT INTO books VALUES("2387","878734","Science","Geometry","700","wala","","","","","23","","0","2016-2017","2017-03-21 05:02:49","","0");
INSERT INTO books VALUES("2388","87874","Science math","Chemestry","300","langa family","","","","","11","","0","2015-2016","2017-04-01 19:55:46","","1");
INSERT INTO books VALUES("2389","435","Math","Place Of Publication Book Edition Book Place Of Pu","400","sdsd","ds","","","","-1","","0","2015-2016","2017-03-21 18:13:29","","1");
INSERT INTO books VALUES("2407","9343924","Java","Object Oriented Programming","700","SPCFI","","","","","21","345354545","0","2017-2018","2017-03-31 22:03:01","","1");
INSERT INTO books VALUES("2408","2334","Programming","C/VB.net","600","asdsad","","","","","13","","0","2017-04-01 02:10:34","2017-04-01 02:10:34","","1");





CREATE TABLE `sy` (
  `syid` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(20) NOT NULL,
  PRIMARY KEY (`syid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO sy VALUES("1","2015-2016");
INSERT INTO sy VALUES("2","2016-2017");
INSERT INTO sy VALUES("3","2017-2018");
INSERT INTO sy VALUES("4","2018-2019");





CREATE TABLE `tblbookreserve` (
  `resid` int(11) NOT NULL AUTO_INCREMENT,
  `accNo` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `timeres` time NOT NULL,
  `timeget` datetime NOT NULL,
  `status` int(50) NOT NULL,
  PRIMARY KEY (`resid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tblbookreserve VALUES("1","435","41","06:57:51","2017-04-19 19:00:00","0");





CREATE TABLE `tblborrow` (
  `borrowid` int(11) NOT NULL AUTO_INCREMENT,
  `accNo` varchar(50) NOT NULL,
  `classid` int(11) NOT NULL DEFAULT '0',
  `studentid` bigint(50) NOT NULL,
  `dateborrow` datetime NOT NULL,
  `duedate` date DEFAULT NULL,
  `datereturn` date NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `item` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`borrowid`),
  KEY `bookid` (`accNo`),
  KEY `borrowerid` (`studentid`),
  KEY `borrowid` (`borrowid`),
  KEY `classid` (`classid`),
  KEY `item` (`item`),
  KEY `purpose` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=424 DEFAULT CHARSET=utf8;

INSERT INTO tblborrow VALUES("417","4875","600","2","2017-04-01 02:31:55","2017-04-01","2017-04-08","Signed","2.00","0");
INSERT INTO tblborrow VALUES("416","87874","300","1","2017-04-01 02:25:46","2017-04-01","2017-04-19","Signed","2.00","0");
INSERT INTO tblborrow VALUES("415","87874","300","1","2017-04-01 02:20:47","2017-04-01","2017-04-01","Signed","0.00","1");
INSERT INTO tblborrow VALUES("414","2334","600","1","2017-04-01 02:19:45","2017-04-01","2017-04-01","Signed","2.00","1");
INSERT INTO tblborrow VALUES("413","2334","600","1","2017-04-01 02:17:14","2017-04-01","2017-04-26","Signed","2.00","0");
INSERT INTO tblborrow VALUES("411","4875","600","1","2017-04-01 02:16:07","2017-04-01","2017-04-01","Signed","2.00","1");
INSERT INTO tblborrow VALUES("412","8787","100","1","2017-04-01 02:16:23","2017-04-01","2017-04-26","Signed","2.00","0");
INSERT INTO tblborrow VALUES("410","6969","700","1","2017-04-01 02:15:15","2017-04-01","2017-04-01","Signed","2.00","1");
INSERT INTO tblborrow VALUES("418","8787","100","3","2017-04-19 18:51:33","2017-04-10","2017-04-19","Signed","2.00","0");
INSERT INTO tblborrow VALUES("419","435","400","2","2017-04-19 18:54:58","2017-04-19","0000-00-00","Signed","2.00","1");
INSERT INTO tblborrow VALUES("420","435","400","2","2017-04-19 18:58:30","2017-04-19","0000-00-00","Unsigned","2.00","1");
INSERT INTO tblborrow VALUES("421","8787","100","1","2017-05-15 18:33:22","2017-05-01","2017-05-15","Signed","2.00","0");
INSERT INTO tblborrow VALUES("422","4875","600","1","2017-05-15 18:45:22","2017-05-15","0000-00-00","Unsigned","2.00","1");
INSERT INTO tblborrow VALUES("423","87874","300","1","2017-10-06 20:17:12","2017-10-06","0000-00-00","Unsigned","2.00","1");





CREATE TABLE `tblborrower` (
  `studentid` int(11) NOT NULL AUTO_INCREMENT,
  `lname` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `mi` varchar(2) DEFAULT NULL,
  `contactnumber` bigint(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `photo` varchar(50) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `levelyr` varchar(50) DEFAULT NULL,
  `sy` varchar(10) NOT NULL,
  `section` varchar(30) NOT NULL,
  `dateadded` datetime DEFAULT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`studentid`),
  KEY `address` (`address`),
  KEY `gender` (`gender`),
  KEY `levelyr` (`levelyr`),
  KEY `lname` (`lname`),
  KEY `mi` (`mi`),
  KEY `fname` (`fname`),
  KEY `studentid` (`studentid`),
  KEY `contactnumber` (`contactnumber`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO tblborrower VALUES("1","Crisostomo","Francis","Male","S","9322865875","Calauag, Quezon","","Teacher","1st Year","2017-2018","jade","2017-05-15 18:36:48","1");
INSERT INTO tblborrower VALUES("2","Roquero","Marecel","Female","S","9322865875","Iloilo City","1360140014_247256571971116.jpg","Student","4th Year","2017-2018","bato","2017-03-23 20:37:55","1");
INSERT INTO tblborrower VALUES("3","Navarro","Gerlie","Female","C","9322865875","Carmona, Cavite","1364180776_Blue hills.jpg","Teacher","1st Year","2017-2018","jade","2017-03-25 11:06:16","1");
INSERT INTO tblborrower VALUES("4","adsad","asd","Male","d","9322865875","asdasd","1364042802_Sunset.jpg","Teacher","2nd Year","2017-2018","rubi","2017-03-23 20:46:42","1");
INSERT INTO tblborrower VALUES("5","assd","asdas","Female","d","9322865875","asdsad","1364043021_Winter.jpg","Teacher","3rd Year","2017-2018","emerald","2017-03-27 05:23:11","0");
INSERT INTO tblborrower VALUES("6","asds","das","Male","a","33434","sdsad","","Employee","4th Year","2017-2018","Diamond","2017-03-27 05:23:35","1");





CREATE TABLE `tblpayment` (
  `payid` int(11) NOT NULL AUTO_INCREMENT,
  `amount` decimal(10,2) NOT NULL,
  PRIMARY KEY (`payid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tblpayment VALUES("1","2.00");





CREATE TABLE `tblreciept` (
  `recieptid` int(11) NOT NULL AUTO_INCREMENT,
  `studentid` int(11) NOT NULL,
  `accNo` int(11) NOT NULL,
  `borrowid` int(11) NOT NULL,
  `datedue` varchar(50) NOT NULL,
  `datereturn` varchar(50) NOT NULL,
  `totaldays` varchar(50) NOT NULL,
  `totalpay` varchar(50) NOT NULL,
  PRIMARY KEY (`recieptid`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

INSERT INTO tblreciept VALUES("37","1","87874","405","January 01 2017","April 01, 2017","90","180.00");
INSERT INTO tblreciept VALUES("36","2","6969","404","April 01 2017","April 15, 2017","14","28.00");
INSERT INTO tblreciept VALUES("35","2","4872","403","April 01 2017","April 22, 2017","21","42.00");
INSERT INTO tblreciept VALUES("34","3","6969","401","April 01 2017","April 24, 2017","23","46.00");
INSERT INTO tblreciept VALUES("33","1","4872","400","April 01 2017","April 26, 2017","25","50.00");
INSERT INTO tblreciept VALUES("38","1","2334","413","April 01 2017","April 26, 2017","25","50.00");
INSERT INTO tblreciept VALUES("39","1","8787","412","April 01 2017","April 26, 2017","25","50.00");
INSERT INTO tblreciept VALUES("40","2","4875","417","April 01 2017","April 08, 2017","7","14.00");
INSERT INTO tblreciept VALUES("41","1","87874","416","April 01 2017","April 19, 2017","18","36.00");
INSERT INTO tblreciept VALUES("42","3","8787","418","April 10 2017","April 19, 2017","9","18.00");
INSERT INTO tblreciept VALUES("43","1","8787","421","May 01 2017","May 15, 2017","14","28.00");





CREATE TABLE `tblsection` (
  `sec_id` int(11) NOT NULL AUTO_INCREMENT,
  `yr_id` int(11) NOT NULL,
  `section` varchar(20) NOT NULL,
  PRIMARY KEY (`sec_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO tblsection VALUES("1","1","Jade");
INSERT INTO tblsection VALUES("2","2","Ruby ");
INSERT INTO tblsection VALUES("3","3","Emerald");
INSERT INTO tblsection VALUES("4","4","Diamond");
INSERT INTO tblsection VALUES("5","1","Sapphire");
INSERT INTO tblsection VALUES("6","1","Topaz");
INSERT INTO tblsection VALUES("7","3","Amethyst");
INSERT INTO tblsection VALUES("8","4","Pearl");





CREATE TABLE `tbltype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `borrowertype` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `borrowertype` (`borrowertype`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO tbltype VALUES("1","Teacher");
INSERT INTO tbltype VALUES("2","Employee");
INSERT INTO tbltype VALUES("3","Non-Teaching");
INSERT INTO tbltype VALUES("4","Student");
INSERT INTO tbltype VALUES("5","Utility");





CREATE TABLE `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO user VALUES("1","librarian","admin");





CREATE TABLE `userlogin` (
  `loginid` int(11) NOT NULL AUTO_INCREMENT,
  `studentid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO userlogin VALUES("1","3","Navarro","1234");
INSERT INTO userlogin VALUES("2","1","Crisostomo","1234");
INSERT INTO userlogin VALUES("3","2","Roquero","1234");



