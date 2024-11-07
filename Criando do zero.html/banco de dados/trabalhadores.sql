-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/11/2024 às 17:51
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `geek`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `trabalhadores`
--

CREATE TABLE `trabalhadores` (
  `ID` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `valor1` decimal(10,2) NOT NULL,
  `valor2` decimal(10,2) NOT NULL,
  `valor3` decimal(10,2) NOT NULL,
  `contato1` varchar(255) NOT NULL,
  `contato2` varchar(255) NOT NULL,
  `portfolio` varchar(255) NOT NULL,
  `categoria` enum('editor','beatmaker','color','thumbmaker','react','cantor','desenhista','recortador') NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `trabalhadores`
--
ALTER TABLE `trabalhadores`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `trabalhadores`
--
ALTER TABLE `trabalhadores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
