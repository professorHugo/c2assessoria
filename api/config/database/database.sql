drop database if exists c2assessoria;

create database c2assessoria DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

use c2assessoria;

/*USO DO SISTEMA*/
create table tb_sys_config(
    id_sys_config int not null primary key auto_increment,
    modo_sys_config int DEFAULT 1 comment '1: DEV | 2: Produção'
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_sys_config(modo_sys_config)VALUES(1);

/*TB Senhas MD5*/
create table tb_senhas_auth(
    id_senha int not null primary key auto_increment,
    md5_senha varchar(500),
    cadastro varchar(25) DEFAULT 'novo'
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_senhas_auth(
    id_senha, md5_senha, cadastro
)values(1, 'e56f428d0f546e1072faf5acd4918b03', 'novo'), 
(2, 'eb0a191797624dd3a48fa681d3061212', 'cadastrado'),
(3, 'eb0a191797624dd3a48fa681d3061212', 'cadastrado'); /*Cadastro novo "c2assessoria"*/

/*TB Permissões*/
create table tb_permissoes(
    id_permissao int not null primary key auto_increment,
    nivel_permissao varchar(50)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_permissoes(nivel_permissao)values('Master'),('Sindicante'),('Dev');

/*TB Usuários*/
create table tb_usuarios(
    id_usuario int not null primary key auto_increment,
    email_usuario varchar(100) not null,
    nome_usuario varchar(50) not null,
    senha_usuario int, /* FK */
    permissao_usuario int, /* FK */
	usuario_ativo int, /*1: Sim | 2: Não*/
    
    FOREIGN KEY(senha_usuario) REFERENCES tb_senhas_auth(id_senha),
    FOREIGN KEY(permissao_usuario) REFERENCES tb_permissoes(id_permissao)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_usuarios(
    email_usuario,nome_usuario,senha_usuario,permissao_usuario
)VALUES('hugo.n2y@gmail.com','Hugo Christian',2,3),
('admin@c2assessoria.com.br','Administrador',3,1);

/*TB VINCULOS*/
create table tb_vinculos(
	id_vinculo int not null primary key auto_increment,
	descricao_vinculo varchar(50)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO tb_vinculos(descricao_vinculo)VALUES('Pai');

/*TB Proprietários*/
create table tb_proprietarios(
    id_proprietario int not null PRIMARY KEY auto_increment,
    protocolo_evento varchar(50) DEFAULT NULL,
    nome_proprietario varchar(200) DEFAULT NULL,
    vinculo_associado varchar(200) DEFAULT NULL
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;


/*TB Sistemas Anti-Furto*/
create table tb_sistemas_anti_furto(
    id_sistema int not null auto_increment PRIMARY KEY,
    tipo_sistema varchar(50) not null,
	ativacao int default 1 comment '1: Ativado | 2: Desativado'
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_sistemas_anti_furto(
    tipo_sistema
)values('Alarme'),('Rastreador'),('Localizador'),('Rastreador/Localizador');

/*TB Locais DETRAN*/
create table tb_detran_estados(
    id_detran int not null PRIMARY KEY auto_increment,
    estado_detran varchar(3) DEFAULT NULL,
    ativacao int DEFAULT 1 comment '1: Ativado | 2: Desativado'
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*TB Clientes (Seguradoras)*/
create table tb_clientes(
    id_cliente int not null auto_increment PRIMARY KEY,
    nome_cliente VARCHAR(100),
	email_cliente varchar(100) DEFAULT NULL COMMENT 'email do cliente',
	telefone_cliente VARCHAR(25) DEFAULT NULL COMMENT 'Telefone do cliente',
	contato_cliente VARCHAR(100) DEFAULT NULL COMMENT 'Nome do contato com o cliente',
    data_cadastro DATE DEFAULT NULL COMMENT 'data do cadastro',
	data_update DATE DEFAULT NULL COMMENT 'data de atualização',
	ativacao int DEFAULT "1" comment '1: Ativado | 2: Desativado'
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_clientes(nome_cliente)values
('Universo AGV - AssociaÃ§Ã£o GestÃ£o Veicular Universo'),
('Auto-Truck - AssociaÃ§Ã£o de AutimÃ³veis e VeÃ­culos Pesados'),
('APVS BRASIL - ASSOCIACAO PROTETORA VEICULAR E SERVICOS SOCIAIS'),
('NET CAR - NET CAR CLUBE DE BENEFICIOS'),
('PROAUTO - ASSOCIACAO PROTETORA DE VEICULOS AUTOMOTORES '),
('SEJA UNNICA - ASSOCIAÃ‡ÃƒO DE BENEFICIOS UNNICA'),
('TECX PARK - GESTÃƒO DE MÃƒO OBRA T. S. T. LTDA');


/*TB Fotos*/
create table tb_fotos(
    id_foto int not null auto_increment PRIMARY KEY,
    categoria_foto VARCHAR(100) DEFAULT NULL,
    protocolo_foto VARCHAR(100) DEFAULT NULL,
    pasta_foto VARCHAR(100) DEFAULT NULL,
    nome_foto varchar(200) DEFAULT NULL
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_fotos(
    categoria_foto, pasta_foto, nome_foto
)values(
    'default', '../', 'default.png'
);

/* TB CNHS REGISTRADAS*/
DROP TABLE IF EXISTS tb_cnh_registros;
CREATE TABLE IF NOT EXISTS tb_cnh_registros(
    id_cnh int not null primary key auto_increment,
    protocolo_cnh VARCHAR(50) DEFAULT NULL,
    dono_cnh varchar(255) DEFAULT null,
    status_cnh VARCHAR(50) DEFAULT NULL,
    img_cnh1 int DEFAULT NULL,
    img_cnh2 int DEFAULT NULL,

    FOREIGN KEY(img_cnh1) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(img_cnh2) REFERENCES tb_fotos(id_foto)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

CREATE TABLE tb_financeiro_veiculo (
    id_financeiro int not null primary key auto_increment,
    protocolo_financeiro varchar(100) DEFAULT NULL,
    instituicao_financeiro VARCHAR(100) DEFAULT NULL,
    total_parcelas_financeiro int DEFAULT NULL,
    valor_parcela_financeiro varchar(100) DEFAULT NULL,
    parcelas_pagas_financeiro int DEFAULT NULL,
    situacao_financeiro int DEFAULT NULL
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

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
-- AUTO_INCREMENT for table `tb_vistorias_realizadas`
--
ALTER TABLE `tb_vistorias_realizadas`
  MODIFY `id_vistoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_vistorias_realizadas`
--
ALTER TABLE `tb_vistorias_realizadas`
  ADD CONSTRAINT `tb_vistorias_realizadas_ibfk_1` FOREIGN KEY (`arquivo_vistoria`) REFERENCES `tb_fotos` (`id_foto`),

/*Tb Fotos Documentos Veículos Segurados*/
-- create table tb_fotos_veiculos(
--     id_foto int not null PRIMARY KEY auto_increment,
--     local_foto VARCHAR(100) DEFAULT NULL,
--     nome_foto VARCHAR(100) DEFAULT NULL
-- )ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*tb tipos procedentes*/
create table tb_tipos_procedentes(
    id_procedente INT NOT NULL PRIMARY KEY auto_increment,
    descricao_procedente VARCHAR(20) DEFAULT NULL,
	ativacao int DEFAULT 1 comment '1: Ativado | 2: Desativado'
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO tb_tipos_procedentes(
    descricao_procedente
)VALUES('Não Apresentado'),('Loja'),('Particular'),('Leilão');

/*Tb Fotos procedentes*/
create table tb_fotos_procedentes(
    id_foto_procedente int not null PRIMARY KEY auto_increment,
    placa_foto_procedente varchar(15) DEFAULT NULL,
    tipo_procedente int DEFAULT NULL,
    protocolo_foto_procedente varchar(100) DEFAULT NULL,
    local_foto_procedente VARCHAR(100) DEFAULT NULL,
    nome_foto_procedente VARCHAR(100) DEFAULT NULL,

    FOREIGN KEY(tipo_procedente) REFERENCES tb_tipos_procedentes(id_procedente)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;






create table tb_tipos_chaves(
    id_chave INT NOT NULL PRIMARY KEY auto_increment,
    descricao_chave VARCHAR(100) DEFAULT NULL,
	ativacao int default 1 comment '1: Ativado | 2: Desativado'
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO tb_tipos_chaves(
    descricao_chave
)VALUES('De Uso'),('Reserva'),('Não Apresentou');

/*tb fotos chaves apresentadas*/
create table tb_chaves_apresentadas(
    id_chave_apresentada int not NULL PRIMARY KEY auto_increment,
    protocolo_chave_apresentada VARCHAR(100) DEFAULT null,
    tipo_chave_apresentada INT DEFAULT NULL,
    local_chave_apresentada VARCHAR(100) DEFAULT NULL,
    nome_chave_apresentada VARCHAR(100) DEFAULT NULL,

    INDEX(tipo_chave_apresentada),
    
    FOREIGN KEY(tipo_chave_apresentada) REFERENCES tb_tipos_chaves(id_chave)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;





/*Tb foto sistema anti-furto*/
create table tb_foto_sistema_af(
    id_foto_sistema INT NOT NULL PRIMARY KEY auto_increment,
    protocolo_foto_sistema VARCHAR(100) DEFAULT NULL,
    tipo_sistema INT DEFAULT NULL,
    local_foto_sistema VARCHAR(100) DEFAULT NULL,
    nome_foto_sistema VARCHAR(100) DEFAULT NULL,

    FOREIGN KEY(tipo_sistema) REFERENCES tb_sistemas_anti_furto(id_sistema)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;




/*TB Veículos*/
create table tb_veiculos(
    id_veiculo int not null auto_increment primary key,
    segurado_veiculo varchar(11) null,
    proprietario_veiculo int null,
    protocolo_evento varchar(50) DEFAULT null,
    condutor_veiculo int DEFAULT NULL, /* 1: Associado | 2: Terceiros*/
    marca_veiculo varchar(50) null,
    modelo_veiculo varchar(100) null,
    placa_veiculo varchar(8) null,

    protecao_veiculo varchar(50) DEFAULT "Sim" COMMENT 'Se há proteção para o veículo' ,

    dut_veiculo varchar(100) null,
    procedente_veiculo varchar(50) null,
    proprietario_anterior_veiculo varchar(100) DEFAULT null,
    chaves_apresentadas_veiculo int null, /*1:de uso | 2: reserva | 3: não apresentada*/
    sistema_anti_furto int null, /* FK */
	sistema_anti_furto_tipo int null,
    evento_multa_veiculo int null, /*0: não | 1: sim*/
    restricoes1_veiculo varchar(100),
    restricoes2_veiculo varchar(100),
    restricoes3_veiculo varchar(100),
    queixa_evento_veiculo int null, /*0: não | 1: sim*/
    vistoria_veiculo int null, /*FK*/
    vistoria_realizada int null, /* FK */

    financeiro_veiculo int DEFAULT NULL,

    foto_nota_fiscal_veiculo int null,

    INDEX(proprietario_veiculo),
    INDEX(vistoria_veiculo),
    INDEX(vistoria_realizada),
    INDEX(foto_nota_fiscal_veiculo),
    INDEX(financeiro_veiculo),


    FOREIGN KEY(proprietario_veiculo) REFERENCES tb_proprietarios(id_proprietario),
    FOREIGN KEY(vistoria_realizada) REFERENCES tb_vistorias_realizadas(id_vistoria),
    FOREIGN KEY(foto_nota_fiscal_veiculo) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(financeiro_veiculo) REFERENCES tb_financeiro_veiculo(id_financeiro)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;



/*TB Associados*/
create table tb_associados(
    id_associado int not null PRIMARY KEY auto_increment,
    cpf_associado bigint DEFAULT null,
    seguradora_associado int DEFAULT null,
    nome_associado varchar(200) DEFAULT null,
    cep_associado varchar(11) DEFAULT null,
    endereco_associado varchar(100) DEFAULT null,
    bairro_associado varchar(100) DEFAULT null,
    cidade_associado varchar(50) DEFAULT null,
    estado_associado varchar(50) DEFAULT null,
    outros_veiculos int DEFAULT null comment '1: sim | 2: não',
    quantidade_veiculos int DEFAULT null comment 'Quantidade de veículos extras'
    civil_associado varchar(50) DEFAULT null,
    profissao_associado varchar(50) DEFAULT null,
    veiculo1_associado int DEFAULT null,
    veiculo2_associado int DEFAULT null,
    veiculo3_associado int DEFAULT null,
    veiculo4_associado int DEFAULT null,
    cnh_associado int DEFAULT null,

    FOREIGN KEY(seguradora_associado) REFERENCES tb_clientes(id_cliente),
    FOREIGN KEY(veiculo1_associado) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(veiculo2_associado) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(veiculo3_associado) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(veiculo4_associado) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(cnh_associado) REFERENCES tb_cnh_registros(id_cnh)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- TB Tipos de testemunhas sabedoras
CREATE TABLE tb_tipos_testemunhas(
    id_tipo int not null PRIMARY KEY auto_increment,
    nome_tipo varchar(50) NULL
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO tb_tipos_testemunhas(nome_tipo)VALUES(NULL),('Comerciante');

-- TB Declarações apresentadas
CREATE TABLE tb_declaracoes(
    id_declaracao int not null PRIMARY KEY auto_increment,
    entrevistado varchar(10) DEFAULT NULL,
    protocolo_declaracoes varchar(100) DEFAULT NULL,
    dia_fatos_declaracao varchar(500) DEFAULT NULL,
    via_publica_declaracao varchar(500) DEFAULT NULL,
    o_que_fazia_declaracao int,

    FOREIGN KEY(o_que_fazia_declaracao) REFERENCES tb_tipos_testemunhas(id_tipo)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/* TB Orgãos Publicos */
CREATE TABLE tb_pr_legal(
    id_pr_legal int not null PRIMARY KEY auto_increment,
    protocolo_pr_legal varchar(100) DEFAULT NULL,

    pm_resposta VARCHAR(10) DEFAULT NULL,
    pm_pr_legal int DEFAULT NULL,

    pc_resposta VARCHAR(10) DEFAULT NULL,
    pc_pr_legal int DEFAULT NULL,

    localizacao_resposta VARCHAR(10) DEFAULT NULL,
    localizacao_pr_legal int DEFAULT NULL,

    boletim_resposta VARCHAR(10) DEFAULT NULL,
    boletim_autentico int DEFAULT NULL,
    boletim_pr_legal int DEFAULT NULL,

    resposta_sinesp VARCHAR(10) DEFAULT NULL,
    print_sinesp VARCHAR(10) DEFAULT NULL,
    sinesp_pr_legal int DEFAULT NULL,

    FOREIGN KEY(pm_pr_legal) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(pc_pr_legal) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(localizacao_pr_legal) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(boletim_pr_legal) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(sinesp_pr_legal) REFERENCES tb_fotos(id_foto)
    
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/* TB RELACIONAMENTO DO ENTREVISTADO */
CREATE TABLE tb_relacionamento_entrevistado(
    id_relacionamento int not null PRIMARY KEY auto_increment,
    protocolo_relacionamento VARCHAR(100) DEFAULT NULL,
    nome_entrevistado VARCHAR(100) DEFAULT null,
    bom_estado_veiculo int DEFAULT NULL,
    conhecimento_evento int DEFAULT NULL,
    informacoes_divergentes int DEFAULT NULL,
    pernoite_garagem int DEFAULT NULL,
    vinculo_entrevistado int DEFAULT NULL,

    /*textos*/
    texto_bom_estado VARCHAR(100) DEFAULT NULL,
    texto_conhecimento_evento VARCHAR(100) DEFAULT NULL,
    texto_informacoes_divergentes VARCHAR(100) DEFAULT NULL,
    texto_pernoite_garagem VARCHAR(100) DEFAULT NULL,
    texto_vinculo_entrevistado VARCHAR(100) DEFAULT NULL


)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*TB Intrevistados*/
create table tb_entrevistados(
    id_entrevistado int not null auto_increment PRIMARY KEY,
    protocolo_entrevistados VARCHAR(50) DEFAULT NULL,
    tipo_entrevistado int, /*0: evento | 1: convivio | 2: testemunha*/
    nome_entrevistado varchar(100),
    sexo_entrevistado varchar(9),
    relacionamento_entrevistado int DEFAULT NULL,
    telefone_entrevistado varchar(11),
    cep_entrevistado varchar(8),
    endereco_entrevistado varchar(100),
    numero_end_entrevistado varchar(50),
    bairro_entrevistado varchar(100),
    cidade_entrevistado varchar(50),
    estado_entrevistado varchar(50),
    nacionalidade_entrevistado varchar(50),
    declaracao_entrevistado int,
    foto_declaracao_entrevistado int,

    FOREIGN KEY(relacionamento_entrevistado) REFERENCES tb_relacionamento_entrevistado(id_relacionamento),
    FOREIGN KEY(declaracao_entrevistado) REFERENCES tb_declaracoes(id_declaracao),
    FOREIGN KEY(foto_declaracao_entrevistado) REFERENCES tb_fotos(id_foto)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*TB Natureza de Eventos*/
create table tb_natureza_evento(
    id_natureza int not null auto_increment PRIMARY KEY,
    descricao_natureza VARCHAR(50),
	ativacao int default '1' comment '1: Ativado | 2: Desativado'
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_natureza_evento(descricao_natureza)values
('Roubo'),('Furto'),('Colisão');

create table tb_tipos_civil(
	id_civil int not null primary key auto_increment,
	descricao_civil varchar(50) default null,
	ativacao int default 1 comment '1: Ativado | 1: Desativado'
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;




/*TBs Local do evento*/
CREATE TABLE tb_tipo_local(
    id_tipo_local int not null primary key auto_increment,
    tipo_local varchar(50)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO tb_tipo_local(tipo_local)VALUES('Residencial'),('Comercial'),('Mista');

CREATE TABLE tb_indice_criminalidade(
    id_indice int not null primary key auto_increment,
    indice_criminalidade VARCHAR(50)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO tb_indice_criminalidade(indice_criminalidade)VALUES('Alto'),('Médio'),('Baixo');

CREATE TABLE tb_fluxo_pedestres(
    id_fluxo int not null primary key auto_increment,
    fluxo_pedestres VARCHAR(50)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO tb_fluxo_pedestres(fluxo_pedestres)VALUES('Alto'),('Médio'),('Baixo');

CREATE TABLE tb_caracteristicas_via(
    id_caracteristica int not null primary key auto_increment,
    caracteristica_via VARCHAR(50)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO tb_caracteristicas_via(caracteristica_via)VALUES('Pavimentada'),('Não Pavimentada');

CREATE TABLE tb_classificacao_regiao(
    id_classificacao int not null primary key auto_increment,
    classificacao_regiao VARCHAR(50)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO tb_classificacao_regiao(classificacao_regiao)VALUES('Média/Alta'),('Popular'),('Comunidade');

CREATE TABLE tb_permissao_estacionar(
    id_permissao int not null primary key auto_increment,
    permissao_estacionar VARCHAR(50)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO tb_permissao_estacionar(permissao_estacionar)VALUES('Sim'),('Não'),('Não se Aplica');

CREATE TABLE tb_local_evento(
    id_local INT NOT NULL PRIMARY KEY auto_increment,
    protocolo_local VARCHAR(100) DEFAULT NULL,
    tipo_local int,
    indice_local int,
    fluxo_local int,
    via_local int,
    classificacao_local int,
    permissao_local int,

    KEY(tipo_local),
    KEY(indice_local),
    KEY(fluxo_local),
    KEY(via_local),
    KEY(classificacao_local),
    KEY(permissao_local)

)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
ALTER TABLE `tb_local_evento` ADD  FOREIGN KEY (`tipo_local`) REFERENCES `tb_tipo_local`(`id_tipo_local`);
ALTER TABLE `tb_local_evento` ADD  FOREIGN KEY (`indice_local`) REFERENCES `tb_indice_criminalidade`(`id_indice`);
ALTER TABLE `tb_local_evento` ADD  FOREIGN KEY (`fluxo_local`) REFERENCES `tb_fluxo_pedestres`(`id_fluxo`);
ALTER TABLE `tb_local_evento` ADD  FOREIGN KEY (`via_local`) REFERENCES `tb_caracteristicas_via`(`id_caracteristica`);
ALTER TABLE `tb_local_evento` ADD  FOREIGN KEY (`classificacao_local`) REFERENCES `tb_classificacao_regiao`(`id_classificacao`);
ALTER TABLE `tb_local_evento` ADD  FOREIGN KEY (`permissao_local`) REFERENCES `tb_permissao_estacionar`(`id_permissao`);

/* Registro de Telemetria */
CREATE TABLE tb_registro_telemetria(
    id_telemetria int not null primary key auto_increment,
    protocolo_telemetria VARCHAR(50) DEFAULT NULL,
    placa_telemetria VARCHAR(50) DEFAULT NULL,
    local_telemetria INT DEFAULT NULL,
    residencia_telemetria INT DEFAULT NULL,
    ap_irregular_telemetria INT DEFAULT NULL,

    print_telemetria INT DEFAULT NULL,

    FOREIGN KEY(print_telemetria) REFERENCES tb_fotos(id_foto)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/* Registro Mobilidade urbana */

CREATE TABLE tb_registro_mobilidade(
    id_mobilidade int not null PRIMARY KEY auto_increment,
    protocolo_mobilidade varchar (50) DEFAULT NULL,
    placa_mobilidade VARCHAR(8) DEFAULT NULL,
    uso_dia_mobilidade varchar (50) DEFAULT NULL,
    instalado_mobilidade VARCHAR (50) DEFAULT NULL,
    nome_terceiro VARCHAR(100) DEFAULT NULL,
    telefone_terceiro VARCHAR(50) DEFAULT NULL,
    irregularidades_mobilidade varchar(50) DEFAULT NULL,
    convergencia_mobilidade VARCHAR(50) DEFAULT NULL,
    print_mobilidade int DEFAULT NULL,

    FOREIGN KEY(print_mobilidade) REFERENCES tb_fotos(id_foto)

)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

DROP TABLE IF EXISTS tb_app_mobilidade;
CREATE TABLE tb_app_mobilidade(
    id_app int not null PRIMARY KEY auto_increment,
    nome_app VARCHAR(50) DEFAULT NULL
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO tb_app_mobilidade(nome_app)
VALUES('Nenhum'),('99Taxis'), ('Uber');

DROP TABLE IF EXISTS tb_mobilidade;
CREATE TABLE tb_mobilidade(
    id_mobilidade int not NULL PRIMARY KEY auto_increment,
    protocolo_mobilidade VARCHAR(50) DEFAULT NULL,
    placa_mobilidade VARCHAR(8) DEFAULT NULL,
    registros_mobilidade VARCHAR(50) DEFAULT NULL,
    convergencia_mobilidade VARCHAR(50) DEFAULT NULL,
    observacao_mobilidade VARCHAR(255) DEFAULT NULL,
    motorista_mobilidade VARCHAR(50) DEFAULT NULL,
    app1_mobilidade int DEFAULT NULL,
    app2_mobilidade int DEFAULT NULL,
    app3_mobilidade int DEFAULT NULL,
    app4_mobilidade int DEFAULT NULL,
    app5_mobilidade int DEFAULT NULL,
    app6_mobilidade int DEFAULT NULL,
    registro_mobilidade int,

    FOREIGN KEY(registro_mobilidade) REFERENCES tb_registro_mobilidade(id_mobilidade),
    FOREIGN KEY(app1_mobilidade) REFERENCES tb_app_mobilidade(id_app),
    FOREIGN KEY(app2_mobilidade) REFERENCES tb_app_mobilidade(id_app),
    FOREIGN KEY(app3_mobilidade) REFERENCES tb_app_mobilidade(id_app),
    FOREIGN KEY(app4_mobilidade) REFERENCES tb_app_mobilidade(id_app),
    FOREIGN KEY(app5_mobilidade) REFERENCES tb_app_mobilidade(id_app),
    FOREIGN KEY(app6_mobilidade) REFERENCES tb_app_mobilidade(id_app)
    
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*TB Sindicantes*/
drop table if exists tb_sindicantes;
create table tb_sindicantes(
    id_sindicante int not null auto_increment PRIMARY KEY,
    id_usuario int,
    ativacao int DEFAULT 2 COMMENT "1: Sim | 2: Não",

    FOREIGN KEY(id_usuario) REFERENCES tb_usuarios(id_usuario)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO `tb_sindicantes` (`id_sindicante`, `id_usuario`, `ativacao`) VALUES (NULL, '1', '2'), (NULL, '2', '2');














/*Tb condutores*/
create table tb_condutores(
    id_condutor int not null PRIMARY KEY auto_increment,
    protocolo_evento varchar(50) DEFAULT NULL,
    nome_condutor varchar(255) DEFAULT null,
    civil_condutor varchar(50) DEFAULT NULL,
    profissao_condutor varchar(50) DEFAULT NULL,
    cep_condutor VARCHAR(50) DEFAULT NULL,
    endereco_condutor VARCHAR(150) DEFAULT NULL,
    bairro_condutor VARCHAR(100) DEFAULT NULL,
    cidade_condutor VARCHAR(50) DEFAULT NULL,
    estado_condutor VARCHAR(5) DEFAULT NULL,

    veiculo1_condutor int DEFAULT null,
    veiculo2_condutor int DEFAULT NULL,
    veiculo3_condutor int DEFAULT NULL,
    vinculo_associado varchar(50) DEFAULT NULL,
    cnh_condutor int DEFAULT NULL,

    FOREIGN KEY(veiculo1_condutor) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(veiculo2_condutor) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(veiculo3_condutor) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(cnh_condutor) REFERENCES tb_fotos(id_foto)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*TB Relatorios*/
DROP TABLE IF EXISTS tb_relatorios;
create table tb_relatorios(
    id_relatorio int not null PRIMARY KEY auto_increment,
    horario_criacao TIMESTAMP not null DEFAULT current_timestamp,
    horario_update TIMESTAMP null,
    solicitante_evento int,
    sindicante_evento int,
    protocolo_evento varchar(255),
    natureza_evento int,
    cpf_associado varchar(11),
    condutor_veiculo int DEFAULT null, /* 1: Associado | 2: Terceiros */
    condutor_evento int DEFAULT null,
    placa_veiculo_evento varchar(10) DEFAULT null,
    data_evento date DEFAULT null,
    horario_evento VARCHAR(10) DEFAULT null,
    cep_evento VARCHAR(10) DEFAULT null,
    endereco_evento VARCHAR(255) DEFAULT null,
    numero_evento VARCHAR(10) DEFAULT NULL,
    bairro_evento VARCHAR(255) DEFAULT null,
    cidade_evento VARCHAR(255) DEFAULT null,
    uf_evento VARCHAR(10) DEFAULT null,
    local_evento int DEFAULT NULL,

    status_relatorio VARCHAR(50) DEFAULT NULL,

    contexto_geral_relatorio longtext DEFAULT null,

    print_associado int DEFAULT NULL, /* 1: Sim | 2: Não */
    print_condutor int DEFAULT NULL, /* 1: Sim | 2: Não */

    FOREIGN KEY(solicitante_evento) REFERENCES tb_clientes(id_cliente),
    FOREIGN KEY(sindicante_evento) REFERENCES tb_usuarios(id_usuario),
    FOREIGN KEY(natureza_evento) REFERENCES tb_natureza_evento(id_natureza),
    FOREIGN key(condutor_evento) REFERENCES tb_condutores(id_condutor),
    FOREIGN KEY(local_evento) REFERENCES tb_local_evento(id_local)

)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
