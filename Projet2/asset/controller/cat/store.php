<?php

$header = 'Nouveau Chat';

$title = $_POST['title'];
$errors = [];

$validator = new  Core\Validator;

$validator->string($title);
if (! Validator) {
    $errors['title'] = 'Le champ doit être saisi !';
    view('cat/create.view.php', compact([
        'header',
        'errors',
    ]));
    exit();
}

$sql = 'INSERT INTO chats (title) VALUES (:title)';

db()->execute($sql, ['title' => $title]);

header('Location: /cat');
