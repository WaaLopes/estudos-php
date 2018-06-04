<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToDB();
$statement = $pdo->prepare('SELECT * FROM tasks');
$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

require 'index.view.php';
