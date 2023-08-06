<?php

namespace application\core;

class Router
{
    protected $routes = [];
    protected $params = [];

    public function __construct()
    {
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
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                var_dump($matches);
                return true;
            }

        }
        return false;
    }

    public function run()
    {
        if($this->match()) {
            shoow($this->params['controller']);
            shoow($this->params['action']);
            $path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller.php';
            shoow($path);
            if(class_exists($path)) {
                shoow('Class'.$path.'exists');
                $action = $this->params['action'].'Action';
                if(method_exists($path, $action)) {
                    $controller = new $path;
                    $controller->$action();
                } else {
                    shoow("Action not found");
                }
            } else {
                echo 'Class'.$path.'DOES NOT exists';
            }
        } else {
            shoow("Page not found");
        }
    }
}