<?php

$header = 'Chats';
$id = $_GET['id'] ?? null;

if ($id == null) {
    abort();
}

$sql = 'SELECT * FROM chats WHERE kchat=:id';

$todo = db()
    ->query($sql, [
        'id' => $id,
    ])
    ->findOrFail();

view('todos/show.view.php', compact([
    'header',
    'chat',
    'id',
]));
