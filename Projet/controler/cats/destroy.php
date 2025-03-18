<?php

$id = $_POST['id'] ?? null;

$todo = db()->execute('DELETE FROM todos WHERE ktodo=:id', ['id' => $id]);

header('Location: /todos');