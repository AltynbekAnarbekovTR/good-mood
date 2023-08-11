<?php

namespace application\core;

use application\lib\Db;

abstract class Model {

    public $db;

    public function __construct() {
        echo '123';
        $this->db = new Db;
    }
}