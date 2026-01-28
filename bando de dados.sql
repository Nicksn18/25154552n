CREATE DATABASE extintores_db;
USE extintores_db;
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    senha VARCHAR(255) NOT NULL
);
CREATE TABLE empresas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cnpj VARCHAR(20) NOT NULL,
    telefone VARCHAR(20),
    email VARCHAR(50),
    despachante VARCHAR(50)
);
CREATE TABLE extintores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codigo VARCHAR(50),
    tipo VARCHAR(50),
    capacidade VARCHAR(50),
    fabricante VARCHAR(100),
    localizacao VARCHAR(100),
    validade DATE,
    ultima_inspecao DATE,
    condicao VARCHAR(50),
    observacoes TEXT
);

INSERT INTO usuarios (usuario, senha) VALUES ('admin', MD5('1234'));
USE extintores_db;
SELECT * FROM empresas;
