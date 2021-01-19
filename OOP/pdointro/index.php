<?php
require_once "vendor/autoload.php";

use app\database\class_db;

class index{
    private $db;

    public function __constuct(){
        $this->db = new class_db();
    }
}
$obj = new index();
?>
