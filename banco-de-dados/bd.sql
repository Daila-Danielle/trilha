/*
SQLyog Enterprise v12.13 (64 bit)
MySQL - 5.7.31-0ubuntu0.18.04.1-log : Database - treinamento_daila
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`treinamento_daila` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `beneficiarios` */

CREATE TABLE `beneficiarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `documento` char(14) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` char(2) NOT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `situacao` enum('A','I') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `documento` (`documento`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Table structure for table `produtoServico` */

CREATE TABLE `produtoServico` (
  `idProduto` int(11) DEFAULT NULL,
  `idServico` int(11) DEFAULT NULL,
  KEY `idProduto` (`idProduto`),
  KEY `idServico` (`idServico`),
  CONSTRAINT `produtoServico_ibfk_1` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`id`),
  CONSTRAINT `produtoServico_ibfk_2` FOREIGN KEY (`idServico`) REFERENCES `servicos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `produtoVeiculo` */

CREATE TABLE `produtoVeiculo` (
  `idProduto` int(11) DEFAULT NULL,
  `idVeiculo` int(11) DEFAULT NULL,
  `situacao` enum('A','I') NOT NULL,
  KEY `idProduto` (`idProduto`),
  KEY `idVeiculo` (`idVeiculo`),
  CONSTRAINT `produtoVeiculo_ibfk_1` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`id`),
  CONSTRAINT `produtoVeiculo_ibfk_2` FOREIGN KEY (`idVeiculo`) REFERENCES `veiculos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `produtos` */

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `situacao` enum('A','I') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `servicos` */

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `situacao` enum('A','I') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `veiculos` */

CREATE TABLE `veiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` char(7) DEFAULT NULL,
  `chassi` varchar(100) NOT NULL,
  `montadora` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `anoFabricacao` char(4) NOT NULL,
  `anoModelo` char(4) NOT NULL,
  `idBeneficiario` int(11) DEFAULT NULL,
  `situacao` enum('A','I') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `chassi` (`chassi`),
  UNIQUE KEY `placa` (`placa`),
  KEY `idBeneficiario` (`idBeneficiario`),
  CONSTRAINT `veiculos_ibfk_1` FOREIGN KEY (`idBeneficiario`) REFERENCES `beneficiarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
