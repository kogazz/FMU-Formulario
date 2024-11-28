CREATE DATABASE formulario;

USE formulario;

CREATE TABLE dados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    fone VARCHAR(20),
    hora_desejada TIME,
    dtnasc DATE,
    cor VARCHAR(7),
    filhos INT,
    peso FLOAT,
    sexo VARCHAR(10),
    estado VARCHAR(2),
    cep VARCHAR(9),
    num VARCHAR(10),
    msg TEXT,
    meios_transporte TEXT,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
