-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Maio-2021 às 22:10
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pdtapioca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `NUM_PEDIDO` int(11) NOT NULL,
  `PRODUTO` int(11) DEFAULT NULL,
  `USUARIO` int(11) DEFAULT NULL,
  `PRECO` int(11) DEFAULT NULL,
  `QUANTIDADE` int(11) DEFAULT NULL,
  `TOTAL` int(11) GENERATED ALWAYS AS (`PRECO` * `QUANTIDADE`) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`NUM_PEDIDO`, `PRODUTO`, `USUARIO`, `PRECO`, `QUANTIDADE`) VALUES
(32, 4, 1, 10, 1),
(33, 12, 1, 11, 1),
(34, 19, 1, 11, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `NUM_PRODUTO` int(11) NOT NULL,
  `SABOR` varchar(50) NOT NULL,
  `PRECO` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`NUM_PRODUTO`, `SABOR`, `PRECO`) VALUES
(2, 'Calabresa com catupiry', '10.00'),
(3, 'Bauru', '10.00'),
(4, 'Frango com Catupiry e Mussarela ', '10.00'),
(5, 'Frango com Cheddar ', '10.00'),
(6, 'Light (Queijo Fresco, Peito de Peru e Tomate) ', '10.00'),
(7, 'Pizza ', '10.00'),
(8, ' Queijo Coalho', '10.00'),
(9, 'Salame com Catupiry ', '10.00'),
(10, '3 Queijos (Mussarela, Catupiry e Provolone) ', '10.00'),
(11, 'Banana com Canela e Leite Condensado ', '11.00'),
(12, 'Banana com Chocolate ', '11.00'),
(13, 'Chocolate com Castanha de Caju ', '11.00'),
(14, 'Coco com Amendoim e leite Condensado ', '11.00'),
(15, 'Coco com Chocolate ', '11.00'),
(16, ' Coco com Goiabada ', '11.00'),
(17, ' Coco com Leite Condensado ', '11.00'),
(18, 'Coco com Polpa de Maracujá e Leite Condensado', '11.00'),
(19, ' Coco com Polpa de Morango e Leite Condensado ', '11.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `logradouro` varchar(50) DEFAULT NULL,
  `cep` char(8) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nome`, `email`, `telefone`, `logradouro`, `cep`, `numero`, `complemento`, `senha`) VALUES
(1, 'mario andrade', 'marioand@gmail.com', '975002001', 'av liberdade', '03327981', 1457, '', '202cb962ac59075b964b07152d234b70'),
(2, 'vinicius augusto', 'vinaugusto@gmail.com', '11978003002', 'av liberdade', '04427090', 77, 'B', '202cb962ac59075b964b07152d234b70'),
(3, 'vinicius augusto', 'vinaugusto@gmail.com', '11978003002', 'av liberdade', '04427090', 77, 'B', '202cb962ac59075b964b07152d234b70'),
(4, 'carlos almeida', 'carlos@gmail.com', '11978003002', 'av liberdade', '04427090', 77, 'B', '202cb962ac59075b964b07152d234b70'),
(5, 'maria alguma coisa', 'maria@gmail.com', '11978003002', 'av liberdade', '04427090', 1475, 'B', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`NUM_PEDIDO`),
  ADD KEY `FK_PRODUTO` (`PRODUTO`),
  ADD KEY `FK_CLIENTE` (`USUARIO`) USING BTREE;

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`NUM_PRODUTO`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `NUM_PEDIDO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `NUM_PRODUTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `FK_CLIENTE` FOREIGN KEY (`USUARIO`) REFERENCES `usuarios` (`idusuario`),
  ADD CONSTRAINT `FK_PRODUTO` FOREIGN KEY (`PRODUTO`) REFERENCES `produto` (`NUM_PRODUTO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
