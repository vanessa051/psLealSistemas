-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Set-2020 às 16:49
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
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE `cidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `id_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`, `id_estado`) VALUES
(45, 'Belém', 14),
(46, 'São Paulo', 25),
(47, 'Salvador', 5),
(48, '', 0),
(49, '', 0),
(50, '', 0),
(51, 'Goiânia', 9),
(55, 'Tocantins', 4),
(56, 'Diamantina', 13),
(57, 'Recife', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`id`, `nome`) VALUES
(1, 'Acre'),
(2, 'Alagoas'),
(3, 'Amapá'),
(4, 'Amazonas'),
(5, 'Bahia'),
(6, 'Ceará'),
(7, 'Distrito Federal'),
(8, 'Espírito Santo'),
(9, 'Góias'),
(10, 'Maranhão'),
(11, 'Mato Grosso'),
(12, 'Mato Grosso do Sul'),
(13, 'Minas Gerais'),
(14, 'Pará'),
(15, 'Paraíba'),
(16, 'Paraná'),
(17, 'Pernambuco'),
(18, 'Piauí'),
(19, 'Rio de Janeiro'),
(20, 'Rio Grande de Norte'),
(21, 'Rio Grande do Sul'),
(22, 'Rondônia'),
(23, 'Roraima'),
(24, 'Santa Catarina'),
(25, 'São Paulo'),
(26, 'Sergipe'),
(27, 'Tocantins');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
