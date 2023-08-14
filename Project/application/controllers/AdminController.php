<?php

namespace application\controllers;

use application\core\Controller;

class AdminController extends Controller
{
    public function __construct($route)
    {
        $_SESSION["admin"] = 1;
        parent::__construct($route);
        $this->view->layout = "admin";
    }

    public function loginAction()
    {
        $this->view->render("Вход");
    }

    public function addAction()
    {
        $this->view->render("Добавить пост");
    }

    public function editAction()
    {
        $this->view->render("Редактировать пост");
    }

    public function deleteAction()
    {
        exit("Delete");
    }

    public function logoutAction()
    {
        exit("Quit");
    }
}
