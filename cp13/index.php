<?php

require 'functions.php';
require 'Task.php';

$pdo = connectDatabase();

$tasks = FetchAllTasks($pdo);

require 'index.view.php';
