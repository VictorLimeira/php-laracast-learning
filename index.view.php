<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP learning</title>
	<style>
	header {
		background: #c9c9c9;
		padding: 2em;
		text-align: center;
	}
	</style>
</head>
<body>
    <header>
        <h1><?= $title ?></h1>
    </header>
    <ul>
        <?php foreach($task as $attribute => $value) : ?>
            <li> <strong><?= ucwords($attribute) ?></strong>: <?= $value ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <li>
            <strong>Task: </strong> <?= $task['description'] ?>
        </li>
        <li>
            <strong>Due Date: </strong> <?= $task['due'] ?>
        </li>
        <li>
            <strong>Responsible: </strong> <?= $task['assigned_to'] ?>
        </li>
        <li>
            <strong>Status: </strong> <?= $task['completed'] ? 'Completed' : 'Imcomplete' ?>
        </li>
    </ul>
</body>
</html>
