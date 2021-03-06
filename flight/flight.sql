-- MySQL dump 10.13  Distrib 5.7.11, for Win64 (x86_64)
--
-- Host: localhost    Database: flight
-- ------------------------------------------------------
-- Server version	5.7.11

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `customerinfo`
--

DROP TABLE IF EXISTS `customerinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customerinfo` (
  `customerId` char(20) NOT NULL,
  `name` char(10) NOT NULL,
  `idCard` char(20) NOT NULL,
  `address` char(50) DEFAULT NULL,
  `phone` char(11) NOT NULL,
  PRIMARY KEY (`customerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customerinfo`
--

LOCK TABLES `customerinfo` WRITE;
/*!40000 ALTER TABLE `customerinfo` DISABLE KEYS */;
INSERT INTO `customerinfo` VALUES ('1100110000','Ivan','430421199508218719','湖南省衡阳市','18299991478'),('1100110001','LHX','230421145508218129','四川省乐山市','13894591412'),('1100110002','LH','560421239508218719','四\n\n川省南充市','18234895200'),('3457071981','昊天','430421199508218745','陕西省临潼区西安科技大学','18747848745'),('6189870073','陌','430421199704157415','陕西省临潼区西安科技大学陕鼓大道48号','18294782474');
/*!40000 ALTER TABLE `customerinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flightadmin`
--

DROP TABLE IF EXISTS `flightadmin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flightadmin` (
  `adminId` char(20) NOT NULL,
  `adminName` char(10) NOT NULL,
  `password` char(20) NOT NULL,
  PRIMARY KEY (`adminId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flightadmin`
--

LOCK TABLES `flightadmin` WRITE;
/*!40000 ALTER TABLE `flightadmin` DISABLE KEYS */;
INSERT INTO `flightadmin` VALUES ('000001','I','123456'),('000002','Jason','250250'),('1009953409','123','147852');
/*!40000 ALTER TABLE `flightadmin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flightinfo`
--

DROP TABLE IF EXISTS `flightinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flightinfo` (
  `flightId` char(20) NOT NULL,
  `startCity` char(10) NOT NULL,
  `endCity` char(10) NOT NULL,
  `startPort` char(10) NOT NULL,
  `endPort` char(10) NOT NULL,
  `startTime` datetime NOT NULL,
  `endTime` datetime NOT NULL,
  `economy` int(5) NOT NULL,
  `discount` float(3,2) DEFAULT NULL,
  `size` int(4) NOT NULL,
  `company` char(5) NOT NULL,
  PRIMARY KEY (`flightId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flightinfo`
--

LOCK TABLES `flightinfo` WRITE;
/*!40000 ALTER TABLE `flightinfo` DISABLE KEYS */;
INSERT INTO `flightinfo` VALUES ('3U5043','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:20:00','2016-12-09 10:15:00',711,0.40,9,'四川航空'),('3U5044','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:20:00','2016-12-09 10:15:00',711,0.40,9,'四川航空'),('3U5045','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:20:00','2016-12-09 10:15:00',711,0.40,9,'四川航空'),('3U5046','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:20:00','2016-12-09 10:15:00',711,0.40,9,'四川航空'),('3U5047','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:20:00','2016-12-09 10:15:00',711,0.40,9,'四川航空'),('3U5048','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:20:00','2016-12-09 10:15:00',711,0.40,9,'四川航空'),('3U5049','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:20:00','2016-12-09 10:15:00',711,0.40,9,'四川航空'),('3U5050','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:20:00','2016-12-09 10:15:00',711,0.40,9,'四川航空'),('3U5051','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:20:00','2016-12-09 10:15:00',711,0.40,9,'四川航空'),('3U5052','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:20:00','2016-12-09 10:15:00',711,0.40,9,'四川航空'),('3U5054','西安','成都','咸阳国际机场T3','双流国际机场\n\nT2','2016-12-09 08:20:00','2016-12-09 10:15:00',711,0.40,900,'四川航空'),('9H8326','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 07:05:00','2016-12-10 08:55:00',1040,0.80,250,'长安航空'),('9H8327','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 07:05:00','2016-12-10 08:55:00',1040,0.80,250,'长安航空'),('9H8328','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 07:05:00','2016-12-10 08:55:00',1040,0.80,250,'长安航空'),('9H8329','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 07:05:00','2016-12-10 08:55:00',1040,0.80,250,'长安航空'),('9H8330','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 07:05:00','2016-12-10 08:55:00',1040,0.80,250,'长安航空'),('9H8331','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 07:05:00','2016-12-10 08:55:00',1040,0.80,250,'长安航空'),('9H8332','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 07:05:00','2016-12-10 08:55:00',1040,0.80,250,'长安航空'),('9H8333','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 07:05:00','2016-12-10 08:55:00',1040,0.80,250,'长安航空'),('9H8334','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 07:05:00','2016-12-10 08:55:00',1040,0.80,250,'长安航空'),('9H8335','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 07:05:00','2016-12-10 08:55:00',1040,0.80,250,'长安航空'),('9H8336','西安','长沙','咸阳国际机场T2','黄花国际机场\n\nT2','2016-12-10 07:05:00','2016-12-10 08:55:00',1040,0.80,250,'长安航空'),('9H8337','西安','长沙','咸阳国际机场T2','黄花国际机场\n\nT2','2016-12-09 07:05:00','2016-12-09 08:55:00',1040,0.20,250,'长安航空'),('ASDFQW','西安','咸阳','咸阳机场T2','咸阳国际机场T3','2016-12-09 12:20:00','2016-12-09 14:20:00',700,0.30,789,'科大航空'),('CZ6554','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 13:50:00','2016-12-10 15:45:00',1040,0.50,25,'南方航空'),('CZ6555','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 13:50:00','2016-12-10 15:45:00',1040,0.50,25,'南方航空'),('CZ6556','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 13:50:00','2016-12-10 15:45:00',1040,0.50,25,'南方航空'),('CZ6557','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 13:50:00','2016-12-10 15:45:00',1040,0.50,25,'南方航空'),('CZ6558','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 13:50:00','2016-12-10 15:45:00',1040,0.50,25,'南方航空'),('CZ6559','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 13:50:00','2016-12-10 15:45:00',1040,0.50,25,'南方航空'),('CZ6560','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 13:50:00','2016-12-10 15:45:00',1040,0.50,25,'南方航空'),('CZ6561','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 13:50:00','2016-12-10 15:45:00',1040,0.50,25,'南方航空'),('CZ6562','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 13:50:00','2016-12-10 15:45:00',1040,0.50,25,'南方航空'),('CZ6563','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 13:50:00','2016-12-10 15:45:00',1040,0.50,25,'南方航空'),('CZ6564','西安','长沙','咸阳机场T3','黄花机场\n\nT2','2016-12-10 13:50:00','2016-12-10 15:45:00',1040,0.50,25,'南方航空'),('CZ6565','西安','长沙','咸阳机场T3','黄花机场\n\nT2','2016-12-09 13:50:00','2016-12-09 15:45:00',1040,0.30,25,'南方航空'),('CZ9088','西安','成都','咸阳机场T3','双流机场T2','2016-12-09 10:15:00','2016-12-09 12:35:00',1000,0.80,9,'南方航空'),('CZ9089','西安','成都','咸阳机场T3','双流机场T2','2016-12-09 10:15:00','2016-12-09 12:35:00',1000,0.80,9,'南方航空'),('CZ9090','西安','成都','咸阳机场T3','双流机场T2','2016-12-09 10:15:00','2016-12-09 12:35:00',1000,0.80,9,'南方航空'),('CZ9091','西安','成都','咸阳机场T3','双流机场T2','2016-12-09 10:15:00','2016-12-09 12:35:00',1000,0.80,9,'南方航空'),('CZ9092','西安','成都','咸阳机场T3','双流机场T2','2016-12-09 10:15:00','2016-12-09 12:35:00',1000,0.80,9,'南方航空'),('CZ9093','西安','成都','咸阳机场T3','双流机场T2','2016-12-09 10:15:00','2016-12-09 12:35:00',1000,0.80,9,'南方航空'),('CZ9094','西安','成都','咸阳机场T3','双流机场T2','2016-12-09 10:15:00','2016-12-09 12:35:00',1000,0.80,9,'南方航空'),('CZ9095','西安','成都','咸阳机场T3','双流机场T2','2016-12-09 10:15:00','2016-12-09 12:35:00',1000,0.80,9,'南方航空'),('CZ9096','西安','成都','咸阳机场T3','双流机场T2','2016-12-09 10:15:00','2016-12-09 12:35:00',1000,0.80,9,'南方航空'),('CZ9097','西安','成都','咸阳机场T3','双流机场T2','2016-12-09 10:15:00','2016-12-09 12:35:00',1000,0.80,9,'南方航空'),('CZ9099','西安','成都','咸阳机场T3','双流机场\n\nT2','2016-12-09 10:15:00','2016-12-09 12:35:00',1000,0.80,9,'南方航空'),('G56510','西安','成都','咸阳国际机场T3','双流国际机场T1','2016-12-09 14:50:00','2016-12-09 16:35:00',711,0.40,9,'华夏航空'),('G56511','西安','成都','咸阳国际机场T3','双流国际机场T1','2016-12-09 14:50:00','2016-12-09 16:35:00',711,0.40,9,'华夏航空'),('G56512','西安','成都','咸阳国际机场T3','双流国际机场T1','2016-12-09 14:50:00','2016-12-09 16:35:00',711,0.40,9,'华夏航空'),('G56513','西安','成都','咸阳国际机场T3','双流国际机场T1','2016-12-09 14:50:00','2016-12-09 16:35:00',711,0.40,9,'华夏航空'),('G56514','西安','成都','咸阳国际机场T3','双流国际机场T1','2016-12-09 14:50:00','2016-12-09 16:35:00',711,0.40,9,'华夏航空'),('G56515','西安','成都','咸阳国际机场T3','双流国际机场T1','2016-12-09 14:50:00','2016-12-09 16:35:00',711,0.40,9,'华夏航空'),('G56516','西安','成都','咸阳国际机场T3','双流国际机场T1','2016-12-09 14:50:00','2016-12-09 16:35:00',711,0.40,9,'华夏航空'),('G56517','西安','成都','咸阳国际机场T3','双流国际机场T1','2016-12-09 14:50:00','2016-12-09 16:35:00',711,0.40,9,'华夏航空'),('G56518','西安','成都','咸阳国际机场T3','双流国际机场T1','2016-12-09 14:50:00','2016-12-09 16:35:00',711,0.40,9,'华夏航空'),('G56519','西安','成都','咸阳国际机场T3','双流国际机场T1','2016-12-09 14:50:00','2016-12-09 16:35:00',711,0.40,9,'华夏航空'),('G56521','西安','成都','咸阳国际机场T3','双流国际机场\n\nT1','2016-12-09 14:50:00','2016-12-09 16:35:00',711,0.40,9,'华夏航空'),('GS7592','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:20:00','2016-12-10 10:15:00',1040,0.60,9,'天津航空'),('GS7593','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:20:00','2016-12-10 10:15:00',1040,0.60,9,'天津航空'),('GS7594','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:20:00','2016-12-10 10:15:00',1040,0.60,9,'天津航空'),('GS7595','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:20:00','2016-12-10 10:15:00',1040,0.60,9,'天津航空'),('GS7596','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:20:00','2016-12-10 10:15:00',1040,0.60,9,'天津航空'),('GS7597','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:20:00','2016-12-10 10:15:00',1040,0.60,9,'天津航空'),('GS7598','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:20:00','2016-12-10 10:15:00',1040,0.60,9,'天津航空'),('GS7599','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:20:00','2016-12-10 10:15:00',1040,0.60,9,'天津航空'),('GS7600','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:20:00','2016-12-10 10:15:00',1040,0.60,9,'天津航空'),('GS7601','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:20:00','2016-12-10 10:15:00',1040,0.60,9,'天津航空'),('GS7602','西安','长沙','咸阳国际机场T2','黄花国际机场\n\nT2','2016-12-10 08:20:00','2016-12-10 10:15:00',1040,0.60,9,'天津航空'),('GS7603','西安','长沙','咸阳国际机场T2','黄花国际机场\n\nT2','2016-12-09 08:20:00','2016-12-09 10:15:00',1040,0.30,9,'天津航空'),('HU7844','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:10:00','2016-12-09 09:55:00',870,0.60,9,'海南航空'),('HU7845','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:10:00','2016-12-09 09:55:00',870,0.60,9,'海南航空'),('HU7846','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:10:00','2016-12-09 09:55:00',870,0.60,9,'海南航空'),('HU7847','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:10:00','2016-12-09 09:55:00',870,0.60,9,'海南航空'),('HU7848','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:10:00','2016-12-09 09:55:00',870,0.60,9,'海南航空'),('HU7849','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:10:00','2016-12-09 09:55:00',870,0.60,9,'海南航空'),('HU7850','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:10:00','2016-12-09 09:55:00',870,0.60,9,'海南航空'),('HU7851','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:10:00','2016-12-09 09:55:00',870,0.60,9,'海南航空'),('HU7852','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:10:00','2016-12-09 09:55:00',870,0.60,9,'海南航空'),('HU7853','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:10:00','2016-12-09 09:55:00',870,0.60,9,'海南航空'),('HU7855','西安','成都','咸阳国际机场T3','双流国际机场\n\nT2','2016-12-09 08:10:00','2016-12-09 09:55:00',870,0.60,9,'海南航空'),('JR2330','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 07:05:00','2016-12-09 08:55:00',725,0.50,250,'幸福航空'),('JR2331','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 07:05:00','2016-12-09 08:55:00',725,0.50,250,'幸福航空'),('JR2332','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 07:05:00','2016-12-09 08:55:00',725,0.50,250,'幸福航空'),('JR2333','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 07:05:00','2016-12-09 08:55:00',725,0.50,250,'幸福航空'),('JR2334','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 07:05:00','2016-12-09 08:55:00',725,0.50,250,'幸福航空'),('JR2335','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 07:05:00','2016-12-09 08:55:00',725,0.50,250,'幸福航空'),('JR2336','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 07:05:00','2016-12-09 08:55:00',725,0.50,250,'幸福航空'),('JR2337','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 07:05:00','2016-12-09 08:55:00',725,0.50,250,'幸福航空'),('JR2338','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 07:05:00','2016-12-09 08:55:00',725,0.50,250,'幸福航空'),('JR2339','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 07:05:00','2016-12-09 08:55:00',725,0.50,250,'幸福航空'),('JR2341','西安','成都','咸阳国际机场T3','双流国际机场\n\nT2','2016-12-09 07:05:00','2016-12-09 08:55:00',725,0.50,250,'幸福航空'),('JR2373','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 08:15:00','2016-12-10 10:15:00',1040,0.40,25,'幸福航空'),('JR2374','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 08:15:00','2016-12-10 10:15:00',1040,0.40,25,'幸福航空'),('JR2375','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 08:15:00','2016-12-10 10:15:00',1040,0.40,25,'幸福航空'),('JR2376','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 08:15:00','2016-12-10 10:15:00',1040,0.40,25,'幸福航空'),('JR2377','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 08:15:00','2016-12-10 10:15:00',1040,0.40,25,'幸福航空'),('JR2378','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 08:15:00','2016-12-10 10:15:00',1040,0.40,25,'幸福航空'),('JR2379','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 08:15:00','2016-12-10 10:15:00',1040,0.40,25,'幸福航空'),('JR2380','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 08:15:00','2016-12-10 10:15:00',1040,0.40,25,'幸福航空'),('JR2381','西安','长沙','咸阳机场T3','黄花机场T2','2016-12-10 08:15:00','2016-12-10 10:15:00',1040,0.40,25,'幸福航空'),('JR2382','西安','长沙','咸阳机场T3','黄花机场\n\nT2','2016-12-10 08:15:00','2016-12-10 10:15:00',1040,0.40,25,'幸福航空'),('JR2383','西安','长沙','咸阳机场T3','黄花机场\n\nT2','2016-12-09 08:15:00','2016-12-09 10:15:00',1040,0.30,25,'幸福航空'),('MU2329','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:15:00','2016-12-09 10:05:00',1175,0.60,220,'东方航空'),('MU2330','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:15:00','2016-12-09 10:05:00',1175,0.60,220,'东方航空'),('MU2331','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:15:00','2016-12-09 10:05:00',1175,0.60,220,'东方航空'),('MU2332','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:15:00','2016-12-09 10:05:00',1175,0.60,220,'东方航空'),('MU2333','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:15:00','2016-12-09 10:05:00',1175,0.60,220,'东方航空'),('MU2334','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:15:00','2016-12-09 10:05:00',1175,0.60,220,'东方航空'),('MU2335','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:15:00','2016-12-09 10:05:00',1175,0.60,220,'东方航空'),('MU2336','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:15:00','2016-12-09 10:05:00',1175,0.60,220,'东方航空'),('MU2337','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:15:00','2016-12-09 10:05:00',1175,0.60,220,'东方航空'),('MU2338','西安','成都','咸阳国际机场T3','双流国际机场T2','2016-12-09 08:15:00','2016-12-09 10:05:00',1175,0.60,220,'东方航空'),('MU2341','西安','成都','咸阳国际机场T3','双流国际机场\n\nT2','2016-12-09 08:15:00','2016-12-09 10:05:00',1175,0.60,220,'东方航空'),('MU2372','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:15:00','2016-12-10 10:05:00',1040,0.70,220,'东方航空'),('MU2373','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:15:00','2016-12-10 10:05:00',1040,0.70,220,'东方航空'),('MU2374','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:15:00','2016-12-10 10:05:00',1040,0.70,220,'东方航空'),('MU2375','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:15:00','2016-12-10 10:05:00',1040,0.70,220,'东方航空'),('MU2376','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:15:00','2016-12-10 10:05:00',1040,0.70,220,'东方航空'),('MU2377','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:15:00','2016-12-10 10:05:00',1040,0.70,220,'东方航空'),('MU2378','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:15:00','2016-12-10 10:05:00',1040,0.70,220,'东方航空'),('MU2379','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:15:00','2016-12-10 10:05:00',1040,0.70,220,'东方航空'),('MU2380','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:15:00','2016-12-10 10:05:00',1040,0.70,220,'东方航空'),('MU2381','西安','长沙','咸阳国际机场T2','黄花国际机场T2','2016-12-10 08:15:00','2016-12-10 10:05:00',1040,0.70,220,'东方航空'),('MU2382','西安','长沙','咸阳国际机场T2','黄花国际机场\n\nT2','2016-12-10 08:15:00','2016-12-10 10:05:00',1040,0.70,220,'东方航空'),('MU2383','西安','长沙','咸阳国际机场T2','黄花国际机场\n\nT2','2016-12-09 08:15:00','2016-12-09 10:05:00',1040,0.50,220,'东方航空'),('ZH1290','西安','北京','咸阳机场T2','首都机场T3','2016-12-09 12:20:00','2016-12-09 14:20:00',1460,0.45,13,'深圳航空');
/*!40000 ALTER TABLE `flightinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderinfo`
--

DROP TABLE IF EXISTS `orderinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderinfo` (
  `orderId` char(20) NOT NULL,
  `customerId` char(20) NOT NULL,
  `flightId` char(20) NOT NULL,
  PRIMARY KEY (`orderId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderinfo`
--

LOCK TABLES `orderinfo` WRITE;
/*!40000 ALTER TABLE `orderinfo` DISABLE KEYS */;
INSERT INTO `orderinfo` VALUES ('545746040821450','6189870073','3U5054'),('645657579254461','3457071981','CZ6565');
/*!40000 ALTER TABLE `orderinfo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-11  8:31:42
