<?php

if ($_POST['description'] != ''){
    $description = $_POST['description'];
    $query->addTask('todos', $description);
}

$tasks = $query->queryAll('todos', 'Task');

require 'views/index.view.php';
