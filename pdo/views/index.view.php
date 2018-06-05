<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="sobre">Sobre mim</a></li>
            <li><a href="sobre/cultura">Sobre a cultura</a></li>
            <li><a href="contato">Contato</a></li>
        </ul>
    </nav>

    <h2>Lista de Tarefas (PDO):</h2>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completa) : ?>
                    <strike><?= $task->descricao ?></strike>
                <?php else : ?>
                    <?= $task->descricao ?>
                <?php endif; ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>