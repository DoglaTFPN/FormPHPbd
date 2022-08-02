DROP DATABASE IF EXISTS Atividade;

CREATE DATABASE Atividade;

Use Atividade;

create table Cadastro(
Codigo int not null primary key,
Nome varchar(15) not null,
Sobrenome varchar (15) not null,
Email varchar(50) not null,
CPF varchar(14) not null,
Sexo char(1) not null,
Usuario varchar(16) not null,
Senha varchar(50) not null
);