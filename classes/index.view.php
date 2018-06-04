<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doidera</title>
</head>
<body>
    <h2>Lista de Tarefas com classe:</h2>
    <ul>
        <?php foreach($tasks as $task) : ?>
            <li style="padding-bottom: 15px;">
                <?= $task->getNome() . ': ' . $task->getDescricao() ?><br />
                Quem: <?= $task->getQuem() ?><br />
                Quando: <?= $task->getQuando() ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>