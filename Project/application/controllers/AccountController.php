<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{
    public function loginAction()
    {
        shoow("Login");
    }

    public function registerAction()
    {
        echo "Register";
    }
}