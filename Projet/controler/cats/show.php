<?php

$header = 'Todo';
$id = $_GET['id'] ?? null;

if ($id == null) {
    abort();
}

$sql = 'SELECT * FROM todos WHERE ktodo=:id';

$todo = db()
    ->query($sql, [
        'id' => $id,
    ])
    ->findOrFail();

view('todos/show.view.php', compact([
    'header',
    'todo',
    'id',
]));
