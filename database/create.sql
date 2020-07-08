drop database if exists c2assessoria;

create database c2assessoria DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

use c2assessoria;

create table tb_senhas_auth(
    id_senha int not null primary key auto_increment,
    md5_senha varchar(500)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

insert into tb_senhas_auth(id_senha, md5_senha)values(1, 'eb0a191797624dd3a48fa681d3061212');

create table tb_permissoes(
    id_permissao int not null primary key auto_increment,
    nivel_permissao varchar(50)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

insert into tb_permissoes(id_permissao, nivel_permissao)values(1, 'Master');

create table tb_usuarios(
    id_usuario int not null primary key auto_increment,
    email_usuario varchar(100) not null,
    nome_usuario varchar(50) not null,
    senha_usuario int,
    permissao_usuario int,
    FOREIGN KEY(senha_usuario) REFERENCES tb_senhas_auth(id_senha),
    FOREIGN KEY(permissao_usuario) REFERENCES tb_permissoes(id_permissao)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

insert into tb_usuarios(
    email_usuario,nome_usuario,senha_usuario,permissao_usuario
)VALUES(
    'hugo.n2y@gmail.com',
    'Hugo Christian',
    1,
    1
);

create table tb_clientes(
    id_cliente int not null PRIMARY KEY auto_increment,
    cpf_cliente bigint not null,
    nome_cliente varchar(500) not null,
    seguradora_cliente int not null
);

insert into tb_clientes(cpf_cliente,nome_cliente,seguradora_cliente)
VALUES(12345678910,"Ariosvaldo da Silva",1);