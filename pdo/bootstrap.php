<?php

$config = require 'config.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'functions.php';

return $query = new QueryBuilder(
    Connection::make($config['database'])
);
