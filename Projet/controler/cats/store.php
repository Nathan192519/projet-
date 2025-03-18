<?php

$header = 'Nouvelle todo';

$title = $_POST['title'];
$errors = [];

$validator = new  Core\Validator;

$validator->string($title);
if (! Validator) {
    $errors['title'] = 'Le champ doit être saisi !';
    view('todos/create.view.php', compact([
        'header',
        'errors',
    ]));
    exit();
}

$sql = 'INSERT INTO todos (title) VALUES (:title)';

db()->execute($sql, ['title' => $title]);

header('Location: /todos');
