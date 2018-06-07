<?php

$actualTask = $_POST['task'];

Task::insert($actualTask, $app['database']);

$listTasks = $app['database']->selectAll('tasks', 'Task');

require ('views/tasks.view.php');