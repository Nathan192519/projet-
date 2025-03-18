<?php

namespace Core;

class Router
{
    private $routes = [];

    public function route()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
        $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes as $route) {
            if ($route['url'] === $uri && $route['method'] === $method) {
                include base_path("controller/{$route['ctrl']}");
                exit();
            }
        }

        abort();
    }

    public function get(string $url, string $ctrl): void
    {
        $this->addRoute($url, $ctrl, 'GET');
    }

    public function post(string $url, string $ctrl): void
    {
        $this->addRoute($url, $ctrl, 'POST');
    }

    public function put(string $url, string $ctrl): void
    {
        $this->addRoute($url, $ctrl, 'PUT');
    }

    public function patch(string $url, string $ctrl): void
    {
        $this->addRoute($url, $ctrl, 'PATCH');
    }

    public function delete(string $url, string $ctrl): void
    {
        $this->addRoute($url, $ctrl, 'DELETE');
    }

    private function addRoute(string $url, string $ctrl, string $method): void
    {
        $this->routes[] = [
            'url' => $url,
            'ctrl' => $ctrl,
            'method' => $method,
        ];
    }
}
