-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Set-2022 às 18:31
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `calc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario`
--

CREATE TABLE `formulario` (
  `id_cliente` int(11) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `contaMes` int(11) NOT NULL,
  `indIrrad` decimal(10,0) NOT NULL,
  `cm` int(15) NOT NULL,
  `geracaoAno` decimal(10,0) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cep` int(8) DEFAULT NULL,
  `geracaoMes` double NOT NULL,
  `consumo_mensal_medio` float DEFAULT NULL,
  `potencia_pico` int(11) DEFAULT NULL,
  `area_estimada` int(11) DEFAULT NULL,
  `geracao_mensal_media` int(11) DEFAULT NULL,
  `geracao_total_media` int(11) DEFAULT NULL,
  `tipo_instalacao` int(11) DEFAULT NULL,
  `gasto_mensal` int(11) DEFAULT NULL,
  `tarifa` double(11,3) DEFAULT NULL,
  `geracaoMensal` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `formulario`
--

INSERT INTO `formulario` (`id_cliente`, `endereco`, `contaMes`, `indIrrad`, `cm`, `geracaoAno`, `nome`, `telefone`, `email`, `cep`, `geracaoMes`, `consumo_mensal_medio`, `potencia_pico`, `area_estimada`, `geracao_mensal_media`, `geracao_total_media`, `tipo_instalacao`, `gasto_mensal`, `tarifa`, `geracaoMensal`) VALUES
(1, 'Santo Cristo', 0, '0', 0, '0', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),

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
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
