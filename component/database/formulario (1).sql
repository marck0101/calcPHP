-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Out-2022 às 21:34
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fockink`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario`
--

CREATE TABLE `formulario` (
  `id_cliente` int(11) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `indIrrad` decimal(10,0) NOT NULL,
  `cm` int(15) NOT NULL,
  `geracaoAno` decimal(10,0) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cep` int(8) DEFAULT NULL,
  `geracaoMes` double NOT NULL,
  `potencia_pico` int(11) DEFAULT NULL,
  `area_estimada` int(11) DEFAULT NULL,
  `tipo_instalacao` int(11) DEFAULT NULL,
  `gasto_mensal` int(11) DEFAULT NULL,
  `tarifa` decimal(3,2) DEFAULT NULL,
  `dt_inclusao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `formulario`
--

INSERT INTO `formulario` (`id_cliente`, `endereco`, `indIrrad`, `cm`, `geracaoAno`, `nome`, `telefone`, `email`, `cep`, `geracaoMes`, `potencia_pico`, `area_estimada`, `tipo_instalacao`, `gasto_mensal`, `tarifa`, `dt_inclusao`) VALUES
(1, 'Panambi', '4858', 13467, '161600', 'Nme e Sobrenome', '(55) 9000-0000', 'nome@email.com', 98280000, 13466.67, 110, 775, 1, 8888, '0.66', '2022-10-21 19:32:31'),
(2, 'Panambi', '4858', 13467, '161600', 'Nme e Sobrenome', '(55) 9000-0000', 'nome@email.com', 98280000, 13466.67, 110, 775, 1, 8888, '0.66', '2022-10-21 19:32:50');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
