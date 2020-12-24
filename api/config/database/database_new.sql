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
(2, 'd91e80ac3436230268d5d3426e4b752d', 'cadastrado'),
(3, 'eb0a191797624dd3a48fa681d3061212', 'cadastrado'); /*Cadastro novo "c2assessoria"*/

DROP TABLE IF EXISTS tb_permissoes;
create table if not exists tb_permissoes(
    id_permissao int not null primary key auto_increment,
    nivel_permissao varchar(50)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_permissoes(nivel_permissao)values('Master'),('Sindicante'),('Dev');

/*TB Usuários*/
drop table if exists tb_usuarios;
create table if not exists tb_usuarios(
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
    email_usuario,
    nome_usuario,
    senha_usuario,
    permissao_usuario
)VALUES('hugo.n2y@gmail.com','Hugo Christian',2,3),
('admin@c2assessoria.com.br','Administrador',3,1),
('sindicante@c2assessoria.com.br', 'Sindicante',1,2);

/*TB VINCULOS*/
drop table if exists tb_vinculos;
create table if not exists tb_vinculos(
	id_vinculo int not null primary key auto_increment,
	descricao_vinculo varchar(50)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO tb_vinculos(descricao_vinculo)VALUES('Pai');



/*TB Locais DETRAN*/
drop table if exists tb_detran_estados;
create table if not exists tb_detran_estados(
    id_detran int not null PRIMARY KEY auto_increment,
    estado_detran varchar(3) DEFAULT NULL,
    ativacao int DEFAULT 1 comment '1: Ativado | 2: Desativado'
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO tb_detran_estados(estado_detran) values('SP');

/*TB Clientes (Seguradoras)*/
drop table if exists tb_clientes;
create table if not exists tb_clientes(
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
drop table if exists tb_fotos;
create table if not exists tb_fotos(
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

/*TB Sistemas Anti-Furto*/
DROP TABLE IF EXISTS tb_sistemas_anti_furto;
CREATE TABLE IF NOT EXISTS tb_sistemas_anti_furto(
    id_sistema int not null auto_increment PRIMARY KEY,
    protocolo_sistema varchar(100),
    tipo_sistema varchar(50) not null comment 'Apenas o tipo de sistema',
    foto_comprovante1 int comment 'FK tb_fotos',
    foto_comprovante2 int comment 'FK tb_fotos',
    telemetria1 int comment 'FK tb_fotos',
    telemetria2 int comment 'FK tb_fotos',
    telemetria3 int comment 'FK tb_fotos',

    INDEX(foto_comprovante1),
    INDEX(foto_comprovante2),
    INDEX(telemetria1),
    INDEX(telemetria2),
    INDEX(telemetria3),

    FOREIGN KEY(foto_comprovante1) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto_comprovante2) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(telemetria1) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(telemetria2) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(telemetria3) REFERENCES tb_fotos(id_foto)

)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;


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


/*tb tipos procedentes*/
drop table if exists tb_tipos_procedentes;
create table if not exists tb_tipos_procedentes(
    id_procedente INT NOT NULL PRIMARY KEY auto_increment,
    descricao_procedente VARCHAR(20) DEFAULT NULL,
	ativacao int DEFAULT 1 comment '1: Ativado | 2: Desativado'
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO tb_tipos_procedentes(
    descricao_procedente
)VALUES('NÃ£o Apresentado'),('Loja'),('Particular'),('LeilÃ£o');

/* TB TIPOS DE CHAVES */
drop table if exists tb_tipos_chaves;
create table if not exists tb_tipos_chaves(
    id_chave INT NOT NULL PRIMARY KEY auto_increment,
    descricao_chave VARCHAR(100) DEFAULT NULL,
	ativacao int default 1 comment '1: Ativado | 2: Desativado'
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO tb_tipos_chaves(
    descricao_chave
)VALUES('De Uso'),('Reserva'),('Não Apresentou');

/*tb fotos chaves apresentadas*/
drop table if exists tb_chaves_apresentadas;
create table if not exists tb_chaves_apresentadas(
    id_chave_apresentada int not NULL PRIMARY KEY auto_increment,
    protocolo_chave_apresentada VARCHAR(100) DEFAULT null,
    tipo_chave_apresentada INT DEFAULT NULL,
    local_chave_apresentada VARCHAR(100) DEFAULT NULL,
    nome_chave_apresentada VARCHAR(100) DEFAULT NULL,

    INDEX(tipo_chave_apresentada),
    
    FOREIGN KEY(tipo_chave_apresentada) REFERENCES tb_tipos_chaves(id_chave)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;


/*VISTORIAS REALIZADAS*/
DROP TABLE IF EXISTS tb_vistorias_realizadas;
CREATE TABLE IF NOT EXISTS tb_vistorias_realizadas(
    id_vistoria int not null primary key auto_increment,
    protocolo_vistoria varchar(50),
    vistoria_aprovada varchar(50) comment 'Sim | Não',
    data_vistoria varchar(50) comment 'Apenas a Data da vistoria',
    foto1_vistoria int comment 'FK tb_fotos',
    foto2_vistoria int comment 'FK tb_fotos',
    foto3_vistoria int comment 'FK tb_fotos',

    INDEX(foto1_vistoria),
    INDEX(foto2_vistoria),
    INDEX(foto3_vistoria),

    FOREIGN KEY(foto1_vistoria) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto2_vistoria) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto3_vistoria) REFERENCES tb_fotos(id_foto)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*Registros DETRAN*/
DROP TABLE IF EXISTS tb_registro_detran;
CREATE TABLE IF NOT EXISTS tb_registro_detran(
    id_registro_detran int not null primary key auto_increment,
    protocolo_registro_detran varchar(50),
    estado_registro_detran int comment 'FK tb_detran_estados',
    multa_registro_detran int comment '1: Sim | 2: Não',
    foto1_multa int comment 'FK tb_fotos',
    foto2_multa int comment 'FK tb_fotos',
    foto3_multa int comment 'FK tb_fotos',
    restricoes_diversas int comment '1: Sim | 2: Não',
    restricoes_financeiras varchar(10) comment 'Apenas o texto',
    queixa_registro varchar(10) comment 'Apenas o texto',
    outras_informacoes_registro varchar(1000) comment 'Texto descritivo das restrições',

    INDEX(foto1_multa),
    INDEX(foto2_multa),
    INDEX(foto3_multa),
    INDEX(estado_registro_detran),

    FOREIGN KEY(estado_registro_detran) REFERENCES tb_detran_estados(id_detran),
    FOREIGN KEY(foto1_multa) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto2_multa) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto3_multa) REFERENCES tb_fotos(id_foto)
    
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;


/* TB proprietario_legal */
DROP TABLE IF EXISTS tb_proprietario_legal;
CREATE TABLE IF NOT EXISTS tb_proprietario_legal(
    id_proprietario int not null primary KEY auto_increment,
    protocolo_proprietario varchar(50) comment 'Protocolo do proprietario legal',
    nome_proprietario varchar(50) COMMENT 'Nome do proprietario Legal',
    vinculo_associado varchar(50) COMMENT 'Texto escrito o vínculo',
    
    proprietario_anterior varchar(50) COMMENT 'Nome do proprietario anterior',
    observacao_proprietario varchar(500) COMMENT 'Observações sobre o Proprietario Legal',

    foto_declaracao_proprietario1 int default null comment 'Id da foto da declaração do proprietariolegal',
    foto_declaracao_proprietario2 int default null comment 'Id da foto da declaração do proprietariolegal',
    foto_declaracao_proprietario3 int default null comment 'Id da foto da declaração do proprietariolegal',

    foto_documento_proprietario_frente int DEFAULT null comment 'Id da foto da frente do documento do proprietario',
    foto_documento_proprietario_verso int DEFAULT null comment 'Id da foto do verso do documento do proprietario',
    
    INDEX(foto_documento_proprietario_frente),
    INDEX(foto_documento_proprietario_verso),

    INDEX(foto_declaracao_proprietario1),
    INDEX(foto_declaracao_proprietario2),
    INDEX(foto_declaracao_proprietario3),
    
    FOREIGN KEY(foto_documento_proprietario_frente) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto_documento_proprietario_verso) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto_declaracao_proprietario1) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto_declaracao_proprietario2) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto_declaracao_proprietario3) REFERENCES tb_fotos(id_foto)


)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/* tb_documento_veiculo */
DROP TABLE IF EXISTS tb_documento_veiculo;
CREATE TABLE IF NOT EXISTS tb_documento_veiculo(
    id_documento int not null primary key auto_increment,
    protocolo_documento varchar(50) comment 'Protocolo do documento',
    foto_frente_documento int DEFAULT NULL comment 'FK tb_fotos',
    foto_verso_documento int DEFAULT NULL comment 'FK tb_fotos',
    documento_preenchido int comment '1: Em Branco | 2: Preenchido',

    FOREIGN KEY(foto_frente_documento) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto_verso_documento) REFERENCES tb_fotos(id_foto)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;


/*PROCEDENTES*/
DROP TABLE IF EXISTS tb_procedentes;
CREATE TABLE IF NOT EXISTS tb_procedentes(
    id_procedente int not null primary key auto_increment,
    protocolo_procedente varchar(50) DEFAULT NULL COMMENT 'Protocolo do cadastro do procedente',
    confirma_procedente varchar(50) default NULL COMMENT 'Confirmação do procedente',
    foto_procedente1 int,
    foto_procedente2 int,
    foto_procedente3 int,

    INDEX(foto_procedente1),
    INDEX(foto_procedente2),
    INDEX(foto_procedente3),

    FOREIGN KEY(foto_procedente1) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto_procedente2) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto_procedente3) REFERENCES tb_fotos(id_foto)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*PROPRIETÁRIO ANTERIOR*/
DROP TABLE IF EXISTS tb_proprietario_anterior;
CREATE TABLE IF NOT EXISTS tb_proprietario_anterior(
    id_proprietario int not null primary key auto_increment,
    protocolo_proprietario varchar(50),
    nome_proprietario varchar(50),
    vinculo_proprietario varchar(30),
    documento_frente int comment 'FK tb_fotos',
    documento_verso int comment 'FK tb_fotos',
    declaracao1 int comment 'FK tb_fotos',
    declaracao2 int comment 'FK tb_fotos',
    declaracao3 int comment 'FK tb_fotos',
    observacoes_proprietario varchar(1000),

    INDEX(documento_frente),
    INDEX(documento_verso),
    INDEX(declaracao1),
    INDEX(declaracao2),
    INDEX(declaracao3),

    FOREIGN KEY(documento_frente) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(documento_verso) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(declaracao1) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(declaracao2) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(declaracao3) REFERENCES tb_fotos(id_foto)
    
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/* TB FINANCEIRO VEICULO */
DROP TABLE IF EXISTS tb_financeiro_veiculo;
CREATE TABLE IF NOT EXISTS tb_financeiro_veiculo (
    id_financeiro int not null primary key auto_increment,
    protocolo_financeiro varchar(100) DEFAULT NULL,
    instituicao_financeiro VARCHAR(100) DEFAULT NULL,
    total_parcelas_financeiro int DEFAULT NULL,
    valor_parcela_financeiro varchar(100) DEFAULT NULL,
    parcelas_pagas_financeiro int DEFAULT NULL,
    situacao_financeiro int DEFAULT NULL,
    parcelas_inadimplentes int default 0,

    foto_parcela1 int comment 'FK tb_fotos',
    foto_parcela2 int comment 'FK tb_fotos',
    foto_parcela3 int comment 'FK tb_fotos',
    foto_parcela4 int comment 'FK tb_fotos',
    foto_parcela5 int comment 'FK tb_fotos',

    INDEX(foto_parcela1),
    INDEX(foto_parcela2),
    INDEX(foto_parcela3),
    INDEX(foto_parcela4),
    INDEX(foto_parcela5),

    FOREIGN KEY(foto_parcela1) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto_parcela2) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto_parcela3) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto_parcela4) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto_parcela5) REFERENCES tb_fotos(id_foto)

)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*TB Veículos*/
DROP TABLE IF EXISTS tb_veiculos;
CREATE TABLE IF NOT EXISTS tb_veiculos(
    id_veiculo int not null auto_increment primary key,
    segurado_veiculo varchar(11) null,
    proprietario_veiculo int null,
    protocolo_evento varchar(50) DEFAULT null,
	
    condutor_veiculo int DEFAULT NULL, /* 1: Associado | 2: Terceiros*/

    marca_veiculo varchar(50) null,
    modelo_veiculo varchar(100) null,
    placa_veiculo varchar(8) null,

    protecao_veiculo varchar(50) DEFAULT "Sim" COMMENT 'Se há proteção para o veículo' ,

    documento_veiculo INT(100) null comment 'FK tb_documento_veiculo',

    procedente_veiculo int(50) null comment 'FK tb_procedentes',
    proprietario_anterior_veiculo int comment 'FK tb_proprietario_anterior',
    chaves_apresentadas_veiculo int null, /*1:de uso | 2: reserva | 3: não apresentada*/
	
    sistema_anti_furto int null, /* FK tb_sistemas_anti_furto */
	sistema_anti_furto_tipo int null,
    
    vistoria_veiculo int null, /*FK*/
    vistoria_realizada int null comment 'FK tb_vistorias_realizadas',

    registro_detran int null comment 'FK tb_registro_detran',

    financeiro_veiculo int DEFAULT NULL comment'FK tb_financeiro_veiculo',

    foto_nota_fiscal_veiculo int null comment 'FK tb_fotos',

    INDEX(proprietario_veiculo),
    INDEX(vistoria_realizada),
    INDEX(foto_nota_fiscal_veiculo),
    INDEX(financeiro_veiculo),
    INDEX(documento_veiculo),
    INDEX(procedente_veiculo),
    INDEX(proprietario_anterior_veiculo),
    INDEX(registro_detran),


    FOREIGN KEY(proprietario_veiculo) REFERENCES tb_proprietario_legal(id_proprietario),
    FOREIGN KEY(vistoria_realizada) REFERENCES tb_vistorias_realizadas(id_vistoria),
    FOREIGN KEY(foto_nota_fiscal_veiculo) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(financeiro_veiculo) REFERENCES tb_financeiro_veiculo(id_financeiro),
    FOREIGN KEY(documento_veiculo) REFERENCES tb_documento_veiculo(id_documento),
    FOREIGN KEY(procedente_veiculo) REFERENCES tb_procedentes(id_procedente),
    FOREIGN KEY(proprietario_anterior_veiculo) REFERENCES tb_proprietario_anterior(id_proprietario),
    FOREIGN KEY(registro_detran) REFERENCES tb_registro_detran(id_registro_detran),
	FOREIGN KEY(sistema_anti_furto) REFERENCES tb_sistemas_anti_furto(id_sistema)

)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*TB Associados*/
drop table if exists tb_associados;
create table if not exists tb_associados(
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
    quantidade_veiculos int DEFAULT null comment 'Quantidade de veículos extras',
    civil_associado varchar(50) DEFAULT null,
    profissao_associado varchar(50) DEFAULT null,
    veiculo1_associado int DEFAULT null,
    veiculo2_associado int DEFAULT null,
    veiculo3_associado int DEFAULT null,
    veiculo4_associado int DEFAULT null,
    cnh_associado int DEFAULT null,

    relato_associado varchar(1000) comment 'Texto escrito',

    documento_frente int comment 'FK tb_fotos',
    documento_verso int comment 'FK tb_fotos',

    declaracao1 int comment 'FK tb_fotos',
    declaracao2 int comment 'FK tb_fotos',
    declaracao3 int comment 'FK tb_fotos',

    perfil_salvo int DEFAULT 2 COMMENT '1:sim | 2: não',

    FOREIGN KEY(seguradora_associado) REFERENCES tb_clientes(id_cliente),
    FOREIGN KEY(veiculo1_associado) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(veiculo2_associado) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(veiculo3_associado) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(veiculo4_associado) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(cnh_associado) REFERENCES tb_cnh_registros(id_cnh),
    FOREIGN KEY(documento_frente) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(documento_verso) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(declaracao1) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(declaracao2) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(declaracao3) REFERENCES tb_fotos(id_foto)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;



/*TB Entrevistados*/
DROP TABLE IF EXISTS tb_entrevistados;
CREATE TABLE IF NOT EXISTS tb_entrevistados(
    id_entrevistado int not null auto_increment PRIMARY KEY,
    protocolo_entrevistados VARCHAR(50) DEFAULT NULL,
    tipo_entrevistado varchar(50) comment '1: testemunha | 2: sabedor',
    testemunha_entrevistado varchar(50) comment '0: local | 1: convivio',
	perfil_entrevistado varchar(50) comment '1: Associado | 2: condutor',

    nome_entrevistado varchar(100),

    relacionamento_entrevistado varchar(50) DEFAULT NULL comment 'Texto escrito sobre qual o relacionamento',
    telefone_entrevistado varchar(11),

    cep_entrevistado varchar(8),
    endereco_entrevistado varchar(100),
    numero_end_entrevistado varchar(50),
    bairro_entrevistado varchar(100),
    cidade_entrevistado varchar(50),
    estado_entrevistado varchar(50),
    
    foto1_entrevistado int comment 'FK tb_fotos',
    foto2_entrevistado int comment 'FK tb_fotos',
    foto3_entrevistado int comment 'FK tb_fotos',
    foto4_entrevistado int comment 'FK tb_fotos',
    foto5_entrevistado int comment 'FK tb_fotos',

    documento_entrevistado_frente int comment 'FK tb_fotos',
    documento_entrevistado_verso int comment 'FK tb_fotos',

    observacao_entrevistado varchar(1000) comment 'Texto escrito',

    informacao_salva varchar(20) comment 'Se foi salvo',

    INDEX(foto1_entrevistado),
    INDEX(foto2_entrevistado),
    INDEX(foto3_entrevistado),
    INDEX(foto4_entrevistado),
    INDEX(foto5_entrevistado),
    INDEX(documento_entrevistado_frente),
    INDEX(documento_entrevistado_verso),

    FOREIGN KEY(foto1_entrevistado) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto2_entrevistado) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto3_entrevistado) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto4_entrevistado) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto5_entrevistado) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(documento_entrevistado_frente) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(documento_entrevistado_verso) REFERENCES tb_fotos(id_foto)

)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*TB Natureza de Eventos*/
drop table if exists tb_natureza_evento;
create table if not exists tb_natureza_evento(
    id_natureza int not null auto_increment PRIMARY KEY,
    descricao_natureza VARCHAR(50),
	ativacao int default '1' comment '1: Ativado | 2: Desativado'
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_natureza_evento(descricao_natureza, ativacao)values
('Roubo','1'),('Furto','1'),('Colisão','2');

/* TB TIPOS DE CIVIL*/
drop table if exists tb_tipos_civil;
create table if not exists tb_tipos_civil(
	id_civil int not null primary key auto_increment,
	descricao_civil varchar(50) default null,
	ativacao int default 1 comment '1: Ativado | 1: Desativado'
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO `tb_tipos_civil` (`id_civil`, `descricao_civil`, `ativacao`) VALUES
(1, 'Solteiro(a)', 1),
(2, 'Casado(a)', 1),
(3, 'Divorciado(a)', 1),
(4, 'ViÃºvo(a)', 1);

/* TB LOCAL DO EVENTO */
DROP TABLE IF EXISTS tb_local_evento;
CREATE TABLE IF NOT EXISTS tb_local_evento(
    id_local_evento INT NOT NULL PRIMARY KEY auto_increment,
    protocolo_local_evento VARCHAR(100) DEFAULT NULL,
    testemunha_entrevistado int default null comment '0: Local | 1: Convivio',
    quantidade_entrevistados int default null comment 'Armazenar a quantidade de entrevistados no local',

    foto1_local_evento int comment 'FK tb_fotos',
    foto2_local_evento int comment 'FK tb_fotos',
    foto3_local_evento int comment 'FK tb_fotos',

    confirmacao1_local varchar(100) comment 'Apenas: Sim | Não',
    confirmacao2_local varchar(100) comment 'Apenas: Sim | Não',
    confirmacao3_local varchar(100) comment 'Apenas: Sim | Não',
    confirmacao4_local varchar(100) comment 'Apenas: Sim | Não',
    confirmacao5_local varchar(100) comment 'Apenas: Sim | Não',
    confirmacao6_local varchar(100) comment 'Apenas: Sim | Não',

    local_evento_salvo varchar(10) comment 'Confirmação de Local salvo',

    INDEX(foto1_local_evento),
    INDEX(foto2_local_evento),
    INDEX(foto3_local_evento),

    FOREIGN KEY(foto1_local_evento) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto2_local_evento) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto3_local_evento) REFERENCES tb_fotos(id_foto)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/* TB SABEDORES CONVÍVIO*/
DROP TABLE IF EXISTS tb_entrevistados_convivio;
CREATE TABLE IF NOT EXISTS tb_entrevistados_convivio(
	id_sabedores int not null primary key auto_increment,
	protocolo_sabedores varchar(50),
	representante_sabedor varchar(2) comment '1: Associado | 2: Condutor',
	total_sabedores varchar(50) comment 'atualizar a cada nova inserção de sabedores do associado/condutor',
	
	confirmacao1_sabedores varchar(100) comment 'Versão apresentada',
	confirmacao2_sabedores varchar(100) comment 'entorpecentes/embriagues',
	confirmacao3_sabedores varchar(100) comment 'troca de condutor',
	confirmacao4_sabedores varchar(100) comment 'Velocidade informada',
	confirmacao5_sabedores varchar(100) comment 'veiculo conhecido/bom estado',
	confirmacao6_sabedores varchar(100) comment 'pernoite em garagem/via pública',
	confirmacao7_sabedores varchar(100) comment 'condutor/associado boa índole',
	confirmacao8_sabedores varchar(100) comment 'boa/má conduta do condutor/associado',
	
	informacao_geral_sabeddores varchar(1000) comment 'Texto Geral'
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;



/* Registro de Telemetria 
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
*/

/*
DROP TABLE IF EXISTS tb_app_mobilidade;
CREATE TABLE tb_app_mobilidade(
    id_app int not null PRIMARY KEY auto_increment,
    nome_app VARCHAR(50) DEFAULT NULL
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO tb_app_mobilidade(nome_app)
VALUES('Nenhum'),('99Taxis'), ('Uber');
*/



/*TB Sindicantes*/
drop table if exists tb_sindicantes;
create table if not exists tb_sindicantes(
    id_sindicante int not null auto_increment PRIMARY KEY,
    id_usuario int,
    ativacao int DEFAULT 2 COMMENT "1: Sim | 2: Não",

    FOREIGN KEY(id_usuario) REFERENCES tb_usuarios(id_usuario)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO `tb_sindicantes` (`id_sindicante`, `id_usuario`, `ativacao`) 
VALUES (NULL, '1', '1'), (NULL, '2', '1'),(NULL, '3', '1');

/* TB REGISTRO DE MOBILIDADE URBANA - FAZER */


/*Tb condutores*/
drop table if exists tb_condutores;
create table if not exists tb_condutores(
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

    veiculo_proprio int DEFAULT NULL COMMENT '1: Sim | 2: Não',
    qtd_veiculo_proprio int DEFAULT NULL COMMENT 'Quantidade de veículos próprios',

    veiculo1_condutor int DEFAULT null,
    veiculo2_condutor int DEFAULT NULL,
    veiculo3_condutor int DEFAULT NULL,
    vinculo_associado varchar(50) DEFAULT NULL,
    cnh_condutor int DEFAULT NULL,

    relato_condutor varchar(1000) comment 'Texto escrito',

    documento_frente int comment 'FK tb_fotos',
    documento_verso int comment 'FK tb_fotos',

    declaracao1 int comment 'FK tb_fotos',
    declaracao2 int comment 'FK tb_fotos',
    declaracao3 int comment 'FK tb_fotos',

    perfil_salvo int DEFAULT 2 COMMENT '1: Sim | 2: Não',

    FOREIGN KEY(veiculo1_condutor) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(veiculo2_condutor) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(veiculo3_condutor) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(cnh_condutor) REFERENCES tb_cnh_registros(id_cnh),
    FOREIGN KEY(documento_frente) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(documento_verso) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(declaracao1) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(declaracao2) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(declaracao3) REFERENCES tb_fotos(id_foto)

)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*CARACTERISTICAS TÉCNICAS*/
DROP TABLE IF EXISTS tb_caracteristicas_tecnicas;
CREATE TABLE IF NOT EXISTS tb_caracteristicas_tecnicas(
    id_caracteristica int not null primary key auto_increment,
    protocolo_caracteristica varchar(100),
    indice_criminalidade varchar(100),
    indice_sinistralidade varchar(100),
    caracteristicas_tecnicas varchar(100),
    rua_pavimentada varchar(100),
    permitido_estacionar varchar(100),
    aclive_declive varchar(100),
    tipo_direcao_pista varchar(100),
    cruzamento_pista varchar(100),
    pista_curvas varchar(100),
    pista_rotatoria varchar(100),
    velocidade_maxima varchar(100)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*Boleim de Ocorrência*/
DROP TABLE IF EXISTS tb_boletim_ocorrencia;
CREATE TABLE IF NOT EXISTS tb_boletim_ocorrencia(
    id_boletim int not null primary key auto_increment,
    protocolo_boletim varchar(100),
    autenticidade_boletim varchar(10),
    foto1_boletim int comment 'FK tb_fotos',
    foto2_boletim int comment 'FK tb_fotos',
    foto3_boletim int comment 'FK tb_fotos',
    foto4_boletim int comment 'FK tb_fotos',
    foto5_boletim int comment 'FK tb_fotos',

    INDEX(foto1_boletim),
    INDEX(foto2_boletim),
    INDEX(foto3_boletim),
    INDEX(foto4_boletim),
    INDEX(foto5_boletim),

    FOREIGN KEY(foto1_boletim) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto2_boletim) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto3_boletim) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto4_boletim) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto5_boletim) REFERENCES tb_fotos(id_foto)

)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*POLICIA MILITAR*/
DROP TABLE IF EXISTS tb_policia_militar;
CREATE TABLE IF NOT EXISTS tb_policia_militar(
    id_policia_militar int not null primary key auto_increment,
    protocolo_policia_militar varchar(100),
    irregularidades_policia_militar varchar(1000),
    foto1_policia_militar int comment 'FK tb_fotos',
    foto2_policia_militar int comment 'FK tb_fotos',
    foto3_policia_militar int comment 'FK tb_fotos',
    foto4_policia_militar int comment 'FK tb_fotos',
    foto5_policia_militar int comment 'FK tb_fotos',

    INDEX(foto1_policia_militar),
    INDEX(foto2_policia_militar),
    INDEX(foto3_policia_militar),
    INDEX(foto4_policia_militar),
    INDEX(foto5_policia_militar),

    FOREIGN KEY(foto1_policia_militar) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto2_policia_militar) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto3_policia_militar) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto4_policia_militar) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto5_policia_militar) REFERENCES tb_fotos(id_foto)
    
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*POLICIA CIVIL*/
DROP TABLE IF EXISTS tb_policia_civil;
CREATE TABLE IF NOT EXISTS tb_policia_civil(
    id_policia_civil int not null primary key auto_increment,
    protocolo_policia_civil varchar(100),
    irregularidades_policia_civil varchar(1000),
    foto1_policia_civil int comment 'FK tb_fotos',
    foto2_policia_civil int comment 'FK tb_fotos',
    foto3_policia_civil int comment 'FK tb_fotos',
    foto4_policia_civil int comment 'FK tb_fotos',
    foto5_policia_civil int comment 'FK tb_fotos',

    INDEX(foto1_policia_civil),
    INDEX(foto2_policia_civil),
    INDEX(foto3_policia_civil),
    INDEX(foto4_policia_civil),
    INDEX(foto5_policia_civil),

    FOREIGN KEY(foto1_policia_civil) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto2_policia_civil) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto3_policia_civil) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto4_policia_civil) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto5_policia_civil) REFERENCES tb_fotos(id_foto)
    
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*TABLE COPOM*/
DROP TABLE IF EXISTS tb_copom;
CREATE TABLE IF NOT EXISTS tb_copom(
    id_copom int not null primary key auto_increment,
    protocolo_copom varchar(100),
    comunicado_copom varchar(100),
    texto_divergencia varchar(1000),
    foto1_copom int comment 'FK tb_fotos',
    foto2_copom int comment 'FK tb_fotos',
    foto3_copom int comment 'FK tb_fotos',
    foto4_copom int comment 'FK tb_fotos',
    foto5_copom int comment 'FK tb_fotos',

    INDEX(foto1_copom),
    INDEX(foto2_copom),
    INDEX(foto3_copom),
    INDEX(foto4_copom),
    INDEX(foto5_copom),

    FOREIGN KEY(foto1_copom) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto2_copom) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto3_copom) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto4_copom) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto5_copom) REFERENCES tb_fotos(id_foto)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;


/*REGISTRO MOBILIDADE*/
DROP TABLE IF EXISTS tb_registro_mobilidade;
CREATE TABLE IF NOT EXISTS tb_registro_mobilidade(
    id_mobilidade int not null PRIMARY KEY auto_increment,
    protocolo_mobilidade varchar (50) DEFAULT NULL,
    
    data_mobilidade varchar (50) DEFAULT NULL,
    hora_mobilidade varchar (50) DEFAULT null,
    trajeto_mobilidade varchar(50) default null,

    foto1_mobilidade int comment 'FK tb_fotos',
    foto2_mobilidade int comment 'FK tb_fotos',
    foto3_mobilidade int comment 'FK tb_fotos',
    foto4_mobilidade int comment 'FK tb_fotos',
    foto5_mobilidade int comment 'FK tb_fotos',

    INDEX(foto1_mobilidade),
    INDEX(foto2_mobilidade),
    INDEX(foto3_mobilidade),
    INDEX(foto4_mobilidade),
    INDEX(foto5_mobilidade),
    

    FOREIGN KEY(foto1_mobilidade) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto2_mobilidade) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto3_mobilidade) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto4_mobilidade) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto5_mobilidade) REFERENCES tb_fotos(id_foto)

)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*MOTORISTA POR APLICATIVO*/
DROP TABLE IF EXISTS tb_motorista_aplicativo;
CREATE TABLE tb_motorista_aplicativo(
    id_motorista_aplicativo int not NULL PRIMARY KEY auto_increment,
    protocolo_motorista_aplicativo VARCHAR(50) DEFAULT NULL,

    descricao_comprovante varchar(1000),
    
    foto1_motorista int DEFAULT NULL COMMENT 'FK tb_fotos',
    foto2_motorista int DEFAULT NULL COMMENT 'FK tb_fotos',
    foto3_motorista int DEFAULT NULL COMMENT 'FK tb_fotos',
    foto4_motorista int DEFAULT NULL COMMENT 'FK tb_fotos',
    foto5_motorista int DEFAULT NULL COMMENT 'FK tb_fotos',
    
    
    FOREIGN KEY(foto1_motorista) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto2_motorista) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto3_motorista) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto4_motorista) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(foto5_motorista) REFERENCES tb_fotos(id_foto)
    
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*TB Relatorios*/
DROP TABLE IF EXISTS tb_relatorios;
create table if not exists tb_relatorios(
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
    caracteristicas_local_evento int DEFAULT NULL comment 'FK tb_caracteristicas_tecnicas',
    boletim_ocorrencia int default null comment 'FK tb_boletim_ocorrencia', 
    policia_civil int default null comment 'FK tb_policia_civil',
    policia_militar int default null comment 'FK tb_policia_militar',
    registro_copom int default null comment 'FK tb_copom',
    registro_mobilidade int default null comment 'FK tb_registro_mobilidade',
    registro_motorista_app int default null comment 'FK tb_motorista_aplicativo',
    registro_local_evento int default null comment 'FK tb_local_evento',

    status_relatorio VARCHAR(50) DEFAULT NULL,

    contexto_geral_relatorio longtext DEFAULT null,
    dinamica_do_evento longtext default null,

    print_associado int DEFAULT NULL, /* 1: Sim | 2: Não */
    print_condutor int DEFAULT NULL, /* 1: Sim | 2: Não */

    FOREIGN KEY(solicitante_evento) REFERENCES tb_clientes(id_cliente),
    FOREIGN KEY(sindicante_evento) REFERENCES tb_usuarios(id_usuario),
    FOREIGN KEY(natureza_evento) REFERENCES tb_natureza_evento(id_natureza),
    FOREIGN key(condutor_evento) REFERENCES tb_condutores(id_condutor),
    FOREIGN KEY(caracteristicas_local_evento) REFERENCES tb_caracteristicas_tecnicas(id_caracteristica),
    FOREIGN KEY(boletim_ocorrencia) REFERENCES tb_boletim_ocorrencia(id_boletim),
    FOREIGN KEY(policia_civil) REFERENCES tb_policia_civil(id_policia_civil),
    FOREIGN KEY(policia_militar) REFERENCES tb_policia_militar(id_policia_militar),
    FOREIGN KEY(registro_copom) REFERENCES tb_copom(id_copom),
    FOREIGN KEY(registro_mobilidade) REFERENCES tb_registro_mobilidade(id_mobilidade),
    FOREIGN KEY(registro_motorista_app) REFERENCES tb_motorista_aplicativo(id_motorista_aplicativo),
    FOREIGN KEY(registro_local_evento) REFERENCES tb_local_evento(id_local_evento)

)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;



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
ALTER TABLE `tb_mensagens`
  ADD PRIMARY KEY (`id_mensagem`);

INSERT INTO `tb_mensagens` (`id_mensagem`, `data_mensagem`, `emissor_mensagem`, `receptor_mensagem`, `assunto_mensagem`, `conteudo_mensagem`, `status_mensagem`, `resposta_mensagem`) VALUES
(1, '2020-10-12 19:30', 1, 1, 'Novo relatorio recebido - Protocolo: 2020-1', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.', 0, 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.');
