CREATE DATABASE ferrovia_GitTrens;
USE ferrovia_GitTrens;

CREATE TABLE usuario(
    id int primary key auto_increment,
    nome_usuario varchar(255) not null,
    email_usuario varchar(255) not null unique,
    senha_usuario varchar(255) not null,
    telefone_usuario varchar(11) not null,
    cargo_usuario ENUM('Administrador','Maquinista','Usuario') not null,
    nascimento_usuario date not null,
    foto_perfil varchar(255) default 'default.jpg',
    cep VARCHAR(9),
    rua VARCHAR(100),
    bairro VARCHAR(100),
    cidade VARCHAR(100),
    estado VARCHAR(2)
);

CREATE TABLE trem(
    id_trem int primary key auto_increment not null,
    modelo varchar(45),
    capacidade_carga float,
    empresa_proprietaria varchar(45),
    status_trem ENUM('ativo', 'suspenso', 'manutenção'),
    consumo_combustível varchar(45),
    ano_trem int,
    fk_maquinista int,
    foreign key (fk_maquinista) references usuario(id)
);

CREATE TABLE rota(
    id_rota int primary key auto_increment,
    nome_rota varchar(45),
    estação_origem varchar(45),
    estação_destino varchar(45),
    distancia float,
    intensidade_movimento ENUM('alta', 'baixa', 'média'),
    horario_funcionamento varchar(50)
    
);

CREATE TABLE trem_na_rota(
    fk_rota int,
    fk_trem int,
    foreign key (fk_rota) references rota(id_rota),
    foreign key (fk_trem) references trem(id_trem)
);


CREATE TABLE notificacao(
    id_notificacao int primary key auto_increment,
    assunto varchar(45) not null,
    descricao varchar(500) not null,
    estado ENUM('a fazer','fazendo','feito') not null,
    horario time not null,
    data_notificacao date not null,
    prioridade ENUM('baixa','média','alta') not null

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
 fk_id_sensor int not null,
 FOREIGN KEY (fk_id_sensor)REFERENCES sensor(id_sensor)
);

INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario, telefone_usuario, cargo_usuario, nascimento_usuario) 
VALUES 
('adm','adm@gmail.com','1234','12345678910','Administrador','2025-05-21');

INSERT INTO rota (nome_rota, estação_origem, estação_destino, distancia, intensidade_movimento, horario_funcionamento)
VALUES 
('rota1', 'saida1', 'estação2', 130.5, 'alta', '05:00 - 23:00');

INSERT INTO rota (nome_rota, estação_origem, estação_destino, distancia, intensidade_movimento, horario_funcionamento)
VALUES 
('rota2', 'saida1', 'estação3', 95.2, 'média', '06:00 - 22:00');

INSERT INTO rota (nome_rota, estação_origem, estação_destino, distancia, intensidade_movimento, horario_funcionamento)
VALUES 
('rota3', 'saida2', 'estação1', 521.7, 'baixa', '07:00 - 21:00');
