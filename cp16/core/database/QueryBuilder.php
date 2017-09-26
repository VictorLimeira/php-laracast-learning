<?php

/**
 * Build queries onto database
 */
class QueryBuilder
{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function queryAll($table_name, $into_class)
    {
        $statement = $this->pdo->prepare("select * from {$table_name}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $into_class);
    }
}
