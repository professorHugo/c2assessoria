-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Nov-2020 às 12:02
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c2assessoria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_app_mobilidade`
--

CREATE TABLE `tb_app_mobilidade` (
  `id_app` int(11) NOT NULL,
  `nome_app` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_app_mobilidade`
--

INSERT INTO `tb_app_mobilidade` (`id_app`, `nome_app`) VALUES
(1, 'Nenhum'),
(2, '99Taxis'),
(3, 'Uber');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_associados`
--

CREATE TABLE `tb_associados` (
  `id_associado` int(11) NOT NULL,
  `cpf_associado` bigint(20) DEFAULT NULL,
  `seguradora_associado` int(11) DEFAULT NULL,
  `nome_associado` varchar(200) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cep_associado` varchar(11) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `endereco_associado` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `bairro_associado` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cidade_associado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `estado_associado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `outros_veiculos` int(11) DEFAULT NULL COMMENT '1: Sim | 2: Não',
  `quantidade_veiculos` int(11) DEFAULT NULL COMMENT 'Quantidade de veículos extras',
  `civil_associado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `profissao_associado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `veiculo1_associado` int(11) DEFAULT NULL,
  `veiculo2_associado` int(11) DEFAULT NULL,
  `veiculo3_associado` int(11) DEFAULT NULL,
  `veiculo4_associado` int(11) DEFAULT NULL,
  `cnh_associado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_associados`
--

INSERT INTO `tb_associados` (`id_associado`, `cpf_associado`, `seguradora_associado`, `nome_associado`, `cep_associado`, `endereco_associado`, `bairro_associado`, `cidade_associado`, `estado_associado`, `outros_veiculos`, `quantidade_veiculos`, `civil_associado`, `profissao_associado`, `veiculo1_associado`, `veiculo2_associado`, `veiculo3_associado`, `veiculo4_associado`, `cnh_associado`) VALUES
(6, 34109989850, 1, 'Hugo Christian Pereira Gomes', '03977380', 'Rua Sargento EdÃ©sio Afonso de Carvalho, 128 - Casa 3', 'Conjunto Habitacional Marechal Mascarenhas de Morais', 'SÃ£o Paulo', 'SP', 1, 3, '1', 'Programador', 29, 63, 64, 65, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_caracteristicas_via`
--

CREATE TABLE `tb_caracteristicas_via` (
  `id_caracteristica` int(11) NOT NULL,
  `caracteristica_via` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_caracteristicas_via`
--

INSERT INTO `tb_caracteristicas_via` (`id_caracteristica`, `caracteristica_via`) VALUES
(1, 'Pavimentada'),
(2, 'Não Pavimentada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_chaves_apresentadas`
--

CREATE TABLE `tb_chaves_apresentadas` (
  `id_chave_apresentada` int(11) NOT NULL,
  `protocolo_chave_apresentada` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `tipo_chave_apresentada` int(11) DEFAULT NULL,
  `local_chave_apresentada` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `nome_chave_apresentada` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_classificacao_regiao`
--

CREATE TABLE `tb_classificacao_regiao` (
  `id_classificacao` int(11) NOT NULL,
  `classificacao_regiao` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_classificacao_regiao`
--

INSERT INTO `tb_classificacao_regiao` (`id_classificacao`, `classificacao_regiao`) VALUES
(1, 'Média/Alta'),
(2, 'Popular'),
(3, 'Comunidade');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `email_cliente` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'email do cliente',
  `telefone_cliente` varchar(25) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Telefone do cliente',
  `contato_cliente` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Nome do contato com o cliente',
  `data_cadastro` date DEFAULT NULL COMMENT 'data do cadastro',
  `data_update` date DEFAULT NULL COMMENT 'data de atualização',
  `ativacao` int(11) DEFAULT '1' COMMENT '1: Ativado | 2: Desativado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`id_cliente`, `nome_cliente`, `email_cliente`, `telefone_cliente`, `contato_cliente`, `data_cadastro`, `data_update`, `ativacao`) VALUES
(1, 'Universo AGV - AssociaÃ§Ã£o GestÃ£o Veicular Universo', NULL, NULL, NULL, NULL, NULL, 1),
(2, 'Auto-Truck - AssociaÃ§Ã£o de AutimÃ³veis e VeÃ­culos Pesados', NULL, NULL, NULL, NULL, NULL, 1),
(3, 'APVS BRASIL - ASSOCIACAO PROTETORA VEICULAR E SERVICOS SOCIAIS', NULL, NULL, NULL, NULL, NULL, 1),
(4, 'NET CAR - NET CAR CLUBE DE BENEFICIOS', NULL, NULL, NULL, NULL, NULL, 1),
(5, 'PROAUTO - ASSOCIACAO PROTETORA DE VEICULOS AUTOMOTORES ', NULL, NULL, NULL, NULL, NULL, 1),
(6, 'SEJA UNNICA - ASSOCIAÃ‡ÃƒO DE BENEFICIOS UNNICA', NULL, NULL, NULL, NULL, NULL, 1),
(7, 'TECX PARK - GESTÃƒO DE MÃƒO OBRA T. S. T. LTDA', NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cnh_registros`
--

CREATE TABLE `tb_cnh_registros` (
  `id_cnh` int(11) NOT NULL,
  `protocolo_cnh` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `dono_cnh` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `status_cnh` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `img_cnh1` int(11) DEFAULT NULL,
  `img_cnh2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_cnh_registros`
--

INSERT INTO `tb_cnh_registros` (`id_cnh`, `protocolo_cnh`, `dono_cnh`, `status_cnh`, `img_cnh1`, `img_cnh2`) VALUES
(1, '12345678910000', '34109989850', 'VÃ¡lida', 11, 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_condutores`
--

CREATE TABLE `tb_condutores` (
  `id_condutor` int(11) NOT NULL,
  `protocolo_evento` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `nome_condutor` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `civil_condutor` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `profissao_condutor` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cep_condutor` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `endereco_condutor` varchar(150) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `bairro_condutor` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cidade_condutor` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `estado_condutor` varchar(5) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `veiculo1_condutor` int(11) DEFAULT NULL,
  `veiculo2_condutor` int(11) DEFAULT NULL,
  `veiculo3_condutor` int(11) DEFAULT NULL,
  `vinculo_associado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cnh_condutor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_condutores`
--

INSERT INTO `tb_condutores` (`id_condutor`, `protocolo_evento`, `nome_condutor`, `civil_condutor`, `profissao_condutor`, `cep_condutor`, `endereco_condutor`, `bairro_condutor`, `cidade_condutor`, `estado_condutor`, `veiculo1_condutor`, `veiculo2_condutor`, `veiculo3_condutor`, `vinculo_associado`, `cnh_condutor`) VALUES
(6, '12345678910000', 'Ariosvaldo da Silva', NULL, NULL, '03977330', 'Rua Cabo Paulo Pereira da Silva, 25', 'Conjunto Habitacional Marechal Mascarenhas de Morais', 'SÃ£o Paulo', 'SP', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_declaracoes`
--

CREATE TABLE `tb_declaracoes` (
  `id_declaracao` int(11) NOT NULL,
  `entrevistado` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `protocolo_declaracoes` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `dia_fatos_declaracao` varchar(500) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `via_publica_declaracao` varchar(500) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `o_que_fazia_declaracao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_detran_estados`
--

CREATE TABLE `tb_detran_estados` (
  `id_detran` int(11) NOT NULL,
  `estado_detran` varchar(3) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `ativacao` int(11) DEFAULT '1' COMMENT '1: Ativado | 2: Desativado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_detran_estados`
--

INSERT INTO `tb_detran_estados` (`id_detran`, `estado_detran`, `ativacao`) VALUES
(1, 'SP', 1),
(2, 'RJ', 1),
(3, 'BA', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_entrevistados`
--

CREATE TABLE `tb_entrevistados` (
  `id_entrevistado` int(11) NOT NULL,
  `protocolo_entrevistados` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `tipo_entrevistado` int(11) DEFAULT NULL,
  `nome_entrevistado` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `sexo_entrevistado` varchar(9) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `relacionamento_entrevistado` int(11) DEFAULT NULL,
  `telefone_entrevistado` varchar(11) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cep_entrevistado` varchar(8) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `endereco_entrevistado` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `numero_end_entrevistado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `bairro_entrevistado` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cidade_entrevistado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `estado_entrevistado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `nacionalidade_entrevistado` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `declaracao_entrevistado` int(11) DEFAULT NULL,
  `foto_declaracao_entrevistado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_financeiro_veiculo`
--

CREATE TABLE `tb_financeiro_veiculo` (
  `id_financeiro` int(11) NOT NULL,
  `protocolo_financeiro` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `instituicao_financeiro` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `total_parcelas_financeiro` int(11) DEFAULT NULL,
  `valor_parcela_financeiro` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `parcelas_pagas_financeiro` int(11) DEFAULT NULL,
  `situacao_financeiro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fluxo_pedestres`
--

CREATE TABLE `tb_fluxo_pedestres` (
  `id_fluxo` int(11) NOT NULL,
  `fluxo_pedestres` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_fluxo_pedestres`
--

INSERT INTO `tb_fluxo_pedestres` (`id_fluxo`, `fluxo_pedestres`) VALUES
(1, 'Alto'),
(2, 'Médio'),
(3, 'Baixo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fotos`
--

CREATE TABLE `tb_fotos` (
  `id_foto` int(11) NOT NULL,
  `categoria_foto` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `protocolo_foto` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `pasta_foto` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `nome_foto` varchar(200) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_fotos`
--

INSERT INTO `tb_fotos` (`id_foto`, `categoria_foto`, `protocolo_foto`, `pasta_foto`, `nome_foto`) VALUES
(1, 'default', NULL, '../', 'default.png'),
(11, 'prontuario_associado1', '12345678910000', NULL, 'Prontuario_DETRAN_Associado1.png'),
(12, 'prontuario_associado2', '12345678910000', NULL, 'Prontuario_DETRAN_Associado2.png'),
(13, 'print_midia_social_condutor1', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fotos_procedentes`
--

CREATE TABLE `tb_fotos_procedentes` (
  `id_foto_procedente` int(11) NOT NULL,
  `placa_foto_procedente` varchar(15) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `tipo_procedente` int(11) DEFAULT NULL,
  `protocolo_foto_procedente` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `local_foto_procedente` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `nome_foto_procedente` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_foto_sistema_af`
--

CREATE TABLE `tb_foto_sistema_af` (
  `id_foto_sistema` int(11) NOT NULL,
  `protocolo_foto_sistema` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `tipo_sistema` int(11) DEFAULT NULL,
  `local_foto_sistema` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `nome_foto_sistema` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_indice_criminalidade`
--

CREATE TABLE `tb_indice_criminalidade` (
  `id_indice` int(11) NOT NULL,
  `indice_criminalidade` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_indice_criminalidade`
--

INSERT INTO `tb_indice_criminalidade` (`id_indice`, `indice_criminalidade`) VALUES
(1, 'Alto'),
(2, 'Médio'),
(3, 'Baixo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_local_evento`
--

CREATE TABLE `tb_local_evento` (
  `id_local` int(11) NOT NULL,
  `protocolo_local` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `tipo_local` int(11) DEFAULT NULL,
  `indice_local` int(11) DEFAULT NULL,
  `fluxo_local` int(11) DEFAULT NULL,
  `via_local` int(11) DEFAULT NULL,
  `classificacao_local` int(11) DEFAULT NULL,
  `permissao_local` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mensagens`
--

CREATE TABLE `tb_mensagens` (
  `id_mensagem` int(11) NOT NULL,
  `data_mensagem` varchar(25) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Data e hora da mensagem',
  `emissor_mensagem` int(11) DEFAULT NULL COMMENT 'Quem enviou a mensagem',
  `receptor_mensagem` int(11) DEFAULT NULL COMMENT 'Quem receberá a mensagem',
  `assunto_mensagem` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Assunto da mensagem',
  `conteudo_mensagem` varchar(500) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Conteúdo da mensagem',
  `status_mensagem` int(11) DEFAULT '0' COMMENT 'Status: 0=Não Lida | 1: Lida | 2: Respondida',
  `resposta_mensagem` varchar(500) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Resposta da mensagem'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_mensagens`
--

INSERT INTO `tb_mensagens` (`id_mensagem`, `data_mensagem`, `emissor_mensagem`, `receptor_mensagem`, `assunto_mensagem`, `conteudo_mensagem`, `status_mensagem`, `resposta_mensagem`) VALUES
(1, '2020-10-12 19:30', 1, 1, 'Novo relatorio recebido - Protocolo: 2020-1', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.', 0, 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mobilidade`
--

CREATE TABLE `tb_mobilidade` (
  `id_mobilidade` int(11) NOT NULL,
  `protocolo_mobilidade` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `placa_mobilidade` varchar(8) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `registros_mobilidade` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `convergencia_mobilidade` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `observacao_mobilidade` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `motorista_mobilidade` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `app1_mobilidade` int(11) DEFAULT NULL,
  `app2_mobilidade` int(11) DEFAULT NULL,
  `app3_mobilidade` int(11) DEFAULT NULL,
  `app4_mobilidade` int(11) DEFAULT NULL,
  `app5_mobilidade` int(11) DEFAULT NULL,
  `app6_mobilidade` int(11) DEFAULT NULL,
  `registro_mobilidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_natureza_evento`
--

CREATE TABLE `tb_natureza_evento` (
  `id_natureza` int(11) NOT NULL,
  `descricao_natureza` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `ativacao` int(11) DEFAULT '1' COMMENT '1: Ativado | 2: Desativado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_natureza_evento`
--

INSERT INTO `tb_natureza_evento` (`id_natureza`, `descricao_natureza`, `ativacao`) VALUES
(1, 'Roubo', 1),
(2, 'Furto', 1),
(3, 'Colisão', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_permissao_estacionar`
--

CREATE TABLE `tb_permissao_estacionar` (
  `id_permissao` int(11) NOT NULL,
  `permissao_estacionar` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_permissao_estacionar`
--

INSERT INTO `tb_permissao_estacionar` (`id_permissao`, `permissao_estacionar`) VALUES
(1, 'Sim'),
(2, 'Não'),
(3, 'Não se Aplica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_permissoes`
--

CREATE TABLE `tb_permissoes` (
  `id_permissao` int(11) NOT NULL,
  `nivel_permissao` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_permissoes`
--

INSERT INTO `tb_permissoes` (`id_permissao`, `nivel_permissao`) VALUES
(1, 'Master'),
(2, 'Sindicante'),
(3, 'Dev');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_proprietarios`
--

CREATE TABLE `tb_proprietarios` (
  `id_proprietario` int(11) NOT NULL,
  `protocolo_evento` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `nome_proprietario` varchar(200) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `vinculo_associado` varchar(200) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_proprietarios`
--

INSERT INTO `tb_proprietarios` (`id_proprietario`, `protocolo_evento`, `nome_proprietario`, `vinculo_associado`) VALUES
(3, '12345678910000', 'Hugo Christian Pereira Gomes', 'associado'),
(4, '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pr_legal`
--

CREATE TABLE `tb_pr_legal` (
  `id_pr_legal` int(11) NOT NULL,
  `protocolo_pr_legal` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `pm_resposta` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `pm_pr_legal` int(11) DEFAULT NULL,
  `pc_resposta` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `pc_pr_legal` int(11) DEFAULT NULL,
  `localizacao_resposta` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `localizacao_pr_legal` int(11) DEFAULT NULL,
  `boletim_resposta` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `boletim_autentico` int(11) DEFAULT NULL,
  `boletim_pr_legal` int(11) DEFAULT NULL,
  `resposta_sinesp` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `print_sinesp` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `sinesp_pr_legal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_registro_mobilidade`
--

CREATE TABLE `tb_registro_mobilidade` (
  `id_mobilidade` int(11) NOT NULL,
  `protocolo_mobilidade` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `placa_mobilidade` varchar(8) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `uso_dia_mobilidade` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `instalado_mobilidade` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `nome_terceiro` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `telefone_terceiro` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `irregularidades_mobilidade` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `convergencia_mobilidade` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `print_mobilidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_registro_telemetria`
--

CREATE TABLE `tb_registro_telemetria` (
  `id_telemetria` int(11) NOT NULL,
  `protocolo_telemetria` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `placa_telemetria` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `local_telemetria` int(11) DEFAULT NULL,
  `residencia_telemetria` int(11) DEFAULT NULL,
  `ap_irregular_telemetria` int(11) DEFAULT NULL,
  `print_telemetria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_relacionamento_entrevistado`
--

CREATE TABLE `tb_relacionamento_entrevistado` (
  `id_relacionamento` int(11) NOT NULL,
  `protocolo_relacionamento` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `nome_entrevistado` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `bom_estado_veiculo` int(11) DEFAULT NULL,
  `conhecimento_evento` int(11) DEFAULT NULL,
  `informacoes_divergentes` int(11) DEFAULT NULL,
  `pernoite_garagem` int(11) DEFAULT NULL,
  `vinculo_entrevistado` int(11) DEFAULT NULL,
  `texto_bom_estado` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `texto_conhecimento_evento` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `texto_informacoes_divergentes` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `texto_pernoite_garagem` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `texto_vinculo_entrevistado` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_relatorios`
--

CREATE TABLE `tb_relatorios` (
  `id_relatorio` int(11) NOT NULL,
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
  `local_evento` int(11) DEFAULT NULL,
  `status_relatorio` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `contexto_geral_relatorio` longtext COLLATE utf8_general_mysql500_ci,
  `print_associado` int(11) DEFAULT NULL,
  `print_condutor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_relatorios`
--

INSERT INTO `tb_relatorios` (`id_relatorio`, `horario_criacao`, `horario_update`, `solicitante_evento`, `sindicante_evento`, `protocolo_evento`, `natureza_evento`, `cpf_associado`, `condutor_veiculo`, `condutor_evento`, `placa_veiculo_evento`, `data_evento`, `horario_evento`, `cep_evento`, `endereco_evento`, `numero_evento`, `bairro_evento`, `cidade_evento`, `uf_evento`, `local_evento`, `status_relatorio`, `contexto_geral_relatorio`, `print_associado`, `print_condutor`) VALUES
(1, '2020-11-16 02:25:48', NULL, 1, 3, '12345678910000', 1, '34109989850', 2, NULL, 'AAA0000', '2020-11-01', '23:07', '03308030', 'Rua Coronel Joaquim AntÃ´nio Dias', '251', 'Vila Azevedo', 'SÃ£o Paulo', 'SP', NULL, 'Criado', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_senhas_auth`
--

CREATE TABLE `tb_senhas_auth` (
  `id_senha` int(11) NOT NULL,
  `md5_senha` varchar(500) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cadastro` varchar(25) COLLATE utf8_general_mysql500_ci DEFAULT 'novo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_senhas_auth`
--

INSERT INTO `tb_senhas_auth` (`id_senha`, `md5_senha`, `cadastro`) VALUES
(1, '3f160fa6d277dd628ee682835cf5ae65', 'novo'),
(2, '84ea00f78f804667f8dd18689757dd9c', 'cadastrado'),
(3, '8e12c95106a9fc631385db4fe9231d84', 'cadastrado'),
(4, '94a218aee519ac8cc0e7b265d4e7c0a0', 'cadastrado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sindicantes`
--

CREATE TABLE `tb_sindicantes` (
  `id_sindicante` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `ativacao` int(11) DEFAULT '2' COMMENT '1: Sim | 2: Não'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

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

CREATE TABLE `tb_sistemas_anti_furto` (
  `id_sistema` int(11) NOT NULL,
  `tipo_sistema` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `ativacao` int(11) DEFAULT '1' COMMENT '1: Ativado | 2: Desativado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_sistemas_anti_furto`
--

INSERT INTO `tb_sistemas_anti_furto` (`id_sistema`, `tipo_sistema`, `ativacao`) VALUES
(1, 'Alarme', 1),
(2, 'Rastreador', 1),
(3, 'Localizador', 1),
(4, 'Rastreador/Localizador', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sys_config`
--

CREATE TABLE `tb_sys_config` (
  `id_sys_config` int(11) NOT NULL,
  `modo_sys_config` int(11) DEFAULT '1' COMMENT '1: DEV | 2: Produção'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_sys_config`
--

INSERT INTO `tb_sys_config` (`id_sys_config`, `modo_sys_config`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipos_chaves`
--

CREATE TABLE `tb_tipos_chaves` (
  `id_chave` int(11) NOT NULL,
  `descricao_chave` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `ativacao` int(11) DEFAULT '1' COMMENT '1: Ativado | 2: Desativado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

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

CREATE TABLE `tb_tipos_civil` (
  `id_civil` int(11) NOT NULL,
  `descricao_civil` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `ativacao` int(11) DEFAULT '1' COMMENT '1: Ativado | 1: Desativado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_tipos_civil`
--

INSERT INTO `tb_tipos_civil` (`id_civil`, `descricao_civil`, `ativacao`) VALUES
(1, 'Casado(a)', 1),
(2, 'Solteiro(a)', 1),
(3, 'Teste', 1),
(4, 'Teste 2', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipos_procedentes`
--

CREATE TABLE `tb_tipos_procedentes` (
  `id_procedente` int(11) NOT NULL,
  `descricao_procedente` varchar(20) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `ativacao` int(11) DEFAULT '1' COMMENT '1: Ativado | 2: Desativado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_tipos_procedentes`
--

INSERT INTO `tb_tipos_procedentes` (`id_procedente`, `descricao_procedente`, `ativacao`) VALUES
(1, 'Loja', 1),
(2, 'Particular', 1),
(3, 'LeilÃ£o', 1),
(4, 'NÃ£o Apresentado', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipos_testemunhas`
--

CREATE TABLE `tb_tipos_testemunhas` (
  `id_tipo` int(11) NOT NULL,
  `nome_tipo` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_tipos_testemunhas`
--

INSERT INTO `tb_tipos_testemunhas` (`id_tipo`, `nome_tipo`) VALUES
(1, NULL),
(2, 'Comerciante');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_local`
--

CREATE TABLE `tb_tipo_local` (
  `id_tipo_local` int(11) NOT NULL,
  `tipo_local` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_tipo_local`
--

INSERT INTO `tb_tipo_local` (`id_tipo_local`, `tipo_local`) VALUES
(1, 'Residencial'),
(2, 'Comercial'),
(3, 'Mista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_vistorias`
--

CREATE TABLE `tb_tipo_vistorias` (
  `id_tipo_vistoria` int(11) NOT NULL,
  `nome_tipo_vistoria` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_tipo_vistorias`
--

INSERT INTO `tb_tipo_vistorias` (`id_tipo_vistoria`, `nome_tipo_vistoria`) VALUES
(1, 'Periódica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `email_usuario` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `nome_usuario` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `senha_usuario` int(11) DEFAULT NULL,
  `permissao_usuario` int(11) DEFAULT NULL,
  `usuario_ativo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `email_usuario`, `nome_usuario`, `senha_usuario`, `permissao_usuario`, `usuario_ativo`) VALUES
(1, 'hugo.n2y@gmail.com', 'Hugo Christian', 2, 3, NULL),
(2, 'admin@c2assessoria.com.br', 'Administrador', 3, 1, NULL),
(3, 'teste@c2assessoria.com.br', 'Teste de Sindicante 1', 4, 2, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_veiculos`
--

CREATE TABLE `tb_veiculos` (
  `id_veiculo` int(11) NOT NULL,
  `segurado_veiculo` varchar(11) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `proprietario_veiculo` int(11) DEFAULT NULL,
  `protocolo_evento` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `condutor_veiculo` int(11) DEFAULT NULL,
  `marca_veiculo` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `modelo_veiculo` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `placa_veiculo` varchar(8) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `protecao_veiculo` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'Se há proteção para o veículo',
  `dut_veiculo` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `procedente_veiculo` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `proprietario_anterior_veiculo` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `chaves_apresentadas_veiculo` int(11) DEFAULT NULL,
  `sistema_anti_furto` int(11) DEFAULT NULL,
  `sistema_anti_furto_tipo` int(11) DEFAULT NULL,
  `evento_multa_veiculo` int(11) DEFAULT NULL,
  `restricoes1_veiculo` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `restricoes2_veiculo` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `restricoes3_veiculo` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `queixa_evento_veiculo` int(11) DEFAULT NULL,
  `vistoria_veiculo` int(11) DEFAULT NULL,
  `vistoria_realizada` int(11) DEFAULT NULL,
  `financeiro_veiculo` int(11) DEFAULT NULL,
  `foto_nota_fiscal_veiculo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_veiculos`
--

INSERT INTO `tb_veiculos` (`id_veiculo`, `segurado_veiculo`, `proprietario_veiculo`, `protocolo_evento`, `condutor_veiculo`, `marca_veiculo`, `modelo_veiculo`, `placa_veiculo`, `protecao_veiculo`, `dut_veiculo`, `procedente_veiculo`, `proprietario_anterior_veiculo`, `chaves_apresentadas_veiculo`, `sistema_anti_furto`, `sistema_anti_furto_tipo`, `evento_multa_veiculo`, `restricoes1_veiculo`, `restricoes2_veiculo`, `restricoes3_veiculo`, `queixa_evento_veiculo`, `vistoria_veiculo`, `vistoria_realizada`, `financeiro_veiculo`, `foto_nota_fiscal_veiculo`) VALUES
(29, '34109989850', NULL, '12345678910000', 2, 'Volkswagen', 'Gol 1.0 3p Gasolina', 'AAA0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, '34109989850', 3, '12345678910000', NULL, 'VW', 'GOL', 'AAA1111', 'NÃ£o', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, '34109989850', 3, '12345678910000', NULL, 'FIAT', 'PALIO', 'AAA2222', 'NÃ£o', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, '34109989850', 3, '12345678910000', NULL, 'FORD', 'KA', 'AAA3333', 'NÃ£o', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vinculos`
--

CREATE TABLE `tb_vinculos` (
  `id_vinculo` int(11) NOT NULL,
  `descricao_vinculo` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_vinculos`
--

INSERT INTO `tb_vinculos` (`id_vinculo`, `descricao_vinculo`) VALUES
(1, 'Pai');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_app_mobilidade`
--
ALTER TABLE `tb_app_mobilidade`
  ADD PRIMARY KEY (`id_app`);

--
-- Indexes for table `tb_associados`
--
ALTER TABLE `tb_associados`
  ADD PRIMARY KEY (`id_associado`),
  ADD KEY `seguradora_associado` (`seguradora_associado`),
  ADD KEY `veiculo1_associado` (`veiculo1_associado`),
  ADD KEY `veiculo2_associado` (`veiculo2_associado`),
  ADD KEY `veiculo3_associado` (`veiculo3_associado`),
  ADD KEY `veiculo4_associado` (`veiculo4_associado`),
  ADD KEY `tb_associados_ibfk_6` (`cnh_associado`);

--
-- Indexes for table `tb_caracteristicas_via`
--
ALTER TABLE `tb_caracteristicas_via`
  ADD PRIMARY KEY (`id_caracteristica`);

--
-- Indexes for table `tb_chaves_apresentadas`
--
ALTER TABLE `tb_chaves_apresentadas`
  ADD PRIMARY KEY (`id_chave_apresentada`),
  ADD KEY `tipo_chave_apresentada` (`tipo_chave_apresentada`);

--
-- Indexes for table `tb_classificacao_regiao`
--
ALTER TABLE `tb_classificacao_regiao`
  ADD PRIMARY KEY (`id_classificacao`);

--
-- Indexes for table `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `tb_cnh_registros`
--
ALTER TABLE `tb_cnh_registros`
  ADD PRIMARY KEY (`id_cnh`),
  ADD KEY `img_cnh1` (`img_cnh1`),
  ADD KEY `img_cnh2` (`img_cnh2`);

--
-- Indexes for table `tb_condutores`
--
ALTER TABLE `tb_condutores`
  ADD PRIMARY KEY (`id_condutor`),
  ADD KEY `veiculo1_condutor` (`veiculo1_condutor`),
  ADD KEY `veiculo2_condutor` (`veiculo2_condutor`),
  ADD KEY `veiculo3_condutor` (`veiculo3_condutor`),
  ADD KEY `cnh_condutor` (`cnh_condutor`);

--
-- Indexes for table `tb_declaracoes`
--
ALTER TABLE `tb_declaracoes`
  ADD PRIMARY KEY (`id_declaracao`),
  ADD KEY `o_que_fazia_declaracao` (`o_que_fazia_declaracao`);

--
-- Indexes for table `tb_detran_estados`
--
ALTER TABLE `tb_detran_estados`
  ADD PRIMARY KEY (`id_detran`);

--
-- Indexes for table `tb_entrevistados`
--
ALTER TABLE `tb_entrevistados`
  ADD PRIMARY KEY (`id_entrevistado`),
  ADD KEY `relacionamento_entrevistado` (`relacionamento_entrevistado`),
  ADD KEY `declaracao_entrevistado` (`declaracao_entrevistado`),
  ADD KEY `foto_declaracao_entrevistado` (`foto_declaracao_entrevistado`);

--
-- Indexes for table `tb_financeiro_veiculo`
--
ALTER TABLE `tb_financeiro_veiculo`
  ADD PRIMARY KEY (`id_financeiro`);

--
-- Indexes for table `tb_fluxo_pedestres`
--
ALTER TABLE `tb_fluxo_pedestres`
  ADD PRIMARY KEY (`id_fluxo`);

--
-- Indexes for table `tb_fotos`
--
ALTER TABLE `tb_fotos`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `tb_fotos_procedentes`
--
ALTER TABLE `tb_fotos_procedentes`
  ADD PRIMARY KEY (`id_foto_procedente`),
  ADD KEY `tipo_procedente` (`tipo_procedente`);

--
-- Indexes for table `tb_foto_sistema_af`
--
ALTER TABLE `tb_foto_sistema_af`
  ADD PRIMARY KEY (`id_foto_sistema`),
  ADD KEY `tipo_sistema` (`tipo_sistema`);

--
-- Indexes for table `tb_indice_criminalidade`
--
ALTER TABLE `tb_indice_criminalidade`
  ADD PRIMARY KEY (`id_indice`);

--
-- Indexes for table `tb_local_evento`
--
ALTER TABLE `tb_local_evento`
  ADD PRIMARY KEY (`id_local`),
  ADD KEY `tipo_local` (`tipo_local`),
  ADD KEY `indice_local` (`indice_local`),
  ADD KEY `fluxo_local` (`fluxo_local`),
  ADD KEY `via_local` (`via_local`),
  ADD KEY `classificacao_local` (`classificacao_local`),
  ADD KEY `permissao_local` (`permissao_local`);

--
-- Indexes for table `tb_mensagens`
--
ALTER TABLE `tb_mensagens`
  ADD PRIMARY KEY (`id_mensagem`);

--
-- Indexes for table `tb_mobilidade`
--
ALTER TABLE `tb_mobilidade`
  ADD PRIMARY KEY (`id_mobilidade`),
  ADD KEY `registro_mobilidade` (`registro_mobilidade`),
  ADD KEY `app1_mobilidade` (`app1_mobilidade`),
  ADD KEY `app2_mobilidade` (`app2_mobilidade`),
  ADD KEY `app3_mobilidade` (`app3_mobilidade`),
  ADD KEY `app4_mobilidade` (`app4_mobilidade`),
  ADD KEY `app5_mobilidade` (`app5_mobilidade`),
  ADD KEY `app6_mobilidade` (`app6_mobilidade`);

--
-- Indexes for table `tb_natureza_evento`
--
ALTER TABLE `tb_natureza_evento`
  ADD PRIMARY KEY (`id_natureza`);

--
-- Indexes for table `tb_permissao_estacionar`
--
ALTER TABLE `tb_permissao_estacionar`
  ADD PRIMARY KEY (`id_permissao`);

--
-- Indexes for table `tb_permissoes`
--
ALTER TABLE `tb_permissoes`
  ADD PRIMARY KEY (`id_permissao`);

--
-- Indexes for table `tb_proprietarios`
--
ALTER TABLE `tb_proprietarios`
  ADD PRIMARY KEY (`id_proprietario`);

--
-- Indexes for table `tb_pr_legal`
--
ALTER TABLE `tb_pr_legal`
  ADD PRIMARY KEY (`id_pr_legal`),
  ADD KEY `pm_pr_legal` (`pm_pr_legal`),
  ADD KEY `pc_pr_legal` (`pc_pr_legal`),
  ADD KEY `localizacao_pr_legal` (`localizacao_pr_legal`),
  ADD KEY `boletim_pr_legal` (`boletim_pr_legal`),
  ADD KEY `sinesp_pr_legal` (`sinesp_pr_legal`);

--
-- Indexes for table `tb_registro_mobilidade`
--
ALTER TABLE `tb_registro_mobilidade`
  ADD PRIMARY KEY (`id_mobilidade`),
  ADD KEY `print_mobilidade` (`print_mobilidade`);

--
-- Indexes for table `tb_registro_telemetria`
--
ALTER TABLE `tb_registro_telemetria`
  ADD PRIMARY KEY (`id_telemetria`),
  ADD KEY `print_telemetria` (`print_telemetria`);

--
-- Indexes for table `tb_relacionamento_entrevistado`
--
ALTER TABLE `tb_relacionamento_entrevistado`
  ADD PRIMARY KEY (`id_relacionamento`);

--
-- Indexes for table `tb_relatorios`
--
ALTER TABLE `tb_relatorios`
  ADD PRIMARY KEY (`id_relatorio`),
  ADD KEY `solicitante_evento` (`solicitante_evento`),
  ADD KEY `natureza_evento` (`natureza_evento`),
  ADD KEY `condutor_evento` (`condutor_evento`),
  ADD KEY `local_evento` (`local_evento`),
  ADD KEY `tb_relatorios_ibfk_2` (`sindicante_evento`);

--
-- Indexes for table `tb_senhas_auth`
--
ALTER TABLE `tb_senhas_auth`
  ADD PRIMARY KEY (`id_senha`);

--
-- Indexes for table `tb_sindicantes`
--
ALTER TABLE `tb_sindicantes`
  ADD PRIMARY KEY (`id_sindicante`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `tb_sistemas_anti_furto`
--
ALTER TABLE `tb_sistemas_anti_furto`
  ADD PRIMARY KEY (`id_sistema`);

--
-- Indexes for table `tb_sys_config`
--
ALTER TABLE `tb_sys_config`
  ADD PRIMARY KEY (`id_sys_config`);

--
-- Indexes for table `tb_tipos_chaves`
--
ALTER TABLE `tb_tipos_chaves`
  ADD PRIMARY KEY (`id_chave`);

--
-- Indexes for table `tb_tipos_civil`
--
ALTER TABLE `tb_tipos_civil`
  ADD PRIMARY KEY (`id_civil`);

--
-- Indexes for table `tb_tipos_procedentes`
--
ALTER TABLE `tb_tipos_procedentes`
  ADD PRIMARY KEY (`id_procedente`);

--
-- Indexes for table `tb_tipos_testemunhas`
--
ALTER TABLE `tb_tipos_testemunhas`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indexes for table `tb_tipo_local`
--
ALTER TABLE `tb_tipo_local`
  ADD PRIMARY KEY (`id_tipo_local`);

--
-- Indexes for table `tb_tipo_vistorias`
--
ALTER TABLE `tb_tipo_vistorias`
  ADD PRIMARY KEY (`id_tipo_vistoria`);

--
-- Indexes for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `senha_usuario` (`senha_usuario`),
  ADD KEY `permissao_usuario` (`permissao_usuario`);

--
-- Indexes for table `tb_veiculos`
--
ALTER TABLE `tb_veiculos`
  ADD PRIMARY KEY (`id_veiculo`),
  ADD KEY `proprietario_veiculo` (`proprietario_veiculo`),
  ADD KEY `vistoria_veiculo` (`vistoria_veiculo`),
  ADD KEY `vistoria_realizada` (`vistoria_realizada`),
  ADD KEY `foto_nota_fiscal_veiculo` (`foto_nota_fiscal_veiculo`),
  ADD KEY `financeiro_veiculo` (`financeiro_veiculo`);

--
-- Indexes for table `tb_vinculos`
--
ALTER TABLE `tb_vinculos`
  ADD PRIMARY KEY (`id_vinculo`);

--
-- Indexes for table `tb_vistorias_realizadas`
--
ALTER TABLE `tb_vistorias_realizadas`
  ADD PRIMARY KEY (`id_vistoria`),
  ADD KEY `arquivo_vistoria` (`arquivo_vistoria`),
  ADD KEY `tipo_vistoria` (`tipo_vistoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_app_mobilidade`
--
ALTER TABLE `tb_app_mobilidade`
  MODIFY `id_app` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_associados`
--
ALTER TABLE `tb_associados`
  MODIFY `id_associado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_caracteristicas_via`
--
ALTER TABLE `tb_caracteristicas_via`
  MODIFY `id_caracteristica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_chaves_apresentadas`
--
ALTER TABLE `tb_chaves_apresentadas`
  MODIFY `id_chave_apresentada` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_classificacao_regiao`
--
ALTER TABLE `tb_classificacao_regiao`
  MODIFY `id_classificacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_cnh_registros`
--
ALTER TABLE `tb_cnh_registros`
  MODIFY `id_cnh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_condutores`
--
ALTER TABLE `tb_condutores`
  MODIFY `id_condutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_declaracoes`
--
ALTER TABLE `tb_declaracoes`
  MODIFY `id_declaracao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_detran_estados`
--
ALTER TABLE `tb_detran_estados`
  MODIFY `id_detran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_entrevistados`
--
ALTER TABLE `tb_entrevistados`
  MODIFY `id_entrevistado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_financeiro_veiculo`
--
ALTER TABLE `tb_financeiro_veiculo`
  MODIFY `id_financeiro` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_fluxo_pedestres`
--
ALTER TABLE `tb_fluxo_pedestres`
  MODIFY `id_fluxo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_fotos`
--
ALTER TABLE `tb_fotos`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_fotos_procedentes`
--
ALTER TABLE `tb_fotos_procedentes`
  MODIFY `id_foto_procedente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_foto_sistema_af`
--
ALTER TABLE `tb_foto_sistema_af`
  MODIFY `id_foto_sistema` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_indice_criminalidade`
--
ALTER TABLE `tb_indice_criminalidade`
  MODIFY `id_indice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_local_evento`
--
ALTER TABLE `tb_local_evento`
  MODIFY `id_local` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_mensagens`
--
ALTER TABLE `tb_mensagens`
  MODIFY `id_mensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_mobilidade`
--
ALTER TABLE `tb_mobilidade`
  MODIFY `id_mobilidade` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_natureza_evento`
--
ALTER TABLE `tb_natureza_evento`
  MODIFY `id_natureza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_permissao_estacionar`
--
ALTER TABLE `tb_permissao_estacionar`
  MODIFY `id_permissao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_permissoes`
--
ALTER TABLE `tb_permissoes`
  MODIFY `id_permissao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_proprietarios`
--
ALTER TABLE `tb_proprietarios`
  MODIFY `id_proprietario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_pr_legal`
--
ALTER TABLE `tb_pr_legal`
  MODIFY `id_pr_legal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_registro_mobilidade`
--
ALTER TABLE `tb_registro_mobilidade`
  MODIFY `id_mobilidade` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_registro_telemetria`
--
ALTER TABLE `tb_registro_telemetria`
  MODIFY `id_telemetria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_relacionamento_entrevistado`
--
ALTER TABLE `tb_relacionamento_entrevistado`
  MODIFY `id_relacionamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_relatorios`
--
ALTER TABLE `tb_relatorios`
  MODIFY `id_relatorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_senhas_auth`
--
ALTER TABLE `tb_senhas_auth`
  MODIFY `id_senha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_sindicantes`
--
ALTER TABLE `tb_sindicantes`
  MODIFY `id_sindicante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_sistemas_anti_furto`
--
ALTER TABLE `tb_sistemas_anti_furto`
  MODIFY `id_sistema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_sys_config`
--
ALTER TABLE `tb_sys_config`
  MODIFY `id_sys_config` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_tipos_chaves`
--
ALTER TABLE `tb_tipos_chaves`
  MODIFY `id_chave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_tipos_civil`
--
ALTER TABLE `tb_tipos_civil`
  MODIFY `id_civil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_tipos_procedentes`
--
ALTER TABLE `tb_tipos_procedentes`
  MODIFY `id_procedente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_tipos_testemunhas`
--
ALTER TABLE `tb_tipos_testemunhas`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_tipo_local`
--
ALTER TABLE `tb_tipo_local`
  MODIFY `id_tipo_local` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_tipo_vistorias`
--
ALTER TABLE `tb_tipo_vistorias`
  MODIFY `id_tipo_vistoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_veiculos`
--
ALTER TABLE `tb_veiculos`
  MODIFY `id_veiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `tb_vinculos`
--
ALTER TABLE `tb_vinculos`
  MODIFY `id_vinculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_vistorias_realizadas`
--
ALTER TABLE `tb_vistorias_realizadas`
  MODIFY `id_vistoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_associados`
--
ALTER TABLE `tb_associados`
  ADD CONSTRAINT `tb_associados_ibfk_1` FOREIGN KEY (`seguradora_associado`) REFERENCES `tb_clientes` (`id_cliente`),
  ADD CONSTRAINT `tb_associados_ibfk_2` FOREIGN KEY (`veiculo1_associado`) REFERENCES `tb_veiculos` (`id_veiculo`),
  ADD CONSTRAINT `tb_associados_ibfk_3` FOREIGN KEY (`veiculo2_associado`) REFERENCES `tb_veiculos` (`id_veiculo`),
  ADD CONSTRAINT `tb_associados_ibfk_4` FOREIGN KEY (`veiculo3_associado`) REFERENCES `tb_veiculos` (`id_veiculo`),
  ADD CONSTRAINT `tb_associados_ibfk_5` FOREIGN KEY (`veiculo4_associado`) REFERENCES `tb_veiculos` (`id_veiculo`),
  ADD CONSTRAINT `tb_associados_ibfk_6` FOREIGN KEY (`cnh_associado`) REFERENCES `tb_cnh_registros` (`id_cnh`);

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
  ADD CONSTRAINT `tb_condutores_ibfk_4` FOREIGN KEY (`cnh_condutor`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_declaracoes`
--
ALTER TABLE `tb_declaracoes`
  ADD CONSTRAINT `tb_declaracoes_ibfk_1` FOREIGN KEY (`o_que_fazia_declaracao`) REFERENCES `tb_tipos_testemunhas` (`id_tipo`);

--
-- Limitadores para a tabela `tb_entrevistados`
--
ALTER TABLE `tb_entrevistados`
  ADD CONSTRAINT `tb_entrevistados_ibfk_1` FOREIGN KEY (`relacionamento_entrevistado`) REFERENCES `tb_relacionamento_entrevistado` (`id_relacionamento`),
  ADD CONSTRAINT `tb_entrevistados_ibfk_2` FOREIGN KEY (`declaracao_entrevistado`) REFERENCES `tb_declaracoes` (`id_declaracao`),
  ADD CONSTRAINT `tb_entrevistados_ibfk_3` FOREIGN KEY (`foto_declaracao_entrevistado`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_fotos_procedentes`
--
ALTER TABLE `tb_fotos_procedentes`
  ADD CONSTRAINT `tb_fotos_procedentes_ibfk_1` FOREIGN KEY (`tipo_procedente`) REFERENCES `tb_tipos_procedentes` (`id_procedente`);

--
-- Limitadores para a tabela `tb_foto_sistema_af`
--
ALTER TABLE `tb_foto_sistema_af`
  ADD CONSTRAINT `tb_foto_sistema_af_ibfk_1` FOREIGN KEY (`tipo_sistema`) REFERENCES `tb_sistemas_anti_furto` (`id_sistema`);

--
-- Limitadores para a tabela `tb_local_evento`
--
ALTER TABLE `tb_local_evento`
  ADD CONSTRAINT `tb_local_evento_ibfk_1` FOREIGN KEY (`tipo_local`) REFERENCES `tb_tipo_local` (`id_tipo_local`),
  ADD CONSTRAINT `tb_local_evento_ibfk_2` FOREIGN KEY (`indice_local`) REFERENCES `tb_indice_criminalidade` (`id_indice`),
  ADD CONSTRAINT `tb_local_evento_ibfk_3` FOREIGN KEY (`fluxo_local`) REFERENCES `tb_fluxo_pedestres` (`id_fluxo`),
  ADD CONSTRAINT `tb_local_evento_ibfk_4` FOREIGN KEY (`via_local`) REFERENCES `tb_caracteristicas_via` (`id_caracteristica`),
  ADD CONSTRAINT `tb_local_evento_ibfk_5` FOREIGN KEY (`classificacao_local`) REFERENCES `tb_classificacao_regiao` (`id_classificacao`),
  ADD CONSTRAINT `tb_local_evento_ibfk_6` FOREIGN KEY (`permissao_local`) REFERENCES `tb_permissao_estacionar` (`id_permissao`);

--
-- Limitadores para a tabela `tb_mobilidade`
--
ALTER TABLE `tb_mobilidade`
  ADD CONSTRAINT `tb_mobilidade_ibfk_1` FOREIGN KEY (`registro_mobilidade`) REFERENCES `tb_registro_mobilidade` (`id_mobilidade`),
  ADD CONSTRAINT `tb_mobilidade_ibfk_2` FOREIGN KEY (`app1_mobilidade`) REFERENCES `tb_app_mobilidade` (`id_app`),
  ADD CONSTRAINT `tb_mobilidade_ibfk_3` FOREIGN KEY (`app2_mobilidade`) REFERENCES `tb_app_mobilidade` (`id_app`),
  ADD CONSTRAINT `tb_mobilidade_ibfk_4` FOREIGN KEY (`app3_mobilidade`) REFERENCES `tb_app_mobilidade` (`id_app`),
  ADD CONSTRAINT `tb_mobilidade_ibfk_5` FOREIGN KEY (`app4_mobilidade`) REFERENCES `tb_app_mobilidade` (`id_app`),
  ADD CONSTRAINT `tb_mobilidade_ibfk_6` FOREIGN KEY (`app5_mobilidade`) REFERENCES `tb_app_mobilidade` (`id_app`),
  ADD CONSTRAINT `tb_mobilidade_ibfk_7` FOREIGN KEY (`app6_mobilidade`) REFERENCES `tb_app_mobilidade` (`id_app`);

--
-- Limitadores para a tabela `tb_pr_legal`
--
ALTER TABLE `tb_pr_legal`
  ADD CONSTRAINT `tb_pr_legal_ibfk_1` FOREIGN KEY (`pm_pr_legal`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_pr_legal_ibfk_2` FOREIGN KEY (`pc_pr_legal`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_pr_legal_ibfk_3` FOREIGN KEY (`localizacao_pr_legal`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_pr_legal_ibfk_4` FOREIGN KEY (`boletim_pr_legal`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_pr_legal_ibfk_5` FOREIGN KEY (`sinesp_pr_legal`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_registro_mobilidade`
--
ALTER TABLE `tb_registro_mobilidade`
  ADD CONSTRAINT `tb_registro_mobilidade_ibfk_1` FOREIGN KEY (`print_mobilidade`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_registro_telemetria`
--
ALTER TABLE `tb_registro_telemetria`
  ADD CONSTRAINT `tb_registro_telemetria_ibfk_1` FOREIGN KEY (`print_telemetria`) REFERENCES `tb_fotos` (`id_foto`);

--
-- Limitadores para a tabela `tb_relatorios`
--
ALTER TABLE `tb_relatorios`
  ADD CONSTRAINT `tb_relatorios_ibfk_1` FOREIGN KEY (`solicitante_evento`) REFERENCES `tb_clientes` (`id_cliente`),
  ADD CONSTRAINT `tb_relatorios_ibfk_2` FOREIGN KEY (`sindicante_evento`) REFERENCES `tb_sindicantes` (`id_sindicante`),
  ADD CONSTRAINT `tb_relatorios_ibfk_3` FOREIGN KEY (`natureza_evento`) REFERENCES `tb_natureza_evento` (`id_natureza`),
  ADD CONSTRAINT `tb_relatorios_ibfk_4` FOREIGN KEY (`condutor_evento`) REFERENCES `tb_condutores` (`id_condutor`),
  ADD CONSTRAINT `tb_relatorios_ibfk_5` FOREIGN KEY (`local_evento`) REFERENCES `tb_local_evento` (`id_local`);

--
-- Limitadores para a tabela `tb_sindicantes`
--
ALTER TABLE `tb_sindicantes`
  ADD CONSTRAINT `tb_sindicantes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`);

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
  ADD CONSTRAINT `tb_veiculos_ibfk_1` FOREIGN KEY (`proprietario_veiculo`) REFERENCES `tb_proprietarios` (`id_proprietario`),
  ADD CONSTRAINT `tb_veiculos_ibfk_2` FOREIGN KEY (`vistoria_realizada`) REFERENCES `tb_vistorias_realizadas` (`id_vistoria`),
  ADD CONSTRAINT `tb_veiculos_ibfk_3` FOREIGN KEY (`foto_nota_fiscal_veiculo`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_veiculos_ibfk_4` FOREIGN KEY (`financeiro_veiculo`) REFERENCES `tb_financeiro_veiculo` (`id_financeiro`);

--
-- Limitadores para a tabela `tb_vistorias_realizadas`
--
ALTER TABLE `tb_vistorias_realizadas`
  ADD CONSTRAINT `tb_vistorias_realizadas_ibfk_1` FOREIGN KEY (`arquivo_vistoria`) REFERENCES `tb_fotos` (`id_foto`),
  ADD CONSTRAINT `tb_vistorias_realizadas_ibfk_2` FOREIGN KEY (`tipo_vistoria`) REFERENCES `tb_tipo_vistorias` (`id_tipo_vistoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
