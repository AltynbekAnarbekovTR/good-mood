<?php

namespace application\controllers;

use application\core\Controller;
//use application\lib\Db;

class MainController extends Controller
{
    public function indexAction()
    {

//        $params = [
//            'id' => 2,
//        ];
//
//        $data = $db->column('SELECT name FROM users WHERE id = :id', $params);
//        shoow($data);

        $result = $this->model->getNews();
        $vars = [
            'news' => $result
        ];
        $this->view->render('Главная', $vars);
    }

}