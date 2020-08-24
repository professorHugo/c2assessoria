drop database if exists c2assessoria;

create database c2assessoria DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

use c2assessoria;

/*TB Senhas MD5*/
create table tb_senhas_auth(id_senha int not null primary key auto_increment,md5_senha varchar(500))ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_senhas_auth(id_senha, md5_senha)values(1, 'eb0a191797624dd3a48fa681d3061212');

/*TB Permissões*/
create table tb_permissoes(id_permissao int not null primary key auto_increment,nivel_permissao varchar(50))ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_permissoes(nivel_permissao)values('Master'),('Sindicante');

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
    protocolo_evento varchar(50) DEFAULT NULL,
    nome_proprietario varchar(200) DEFAULT NULL,
    chn_proprietario varchar(200) DEFAULT NULL
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

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
    nome_cliente VARCHAR(100),
    data_cadastro TIMESTAMP null DEFAULT current_timestamp
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

/*TB Vistorias Realizadas*/
create table tb_vistorias_realizadas(
    id_vistoria int not null auto_increment PRIMARY KEY,
    protocolo_vistoria VARCHAR(20) DEFAULT NULL,
    situacao_vistoria varchar(50) DEFAULT NULL,
    arquivo_vistoria int DEFAULT NULL,
    data_vistoria TIMESTAMP null DEFAULT current_timestamp,

    FOREIGN KEY(arquivo_vistoria) REFERENCES tb_fotos(id_foto)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*Tb Fotos Documentos Veículos Segurados*/
create table tb_fotos_veiculos(
    id_foto int not null PRIMARY KEY auto_increment,
    local_foto VARCHAR(100) DEFAULT NULL,
    nome_foto VARCHAR(100) DEFAULT NULL
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*tb tipos procedentes*/
create table tb_tipos_procedentes(
    id_procedente INT NOT NULL PRIMARY KEY auto_increment,
    descricao_procedente VARCHAR(20) DEFAULT NULL
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
    id_tipo_chave INT NOT NULL PRIMARY KEY auto_increment,
    descricao_chave VARCHAR(100) DEFAULT NULL
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

    FOREIGN KEY(tipo_chave_apresentada) REFERENCES tb_tipos_chaves(id_tipo_chave)
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
    seguro_veiculo varchar(10) DEFAULT "Sim",
    dut_veiculo varchar(100) null,
    procedente_veiculo int(1) null, /*1: LOJA | 2: PARTICULAR | 3: LEILÃO*/
    proprietario_anterior_veiculo varchar(100) DEFAULT null,
    procedencia_apresentada int,
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
    INDEX(vistoria_veiculo),
    INDEX(vistoria_veiculo),
    INDEX(data_vistoria_veiculo),
    INDEX(foto_nota_fiscal_veiculo),
    INDEX(procedencia_apresentada),


    FOREIGN KEY(proprietario_veiculo) REFERENCES tb_proprietarios(id_proprietario),
    FOREIGN KEY(vistoria_veiculo) REFERENCES tb_tipo_vistorias(id_tipo_vistoria),
    FOREIGN KEY(data_vistoria_veiculo) REFERENCES tb_vistorias_realizadas(id_vistoria),
    FOREIGN KEY(foto_nota_fiscal_veiculo) REFERENCES tb_fotos(id_foto),
    FOREIGN KEY(procedencia_apresentada) REFERENCES tb_fotos_procedentes(id_foto_procedente)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;



/*TB Associados*/
create table tb_associados(
    id_associado int not null PRIMARY KEY auto_increment,
    cpf_associado bigint DEFAULT null,
    rg_associado bigint DEFAULT null,
    seguradora_associado int DEFAULT null,
    nome_associado varchar(200) DEFAULT null,
    cep_associado varchar(11) DEFAULT null,
    endereco_associado varchar(100) DEFAULT null,
    bairro_associado varchar(50) DEFAULT null,
    cidade_associado varchar(50) DEFAULT null,
    estado_associado varchar(50) DEFAULT null,
    nacionalidade_associado varchar(50) DEFAULT null,
    civil_associado varchar(50) DEFAULT null,
    profissao_associado varchar(50) DEFAULT null,
    veiculo1_associado int DEFAULT null,
    veiculo2_associado int DEFAULT null,
    veiculo3_associado int DEFAULT null,
    veiculo4_associado int DEFAULT null,
    status_cnh_associado int DEFAULT null,
    FOREIGN KEY(seguradora_associado) REFERENCES tb_clientes(id_cliente),
    FOREIGN KEY(veiculo1_associado) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(veiculo2_associado) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(veiculo3_associado) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(veiculo4_associado) REFERENCES tb_veiculos(id_veiculo)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

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

/*Tb condutores*/
create table tb_condutores(
    id_condutor int not null PRIMARY KEY auto_increment,
    protocolo_evento varchar(50) DEFAULT NULL,
    nome_condutor varchar(255) DEFAULT null,
    civil_condutor varchar(50) DEFAULT NULL,
    profissao_condutor varchar(50) DEFAULT NULL,
    veiculo1_condutor int DEFAULT null,
    veiculo2_condutor int DEFAULT NULL,
    veiculo3_condutor int DEFAULT NULL,
    vinculo_associado varchar(50) DEFAULT NULL,

    FOREIGN KEY(veiculo1_condutor) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(veiculo2_condutor) REFERENCES tb_veiculos(id_veiculo),
    FOREIGN KEY(veiculo3_condutor) REFERENCES tb_veiculos(id_veiculo)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

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
    status_relatorio VARCHAR(50) DEFAULT NULL,

    midias_sociais_associado VARCHAR(10) DEFAULT null,
    print_midias_associado VARCHAR(100) DEFAULT null,

    FOREIGN KEY(solicitante_evento) REFERENCES tb_clientes(id_cliente),
    FOREIGN KEY(natureza_evento) REFERENCES tb_natureza_evento(id_natureza),
    FOREIGN key(condutor_evento) REFERENCES tb_condutores(id_condutor)
    
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;


create table tb_marcas_veiculos(
    id_marca int not null PRIMARY KEY auto_increment,
    nome_marca VARCHAR(100) DEFAULT NULL
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
insert into tb_marcas_veiculos(nome_marca)VALUES
("ACURA") ,
-- ("ADAMO") ,
-- ("AGRALE") ,
-- ("ALFA ROMEO") ,
-- ("AM GEN") ,
-- ("AMERICAR") ,
-- ("ASIA") ,
-- ("ASTON MARTIN") ,
-- ("AUDI") ,
-- ("AUSTIN") ,
-- ("BAJA") ,
-- ("BEACH") ,
-- ("BENTLEY") ,
-- ("BIANCO") ,
-- ("BMW") ,
-- ("BRM") ,
-- ("BUGATTI") ,
-- ("BUGGY") ,
-- ("BUGRE") ,
-- ("BUGWAY") ,
-- ("BUICK "),
-- ("CADILLAC "),
-- ("CARVER "),
-- ("CBT "),
-- ("CHAMONIX "),
-- ("CHANA "),
-- ("CHEDA "),
-- ("CHERY "),
-- ("CHEVROLET "),
-- ("CHRYSLER "),
-- ("CITROËN "),
-- ("COYOTE "),
-- ("CROSS LANDER "),
-- ("DAEWOO "),
-- ("DAIHATSU DE SOTO "),
-- ("DKW-VEMAG "),
-- ("DODGE "),
-- ("DS "),
-- ("DUNNAS "),
-- ("EAGLE "),
-- ("EFFA "),
-- ("EMIS "),
-- ("ENGESA "),
-- ("ENVEMO "),
-- ("FARUS "),
-- ("FERCAR BUGGY "),
-- ("FERRARI "),
-- ("FIAT "),
-- ("FIBRAVAN "),
-- ("FNM "),
-- ("FORD "),
-- ("FYBER "),
-- ("GEELY "),
-- ("GEO "),
-- ("GMC "),
-- ("GRANCAR "),
-- ("GREAT WALL "),
-- ("GURGEL "),
-- ("HAFEI "),
-- ("HB "),
-- ("HITECH ELETRIC "),
-- ("HOFSTETTER") ,
-- ("HONDA") ,
-- ("HUMMER") ,
-- ("HYUNDAI") ,
-- ("INCOFER") ,
-- ("INFINITI") ,
-- ("INTERNATIONAL") ,
-- ("ISUZU") ,
-- ("IVECO") ,
-- ("JAC") ,
-- ("JAGUAR") ,
-- ("JEEP") ,
-- ("JINBEI") ,
-- ("JPX") ,
-- ("KIA") ,
-- ("KOENIGSEGG") ,
-- ("L AUTOMOBILE"),
-- ("L'AUTO CRAFT"),
-- ("LADA "),
-- ("LAMBORGHINI") ,
-- ("LANCIA") ,
-- ("LAND ROVER") ,
-- ("LEXUS") ,
-- ("LIFAN") ,
-- ("LINCOLN") ,
-- ("LOBINI") ,
-- ("LOTUS") ,
-- ("MAHINDRA") ,
-- ("MARCOPOLO") ,
-- ("MARINA´S") ,
-- ("MASERATI") ,
-- ("MATRA") ,
-- ("MAYBACH") ,
-- ("MAZDA") ,
-- ("MCLAREN") ,
-- ("MENON") ,
-- ("MERCEDES-BENZ") ,
-- ("MERCURY") ,
-- ("MG") ,
-- ("MINI") ,
-- ("MITSUBISHI") ,
-- ("MIURA") ,
-- ("MORRIS") ,
-- ("MP LAFER") ,
-- ("MPLM") ,
-- ("NISSAN") ,
-- ("NISSIN") ,
-- ("OLDSMOBILE") ,
-- ("OPEL") ,
-- ("PAG") ,
-- ("PAGANI") ,
-- ("PEUGEOT") ,
-- ("PLYMOUTH") ,
-- ("PONTIAC") ,
-- ("PORSCHE") ,
-- ("PUMA") ,
-- ("RELY") ,
-- ("RENAULT") ,
-- ("RENO") ,
-- ("ROLLS-ROYCE") ,
-- ("ROMI") ,
-- ("ROVER") ,
-- ("SAAB") ,
-- ("SANTA MATILDE "),
-- ("SATURN") ,
-- ("SEAT") ,
-- ("SHELBY") ,
-- ("SHINERAY") ,
-- ("SHORT") ,
-- ("SIMCA") ,
-- ("SMART") ,
-- ("SPYKER") ,
-- ("SSANGYONG") ,
-- ("STUDEBAKER") ,
-- ("SUBARU") ,
-- ("SUZUKI") ,
-- ("TAC") ,
-- ("TESLA") ,
-- ("TOYOTA") ,
-- ("TRIUMPH") ,
-- ("TROLLER") ,
-- ("UNIMOG") ,
-- ("VOLKSWAGEN") ,
-- ("VOLVO") ,
-- ("WAKE") ,
-- ("WALK") ,
-- ("WAY BRASIL") ,
("WILLYS")