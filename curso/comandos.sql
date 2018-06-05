DROP DATABASE mytodo;

CREATE DATABASE mytodo;
USE mytodo;

CREATE TABLE tasks (
    id int NOT NULL AUTO_INCREMENT,
    descricao varchar(255) NOT NULL,
    completa BOOLEAN NOT NULL DEFAULT false,
    PRIMARY KEY (id)
);

INSERT INTO tasks(descricao) VALUES('Fazer o para casa');
INSERT INTO tasks(descricao, completa) VALUES('Lavar a cozinha', true);
INSERT INTO tasks(descricao) VALUES('Lavar o banheiro');
INSERT INTO tasks(descricao) VALUES('Aprender PHP');

SELECT * FROM tasks;