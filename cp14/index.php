<?php

require 'bootstrap.php';
require 'Task.php';

$tasks = $query->queryAll('todos', 'Task');

require 'index.view.php';
