<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Lista de Tarefas (PDO):</h2>
    <ul>
        <?php foreach ($results as $task) : ?>
            <li>
                <h3><?= $task->titulo . ' (' . $task->id . ')' ?></h3>
                <p><?= $task->descricao ?></p>
                <p>Será realizado por <?= $task->quem ?> no dia <?= $task->quando ?>. </p>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>