-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: mdg_db
-- ------------------------------------------------------
-- Server version	10.4.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `grp_bayi`
--

DROP TABLE IF EXISTS `grp_bayi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grp_bayi` (
  `value` varchar(255) DEFAULT NULL,
  `axisx` decimal(18,2) DEFAULT NULL,
  `axisy` decimal(18,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grp_bayi`
--

LOCK TABLES `grp_bayi` WRITE;
/*!40000 ALTER TABLE `grp_bayi` DISABLE KEYS */;
INSERT INTO `grp_bayi` VALUES ('-3 SD',45.00,1900),('-2 SD',45.00,2000),('-1 SD',45.00,2200),('Median',45.00,2400),('+1 SD',45.00,2700),('+2 SD',45.00,3000),('+3 SD',45.00,3300),('-3 SD',45.50,1900),('-2 SD',45.50,2100),('-1 SD',45.50,2300),('Median',45.50,2500),('+1 SD',45.50,2800),('+2 SD',45.50,3100),('+3 SD',45.50,3400),('-3 SD',46.00,2000),('-2 SD',46.00,2200),('-1 SD',46.00,2400),('Median',46.00,2600),('+1 SD',46.00,2900),('+2 SD',46.00,3100),('+3 SD',46.00,3500),('-3 SD',46.50,2100),('-2 SD',46.50,2300),('-1 SD',46.50,2500),('Median',46.50,2700),('+1 SD',46.50,3000),('+2 SD',46.50,3200),('+3 SD',46.50,3600),('-3 SD',47.00,2100),('-2 SD',47.00,2300),('-1 SD',47.00,2500),('Median',47.00,2800),('+1 SD',47.00,3000),('+2 SD',47.00,3300),('+3 SD',47.00,3700),('-3 SD',47.50,2200),('-2 SD',47.50,2400),('-1 SD',47.50,2600),('Median',47.50,2900),('+1 SD',47.50,3100),('+2 SD',47.50,3400),('+3 SD',47.50,3800),('-3 SD',48.50,2300),('-3 SD',48.00,2300),('-2 SD',48.00,2500),('-1 SD',48.00,2700),('Median',48.00,2900),('+1 SD',48.00,3200),('+2 SD',48.00,3600),('+3 SD',48.00,3900),('-2 SD',48.50,2600),('-1 SD',48.50,2800),('Median',48.50,3000),('+1 SD',48.50,3300),('+2 SD',48.50,3700),('+3 SD',48.50,4000),('-3 SD',49.00,2400),('-2 SD',49.00,2600),('-1 SD',49.00,2900),('Median',49.00,3100),('+1 SD',49.00,3400),('+2 SD',49.00,3800),('+3 SD',49.00,4200),('-3 SD',49.50,2500),('-2 SD',49.50,2700),('-1 SD',49.50,3000),('Median',49.50,3200),('+1 SD',49.50,3500),('+2 SD',49.50,3900),('+3 SD',49.50,4300),('-3 SD',50.00,2600),('-2 SD',50.00,2800),('-1 SD',50.00,3000),('Median',50.00,3300),('+1 SD',50.00,3600),('+2 SD',50.00,4000),('+3 SD',50.00,4400),('-3 SD',50.50,2700),('-2 SD',50.50,2900),('-1 SD',50.50,3100),('Median',50.50,3400),('+1 SD',50.50,3800),('+2 SD',50.50,4100),('+3 SD',50.50,4500),('-3 SD',51.00,2700),('-2 SD',51.00,3000),('-1 SD',51.00,3200),('Median',51.00,3500),('+1 SD',51.00,3900),('+2 SD',51.00,4200),('+3 SD',51.00,4700),('-3 SD',51.50,2800),('-2 SD',51.50,3100),('-1 SD',51.50,3300),('Median',51.50,3600),('+1 SD',51.50,4000),('+2 SD',51.50,4400),('+3 SD',51.50,4800),('-3 SD',52.00,2900),('-2 SD',52.00,3200),('-1 SD',52.00,3500),('Median',52.00,3800),('+1 SD',52.00,4100),('+2 SD',52.00,4500),('+3 SD',52.00,5000),('-3 SD',52.50,3000),('-2 SD',52.50,3300),('-1 SD',52.50,3600),('Median',52.50,3900),('+1 SD',52.50,4200),('+2 SD',52.50,4600),('+3 SD',52.50,5100),('-3 SD',53.00,3100),('-2 SD',53.00,3400),('-1 SD',53.00,3700),('Median',53.00,4000),('+1 SD',53.00,4400),('+2 SD',53.00,4800),('+3 SD',53.00,5300),('-3 SD',53.50,3200),('-2 SD',53.50,3500),('-1 SD',53.50,3800),('Median',53.50,4100),('+1 SD',53.50,4500),('+2 SD',53.50,4900),('+3 SD',53.50,5400),('-3 SD',54.00,3300),('-2 SD',54.00,3600),('-1 SD',54.00,3900),('Median',54.00,4300),('+1 SD',54.00,4700),('+2 SD',54.00,5100),('+3 SD',54.00,5600),('-3 SD',54.50,3400),('-2 SD',54.50,3700),('-1 SD',54.50,4000),('Median',54.50,4400),('+1 SD',54.50,4800),('+2 SD',54.50,5300),('+3 SD',54.50,5800),('-3 SD',55.00,3600),('-2 SD',55.00,3800),('-1 SD',55.00,4200),('Median',55.00,4500),('+1 SD',55.00,5000),('+2 SD',55.00,5400),('+3 SD',55.00,6000),('-3 SD',55.50,3700),('-2 SD',55.50,4000),('-1 SD',55.50,4300),('Median',55.50,4700),('+1 SD',55.50,5100),('+2 SD',55.50,5600),('+3 SD',55.50,6100),('-3 SD',56.00,3800),('-2 SD',56.00,4100),('-1 SD',56.00,4400),('Median',56.00,4800),('+1 SD',56.00,5300),('+2 SD',56.00,5800),('+3 SD',56.00,6300),('-3 SD',56.50,3900),('-2 SD',56.50,4200),('-1 SD',56.50,4600),('Median',56.50,5000),('+1 SD',56.50,5400),('+2 SD',56.50,5900),('+3 SD',56.50,6500),('-3 SD',57.00,4000),('-2 SD',57.00,4300),('-1 SD',57.00,4700),('Median',57.00,5100),('+1 SD',57.00,5600),('+2 SD',57.00,6100),('+3 SD',57.00,6700),('-3 SD',57.50,4100),('-2 SD',57.50,4500),('-1 SD',57.50,4900),('Median',57.50,5300),('+1 SD',57.50,5700),('+2 SD',57.50,6300),('+3 SD',57.50,6900),('-3 SD',58.00,4300),('-2 SD',58.00,4600),('-1 SD',58.00,5000),('Median',58.00,5400),('+1 SD',58.00,5900),('+2 SD',58.00,6400),('+3 SD',58.00,7100),('-3 SD',58.50,4400),('-2 SD',58.50,4700),('-1 SD',58.50,5100),('Median',58.50,5600),('+1 SD',58.50,6100),('+2 SD',58.50,6600),('+3 SD',58.50,7200),('-2 SD',59.50,5000),('-3 SD',59.00,4500),('-2 SD',59.00,4800),('-1 SD',59.00,5300),('-3 SD',59.50,4600),('Median',59.00,5700),('+1 SD',59.00,6200),('+2 SD',59.00,6800),('+3 SD',59.00,7400),('-1 SD',59.50,5400),('Median',59.50,5900),('+1 SD',59.50,6400),('+2 SD',59.50,7000),('+3 SD',59.50,7600),('-3 SD',60.00,4700),('-2 SD',60.00,5100),('-1 SD',60.00,5500),('Median',60.00,6000),('+1 SD',60.00,6500),('+2 SD',60.00,7100),('+3 SD',60.00,7800),('-3 SD',60.50,4800),('-2 SD',60.50,5200),('-1 SD',60.50,5600),('Median',60.50,6100),('+1 SD',60.50,6700),('+2 SD',60.50,7300),('+3 SD',60.50,8000),('-3 SD',61.00,4900),('-2 SD',61.00,5300),('-1 SD',61.00,5800),('Median',61.00,6300),('+1 SD',61.00,6800),('+2 SD',61.00,7400),('+3 SD',61.00,8100),('-3 SD',61.50,5000),('-2 SD',61.50,5400),('-1 SD',61.50,5900),('Median',61.50,6400),('+1 SD',61.50,7000),('+2 SD',61.50,7600),('+3 SD',61.50,8300),('-3 SD',62.00,5100),('-2 SD',62.00,5600),('-1 SD',62.00,6000),('Median',62.00,6500),('+1 SD',62.00,7100),('+2 SD',62.00,7700),('+3 SD',62.00,8500),('-3 SD',62.50,5200),('-2 SD',62.50,5700),('-1 SD',62.50,6100),('Median',62.50,6700),('+1 SD',62.50,7200),('+2 SD',62.50,7900),('+3 SD',62.50,8600),('-3 SD',63.00,5300),('-2 SD',63.00,5800),('-1 SD',63.00,6200),('Median',63.00,6800),('+1 SD',63.00,7400),('+2 SD',63.00,8000),('+3 SD',63.00,8800),('-3 SD',63.50,5400),('-2 SD',63.50,5900),('-1 SD',63.50,6400),('Median',63.50,6900),('+1 SD',63.50,7500),('+2 SD',63.50,8200),('+3 SD',63.50,8900),('-3 SD',64.00,5500),('-2 SD',64.00,6000),('-1 SD',64.00,6500),('Median',64.00,7000),('+1 SD',64.00,7600),('+2 SD',64.00,8300),('+3 SD',64.00,9100),('-3 SD',64.50,5600),('-2 SD',64.50,6100),('-1 SD',64.50,6600),('Median',64.50,7100),('+1 SD',64.50,7800),('+2 SD',64.50,8500),('+3 SD',64.50,9300),('-3 SD',65.00,5700),('-2 SD',65.00,6200),('-1 SD',65.00,6700),('Median',65.00,7300),('+1 SD',65.00,7900),('+2 SD',65.00,8600),('+3 SD',65.00,9400),('-3 SD',65.50,5800),('-2 SD',65.50,6300),('-1 SD',65.50,6800),('Median',65.50,7400),('+1 SD',65.50,8000),('+2 SD',65.50,8700),('+3 SD',65.50,9600),('+3 SD',66.00,9700),('-2 SD',66.00,6400),('-1 SD',66.00,6900),('Median',66.00,7500),('+1 SD',66.00,8200),('+2 SD',66.00,8900),('-3 SD',66.00,5900),('-3 SD',66.50,6000),('-2 SD',66.50,6500),('-1 SD',66.50,7000),('Median',66.50,7600),('+1 SD',66.50,8300),('+2 SD',66.50,9000),('+3 SD',66.50,9900),('-3 SD',67.00,6100),('-2 SD',67.00,6600),('-1 SD',67.00,7100),('Median',67.00,7700),('+1 SD',67.00,8400),('+2 SD',67.00,9200),('+3 SD',67.00,10000),('-3 SD',67.50,6200),('-2 SD',67.50,6700),('-1 SD',67.50,7200),('Median',67.50,7900),('+1 SD',67.50,8500),('+2 SD',67.50,9300),('+3 SD',67.50,10200),('-3 SD',68.00,6300),('-2 SD',68.00,6800),('-1 SD',68.00,7300),('Median',68.00,8000),('+1 SD',68.00,8700),('+2 SD',68.00,9400),('+3 SD',68.00,10300),('-3 SD',68.50,6400),('-2 SD',68.50,6900),('-1 SD',68.50,7500),('Median',68.50,8100),('+1 SD',68.50,8800),('+2 SD',68.50,9600),('+3 SD',68.50,10500),('-3 SD',69.00,6500),('-2 SD',69.00,7000),('-1 SD',69.00,7600),('Median',69.00,8200),('+1 SD',69.00,8900),('+2 SD',69.00,9700),('+3 SD',69.00,10600),('-3 SD',69.50,6600),('-3 SD',70.00,6600),('-2 SD',70.00,7200),('-1 SD',70.00,7800),('Median',70.00,8400),('+1 SD',70.00,9200),('+2 SD',70.00,10000),('+3 SD',70.00,10900),('-2 SD',69.00,7100),('-1 SD',69.00,7700),('Median',69.00,8300),('+1 SD',69.00,9000),('+2 SD',69.00,9800),('+3 SD',69.00,10800),('+3 SD',70.50,11100),('+3 SD',71.50,11300),('-3 SD',70.50,6700),('-2 SD',70.50,7300),('-1 SD',70.50,7900),('Median',70.50,8500),('+1 SD',70.50,9300),('-3 SD',71.00,6800),('+2 SD',70.50,10100),('-2 SD',71.00,7400),('-1 SD',71.00,8000),('Median',71.00,8600),('+1 SD',71.00,9400),('+2 SD',71.00,10200),('+3 SD',71.00,11200),('-3 SD',71.50,6900),('-2 SD',71.50,7500),('-1 SD',71.50,8100),('Median',71.50,8800),('+1 SD',71.50,9500),('+2 SD',71.50,10400),('-3 SD',72.00,7000),('-2 SD',72.00,7600),('-1 SD',72.00,8200),('Median',72.00,8900),('+1 SD',72.00,9600),('+2 SD',72.00,10500),('+3 SD',72.00,11500),('-3 SD',72.50,7100),('-2 SD',72.50,7600),('-1 SD',72.50,8300),('Median',72.50,9000),('+1 SD',72.50,9800),('+2 SD',72.50,10600),('+3 SD',72.50,11600),('-3 SD',73.00,7200),('-2 SD',73.00,7700),('-1 SD',73.00,8400),('Median',73.00,9100),('+1 SD',73.00,9900),('+2 SD',73.00,10800),('+3 SD',73.00,11800),('-3 SD',73.50,7200),('-3 SD',74.50,7400),('-3 SD',76.50,7700),('-2 SD',73.50,7800),('-1 SD',73.50,8500),('Median',73.50,9200),('+1 SD',73.50,10000),('-3 SD',74.00,7300),('+2 SD',73.50,10900),('+3 SD',73.50,11900),('-2 SD',74.00,7900),('-1 SD',74.00,8600),('Median',74.00,9300),('+1 SD',74.00,10100),('+2 SD',74.00,11000),('+3 SD',74.00,12100),('-2 SD',74.50,8000),('-1 SD',74.50,8700),('Median',74.50,9400),('+1 SD',74.50,10200),('+2 SD',74.50,11200),('-3 SD',75.00,7500),('+3 SD',74.50,12200),('-2 SD',75.00,8100),('-1 SD',75.00,8800),('Median',75.00,9500),('+1 SD',75.00,10300),('+2 SD',75.00,11300),('-3 SD',75.50,7600),('+3 SD',75.00,12300),('-2 SD',75.50,8200),('-1 SD',75.50,8800),('Median',75.50,9600),('+1 SD',75.50,10400),('+2 SD',75.50,11400),('-3 SD',76.00,7600),('+3 SD',75.50,12500),('-2 SD',76.00,8300),('-1 SD',76.00,8900),('Median',76.00,9700),('+1 SD',76.00,10600),('+2 SD',76.00,11500),('+3 SD',76.00,12600),('-2 SD',76.50,8300),('-1 SD',76.50,9000),('Median',76.50,9800),('+1 SD',76.50,10700),('+2 SD',76.50,11600),('+3 SD',76.50,12700),('-3 SD',77.00,7800),('-2 SD',77.00,8400),('-1 SD',77.00,9100),('Median',77.00,9900),('+1 SD',77.00,10800),('+2 SD',77.00,11700),('+3 SD',77.00,12800),('-3 SD',77.50,7900),('-2 SD',77.50,8500),('-1 SD',77.50,9200),('Median',77.50,10000),('+1 SD',77.50,10900),('+2 SD',77.50,11900),('+3 SD',77.50,13000),('-3 SD',78.00,7900),('-2 SD',78.00,8600),('-1 SD',78.00,9300),('Median',78.00,10100),('+1 SD',78.00,11000),('+2 SD',78.00,12000),('+3 SD',78.00,13100),('-3 SD',78.50,8000),('-2 SD',78.50,8700),('-1 SD',78.50,9400),('Median',78.50,10200),('+1 SD',78.50,11100),('+2 SD',78.50,12100),('+3 SD',78.50,13200),('-3 SD',79.00,8100),('-2 SD',79.00,8700),('-1 SD',79.00,9500),('Median',79.00,10300),('+1 SD',79.00,11200),('+2 SD',79.00,12200),('+3 SD',79.00,13300),('-3 SD',79.50,8200),('-2 SD',79.50,8800),('-1 SD',79.50,9500),('Median',79.50,10400),('+1 SD',79.50,11300),('+2 SD',79.50,12300),('+3 SD',79.50,13400),('-3 SD',81.00,8400),('-3 SD',80.00,8200),('-2 SD',80.00,8900),('-1 SD',80.00,9600),('Median',80.00,10400),('+1 SD',80.00,11400),('+2 SD',80.00,12400),('+3 SD',80.00,13600),('-3 SD',80.50,8300),('-2 SD',80.50,9000),('-1 SD',80.50,9700),('Median',80.50,10500),('+1 SD',80.50,11500),('+2 SD',80.50,12500),('+3 SD',80.50,13700),('-3 SD',87.50,9600),('-3 SD',93.50,10700),('-2 SD',81.00,9100),('-1 SD',81.00,9800),('Median',81.00,10600),('+1 SD',81.00,11600),('-3 SD',81.50,8500),('+2 SD',81.00,12600),('+3 SD',81.00,13800),('-2 SD',81.50,9100),('-1 SD',81.50,9900),('Median',81.50,10700),('+1 SD',81.50,11700),('-3 SD',82.00,8500),('+2 SD',81.50,12700),('+3 SD',81.50,13900),('-2 SD',82.00,9200),('-1 SD',82.00,10000),('Median',82.00,10800),('+1 SD',82.00,11800),('-3 SD',82.50,8600),('+2 SD',82.00,12800),('+3 SD',82.00,14000),('-2 SD',82.50,9300),('-1 SD',82.50,10100),('Median',82.50,10900),('+1 SD',82.50,11900),('-3 SD',83.50,8800),('+2 SD',82.50,13000),('+3 SD',82.50,14200),('-3 SD',83.00,8700),('-2 SD',83.00,9400),('-1 SD',83.00,10200),('Median',83.00,11000),('+1 SD',83.00,12000),('+2 SD',83.00,13100),('+3 SD',83.00,14300),('-2 SD',83.50,9500),('-1 SD',83.50,10300),('Median',83.50,11200),('+1 SD',83.50,12100),('-3 SD',84.00,8900),('+2 SD',83.50,13200),('+3 SD',83.50,14400),('-2 SD',84.00,9600),('-1 SD',84.00,10400),('Median',84.00,11300),('+1 SD',84.00,12200),('-3 SD',84.50,9000),('+2 SD',84.00,13300),('+3 SD',84.00,14600),('-2 SD',84.50,9700),('-1 SD',84.50,10500),('Median',84.50,11400),('+1 SD',84.50,12400),('-3 SD',85.00,9100),('+2 SD',84.50,13500),('+3 SD',84.50,14700),('-2 SD',85.00,9800),('-1 SD',85.00,10600),('Median',85.00,11500),('+1 SD',85.00,12500),('-3 SD',85.50,9200),('+2 SD',85.00,13600),('+3 SD',85.00,14900),('-2 SD',85.50,9900),('-1 SD',85.50,10700),('Median',85.50,11600),('+1 SD',85.50,12600),('-3 SD',86.00,9300),('+2 SD',85.50,13700),('+3 SD',85.50,15000),('-2 SD',86.00,10000),('-1 SD',86.00,10800),('Median',86.00,11700),('+1 SD',86.00,12800),('-3 SD',86.50,9400),('+2 SD',86.00,13900),('+3 SD',86.00,15200),('-2 SD',86.50,10100),('-1 SD',86.50,11000),('Median',86.50,11900),('+1 SD',86.50,12900),('-3 SD',87.00,9500),('+2 SD',86.50,14000),('+3 SD',86.50,15300),('-2 SD',87.00,10200),('-1 SD',87.00,11100),('Median',87.00,12000),('+1 SD',87.00,13000),('+2 SD',87.00,14200),('+3 SD',87.00,15500),('-2 SD',87.50,10400),('-1 SD',87.50,11200),('Median',87.50,12100),('+1 SD',87.50,13200),('+2 SD',87.50,14300),('-3 SD',88.00,9700),('+3 SD',87.50,15600),('-2 SD',88.00,10500),('-1 SD',88.00,11300),('Median',88.00,12200),('+1 SD',88.00,13300),('+2 SD',88.00,14500),('-3 SD',88.50,9800),('+3 SD',88.00,15800),('-2 SD',88.50,10600),('-1 SD',88.50,11400),('Median',88.50,12400),('+1 SD',88.50,13400),('+2 SD',88.50,14600),('-3 SD',89.00,9900),('+3 SD',88.50,15900),('-2 SD',89.00,10700),('-1 SD',89.00,11500),('Median',89.00,12500),('+1 SD',89.00,13500),('+2 SD',89.00,14700),('-3 SD',89.50,10000),('+3 SD',89.00,16100),('-2 SD',89.50,10800),('-1 SD',89.50,11600),('Median',89.50,12600),('+1 SD',89.50,13700),('+2 SD',89.50,14900),('-3 SD',90.00,10100),('+3 SD',89.50,16200),('-2 SD',90.00,10900),('-1 SD',90.00,11800),('Median',90.00,12700),('+1 SD',90.00,13800),('+2 SD',90.00,15000),('-3 SD',90.50,10200),('+3 SD',90.00,16400),('-2 SD',90.50,11000),('-1 SD',90.50,11900),('Median',90.50,12800),('+1 SD',90.50,13900),('+2 SD',90.50,15100),('-3 SD',91.00,10300),('+3 SD',90.50,16500),('-2 SD',91.00,11100),('-1 SD',91.00,12000),('Median',91.00,13000),('+1 SD',91.00,14100),('+2 SD',91.00,15300),('-3 SD',91.50,10400),('+3 SD',91.00,16700),('-2 SD',91.50,11200),('-1 SD',91.50,12100),('Median',91.50,13100),('+1 SD',91.50,14200),('+2 SD',91.50,15400),('-3 SD',92.00,10500),('+3 SD',91.50,16800),('-2 SD',92.00,11300),('-1 SD',92.00,12200),('Median',92.00,13200),('+1 SD',92.00,14300),('+2 SD',92.00,15600),('-3 SD',92.50,10600),('+3 SD',92.00,17000),('-2 SD',92.50,11400),('-1 SD',92.50,12300),('Median',92.50,13300),('+1 SD',92.50,14400),('+2 SD',92.50,15700),('-3 SD',93.00,10700),('+3 SD',92.50,17100),('-2 SD',93.00,11500),('-1 SD',93.00,12400),('Median',93.00,13400),('+1 SD',93.00,14600),('+2 SD',93.00,15800),('+3 SD',93.00,17300),('-2 SD',93.50,11600),('-1 SD',93.50,12500),('Median',93.50,13500),('+1 SD',93.50,14700),('+2 SD',93.50,16000),('+3 SD',93.50,17400),('-3 SD',94.00,10800),('-2 SD',94.00,11700),('-1 SD',94.00,12600),('Median',94.00,13700),('+1 SD',94.00,14800),('+2 SD',94.00,16100),('+3 SD',94.00,17600),('-3 SD',94.50,10900),('-2 SD',94.50,11800),('-1 SD',94.50,12700),('Median',94.50,13800),('+1 SD',94.50,14900),('+2 SD',94.50,16300),('+3 SD',94.50,17700),('-3 SD',95.00,11000),('-2 SD',95.00,11900),('-1 SD',95.00,12800),('Median',95.00,13900),('+1 SD',95.00,15100),('+2 SD',95.00,16400),('+3 SD',95.00,17900),('-3 SD',95.50,11100),('-2 SD',95.50,12000),('-1 SD',95.50,12900),('Median',95.50,14000),('+1 SD',95.50,15200),('+2 SD',95.50,16500),('+3 SD',95.50,18000),('-3 SD',96.00,11200),('-2 SD',96.00,12100),('-1 SD',96.00,13100),('Median',96.00,14100),('+1 SD',96.00,15300),('+2 SD',96.00,16700),('+3 SD',96.00,18200),('-3 SD',96.50,11300),('-2 SD',96.50,12200),('-1 SD',96.50,13200),('Median',96.50,14300),('+1 SD',96.50,15500),('+2 SD',96.50,16800),('+3 SD',96.50,18400),('-3 SD',97.00,11400),('-2 SD',97.00,12300),('-1 SD',97.00,13300),('Median',97.00,14400),('+1 SD',97.00,15600),('+2 SD',97.00,17000),('+3 SD',97.00,18500),('-3 SD',97.50,11500),('-2 SD',97.50,12400),('-1 SD',97.50,13400),('Median',97.50,14500),('+1 SD',97.50,15700),('+2 SD',97.50,17100),('+3 SD',97.50,18700),('-3 SD',98.00,11600),('-2 SD',98.00,12500),('-1 SD',98.00,13500),('Median',98.00,14600),('+1 SD',98.00,15900),('+2 SD',98.00,17300),('+3 SD',98.00,18900),('-3 SD',98.50,11700),('-2 SD',98.50,12600),('-1 SD',98.50,13600),('Median',98.50,14800),('+1 SD',98.50,16000),('+2 SD',98.50,17500),('+3 SD',98.50,19100),('-3 SD',99.00,11800),('-3 SD',103.00,12600),('-2 SD',103.00,13600),('-1 SD',103.00,14800),('Median',103.00,16000),('+1 SD',103.00,17400),('+2 SD',103.00,19000),('-3 SD',99.50,11900),('-3 SD',103.50,12700),('-2 SD',99.00,12700),('-1 SD',99.00,13700),('Median',99.00,14900),('+1 SD',99.00,16200),('+2 SD',99.00,17600),('-3 SD',100.00,12000),('+3 SD',99.00,19200),('-2 SD',99.50,12800),('-1 SD',99.50,13900),('Median',99.50,15000),('+1 SD',99.50,16300),('+2 SD',99.50,17800),('-3 SD',100.50,12100),('+3 SD',99.50,19400),('-2 SD',100.00,12900),('-1 SD',100.00,14000),('Median',100.00,15200),('+1 SD',100.00,16500),('+2 SD',100.00,18000),('-3 SD',101.00,12200),('+3 SD',100.00,19600),('-2 SD',100.50,13000),('-1 SD',100.50,14100),('Median',100.50,15300),('+1 SD',100.50,16600),('+2 SD',100.50,18100),('-3 SD',101.50,12300),('+3 SD',100.50,19800),('-2 SD',101.00,13200),('-1 SD',101.00,14200),('Median',101.00,15400),('+1 SD',101.00,16800),('+2 SD',101.00,18300),('-3 SD',102.00,12400),('+3 SD',101.00,20000),('-2 SD',101.50,13300),('-1 SD',101.50,14400),('Median',101.50,15600),('+1 SD',101.50,16900),('+2 SD',101.50,18500),('-3 SD',102.50,12500),('+3 SD',101.50,20200),('-2 SD',102.00,13400),('-1 SD',102.00,14500),('Median',102.00,15700),('+1 SD',102.00,17100),('+2 SD',102.00,18700),('+3 SD',103.00,20800),('+3 SD',102.00,20400),('-2 SD',102.50,13500),('-1 SD',102.50,14600),('Median',102.50,15900),('+1 SD',102.50,17300),('+2 SD',102.50,18800),('+3 SD',102.50,20600),('-2 SD',103.50,13700),('-1 SD',103.50,14900),('Median',103.50,16200),('+1 SD',103.50,17600),('+2 SD',103.50,19200),('+3 SD',103.50,21000),('-3 SD',104.00,12800),('-2 SD',104.00,13900),('-1 SD',104.00,15000),('Median',104.00,16300),('+1 SD',104.00,17800),('+2 SD',104.00,19400),('+3 SD',104.00,21200),('-3 SD',104.50,12900),('-2 SD',104.50,14000),('-1 SD',104.50,15200),('Median',104.50,16500),('+1 SD',104.50,17900),('+2 SD',104.50,19600),('+3 SD',104.50,21500),('-3 SD',105.00,13000),('-2 SD',105.00,14100),('-1 SD',105.00,15300),('Median',105.00,16600),('+1 SD',105.00,18100),('+2 SD',105.00,19800),('+3 SD',105.00,21700),('-3 SD',105.50,13200),('-2 SD',105.50,14200),('-1 SD',105.50,15400),('Median',105.50,16800),('+1 SD',105.50,18300),('+2 SD',105.50,20000),('+3 SD',105.50,21900),('-3 SD',106.00,13300),('-2 SD',106.00,14400),('-1 SD',106.00,15600),('Median',106.00,16900),('+1 SD',106.00,18500),('+2 SD',106.00,20200),('+3 SD',106.00,22100),('-3 SD',106.50,13400),('-2 SD',106.50,14500),('-1 SD',106.50,15700),('Median',106.50,17100),('+1 SD',106.50,18600),('+2 SD',106.50,20400),('+3 SD',106.50,22400),('-3 SD',107.00,13500),('-2 SD',107.00,14600),('-1 SD',107.00,15900),('Median',107.00,17300),('+1 SD',107.00,18800),('+2 SD',107.00,20600),('+3 SD',107.00,22600),('-3 SD',107.50,13600),('-2 SD',107.50,14700),('-1 SD',107.50,16000),('Median',107.50,17400),('+1 SD',107.50,19000),('+2 SD',107.50,20800),('+3 SD',107.50,22800),('-3 SD',108.00,13700),('-2 SD',108.00,14900),('-1 SD',108.00,16200),('Median',108.00,17600),('+1 SD',108.00,19200),('+2 SD',108.00,21000),('+3 SD',108.00,23100),('-3 SD',108.50,13800),('-2 SD',108.50,15000),('-1 SD',108.50,16300),('Median',108.50,17800),('+1 SD',108.50,19400),('+2 SD',108.50,21200),('+3 SD',108.50,23300),('-3 SD',109.00,14000),('-2 SD',109.00,15100),('-1 SD',109.00,16500),('Median',109.00,17900),('+1 SD',109.00,19600),('+2 SD',109.00,21400),('+3 SD',109.00,23600),('-3 SD',109.50,14100),('-2 SD',109.50,15300),('-1 SD',109.50,16600),('Median',109.50,18100),('+1 SD',109.50,19800),('+2 SD',109.50,21700),('+3 SD',109.50,23800),('-3 SD',110.00,14200),('-2 SD',110.00,15400),('-1 SD',110.00,16800),('Median',110.00,18300),('+1 SD',110.00,20000),('+2 SD',110.00,21900),('+3 SD',110.00,24100);
/*!40000 ALTER TABLE `grp_bayi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_berkas`
--

DROP TABLE IF EXISTS `mst_berkas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_berkas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_berkas` varchar(255) DEFAULT NULL,
  `nama_berkas` varchar(255) DEFAULT NULL,
  `keretangan` varchar(1000) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unik_berkas` (`kode_berkas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_berkas`
--

LOCK TABLES `mst_berkas` WRITE;
/*!40000 ALTER TABLE `mst_berkas` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_berkas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_berkas_copy1`
--

DROP TABLE IF EXISTS `mst_berkas_copy1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_berkas_copy1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_berkas` varchar(255) DEFAULT NULL,
  `nama_berkas` varchar(255) DEFAULT NULL,
  `keretangan` varchar(1000) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unik_berkas` (`kode_berkas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_berkas_copy1`
--

LOCK TABLES `mst_berkas_copy1` WRITE;
/*!40000 ALTER TABLE `mst_berkas_copy1` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_berkas_copy1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_guru`
--

DROP TABLE IF EXISTS `mst_guru`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_guru` (
  `id` varchar(255) NOT NULL DEFAULT uuid(),
  `code_sekolah` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('Laki - laki','Perempuan') DEFAULT NULL,
  `Agama` varchar(255) DEFAULT NULL,
  `tahun_mengajar` int(11) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` enum('PNS','PPK','HONDA','HONORER') DEFAULT NULL,
  `is_active` bit(1) DEFAULT b'1',
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_guru`
--

LOCK TABLES `mst_guru` WRITE;
/*!40000 ALTER TABLE `mst_guru` DISABLE KEYS */;
INSERT INTO `mst_guru` VALUES ('081c3928-7adc-11ee-bf64-00e18ca422f6','SDN0002','Yawaiyul','111.11.2208','Laki - laki','Islam',2018,'Perumahan PT RAPP , TS 2 Lama Blok E No 32,','082274866390','tes@gmail.com','PNS','','admin','2023-11-04 00:00:00','admin','2023-11-04 00:00:00',NULL),('0f0a0b33-7aa6-11ee-b619-00e18ca422f6','SDN0001','Fatih','2003','Laki - laki','Islam',2019,'tes','082274866390','tes@gmail.com','HONDA','','admin','2023-11-04 00:00:00','admin','2023-11-04 00:00:00',NULL);
/*!40000 ALTER TABLE `mst_guru` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_sekolah`
--

DROP TABLE IF EXISTS `mst_sekolah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_sekolah` (
  `code` varchar(255) NOT NULL,
  `tingkat` enum('SD','SMP','SMA') DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `akreditasi` varchar(255) DEFAULT NULL,
  `akreditasi_no` varchar(266) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`code`) USING BTREE,
  UNIQUE KEY `unik` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_sekolah`
--

LOCK TABLES `mst_sekolah` WRITE;
/*!40000 ALTER TABLE `mst_sekolah` DISABLE KEYS */;
INSERT INTO `mst_sekolah` VALUES ('SDN0001','SD','SD NEGERI  1','AREA 1','JALAN JALAN DIMANA SAJA','A','REG-A-0991182','admin','2023-11-03 00:00:00','admin','2023-11-03 00:00:00'),('SDN0002','SD','SD Negeri 2','AREA 2','Tes','A','B','admin','2023-11-04 07:27:56',NULL,NULL);
/*!40000 ALTER TABLE `mst_sekolah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trn_pengajuan`
--

DROP TABLE IF EXISTS `trn_pengajuan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trn_pengajuan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `no_pengajuan` varchar(255) NOT NULL,
  `code_sekolah` varchar(255) DEFAULT NULL,
  `id_guru` varchar(255) DEFAULT NULL,
  `periode` enum('Tri Wulan 1','Tri Wulan 2','Tri Wulan 3','Tri Wulan 4') DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `jenis` enum('TPG','TAMSIL','HONDA') DEFAULT NULL,
  `status` enum('Pengajuan','Diterima','Ditolak','Batal') DEFAULT 'Pengajuan',
  `reason` varchar(1000) DEFAULT NULL,
  `file_name` varchar(1000) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `index_pengajuan` (`no_pengajuan`),
  UNIQUE KEY `unik_campuran` (`code_sekolah`,`id_guru`,`periode`,`tahun`,`jenis`,`status`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trn_pengajuan`
--

LOCK TABLES `trn_pengajuan` WRITE;
/*!40000 ALTER TABLE `trn_pengajuan` DISABLE KEYS */;
INSERT INTO `trn_pengajuan` VALUES (11,'TPG/SDN0002/TW1/2023/0001','SDN0002','081c3928-7adc-11ee-bf64-00e18ca422f6','Tri Wulan 1',2023,'TPG','Diterima','tes','ptg-8360c8eaa7e93c1e17746c58e68233bba9f7f5ffb30489e9.pdf','SDN0002','2023-11-04 00:00:00','admin','2023-11-05 00:00:00'),(14,'TPG/SDN0001/TW1/2023/0001','SDN0001','0f0a0b33-7aa6-11ee-b619-00e18ca422f6','Tri Wulan 1',2023,'TPG','Diterima','OK','ptg-c28317cd60aba386bb980e7fbed947d11d2ce0c7a8e11bc1.pdf','SDN0001','2023-11-05 00:00:00','Fatih','2023-11-05 00:00:00'),(15,'TAMSIL/SDN0001/TW1/2023/0001','SDN0001','0f0a0b33-7aa6-11ee-b619-00e18ca422f6','Tri Wulan 1',2023,'TAMSIL','Diterima','ok','tamsil-efc981160738a551204ce410bb9089b14c750558bc7653a4.pdf','SDN0001','2023-11-05 00:00:00','admin','2023-11-05 00:00:00'),(17,'HONDA/SDN0001/TW1/2023/0001','SDN0001','0f0a0b33-7aa6-11ee-b619-00e18ca422f6','Tri Wulan 1',2023,'HONDA','Diterima','ok','honda-698151e5ea21f8e3728477f040f6aadeb5dd5f0aea7eb558.pdf','SDN0001','2023-11-05 00:00:00','admin','2023-11-05 00:00:00');
/*!40000 ALTER TABLE `trn_pengajuan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trn_pengajuan_dtl`
--

DROP TABLE IF EXISTS `trn_pengajuan_dtl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trn_pengajuan_dtl` (
  `dtl_id` varchar(100) NOT NULL DEFAULT uuid(),
  `pengajuan_no` varchar(100) DEFAULT NULL,
  `code_berkas` varchar(255) DEFAULT NULL,
  `berkas_name` varchar(255) DEFAULT NULL,
  `berkas_file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`dtl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trn_pengajuan_dtl`
--

LOCK TABLES `trn_pengajuan_dtl` WRITE;
/*!40000 ALTER TABLE `trn_pengajuan_dtl` DISABLE KEYS */;
/*!40000 ALTER TABLE `trn_pengajuan_dtl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utl_menu`
--

DROP TABLE IF EXISTS `utl_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utl_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `have_child` bit(1) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `level` tinyint(4) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `is_maintenance` bit(1) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utl_menu`
--

LOCK TABLES `utl_menu` WRITE;
/*!40000 ALTER TABLE `utl_menu` DISABLE KEYS */;
INSERT INTO `utl_menu` VALUES (1,'Master Data','#','ki-duotone ki-setting-3','',10,1,0,'\0',NULL,NULL,NULL,NULL,NULL),(2,'Management User','user','fa fa-users fa-3x','\0',4,2,1,'\0',NULL,NULL,NULL,NULL,NULL),(3,'Access Menu','menu_access','fa fa-chart-simple','\0',5,2,1,'\0',NULL,NULL,NULL,NULL,NULL),(4,'Profile','profile','fa fa-user-alt fa-3x','\0',3,2,1,'\0',NULL,NULL,NULL,NULL,NULL),(5,'Data Sekolah','sekolah','fa fa-building','\0',1,2,1,'\0',NULL,NULL,NULL,NULL,NULL),(6,'Data Guru','guru','fa fa-database','\0',2,2,1,NULL,NULL,NULL,NULL,NULL,NULL),(7,'Pengajuan','#','ki-duotone ki-element-plus','',1,1,0,NULL,NULL,NULL,NULL,NULL,NULL),(8,'Tunjangan Profesi Guru','tpg','ki-duotone ki-courier','\0',1,2,7,NULL,NULL,NULL,NULL,NULL,NULL),(9,'Tambahan Penghasilan','tamsil','ki-duotone ki-wallet','\0',2,2,7,NULL,NULL,NULL,NULL,NULL,NULL),(22,'Honor Daerah','honda','ki-duotone ki-binance-usd','\0',3,2,7,NULL,NULL,NULL,NULL,NULL,NULL),(23,'Verifikasi','#','ki-duotone ki-verify ','',2,1,0,NULL,NULL,NULL,NULL,NULL,NULL),(24,'Tunjangan Profesi Guru','tpg_verify','ki-duotone ki-questionnaire-tablet','\0',1,2,23,NULL,NULL,NULL,NULL,NULL,NULL),(25,'Tambahan Penghasilan','tamsil_verify','ki-duotone ki-shield-tick','\0',2,2,23,NULL,NULL,NULL,NULL,NULL,NULL),(26,'Honor Daerah','honda_verify','ki-duotone ki-file-added','\0',3,2,23,NULL,NULL,NULL,NULL,NULL,NULL),(27,'Monitoring Data','#','ki-duotone ki-eye ','',3,1,0,NULL,NULL,NULL,NULL,NULL,NULL),(28,'Tunjangan Profesi Guru','tpg_mon','ki-duotone ki-chart-pie-simple','\0',1,2,27,NULL,NULL,NULL,NULL,NULL,NULL),(29,'Tambahan Penghasilan','tamsil_mon','ki-duotone ki-external-drive  ','\0',2,2,27,NULL,NULL,NULL,NULL,NULL,NULL),(30,'Honor Daerah','honda_mon','ki-duotone ki-graph-3','\0',3,2,27,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `utl_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utl_menu_access`
--

DROP TABLE IF EXISTS `utl_menu_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utl_menu_access` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `add_mode` bit(1) NOT NULL DEFAULT b'0',
  `edit_mode` bit(1) NOT NULL DEFAULT b'0',
  `delete_mode` bit(1) NOT NULL DEFAULT b'0',
  `pdf_mode` bit(1) NOT NULL DEFAULT b'0',
  `excel_mode` bit(1) NOT NULL DEFAULT b'0',
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `macces_menu_id` (`menu_id`) USING BTREE,
  KEY `macces_role_id` (`role_id`) USING BTREE,
  CONSTRAINT `utl_menu_access_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `utl_menu` (`id`) ON DELETE CASCADE,
  CONSTRAINT `utl_menu_access_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `utl_role` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utl_menu_access`
--

LOCK TABLES `utl_menu_access` WRITE;
/*!40000 ALTER TABLE `utl_menu_access` DISABLE KEYS */;
INSERT INTO `utl_menu_access` VALUES (29,1,2,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(30,4,2,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(31,7,2,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(32,8,2,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(33,9,2,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(34,22,2,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(35,27,2,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(36,28,2,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(37,29,2,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(38,30,2,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(57,1,3,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(58,4,3,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(59,5,3,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(60,6,3,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(61,23,3,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(62,24,3,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(63,25,3,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(64,26,3,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(65,27,3,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(66,28,3,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(67,29,3,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(68,30,3,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(69,1,1,'','','','','','0','0000-00-00 00:00:00','0'),(70,2,1,'','','','','','0','0000-00-00 00:00:00','0'),(71,3,1,'','','','','','0','0000-00-00 00:00:00','0'),(72,5,1,'','','','','','0','0000-00-00 00:00:00','0'),(73,6,1,'','','','','','0','0000-00-00 00:00:00','0'),(74,7,1,'','','','','','0','0000-00-00 00:00:00','0'),(75,8,1,'','','','','','0','0000-00-00 00:00:00','0'),(76,9,1,'','','','','','0','0000-00-00 00:00:00','0'),(77,22,1,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(78,23,1,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(79,24,1,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(80,25,1,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(81,26,1,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(82,27,1,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(83,28,1,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(84,29,1,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0'),(85,30,1,'\0','\0','\0','\0','\0','0','0000-00-00 00:00:00','0');
/*!40000 ALTER TABLE `utl_menu_access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utl_role`
--

DROP TABLE IF EXISTS `utl_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utl_role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`role_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utl_role`
--

LOCK TABLES `utl_role` WRITE;
/*!40000 ALTER TABLE `utl_role` DISABLE KEYS */;
INSERT INTO `utl_role` VALUES (1,'System Administrator',NULL,NULL,NULL,NULL,NULL,NULL),(2,'Admin Sekolah',NULL,NULL,NULL,NULL,NULL,NULL),(3,'Pengawas',NULL,NULL,NULL,NULL,NULL,NULL),(4,'Staff',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `utl_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utl_user`
--

DROP TABLE IF EXISTS `utl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utl_user` (
  `user_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `sex` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `born` date NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_locked` bit(1) NOT NULL DEFAULT b'0',
  `is_nonactive` bit(1) NOT NULL DEFAULT b'0',
  `created_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utl_user`
--

LOCK TABLES `utl_user` WRITE;
/*!40000 ALTER TABLE `utl_user` DISABLE KEYS */;
INSERT INTO `utl_user` VALUES ('admin','$2y$10$CsXHwGOMLUs1qmV8GQ/z3uKfdm5sHhsK.4rFjoBNaYX5f.lnmQsW.','System Admin ','11',1,'Man','0822','2023-07-23','fandy@gmail.com','5Ai.JPG','Tes','\0','\0','','0000-00-00 00:00:00','admin','2023-07-23 04:17:57',''),('Fatih','$2y$10$Ozdc2i5jDrYNysAwzU8BWugaQ1dnTmV3wOK8BDnFtM2q6YzqntkMq','Muhammad Al Fatih','123',3,'Man','8998222','2023-07-23','tes@gmail.com',NULL,'tw sa','\0','\0','','0000-00-00 00:00:00',NULL,NULL,''),('SDN0001','$2y$10$1cozCGWyyQmmxJqDp1HymemJEhNV/LxT/IeU4XUUvLvU3s6cqYD1i','SD NEGERI  1',NULL,2,NULL,NULL,'2023-11-04',NULL,NULL,NULL,'\0','\0','','0000-00-00 00:00:00',NULL,NULL,''),('SDN0002','$2y$10$F.czl8eiCI7SwdTplCqmSuHZhb3D7dvU/A7vuV9Tkf/2uhNei6kzO','SD Negeri 2',NULL,2,NULL,NULL,'2023-11-04',NULL,NULL,NULL,'\0','\0','','0000-00-00 00:00:00',NULL,NULL,'');
/*!40000 ALTER TABLE `utl_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `vw_pengajuan`
--

DROP TABLE IF EXISTS `vw_pengajuan`;
/*!50001 DROP VIEW IF EXISTS `vw_pengajuan`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vw_pengajuan` AS SELECT
 1 AS `id`,
  1 AS `no_pengajuan`,
  1 AS `code_sekolah`,
  1 AS `id_guru`,
  1 AS `periode`,
  1 AS `tahun`,
  1 AS `jenis`,
  1 AS `status`,
  1 AS `reason`,
  1 AS `file_name`,
  1 AS `created_by`,
  1 AS `created_date`,
  1 AS `updated_by`,
  1 AS `updated_date`,
  1 AS `nama_sekolah`,
  1 AS `nama_guru`,
  1 AS `status_guru` */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `vw_user`
--

DROP TABLE IF EXISTS `vw_user`;
/*!50001 DROP VIEW IF EXISTS `vw_user`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vw_user` AS SELECT
 1 AS `user_id`,
  1 AS `password`,
  1 AS `name`,
  1 AS `nik`,
  1 AS `role_id`,
  1 AS `sex`,
  1 AS `phone`,
  1 AS `born`,
  1 AS `email`,
  1 AS `image`,
  1 AS `address`,
  1 AS `is_locked`,
  1 AS `is_nonactive`,
  1 AS `created_by`,
  1 AS `created_date`,
  1 AS `updated_by`,
  1 AS `updated_date`,
  1 AS `ip`,
  1 AS `role` */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `vw_pengajuan`
--

/*!50001 DROP VIEW IF EXISTS `vw_pengajuan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_pengajuan` AS select `a`.`id` AS `id`,`a`.`no_pengajuan` AS `no_pengajuan`,`a`.`code_sekolah` AS `code_sekolah`,`a`.`id_guru` AS `id_guru`,`a`.`periode` AS `periode`,`a`.`tahun` AS `tahun`,`a`.`jenis` AS `jenis`,`a`.`status` AS `status`,`a`.`reason` AS `reason`,`a`.`file_name` AS `file_name`,`a`.`created_by` AS `created_by`,`a`.`created_date` AS `created_date`,`a`.`updated_by` AS `updated_by`,`a`.`updated_date` AS `updated_date`,`b`.`nama` AS `nama_sekolah`,`c`.`nama` AS `nama_guru`,`c`.`status` AS `status_guru` from ((`trn_pengajuan` `a` join `mst_sekolah` `b` on(`a`.`code_sekolah` = `b`.`code`)) join `mst_guru` `c` on(`a`.`id_guru` = `c`.`id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vw_user`
--

/*!50001 DROP VIEW IF EXISTS `vw_user`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_user` AS select `a`.`user_id` AS `user_id`,`a`.`password` AS `password`,`a`.`name` AS `name`,`a`.`nik` AS `nik`,`a`.`role_id` AS `role_id`,`a`.`sex` AS `sex`,`a`.`phone` AS `phone`,`a`.`born` AS `born`,`a`.`email` AS `email`,`a`.`image` AS `image`,`a`.`address` AS `address`,`a`.`is_locked` AS `is_locked`,`a`.`is_nonactive` AS `is_nonactive`,`a`.`created_by` AS `created_by`,`a`.`created_date` AS `created_date`,`a`.`updated_by` AS `updated_by`,`a`.`updated_date` AS `updated_date`,`a`.`ip` AS `ip`,`b`.`role` AS `role` from (`utl_user` `a` join `utl_role` `b` on(`a`.`role_id` = `b`.`role_id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-06 12:53:40
