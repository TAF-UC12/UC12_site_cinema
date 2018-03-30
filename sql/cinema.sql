-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 29-Mar-2018 às 23:34
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `id` smallint(6) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `comentario` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` smallint(6) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `lancamento` date NOT NULL,
  `genero` varchar(20) NOT NULL,
  `direcao` varchar(50) NOT NULL,
  `elenco` tinytext NOT NULL,
  `sinopse` text NOT NULL,
  `duracao` tinytext NOT NULL,
  `cartaz` char(3) DEFAULT 'off',
  `breve` char(3) DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` smallint(6) NOT NULL,
  `id_usuario` smallint(6) NOT NULL,
  `id_comentario` smallint(6) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(200) NOT NULL,
  `texto` text,
  `img` varchar(100) DEFAULT NULL,
  `imgSlideshow` varchar(100) DEFAULT NULL,
  `destaque` char(3) DEFAULT 'off',
  `ver` char(3) DEFAULT 'off',
  `tipoNoticia` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` smallint(6) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ID_usuario` (`id_usuario`),
  ADD KEY `FK_ID_comentario` (`id_comentario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `FK_ID_comentario` FOREIGN KEY (`id_comentario`) REFERENCES `comentario` (`id`),
  ADD CONSTRAINT `FK_ID_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
