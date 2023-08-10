<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{
    public function before () {
        $this->view->layout = "custom";
    }

    public function loginAction()
    {
        // shoow("Login");
        $this->view->render("Вход");
    }

    public function registerAction()
    {

        $this->view->render("Регистрация");
    }
}