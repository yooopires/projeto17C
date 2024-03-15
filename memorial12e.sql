-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 15-Mar-2024 às 15:27
-- Versão do servidor: 8.2.0
-- versão do PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `memorial12e`
--
CREATE DATABASE IF NOT EXISTS `memorial12e` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `memorial12e`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_momentos`
--

DROP TABLE IF EXISTS `alunos_momentos`;
CREATE TABLE IF NOT EXISTS `alunos_momentos` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_alunos` int UNSIGNED NOT NULL,
  `id_momentos` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `asdfghjkl` (`id_alunos`),
  KEY `sdfghjkl` (`id_momentos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_projetos`
--

DROP TABLE IF EXISTS `alunos_projetos`;
CREATE TABLE IF NOT EXISTS `alunos_projetos` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_alunos` int UNSIGNED NOT NULL,
  `id_projeto` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `wreyrtujtyjty` (`id_alunos`),
  KEY `htrtrhrhr` (`id_projeto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_viagens`
--

DROP TABLE IF EXISTS `alunos_viagens`;
CREATE TABLE IF NOT EXISTS `alunos_viagens` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_alunos` int UNSIGNED NOT NULL,
  `id_viagens` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `htrrthr` (`id_alunos`),
  KEY `hrthrth` (`id_viagens`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `membros_turma`
--

DROP TABLE IF EXISTS `membros_turma`;
CREATE TABLE IF NOT EXISTS `membros_turma` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `numero` varchar(9) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `momentos`
--

DROP TABLE IF EXISTS `momentos`;
CREATE TABLE IF NOT EXISTS `momentos` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `descricao` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `imagem` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `feedback` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

DROP TABLE IF EXISTS `projetos`;
CREATE TABLE IF NOT EXISTS `projetos` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `descricao` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `imagem` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `feedback` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `imagem` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `viagens`
--

DROP TABLE IF EXISTS `viagens`;
CREATE TABLE IF NOT EXISTS `viagens` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `feedback` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `alunos_momentos`
--
ALTER TABLE `alunos_momentos`
  ADD CONSTRAINT `asdfghjkl` FOREIGN KEY (`id_alunos`) REFERENCES `membros_turma` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sdfghjkl` FOREIGN KEY (`id_momentos`) REFERENCES `momentos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `alunos_projetos`
--
ALTER TABLE `alunos_projetos`
  ADD CONSTRAINT `htrtrhrhr` FOREIGN KEY (`id_projeto`) REFERENCES `projetos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wreyrtujtyjty` FOREIGN KEY (`id_alunos`) REFERENCES `membros_turma` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `alunos_viagens`
--
ALTER TABLE `alunos_viagens`
  ADD CONSTRAINT `hrthrth` FOREIGN KEY (`id_viagens`) REFERENCES `viagens` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `htrrthr` FOREIGN KEY (`id_alunos`) REFERENCES `membros_turma` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `membros_turma`
--
ALTER TABLE `membros_turma`
  ADD CONSTRAINT `users_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
