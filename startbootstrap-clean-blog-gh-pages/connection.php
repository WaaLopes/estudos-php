<?php

$localhost = "127.0.0.1";
$user = "root";
$password = "";
$database = "teste-php";

$mysqli = new mysqli($localhost, $user, $password,$database);

if ($mysqli->connect_error) {
    throw new Exception("Geen Databankconnectie");
}
?>