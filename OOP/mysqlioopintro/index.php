<?php
require_once "vendor/autoload.php";

use app\database\class_db;
class index{
    private $db;
    public function __construct(){
        $this->db = new class_db();

        $this->db->getallusers();

        $this->db->getsguser(1);

        $this->db->getusersbystatus(1);

//        $this->db->insertsguser("coco@gmail.com","123456",1);

        $users = [
            ["yoyo@gmail.com","123456",1],
            ["momo@gmail.com","123456",1],
            ["popo@gmail.com","123456",1],
            ["jojo@gmail.com","123456",1],
            ["vovo@gmail.com","123456",1],
        ];

//        $this->db->insertmultiusers($users);

//        $this->db->updateuser(1,2);

//        $this->db->deleteuser(14);
    }
}

$obj = new index();
?>
