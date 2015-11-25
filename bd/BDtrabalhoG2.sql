CREATE DATABASE  IF NOT EXISTS `voluntariado` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `voluntariado`;
-- MySQL dump 10.13  Distrib 5.6.23, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: voluntariado
-- ------------------------------------------------------
-- Server version	5.6.23-log

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
-- Table structure for table `acesso`
--

DROP TABLE IF EXISTS `acesso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acesso` (
  `idAcesso` int(11) NOT NULL AUTO_INCREMENT,
  `Senha` varchar(15) DEFAULT NULL,
  `Login` varchar(45) DEFAULT NULL,
  `idVoluntario` int(11) DEFAULT NULL,
  `idEmpresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAcesso`),
  KEY `fk_acesso_voluntario_idx` (`idVoluntario`),
  KEY `fk_acesso_empresa1_idx` (`idEmpresa`),
  CONSTRAINT `fk_acesso_empresa1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_acesso_voluntario` FOREIGN KEY (`idVoluntario`) REFERENCES `voluntario` (`idVoluntario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acesso`
--

LOCK TABLES `acesso` WRITE;
/*!40000 ALTER TABLE `acesso` DISABLE KEYS */;
INSERT INTO `acesso` VALUES (1,'12345','joao',1,NULL),(2,'54321','sabrina',2,NULL),(3,'12345','lardosidosos',NULL,1),(4,'1234567','alvaro',7,NULL),(5,'123456','silvia',8,NULL),(6,'123456','alvaroleal',9,NULL),(7,'123456','sabrina2',3,NULL),(8,'1234567','sabrina3',5,NULL),(9,'123456789','sabrina4',4,NULL),(10,'12345','alvaro1',6,NULL),(11,'12345','apaetorres',NULL,3),(12,'12345','cassio',10,NULL),(13,'12345','vinicius',11,NULL);
/*!40000 ALTER TABLE `acesso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `afinidade`
--

DROP TABLE IF EXISTS `afinidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `afinidade` (
  `idAfinidade` int(11) NOT NULL AUTO_INCREMENT,
  `afinidade` varchar(45) DEFAULT NULL,
  `idVoluntario` int(11) NOT NULL,
  PRIMARY KEY (`idAfinidade`,`idVoluntario`),
  KEY `fk_afinidade_voluntario1_idx` (`idVoluntario`),
  CONSTRAINT `fk_afinidade_voluntario1` FOREIGN KEY (`idVoluntario`) REFERENCES `voluntario` (`idVoluntario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `afinidade`
--

LOCK TABLES `afinidade` WRITE;
/*!40000 ALTER TABLE `afinidade` DISABLE KEYS */;
INSERT INTO `afinidade` VALUES (1,'Crianças',1),(2,'Adolescentes',2),(3,'Adolescentes',3),(4,'Adolescentes',4),(5,'Adolescentes',5),(6,'Jovens',6),(7,'Jovens',7),(8,'Idosos',8),(9,'Adolescentes',9),(10,'Jovens',10),(11,'Jovens',11);
/*!40000 ALTER TABLE `afinidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `areadeatuacao`
--

DROP TABLE IF EXISTS `areadeatuacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `areadeatuacao` (
  `idAreaDeAtuacao` int(11) NOT NULL AUTO_INCREMENT,
  `areaT` varchar(25) DEFAULT NULL,
  `idVoluntario` int(11) NOT NULL,
  PRIMARY KEY (`idAreaDeAtuacao`,`idVoluntario`),
  KEY `fk_areadeatuacao_voluntario1_idx` (`idVoluntario`),
  CONSTRAINT `fk_areadeatuacao_voluntario1` FOREIGN KEY (`idVoluntario`) REFERENCES `voluntario` (`idVoluntario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areadeatuacao`
--

LOCK TABLES `areadeatuacao` WRITE;
/*!40000 ALTER TABLE `areadeatuacao` DISABLE KEYS */;
INSERT INTO `areadeatuacao` VALUES (1,'Gastronomia',1),(2,'Tecnologia',2),(3,'Designer',3),(4,'Dona de Casa',4),(5,'Pescador',5),(6,'Administração',6),(7,'Administração',7),(8,'Administração',8),(9,'Gastronomia',9),(10,'Tecnologia',10),(11,'Tecnologia',11);
/*!40000 ALTER TABLE `areadeatuacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `atividade`
--

DROP TABLE IF EXISTS `atividade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atividade` (
  `idAtividade` int(11) NOT NULL AUTO_INCREMENT,
  `nomeAtividade` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idAtividade`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atividade`
--

LOCK TABLES `atividade` WRITE;
/*!40000 ALTER TABLE `atividade` DISABLE KEYS */;
INSERT INTO `atividade` VALUES (1,'Introdução a Computação'),(2,'Cuidar de Idosos'),(3,'Cuidar de criança com deficiência'),(4,'Atravessar idosos pela rua'),(5,'Ensinar esportes'),(6,'Ajudante Geral'),(7,'Ajudar no Tcc');
/*!40000 ALTER TABLE `atividade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cidade`
--

DROP TABLE IF EXISTS `cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cidade` (
  `idCidade` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `cep` varchar(15) DEFAULT NULL,
  `idEmpresa` int(11) NOT NULL DEFAULT '0',
  `idVoluntario` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idCidade`,`idEmpresa`,`idVoluntario`),
  KEY `fk_cidade_empresa1_idx` (`idEmpresa`),
  KEY `fk_cidade_voluntario1_idx` (`idVoluntario`),
  CONSTRAINT `fk_cidade_empresa1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cidade_voluntario1` FOREIGN KEY (`idVoluntario`) REFERENCES `voluntario` (`idVoluntario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidade`
--

LOCK TABLES `cidade` WRITE;
/*!40000 ALTER TABLE `cidade` DISABLE KEYS */;
INSERT INTO `cidade` VALUES (1,'Torres','RS','95560000',1,1),(2,'Passo de Torres','SC','95560000',0,2),(3,'Passo de Torres','SC','95560000',0,3),(4,'Passo de Torres','SC','95560000',0,4),(5,'Passo de Torres','SC','95560000',0,5),(6,'Torres','RS','95560000',0,6),(7,'Torres','RS','95560000',0,7),(8,'Torres','RS','95560000',0,8),(9,'Torres','RS','95560000',0,9),(10,'Torres','RS','95560000',3,0),(11,'Torres','RS','95560000',0,10),(12,'Torres','RS','95560000',0,11);
/*!40000 ALTER TABLE `cidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disponibilidade`
--

DROP TABLE IF EXISTS `disponibilidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disponibilidade` (
  `idDisponibilidade` int(11) NOT NULL AUTO_INCREMENT,
  `idVoluntario` int(11) NOT NULL,
  `idAtividade` int(11) NOT NULL,
  `statusDisponibilidade` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idDisponibilidade`,`idVoluntario`,`idAtividade`),
  KEY `fk_voluntario_has_Atividade_Atividade1_idx` (`idAtividade`),
  KEY `fk_voluntario_has_Atividade_voluntario1_idx` (`idVoluntario`),
  CONSTRAINT `fk_voluntario_has_Atividade_Atividade1` FOREIGN KEY (`idAtividade`) REFERENCES `atividade` (`idAtividade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_voluntario_has_Atividade_voluntario1` FOREIGN KEY (`idVoluntario`) REFERENCES `voluntario` (`idVoluntario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disponibilidade`
--

LOCK TABLES `disponibilidade` WRITE;
/*!40000 ALTER TABLE `disponibilidade` DISABLE KEYS */;
INSERT INTO `disponibilidade` VALUES (1,1,1,0),(2,2,1,0),(3,3,1,0),(4,4,1,0),(5,5,1,0),(6,6,1,0),(7,7,1,0),(8,8,2,0),(9,9,2,0),(10,10,1,0),(11,11,1,0);
/*!40000 ALTER TABLE `disponibilidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa` (
  `idEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `nomeEmpresa` varchar(45) DEFAULT NULL,
  `cnpjEmpresa` varchar(45) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `dataFundada` varchar(45) DEFAULT NULL,
  `ddd` varchar(5) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (0,'teste','teste','teste','teste','teste','teste'),(1,'Lar dos Idosos','541231028','laridosos@gmail.com','13/05/2001','51','36649234'),(3,'Apae','5412310282','apaetorres@gmail.com','1990-03-01','51','36649232');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `extraempresa`
--

DROP TABLE IF EXISTS `extraempresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `extraempresa` (
  `idExtra` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(150) DEFAULT NULL,
  `idEmpresa` int(11) NOT NULL,
  PRIMARY KEY (`idExtra`,`idEmpresa`),
  KEY `fk_extra_empresa1_idx` (`idEmpresa`),
  CONSTRAINT `fk_extra_empresa1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `extraempresa`
--

LOCK TABLES `extraempresa` WRITE;
/*!40000 ALTER TABLE `extraempresa` DISABLE KEYS */;
INSERT INTO `extraempresa` VALUES (1,'Cuidar de idosos',1),(2,'Precisamos de voluntários.',3);
/*!40000 ALTER TABLE `extraempresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `extravoluntario`
--

DROP TABLE IF EXISTS `extravoluntario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `extravoluntario` (
  `idExtra` int(11) NOT NULL AUTO_INCREMENT,
  `volJa` varchar(10) DEFAULT NULL,
  `disponibilidade` varchar(45) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `idVoluntario` int(11) NOT NULL,
  `escolaridade` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idExtra`),
  KEY `fk_Extra_Voluntario1_idx` (`idVoluntario`),
  CONSTRAINT `fk_Extra_Voluntario1` FOREIGN KEY (`idVoluntario`) REFERENCES `voluntario` (`idVoluntario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `extravoluntario`
--

LOCK TABLES `extravoluntario` WRITE;
/*!40000 ALTER TABLE `extravoluntario` DISABLE KEYS */;
INSERT INTO `extravoluntario` VALUES (1,'não','entre 6 e 10 horas por mês','Quero melhorar o Mundo',1,'Superior'),(2,'sim','entre 1 e 5 horas por mês','sou bom',2,'Superior'),(3,'sim','2','sou bom',3,'Medio'),(4,'sim','2','sou bom',4,'Medio'),(5,'sim','2','sou bom',5,'Medio'),(6,'sim','entre 6 e 10 horas por mês','Quero ajudar o proximo',6,'Medio'),(7,'sim','entre 6 e 10 horas por mês','Quero ajudar o proximo',7,'Medio'),(8,'sim','entre 1 e 5 horas por mês','Ja foi voluntaria e quero ser de novo',8,'Medio'),(9,'sim','entre 1 e 5 horas por mês','Gostaria de fazer o mundo melhor.',9,'Medio'),(10,'sim','entre 6 e 10 horas por mês','Para melhorar o mundo.',10,'Superior'),(11,'nao','entre 1 e 5 horas por mês','porque sim',11,'Superior');
/*!40000 ALTER TABLE `extravoluntario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensagem`
--

DROP TABLE IF EXISTS `mensagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensagem` (
  `idMensagem` int(11) NOT NULL AUTO_INCREMENT,
  `mensagem` text,
  `status` int(11) NOT NULL DEFAULT '0',
  `idEmpresa` int(11) NOT NULL,
  `idVoluntario` int(11) NOT NULL,
  PRIMARY KEY (`idMensagem`,`idEmpresa`,`idVoluntario`),
  KEY `fk_mensagem_empresa1_idx` (`idEmpresa`),
  KEY `fk_mensagem_voluntario1_idx` (`idVoluntario`),
  CONSTRAINT `fk_mensagem_empresa1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_mensagem_voluntario1` FOREIGN KEY (`idVoluntario`) REFERENCES `voluntario` (`idVoluntario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensagem`
--

LOCK TABLES `mensagem` WRITE;
/*!40000 ALTER TABLE `mensagem` DISABLE KEYS */;
INSERT INTO `mensagem` VALUES (1,'Oi tudo bem? gostaria de ser voluntario?',0,1,1),(5,'Oi sabrina quer cuidar de um idosos para gente?',0,1,2),(6,'Oi silvia quer ser um voluntario, precisamos de vc :D',0,1,9),(7,'quer ser voluntario?',1,1,11),(8,'entao venha',0,1,1);
/*!40000 ALTER TABLE `mensagem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensagemempresa`
--

DROP TABLE IF EXISTS `mensagemempresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensagemempresa` (
  `idMensagem` int(11) NOT NULL AUTO_INCREMENT,
  `mensagem` text,
  `status` int(11) NOT NULL DEFAULT '0',
  `idVoluntario` int(11) NOT NULL,
  `idEmpresa` int(11) NOT NULL,
  PRIMARY KEY (`idMensagem`,`idVoluntario`,`idEmpresa`),
  KEY `fk_mensagemempresa_voluntario_idx` (`idVoluntario`),
  KEY `fk_mensagemempresa_empresa1_idx` (`idEmpresa`),
  CONSTRAINT `fk_mensagemempresa_empresa1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_mensagemempresa_voluntario` FOREIGN KEY (`idVoluntario`) REFERENCES `voluntario` (`idVoluntario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensagemempresa`
--

LOCK TABLES `mensagemempresa` WRITE;
/*!40000 ALTER TABLE `mensagemempresa` DISABLE KEYS */;
INSERT INTO `mensagemempresa` VALUES (2,'oi sou sabrina quero ser uma voluntaria para voces',0,2,1),(4,'Gostei dessa oportunidade',1,9,1),(5,'Ola quer ser voluntaria para voces',0,2,1),(6,'Oi gostaria de ser um voluntario para vocês. :D',0,10,1),(7,'quero ser voluntario',0,11,3),(8,'oi eu quero',0,1,1);
/*!40000 ALTER TABLE `mensagemempresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `necessidade`
--

DROP TABLE IF EXISTS `necessidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `necessidade` (
  `idNecessidade` int(11) NOT NULL AUTO_INCREMENT,
  `idAtividade` int(11) NOT NULL,
  `idEmpresa` int(11) NOT NULL,
  `statusNecessidade` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idNecessidade`,`idAtividade`,`idEmpresa`),
  KEY `fk_Atividade_has_empresa_empresa1_idx` (`idEmpresa`),
  KEY `fk_Atividade_has_empresa_Atividade1_idx` (`idAtividade`),
  CONSTRAINT `fk_Atividade_has_empresa_Atividade1` FOREIGN KEY (`idAtividade`) REFERENCES `atividade` (`idAtividade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Atividade_has_empresa_empresa1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `necessidade`
--

LOCK TABLES `necessidade` WRITE;
/*!40000 ALTER TABLE `necessidade` DISABLE KEYS */;
INSERT INTO `necessidade` VALUES (1,1,1,0),(2,2,1,0),(3,3,3,0);
/*!40000 ALTER TABLE `necessidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefone`
--

DROP TABLE IF EXISTS `telefone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefone` (
  `idTelefone` int(11) NOT NULL AUTO_INCREMENT,
  `dddTelefone` varchar(5) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `dddCelular` varchar(5) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `idVoluntario` int(11) NOT NULL,
  PRIMARY KEY (`idTelefone`),
  KEY `fk_Telefone_Voluntario1_idx` (`idVoluntario`),
  CONSTRAINT `fk_Telefone_Voluntario1` FOREIGN KEY (`idVoluntario`) REFERENCES `voluntario` (`idVoluntario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefone`
--

LOCK TABLES `telefone` WRITE;
/*!40000 ALTER TABLE `telefone` DISABLE KEYS */;
INSERT INTO `telefone` VALUES (1,'51','82568333','51','82568333',1),(2,'51','82568333','51','579678978',2),(3,'51','82568333','51','579678978',3),(4,'51','82568333','51','579678978',4),(5,'51','82568333','51','579678978',5),(6,'51','82568333','','',6),(7,'51','82568333','','',7),(8,'51','82568333','','',8),(9,'48','82568332','48','4523422',9),(10,'51','82568468','48','98582525',10),(11,'51','82568333','51','82568333',11);
/*!40000 ALTER TABLE `telefone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voluntario`
--

DROP TABLE IF EXISTS `voluntario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `voluntario` (
  `idVoluntario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeVoluntario` varchar(45) DEFAULT NULL,
  `cpfVoluntario` varchar(45) DEFAULT NULL,
  `dataNascimento` varchar(45) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `status` varchar(45) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idVoluntario`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voluntario`
--

LOCK TABLES `voluntario` WRITE;
/*!40000 ALTER TABLE `voluntario` DISABLE KEYS */;
INSERT INTO `voluntario` VALUES (0,'teste','teste','teste','teste','teste','0'),(1,'João Paulo Leal','458796867','05/11/1993','Masculino','joao@gmail.com','1'),(2,'Sabrina Cardoso Ezequiel','43212312','1994-03-16','feminino','sabrina-ce94@hotmail.com','0'),(3,'Sabrina Cardoso Ezequiel','43212312','1994-03-16','feminino','sabrina-ce94@hotmail.com','2'),(4,'Sabrina Cardoso Ezequiel','43212312','1994-03-16','feminino','sabrina-ce94@hotmail.com','0'),(5,'Sabrina Cardoso Ezequiel','43212312','1994-03-16','feminino','sabrina-ce94@hotmail.com','0'),(6,'Alvaro','63242312','1850-11-02','masculino','alvaro@gmail.com','0'),(7,'Alvaro','63242312','1850-11-02','masculino','alvaro@gmail.com','2'),(8,'Silvia','9876767','1850-01-07','feminino','silvia@gmail.com','1'),(9,'Silvia Leal','6543212','1962-11-02','feminino','silvialeal@gmail.com','0'),(10,'Cassio H.','43212312','1985-06-01','masculino','cassio@gmail.com','2'),(11,'vinicius','321321','1992-05-01','masculino','vinicius@gmail.com','0');
/*!40000 ALTER TABLE `voluntario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-22  2:00:05
