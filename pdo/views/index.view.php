<?php require ('partials/header.php') ?>

<h2>Adicione uma tarefa:</h2>
<form action="/tasks" method="POST">
    <input type="text" name="task" placeholder="Tarefa" />
    <input type="submit" name="submit" value="Enviar" />
</form>

<?php require ('partials/footer.php') ?>