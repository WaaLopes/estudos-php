DROP DATABASE mytodo;

CREATE DATABASE mytodo;
USE mytodo;

CREATE TABLE tasks (
    id int NOT NULL AUTO_INCREMENT,
    titulo varchar(40) NOT NULL,
    descricao varchar(255) NOT NULL,
    quem varchar(40) NOT NULL,
    quando DATE NOT NULL,
    completa BOOLEAN NOT NULL DEFAULT false,
    PRIMARY KEY (id)
);

INSERT INTO tasks(titulo, descricao, quem, quando) VALUES('Fazer o para casa', 'Realizar os exercícios solicitados pela escola', 'Wagner', '2018-06-04');
INSERT INTO tasks(titulo, descricao, quem, quando) VALUES('Lavar a cozinha', 'Lavar a cozinha utilizando sabão e passando o pano de chão', 'Skett', '2018-06-05');
INSERT INTO tasks(titulo, descricao, quem, quando) VALUES('Lavar o banheiro', 'Lavar o banheiro todo, incluindo o box e a privada', 'Anne', '2018-06-06');

SELECT * FROM tasks;