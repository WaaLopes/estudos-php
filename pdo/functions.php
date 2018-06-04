<?php

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function connectToDB() {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
    } catch (PDOException $e) {
        die($e->getMessage());
    }    
}