DROP DATABASE IF EXISTS ferrovia_GitTrens;
CREATE DATABASE ferrovia_GitTrens;
USE ferrovia_GitTrens;


CREATE TABLE usuario(
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome_usuario VARCHAR(255) NOT NULL,
    email_usuario VARCHAR(255) NOT NULL UNIQUE,
    senha_usuario VARCHAR(255) NOT NULL,
    telefone_usuario VARCHAR(20) NOT NULL,
    cargo_usuario ENUM('Administrador','Maquinista','Usuario') NOT NULL,
    nascimento_usuario DATE NOT NULL,
    foto_perfil VARCHAR(255) DEFAULT 'default.jpg',
    cep_usuario VARCHAR(8),
    rua_usuario VARCHAR(100),
    bairro_usuario VARCHAR(100),
    cidade_usuario VARCHAR(100),
    estado_usuario VARCHAR(2)
);

INSERT INTO usuario 
(nome_usuario, email_usuario, senha_usuario, telefone_usuario, cargo_usuario, nascimento_usuario) 
VALUES 
('adm','adm@gmail.com','1234','12345678910','Administrador','2025-05-21');

 INSERT INTO usuario
(nome_usuario, email_usuario, senha_usuario, telefone_usuario, cargo_usuario, nascimento_usuario,
 cep_usuario, rua_usuario, bairro_usuario, cidade_usuario, estado_usuario)
VALUES
('$nome', '$email', '$senha', '$telefone', '$cargo', '$nascimento',
 '$cep_limpo', '$logradouro', '$bairro', '$cidade', '$estado');




CREATE TABLE trem(
    id_trem INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    modelo VARCHAR(45),
    capacidade_carga FLOAT,
    empresa_proprietaria VARCHAR(45),
    status_trem ENUM('ativo', 'suspenso', 'manutencao'),
    consumo_combustivel VARCHAR(45),
    ano_trem INT,
    fk_maquinista INT,
    FOREIGN KEY (fk_maquinista) REFERENCES usuario(id_usuario)
);


CREATE TABLE rota(
    id_rota INT PRIMARY KEY AUTO_INCREMENT,
    nome_rota VARCHAR(45),
    estacao_origem VARCHAR(45),
    estacao_destino VARCHAR(45),
    distancia FLOAT,
    intensidade_movimento ENUM('alta', 'baixa', 'media'),
    horario_funcionamento VARCHAR(50)
);

INSERT INTO rota (nome_rota, estacao_origem, estacao_destino, distancia, intensidade_movimento, horario_funcionamento)
VALUES 
('rota1', 'saida1', 'estacao2', 130.5, 'alta', '05:00 - 23:00'),
('rota2', 'saida1', 'estacao3', 95.2, 'media', '06:00 - 22:00'),
('rota3', 'saida2', 'estacao1', 521.7, 'baixa', '07:00 - 21:00');


CREATE TABLE trem_na_rota(
    fk_rota INT,
    fk_trem INT,
    FOREIGN KEY (fk_rota) REFERENCES rota(id_rota),
    FOREIGN KEY (fk_trem) REFERENCES trem(id_trem)
);


CREATE TABLE notificacao(
    id_notificacao INT PRIMARY KEY AUTO_INCREMENT,
    assunto VARCHAR(45) NOT NULL,
    descricao VARCHAR(500) NOT NULL,
    estado ENUM('a fazer','fazendo','feito') NOT NULL,
    horario TIME NOT NULL,
    data_notificacao DATE NOT NULL,
    prioridade ENUM('baixa','media','alta') NOT NULL
);


CREATE TABLE sensor(
    id_sensor INT PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR (500) NOT NULL,
    sensor_status VARCHAR (200) NOT NULL
);


CREATE TABLE sensor_data(
    id_sensor_data INT PRIMARY KEY AUTO_INCREMENT,
    valor INT NOT NULL,
    data_hora TIMESTAMP,
    fk_id_sensor INT NOT NULL,
    FOREIGN KEY (fk_id_sensor) REFERENCES sensor(id_sensor)
);
