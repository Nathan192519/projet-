<?php

use Core\Database;

function dd($value)
{
    dump($value);

    exit();
}
function dump($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function uriIs($uri)
{
    return $_SERVER['REQUEST_URI'] == $uri;
}

function abort($code = 404, $msg = 'Page not found')
{
    http_response_code($code);
    include base_path('/view/error.view.php');
    exit();
}

function db(): Database
{
    $config = include base_path('config/app.php');
    $db = new Database($config['database']);

    return $db;
}

function base_path($path)
{
    return BASE_PATH.$path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    include base_path('view/'.$path);
}