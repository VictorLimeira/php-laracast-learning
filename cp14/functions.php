<?php

function dumpp($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

function FetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
