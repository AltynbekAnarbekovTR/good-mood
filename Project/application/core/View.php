<?php

namespace application\core;

class View
{
    public $path;
    public $layout = 'default';
    public $route;

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
    }

    public function render($title, $vars = []) {
        shoow($this->layout);
        require 'application/views/layouts/'.$this->layout.'.php';
    }
}