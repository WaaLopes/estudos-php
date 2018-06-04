<?php

require_once '../lesson10/functions.php';

class Task {
    protected $nome, $descricao, $quem, $quando, $completa = false;

    public function __construct($nome, $descricao, $quem, $quando) {
        // Ativa automaticamente ao criar instância
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->quem = $quem;
        $this->quando = $quando;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($novoNome) {
        $this->nome = $novoNome;
    }

    public function getDescricao() {
        return $this->descricao;
    }
    public function setDescricao($novaDescricao) {
        $this->descricao = $novaDescricao;
    }

    public function getQuem() {
        return $this->quem;
    }
    public function getQuando() {
        return $this->quando;
    }

    public function isCompleted() {
        return $this->completa;
    }
    public function completeTask() {
        $this->completa = true;
    }

    public function getStatus() {
        if (isCompleted()) {
            return "Tarefa já foi realizada.";
        } else {
            return "Tarefa ainda não realizada.";
        }
    }
}

$tasks = [
    new Task('Lavar a roupa', 'Lavar a roupa usando o sabão X.', 'Wagner', '04-06-2018'),
    new Task('Arrumar a cama', 'Arrumar a cama utilizando a roupa de cama Y.', 'Skett', '07-12-2018'),
    new Task('Lavar o carro', 'Lavar o carro e utilizar o produto Z nas rodas.', 'Renata', '06-06-2018')
];

require_once 'index.view.php';