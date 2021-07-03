-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30-Maio-2021 às 21:16
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `c2assessoria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_associados`
--

DROP TABLE IF EXISTS `tb_associados`;
CREATE TABLE IF NOT EXISTS `tb_associados` (
  `id_associado` int(11) NOT NULL AUTO_INCREMENT,
  `cpf_associado` bigint(20) DEFAULT NULL,
  `seguradora_associado` int(11) DEFAULT NULL,
  `nome_associado` varchar(200) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cep_associado` varchar(11) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `endereco_associado` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `bairro_associado` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cidade_associado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `estado_associado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `outros_veiculos` int(11) DEFAULT NULL COMMENT '1: sim | 2: não',
  `quantidade_veiculos` int(11) DEFAULT NULL COMMENT 'Quantidade de veículos extras',
  `civil_associado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `profissao_associado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `veiculo1_associado` int(11) DEFAULT NULL,
  `veiculo2_associado` int(11) DEFAULT NULL,
  `veiculo3_associado` int(11) DEFAULT NULL,
  `veiculo4_associado` int(11) DEFAULT NULL,
  `cnh_associado` int(11) DEFAULT NULL,
  `relato_associado` longtext COLLATE utf8_general_mysql500_ci COMMENT 'Texto escrito',
  `documento_frente` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `documento_verso` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `declaracao1` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `declaracao2` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `declaracao3` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `perfil_salvo` int(11) DEFAULT '2' COMMENT '1:sim | 2: não',
  PRIMARY KEY (`id_associado`),
  KEY `seguradora_associado` (`seguradora_associado`),
  KEY `veiculo1_associado` (`veiculo1_associado`),
  KEY `veiculo2_associado` (`veiculo2_associado`),
  KEY `veiculo3_associado` (`veiculo3_associado`),
  KEY `veiculo4_associado` (`veiculo4_associado`),
  KEY `cnh_associado` (`cnh_associado`),
  KEY `documento_frente` (`documento_frente`),
  KEY `documento_verso` (`documento_verso`),
  KEY `declaracao1` (`declaracao1`),
  KEY `declaracao2` (`declaracao2`),
  KEY `declaracao3` (`declaracao3`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_associados`
--

INSERT INTO `tb_associados` (`id_associado`, `cpf_associado`, `seguradora_associado`, `nome_associado`, `cep_associado`, `endereco_associado`, `bairro_associado`, `cidade_associado`, `estado_associado`, `outros_veiculos`, `quantidade_veiculos`, `civil_associado`, `profissao_associado`, `veiculo1_associado`, `veiculo2_associado`, `veiculo3_associado`, `veiculo4_associado`, `cnh_associado`, `relato_associado`, `documento_frente`, `documento_verso`, `declaracao1`, `declaracao2`, `declaracao3`, `perfil_salvo`) VALUES
(1, 2949006590, 7, 'Lucas Silveira da Silva', '42722020', 'Rua JosÃ© Leite, 9994', 'Caji', 'Lauro de Freitas', 'BA', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(2, 34109989850, 2, 'Hugo Christian Pereira Gomes', '03977380', 'Rua Sargento EdÃ©sio Afonso de Carvalho, 128 - Casa 3', 'Conjunto Habitacional Marechal Mascarenhas de Morais', 'SÃ£o Paulo', 'SP', NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_boletim_ocorrencia`
--

DROP TABLE IF EXISTS `tb_boletim_ocorrencia`;
CREATE TABLE IF NOT EXISTS `tb_boletim_ocorrencia` (
  `id_boletim` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_boletim` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `autenticidade_boletim` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `foto1_boletim` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto2_boletim` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto3_boletim` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto4_boletim` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto5_boletim` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto6_boletim` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  PRIMARY KEY (`id_boletim`),
  KEY `foto1_boletim` (`foto1_boletim`),
  KEY `foto2_boletim` (`foto2_boletim`),
  KEY `foto3_boletim` (`foto3_boletim`),
  KEY `foto4_boletim` (`foto4_boletim`),
  KEY `foto5_boletim` (`foto5_boletim`),
  KEY `foto6_boletim` (`foto6_boletim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_caracteristicas_tecnicas`
--

DROP TABLE IF EXISTS `tb_caracteristicas_tecnicas`;
CREATE TABLE IF NOT EXISTS `tb_caracteristicas_tecnicas` (
  `id_caracteristica` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_caracteristica` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `indice_criminalidade` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `indice_sinistralidade` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `caracteristicas_tecnicas` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `rua_pavimentada` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `permitido_estacionar` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `aclive_declive` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `tipo_direcao_pista` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cruzamento_pista` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `pista_curvas` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `pista_rotatoria` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `velocidade_maxima` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_caracteristica`),
  KEY `velocidade_maxima` (`velocidade_maxima`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_chaves_apresentadas`
--

DROP TABLE IF EXISTS `tb_chaves_apresentadas`;
CREATE TABLE IF NOT EXISTS `tb_chaves_apresentadas` (
  `id_chave_apresentada` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_chave_apresentada` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `tipo_chave_apresentada` int(11) DEFAULT NULL,
  `local_chave_apresentada` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `nome_chave_apresentada` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  PRIMARY KEY (`id_chave_apresentada`),
  KEY `tipo_chave_apresentada` (`tipo_chave_apresentada`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

DROP TABLE IF EXISTS `tb_clientes`;
CREATE TABLE IF NOT EXISTS `tb_clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `email_cliente` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'email do cliente',
  `telefone_cliente` varchar(25) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Telefone do cliente',
  `contato_cliente` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Nome do contato com o cliente',
  `data_cadastro` date DEFAULT NULL COMMENT 'data do cadastro',
  `data_update` date DEFAULT NULL COMMENT 'data de atualização',
  `ativacao` int(11) DEFAULT '1' COMMENT '1: Ativado | 2: Desativado',
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`id_cliente`, `nome_cliente`, `email_cliente`, `telefone_cliente`, `contato_cliente`, `data_cadastro`, `data_update`, `ativacao`) VALUES
(1, 'Universo AGV - AssociaÃ§Ã£o GestÃ£o Veicular Universo', NULL, NULL, NULL, '2020-01-01', NULL, 1),
(2, 'Auto-Truck - AssociaÃ§Ã£o de AutimÃ³veis e VeÃ­culos Pesados', NULL, NULL, NULL, '2020-01-01', NULL, 1),
(3, 'APVS BRASIL - ASSOCIACAO PROTETORA VEICULAR E SERVICOS SOCIAIS', NULL, NULL, NULL, '2020-01-01', NULL, 1),
(4, 'NET CAR - NET CAR CLUBE DE BENEFICIOS', NULL, NULL, NULL, '2020-01-01', NULL, 1),
(5, 'PROAUTO - ASSOCIACAO PROTETORA DE VEICULOS AUTOMOTORES ', NULL, NULL, NULL, '2020-01-01', NULL, 1),
(6, 'SEJA UNNICA - ASSOCIAÃ‡ÃƒO DE BENEFICIOS UNNICA', NULL, NULL, NULL, '2020-01-01', NULL, 1),
(7, 'TECX PARK - GESTÃƒO DE MÃƒO OBRA T. S. T. LTDA', NULL, NULL, NULL, '2020-01-01', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cnh_registros`
--

DROP TABLE IF EXISTS `tb_cnh_registros`;
CREATE TABLE IF NOT EXISTS `tb_cnh_registros` (
  `id_cnh` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_cnh` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `dono_cnh` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `status_cnh` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `img_cnh1` int(11) DEFAULT NULL,
  `img_cnh2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cnh`),
  KEY `img_cnh1` (`img_cnh1`),
  KEY `img_cnh2` (`img_cnh2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_condutores`
--

DROP TABLE IF EXISTS `tb_condutores`;
CREATE TABLE IF NOT EXISTS `tb_condutores` (
  `id_condutor` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_evento` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `nome_condutor` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `civil_condutor` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `profissao_condutor` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cep_condutor` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `endereco_condutor` varchar(150) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `bairro_condutor` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cidade_condutor` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `estado_condutor` varchar(5) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `veiculo_proprio` int(11) DEFAULT NULL COMMENT '1: Sim | 2: Não',
  `qtd_veiculo_proprio` int(11) DEFAULT NULL COMMENT 'Quantidade de veículos próprios',
  `veiculo1_condutor` int(11) DEFAULT NULL,
  `veiculo2_condutor` int(11) DEFAULT NULL,
  `veiculo3_condutor` int(11) DEFAULT NULL,
  `vinculo_associado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cnh_condutor` int(11) DEFAULT NULL,
  `relato_condutor` varchar(1000) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Texto escrito',
  `documento_frente` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `documento_verso` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `declaracao1` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `declaracao2` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `declaracao3` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `perfil_salvo` int(11) DEFAULT '2' COMMENT '1: Sim | 2: Não',
  PRIMARY KEY (`id_condutor`),
  KEY `veiculo1_condutor` (`veiculo1_condutor`),
  KEY `veiculo2_condutor` (`veiculo2_condutor`),
  KEY `veiculo3_condutor` (`veiculo3_condutor`),
  KEY `cnh_condutor` (`cnh_condutor`),
  KEY `documento_frente` (`documento_frente`),
  KEY `documento_verso` (`documento_verso`),
  KEY `declaracao1` (`declaracao1`),
  KEY `declaracao2` (`declaracao2`),
  KEY `declaracao3` (`declaracao3`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_copom`
--

DROP TABLE IF EXISTS `tb_copom`;
CREATE TABLE IF NOT EXISTS `tb_copom` (
  `id_copom` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_copom` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `comunicado_copom` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `texto_divergencia` varchar(1000) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `foto1_copom` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto2_copom` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto3_copom` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto4_copom` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto5_copom` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto6_copom` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  PRIMARY KEY (`id_copom`),
  KEY `foto1_copom` (`foto1_copom`),
  KEY `foto2_copom` (`foto2_copom`),
  KEY `foto3_copom` (`foto3_copom`),
  KEY `foto4_copom` (`foto4_copom`),
  KEY `foto5_copom` (`foto5_copom`),
  KEY `foto6_copom` (`foto6_copom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_detran_estados`
--

DROP TABLE IF EXISTS `tb_detran_estados`;
CREATE TABLE IF NOT EXISTS `tb_detran_estados` (
  `id_detran` int(11) NOT NULL AUTO_INCREMENT,
  `estado_detran` varchar(3) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `vistoria_obrigatoria` int(11) DEFAULT NULL COMMENT '1: Sim | 2: Não',
  `ativacao` int(11) DEFAULT '1' COMMENT '1: Ativado | 2: Desativado',
  PRIMARY KEY (`id_detran`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_detran_estados`
--

INSERT INTO `tb_detran_estados` (`id_detran`, `estado_detran`, `vistoria_obrigatoria`, `ativacao`) VALUES
(1, 'SP', 1, 1),
(2, 'AC', NULL, 1),
(3, 'AL', NULL, 1),
(4, 'AP', NULL, 1),
(5, 'AM', NULL, 1),
(6, 'BA', NULL, 1),
(7, 'CE', NULL, 1),
(8, 'ES', NULL, 1),
(9, 'GO', NULL, 1),
(10, 'MA', NULL, 1),
(11, 'MT', NULL, 1),
(12, 'MS', NULL, 1),
(13, 'MG', NULL, 1),
(14, 'PA', NULL, 1),
(15, 'PB', NULL, 1),
(16, 'PR', NULL, 1),
(17, 'PE', NULL, 1),
(18, 'PI', NULL, 1),
(19, 'RJ', NULL, 1),
(20, 'RN', NULL, 1),
(21, 'RS', NULL, 1),
(22, 'RO', NULL, 1),
(23, 'RR', NULL, 1),
(24, 'SC', NULL, 1),
(25, 'SE', NULL, 1),
(26, 'TO', NULL, 1),
(27, 'DF', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_documento_veiculo`
--

DROP TABLE IF EXISTS `tb_documento_veiculo`;
CREATE TABLE IF NOT EXISTS `tb_documento_veiculo` (
  `id_documento` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_documento` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Protocolo do documento',
  `foto_frente_documento` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto_verso_documento` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `documento_preenchido` int(11) DEFAULT NULL COMMENT '1: Em Branco | 2: Preenchido',
  PRIMARY KEY (`id_documento`),
  KEY `foto_frente_documento` (`foto_frente_documento`),
  KEY `foto_verso_documento` (`foto_verso_documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_entrevistados`
--

DROP TABLE IF EXISTS `tb_entrevistados`;
CREATE TABLE IF NOT EXISTS `tb_entrevistados` (
  `id_entrevistado` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_entrevistados` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `tipo_entrevistado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT '1: testemunha | 2: sabedor',
  `testemunha_entrevistado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT '0: local | 1: convivio',
  `perfil_entrevistado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT '1: Associado | 2: condutor',
  `nome_entrevistado` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `relacionamento_entrevistado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Texto escrito sobre qual o relacionamento',
  `telefone_entrevistado` varchar(11) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cep_entrevistado` varchar(8) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `endereco_entrevistado` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `numero_end_entrevistado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `bairro_entrevistado` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cidade_entrevistado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `estado_entrevistado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `foto1_entrevistado` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto2_entrevistado` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto3_entrevistado` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto4_entrevistado` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto5_entrevistado` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto6_entrevistado` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `documento_entrevistado_frente` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `documento_entrevistado_verso` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `observacao_entrevistado` varchar(1000) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Texto escrito',
  `informacao_salva` varchar(20) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Se foi salvo',
  PRIMARY KEY (`id_entrevistado`),
  KEY `foto1_entrevistado` (`foto1_entrevistado`),
  KEY `foto2_entrevistado` (`foto2_entrevistado`),
  KEY `foto3_entrevistado` (`foto3_entrevistado`),
  KEY `foto4_entrevistado` (`foto4_entrevistado`),
  KEY `foto5_entrevistado` (`foto5_entrevistado`),
  KEY `foto6_entrevistado` (`foto6_entrevistado`),
  KEY `documento_entrevistado_frente` (`documento_entrevistado_frente`),
  KEY `documento_entrevistado_verso` (`documento_entrevistado_verso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_entrevistados_convivio`
--

DROP TABLE IF EXISTS `tb_entrevistados_convivio`;
CREATE TABLE IF NOT EXISTS `tb_entrevistados_convivio` (
  `id_sabedores` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_sabedores` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `representante_sabedor` varchar(2) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT '1: Associado | 2: Condutor',
  `total_sabedores` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'atualizar a cada nova inserção de sabedores do associado/condutor',
  `confirmacao1_sabedores` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Versão apresentada',
  `confirmacao2_sabedores` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'entorpecentes/embriagues',
  `confirmacao3_sabedores` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'troca de condutor',
  `confirmacao4_sabedores` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Velocidade informada',
  `confirmacao5_sabedores` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'veiculo conhecido/bom estado',
  `confirmacao6_sabedores` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'pernoite em garagem/via pública',
  `confirmacao7_sabedores` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'condutor/associado boa índole',
  `confirmacao8_sabedores` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'boa/má conduta do condutor/associado',
  `informacao_geral_sabedores` varchar(1000) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Texto Geral',
  `sabedores_salvo` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Sim | Null',
  PRIMARY KEY (`id_sabedores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_financeiro_veiculo`
--

DROP TABLE IF EXISTS `tb_financeiro_veiculo`;
CREATE TABLE IF NOT EXISTS `tb_financeiro_veiculo` (
  `id_financeiro` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_financeiro` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `instituicao_financeiro` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `total_parcelas_financeiro` int(11) DEFAULT NULL,
  `valor_parcela_financeiro` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `parcelas_pagas_financeiro` int(11) DEFAULT NULL,
  `situacao_financeiro` int(11) DEFAULT NULL,
  `parcelas_inadimplentes` int(11) DEFAULT '0',
  `foto_parcela1` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto_parcela2` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto_parcela3` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto_parcela4` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto_parcela5` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto_parcela6` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  PRIMARY KEY (`id_financeiro`),
  KEY `foto_parcela1` (`foto_parcela1`),
  KEY `foto_parcela2` (`foto_parcela2`),
  KEY `foto_parcela3` (`foto_parcela3`),
  KEY `foto_parcela4` (`foto_parcela4`),
  KEY `foto_parcela5` (`foto_parcela5`),
  KEY `foto_parcela6` (`foto_parcela6`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fotos`
--

DROP TABLE IF EXISTS `tb_fotos`;
CREATE TABLE IF NOT EXISTS `tb_fotos` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_foto` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `protocolo_foto` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `pasta_foto` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `nome_foto` varchar(200) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_fotos`
--

INSERT INTO `tb_fotos` (`id_foto`, `categoria_foto`, `protocolo_foto`, `pasta_foto`, `nome_foto`) VALUES
(1, 'default', NULL, '../', 'default.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_local_evento`
--

DROP TABLE IF EXISTS `tb_local_evento`;
CREATE TABLE IF NOT EXISTS `tb_local_evento` (
  `id_local_evento` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_local_evento` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `testemunha_entrevistado` int(11) DEFAULT NULL COMMENT '0: Local | 1: Convivio',
  `quantidade_entrevistados` int(11) DEFAULT NULL COMMENT 'Armazenar a quantidade de entrevistados no local',
  `fotos_local_evento` int(11) DEFAULT NULL COMMENT '1: Sim | 2: Não',
  `foto1_local_evento` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto2_local_evento` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto3_local_evento` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `confirmacao1_local` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Apenas: Sim | Não',
  `confirmacao2_local` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Apenas: Sim | Não',
  `confirmacao3_local` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Apenas: Sim | Não',
  `confirmacao4_local` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Apenas: Sim | Não',
  `confirmacao5_local` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Apenas: Sim | Não',
  `confirmacao6_local` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Apenas: Sim | Não',
  `local_evento_salvo` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Confirmação de Local salvo',
  PRIMARY KEY (`id_local_evento`),
  KEY `foto1_local_evento` (`foto1_local_evento`),
  KEY `foto2_local_evento` (`foto2_local_evento`),
  KEY `foto3_local_evento` (`foto3_local_evento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mensagens`
--

DROP TABLE IF EXISTS `tb_mensagens`;
CREATE TABLE IF NOT EXISTS `tb_mensagens` (
  `id_mensagem` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_relatorio` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `data_mensagem` varchar(25) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Data e hora da mensagem',
  `emissor_mensagem` int(11) DEFAULT NULL COMMENT 'Quem enviou a mensagem',
  `receptor_mensagem` int(11) DEFAULT NULL COMMENT 'Quem receberá a mensagem',
  `assunto_mensagem` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Assunto da mensagem',
  `conteudo_mensagem` varchar(500) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Conteúdo da mensagem',
  `status_mensagem` int(11) DEFAULT '0' COMMENT 'Status: 0=Não Lida | 1: Lida | 2: Respondida',
  `resposta_mensagem` varchar(500) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Resposta da mensagem',
  PRIMARY KEY (`id_mensagem`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_mensagens`
--

INSERT INTO `tb_mensagens` (`id_mensagem`, `protocolo_relatorio`, `data_mensagem`, `emissor_mensagem`, `receptor_mensagem`, `assunto_mensagem`, `conteudo_mensagem`, `status_mensagem`, `resposta_mensagem`) VALUES
(1, '1A2B3C', '2021-05-30 13:47:46', 1, 3, 'Nova SindicÃ¢ncia', '\r\n          VocÃª recebeu uma nova sindicÃ¢ncia, vÃ¡ atÃ© RelatÃ³rios para visualizar os detalhes\r\n        ', 0, NULL),
(2, '1A2B3C4D', '2021-05-30 13:53:57', 1, 3, 'Nova SindicÃ¢ncia', '\r\n          VocÃª recebeu uma nova sindicÃ¢ncia, vÃ¡ atÃ© RelatÃ³rios para visualizar os detalhes\r\n        ', 0, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_motorista_aplicativo`
--

DROP TABLE IF EXISTS `tb_motorista_aplicativo`;
CREATE TABLE IF NOT EXISTS `tb_motorista_aplicativo` (
  `id_motorista_aplicativo` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_motorista_aplicativo` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `descricao_comprovante` varchar(1000) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `foto1_motorista` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto2_motorista` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto3_motorista` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto4_motorista` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto5_motorista` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto6_motorista` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  PRIMARY KEY (`id_motorista_aplicativo`),
  KEY `foto1_motorista` (`foto1_motorista`),
  KEY `foto2_motorista` (`foto2_motorista`),
  KEY `foto3_motorista` (`foto3_motorista`),
  KEY `foto4_motorista` (`foto4_motorista`),
  KEY `foto5_motorista` (`foto5_motorista`),
  KEY `foto6_motorista` (`foto6_motorista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_natureza_evento`
--

DROP TABLE IF EXISTS `tb_natureza_evento`;
CREATE TABLE IF NOT EXISTS `tb_natureza_evento` (
  `id_natureza` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_natureza` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `ativacao` int(11) DEFAULT '1' COMMENT '1: Ativado | 2: Desativado',
  PRIMARY KEY (`id_natureza`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_natureza_evento`
--

INSERT INTO `tb_natureza_evento` (`id_natureza`, `descricao_natureza`, `ativacao`) VALUES
(1, 'Roubo', 1),
(2, 'Furto', 1),
(3, 'Colisão', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_permissoes`
--

DROP TABLE IF EXISTS `tb_permissoes`;
CREATE TABLE IF NOT EXISTS `tb_permissoes` (
  `id_permissao` int(11) NOT NULL AUTO_INCREMENT,
  `nivel_permissao` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  PRIMARY KEY (`id_permissao`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_permissoes`
--

INSERT INTO `tb_permissoes` (`id_permissao`, `nivel_permissao`) VALUES
(1, 'Master'),
(2, 'Sindicante'),
(3, 'Dev');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_policia_civil`
--

DROP TABLE IF EXISTS `tb_policia_civil`;
CREATE TABLE IF NOT EXISTS `tb_policia_civil` (
  `id_policia_civil` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_policia_civil` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `irregularidades_policia_civil` varchar(1000) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `foto1_policia_civil` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto2_policia_civil` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto3_policia_civil` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto4_policia_civil` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto5_policia_civil` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto6_policia_civil` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  PRIMARY KEY (`id_policia_civil`),
  KEY `foto1_policia_civil` (`foto1_policia_civil`),
  KEY `foto2_policia_civil` (`foto2_policia_civil`),
  KEY `foto3_policia_civil` (`foto3_policia_civil`),
  KEY `foto4_policia_civil` (`foto4_policia_civil`),
  KEY `foto5_policia_civil` (`foto5_policia_civil`),
  KEY `foto6_policia_civil` (`foto6_policia_civil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_policia_militar`
--

DROP TABLE IF EXISTS `tb_policia_militar`;
CREATE TABLE IF NOT EXISTS `tb_policia_militar` (
  `id_policia_militar` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_policia_militar` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `irregularidades_policia_militar` varchar(1000) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `foto1_policia_militar` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto2_policia_militar` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto3_policia_militar` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto4_policia_militar` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto5_policia_militar` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto6_policia_militar` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  PRIMARY KEY (`id_policia_militar`),
  KEY `foto1_policia_militar` (`foto1_policia_militar`),
  KEY `foto2_policia_militar` (`foto2_policia_militar`),
  KEY `foto3_policia_militar` (`foto3_policia_militar`),
  KEY `foto4_policia_militar` (`foto4_policia_militar`),
  KEY `foto5_policia_militar` (`foto5_policia_militar`),
  KEY `foto6_policia_militar` (`foto6_policia_militar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_procedentes`
--

DROP TABLE IF EXISTS `tb_procedentes`;
CREATE TABLE IF NOT EXISTS `tb_procedentes` (
  `id_procedente` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_procedente` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Protocolo do cadastro do procedente',
  `confirma_procedente` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Confirmação do procedente',
  `foto_procedente1` int(11) DEFAULT NULL,
  `foto_procedente2` int(11) DEFAULT NULL,
  `foto_procedente3` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_procedente`),
  KEY `foto_procedente1` (`foto_procedente1`),
  KEY `foto_procedente2` (`foto_procedente2`),
  KEY `foto_procedente3` (`foto_procedente3`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_proprietario_anterior`
--

DROP TABLE IF EXISTS `tb_proprietario_anterior`;
CREATE TABLE IF NOT EXISTS `tb_proprietario_anterior` (
  `id_proprietario` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_proprietario` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `nome_proprietario` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `vinculo_proprietario` varchar(30) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `documento_frente` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `documento_verso` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `declaracao1` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `declaracao2` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `declaracao3` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `observacoes_proprietario` varchar(1000) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  PRIMARY KEY (`id_proprietario`),
  KEY `documento_frente` (`documento_frente`),
  KEY `documento_verso` (`documento_verso`),
  KEY `declaracao1` (`declaracao1`),
  KEY `declaracao2` (`declaracao2`),
  KEY `declaracao3` (`declaracao3`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_proprietario_legal`
--

DROP TABLE IF EXISTS `tb_proprietario_legal`;
CREATE TABLE IF NOT EXISTS `tb_proprietario_legal` (
  `id_proprietario` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_proprietario` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Protocolo do proprietario legal',
  `nome_proprietario` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Nome do proprietario Legal',
  `vinculo_associado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Texto escrito o vínculo',
  `proprietario_anterior` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Nome do proprietario anterior',
  `observacao_proprietario` varchar(500) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Observações sobre o Proprietario Legal',
  `foto_declaracao_proprietario1` int(11) DEFAULT NULL COMMENT 'Id da foto da declaração do proprietariolegal',
  `foto_declaracao_proprietario2` int(11) DEFAULT NULL COMMENT 'Id da foto da declaração do proprietariolegal',
  `foto_declaracao_proprietario3` int(11) DEFAULT NULL COMMENT 'Id da foto da declaração do proprietariolegal',
  `foto_documento_proprietario_frente` int(11) DEFAULT NULL COMMENT 'Id da foto da frente do documento do proprietario',
  `foto_documento_proprietario_verso` int(11) DEFAULT NULL COMMENT 'Id da foto do verso do documento do proprietario',
  PRIMARY KEY (`id_proprietario`),
  KEY `foto_documento_proprietario_frente` (`foto_documento_proprietario_frente`),
  KEY `foto_documento_proprietario_verso` (`foto_documento_proprietario_verso`),
  KEY `foto_declaracao_proprietario1` (`foto_declaracao_proprietario1`),
  KEY `foto_declaracao_proprietario2` (`foto_declaracao_proprietario2`),
  KEY `foto_declaracao_proprietario3` (`foto_declaracao_proprietario3`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_registro_detran`
--

DROP TABLE IF EXISTS `tb_registro_detran`;
CREATE TABLE IF NOT EXISTS `tb_registro_detran` (
  `id_registro_detran` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_registro_detran` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `estado_registro_detran` int(11) DEFAULT NULL COMMENT 'FK tb_detran_estados',
  `multa_registro_detran` int(11) DEFAULT NULL COMMENT '1: Sim | 2: Não',
  `foto1_multa` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto2_multa` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto3_multa` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `restricoes_diversas` int(11) DEFAULT NULL COMMENT '1: Sim | 2: Não',
  `restricoes_financeiras` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Apenas o texto',
  `queixa_registro` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Apenas o texto',
  `outras_informacoes_registro` varchar(1000) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Texto descritivo das restrições',
  PRIMARY KEY (`id_registro_detran`),
  KEY `foto1_multa` (`foto1_multa`),
  KEY `foto2_multa` (`foto2_multa`),
  KEY `foto3_multa` (`foto3_multa`),
  KEY `estado_registro_detran` (`estado_registro_detran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_registro_mobilidade`
--

DROP TABLE IF EXISTS `tb_registro_mobilidade`;
CREATE TABLE IF NOT EXISTS `tb_registro_mobilidade` (
  `id_mobilidade` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_mobilidade` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `data_mobilidade` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `hora_mobilidade` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `trajeto_mobilidade` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `foto1_mobilidade` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto2_mobilidade` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto3_mobilidade` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto4_mobilidade` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto5_mobilidade` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto6_mobilidade` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  PRIMARY KEY (`id_mobilidade`),
  KEY `foto1_mobilidade` (`foto1_mobilidade`),
  KEY `foto2_mobilidade` (`foto2_mobilidade`),
  KEY `foto3_mobilidade` (`foto3_mobilidade`),
  KEY `foto4_mobilidade` (`foto4_mobilidade`),
  KEY `foto5_mobilidade` (`foto5_mobilidade`),
  KEY `foto6_mobilidade` (`foto6_mobilidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_relatorios`
--

DROP TABLE IF EXISTS `tb_relatorios`;
CREATE TABLE IF NOT EXISTS `tb_relatorios` (
  `id_relatorio` int(11) NOT NULL AUTO_INCREMENT,
  `horario_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `horario_update` timestamp NULL DEFAULT NULL,
  `solicitante_evento` int(11) DEFAULT NULL,
  `sindicante_evento` int(11) DEFAULT NULL,
  `protocolo_evento` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `natureza_evento` int(11) DEFAULT NULL,
  `cpf_associado` varchar(11) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `condutor_veiculo` int(11) DEFAULT NULL,
  `condutor_evento` int(11) DEFAULT NULL,
  `placa_veiculo_evento` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `data_evento` date DEFAULT NULL,
  `horario_evento` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cep_evento` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `endereco_evento` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `numero_evento` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `bairro_evento` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cidade_evento` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `uf_evento` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `caracteristicas_local_evento` int(11) DEFAULT NULL COMMENT 'FK tb_caracteristicas_tecnicas',
  `boletim_ocorrencia` int(11) DEFAULT NULL COMMENT 'FK tb_boletim_ocorrencia',
  `policia_civil` int(11) DEFAULT NULL COMMENT 'FK tb_policia_civil',
  `policia_militar` int(11) DEFAULT NULL COMMENT 'FK tb_policia_militar',
  `registro_copom` int(11) DEFAULT NULL COMMENT 'FK tb_copom',
  `registro_mobilidade` int(11) DEFAULT NULL COMMENT 'FK tb_registro_mobilidade',
  `registro_motorista_app` int(11) DEFAULT NULL COMMENT 'FK tb_motorista_aplicativo',
  `registro_local_evento` int(11) DEFAULT NULL COMMENT 'FK tb_local_evento',
  `status_relatorio` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `contexto_geral_relatorio` longtext COLLATE utf8_general_mysql500_ci,
  `dinamica_do_evento` longtext COLLATE utf8_general_mysql500_ci,
  `print_associado` int(11) DEFAULT NULL,
  `print_condutor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_relatorio`),
  KEY `solicitante_evento` (`solicitante_evento`),
  KEY `sindicante_evento` (`sindicante_evento`),
  KEY `natureza_evento` (`natureza_evento`),
  KEY `condutor_evento` (`condutor_evento`),
  KEY `caracteristicas_local_evento` (`caracteristicas_local_evento`),
  KEY `boletim_ocorrencia` (`boletim_ocorrencia`),
  KEY `policia_civil` (`policia_civil`),
  KEY `policia_militar` (`policia_militar`),
  KEY `registro_copom` (`registro_copom`),
  KEY `registro_mobilidade` (`registro_mobilidade`),
  KEY `registro_motorista_app` (`registro_motorista_app`),
  KEY `registro_local_evento` (`registro_local_evento`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_relatorios`
--

INSERT INTO `tb_relatorios` (`id_relatorio`, `horario_criacao`, `horario_update`, `solicitante_evento`, `sindicante_evento`, `protocolo_evento`, `natureza_evento`, `cpf_associado`, `condutor_veiculo`, `condutor_evento`, `placa_veiculo_evento`, `data_evento`, `horario_evento`, `cep_evento`, `endereco_evento`, `numero_evento`, `bairro_evento`, `cidade_evento`, `uf_evento`, `caracteristicas_local_evento`, `boletim_ocorrencia`, `policia_civil`, `policia_militar`, `registro_copom`, `registro_mobilidade`, `registro_motorista_app`, `registro_local_evento`, `status_relatorio`, `contexto_geral_relatorio`, `dinamica_do_evento`, `print_associado`, `print_condutor`) VALUES
(1, '2021-05-30 16:47:44', NULL, 7, 3, '1A2B3C', 1, '02949006590', 1, NULL, 'OUT8184', '2021-05-01', '13:34', '42711830', 'Rua Doutor Gerino de Souza Filho', '', 'Caixa D\'Ãgua', 'Lauro de Freitas', 'BA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Criado', NULL, NULL, NULL, NULL),
(2, '2021-05-30 16:53:55', NULL, 2, 3, '1A2B3C4D', 1, '34109989850', 1, NULL, 'ABC1234', '2021-05-03', '14:53', '03308030', 'Rua Coronel Joaquim AntÃ´nio Dias', '', 'Vila Azevedo', 'SÃ£o Paulo', 'SP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Criado', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_senhas_auth`
--

DROP TABLE IF EXISTS `tb_senhas_auth`;
CREATE TABLE IF NOT EXISTS `tb_senhas_auth` (
  `id_senha` int(11) NOT NULL AUTO_INCREMENT,
  `md5_senha` varchar(500) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cadastro` varchar(25) COLLATE utf8_general_mysql500_ci DEFAULT 'novo',
  PRIMARY KEY (`id_senha`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_senhas_auth`
--

INSERT INTO `tb_senhas_auth` (`id_senha`, `md5_senha`, `cadastro`) VALUES
(1, 'e56f428d0f546e1072faf5acd4918b03', 'novo'),
(2, 'd91e80ac3436230268d5d3426e4b752d', 'novo'),
(3, '564a3507bf79355f3b907b5d870bf53b', 'cadastrado'),
(4, '28426d0388bbbaae1d1ac22b5b71caad', 'cadastrado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sindicantes`
--

DROP TABLE IF EXISTS `tb_sindicantes`;
CREATE TABLE IF NOT EXISTS `tb_sindicantes` (
  `id_sindicante` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `ativacao` int(11) DEFAULT '2' COMMENT '1: Sim | 2: Não',
  PRIMARY KEY (`id_sindicante`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_sindicantes`
--

INSERT INTO `tb_sindicantes` (`id_sindicante`, `id_usuario`, `ativacao`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sistemas_anti_furto`
--

DROP TABLE IF EXISTS `tb_sistemas_anti_furto`;
CREATE TABLE IF NOT EXISTS `tb_sistemas_anti_furto` (
  `id_sistema` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_sistema` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `tipo_sistema` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT 'Apenas o tipo de sistema',
  `foto_comprovante1` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto_comprovante2` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `telemetria1` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `telemetria2` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `telemetria3` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  PRIMARY KEY (`id_sistema`),
  KEY `foto_comprovante1` (`foto_comprovante1`),
  KEY `foto_comprovante2` (`foto_comprovante2`),
  KEY `telemetria1` (`telemetria1`),
  KEY `telemetria2` (`telemetria2`),
  KEY `telemetria3` (`telemetria3`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sys_config`
--

DROP TABLE IF EXISTS `tb_sys_config`;
CREATE TABLE IF NOT EXISTS `tb_sys_config` (
  `id_sys_config` int(11) NOT NULL AUTO_INCREMENT,
  `modo_sys_config` int(11) DEFAULT '2' COMMENT '1: DEV | 2: Produção',
  `sys_mensagens` int(11) DEFAULT '2' COMMENT '1: Ativado | 2: Desativado',
  PRIMARY KEY (`id_sys_config`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_sys_config`
--

INSERT INTO `tb_sys_config` (`id_sys_config`, `modo_sys_config`, `sys_mensagens`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipos_chaves`
--

DROP TABLE IF EXISTS `tb_tipos_chaves`;
CREATE TABLE IF NOT EXISTS `tb_tipos_chaves` (
  `id_chave` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_chave` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `ativacao` int(11) DEFAULT '1' COMMENT '1: Ativado | 2: Desativado',
  PRIMARY KEY (`id_chave`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_tipos_chaves`
--

INSERT INTO `tb_tipos_chaves` (`id_chave`, `descricao_chave`, `ativacao`) VALUES
(1, 'De Uso', 1),
(2, 'Reserva', 1),
(3, 'Não Apresentou', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipos_civil`
--

DROP TABLE IF EXISTS `tb_tipos_civil`;
CREATE TABLE IF NOT EXISTS `tb_tipos_civil` (
  `id_civil` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_civil` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `ativacao` int(11) DEFAULT '1' COMMENT '1: Ativado | 1: Desativado',
  PRIMARY KEY (`id_civil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_tipos_civil`
--

INSERT INTO `tb_tipos_civil` (`id_civil`, `descricao_civil`, `ativacao`) VALUES
(1, 'Solteiro(a)', 1),
(2, 'Casado(a)', 1),
(3, 'Divorciado(a)', 1),
(4, 'ViÃºvo(a)', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipos_procedentes`
--

DROP TABLE IF EXISTS `tb_tipos_procedentes`;
CREATE TABLE IF NOT EXISTS `tb_tipos_procedentes` (
  `id_procedente` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_procedente` varchar(20) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `ativacao` int(11) DEFAULT '1' COMMENT '1: Ativado | 2: Desativado',
  PRIMARY KEY (`id_procedente`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_tipos_procedentes`
--

INSERT INTO `tb_tipos_procedentes` (`id_procedente`, `descricao_procedente`, `ativacao`) VALUES
(1, 'NÃ£o Apresentado', 1),
(2, 'Loja', 1),
(3, 'Particular', 1),
(4, 'LeilÃ£o', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_updates`
--

DROP TABLE IF EXISTS `tb_updates`;
CREATE TABLE IF NOT EXISTS `tb_updates` (
  `id_update` int(11) NOT NULL AUTO_INCREMENT,
  `data_update` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Data da atualização',
  `horario_update` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Horário do cadastro da atualização',
  `titulo_update` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Título da atualização',
  `texto_update` longtext COLLATE utf8_general_mysql500_ci COMMENT 'Texto descritivo da atualização',
  PRIMARY KEY (`id_update`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_updates`
--

INSERT INTO `tb_updates` (`id_update`, `data_update`, `horario_update`, `titulo_update`, `texto_update`) VALUES
(1, '2020-10-30 01:03', NULL, 'CriaÃ§Ã£o do relatÃ³rio v0.0.3a', '<p style=\"text-indent: 10%\">A criaÃ§Ã£o do relatÃ³rio foi feita de forma modular, permitindo ao sindicante preencher qualquer parte da solicitaÃ§Ã£o conforme a necessidade.</p>'),
(2, '2020-10-30 01:30', NULL, 'Cadastros no sistema v0.0.3a', '<p style=\"text-indent: 10%\">Pode-se cadastrar o sindicante dentro do sistema para que o mesmo tenha acesso ao uso do sistema atravÃ©s de seu e-mail e senha.</p>\r\n<p style=\"text-indent: 10%\"> Ã‰ necessÃ¡rio que, ao ser cadastrado, o sindicante acesse o sistema pela primeira vez, fazendo assim a ativaÃ§Ã£o do usuÃ¡rio e aplicaÃ§Ã£o da senha individual.</p> \r\n<p style=\"text-indent: 10%\">ApÃ³s ativaÃ§Ã£o do usuÃ¡rio, os relatÃ³rios poderÃ£o ser solicitados para o sindicante.</p>'),
(3, '2020-11-13 23:47', NULL, 'CriaÃ§Ã£o do relatÃ³rio v0.0.3a', '<p style=\"text-indent: 10%\">\r\nAo criar um relatÃ³rio, o sindicante receberÃ¡ um e-mail informando que ele tem uma nova requisiÃ§Ã£o (desde que o e-mail tenha sido cadastrado corretamente no sistema).\r\n</p>\r\n\r\n<p style=\"text-indent: 10%\">\r\nIntegrado um sistema de notificaÃ§Ã£o dentro da aplicaÃ§Ã£o. A cada vez que um novo relatÃ³rio for adicionado, serÃ¡ possÃ­vel perceber uma notificaÃ§Ã£o no topo da plataforma. Na tela inicial serÃ¡ mostrado ainda o resumo individual por sindicante (conforme cada sindicante efetue login), mostrando a quantidade de relatÃ³rios criados para o usuÃ¡rio, bem como quantos relatÃ³rios ele entregou.\r\n</p>'),
(4, '2020-11-20 19:51', NULL, 'Cadastros no sistema v0.0.4a', '<p style=\"text-indent: 10%\">\r\nNova interface ajustada para versÃ£o Mobile, seguindo proporÃ§Ãµes adequadas para visualizaÃ§Ã£o na tela de qualquer dispositivo.\r\n</p>\r\n\r\n<p style=\"text-indent: 10%\">\r\nCriado o cadastro de estados do DETRAN. Ã‰ necessÃ¡rio ao administrador do sistema, cadastrar e/ou ajustar se o estado obriga fazer a vistoria periÃ³dica (conforme solicitado em reuniÃ£o).\r\n</p>'),
(5, '2020-11-22 10:50', NULL, 'Preenchimento do relatÃ³rio v0.0.4b', '<p style=\"text-indent: 10%\">\r\nPreenchimento do relatÃ³rio em fase de testes usando dados de exemplo.\r\n<ul>\r\n<li>Cadastro de Perfis (associado e condutor caso sejam diferentes) mostrando ainda a localizaÃ§Ã£o</li>\r\n<li>Cadastro de pesquisas de convÃ­vio (associado e condutor caso sejam diferentes)</li>\r\n<li>\r\nCadastro de informaÃ§Ãµes de procedÃªncia do veÃ­culo\r\n<ul>\r\n<li>ProcedÃªncia</li>\r\n<li>ProprietÃ¡rio Legal</li>\r\n<li>Apontamentos no DETRAN</li>\r\n<li>Financiamento atrelado</li>\r\n<li>Sistema antifurto</li>\r\n</ul>\r\n</li>\r\n<li>\r\nInformaÃ§Ãµes sobre o evento\r\n<ul>\r\n<li>DinÃ¢mica do evento</li>\r\n<li>Relatos sobre o evento (associado e condutor se forem diferentes)</li>\r\n</ul>\r\n</li>\r\n<li>\r\nInformaÃ§Ãµes sobre o local (com localizaÃ§Ã£o)\r\n<ul>\r\n<li>CaracterÃ­sticas tÃ©cnicas</li>\r\n<li>Pesquisas realizadas</li>\r\n</ul>\r\n</li>\r\n<li>InformaÃ§Ãµes sobre Ã³rgÃ£os pÃºblicos</li>\r\n<li>Aplicativo de mobilidade urbana</li>\r\n<li>Contexto Geral</li>\r\n</ul>\r\n</p>'),
(6, '2020-11-27 23:26', NULL, 'Cadastros no sistema v0.0.4a', '<p style=\"text-indent: 10%\">\r\nCadastro de exemplo do relatÃ³rio finalizado, agora Ã© possÃ­vel entregar o relatÃ³rio (pelo sindicante) e ao entregar, consegue-se visualizar a entrega via navegador.\r\n</p>\r\n<p style=\"text-indent: 10%\">\r\nDurante a visualizaÃ§Ã£o no navegador, Ã© possÃ­vel ver detalhadamente as imagens e dados cadastrados no relatÃ³rio, bem como alterar alguns dos textos inseridos pelo sindicante.\r\n</p>\r\n\r\n<p style=\"text-indent: 10%\">\r\nImpressÃ£o em fase de testes e formataÃ§Ã£o para ficar de forma adequada, podendo ser impresso ou transformar em PDF durante a impressÃ£o.\r\n</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `email_usuario` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `nome_usuario` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `senha_usuario` int(11) DEFAULT NULL,
  `permissao_usuario` int(11) DEFAULT NULL,
  `usuario_ativo` int(11) DEFAULT NULL,
  `usuario_status` int(11) DEFAULT '2' COMMENT '1: Logado | 2: deslogado',
  PRIMARY KEY (`id_usuario`),
  KEY `senha_usuario` (`senha_usuario`),
  KEY `permissao_usuario` (`permissao_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `email_usuario`, `nome_usuario`, `senha_usuario`, `permissao_usuario`, `usuario_ativo`, `usuario_status`) VALUES
(1, 'hugo.n2y@gmail.com', 'Hugo Christian', 2, 3, 1, 1),
(2, 'admin@c2assessoria.com.br', 'Administrador', 3, 1, 1, 2),
(3, 'hugo.allnet@gmail.com', 'Sindicante Hugo', 4, 2, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_veiculos`
--

DROP TABLE IF EXISTS `tb_veiculos`;
CREATE TABLE IF NOT EXISTS `tb_veiculos` (
  `id_veiculo` int(11) NOT NULL AUTO_INCREMENT,
  `segurado_veiculo` varchar(11) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `proprietario_veiculo` int(11) DEFAULT NULL,
  `protocolo_evento` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `condutor_veiculo` int(11) DEFAULT NULL,
  `marca_veiculo` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `modelo_veiculo` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `placa_veiculo` varchar(8) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `protecao_veiculo` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT 'Sim' COMMENT 'Se há proteção para o veículo',
  `documento_veiculo` int(100) DEFAULT NULL COMMENT 'FK tb_documento_veiculo',
  `procedente_veiculo` int(50) DEFAULT NULL COMMENT 'FK tb_procedentes',
  `proprietario_anterior_veiculo` int(11) DEFAULT NULL COMMENT 'FK tb_proprietario_anterior',
  `chaves_apresentadas_veiculo` int(11) DEFAULT NULL,
  `sistema_anti_furto` int(11) DEFAULT NULL,
  `sistema_anti_furto_tipo` int(11) DEFAULT NULL,
  `vistoria_veiculo` int(11) DEFAULT NULL,
  `vistoria_realizada` int(11) DEFAULT NULL COMMENT 'FK tb_vistorias_realizadas',
  `registro_detran` int(11) DEFAULT NULL COMMENT 'FK tb_registro_detran',
  `financeiro_veiculo` int(11) DEFAULT NULL COMMENT 'FK tb_financeiro_veiculo',
  `foto_nota_fiscal_veiculo` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  PRIMARY KEY (`id_veiculo`),
  KEY `proprietario_veiculo` (`proprietario_veiculo`),
  KEY `vistoria_realizada` (`vistoria_realizada`),
  KEY `foto_nota_fiscal_veiculo` (`foto_nota_fiscal_veiculo`),
  KEY `financeiro_veiculo` (`financeiro_veiculo`),
  KEY `documento_veiculo` (`documento_veiculo`),
  KEY `procedente_veiculo` (`procedente_veiculo`),
  KEY `proprietario_anterior_veiculo` (`proprietario_anterior_veiculo`),
  KEY `registro_detran` (`registro_detran`),
  KEY `sistema_anti_furto` (`sistema_anti_furto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_veiculos`
--

INSERT INTO `tb_veiculos` (`id_veiculo`, `segurado_veiculo`, `proprietario_veiculo`, `protocolo_evento`, `condutor_veiculo`, `marca_veiculo`, `modelo_veiculo`, `placa_veiculo`, `protecao_veiculo`, `documento_veiculo`, `procedente_veiculo`, `proprietario_anterior_veiculo`, `chaves_apresentadas_veiculo`, `sistema_anti_furto`, `sistema_anti_furto_tipo`, `vistoria_veiculo`, `vistoria_realizada`, `registro_detran`, `financeiro_veiculo`, `foto_nota_fiscal_veiculo`) VALUES
(1, '02949006590', NULL, '1A2B3C', 1, 'HONDA', 'NXR 150 Bros', 'OUT8184', 'Sim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '34109989850', NULL, '1A2B3C4D', 1, 'VOLKSWAGEN', 'Gol 1.0 3p Gasolina', 'ABC1234', 'Sim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_velocidade_maxima`
--

DROP TABLE IF EXISTS `tb_velocidade_maxima`;
CREATE TABLE IF NOT EXISTS `tb_velocidade_maxima` (
  `id_velocidade` int(11) NOT NULL AUTO_INCREMENT,
  `texto_velocidade` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Texto escrito velocidade máxima',
  PRIMARY KEY (`id_velocidade`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_velocidade_maxima`
--

INSERT INTO `tb_velocidade_maxima` (`id_velocidade`, `texto_velocidade`) VALUES
(1, '10 KM/h'),
(2, '20 KM/h'),
(3, '30 KM/h'),
(4, '40 KM/h'),
(5, '50 KM/h'),
(6, '60 KM/h'),
(7, '70 KM/h'),
(8, '80 KM/h'),
(9, '90 KM/h'),
(10, '100 KM/h'),
(11, '110 KM/h'),
(12, '120 KM/h');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vinculos`
--

DROP TABLE IF EXISTS `tb_vinculos`;
CREATE TABLE IF NOT EXISTS `tb_vinculos` (
  `id_vinculo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_vinculo` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  PRIMARY KEY (`id_vinculo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_vinculos`
--

INSERT INTO `tb_vinculos` (`id_vinculo`, `descricao_vinculo`) VALUES
(1, 'Pai');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vistorias_realizadas`
--

DROP TABLE IF EXISTS `tb_vistorias_realizadas`;
CREATE TABLE IF NOT EXISTS `tb_vistorias_realizadas` (
  `id_vistoria` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_vistoria` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `vistoria_aprovada` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Sim | Não',
  `data_vistoria` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Apenas a Data da vistoria',
  `foto1_vistoria` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto2_vistoria` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  `foto3_vistoria` int(11) DEFAULT NULL COMMENT 'FK tb_fotos',
  PRIMARY KEY (`id_vistoria`),
  KEY `foto1_vistoria` (`foto1_vistoria`),
  KEY `foto2_vistoria` (`foto2_vistoria`),
  KEY `foto3_vistoria` (`foto3_vistoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_associados`
--
ALTER TABLE `tb_associados`
  ADD CONSTRAINT `tb_associados_ibfk_1` FOREIGN KEY (`seguradora_associado`) REFERENCES `tb_clientes` (`id_cliente`),
  ADD CONSTRAINT `tb_associados_ibfk_10` FOREIGN KEY (`declaracao2`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_associados_ibfk_11` FOREIGN KEY (`declaracao3`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_associados_ibfk_2` FOREIGN KEY (`veiculo1_associado`) REFERENCES `tb_veiculos` (`id_veiculo`),
  ADD CONSTRAINT `tb_associados_ibfk_3` FOREIGN KEY (`veiculo2_associado`) REFERENCES `tb_veiculos` (`id_veiculo`),
  ADD CONSTRAINT `tb_associados_ibfk_4` FOREIGN KEY (`veiculo3_associado`) REFERENCES `tb_veiculos` (`id_veiculo`),
  ADD CONSTRAINT `tb_associados_ibfk_5` FOREIGN KEY (`veiculo4_associado`) REFERENCES `tb_veiculos` (`id_veiculo`),
  ADD CONSTRAINT `tb_associados_ibfk_6` FOREIGN KEY (`cnh_associado`) REFERENCES `tb_cnh_registros` (`id_cnh`),
  ADD CONSTRAINT `tb_associados_ibfk_7` FOREIGN KEY (`documento_frente`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_associados_ibfk_8` FOREIGN KEY (`documento_verso`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_associados_ibfk_9` FOREIGN KEY (`declaracao1`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_boletim_ocorrencia`
--
ALTER TABLE `tb_boletim_ocorrencia`
  ADD CONSTRAINT `tb_boletim_ocorrencia_ibfk_1` FOREIGN KEY (`foto1_boletim`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_boletim_ocorrencia_ibfk_2` FOREIGN KEY (`foto2_boletim`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_boletim_ocorrencia_ibfk_3` FOREIGN KEY (`foto3_boletim`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_boletim_ocorrencia_ibfk_4` FOREIGN KEY (`foto4_boletim`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_boletim_ocorrencia_ibfk_5` FOREIGN KEY (`foto5_boletim`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_boletim_ocorrencia_ibfk_6` FOREIGN KEY (`foto6_boletim`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_caracteristicas_tecnicas`
--
ALTER TABLE `tb_caracteristicas_tecnicas`
  ADD CONSTRAINT `tb_caracteristicas_tecnicas_ibfk_1` FOREIGN KEY (`velocidade_maxima`) REFERENCES `tb_velocidade_maxima` (`id_velocidade`);

--
-- Limitadores para a tabela `tb_chaves_apresentadas`
--
ALTER TABLE `tb_chaves_apresentadas`
  ADD CONSTRAINT `tb_chaves_apresentadas_ibfk_1` FOREIGN KEY (`tipo_chave_apresentada`) REFERENCES `tb_tipos_chaves` (`id_chave`);

--
-- Limitadores para a tabela `tb_cnh_registros`
--
ALTER TABLE `tb_cnh_registros`
  ADD CONSTRAINT `tb_cnh_registros_ibfk_1` FOREIGN KEY (`img_cnh1`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_cnh_registros_ibfk_2` FOREIGN KEY (`img_cnh2`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_condutores`
--
ALTER TABLE `tb_condutores`
  ADD CONSTRAINT `tb_condutores_ibfk_1` FOREIGN KEY (`veiculo1_condutor`) REFERENCES `tb_veiculos` (`id_veiculo`),
  ADD CONSTRAINT `tb_condutores_ibfk_2` FOREIGN KEY (`veiculo2_condutor`) REFERENCES `tb_veiculos` (`id_veiculo`),
  ADD CONSTRAINT `tb_condutores_ibfk_3` FOREIGN KEY (`veiculo3_condutor`) REFERENCES `tb_veiculos` (`id_veiculo`),
  ADD CONSTRAINT `tb_condutores_ibfk_4` FOREIGN KEY (`cnh_condutor`) REFERENCES `tb_cnh_registros` (`id_cnh`),
  ADD CONSTRAINT `tb_condutores_ibfk_5` FOREIGN KEY (`documento_frente`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_condutores_ibfk_6` FOREIGN KEY (`documento_verso`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_condutores_ibfk_7` FOREIGN KEY (`declaracao1`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_condutores_ibfk_8` FOREIGN KEY (`declaracao2`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_condutores_ibfk_9` FOREIGN KEY (`declaracao3`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_copom`
--
ALTER TABLE `tb_copom`
  ADD CONSTRAINT `tb_copom_ibfk_1` FOREIGN KEY (`foto1_copom`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_copom_ibfk_2` FOREIGN KEY (`foto2_copom`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_copom_ibfk_3` FOREIGN KEY (`foto3_copom`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_copom_ibfk_4` FOREIGN KEY (`foto4_copom`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_copom_ibfk_5` FOREIGN KEY (`foto5_copom`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_copom_ibfk_6` FOREIGN KEY (`foto6_copom`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_documento_veiculo`
--
ALTER TABLE `tb_documento_veiculo`
  ADD CONSTRAINT `tb_documento_veiculo_ibfk_1` FOREIGN KEY (`foto_frente_documento`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_documento_veiculo_ibfk_2` FOREIGN KEY (`foto_verso_documento`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_entrevistados`
--
ALTER TABLE `tb_entrevistados`
  ADD CONSTRAINT `tb_entrevistados_ibfk_1` FOREIGN KEY (`foto1_entrevistado`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_entrevistados_ibfk_2` FOREIGN KEY (`foto2_entrevistado`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_entrevistados_ibfk_3` FOREIGN KEY (`foto3_entrevistado`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_entrevistados_ibfk_4` FOREIGN KEY (`foto4_entrevistado`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_entrevistados_ibfk_5` FOREIGN KEY (`foto5_entrevistado`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_entrevistados_ibfk_6` FOREIGN KEY (`foto6_entrevistado`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_entrevistados_ibfk_7` FOREIGN KEY (`documento_entrevistado_frente`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_entrevistados_ibfk_8` FOREIGN KEY (`documento_entrevistado_verso`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_financeiro_veiculo`
--
ALTER TABLE `tb_financeiro_veiculo`
  ADD CONSTRAINT `tb_financeiro_veiculo_ibfk_1` FOREIGN KEY (`foto_parcela1`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_financeiro_veiculo_ibfk_2` FOREIGN KEY (`foto_parcela2`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_financeiro_veiculo_ibfk_3` FOREIGN KEY (`foto_parcela3`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_financeiro_veiculo_ibfk_4` FOREIGN KEY (`foto_parcela4`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_financeiro_veiculo_ibfk_5` FOREIGN KEY (`foto_parcela5`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_financeiro_veiculo_ibfk_6` FOREIGN KEY (`foto_parcela6`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_local_evento`
--
ALTER TABLE `tb_local_evento`
  ADD CONSTRAINT `tb_local_evento_ibfk_1` FOREIGN KEY (`foto1_local_evento`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_local_evento_ibfk_2` FOREIGN KEY (`foto2_local_evento`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_local_evento_ibfk_3` FOREIGN KEY (`foto3_local_evento`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_motorista_aplicativo`
--
ALTER TABLE `tb_motorista_aplicativo`
  ADD CONSTRAINT `tb_motorista_aplicativo_ibfk_1` FOREIGN KEY (`foto1_motorista`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_motorista_aplicativo_ibfk_2` FOREIGN KEY (`foto2_motorista`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_motorista_aplicativo_ibfk_3` FOREIGN KEY (`foto3_motorista`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_motorista_aplicativo_ibfk_4` FOREIGN KEY (`foto4_motorista`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_motorista_aplicativo_ibfk_5` FOREIGN KEY (`foto5_motorista`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_motorista_aplicativo_ibfk_6` FOREIGN KEY (`foto6_motorista`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_policia_civil`
--
ALTER TABLE `tb_policia_civil`
  ADD CONSTRAINT `tb_policia_civil_ibfk_1` FOREIGN KEY (`foto1_policia_civil`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_policia_civil_ibfk_2` FOREIGN KEY (`foto2_policia_civil`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_policia_civil_ibfk_3` FOREIGN KEY (`foto3_policia_civil`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_policia_civil_ibfk_4` FOREIGN KEY (`foto4_policia_civil`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_policia_civil_ibfk_5` FOREIGN KEY (`foto5_policia_civil`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_policia_civil_ibfk_6` FOREIGN KEY (`foto6_policia_civil`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_policia_militar`
--
ALTER TABLE `tb_policia_militar`
  ADD CONSTRAINT `tb_policia_militar_ibfk_1` FOREIGN KEY (`foto1_policia_militar`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_policia_militar_ibfk_2` FOREIGN KEY (`foto2_policia_militar`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_policia_militar_ibfk_3` FOREIGN KEY (`foto3_policia_militar`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_policia_militar_ibfk_4` FOREIGN KEY (`foto4_policia_militar`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_policia_militar_ibfk_5` FOREIGN KEY (`foto5_policia_militar`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_policia_militar_ibfk_6` FOREIGN KEY (`foto6_policia_militar`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_procedentes`
--
ALTER TABLE `tb_procedentes`
  ADD CONSTRAINT `tb_procedentes_ibfk_1` FOREIGN KEY (`foto_procedente1`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_procedentes_ibfk_2` FOREIGN KEY (`foto_procedente2`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_procedentes_ibfk_3` FOREIGN KEY (`foto_procedente3`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_proprietario_anterior`
--
ALTER TABLE `tb_proprietario_anterior`
  ADD CONSTRAINT `tb_proprietario_anterior_ibfk_1` FOREIGN KEY (`documento_frente`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_proprietario_anterior_ibfk_2` FOREIGN KEY (`documento_verso`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_proprietario_anterior_ibfk_3` FOREIGN KEY (`declaracao1`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_proprietario_anterior_ibfk_4` FOREIGN KEY (`declaracao2`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_proprietario_anterior_ibfk_5` FOREIGN KEY (`declaracao3`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_proprietario_legal`
--
ALTER TABLE `tb_proprietario_legal`
  ADD CONSTRAINT `tb_proprietario_legal_ibfk_1` FOREIGN KEY (`foto_documento_proprietario_frente`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_proprietario_legal_ibfk_2` FOREIGN KEY (`foto_documento_proprietario_verso`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_proprietario_legal_ibfk_3` FOREIGN KEY (`foto_declaracao_proprietario1`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_proprietario_legal_ibfk_4` FOREIGN KEY (`foto_declaracao_proprietario2`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_proprietario_legal_ibfk_5` FOREIGN KEY (`foto_declaracao_proprietario3`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_registro_detran`
--
ALTER TABLE `tb_registro_detran`
  ADD CONSTRAINT `tb_registro_detran_ibfk_1` FOREIGN KEY (`estado_registro_detran`) REFERENCES `tb_detran_estados` (`id_detran`),
  ADD CONSTRAINT `tb_registro_detran_ibfk_2` FOREIGN KEY (`foto1_multa`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_registro_detran_ibfk_3` FOREIGN KEY (`foto2_multa`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_registro_detran_ibfk_4` FOREIGN KEY (`foto3_multa`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_registro_mobilidade`
--
ALTER TABLE `tb_registro_mobilidade`
  ADD CONSTRAINT `tb_registro_mobilidade_ibfk_1` FOREIGN KEY (`foto1_mobilidade`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_registro_mobilidade_ibfk_2` FOREIGN KEY (`foto2_mobilidade`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_registro_mobilidade_ibfk_3` FOREIGN KEY (`foto3_mobilidade`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_registro_mobilidade_ibfk_4` FOREIGN KEY (`foto4_mobilidade`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_registro_mobilidade_ibfk_5` FOREIGN KEY (`foto5_mobilidade`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_registro_mobilidade_ibfk_6` FOREIGN KEY (`foto6_mobilidade`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_relatorios`
--
ALTER TABLE `tb_relatorios`
  ADD CONSTRAINT `tb_relatorios_ibfk_1` FOREIGN KEY (`solicitante_evento`) REFERENCES `tb_clientes` (`id_cliente`),
  ADD CONSTRAINT `tb_relatorios_ibfk_10` FOREIGN KEY (`registro_mobilidade`) REFERENCES `tb_registro_mobilidade` (`id_mobilidade`),
  ADD CONSTRAINT `tb_relatorios_ibfk_11` FOREIGN KEY (`registro_motorista_app`) REFERENCES `tb_motorista_aplicativo` (`id_motorista_aplicativo`),
  ADD CONSTRAINT `tb_relatorios_ibfk_12` FOREIGN KEY (`registro_local_evento`) REFERENCES `tb_local_evento` (`id_local_evento`),
  ADD CONSTRAINT `tb_relatorios_ibfk_2` FOREIGN KEY (`sindicante_evento`) REFERENCES `tb_usuarios` (`id_usuario`),
  ADD CONSTRAINT `tb_relatorios_ibfk_3` FOREIGN KEY (`natureza_evento`) REFERENCES `tb_natureza_evento` (`id_natureza`),
  ADD CONSTRAINT `tb_relatorios_ibfk_4` FOREIGN KEY (`condutor_evento`) REFERENCES `tb_condutores` (`id_condutor`),
  ADD CONSTRAINT `tb_relatorios_ibfk_5` FOREIGN KEY (`caracteristicas_local_evento`) REFERENCES `tb_caracteristicas_tecnicas` (`id_caracteristica`),
  ADD CONSTRAINT `tb_relatorios_ibfk_6` FOREIGN KEY (`boletim_ocorrencia`) REFERENCES `tb_boletim_ocorrencia` (`id_boletim`),
  ADD CONSTRAINT `tb_relatorios_ibfk_7` FOREIGN KEY (`policia_civil`) REFERENCES `tb_policia_civil` (`id_policia_civil`),
  ADD CONSTRAINT `tb_relatorios_ibfk_8` FOREIGN KEY (`policia_militar`) REFERENCES `tb_policia_militar` (`id_policia_militar`),
  ADD CONSTRAINT `tb_relatorios_ibfk_9` FOREIGN KEY (`registro_copom`) REFERENCES `tb_copom` (`id_copom`);

--
-- Limitadores para a tabela `tb_sindicantes`
--
ALTER TABLE `tb_sindicantes`
  ADD CONSTRAINT `tb_sindicantes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`);

--
-- Limitadores para a tabela `tb_sistemas_anti_furto`
--
ALTER TABLE `tb_sistemas_anti_furto`
  ADD CONSTRAINT `tb_sistemas_anti_furto_ibfk_1` FOREIGN KEY (`foto_comprovante1`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_sistemas_anti_furto_ibfk_2` FOREIGN KEY (`foto_comprovante2`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_sistemas_anti_furto_ibfk_3` FOREIGN KEY (`telemetria1`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_sistemas_anti_furto_ibfk_4` FOREIGN KEY (`telemetria2`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_sistemas_anti_furto_ibfk_5` FOREIGN KEY (`telemetria3`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD CONSTRAINT `tb_usuarios_ibfk_1` FOREIGN KEY (`senha_usuario`) REFERENCES `tb_senhas_auth` (`id_senha`),
  ADD CONSTRAINT `tb_usuarios_ibfk_2` FOREIGN KEY (`permissao_usuario`) REFERENCES `tb_permissoes` (`id_permissao`);

--
-- Limitadores para a tabela `tb_veiculos`
--
ALTER TABLE `tb_veiculos`
  ADD CONSTRAINT `tb_veiculos_ibfk_1` FOREIGN KEY (`proprietario_veiculo`) REFERENCES `tb_proprietario_legal` (`id_proprietario`),
  ADD CONSTRAINT `tb_veiculos_ibfk_2` FOREIGN KEY (`vistoria_realizada`) REFERENCES `tb_vistorias_realizadas` (`id_vistoria`),
  ADD CONSTRAINT `tb_veiculos_ibfk_3` FOREIGN KEY (`foto_nota_fiscal_veiculo`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_veiculos_ibfk_4` FOREIGN KEY (`financeiro_veiculo`) REFERENCES `tb_financeiro_veiculo` (`id_financeiro`),
  ADD CONSTRAINT `tb_veiculos_ibfk_5` FOREIGN KEY (`documento_veiculo`) REFERENCES `tb_documento_veiculo` (`id_documento`),
  ADD CONSTRAINT `tb_veiculos_ibfk_6` FOREIGN KEY (`procedente_veiculo`) REFERENCES `tb_procedentes` (`id_procedente`),
  ADD CONSTRAINT `tb_veiculos_ibfk_7` FOREIGN KEY (`proprietario_anterior_veiculo`) REFERENCES `tb_proprietario_anterior` (`id_proprietario`),
  ADD CONSTRAINT `tb_veiculos_ibfk_8` FOREIGN KEY (`registro_detran`) REFERENCES `tb_registro_detran` (`id_registro_detran`),
  ADD CONSTRAINT `tb_veiculos_ibfk_9` FOREIGN KEY (`sistema_anti_furto`) REFERENCES `tb_sistemas_anti_furto` (`id_sistema`);

--
-- Limitadores para a tabela `tb_vistorias_realizadas`
--
ALTER TABLE `tb_vistorias_realizadas`
  ADD CONSTRAINT `tb_vistorias_realizadas_ibfk_1` FOREIGN KEY (`foto1_vistoria`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_vistorias_realizadas_ibfk_2` FOREIGN KEY (`foto2_vistoria`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_vistorias_realizadas_ibfk_3` FOREIGN KEY (`foto3_vistoria`) REFERENCES `tb_fotos` (`id_foto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
