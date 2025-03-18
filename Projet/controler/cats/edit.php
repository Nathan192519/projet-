<?php

$header = 'Editer la todo';

$id = $_GET['id'] ?? null;

$todo = db()
    ->query('SELECT * FROM todos WHERE ktodo=:id', ['id' => $id])
    ->findOrFail();

view('todos/edit.view.php', compact([
    'header',
    'todo',
    'id',
]));