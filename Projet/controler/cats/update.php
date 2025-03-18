<?php

$header = 'Modifier la Todo';

$title = $_POST['title'];
$id = $_POST['id'];

$errors = [];

if (! $title) {
    $errors['title'] = 'Le champ doit être saisi !';

    $todo = db()
        ->query('SELECT * FROM todos WHERE ktodo=:id', ['id' => $id])
        ->findOrFail();

    view('todos/edit.view.php', compact([
        'header',
        'errors',
        'todo',
    ]));
    exit();
}

$sql = 'UPDATE todos SET title = :title WHERE ktodo=:id';
db()->execute($sql, ['id' => $id, 'title' => $title]);

header('Location: /todo?id='.$_POST['id']);