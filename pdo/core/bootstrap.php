<?php

$app = [];
$app['config'] = require 'config.php';

$config = require 'config.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Router.php';
require 'core/functions.php';
require 'core/Task.php';
require 'core/Request.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
