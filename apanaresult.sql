-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: apanaresult
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

DROP TABLE IF EXISTS `admission`;
CREATE TABLE `admission` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `post_name` varchar(100) NOT NULL,
  `generated_link` varchar(150) NOT NULL,
  `sort_info` varchar(3000) DEFAULT NULL,
  `img_thumb` varchar(150) DEFAULT NULL,
  `dnd` binary(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `admitcard`;
CREATE TABLE `admitcard` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `post_name` varchar(100) NOT NULL,
  `generated_link` varchar(150) NOT NULL,
  `sort_info` varchar(3000) DEFAULT NULL,
  `img_thumb` varchar(150) DEFAULT NULL,
  `dnd` binary(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `answerkey`;
CREATE TABLE `answerkey` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `post_name` varchar(100) NOT NULL,
  `generated_link` varchar(150) NOT NULL,
  `sort_info` varchar(3000) DEFAULT NULL,
  `img_thumb` varchar(150) DEFAULT NULL,
  `dnd` binary(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `certificate`;
CREATE TABLE `certificate` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `post_name` varchar(100) NOT NULL,
  `generated_link` varchar(150) NOT NULL,
  `sort_info` varchar(3000) DEFAULT NULL,
  `img_thumb` varchar(150) DEFAULT NULL,
  `dnd` binary(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `important`;
CREATE TABLE `important` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `post_name` varchar(100) NOT NULL,
  `generated_link` varchar(150) NOT NULL,
  `sort_info` varchar(3000) DEFAULT NULL,
  `img_thumb` varchar(150) DEFAULT NULL,
  `dnd` binary(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `latestjobs`;
CREATE TABLE `latestjobs` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `post_name` varchar(100) NOT NULL,
  `generated_link` varchar(150) NOT NULL,
  `sort_info` varchar(3000) DEFAULT NULL,
  `img_thumb` varchar(150) DEFAULT NULL,
  `dnd` binary(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `result` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `post_name` varchar(100) NOT NULL,
  `generated_link` varchar(150) NOT NULL,
  `sort_info` varchar(3000) DEFAULT NULL,
  `img_thumb` varchar(150) DEFAULT NULL,
  `dnd` binary(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `syllabus`;
CREATE TABLE `syllabus` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `post_name` varchar(100) NOT NULL,
  `generated_link` varchar(150) NOT NULL,
  `sort_info` varchar(3000) DEFAULT NULL,
  `img_thumb` varchar(150) DEFAULT NULL,
  `dnd` binary(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `treanding`;
CREATE TABLE `trending` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `post_name` varchar(100) NOT NULL,
  `generated_link` varchar(150) NOT NULL,
  `sort_info` varchar(3000) DEFAULT NULL,
  `img_thumb` varchar(150) DEFAULT NULL,
  `dnd` binary(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `thumbnails` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `thumbnail_json` varchar(1000) DEFAULT NULL,
  `Posted_fb_id` varchar(200) DEFAULT NULL,
  `type` varchar(15) NOT NULL,
  `type_id` int(5) NOT NULL,
  PRIMARY KEY (`id`)
)


-- Dump completed on 2019-02-06 11:40:11
