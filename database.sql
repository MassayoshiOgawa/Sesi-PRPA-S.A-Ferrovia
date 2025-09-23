CREATE DATABASE ferrovia_GitTrens;
USE ferrovia_GitTrens;

CREATE TABLE usuario(
    id int primary key auto_increment,
    nome_usuario varchar(255) not null,
    email_usuario varchar(255) not null,
    senha_usuario varchar(255) not null,
    telefone_usuario varchar(11),
    cargo_usuario varchar(50),
    nascimento_usuario date,
    adm boolean,
    maquinista boolean
);

CREATE TABLE trem(
    id_trem int primary key auto_increment,
    desempenho int not null,
    consumo_energia int not null,
    eficiencia varchar(10) not null,
    fk_maquinista int,
    foreign key (fk_maquinista) references usuario(id)
);

CREATE TABLE rota(
    id_rota int primary key auto_increment,
    intensidade_movimento varchar(40),
    horario_funcionamento varchar(50),
    cor_rota varchar(9) 
);

CREATE TABLE trem_na_rota(
    fk_rota int,
    fk_trem int,
    foreign key (fk_rota) references rota(id_rota),
    foreign key (fk_trem) references trem(id_trem)
);


CREATE TABLE notificacao(
    id_notificacao int primary key auto_increment,
    fk_trem int not null,
    descricao varchar(500) not null,
    resolvido boolean not null,
    horario time not null,
    nivel_problema varchar(15) not null,
    foreign key (fk_trem) references trem(id_trem)
);

CREATE TABLE sensor(
    id_sensor int primary key auto_increment,
    descricao varchar (500) not null,
    sensor_status varchar (200) not null,
    fk_sensor_data int
);

CREATE TABLE sensor_data(
 id_sensor_data int primary key auto_increment,
 valor int not null,
 data_hora timestamp,
 fk_id_sensor
);