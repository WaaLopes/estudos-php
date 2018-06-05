<?php

$router->define([
    '' => 'controllers/index.php',
    'sobre' => 'controllers/about.php',
    'sobre/cultura' => 'controllers/about-culture.php',
    'contato' => 'controllers/contact.php'
]);