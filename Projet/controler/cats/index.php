<?php

$tartaampion = 'Mes todos';

$todos = db()
    ->query('select * from todos')
    ->get();

// include BASE_PATH.'view/todos/index.view.php';

view('todos/index.view.php', compact([
    'header' => ['tartaampion'],
    'todos',
]));