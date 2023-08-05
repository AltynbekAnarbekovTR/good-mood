<?php

namespace application\core;

class Router
{
    protected $routes = [];
    protected $params = [];

    public function __construct()
    {
        echo "I'm Router <br>";
        $arr = require 'application/config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
    }

    public function add($route, $params)
    {
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }

    public function match()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        shoow('url: '. $url);
        foreach ($this->routes as $route => $params) {
            shoow($route);
            if (preg_match($route, $url, $matches)) {
                var_dump($matches);
            }
        }
    }

    public function run()
    {
        $this->match();
    }
}