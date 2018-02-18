/*
Navicat MySQL Data Transfer

Source Server         : minha_conecao
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : bibitec

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2018-02-18 17:54:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cliente
-- ----------------------------
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `senha` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cliente
-- ----------------------------
INSERT INTO `cliente` VALUES ('8', 'greison', 'greisonsantos03@gmail.com', '111.111.111.11', 'rua do fogo', 'diaman', 'PA', '(33) 3-3333-3333', '$2y$10$TmlyoS5IQbvpEENAeK5xU.1HhuAAODT/xUUFOxbz1LD1NpdoEwO02');

-- ----------------------------
-- Table structure for devolucao
-- ----------------------------
DROP TABLE IF EXISTS `devolucao`;
CREATE TABLE `devolucao` (
  `id` int(11) NOT NULL,
  `data_devolucao` datetime NOT NULL,
  `fk_cliente` int(11) NOT NULL,
  `fk_livro` int(11) NOT NULL,
  `responsavel` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fkcli` (`fk_cliente`),
  KEY `fkliv` (`fk_livro`),
  CONSTRAINT `fkcli` FOREIGN KEY (`fk_cliente`) REFERENCES `cliente` (`id`),
  CONSTRAINT `fkliv` FOREIGN KEY (`fk_livro`) REFERENCES `livros` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of devolucao
-- ----------------------------

-- ----------------------------
-- Table structure for emprestimos
-- ----------------------------
DROP TABLE IF EXISTS `emprestimos`;
CREATE TABLE `emprestimos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_emprestimo` datetime NOT NULL,
  `fk_cliente` int(10) NOT NULL,
  `fk_livro` int(10) NOT NULL,
  `responsavel` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fkcliente` (`fk_cliente`),
  KEY `fklivro` (`fk_livro`),
  CONSTRAINT `fkcliente` FOREIGN KEY (`fk_cliente`) REFERENCES `cliente` (`id`),
  CONSTRAINT `fklivro` FOREIGN KEY (`fk_livro`) REFERENCES `livros` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of emprestimos
-- ----------------------------

-- ----------------------------
-- Table structure for funcionario
-- ----------------------------
DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `senha` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of funcionario
-- ----------------------------
INSERT INTO `funcionario` VALUES ('5', 'greison', 'greisonsantos03@gmail.com', '899879789', 'rua do fogo', 'diamnm', 'RJ', '8797987987', '$2y$10$3TARc2uFNqWzqMZ2pCDvsui3EDgbSAmX8TDKnyQZMg74ou7.Y0YMO');

-- ----------------------------
-- Table structure for livros
-- ----------------------------
DROP TABLE IF EXISTS `livros`;
CREATE TABLE `livros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(18) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `edicao` varchar(30) NOT NULL,
  `editora` varchar(30) NOT NULL,
  `data_edicao` date NOT NULL,
  `status` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of livros
-- ----------------------------
INSERT INTO `livros` VALUES ('2', '2', 'a', 'hjhj', 'hjhj', 'hjh', '8888-08-08', '0');
INSERT INTO `livros` VALUES ('3', '12343', 'nada', 'guilerme', 'decima', 'rrrd', '2012-02-12', '0');
INSERT INTO `livros` VALUES ('4', '1234', 'matematica', 'greison', '12', 'sar', '2018-12-12', '0');
INSERT INTO `livros` VALUES ('5', 'ghjgjh', 'ajhgjhghj', 'jhgjhg', '76jhgjhg', 'kgjgj', '3222-02-23', '0');
