-- ----------------------------
-- Table structure for `news`
-- ----------------------------
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoryId` int(10) unsigned NOT NULL,
  `authorId` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `listTitle` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `hideImage` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `content` longtext,
  `metaTitle` varchar(255) DEFAULT NULL,
  `metaDescription` text,
  `metaKeywords` text,
  `status` varchar(255) NOT NULL DEFAULT 'published',
  `visited` int(10) unsigned NOT NULL DEFAULT '0',
  `language` varchar(5) NOT NULL,
  `publishedAt` datetime NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_news_categoryId` (`categoryId`),
  KEY `fk_news_authorId` (`authorId`),
  CONSTRAINT `fk_news_categoryId` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_news_authorId` FOREIGN KEY (`authorId`) REFERENCES `authors` (`id`) ON UPDATE CASCADE ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;