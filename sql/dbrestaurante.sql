-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2023 às 06:10
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbrestaurante`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idcli` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `fone` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `endereco` varchar(200) NOT NULL DEFAULT '0',
  `numero` int(6) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `comp1` varchar(200) NOT NULL,
  `comp2` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`idcli`, `nome`, `cpf`, `fone`, `email`, `cep`, `estado`, `cidade`, `endereco`, `numero`, `bairro`, `senha`, `comp1`, `comp2`) VALUES
(1, 'Joao Adeodato de Arruda Neto', '073.451.533-20', '(88) 99733-4986', 'joaoadeodato912@gmail.com', '62022-304', 'CE', 'Sobral', 'Avenida Humberto Mendonça Lopes', 526, 'Domingos Olímpio', 'imlindo123', 'até 800 - lado par', ''),
(4, 'Neto', '073.451.533-20', '(98) 97688-6586', 'waneylaarruda@gmail.com', '62022-304', 'CE', 'Sobral', 'Avenida Humberto Mendonça Lopes', 526, 'Domingos Olímpio', 'khjkhgskufhgk', 'até 800 - lado par', ''),
(5, 'teste', '879.657.654-68', '(79) 85479-5487', 'jajaj@gmail.com', '62860-000', 'CE', 'Pindoretama', 'Rua dos bobos', 646, 'meu pau olimpico', '798546795798564', 'até 700 - lado par', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbitemvenda`
--

CREATE TABLE `tbitemvenda` (
  `iditemvenda` int(11) UNSIGNED NOT NULL,
  `idvenda` int(11) UNSIGNED NOT NULL,
  `idpro` int(11) UNSIGNED NOT NULL,
  `qtd` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `idpro` int(11) UNSIGNED NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbvenda`
--

CREATE TABLE `tbvenda` (
  `idvenda` int(11) UNSIGNED NOT NULL,
  `vendadata` date NOT NULL,
  `vendahora` time NOT NULL,
  `idcli` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idcli`) USING BTREE;

--
-- Índices para tabela `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  ADD PRIMARY KEY (`iditemvenda`);

--
-- Índices para tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`idpro`);

--
-- Índices para tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  ADD PRIMARY KEY (`idvenda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idcli` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  MODIFY `iditemvenda` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `idpro` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  MODIFY `idvenda` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
