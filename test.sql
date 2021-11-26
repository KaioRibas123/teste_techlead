-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Nov-2021 às 15:51
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `usuario`, `senha`, `token`) VALUES
(1, 'kaio', 'kaio@123', '123456', ''),
(2, 'kaio', 'fasfas', '123', ''),
(3, 'KAIO CEZAR DOS SANTOS RIBAS', 'thaissa@123', '123', ''),
(5, 'KAIO CEZAR DOS SANTOS RIBAS', 'kaioribas536@gmail.com', '123', 'ykov4r26s'),
(6, '', 'kaiocribas@hotmail.com', '73046416', 'stgud6sdc'),
(7, '', 'thaissa@12345', '123456', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `autor` varchar(45) NOT NULL,
  `datacadastro` varchar(40) NOT NULL,
  `livrousuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `nome`, `autor`, `datacadastro`, `livrousuario`) VALUES
(2, 'marcio', '', '202020', NULL),
(3, 'marcio', '', '202020', NULL),
(4, 'marcio', '', '202020', NULL),
(5, 'kaio', 'thaiisa', '123456', NULL),
(6, 'kaio', '', '123456', NULL),
(7, 'kaio', '', '123456', NULL),
(15, 'obama', '', '202020', NULL),
(16, 'dada', 'dadadadadd', 'dadadadad', NULL),
(18, 'kaio', 'iraque', 'bomba', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livrousuario`
--

CREATE TABLE `livrousuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `datacadastro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livrousuario`
--

INSERT INTO `livrousuario` (`id_usuario`, `nome`, `autor`, `datacadastro`) VALUES
(2, 'KAIO CEZAR DOS SANTOS RIBAS', 'thaiisa', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `livrousuario` (`livrousuario`);

--
-- Índices para tabela `livrousuario`
--
ALTER TABLE `livrousuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `livrousuario`
--
ALTER TABLE `livrousuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `livros`
--
ALTER TABLE `livros`
  ADD CONSTRAINT `livros_ibfk_1` FOREIGN KEY (`livrousuario`) REFERENCES `livros` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
