<?php

$query = require_once 'bootstrap.php';

require 'Task.php';

$results = $query->selectAll('tasks');

require 'index.view.php';
