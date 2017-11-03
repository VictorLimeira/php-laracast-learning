<?php

$tasks = $query->queryAll('todos', 'Task');

require 'views/index.view.php';
