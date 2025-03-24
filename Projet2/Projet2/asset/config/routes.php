<?php

$router->get('/', 'index.php');
$router->get('/about', 'about/php');
$router->get('/us', 'team.php');
$router->get('/contact', 'contact.php');

$router->get('/cat', 'cat/index.php');
$router->get('/cat', 'cat/show.php');

$router->get('/cat/create', 'cat/create.php');
$router->post('/cat', 'cat/store.php');

$router->get('/cat/edit', 'cat/edit.php');
$router->put('/cat', 'cat/update.php');

$router->delete('/cat', 'cat/destroy.php');
