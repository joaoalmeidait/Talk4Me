-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Abr-2022 às 02:20
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
-- Banco de dados: `talk4me`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `interpretes`
--

CREATE TABLE `interpretes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `descricao` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `interpretes`
--

INSERT INTO `interpretes` (`id`, `nome`, `cidade`, `email`, `celular`, `descricao`) VALUES
(1, 'joão', 'São Paulo', 'joao@gmail.com', '11975003001', 'O desenvolvimento de sistemas e aplicações inteligentes para executar determinada tarefa de forma ágil e confiável, possibilitando ao usuário um aumento da produtividade. '),
(2, 'joao almeida', 'São Paulo', 'joaoalmeidapdrosa@gmail.com', '11975003001', 'O desenvolvimento de sistemas e aplicações inteligentes para executar determinada tarefa de forma ágil e confiável, possibilitando ao usuário um aumento da produtividade. O desenvolvimento de sistemas e aplicações inteligentes para executar determinada tarefa de forma ágil e confiável, possibilitando ao usuário um aumento da produtividade. O desenvolvimento de sistemas e aplicações inteligentes para executar determinada tarefa de forma ágil e confiável, possibilitando ao usuário um aumento da produtividade. '),
(3, 'Henrique', 'São Paulo', 'henrique@gmail.com', '+5511976311657', 'Quer o Ponto da Tapioca no seu evento? Escreve pra nós, em eventos@pontodatapioca.com ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `interpretes`
--
ALTER TABLE `interpretes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `interpretes`
--
ALTER TABLE `interpretes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
