<?php require 'partials/head.php'; ?>

        <h1>Task Management</h1>

        <p>Submit a task:</p>

        <form class="" action="/names" method="POST">
          <input type="text" name="description" autofocus="autofocus" value=""></input>

          <button type="submit">Save Task</button>

        </form>

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

<?php require 'partials/footer.php'; ?>
