<?php

$router->get('', 'controllers/index.php');
$router->get('sobre', 'controllers/about.php');
$router->get('sobre/cultura', 'controllers/about-culture.php');
$router->get('contato', 'controllers/contact.php');
$router->post('tasks', 'controllers/add-task.php');