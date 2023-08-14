<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{
    //    public function __construct() {
    //        echo 'Main.php';
    //        shoow($this->db);
    //    }
    public $error;

    public function getNews()
    {
        $result = $this->db->row("SELECT title, description FROM news");
        return $result;
    }

    public function contactValidate($post)
    {
        $nameLen = strlen($post["name"]);
        $textLen = strlen($post["text"]);
        if ($nameLen < 2 or $nameLen > 20) {
            $this->error = "Имя должно быть от 2 до 20 символов";
            return false;
        } elseif (!filter_var($post["email"], FILTER_VALIDATE_EMAIL)) {
            $this->error = "Неверный формат E-mail";
            return false;
        } elseif ($textLen < 10 or $textLen > 500) {
            $this->error = "Сообщение должно содержать от 10 до 500 символов";
            return false;
        }
        return true;
    }
}
