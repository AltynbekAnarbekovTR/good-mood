<?php

namespace application\models;

use application\core\Model;

class Main extends Model {
//    public function __construct() {
//        echo 'Main.php';
//        shoow($this->db);
//    }

    public function getNews() {
        shoow($this->db);
        $result = $this->db->row('SELECT title, description FROM news');
        return $result;
    }
}