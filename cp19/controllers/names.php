<?php

if ($_POST['description'] != ''){
    $description = $_POST['description'];
    $query->addTask('todos', $description);
}

header('Location: /');
