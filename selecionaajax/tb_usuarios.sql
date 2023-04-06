-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 05:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `funcao` varchar(50) NOT NULL,
  `selecionado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nome`, `email`, `funcao`, `selecionado`) VALUES
(65, 'João da Silva', 'joao.silva@gmail.com', 'Analista de Sistemas', 0),
(66, 'Maria Souza', 'maria.souza@hotmail.com', 'Gerente de Projetos', 0),
(67, 'Pedro Rocha', 'pedro.rocha@yahoo.com', 'Desenvolvedor Web', 0),
(68, 'Ana Paula Oliveira', 'ana.oliveira@outlook.com', 'DBA', 0),
(69, 'Luiz Carlos Santos', 'luiz.santos@empresa.com.br', 'Coordenador de TI', 0),
(70, 'Juliana Oliveira', 'juliana.oliveira@gmail.com', 'Analista de Suporte', 0),
(71, 'Fernando Costa', 'fernando.costa@empresa.com.br', 'Arquiteto de Software', 0),
(72, 'Márcio Nunes', 'marcio.nunes@outlook.com', 'Analista de Dados', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
