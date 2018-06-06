<?php require ('partials/header.php') ?>

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

<?php require ('partials/footer.php') ?>