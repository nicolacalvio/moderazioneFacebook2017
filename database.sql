-- MySQL dump 10.13  Distrib 5.7.12, for osx10.9 (x86_64)
--
-- Host: localhost    Database: my_nicolacalvio
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

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
-- Table structure for table `moderazione_parole`
--

DROP TABLE IF EXISTS `moderazione_parole`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moderazione_parole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parola` varchar(200) NOT NULL,
  `azione` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `parola_UNIQUE` (`parola`)
) ENGINE=InnoDB AUTO_INCREMENT=456 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moderazione_parole`
--

LOCK TABLES `moderazione_parole` WRITE;
/*!40000 ALTER TABLE `moderazione_parole` DISABLE KEYS */;
INSERT INTO `moderazione_parole` VALUES (1,'abcdiet','elimina'),(2,'affanculo','elimina'),(3,'anabootcampdiet','elimina'),(4,'bagasce','elimina'),(5,'bagascia','elimina'),(6,'bagascione','elimina'),(7,'baldracca','elimina'),(8,'baldraccacce','elimina'),(9,'baldraccaccia','elimina'),(10,'baldracche','elimina'),(11,'baldraccona','elimina'),(12,'baldraccone','elimina'),(13,'bariledimerda','elimina'),(14,'bastardacce','elimina'),(15,'bastardacci','elimina'),(16,'bastardaccia','elimina'),(17,'bastardaccio','elimina'),(18,'bastardamadonna','elimina'),(19,'bastarde','elimina'),(20,'bastardi','elimina'),(21,'bastardo','elimina'),(22,'bastardona','elimina'),(23,'bastardone','elimina'),(24,'bastardoni','elimina'),(25,'battona','elimina'),(26,'battone','elimina'),(27,'bbwpit','elimina'),(28,'bocchinara','elimina'),(29,'bocchinare','elimina'),(30,'bocchinari','elimina'),(31,'bocchinaro','elimina'),(32,'budellodidio','elimina'),(33,'bustadipiscio','elimina'),(34,'cacaminchia','elimina'),(35,'cacare','elimina'),(36,'cacasotto','elimina'),(37,'cagacazzo','elimina'),(38,'cagaminchia','elimina'),(39,'cagare','elimina'),(40,'cagasotto','elimina'),(41,'canacciodidio','elimina'),(42,'canagliadidio','elimina'),(43,'caned\'allah','elimina'),(44,'caned\'eva','elimina'),(45,'canedidio','elimina'),(46,'cazzacci','elimina'),(47,'cazzaccio','elimina'),(48,'cazzata','elimina'),(49,'cazzate','elimina'),(50,'cazzetti','elimina'),(51,'cazzetto','elimina'),(52,'cazzi','elimina'),(53,'cazzissimo','elimina'),(54,'cazzo','elimina'),(55,'cazzona','elimina'),(56,'cazzone','elimina'),(57,'cazzoni','elimina'),(58,'cazzuta','elimina'),(59,'cazzute','elimina'),(60,'cazzuti','elimina'),(61,'cazzutissimo','elimina'),(62,'cazzuto','elimina'),(63,'cesso','elimina'),(64,'checca','elimina'),(65,'checche','elimina'),(66,'chiavare','elimina'),(67,'chiavata','elimina'),(68,'chiavate','elimina'),(69,'chiavatona','elimina'),(70,'chiavatone','elimina'),(71,'ciucciamelo','elimina'),(72,'ciucciapalle','elimina'),(73,'cogliona','elimina'),(74,'coglionaggine','elimina'),(75,'coglionare','elimina'),(76,'coglionata','elimina'),(77,'coglionate','elimina'),(78,'coglionatore','elimina'),(79,'coglionatrice','elimina'),(80,'coglionatura','elimina'),(81,'coglionature','elimina'),(82,'coglionazzi','elimina'),(83,'coglionazzo','elimina'),(84,'coglioncelli','elimina'),(85,'coglioncello','elimina'),(86,'coglioncini','elimina'),(87,'coglioncino','elimina'),(88,'coglione','elimina'),(89,'coglioneria','elimina'),(90,'coglionerie','elimina'),(91,'coglioni','elimina'),(92,'coprofago','elimina'),(93,'coprofilo','elimina'),(94,'cornutoilpapa','elimina'),(95,'credoana','elimina'),(96,'cretinetti','elimina'),(97,'cristod\'undio','elimina'),(98,'cristodecapitato','elimina'),(99,'cristoincroce','elimina'),(100,'culattone','elimina'),(101,'culattoni','elimina'),(102,'culi','elimina'),(103,'culo','elimina'),(104,'culona','elimina'),(105,'culone','elimina'),(106,'deficiente','elimina'),(107,'dietaabc','elimina'),(108,'dietaana','elimina'),(109,'dietaanabootcamp','elimina'),(110,'dietabootcamp','elimina'),(111,'dietadell\'abc','elimina'),(112,'diobastardo','elimina'),(113,'diobestia','elimina'),(114,'diobestiazza','elimina'),(115,'dioboia','elimina'),(116,'diocan','elimina'),(117,'diocane','elimina'),(118,'diocannaiolo','elimina'),(119,'diocapra','elimina'),(120,'diocoglione','elimina'),(121,'diocomunista','elimina'),(122,'diocrasto','elimina'),(123,'diocristo','elimina'),(124,'dioculattone','elimina'),(125,'diofarabutto','elimina'),(126,'diofascista','elimina'),(127,'diofinocchio','elimina'),(128,'dioflagellato','elimina'),(129,'dioimpestato','elimina'),(130,'dioimpiccato','elimina'),(131,'dioladro','elimina'),(132,'diolebbroso','elimina'),(133,'diolobotomizzato','elimina'),(134,'diolurido','elimina'),(135,'diomaiale','elimina'),(136,'diomaledetto','elimina'),(137,'diomerda','elimina'),(138,'diominchione','elimina'),(139,'dionegro','elimina'),(140,'dioporco','elimina'),(141,'diopoveraccio','elimina'),(142,'diopovero','elimina'),(143,'diorotto','elimina'),(144,'diorottoinculo','elimina'),(145,'diorutto','elimina'),(146,'diosbudellato','elimina'),(147,'dioschifoso','elimina'),(148,'dioseppellito','elimina'),(149,'dioserpente','elimina'),(150,'diostracane','elimina'),(151,'diostramerda','elimina'),(152,'diostronzo','elimina'),(153,'diosventrato','elimina'),(154,'dioverme','elimina'),(155,'facciadaculo','elimina'),(156,'facciadimerda','elimina'),(157,'fanculo','elimina'),(158,'fica','elimina'),(159,'ficata','elimina'),(160,'ficate','elimina'),(161,'fichetta','elimina'),(162,'fichette','elimina'),(163,'fichetti','elimina'),(164,'fichetto','elimina'),(165,'ficona','elimina'),(166,'ficone','elimina'),(167,'figa','elimina'),(168,'figata','elimina'),(169,'figate','elimina'),(170,'fighe','elimina'),(171,'fighetta','elimina'),(172,'fighette','elimina'),(173,'fighetti','elimina'),(174,'fighetto','elimina'),(175,'figliadicane','elimina'),(176,'figliadimignotta','elimina'),(177,'figliadiputtana','elimina'),(178,'figliaditroia','elimina'),(179,'figlidicani','elimina'),(180,'figlidimignotta','elimina'),(181,'figlidiputtana','elimina'),(182,'figliditroia','elimina'),(183,'figliedicani','elimina'),(184,'figliedimignotta','elimina'),(185,'figliediputtana','elimina'),(186,'figlieditroia','elimina'),(187,'figliodicane','elimina'),(188,'figliodimignotta','elimina'),(189,'figliodiputtana','elimina'),(190,'figlioditroia','elimina'),(191,'figona','elimina'),(192,'figone','elimina'),(193,'figoni','elimina'),(194,'fottere','elimina'),(195,'fottiti','elimina'),(196,'fottuta','elimina'),(197,'fottute','elimina'),(198,'fottuti','elimina'),(199,'fottutissima','elimina'),(200,'fottutissime','elimina'),(201,'fottutissimi','elimina'),(202,'fottutissimo','elimina'),(203,'fottuto','elimina'),(204,'fregna','elimina'),(205,'frocetto','elimina'),(206,'froci','elimina'),(207,'frociara','elimina'),(208,'frociaro','elimina'),(209,'frociarola','elimina'),(210,'frociarolo','elimina'),(211,'frocio','elimina'),(212,'frocione','elimina'),(213,'frocioni','elimina'),(214,'frocissimo','elimina'),(215,'gesùcristaccio','elimina'),(216,'gesùesorcizzato','elimina'),(217,'gesùhandicappato','elimina'),(218,'gesùimpasticcato','elimina'),(219,'gesùmalandato','elimina'),(220,'gesùradioattivo','elimina'),(221,'gesùsieropositivo','elimina'),(222,'gesùstordito','elimina'),(223,'gesùzozzo','elimina'),(224,'incazzare','elimina'),(225,'incazzata','elimina'),(226,'incazzate','elimina'),(227,'incazzati','elimina'),(228,'incazzatissima','elimina'),(229,'incazzatissime','elimina'),(230,'incazzatissimi','elimina'),(231,'incazzatissimo','elimina'),(232,'incazzato','elimina'),(233,'inculare','elimina'),(234,'inculata','elimina'),(235,'inculate','elimina'),(236,'infrociato','elimina'),(237,'leccacazzi','elimina'),(238,'leccaculi','elimina'),(239,'leccaculo','elimina'),(240,'leccafica','elimina'),(241,'leccafiga','elimina'),(242,'leccafighe','elimina'),(243,'leccapalle','elimina'),(244,'madonnaassassinata','elimina'),(245,'madonnacane','elimina'),(246,'madonnaimpestata','elimina'),(247,'madonnaisterica','elimina'),(248,'madonnalurida','elimina'),(249,'madonnamaiala','elimina'),(250,'madonnamongoloide','elimina'),(251,'madonnanegra','elimina'),(252,'madonnaputtana','elimina'),(253,'madonnaschiava','elimina'),(254,'madonnastregaccia','elimina'),(255,'madonnasudicia','elimina'),(256,'madonnasuicida','elimina'),(257,'madonnasurgelata','elimina'),(258,'madonnatroia','elimina'),(259,'madonnaviolentata','elimina'),(260,'mannaggiacristo','elimina'),(261,'mannaggiadio','elimina'),(262,'mannaggiailbattesimo','elimina'),(263,'mannaggiailclero','elimina'),(264,'mannaggiaisanti','elimina'),(265,'mannaggial\'arcangelo','elimina'),(266,'mannaggialabibbia','elimina'),(267,'mannaggialadiocesi','elimina'),(268,'mannaggialamadonna','elimina'),(269,'mannaggialaputtana','elimina'),(270,'mannaggiapadrepio','elimina'),(271,'mannaggiasangiuseppe','elimina'),(272,'merda','elimina'),(273,'merdacce','elimina'),(274,'merdaccia','elimina'),(275,'merdamalcagata','elimina'),(276,'merdata','elimina'),(277,'merdate','elimina'),(278,'merde','elimina'),(279,'merdina','elimina'),(280,'merdine','elimina'),(281,'merdolina','elimina'),(282,'merdoline','elimina'),(283,'merdona','elimina'),(284,'merdone','elimina'),(285,'merdosa','elimina'),(286,'merdose','elimina'),(287,'merdosi','elimina'),(288,'merdoso','elimina'),(289,'mezzasega','elimina'),(290,'mezzeseghe','elimina'),(291,'mignotta','elimina'),(292,'mignotte','elimina'),(293,'minchia','elimina'),(294,'minchiadura','elimina'),(295,'minchiaduro','elimina'),(296,'minchiata','elimina'),(297,'minchiate','elimina'),(298,'minchie','elimina'),(299,'minchione','elimina'),(300,'minchioni','elimina'),(301,'mona','elimina'),(302,'mongoloide','elimina'),(303,'negra','elimina'),(304,'negraccia','elimina'),(305,'negraccio','elimina'),(306,'negro','elimina'),(307,'negrona','elimina'),(308,'negrone','elimina'),(309,'nerchia','elimina'),(310,'patonza','elimina'),(311,'patonze','elimina'),(312,'pigliacazzi','elimina'),(313,'pisciare','elimina'),(314,'pisciasotto','elimina'),(315,'pisciata','elimina'),(316,'pisciatina','elimina'),(317,'pisciato','elimina'),(318,'pisciatona','elimina'),(319,'piscio','elimina'),(320,'pisciona','elimina'),(321,'piscione','elimina'),(322,'piscioni','elimina'),(323,'pompinara','elimina'),(324,'pompinare','elimina'),(325,'pompini','elimina'),(326,'pompino','elimina'),(327,'porcamadonna','elimina'),(328,'porcaputtana','elimina'),(329,'porcodidio','elimina'),(330,'porcodio','elimina'),(331,'porcoilclero','elimina'),(332,'porcoilsignore','elimina'),(333,'pro-ana','elimina'),(334,'pro-anoressia','elimina'),(335,'pro-bulimia','elimina'),(336,'pro-ed','elimina'),(337,'pro-ednos','elimina'),(338,'pro-mia','elimina'),(339,'proana','elimina'),(340,'proanoressia','elimina'),(341,'probulimia','elimina'),(342,'proed','elimina'),(343,'proednos','elimina'),(344,'promia','elimina'),(345,'pugnetta','elimina'),(346,'pugnette','elimina'),(347,'puppa','elimina'),(348,'puppamela','elimina'),(349,'puppamelo','elimina'),(350,'puppare','elimina'),(351,'puppe','elimina'),(352,'puttana','elimina'),(353,'puttanacce','elimina'),(354,'puttanaccia','elimina'),(355,'puttanaeva','elimina'),(356,'puttanamadonna','elimina'),(357,'puttanata','elimina'),(358,'puttanate','elimina'),(359,'puttane','elimina'),(360,'puttanella','elimina'),(361,'puttanelle','elimina'),(362,'puttaniere','elimina'),(363,'puttanieri','elimina'),(364,'puttano','elimina'),(365,'puttanona','elimina'),(366,'puttanone','elimina'),(367,'raspone','elimina'),(368,'rasponi','elimina'),(369,'ricchione','elimina'),(370,'ricchioni','elimina'),(371,'rincoglionito','elimina'),(372,'rizzacazzi','elimina'),(373,'rompicazzi','elimina'),(374,'rompicazzo','elimina'),(375,'rompicoglioni','elimina'),(376,'rottinculo','elimina'),(377,'sbocchinare','elimina'),(378,'sbocchinato','elimina'),(379,'sbocchiniamolo','elimina'),(380,'sborra','elimina'),(381,'sborrare','elimina'),(382,'sborrata','elimina'),(383,'sborrate','elimina'),(384,'sborrato','elimina'),(385,'sborratona','elimina'),(386,'sburra','elimina'),(387,'sburrare','elimina'),(388,'scassacazzo','elimina'),(389,'scassacoglioni','elimina'),(390,'scassaminchia','elimina'),(391,'scazzare','elimina'),(392,'scazzata','elimina'),(393,'scazzate','elimina'),(394,'scazzati','elimina'),(395,'scazzato','elimina'),(396,'scopare','elimina'),(397,'scopata','elimina'),(398,'scopate','elimina'),(399,'segaiolo','elimina'),(400,'signorebastardo','elimina'),(401,'spompinare','elimina'),(402,'spompinata','elimina'),(403,'spompinato','elimina'),(404,'spompiniamolo','elimina'),(405,'stronzata','elimina'),(406,'stronzate','elimina'),(407,'stronzetta','elimina'),(408,'stronzette','elimina'),(409,'stronzetti','elimina'),(410,'stronzetto','elimina'),(411,'stronzina','elimina'),(412,'stronzine','elimina'),(413,'stronzini','elimina'),(414,'stronzino','elimina'),(415,'stronzo','elimina'),(416,'stronzoli','elimina'),(417,'stronzolo','elimina'),(418,'stronzomalcagato','elimina'),(419,'stronzona','elimina'),(420,'stronzone','elimina'),(421,'stronzoni','elimina'),(422,'succhiacazzi','elimina'),(423,'succhiamelo','elimina'),(424,'succhiaminchia','elimina'),(425,'succhiapalle','elimina'),(426,'tarzanelli','elimina'),(427,'tarzanello','elimina'),(428,'tetta','elimina'),(429,'tette','elimina'),(430,'tettina','elimina'),(431,'tettine','elimina'),(432,'tettona','elimina'),(433,'tettone','elimina'),(434,'thinspiration','elimina'),(435,'thinspo','elimina'),(436,'troia','elimina'),(437,'troiacce','elimina'),(438,'troiaccia','elimina'),(439,'troiamadonna','elimina'),(440,'troie','elimina'),(441,'troietta','elimina'),(442,'troiette','elimina'),(443,'troio','elimina'),(444,'troiona','elimina'),(445,'troioncella','elimina'),(446,'troioncelle','elimina'),(447,'troione','elimina'),(448,'trombare','elimina'),(449,'trombata','elimina'),(450,'trombatona','elimina'),(451,'vaccamadonna','elimina'),(452,'vaffanculo','elimina'),(453,'zinne','elimina'),(454,'zoccola','elimina'),(455,'total','avvisa');
/*!40000 ALTER TABLE `moderazione_parole` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utenti_attivi`
--

DROP TABLE IF EXISTS `utenti_attivi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utenti_attivi` (
  `id` bigint(20) DEFAULT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `scuola` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `hometown` varchar(45) DEFAULT NULL,
  `work` varchar(45) DEFAULT NULL,
  `birthday` varchar(45) DEFAULT NULL,
  UNIQUE KEY `name_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utenti_attivi`
--

LOCK TABLES `utenti_attivi` WRITE;
/*!40000 ALTER TABLE `utenti_attivi` DISABLE KEYS */;
INSERT INTO `utenti_attivi` VALUES (453253274729029,'The best gamers',NULL,NULL,NULL,NULL,NULL,NULL),(112852815977813,'Mastro Geppetto',NULL,NULL,NULL,NULL,NULL,NULL),(860808370651726,'Luca Di Fini',NULL,NULL,NULL,NULL,NULL,NULL),(383604558475421,'Alex Giacomini',NULL,NULL,NULL,NULL,NULL,NULL),(685855908266780,'Prova',NULL,NULL,NULL,NULL,NULL,NULL),(743562605737064,'Nicola Calvio',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `utenti_attivi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-08 10:41:27
