create database app;

use app;

create table funcionario(
    id_funcionario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(45),
    login VARCHAR(45),
    sexo VARCHAR(10),
    senha VARCHAR(10)
);