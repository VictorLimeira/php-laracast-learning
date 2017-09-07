<?php

require 'functions.php';

/**
 * First class
 */
class Task
{
    protected $description;
    protected $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function description()
    {
        return $this->description;
    }
}

$task = new Task('Go to the store');

$tasks = [
    new Task('Go to the farm'),
    new Task('Do the groceries')
];

$tasks[0]->complete();

require 'index.view.php';
