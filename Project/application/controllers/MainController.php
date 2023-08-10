<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $vars = ['name' => 'Vasya',
        'age' => 25];
        shoow("Index");
        $this->view->render('Someting', $vars);
    }

}