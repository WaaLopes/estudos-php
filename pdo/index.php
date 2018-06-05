<?php

$database = require_once 'core/bootstrap.php';

$uri = Request::uri();

require Router::load('routes.php')
    ->direct($uri);