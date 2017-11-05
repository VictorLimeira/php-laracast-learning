<?php

$config = require 'config.php';


$query = new QueryBuilder(Connection::make($config['database']));
