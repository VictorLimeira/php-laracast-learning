<?php

if ($_POST['description'] != ''){
    $description = $_POST['description'];
    App::get('database')->addTask('todos', $description);
}

header('Location: /');
