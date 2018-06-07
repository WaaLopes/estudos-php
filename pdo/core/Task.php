<?php

class Task {
    public $id, $descricao, $completa;

    public static function insert($descricao, $database) {
        $statement = $database->getPDO()->prepare("INSERT INTO tasks(descricao) VALUES('{$descricao}')");

        $statement->execute();

        return "Tarefa '{$descricao}' inserida com sucesso!";
    }
}