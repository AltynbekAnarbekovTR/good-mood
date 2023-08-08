<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        shoow("Index");
        $this->view->render('Someting');
    }

}