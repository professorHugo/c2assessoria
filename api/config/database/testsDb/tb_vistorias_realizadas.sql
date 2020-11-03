-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 06-Out-2020 às 10:20
-- Versão do servidor: 5.6.41-84.1
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `n2yco435_c2assessoria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vistorias_realizadas`
--

CREATE TABLE `tb_vistorias_realizadas` (
  `id_vistoria` int(11) NOT NULL,
  `protocolo_vistoria` varchar(20) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `tipo_vistoria` int(11) DEFAULT NULL,
  `situacao_vistoria` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `observacao_vistoria` varchar(500) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `arquivo_vistoria` int(11) DEFAULT NULL,
  `data_vistoria` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_vistorias_realizadas`
--
ALTER TABLE `tb_vistorias_realizadas`
  ADD PRIMARY KEY (`id_vistoria`),
  ADD KEY `arquivo_vistoria` (`arquivo_vistoria`),
  ADD KEY `tipo_vistoria` (`tipo_vistoria`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_vistorias_realizadas`
--
ALTER TABLE `tb_vistorias_realizadas`
  MODIFY `id_vistoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_vistorias_realizadas`
--
ALTER TABLE `tb_vistorias_realizadas`
  ADD CONSTRAINT `tb_vistorias_realizadas_ibfk_1` FOREIGN KEY (`arquivo_vistoria`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_vistorias_realizadas_ibfk_2` FOREIGN KEY (`tipo_vistoria`) REFERENCES `tb_tipo_vistorias` (`id_tipo_vistoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
