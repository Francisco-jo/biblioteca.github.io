CREATE DATABASE IF NOT EXISTS biblioteca;
USE biblioteca;

CREATE TABLE livros (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(255),
  autor VARCHAR(255),
  genero VARCHAR(100),
  copias INT,
  ano INT
);

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255),
  email VARCHAR(255),
  telefone VARCHAR(20),
  cpf VARCHAR(20) UNIQUE,
  endereco VARCHAR(255),
  nascimento DATE
);


CREATE TABLE IF NOT EXISTS funcionarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255),
  email VARCHAR(255) UNIQUE,
  senha VARCHAR(255),
  telefone VARCHAR(20),
  cpf VARCHAR(20) UNIQUE,
  endereco VARCHAR(255),
  nascimento DATE
);
