<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{
    public function before()
    {
        $this->view->layout = "custom";
    }

    public function loginAction()
    {
        if (!empty($POST)) {
            exit(json_encode(["status" => "success", "message" => 123]));
        }
        $this->view->render("Вход");
    }

    public function registerAction()
    {
        $this->view->render("Регистрация");
    }
}
