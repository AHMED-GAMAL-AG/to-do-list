<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
</head>

<body>

    <form action="task/create" method="POST">
        <input type="text" name="description" placeholder="Enter a new task" />
        <input type="submit" value="save" />
    </form>

    <h1>Tasks</h1>
    <?php foreach ($tasks as $task) : ?>
        <ul>
            <li> <?= "{$task->description}" ?> </li>
        </ul>
    <?php endforeach; ?>
</body>

</html>