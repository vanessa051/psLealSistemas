-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Set-2020 às 16:56
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `enderecos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairro`
--

CREATE TABLE `bairro` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `id_cidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `bairro`
--

INSERT INTO `bairro` (`id`, `nome`, `id_cidade`) VALUES
(1, 'Maracangalha', 1),
(2, 'Guamá', 1),
(3, 'Terra Firme', 1),
(4, 'Coqueiro', 2),
(5, 'Castanheira', 2),
(6, 'Aeroporto Velho', 3),
(7, 'Areial', 3),
(8, 'Centro', 4),
(9, 'Livramento', 4),
(10, 'Andiroba', 5),
(11, 'Jambeiro', 5),
(12, 'Trajano Marques', 6),
(13, 'Portugal', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id`, `nome`, `id_estado`) VALUES
(1, 'Belém', 3),
(2, 'Ananindeua', 3),
(3, 'Rio Branco', 1),
(4, 'Porto Acre', 1),
(5, 'São Luís', 2),
(6, 'Bacuri', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `id_pais` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id`, `nome`, `id_pais`) VALUES
(1, 'Acre', 1),
(2, 'Maranhão', 1),
(3, 'Pará', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `logradouro`
--

CREATE TABLE `logradouro` (
  `cep` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `id_bairro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `ddi` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pais`
--

INSERT INTO `pais` (`id`, `ddi`, `nome`) VALUES
(1, '55', 'Brasil'),
(2, '84', 'Vietnã'),
(3, '30', 'Grecia'),
(4, '49', 'Alemanha');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bairro`
--
ALTER TABLE `bairro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bairro_cidade_1` (`id_cidade`);

--
-- Índices para tabela `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cidade_estado_1` (`id_estado`);

--
-- Índices para tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_estado_pais_1` (`id_pais`);

--
-- Índices para tabela `logradouro`
--
ALTER TABLE `logradouro`
  ADD PRIMARY KEY (`cep`),
  ADD KEY `fk_logradouro_bairro_1` (`id_bairro`);

--
-- Índices para tabela `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `bairro`
--
ALTER TABLE `bairro`
  ADD CONSTRAINT `fk_bairro_cidade_1` FOREIGN KEY (`id_cidade`) REFERENCES `cidade` (`id`);

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `fk_cidade_estado_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id`);

--
-- Limitadores para a tabela `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `fk_estado_pais_1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id`);

--
-- Limitadores para a tabela `logradouro`
--
ALTER TABLE `logradouro`
  ADD CONSTRAINT `fk_logradouro_bairro_1` FOREIGN KEY (`id_bairro`) REFERENCES `bairro` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
