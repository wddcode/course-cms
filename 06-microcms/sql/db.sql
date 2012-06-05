--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(128) DEFAULT NULL,
  `position` int(11) unsigned NOT NULL DEFAULT '1',
  `template` varchar(256) NOT NULL DEFAULT 'two_columns',
  `name` varchar(256) DEFAULT NULL,
  `title` varchar(256) DEFAULT NULL,
  `subtitle` varchar(256) DEFAULT NULL,
  `content_main` longtext,
  `content_sidebar` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` VALUES(9, 'home', 3, 'home', 'Home', 'Home site', '', '', '');
