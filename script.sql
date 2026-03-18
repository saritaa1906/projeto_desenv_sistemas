CREATE DATABASE projeto;

USE projeto;

CREATE TABLE aluno (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    idade INT
);

INSERT INTO aluno (nome, idade) VALUES ('Joao', 15);
INSERT INTO aluno (nome, idade) VALUES ('Marcelo', 17);
INSERT INTO aluno (nome, idade) VALUES ('Vitor', 28);
INSERT INTO aluno (nome, idade) VALUES ('Alex', 80);
INSERT INTO aluno (nome, idade) VALUES ('Sara', 19);

SELECT * FROM aluno;

drop table aluno;