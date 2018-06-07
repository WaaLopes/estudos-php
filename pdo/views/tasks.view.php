<?php require ('partials/header.php') ?>

<h2>Lista de Tarefas:</h2>
<ul>
    <?php foreach ($listTasks as $task) : ?>
        <li>
            <?php if ($task->completa) : ?>
                <strike><?= $task->descricao ?></strike>
            <?php else : ?>
                <?= $task->descricao ?>
            <?php endif ?>
        </li>
    <?php endforeach; ?>
</ul>

<h2>Adicione uma tarefa:</h2>
<form action="/tasks" method="POST">
    <input type="text" name="task" placeholder="Tarefa" />
    <input type="submit" name="submit" value="Enviar" />
</form>

<?php require ('partials/footer.php') ?>