-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Jun-2023 às 01:21
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
  `comp2` varchar(200) DEFAULT NULL,
  `tipo` char(1) DEFAULT 'C'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`idcli`, `nome`, `cpf`, `fone`, `email`, `cep`, `estado`, `cidade`, `endereco`, `numero`, `bairro`, `senha`, `comp1`, `comp2`, `tipo`) VALUES
(1, 'Joao Adeodato de Arruda Neto', '073.451.533-20', '(88) 99733-4986', 'joaoadeodato912@gmail.com', '62022-304', 'CE', 'Sobral', 'Avenida Humberto Mendonça Lopes', 526, 'Domingos Olímpio', 'senha123', 'até 800 - lado par', '', 'A'),
(2, 'Waneyla Vieira de Arruda', '629.068.448-67', '(88) 99962-7526', 'waneylaarruda@gmail.com', '62022-304', 'CE', 'Sobral', 'Avenida Humberto Mendonça Lopes', 526, 'Domingos Olímpio', '14022006', 'até 800 - lado par', '', 'C'),
(3, 'João Paulo Pimentel', '846.844.682-42', '(88) 99896-3287', 'joaopaulopimenta@gmail.com', '62039-733', 'CE', 'Sobral', 'Rua Sérgio Pinheiro', 307, 'Doutor Juvêncio de Andrade', '12345678', 'até 500 - lado ímpar', '', 'C'),
(4, 'Antônia Isabela do Nascimento Costa', '668.464.660-46', '(88) 99297-1364', 'isabelanascimento@gmail.com', '62011-290', 'CE', 'Sobral', 'Travessa São José', 61, 'Centro', '27072007', 'até 70 - lado ímpar', '', 'C');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbitemvenda`
--

CREATE TABLE `tbitemvenda` (
  `iditemvenda` int(11) UNSIGNED NOT NULL,
  `idvenda` int(11) UNSIGNED NOT NULL,
  `idpro` int(11) UNSIGNED NOT NULL,
  `qtd` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbitemvenda`
--

INSERT INTO `tbitemvenda` (`iditemvenda`, `idvenda`, `idpro`, `qtd`) VALUES
(148, 158, 11, 1),
(149, 158, 31, 2),
(150, 158, 47, 1),
(151, 158, 22, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `idpro` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `descricao` varchar(300) DEFAULT NULL,
  `preco` decimal(9,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`idpro`, `nome`, `tipo`, `descricao`, `preco`) VALUES
(2, 'Calamidade Picante', 'hamburgueres', 'muito gostoso yum yum', '20.49'),
(3, 'Rodeio Duplo', 'hamburgueres', 'Duas carnes bovinas grelhadas, pão com gergelim, queijo derretido, onion rings, molho barbecue e maionese', '19.49'),
(4, 'Rei Vegano', 'hamburgueres', 'Duas carnes bovinas grelhadas de 57g, pão com gergelim, queijo derretido, picles, salada fresca (alface e cebola) e o exclusivo molho Delixioso.', '21.50'),
(5, 'Frangão', 'hamburgueres', 'Dois frangos crocantes, pão com gergelim, queijo derretido, salada fresca (alface) e maionese', '18.99'),
(6, 'Franguinho', 'hamburgueres', 'Frango crocante de 107g, pão com gergelim, salada fresca (alface) e maionese', '12.49'),
(7, 'Delixia 2.0', 'hamburgueres', 'Um hambúrguer com duas carnes bovinas grelhadas de 113g, pão com gergelim, queijo derretido, fatias de bacon crocante e o exclusivo molho Delixioso', '34.99'),
(8, 'Delixia 3.0', 'hamburgueres', 'Um hambúrguer com três carnes bovinas grelhadas de 113g, pão com gergelim, queijo derretido, fatias de bacon crocante e o exclusivo molho Delixioso', '39.99'),
(9, 'Corbucci', 'hamburgueres', 'Um hambúrguer com três carnes bovinas grelhadas de 113g, pão com gergelim, queijo derretido, fatias de bacon crocante e o exclusivo molho Delixioso', '43.99'),
(10, 'Ying Yang', 'hamburgueres', 'Um hambúrguer com uma carne bovina grelhada de 113g, pão com gergelim, queijo derretido, molho barbecue, salada fresca (alface, cebola e tomate), bacon fatiado, picles e maionese', '32.90'),
(11, 'X-Tudão', 'hamburgueres', 'Um hambúrguer com uma carne bovina grelhada de 113g, pão com gergelim, queijo derretido, onion rings , fatias de bacon crocante, pimenta-jalapeño, salada fresca (alface e tomate), o exclusivo molho furioso e maionese', '37.49'),
(12, 'Calabresa', 'pizzas', 'Molho de tomate, queijo mussarela, calabresa, cebola e orégano', '30.50'),
(13, 'Portuguesa', 'pizzas', 'Mussarela, presunto, ovos, pimentão, cebola, azeitona e orégano', '35.00'),
(14, 'Marguerita', 'pizzas', 'Molho de tomate, queijo mussarela, tomate, manjericão e orégano', '37.00'),
(15, 'Quatro Queijos', 'pizzas', 'Mussarela, provolone, parmesão, gorgonzola e orégano', '38.50'),
(16, 'Mussarela', 'pizzas', 'Molho de tomate, queijo mussarela e orégano', '30.50'),
(17, 'Frango', 'pizzas', 'Mussarela, frango, milho verde, azeitona e orêgano', '35.00'),
(18, 'Nutella', 'pizzas', 'Nutella com leite ninho, confeito e morangos(opcional)', '37.00'),
(19, 'Napolitano', 'pizzas', 'Sorvete napolitano(chocolate, morango e baunilha) e confeito', '42.00'),
(20, 'Refrigerante 2L', 'bebidas', 'Refri de sua escolha de 2 litros', '12.00'),
(21, 'Refrigerante 1,5L', 'bebidas', 'Refri de sua escolha de 1,5 litros', '10.00'),
(22, 'Refrigerante lata', 'bebidas', 'Refri lata de sua escolha 350ml', '5.00'),
(23, 'Refrigerante 250ml', 'bebidas', 'Refri de sua escolha de 250ml', '3.50'),
(24, 'Suco grande 750ml', 'bebidas', 'Suco de sua escolha de 750ml', '8.00'),
(25, 'Suco médio 550ml', 'bebidas', 'Suco de sua escolha de 550ml', '6.00'),
(26, 'Suco pequeno 350ml', 'bebidas', 'Suco de sua escolha 350ml', '5.00'),
(27, 'Água sem gás 500ml', 'bebidas', 'Água mineral sem gás 500ml', '2.00'),
(28, 'Água com gás 500ml', 'bebidas', 'Água mineral sem gás 500ml', '3.00'),
(29, 'Presunto', 'pasteis', 'Presunto', '6.50'),
(30, 'Queijo', 'pasteis', 'Queijo coalho', '6.50'),
(31, 'Misto', 'pasteis', 'Presunto e queijo coalho', '10.00'),
(32, 'Calabresa', 'pasteis', 'Calabresa acebolada , milho e milho verde', '10.00'),
(33, 'Frango c/ Catupiry', 'pasteis', 'Frango com catupiry e milho', '12.00'),
(34, 'Frango c/ Cheddar', 'pasteis', 'Frango e cheddar', '13.00'),
(35, 'Nordeste', 'pasteis', 'Frango, carne, presunto, queijo coalho, milho e milho verde', '19.00'),
(36, 'Romeu e Julieta', 'pasteis', 'Goiabada, banana e queijo', '15.00'),
(37, 'Cremosinho', 'pasteis', 'Queijo e doce de leite cremoso', '15.00'),
(38, 'Batata frita', 'aperitivos', 'Batatas + molho', '13.00'),
(39, 'Bolinhas de camarão', 'aperitivos', '15 unid + molho', '23.00'),
(41, 'Bolinhas de peixe', 'aperitivos', '15 unid + molho', '20.00'),
(42, 'Calabresa com fritas', 'aperitivos', 'Calabresa e batatas + molho', '16.49'),
(43, 'Macaxeira frita', 'aperitivos', 'Macaxeiras + molho', '13.00'),
(45, 'Brownie recheado', 'sobremesas', 'Brownie Americano com recheio de doce de leite', '13.00'),
(46, 'Doce de leite', 'sobremesas', 'Brownie Americano, uma explosão de sabor', '13.00'),
(47, 'Gostosão', 'sobremesas', 'Copo feito com nosso delicioso mousse de Ninho, massa de brownie, brigadeiro cremoso, morangos selecionados e creme quatro leites', '17.99'),
(48, 'Torta Limão', 'sobremesas', 'Torta feita com massa de Brownie com cobertura de mousse de limão, brigadeiro gourmet e morangos selecionados', '47.99'),
(49, 'Torta Brownie', 'sobremesas', 'Torta feita com massa de Brownie com cobertura de creme quatro leites, brigadeiro gourmet e morangos selecionados', '47.99'),
(50, 'Onion rings', 'aperitivos', 'Cebolas empanadas cortadas em forma de anéis', '12.49'),
(54, 'Torta Morango', 'sobremesas', 'Torta feita com massa de Brownie com cobertura de mousse de morango, brigadeiro gourmet e morangos selecionados', '47.99');

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
-- Extraindo dados da tabela `tbvenda`
--

INSERT INTO `tbvenda` (`idvenda`, `vendadata`, `vendahora`, `idcli`) VALUES
(158, '2023-06-23', '01:20:00', 4);

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
  MODIFY `idcli` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  MODIFY `iditemvenda` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `idpro` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  MODIFY `idvenda` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
