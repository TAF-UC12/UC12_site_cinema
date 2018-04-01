-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 31/03/2018 às 21:43
-- Versão do servidor: 5.7.20-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `portal_cinema`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` smallint(6) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nomeOriginal` varchar(100) NOT NULL,
  `estreia` varchar(20) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `direcao` varchar(100) NOT NULL,
  `elenco` text NOT NULL,
  `sinopse` text NOT NULL,
  `duracao` varchar(11) NOT NULL,
  `cartaz` char(3) DEFAULT 'off',
  `breve` char(3) DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` smallint(6) NOT NULL,
  `id_usuario` smallint(6) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(200) NOT NULL,
  `texto` text,
  `img` varchar(100) DEFAULT NULL,
  `imgSlideshow` varchar(100) DEFAULT NULL,
  `destaque` char(3) DEFAULT 'off',
  `tipoNoticia` varchar(20) DEFAULT NULL,
  `filme` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` smallint(6) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ID_usuario` (`id_usuario`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `FK_ID_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
