<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TASKS</title>
    </head>
    <body>
        <h1>TASKS list</h1>
        <ul>
            <?php foreach($tasks as $task) : ?>
                <li>
                    <?php if ($task->completed) : ?>
                        <strike><?= $task->description ?></strike>
                    <?php else : ?>
                        <?= $task->description ?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
