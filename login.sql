-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Dez-2018 às 02:43
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(150) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `categoria` varchar(60) NOT NULL,
  `estado` varchar(60) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `peso` varchar(60) NOT NULL,
  `qtdhoras` varchar(60) NOT NULL,
  `dataa` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id_evento`, `nome`, `categoria`, `estado`, `cidade`, `peso`, `qtdhoras`, `dataa`) VALUES
(1, 'III Simposio de Tecnologia', 'Tecnologia da InformaÃ§Ã£o', 'ParÃ¡', 'BelÃ©m', 'A1', '200', '25/01/2014'),
(2, 'IV Seminario de Diversidades Culturais', 'Psicologia', 'GoiÃ¡s', 'Brasilia', 'B1', '180', '25/03/2014'),
(3, 'CSBC CongreÃ§o da Sociedade Brasileira de ComputaÃ§Ã£o', 'Tecnologia da InformaÃ§Ã£o', 'Rio Grande do Norte', 'Natal', 'A2', '60', '12/03/2015');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `horas` int(11) NOT NULL,
  `matricula` int(50) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `niveldeacesso` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`, `horas`, `matricula`, `curso`, `niveldeacesso`) VALUES
(1, 'rafa', '123456', 86, 201403131, 'sistemas de informação', 'limitado'),
(2, 'admin', '1234', 0, 0, '', 'DEUS'),
(3, 'thiago', '1234', 78, 20140215, 'sistemas de informação', 'limitado'),
(4, 'juliana', '1234', 200, 20121231, 'pisicologia', 'limitado'),
(5, 'renato', '1234', 0, 171, 'trafico de intorpecentes', 'limitado'),
(6, 'Milena', '1234', 0, 20151212, 'Direito', 'limitado');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
