-- Deleta o banco de dados caso exista
DROP DATABASE IF EXISTS PROJETOPRW;

-- Cria banco de dados caso não exista
CREATE DATABASE IF NOT EXISTS PROJETOPRW;

-- Seleciona o banco de dados
USE PROJETOPRW;

-- Cria tabela cidade
CREATE TABLE cidade
(
    id      INT AUTO_INCREMENT,
    nome    VARCHAR(100),
    estado  VARCHAR(002),
    PRIMARY KEY(id)
);

-- Cria tabela pessoa
CREATE TABLE pessoa
(
    id          INT AUTO_INCREMENT,
    nome        VARCHAR(100),
    email       VARCHAR(100),
    endereco    VARCHAR(100),
    bairro      VARCHAR(100),
    cep         VARCHAR(100),
    ativo bool,
    id_cidade   INT, 
    PRIMARY KEY(id),
    CONSTRAINT FK_PessoaCidade
        FOREIGN KEY (id_cidade) REFERENCES cidade(id)
);

-- Cria tabela animal
CREATE TABLE animal
(
    id          INT AUTO_INCREMENT,
    nome        VARCHAR(100),
    especie     VARCHAR(100),
    raca        VARCHAR(100),
    dt_nasc     DATE,
    castrado    BOOL,
    id_pessoa   INT, 
    PRIMARY KEY(id),
    CONSTRAINT FK_AnimalPessoa
        FOREIGN KEY (id_pessoa) REFERENCES pessoa(id)
);