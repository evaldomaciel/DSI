-- phpMyAdmin SQL Dump
-- version 2.6.1-pl3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tempo de Generação: Jul 28, 2005 at 10:46 PM
-- Versão do Servidor: 4.1.10
-- Versão do PHP: 5.0.4
-- 
-- Banco de Dados: `site`
-- 

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `conteudo`
-- 

CREATE TABLE `conteudo` (
  `codigo` int(10) unsigned NOT NULL auto_increment,
  `menu_codigo` int(10) unsigned NOT NULL default '0',
  `descricao` varchar(50) default NULL,
  `titulo` varchar(100) default NULL,
  `texto` text,
  `arquivo` varchar(150) NOT NULL default '',
  PRIMARY KEY  (`codigo`),
  KEY `conteudo_FKIndex1` (`menu_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Extraindo dados da tabela `conteudo`
-- 

INSERT INTO `conteudo` VALUES (1, 1, 'Bem Vindo', 'Bem Vindo', 'Seja bem vindo o site da X25 Internet', '');
INSERT INTO `conteudo` VALUES (2, 1, 'Teste', 'Teste', 'asadasd asd asdas as das das', '');
INSERT INTO `conteudo` VALUES (3, 2, 'Software', 'Consultoria de desenvolvimento', 'asadsadasdasd\r\nasd\r\nas\r\nd\r\nas\r\ndas\r\nd\r\nas\r\nd\r\na', '');
INSERT INTO `conteudo` VALUES (4, 2, 'Cadastro', 'Cadastro', NULL, 'login.php');

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `menu`
-- 

CREATE TABLE `menu` (
  `codigo` int(10) unsigned NOT NULL auto_increment,
  `descricao` varchar(50) default NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Extraindo dados da tabela `menu`
-- 

INSERT INTO `menu` VALUES (1, 'Home');
INSERT INTO `menu` VALUES (2, 'Empresa');
INSERT INTO `menu` VALUES (3, 'Serviços');
INSERT INTO `menu` VALUES (4, 'Noticias');

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `conteudo`
-- 
ALTER TABLE `conteudo`
  ADD CONSTRAINT `conteudo_ibfk_1` FOREIGN KEY (`menu_codigo`) REFERENCES `menu` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
