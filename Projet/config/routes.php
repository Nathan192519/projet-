<?php

/**
 * @var Router $router
 */
$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

$router->get('/todos', 'todos/index.php');
$router->get('/todo', 'todos/show.php');

$router->get('/todos/create', 'todos/create.php');
$router->post('/todos', 'todos/store.php');

$router->get('/todos/edit', 'todos/edit.php');
$router->put('/todos', 'todos/update.php');

$router->delete('/todos', 'todos/destroy.php');
