drop database if exists c2assessoria;

create database c2assessoria DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

use c2assessoria;

/*TB Senhas MD5*/
create table tb_senhas_auth(id_senha int not null primary key auto_increment,md5_senha varchar(500))ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_senhas_auth(id_senha, md5_senha)values(1, 'eb0a191797624dd3a48fa681d3061212');

/*TB Permissões*/
create table tb_permissoes(id_permissao int not null primary key auto_increment,nivel_permissao varchar(50))ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_permissoes(id_permissao, nivel_permissao)values(1, 'Master');

/*TB Usuários*/
create table tb_usuarios(
    id_usuario int not null primary key auto_increment,
    email_usuario varchar(100) not null,
    nome_usuario varchar(50) not null,
    senha_usuario int, /* FK */
    permissao_usuario int, /* FK */
    FOREIGN KEY(senha_usuario) REFERENCES tb_senhas_auth(id_senha),
    FOREIGN KEY(permissao_usuario) REFERENCES tb_permissoes(id_permissao)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_usuarios(email_usuario,nome_usuario,senha_usuario,permissao_usuario)VALUES('hugo.n2y@gmail.com','Hugo Christian',1,1);

/*TB Proprietários*/
create table tb_proprietarios(
    id_proprietario int not null PRIMARY KEY auto_increment,
    nome_proprietario varchar(200) not null,
    chn_proprietario varchar(200) not null
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_proprietarios(
    nome_proprietario,
    chn_proprietario
)values(
    'Hugo Christian Pereira Gomes',
    '1234567891011'
);

/*TB Sistemas Anti-Furto*/
create table tb_sistemas_anti_furto(
    id_sistema int not null auto_increment PRIMARY KEY,
    tipo_sistema varchar(50) not null
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_sistemas_anti_furto(
    tipo_sistema
)values('Alarme'),('Rastreador'),('Localizador'),('Rastreador/Localizador');

/*TB Tipo de Vistorias*/
create table tb_tipo_vistorias(
    id_tipo_vistoria int not null auto_increment PRIMARY KEY,
    nome_tipo_vistoria varchar(100) not null
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_tipo_vistorias(
    nome_tipo_vistoria
)values(
    'Periódica'
);

/*TB Clientes (Seguradoras)*/
create table tb_clientes(
    id_cliente int not null auto_increment PRIMARY KEY,
    nome_cliente VARCHAR(100)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_clientes(nome_cliente)values
('Universo AGV - Associação Gestão Veicular Universo'),
('Auto-Truck - Associação de Autimóveis e Veículos Pesados'),
('APVS BRASIL - ASSOCIACAO PROTETORA VEICULAR E SERVICOS SOCIAIS'),
('NET CAR - NET CAR CLUBE DE BENEFICIOS'),
('PROAUTO - ASSOCIACAO PROTETORA DE VEICULOS AUTOMOTORES '),
('SEJA UNNICA - ASSOCIAÇÃO DE BENEFICIOS UNNICA'),
('TECX PARK - GESTÃO DE MÃO OBRA T. S. T. LTDA');

/*TB Vistorias Realizadas*/
create table tb_vistorias_realizadas(
    id_vistoria int not null auto_increment PRIMARY KEY,
    tipo_vistoria int not null, /* FK */
    data_vistoria varchar(20) not null,
    FOREIGN KEY(tipo_vistoria) REFERENCES tb_tipo_vistorias(id_tipo_vistoria)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_vistorias_realizadas(
    tipo_vistoria,
    data_vistoria
)values(
    1,
    '01/07/2020'
);

/*TB Fotos*/
create table tb_fotos(
    id_foto int not null auto_increment PRIMARY KEY,
    proprietario_foto int not null, /* FK */
    nome_foto varchar(200),
    FOREIGN KEY(proprietario_foto) REFERENCES tb_proprietarios(id_proprietario)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_fotos(
    proprietario_foto,
    nome_foto
)values(
    1,
    'vistorias/Hugo%20Christian'
);

/*TB Veículos*/
create table tb_veiculos(
    id_veiculo int not null auto_increment primary key,
    segurado_veiculo varchar(11) null,
    proprietario_veiculo int null,
    marca_veiculo varchar(50) null,
    modelo_veiculo varchar(100) null,
    placa_veiculo varchar(8) null,
    dut_veiculo varchar(100) null,
    procedente_veiculo int(1) null, /*1: LOJA | 2: PARTICULAR | 3: LEILÃO*/
    chaves_apresentadas_veiculo int null, /*1:de uso | 2: reserva | 3: não apresentada*/
    sistema_anti_furto int null, /* FK */
    evento_multa_veiculo int null, /*0: não | 1: sim*/
    restricoes1_veiculo varchar(100),
    restricoes2_veiculo varchar(100),
    restricoes3_veiculo varchar(100),
    queixa_evento_veiculo int null, /*0: não | 1: sim*/
    vistoria_veiculo int null, /*FK*/
    data_vistoria_veiculo int null, /* FK */
    instituicao_financeira_veiculo varchar(100),
    parcelas_financiamento_veiculo int null,
    valor_parcela_financiamento_veiculo varchar(100),
    parcelas_pagas_financiamento_veiculo int null, /*QUANTIDADE NUMÉRICA DE PARCELAS PAGAS*/
    atraso_financiamento_veiculo int null, /* 0: não | 1: sim */
    foto_nota_fiscal_veiculo int null,

    INDEX(proprietario_veiculo),
    INDEX(sistema_anti_furto),
    INDEX(vistoria_veiculo),
    INDEX(vistoria_veiculo),
    INDEX(data_vistoria_veiculo),
    INDEX(foto_nota_fiscal_veiculo),

    FOREIGN KEY(proprietario_veiculo) REFERENCES tb_proprietarios(id_proprietario),
    FOREIGN KEY(sistema_anti_furto) REFERENCES tb_sistemas_anti_furto(id_sistema),
    FOREIGN KEY(vistoria_veiculo) REFERENCES tb_tipo_vistorias(id_tipo_vistoria),
    FOREIGN KEY(data_vistoria_veiculo) REFERENCES tb_vistorias_realizadas(id_vistoria),
    FOREIGN KEY(foto_nota_fiscal_veiculo) REFERENCES tb_fotos(id_foto)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO `tb_veiculos` (`id_veiculo`, `proprietario_veiculo`, `marca_veiculo`, `modelo_veiculo`, `placa_veiculo`, `dut_veiculo`, `procedente_veiculo`, `chaves_apresentadas_veiculo`, `sistema_anti_furto`, `evento_multa_veiculo`, `restricoes1_veiculo`, `restricoes2_veiculo`, `restricoes3_veiculo`, `queixa_evento_veiculo`, `vistoria_veiculo`, `data_vistoria_veiculo`, `instituicao_financeira_veiculo`, `parcelas_financiamento_veiculo`, `valor_parcela_financiamento_veiculo`, `parcelas_pagas_financiamento_veiculo`, `atraso_financiamento_veiculo`, `foto_nota_fiscal_veiculo`) VALUES (NULL, '1', 'Fiat', '147', 'ABC123', '123456', '1', '1', '1', '0', NULL, NULL, NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, '1');



/*TB Associados*/
create table tb_associados(
    id_associado int not null PRIMARY KEY auto_increment,
    cpf_associado bigint not null,
    rg_associado bigint not null,
    seguradora_associado int not null,
    nome_associado varchar(200) not null,
    cep_associado varchar(11) not null,
    endereco_associado varchar(100) not null,
    bairro_associado varchar(50) not null,
    cidade_associado varchar(50) not null,
    estado_associado varchar(50) not null,
    nacionalidade_associado varchar(50) not null,
    civil_associado varchar(50) not null,
    profissao_associado varchar(50) not null,
    veiculo1_associado int not null,
    veiculo2_associado int null,
    veiculo3_associado int null,
    status_cnh_associado int not null,
    FOREIGN KEY(seguradora_associado) REFERENCES tb_clientes(id_cliente),
    FOREIGN KEY(veiculo1_associado) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(veiculo2_associado) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(veiculo3_associado) REFERENCES tb_veiculos(id_veiculo)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO `tb_associados` (`id_associado`, `cpf_associado`, `rg_associado`, `seguradora_associado`, `nome_associado`, `cep_associado`, `endereco_associado`, `bairro_associado`, `cidade_associado`, `estado_associado`, `nacionalidade_associado`, `civil_associado`, `profissao_associado`, `veiculo1_associado`, `veiculo2_associado`, `veiculo3_associado`, `status_cnh_associado`) VALUES ('1', '12345678910', '123456789', '1', 'Hugo Christian Pereira Gomes', '03977380', 'Rua Sargento Edésio Afonso de Carvalho, 128', 'Mascarenhas de Moraes', 'São Paulo', 'SP', 'Brasil', 'Solteiro', 'Programador', '1', NULL, NULL, '1');

/*TB Intrevistados*/
create table tb_entrevistados(
    id_entrevistado int not null auto_increment PRIMARY KEY,
    tipo_entrevistado int, /*0: evento | 1: convivio | 2: testemunha*/
    nome_entrevistado varchar(100),
    sexo_entrevistado varchar(9),
    telefone_entrevistado varchar(11),
    cep_entrevistado varchar(8),
    endereco_entrevistado varchar(100),
    bairro_entrevistado varchar(100),
    cidade_entrevistado varchar(50),
    nacionalidade_entrevistado varchar(50),
    foto_declaracao_entrevistado int,

    FOREIGN KEY(foto_declaracao_entrevistado) REFERENCES tb_fotos(id_foto)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*TB Natureza de Eventos*/
create table tb_natureza_evento(
    id_natureza int not null auto_increment PRIMARY KEY,
    descricao_natureza VARCHAR(50)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_natureza_evento(descricao_natureza)values
('Roubo'),('Furto'),('Colisão');

/*TB Sindicantes*/
create table tb_sindicantes(
    id_sindicante int not null auto_increment PRIMARY KEY,
    id_usuario int,
    FOREIGN KEY(id_usuario) REFERENCES tb_usuarios(id_usuario)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_sindicantes(id_usuario)values(1);


/*TB Relatorios*/
DROP TABLE IF EXISTS tb_relatorios;
create table tb_relatorios(
    id_relatorio int not null PRIMARY KEY auto_increment,
    horario_criacao TIMESTAMP not null DEFAULT current_timestamp,
    horario_update TIMESTAMP null,
    solicitante_evento int,
    protocolo_evento varchar(255),
    natureza_evento int,
    cpf_associado varchar(11),
    condutor_veiculo int DEFAULT null, /* 1: Associado | 2: Terceiros */
    nome_condutor varchar(255) DEFAULT null,
    placa_veiculo_evento varchar(10) DEFAULT null,
    data_evento date DEFAULT null,
    horario_evento VARCHAR(10) DEFAULT null,
    cep_evento VARCHAR(10) DEFAULT null,
    endereco_evento VARCHAR(255) DEFAULT null,
    bairro_evento VARCHAR(255) DEFAULT null,
    cidade_evento VARCHAR(255) DEFAULT null,
    uf_evento VARCHAR(10) DEFAULT null,
    estado_civil_associado VARCHAR(50) DEFAULT null,
    profissao_associado VARCHAR(100) DEFAULT null,
    outros_veiculos_associado int DEFAULT null,
    quantidade_veiculos_associado int DEFAULT null,

    placa_veiculo1_associado VARCHAR(10) DEFAULT null,
    marca_veiculo1_associado VARCHAR(20) DEFAULT null,
    modelo_veiculo1_associado VARCHAR(100) DEFAULT null,
    seguro_veiculo1_associado VARCHAR(10) DEFAULT null,

    placa_veiculo2_associado VARCHAR(10) DEFAULT null,
    marca_veiculo2_associado VARCHAR(20) DEFAULT null,
    modelo_veiculo2_associado VARCHAR(100) DEFAULT null,
    seguro_veiculo2_associado VARCHAR(10) DEFAULT null,

    placa_veiculo3_associado VARCHAR(10) DEFAULT null,
    marca_veiculo3_associado VARCHAR(20) DEFAULT null,
    modelo_veiculo3_associado VARCHAR(100) DEFAULT null,
    seguro_veiculo3_associado VARCHAR(10) DEFAULT null,

    midias_sociais_associado VARCHAR(10) DEFAULT null,
    print_midias_associado VARCHAR(100) DEFAULT null,

    FOREIGN KEY(solicitante_evento) REFERENCES tb_clientes(id_cliente),
    FOREIGN KEY(natureza_evento) REFERENCES tb_natureza_evento(id_natureza)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
