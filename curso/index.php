<?php 

$person = [
    'nome' => 'Wagner',
    'idade' => 19,
    'cargo' => 'Web Developer'
];

$task = [
    'titulo' => 'Acabar o para casa',
    'quando' => 'hoje',
    'quem_fara' => 'Wagner',
    'completed' => true
];

$person['cabelo'] = 'Castanho';

unset($person['idade']);

require_once 'index.view.php';