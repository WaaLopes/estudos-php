<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso Laracasts</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>
        Sobre a pessoa:
    </h2>
    <ul>
        <?php foreach ($person as $feature => $value) : ?>
            <li>
                <strong><?= ucwords($feature) ?>:</strong> <?= $value; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Tarefas de hoje:</h2>
    <ul>
        <li>
            <strong>Nome:</strong> <?= $task['titulo']; ?>
        </li>
        <li>
            <strong>Quando:</strong> <?= $task['quando']; ?>
        </li>
        <li>
            <strong>Por:</strong> <?= $task['quem_fara']; ?>
        </li>
        <!-- <li>
            <strong>Foi completa:</strong> <?= $task['completed'] ? 'sim' : 'não'; ?>
        </li> 
        
        <li>
            <strong>Foi completa:</strong>
            <?php if ($task['completed']) : ?>
                <span>
                    Sim
                </span>
            <?php else : ?>
                <span>
                    Não
                </span>
            <?php endif; ?>
        </li>-->
        
        <!-- Forma extensa de se fazer -->
        <li>
            <strong>Foi completa:</strong>
            <?php if ($task['completed']) {
                echo 'Sim';
            } else {
                echo 'Não';
            }
            ?>
        </li>
    </ul>
</body>
</html>